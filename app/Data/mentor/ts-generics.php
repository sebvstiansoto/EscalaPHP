<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Genéricos',
    'body' => 'Funciones y tipos reutilizables con <T>. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔷',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Genéricos (Generics)](/glosario#generics) · [T (tipo genérico)](/glosario#T) · [Reutilizable](/glosario#reusable)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Genéricos',
    'body' => 'Escribes código que funciona con **cualquier** tipo manteniendo type safety.',
    'code' => 'function primero<T>(arr: T[]): T {
  return arr[0];
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'En la práctica',
    'body' => 'fetch<User>("/api/user"), useState<number>(0), Promise<string> — genéricos everywhere.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Funciones y tipos reutilizables con <T>. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **TypeScript**, esto aparece en code reviews, incidentes y entregas diarias. Funciones y tipos reutilizables con <T>. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'function primero<T>(arr: T[]): T {
  return arr[0];
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
      0 => 'function primero<T>(arr: T[]): T {',
      1 => '  return arr[0];',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Evita any — pierdes el beneficio de TS.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Para qué sirven los genéricos <T>?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe function id<T>(x: T): T** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
