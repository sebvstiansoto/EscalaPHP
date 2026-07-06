<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\LessonCatalog;

class MentorService
{
    /** @return list<array<string, mixed>> */
    public function stepsFor(string $slug): array
    {
        $custom = __DIR__ . '/../Data/mentor/' . $slug . '.php';
        if (is_file($custom)) {
            /** @var list<array<string, mixed>> $steps */
            $steps = require $custom;
            if (!AcademicMentorBuilder::isHandcrafted($steps, $slug) && AcademicMentorBuilder::isThin($steps)) {
                return AcademicMentorBuilder::normalizeExerciseSteps(
                    $slug,
                    AcademicMentorBuilder::build($slug),
                );
            }

            return AcademicMentorBuilder::normalizeExerciseSteps($slug, $steps);
        }

        $built = AcademicMentorBuilder::build($slug);

        return $built !== []
            ? AcademicMentorBuilder::normalizeExerciseSteps($slug, $built)
            : $this->buildFallbackSteps($slug);
    }

    public function currentStepIndex(string $slug): int
    {
        return (int) ($_SESSION['mentor_step'][$slug] ?? 0);
    }

    public function setStepIndex(string $slug, int $index): void
    {
        $_SESSION['mentor_step'][$slug] = max(0, $index);
    }

    public function advance(string $slug): int
    {
        $next = $this->currentStepIndex($slug) + 1;
        $this->setStepIndex($slug, $next);

        return $next;
    }

    public function retreat(string $slug): int
    {
        $prev = max(0, $this->currentStepIndex($slug) - 1);
        $this->setStepIndex($slug, $prev);

        return $prev;
    }

    public function attempts(string $slug, int $exerciseIndex): int
    {
        return (int) ($_SESSION['mentor_attempts'][$slug][$exerciseIndex] ?? 0);
    }

    public function registerAttempt(string $slug, int $exerciseIndex): int
    {
        $current = $this->attempts($slug, $exerciseIndex) + 1;
        $_SESSION['mentor_attempts'][$slug][$exerciseIndex] = $current;

        return $current;
    }

    public function resetAttempts(string $slug, int $exerciseIndex): void
    {
        unset($_SESSION['mentor_attempts'][$slug][$exerciseIndex]);
    }

    /** @return list<array<string, mixed>> */
    private function buildFallbackSteps(string $slug): array
    {
        $lesson = LessonCatalog::find($slug);
        if ($lesson === null) {
            return [];
        }

        $courseSlug = (string) ($lesson['course'] ?? 'php-fundamentos');
        $course = CourseCatalog::course($courseSlug);
        $runtime = (string) ($course['runtime'] ?? 'php');
        $runtimeLabel = match ($runtime) {
            'python' => 'Python',
            'javascript' => 'JavaScript',
            'yaml' => 'DevOps',
            'shell' => 'Git',
            'sql' => 'SQL',
            default => 'PHP',
        };

        $steps = [[
            'type' => 'mentor_say',
            'title' => 'Empezamos: ' . $lesson['title'],
            'body' => 'Te guío paso a paso. Avanza cuando estés listo — sin prisa.',
            'emoji' => '🎯',
        ]];

        foreach ($lesson['sections'] ?? [] as $section) {
            $steps[] = [
                'type' => 'teach',
                'title' => $section['heading'],
                'body' => $section['body'],
                'code' => $section['code'] ?? null,
            ];
        }

        foreach ($lesson['exercises'] ?? [] as $i => $exercise) {
            $steps[] = [
                'type' => 'exercise',
                'title' => 'Tu turno — práctica ' . ($i + 1),
                'body' => 'Ejecuta esto tú mismo. Si fallas, te ayudo con pistas adaptativas.',
                'exercise_index' => $i,
            ];
        }

        if (LessonCatalog::project($slug) !== null) {
            $steps[] = [
                'type' => 'project',
                'title' => 'Mini-proyecto',
                'body' => 'Practica lo aprendido con un proyecto hands-on validado.',
            ];
        }

        $steps[] = [
            'type' => 'complete',
            'title' => '¡Lección completada!',
            'body' => "Guardaste conceptos reales de {$runtimeLabel}. Sigue con el siguiente módulo.",
            'emoji' => '🏆',
        ];

        return $steps;
    }
}
