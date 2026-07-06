<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Rutas dinámicas y layouts',
    'body' => '[id], grupos y nested layouts. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '▲',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [dynamic-route](/glosario#dynamic-route) · [Layout](/glosario#layout) · [nested](/glosario#nested)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Rutas dinámicas',
    'body' => 'app/blog/[slug]/page.tsx — `params.slug` en el componente.',
    'code' => 'export default function Post({ params }: { params: { slug: string } }) {
  return <h1>{params.slug}</h1>;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Layouts',
    'body' => 'layout.tsx comparte header/sidebar entre rutas sin re-render completo.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** [id], grupos y nested layouts. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Next.js**, esto aparece en code reviews, incidentes y entregas diarias. [id], grupos y nested layouts. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'export default function Post({ params }: { params: { slug: string } }) {
  return <h1>{params.slug}</h1>;
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
      0 => 'export default function Post({ params }: { params: { slug: string } }) {',
      1 => '  return <h1>{params.slug}</h1>;',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** [...slug] catch-all para docs anidadas.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Ruta dinámica para /users/42?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe carpeta [slug] en ruta dinámica** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
