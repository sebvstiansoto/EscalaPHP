<?php

declare(strict_types=1);

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

use App\Services\AcademicMentorBuilder;

$cat = require $root . '/app/Data/catalog.php';
$exams = require $root . '/app/Data/exams.php';
$caps = require $root . '/app/Data/capstones.php';
$projects = require $root . '/app/Data/projects.php';
$interview = require $root . '/app/Data/interview.php';
$mentorDir = $root . '/app/Data/mentor';

$examCourses = [];
foreach ($exams as $e) {
    $examCourses[$e['course'] ?? ''] = true;
}
$capCourses = [];
foreach ($caps as $c) {
    $capCourses[$c['course'] ?? ''] = true;
}

$missingExam = [];
$missingCap = [];
$missingMentor = [];
$thinMentor = [];
$noProject = [];
$noCodeInLesson = [];
$lessonsTotal = 0;
$mentorTotal = 0;

foreach ($cat['courses'] as $slug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }
    if (!isset($examCourses[$slug])) {
        $missingExam[] = $slug;
    }
    if (!isset($capCourses[$slug])) {
        $missingCap[] = $slug;
    }
    $lessons = require $root . '/app/Data/' . $course['lessons'];
    foreach ($lessons as $l) {
        $lessonsTotal++;
        $ls = (string) $l['slug'];
        $hasCode = false;
        foreach ($l['sections'] ?? [] as $sec) {
            if (!empty($sec['code'])) {
                $hasCode = true;
                break;
            }
        }
        if (!$hasCode) {
            $noCodeInLesson[] = $ls;
        }
        if (!is_file($mentorDir . '/' . $ls . '.php')) {
            $missingMentor[] = $ls;
        } else {
            /** @var list<array<string, mixed>> $steps */
            $steps = require $mentorDir . '/' . $ls . '.php';
            $mentorTotal++;
            if (AcademicMentorBuilder::isHandcrafted($steps, $ls)) {
                continue;
            }
            if (AcademicMentorBuilder::isThin($steps)) {
                $thinMentor[] = $ls;
            }
        }
        if (!isset($projects[$ls])) {
            $noProject[] = $ls;
        }
    }
}

$coursesAvailable = count(array_filter($cat['courses'], fn ($c) => ($c['status'] ?? '') === 'available'));

echo "=== EscalaPHP Catalog Audit ===\n\n";
echo "Cursos disponibles: {$coursesAvailable}\n";
echo "Lecciones: {$lessonsTotal}\n";
echo "Mentors: {$mentorTotal}\n";
echo "Examenes: " . count($exams) . "\n";
echo "Capstones: " . count($caps) . "\n";
echo "Mini-proyectos (keys): " . count($projects) . "\n";
echo "Stacks entrevista: " . count($interview) . "\n\n";

$withProject = $lessonsTotal - count($noProject);
$overall = (
    ($coursesAvailable - count($missingExam)) / max(1, $coursesAvailable) * 20
    + ($coursesAvailable - count($missingCap)) / max(1, $coursesAvailable) * 15
    + ($lessonsTotal - count($missingMentor)) / max(1, $lessonsTotal) * 25
    + ($lessonsTotal - count($thinMentor)) / max(1, $lessonsTotal) * 25
    + $withProject / max(1, $lessonsTotal) * 15
);

echo "Completitud estimada: " . round($overall, 1) . "%\n\n";

echo "Sin examen (" . count($missingExam) . "): " . implode(', ', $missingExam) . "\n\n";
echo "Sin capstone (" . count($missingCap) . "): " . implode(', ', $missingCap) . "\n\n";
echo "Sin mentor (" . count($missingMentor) . "): " . (count($missingMentor) ? implode(', ', $missingMentor) : 'ninguno') . "\n\n";
echo "Mentor fino (" . count($thinMentor) . " lecciones)\n";
if (count($thinMentor) > 0 && in_array('--thin', $argv ?? [], true)) {
    foreach (array_slice($thinMentor, 0, 50) as $s) {
        echo "  - {$s}\n";
    }
}
echo "Lecciones sin mini-proyecto: " . count($noProject) . " / {$lessonsTotal}\n";
echo "Lecciones sin code en sections: " . count($noCodeInLesson) . "\n";
