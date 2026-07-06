<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Performance y observabilidad',
    'body' => 'Core Web Vitals, bundle analysis, caching y tracing. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '▲',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Performance](/glosario#performance) · [web-vitals](/glosario#web-vitals) · [Distributed tracing](/glosario#tracing)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Bundle analysis',
    'body' => 'Analiza el bundle para detectar librerías pesadas, duplicados y componentes cliente innecesarios.',
    'code' => '// next.config.js
const withBundleAnalyzer = require(\'@next/bundle-analyzer\')({
  enabled: process.env.ANALYZE === \'true\',
});

module.exports = withBundleAnalyzer({});',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Web Vitals',
    'body' => 'LCP, INP y CLS deben medirse en usuarios reales. Enviar métricas a analytics o APM cierra el ciclo.',
    'code' => 'export function reportWebVitals(metric) {
  navigator.sendBeacon(\'/api/vitals\', JSON.stringify(metric));
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Core Web Vitals, bundle analysis, caching y tracing. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Next.js**, esto aparece en code reviews, incidentes y entregas diarias. Core Web Vitals, bundle analysis, caching y tracing. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '// next.config.js
const withBundleAnalyzer = require(\'@next/bundle-analyzer\')({
  enabled: process.env.ANALYZE === \'true\',
});

module.exports = withBundleAnalyzer({});',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '// next.config.js',
      1 => 'const withBundleAnalyzer = require(\'@next/bundle-analyzer\')({',
      2 => '  enabled: process.env.ANALYZE === \'true\',',
      3 => '});',
      4 => 'module.exports = withBundleAnalyzer({});',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Optimiza imágenes, streaming y rutas críticas para mejorar LCP.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué mide LCP?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Por qué reducir componentes client?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
