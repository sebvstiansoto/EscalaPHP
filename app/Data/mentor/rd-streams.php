<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Redis Streams',
    'body' => 'Streams, consumer groups y procesamiento durable. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [streams](/glosario#streams) · [consumer-group](/glosario#consumer-group) · [Queue](/glosario#queue)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Streams',
    'body' => 'Redis Streams guarda eventos ordenados con IDs. Es útil para colas ligeras y event logs pequeños.',
    'code' => 'XADD orders * type created order_id 123 user_id 42
XREAD COUNT 10 STREAMS orders 0',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Consumer groups',
    'body' => 'Consumer groups reparten mensajes entre workers y permiten reintentos con pending entries.',
    'code' => 'XGROUP CREATE orders workers $ MKSTREAM
XREADGROUP GROUP workers worker-1 COUNT 10 STREAMS orders >
XACK orders workers 1690000000000-0',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Streams, consumer groups y procesamiento durable. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Redis y caché**, esto aparece en code reviews, incidentes y entregas diarias. Streams, consumer groups y procesamiento durable. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'XADD orders * type created order_id 123 user_id 42
XREAD COUNT 10 STREAMS orders 0',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'XADD orders * type created order_id 123 user_id 42',
      1 => 'XREAD COUNT 10 STREAMS orders 0',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Usa MAXLEN aproximado para evitar streams infinitos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué comando añade eventos a un Stream?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe XREADGROUP** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
