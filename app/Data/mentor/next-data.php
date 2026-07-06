<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Fetching de datos',
    'body' => 'Server Components, fetch y cache. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '▲',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [server-component](/glosario#server-component) · [fetch](/glosario#fetch) · [Caché](/glosario#cache)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Server Components',
    'body' => 'Por defecto los componentes en app/ corren en **servidor** — puedes hacer fetch a BD/API sin exponer secrets.',
    'code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'fetch en servidor',
    'body' => 'const res = await fetch("https://api.../users", { next: { revalidate: 60 } });',
    'code' => 'const res = await fetch(\'/api/users\');
const data = await res.json();
console.log(data);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Server Components, fetch y cache. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Next.js**, esto aparece en code reviews, incidentes y entregas diarias. Server Components, fetch y cache. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'function App() {',
      1 => '  return <h1>Hola React</h1>;',
      2 => '}',
      3 => 'export default App;',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** "use client" solo donde necesitas interactividad.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Ventaja Server Component?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿revalidate en fetch?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
