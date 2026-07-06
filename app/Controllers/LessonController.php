<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\ExerciseValidator;
use App\LessonCatalog;
use App\ProgressRepository;
use App\Services\DailyMissionService;
use App\Services\EntitlementService;
use App\Services\LearningInsightsService;
use App\Services\LessonCmsService;
use App\Services\SpacedRepetitionService;
use App\Services\Gamification;
use App\Services\MentorFeedback;
use App\Services\MentorService;
use App\View;

class LessonController
{
    public function __construct(
        private ProgressRepository $progress,
        private ExerciseValidator $validator,
        private MentorService $mentor,
        private MentorFeedback $feedback,
        private Gamification $gamification,
        private \App\Services\AchievementService $achievements,
        private \App\Services\ProjectService $projects,
        private EntitlementService $entitlements,
        private SpacedRepetitionService $spacedRepetition,
        private DailyMissionService $missions,
        private LessonCmsService $lessonCms,
        private LearningInsightsService $insights,
        private array $config,
    ) {
    }

    public function show(): void
    {
        $lesson = $this->resolveLesson();
        if ($lesson === null) {
            return;
        }

        $this->gamification->touchStreak();
        $courseSlug = (string) $lesson['course'];
        $slug = $lesson['slug'];
        $this->insights->logStudy(10, $slug);
        $steps = $this->mentor->stepsFor($slug);
        $stepIndex = $this->mentor->currentStepIndex($slug);

        if (isset($_GET['step'])) {
            $stepIndex = max(0, min(count($steps) - 1, (int) $_GET['step']));
            $this->mentor->setStepIndex($slug, $stepIndex);
        }

        $stepIndex = max(0, min(count($steps) - 1, $stepIndex));
        $completed = $this->ensureLessonCompleteIfOnFinishStep($lesson, $steps, $stepIndex);
        $userProgress = $this->progress->allForCourse($courseSlug)[$slug] ?? null;

        View::show('lesson-mentor', $this->viewData(
            lesson: $lesson,
            steps: $steps,
            stepIndex: $stepIndex,
            completed: $completed,
            feedback: null,
            exerciseSolved: $this->isStepSolved($slug, $steps, $stepIndex, $userProgress),
        ));
    }

    public function advance(): void
    {
        \App\Http\Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $lesson = $this->resolveLesson();
        if ($lesson === null) {
            return;
        }

        $slug = $lesson['slug'];
        $steps = $this->mentor->stepsFor($slug);
        $current = $this->mentor->currentStepIndex($slug);
        $next = min($current + 1, count($steps) - 1);
        $this->mentor->setStepIndex($slug, $next);
        $this->ensureLessonCompleteIfOnFinishStep($lesson, $steps, $next);

        $this->redirect($this->lessonUrl($lesson));
    }

    public function retreat(): void
    {
        \App\Http\Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $lesson = $this->resolveLesson();
        if ($lesson === null) {
            return;
        }

        $this->mentor->retreat($lesson['slug']);
        $this->redirect($this->lessonUrl($lesson));
    }

