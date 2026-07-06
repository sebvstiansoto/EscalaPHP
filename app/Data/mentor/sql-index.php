<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Índices y performance',
    'body' => 'EXPLAIN, índices y consultas lentas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🗄️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Índice (index)](/glosario#index) · [EXPLAIN](/glosario#explain) · [Performance](/glosario#performance)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Índices',
    'body' => 'Un **índice** es como el índice de un libro: encuentra filas sin escanear toda la tabla.',
    'code' => 'CREATE INDEX idx_users_city ON users(city)',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'EXPLAIN',
    'body' => '`EXPLAIN QUERY PLAN` muestra cómo SQLite ejecutará tu consulta.',
    'code' => 'CREATE INDEX idx_users_city ON users(city)',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** EXPLAIN, índices y consultas lentas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **SQL avanzado**, esto aparece en code reviews, incidentes y entregas diarias. EXPLAIN, índices y consultas lentas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'CREATE INDEX idx_users_city ON users(city)',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'CREATE INDEX idx_users_city ON users(city)',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Índice compuesto (city, name) para filtros combinados.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cuándo crear un índice?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe el SQL para crear índice idx_users_city en users(city)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
