<?php

declare(strict_types=1);

/**
 * Genera mini-proyectos para lecciones sin entrada en projects.php.
 * Uso: php tools/generate-projects.php [--dry-run]
 */

$root = dirname(__DIR__);
$dryRun = in_array('--dry-run', $argv ?? [], true);

$projects = require $root . '/app/Data/projects.php';
$cat = require $root . '/app/Data/catalog.php';
$added = 0;

foreach ($cat['courses'] as $courseSlug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }

    $lessons = require $root . '/app/Data/' . $course['lessons'];
    $runtime = (string) ($course['runtime'] ?? 'php');

    foreach ($lessons as $lesson) {
        $slug = (string) $lesson['slug'];
        if (isset($projects[$slug])) {
            continue;
        }

        $title = (string) ($lesson['title'] ?? $slug);
        $exercises = (array) ($lesson['exercises'] ?? []);
        $validation = buildValidation($exercises, $runtime, $slug);

        $projects[$slug] = [
            'title' => 'Práctica: ' . $title,
            'description' => 'Consolida «' . $title . '» con un ejercicio hands-on.',
            'reward_xp' => pickXp($lesson),
            'validation' => $validation,
        ];
        $added++;
    }
}

if ($dryRun) {
    echo "Dry run: would add {$added} projects.\n";
    exit(0);
}

$export = exportProjects($projects);
$php = "<?php\n\ndeclare(strict_types=1);\n\nreturn {$export};\n";
file_put_contents($root . '/app/Data/projects.php', $php);
echo "Added {$added} mini-proyectos. Total: " . count($projects) . "\n";

/** @param list<array<string, mixed>> $exercises */
function buildValidation(array $exercises, string $runtime, string $slug): array
{
    foreach ($exercises as $exercise) {
        $type = (string) ($exercise['type'] ?? '');
        if ($type === 'contains' && !empty($exercise['must_contain'])) {
            $must = array_map('strval', (array) $exercise['must_contain']);

            return ['type' => 'contains', 'must_contain' => array_slice($must, 0, 3)];
        }
        if ($type === 'code' && !empty($exercise['expected_output'])) {
            return [
                'type' => 'code',
                'expected_output' => (string) $exercise['expected_output'],
            ];
        }
        if ($type === 'js' && !empty($exercise['expected_output'])) {
            return [
                'type' => 'contains',
                'must_contain' => array_filter(explode("\n", (string) ($exercise['hint'] ?? 'console.log'))),
            ];
        }
    }

    if (in_array($runtime, ['shell', 'yaml'], true) || str_starts_with($slug, 'ca-') || str_starts_with($slug, 'azc-') || str_starts_with($slug, 'ck-')) {
        return ['type' => 'honor'];
    }

    $answer = '';
    foreach ($exercises as $exercise) {
        if (($exercise['type'] ?? '') === 'choice' && !empty($exercise['answer'])) {
            $answer = strtolower((string) $exercise['answer']);
            break;
        }
    }

    if ($answer !== '' && strlen($answer) >= 3) {
        $token = strtok($answer, ' ');
        if (is_string($token) && strlen($token) >= 3) {
            return ['type' => 'contains', 'must_contain' => [$token]];
        }
    }

    return ['type' => 'honor'];
}

/** @param array<string, mixed> $lesson */
function pickXp(array $lesson): int
{
    $level = (string) ($lesson['level'] ?? '');
    if (str_contains($level, 'Avanzado') || str_contains($level, 'Producción')) {
        return 70;
    }
    if (str_contains($level, 'Intermedio')) {
        return 60;
    }

    return 50;
}

/** @param array<string, array<string, mixed>> $projects */
function exportProjects(array $projects): string
{
    $lines = ["[\n"];
    foreach ($projects as $key => $project) {
        $lines[] = "    " . var_export($key, true) . ' => ' . var_export($project, true) . ",\n";
    }
    $lines[] = "];\n";

    return implode('', $lines);
}
