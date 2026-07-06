<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Node.js y el runtime V8',
    'body' => 'JavaScript en el servidor: event loop y npm. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🟢',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Node (nodo)](/glosario#node) · [V8](/glosario#v8) · [Event Loop](/glosario#event-loop)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => '¿Qué es Node?',
    'body' => 'Node ejecuta JavaScript fuera del navegador con el motor **V8** de Chrome. Ideal para APIs y herramientas.',
    'code' => 'console.log("Node " + 20);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Event loop',
    'body' => 'I/O no bloqueante: una sola thread maneja miles de conexiones con callbacks y promesas.',
    'code' => 'console.log("Node " + 20);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** JavaScript en el servidor: event loop y npm. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Node.js backend**, esto aparece en code reviews, incidentes y entregas diarias. JavaScript en el servidor: event loop y npm. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'console.log("Node " + 20);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'console.log("Node " + 20);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Bun y Deno son runtimes alternativos con APIs distintas.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué motor ejecuta JavaScript en Node?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Imprime versión simulada: console.log("Node " + 20)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
