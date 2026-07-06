<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'El salto profesional', 'body' => 'EscalaPHP es un mini-framework. **Laravel** es la versión industrial que usan empresas reales.', 'emoji' => '🚀'],
    ['type' => 'visual', 'visual' => 'laravel-stack', 'title' => 'Stack Laravel', 'body' => 'Eloquent (BD) + Blade (vistas) + Artisan (CLI) + Queue (colas) + Cache (Redis) + Migration (esquema).'],
    ['type' => 'teach', 'title' => 'Instalar Laravel', 'body' => 'Un solo comando y tienes un proyecto profesional completo.', 'code' => "composer create-project laravel/laravel mi-escala\ncd mi-escala\nphp artisan serve"],
    ['type' => 'mentor_say', 'title' => 'Plan de migración', 'body' => '1) Instala Laravel 2) Recrea rutas de EscalaPHP 3) Migra SQLite a migraciones 4) Añade Redis 5) Deploy en VPS.', 'emoji' => '📋'],
    ['type' => 'exercise', 'title' => 'Tu turno — Blade', 'body' => '¿Qué componente de Laravel maneja las plantillas HTML?', 'exercise_index' => 0],
    ['type' => 'exercise', 'title' => 'Tu turno — instalar', 'body' => '¿Qué comando crea un nuevo proyecto Laravel?', 'exercise_index' => 1],
    ['type' => 'project', 'title' => 'Proyecto: Instala Laravel', 'body' => 'Ejecuta composer create-project y recrea la home de EscalaPHP con Blade.'],
    ['type' => 'complete', 'title' => '¡Listo para el mundo real!', 'body' => 'Dominaste PHP desde cero hasta framework profesional. Ve y construye tu imperio.', 'emoji' => '👑'],
];
