<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Tailwind + React',
    'body' => 'Vite, className y componentes reutilizables. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '💨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [React](/glosario#react) · [className](/glosario#classname) · [Vite](/glosario#vite)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'className',
    'body' => 'En React usas `className` en vez de `class`. Mismas utilidades Tailwind.',
    'code' => 'function Button({ children }) {\\n  return <button className="px-4 py-2 bg-indigo-600 text-white rounded">{children}</button>;\\n}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Vite',
    'body' => 'npm create vite@latest + tailwind postcss — stack moderno con React.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Vite, className y componentes reutilizables. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Tailwind CSS**, esto aparece en code reviews, incidentes y entregas diarias. Vite, className y componentes reutilizables. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'function Button({ children }) {\\n  return <button className="px-4 py-2 bg-indigo-600 text-white rounded">{children}</button>;\\n}',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'function Button({ children }) {\\n  return <button className="px-4 py-2 bg-indigo-600 text-white rounded">{children}</button>;\\n}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** clsx o cn() combinan clases condicionales.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-react](/conexiones#conn-react).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Atributo de clases en JSX?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Bundler típico con React + Tailwind hoy?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
