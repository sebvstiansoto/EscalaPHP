<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class CodeHistoryService
{
    public function __construct(private PDO $pdo, private LearnerContext $context)
    {
    }

    public function save(string $language, string $code, string $output = '', ?string $courseSlug = null, ?string $lessonSlug = null): int
    {
        $this->pdo->prepare(
            'INSERT INTO code_snapshots (user_id, session_id, language, code, output, course_slug, lesson_slug, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        )->execute([
            $this->context->userId(),
            $this->context->sessionId(),
            $language,
            $code,
            $output,
            $courseSlug,
            $lessonSlug,
            date('c'),
        ]);

        return (int) $this->pdo->lastInsertId();
    }

    /** @return list<array<string, mixed>> */
    public function recent(int $limit = 20): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, language, code, output, course_slug, lesson_slug, created_at FROM code_snapshots WHERE session_id = ? ORDER BY created_at DESC LIMIT ?'
        );
        $stmt->bindValue(1, $this->context->sessionId());
        $stmt->bindValue(2, $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /** @return array<string, mixed>|null */
    public function find(int $id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM code_snapshots WHERE id = ? AND session_id = ?');
        $stmt->execute([$id, $this->context->sessionId()]);

        return $stmt->fetch() ?: null;
    }
}
