<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Kafka Connect y CDC',
    'body' => 'Connectors, Debezium y sincronización de datos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📊',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [kafka-connect](/glosario#kafka-connect) · [cdc](/glosario#cdc) · [debezium](/glosario#debezium)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Kafka Connect',
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
  3 => 
  array (
    'type' => 'teach',
    'title' => 'CDC',
    'body' => 'Change Data Capture convierte cambios de BD en eventos. Útil para materialized views, search index y analytics.',
    'code' => 'orders table INSERT
  -> debezium event
  -> kafka topic dbserver1.public.orders
  -> elasticsearch sink connector',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Connectors, Debezium y sincronización de datos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Apache Kafka**, esto aparece en code reviews, incidentes y entregas diarias. Connectors, Debezium y sincronización de datos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '{
  "name": "postgres-orders-source",
  "config": {
    "connector.class": "io.debezium.connector.postgresql.PostgresConnector",
    "database.hostname": "postgres",
    "topic.prefix": "dbserver1"
  }
}',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '{',
      1 => '  "name": "postgres-orders-source",',
      2 => '  "config": {',
      3 => '    "connector.class": "io.debezium.connector.postgresql.PostgresConnector",',
      4 => '    "database.hostname": "postgres",',
      5 => '    "topic.prefix": "dbserver1"',
      6 => '  }',
      7 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** CDC evita dual writes frágiles app -> DB + app -> Kafka.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué resuelve Debezium?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Sink connector típico?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
