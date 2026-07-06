<?php

declare(strict_types=1);

return [
    [
        'slug' => 'kf-intro',
        'order' => 1,
        'title' => 'Event streaming con Kafka',
        'level' => 'Conceptos',
        'minutes' => 30,
        'summary' => 'Logs distribuidos, topics y particiones.',
        'concepts' => ['kafka', 'topic', 'partition'],
        'sections' => [
            ['heading' => 'Apache Kafka', 'body' => '**Kafka** es log distribuido append-only — millones de eventos/seg. Base de pipelines data y event-driven.'],
            ['heading' => 'vs RabbitMQ', 'body' => 'RabbitMQ = colas task-oriented; Kafka = stream retenido, replay, analytics.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Unidad de organización Kafka?', 'options' => ['Topic', 'Queue only', 'Table'], 'answer' => 'Topic', 'explanation' => 'Topic dividido en partitions.', 'pro_tip' => 'Replication factor 3 en prod.'],
            ['type' => 'choice', 'question' => '¿Ventaja replay Kafka?', 'options' => ['Reprocesar eventos históricos', 'Solo mensaje una vez', 'Sin persistencia'], 'answer' => 'Reprocesar eventos históricos', 'explanation' => 'Retention configurable días.', 'pro_tip' => 'Curso mensajería compara RabbitMQ.'],
        ],
    ],
    [
        'slug' => 'kf-topics',
        'order' => 2,
        'title' => 'Topics, partitions y offsets',
        'level' => 'Fundamentos',
        'minutes' => 35,
        'summary' => 'Paralelismo, keys y orden.',
        'concepts' => ['partition', 'offset', 'key'],
        'sections' => [
            ['heading' => 'Partitions', 'body' => 'Más partitions = más paralelismo consumo — key determina partition (mismo key = orden).'],
            ['heading' => 'Offsets', 'body' => 'Posición en log — consumer commitea offset tras procesar.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Mismo message key implica...?', 'options' => ['Misma partition — orden garantizado', 'Random partition', 'Sin orden nunca'], 'answer' => 'Misma partition — orden garantizado', 'explanation' => 'user_id como key agrupa eventos usuario.', 'pro_tip' => 'Demasiadas partitions = overhead.'],
            ['type' => 'choice', 'question' => '¿Offset es...?', 'options' => ['Posición secuencial en partition', 'Nombre topic', 'IP broker'], 'answer' => 'Posición secuencial en partition', 'explanation' => 'Consumer group trackea offsets.', 'pro_tip' => 'auto.offset.reset=earliest vs latest.'],
        ],
    ],
    [
        'slug' => 'kf-producers',
        'order' => 3,
        'title' => 'Producers',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'Publicar eventos, acks y idempotencia.',
        'concepts' => ['producer', 'acks', 'idempotent'],
        'sections' => [
            ['heading' => 'Producer API', 'body' => 'producer.send(ProducerRecord("orders", key, value)) — async con callbacks.'],
            ['heading' => 'acks', 'body' => 'acks=all espera replicas — durabilidad vs latencia.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿acks=all significa...?', 'options' => ['Todas replicas in-sync confirman', 'Fire and forget', 'Solo leader local'], 'answer' => 'Todas replicas in-sync confirman', 'explanation' => 'Máxima durabilidad.', 'pro_tip' => 'enable.idempotence=true evita duplicados.'],
            ['type' => 'choice', 'question' => '¿Serialización común?', 'options' => ['JSON, Avro, Protobuf', 'Solo XML', 'PHP serialize'], 'answer' => 'JSON, Avro, Protobuf', 'explanation' => 'Schema registry con Avro en enterprise.', 'pro_tip' => 'Curso gRPC usa Protobuf también.'],
        ],
    ],
    [
        'slug' => 'kf-consumers',
        'order' => 4,
        'title' => 'Consumers y consumer groups',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Balanceo, rebalancing y exactly-once.',
        'concepts' => ['consumer-group', 'rebalance', 'at-least-once'],
        'sections' => [
            ['heading' => 'Consumer group', 'body' => 'N consumers mismo group → cada partition asignada a un consumer — escala horizontal.'],
            ['heading' => 'Semánticas', 'body' => 'At-least-once (default), at-most-once, exactly-once — trade-offs procesamiento.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Consumers > partitions?', 'options' => ['Extras idle sin trabajo', 'Más throughput automático', 'Error fatal'], 'answer' => 'Extras idle sin trabajo', 'explanation' => 'Max parallel = num partitions.', 'pro_tip' => 'Aumenta partitions antes de consumers.'],
            ['type' => 'choice', 'question' => '¿Rebalance ocurre cuando...?', 'options' => ['Consumer entra/sale del group', 'Solo a medianoche', 'Nunca'], 'answer' => 'Consumer entra/sale del group', 'explanation' => 'Pausa consumo momentánea.', 'pro_tip' => 'Cooperative sticky rebalance reduce pausa.'],
        ],
    ],
    [
        'slug' => 'kf-streams',
        'order' => 5,
        'title' => 'Kafka Streams y ksqlDB',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Procesamiento stream en tiempo real.',
        'concepts' => ['kafka-streams', 'ksql', 'window'],
        'sections' => [
            ['heading' => 'Stream processing', 'body' => 'Agregaciones en vuelo — contar clicks por ventana de 5 min sin batch nightly.'],
            ['heading' => 'ksqlDB', 'body' => 'SQL sobre topics — SELECT count(*) FROM clicks WINDOW TUMBLING (5 MINUTES).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Kafka Streams es...?', 'options' => ['Librería procesamiento en app Java/JS', 'Solo CLI', 'Reemplazo Postgres'], 'answer' => 'Librería procesamiento en app Java/JS', 'explanation' => 'Stateful processing embedded.', 'pro_tip' => 'Flink/Spark para batch masivo.'],
            ['type' => 'choice', 'question' => '¿Window tumbling?', 'options' => ['Ventanas fijas no solapadas', 'Ventanas infinitas', 'Sin tiempo'], 'answer' => 'Ventanas fijas no solapadas', 'explanation' => 'Agregación por intervalo fijo.', 'pro_tip' => 'Hopping windows solapan.'],
        ],
    ],
    [
        'slug' => 'kf-prod',
        'order' => 6,
        'title' => 'Kafka en producción',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'MSK, monitoring y retention.',
        'concepts' => ['msk', 'monitoring', 'retention'],
        'sections' => [
            ['heading' => 'Managed Kafka', 'body' => 'AWS MSK, Confluent Cloud — brokers, ZooKeeper/KRaft managed.'],
            ['heading' => 'Monitoring', 'body' => 'Consumer lag — métrica #1 alerta si workers no dan abasto.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Consumer lag alto indica...?', 'options' => ['Consumers no procesan tan rápido como llegan eventos', 'Kafka caído', 'Topic vacío'], 'answer' => 'Consumers no procesan tan rápido como llegan eventos', 'explanation' => 'Escala consumers o optimiza handler.', 'pro_tip' => 'Burrow / Confluent metrics para lag.'],
            ['type' => 'choice', 'question' => '¿Retention policy?', 'options' => ['Cuánto tiempo se guardan mensajes', 'Password TTL', 'Session timeout'], 'answer' => 'Cuánto tiempo se guardan mensajes', 'explanation' => 'log.retention.hours en broker.', 'pro_tip' => 'Compacted topics para changelog.'],
        ],
    ],
];
