<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Tipos y JSONB',
    'body' => 'Tipos nativos, arrays y documentos JSON en SQL. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐘',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [JSONB](/glosario#jsonb) · [UUID](/glosario#uuid) · [Tipos de datos SQL](/glosario#types)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Tipos útiles',
    'body' => 'UUID, TIMESTAMPTZ, BOOLEAN, NUMERIC — más precisos que VARCHAR genérico.',
    'code' => 'CREATE TABLE events (
  id UUID PRIMARY KEY,
  meta JSONB,
  created_at TIMESTAMPTZ DEFAULT NOW()
);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'JSONB',
    'body' => 'Guarda JSON indexable — flexible sin schema rígido para metadata.',
    'code' => 'meta JSONB',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tipos nativos, arrays y documentos JSON en SQL. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **PostgreSQL**, esto aparece en code reviews, incidentes y entregas diarias. Tipos nativos, arrays y documentos JSON en SQL. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'CREATE TABLE events (
  id UUID PRIMARY KEY,
  meta JSONB,
  created_at TIMESTAMPTZ DEFAULT NOW()
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
      0 => 'CREATE TABLE events (',
      1 => '  id UUID PRIMARY KEY,',
      2 => '  meta JSONB,',
      3 => '  created_at TIMESTAMPTZ DEFAULT NOW()',
      4 => ');',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** WHERE meta->>\'country\' = \'ES\' filtra dentro del JSON.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Ventaja de JSONB sobre JSON en Postgres?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe columna meta JSONB en CREATE TABLE** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
