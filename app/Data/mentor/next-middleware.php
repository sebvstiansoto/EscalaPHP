<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Middleware, edge y seguridad',
    'body' => 'Middleware en Next.js, Edge Runtime, headers y rate limiting. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '▲',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Middleware](/glosario#middleware) · [edge](/glosario#edge) · [Security (seguridad)](/glosario#security)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Middleware',
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
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Security headers',
    'body' => 'CSP, HSTS, X-Frame-Options y rate limiting en edge reducen riesgo antes de tocar tu backend.',
    'code' => 'const res = NextResponse.next();
res.headers.set(\'Strict-Transport-Security\', \'max-age=63072000; includeSubDomains; preload\');
res.headers.set(\'X-Frame-Options\', \'DENY\');
return res;',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Middleware en Next.js, Edge Runtime, headers y rate limiting. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Next.js**, esto aparece en code reviews, incidentes y entregas diarias. Middleware en Next.js, Edge Runtime, headers y rate limiting. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'import { NextResponse } from \'next/server\';
import type { NextRequest } from \'next/server\';

export function middleware(request: NextRequest) {
  const token = request.cookies.get(\'session\');
  if (!token && request.nextUrl.pathname.startsWith(\'/dashboard\')) {
    return NextResponse.redirect(new URL(\'/login\', request.url));
  }
  return NextResponse.next();
}

export const config = { matcher: [\'/dashboard/:path*\'] };',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'import { NextResponse } from \'next/server\';',
      1 => 'import type { NextRequest } from \'next/server\';',
      2 => 'export function middleware(request: NextRequest) {',
      3 => '  const token = request.cookies.get(\'session\');',
      4 => '  if (!token && request.nextUrl.pathname.startsWith(\'/dashboard\')) {',
      5 => '    return NextResponse.redirect(new URL(\'/login\', request.url));',
      6 => '  }',
      7 => '  return NextResponse.next();',
      8 => '}',
      9 => 'export const config = { matcher: [\'/dashboard/:path*\'] };',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Mantén middleware liviano: no hagas queries pesadas desde edge.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-middleware](/conexiones#conn-middleware).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde corre Next.js middleware?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe un matcher para /dashboard/:path*** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
