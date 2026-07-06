<?php

declare(strict_types=1);

$cat = 'arquitectura';

return [
    ['slug' => 'microservices', 'term' => 'Microservicios', 'category' => $cat, 'definition' => 'Arquitectura donde la app se divide en servicios pequeños, independientes y desplegables por separado.'],
    ['slug' => 'monolith', 'term' => 'Monolito', 'category' => $cat, 'definition' => 'Aplicación única con todo el código en un solo deploy. Más simple al inicio.'],
    ['slug' => 'ddd', 'term' => 'DDD', 'category' => $cat, 'definition' => 'Domain-Driven Design: modelar software según el dominio del negocio con entidades, agregados y bounded contexts.'],
    ['slug' => 'events', 'term' => 'Eventos (arquitectura)', 'category' => $cat, 'definition' => 'Mensajes que notifican que algo ocurrió. Desacoplan servicios en arquitecturas event-driven.'],
    ['slug' => 'event-driven', 'term' => 'Event-driven', 'category' => $cat, 'definition' => 'Arquitectura donde componentes reaccionan a eventos en vez de llamarse directamente.'],
    ['slug' => 'load-balancer', 'term' => 'Load Balancer', 'category' => $cat, 'definition' => 'Distribuye tráfico entre varios servidores para escalar y evitar sobrecarga en uno solo.'],
    ['slug' => 'cdn', 'term' => 'CDN', 'category' => $cat, 'definition' => 'Content Delivery Network: sirve assets estáticos desde servidores cercanos al usuario.'],
    ['slug' => 'api-gateway', 'term' => 'API Gateway', 'category' => $cat, 'definition' => 'Punto de entrada único que enruta, autentica y limita peticiones a microservicios internos.'],
    ['slug' => 'message-broker', 'term' => 'Message Broker', 'category' => $cat, 'definition' => 'Intermediario que recibe y distribuye mensajes entre servicios (RabbitMQ, Kafka).'],
    ['slug' => 'kafka', 'term' => 'Apache Kafka', 'category' => $cat, 'definition' => 'Plataforma de streaming de eventos para pipelines de datos y comunicación entre servicios.'],
    ['slug' => 'grpc', 'term' => 'gRPC', 'category' => $cat, 'definition' => 'Framework RPC de alto rendimiento que usa Protocol Buffers en vez de JSON.'],
    ['slug' => 'soap', 'term' => 'SOAP', 'category' => $cat, 'definition' => 'Protocolo XML antiguo para servicios web empresariales. Menos común que REST hoy.'],
    ['slug' => 'scalability', 'term' => 'Escalabilidad', 'category' => $cat, 'definition' => 'Capacidad del sistema de manejar más carga añadiendo recursos (vertical u horizontal).'],
    ['slug' => 'availability', 'term' => 'Disponibilidad', 'category' => $cat, 'definition' => 'Porcentaje de tiempo que el sistema está operativo (99.9% = ~8h downtime/año).'],
    ['slug' => 'failover', 'term' => 'Failover', 'category' => $cat, 'definition' => 'Cambio automático a un sistema de respaldo cuando el principal falla.'],
    ['slug' => 'blue-green', 'term' => 'Blue-Green deploy', 'category' => $cat, 'definition' => 'Dos entornos idénticos; se cambia el tráfico al nuevo (green) sin downtime.'],
    ['slug' => 'canary', 'term' => 'Canary deploy', 'category' => $cat, 'definition' => 'Desplegar la nueva versión a un pequeño % de usuarios antes del rollout completo.'],
    ['slug' => 'feature-flag', 'term' => 'Feature flag', 'category' => $cat, 'definition' => 'Interruptor en runtime para activar/desactivar funcionalidades sin redeploy.'],
    ['slug' => 'tech-debt', 'term' => 'Deuda técnica', 'category' => $cat, 'definition' => 'Costo futuro de atajos o decisiones rápidas que habrá que corregir después.'],
    ['slug' => 'legacy', 'term' => 'Legacy', 'category' => $cat, 'definition' => 'Sistema antiguo difícil de mantener pero crítico para el negocio.'],
    ['slug' => 'framework', 'term' => 'Framework', 'category' => $cat, 'definition' => 'Estructura base que define cómo organizar y construir aplicaciones (Laravel, React, Django).'],
    ['slug' => 'libreria', 'term' => 'Librería', 'category' => $cat, 'definition' => 'Código reutilizable que llamas desde tu app. Tú controlas el flujo (lodash, axios).'],
    ['slug' => 'sdk', 'term' => 'SDK', 'category' => $cat, 'definition' => 'Software Development Kit: herramientas y librerías oficiales para integrar un servicio o plataforma.'],
    ['slug' => 'monorepo', 'term' => 'Monorepo', 'category' => $cat, 'definition' => 'Un solo repositorio Git con múltiples proyectos o paquetes relacionados.'],
    ['slug' => 'polyrepo', 'term' => 'Polyrepo', 'category' => $cat, 'definition' => 'Cada servicio o proyecto en su propio repositorio Git independiente.'],
    ['slug' => 'boilerplate', 'term' => 'Boilerplate', 'category' => $cat, 'definition' => 'Código repetitivo o plantilla inicial que se reutiliza como punto de partida.'],
    ['slug' => 'ide', 'term' => 'IDE', 'category' => $cat, 'definition' => 'Entorno de desarrollo integrado: editor + debugger + terminal (VS Code, Cursor, PhpStorm).'],
    ['slug' => 'cli', 'term' => 'CLI', 'category' => $cat, 'definition' => 'Command Line Interface: programa que se usa desde terminal con comandos de texto.'],
    ['slug' => 'lint', 'term' => 'Linter', 'category' => $cat, 'definition' => 'Herramienta que analiza código buscando errores de estilo y posibles bugs (ESLint, PHPStan).'],
    ['slug' => 'formatter', 'term' => 'Formatter', 'category' => $cat, 'definition' => 'Herramienta que formatea código automáticamente (Prettier, PHP-CS-Fixer).'],
];
