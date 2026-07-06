<?php

declare(strict_types=1);

return [
    [
        'slug' => 'mq-intro',
        'order' => 1,
        'title' => 'Por qué colas de mensajes',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Async, desacoplamiento y backpressure.',
        'concepts' => ['queue', 'async', 'decouple'],
        'sections' => [
            ['heading' => 'El problema', 'body' => 'Enviar email, procesar imagen, generar PDF — no bloquees la respuesta HTTP 30 segundos.'],
            ['heading' => 'Cola', 'body' => 'Producer publica mensaje → Broker almacena → Worker consume cuando puede.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja principal de una cola?', 'options' => ['Desacoplar y procesar async', 'Más lento siempre', 'Reemplaza BD'], 'answer' => 'Desacoplar y procesar async', 'explanation' => 'Usuario recibe 200 OK al instante.', 'pro_tip' => 'Redis lists vs RabbitMQ — distinto nivel de garantías.'],
            ['type' => 'choice', 'question' => '¿Producer hace...?', 'options' => ['Publica mensajes a la cola', 'Solo lee BD', 'Compila CSS'], 'answer' => 'Publica mensajes a la cola', 'explanation' => 'Consumer procesa del otro lado.', 'pro_tip' => 'Laravel dispatch() es producer.'],
        ],
    ],
    [
        'slug' => 'mq-rabbitmq',
        'order' => 2,
        'title' => 'RabbitMQ y AMQP',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Exchanges, queues, bindings y routing keys.',
        'concepts' => ['rabbitmq', 'amqp', 'exchange'],
        'sections' => [
            ['heading' => 'RabbitMQ', 'body' => 'Broker AMQP enterprise — exchanges enrutan a queues con reglas (direct, topic, fanout).', 'code' => "Producer → Exchange → Queue → Consumer"],
            ['heading' => 'Garantías', 'body' => 'ACK manual — si consumer falla, mensaje vuelve a la cola.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Protocolo de RabbitMQ?', 'options' => ['AMQP', 'HTTP only', 'FTP'], 'answer' => 'AMQP', 'explanation' => 'Advanced Message Queuing Protocol.', 'pro_tip' => 'Puerto 5672 por defecto.'],
            ['type' => 'choice', 'question' => '¿Exchange topic sirve para...?', 'options' => ['Routing por patrones (orders.*)', 'Solo un consumer', 'SQL'], 'answer' => 'Routing por patrones (orders.*)', 'explanation' => 'Flexibilidad en routing.', 'pro_tip' => 'fanout = broadcast a todas las queues.'],
        ],
    ],
    [
        'slug' => 'mq-laravel',
        'order' => 3,
        'title' => 'Colas en Laravel',
        'level' => 'PHP',
        'minutes' => 35,
        'summary' => 'Jobs, dispatch, Horizon y failed jobs.',
        'concepts' => ['job', 'dispatch', 'horizon'],
        'sections' => [
            ['heading' => 'Jobs', 'body' => 'php artisan make:job SendInvoice — implementa handle().', 'code' => "SendInvoice::dispatch(\$order);\n// o dispatch(new SendInvoice(\$order))->onQueue('emails');"],
            ['heading' => 'Horizon', 'body' => 'Dashboard Redis queues — métricas, workers, retry failed jobs.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Driver cola Laravel con dashboard?', 'options' => ['Redis + Horizon', 'Blade', 'SQLite only'], 'answer' => 'Redis + Horizon', 'explanation' => 'QUEUE_CONNECTION=redis', 'pro_tip' => 'php artisan queue:work procesa jobs.'],
            ['type' => 'contains', 'question' => 'Escribe ::dispatch en Laravel job', 'must_contain' => ['dispatch'], 'hint' => 'SendEmail::dispatch($user);', 'explanation' => 'Encola job para worker async.', 'pro_tip' => 'ShouldQueue interface en el Job.'],
        ],
    ],
    [
        'slug' => 'mq-patterns',
        'order' => 4,
        'title' => 'Patrones: retry, DLQ e idempotencia',
        'level' => 'Arquitectura',
        'minutes' => 30,
        'summary' => 'Reintentos, dead letter queue y mensajes duplicados.',
        'concepts' => ['retry', 'dlq', 'idempotent'],
        'sections' => [
            ['heading' => 'Retry', 'body' => 'Exponential backoff — 1s, 2s, 4s antes de fallar definitivamente.'],
            ['heading' => 'DLQ', 'body' => 'Dead Letter Queue — mensajes que fallaron N veces van a cola especial para revisión manual.'],
            ['heading' => 'Idempotencia', 'body' => 'Mismo mensaje dos veces no debe cobrar dos veces — usa id único de mensaje.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué idempotencia?', 'options' => ['Mensajes pueden duplicarse en red', 'Nunca pasa', 'Solo en REST'], 'answer' => 'Mensajes pueden duplicarse en red', 'explanation' => 'At-least-once delivery es común.', 'pro_tip' => 'Guarda processed_message_id en BD.'],
            ['type' => 'choice', 'question' => '¿DLQ contiene...?', 'options' => ['Mensajes fallidos tras reintentos', 'Mensajes exitosos', 'Logs nginx'], 'answer' => 'Mensajes fallidos tras reintentos', 'explanation' => 'Investiga sin bloquear cola principal.', 'pro_tip' => 'Alertas cuando DLQ crece.'],
        ],
    ],
    [
        'slug' => 'mq-python',
        'order' => 5,
        'title' => 'Celery y RabbitMQ en Python',
        'level' => 'Python',
        'minutes' => 30,
        'summary' => 'Tasks async con Celery workers.',
        'concepts' => ['celery', 'worker', 'broker'],
        'sections' => [
            ['heading' => 'Celery', 'body' => 'Distributed task queue — broker RabbitMQ o Redis.', 'code' => "@app.task\ndef send_email(user_id):\n    ...\n\nsend_email.delay(42)"],
            ['heading' => 'Workers', 'body' => 'celery -A proj worker — procesos separados del web server.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Celery en Python equivalente a...?', 'options' => ['Laravel queues / Sidekiq', 'Blade', 'Django templates'], 'answer' => 'Laravel queues / Sidekiq', 'explanation' => 'Task queue estándar Python.', 'pro_tip' => 'Celery beat para tareas programadas (cron).'],
            ['type' => 'contains', 'language' => 'python', 'question' => 'Escribe @app.task decorator', 'must_contain' => ['@app.task'], 'hint' => '@app.task\ndef my_task():', 'explanation' => 'Registra función como task Celery.', 'pro_tip' => '.delay() encola; .apply_async() más opciones.'],
        ],
    ],
    [
        'slug' => 'mq-prod',
        'order' => 6,
        'title' => 'Colas en producción',
        'level' => 'Ops',
        'minutes' => 25,
        'summary' => 'Monitoreo, scaling workers y RabbitMQ cluster.',
        'concepts' => ['monitoring', 'scale', 'cluster'],
        'sections' => [
            ['heading' => 'Monitoreo', 'body' => 'Profundidad de cola, lag, tasa de error — alerta si cola crece sin límite.'],
            ['heading' => 'Scale', 'body' => 'Más workers horizontalmente — cada uno consume de la misma queue.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Señal de problema en cola?', 'options' => ['Queue depth creciendo sin parar', 'Workers idle siempre', '0 mensajes'], 'answer' => 'Queue depth creciendo sin parar', 'explanation' => 'Consumers no dan abasto.', 'pro_tip' => 'Escala workers antes que optimizar código a veces.'],
            ['type' => 'choice', 'question' => '¿RabbitMQ en Docker prod?', 'options' => ['Volumen persistente + cluster/mirror', 'Sin persistencia', 'Solo dev'], 'answer' => 'Volumen persistente + cluster/mirror', 'explanation' => 'Reinicio sin perder mensajes.', 'pro_tip' => 'Curso Redis cubre colas simples — RabbitMQ para routing complejo.'],
        ],
    ],
];
