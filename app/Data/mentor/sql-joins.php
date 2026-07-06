<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'JOINs y relaciones',
    'body' => 'INNER JOIN, LEFT JOIN y subconsultas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🗄️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [JOIN](/glosario#join) · [INNER JOIN](/glosario#inner) · [LEFT JOIN](/glosario#left)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Relaciones',
    'body' => 'Las tablas se relacionan por claves foráneas. `orders.user_id` apunta a `users.id`.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'INNER JOIN',
    'body' => 'Combina filas que coinciden en ambas tablas.',
    'code' => 'SELECT u.name, o.product
FROM users u
INNER JOIN orders o ON u.id = o.user_id',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** INNER JOIN, LEFT JOIN y subconsultas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **SQL avanzado**, esto aparece en code reviews, incidentes y entregas diarias. INNER JOIN, LEFT JOIN y subconsultas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SELECT u.name, o.product
FROM users u
INNER JOIN orders o ON u.id = o.user_id',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SELECT u.name, o.product',
      1 => 'FROM users u',
      2 => 'INNER JOIN orders o ON u.id = o.user_id',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** LEFT JOIN incluye usuarios sin pedidos (NULL en orders).',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué JOIN devuelve solo filas con coincidencia en ambas tablas?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Lista product y amount de orders del usuario Ana (usa JOIN con users)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
