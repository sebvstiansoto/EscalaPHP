<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\LearningInsightsService;
use App\Services\LearningJourneyService;
use App\View;

class DashboardController
{
    public function __construct(
        private LearningJourneyService $journey,
        private LearningInsightsService $insights,
        private array $config,
    ) {
    }

    public function index(): void
    {
        View::show('dashboard', [
            'config' => $this->config,
            'title' => 'Mi panel de aprendizaje',
            'journey' => $this->journey->snapshot(),
        ]);
    }

    public function setGoal(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $this->insights->setWeeklyGoal((int) ($_POST['weekly_lessons'] ?? 5));
        header('Location: /dashboard');
        exit;
    }

    public function logStudy(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $this->insights->logStudy((int) ($_POST['minutes'] ?? 15), (string) ($_POST['lesson'] ?? '') ?: null);
        header('Location: /dashboard');
        exit;
    }
}
