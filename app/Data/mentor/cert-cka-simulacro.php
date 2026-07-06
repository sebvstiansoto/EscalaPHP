<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Simulacro de preguntas clave',
    'body' => 'Simulacro de preguntas clave — cierre avanzado de Cert CKA. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☸️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [exam-prep](/glosario#exam-prep) · [Strategy](/glosario#strategy) · [Code Review](/glosario#review)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Preguntas tipo examen',
    'body' => 'Repasa escenarios típicos del examen oficial de Cert CKA: servicios clave, límites, costos y arquitecturas recomendadas.',
    'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Día del examen',
    'body' => 'Gestiona el tiempo, marca preguntas difíciles, elimina respuestas obviamente incorrectas y repasa tus puntos débiles la semana previa.',
    'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Simulacro de preguntas clave — cierre avanzado de Cert CKA. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'teach',
    'title' => 'Vocabulario',
    'body' => 'Términos de esta lección: **exam-prep**, **Strategy**, **Code Review**. Búscalos en el [/glosario](/glosario) si necesitas repaso.',
  ),
  6 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Cert CKA**, esto aparece en code reviews, incidentes y entregas diarias. Simulacro de preguntas clave — cierre avanzado de Cert CKA. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
    'demo_language' => 'shell',
  ),
  8 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Deployment con probes y recursos',
      1 => 'apiVersion: apps/v1',
      2 => 'kind: Deployment',
      3 => 'metadata:',
      4 => '  name: api',
      5 => 'spec:',
      6 => '  replicas: 3',
      7 => '  template:',
      8 => '    spec:',
      9 => '      containers:',
      10 => '        - name: api',
      11 => '          readinessProbe:',
      12 => '            httpGet: { path: /health, port: 8080 }',
      13 => '          resources:',
      14 => '            requests: { cpu: 100m, memory: 128Mi }',
      15 => '            limits: { cpu: 500m, memory: 512Mi }',
    ),
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Simula con temporizador — la presión del tiempo es parte del examen.',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hacer primero ante una pregunta larga en el examen?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cuándo marcar una pregunta para revisar después?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
