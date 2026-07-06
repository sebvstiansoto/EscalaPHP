<?php

declare(strict_types=1);

namespace App;

class LessonCatalog
{
    /** @return list<array<string, mixed>> */
    public static function all(?string $courseSlug = null): array
    {
        if ($courseSlug !== null) {
            return CourseCatalog::lessonsForCourse($courseSlug);
        }

        $all = [];
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            $all = array_merge($all, CourseCatalog::lessonsForCourse($slug));
        }

        return $all;
    }

    /** @return array<string, mixed>|null */
    public static function find(string $slug, ?string $courseSlug = null): ?array
    {
        if ($courseSlug !== null) {
            foreach (CourseCatalog::lessonsForCourse($courseSlug) as $lesson) {
                if ($lesson['slug'] === $slug) {
                    return $lesson;
                }
            }

            return null;
        }

        foreach (CourseCatalog::courses() as $cSlug => $course) {
            foreach (CourseCatalog::lessonsForCourse($cSlug) as $lesson) {
                if ($lesson['slug'] === $slug) {
                    return $lesson;
                }
            }
        }

        return null;
    }

    /** @return array<string, mixed>|null */
    public static function project(string $slug): ?array
    {
        $projects = require __DIR__ . '/Data/projects.php';

        return $projects[$slug] ?? null;
    }

    /** @return array<string, array<string, mixed>> */
    public static function allProjects(): array
    {
        return require __DIR__ . '/Data/projects.php';
    }

    /** @return list<array<string, string>> */
    public static function glossary(): array
    {
        return require __DIR__ . '/Data/glossary.php';
    }

    /** @return array<string, string> */
    public static function glossaryCategories(): array
    {
        return require __DIR__ . '/Data/glossary/categories.php';
    }

    /**
     * @return array<string, list<array<string, string>>>
     */
    public static function glossaryGrouped(): array
    {
        $categories = self::glossaryCategories();
        $grouped = [];
        foreach (array_keys($categories) as $slug) {
            $grouped[$slug] = [];
        }
        foreach (self::glossary() as $term) {
            $cat = (string) ($term['category'] ?? 'fundamentos');
            if (!isset($grouped[$cat])) {
                $grouped[$cat] = [];
            }
            $grouped[$cat][] = $term;
        }

        return $grouped;
    }
}
