<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Auto-scaling (HPA)',
    'body' => 'Horizontal Pod Autoscaler por CPU y memoria. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☸️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [HPA](/glosario#hpa) · [Scaling (escalado)](/glosario#scaling) · [Métricas](/glosario#metrics)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'HPA',
    'body' => '**Horizontal Pod Autoscaler** aumenta réplicas cuando CPU > umbral y las reduce cuando baja la carga.',
    'code' => 'kind: HorizontalPodAutoscaler',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Métricas',
    'body' => 'CPU, memoria y custom metrics (cola Redis, RPS). Requiere metrics-server en el cluster.',
    'code' => 'kind: HorizontalPodAutoscaler',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Horizontal Pod Autoscaler por CPU y memoria. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Kubernetes**, esto aparece en code reviews, incidentes y entregas diarias. Horizontal Pod Autoscaler por CPU y memoria. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'kind: HorizontalPodAutoscaler',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'kind: HorizontalPodAutoscaler',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** VPA escala verticalmente (más CPU por pod) — complementario.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace el HPA?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe kind: HorizontalPodAutoscaler** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
