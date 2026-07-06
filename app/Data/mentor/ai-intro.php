<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'IA para desarrolladores',
    'body' => 'LLMs, casos de uso y límites. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🤖',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [llm](/glosario#llm) · [genai](/glosario#genai) · [developer](/glosario#developer)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'GenAI en dev',
    'body' => '**LLMs** (GPT, Claude, Llama) aceleran código, docs, tests y soporte — pero requieren ingeniería responsable.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-intro\'}

print(handler())',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Casos reales',
    'body' => 'Copilot en IDE, chatbots soporte, extracción datos, generación SQL con revisión humana.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-intro\'}

print(handler())',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** LLMs, casos de uso y límites. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **IA & LLMs para devs**, esto aparece en code reviews, incidentes y entregas diarias. LLMs, casos de uso y límites. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-intro\'}

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
      1 => '    return {\'status\': \'ok\', \'lesson\': \'ai-intro\'}',
      2 => 'print(handler())',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Human-in-the-loop en decisiones críticas.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿LLM en producción siempre...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Token en LLM?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
