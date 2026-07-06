<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Confiabilidad y CAP',
    'body' => 'SLA, redundancy, CAP theorem y DR. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SLA](/glosario#sla) · [cap](/glosario#cap) · [disaster-recovery](/glosario#disaster-recovery)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SLA/SLO',
    'body' => '99.9% = ~8.7h downtime/year — define SLO latency p99, error budget, alerting on burn rate.',
    'code' => 'SLO: 99.9% requests < 200ms p99
Error budget: 0.1% monthly
Alert when budget 50% consumed in 24h',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'CAP & DR',
    'body' => 'Partition tolerance inevitable — choose CP (consistency) vs AP (availability). Multi-region DR: RPO/RTO targets, failover runbooks.',
    'code' => 'RPO = max data loss acceptable
RTO = max downtime acceptable
Active-passive DB replica cross-region',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** SLA, redundancy, CAP theorem y DR. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **System design**, esto aparece en code reviews, incidentes y entregas diarias. SLA, redundancy, CAP theorem y DR. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SLO: 99.9% requests < 200ms p99
Error budget: 0.1% monthly
Alert when budget 50% consumed in 24h',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SLO: 99.9% requests < 200ms p99',
      1 => 'Error budget: 0.1% monthly',
      2 => 'Alert when budget 50% consumed in 24h',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso observabilidad SLO/error budget.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿CAP during network partition?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿RPO meaning?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