    public function submit(): void
    {
        \App\Http\Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $lesson = $this->resolveLesson();
        if ($lesson === null) {
            return;
        }

        $courseSlug = (string) $lesson['course'];
        $slug = $lesson['slug'];
        $answer = (string) ($_POST['answer'] ?? '');
        $stepIndex = (int) ($_POST['step_index'] ?? 0);
        $steps = $this->mentor->stepsFor($slug);
        $stepIndex = max(0, min(count($steps) - 1, $stepIndex));
        $this->mentor->setStepIndex($slug, $stepIndex);

        $currentStep = $steps[$stepIndex] ?? [];
        $exerciseIndex = (int) ($currentStep['exercise_index'] ?? 0);
        $exercises = $lesson['exercises'];
        $exercise = $exercises[$exerciseIndex] ?? null;

        $userProgress = $this->progress->allForCourse($courseSlug)[$slug] ?? null;
        $lessonDone = (int) ($userProgress['completed'] ?? 0) === 1;

        if ($exercise === null) {
            View::show('lesson-mentor', $this->viewData(
                lesson: $lesson,
                steps: $steps,
                stepIndex: $stepIndex,
                completed: $lessonDone,
                feedback: null,
                exerciseSolved: false,
                answer: $answer,
            ));
            return;
        }

        $attempts = $this->mentor->registerAttempt($slug, $exerciseIndex);
        $result = $this->validator->validate($exercise, $answer);
        $feedback = $this->feedback->forResult($exercise, $result, $answer, $attempts);

        if ($result['ok']) {
            $storedIndex = (int) ($userProgress['exercise_index'] ?? 0);
            $firstTime = $exerciseIndex >= $storedIndex;

            if ($firstTime) {
                $this->gamification->addXp(25, 'Ejercicio completado');
                $this->missions->complete('exercise');
            }

            $nextExercise = max($storedIndex, $exerciseIndex + 1);
            $lessonDone = $nextExercise >= count($exercises);
            $this->progress->markExercise(
                $courseSlug,
                $slug,
                $lessonDone ? $exerciseIndex : $nextExercise,
                $lessonDone,
            );

            if ($lessonDone && $firstTime) {
                $this->gamification->addXp(100, 'Lección completada');
                $this->missions->complete('lesson');
                $this->spacedRepetition->scheduleAfterCompletion($courseSlug, $slug);
            }

            if (($exercise['type'] ?? '') === 'min_length' && $slug === 'proyecto-final') {
                $this->gamification->setGoal($answer);
            }

            $this->mentor->resetAttempts($slug, $exerciseIndex);
            $this->achievements->checkAndAward();
        }

        View::show('lesson-mentor', $this->viewData(
            lesson: $lesson,
            steps: $steps,
            stepIndex: $stepIndex,
            completed: $lessonDone,
            feedback: $feedback,
            exerciseSolved: (bool) $result['ok'],
            answer: $answer,
        ));
    }

    /**
     * Al llegar al paso final del mentor, marca la lección como completada.
     * Cubre módulos donde el flujo del mentor no exige todos los ejercicios del catálogo.
     *
     * @param list<array<string, mixed>> $steps
     */
    private function ensureLessonCompleteIfOnFinishStep(array $lesson, array $steps, int $stepIndex): bool
    {
        $courseSlug = (string) $lesson['course'];
        $slug = (string) $lesson['slug'];
        $step = $steps[$stepIndex] ?? [];

        if (($step['type'] ?? '') !== 'complete') {
            return $this->progress->isLessonCompleted($courseSlug, $slug);
        }

        if ($this->progress->isLessonCompleted($courseSlug, $slug)) {
            return true;
        }

        $exercises = (array) ($lesson['exercises'] ?? []);
        $lastIndex = max(0, count($exercises) - 1);
        $this->progress->markExercise($courseSlug, $slug, $lastIndex, true);
        $this->gamification->addXp(100, 'Lección completada');
        $this->missions->complete('lesson');
        $this->spacedRepetition->scheduleAfterCompletion($courseSlug, $slug);
        $this->achievements->checkAndAward();

        return true;
    }

    /** @param array<string, mixed> $lesson */
    private function lessonUrl(array $lesson): string
    {
        return '/leccion?curso=' . urlencode((string) $lesson['course'])
            . '&slug=' . urlencode((string) $lesson['slug']);
    }

