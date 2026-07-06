<?php

declare(strict_types=1);

return [
    ['slug' => 'od-intro', 'order' => 1, 'title' => 'OpenAPI intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Spec API estándar industry.', 'concepts' => ['openapi', 'swagger', 'spec'], 'sections' => [
        ['heading' => 'OpenAPI 3', 'body' => '**Especificación** REST APIs — YAML/JSON — genera docs, clients, servers, tests — industry standard.'],
        ['heading' => 'Swagger', 'body' => 'Swagger UI visualiza OpenAPI — Swagger Editor escribe spec — tools ecosystem.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿OpenAPI version current?', 'options' => ['3.x', '1.0 only', 'No version'], 'answer' => '3.x', 'explanation' => 'Swagger 2 legacy.', 'pro_tip' => 'Curso technical-writing docs.'],
        ['type' => 'choice', 'question' => '¿Spec first vs code first?', 'options' => ['Ambos válidos — contract driven vs generate', 'Only code', 'Only Word'], 'answer' => 'Ambos válidos — contract driven vs generate', 'explanation' => 'Team agreement key.', 'pro_tip' => 'Design API before implement.'],
    ]],
    ['slug' => 'od-spec', 'order' => 2, 'title' => 'Escribir spec OpenAPI', 'level' => 'Fundamentos', 'minutes' => 40, 'summary' => 'paths, components, schemas.', 'concepts' => ['paths', 'components', 'schema'], 'sections' => [
        ['heading' => 'Structure', 'body' => 'openapi: 3.0.0, info, paths, components/schemas — $ref reuse.', 'code' => "paths:\n  /users:\n    get:\n      responses:\n        '200':\n          description: OK"],
        ['heading' => 'Schemas', 'body' => 'type object properties required — reusable components/schemas/User.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿$ref?', 'options' => ['Reuse schema component', 'HTTP redirect', 'Database FK'], 'answer' => 'Reuse schema component', 'explanation' => 'DRY spec.', 'pro_tip' => '#/components/schemas/User.'],
        ['type' => 'contains', 'question' => 'Escribe openapi: 3', 'must_contain' => ['openapi'], 'hint' => 'openapi: 3.0.3', 'explanation' => 'Version header required.', 'pro_tip' => 'Spectral lint spec quality.'],
    ]],
    ['slug' => 'od-swagger', 'order' => 3, 'title' => 'Swagger UI y Redoc', 'level' => 'Práctica', 'minutes' => 30, 'summary' => 'Interactive docs hosting.', 'concepts' => ['swagger-ui', 'redoc', 'try-it'], 'sections' => [
        ['heading' => 'Swagger UI', 'body' => 'Try it out — execute requests browser — dev/staging only usually.'],
        ['heading' => 'Redoc', 'body' => 'Read-only beautiful docs — public API reference sites.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Try it out prod?', 'options' => ['Disable or auth protect — abuse risk', 'Always public', 'Required'], 'answer' => 'Disable or auth protect — abuse risk', 'explanation' => 'Staging mirror OK.', 'pro_tip' => 'Laravel Scramble auto OpenAPI.'],
        ['type' => 'choice', 'question' => '¿Laravel OpenAPI?', 'options' => ['Scramble, L5-Swagger packages', 'No support', 'Word only'], 'answer' => 'Scramble, L5-Swagger packages', 'explanation' => 'Generate from routes.', 'pro_tip' => 'Compare FastAPI auto docs Python.'],
    ]],
    ['slug' => 'od-codegen', 'order' => 4, 'title' => 'Code generation', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Clients SDK y server stubs.', 'concepts' => ['codegen', 'sdk', 'client'], 'sections' => [
        ['heading' => 'Codegen', 'body' => 'openapi-generator — TypeScript axios client, PHP, Go — from spec single truth.'],
        ['heading' => 'Contract testing', 'body' => 'Spec matches implementation — breaking change detection CI.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Codegen benefit?', 'options' => ['Frontend/backend sync types API', 'Slower dev', 'No types'], 'answer' => 'Frontend/backend sync types API', 'explanation' => 'Regenerate on spec change.', 'pro_tip' => 'Curso TypeScript client types.'],
        ['type' => 'choice', 'question' => '¿Breaking change?', 'options' => ['Remove field, change type — MAJOR version', 'Any change', 'Comment only'], 'answer' => 'Remove field, change type — MAJOR version', 'explanation' => 'Semver API versioning.', 'pro_tip' => 'Deprecation period communicate.'],
    ]],
    ['slug' => 'od-versioning', 'order' => 5, 'title' => 'Versionado API', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'URL, header, semver.', 'concepts' => ['version', 'semver', 'deprecation'], 'sections' => [
        ['heading' => 'Versioning', 'body' => '/v1/users vs Accept header — document sunset policy deprecated endpoints.'],
        ['heading' => 'Changelog', 'body' => 'API changelog separate semver — migration guides breaking releases.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿URL /v2/ preferred when?', 'options' => ['Clear visible breaking parallel run', 'Never version', 'Secret only'], 'answer' => 'Clear visible breaking parallel run', 'explanation' => 'v1 v2 coexist period.', 'pro_tip' => 'GraphQL avoids URL versioning often.'],
        ['type' => 'choice', 'question' => '¿Deprecation header?', 'options' => ['Sunset, Deprecation RFC headers warn clients', 'Ignore clients', 'Delete instant'], 'answer' => 'Sunset, Deprecation RFC headers warn clients', 'explanation' => 'Graceful migration time.', 'pro_tip' => 'Monitor v1 traffic before kill.'],
    ]],
    ['slug' => 'od-prod', 'order' => 6, 'title' => 'OpenAPI en CI/CD', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Lint, diff, publish docs.', 'concepts' => ['spectral', 'diff', 'publish'], 'sections' => [
        ['heading' => 'CI', 'body' => 'Spectral lint rules — oasdiff breaking change PR check — fail merge if breaking unapproved.'],
        ['heading' => 'Publish', 'body' => 'Stoplight, ReadMe.com, GitHub Pages — docs site from spec main branch.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Spectral?', 'options' => ['OpenAPI linter custom rules', 'Image editor', 'Database'], 'answer' => 'OpenAPI linter custom rules', 'explanation' => 'Enforce naming security.', 'pro_tip' => 'Require operationId unique.'],
        ['type' => 'choice', 'question' => '¿Spec in repo?', 'options' => ['openapi.yaml git PR reviewed', 'Email spec', 'Oral API'], 'answer' => 'openapi.yaml git PR reviewed', 'explanation' => 'Contract as code.', 'pro_tip' => 'Curso cicd integrate lint.'],
    ]],
];
