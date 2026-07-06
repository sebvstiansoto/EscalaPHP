<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Gamification;
use App\View;

class LeaderboardController
{
    public function __construct(private Gamification $gamification, private array $config)
    {
    }

    public function index(): void
    {
        View::show('leaderboard', [
            'config' => $this->config,
            'title' => 'Ranking — EscalaPHP',
            'leaders' => $this->gamification->leaderboard(15),
            'profile' => $this->gamification->profile(),
        ]);
    }
}
