<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Deno fundamentals',
    'body' => 'Permisos, std library y Fresh. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🦕',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Permission](/glosario#permission) · [deno](/glosario#deno) · [fresh](/glosario#fresh)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Permisos',
    'body' => 'deno run --allow-net --allow-read app.ts — security by default.',
    'code' => 'Deno.serve((req) => new Response("OK"))',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'APIs web',
    'body' => 'Deno.serve handler — fetch, WebCrypto, WebSocket built-in.',
    'code' => 'Deno.serve((req) => new Response("OK"))',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Permisos, std library y Fresh. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Deno & Bun**, esto aparece en code reviews, incidentes y entregas diarias. Permisos, std library y Fresh. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'Deno.serve((req) => new Response("OK"))',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'Deno.serve((req) => new Response("OK"))',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Fresh framework meta Deno.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Deno.serve?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe Deno.serve** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
