<?php

declare(strict_types=1);

/**
 * Adds time_minutes and simulation flag to all exams.
 */

$root = dirname(__DIR__);
$file = $root . '/app/Data/exams.php';
/** @var array<string, array<string, mixed>> $exams */
$exams = require $file;

$certTimes = [
    'cert-aws-saa-final' => 45,
    'cert-cka-final' => 60,
    'cert-azure-fund-final' => 30,
];

$updated = 0;
foreach ($exams as $slug => &$exam) {
    $qCount = count($exam['questions'] ?? []);
    $course = (string) ($exam['course'] ?? '');

    if (!isset($exam['time_minutes'])) {
        if (isset($certTimes[$slug])) {
            $exam['time_minutes'] = $certTimes[$slug];
        } else {
            $exam['time_minutes'] = max(20, min(45, (int) ceil($qCount * 4)));
        }
        $updated++;
    }

    if (str_starts_with($course, 'cert-') && empty($exam['simulation'])) {
        $exam['simulation'] = true;
        $updated++;
    }
}
unset($exam);

$export = var_export($exams, true);
file_put_contents($file, "<?php\n\ndeclare(strict_types=1);\n\nreturn {$export};\n");
echo "Updated exam timers/simulation flags ({$updated} changes).\n";
