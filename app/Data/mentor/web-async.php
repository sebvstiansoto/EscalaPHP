<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Async/await y Promesas',
    'body' => 'Código asíncrono legible: Promises, async/await y errores. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Asíncrono (async)](/glosario#async) · [Promise (promesa)](/glosario#promise) · [await](/glosario#await)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Promesas',
    'body' => 'Una **Promise** representa un valor futuro: éxito (resolve) o error (reject).',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'async/await',
    'body' => 'Sintaxis azucarada sobre promesas — código que parece síncrono.',
    'code' => 'async function cargar() {
  const r = await fetch(\'/api\');
  return r.json();
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Código asíncrono legible: Promises, async/await y errores. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **HTML, CSS y JavaScript**, esto aparece en code reviews, incidentes y entregas diarias. Código asíncrono legible: Promises, async/await y errores. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'async function cargar() {
  const r = await fetch(\'/api\');
  return r.json();
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
      0 => 'async function cargar() {',
      1 => '  const r = await fetch(\'/api\');',
      2 => '  return r.json();',
      3 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** async/await + try/catch maneja errores de red limpiamente.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**Promesa resuelta: Promise.resolve(42).then(n => console.log(n))** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué palabra clave espera una Promise dentro de async?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
