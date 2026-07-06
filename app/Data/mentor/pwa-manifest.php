<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Web App Manifest',
    'body' => 'manifest.json, icons y display. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📲',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [manifest](/glosario#manifest) · [icon](/glosario#icon) · [display](/glosario#display)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Manifest',
    'body' => '{"name":"App","short_name":"App","start_url":"/","display":"standalone","icons":[...]}',
    'code' => '{
  "name": "Mi PWA",
  "display": "standalone",
  "theme_color": "#000"
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Install',
    'body' => 'beforeinstallprompt event — custom install button UX.',
    'code' => '"start_url": "/"',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** manifest.json, icons y display. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **PWA**, esto aparece en code reviews, incidentes y entregas diarias. manifest.json, icons y display. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '{
  "name": "Mi PWA",
  "display": "standalone",
  "theme_color": "#000"
}',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '{',
      1 => '  "name": "Mi PWA",',
      2 => '  "display": "standalone",',
      3 => '  "theme_color": "#000"',
      4 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** theme_color status bar mobile.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿display standalone?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe start_url en manifest** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
