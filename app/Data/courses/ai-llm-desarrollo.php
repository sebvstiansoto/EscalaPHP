<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ai-intro',
    'order' => 1,
    'title' => 'IA para desarrolladores',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'LLMs, casos de uso y límites.',
    'concepts' => 
    array (
      0 => 'llm',
      1 => 'genai',
      2 => 'developer',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'GenAI en dev',
        'body' => '**LLMs** (GPT, Claude, Llama) aceleran código, docs, tests y soporte — pero requieren ingeniería responsable.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-intro\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Casos reales',
        'body' => 'Copilot en IDE, chatbots soporte, extracción datos, generación SQL con revisión humana.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-intro\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿LLM en producción siempre...?',
        'options' => 
        array (
          0 => 'Necesita validación y guardrails',
          1 => 'Reemplaza QA',
          2 => 'Sin coste API',
        ),
        'answer' => 'Necesita validación y guardrails',
        'explanation' => 'Alucinaciones y seguridad.',
        'pro_tip' => 'Human-in-the-loop en decisiones críticas.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Token en LLM?',
        'options' => 
        array (
          0 => 'Unidad texto cobrada/procesada',
          1 => 'JWT auth',
          2 => 'Database row',
        ),
        'answer' => 'Unidad texto cobrada/procesada',
        'explanation' => 'Coste ∝ tokens input+output.',
        'pro_tip' => 'tiktoken estima tokens.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ai-apis',
    'order' => 2,
    'title' => 'APIs OpenAI y compatibles',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'chat/completions, streaming y keys.',
    'concepts' => 
    array (
      0 => 'openai',
      1 => 'api',
      2 => 'streaming',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Chat Completions',
        'body' => 'POST /v1/chat/completions — messages array system/user/assistant.',
        'code' => '{
  "model": "gpt-4o-mini",
  "messages": [{"role": "user", "content": "Explica REST"}]
}',
      ),
      1 => 
      array (
        'heading' => 'Streaming',
        'body' => 'stream: true — SSE chunks — UX respuesta progresiva.',
        'code' => '{"role": "user", "content": "..."}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿API key LLM en prod?',
        'options' => 
        array (
          0 => 'Variable entorno server-side',
          1 => 'En frontend JS público',
          2 => 'En git',
        ),
        'answer' => 'Variable entorno server-side',
        'explanation' => 'Proxy backend — nunca expongas key.',
        'pro_tip' => 'Rate limit por usuario.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe role user en messages',
        'must_contain' => 
        array (
          0 => 'role',
          1 => 'user',
        ),
        'hint' => '{"role": "user", "content": "..."}',
        'explanation' => 'Formato chat estándar.',
        'pro_tip' => 'system prompt define comportamiento.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ai-prompts',
    'order' => 3,
    'title' => 'Prompt engineering',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Few-shot, chain-of-thought y structured output.',
    'concepts' => 
    array (
      0 => 'prompt',
      1 => 'few-shot',
      2 => 'cot',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Técnicas',
        'body' => 'Few-shot examples en prompt — mejora formato salida. CoT: "piensa paso a paso" para razonamiento.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-prompts\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Structured output',
        'body' => 'JSON mode / response_format — parseable sin regex frágil.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-prompts\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Few-shot?',
        'options' => 
        array (
          0 => 'Ejemplos input/output en el prompt',
          1 => 'Entrenar modelo',
          2 => 'Fine-tune',
        ),
        'answer' => 'Ejemplos input/output en el prompt',
        'explanation' => 'In-context learning.',
        'pro_tip' => 'Temperature 0 para output determinista.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿JSON mode útil para...?',
        'options' => 
        array (
          0 => 'Integrar respuesta LLM en código tipado',
          1 => 'Imágenes',
          2 => 'CSS',
        ),
        'answer' => 'Integrar respuesta LLM en código tipado',
        'explanation' => 'Valida con Zod/Pydantic post-parse.',
        'pro_tip' => 'Retry si JSON inválido.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ai-rag',
    'order' => 4,
    'title' => 'RAG — Retrieval Augmented Generation',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Embeddings, vector DB y chunking.',
    'concepts' => 
    array (
      0 => 'rag',
      1 => 'embedding',
      2 => 'vector',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'RAG pipeline',
        'body' => '1) Chunk docs 2) Embed 3) Store vector DB 4) Query similar 5) LLM con contexto recuperado.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-rag\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Vector DBs',
        'body' => 'Pinecone, pgvector, Chroma — búsqueda semántica por similitud coseno.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-rag\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿RAG resuelve...?',
        'options' => 
        array (
          0 => 'Conocimiento privado/actualizado sin reentrenar',
          1 => 'GPU training',
          2 => 'CSS layout',
        ),
        'answer' => 'Conocimiento privado/actualizado sin reentrenar',
        'explanation' => 'Context injection en prompt.',
        'pro_tip' => 'Chunk size 500-1000 tokens típico.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Embedding es...?',
        'options' => 
        array (
          0 => 'Vector numérico representando significado texto',
          1 => 'Hash MD5',
          2 => 'JWT',
        ),
        'answer' => 'Vector numérico representando significado texto',
        'explanation' => 'Textos similares → vectores cercanos.',
        'pro_tip' => 'pgvector en PostgreSQL existente.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ai-agents',
    'order' => 5,
    'title' => 'Agents y tool calling',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Function calling, loops y límites.',
    'concepts' => 
    array (
      0 => 'agent',
      1 => 'tool-calling',
      2 => 'function',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tool calling',
        'body' => 'LLM elige función get_weather(city) — tu código ejecuta y devuelve resultado al modelo.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-agents\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Agent loops',
        'body' => 'Plan → act → observe → repeat — max iterations evita loops infinitos.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-agents\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Tool calling permite...?',
        'options' => 
        array (
          0 => 'LLM invocar APIs reales controladas',
          1 => 'Ejecución arbitraria shell sin sandbox',
          2 => 'Sin código',
        ),
        'answer' => 'LLM invocar APIs reales controladas',
        'explanation' => 'Tú defines tools permitidas.',
        'pro_tip' => 'Whitelist funciones — nunca eval().',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Max iterations agent?',
        'options' => 
        array (
          0 => 'Previene loop y coste infinito',
          1 => 'Opcional sin efecto',
          2 => 'Solo UI',
        ),
        'answer' => 'Previene loop y coste infinito',
        'explanation' => 'Safety guard esencial.',
        'pro_tip' => 'Human approval para acciones destructivas.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ai-ethics',
    'order' => 6,
    'title' => 'Ética, privacidad y costes',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'PII, bias, caching y evaluación.',
    'concepts' => 
    array (
      0 => 'privacy',
      1 => 'pii',
      2 => 'eval',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Privacidad',
        'body' => 'No envíes PII a APIs públicas sin DPA — anonimiza, redacta, on-prem Llama si regulated.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-ethics\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Eval',
        'body' => 'Golden dataset + métricas — regression tests para prompts como para código.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'ai-ethics\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PII en prompt LLM cloud?',
        'options' => 
        array (
          0 => 'Evitar o anonimizar — revisar política proveedor',
          1 => 'Siempre OK',
          2 => 'Solo en dev',
        ),
        'answer' => 'Evitar o anonimizar — revisar política proveedor',
        'explanation' => 'GDPR/HIPAA compliance.',
        'pro_tip' => 'Prompt caching reduce coste repetido.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Eval LLM en CI?',
        'options' => 
        array (
          0 => 'Tests regresión calidad respuestas',
          1 => 'Imposible',
          2 => 'Solo manual',
        ),
        'answer' => 'Tests regresión calidad respuestas',
        'explanation' => 'Prompt versionado en git.',
        'pro_tip' => 'LLM-as-judge con cuidado sesgo.',
      ),
    ),
  ),
  array (
    'slug' => 'ai-finetuning',
    'order' => 7,
    'title' => 'Fine-tuning vs RAG',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'Cuándo fine-tune, LoRA y evaluación.',
    'concepts' => 
    array (
      0 => 'fine-tuning',
      1 => 'lora',
      2 => 'eval',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Fine-tuning',
        'body' => 'Ajusta pesos del modelo con dataset dominio — tono, formato JSON, clasificación — costoso pero especializado.',
        'code' => '# OpenAI fine-tuning API (conceptual)
# 1. Prepare JSONL: {"messages": [{"role":"user","content":"..."},{"role":"assistant","content":"..."}]}
# 2. Upload file → create fine_tuning job
# 3. Deploy ft:gpt-4o-mini:org:custom:id',
      ),
      1 => 
      array (
        'heading' => 'RAG vs FT',
        'body' => 'RAG = conocimiento dinámico docs privados. Fine-tune = comportamiento/estilo fijo. Muchos productos usan RAG primero.',
        'code' => 'if knowledge_changes_daily:
    use_rag()
elif fixed_output_format:
    consider_fine_tune()',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Docs privados que cambian diario?',
        'options' => 
        array (
          0 => 'RAG preferido',
          1 => 'Fine-tune only',
          2 => 'No LLM',
        ),
        'answer' => 'RAG preferido',
        'explanation' => 'FT no actualiza conocimiento sin retrain.',
        'pro_tip' => 'LoRA fine-tune local más barato que full FT.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿LoRA benefit?',
        'options' => 
        array (
          0 => 'Fine-tune eficiente pocos params',
          1 => 'Replace vector DB',
          2 => 'CSS framework',
        ),
        'answer' => 'Fine-tune eficiente pocos params',
        'explanation' => 'Low-Rank Adaptation — GPUs consumer.',
        'pro_tip' => 'HuggingFace PEFT library.',
      ),
    ),
  ),
  array (
    'slug' => 'ai-prod',
    'order' => 8,
    'title' => 'LLM en producción',
    'level' => 'Producción',
    'minutes' => 40,
    'summary' => 'Caching, rate limits, observabilidad y costos.',
    'concepts' => 
    array (
      0 => 'caching',
      1 => 'rate-limit',
      2 => 'cost',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Production patterns',
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
      1 => 
      array (
        'heading' => 'Observability',
        'body' => 'Log prompt hash, tokens in/out, latency, cost USD — LangSmith, Langfuse, OpenTelemetry traces.',
        'code' => 'metrics.histogram("llm_latency_ms", latency)
metrics.counter("llm_tokens_total", tokens, labels={"model": model})',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Semantic cache?',
        'options' => 
        array (
          0 => 'Reuse similar prompts embeddings',
          1 => 'Delete all prompts',
          2 => 'Browser cache',
        ),
        'answer' => 'Reuse similar prompts embeddings',
        'explanation' => 'Reduce cost repeated questions.',
        'pro_tip' => 'Curso redis-cache for implementation.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Fallback model strategy?',
        'options' => 
        array (
          0 => 'Cheap model if primary fails/timeout',
          1 => 'Always most expensive',
          2 => 'No fallback',
        ),
        'answer' => 'Cheap model if primary fails/timeout',
        'explanation' => 'Graceful degradation UX.',
        'pro_tip' => 'Curso observabilidad SLO latency.',
      ),
    ),
  ),
);
