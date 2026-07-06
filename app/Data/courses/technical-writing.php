<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'tx-intro',
    'order' => 1,
    'title' => 'Technical writing intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Docs que developers leen.',
    'concepts' => 
    array (
      0 => 'docs',
      1 => 'audience',
      2 => 'clarity',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tech writing',
        'body' => 'README, API docs, ADRs, runbooks — **claro, conciso, escaneable** — devs no leen paredes de texto.',
        'code' => '# Practica: tx-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Audiencia',
        'body' => 'Junior new hire vs senior architect — mismo doc distintos entry points.',
        'code' => '# Practica: tx-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Good tech doc?',
        'options' => 
        array (
          0 => 'Escaneable con headers y ejemplos',
          1 => '5000 palabras intro',
          2 => 'Sin code samples',
        ),
        'answer' => 'Escaneable con headers y ejemplos',
        'explanation' => 'Show don\'t tell.',
        'pro_tip' => 'Curso clean-code clarity.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Docs as code?',
        'options' => 
        array (
          0 => 'Markdown en git, PR review',
          1 => 'Word email only',
          2 => 'Oral tradition',
        ),
        'answer' => 'Markdown en git, PR review',
        'explanation' => 'Versioned with code.',
        'pro_tip' => 'Docusaurus MkDocs sites.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'tx-readme',
    'order' => 2,
    'title' => 'README que funciona',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Install, usage, contributing.',
    'concepts' => 
    array (
      0 => 'readme',
      1 => 'quickstart',
      2 => 'badge',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Estructura',
        'body' => 'Title → Description → Quick start → Install → Usage → API → Contributing → License.',
        'code' => '## Installation\\n\\nnpm install ...',
      ),
      1 => 
      array (
        'heading' => 'Quick start',
        'body' => 'Copy-paste 3 commands funciona — **first 5 min success** critical.',
        'code' => '## Installation\\n\\nnpm install ...',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿README primero sección after title?',
        'options' => 
        array (
          0 => 'Qué hace + quick start',
          1 => 'Autobiography author',
          2 => 'Full API',
        ),
        'answer' => 'Qué hace + quick start',
        'explanation' => 'Hook then depth.',
        'pro_tip' => 'Badges CI status honest.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Menciona ## Installation',
        'must_contain' => 
        array (
          0 => 'Installation',
        ),
        'hint' => '## Installation\\n\\nnpm install ...',
        'explanation' => 'Standard section header.',
        'pro_tip' => 'Prerequisites section if needed.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'tx-api-docs',
    'order' => 3,
    'title' => 'Documentar APIs',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'OpenAPI, ejemplos y errores.',
    'concepts' => 
    array (
      0 => 'openapi',
      1 => 'example',
      2 => 'error',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'API docs',
        'body' => 'Endpoint, auth, request/response schema, **ejemplos curl**, códigos error documentados.',
        'code' => '# Practica: tx-api-docs
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'OpenAPI',
        'body' => 'Spec genera Swagger UI — single source truth — curso openapi-documentacion profundiza.',
        'code' => '# Practica: tx-api-docs
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿API doc must have?',
        'options' => 
        array (
          0 => 'Example request/response real',
          1 => 'Solo endpoint name',
          2 => 'No errors listed',
        ),
        'answer' => 'Example request/response real',
        'explanation' => 'Devs copy examples.',
        'pro_tip' => 'Document rate limits.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Breaking change API?',
        'options' => 
        array (
          0 => 'Changelog + migration guide + version bump',
          1 => 'Silent deploy',
          2 => 'Delete docs',
        ),
        'answer' => 'Changelog + migration guide + version bump',
        'explanation' => 'Respect API consumers.',
        'pro_tip' => 'Semver MAJOR breaking.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'tx-adr',
    'order' => 4,
    'title' => 'ADRs — Architecture Decision Records',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Documentar decisiones técnicas.',
    'concepts' => 
    array (
      0 => 'adr',
      1 => 'decision',
      2 => 'context',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'ADR',
        'body' => 'docs/adr/001-use-postgres.md — Context, Decision, Consequences — **por qué** no solo qué.',
        'code' => '# Practica: tx-adr
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Formato',
        'body' => 'Status: accepted/superseded — link ADRs relacionados.',
        'code' => '# Practica: tx-adr
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ADR captura...?',
        'options' => 
        array (
          0 => 'Contexto y razones decisión arquitectura',
          1 => 'Solo código',
          2 => 'Salarios team',
        ),
        'answer' => 'Contexto y razones decisión arquitectura',
        'explanation' => 'Future you will thank.',
        'pro_tip' => 'Curso arquitectura-software ADR.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ADR superseded?',
        'options' => 
        array (
          0 => 'Reemplazado por ADR nuevo — no borrar',
          1 => 'Delete history',
          2 => 'Ignore',
        ),
        'answer' => 'Reemplazado por ADR nuevo — no borrar',
        'explanation' => 'Historical record.',
        'pro_tip' => 'Link forward backward.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'tx-runbooks',
    'order' => 5,
    'title' => 'Runbooks y on-call docs',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Incident response documentation.',
    'concepts' => 
    array (
      0 => 'runbook',
      1 => 'incident',
      2 => 'oncall',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Runbook',
        'body' => 'Alert X → symptoms → diagnosis steps → fix → escalation — 3am friendly.',
        'code' => '# Practica: tx-runbooks
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'On-call',
        'body' => 'Links dashboards, logs query, rollback procedure — reduce MTTR.',
        'code' => '# Practica: tx-runbooks
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Runbook good?',
        'options' => 
        array (
          0 => 'Pasos concretos copy-paste commands',
          1 => 'Vague call someone',
          2 => 'Empty',
        ),
        'answer' => 'Pasos concretos copy-paste commands',
        'explanation' => 'Stress reduces cognition.',
        'pro_tip' => 'Curso observabilidad dashboards.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Postmortem blameless?',
        'options' => 
        array (
          0 => 'Aprender sin culpar personas',
          1 => 'Fire someone always',
          2 => 'No write',
        ),
        'answer' => 'Aprender sin culpar personas',
        'explanation' => 'Blameless culture Google SRE.',
        'pro_tip' => 'Action items tracked.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'tx-prod',
    'order' => 6,
    'title' => 'Docs en producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Docusaurus, versionado y search.',
    'concepts' => 
    array (
      0 => 'docusaurus',
      1 => 'version',
      2 => 'search',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Doc sites',
        'body' => 'Docusaurus, VitePress, GitBook — versioned docs v1/v2 sidebar.',
        'code' => '# Practica: tx-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Maintenance',
        'body' => 'Docs PR required with code PR — stale docs worse than none.',
        'code' => '# Practica: tx-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Docs in PR template?',
        'options' => 
        array (
          0 => 'Checkbox docs updated',
          1 => 'Never update docs',
          2 => 'Docs separate repo always bad',
        ),
        'answer' => 'Checkbox docs updated',
        'explanation' => 'Definition of Done includes docs.',
        'pro_tip' => 'Curso figma design docs link.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Diátaxis framework?',
        'options' => 
        array (
          0 => 'Tutorials/how-to/reference/explanation',
          1 => 'Only tutorials',
          2 => 'No structure',
        ),
        'answer' => 'Tutorials/how-to/reference/explanation',
        'explanation' => 'Organize by user need.',
        'pro_tip' => 'Split not one mega page.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'technical-writing-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Technical writing.',
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
        'body' => 'Aplica lo aprendido en Technical writing a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'technical-writing-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Technical writing.',
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
        'body' => 'Aplica lo aprendido en Technical writing a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
