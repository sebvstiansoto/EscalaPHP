<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Redis en cluster y HA',
    'body' => 'Replication, Sentinel, Cluster mode y failover. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [replication](/glosario#replication) · [sentinel](/glosario#sentinel) · [Cluster](/glosario#cluster)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Alta disponibilidad',
    'body' => 'Redis replica datos a followers. Sentinel detecta fallos y promueve replica a primary.',
    'code' => 'replicaof redis-primary 6379
sentinel monitor mymaster redis-primary 6379 2
sentinel down-after-milliseconds mymaster 5000',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Cluster mode',
    'body' => 'Redis Cluster divide keyspace en 16384 slots. Escala horizontal, pero limita operaciones multi-key.',
    'code' => 'redis-cli --cluster create \\
  10.0.0.1:6379 10.0.0.2:6379 10.0.0.3:6379 \\
  --cluster-replicas 1',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Replication, Sentinel, Cluster mode y failover. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Redis y caché**, esto aparece en code reviews, incidentes y entregas diarias. Replication, Sentinel, Cluster mode y failover. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'replicaof redis-primary 6379
sentinel monitor mymaster redis-primary 6379 2
sentinel down-after-milliseconds mymaster 5000',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'replicaof redis-primary 6379',
      1 => 'sentinel monitor mymaster redis-primary 6379 2',
      2 => 'sentinel down-after-milliseconds mymaster 5000',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Managed Redis suele ocultar Sentinel, pero el concepto importa.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace Redis Sentinel?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Redis Cluster usa slots cuántos?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
