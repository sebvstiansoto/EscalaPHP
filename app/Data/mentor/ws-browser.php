<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'WebSocket en el navegador',
    'body' => 'new WebSocket, onmessage y onopen. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔌',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [websocket-api](/glosario#websocket-api) · [Eventos (arquitectura)](/glosario#events) · [JSON](/glosario#json)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'API nativa',
    'body' => 'const ws = new WebSocket("wss://host/ws"); ws.onmessage = e => ...',
    'code' => 'const ws = new WebSocket(\'wss://ejemplo.com/ws\');
ws.onopen = () => ws.send(JSON.stringify({ type: \'join\' }));
ws.onmessage = (e) => console.log(JSON.parse(e.data));',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'wss://',
    'body' => 'Siempre WSS en producción — WS plano es inseguro.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** new WebSocket, onmessage y onopen. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **WebSockets y tiempo real**, esto aparece en code reviews, incidentes y entregas diarias. new WebSocket, onmessage y onopen. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const ws = new WebSocket(\'wss://ejemplo.com/ws\');
ws.onopen = () => ws.send(JSON.stringify({ type: \'join\' }));
ws.onmessage = (e) => console.log(JSON.parse(e.data));',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const ws = new WebSocket(\'wss://ejemplo.com/ws\');',
      1 => 'ws.onopen = () => ws.send(JSON.stringify({ type: \'join\' }));',
      2 => 'ws.onmessage = (e) => console.log(JSON.parse(e.data));',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** JSON.stringify para objetos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Enviar datos al servidor?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Parsea mensaje: console.log(JSON.parse(\'{"ok":true}\').ok)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
