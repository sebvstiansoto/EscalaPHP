<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\LessonCatalog;
use App\ProgressRepository;
use App\Services\AchievementService;
use App\Services\AnalyticsService;
use App\Services\EntitlementService;
use App\Services\Gamification;
use App\Services\LearnerContext;
use App\Services\LearningJourneyService;
use App\Services\Mailer;
use App\Services\NotificationService;
use App\View;

class ProfileDashboardController
{
    public function __construct(
        private ProgressRepository $progress,
        private Gamification $gamification,
        private AchievementService $achievements,
        private AnalyticsService $analytics,
        private NotificationService $notifications,
        private EntitlementService $entitlements,
        private LearnerContext $context,
        private LearningJourneyService $journey,
        private Mailer $mailer,
        private array $config,
    ) {
    }

    public function index(): void
    {
        $this->gamification->touchStreak();
        $this->achievements->checkAndAward();

        $profile = $this->gamification->profile();
        $streak = (int) ($profile['streak'] ?? 0);

        if ($streak >= 2 && !empty($_SESSION['user_id'])) {
            $this->maybeSendStreakReminder($profile, $streak);
        }

        $lessons = LessonCatalog::all();
        $progress = $this->progress->allForSession();
        $badges = $this->achievements->allWithStatus();
        $courseStats = $this->analytics->courseBreakdown();
        $activity = $this->analytics->activityLast7Days();

        $totalCompleted = 0;
        $totalLessons = 0;
        foreach ($courseStats as $cs) {
            $totalCompleted += $cs['completed'];
            $totalLessons += $cs['total'];
        }

        View::show('profile', [
            'config' => $this->config,
            'title' => 'Mi perfil — Escala',
            'profile' => $profile,
            'lessons' => $lessons,
            'progress' => $progress,
            'completed' => $totalCompleted,
            'total' => $totalLessons,
            'badges' => $badges,
            'courseStats' => $courseStats,
            'activity' => $activity,
            'plan' => $this->entitlements->plan(),
            'allNotifications' => $this->notifications->unread(),
            'showStreakReminder' => $streak > 0,
            'journey' => $this->journey->snapshot(),
        ]);
    }

    /** @param array<string, mixed> $profile */
    private function maybeSendStreakReminder(array $profile, int $streak): void
    {
        $key = 'streak_mail_' . date('Y-m-d');
        if (!empty($_SESSION[$key])) {
            return;
        }

        $userId = (int) ($_SESSION['user_id'] ?? 0);
        if ($userId <= 0) {
            return;
        }

        $stmt = $this->context->pdo()->prepare('SELECT email, display_name FROM users WHERE id = ?');
        $stmt->execute([$userId]);
        $user = $stmt->fetch();
        if (!$user) {
            return;
        }

        $this->mailer->streakReminder((string) $user['email'], (string) $user['display_name'], $streak);
        $this->notifications->create('streak', "Racha de {$streak} días 🔥", 'Sigue estudiando hoy para no perderla.');
        $_SESSION[$key] = true;
    }
}
