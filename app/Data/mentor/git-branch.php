<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Branches y merge',
    'body' => 'Ramas feature, merge y resolver conflictos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📦',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Branch (rama)](/glosario#branch) · [Merge](/glosario#merge) · [Feature branch](/glosario#feature)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => '¿Por qué ramas?',
    'body' => 'Las ramas aíslan tu trabajo. `main` queda estable mientras desarrollas en `feature/login`.',
    'code' => 'git merge feature/login',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Crear y fusionar',
    'body' => 'Creas rama, trabajas, y fusionas a main cuando está lista.',
    'code' => 'git checkout -b feature/login
git merge feature/login',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Ramas feature, merge y resolver conflictos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Git & GitHub**, esto aparece en code reviews, incidentes y entregas diarias. Ramas feature, merge y resolver conflictos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'git merge feature/login',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'git merge feature/login',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** En Git moderno también: `git switch -c feature/x`.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué comando crea y cambia a una rama nueva?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe el comando para fusionar la rama feature/login en la rama actual** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
