<?php

declare(strict_types=1);

return [
    [
        'slug' => 'next-intro',
        'order' => 1,
        'title' => 'Introducción a Next.js',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'React con routing, SSR y App Router.',
        'concepts' => ['nextjs', 'ssr', 'app-router'],
        'sections' => [
            ['heading' => '¿Qué es Next.js?', 'body' => 'Framework React con **routing**, **SSR/SSG** y API routes — el estándar para producción React.'],
            ['heading' => 'App Router', 'body' => 'Carpeta `app/` — cada carpeta es ruta. `page.tsx` renderiza la vista.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Next.js está construido sobre...?', 'options' => ['React', 'Vue', 'PHP'], 'answer' => 'React', 'explanation' => 'Next = React + convenciones + servidor.', 'pro_tip' => 'npx create-next-app@latest inicia proyecto.'],
            ['type' => 'choice', 'question' => '¿Archivo de página en App Router?', 'options' => ['page.tsx', 'index.html', 'routes.php'], 'answer' => 'page.tsx', 'explanation' => 'Convención file-based routing.', 'pro_tip' => 'layout.tsx envuelve páginas hijas.'],
        ],
    ],
    [
        'slug' => 'next-routing',
        'order' => 2,
        'title' => 'Rutas dinámicas y layouts',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => '[id], grupos y nested layouts.',
        'concepts' => ['dynamic-route', 'layout', 'nested'],
        'sections' => [
            ['heading' => 'Rutas dinámicas', 'body' => 'app/blog/[slug]/page.tsx — `params.slug` en el componente.', 'code' => "export default function Post({ params }: { params: { slug: string } }) {\n  return <h1>{params.slug}</h1>;\n}"],
            ['heading' => 'Layouts', 'body' => 'layout.tsx comparte header/sidebar entre rutas sin re-render completo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ruta dinámica para /users/42?', 'options' => ['app/users/[id]/page.tsx', 'app/users/:id', 'users.php'], 'answer' => 'app/users/[id]/page.tsx', 'explanation' => 'Corchetes = segmento dinámico.', 'pro_tip' => '[...slug] catch-all para docs anidadas.'],
            ['type' => 'contains', 'question' => 'Escribe carpeta [slug] en ruta dinámica', 'must_contain' => ['[slug]'], 'hint' => 'app/blog/[slug]/page.tsx', 'explanation' => 'Convención Next.js 13+.', 'pro_tip' => 'generateStaticParams para SSG dinámico.'],
        ],
    ],
    [
        'slug' => 'next-data',
        'order' => 3,
        'title' => 'Fetching de datos',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Server Components, fetch y cache.',
        'concepts' => ['server-component', 'fetch', 'cache'],
        'sections' => [
            ['heading' => 'Server Components', 'body' => 'Por defecto los componentes en app/ corren en **servidor** — puedes hacer fetch a BD/API sin exponer secrets.'],
            ['heading' => 'fetch en servidor', 'body' => 'const res = await fetch("https://api.../users", { next: { revalidate: 60 } });'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja Server Component?', 'options' => ['Fetch en servidor sin bundle JS extra', 'Sin React', 'Solo PHP'], 'answer' => 'Fetch en servidor sin bundle JS extra', 'explanation' => 'Menos JS al cliente = más rápido.', 'pro_tip' => '"use client" solo donde necesitas interactividad.'],
            ['type' => 'choice', 'question' => '¿revalidate en fetch?', 'options' => ['ISR — regenera cada N segundos', 'Borra BD', 'Solo dev'], 'answer' => 'ISR — regenera cada N segundos', 'explanation' => 'Incremental Static Regeneration.', 'pro_tip' => 'cache: "no-store" para datos siempre frescos.'],
        ],
    ],
    [
        'slug' => 'next-api',
        'order' => 4,
        'title' => 'API Routes y Server Actions',
        'level' => 'Backend',
        'minutes' => 35,
        'summary' => 'app/api y formularios sin REST separado.',
        'concepts' => ['api-route', 'server-action', 'form'],
        'sections' => [
            ['heading' => 'Route Handlers', 'body' => 'app/api/users/route.ts exporta GET, POST — mini backend en Next.', 'code' => "export async function GET() {\n  return Response.json({ ok: true });\n}"],
            ['heading' => 'Server Actions', 'body' => '"use server" — funciones que el cliente invoca, corren en servidor.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde vive API route en App Router?', 'options' => ['app/api/.../route.ts', 'pages/api only', 'public/api'], 'answer' => 'app/api/.../route.ts', 'explanation' => 'Export GET/POST/PUT/DELETE.', 'pro_tip' => 'Puedes conectar a PostgreSQL directamente.'],
            ['type' => 'contains', 'question' => 'Escribe export async function GET', 'must_contain' => ['export', 'function GET'], 'hint' => 'export async function GET() { ... }', 'explanation' => 'Handler HTTP en Next.', 'pro_tip' => 'Server Actions simplifican forms sin fetch manual.'],
        ],
    ],
    [
        'slug' => 'next-auth',
        'order' => 5,
        'title' => 'Auth y middleware',
        'level' => 'Seguridad',
        'minutes' => 30,
        'summary' => 'middleware.ts, cookies y rutas protegidas.',
        'concepts' => ['middleware', 'auth', 'cookie'],
        'sections' => [
            ['heading' => 'Middleware', 'body' => 'middleware.ts intercepta requests — redirige a /login si no hay sesión.'],
            ['heading' => 'Auth', 'body' => 'NextAuth.js / Auth.js es el estándar — OAuth, credentials, JWT en cookies httpOnly.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Archivo intercepta rutas antes de render?', 'options' => ['middleware.ts', 'index.php', 'webpack.config'], 'answer' => 'middleware.ts', 'explanation' => 'Edge middleware — rápido y global.', 'pro_tip' => 'matcher config limita qué rutas protege.'],
            ['type' => 'choice', 'question' => '¿Cookie sesión segura?', 'options' => ['httpOnly + Secure + SameSite', 'Sin flags', 'En localStorage'], 'answer' => 'httpOnly + Secure + SameSite', 'explanation' => 'Mitiga XSS y CSRF.', 'pro_tip' => 'Curso seguridad web profundiza esto.'],
        ],
    ],
    [
        'slug' => 'next-deploy',
        'order' => 6,
        'title' => 'Deploy en Vercel',
        'level' => 'DevOps',
        'minutes' => 25,
        'summary' => 'Build, env vars y edge.',
        'concepts' => ['vercel', 'deploy', 'env'],
        'sections' => [
            ['heading' => 'Vercel', 'body' => 'Creadores de Next.js — `git push` despliega automáticamente con preview por PR.'],
            ['heading' => 'Variables', 'body' => 'DATABASE_URL en dashboard Vercel — nunca en código.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Comando build Next.js?', 'options' => ['npm run build', 'php artisan serve', 'docker only'], 'answer' => 'npm run build', 'explanation' => 'Genera .next/ optimizado.', 'pro_tip' => 'next start para self-host tras build.'],
            ['type' => 'choice', 'question' => '¿Secrets en producción Next?', 'options' => ['Variables de entorno', 'En page.tsx', 'En README'], 'answer' => 'Variables de entorno', 'explanation' => 'NEXT_PUBLIC_ solo para valores públicos.', 'pro_tip' => 'Combina con curso AWS para self-host.'],
        ],
    ],
];
