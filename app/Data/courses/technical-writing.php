<?php

declare(strict_types=1);

return [
    ['slug' => 'tx-intro', 'order' => 1, 'title' => 'Technical writing intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Docs que developers leen.', 'concepts' => ['docs', 'audience', 'clarity'], 'sections' => [
        ['heading' => 'Tech writing', 'body' => 'README, API docs, ADRs, runbooks — **claro, conciso, escaneable** — devs no leen paredes de texto.'],
        ['heading' => 'Audiencia', 'body' => 'Junior new hire vs senior architect — mismo doc distintos entry points.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Good tech doc?', 'options' => ['Escaneable con headers y ejemplos', '5000 palabras intro', 'Sin code samples'], 'answer' => 'Escaneable con headers y ejemplos', 'explanation' => 'Show don\'t tell.', 'pro_tip' => 'Curso clean-code clarity.'],
        ['type' => 'choice', 'question' => '¿Docs as code?', 'options' => ['Markdown en git, PR review', 'Word email only', 'Oral tradition'], 'answer' => 'Markdown en git, PR review', 'explanation' => 'Versioned with code.', 'pro_tip' => 'Docusaurus MkDocs sites.'],
    ]],
    ['slug' => 'tx-readme', 'order' => 2, 'title' => 'README que funciona', 'level' => 'Práctica', 'minutes' => 30, 'summary' => 'Install, usage, contributing.', 'concepts' => ['readme', 'quickstart', 'badge'], 'sections' => [
        ['heading' => 'Estructura', 'body' => 'Title → Description → Quick start → Install → Usage → API → Contributing → License.'],
        ['heading' => 'Quick start', 'body' => 'Copy-paste 3 commands funciona — **first 5 min success** critical.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿README primero sección after title?', 'options' => ['Qué hace + quick start', 'Autobiography author', 'Full API'], 'answer' => 'Qué hace + quick start', 'explanation' => 'Hook then depth.', 'pro_tip' => 'Badges CI status honest.'],
        ['type' => 'contains', 'question' => 'Menciona ## Installation', 'must_contain' => ['Installation'], 'hint' => '## Installation\n\nnpm install ...', 'explanation' => 'Standard section header.', 'pro_tip' => 'Prerequisites section if needed.'],
    ]],
    ['slug' => 'tx-api-docs', 'order' => 3, 'title' => 'Documentar APIs', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'OpenAPI, ejemplos y errores.', 'concepts' => ['openapi', 'example', 'error'], 'sections' => [
        ['heading' => 'API docs', 'body' => 'Endpoint, auth, request/response schema, **ejemplos curl**, códigos error documentados.'],
        ['heading' => 'OpenAPI', 'body' => 'Spec genera Swagger UI — single source truth — curso openapi-documentacion profundiza.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿API doc must have?', 'options' => ['Example request/response real', 'Solo endpoint name', 'No errors listed'], 'answer' => 'Example request/response real', 'explanation' => 'Devs copy examples.', 'pro_tip' => 'Document rate limits.'],
        ['type' => 'choice', 'question' => '¿Breaking change API?', 'options' => ['Changelog + migration guide + version bump', 'Silent deploy', 'Delete docs'], 'answer' => 'Changelog + migration guide + version bump', 'explanation' => 'Respect API consumers.', 'pro_tip' => 'Semver MAJOR breaking.'],
    ]],
    ['slug' => 'tx-adr', 'order' => 4, 'title' => 'ADRs — Architecture Decision Records', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Documentar decisiones técnicas.', 'concepts' => ['adr', 'decision', 'context'], 'sections' => [
        ['heading' => 'ADR', 'body' => 'docs/adr/001-use-postgres.md — Context, Decision, Consequences — **por qué** no solo qué.'],
        ['heading' => 'Formato', 'body' => 'Status: accepted/superseded — link ADRs relacionados.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿ADR captura...?', 'options' => ['Contexto y razones decisión arquitectura', 'Solo código', 'Salarios team'], 'answer' => 'Contexto y razones decisión arquitectura', 'explanation' => 'Future you will thank.', 'pro_tip' => 'Curso arquitectura-software ADR.'],
        ['type' => 'choice', 'question' => '¿ADR superseded?', 'options' => ['Reemplazado por ADR nuevo — no borrar', 'Delete history', 'Ignore'], 'answer' => 'Reemplazado por ADR nuevo — no borrar', 'explanation' => 'Historical record.', 'pro_tip' => 'Link forward backward.'],
    ]],
    ['slug' => 'tx-runbooks', 'order' => 5, 'title' => 'Runbooks y on-call docs', 'level' => 'Producción', 'minutes' => 35, 'summary' => 'Incident response documentation.', 'concepts' => ['runbook', 'incident', 'oncall'], 'sections' => [
        ['heading' => 'Runbook', 'body' => 'Alert X → symptoms → diagnosis steps → fix → escalation — 3am friendly.'],
        ['heading' => 'On-call', 'body' => 'Links dashboards, logs query, rollback procedure — reduce MTTR.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Runbook good?', 'options' => ['Pasos concretos copy-paste commands', 'Vague call someone', 'Empty'], 'answer' => 'Pasos concretos copy-paste commands', 'explanation' => 'Stress reduces cognition.', 'pro_tip' => 'Curso observabilidad dashboards.'],
        ['type' => 'choice', 'question' => '¿Postmortem blameless?', 'options' => ['Aprender sin culpar personas', 'Fire someone always', 'No write'], 'answer' => 'Aprender sin culpar personas', 'explanation' => 'Blameless culture Google SRE.', 'pro_tip' => 'Action items tracked.'],
    ]],
    ['slug' => 'tx-prod', 'order' => 6, 'title' => 'Docs en producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Docusaurus, versionado y search.', 'concepts' => ['docusaurus', 'version', 'search'], 'sections' => [
        ['heading' => 'Doc sites', 'body' => 'Docusaurus, VitePress, GitBook — versioned docs v1/v2 sidebar.'],
        ['heading' => 'Maintenance', 'body' => 'Docs PR required with code PR — stale docs worse than none.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Docs in PR template?', 'options' => ['Checkbox docs updated', 'Never update docs', 'Docs separate repo always bad'], 'answer' => 'Checkbox docs updated', 'explanation' => 'Definition of Done includes docs.', 'pro_tip' => 'Curso figma design docs link.'],
        ['type' => 'choice', 'question' => '¿Diátaxis framework?', 'options' => ['Tutorials/how-to/reference/explanation', 'Only tutorials', 'No structure'], 'answer' => 'Tutorials/how-to/reference/explanation', 'explanation' => 'Organize by user need.', 'pro_tip' => 'Split not one mega page.'],
    ]],
];
