<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Matrix builds multi-versión',
    'body' => 'Probar PHP 8.2 y 8.3 en paralelo con strategy.matrix. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔄',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Matrix strategy](/glosario#matrix) · [Ejecución paralela](/glosario#parallel) · [Versiones (matrix)](/glosario#versions)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Strategy matrix',
    'body' => 'GitHub Actions puede correr el mismo job con varias versiones de PHP, Node o OS en paralelo.',
    'code' => 'strategy:
  matrix:
    php: [\'8.2\', \'8.3\']',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Por qué',
    'body' => 'Detectas incompatibilidades antes de que un usuario en PHP 8.2 reporte el bug.',
    'code' => 'strategy:
  matrix:
    php: [\'8.3\']',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Probar PHP 8.2 y 8.3 en paralelo con strategy.matrix. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **CI/CD & GitHub Actions**, esto aparece en code reviews, incidentes y entregas diarias. Probar PHP 8.2 y 8.3 en paralelo con strategy.matrix. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'strategy:
  matrix:
    php: [\'8.2\', \'8.3\']',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'strategy:',
      1 => '  matrix:',
      2 => '    php: [\'8.2\', \'8.3\']',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** fail-fast: false sigue aunque una versión falle.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace strategy.matrix en GitHub Actions?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe strategy: y matrix: con php en el YAML** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
