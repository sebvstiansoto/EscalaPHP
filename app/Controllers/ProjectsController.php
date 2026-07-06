<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\LessonCatalog;
use App\ProgressRepository;
use App\Services\AchievementService;
use App\Services\AuthService;
use App\Services\Gamification;
use App\View;

class ProjectsController
{
    public function __construct(
        private ProgressRepository $progress,
        private \App\Services\ProjectService $projects,
        private \App\Services\ProjectValidator $projectValidator,
        private AchievementService $achievements,
        private AuthService $auth,
        private array $config,
    ) {
    }

    public function index(): void
    {
        $courseSlug = (string) ($_GET['curso'] ?? '');
        $courses = CourseCatalog::courses();
        $availableCourses = array_filter($courses, static fn ($c) => ($c['status'] ?? '') === 'available');

        if ($courseSlug === '' && $availableCourses !== []) {
            $courseSlug = array_key_first($availableCourses) ?: 'python-backend';
        }

        $lessons = $courseSlug !== '' ? LessonCatalog::all($courseSlug) : LessonCatalog::all();
        $projects = LessonCatalog::allProjects();
        $completed = $this->projects->completedSlugs();
        $courseProgress = $courseSlug !== '' ? $this->progress->allForCourse($courseSlug) : [];

        $items = [];
        foreach ($lessons as $lesson) {
            $slug = $lesson['slug'];
            $project = $projects[$slug] ?? null;
            if ($project === null) {
                continue;
            }
            $lessonDone = $courseSlug !== ''
                ? $this->progress->isLessonCompleted($courseSlug, $slug)
                : isset($courseProgress[$slug]) && (int) ($courseProgress[$slug]['completed'] ?? 0) === 1;

            $items[] = [
                'lesson' => $lesson,
                'project' => $project,
                'unlocked' => $lessonDone,
                'done' => in_array($slug, $completed, true),
            ];
        }

        $course = CourseCatalog::course($courseSlug);

        View::show('projects', [
            'config' => $this->config,
            'title' => 'Mini-proyectos — ' . ($course['title'] ?? 'Escala'),
            'items' => $items,
            'completedCount' => count(array_filter($items, static fn ($i) => $i['done'])),
            'totalCount' => count($items),
            'courseSlug' => $courseSlug,
            'course' => $course,
            'courses' => $availableCourses,
            'profile' => null,
            'user' => $this->auth->currentUser(),
        ]);
    }

    public function complete(): void
    {
        \App\Http\Csrf::abortIfInvalid($_POST['_csrf'] ?? null);

        $slug = (string) ($_POST['slug'] ?? '');
        $code = (string) ($_POST['project_code'] ?? '');
        $redirect = (string) ($_POST['redirect'] ?? '/proyectos');
        if (!str_starts_with($redirect, '/') || str_starts_with($redirect, '//')) {
            $redirect = '/proyectos';
        }

        $project = LessonCatalog::project($slug);
        if ($project === null) {
            header('Location: ' . $redirect);
            exit;
        }

        if ($this->projectValidator->requiresCode($project)) {
            $check = $this->projectValidator->validate($project, $code);
            if (!$check['ok']) {
                $_SESSION['project_error'] = $check['message'];
                header('Location: ' . $redirect);
                exit;
            }
        }

        $this->projects->complete($slug, (int) ($project['reward_xp'] ?? 30));
        $this->achievements->checkAndAward();
        $_SESSION['project_success'] = 'Proyecto validado correctamente. +' . (int) ($project['reward_xp'] ?? 30) . ' XP';

        header('Location: ' . $redirect);
        exit;
    }
}
