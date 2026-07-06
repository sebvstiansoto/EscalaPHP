<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Routing avanzado',
    'body' => 'Path params, query, body y métodos HTTP. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Routing](/glosario#routing) · [Path parameter](/glosario#path-param) · [Query string](/glosario#query)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Tipos en rutas',
    'body' => 'FastAPI valida tipos automáticamente desde anotaciones Python.',
    'code' => '@app.get(\'/users/{user_id}\')
def get_user(user_id: int):
    return {\'id\': user_id}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Query y body',
    'body' => 'Parámetros de función = query string. Pydantic model = JSON body en POST.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Path params, query, body y métodos HTTP. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **FastAPI avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Path params, query, body y métodos HTTP. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '@app.get(\'/users/{user_id}\')
def get_user(user_id: int):
    return {\'id\': user_id}',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '@app.get(\'/users/{user_id}\')',
      1 => 'def get_user(user_id: int):',
      2 => '    return {\'id\': user_id}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Abre /docs — OpenAPI generado sin esfuerzo.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo FastAPI sabe que user_id es entero?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe @app.get con path /items/{item_id}** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de Python. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
