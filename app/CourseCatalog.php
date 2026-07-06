<?php

declare(strict_types=1);

namespace App;

use App\Services\LessonEnrichment;

class CourseCatalog
{
    /** @var array{categories: list<array<string, mixed>>, courses: array<string, array<string, mixed>>}|null */
    private static ?array $data = null;

    /** @return array{categories: list<array<string, mixed>>, courses: array<string, array<string, mixed>>} */
    private static function data(): array
    {
        if (self::$data === null) {
            /** @var array{categories: list<array<string, mixed>>, courses: array<string, array<string, mixed>>} $data */
            $data = require __DIR__ . '/Data/catalog.php';
            self::$data = $data;
        }

        return self::$data;
    }

    /** @return list<array<string, mixed>> */
    public static function categories(): array
    {
        return self::data()['categories'];
    }

    /** @return array<string, array<string, mixed>> */
    public static function courses(): array
    {
        return self::data()['courses'];
    }

    /** @return array<string, mixed>|null */
    public static function course(string $slug): ?array
    {
        return self::courses()[$slug] ?? null;
    }

    /** @return list<array<string, mixed>> */
    public static function coursesInCategory(string $categorySlug): array
    {
        $out = [];
        foreach (self::courses() as $course) {
            if (($course['category'] ?? '') === $categorySlug) {
                $out[] = $course;
            }
        }

        return $out;
    }

    /** @return list<array<string, mixed>> */
    public static function lessonsForCourse(string $courseSlug): array
    {
        $course = self::course($courseSlug);
        if ($course === null) {
            return [];
        }

        $file = (string) ($course['lessons'] ?? '');
        $path = str_contains($file, '/')
            ? __DIR__ . '/Data/' . $file
            : __DIR__ . '/Data/' . $file;

        if (!is_file($path)) {
            return [];
        }

        /** @var list<array<string, mixed>> $lessons */
        $lessons = require $path;

        return array_map(
            static fn (array $lesson): array => LessonEnrichment::enrich(
                $lesson + ['course' => $courseSlug],
                $courseSlug,
            ),
            $lessons,
        );
    }

    /** @return list<array<string, mixed>> */
    public static function roadmapForCourse(string $courseSlug): array
    {
        $lessons = self::lessonsForCourse($courseSlug);
        if ($lessons !== []) {
            return $lessons;
        }

        $course = self::course($courseSlug);
        if ($course === null) {
            return [];
        }

        /** @var list<array<string, mixed>> $roadmap */
        $roadmap = $course['roadmap'] ?? [];

        return array_map(
            static fn (array $module, int $i): array => $module + [
                'course' => $courseSlug,
                'order' => $i + 1,
                'placeholder' => true,
            ],
            $roadmap,
            array_keys($roadmap),
        );
    }

    public static function isAvailable(string $courseSlug): bool
    {
        $course = self::course($courseSlug);

        return $course !== null && ($course['status'] ?? '') === 'available';
    }

    /** @return list<string> */
    public static function requirementsMet(string $courseSlug, ProgressRepository $progress): array
    {
        $course = self::course($courseSlug);
        if ($course === null) {
            return ['Curso no encontrado'];
        }

        $missing = [];
        foreach ($course['requires'] ?? [] as $requiredSlug) {
            $requiredLessons = self::lessonsForCourse($requiredSlug);
            if ($requiredLessons === []) {
                continue;
            }
            $total = count($requiredLessons);
            $done = 0;
            foreach ($requiredLessons as $lesson) {
                if ($progress->isLessonCompleted($requiredSlug, (string) $lesson['slug'])) {
                    $done++;
                }
            }
            if ($done < $total) {
                $reqCourse = self::course($requiredSlug);
                $missing[] = (string) ($reqCourse['title'] ?? $requiredSlug);
            }
        }

        return $missing;
    }
}
