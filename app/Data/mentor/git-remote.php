<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Remotos, push y pull',
    'body' => 'origin, fetch, pull y sincronizar con GitHub. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📦',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Remote](/glosario#remote) · [git push](/glosario#push) · [git pull](/glosario#pull) · [origin](/glosario#origin)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Repositorio remoto',
    'body' => '**origin** apunta a GitHub/GitLab. `git push` sube commits; `git pull` trae cambios del equipo.',
    'code' => 'git pull origin main',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Flujo diario',
    'body' => 'Antes de trabajar: `git pull`. Al terminar: `git push`.',
    'code' => 'git pull origin main
git push origin feature/login',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** origin, fetch, pull y sincronizar con GitHub. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Git & GitHub**, esto aparece en code reviews, incidentes y entregas diarias. origin, fetch, pull y sincronizar con GitHub. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'git pull origin main',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'git pull origin main',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Si push falla, alguien subió antes — haz pull y resuelve.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué comando sube commits al remoto?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe git pull origin main** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
