<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'kf-intro',
    'order' => 1,
    'title' => 'Event streaming con Kafka',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Logs distribuidos, topics y particiones.',
    'concepts' => 
    array (
      0 => 'kafka',
      1 => 'topic',
      2 => 'partition',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Apache Kafka',
        'body' => '**Kafka** es log distribuido append-only — millones de eventos/seg. Base de pipelines data y event-driven.',
        'code' => '# Practica: kf-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'vs RabbitMQ',
        'body' => 'RabbitMQ = colas task-oriented; Kafka = stream retenido, replay, analytics.',
        'code' => '# Practica: kf-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Unidad de organización Kafka?',
        'options' => 
        array (
          0 => 'Topic',
          1 => 'Queue only',
          2 => 'Table',
        ),
        'answer' => 'Topic',
        'explanation' => 'Topic dividido en partitions.',
        'pro_tip' => 'Replication factor 3 en prod.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja replay Kafka?',
        'options' => 
        array (
          0 => 'Reprocesar eventos históricos',
          1 => 'Solo mensaje una vez',
          2 => 'Sin persistencia',
        ),
        'answer' => 'Reprocesar eventos históricos',
        'explanation' => 'Retention configurable días.',
        'pro_tip' => 'Curso mensajería compara RabbitMQ.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'kf-topics',
    'order' => 2,
    'title' => 'Topics, partitions y offsets',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Paralelismo, keys y orden.',
    'concepts' => 
    array (
      0 => 'partition',
      1 => 'offset',
      2 => 'key',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Partitions',
        'body' => 'Más partitions = más paralelismo consumo — key determina partition (mismo key = orden).',
        'code' => '# Practica: kf-topics
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Offsets',
        'body' => 'Posición en log — consumer commitea offset tras procesar.',
        'code' => '# Practica: kf-topics
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Mismo message key implica...?',
        'options' => 
        array (
          0 => 'Misma partition — orden garantizado',
          1 => 'Random partition',
          2 => 'Sin orden nunca',
        ),
        'answer' => 'Misma partition — orden garantizado',
        'explanation' => 'user_id como key agrupa eventos usuario.',
        'pro_tip' => 'Demasiadas partitions = overhead.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Offset es...?',
        'options' => 
        array (
          0 => 'Posición secuencial en partition',
          1 => 'Nombre topic',
          2 => 'IP broker',
        ),
        'answer' => 'Posición secuencial en partition',
        'explanation' => 'Consumer group trackea offsets.',
        'pro_tip' => 'auto.offset.reset=earliest vs latest.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'kf-producers',
    'order' => 3,
    'title' => 'Producers',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Publicar eventos, acks y idempotencia.',
    'concepts' => 
    array (
      0 => 'producer',
      1 => 'acks',
      2 => 'idempotent',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Producer API',
        'body' => 'producer.send(ProducerRecord("orders", key, value)) — async con callbacks.',
        'code' => '# Practica: kf-producers
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'acks',
        'body' => 'acks=all espera replicas — durabilidad vs latencia.',
        'code' => '# Practica: kf-producers
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿acks=all significa...?',
        'options' => 
        array (
          0 => 'Todas replicas in-sync confirman',
          1 => 'Fire and forget',
          2 => 'Solo leader local',
        ),
        'answer' => 'Todas replicas in-sync confirman',
        'explanation' => 'Máxima durabilidad.',
        'pro_tip' => 'enable.idempotence=true evita duplicados.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Serialización común?',
        'options' => 
        array (
          0 => 'JSON, Avro, Protobuf',
          1 => 'Solo XML',
          2 => 'PHP serialize',
        ),
        'answer' => 'JSON, Avro, Protobuf',
        'explanation' => 'Schema registry con Avro en enterprise.',
        'pro_tip' => 'Curso gRPC usa Protobuf también.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'kf-consumers',
    'order' => 4,
    'title' => 'Consumers y consumer groups',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Balanceo, rebalancing y exactly-once.',
    'concepts' => 
    array (
      0 => 'consumer-group',
      1 => 'rebalance',
      2 => 'at-least-once',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Consumer group',
        'body' => 'N consumers mismo group → cada partition asignada a un consumer — escala horizontal.',
        'code' => '# Practica: kf-consumers
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Semánticas',
        'body' => 'At-least-once (default), at-most-once, exactly-once — trade-offs procesamiento.',
        'code' => '# Practica: kf-consumers
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Consumers > partitions?',
        'options' => 
        array (
          0 => 'Extras idle sin trabajo',
          1 => 'Más throughput automático',
          2 => 'Error fatal',
        ),
        'answer' => 'Extras idle sin trabajo',
        'explanation' => 'Max parallel = num partitions.',
        'pro_tip' => 'Aumenta partitions antes de consumers.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Rebalance ocurre cuando...?',
        'options' => 
        array (
          0 => 'Consumer entra/sale del group',
          1 => 'Solo a medianoche',
          2 => 'Nunca',
        ),
        'answer' => 'Consumer entra/sale del group',
        'explanation' => 'Pausa consumo momentánea.',
        'pro_tip' => 'Cooperative sticky rebalance reduce pausa.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'kf-streams',
    'order' => 5,
    'title' => 'Kafka Streams y ksqlDB',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Procesamiento stream en tiempo real.',
    'concepts' => 
    array (
      0 => 'kafka-streams',
      1 => 'ksql',
      2 => 'window',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stream processing',
        'body' => 'Agregaciones en vuelo — contar clicks por ventana de 5 min sin batch nightly.',
        'code' => '# Practica: kf-streams
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'ksqlDB',
        'body' => 'SQL sobre topics — SELECT count(*) FROM clicks WINDOW TUMBLING (5 MINUTES).',
        'code' => '# Practica: kf-streams
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Kafka Streams es...?',
        'options' => 
        array (
          0 => 'Librería procesamiento en app Java/JS',
          1 => 'Solo CLI',
          2 => 'Reemplazo Postgres',
        ),
        'answer' => 'Librería procesamiento en app Java/JS',
        'explanation' => 'Stateful processing embedded.',
        'pro_tip' => 'Flink/Spark para batch masivo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Window tumbling?',
        'options' => 
        array (
          0 => 'Ventanas fijas no solapadas',
          1 => 'Ventanas infinitas',
          2 => 'Sin tiempo',
        ),
        'answer' => 'Ventanas fijas no solapadas',
        'explanation' => 'Agregación por intervalo fijo.',
        'pro_tip' => 'Hopping windows solapan.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'kf-prod',
    'order' => 6,
    'title' => 'Kafka en producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'MSK, monitoring y retention.',
    'concepts' => 
    array (
      0 => 'msk',
      1 => 'monitoring',
      2 => 'retention',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Managed Kafka',
        'body' => 'AWS MSK, Confluent Cloud — brokers, ZooKeeper/KRaft managed.',
        'code' => '# Practica: kf-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Monitoring',
        'body' => 'Consumer lag — métrica #1 alerta si workers no dan abasto.',
        'code' => '# Practica: kf-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Consumer lag alto indica...?',
        'options' => 
        array (
          0 => 'Consumers no procesan tan rápido como llegan eventos',
          1 => 'Kafka caído',
          2 => 'Topic vacío',
        ),
        'answer' => 'Consumers no procesan tan rápido como llegan eventos',
        'explanation' => 'Escala consumers o optimiza handler.',
        'pro_tip' => 'Burrow / Confluent metrics para lag.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Retention policy?',
        'options' => 
        array (
          0 => 'Cuánto tiempo se guardan mensajes',
          1 => 'Password TTL',
          2 => 'Session timeout',
        ),
        'answer' => 'Cuánto tiempo se guardan mensajes',
        'explanation' => 'log.retention.hours en broker.',
        'pro_tip' => 'Compacted topics para changelog.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'kf-schema',
    'order' => 7,
    'title' => 'Schema Registry y contratos',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'Avro/Protobuf, compatibilidad y evolución de eventos.',
    'concepts' => 
    array (
      0 => 'schema-registry',
      1 => 'avro',
      2 => 'compatibility',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Schema Registry',
        'body' => 'Centraliza schemas de eventos para que producers y consumers evolucionen sin romperse.',
        'code' => '{
  "type": "record",
  "name": "OrderCreated",
  "fields": [
    { "name": "order_id", "type": "string" },
    { "name": "total", "type": "double" }
  ]
}',
      ),
      1 => 
      array (
        'heading' => 'Compatibilidad',
        'body' => 'BACKWARD permite consumidores nuevos leer eventos viejos. Añade campos con default, no renombres sin versionar.',
        'code' => '{ "name": "currency", "type": "string", "default": "USD" }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué usar Schema Registry?',
        'options' => 
        array (
          0 => 'Evitar romper consumers al cambiar eventos',
          1 => 'Hacer CSS',
          2 => 'Eliminar Kafka',
        ),
        'answer' => 'Evitar romper consumers al cambiar eventos',
        'explanation' => 'Los schemas versionados protegen contratos entre equipos.',
        'pro_tip' => 'Schema evolution es parte de gobernanza de eventos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cambio seguro en Avro?',
        'options' => 
        array (
          0 => 'Añadir campo con default',
          1 => 'Renombrar campo sin avisar',
          2 => 'Cambiar string a int',
        ),
        'answer' => 'Añadir campo con default',
        'explanation' => 'El default permite leer eventos antiguos.',
        'pro_tip' => 'Romper contrato debe ser nuevo topic o nueva versión explícita.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'kf-connect',
    'order' => 8,
    'title' => 'Kafka Connect y CDC',
    'level' => 'Producción',
    'minutes' => 40,
    'summary' => 'Connectors, Debezium y sincronización de datos.',
    'concepts' => 
    array (
      0 => 'kafka-connect',
      1 => 'cdc',
      2 => 'debezium',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Kafka Connect',
        'body' => 'Framework para mover datos hacia/desde Kafka sin escribir producers a mano.',
        'code' => '{
  "name": "postgres-orders-source",
  "config": {
    "connector.class": "io.debezium.connector.postgresql.PostgresConnector",
    "database.hostname": "postgres",
    "topic.prefix": "dbserver1"
  }
}',
      ),
      1 => 
      array (
        'heading' => 'CDC',
        'body' => 'Change Data Capture convierte cambios de BD en eventos. Útil para materialized views, search index y analytics.',
        'code' => 'orders table INSERT
  -> debezium event
  -> kafka topic dbserver1.public.orders
  -> elasticsearch sink connector',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué resuelve Debezium?',
        'options' => 
        array (
          0 => 'CDC desde bases de datos',
          1 => 'Frontend CSS',
          2 => 'Login OAuth',
        ),
        'answer' => 'CDC desde bases de datos',
        'explanation' => 'Lee el log de cambios de la BD y emite eventos Kafka.',
        'pro_tip' => 'CDC evita dual writes frágiles app -> DB + app -> Kafka.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Sink connector típico?',
        'options' => 
        array (
          0 => 'Kafka hacia Elasticsearch/S3/DB',
          1 => 'Browser hacia CSS',
          2 => 'Dockerfile hacia Pod',
        ),
        'answer' => 'Kafka hacia Elasticsearch/S3/DB',
        'explanation' => 'Los sinks consumen topics y escriben a sistemas destino.',
        'pro_tip' => 'Observa lag y errores DLQ de connectors en producción.',
      ),
    ),
  ),
);