    /**
     * @param array<string, mixed> $lesson
     * @param list<array<string, mixed>> $steps
     * @param array<string, mixed>|null $feedback
     * @return array<string, mixed>
     */
    private function viewData(
        array $lesson,
        array $steps,
        int $stepIndex,
        bool $completed,
        ?array $feedback,
        bool $exerciseSolved,
        string $answer = '',
    ): array {
        $currentStep = $steps[$stepIndex] ?? [];
        $isLastStep = $stepIndex >= count($steps) - 1;

        return [
            'config' => $this->config,
            'title' => $lesson['title'] . ' — Modo Mentor',
            'lesson' => $lesson,
            'courseSlug' => (string) ($lesson['course'] ?? 'php-fundamentos'),
            'runtimeLabel' => match ((\App\CourseCatalog::course((string) ($lesson['course'] ?? '')) ?? [])['runtime'] ?? 'php') {
                'python' => 'Python',
                'javascript' => 'JavaScript',
                'yaml' => 'DevOps',
                'shell' => 'Git',
                'sql' => 'SQL',
                default => 'PHP',
            },
            'steps' => $steps,
            'stepIndex' => $stepIndex,
            'currentStep' => $currentStep,
            'completed' => $completed,
            'feedback' => $feedback,
            'exerciseSolved' => $exerciseSolved,
            'isLastStep' => $isLastStep,
            'nextLesson' => $this->nextLesson($lesson),
            'answer' => $answer,
            'profile' => $this->gamification->profile(),
            'projectCompleted' => $this->projects->isCompleted($lesson['slug']),
            'commentEntityId' => ($lesson['course'] ?? '') . ':' . ($lesson['slug'] ?? ''),
        ];
    }

    /**
     * @param list<array<string, mixed>> $steps
     * @param array<string, mixed>|null $userProgress
     */
    private function isStepSolved(string $slug, array $steps, int $stepIndex, ?array $userProgress): bool
    {
        $step = $steps[$stepIndex] ?? [];
        if (($step['type'] ?? '') !== 'exercise') {
            return false;
        }

        $exerciseIndex = (int) ($step['exercise_index'] ?? 0);
        $storedIndex = (int) ($userProgress['exercise_index'] ?? 0);
        $lessonDone = (int) ($userProgress['completed'] ?? 0) === 1;

        return $lessonDone || $exerciseIndex < $storedIndex;
    }

    /** @param array<string, mixed> $lesson */
    private function nextLesson(array $lesson): ?array
    {
        $courseSlug = (string) $lesson['course'];
        $all = LessonCatalog::all($courseSlug);
        $order = (int) $lesson['order'];

        foreach ($all as $candidate) {
            if ((int) $candidate['order'] === $order + 1) {
                return $candidate;
            }
        }

        return null;
    }

    private function redirect(string $to): void
    {
        header('Location: ' . $to);
        exit;
    }

    /** @return array<string, mixed>|null */
    private function resolveLesson(): ?array
    {
        $courseSlug = (string) ($_GET['curso'] ?? $_POST['curso'] ?? '');
        $slug = (string) ($_GET['slug'] ?? $_POST['slug'] ?? '');

        $lesson = $courseSlug !== ''
            ? LessonCatalog::find($slug, $courseSlug)
            : LessonCatalog::find($slug);

        if ($lesson === null) {
            http_response_code(404);
            View::show('errors/404', ['path' => '/leccion/' . $slug, 'config' => $this->config]);
            return null;
        }

        $course = (string) ($lesson['course'] ?? 'php-fundamentos');

        if (!$this->entitlements->canAccessCourse($course)) {
            $courseData = CourseCatalog::course($course) ?? [];
            http_response_code(403);
            View::show('errors/premium', [
                'config' => $this->config,
                'title' => 'Curso Pro',
                'course' => $courseData,
            ]);
            return null;
        }

        $requirements = CourseCatalog::requirementsMet($course, $this->progress);
        if ($requirements !== []) {
            http_response_code(403);
            View::show('errors/locked', [
                'lesson' => $lesson,
                'config' => $this->config,
                'requirementsMissing' => $requirements,
            ]);
            return null;
        }

        if (!$this->progress->isLessonUnlocked($course, $slug, (int) $lesson['order'])) {
            http_response_code(403);
            $previousLesson = null;
            foreach (LessonCatalog::all($course) as $candidate) {
                if ((int) $candidate['order'] === (int) $lesson['order'] - 1) {
                    $previousLesson = $candidate;
                    break;
                }
            }
            View::show('errors/locked', [
                'lesson' => $lesson,
                'config' => $this->config,
                'previousLesson' => $previousLesson,
                'courseSlug' => $course,
            ]);
            return null;
        }

        return $this->lessonCms->mergeLesson($lesson, $course);
    }
}
