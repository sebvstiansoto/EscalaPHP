<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Estrategia y checklist del examen',
    'body' => 'Estrategia y checklist del examen — cierre avanzado de Cert AZ-900. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☁️',
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
    'body' => 'Repasa escenarios típicos del examen oficial de Cert AZ-900: servicios clave, límites, costos y arquitecturas recomendadas.',
    'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Día del examen',
    'body' => 'Gestiona el tiempo, marca preguntas difíciles, elimina respuestas obviamente incorrectas y repasa tus puntos débiles la semana previa.',
    'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Estrategia y checklist del examen — cierre avanzado de Cert AZ-900. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
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
    'body' => 'En equipos que usan **Cert AZ-900**, esto aparece en code reviews, incidentes y entregas diarias. Estrategia y checklist del examen — cierre avanzado de Cert AZ-900. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
    'demo_language' => 'shell',
  ),
  8 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '#!/usr/bin/env bash',
      1 => 'set -euo pipefail',
      2 => '# Runbook: verificar servicio tras deploy',
      3 => 'curl -fsS "https://app.example.com/health" | jq .',
      4 => 'kubectl rollout status deployment/api -n production --timeout=120s',
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
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
