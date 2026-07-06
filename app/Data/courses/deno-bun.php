<?php

declare(strict_types=1);

return [
    ['slug' => 'db-intro', 'order' => 1, 'title' => 'Más allá de Node.js', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Runtimes JS modernos.', 'concepts' => ['deno', 'bun', 'runtime'], 'sections' => [
        ['heading' => 'Nuevo ecosistema', 'body' => '**Deno** (Ryan Dahl, creador Node) y **Bun** — TypeScript nativo, permisos, velocidad extrema.'],
        ['heading' => 'Por qué importa', 'body' => 'Scripts, APIs y tooling cada vez más usan Deno/Bun además de Node.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Deno incluye por defecto...?', 'options' => ['TypeScript y formatter', 'Solo PHP', 'Sin fetch'], 'answer' => 'TypeScript y formatter', 'explanation' => 'Batteries included.', 'pro_tip' => 'deno run app.ts directo.'],
        ['type' => 'choice', 'question' => '¿Bun destaca en...?', 'options' => ['Velocidad npm install y runtime', 'Solo CSS', 'WordPress'], 'answer' => 'Velocidad npm install y runtime', 'explanation' => 'Zig-powered fast.', 'pro_tip' => 'bun test runner integrado.'],
    ]],
    ['slug' => 'db-deno', 'order' => 2, 'title' => 'Deno fundamentals', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Permisos, std library y Fresh.', 'concepts' => ['permission', 'deno', 'fresh'], 'sections' => [
        ['heading' => 'Permisos', 'body' => 'deno run --allow-net --allow-read app.ts — security by default.'],
        ['heading' => 'APIs web', 'body' => 'Deno.serve handler — fetch, WebCrypto, WebSocket built-in.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Deno.serve?', 'options' => ['HTTP server nativo', 'Database', 'CSS'], 'answer' => 'HTTP server nativo', 'explanation' => 'Similar Node http2.', 'pro_tip' => 'Fresh framework meta Deno.'],
        ['type' => 'contains', 'question' => 'Escribe Deno.serve', 'must_contain' => ['Deno.serve'], 'hint' => 'Deno.serve((req) => new Response("OK"))', 'explanation' => 'Handler fetch API.', 'pro_tip' => 'JSR registry packages Deno.'],
    ]],
    ['slug' => 'db-bun', 'order' => 3, 'title' => 'Bun runtime', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'bun run, SQLite integrado, test.', 'concepts' => ['bun', 'sqlite', 'test'], 'sections' => [
        ['heading' => 'Bun', 'body' => 'bun run index.ts — compatible Node APIs, bundler, test runner, package manager.'],
        ['heading' => 'bun:sqlite', 'body' => 'SQLite embedded sin driver externo — scripts y prototipos rápidos.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿bun install vs npm?', 'options' => ['Mucho más rápido', 'Igual velocidad', 'Solo yarn'], 'answer' => 'Mucho más rápido', 'explanation' => 'Drop-in replacement often.', 'pro_tip' => 'bun --hot HMR dev.'],
        ['type' => 'choice', 'question' => '¿Bun.serve?', 'options' => ['HTTP server built-in', 'Email server', 'FTP'], 'answer' => 'HTTP server built-in', 'explanation' => 'Express-like routing optional.', 'pro_tip' => 'Elysia framework Bun-native.'],
    ]],
    ['slug' => 'db-apis', 'order' => 4, 'title' => 'APIs con Hono/Elysia', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Frameworks edge-ready.', 'concepts' => ['hono', 'elysia', 'edge'], 'sections' => [
        ['heading' => 'Hono', 'body' => 'Ultra-light — corre en Deno, Bun, Node, Cloudflare Workers — mismo código.'],
        ['heading' => 'Edge', 'body' => 'Deploy Deno Deploy / Cloudflare — latencia global baja.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Hono ventaja?', 'options' => ['Multi-runtime mismo código', 'Solo PHP', 'Solo browser'], 'answer' => 'Multi-runtime mismo código', 'explanation' => 'Write once deploy anywhere.', 'pro_tip' => 'Compare Express curso Node.'],
        ['type' => 'choice', 'question' => '¿Edge function?', 'options' => ['Código cerca del usuario', 'Solo database', 'Offline only'], 'answer' => 'Código cerca del usuario', 'explanation' => 'CDN ejecuta JS.', 'pro_tip' => 'Curso AWS Lambda compare.'],
    ]],
    ['slug' => 'db-deploy', 'order' => 5, 'title' => 'Deploy Deno/Bun', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Deno Deploy, Docker, Fly.io.', 'concepts' => ['deploy', 'docker', 'fly'], 'sections' => [
        ['heading' => 'Deno Deploy', 'body' => 'git push → global edge — integración GitHub zero config.'],
        ['heading' => 'Docker', 'body' => 'FROM denoland/deno o oven/bun — container estándar K8s.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Deno Deploy?', 'options' => ['Edge hosting oficial Deno', 'Solo local', 'WordPress host'], 'answer' => 'Edge hosting oficial Deno', 'explanation' => 'Serverless Deno.', 'pro_tip' => 'Compare Vercel Next curso.'],
        ['type' => 'choice', 'question' => '¿Cuándo Node sobre Bun?', 'options' => ['Ecosistema legacy npm incompatible', 'Siempre Bun', 'Nunca Node'], 'answer' => 'Ecosistema legacy npm incompatible', 'explanation' => 'Pragmatismo producción.', 'pro_tip' => 'Benchmark before switch.'],
    ]],
    ['slug' => 'db-prod', 'order' => 6, 'title' => 'Elegir runtime en prod', 'level' => 'Producción', 'minutes' => 25, 'summary' => 'Node vs Deno vs Bun decision matrix.', 'concepts' => ['decision', 'compat', 'ops'], 'sections' => [
        ['heading' => 'Matriz', 'body' => 'Node = máxima compat npm. Deno = security + TS first. Bun = speed scripts/APIs nuevas.'],
        ['heading' => 'Ops', 'body' => 'Mismo observabilidad OpenTelemetry — logs, metrics en cualquier runtime.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Node sigue default 2025?', 'options' => ['Sí para equipos enterprise npm heavy', 'Muerto', 'Illegal'], 'answer' => 'Sí para equipos enterprise npm heavy', 'explanation' => 'Gradual adoption alt runtimes.', 'pro_tip' => 'Curso observabilidad applies all.'],
        ['type' => 'choice', 'question' => '¿TypeScript nativo Deno?', 'options' => ['Sin tsconfig obligatorio básico', 'Solo JavaScript', 'Solo PHP types'], 'answer' => 'Sin tsconfig obligatorio básico', 'explanation' => 'TS first-class.', 'pro_tip' => 'Curso TypeScript profundiza types.'],
    ]],
];
