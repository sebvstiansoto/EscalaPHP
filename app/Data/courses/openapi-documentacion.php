<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'od-intro',
    'order' => 1,
    'title' => 'OpenAPI intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Spec API estándar industry.',
    'concepts' => 
    array (
      0 => 'openapi',
      1 => 'swagger',
      2 => 'spec',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'OpenAPI 3',
        'body' => '**Especificación** REST APIs — YAML/JSON — genera docs, clients, servers, tests — industry standard.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Swagger',
        'body' => 'Swagger UI visualiza OpenAPI — Swagger Editor escribe spec — tools ecosystem.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿OpenAPI version current?',
        'options' => 
        array (
          0 => '3.x',
          1 => '1.0 only',
          2 => 'No version',
        ),
        'answer' => '3.x',
        'explanation' => 'Swagger 2 legacy.',
        'pro_tip' => 'Curso technical-writing docs.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Spec first vs code first?',
        'options' => 
        array (
          0 => 'Ambos válidos — contract driven vs generate',
          1 => 'Only code',
          2 => 'Only Word',
        ),
        'answer' => 'Ambos válidos — contract driven vs generate',
        'explanation' => 'Team agreement key.',
        'pro_tip' => 'Design API before implement.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'od-spec',
    'order' => 2,
    'title' => 'Escribir spec OpenAPI',
    'level' => 'Fundamentos',
    'minutes' => 40,
    'summary' => 'paths, components, schemas.',
    'concepts' => 
    array (
      0 => 'paths',
      1 => 'components',
      2 => 'schema',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Structure',
        'body' => 'openapi: 3.0.0, info, paths, components/schemas — $ref reuse.',
        'code' => 'paths:
  /users:
    get:
      responses:
        \'200\':
          description: OK',
      ),
      1 => 
      array (
        'heading' => 'Schemas',
        'body' => 'type object properties required — reusable components/schemas/User.',
        'code' => 'openapi: 3.0.3',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿$ref?',
        'options' => 
        array (
          0 => 'Reuse schema component',
          1 => 'HTTP redirect',
          2 => 'Database FK',
        ),
        'answer' => 'Reuse schema component',
        'explanation' => 'DRY spec.',
        'pro_tip' => '#/components/schemas/User.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe openapi: 3',
        'must_contain' => 
        array (
          0 => 'openapi',
        ),
        'hint' => 'openapi: 3.0.3',
        'explanation' => 'Version header required.',
        'pro_tip' => 'Spectral lint spec quality.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'od-swagger',
    'order' => 3,
    'title' => 'Swagger UI y Redoc',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Interactive docs hosting.',
    'concepts' => 
    array (
      0 => 'swagger-ui',
      1 => 'redoc',
      2 => 'try-it',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Swagger UI',
        'body' => 'Try it out — execute requests browser — dev/staging only usually.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-swagger
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Redoc',
        'body' => 'Read-only beautiful docs — public API reference sites.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-swagger
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Try it out prod?',
        'options' => 
        array (
          0 => 'Disable or auth protect — abuse risk',
          1 => 'Always public',
          2 => 'Required',
        ),
        'answer' => 'Disable or auth protect — abuse risk',
        'explanation' => 'Staging mirror OK.',
        'pro_tip' => 'Laravel Scramble auto OpenAPI.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Laravel OpenAPI?',
        'options' => 
        array (
          0 => 'Scramble, L5-Swagger packages',
          1 => 'No support',
          2 => 'Word only',
        ),
        'answer' => 'Scramble, L5-Swagger packages',
        'explanation' => 'Generate from routes.',
        'pro_tip' => 'Compare FastAPI auto docs Python.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'od-codegen',
    'order' => 4,
    'title' => 'Code generation',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Clients SDK y server stubs.',
    'concepts' => 
    array (
      0 => 'codegen',
      1 => 'sdk',
      2 => 'client',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Codegen',
        'body' => 'openapi-generator — TypeScript axios client, PHP, Go — from spec single truth.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-codegen
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Contract testing',
        'body' => 'Spec matches implementation — breaking change detection CI.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-codegen
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Codegen benefit?',
        'options' => 
        array (
          0 => 'Frontend/backend sync types API',
          1 => 'Slower dev',
          2 => 'No types',
        ),
        'answer' => 'Frontend/backend sync types API',
        'explanation' => 'Regenerate on spec change.',
        'pro_tip' => 'Curso TypeScript client types.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Breaking change?',
        'options' => 
        array (
          0 => 'Remove field, change type — MAJOR version',
          1 => 'Any change',
          2 => 'Comment only',
        ),
        'answer' => 'Remove field, change type — MAJOR version',
        'explanation' => 'Semver API versioning.',
        'pro_tip' => 'Deprecation period communicate.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'od-versioning',
    'order' => 5,
    'title' => 'Versionado API',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'URL, header, semver.',
    'concepts' => 
    array (
      0 => 'version',
      1 => 'semver',
      2 => 'deprecation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Versioning',
        'body' => '/v1/users vs Accept header — document sunset policy deprecated endpoints.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-versioning
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Changelog',
        'body' => 'API changelog separate semver — migration guides breaking releases.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-versioning
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿URL /v2/ preferred when?',
        'options' => 
        array (
          0 => 'Clear visible breaking parallel run',
          1 => 'Never version',
          2 => 'Secret only',
        ),
        'answer' => 'Clear visible breaking parallel run',
        'explanation' => 'v1 v2 coexist period.',
        'pro_tip' => 'GraphQL avoids URL versioning often.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Deprecation header?',
        'options' => 
        array (
          0 => 'Sunset, Deprecation RFC headers warn clients',
          1 => 'Ignore clients',
          2 => 'Delete instant',
        ),
        'answer' => 'Sunset, Deprecation RFC headers warn clients',
        'explanation' => 'Graceful migration time.',
        'pro_tip' => 'Monitor v1 traffic before kill.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'od-prod',
    'order' => 6,
    'title' => 'OpenAPI en CI/CD',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Lint, diff, publish docs.',
    'concepts' => 
    array (
      0 => 'spectral',
      1 => 'diff',
      2 => 'publish',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CI',
        'body' => 'Spectral lint rules — oasdiff breaking change PR check — fail merge if breaking unapproved.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-prod
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Publish',
        'body' => 'Stoplight, ReadMe.com, GitHub Pages — docs site from spec main branch.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: od-prod
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Spectral?',
        'options' => 
        array (
          0 => 'OpenAPI linter custom rules',
          1 => 'Image editor',
          2 => 'Database',
        ),
        'answer' => 'OpenAPI linter custom rules',
        'explanation' => 'Enforce naming security.',
        'pro_tip' => 'Require operationId unique.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Spec in repo?',
        'options' => 
        array (
          0 => 'openapi.yaml git PR reviewed',
          1 => 'Email spec',
          2 => 'Oral API',
        ),
        'answer' => 'openapi.yaml git PR reviewed',
        'explanation' => 'Contract as code.',
        'pro_tip' => 'Curso cicd integrate lint.',
      ),
    ),
  ),
);
