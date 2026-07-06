<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Introducción a Astro',
    'body' => 'SSG, archivos .astro y por qué es más rápido que una SPA pura. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🚀',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Astro](/glosario#astro) · [SSG](/glosario#ssg) · [Static files](/glosario#static)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => '¿Qué es Astro?',
    'body' => 'Astro genera **HTML estático** en build time. Carga casi cero JavaScript por defecto — ideal para blogs, landings y docs.',
    'code' => 'console.log(\'Practica: as-intro\');',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Un archivo .astro',
    'body' => 'Mezcla HTML, CSS y un bloque frontmatter con `---`.',
    'code' => '---
const titulo = \'Hola Astro\';
---
<h1>{titulo}</h1>',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** SSG, archivos .astro y por qué es más rápido que una SPA pura. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Astro**, esto aparece en code reviews, incidentes y entregas diarias. SSG, archivos .astro y por qué es más rápido que una SPA pura. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'console.log(\'Practica: as-intro\');',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'console.log(\'Practica: as-intro\');',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Blogs, portfolios y docs son el sweet spot de Astro.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cuándo brilla Astro?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué extensión usan los componentes Astro?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
