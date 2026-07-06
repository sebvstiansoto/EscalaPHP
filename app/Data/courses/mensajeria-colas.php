<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'mq-intro',
    'order' => 1,
    'title' => 'Por qué colas de mensajes',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Async, desacoplamiento y backpressure.',
    'concepts' => 
    array (
      0 => 'queue',
      1 => 'async',
      2 => 'decouple',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El problema',
        'body' => 'Enviar email, procesar imagen, generar PDF — no bloquees la respuesta HTTP 30 segundos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Cola',
        'body' => 'Producer publica mensaje → Broker almacena → Worker consume cuando puede.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja principal de una cola?',
        'options' => 
        array (
          0 => 'Desacoplar y procesar async',
          1 => 'Más lento siempre',
          2 => 'Reemplaza BD',
        ),
        'answer' => 'Desacoplar y procesar async',
        'explanation' => 'Usuario recibe 200 OK al instante.',
        'pro_tip' => 'Redis lists vs RabbitMQ — distinto nivel de garantías.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Producer hace...?',
        'options' => 
        array (
          0 => 'Publica mensajes a la cola',
          1 => 'Solo lee BD',
          2 => 'Compila CSS',
        ),
        'answer' => 'Publica mensajes a la cola',
        'explanation' => 'Consumer procesa del otro lado.',
        'pro_tip' => 'Laravel dispatch() es producer.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'mq-rabbitmq',
    'order' => 2,
    'title' => 'RabbitMQ y AMQP',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Exchanges, queues, bindings y routing keys.',
    'concepts' => 
    array (
      0 => 'rabbitmq',
      1 => 'amqp',
      2 => 'exchange',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'RabbitMQ',
        'body' => 'Broker AMQP enterprise — exchanges enrutan a queues con reglas (direct, topic, fanout).',
        'code' => 'Producer → Exchange → Queue → Consumer',
      ),
      1 => 
      array (
        'heading' => 'Garantías',
        'body' => 'ACK manual — si consumer falla, mensaje vuelve a la cola.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-rabbitmq\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Protocolo de RabbitMQ?',
        'options' => 
        array (
          0 => 'AMQP',
          1 => 'HTTP only',
          2 => 'FTP',
        ),
        'answer' => 'AMQP',
        'explanation' => 'Advanced Message Queuing Protocol.',
        'pro_tip' => 'Puerto 5672 por defecto.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Exchange topic sirve para...?',
        'options' => 
        array (
          0 => 'Routing por patrones (orders.*)',
          1 => 'Solo un consumer',
          2 => 'SQL',
        ),
        'answer' => 'Routing por patrones (orders.*)',
        'explanation' => 'Flexibilidad en routing.',
        'pro_tip' => 'fanout = broadcast a todas las queues.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'mq-laravel',
    'order' => 3,
    'title' => 'Colas en Laravel',
    'level' => 'PHP',
    'minutes' => 35,
    'summary' => 'Jobs, dispatch, Horizon y failed jobs.',
    'concepts' => 
    array (
      0 => 'job',
      1 => 'dispatch',
      2 => 'horizon',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Jobs',
        'body' => 'php artisan make:job SendInvoice — implementa handle().',
        'code' => 'SendInvoice::dispatch($order);
// o dispatch(new SendInvoice($order))->onQueue(\'emails\');',
      ),
      1 => 
      array (
        'heading' => 'Horizon',
        'body' => 'Dashboard Redis queues — métricas, workers, retry failed jobs.',
        'code' => 'SendEmail::dispatch($user);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Driver cola Laravel con dashboard?',
        'options' => 
        array (
          0 => 'Redis + Horizon',
          1 => 'Blade',
          2 => 'SQLite only',
        ),
        'answer' => 'Redis + Horizon',
        'explanation' => 'QUEUE_CONNECTION=redis',
        'pro_tip' => 'php artisan queue:work procesa jobs.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe ::dispatch en Laravel job',
        'must_contain' => 
        array (
          0 => 'dispatch',
        ),
        'hint' => 'SendEmail::dispatch($user);',
        'explanation' => 'Encola job para worker async.',
        'pro_tip' => 'ShouldQueue interface en el Job.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'mq-patterns',
    'order' => 4,
    'title' => 'Patrones: retry, DLQ e idempotencia',
    'level' => 'Arquitectura',
    'minutes' => 30,
    'summary' => 'Reintentos, dead letter queue y mensajes duplicados.',
    'concepts' => 
    array (
      0 => 'retry',
      1 => 'dlq',
      2 => 'idempotent',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Retry',
        'body' => 'Exponential backoff — 1s, 2s, 4s antes de fallar definitivamente.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-patterns\';',
      ),
      1 => 
      array (
        'heading' => 'DLQ',
        'body' => 'Dead Letter Queue — mensajes que fallaron N veces van a cola especial para revisión manual.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-patterns\';',
      ),
      2 => 
      array (
        'heading' => 'Idempotencia',
        'body' => 'Mismo mensaje dos veces no debe cobrar dos veces — usa id único de mensaje.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-patterns\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué idempotencia?',
        'options' => 
        array (
          0 => 'Mensajes pueden duplicarse en red',
          1 => 'Nunca pasa',
          2 => 'Solo en REST',
        ),
        'answer' => 'Mensajes pueden duplicarse en red',
        'explanation' => 'At-least-once delivery es común.',
        'pro_tip' => 'Guarda processed_message_id en BD.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DLQ contiene...?',
        'options' => 
        array (
          0 => 'Mensajes fallidos tras reintentos',
          1 => 'Mensajes exitosos',
          2 => 'Logs nginx',
        ),
        'answer' => 'Mensajes fallidos tras reintentos',
        'explanation' => 'Investiga sin bloquear cola principal.',
        'pro_tip' => 'Alertas cuando DLQ crece.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'mq-python',
    'order' => 5,
    'title' => 'Celery y RabbitMQ en Python',
    'level' => 'Python',
    'minutes' => 30,
    'summary' => 'Tasks async con Celery workers.',
    'concepts' => 
    array (
      0 => 'celery',
      1 => 'worker',
      2 => 'broker',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Celery',
        'body' => 'Distributed task queue — broker RabbitMQ o Redis.',
        'code' => '@app.task
def send_email(user_id):
    ...

send_email.delay(42)',
      ),
      1 => 
      array (
        'heading' => 'Workers',
        'body' => 'celery -A proj worker — procesos separados del web server.',
        'code' => '@app.task\\ndef my_task():',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Celery en Python equivalente a...?',
        'options' => 
        array (
          0 => 'Laravel queues / Sidekiq',
          1 => 'Blade',
          2 => 'Django templates',
        ),
        'answer' => 'Laravel queues / Sidekiq',
        'explanation' => 'Task queue estándar Python.',
        'pro_tip' => 'Celery beat para tareas programadas (cron).',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe @app.task decorator',
        'must_contain' => 
        array (
          0 => '@app.task',
        ),
        'hint' => '@app.task\\ndef my_task():',
        'explanation' => 'Registra función como task Celery.',
        'pro_tip' => '.delay() encola; .apply_async() más opciones.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'mq-prod',
    'order' => 6,
    'title' => 'Colas en producción',
    'level' => 'Ops',
    'minutes' => 25,
    'summary' => 'Monitoreo, scaling workers y RabbitMQ cluster.',
    'concepts' => 
    array (
      0 => 'monitoring',
      1 => 'scale',
      2 => 'cluster',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Monitoreo',
        'body' => 'Profundidad de cola, lag, tasa de error — alerta si cola crece sin límite.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-prod\';',
      ),
      1 => 
      array (
        'heading' => 'Scale',
        'body' => 'Más workers horizontalmente — cada uno consume de la misma queue.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mq-prod\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de problema en cola?',
        'options' => 
        array (
          0 => 'Queue depth creciendo sin parar',
          1 => 'Workers idle siempre',
          2 => '0 mensajes',
        ),
        'answer' => 'Queue depth creciendo sin parar',
        'explanation' => 'Consumers no dan abasto.',
        'pro_tip' => 'Escala workers antes que optimizar código a veces.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿RabbitMQ en Docker prod?',
        'options' => 
        array (
          0 => 'Volumen persistente + cluster/mirror',
          1 => 'Sin persistencia',
          2 => 'Solo dev',
        ),
        'answer' => 'Volumen persistente + cluster/mirror',
        'explanation' => 'Reinicio sin perder mensajes.',
        'pro_tip' => 'Curso Redis cubre colas simples — RabbitMQ para routing complejo.',
      ),
    ),
  ),
);
