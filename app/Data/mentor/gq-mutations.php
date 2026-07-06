<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Mutations',
    'body' => 'Crear, actualizar y borrar con GraphQL. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '◈',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [mutation](/glosario#mutation) · [input](/glosario#input) · [write](/glosario#write)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Mutation',
    'body' => 'type Mutation { createUser(input: CreateUserInput!): User! } — escrituras explícitas.',
    'code' => 'mutation {
  createUser(input: { name: "Ana", email: "a@t.com" }) {
    id
    name
  }
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Input types',
    'body' => 'input CreateUserInput { name: String! email: String! } — agrupa argumentos.',
    'code' => 'mutation { createPost(...) { id } }',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Crear, actualizar y borrar con GraphQL. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **GraphQL**, esto aparece en code reviews, incidentes y entregas diarias. Crear, actualizar y borrar con GraphQL. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'mutation {
  createUser(input: { name: "Ana", email: "a@t.com" }) {
    id
    name
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
      0 => 'mutation {',
      1 => '  createUser(input: { name: "Ana", email: "a@t.com" }) {',
      2 => '    id',
      3 => '    name',
      4 => '  }',
      5 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Idempotencia no garantizada en mutations.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Queries vs mutations convención?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe mutation { createPost** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
