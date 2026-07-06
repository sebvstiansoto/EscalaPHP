<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'sd-intro',
    'order' => 1,
    'title' => 'Fundamentos de system design',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Requisitos, estimación y diagramas.',
    'concepts' => 
    array (
      0 => 'requirements',
      1 => 'scale',
      2 => 'diagram',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'System design',
        'body' => 'Diseñar sistemas que **escalan** — no solo código, sino componentes, datos y trade-offs. Clave en entrevistas senior.',
        'code' => '# Practica: sd-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Proceso',
        'body' => '1) Requisitos funcionales/no funcionales 2) Estimación (QPS, storage) 3) API 4) Diagrama 5) Deep dive bottlenecks.',
        'code' => '# Practica: sd-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Primer paso diseñar Twitter clone?',
        'options' => 
        array (
          0 => 'Clarificar requisitos y escala',
          1 => 'Elegir React',
          2 => 'Comprar servidores',
        ),
        'answer' => 'Clarificar requisitos y escala',
        'explanation' => 'Scope evita over-engineering.',
        'pro_tip' => 'Pregunta: lecturas vs escrituras ratio.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿QPS significa...?',
        'options' => 
        array (
          0 => 'Queries por segundo',
          1 => 'Quality per service',
          2 => 'Queue processing',
        ),
        'answer' => 'Queries por segundo',
        'explanation' => 'Métrica de carga.',
        'pro_tip' => 'Peak QPS >> average.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'sd-scaling',
    'order' => 2,
    'title' => 'Escalado horizontal y load balancing',
    'level' => 'Arquitectura',
    'minutes' => 35,
    'summary' => 'LB, stateless apps y CAP.',
    'concepts' => 
    array (
      0 => 'load-balancer',
      1 => 'stateless',
      2 => 'cap',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Load balancer',
        'body' => 'Nginx/ALB distribuye tráfico entre N app servers — health checks quitan instancias malas.',
        'code' => '# Practica: sd-scaling
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'CAP',
        'body' => 'En partición de red eliges Consistency o Availability — diseño consciente de trade-offs.',
        'code' => '# Practica: sd-scaling
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿App stateless escala porque...?',
        'options' => 
        array (
          0 => 'Cualquier server atiende cualquier request',
          1 => 'Un solo server',
          2 => 'Sin BD',
        ),
        'answer' => 'Cualquier server atiende cualquier request',
        'explanation' => 'Sesión en Redis/BD externa.',
        'pro_tip' => 'Sticky sessions evítalas si puedes.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Round robin LB?',
        'options' => 
        array (
          0 => 'Reparte requests secuencialmente',
          1 => 'Siempre al más rápido',
          2 => 'Random puro',
        ),
        'answer' => 'Reparte requests secuencialmente',
        'explanation' => 'Algoritmo simple y común.',
        'pro_tip' => 'Least connections para requests largos.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'sd-db',
    'order' => 3,
    'title' => 'Bases de datos a escala',
    'level' => 'Arquitectura',
    'minutes' => 40,
    'summary' => 'Replicación, sharding y read replicas.',
    'concepts' => 
    array (
      0 => 'replication',
      1 => 'sharding',
      2 => 'read-replica',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Read replicas',
        'body' => 'Primary escribe, replicas leen — escala lecturas 10x+. Lag de replicación existe.',
        'code' => '# Practica: sd-db
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Sharding',
        'body' => 'Particiona datos por user_id hash — cada shard es BD independiente.',
        'code' => '# Practica: sd-db
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Sharding resuelve...?',
        'options' => 
        array (
          0 => 'Datos demasiado grandes para una BD',
          1 => 'CSS lento',
          2 => 'Sin backups',
        ),
        'answer' => 'Datos demasiado grandes para una BD',
        'explanation' => 'Horizontal partition de datos.',
        'pro_tip' => 'Shard key mal elegida = hot shard.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Replication lag implica...?',
        'options' => 
        array (
          0 => 'Lectura replica puede estar desactualizada',
          1 => 'Pérdida total datos',
          2 => 'Sin escrituras',
        ),
        'answer' => 'Lectura replica puede estar desactualizada',
        'explanation' => 'Eventual consistency en reads.',
        'pro_tip' => 'Read-after-write: lee primary.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'sd-cache',
    'order' => 4,
    'title' => 'Caché y CDN',
    'level' => 'Arquitectura',
    'minutes' => 35,
    'summary' => 'Redis, CDN y cache invalidation.',
    'concepts' => 
    array (
      0 => 'cdn',
      1 => 'cache',
      2 => 'edge',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CDN',
        'body' => 'Cloudflare/Akamai sirve assets estáticos desde edge — reduce latencia global.',
        'code' => '# Practica: sd-cache
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Cache layers',
        'body' => 'Browser → CDN → Redis → DB — cada capa absorbe carga.',
        'code' => '# Practica: sd-cache
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿CDN ideal para...?',
        'options' => 
        array (
          0 => 'Imágenes, JS, CSS estáticos',
          1 => 'Transacciones bancarias write',
          2 => 'Sesiones únicas',
        ),
        'answer' => 'Imágenes, JS, CSS estáticos',
        'explanation' => 'Contenido cacheable inmutable.',
        'pro_tip' => 'Cache busting con hash en filename.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Problema clásico de caché?',
        'options' => 
        array (
          0 => 'Invalidación — datos stale',
          1 => 'Demasiado rápido',
          2 => 'Sin Redis',
        ),
        'answer' => 'Invalidación — datos stale',
        'explanation' => '"There are only two hard things..."',
        'pro_tip' => 'TTL + invalidación activa.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'sd-queues',
    'order' => 5,
    'title' => 'Colas y desac acoplamiento',
    'level' => 'Arquitectura',
    'minutes' => 35,
    'summary' => 'Async processing, event-driven y backpressure.',
    'concepts' => 
    array (
      0 => 'queue',
      1 => 'async',
      2 => 'backpressure',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Async',
        'body' => 'API encola email job → responde 202 → worker procesa — UX rápida, trabajo pesado después.',
        'code' => '# Practica: sd-queues
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Event-driven',
        'body' => 'OrderCreated event → inventory, email, analytics — servicios desacoplados.',
        'code' => '# Practica: sd-queues
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cola entre API y worker?',
        'options' => 
        array (
          0 => 'Absorbe picos y fallos temporales',
          1 => 'Hace sync más rápido',
          2 => 'Reemplaza BD',
        ),
        'answer' => 'Absorbe picos y fallos temporales',
        'explanation' => 'Buffer + retry.',
        'pro_tip' => 'Curso Kafka profundiza streaming.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Backpressure?',
        'options' => 
        array (
          0 => 'Ralentizar productor si consumidor saturado',
          1 => 'Más RAM',
          2 => 'Delete queue',
        ),
        'answer' => 'Ralentizar productor si consumidor saturado',
        'explanation' => 'Evita OOM en cola infinita.',
        'pro_tip' => 'Dead letter queue para poison pills.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'sd-case',
    'order' => 6,
    'title' => 'Case study: URL shortener',
    'level' => 'Práctica',
    'minutes' => 45,
    'summary' => 'Diseño completo de bit.ly simplificado.',
    'concepts' => 
    array (
      0 => 'hash',
      1 => 'redirect',
      2 => 'analytics',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'API',
        'body' => 'POST /shorten { url } → { short: "abc123" }; GET /abc123 → 302 redirect.',
        'code' => 'Cache short_code → long_url en Redis',
      ),
      1 => 
      array (
        'heading' => 'Storage',
        'body' => 'Base62 encode de ID secuencial o hash — índice en short_code. Redis cache para hot links.',
        'code' => 'Cache short_code → long_url en Redis',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Redirect HTTP corto?',
        'options' => 
        array (
          0 => '302 Found',
          1 => '200 OK body',
          2 => '500',
        ),
        'answer' => '302 Found',
        'explanation' => 'Browser sigue Location header.',
        'pro_tip' => '301 si URL nunca cambia.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Menciona Redis cache en diseño URL shortener',
        'must_contain' => 
        array (
          0 => 'Redis',
        ),
        'hint' => 'Cache short_code → long_url en Redis',
        'explanation' => 'Hot URLs evitan BD.',
        'pro_tip' => 'Rate limit POST /shorten por IP.',
      ),
    ),
  ),
  array (
    'slug' => 'sd-microservices',
    'order' => 7,
    'title' => 'Microservicios vs monolito',
    'level' => 'Arquitectura',
    'minutes' => 40,
    'summary' => 'Cuándo dividir, bounded contexts y comunicación.',
    'concepts' => 
    array (
      0 => 'microservices',
      1 => 'monolith',
      2 => 'bounded-context',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Decision',
        'body' => 'Monolito modular primero — microservicios cuando equipos independientes, escala diferencial, deploy separado justifica ops cost.',
        'code' => 'Monolith modular:
  /billing module
  /catalog module
  shared DB or schema per module

Microservices:
  billing-service (own DB)
  catalog-service (own DB)
  API Gateway + gRPC/REST',
      ),
      1 => 
      array (
        'heading' => 'Comunicación',
        'body' => 'Sync REST/gRPC vs async events Kafka — evita distributed monolith acoplado.',
        'code' => 'OrderPlaced event →
  inventory-service (reserve)
  notification-service (email)
  analytics-service (track)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Start with microservices day 1?',
        'options' => 
        array (
          0 => 'Usually monolith first',
          1 => 'Always microservices',
          2 => 'Never microservices',
        ),
        'answer' => 'Usually monolith first',
        'explanation' => 'YAGNI — split when pain clear.',
        'pro_tip' => 'Curso arquitectura-software modular monolith.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bounded context?',
        'options' => 
        array (
          0 => 'DDD subdomain clear boundary',
          1 => 'CSS boundary',
          2 => 'VPN',
        ),
        'answer' => 'DDD subdomain clear boundary',
        'explanation' => 'Each service owns its domain language.',
        'pro_tip' => 'Curso event-sourcing-cqrs per service.',
      ),
    ),
  ),
  array (
    'slug' => 'sd-reliability',
    'order' => 8,
    'title' => 'Confiabilidad y CAP',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'SLA, redundancy, CAP theorem y DR.',
    'concepts' => 
    array (
      0 => 'sla',
      1 => 'cap',
      2 => 'disaster-recovery',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SLA/SLO',
        'body' => '99.9% = ~8.7h downtime/year — define SLO latency p99, error budget, alerting on burn rate.',
        'code' => 'SLO: 99.9% requests < 200ms p99
Error budget: 0.1% monthly
Alert when budget 50% consumed in 24h',
      ),
      1 => 
      array (
        'heading' => 'CAP & DR',
        'body' => 'Partition tolerance inevitable — choose CP (consistency) vs AP (availability). Multi-region DR: RPO/RTO targets, failover runbooks.',
        'code' => 'RPO = max data loss acceptable
RTO = max downtime acceptable
Active-passive DB replica cross-region',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿CAP during network partition?',
        'options' => 
        array (
          0 => 'Choose consistency OR availability',
          1 => 'Both always',
          2 => 'Neither',
        ),
        'answer' => 'Choose consistency OR availability',
        'explanation' => 'Partition tolerance required in distributed systems.',
        'pro_tip' => 'Curso observabilidad SLO/error budget.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿RPO meaning?',
        'options' => 
        array (
          0 => 'Max acceptable data loss window',
          1 => 'Response per second',
          2 => 'Redis protocol',
        ),
        'answer' => 'Max acceptable data loss window',
        'explanation' => 'Disaster recovery planning metric.',
        'pro_tip' => 'Test failover quarterly not just backup.',
      ),
    ),
  ),
);
