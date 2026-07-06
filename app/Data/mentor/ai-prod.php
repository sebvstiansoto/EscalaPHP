<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'LLM en producción',
    'body' => 'Caching, rate limits, observabilidad y costos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🤖',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [caching](/glosario#caching) · [Rate limiting](/glosario#rate-limit) · [cost](/glosario#cost)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Production patterns',
    'body' => 'Prompt caching, semantic cache Redis, rate limit por user, fallback model cheaper, timeout + retry exponential.',
    'code' => 'async def ask_llm(prompt: str) -> str:
    cached = await redis.get(hash(prompt))
    if cached:
        return cached
    response = await openai.chat.completions.create(
        model="gpt-4o-mini", messages=[{"role":"user","content":prompt}], timeout=30
    )
    text = response.choices[0].message.content
    await redis.setex(hash(prompt), 3600, text)
    return text',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Observability',
    'body' => 'Log prompt hash, tokens in/out, latency, cost USD — LangSmith, Langfuse, OpenTelemetry traces.',
    'code' => 'metrics.histogram("llm_latency_ms", latency)
metrics.counter("llm_tokens_total", tokens, labels={"model": model})',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Caching, rate limits, observabilidad y costos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **IA & LLMs para devs**, esto aparece en code reviews, incidentes y entregas diarias. Caching, rate limits, observabilidad y costos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'async def ask_llm(prompt: str) -> str:
    cached = await redis.get(hash(prompt))
    if cached:
        return cached
    response = await openai.chat.completions.create(
        model="gpt-4o-mini", messages=[{"role":"user","content":prompt}], timeout=30
    )
    text = response.choices[0].message.content
    await redis.setex(hash(prompt), 3600, text)
    return text',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'async def ask_llm(prompt: str) -> str:',
      1 => '    cached = await redis.get(hash(prompt))',
      2 => '    if cached:',
      3 => '        return cached',
      4 => '    response = await openai.chat.completions.create(',
      5 => '        model="gpt-4o-mini", messages=[{"role":"user","content":prompt}], timeout=30',
      6 => '    )',
      7 => '    text = response.choices[0].message.content',
      8 => '    await redis.setex(hash(prompt), 3600, text)',
      9 => '    return text',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso redis-cache for implementation.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Semantic cache?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Fallback model strategy?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
