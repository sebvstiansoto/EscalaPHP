<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ev-intro',
    'order' => 1,
    'title' => 'Event Sourcing intro',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Events as source of truth.',
    'concepts' => 
    array (
      0 => 'event-sourcing',
      1 => 'events',
      2 => 'audit',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Event Sourcing',
        'body' => '**Estado** derivado de secuencia **eventos** inmutables — no UPDATE row overwrite — append-only log — audit trail natural.',
        'code' => '# Practica: ev-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'vs CRUD',
        'body' => 'CRUD current state only; ES full history replay — debugging temporal queries.',
        'code' => '# Practica: ev-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Event store?',
        'options' => 
        array (
          0 => 'Append-only log events',
          1 => 'DELETE table',
          2 => 'CSS cache',
        ),
        'answer' => 'Append-only log events',
        'explanation' => 'Never mutate past events.',
        'pro_tip' => 'Compare Kafka log curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Replay events?',
        'options' => 
        array (
          0 => 'Rebuild state from history',
          1 => 'Delete history',
          2 => 'Random',
        ),
        'answer' => 'Rebuild state from history',
        'explanation' => 'Projections from stream.',
        'pro_tip' => 'Snapshot optimize long streams.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ev-cqrs',
    'order' => 2,
    'title' => 'CQRS pattern',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Separate read write models.',
    'concepts' => 
    array (
      0 => 'cqrs',
      1 => 'command',
      2 => 'query',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CQRS',
        'body' => '**Command Query Responsibility Segregation** — write model events; read model optimized denormalized views.',
        'code' => '# Practica: ev-cqrs
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'When',
        'body' => 'Complex domains, different read/write scale — not every CRUD app needs ES+CQRS.',
        'code' => '# Practica: ev-cqrs
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿CQRS benefit?',
        'options' => 
        array (
          0 => 'Scale reads writes independently',
          1 => 'One table always',
          2 => 'No queries',
        ),
        'answer' => 'Scale reads writes independently',
        'explanation' => 'Read DB can differ schema.',
        'pro_tip' => 'YAGNI simple apps CRUD OK.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Command handler?',
        'options' => 
        array (
          0 => 'Validate emit event no direct read model',
          1 => 'SQL SELECT only',
          2 => 'CSS',
        ),
        'answer' => 'Validate emit event no direct read model',
        'explanation' => 'Write side responsibility.',
        'pro_tip' => 'Idempotent command IDs.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ev-events',
    'order' => 3,
    'title' => 'Diseño de eventos',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Naming, versioning, payloads.',
    'concepts' => 
    array (
      0 => 'naming',
      1 => 'version',
      2 => 'payload',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Event design',
        'body' => 'Past tense OrderPlaced, PaymentReceived — small focused events — version schema evolution.',
        'code' => '# Practica: ev-events
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Upcasting',
        'body' => 'Transform old event versions on replay — migration strategy.',
        'code' => '# Practica: ev-events
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Event name past tense?',
        'options' => 
        array (
          0 => 'Something happened fact',
          1 => 'Command imperative',
          2 => 'Question',
        ),
        'answer' => 'Something happened fact',
        'explanation' => 'OrderPlaced not PlaceOrder.',
        'pro_tip' => 'Domain language ubiquitous.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Event too big?',
        'options' => 
        array (
          0 => 'Split granular events easier evolve',
          1 => 'One mega event better',
          2 => 'No events',
        ),
        'answer' => 'Split granular events easier evolve',
        'explanation' => 'Small composable facts.',
        'pro_tip' => 'Include correlationId trace.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ev-projections',
    'order' => 4,
    'title' => 'Projections y read models',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Build views from stream.',
    'concepts' => 
    array (
      0 => 'projection',
      1 => 'read-model',
      2 => 'handler',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Projections',
        'body' => 'Event handler updates read DB — materialized view OrderSummary table — eventual consistency.',
        'code' => '# Practica: ev-projections
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Rebuild',
        'body' => 'Drop projection replay all events — fix bug projection logic.',
        'code' => '# Practica: ev-projections
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Eventual consistency?',
        'options' => 
        array (
          0 => 'Read lags write briefly',
          1 => 'Instant always',
          2 => 'Never consistent',
        ),
        'answer' => 'Read lags write briefly',
        'explanation' => 'Accept or show pending UI.',
        'pro_tip' => 'Compare Kafka consumer lag.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Snapshot?',
        'options' => 
        array (
          0 => 'Periodic state skip replay from start',
          1 => 'Delete events',
          2 => 'Photo',
        ),
        'answer' => 'Periodic state skip replay from start',
        'explanation' => 'Performance long aggregates.',
        'pro_tip' => 'Snapshot + events since.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ev-saga',
    'order' => 5,
    'title' => 'Sagas y consistencia',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Distributed transactions patterns.',
    'concepts' => 
    array (
      0 => 'saga',
      1 => 'compensation',
      2 => 'distributed',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Saga',
        'body' => 'Choreography events vs Orchestration coordinator — compensate on failure PaymentFailed refund.',
        'code' => '# Practica: ev-saga
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Idempotency',
        'body' => 'Consumers handle duplicate events — at-least-once delivery.',
        'code' => '# Practica: ev-saga
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Compensating transaction?',
        'options' => 
        array (
          0 => 'Undo prior step saga failure',
          1 => 'Commit harder',
          2 => 'Ignore failure',
        ),
        'answer' => 'Undo prior step saga failure',
        'explanation' => 'OrderCancelled refund issued.',
        'pro_tip' => 'Not 2PC across microservices.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Idempotent consumer?',
        'options' => 
        array (
          0 => 'Same event twice same result',
          1 => 'Process infinite',
          2 => 'Skip all',
        ),
        'answer' => 'Same event twice same result',
        'explanation' => 'eventId dedup table.',
        'pro_tip' => 'Curso Kafka exactly-once hard.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ev-prod',
    'order' => 6,
    'title' => 'ES en producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'EventStoreDB, when not to use.',
    'concepts' => 
    array (
      0 => 'eventstore',
      1 => 'tradeoffs',
      2 => 'when',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tools',
        'body' => 'EventStoreDB, Marten .NET, Axon — or Postgres event table DIY — Kafka as log transport.',
        'code' => '# Practica: ev-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'When NOT',
        'body' => 'Simple CRUD, team unfamiliar, reporting only SQL easier — complexity cost real.',
        'code' => '# Practica: ev-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿GDPR delete user ES?',
        'options' => 
        array (
          0 => 'Crypto shred or tombstone events complex',
          1 => 'DELETE row easy',
          2 => 'Ignore GDPR',
        ),
        'answer' => 'Crypto shred or tombstone events complex',
        'explanation' => 'Immutability vs right erasure.',
        'pro_tip' => 'Design PII minimal events.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Start with ES?',
        'options' => 
        array (
          0 => 'Usually CRUD first evolve if needed',
          1 => 'Always day one',
          2 => 'Never',
        ),
        'answer' => 'Usually CRUD first evolve if needed',
        'explanation' => 'Pragmatic architecture.',
        'pro_tip' => 'Curso system-design tradeoffs.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'event-sourcing-cqrs-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Event Sourcing & CQRS.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Event Sourcing & CQRS a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'event-sourcing-cqrs-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Event Sourcing & CQRS.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Event Sourcing & CQRS a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
