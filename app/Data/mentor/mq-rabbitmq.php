<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'RabbitMQ y AMQP',
    'body' => 'Exchanges, queues, bindings y routing keys. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [rabbitmq](/glosario#rabbitmq) · [amqp](/glosario#amqp) · [exchange](/glosario#exchange)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'RabbitMQ',
    'body' => 'Broker AMQP enterprise — exchanges enrutan a queues con reglas (direct, topic, fanout).',
    'code' => 'Producer → Exchange → Queue → Consumer',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Garantías',
    'body' => 'ACK manual — si consumer falla, mensaje vuelve a la cola.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-rabbitmq\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Exchanges, queues, bindings y routing keys. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Mensajería y colas**, esto aparece en code reviews, incidentes y entregas diarias. Exchanges, queues, bindings y routing keys. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'Producer → Exchange → Queue → Consumer',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'Producer → Exchange → Queue → Consumer',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Puerto 5672 por defecto.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Protocolo de RabbitMQ?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Exchange topic sirve para...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
