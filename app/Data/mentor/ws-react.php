<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'React + WebSocket',
    'body' => 'useEffect, cleanup y estado en chat. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔌',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [React](/glosario#react) · [useEffect](/glosario#useeffect) · [chat](/glosario#chat)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Hook pattern',
    'body' => 'useEffect abre WS al montar, return () => ws.close() al desmontar.',
    'code' => 'useEffect(() => {
  const ws = new WebSocket(url);
  ws.onmessage = (e) => setMessages(m => [...m, e.data]);
  return () => ws.close();
}, []);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Estado',
    'body' => 'messages en useState — lista que crece con cada onmessage.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** useEffect, cleanup y estado en chat. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **WebSockets y tiempo real**, esto aparece en code reviews, incidentes y entregas diarias. useEffect, cleanup y estado en chat. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'useEffect(() => {
  const ws = new WebSocket(url);
  ws.onmessage = (e) => setMessages(m => [...m, e.data]);
  return () => ws.close();
}, []);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'useEffect(() => {',
      1 => '  const ws = new WebSocket(url);',
      2 => '  ws.onmessage = (e) => setMessages(m => [...m, e.data]);',
      3 => '  return () => ws.close();',
      4 => '}, []);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** useRef para instancia WS estable.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-react](/conexiones#conn-react).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué ws.close() en cleanup?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Guardar mensajes WS en...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
