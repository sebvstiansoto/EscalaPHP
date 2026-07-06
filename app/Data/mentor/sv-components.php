<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Reactivity y props',
    'body' => 'let, $: reactive statements. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔥',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Props](/glosario#props) · [reactive](/glosario#reactive) · [bind](/glosario#bind)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Reactivity',
    'body' => 'let count = 0; function inc() { count += 1 } — assignment triggers update.',
    'code' => '<script>
  export let name;
  let count = 0;
  $: doubled = count * 2;
</script>',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'bind:',
    'body' => 'bind:value input two-way — simpler than React controlled.',
    'code' => 'export let title;',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** let, $: reactive statements. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Svelte & SvelteKit**, esto aparece en code reviews, incidentes y entregas diarias. let, $: reactive statements. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<script>
  export let name;
  let count = 0;
  $: doubled = count * 2;
</script>',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<script>',
      1 => '  export let name;',
      2 => '  let count = 0;',
      3 => '  $: doubled = count * 2;',
      4 => '</script>',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** $: { side effect block }',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿$: statement?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe export let props** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
