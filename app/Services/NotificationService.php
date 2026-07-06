<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class NotificationService
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
    ) {
    }

    public function create(string $type, string $title, string $body): void
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO notifications (user_id, session_id, type, title, body, created_at) VALUES (?, ?, ?, ?, ?, ?)'
        );
        $stmt->execute([
            $this->context->userId(),
            $this->context->sessionId(),
            $type,
            $title,
            $body,
            date('c'),
        ]);
    }

    /** @return list<array<string, mixed>> */
    public function unread(): array
    {
        [$where, $params] = $this->filter();
        $stmt = $this->pdo->prepare(
            "SELECT * FROM notifications WHERE {$where} AND read_at IS NULL ORDER BY created_at DESC LIMIT 20"
        );
        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function unreadCount(): int
    {
        [$where, $params] = $this->filter();
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM notifications WHERE {$where} AND read_at IS NULL");
        $stmt->execute($params);

        return (int) $stmt->fetchColumn();
    }

    public function markRead(int $id): void
    {
        [$where, $params] = $this->filter();
        $stmt = $this->pdo->prepare("UPDATE notifications SET read_at = ? WHERE id = ? AND {$where}");
        $stmt->execute([date('c'), $id, ...$params]);
    }

    public function markAllRead(): void
    {
        [$where, $params] = $this->filter();
        $stmt = $this->pdo->prepare("UPDATE notifications SET read_at = ? WHERE {$where} AND read_at IS NULL");
        $stmt->execute([date('c'), ...$params]);
    }

    /** @return array{0: string, 1: list<mixed>} */
    private function filter(): array
    {
        if ($this->context->userId() !== null) {
            return ['user_id = ?', [$this->context->userId()]];
        }

        return ['session_id = ? AND user_id IS NULL', [$this->context->sessionId()]];
    }
}
