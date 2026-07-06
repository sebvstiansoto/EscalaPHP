<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Recursión y divide & conquer',
    'body' => 'Base case, call stack y merge sort concepto. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🧠',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Recursión](/glosario#recursion) · [divide-conquer](/glosario#divide-conquer) · [stack](/glosario#stack)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Recursión',
    'body' => 'Función que se llama a sí misma con **caso base** que para.',
    'code' => 'function factorial(n) {
  if (n <= 1) return 1;
  return n * factorial(n - 1);
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Divide & conquer',
    'body' => 'Parte problema en mitades (merge sort, binary search) — O(log n) o O(n log n).',
    'code' => 'function f(n){return n<=1?1:n*f(n-1);}\\nconsole.log(f(4));',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Base case, call stack y merge sort concepto. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Algoritmos para entrevistas**, esto aparece en code reviews, incidentes y entregas diarias. Base case, call stack y merge sort concepto. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'function factorial(n) {
  if (n <= 1) return 1;
  return n * factorial(n - 1);
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
      0 => 'function factorial(n) {',
      1 => '  if (n <= 1) return 1;',
      2 => '  return n * factorial(n - 1);',
      3 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Stack overflow si falta caso base.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**factorial(4): function f(n){return n<=1?1:n*f(n-1)} console.log(f(4))** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Búsqueda binaria complejidad?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
