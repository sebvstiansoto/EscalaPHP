<?php

declare(strict_types=1);

return [
    ['slug' => 'ev-intro', 'order' => 1, 'title' => 'Event Sourcing intro', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'Events as source of truth.', 'concepts' => ['event-sourcing', 'events', 'audit'], 'sections' => [
        ['heading' => 'Event Sourcing', 'body' => '**Estado** derivado de secuencia **eventos** inmutables — no UPDATE row overwrite — append-only log — audit trail natural.'],
        ['heading' => 'vs CRUD', 'body' => 'CRUD current state only; ES full history replay — debugging temporal queries.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Event store?', 'options' => ['Append-only log events', 'DELETE table', 'CSS cache'], 'answer' => 'Append-only log events', 'explanation' => 'Never mutate past events.', 'pro_tip' => 'Compare Kafka log curso.'],
        ['type' => 'choice', 'question' => '¿Replay events?', 'options' => ['Rebuild state from history', 'Delete history', 'Random'], 'answer' => 'Rebuild state from history', 'explanation' => 'Projections from stream.', 'pro_tip' => 'Snapshot optimize long streams.'],
    ]],
    ['slug' => 'ev-cqrs', 'order' => 2, 'title' => 'CQRS pattern', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Separate read write models.', 'concepts' => ['cqrs', 'command', 'query'], 'sections' => [
        ['heading' => 'CQRS', 'body' => '**Command Query Responsibility Segregation** — write model events; read model optimized denormalized views.'],
        ['heading' => 'When', 'body' => 'Complex domains, different read/write scale — not every CRUD app needs ES+CQRS.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿CQRS benefit?', 'options' => ['Scale reads writes independently', 'One table always', 'No queries'], 'answer' => 'Scale reads writes independently', 'explanation' => 'Read DB can differ schema.', 'pro_tip' => 'YAGNI simple apps CRUD OK.'],
        ['type' => 'choice', 'question' => '¿Command handler?', 'options' => ['Validate emit event no direct read model', 'SQL SELECT only', 'CSS'], 'answer' => 'Validate emit event no direct read model', 'explanation' => 'Write side responsibility.', 'pro_tip' => 'Idempotent command IDs.'],
    ]],
    ['slug' => 'ev-events', 'order' => 3, 'title' => 'Diseño de eventos', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Naming, versioning, payloads.', 'concepts' => ['naming', 'version', 'payload'], 'sections' => [
        ['heading' => 'Event design', 'body' => 'Past tense OrderPlaced, PaymentReceived — small focused events — version schema evolution.'],
        ['heading' => 'Upcasting', 'body' => 'Transform old event versions on replay — migration strategy.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Event name past tense?', 'options' => ['Something happened fact', 'Command imperative', 'Question'], 'answer' => 'Something happened fact', 'explanation' => 'OrderPlaced not PlaceOrder.', 'pro_tip' => 'Domain language ubiquitous.'],
        ['type' => 'choice', 'question' => '¿Event too big?', 'options' => ['Split granular events easier evolve', 'One mega event better', 'No events'], 'answer' => 'Split granular events easier evolve', 'explanation' => 'Small composable facts.', 'pro_tip' => 'Include correlationId trace.'],
    ]],
    ['slug' => 'ev-projections', 'order' => 4, 'title' => 'Projections y read models', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'Build views from stream.', 'concepts' => ['projection', 'read-model', 'handler'], 'sections' => [
        ['heading' => 'Projections', 'body' => 'Event handler updates read DB — materialized view OrderSummary table — eventual consistency.'],
        ['heading' => 'Rebuild', 'body' => 'Drop projection replay all events — fix bug projection logic.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Eventual consistency?', 'options' => ['Read lags write briefly', 'Instant always', 'Never consistent'], 'answer' => 'Read lags write briefly', 'explanation' => 'Accept or show pending UI.', 'pro_tip' => 'Compare Kafka consumer lag.'],
        ['type' => 'choice', 'question' => '¿Snapshot?', 'options' => ['Periodic state skip replay from start', 'Delete events', 'Photo'], 'answer' => 'Periodic state skip replay from start', 'explanation' => 'Performance long aggregates.', 'pro_tip' => 'Snapshot + events since.'],
    ]],
    ['slug' => 'ev-saga', 'order' => 5, 'title' => 'Sagas y consistencia', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Distributed transactions patterns.', 'concepts' => ['saga', 'compensation', 'distributed'], 'sections' => [
        ['heading' => 'Saga', 'body' => 'Choreography events vs Orchestration coordinator — compensate on failure PaymentFailed refund.'],
        ['heading' => 'Idempotency', 'body' => 'Consumers handle duplicate events — at-least-once delivery.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Compensating transaction?', 'options' => ['Undo prior step saga failure', 'Commit harder', 'Ignore failure'], 'answer' => 'Undo prior step saga failure', 'explanation' => 'OrderCancelled refund issued.', 'pro_tip' => 'Not 2PC across microservices.'],
        ['type' => 'choice', 'question' => '¿Idempotent consumer?', 'options' => ['Same event twice same result', 'Process infinite', 'Skip all'], 'answer' => 'Same event twice same result', 'explanation' => 'eventId dedup table.', 'pro_tip' => 'Curso Kafka exactly-once hard.'],
    ]],
    ['slug' => 'ev-prod', 'order' => 6, 'title' => 'ES en producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'EventStoreDB, when not to use.', 'concepts' => ['eventstore', 'tradeoffs', 'when'], 'sections' => [
        ['heading' => 'Tools', 'body' => 'EventStoreDB, Marten .NET, Axon — or Postgres event table DIY — Kafka as log transport.'],
        ['heading' => 'When NOT', 'body' => 'Simple CRUD, team unfamiliar, reporting only SQL easier — complexity cost real.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿GDPR delete user ES?', 'options' => ['Crypto shred or tombstone events complex', 'DELETE row easy', 'Ignore GDPR'], 'answer' => 'Crypto shred or tombstone events complex', 'explanation' => 'Immutability vs right erasure.', 'pro_tip' => 'Design PII minimal events.'],
        ['type' => 'choice', 'question' => '¿Start with ES?', 'options' => ['Usually CRUD first evolve if needed', 'Always day one', 'Never'], 'answer' => 'Usually CRUD first evolve if needed', 'explanation' => 'Pragmatic architecture.', 'pro_tip' => 'Curso system-design tradeoffs.'],
    ]],
];
