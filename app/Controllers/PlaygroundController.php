<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Gamification;
use App\Services\AchievementService;
use App\View;

class PlaygroundController
{
    public function __construct(
        private Gamification $gamification,
        private AchievementService $achievements,
        private array $config,
    ) {
    }

    public function index(): void
    {
        $this->gamification->touchStreak();
        $this->achievements->recordLabUse();

        View::show('playground', [
            'config' => $this->config,
            'title' => 'Laboratorio PHP — EscalaPHP',
            'profile' => $this->gamification->profile(),
        ]);
    }
}
