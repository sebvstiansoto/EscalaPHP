<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Agregaciones y GROUP BY',
    'body' => 'COUNT, SUM, AVG y agrupar resultados. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🗄️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Función agregada](/glosario#aggregate) · [GROUP BY](/glosario#group-by) · [HAVING](/glosario#having)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Funciones de agregación',
    'body' => 'COUNT, SUM, AVG, MIN, MAX resumen filas.',
    'code' => 'SELECT city, COUNT(*) AS total
FROM users
GROUP BY city',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'HAVING',
    'body' => 'Filtra **después** de agrupar — como WHERE pero para grupos.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** COUNT, SUM, AVG y agrupar resultados. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **SQL avanzado**, esto aparece en code reviews, incidentes y entregas diarias. COUNT, SUM, AVG y agrupar resultados. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SELECT city, COUNT(*) AS total
FROM users
GROUP BY city',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SELECT city, COUNT(*) AS total',
      1 => 'FROM users',
      2 => 'GROUP BY city',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Toda columna no agregada debe estar en GROUP BY.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué cláusula agrupa filas con la misma ciudad?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Cuenta cuántos users hay en total** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
