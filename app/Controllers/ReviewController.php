<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\Http\Csrf;
use App\Services\SpacedRepetitionService;
use App\View;

class ReviewController
{
    public function __construct(
        private SpacedRepetitionService $spacedRepetition,
        private array $config,
    ) {
    }

    public function index(): void
    {
        View::show('review', [
            'config' => $this->config,
            'title' => 'Repaso espaciado — Escala',
            'due' => $this->spacedRepetition->dueToday(),
            'checklist' => [
                ['q' => '¿Entiendes dónde corre PHP vs dónde corre HTML?', 'module' => 'bienvenida'],
                ['q' => '¿Puedes crear variables y usar echo sin mirar?', 'module' => 'variables'],
                ['q' => '¿Sabes escribir un if/else y un foreach?', 'module' => 'condiciones'],
                ['q' => '¿Puedes crear una función reutilizable?', 'module' => 'funciones'],
                ['q' => '¿Entiendes GET vs POST y códigos 200/404/500?', 'module' => 'http'],
            ],
        ]);
    }

    public function rate(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $course = (string) ($_POST['course'] ?? '');
        $lesson = (string) ($_POST['lesson'] ?? '');
        $quality = max(0, min(5, (int) ($_POST['quality'] ?? 3)));
        if ($course !== '' && $lesson !== '') {
            $this->spacedRepetition->recordReview($course, $lesson, $quality);
        }
        header('Location: /revision');
        exit;
    }
}
