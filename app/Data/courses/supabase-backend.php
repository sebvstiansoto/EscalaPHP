<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'sb-intro',
    'order' => 1,
    'title' => 'Supabase intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Firebase open-source alternative.',
    'concepts' => 
    array (
      0 => 'supabase',
      1 => 'baas',
      2 => 'postgres',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Supabase',
        'body' => '**BaaS** open source: **PostgreSQL** + Auth + Storage + Realtime + Edge Functions — "Firebase con SQL".',
        'code' => 'console.log(\'Practica: sb-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Stack',
        'body' => 'Cliente JS @supabase/supabase-js — RLS Row Level Security en Postgres.',
        'code' => 'console.log(\'Practica: sb-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Supabase BD base?',
        'options' => 
        array (
          0 => 'PostgreSQL',
          1 => 'MongoDB',
          2 => 'SQLite only',
        ),
        'answer' => 'PostgreSQL',
        'explanation' => 'SQL real, no vendor lock NoSQL.',
        'pro_tip' => 'Curso PostgreSQL complementa.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿BaaS significa...?',
        'options' => 
        array (
          0 => 'Backend as a Service',
          1 => 'Browser as Service',
          2 => 'Build all SQL',
        ),
        'answer' => 'Backend as a Service',
        'explanation' => 'Auth/DB hosted managed.',
        'pro_tip' => 'Self-host Supabase Docker posible.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'sb-auth',
    'order' => 2,
    'title' => 'Auth Supabase',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Email, OAuth, JWT y RLS.',
    'concepts' => 
    array (
      0 => 'auth',
      1 => 'jwt',
      2 => 'rls',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Auth',
        'body' => 'supabase.auth.signInWithOAuth({ provider: "google" }) — JWT en session.',
        'code' => 'console.log(\'Practica: sb-auth\');',
      ),
      1 => 
      array (
        'heading' => 'RLS',
        'body' => 'CREATE POLICY "users own rows" ON todos FOR ALL USING (auth.uid() = user_id);',
        'code' => 'console.log(\'Practica: sb-auth\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿RLS?',
        'options' => 
        array (
          0 => 'Row Level Security Postgres',
          1 => 'Redis Lock Service',
          2 => 'React Lifecycle',
        ),
        'answer' => 'Row Level Security Postgres',
        'explanation' => 'Seguridad en BD no solo app.',
        'pro_tip' => 'Curso OAuth OIDC concepts.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿auth.uid()?',
        'options' => 
        array (
          0 => 'UUID usuario JWT en policy',
          1 => 'Admin password',
          2 => 'Random',
        ),
        'answer' => 'UUID usuario JWT en policy',
        'explanation' => 'Supabase helper SQL.',
        'pro_tip' => 'Never trust client-only auth.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'sb-db',
    'order' => 3,
    'title' => 'Database y queries',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Client CRUD, filters y joins.',
    'concepts' => 
    array (
      0 => 'crud',
      1 => 'filter',
      2 => 'join',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CRUD',
        'body' => 'supabase.from("posts").select("*, author(*)").eq("published", true)',
        'code' => 'supabase.from("posts").select("*")',
      ),
      1 => 
      array (
        'heading' => 'SQL editor',
        'body' => 'Dashboard SQL — migrations, functions, triggers.',
        'code' => 'supabase.from("posts").select("*")',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿select con join Supabase?',
        'options' => 
        array (
          0 => 'Foreign table in select string',
          1 => 'SQL only manual',
          2 => 'No joins',
        ),
        'answer' => 'Foreign table in select string',
        'explanation' => 'PostgREST syntax.',
        'pro_tip' => 'Compare Prisma relations curso.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe .from("posts")',
        'must_contain' => 
        array (
          0 => 'from',
        ),
        'hint' => 'supabase.from("posts").select("*")',
        'explanation' => 'Table query builder.',
        'pro_tip' => 'Realtime filter same API.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'sb-storage',
    'order' => 4,
    'title' => 'Storage y Edge Functions',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Files, buckets y serverless Deno.',
    'concepts' => 
    array (
      0 => 'storage',
      1 => 'bucket',
      2 => 'edge',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Storage',
        'body' => 'supabase.storage.from("avatars").upload(path, file) — S3-like policies.',
        'code' => 'console.log(\'Practica: sb-storage\');',
      ),
      1 => 
      array (
        'heading' => 'Edge Functions',
        'body' => 'Deno functions — webhooks, AI proxy, custom logic server-side.',
        'code' => 'console.log(\'Practica: sb-storage\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Storage policies?',
        'options' => 
        array (
          0 => 'RLS-like rules buckets',
          1 => 'No security',
          2 => 'Public always',
        ),
        'answer' => 'RLS-like rules buckets',
        'explanation' => 'Auth required uploads.',
        'pro_tip' => 'Compare S3 AWS curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Edge Functions runtime?',
        'options' => 
        array (
          0 => 'Deno',
          1 => 'PHP',
          2 => 'Java only',
        ),
        'answer' => 'Deno',
        'explanation' => 'TypeScript serverless.',
        'pro_tip' => 'Curso Deno complementa.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'sb-realtime',
    'order' => 5,
    'title' => 'Realtime subscriptions',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'postgres_changes y broadcast.',
    'concepts' => 
    array (
      0 => 'realtime',
      1 => 'subscription',
      2 => 'broadcast',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Realtime',
        'body' => 'channel.on("postgres_changes", { event: "INSERT", schema: "public", table: "messages" }, callback)',
        'code' => 'console.log(\'Practica: sb-realtime\');',
      ),
      1 => 
      array (
        'heading' => 'Use cases',
        'body' => 'Chat, dashboards live, collaborative editing.',
        'code' => 'console.log(\'Practica: sb-realtime\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Realtime Supabase usa...?',
        'options' => 
        array (
          0 => 'WebSockets + Postgres logical replication',
          1 => 'Email polling',
          2 => 'FTP',
        ),
        'answer' => 'WebSockets + Postgres logical replication',
        'explanation' => 'Native DB changes stream.',
        'pro_tip' => 'Curso WebSockets compare.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Broadcast channel?',
        'options' => 
        array (
          0 => 'Mensajes app-level sin DB',
          1 => 'SQL only',
          2 => 'HTTP GET',
        ),
        'answer' => 'Mensajes app-level sin DB',
        'explanation' => 'Presence typing indicators.',
        'pro_tip' => 'Rate limit client events.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'sb-prod',
    'order' => 6,
    'title' => 'Producción Supabase',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Migrations, backups y local dev.',
    'concepts' => 
    array (
      0 => 'migration',
      1 => 'cli',
      2 => 'local',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CLI',
        'body' => 'supabase init, db diff, db push — migrations versionadas git.',
        'code' => 'console.log(\'Practica: sb-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Local',
        'body' => 'supabase start — Docker stack local idéntico prod.',
        'code' => 'console.log(\'Practica: sb-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿supabase db push?',
        'options' => 
        array (
          0 => 'Aplica migrations remoto',
          1 => 'Delete project',
          2 => 'CSS push',
        ),
        'answer' => 'Aplica migrations remoto',
        'explanation' => 'CI/CD database schema.',
        'pro_tip' => 'Compare Laravel migrations.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Service role key?',
        'options' => 
        array (
          0 => 'Bypass RLS — solo server',
          1 => 'Public client',
          2 => 'CSS',
        ),
        'answer' => 'Bypass RLS — solo server',
        'explanation' => 'Never expose frontend.',
        'pro_tip' => 'Anon key + RLS client safe.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'supabase-backend-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Supabase.',
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
        'body' => 'Aplica lo aprendido en Supabase a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'supabase-backend-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Supabase.',
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
        'body' => 'Aplica lo aprendido en Supabase a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
