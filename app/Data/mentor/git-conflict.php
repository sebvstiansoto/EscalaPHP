<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Resolver conflictos de merge',
    'body' => 'Marcadores <<<<<<, elegir cambios y completar merge. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📦',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Merge conflict](/glosario#conflict) · [Merge](/glosario#merge) · [Conflict resolution](/glosario#resolution)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => '¿Por qué conflictos?',
    'body' => 'Dos personas editaron las mismas líneas. Git no puede decidir solo — tú eliges.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Marcadores',
    'body' => '<<<<<<< HEAD\\n tu código\\n=======\\n su código\\n>>>>>>> rama',
    'code' => '# Edita el archivo, quita marcadores, deja la versión correcta
git add archivo.php
git commit',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Marcadores <<<<<<, elegir cambios y completar merge. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Git & GitHub**, esto aparece en code reviews, incidentes y entregas diarias. Marcadores <<<<<<, elegir cambios y completar merge. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Edita el archivo, quita marcadores, deja la versión correcta
git add archivo.php
git commit',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Edita el archivo, quita marcadores, deja la versión correcta',
      1 => 'git add archivo.php',
      2 => 'git commit',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** VS Code y Cursor tienen UI visual para conflictos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**Tras resolver conflictos manualmente, ¿qué sigue?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cómo evitas muchos conflictos?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
