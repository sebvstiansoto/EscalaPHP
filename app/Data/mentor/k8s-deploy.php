<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Deployments y Services',
    'body' => 'Réplicas, rolling updates y balanceo interno. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☸️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Deployment](/glosario#deployment) · [Service (Compose)](/glosario#service) · [Réplicas](/glosario#replicas)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Deployment',
    'body' => 'Un **Deployment** declara cuántas réplicas quieres y qué imagen Docker usar.',
    'code' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: escala-api
spec:
  replicas: 3',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Service',
    'body' => 'Un **Service** expone pods con una IP estable dentro del cluster.',
    'code' => 'kind: Deployment
spec:
  replicas: 3',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Réplicas, rolling updates y balanceo interno. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Kubernetes**, esto aparece en code reviews, incidentes y entregas diarias. Réplicas, rolling updates y balanceo interno. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: escala-api
spec:
  replicas: 3',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'apiVersion: apps/v1',
      1 => 'kind: Deployment',
      2 => 'metadata:',
      3 => '  name: escala-api',
      4 => 'spec:',
      5 => '  replicas: 3',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** HPA (Horizontal Pod Autoscaler) escala por CPU/memoria automáticamente.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué recurso K8s controla el número de réplicas?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe un fragmento YAML de Deployment con kind Deployment y replicas: 3** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
