<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class ProjectService
{
    public function __construct(
        private PDO $pdo,
        private Gamification $gamification,
        private LearnerContext $context,
    ) {
    }

    public function isCompleted(string $lessonSlug): bool
    {
        [$where, $params] = $this->filter();
        $stmt = $this->pdo->prepare(
            "SELECT id FROM project_completions WHERE {$where} AND lesson_slug = ?"
        );
        $stmt->execute([...$params, $lessonSlug]);

        return (bool) $stmt->fetch();
    }

    /** @return list<string> */
    public function completedSlugs(): array
    {
        [$where, $params] = $this->filter();
        $stmt = $this->pdo->prepare(
            "SELECT lesson_slug FROM project_completions WHERE {$where} ORDER BY completed_at"
        );
        $stmt->execute($params);

        return array_column($stmt->fetchAll(), 'lesson_slug');
    }

    public function complete(string $lessonSlug, int $rewardXp): bool
    {
        if ($this->isCompleted($lessonSlug)) {
            return false;
        }

        $stmt = $this->pdo->prepare(
            'INSERT INTO project_completions (session_id, user_id, lesson_slug, completed_at) VALUES (?, ?, ?, ?)'
        );
        $stmt->execute([
            $this->context->sessionId(),
            $this->context->userId(),
            $lessonSlug,
            date('c'),
        ]);
        $this->gamification->addXp($rewardXp, 'Mini-proyecto completado');

        return true;
    }

    /** @return array{0: string, 1: list<mixed>} */
    private function filter(): array
    {
        if ($this->context->userId() !== null) {
            return ['user_id = ?', [$this->context->userId()]];
        }

        return ['session_id = ? AND (user_id IS NULL OR user_id = 0)', [$this->context->sessionId()]];
    }
}
