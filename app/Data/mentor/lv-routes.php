<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Rutas y controladores',
    'body' => 'routes/web.php, Route::get y controllers. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔴',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Routes (rutas)](/glosario#routes) · [Controller](/glosario#controller) · [Middleware](/glosario#middleware)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Definir rutas',
    'body' => 'En routes/web.php defines URLs y qué código ejecutan.',
    'code' => 'Route::get(\'/users\', [UserController::class, \'index\']);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Controladores',
    'body' => 'php artisan make:controller UserController — separas HTTP de lógica de negocio.',
    'code' => 'Route::get(\'/hola\', fn () => \'Hola\');',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** routes/web.php, Route::get y controllers. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Laravel desde cero**, esto aparece en code reviews, incidentes y entregas diarias. routes/web.php, Route::get y controllers. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'Route::get(\'/users\', [UserController::class, \'index\']);',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'Route::get(\'/users\', [UserController::class, \'index\']);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Route::resource genera CRUD completo en una línea.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-middleware](/conexiones#conn-middleware).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde defines rutas web en Laravel?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe Route::get con una ruta /hola** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
