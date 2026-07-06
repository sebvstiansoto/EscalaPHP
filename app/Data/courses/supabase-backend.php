<?php

declare(strict_types=1);

return [
    ['slug' => 'sb-intro', 'order' => 1, 'title' => 'Supabase intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Firebase open-source alternative.', 'concepts' => ['supabase', 'baas', 'postgres'], 'sections' => [
        ['heading' => 'Supabase', 'body' => '**BaaS** open source: **PostgreSQL** + Auth + Storage + Realtime + Edge Functions — "Firebase con SQL".'],
        ['heading' => 'Stack', 'body' => 'Cliente JS @supabase/supabase-js — RLS Row Level Security en Postgres.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Supabase BD base?', 'options' => ['PostgreSQL', 'MongoDB', 'SQLite only'], 'answer' => 'PostgreSQL', 'explanation' => 'SQL real, no vendor lock NoSQL.', 'pro_tip' => 'Curso PostgreSQL complementa.'],
        ['type' => 'choice', 'question' => '¿BaaS significa...?', 'options' => ['Backend as a Service', 'Browser as Service', 'Build all SQL'], 'answer' => 'Backend as a Service', 'explanation' => 'Auth/DB hosted managed.', 'pro_tip' => 'Self-host Supabase Docker posible.'],
    ]],
    ['slug' => 'sb-auth', 'order' => 2, 'title' => 'Auth Supabase', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Email, OAuth, JWT y RLS.', 'concepts' => ['auth', 'jwt', 'rls'], 'sections' => [
        ['heading' => 'Auth', 'body' => 'supabase.auth.signInWithOAuth({ provider: "google" }) — JWT en session.'],
        ['heading' => 'RLS', 'body' => 'CREATE POLICY "users own rows" ON todos FOR ALL USING (auth.uid() = user_id);'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿RLS?', 'options' => ['Row Level Security Postgres', 'Redis Lock Service', 'React Lifecycle'], 'answer' => 'Row Level Security Postgres', 'explanation' => 'Seguridad en BD no solo app.', 'pro_tip' => 'Curso OAuth OIDC concepts.'],
        ['type' => 'choice', 'question' => '¿auth.uid()?', 'options' => ['UUID usuario JWT en policy', 'Admin password', 'Random'], 'answer' => 'UUID usuario JWT en policy', 'explanation' => 'Supabase helper SQL.', 'pro_tip' => 'Never trust client-only auth.'],
    ]],
    ['slug' => 'sb-db', 'order' => 3, 'title' => 'Database y queries', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Client CRUD, filters y joins.', 'concepts' => ['crud', 'filter', 'join'], 'sections' => [
        ['heading' => 'CRUD', 'body' => 'supabase.from("posts").select("*, author(*)").eq("published", true)'],
        ['heading' => 'SQL editor', 'body' => 'Dashboard SQL — migrations, functions, triggers.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿select con join Supabase?', 'options' => ['Foreign table in select string', 'SQL only manual', 'No joins'], 'answer' => 'Foreign table in select string', 'explanation' => 'PostgREST syntax.', 'pro_tip' => 'Compare Prisma relations curso.'],
        ['type' => 'contains', 'question' => 'Escribe .from("posts")', 'must_contain' => ['from'], 'hint' => 'supabase.from("posts").select("*")', 'explanation' => 'Table query builder.', 'pro_tip' => 'Realtime filter same API.'],
    ]],
    ['slug' => 'sb-storage', 'order' => 4, 'title' => 'Storage y Edge Functions', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Files, buckets y serverless Deno.', 'concepts' => ['storage', 'bucket', 'edge'], 'sections' => [
        ['heading' => 'Storage', 'body' => 'supabase.storage.from("avatars").upload(path, file) — S3-like policies.'],
        ['heading' => 'Edge Functions', 'body' => 'Deno functions — webhooks, AI proxy, custom logic server-side.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Storage policies?', 'options' => ['RLS-like rules buckets', 'No security', 'Public always'], 'answer' => 'RLS-like rules buckets', 'explanation' => 'Auth required uploads.', 'pro_tip' => 'Compare S3 AWS curso.'],
        ['type' => 'choice', 'question' => '¿Edge Functions runtime?', 'options' => ['Deno', 'PHP', 'Java only'], 'answer' => 'Deno', 'explanation' => 'TypeScript serverless.', 'pro_tip' => 'Curso Deno complementa.'],
    ]],
    ['slug' => 'sb-realtime', 'order' => 5, 'title' => 'Realtime subscriptions', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'postgres_changes y broadcast.', 'concepts' => ['realtime', 'subscription', 'broadcast'], 'sections' => [
        ['heading' => 'Realtime', 'body' => 'channel.on("postgres_changes", { event: "INSERT", schema: "public", table: "messages" }, callback)'],
        ['heading' => 'Use cases', 'body' => 'Chat, dashboards live, collaborative editing.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Realtime Supabase usa...?', 'options' => ['WebSockets + Postgres logical replication', 'Email polling', 'FTP'], 'answer' => 'WebSockets + Postgres logical replication', 'explanation' => 'Native DB changes stream.', 'pro_tip' => 'Curso WebSockets compare.'],
        ['type' => 'choice', 'question' => '¿Broadcast channel?', 'options' => ['Mensajes app-level sin DB', 'SQL only', 'HTTP GET'], 'answer' => 'Mensajes app-level sin DB', 'explanation' => 'Presence typing indicators.', 'pro_tip' => 'Rate limit client events.'],
    ]],
    ['slug' => 'sb-prod', 'order' => 6, 'title' => 'Producción Supabase', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Migrations, backups y local dev.', 'concepts' => ['migration', 'cli', 'local'], 'sections' => [
        ['heading' => 'CLI', 'body' => 'supabase init, db diff, db push — migrations versionadas git.'],
        ['heading' => 'Local', 'body' => 'supabase start — Docker stack local idéntico prod.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿supabase db push?', 'options' => ['Aplica migrations remoto', 'Delete project', 'CSS push'], 'answer' => 'Aplica migrations remoto', 'explanation' => 'CI/CD database schema.', 'pro_tip' => 'Compare Laravel migrations.'],
        ['type' => 'choice', 'question' => '¿Service role key?', 'options' => ['Bypass RLS — solo server', 'Public client', 'CSS'], 'answer' => 'Bypass RLS — solo server', 'explanation' => 'Never expose frontend.', 'pro_tip' => 'Anon key + RLS client safe.'],
    ]],
];
