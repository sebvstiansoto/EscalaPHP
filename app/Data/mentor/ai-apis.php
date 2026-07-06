<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'APIs OpenAI y compatibles',
    'body' => 'chat/completions, streaming y keys. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🤖',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [openai](/glosario#openai) · [API](/glosario#api) · [streaming](/glosario#streaming)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Chat Completions',
    'body' => 'POST /v1/chat/completions — messages array system/user/assistant.',
    'code' => '{
  "model": "gpt-4o-mini",
  "messages": [{"role": "user", "content": "Explica REST"}]
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Streaming',
    'body' => 'stream: true — SSE chunks — UX respuesta progresiva.',
    'code' => '{"role": "user", "content": "..."}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** chat/completions, streaming y keys. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **IA & LLMs para devs**, esto aparece en code reviews, incidentes y entregas diarias. chat/completions, streaming y keys. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '{
  "model": "gpt-4o-mini",
  "messages": [{"role": "user", "content": "Explica REST"}]
}',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '{',
      1 => '  "model": "gpt-4o-mini",',
      2 => '  "messages": [{"role": "user", "content": "Explica REST"}]',
      3 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Rate limit por usuario.',
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
    'body' => '**¿API key LLM en prod?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe role user en messages** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de Python. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
