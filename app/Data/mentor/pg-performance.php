<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Performance tuning',
    'body' => 'VACUUM, connection limits y slow queries. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐘',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [vacuum](/glosario#vacuum) · [analyze](/glosario#analyze) · [slow-query](/glosario#slow-query)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Mantenimiento',
    'body' => 'VACUUM reclaim dead tuples — autovacuum en prod. ANALYZE actualiza estadísticas para planner.',
    'code' => 'EXPLAIN ANALYZE SELECT * FROM orders WHERE user_id = 42;
VACUUM ANALYZE orders;',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Slow queries',
    'body' => 'log_min_duration_statement en postgresql.conf — pg_stat_statements extension top queries.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** VACUUM, connection limits y slow queries. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **PostgreSQL**, esto aparece en code reviews, incidentes y entregas diarias. VACUUM, connection limits y slow queries. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'EXPLAIN ANALYZE SELECT * FROM orders WHERE user_id = 42;
VACUUM ANALYZE orders;',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'EXPLAIN ANALYZE SELECT * FROM orders WHERE user_id = 42;',
      1 => 'VACUUM ANALYZE orders;',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso elasticsearch para search heavy.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Seq Scan en EXPLAIN en tabla grande?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿VACUUM purpose?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de SQL. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
