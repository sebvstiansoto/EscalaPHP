<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ar-intro',
    'order' => 1,
    'title' => 'Arquitectura de software',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Qué es arquitectura y decisiones irreversibles.',
    'concepts' => 
    array (
      0 => 'architecture',
      1 => 'decision',
      2 => 'tradeoff',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Arquitectura',
        'body' => 'Estructura de componentes, cómo se comunican y qué tecnologías usan — difícil de cambiar después.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Trade-offs',
        'body' => 'No hay arquitectura perfecta — solo contexto: equipo, escala, plazo.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Buena arquitectura...?',
        'options' => 
        array (
          0 => 'Facilita cambios futuros con coste razonable',
          1 => 'Nunca cambia',
          2 => 'Usa 20 microservicios día 1',
        ),
        'answer' => 'Facilita cambios futuros con coste razonable',
        'explanation' => 'Evolutiva, no over-engineered.',
        'pro_tip' => 'Documenta ADRs (Architecture Decision Records).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ADR documenta...?',
        'options' => 
        array (
          0 => 'Por qué se tomó una decisión técnica',
          1 => 'Solo código PHP',
          2 => 'Solo diseño UI',
        ),
        'answer' => 'Por qué se tomó una decisión técnica',
        'explanation' => 'Contexto + decisión + consecuencias.',
        'pro_tip' => 'Revisa ADRs en onboarding de equipo.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ar-monolito',
    'order' => 2,
    'title' => 'Monolito modular',
    'level' => 'Patrón',
    'minutes' => 30,
    'summary' => 'Un deploy, módulos claros — el default sensato.',
    'concepts' => 
    array (
      0 => 'monolith',
      1 => 'modular',
      2 => 'boundary',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Monolito',
        'body' => 'Una app, un deploy. Laravel/Symfony/Django son monolitos — **modular** por carpetas/domains.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-monolito\';',
      ),
      1 => 
      array (
        'heading' => 'Ventaja',
        'body' => 'Debug simple, transacciones ACID fáciles, un repo — ideal hasta ~50 devs en muchos casos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-monolito\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Monolito modular significa...?',
        'options' => 
        array (
          0 => 'Un deploy con boundaries internos claros',
          1 => 'Un solo archivo PHP',
          2 => 'Sin BD',
        ),
        'answer' => 'Un deploy con boundaries internos claros',
        'explanation' => 'Módulos Billing, Users, Catalog separados en código.',
        'pro_tip' => 'Shopify empezó monolito — escalo después.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo monolito es suficiente?',
        'options' => 
        array (
          0 => 'Startup/MVP y equipos pequeños-medianos',
          1 => 'Siempre nunca microservicios',
          2 => 'Solo 1 usuario',
        ),
        'answer' => 'Startup/MVP y equipos pequeños-medianos',
        'explanation' => 'Velocidad de entrega > distribución prematura.',
        'pro_tip' => 'ep-arquitectura en php-enterprise conecta aquí.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ar-micro',
    'order' => 3,
    'title' => 'Microservicios',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Cuándo dividir, comunicación y costes.',
    'concepts' => 
    array (
      0 => 'microservices',
      1 => 'bounded-context',
      2 => 'network',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Microservicios',
        'body' => 'Servicios independientes, deploy separado, BD por servicio (idealmente).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-micro\';',
      ),
      1 => 
      array (
        'heading' => 'Coste',
        'body' => 'Red, observabilidad, consistencia eventual, DevOps — no es gratis.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-micro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal para considerar microservicios?',
        'options' => 
        array (
          0 => 'Equipos bloqueados por monolito gigante',
          1 => 'Día 1 del proyecto',
          2 => 'Quieres moda',
        ),
        'answer' => 'Equipos bloqueados por monolito gigante',
        'explanation' => 'Organización y escala lo justifican.',
        'pro_tip' => 'Strangler fig migra gradualmente.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Comunicación sync microservicios?',
        'options' => 
        array (
          0 => 'HTTP/gRPC',
          1 => 'Solo archivos CSV',
          2 => 'Email',
        ),
        'answer' => 'HTTP/gRPC',
        'explanation' => 'Async con colas para desacoplar.',
        'pro_tip' => 'Circuit breaker evita cascadas.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ar-eventos',
    'order' => 4,
    'title' => 'Event-driven architecture',
    'level' => 'Patrón',
    'minutes' => 35,
    'summary' => 'Eventos, colas y consistencia eventual.',
    'concepts' => 
    array (
      0 => 'event',
      1 => 'queue',
      2 => 'eventual-consistency',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Eventos',
        'body' => 'OrderPlaced → envía email, actualiza stock, analytics — sin acoplar en un god service.',
        'code' => '// Laravel
event(new OrderPlaced($order));
// Listeners: SendInvoice, UpdateInventory',
      ),
      1 => 
      array (
        'heading' => 'Colas',
        'body' => 'Redis/RabbitMQ procesan async — usuario no espera email SMTP lento.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-eventos\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja event-driven?',
        'options' => 
        array (
          0 => 'Desacopla productores de consumidores',
          1 => 'Sin BD',
          2 => 'Sin tests',
        ),
        'answer' => 'Desacopla productores de consumidores',
        'explanation' => 'Añades listener sin tocar checkout.',
        'pro_tip' => 'Idempotencia en consumers — mensajes duplicados.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Consistencia eventual?',
        'options' => 
        array (
          0 => 'Datos convergen tras milisegundos/segundos',
          1 => 'Siempre instantánea',
          2 => 'Imposible',
        ),
        'answer' => 'Datos convergen tras milisegundos/segundos',
        'explanation' => 'Trade-off de sistemas distribuidos.',
        'pro_tip' => 'Saga pattern para transacciones multi-servicio.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ar-capa',
    'order' => 5,
    'title' => 'Capas y hexagonal',
    'level' => 'Diseño',
    'minutes' => 30,
    'summary' => 'Domain, application, infrastructure.',
    'concepts' => 
    array (
      0 => 'layer',
      1 => 'hexagonal',
      2 => 'domain',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Capas',
        'body' => '**Domain** (reglas negocio) → **Application** (casos uso) → **Infrastructure** (BD, HTTP).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-capa\';',
      ),
      1 => 
      array (
        'heading' => 'Hexagonal',
        'body' => 'Ports & adapters — el dominio no conoce Laravel ni PostgreSQL directamente.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-capa\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Domain layer contiene...?',
        'options' => 
        array (
          0 => 'Reglas de negocio puras',
          1 => 'HTML Blade',
          2 => 'Dockerfile',
        ),
        'answer' => 'Reglas de negocio puras',
        'explanation' => 'Sin framework — testeable al 100%.',
        'pro_tip' => 'DDD tactical: entities, value objects.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Adapter en hexagonal?',
        'options' => 
        array (
          0 => 'Implementación concreta de puerto (ej. Eloquent repo)',
          1 => 'Solo UI',
          2 => 'Git',
        ),
        'answer' => 'Implementación concreta de puerto (ej. Eloquent repo)',
        'explanation' => 'Infrastructure implementa interfaces del domain.',
        'pro_tip' => 'Patrones + este curso = visión completa.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ar-escala',
    'order' => 6,
    'title' => 'Escalar en producción',
    'level' => 'Ops',
    'minutes' => 30,
    'summary' => 'Vertical vs horizontal, cache, CDN y read replicas.',
    'concepts' => 
    array (
      0 => 'scale',
      1 => 'cdn',
      2 => 'replica',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Horizontal',
        'body' => 'Más servidores detrás de load balancer — stateless app + Redis sessions.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-escala\';',
      ),
      1 => 
      array (
        'heading' => 'Read replicas',
        'body' => 'PostgreSQL primary escribe, réplicas leen — separa carga reporting.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ar-escala\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Escalar horizontalmente app PHP?',
        'options' => 
        array (
          0 => 'Stateless + sesiones en Redis + load balancer',
          1 => 'Un servidor más grande solo',
          2 => 'Sin cache',
        ),
        'answer' => 'Stateless + sesiones en Redis + load balancer',
        'explanation' => 'Patrón estándar LAMP moderno.',
        'pro_tip' => 'CDN para assets — curso Nginx complementa.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Primera optimización suele ser...?',
        'options' => 
        array (
          0 => 'Cache y queries lentas',
          1 => 'Microservicios día 1',
          2 => 'Reescribir en Rust',
        ),
        'answer' => 'Cache y queries lentas',
        'explanation' => 'Mide antes — EXPLAIN ANALYZE.',
        'pro_tip' => 'Vertical scale compra tiempo; horizontal escala usuarios.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'arquitectura-software-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Arquitectura de software.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Arquitectura de software a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — arquitectura-software
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — arquitectura-software
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
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
    'slug' => 'arquitectura-software-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Arquitectura de software.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Arquitectura de software a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — arquitectura-software
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — arquitectura-software
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
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
