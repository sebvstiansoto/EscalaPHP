<?php

declare(strict_types=1);

return [
    ['slug' => 'ag-intro', 'order' => 1, 'title' => 'Agile manifesto', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Valores y principios agile.', 'concepts' => ['agile', 'manifesto', 'iterative'], 'sections' => [
        ['heading' => 'Agile', 'body' => '**Individuos** sobre procesos, **software funcionando** sobre documentación, **colaboración** con cliente, **responder al cambio**.'],
        ['heading' => 'No es caos', 'body' => 'Agile = disciplina iterativa con feedback — no "sin planificación".'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Agile prioriza...?', 'options' => ['Software funcionando entregable', 'Documentación exhaustiva primero', 'Plan fijo 2 años'], 'answer' => 'Software funcionando entregable', 'explanation' => 'Working software measure.', 'pro_tip' => 'Curso producto-tech stories.'],
        ['type' => 'choice', 'question' => '¿Iteración típica?', 'options' => ['1-4 semanas sprint', '1 año waterfall', 'Sin releases'], 'answer' => '1-4 semanas sprint', 'explanation' => 'Short feedback loops.', 'pro_tip' => 'Compare Scrum ceremonies.'],
    ]],
    ['slug' => 'ag-scrum', 'order' => 2, 'title' => 'Scrum framework', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Roles, artifacts y events.', 'concepts' => ['scrum', 'sprint', 'backlog'], 'sections' => [
        ['heading' => 'Roles', 'body' => 'Product Owner (qué), Scrum Master (proceso), Developers (cómo).'],
        ['heading' => 'Sprint', 'body' => 'Time-box 2 semanas — Sprint Planning → Daily → Review → Retro.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Product Owner?', 'options' => ['Prioriza backlog maximiza valor', 'Escribe todo el código', 'Solo meetings'], 'answer' => 'Prioriza backlog maximiza valor', 'explanation' => 'Single voice customer.', 'pro_tip' => 'PO no micro-manage técnico.'],
        ['type' => 'choice', 'question' => '¿Definition of Done?', 'options' => ['Criterios completitud increment', 'Boss says done', 'No tests'], 'answer' => 'Criterios completitud increment', 'explanation' => 'Team agreement quality.', 'pro_tip' => 'Include tests, review, deploy.'],
    ]],
    ['slug' => 'ag-kanban', 'order' => 3, 'title' => 'Kanban', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Flow, WIP limits y visualización.', 'concepts' => ['kanban', 'wip', 'flow'], 'sections' => [
        ['heading' => 'Kanban', 'body' => 'Tablero To Do → In Progress → Done — **limit WIP** — pull system.'],
        ['heading' => 'vs Scrum', 'body' => 'Kanban continuo sin sprints fijos — ideal ops/support/DevOps.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿WIP limit?', 'options' => ['Max items In Progress — evita multitasking', 'Work In PHP', 'Weekly Income'], 'answer' => 'Max items In Progress — evita multitasking', 'explanation' => 'Finish before start new.', 'pro_tip' => 'Jira/GitHub Projects columns.'],
        ['type' => 'choice', 'question' => '¿Lead time?', 'options' => ['Request → delivered', 'Sprint length', 'Meeting duration'], 'answer' => 'Request → delivered', 'explanation' => 'Cycle time in progress only.', 'pro_tip' => 'Metrics curso producto-tech.'],
    ]],
    ['slug' => 'ag-ceremonies', 'order' => 4, 'title' => 'Ceremonias efectivas', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Daily, planning, retro.', 'concepts' => ['daily', 'retro', 'planning'], 'sections' => [
        ['heading' => 'Daily standup', 'body' => '15 min max — qué hice, qué haré, blockers — **no status report al boss**.'],
        ['heading' => 'Retro', 'body' => 'Start/Stop/Continue — acción concreta próximo sprint.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Daily standup propósito?', 'options' => ['Sync equipo identificar blockers', 'Reporte detallado 1h', 'Code review'], 'answer' => 'Sync equipo identificar blockers', 'explanation' => 'Not PM status meeting.', 'pro_tip' => 'Async standup Slack remote teams.'],
        ['type' => 'choice', 'question' => '¿Sprint planning output?', 'options' => ['Sprint goal + items comprometidos', 'Annual roadmap', 'Nothing'], 'answer' => 'Sprint goal + items comprometidos', 'explanation' => 'Team commits realistic.', 'pro_tip' => 'Velocity historical guide.'],
    ]],
    ['slug' => 'ag-estimation', 'order' => 5, 'title' => 'Estimación y velocity', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Story points, planning poker.', 'concepts' => ['points', 'velocity', 'poker'], 'sections' => [
        ['heading' => 'Story points', 'body' => 'Relativos no horas — complejidad + incertidumbre + esfuerzo.'],
        ['heading' => 'Planning poker', 'body' => 'Equipo vota Fibonacci — discute outliers — consenso.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Points vs hours?', 'options' => ['Points relativos equipo; hours individuales varían', 'Igual siempre', 'Points = hours exact'], 'answer' => 'Points relativos equipo; hours individuales varían', 'explanation' => 'Velocity team metric.', 'pro_tip' => 'No compare points entre equipos.'],
        ['type' => 'choice', 'question' => '¿Velocity?', 'options' => ['Points completados sprint promedio', 'Speed internet', 'CPU GHz'], 'answer' => 'Points completados sprint promedio', 'explanation' => 'Forecast capacity.', 'pro_tip' => 'Improve flow not inflate points.'],
    ]],
    ['slug' => 'ag-prod', 'order' => 6, 'title' => 'Agile en equipos dev', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'DevOps, CI/CD y agile juntos.', 'concepts' => ['devops-agile', 'ci', 'continuous'], 'sections' => [
        ['heading' => 'DevOps + Agile', 'body' => 'Small batches, trunk-based development, CI verde — agile técnico real.'],
        ['heading' => 'Anti-patterns', 'body' => 'Scrum theater — ceremonies sin entregables — PO ausente — sprint carry-over crónico.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Scrum theater?', 'options' => ['Ceremonias sin valor real entrega', 'Good scrum', 'Theater app'], 'answer' => 'Ceremonias sin valor real entrega', 'explanation' => 'Fix or simplify process.', 'pro_tip' => 'Curso cicd enables agile.'],
        ['type' => 'choice', 'question' => '¿Working software cada sprint?', 'options' => ['Increment potentially shippable', 'PowerPoint only', 'Docs only'], 'answer' => 'Increment potentially shippable', 'explanation' => 'Core agile principle.', 'pro_tip' => 'Feature flags partial release.'],
    ]],
];
