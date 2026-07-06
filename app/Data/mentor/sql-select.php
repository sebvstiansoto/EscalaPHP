<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'SELECT y filtros',
    'body' => 'Consultar datos con WHERE, ORDER BY y LIMIT. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🗄️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SELECT](/glosario#select) · [WHERE](/glosario#where) · [Filter (filtro)](/glosario#filter)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SELECT básico',
    'body' => 'SQL lee datos de tablas. `SELECT` elige columnas, `FROM` indica la tabla.',
    'code' => 'SELECT name FROM users WHERE id = 1',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Tablas de práctica',
    'body' => 'Usamos `users` (id, name, city) y `orders` (id, user_id, product, amount). Las consultas corren en SQLite real.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Consultar datos con WHERE, ORDER BY y LIMIT. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **SQL avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Consultar datos con WHERE, ORDER BY y LIMIT. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SELECT name FROM users WHERE id = 1',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SELECT name FROM users WHERE id = 1',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Índices en columnas del WHERE aceleran consultas enormemente.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué cláusula filtra filas en SQL?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Selecciona name de users donde city es Madrid** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
