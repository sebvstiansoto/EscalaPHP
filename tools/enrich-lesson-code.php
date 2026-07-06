<?php

declare(strict_types=1);

/**
 * Añade bloques 'code' a sections que no tienen, usando hints de ejercicios o snippets por runtime.
 * Uso: php tools/enrich-lesson-code.php [--course=slug] [--dry-run]
 */

$root = dirname(__DIR__);
$onlyCourse = null;
$dryRun = false;
foreach ($argv ?? [] as $arg) {
    if (str_starts_with($arg, '--course=')) {
        $onlyCourse = substr($arg, 9);
    }
    if ($arg === '--dry-run') {
        $dryRun = true;
    }
}

$cat = require $root . '/app/Data/catalog.php';
$updatedLessons = 0;
$updatedSections = 0;

foreach ($cat['courses'] as $courseSlug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }
    if ($onlyCourse !== null && $courseSlug !== $onlyCourse) {
        continue;
    }

    $file = $root . '/app/Data/' . $course['lessons'];
    if (!is_file($file)) {
        continue;
    }

    /** @var list<array<string, mixed>> $lessons */
    $lessons = require $file;
    $runtime = (string) ($course['runtime'] ?? 'php');
    $changed = false;

    foreach ($lessons as &$lesson) {
        $sections = (array) ($lesson['sections'] ?? []);
        $exercises = (array) ($lesson['exercises'] ?? []);
        $sectionChanged = false;

        foreach ($sections as &$section) {
            if (!empty($section['code'])) {
                continue;
            }
            $body = (string) ($section['body'] ?? '');
            $extracted = extractFencedCode($body);
            if ($extracted !== null) {
                $section['code'] = $extracted;
                $section['body'] = stripFencedCode($body);
                $sectionChanged = true;
                continue;
            }
            $snippet = snippetForSection($section, $exercises, $runtime, (string) ($lesson['slug'] ?? ''));
            if ($snippet !== null) {
                $section['code'] = $snippet;
                $sectionChanged = true;
            }
        }
        unset($section);

        if ($sectionChanged) {
            $lesson['sections'] = $sections;
            $changed = true;
            $updatedLessons++;
        }
    }
    unset($lesson);

    if ($changed && !$dryRun) {
        writeCourseFile($file, $lessons);
    }
}

echo $dryRun
    ? "Dry run: would enrich {$updatedLessons} lecciones.\n"
    : "Enriched {$updatedLessons} lecciones ({$updatedSections} sections with new code).\n";

function extractFencedCode(string $body): ?string
{
    if (preg_match('/```[\w]*\n([\s\S]*?)```/', $body, $m)) {
        return trim($m[1]);
    }

    return null;
}

function stripFencedCode(string $body): string
{
    return trim(preg_replace('/```[\w]*\n[\s\S]*?```/', '', $body) ?? $body);
}

/** @param array<string, mixed> $section @param list<array<string, mixed>> $exercises */
function snippetForSection(array $section, array $exercises, string $runtime, string $lessonSlug): ?string
{
    foreach ($exercises as $exercise) {
        $hint = trim((string) ($exercise['hint'] ?? ''));
        if ($hint === '' || strlen($hint) < 8) {
            continue;
        }
        if (($exercise['type'] ?? '') === 'contains' || ($exercise['type'] ?? '') === 'code' || ($exercise['type'] ?? '') === 'js') {
            return $hint;
        }
    }

    $heading = strtolower((string) ($section['heading'] ?? ''));

    return match ($runtime) {
        'php' => match (true) {
            str_contains($heading, 'sql') => "<?php\n\$pdo = new PDO('sqlite::memory:');\n\$stmt = \$pdo->prepare('SELECT * FROM users WHERE id = ?');\n\$stmt->execute([1]);",
            str_contains($heading, 'test') => "<?php\n// PHPUnit\n\$this->assertEquals(4, 2 + 2);",
            default => "<?php\ndeclare(strict_types=1);\n\necho 'Practica: {$lessonSlug}';",
        },
        'javascript' => match (true) {
            str_contains($heading, 'fetch') || str_contains($heading, 'api') => "const res = await fetch('/api/users');\nconst data = await res.json();\nconsole.log(data);",
            str_contains($heading, 'component') || str_contains($heading, 'react') => "function App() {\n  return <h1>Hola React</h1>;\n}\nexport default App;",
            default => "console.log('Practica: {$lessonSlug}');",
        },
        'python' => "def handler():\n    return {'status': 'ok', 'lesson': '{$lessonSlug}'}\n\nprint(handler())",
        'yaml' => "apiVersion: v1\nkind: ConfigMap\nmetadata:\n  name: {$lessonSlug}\ndata:\n  APP_ENV: production",
        'shell' => "# Practica: {$lessonSlug}\necho \"Listo\"\n# Reemplaza con tu comando",
        default => null,
    };
}

/** @param list<array<string, mixed>> $lessons */
function writeCourseFile(string $file, array $lessons): void
{
    $export = varExportLessons($lessons);
    file_put_contents($file, "<?php\n\ndeclare(strict_types=1);\n\nreturn {$export};\n");
}

/** @param list<array<string, mixed>> $lessons */
function varExportLessons(array $lessons): string
{
    return var_export($lessons, true);
}
