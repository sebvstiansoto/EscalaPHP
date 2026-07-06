<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'API REST con Sanctum',
    'body' => 'API Resources, JSON y tokens para SPAs. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔴',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [API](/glosario#api) · [Sanctum](/glosario#sanctum) · [Resource (API)](/glosario#resource)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'API Resources',
    'body' => 'Transforman modelos a JSON consistente — ocultas campos sensibles (password).',
    'code' => 'return UserResource::collection(User::paginate());',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Sanctum',
    'body' => 'Tokens API para React/Vue/mobile. SPA auth con cookies + CSRF.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-api\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** API Resources, JSON y tokens para SPAs. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Laravel desde cero**, esto aparece en code reviews, incidentes y entregas diarias. API Resources, JSON y tokens para SPAs. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'return UserResource::collection(User::paginate());',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'return UserResource::collection(User::paginate());',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Tu React frontend consume la misma API que construyes aquí.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-api](/conexiones#conn-api).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué paquete Laravel autentica APIs y SPAs?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Para qué sirve API Resource?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
