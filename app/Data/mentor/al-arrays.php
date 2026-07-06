<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Arrays y hash maps',
    'body' => 'Two sum, contadores y búsqueda O(1). Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🧠',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Array](/glosario#array) · [hashmap](/glosario#hashmap) · [two-sum](/glosario#two-sum)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Hash map',
    'body' => 'Objeto/array asociativo: guardas `valor → índice` y buscas complementos en O(1).',
    'code' => '// Two Sum: busca par que sume target
const seen = {};
for (let i = 0; i < nums.length; i++) {
  const need = target - nums[i];
  if (seen[need] !== undefined) return [seen[need], i];
  seen[nums[i]] = i;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Patrón',
    'body' => '¿Necesitas "¿ya vi este valor?" → hash map.',
    'code' => 'const m = {};\\nm["a"] = 1;\\nm["a"]++;\\nconsole.log(m["a"]);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Two sum, contadores y búsqueda O(1). Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Algoritmos para entrevistas**, esto aparece en code reviews, incidentes y entregas diarias. Two sum, contadores y búsqueda O(1). — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '// Two Sum: busca par que sume target
const seen = {};
for (let i = 0; i < nums.length; i++) {
  const need = target - nums[i];
  if (seen[need] !== undefined) return [seen[need], i];
  seen[nums[i]] = i;
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
      0 => '// Two Sum: busca par que sume target',
      1 => 'const seen = {};',
      2 => 'for (let i = 0; i < nums.length; i++) {',
      3 => '  const need = target - nums[i];',
      4 => '  if (seen[need] !== undefined) return [seen[need], i];',
      5 => '  seen[nums[i]] = i;',
      6 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** En PHP: $counts[$key] = ($counts[$key] ?? 0) + 1',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**Cuenta frecuencias: const m={}; m["a"]=1; m["a"]++; console.log(m["a"])** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Two Sum optimizado usa...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
