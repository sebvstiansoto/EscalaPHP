<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\CapstoneService;
use App\Services\LearnerContext;
use App\View;

class CapstoneController
{
    public function __construct(
        private CapstoneService $capstones,
        private LearnerContext $context,
        private array $config,
    ) {
    }

    public function index(): void
    {
        View::show('capstones/index', [
            'config' => $this->config,
            'title' => 'Capstones',
            'capstones' => $this->capstones->all(),
        ]);
    }

    public function show(string $slug): void
    {
        $all = $this->capstones->all();
        if (!isset($all[$slug])) {
            http_response_code(404);
            View::show('errors/404', ['path' => '/capstones/' . $slug, 'config' => $this->config]);
            return;
        }

        View::show('capstones/show', [
            'config' => $this->config,
            'title' => (string) ($all[$slug]['title'] ?? 'Capstone'),
            'capstone' => $all[$slug],
            'result' => $_SESSION['capstone_result'] ?? null,
        ]);
        unset($_SESSION['capstone_result']);
    }

    public function submit(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $slug = (string) ($_POST['capstone'] ?? '');
        $_SESSION['capstone_result'] = $this->capstones->submit($slug, (string) ($_POST['code'] ?? ''), $this->context);
        header('Location: /capstones/' . urlencode($slug));
        exit;
    }
}
