<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Health probes',
    'body' => 'Liveness, readiness y startup probes. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☸️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [liveness](/glosario#liveness) · [readiness](/glosario#readiness) · [startup](/glosario#startup)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Probes',
    'body' => '**Liveness** reinicia pod si colgado. **Readiness** quita del Service si no listo. **Startup** para apps lentas al boot.',
    'code' => 'livenessProbe:
  httpGet:
    path: /health
    port: 8080
  initialDelaySeconds: 10
readinessProbe:
  httpGet:
    path: /ready
    port: 8080',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Endpoints',
    'body' => 'Implementa GET /health (proceso vivo) y GET /ready (BD conectada, warm-up OK) en tu app.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Liveness, readiness y startup probes. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Kubernetes**, esto aparece en code reviews, incidentes y entregas diarias. Liveness, readiness y startup probes. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'livenessProbe:
  httpGet:
    path: /health
    port: 8080
  initialDelaySeconds: 10
readinessProbe:
  httpGet:
    path: /ready
    port: 8080',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'livenessProbe:',
      1 => '  httpGet:',
      2 => '    path: /health',
      3 => '    port: 8080',
      4 => '  initialDelaySeconds: 10',
      5 => 'readinessProbe:',
      6 => '  httpGet:',
      7 => '    path: /ready',
      8 => '    port: 8080',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso observabilidad /health patterns.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Readiness probe falla significa...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe livenessProbe** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
