<?php

declare(strict_types=1);

return [
    'title' => 'Guía del developer',
    'subtitle' => 'Más allá del glosario: conexiones, competencias, mapas y cómo resolver errores.',
    'sections' => [
        [
            'slug' => 'mapa-developer',
            'title' => 'Mapa interactivo',
            'icon' => '🗺',
            'desc' => 'Visualiza cómo fluye una petición desde el usuario hasta la base de datos y el deploy.',
            'accent' => '#4f7cff',
        ],
        [
            'slug' => 'checklist-developer',
            'title' => 'Checklist por nivel',
            'icon' => '✓',
            'desc' => 'Junior, mid y senior: qué deberías saber con enlaces a cursos y glosario.',
            'accent' => '#2dd4a8',
        ],
        [
            'slug' => 'conexiones',
            'title' => 'Conexiones entre conceptos',
            'icon' => '🔗',
            'desc' => 'Middleware conecta con Controller, Redis con Caché… entiende el ecosistema.',
            'accent' => '#a78bfa',
        ],
        [
            'slug' => 'troubleshooting',
            'title' => 'Guía de errores',
            'icon' => '🔧',
            'desc' => 'Error 500, CORS, BD caída, Docker… pasos concretos para diagnosticar.',
            'accent' => '#ff6b8a',
        ],
        [
            'slug' => 'dia-developer',
            'title' => 'Un día en la vida',
            'icon' => '☀',
            'desc' => 'Standup, code review, debugging, deploy… qué hace un dev profesional cada día.',
            'accent' => '#fbbf24',
        ],
        [
            'slug' => 'glosario',
            'title' => 'Glosario',
            'icon' => '📖',
            'desc' => '620+ términos explicados en español simple.',
            'accent' => '#38bdf8',
        ],
    ],
];
