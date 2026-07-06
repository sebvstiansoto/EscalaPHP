<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Prompt engineering',
    'body' => 'Few-shot, chain-of-thought y structured output. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🤖',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [prompt](/glosario#prompt) · [few-shot](/glosario#few-shot) · [cot](/glosario#cot)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Técnicas',
    'body' => 'Few-shot examples en prompt — mejora formato salida. CoT: "piensa paso a paso" para razonamiento.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-prompts\'}

print(handler())',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Structured output',
    'body' => 'JSON mode / response_format — parseable sin regex frágil.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-prompts\'}

print(handler())',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Few-shot, chain-of-thought y structured output. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **IA & LLMs para devs**, esto aparece en code reviews, incidentes y entregas diarias. Few-shot, chain-of-thought y structured output. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-prompts\'}

print(handler())',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'def handler():',
      1 => '    return {\'status\': \'ok\', \'lesson\': \'ai-prompts\'}',
      2 => 'print(handler())',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Temperature 0 para output determinista.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Few-shot?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿JSON mode útil para...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de Python. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
