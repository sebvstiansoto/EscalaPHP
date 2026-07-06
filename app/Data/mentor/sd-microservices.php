<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Microservicios vs monolito',
    'body' => 'Cuándo dividir, bounded contexts y comunicación. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Microservicios](/glosario#microservices) · [Monolito](/glosario#monolith) · [bounded-context](/glosario#bounded-context)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Decision',
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
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Comunicación',
    'body' => 'Sync REST/gRPC vs async events Kafka — evita distributed monolith acoplado.',
    'code' => 'OrderPlaced event →
  inventory-service (reserve)
  notification-service (email)
  analytics-service (track)',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Cuándo dividir, bounded contexts y comunicación. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **System design**, esto aparece en code reviews, incidentes y entregas diarias. Cuándo dividir, bounded contexts y comunicación. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'Monolith modular:
  /billing module
  /catalog module
  shared DB or schema per module

Microservices:
  billing-service (own DB)
  catalog-service (own DB)
  API Gateway + gRPC/REST',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'Monolith modular:',
      1 => '  /billing module',
      2 => '  /catalog module',
      3 => '  shared DB or schema per module',
      4 => 'Microservices:',
      5 => '  billing-service (own DB)',
      6 => '  catalog-service (own DB)',
      7 => '  API Gateway + gRPC/REST',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso arquitectura-software modular monolith.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Start with microservices day 1?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Bounded context?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
