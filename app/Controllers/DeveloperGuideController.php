<?php

declare(strict_types=1);

namespace App\Controllers;

use App\DeveloperGuide;
use App\View;

class DeveloperGuideController
{
    public function __construct(private array $config)
    {
    }

    /** @param array<string, mixed> $data */
    private function show(string $template, string $nav, array $data): void
    {
        View::show($template, array_merge($data, [
            'config' => $this->config,
            'devNavCurrent' => $nav,
        ]));
    }

    public function index(): void
    {
        $hub = DeveloperGuide::hub();
        $this->show('developer/hub', 'hub', [
            'title' => $hub['title'] . ' — Escala',
            'hub' => $hub,
            'stats' => DeveloperGuide::stats(),
        ]);
    }

    public function mapa(): void
    {
        $this->show('developer/mapa', 'mapa', [
            'title' => 'Mapa del developer — Escala',
            'map' => DeveloperGuide::map(),
        ]);
    }

    public function checklist(): void
    {
        $this->show('developer/checklist', 'checklist', [
            'title' => 'Checklist del developer — Escala',
            'data' => DeveloperGuide::checklist(),
        ]);
    }

    public function conexiones(): void
    {
        $this->show('developer/conexiones', 'conexiones', [
            'title' => 'Conexiones entre conceptos — Escala',
            'connections' => DeveloperGuide::connections(),
            'glossary' => DeveloperGuide::glossaryIndex(),
        ]);
    }

    public function troubleshooting(): void
    {
        $this->show('developer/troubleshooting', 'troubleshooting', [
            'title' => 'Guía de errores — Escala',
            'guides' => DeveloperGuide::troubleshooting(),
        ]);
    }

    public function diaADia(): void
    {
        $data = DeveloperGuide::diaADia();
        $this->show('developer/dia-a-dia', 'dia-a-dia', [
            'title' => $data['title'] . ' — Escala',
            'day' => $data,
        ]);
    }
}
