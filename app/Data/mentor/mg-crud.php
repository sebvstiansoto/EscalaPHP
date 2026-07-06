<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'CRUD básico',
    'body' => 'insertOne, find, updateOne, deleteOne. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🍃',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [CRUD](/glosario#crud) · [collection](/glosario#collection) · [Filter (filtro)](/glosario#filter)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Operaciones',
    'body' => 'db.users.insertOne({ name: "Ana", email: "a@test.com" })',
    'code' => 'db.products.find({ price: { $gte: 100 } })
db.products.updateOne({ _id: 1 }, { $set: { stock: 50 } })',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Filtros',
    'body' => 'Operadores: $gt, $in, $regex — query language rica en documentos.',
    'code' => 'db.users.insertOne({ name: "Ana" })',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** insertOne, find, updateOne, deleteOne. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'teach',
    'title' => 'Vocabulario',
    'body' => 'Términos de esta lección: **CRUD**, **collection**, **Filter (filtro)**. Búscalos en el [/glosario](/glosario) si necesitas repaso.',
  ),
  6 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **MongoDB & NoSQL**, esto aparece en code reviews, incidentes y entregas diarias. insertOne, find, updateOne, deleteOne. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'db.products.find({ price: { $gte: 100 } })
db.products.updateOne({ _id: 1 }, { $set: { stock: 50 } })',
    'demo_language' => 'javascript',
  ),
  8 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'db.products.find({ price: { $gte: 100 } })',
      1 => 'db.products.updateOne({ _id: 1 }, { $set: { stock: 50 } })',
    ),
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** _id es ObjectId por defecto.',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Buscar email exacto?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe insertOne** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
