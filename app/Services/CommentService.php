<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class CommentService
{
    public function __construct(private PDO $pdo, private LearnerContext $context, private Gamification $gamification)
    {
    }

    /** @return list<array<string, mixed>> */
    public function forEntity(string $type, string $id): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM comments WHERE entity_type = ? AND entity_id = ? ORDER BY created_at ASC LIMIT 50'
        );
        $stmt->execute([$type, $id]);

        return $stmt->fetchAll();
    }

    public function add(string $type, string $id, string $body, ?int $parentId = null): bool
    {
        $body = trim($body);
        if ($body === '' || mb_strlen($body) > 2000) {
            return false;
        }
        $profile = $this->gamification->profile();
        $this->pdo->prepare(
            'INSERT INTO comments (entity_type, entity_id, user_id, session_id, display_name, body, parent_id, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        )->execute([
            $type,
            $id,
            $this->context->userId(),
            $this->context->sessionId(),
            (string) ($profile['display_name'] ?? 'Aprendiz'),
            $body,
            $parentId,
            date('c'),
        ]);

        return true;
    }
}
