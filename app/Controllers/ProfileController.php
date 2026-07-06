<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Gamification;

class ProfileController
{
    public function __construct(private Gamification $gamification)
    {
    }

    public function update(): void
    {
        \App\Http\Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $name = (string) ($_POST['display_name'] ?? '');
        $this->gamification->setName($name);
        $this->gamification->touchStreak();

        $redirect = $_POST['redirect'] ?? '/';
        if (!str_starts_with($redirect, '/') || str_starts_with($redirect, '//')) {
            $redirect = '/';
        }
        header('Location: ' . $redirect);
        exit;
    }
}
