<?php

declare(strict_types=1);

return [
    [
        'slug' => 'sd-intro',
        'order' => 1,
        'title' => 'Fundamentos de system design',
        'level' => 'Conceptos',
        'minutes' => 30,
        'summary' => 'Requisitos, estimación y diagramas.',
        'concepts' => ['requirements', 'scale', 'diagram'],
        'sections' => [
            ['heading' => 'System design', 'body' => 'Diseñar sistemas que **escalan** — no solo código, sino componentes, datos y trade-offs. Clave en entrevistas senior.'],
            ['heading' => 'Proceso', 'body' => '1) Requisitos funcionales/no funcionales 2) Estimación (QPS, storage) 3) API 4) Diagrama 5) Deep dive bottlenecks.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Primer paso diseñar Twitter clone?', 'options' => ['Clarificar requisitos y escala', 'Elegir React', 'Comprar servidores'], 'answer' => 'Clarificar requisitos y escala', 'explanation' => 'Scope evita over-engineering.', 'pro_tip' => 'Pregunta: lecturas vs escrituras ratio.'],
            ['type' => 'choice', 'question' => '¿QPS significa...?', 'options' => ['Queries por segundo', 'Quality per service', 'Queue processing'], 'answer' => 'Queries por segundo', 'explanation' => 'Métrica de carga.', 'pro_tip' => 'Peak QPS >> average.'],
        ],
    ],
    [
        'slug' => 'sd-scaling',
        'order' => 2,
        'title' => 'Escalado horizontal y load balancing',
        'level' => 'Arquitectura',
        'minutes' => 35,
        'summary' => 'LB, stateless apps y CAP.',
        'concepts' => ['load-balancer', 'stateless', 'cap'],
        'sections' => [
            ['heading' => 'Load balancer', 'body' => 'Nginx/ALB distribuye tráfico entre N app servers — health checks quitan instancias malas.'],
            ['heading' => 'CAP', 'body' => 'En partición de red eliges Consistency o Availability — diseño consciente de trade-offs.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿App stateless escala porque...?', 'options' => ['Cualquier server atiende cualquier request', 'Un solo server', 'Sin BD'], 'answer' => 'Cualquier server atiende cualquier request', 'explanation' => 'Sesión en Redis/BD externa.', 'pro_tip' => 'Sticky sessions evítalas si puedes.'],
            ['type' => 'choice', 'question' => '¿Round robin LB?', 'options' => ['Reparte requests secuencialmente', 'Siempre al más rápido', 'Random puro'], 'answer' => 'Reparte requests secuencialmente', 'explanation' => 'Algoritmo simple y común.', 'pro_tip' => 'Least connections para requests largos.'],
        ],
    ],
    [
        'slug' => 'sd-db',
        'order' => 3,
        'title' => 'Bases de datos a escala',
        'level' => 'Arquitectura',
        'minutes' => 40,
        'summary' => 'Replicación, sharding y read replicas.',
        'concepts' => ['replication', 'sharding', 'read-replica'],
        'sections' => [
            ['heading' => 'Read replicas', 'body' => 'Primary escribe, replicas leen — escala lecturas 10x+. Lag de replicación existe.'],
            ['heading' => 'Sharding', 'body' => 'Particiona datos por user_id hash — cada shard es BD independiente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Sharding resuelve...?', 'options' => ['Datos demasiado grandes para una BD', 'CSS lento', 'Sin backups'], 'answer' => 'Datos demasiado grandes para una BD', 'explanation' => 'Horizontal partition de datos.', 'pro_tip' => 'Shard key mal elegida = hot shard.'],
            ['type' => 'choice', 'question' => '¿Replication lag implica...?', 'options' => ['Lectura replica puede estar desactualizada', 'Pérdida total datos', 'Sin escrituras'], 'answer' => 'Lectura replica puede estar desactualizada', 'explanation' => 'Eventual consistency en reads.', 'pro_tip' => 'Read-after-write: lee primary.'],
        ],
    ],
    [
        'slug' => 'sd-cache',
        'order' => 4,
        'title' => 'Caché y CDN',
        'level' => 'Arquitectura',
        'minutes' => 35,
        'summary' => 'Redis, CDN y cache invalidation.',
        'concepts' => ['cdn', 'cache', 'edge'],
        'sections' => [
            ['heading' => 'CDN', 'body' => 'Cloudflare/Akamai sirve assets estáticos desde edge — reduce latencia global.'],
            ['heading' => 'Cache layers', 'body' => 'Browser → CDN → Redis → DB — cada capa absorbe carga.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿CDN ideal para...?', 'options' => ['Imágenes, JS, CSS estáticos', 'Transacciones bancarias write', 'Sesiones únicas'], 'answer' => 'Imágenes, JS, CSS estáticos', 'explanation' => 'Contenido cacheable inmutable.', 'pro_tip' => 'Cache busting con hash en filename.'],
            ['type' => 'choice', 'question' => '¿Problema clásico de caché?', 'options' => ['Invalidación — datos stale', 'Demasiado rápido', 'Sin Redis'], 'answer' => 'Invalidación — datos stale', 'explanation' => '"There are only two hard things..."', 'pro_tip' => 'TTL + invalidación activa.'],
        ],
    ],
    [
        'slug' => 'sd-queues',
        'order' => 5,
        'title' => 'Colas y desac acoplamiento',
        'level' => 'Arquitectura',
        'minutes' => 35,
        'summary' => 'Async processing, event-driven y backpressure.',
        'concepts' => ['queue', 'async', 'backpressure'],
        'sections' => [
            ['heading' => 'Async', 'body' => 'API encola email job → responde 202 → worker procesa — UX rápida, trabajo pesado después.'],
            ['heading' => 'Event-driven', 'body' => 'OrderCreated event → inventory, email, analytics — servicios desacoplados.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cola entre API y worker?', 'options' => ['Absorbe picos y fallos temporales', 'Hace sync más rápido', 'Reemplaza BD'], 'answer' => 'Absorbe picos y fallos temporales', 'explanation' => 'Buffer + retry.', 'pro_tip' => 'Curso Kafka profundiza streaming.'],
            ['type' => 'choice', 'question' => '¿Backpressure?', 'options' => ['Ralentizar productor si consumidor saturado', 'Más RAM', 'Delete queue'], 'answer' => 'Ralentizar productor si consumidor saturado', 'explanation' => 'Evita OOM en cola infinita.', 'pro_tip' => 'Dead letter queue para poison pills.'],
        ],
    ],
    [
        'slug' => 'sd-case',
        'order' => 6,
        'title' => 'Case study: URL shortener',
        'level' => 'Práctica',
        'minutes' => 45,
        'summary' => 'Diseño completo de bit.ly simplificado.',
        'concepts' => ['hash', 'redirect', 'analytics'],
        'sections' => [
            ['heading' => 'API', 'body' => 'POST /shorten { url } → { short: "abc123" }; GET /abc123 → 302 redirect.'],
            ['heading' => 'Storage', 'body' => 'Base62 encode de ID secuencial o hash — índice en short_code. Redis cache para hot links.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Redirect HTTP corto?', 'options' => ['302 Found', '200 OK body', '500'], 'answer' => '302 Found', 'explanation' => 'Browser sigue Location header.', 'pro_tip' => '301 si URL nunca cambia.'],
            ['type' => 'contains', 'question' => 'Menciona Redis cache en diseño URL shortener', 'must_contain' => ['Redis'], 'hint' => 'Cache short_code → long_url en Redis', 'explanation' => 'Hot URLs evitan BD.', 'pro_tip' => 'Rate limit POST /shorten por IP.'],
        ],
    ],
];
