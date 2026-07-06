<?php

declare(strict_types=1);

/**
 * Regenera mentors con excelencia académica (AcademicMentorBuilder).
 * Uso: php tools/regenerate-mentors-excellence.php [--force]
 *
 * Sin --force: solo mentors finos (< 8 pasos o sin live_demo/pair).
 * Con --force: todos excepto mentors artesanales (php-fundamentos).
 */

$root = dirname(__DIR__);
spl_autoload_register(static function (string $class) use ($root): void {
    $prefix = 'App\\';
    if (!str_starts_with($class, $prefix)) {
        return;
    }
    $file = $root . '/app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});

use App\CourseCatalog;
use App\Services\AcademicMentorBuilder;

$force = in_array('--force', $argv ?? [], true);
$mentorDir = $root . '/app/Data/mentor';
$updated = 0;
$skipped = 0;

foreach (CourseCatalog::courses() as $courseSlug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }

    foreach (CourseCatalog::lessonsForCourse($courseSlug) as $lesson) {
        $slug = (string) $lesson['slug'];
        $target = $mentorDir . '/' . $slug . '.php';

        if (is_file($target)) {
            /** @var list<array<string, mixed>> $existing */
            $existing = require $target;
            if (AcademicMentorBuilder::isHandcrafted($existing, $slug)) {
                $skipped++;
                continue;
            }
            if (!$force && !AcademicMentorBuilder::isThin($existing)) {
                $skipped++;
                continue;
            }
        }

        $steps = AcademicMentorBuilder::build($slug);
        if ($steps === []) {
            $skipped++;
            continue;
        }

        $export = var_export($steps, true);
        $php = "<?php\n\ndeclare(strict_types=1);\n\nreturn {$export};\n";
        file_put_contents($target, $php);
        $updated++;
        echo "Updated: {$slug}.php\n";
    }
}

echo "\nDone: {$updated} updated, {$skipped} skipped.\n";
