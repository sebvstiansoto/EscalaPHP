<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Stash y trabajo en progreso',
    'body' => 'Guardar cambios temporales sin commitear. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📦',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [git stash](/glosario#stash) · [WIP](/glosario#wip) · [Context switch](/glosario#context-switch)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'git stash',
    'body' => 'Guardas cambios locales, vuelves a un working tree limpio, cambias de rama, y luego `git stash pop`.',
    'code' => 'git stash
git stash pop',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Caso real',
    'body' => 'Estás en feature/A pero te piden un hotfix urgente en main — stash, switch, fix, pop.',
    'code' => 'git stash
git stash pop',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Guardar cambios temporales sin commitear. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Git & GitHub**, esto aparece en code reviews, incidentes y entregas diarias. Guardar cambios temporales sin commitear. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'git stash
git stash pop',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'git stash',
      1 => 'git stash pop',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** git stash list muestra todos los stashes guardados.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace git stash?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe git stash y git stash pop** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
