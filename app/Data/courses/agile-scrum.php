<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ag-intro',
    'order' => 1,
    'title' => 'Agile manifesto',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Valores y principios agile.',
    'concepts' => 
    array (
      0 => 'agile',
      1 => 'manifesto',
      2 => 'iterative',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Agile',
        'body' => '**Individuos** sobre procesos, **software funcionando** sobre documentación, **colaboración** con cliente, **responder al cambio**.',
        'code' => '# Practica: ag-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'No es caos',
        'body' => 'Agile = disciplina iterativa con feedback — no "sin planificación".',
        'code' => '# Practica: ag-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Agile prioriza...?',
        'options' => 
        array (
          0 => 'Software funcionando entregable',
          1 => 'Documentación exhaustiva primero',
          2 => 'Plan fijo 2 años',
        ),
        'answer' => 'Software funcionando entregable',
        'explanation' => 'Working software measure.',
        'pro_tip' => 'Curso producto-tech stories.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Iteración típica?',
        'options' => 
        array (
          0 => '1-4 semanas sprint',
          1 => '1 año waterfall',
          2 => 'Sin releases',
        ),
        'answer' => '1-4 semanas sprint',
        'explanation' => 'Short feedback loops.',
        'pro_tip' => 'Compare Scrum ceremonies.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ag-scrum',
    'order' => 2,
    'title' => 'Scrum framework',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Roles, artifacts y events.',
    'concepts' => 
    array (
      0 => 'scrum',
      1 => 'sprint',
      2 => 'backlog',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Roles',
        'body' => 'Product Owner (qué), Scrum Master (proceso), Developers (cómo).',
        'code' => '# Practica: ag-scrum
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Sprint',
        'body' => 'Time-box 2 semanas — Sprint Planning → Daily → Review → Retro.',
        'code' => '# Practica: ag-scrum
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Product Owner?',
        'options' => 
        array (
          0 => 'Prioriza backlog maximiza valor',
          1 => 'Escribe todo el código',
          2 => 'Solo meetings',
        ),
        'answer' => 'Prioriza backlog maximiza valor',
        'explanation' => 'Single voice customer.',
        'pro_tip' => 'PO no micro-manage técnico.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Definition of Done?',
        'options' => 
        array (
          0 => 'Criterios completitud increment',
          1 => 'Boss says done',
          2 => 'No tests',
        ),
        'answer' => 'Criterios completitud increment',
        'explanation' => 'Team agreement quality.',
        'pro_tip' => 'Include tests, review, deploy.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ag-kanban',
    'order' => 3,
    'title' => 'Kanban',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Flow, WIP limits y visualización.',
    'concepts' => 
    array (
      0 => 'kanban',
      1 => 'wip',
      2 => 'flow',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Kanban',
        'body' => 'Tablero To Do → In Progress → Done — **limit WIP** — pull system.',
        'code' => '# Practica: ag-kanban
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'vs Scrum',
        'body' => 'Kanban continuo sin sprints fijos — ideal ops/support/DevOps.',
        'code' => '# Practica: ag-kanban
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿WIP limit?',
        'options' => 
        array (
          0 => 'Max items In Progress — evita multitasking',
          1 => 'Work In PHP',
          2 => 'Weekly Income',
        ),
        'answer' => 'Max items In Progress — evita multitasking',
        'explanation' => 'Finish before start new.',
        'pro_tip' => 'Jira/GitHub Projects columns.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Lead time?',
        'options' => 
        array (
          0 => 'Request → delivered',
          1 => 'Sprint length',
          2 => 'Meeting duration',
        ),
        'answer' => 'Request → delivered',
        'explanation' => 'Cycle time in progress only.',
        'pro_tip' => 'Metrics curso producto-tech.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ag-ceremonies',
    'order' => 4,
    'title' => 'Ceremonias efectivas',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Daily, planning, retro.',
    'concepts' => 
    array (
      0 => 'daily',
      1 => 'retro',
      2 => 'planning',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Daily standup',
        'body' => '15 min max — qué hice, qué haré, blockers — **no status report al boss**.',
        'code' => '# Practica: ag-ceremonies
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Retro',
        'body' => 'Start/Stop/Continue — acción concreta próximo sprint.',
        'code' => '# Practica: ag-ceremonies
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Daily standup propósito?',
        'options' => 
        array (
          0 => 'Sync equipo identificar blockers',
          1 => 'Reporte detallado 1h',
          2 => 'Code review',
        ),
        'answer' => 'Sync equipo identificar blockers',
        'explanation' => 'Not PM status meeting.',
        'pro_tip' => 'Async standup Slack remote teams.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Sprint planning output?',
        'options' => 
        array (
          0 => 'Sprint goal + items comprometidos',
          1 => 'Annual roadmap',
          2 => 'Nothing',
        ),
        'answer' => 'Sprint goal + items comprometidos',
        'explanation' => 'Team commits realistic.',
        'pro_tip' => 'Velocity historical guide.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ag-estimation',
    'order' => 5,
    'title' => 'Estimación y velocity',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Story points, planning poker.',
    'concepts' => 
    array (
      0 => 'points',
      1 => 'velocity',
      2 => 'poker',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Story points',
        'body' => 'Relativos no horas — complejidad + incertidumbre + esfuerzo.',
        'code' => '# Practica: ag-estimation
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Planning poker',
        'body' => 'Equipo vota Fibonacci — discute outliers — consenso.',
        'code' => '# Practica: ag-estimation
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Points vs hours?',
        'options' => 
        array (
          0 => 'Points relativos equipo; hours individuales varían',
          1 => 'Igual siempre',
          2 => 'Points = hours exact',
        ),
        'answer' => 'Points relativos equipo; hours individuales varían',
        'explanation' => 'Velocity team metric.',
        'pro_tip' => 'No compare points entre equipos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Velocity?',
        'options' => 
        array (
          0 => 'Points completados sprint promedio',
          1 => 'Speed internet',
          2 => 'CPU GHz',
        ),
        'answer' => 'Points completados sprint promedio',
        'explanation' => 'Forecast capacity.',
        'pro_tip' => 'Improve flow not inflate points.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ag-prod',
    'order' => 6,
    'title' => 'Agile en equipos dev',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'DevOps, CI/CD y agile juntos.',
    'concepts' => 
    array (
      0 => 'devops-agile',
      1 => 'ci',
      2 => 'continuous',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DevOps + Agile',
        'body' => 'Small batches, trunk-based development, CI verde — agile técnico real.',
        'code' => '# Practica: ag-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Anti-patterns',
        'body' => 'Scrum theater — ceremonies sin entregables — PO ausente — sprint carry-over crónico.',
        'code' => '# Practica: ag-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Scrum theater?',
        'options' => 
        array (
          0 => 'Ceremonias sin valor real entrega',
          1 => 'Good scrum',
          2 => 'Theater app',
        ),
        'answer' => 'Ceremonias sin valor real entrega',
        'explanation' => 'Fix or simplify process.',
        'pro_tip' => 'Curso cicd enables agile.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Working software cada sprint?',
        'options' => 
        array (
          0 => 'Increment potentially shippable',
          1 => 'PowerPoint only',
          2 => 'Docs only',
        ),
        'answer' => 'Increment potentially shippable',
        'explanation' => 'Core agile principle.',
        'pro_tip' => 'Feature flags partial release.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'agile-scrum-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Agile & Scrum.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Agile & Scrum a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'agile-scrum-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Agile & Scrum.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Agile & Scrum a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
