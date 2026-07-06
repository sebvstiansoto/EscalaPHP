<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'CSS Grid y layouts',
    'body' => 'Grid de dos dimensiones, áreas nombradas y responsive. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [CSS Grid](/glosario#grid) · [Layout](/glosario#layout) · [Diseño responsive](/glosario#responsive)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'CSS Grid',
    'body' => '`display: grid` define filas y columnas. Ideal para dashboards y layouts complejos.',
    'code' => '.layout {
  display: grid;
  grid-template-columns: 1fr 3fr;
  gap: 1rem;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Responsive',
    'body' => 'Con `grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))` las tarjetas se adaptan solas.',
    'code' => 'display: grid;
gap: 1rem;',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Grid de dos dimensiones, áreas nombradas y responsive. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **HTML, CSS y JavaScript**, esto aparece en code reviews, incidentes y entregas diarias. Grid de dos dimensiones, áreas nombradas y responsive. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '.layout {
  display: grid;
  grid-template-columns: 1fr 3fr;
  gap: 1rem;
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
      0 => '.layout {',
      1 => '  display: grid;',
      2 => '  grid-template-columns: 1fr 3fr;',
      3 => '  gap: 1rem;',
      4 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Flexbox para barras de navegación; Grid para la página entera.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué propiedad activa CSS Grid?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe una regla CSS con display: grid y gap: 1rem** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
