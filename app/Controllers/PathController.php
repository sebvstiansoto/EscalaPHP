<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\LearningPathService;
use App\View;

class PathController
{
    public function __construct(
        private LearningPathService $paths,
        private \App\Services\LearnerContext $context,
        private array $config,
    ) {
    }

    public function index(): void
    {
        View::show('paths', [
            'config' => $this->config,
            'title' => 'Rutas de aprendizaje',
            'paths' => $this->paths->all(),
            'selected' => $this->paths->selected($this->context),
        ]);
    }

    public function select(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $slug = (string) ($_POST['path'] ?? '');
        $all = $this->paths->all();
        if (isset($all[$slug])) {
            $this->paths->saveSelection($slug, $this->context);
        }
        header('Location: /rutas');
        exit;
    }
}
