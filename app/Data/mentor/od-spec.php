<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Escribir spec OpenAPI',
    'body' => 'paths, components, schemas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📋',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [paths](/glosario#paths) · [components](/glosario#components) · [Schema (esquema)](/glosario#schema)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Structure',
    'body' => 'openapi: 3.0.0, info, paths, components/schemas — $ref reuse.',
    'code' => 'paths:
  /users:
    get:
      responses:
        \'200\':
          description: OK',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Schemas',
    'body' => 'type object properties required — reusable components/schemas/User.',
    'code' => 'openapi: 3.0.3',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** paths, components, schemas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **OpenAPI & Swagger**, esto aparece en code reviews, incidentes y entregas diarias. paths, components, schemas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'paths:
  /users:
    get:
      responses:
        \'200\':
          description: OK',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'paths:',
      1 => '  /users:',
      2 => '    get:',
      3 => '      responses:',
      4 => '        \'200\':',
      5 => '          description: OK',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** #/components/schemas/User.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿$ref?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe openapi: 3** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
