<?php

declare(strict_types=1);

$cat = 'metodologia';

return [
    ['slug' => 'agile', 'term' => 'Agile (Ágil)', 'category' => $cat, 'definition' => 'Filosofía de desarrollo iterativo, entregas frecuentes y adaptación al cambio. Manifiesto Ágil (2001).'],
    ['slug' => 'scrum', 'term' => 'Scrum', 'category' => $cat, 'definition' => 'Framework ágil con sprints, roles definidos y ceremonias para entregar valor en ciclos cortos.'],
    ['slug' => 'sprint', 'term' => 'Sprint', 'category' => $cat, 'definition' => 'Iteración fija (1–4 semanas) donde el equipo completa un conjunto de tareas acordadas.'],
    ['slug' => 'kanban', 'term' => 'Kanban', 'category' => $cat, 'definition' => 'Método visual con tablero de columnas (To Do, In Progress, Done) y límite de trabajo en curso.'],
    ['slug' => 'backlog', 'term' => 'Backlog', 'category' => $cat, 'definition' => 'Lista priorizada de tareas, features y bugs pendientes por hacer.'],
    ['slug' => 'user-story', 'term' => 'User Story', 'category' => $cat, 'definition' => 'Requisito desde la perspectiva del usuario: "Como admin quiero exportar CSV para analizar ventas".'],
    ['slug' => 'epic', 'term' => 'Epic', 'category' => $cat, 'definition' => 'Feature grande que se divide en varias user stories. Ejemplo: "Sistema de pagos".'],
    ['slug' => 'standup', 'term' => 'Daily standup', 'category' => $cat, 'definition' => 'Reunión diaria corta (15 min): qué hice, qué haré, qué me bloquea.'],
    ['slug' => 'retrospective', 'term' => 'Retrospectiva', 'category' => $cat, 'definition' => 'Reunión al final del sprint para reflexionar qué mejorar en proceso y comunicación.'],
    ['slug' => 'planning-poker', 'term' => 'Planning poker', 'category' => $cat, 'definition' => 'Técnica para estimar esfuerzo de tareas usando cartas con puntos (Fibonacci).'],
    ['slug' => 'product-owner', 'term' => 'Product Owner', 'category' => $cat, 'definition' => 'Rol Scrum que prioriza el backlog y define qué construir según valor de negocio.'],
    ['slug' => 'scrum-master', 'term' => 'Scrum Master', 'category' => $cat, 'definition' => 'Facilita el proceso Scrum, elimina bloqueos y protege al equipo de distracciones.'],
    ['slug' => 'definition-of-done', 'term' => 'Definition of Done', 'category' => $cat, 'definition' => 'Criterios que una tarea debe cumplir para considerarse terminada: tests, review, deploy.'],
    ['slug' => 'acceptance-criteria', 'term' => 'Criterios de aceptación', 'category' => $cat, 'definition' => 'Condiciones concretas que validan que una user story está completa y correcta.'],
    ['slug' => 'pair-programming', 'term' => 'Pair programming', 'category' => $cat, 'definition' => 'Dos desarrolladores en una máquina: uno escribe (driver), otro revisa y piensa (navigator).'],
    ['slug' => 'mob-programming', 'term' => 'Mob programming', 'category' => $cat, 'definition' => 'Todo el equipo programa juntos en una pantalla, rotando roles.'],
    ['slug' => 'jira', 'term' => 'Jira', 'category' => $cat, 'definition' => 'Herramienta de gestión de proyectos ágiles muy usada en empresas para tickets y sprints.'],
    ['slug' => 'linear', 'term' => 'Linear', 'category' => $cat, 'definition' => 'Gestor de issues moderno y rápido, popular en startups de tecnología.'],
    ['slug' => 'rfc', 'term' => 'RFC', 'category' => $cat, 'definition' => 'Request for Comments: documento de propuesta técnica para discutir cambios antes de implementar.'],
    ['slug' => 'technical-spec', 'term' => 'Especificación técnica', 'category' => $cat, 'definition' => 'Documento que describe cómo implementar una feature: alcance, API, riesgos y plan.'],
    ['slug' => 'on-call', 'term' => 'On-call', 'category' => $cat, 'definition' => 'Desarrollador de guardia que responde alertas y incidentes en producción fuera de horario.'],
    ['slug' => 'incident', 'term' => 'Incidente', 'category' => $cat, 'definition' => 'Evento no planificado que afecta el servicio en producción (caída, bug crítico, fuga de datos).'],
    ['slug' => 'postmortem', 'term' => 'Postmortem', 'category' => $cat, 'definition' => 'Análisis después de un incidente: qué pasó, por qué, cómo evitar que se repita. Sin culpar personas.'],
    ['slug' => 'sla', 'term' => 'SLA', 'category' => $cat, 'definition' => 'Service Level Agreement: compromiso de disponibilidad o tiempo de respuesta con el cliente.'],
    ['slug' => 'sre', 'term' => 'SRE', 'category' => $cat, 'definition' => 'Site Reliability Engineering: ingenieros que aplican prácticas de software a operaciones y confiabilidad.'],
    ['slug' => 'waterfall', 'term' => 'Waterfall (cascada)', 'category' => $cat, 'definition' => 'Metodología secuencial: requisitos → diseño → desarrollo → test → deploy. Poco flexible al cambio.'],
    ['slug' => 'mvp', 'term' => 'MVP', 'category' => $cat, 'definition' => 'Minimum Viable Product: versión mínima con valor real para validar con usuarios antes de invertir más.'],
    ['slug' => 'stakeholder', 'term' => 'Stakeholder', 'category' => $cat, 'definition' => 'Persona con interés en el proyecto: cliente, gerente, usuario final, equipo legal.'],
    ['slug' => 'scope-creep', 'term' => 'Scope creep', 'category' => $cat, 'definition' => 'Crecimiento no controlado del alcance del proyecto que retrasa entregas.'],
    ['slug' => 'velocity', 'term' => 'Velocity', 'category' => $cat, 'definition' => 'Puntos de historia completados por sprint. Ayuda a estimar capacidad futura del equipo.'],
];
