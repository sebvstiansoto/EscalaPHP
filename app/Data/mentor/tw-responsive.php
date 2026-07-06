<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Diseño responsive',
    'body' => 'Breakpoints sm, md, lg y mobile-first. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '💨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Breakpoint](/glosario#breakpoint) · [Diseño responsive](/glosario#responsive) · [Mobile-first](/glosario#mobile-first)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Mobile-first',
    'body' => 'Estilos base para móvil; `md:flex` aplica desde tablet.',
    'code' => 'class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Breakpoints',
    'body' => 'sm 640px, md 768px, lg 1024px, xl 1280px — prefijo antes de la utilidad.',
    'code' => 'grid grid-cols-1 md:grid-cols-3',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Breakpoints sm, md, lg y mobile-first. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Tailwind CSS**, esto aparece en code reviews, incidentes y entregas diarias. Breakpoints sm, md, lg y mobile-first. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** hidden md:block oculta en móvil, muestra en desktop.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace md:grid-cols-2?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe grid-cols-1 md:grid-cols-3** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
