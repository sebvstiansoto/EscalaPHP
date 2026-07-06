<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\LessonCatalog;
use App\ProgressRepository;
use App\Services\AchievementService;
use App\Services\AuthService;
use App\Services\DailyMissionService;
use App\Services\Gamification;
use App\Services\LearnerContext;
use App\Services\LearningPathService;
use App\View;

class HomeController
{
    public function __construct(
        private ProgressRepository $progress,
        private Gamification $gamification,
        private AchievementService $achievements,
        private AuthService $auth,
        private LearningPathService $paths,
        private DailyMissionService $missions,
        private LearnerContext $context,
        private array $config,
    ) {
    }

    public function index(): void
    {
        $this->gamification->touchStreak();
        $this->achievements->checkAndAward();

        $profile = $this->gamification->profile();
        $courses = CourseCatalog::courses();
        $categories = CourseCatalog::categories();

        $courseStats = [];
        foreach ($courses as $slug => $course) {
            $lessons = CourseCatalog::lessonsForCourse($slug);
            $total = count($lessons);
            if ($total === 0) {
                $total = count(CourseCatalog::roadmapForCourse($slug));
            }
            $done = 0;
            foreach ($lessons as $lesson) {
                if ($this->progress->isLessonCompleted($slug, (string) $lesson['slug'])) {
                    $done++;
                }
            }
            $courseStats[$slug] = ['completed' => $done, 'total' => $total];
        }

        View::show('catalog', [
            'config' => $this->config,
            'title' => 'Escala — Elige tu camino de programación',
            'categories' => $categories,
            'courses' => $courses,
            'courseStats' => $courseStats,
            'profile' => $profile,
            'user' => $this->auth->currentUser(),
            'showStreakReminder' => ((int) ($profile['streak'] ?? 0)) > 0,
            'continueLesson' => $this->paths->continueLesson($this->progress, $this->paths->selected($this->context)),
            'learningPaths' => $this->paths->all(),
            'selectedPath' => $this->paths->selected($this->context),
            'dailyMissions' => $this->missions->today(),
        ]);
    }
}
