<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ar-intro',
        'order' => 1,
        'title' => 'Arquitectura de software',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Qué es arquitectura y decisiones irreversibles.',
        'concepts' => ['architecture', 'decision', 'tradeoff'],
        'sections' => [
            ['heading' => 'Arquitectura', 'body' => 'Estructura de componentes, cómo se comunican y qué tecnologías usan — difícil de cambiar después.'],
            ['heading' => 'Trade-offs', 'body' => 'No hay arquitectura perfecta — solo contexto: equipo, escala, plazo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Buena arquitectura...?', 'options' => ['Facilita cambios futuros con coste razonable', 'Nunca cambia', 'Usa 20 microservicios día 1'], 'answer' => 'Facilita cambios futuros con coste razonable', 'explanation' => 'Evolutiva, no over-engineered.', 'pro_tip' => 'Documenta ADRs (Architecture Decision Records).'],
            ['type' => 'choice', 'question' => '¿ADR documenta...?', 'options' => ['Por qué se tomó una decisión técnica', 'Solo código PHP', 'Solo diseño UI'], 'answer' => 'Por qué se tomó una decisión técnica', 'explanation' => 'Contexto + decisión + consecuencias.', 'pro_tip' => 'Revisa ADRs en onboarding de equipo.'],
        ],
    ],
    [
        'slug' => 'ar-monolito',
        'order' => 2,
        'title' => 'Monolito modular',
        'level' => 'Patrón',
        'minutes' => 30,
        'summary' => 'Un deploy, módulos claros — el default sensato.',
        'concepts' => ['monolith', 'modular', 'boundary'],
        'sections' => [
            ['heading' => 'Monolito', 'body' => 'Una app, un deploy. Laravel/Symfony/Django son monolitos — **modular** por carpetas/domains.'],
            ['heading' => 'Ventaja', 'body' => 'Debug simple, transacciones ACID fáciles, un repo — ideal hasta ~50 devs en muchos casos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Monolito modular significa...?', 'options' => ['Un deploy con boundaries internos claros', 'Un solo archivo PHP', 'Sin BD'], 'answer' => 'Un deploy con boundaries internos claros', 'explanation' => 'Módulos Billing, Users, Catalog separados en código.', 'pro_tip' => 'Shopify empezó monolito — escalo después.'],
            ['type' => 'choice', 'question' => '¿Cuándo monolito es suficiente?', 'options' => ['Startup/MVP y equipos pequeños-medianos', 'Siempre nunca microservicios', 'Solo 1 usuario'], 'answer' => 'Startup/MVP y equipos pequeños-medianos', 'explanation' => 'Velocidad de entrega > distribución prematura.', 'pro_tip' => 'ep-arquitectura en php-enterprise conecta aquí.'],
        ],
    ],
    [
        'slug' => 'ar-micro',
        'order' => 3,
        'title' => 'Microservicios',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'Cuándo dividir, comunicación y costes.',
        'concepts' => ['microservices', 'bounded-context', 'network'],
        'sections' => [
            ['heading' => 'Microservicios', 'body' => 'Servicios independientes, deploy separado, BD por servicio (idealmente).'],
            ['heading' => 'Coste', 'body' => 'Red, observabilidad, consistencia eventual, DevOps — no es gratis.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Señal para considerar microservicios?', 'options' => ['Equipos bloqueados por monolito gigante', 'Día 1 del proyecto', 'Quieres moda'], 'answer' => 'Equipos bloqueados por monolito gigante', 'explanation' => 'Organización y escala lo justifican.', 'pro_tip' => 'Strangler fig migra gradualmente.'],
            ['type' => 'choice', 'question' => '¿Comunicación sync microservicios?', 'options' => ['HTTP/gRPC', 'Solo archivos CSV', 'Email'], 'answer' => 'HTTP/gRPC', 'explanation' => 'Async con colas para desacoplar.', 'pro_tip' => 'Circuit breaker evita cascadas.'],
        ],
    ],
    [
        'slug' => 'ar-eventos',
        'order' => 4,
        'title' => 'Event-driven architecture',
        'level' => 'Patrón',
        'minutes' => 35,
        'summary' => 'Eventos, colas y consistencia eventual.',
        'concepts' => ['event', 'queue', 'eventual-consistency'],
        'sections' => [
            ['heading' => 'Eventos', 'body' => 'OrderPlaced → envía email, actualiza stock, analytics — sin acoplar en un god service.', 'code' => "// Laravel\nevent(new OrderPlaced(\$order));\n// Listeners: SendInvoice, UpdateInventory"],
            ['heading' => 'Colas', 'body' => 'Redis/RabbitMQ procesan async — usuario no espera email SMTP lento.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja event-driven?', 'options' => ['Desacopla productores de consumidores', 'Sin BD', 'Sin tests'], 'answer' => 'Desacopla productores de consumidores', 'explanation' => 'Añades listener sin tocar checkout.', 'pro_tip' => 'Idempotencia en consumers — mensajes duplicados.'],
            ['type' => 'choice', 'question' => '¿Consistencia eventual?', 'options' => ['Datos convergen tras milisegundos/segundos', 'Siempre instantánea', 'Imposible'], 'answer' => 'Datos convergen tras milisegundos/segundos', 'explanation' => 'Trade-off de sistemas distribuidos.', 'pro_tip' => 'Saga pattern para transacciones multi-servicio.'],
        ],
    ],
    [
        'slug' => 'ar-capa',
        'order' => 5,
        'title' => 'Capas y hexagonal',
        'level' => 'Diseño',
        'minutes' => 30,
        'summary' => 'Domain, application, infrastructure.',
        'concepts' => ['layer', 'hexagonal', 'domain'],
        'sections' => [
            ['heading' => 'Capas', 'body' => '**Domain** (reglas negocio) → **Application** (casos uso) → **Infrastructure** (BD, HTTP).'],
            ['heading' => 'Hexagonal', 'body' => 'Ports & adapters — el dominio no conoce Laravel ni PostgreSQL directamente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Domain layer contiene...?', 'options' => ['Reglas de negocio puras', 'HTML Blade', 'Dockerfile'], 'answer' => 'Reglas de negocio puras', 'explanation' => 'Sin framework — testeable al 100%.', 'pro_tip' => 'DDD tactical: entities, value objects.'],
            ['type' => 'choice', 'question' => '¿Adapter en hexagonal?', 'options' => ['Implementación concreta de puerto (ej. Eloquent repo)', 'Solo UI', 'Git'], 'answer' => 'Implementación concreta de puerto (ej. Eloquent repo)', 'explanation' => 'Infrastructure implementa interfaces del domain.', 'pro_tip' => 'Patrones + este curso = visión completa.'],
        ],
    ],
    [
        'slug' => 'ar-escala',
        'order' => 6,
        'title' => 'Escalar en producción',
        'level' => 'Ops',
        'minutes' => 30,
        'summary' => 'Vertical vs horizontal, cache, CDN y read replicas.',
        'concepts' => ['scale', 'cdn', 'replica'],
        'sections' => [
            ['heading' => 'Horizontal', 'body' => 'Más servidores detrás de load balancer — stateless app + Redis sessions.'],
            ['heading' => 'Read replicas', 'body' => 'PostgreSQL primary escribe, réplicas leen — separa carga reporting.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Escalar horizontalmente app PHP?', 'options' => ['Stateless + sesiones en Redis + load balancer', 'Un servidor más grande solo', 'Sin cache'], 'answer' => 'Stateless + sesiones en Redis + load balancer', 'explanation' => 'Patrón estándar LAMP moderno.', 'pro_tip' => 'CDN para assets — curso Nginx complementa.'],
            ['type' => 'choice', 'question' => '¿Primera optimización suele ser...?', 'options' => ['Cache y queries lentas', 'Microservicios día 1', 'Reescribir en Rust'], 'answer' => 'Cache y queries lentas', 'explanation' => 'Mide antes — EXPLAIN ANALYZE.', 'pro_tip' => 'Vertical scale compra tiempo; horizontal escala usuarios.'],
        ],
    ],
];
