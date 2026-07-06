<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Organizar como senior', 'body' => 'Sin estructura, un proyecto de 3 archivos se vuelve caos con 300. **MVC** es la solución.', 'emoji' => '🏗️'],
    ['type' => 'visual', 'visual' => 'mvc-diagram', 'title' => 'Las 3 capas', 'body' => 'Modelo (datos) → Controlador (lógica) → Vista (HTML). Separadas, no mezcladas.'],
    ['type' => 'show_file', 'file' => 'app/Controllers/HomeController.php', 'title' => 'Controlador real', 'body' => 'Este archivo recibe la petición de / y decide qué mostrar.', 'code' => "public function index(): void {\n    View::show('home', [...]);\n}"],
    ['type' => 'show_file', 'file' => 'resources/views/home.php', 'title' => 'Vista real', 'body' => 'HTML puro que el usuario ve. Sin lógica de negocio aquí.', 'code' => '<section class="hero">...</section>'],
    ['type' => 'show_file', 'file' => 'app/Database.php', 'title' => 'Modelo real', 'body' => 'Acceso a datos. SQLite, tablas, consultas. El Modelo no sabe de HTML.', 'code' => "public function migrate(): void { ... }"],
    ['type' => 'exercise', 'title' => 'Tu turno — ¿Vista?', 'body' => '¿Qué capa muestra HTML al usuario?', 'exercise_index' => 0],
    ['type' => 'exercise', 'title' => 'Tu turno — ¿Controlador?', 'body' => '¿Qué capa decide qué hacer con una petición HTTP?', 'exercise_index' => 1],
    ['type' => 'project', 'title' => 'Mini-proyecto: Encuentra el MVC', 'body' => 'Localiza Modelo, Vista y Controlador en las carpetas de EscalaPHP.'],
    ['type' => 'complete', 'title' => '¡Arquitectura clara!', 'body' => 'Piensas como un senior. Siguiente: base de datos.', 'emoji' => '🏛️'],
];
