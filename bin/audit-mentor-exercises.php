<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$courses = App\CourseCatalog::courses();
$issues = [];

foreach ($courses as $courseSlug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }

    foreach (App\LessonCatalog::all($courseSlug) as $lesson) {
        $slug = (string) $lesson['slug'];
        $exerciseCount = count($lesson['exercises'] ?? []);
        if ($exerciseCount === 0) {
            continue;
        }

        $file = __DIR__ . '/../app/Data/mentor/' . $slug . '.php';
        if (!is_file($file)) {
            continue;
        }

        /** @var list<array<string, mixed>> $steps */
        $steps = require $file;
        $indices = [];
        foreach ($steps as $step) {
            if (($step['type'] ?? '') === 'exercise') {
                $indices[] = (int) ($step['exercise_index'] ?? -1);
            }
        }

        sort($indices);
        $expected = range(0, $exerciseCount - 1);
        if ($indices !== $expected) {
            $issues[] = [
                'course' => $courseSlug,
                'slug' => $slug,
                'catalog' => $exerciseCount,
                'mentor' => $indices,
            ];
        }
    }
}

echo count($issues) . " mentor files with exercise gaps\n";
foreach ($issues as $issue) {
    echo sprintf(
        "%s | %s | catalog=%d | mentor=[%s]\n",
        $issue['course'],
        $issue['slug'],
        $issue['catalog'],
        implode(',', $issue['mentor']),
    );
}
