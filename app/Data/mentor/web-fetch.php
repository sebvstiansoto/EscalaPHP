<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Fetch y APIs REST',
    'body' => 'Consumir JSON desde tu backend PHP, Python o Node. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [fetch](/glosario#fetch) · [JSON](/glosario#json) · [API](/glosario#api)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'fetch()',
    'body' => 'La API **fetch** pide datos HTTP de forma asíncrona. Las SPAs y Astro islands dependen de esto.',
    'code' => 'fetch(\'/api/users\')
  .then(r => r.json())
  .then(data => console.log(data));',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'JSON',
    'body' => 'Las APIs modernas devuelven JSON. `response.json()` lo parsea a objetos JavaScript.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Consumir JSON desde tu backend PHP, Python o Node. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **HTML, CSS y JavaScript**, esto aparece en code reviews, incidentes y entregas diarias. Consumir JSON desde tu backend PHP, Python o Node. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'fetch(\'/api/users\')
  .then(r => r.json())
  .then(data => console.log(data));',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'fetch(\'/api/users\')',
      1 => '  .then(r => r.json())',
      2 => '  .then(data => console.log(data));',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** fetch + json es el puente frontend ↔ backend.',
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
    'body' => '**Parsea JSON: const data = JSON.parse(\'{"ok":true}\'); console.log(data.ok)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué método convierte la respuesta HTTP a objeto JS?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
