<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use PDO;

class CourseCmsService
{
    public function __construct(private PDO $pdo)
    {
    }

    /** @return array<string, array<string, mixed>> */
    public function coursesWithOverrides(): array
    {
        $courses = CourseCatalog::courses();
        $overrides = $this->pdo->query('SELECT * FROM course_overrides')->fetchAll();
        $bySlug = [];
        foreach ($overrides as $row) {
            $bySlug[(string) $row['slug']] = $row;
        }

        foreach ($courses as $slug => &$course) {
            if (isset($bySlug[$slug])) {
                $o = $bySlug[$slug];
                if ($o['title'] ?? null) {
                    $course['title'] = $o['title'];
                }
                if ($o['status'] ?? null) {
                    $course['status'] = $o['status'];
                }
                if ($o['featured'] !== null) {
                    $course['featured'] = (int) $o['featured'] === 1;
                }
            }
            $course['slug'] = $slug;
        }

        return $courses;
    }

    public function saveOverride(string $slug, ?string $title, ?string $status, ?bool $featured): void
    {
        $this->pdo->prepare(
            'INSERT INTO course_overrides (slug, title, status, featured, updated_at)
             VALUES (?, ?, ?, ?, ?)
             ON CONFLICT(slug) DO UPDATE SET
             title = excluded.title, status = excluded.status, featured = excluded.featured, updated_at = excluded.updated_at'
        )->execute([
            $slug,
            $title,
            $status,
            $featured === null ? null : ($featured ? 1 : 0),
            date('c'),
        ]);
    }
}
