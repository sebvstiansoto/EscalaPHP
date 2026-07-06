<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class LessonCmsService
{
    public function __construct(private PDO $pdo)
    {
    }

    /** @return list<array<string, mixed>> */
    public function allOverrides(): array
    {
        return $this->pdo->query('SELECT * FROM lesson_overrides ORDER BY updated_at DESC')->fetchAll();
    }

    /** @return array<string, mixed>|null */
    public function get(string $courseSlug, string $lessonSlug): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM lesson_overrides WHERE course_slug = ? AND lesson_slug = ?');
        $stmt->execute([$courseSlug, $lessonSlug]);

        return $stmt->fetch() ?: null;
    }

    public function save(string $courseSlug, string $lessonSlug, ?string $title, ?string $summary, ?string $exercisesJson, string $status = 'published'): void
    {
        $existing = $this->get($courseSlug, $lessonSlug);
        $version = $existing ? ((int) ($existing['version'] ?? 0)) + 1 : 1;
        $this->pdo->prepare(
            'INSERT INTO lesson_overrides (course_slug, lesson_slug, title, summary, exercises_json, status, version, updated_at)
             VALUES (?, ?, ?, ?, ?, ?, ?, ?)
             ON CONFLICT(course_slug, lesson_slug) DO UPDATE SET
             title = excluded.title, summary = excluded.summary, exercises_json = excluded.exercises_json,
             status = excluded.status, version = excluded.version, updated_at = excluded.updated_at'
        )->execute([$courseSlug, $lessonSlug, $title, $summary, $exercisesJson, $status, $version, date('c')]);
    }

    /** @param array<string, mixed> $lesson */
    public function mergeLesson(array $lesson, string $courseSlug): array
    {
        $override = $this->get($courseSlug, (string) ($lesson['slug'] ?? ''));
        if (!$override || ($override['status'] ?? '') === 'draft') {
            return $lesson;
        }
        if ($override['title'] ?? null) {
            $lesson['title'] = $override['title'];
        }
        if ($override['summary'] ?? null) {
            $lesson['summary'] = $override['summary'];
        }
        if ($override['exercises_json'] ?? null) {
            $decoded = json_decode((string) $override['exercises_json'], true);
            if (is_array($decoded)) {
                $lesson['exercises'] = $decoded;
            }
        }

        return $lesson;
    }
}
