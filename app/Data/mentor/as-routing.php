<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Rutas y páginas dinámicas',
    'body' => 'File-based routing y parámetros [slug]. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🚀',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Routing](/glosario#routing) · [Rutas dinámicas](/glosario#dynamic) · [Pages](/glosario#pages)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'File-based routing',
    'body' => 'Cada archivo en `src/pages/` es una ruta. `blog/[slug].astro` genera páginas dinámicas.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'getStaticPaths',
    'body' => 'Declaras qué slugs pre-renderizar en build time.',
    'code' => 'export function getStaticPaths() {
  return [{ params: { slug: \'hola\' } }];
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** File-based routing y parámetros [slug]. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Astro**, esto aparece en code reviews, incidentes y entregas diarias. File-based routing y parámetros [slug]. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'export function getStaticPaths() {
  return [{ params: { slug: \'hola\' } }];
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
      0 => 'export function getStaticPaths() {',
      1 => '  return [{ params: { slug: \'hola\' } }];',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** [id].astro captura segmentos dinámicos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde viven las rutas en Astro?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué función define rutas estáticas dinámicas?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
