<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Fine-tuning vs RAG',
    'body' => 'Cuándo fine-tune, LoRA y evaluación. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🤖',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [fine-tuning](/glosario#fine-tuning) · [lora](/glosario#lora) · [eval](/glosario#eval)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Fine-tuning',
    'body' => 'Ajusta pesos del modelo con dataset dominio — tono, formato JSON, clasificación — costoso pero especializado.',
    'code' => '# OpenAI fine-tuning API (conceptual)
# 1. Prepare JSONL: {"messages": [{"role":"user","content":"..."},{"role":"assistant","content":"..."}]}
# 2. Upload file → create fine_tuning job
# 3. Deploy ft:gpt-4o-mini:org:custom:id',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'RAG vs FT',
    'body' => 'RAG = conocimiento dinámico docs privados. Fine-tune = comportamiento/estilo fijo. Muchos productos usan RAG primero.',
    'code' => 'if knowledge_changes_daily:
    use_rag()
elif fixed_output_format:
    consider_fine_tune()',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Cuándo fine-tune, LoRA y evaluación. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **IA & LLMs para devs**, esto aparece en code reviews, incidentes y entregas diarias. Cuándo fine-tune, LoRA y evaluación. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# OpenAI fine-tuning API (conceptual)
# 1. Prepare JSONL: {"messages": [{"role":"user","content":"..."},{"role":"assistant","content":"..."}]}
# 2. Upload file → create fine_tuning job
# 3. Deploy ft:gpt-4o-mini:org:custom:id',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# OpenAI fine-tuning API (conceptual)',
      1 => '# 1. Prepare JSONL: {"messages": [{"role":"user","content":"..."},{"role":"assistant","content":"..."}]}',
      2 => '# 2. Upload file → create fine_tuning job',
      3 => '# 3. Deploy ft:gpt-4o-mini:org:custom:id',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** LoRA fine-tune local más barato que full FT.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Docs privados que cambian diario?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿LoRA benefit?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
