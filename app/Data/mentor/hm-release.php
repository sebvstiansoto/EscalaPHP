<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Upgrade y rollback',
    'body' => 'Revisiones y history. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⎈',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [upgrade](/glosario#upgrade) · [Rollback](/glosario#rollback) · [revision](/glosario#revision)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Upgrade',
    'body' => 'helm upgrade myapp ./chart — nueva revision, rolling update recursos.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-release
data:
  APP_ENV: production',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Rollback',
    'body' => 'helm rollback myapp 2 — vuelve revision anterior instant.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-release
data:
  APP_ENV: production',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Revisiones y history. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Helm**, esto aparece en code reviews, incidentes y entregas diarias. Revisiones y history. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-release
data:
  APP_ENV: production',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'apiVersion: v1',
      1 => 'kind: ConfigMap',
      2 => 'metadata:',
      3 => '  name: hm-release',
      4 => 'data:',
      5 => '  APP_ENV: production',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** helm rollback 0 = previous.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿helm history?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Failed upgrade?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
