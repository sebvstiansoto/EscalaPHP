<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Tipos básicos y anotaciones',
    'body' => 'string, number, boolean, arrays y type inference. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔷',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [String](/glosario#string) · [Number](/glosario#number) · [Inferencia de tipos](/glosario#inference)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Anotaciones',
    'body' => 'Declaras tipos en variables, parámetros y retornos.',
    'code' => 'let nombre: string = \'Ana\';
let edad: number = 25;
function suma(a: number, b: number): number {
  return a + b;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Inferencia',
    'body' => 'TypeScript infiere tipos cuando asignas un valor — no siempre hace falta anotar.',
    'code' => 'console.log(typeof 10);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** string, number, boolean, arrays y type inference. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **TypeScript**, esto aparece en code reviews, incidentes y entregas diarias. string, number, boolean, arrays y type inference. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'let nombre: string = \'Ana\';
let edad: number = 25;
function suma(a: number, b: number): number {
  return a + b;
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
      0 => 'let nombre: string = \'Ana\';',
      1 => 'let edad: number = 25;',
      2 => 'function suma(a: number, b: number): number {',
      3 => '  return a + b;',
      4 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** En TS real, x: number evita asignar "texto" por error.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**Simula tipos: const x: number = 10; console.log(typeof 10)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Tipo de un array de strings?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
