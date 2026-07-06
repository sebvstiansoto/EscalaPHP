<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Islands architecture',
    'body' => 'Interactividad solo donde la necesitas — React como isla. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🚀',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Islands Architecture](/glosario#islands) · [Hydration](/glosario#hydration) · [client:load](/glosario#client:load)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Islas de interactividad',
    'body' => 'El 95% de la página es HTML estático. Solo un **botón**, un **carrusel** o un **formulario** llevan JS — son las "islas".',
    'code' => 'let n = 0;
n++;
console.log(n);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Integrar React',
    'body' => 'Importas un componente React y lo hidratas con una directiva.',
    'code' => 'import Contador from \'../components/Contador.jsx\';
<Contador client:load />',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Interactividad solo donde la necesitas — React como isla. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Astro**, esto aparece en code reviews, incidentes y entregas diarias. Interactividad solo donde la necesitas — React como isla. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'let n = 0;
n++;
console.log(n);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'let n = 0;',
      1 => 'n++;',
      2 => 'console.log(n);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** client:load hidrata al cargar; client:visible solo cuando entra en viewport.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué es una "isla" en Astro?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Simula un contador: let n = 0; n++; console.log(n)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
