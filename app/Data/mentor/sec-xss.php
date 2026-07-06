<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'XSS — Cross-Site Scripting',
    'body' => 'Reflejado, almacenado y cómo escapar output. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🛡️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [XSS](/glosario#xss) · [Escape (escapar)](/glosario#escape) · [Sanitizar](/glosario#sanitize)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'XSS',
    'body' => 'Un atacante inyecta `<script>` que corre en el navegador de otra víctima — roba cookies, sesiones.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Defensa',
    'body' => 'Escapa output: htmlspecialchars en PHP, {{ }} en Blade, React escapa JSX por defecto.',
    'code' => 'echo htmlspecialchars($userInput, ENT_QUOTES, \'UTF-8\');',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Reflejado, almacenado y cómo escapar output. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Seguridad web**, esto aparece en code reviews, incidentes y entregas diarias. Reflejado, almacenado y cómo escapar output. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'echo htmlspecialchars($userInput, ENT_QUOTES, \'UTF-8\');',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'echo htmlspecialchars($userInput, ENT_QUOTES, \'UTF-8\');',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** CSP (Content-Security-Policy) es segunda línea de defensa.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo previene XSS al mostrar input de usuario?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe htmlspecialchars con ENT_QUOTES** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
