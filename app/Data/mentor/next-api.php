<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'API Routes y Server Actions',
    'body' => 'app/api y formularios sin REST separado. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '▲',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [api-route](/glosario#api-route) · [server-action](/glosario#server-action) · [Form (formulario)](/glosario#form)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Route Handlers',
    'body' => 'app/api/users/route.ts exporta GET, POST — mini backend en Next.',
    'code' => 'export async function GET() {
  return Response.json({ ok: true });
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Server Actions',
    'body' => '"use server" — funciones que el cliente invoca, corren en servidor.',
    'code' => 'export async function GET() { ... }',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** app/api y formularios sin REST separado. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Next.js**, esto aparece en code reviews, incidentes y entregas diarias. app/api y formularios sin REST separado. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'export async function GET() {
  return Response.json({ ok: true });
}',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'export async function GET() {',
      1 => '  return Response.json({ ok: true });',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Puedes conectar a PostgreSQL directamente.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde vive API route en App Router?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe export async function GET** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  11 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  12 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
