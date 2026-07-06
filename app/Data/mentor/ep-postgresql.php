<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'PostgreSQL en producción',
    'body' => 'Migrar de SQLite, índices, conexiones y pooling. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏢',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [PostgreSQL](/glosario#postgresql) · [Índice (index)](/glosario#index) · [Connection Pool](/glosario#connection-pool)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SQLite → PostgreSQL',
    'body' => 'SQLite enseña conceptos; **PostgreSQL** aguanta millones de filas, concurrencia y réplicas.',
    'code' => '<?php
$pdo = new PDO(\'sqlite::memory:\');
$stmt = $pdo->prepare(\'SELECT * FROM users WHERE id = ?\');
$stmt->execute([1]);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Migrar de SQLite, índices, conexiones y pooling. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Checklist de dominio',
    'body' => 'Antes de avanzar confirma: entiendes el concepto, puedes nombrar un caso real y resolviste los ejercicios sin copiar.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **PHP para grandes empresas**, esto aparece en code reviews, incidentes y entregas diarias. Migrar de SQLite, índices, conexiones y pooling. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
$pdo = new PDO(\'sqlite::memory:\');
$stmt = $pdo->prepare(\'SELECT * FROM users WHERE id = ?\');
$stmt->execute([1]);',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<?php',
      1 => '$pdo = new PDO(\'sqlite::memory:\');',
      2 => '$stmt = $pdo->prepare(\'SELECT * FROM users WHERE id = ?\');',
      3 => '$stmt->execute([1]);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** EscalaPHP ya soporta `DB_DRIVER=pgsql` en `.env`.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-postgresql](/conexiones#conn-postgresql).',
  ),
  12 => 
  array (
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '¿Por qué usar PostgreSQL en vez de SQLite en producción?',
    'exercise_index' => 0,
  ),
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
