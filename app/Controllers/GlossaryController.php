<?php

declare(strict_types=1);

namespace App\Controllers;

use App\DeveloperGuide;
use App\LessonCatalog;
use App\View;

class GlossaryController
{
    public function __construct(private array $config)
    {
    }

    public function index(): void
    {
        $connectionSlugs = array_flip(array_map(
            static fn (array $conn): string => (string) ($conn['slug'] ?? ''),
            DeveloperGuide::connections()
        ));

        View::show('glossary', [
            'config' => $this->config,
            'title' => 'Glosario — EscalaPHP',
            'terms' => LessonCatalog::glossary(),
            'categories' => LessonCatalog::glossaryCategories(),
            'grouped' => LessonCatalog::glossaryGrouped(),
            'connectionSlugs' => $connectionSlugs,
        ]);
    }
}
