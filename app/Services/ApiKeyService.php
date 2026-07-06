<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class ApiKeyService
{
    public function __construct(private PDO $pdo)
    {
    }

    public function create(int $userId, string $name): string
    {
        $key = 'esk_' . bin2hex(random_bytes(24));
        $hash = hash('sha256', $key);
        $this->pdo->prepare('INSERT INTO api_keys (user_id, name, key_hash, created_at) VALUES (?, ?, ?, ?)')
            ->execute([$userId, $name, $hash, date('c')]);

        return $key;
    }

    /** @return list<array<string, mixed>> */
    public function listForUser(int $userId): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, name, last_used_at, created_at FROM api_keys WHERE user_id = ? ORDER BY created_at DESC'
        );
        $stmt->execute([$userId]);

        return $stmt->fetchAll();
    }

    public function revoke(int $userId, int $keyId): void
    {
        $this->pdo->prepare('DELETE FROM api_keys WHERE id = ? AND user_id = ?')->execute([$keyId, $userId]);
    }

    /** @return array<string, mixed>|null */
    public function authenticate(string $apiKey): ?array
    {
        if (!str_starts_with($apiKey, 'esk_')) {
            return null;
        }

        $hash = hash('sha256', $apiKey);
        $stmt = $this->pdo->prepare('SELECT * FROM api_keys WHERE key_hash = ?');
        $stmt->execute([$hash]);
        $row = $stmt->fetch();
        if (!$row) {
            return null;
        }

        $this->pdo->prepare('UPDATE api_keys SET last_used_at = ? WHERE id = ?')
            ->execute([date('c'), $row['id']]);

        return $row;
    }
}
