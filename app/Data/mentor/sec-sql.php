<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Inyección SQL',
    'body' => 'Prepared statements y ORM seguro. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🛡️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SQL Injection](/glosario#sql-injection) · [Consulta preparada](/glosario#prepared) · [PDO](/glosario#pdo)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'El ataque',
    'body' => 'Input malicioso como `\' OR 1=1 --` manipula tu query y puede leer o borrar datos.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-sql\';',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Defensa',
    'body' => '**Prepared statements** siempre. PDO, Eloquent, SQLAlchemy parametrizan automáticamente.',
    'code' => '$stmt = $pdo->prepare(\'SELECT * FROM users WHERE email = ?\');
$stmt->execute([$email]);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Prepared statements y ORM seguro. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Seguridad web**, esto aparece en code reviews, incidentes y entregas diarias. Prepared statements y ORM seguro. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-sql\';',
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
      1 => 'declare(strict_types=1);',
      2 => 'echo \'Practica: sec-sql\';',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Eloquent where() es seguro; DB::raw() con cuidado.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Defensa #1 contra SQL injection?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Es seguro esto? $pdo->query("SELECT * FROM u WHERE id=$id")** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
