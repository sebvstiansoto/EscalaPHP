<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Modelado y Mongoose',
    'body' => 'Schemas en Node, validación y refs. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🍃',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [mongoose](/glosario#mongoose) · [Schema (esquema)](/glosario#schema) · [ref](/glosario#ref)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Mongoose',
    'body' => 'ODM para Node — Schema define tipos y validación aunque Mongo sea schemaless.',
    'code' => 'const userSchema = new Schema({
  email: { type: String, required: true, unique: true },
  posts: [{ type: ObjectId, ref: \'Post\' }]
});',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Refs',
    'body' => 'populate("posts") — simula join cuando necesitas relaciones.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Schemas en Node, validación y refs. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **MongoDB & NoSQL**, esto aparece en code reviews, incidentes y entregas diarias. Schemas en Node, validación y refs. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const userSchema = new Schema({
  email: { type: String, required: true, unique: true },
  posts: [{ type: ObjectId, ref: \'Post\' }]
});',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const userSchema = new Schema({',
      1 => '  email: { type: String, required: true, unique: true },',
      2 => '  posts: [{ type: ObjectId, ref: \'Post\' }]',
      3 => '});',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Combina con curso Node.js backend.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Mongoose es...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿populate() hace...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
