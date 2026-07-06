<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Vistas con Blade',
    'body' => 'Templates, layouts, @foreach y componentes. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔴',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Blade](/glosario#blade) · [Template (plantilla)](/glosario#template) · [Layout](/glosario#layout)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Blade',
    'body' => 'Motor de plantillas de Laravel. Sintaxis limpia: `{{ $name }}`, `@if`, `@foreach`.',
    'code' => '@foreach($users as $user)
  <p>{{ $user->name }}</p>
@endforeach',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Layouts',
    'body' => '@extends y @section evitan duplicar header/footer en cada vista.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Templates, layouts, @foreach y componentes. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Laravel desde cero**, esto aparece en code reviews, incidentes y entregas diarias. Templates, layouts, @foreach y componentes. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '@foreach($users as $user)
  <p>{{ $user->name }}</p>
@endforeach',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '@foreach($users as $user)',
      1 => '  <p>{{ $user->name }}</p>',
      2 => '@endforeach',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** {!! !!} sin escape solo para HTML confiable.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo imprimes una variable escapada en Blade?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe @foreach en Blade** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  11 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  12 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
