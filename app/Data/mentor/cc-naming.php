<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Nombres que comunican',
    'body' => 'Variables, funciones y constantes. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '✨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [naming](/glosario#naming) · [intent](/glosario#intent) · [domain](/glosario#domain)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Nombres',
    'body' => 'getUserById > getData. isEmailVerified > flag. Evita abreviaturas crípticas y noise (data, info, manager).',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-naming\';',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Dominio',
    'body' => 'Ubiquitous language — mismos términos que negocio y docs.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-naming\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Variables, funciones y constantes. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Clean Code**, esto aparece en code reviews, incidentes y entregas diarias. Variables, funciones y constantes. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-naming\';',
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
      2 => 'echo \'Practica: cc-naming\';',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Bool returns: is/has/can prefix.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Mejor nombre función?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Constante mágica 86400?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
