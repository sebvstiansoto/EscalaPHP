<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Commits e historial',
    'body' => 'init, add, commit y log — la base de Git. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📦',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Git](/glosario#git) · [Commit](/glosario#commit) · [Staging](/glosario#staging)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => '¿Qué es Git?',
    'body' => 'Git guarda **snapshots** de tu código. Cada commit es un punto en el historial al que puedes volver.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Flujo básico',
    'body' => '`git add` prepara cambios. `git commit` los guarda con un mensaje descriptivo.',
    'code' => 'git add .
git commit -m "feat: login de usuarios"',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** init, add, commit y log — la base de Git. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Git & GitHub**, esto aparece en code reviews, incidentes y entregas diarias. init, add, commit y log — la base de Git. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'git add .
git commit -m "feat: login de usuarios"',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'git add .',
      1 => 'git commit -m "feat: login de usuarios"',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Mensajes claros: "feat:", "fix:", "docs:" — convención Conventional Commits.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-git](/conexiones#conn-git).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué comando guarda cambios en el historial de Git?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe los dos comandos para añadir todo y commitear con mensaje "inicio"** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
