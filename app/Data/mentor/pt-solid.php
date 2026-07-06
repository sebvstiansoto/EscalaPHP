<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Principios SOLID',
    'body' => 'S, O, L, I, D aplicados a PHP real. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SOLID](/glosario#solid) · [SRP](/glosario#srp) · [OCP](/glosario#ocp)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SOLID',
    'body' => '**S**ingle responsibility, **O**pen/closed, **L**iskov, **I**nterface segregation, **D**ependency inversion.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-solid\';',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'SRP en práctica',
    'body' => 'Una clase = una razón para cambiar. Controller no envía emails — delega a Listener.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-solid\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** S, O, L, I, D aplicados a PHP real. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Patrones de diseño**, esto aparece en code reviews, incidentes y entregas diarias. S, O, L, I, D aplicados a PHP real. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-solid\';',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<?php',
      1 => 'declare(strict_types=1);',
      2 => 'echo \'Practica: pt-solid\';',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Si describes clase con "y", probablemente viola SRP.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Single Responsibility significa...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Open/Closed?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
