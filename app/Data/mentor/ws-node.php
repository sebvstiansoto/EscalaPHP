<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Servidor con Node.js',
    'body' => 'ws library, broadcast y rooms. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔌',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [nodejs](/glosario#nodejs) · [broadcast](/glosario#broadcast) · [room](/glosario#room)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Servidor WS',
    'body' => 'Librería `ws` en Node escucha upgrades HTTP.',
    'code' => 'const { WebSocketServer } = require(\'ws\');
const wss = new WebSocketServer({ port: 8080 });
wss.on(\'connection\', (ws) => {
  ws.on(\'message\', (data) => wss.clients.forEach(c => c.send(data)));
});',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Broadcast',
    'body' => 'Reenviar mensaje a todos los clientes conectados — chat básico.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** ws library, broadcast y rooms. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **WebSockets y tiempo real**, esto aparece en code reviews, incidentes y entregas diarias. ws library, broadcast y rooms. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const { WebSocketServer } = require(\'ws\');
const wss = new WebSocketServer({ port: 8080 });
wss.on(\'connection\', (ws) => {
  ws.on(\'message\', (data) => wss.clients.forEach(c => c.send(data)));
});',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const { WebSocketServer } = require(\'ws\');',
      1 => 'const wss = new WebSocketServer({ port: 8080 });',
      2 => 'wss.on(\'connection\', (ws) => {',
      3 => '  ws.on(\'message\', (data) => wss.clients.forEach(c => c.send(data)));',
      4 => '});',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Sticky sessions si usas múltiples servidores.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Node para WebSockets porque...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe WebSocketServer en Node** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
