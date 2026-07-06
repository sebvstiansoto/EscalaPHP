<?php

declare(strict_types=1);

/**
 * Añade al archivo de mentor los ejercicios del catálogo que falten.
 * Uso: php tools/patch-mentor-exercises.php [--dry-run]
 */

$root = dirname(__DIR__);
require $root . '/vendor/autoload.php';

use App\CourseCatalog;
use App\Services\AcademicMentorBuilder;

$dryRun = in_array('--dry-run', $argv ?? [], true);
$mentorDir = $root . '/app/Data/mentor';
$patched = 0;
$skipped = 0;
$issues = [];

foreach (CourseCatalog::courses() as $courseSlug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }

    foreach (CourseCatalog::lessonsForCourse($courseSlug) as $lesson) {
        $slug = (string) $lesson['slug'];
        $exerciseCount = count($lesson['exercises'] ?? []);
        if ($exerciseCount === 0) {
            continue;
        }

        $target = $mentorDir . '/' . $slug . '.php';
        if (!is_file($target)) {
            continue;
        }

        /** @var list<array<string, mixed>> $steps */
        $steps = require $target;
        $merged = AcademicMentorBuilder::normalizeExerciseSteps($slug, $steps);

        $before = selfCountExerciseIndices($steps);
        $after = selfCountExerciseIndices($merged);

        if ($before === $after) {
            $skipped++;
            continue;
        }

        $issues[] = sprintf('%s (%s): [%s] → [%s]', $courseSlug, $slug, implode(',', $before), implode(',', $after));

        if ($dryRun) {
            $patched++;
            continue;
        }

        $export = var_export($merged, true);
        $php = "<?php\n\ndeclare(strict_types=1);\n\nreturn {$export};\n";
        file_put_contents($target, $php);
        $patched++;
    }
}

echo ($dryRun ? 'Would patch' : 'Patched') . ": {$patched} mentors, skipped: {$skipped}\n";
foreach ($issues as $line) {
    echo "  - {$line}\n";
}

/** @param list<array<string, mixed>> $steps */
function selfCountExerciseIndices(array $steps): array
{
    $indices = [];
    foreach ($steps as $step) {
        if (($step['type'] ?? '') === 'exercise') {
            $indices[] = (int) ($step['exercise_index'] ?? -1);
        }
    }

    sort($indices);

    return $indices;
}
