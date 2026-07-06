<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Conectar a base de datos',
    'body' => 'pg, Prisma o better-sqlite3 desde Node. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🟢',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Database (base de datos)](/glosario#database) · [PostgreSQL (pg)](/glosario#pg) · [ORM](/glosario#orm)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Drivers',
    'body' => '**pg** para PostgreSQL, **mysql2** para MySQL, **better-sqlite3** para SQLite — como PDO en PHP.',
    'code' => 'SELECT * FROM users WHERE id = $1',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'ORM',
    'body' => 'Prisma o Drizzle generan queries tipadas — similar a Eloquent en Laravel.',
    'code' => 'SELECT * FROM users WHERE id = $1',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** pg, Prisma o better-sqlite3 desde Node. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Node.js backend**, esto aparece en code reviews, incidentes y entregas diarias. pg, Prisma o better-sqlite3 desde Node. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SELECT * FROM users WHERE id = $1',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SELECT * FROM users WHERE id = $1',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Siempre usa queries parametrizadas — evita SQL injection.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-orm](/conexiones#conn-orm).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Equivalente a PDO en Node para Postgres?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe SELECT * FROM users WHERE id = $1 (SQL parametrizado)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
