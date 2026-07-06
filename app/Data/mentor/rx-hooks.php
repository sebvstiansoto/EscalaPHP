<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Custom hooks y useReducer',
    'body' => 'Extraer lógica reutilizable y estado complejo. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Custom Hook](/glosario#custom-hook) · [useReducer](/glosario#usereducer) · [Reutilización](/glosario#reuse)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Custom hooks',
    'body' => 'Función `useNombre()` que usa otros hooks — reutilizas lógica entre componentes.',
    'code' => 'function useCounter() {
  const [n, setN] = useState(0);
  return { n, inc: () => setN(n + 1) };
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'useReducer',
    'body' => 'Como useState pero con acciones tipadas — útil para carritos, wizards y estado con muchas transiciones.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Extraer lógica reutilizable y estado complejo. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React**, esto aparece en code reviews, incidentes y entregas diarias. Extraer lógica reutilizable y estado complejo. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'function useCounter() {
  const [n, setN] = useState(0);
  return { n, inc: () => setN(n + 1) };
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
      0 => 'function useCounter() {',
      1 => '  const [n, setN] = useState(0);',
      2 => '  return { n, inc: () => setN(n + 1) };',
      3 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** useFetch encapsula loading, error y data.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo debe empezar un custom hook?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Reducer simple: const r = (s,a) => s + a; console.log(r(10, 5))** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
