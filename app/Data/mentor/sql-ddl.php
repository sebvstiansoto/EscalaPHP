<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'CREATE TABLE y migraciones',
    'body' => 'Esquema, tipos, claves primarias y foráneas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🗄️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [DDL](/glosario#ddl) · [Schema (esquema)](/glosario#schema) · [Foreign Key](/glosario#foreign-key)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'DDL',
    'body' => 'CREATE, ALTER, DROP definen estructura — no datos.',
    'code' => 'CREATE TABLE posts (
  id INTEGER PRIMARY KEY,
  user_id INTEGER REFERENCES users(id)
);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Migraciones',
    'body' => 'En Laravel/Symfony las migraciones versionan el esquema como Git versiona código.',
    'code' => 'CREATE TABLE products (id INTEGER PRIMARY KEY)',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Esquema, tipos, claves primarias y foráneas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **SQL avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Esquema, tipos, claves primarias y foráneas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'CREATE TABLE posts (
  id INTEGER PRIMARY KEY,
  user_id INTEGER REFERENCES users(id)
);',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'CREATE TABLE posts (',
      1 => '  id INTEGER PRIMARY KEY,',
      2 => '  user_id INTEGER REFERENCES users(id)',
      3 => ');',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** UUID vs auto-increment — debate clásico en APIs.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué define una clave primaria?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe CREATE TABLE products con id INTEGER PRIMARY KEY** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
