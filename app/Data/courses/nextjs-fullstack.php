<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'next-intro',
    'order' => 1,
    'title' => 'Introducción a Next.js',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'React con routing, SSR y App Router.',
    'concepts' => 
    array (
      0 => 'nextjs',
      1 => 'ssr',
      2 => 'app-router',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es Next.js?',
        'body' => 'Framework React con **routing**, **SSR/SSG** y API routes — el estándar para producción React.',
        'code' => 'console.log(\'Practica: next-intro\');',
      ),
      1 => 
      array (
        'heading' => 'App Router',
        'body' => 'Carpeta `app/` — cada carpeta es ruta. `page.tsx` renderiza la vista.',
        'code' => 'console.log(\'Practica: next-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Next.js está construido sobre...?',
        'options' => 
        array (
          0 => 'React',
          1 => 'Vue',
          2 => 'PHP',
        ),
        'answer' => 'React',
        'explanation' => 'Next = React + convenciones + servidor.',
        'pro_tip' => 'npx create-next-app@latest inicia proyecto.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Archivo de página en App Router?',
        'options' => 
        array (
          0 => 'page.tsx',
          1 => 'index.html',
          2 => 'routes.php',
        ),
        'answer' => 'page.tsx',
        'explanation' => 'Convención file-based routing.',
        'pro_tip' => 'layout.tsx envuelve páginas hijas.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'next-routing',
    'order' => 2,
    'title' => 'Rutas dinámicas y layouts',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => '[id], grupos y nested layouts.',
    'concepts' => 
    array (
      0 => 'dynamic-route',
      1 => 'layout',
      2 => 'nested',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Rutas dinámicas',
        'body' => 'app/blog/[slug]/page.tsx — `params.slug` en el componente.',
        'code' => 'export default function Post({ params }: { params: { slug: string } }) {
  return <h1>{params.slug}</h1>;
}',
      ),
      1 => 
      array (
        'heading' => 'Layouts',
        'body' => 'layout.tsx comparte header/sidebar entre rutas sin re-render completo.',
        'code' => 'app/blog/[slug]/page.tsx',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ruta dinámica para /users/42?',
        'options' => 
        array (
          0 => 'app/users/[id]/page.tsx',
          1 => 'app/users/:id',
          2 => 'users.php',
        ),
        'answer' => 'app/users/[id]/page.tsx',
        'explanation' => 'Corchetes = segmento dinámico.',
        'pro_tip' => '[...slug] catch-all para docs anidadas.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe carpeta [slug] en ruta dinámica',
        'must_contain' => 
        array (
          0 => '[slug]',
        ),
        'hint' => 'app/blog/[slug]/page.tsx',
        'explanation' => 'Convención Next.js 13+.',
        'pro_tip' => 'generateStaticParams para SSG dinámico.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'next-data',
    'order' => 3,
    'title' => 'Fetching de datos',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Server Components, fetch y cache.',
    'concepts' => 
    array (
      0 => 'server-component',
      1 => 'fetch',
      2 => 'cache',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Server Components',
        'body' => 'Por defecto los componentes en app/ corren en **servidor** — puedes hacer fetch a BD/API sin exponer secrets.',
        'code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
      ),
      1 => 
      array (
        'heading' => 'fetch en servidor',
        'body' => 'const res = await fetch("https://api.../users", { next: { revalidate: 60 } });',
        'code' => 'const res = await fetch(\'/api/users\');
const data = await res.json();
console.log(data);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja Server Component?',
        'options' => 
        array (
          0 => 'Fetch en servidor sin bundle JS extra',
          1 => 'Sin React',
          2 => 'Solo PHP',
        ),
        'answer' => 'Fetch en servidor sin bundle JS extra',
        'explanation' => 'Menos JS al cliente = más rápido.',
        'pro_tip' => '"use client" solo donde necesitas interactividad.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿revalidate en fetch?',
        'options' => 
        array (
          0 => 'ISR — regenera cada N segundos',
          1 => 'Borra BD',
          2 => 'Solo dev',
        ),
        'answer' => 'ISR — regenera cada N segundos',
        'explanation' => 'Incremental Static Regeneration.',
        'pro_tip' => 'cache: "no-store" para datos siempre frescos.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'next-api',
    'order' => 4,
    'title' => 'API Routes y Server Actions',
    'level' => 'Backend',
    'minutes' => 35,
    'summary' => 'app/api y formularios sin REST separado.',
    'concepts' => 
    array (
      0 => 'api-route',
      1 => 'server-action',
      2 => 'form',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Route Handlers',
        'body' => 'app/api/users/route.ts exporta GET, POST — mini backend en Next.',
        'code' => 'export async function GET() {
  return Response.json({ ok: true });
}',
      ),
      1 => 
      array (
        'heading' => 'Server Actions',
        'body' => '"use server" — funciones que el cliente invoca, corren en servidor.',
        'code' => 'export async function GET() { ... }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde vive API route en App Router?',
        'options' => 
        array (
          0 => 'app/api/.../route.ts',
          1 => 'pages/api only',
          2 => 'public/api',
        ),
        'answer' => 'app/api/.../route.ts',
        'explanation' => 'Export GET/POST/PUT/DELETE.',
        'pro_tip' => 'Puedes conectar a PostgreSQL directamente.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe export async function GET',
        'must_contain' => 
        array (
          0 => 'export',
          1 => 'function GET',
        ),
        'hint' => 'export async function GET() { ... }',
        'explanation' => 'Handler HTTP en Next.',
        'pro_tip' => 'Server Actions simplifican forms sin fetch manual.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'next-auth',
    'order' => 5,
    'title' => 'Auth y middleware',
    'level' => 'Seguridad',
    'minutes' => 30,
    'summary' => 'middleware.ts, cookies y rutas protegidas.',
    'concepts' => 
    array (
      0 => 'middleware',
      1 => 'auth',
      2 => 'cookie',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Middleware',
        'body' => 'middleware.ts intercepta requests — redirige a /login si no hay sesión.',
        'code' => 'console.log(\'Practica: next-auth\');',
      ),
      1 => 
      array (
        'heading' => 'Auth',
        'body' => 'NextAuth.js / Auth.js es el estándar — OAuth, credentials, JWT en cookies httpOnly.',
        'code' => 'console.log(\'Practica: next-auth\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Archivo intercepta rutas antes de render?',
        'options' => 
        array (
          0 => 'middleware.ts',
          1 => 'index.php',
          2 => 'webpack.config',
        ),
        'answer' => 'middleware.ts',
        'explanation' => 'Edge middleware — rápido y global.',
        'pro_tip' => 'matcher config limita qué rutas protege.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cookie sesión segura?',
        'options' => 
        array (
          0 => 'httpOnly + Secure + SameSite',
          1 => 'Sin flags',
          2 => 'En localStorage',
        ),
        'answer' => 'httpOnly + Secure + SameSite',
        'explanation' => 'Mitiga XSS y CSRF.',
        'pro_tip' => 'Curso seguridad web profundiza esto.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'next-deploy',
    'order' => 6,
    'title' => 'Deploy en Vercel',
    'level' => 'DevOps',
    'minutes' => 25,
    'summary' => 'Build, env vars y edge.',
    'concepts' => 
    array (
      0 => 'vercel',
      1 => 'deploy',
      2 => 'env',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Vercel',
        'body' => 'Creadores de Next.js — `git push` despliega automáticamente con preview por PR.',
        'code' => 'console.log(\'Practica: next-deploy\');',
      ),
      1 => 
      array (
        'heading' => 'Variables',
        'body' => 'DATABASE_URL en dashboard Vercel — nunca en código.',
        'code' => 'console.log(\'Practica: next-deploy\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Comando build Next.js?',
        'options' => 
        array (
          0 => 'npm run build',
          1 => 'php artisan serve',
          2 => 'docker only',
        ),
        'answer' => 'npm run build',
        'explanation' => 'Genera .next/ optimizado.',
        'pro_tip' => 'next start para self-host tras build.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Secrets en producción Next?',
        'options' => 
        array (
          0 => 'Variables de entorno',
          1 => 'En page.tsx',
          2 => 'En README',
        ),
        'answer' => 'Variables de entorno',
        'explanation' => 'NEXT_PUBLIC_ solo para valores públicos.',
        'pro_tip' => 'Combina con curso AWS para self-host.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'next-middleware',
    'order' => 7,
    'title' => 'Middleware, edge y seguridad',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Middleware en Next.js, Edge Runtime, headers y rate limiting.',
    'concepts' => 
    array (
      0 => 'middleware',
      1 => 'edge',
      2 => 'security',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Middleware',
        'body' => 'Middleware corre antes de la ruta: auth redirects, i18n, experimentos A/B, headers de seguridad.',
        'code' => 'import { NextResponse } from \'next/server\';
import type { NextRequest } from \'next/server\';

export function middleware(request: NextRequest) {
  const token = request.cookies.get(\'session\');
  if (!token && request.nextUrl.pathname.startsWith(\'/dashboard\')) {
    return NextResponse.redirect(new URL(\'/login\', request.url));
  }
  return NextResponse.next();
}

export const config = { matcher: [\'/dashboard/:path*\'] };',
      ),
      1 => 
      array (
        'heading' => 'Security headers',
        'body' => 'CSP, HSTS, X-Frame-Options y rate limiting en edge reducen riesgo antes de tocar tu backend.',
        'code' => 'const res = NextResponse.next();
res.headers.set(\'Strict-Transport-Security\', \'max-age=63072000; includeSubDomains; preload\');
res.headers.set(\'X-Frame-Options\', \'DENY\');
return res;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde corre Next.js middleware?',
        'options' => 
        array (
          0 => 'Antes de resolver la ruta',
          1 => 'Solo en el navegador',
          2 => 'Después del render final',
        ),
        'answer' => 'Antes de resolver la ruta',
        'explanation' => 'Permite redirigir, autenticar o añadir headers antes de ejecutar la página.',
        'pro_tip' => 'Mantén middleware liviano: no hagas queries pesadas desde edge.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un matcher para /dashboard/:path*',
        'must_contain' => 
        array (
          0 => 'matcher',
          1 => '/dashboard/:path*',
        ),
        'hint' => 'export const config = { matcher: [\'/dashboard/:path*\'] };',
        'explanation' => 'El matcher limita dónde aplica el middleware.',
        'pro_tip' => 'Sin matcher puedes afectar assets o rutas públicas accidentalmente.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'next-performance',
    'order' => 8,
    'title' => 'Performance y observabilidad',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'Core Web Vitals, bundle analysis, caching y tracing.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'web-vitals',
      2 => 'tracing',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Bundle analysis',
        'body' => 'Analiza el bundle para detectar librerías pesadas, duplicados y componentes cliente innecesarios.',
        'code' => '// next.config.js
const withBundleAnalyzer = require(\'@next/bundle-analyzer\')({
  enabled: process.env.ANALYZE === \'true\',
});

module.exports = withBundleAnalyzer({});',
      ),
      1 => 
      array (
        'heading' => 'Web Vitals',
        'body' => 'LCP, INP y CLS deben medirse en usuarios reales. Enviar métricas a analytics o APM cierra el ciclo.',
        'code' => 'export function reportWebVitals(metric) {
  navigator.sendBeacon(\'/api/vitals\', JSON.stringify(metric));
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué mide LCP?',
        'options' => 
        array (
          0 => 'Carga del contenido principal',
          1 => 'Errores JavaScript',
          2 => 'Tamaño de la base de datos',
        ),
        'answer' => 'Carga del contenido principal',
        'explanation' => 'Largest Contentful Paint estima cuándo el usuario ve el contenido clave.',
        'pro_tip' => 'Optimiza imágenes, streaming y rutas críticas para mejorar LCP.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué reducir componentes client?',
        'options' => 
        array (
          0 => 'Menos JavaScript al navegador',
          1 => 'Más SQL',
          2 => 'No afecta performance',
        ),
        'answer' => 'Menos JavaScript al navegador',
        'explanation' => 'Server Components reducen bundle e hidratación.',
        'pro_tip' => 'Usa "use client" solo donde hay estado, eventos o APIs del navegador.',
      ),
    ),
  ),
);
