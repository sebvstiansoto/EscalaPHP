<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Queries y tipos',
    'body' => 'Schema SDL, resolvers y campos anidados. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '◈',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Query string](/glosario#query) · [Type (tipo)](/glosario#type) · [resolver](/glosario#resolver)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Schema',
    'body' => 'type Query { user(id: ID!): User } type User { id: ID! name: String! }',
    'code' => 'query {
  user(id: "1") {
    id
    name
    posts { title }
  }
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Resolver',
    'body' => 'Función que devuelve dato para cada campo — conecta schema con BD.',
    'code' => 'query { user { name } }',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Schema SDL, resolvers y campos anidados. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **GraphQL**, esto aparece en code reviews, incidentes y entregas diarias. Schema SDL, resolvers y campos anidados. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'query {
  user(id: "1") {
    id
    name
    posts { title }
  }
}',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'query {',
      1 => '  user(id: "1") {',
      2 => '    id',
      3 => '    name',
      4 => '    posts { title }',
      5 => '  }',
      6 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** [User!]! = lista non-null de users non-null.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Signo ! en ID!?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe query { user { name } }** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
