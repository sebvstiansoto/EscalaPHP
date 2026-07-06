<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'db-intro',
    'order' => 1,
    'title' => 'Más allá de Node.js',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Runtimes JS modernos.',
    'concepts' => 
    array (
      0 => 'deno',
      1 => 'bun',
      2 => 'runtime',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Nuevo ecosistema',
        'body' => '**Deno** (Ryan Dahl, creador Node) y **Bun** — TypeScript nativo, permisos, velocidad extrema.',
        'code' => 'console.log(\'Practica: db-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Por qué importa',
        'body' => 'Scripts, APIs y tooling cada vez más usan Deno/Bun además de Node.',
        'code' => 'console.log(\'Practica: db-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Deno incluye por defecto...?',
        'options' => 
        array (
          0 => 'TypeScript y formatter',
          1 => 'Solo PHP',
          2 => 'Sin fetch',
        ),
        'answer' => 'TypeScript y formatter',
        'explanation' => 'Batteries included.',
        'pro_tip' => 'deno run app.ts directo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bun destaca en...?',
        'options' => 
        array (
          0 => 'Velocidad npm install y runtime',
          1 => 'Solo CSS',
          2 => 'WordPress',
        ),
        'answer' => 'Velocidad npm install y runtime',
        'explanation' => 'Zig-powered fast.',
        'pro_tip' => 'bun test runner integrado.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'db-deno',
    'order' => 2,
    'title' => 'Deno fundamentals',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Permisos, std library y Fresh.',
    'concepts' => 
    array (
      0 => 'permission',
      1 => 'deno',
      2 => 'fresh',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Permisos',
        'body' => 'deno run --allow-net --allow-read app.ts — security by default.',
        'code' => 'Deno.serve((req) => new Response("OK"))',
      ),
      1 => 
      array (
        'heading' => 'APIs web',
        'body' => 'Deno.serve handler — fetch, WebCrypto, WebSocket built-in.',
        'code' => 'Deno.serve((req) => new Response("OK"))',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Deno.serve?',
        'options' => 
        array (
          0 => 'HTTP server nativo',
          1 => 'Database',
          2 => 'CSS',
        ),
        'answer' => 'HTTP server nativo',
        'explanation' => 'Similar Node http2.',
        'pro_tip' => 'Fresh framework meta Deno.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe Deno.serve',
        'must_contain' => 
        array (
          0 => 'Deno.serve',
        ),
        'hint' => 'Deno.serve((req) => new Response("OK"))',
        'explanation' => 'Handler fetch API.',
        'pro_tip' => 'JSR registry packages Deno.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'db-bun',
    'order' => 3,
    'title' => 'Bun runtime',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'bun run, SQLite integrado, test.',
    'concepts' => 
    array (
      0 => 'bun',
      1 => 'sqlite',
      2 => 'test',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Bun',
        'body' => 'bun run index.ts — compatible Node APIs, bundler, test runner, package manager.',
        'code' => 'console.log(\'Practica: db-bun\');',
      ),
      1 => 
      array (
        'heading' => 'bun:sqlite',
        'body' => 'SQLite embedded sin driver externo — scripts y prototipos rápidos.',
        'code' => 'console.log(\'Practica: db-bun\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿bun install vs npm?',
        'options' => 
        array (
          0 => 'Mucho más rápido',
          1 => 'Igual velocidad',
          2 => 'Solo yarn',
        ),
        'answer' => 'Mucho más rápido',
        'explanation' => 'Drop-in replacement often.',
        'pro_tip' => 'bun --hot HMR dev.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bun.serve?',
        'options' => 
        array (
          0 => 'HTTP server built-in',
          1 => 'Email server',
          2 => 'FTP',
        ),
        'answer' => 'HTTP server built-in',
        'explanation' => 'Express-like routing optional.',
        'pro_tip' => 'Elysia framework Bun-native.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'db-apis',
    'order' => 4,
    'title' => 'APIs con Hono/Elysia',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Frameworks edge-ready.',
    'concepts' => 
    array (
      0 => 'hono',
      1 => 'elysia',
      2 => 'edge',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hono',
        'body' => 'Ultra-light — corre en Deno, Bun, Node, Cloudflare Workers — mismo código.',
        'code' => 'console.log(\'Practica: db-apis\');',
      ),
      1 => 
      array (
        'heading' => 'Edge',
        'body' => 'Deploy Deno Deploy / Cloudflare — latencia global baja.',
        'code' => 'console.log(\'Practica: db-apis\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Hono ventaja?',
        'options' => 
        array (
          0 => 'Multi-runtime mismo código',
          1 => 'Solo PHP',
          2 => 'Solo browser',
        ),
        'answer' => 'Multi-runtime mismo código',
        'explanation' => 'Write once deploy anywhere.',
        'pro_tip' => 'Compare Express curso Node.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Edge function?',
        'options' => 
        array (
          0 => 'Código cerca del usuario',
          1 => 'Solo database',
          2 => 'Offline only',
        ),
        'answer' => 'Código cerca del usuario',
        'explanation' => 'CDN ejecuta JS.',
        'pro_tip' => 'Curso AWS Lambda compare.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'db-deploy',
    'order' => 5,
    'title' => 'Deploy Deno/Bun',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Deno Deploy, Docker, Fly.io.',
    'concepts' => 
    array (
      0 => 'deploy',
      1 => 'docker',
      2 => 'fly',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Deno Deploy',
        'body' => 'git push → global edge — integración GitHub zero config.',
        'code' => 'console.log(\'Practica: db-deploy\');',
      ),
      1 => 
      array (
        'heading' => 'Docker',
        'body' => 'FROM denoland/deno o oven/bun — container estándar K8s.',
        'code' => 'console.log(\'Practica: db-deploy\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Deno Deploy?',
        'options' => 
        array (
          0 => 'Edge hosting oficial Deno',
          1 => 'Solo local',
          2 => 'WordPress host',
        ),
        'answer' => 'Edge hosting oficial Deno',
        'explanation' => 'Serverless Deno.',
        'pro_tip' => 'Compare Vercel Next curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo Node sobre Bun?',
        'options' => 
        array (
          0 => 'Ecosistema legacy npm incompatible',
          1 => 'Siempre Bun',
          2 => 'Nunca Node',
        ),
        'answer' => 'Ecosistema legacy npm incompatible',
        'explanation' => 'Pragmatismo producción.',
        'pro_tip' => 'Benchmark before switch.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'db-prod',
    'order' => 6,
    'title' => 'Elegir runtime en prod',
    'level' => 'Producción',
    'minutes' => 25,
    'summary' => 'Node vs Deno vs Bun decision matrix.',
    'concepts' => 
    array (
      0 => 'decision',
      1 => 'compat',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Matriz',
        'body' => 'Node = máxima compat npm. Deno = security + TS first. Bun = speed scripts/APIs nuevas.',
        'code' => 'console.log(\'Practica: db-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Ops',
        'body' => 'Mismo observabilidad OpenTelemetry — logs, metrics en cualquier runtime.',
        'code' => 'console.log(\'Practica: db-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Node sigue default 2025?',
        'options' => 
        array (
          0 => 'Sí para equipos enterprise npm heavy',
          1 => 'Muerto',
          2 => 'Illegal',
        ),
        'answer' => 'Sí para equipos enterprise npm heavy',
        'explanation' => 'Gradual adoption alt runtimes.',
        'pro_tip' => 'Curso observabilidad applies all.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿TypeScript nativo Deno?',
        'options' => 
        array (
          0 => 'Sin tsconfig obligatorio básico',
          1 => 'Solo JavaScript',
          2 => 'Solo PHP types',
        ),
        'answer' => 'Sin tsconfig obligatorio básico',
        'explanation' => 'TS first-class.',
        'pro_tip' => 'Curso TypeScript profundiza types.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'deno-bun-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Deno & Bun.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Deno & Bun a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
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
    'slug' => 'deno-bun-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Deno & Bun.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Deno & Bun a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
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
