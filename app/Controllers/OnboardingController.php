<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\CourseCmsService;
use App\View;

class OnboardingController
{
    public function __construct(private array $config)
    {
    }

    public function quiz(): void
    {
        View::show('onboarding/quiz', [
            'config' => $this->config,
            'title' => '¿Por dónde empezar?',
        ]);
    }

    public function submit(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $goal = (string) ($_POST['goal'] ?? 'backend');
        $path = match ($goal) {
            'frontend' => 'fullstack',
            'devops' => 'devops',
            'php' => 'enterprise-php',
            default => 'backend',
        };
        $_SESSION['onboarding_done'] = true;
        $_SESSION['suggested_path'] = $path;
        header('Location: /rutas?path=' . urlencode($path));
        exit;
    }
}
