<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Schema Registry y contratos',
    'body' => 'Avro/Protobuf, compatibilidad y evolución de eventos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📊',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [schema-registry](/glosario#schema-registry) · [avro](/glosario#avro) · [compatibility](/glosario#compatibility)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Schema Registry',
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
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Compatibilidad',
    'body' => 'BACKWARD permite consumidores nuevos leer eventos viejos. Añade campos con default, no renombres sin versionar.',
    'code' => '{ "name": "currency", "type": "string", "default": "USD" }',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Avro/Protobuf, compatibilidad y evolución de eventos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Apache Kafka**, esto aparece en code reviews, incidentes y entregas diarias. Avro/Protobuf, compatibilidad y evolución de eventos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '{
  "type": "record",
  "name": "OrderCreated",
  "fields": [
    { "name": "order_id", "type": "string" },
    { "name": "total", "type": "double" }
  ]
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
      1 => '  "type": "record",',
      2 => '  "name": "OrderCreated",',
      3 => '  "fields": [',
      4 => '    { "name": "order_id", "type": "string" },',
      5 => '    { "name": "total", "type": "double" }',
      6 => '  ]',
      7 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Schema evolution es parte de gobernanza de eventos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué usar Schema Registry?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cambio seguro en Avro?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
