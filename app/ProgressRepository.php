<?php

declare(strict_types=1);

namespace App;

use App\Services\LearnerContext;
use PDO;

class ProgressRepository
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
    ) {
    }

    public function sessionId(): string
    {
        return $this->context->sessionId();
    }

    /** @return array<string, array<string, mixed>> keyed by lesson_slug within course */
    public function allForCourse(string $courseSlug): array
    {
        [$where, $params] = $this->context->progressFilter();
        $stmt = $this->pdo->prepare("SELECT * FROM progress WHERE {$where} AND course_slug = ?");
        $stmt->execute([...$params, $courseSlug]);

        $rows = [];
        foreach ($stmt->fetchAll() as $row) {
            $rows[$row['lesson_slug']] = $row;
        }

        return $rows;
    }

    /** @return array<string, array<string, mixed>> keyed by lesson_slug (legacy — all courses) */
    public function allForSession(): array
    {
        [$where, $params] = $this->context->progressFilter();
        $stmt = $this->pdo->prepare("SELECT * FROM progress WHERE {$where}");
        $stmt->execute($params);

        $rows = [];
        foreach ($stmt->fetchAll() as $row) {
            $key = ($row['course_slug'] ?? 'php-fundamentos') . ':' . $row['lesson_slug'];
            $rows[$key] = $row;
            $rows[$row['lesson_slug']] = $row;
        }

        return $rows;
    }

    public function isLessonUnlocked(string $courseSlug, string $slug, int $order): bool
    {
        if ($order === 1) {
            return true;
        }

        $lessons = LessonCatalog::all($courseSlug);
        $previous = null;
        foreach ($lessons as $lesson) {
            if ($lesson['slug'] === $slug) {
                break;
            }
            $previous = $lesson;
        }

        if ($previous === null) {
            return true;
        }

        return $this->isLessonCompleted($courseSlug, (string) $previous['slug']);
    }

    public function markExercise(string $courseSlug, string $lessonSlug, int $exerciseIndex, bool $completed): void
    {
        $now = date('c');
        [$where, $params] = $this->context->progressFilter();
        $stmt = $this->pdo->prepare("SELECT id FROM progress WHERE {$where} AND course_slug = ? AND lesson_slug = ?");
        $stmt->execute([...$params, $courseSlug, $lessonSlug]);
        $existing = $stmt->fetch();

        if ($existing) {
            $upd = $this->pdo->prepare(
                'UPDATE progress SET exercise_index = ?, completed = ?, updated_at = ? WHERE id = ?'
            );
            $upd->execute([$exerciseIndex, $completed ? 1 : 0, $now, $existing['id']]);
            return;
        }

        $ins = $this->pdo->prepare(
            'INSERT INTO progress (session_id, user_id, course_slug, lesson_slug, exercise_index, completed, updated_at)
             VALUES (?, ?, ?, ?, ?, ?, ?)'
        );
        $ins->execute([
            $this->context->sessionId(),
            $this->context->userId(),
            $courseSlug,
            $lessonSlug,
            $exerciseIndex,
            $completed ? 1 : 0,
            $now,
        ]);
    }

    public function completedCount(?string $courseSlug = null): int
    {
        [$where, $params] = $this->context->progressFilter();
        $sql = "SELECT COUNT(*) FROM progress WHERE {$where} AND completed = 1";
        if ($courseSlug !== null) {
            $sql .= ' AND course_slug = ?';
            $params = [...$params, $courseSlug];
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);

        return (int) $stmt->fetchColumn();
    }

    public function isLessonCompleted(string $courseSlug, string $slug): bool
    {
        [$where, $params] = $this->context->progressFilter();
        $stmt = $this->pdo->prepare("SELECT completed FROM progress WHERE {$where} AND course_slug = ? AND lesson_slug = ?");
        $stmt->execute([...$params, $courseSlug, $slug]);
        $row = $stmt->fetch();

        return $row && (int) $row['completed'] === 1;
    }

    /** @return list<array<string, mixed>> */
    public function dueForReview(int $daysSince = 3, ?string $courseSlug = null): array
    {
        $cutoff = date('c', strtotime("-{$daysSince} days"));
        [$where, $params] = $this->context->progressFilter();
        $sql = "SELECT course_slug, lesson_slug, updated_at FROM progress WHERE {$where} AND completed = 1 AND updated_at <= ?";
        if ($courseSlug !== null) {
            $sql .= ' AND course_slug = ?';
            $params = [...$params, $cutoff, $courseSlug];
        } else {
            $params = [...$params, $cutoff];
        }
        $sql .= ' ORDER BY updated_at ASC LIMIT 3';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll();
    }
}
