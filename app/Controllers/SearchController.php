<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\LearnerContext;
use App\Services\SearchService;
use App\View;

class SearchController
{
    public function __construct(
        private SearchService $search,
        private array $config,
        private LearnerContext $context,
    ) {
    }

    public function index(): void
    {
        $q = trim((string) ($_GET['q'] ?? ''));
        $results = $q !== '' ? $this->search->search($q) : [];

        View::show('search', [
            'config' => $this->config,
            'title' => 'Buscar — Escala',
            'query' => $q,
            'results' => $results,
            'user' => $this->context->userId() ? ['id' => $this->context->userId()] : null,
        ]);
    }

    public function api(): void
    {
        header('Content-Type: application/json');
        $q = trim((string) ($_GET['q'] ?? ''));
        echo json_encode($this->search->search($q, 15), JSON_UNESCAPED_UNICODE);
    }
}
