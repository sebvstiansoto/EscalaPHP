<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Alerting y SLOs',
    'body' => 'Alertmanager, error budget y on-call. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📈',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [slo](/glosario#slo) · [alert](/glosario#alert) · [oncall](/glosario#oncall)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SLO',
    'body' => '99.9% uptime = ~43 min downtime/mes — error budget guía velocity vs reliability.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-alerts
data:
  APP_ENV: production',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Alertas',
    'body' => 'Alerta síntoma usuario (checkout failing), no causa (CPU 80%) — reduce fatiga.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-alerts
data:
  APP_ENV: production',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Alertmanager, error budget y on-call. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Observabilidad**, esto aparece en code reviews, incidentes y entregas diarias. Alertmanager, error budget y on-call. — no es teoría de manual: es lo que te van a pedir en producción.',
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
  name: ob-alerts
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
      3 => '  name: ob-alerts',
      4 => 'data:',
      5 => '  APP_ENV: production',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Google SRE book referencia clásica.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿SLO vs SLA?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Alert fatigue?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
