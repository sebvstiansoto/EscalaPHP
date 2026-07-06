<?php

declare(strict_types=1);

namespace App\Services;

use App\ProgressRepository;

class LearningPathService
{
    /** @return array<string, array<string, mixed>> */
    public function all(): array
    {
        return require __DIR__ . '/../Data/learning_paths.php';
    }

    public function saveSelection(string $pathSlug, LearnerContext $context): void
    {
        $pdo = $context->pdo();
        $pdo->prepare('INSERT INTO learner_paths (user_id, session_id, path_slug, selected_at) VALUES (?, ?, ?, ?)')
            ->execute([$context->userId(), $context->sessionId(), $pathSlug, date('c')]);
        if ($context->userId()) {
            $pdo->prepare('UPDATE users SET learning_path = ? WHERE id = ?')
                ->execute([$pathSlug, $context->userId()]);
        }
    }

    public function selected(LearnerContext $context): ?string
    {
        if ($context->userId()) {
            $stmt = $context->pdo()->prepare('SELECT learning_path FROM users WHERE id = ?');
            $stmt->execute([$context->userId()]);

            return $stmt->fetchColumn() ?: null;
        }

        $stmt = $context->pdo()->prepare(
            'SELECT path_slug FROM learner_paths WHERE session_id = ? ORDER BY selected_at DESC LIMIT 1'
        );
        $stmt->execute([$context->sessionId()]);

        return $stmt->fetchColumn() ?: null;
    }

    /** @return array{course: string, slug: string, title: string, path?: string}|null */
    public function continueLesson(ProgressRepository $progress, ?string $pathSlug = null): ?array
    {
        $paths = $this->all();
        $ordered = $pathSlug && isset($paths[$pathSlug])
            ? [$paths[$pathSlug]]
            : array_values($paths);

        foreach ($ordered as $path) {
            foreach ($path['courses'] as $courseSlug) {
                $lessons = \App\CourseCatalog::lessonsForCourse($courseSlug);
                foreach ($lessons as $lesson) {
                    if (!$progress->isLessonCompleted($courseSlug, (string) $lesson['slug'])) {
                        return [
                            'course' => $courseSlug,
                            'slug' => (string) $lesson['slug'],
                            'title' => (string) $lesson['title'],
                            'path' => (string) ($path['slug'] ?? ''),
                        ];
                    }
                }
            }
        }

        return null;
    }

    /** @return array{completed: int, total: int, percent: int, done: bool} */
    public function progressForPath(ProgressRepository $progress, string $pathSlug): array
    {
        $paths = $this->all();
        if (!isset($paths[$pathSlug])) {
            return ['completed' => 0, 'total' => 0, 'percent' => 0, 'done' => false];
        }

        $total = 0;
        $completed = 0;
        foreach ($paths[$pathSlug]['courses'] as $courseSlug) {
            $lessons = \App\CourseCatalog::lessonsForCourse($courseSlug);
            foreach ($lessons as $lesson) {
                $total++;
                if ($progress->isLessonCompleted($courseSlug, (string) $lesson['slug'])) {
                    $completed++;
                }
            }
        }

        return [
            'completed' => $completed,
            'total' => $total,
            'percent' => $total > 0 ? (int) round(($completed / $total) * 100) : 0,
            'done' => $total > 0 && $completed >= $total,
        ];
    }

    public function isPathComplete(ProgressRepository $progress, string $pathSlug): bool
    {
        return $this->progressForPath($progress, $pathSlug)['done'];
    }

    /** @return list<string> */
    public function completedPaths(ProgressRepository $progress): array
    {
        $done = [];
        foreach ($this->all() as $path) {
            $slug = (string) ($path['slug'] ?? '');
            if ($slug !== '' && $this->isPathComplete($progress, $slug)) {
                $done[] = $slug;
            }
        }

        return $done;
    }
}
