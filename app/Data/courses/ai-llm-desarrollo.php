<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ai-intro',
        'order' => 1,
        'title' => 'IA para desarrolladores',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'LLMs, casos de uso y límites.',
        'concepts' => ['llm', 'genai', 'developer'],
        'sections' => [
            ['heading' => 'GenAI en dev', 'body' => '**LLMs** (GPT, Claude, Llama) aceleran código, docs, tests y soporte — pero requieren ingeniería responsable.'],
            ['heading' => 'Casos reales', 'body' => 'Copilot en IDE, chatbots soporte, extracción datos, generación SQL con revisión humana.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿LLM en producción siempre...?', 'options' => ['Necesita validación y guardrails', 'Reemplaza QA', 'Sin coste API'], 'answer' => 'Necesita validación y guardrails', 'explanation' => 'Alucinaciones y seguridad.', 'pro_tip' => 'Human-in-the-loop en decisiones críticas.'],
            ['type' => 'choice', 'question' => '¿Token en LLM?', 'options' => ['Unidad texto cobrada/procesada', 'JWT auth', 'Database row'], 'answer' => 'Unidad texto cobrada/procesada', 'explanation' => 'Coste ∝ tokens input+output.', 'pro_tip' => 'tiktoken estima tokens.'],
        ],
    ],
    [
        'slug' => 'ai-apis',
        'order' => 2,
        'title' => 'APIs OpenAI y compatibles',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'chat/completions, streaming y keys.',
        'concepts' => ['openai', 'api', 'streaming'],
        'sections' => [
            ['heading' => 'Chat Completions', 'body' => 'POST /v1/chat/completions — messages array system/user/assistant.', 'code' => "{\n  \"model\": \"gpt-4o-mini\",\n  \"messages\": [{\"role\": \"user\", \"content\": \"Explica REST\"}]\n}"],
            ['heading' => 'Streaming', 'body' => 'stream: true — SSE chunks — UX respuesta progresiva.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿API key LLM en prod?', 'options' => ['Variable entorno server-side', 'En frontend JS público', 'En git'], 'answer' => 'Variable entorno server-side', 'explanation' => 'Proxy backend — nunca expongas key.', 'pro_tip' => 'Rate limit por usuario.'],
            ['type' => 'contains', 'question' => 'Escribe role user en messages', 'must_contain' => ['role', 'user'], 'hint' => '{"role": "user", "content": "..."}', 'explanation' => 'Formato chat estándar.', 'pro_tip' => 'system prompt define comportamiento.'],
        ],
    ],
    [
        'slug' => 'ai-prompts',
        'order' => 3,
        'title' => 'Prompt engineering',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Few-shot, chain-of-thought y structured output.',
        'concepts' => ['prompt', 'few-shot', 'cot'],
        'sections' => [
            ['heading' => 'Técnicas', 'body' => 'Few-shot examples en prompt — mejora formato salida. CoT: "piensa paso a paso" para razonamiento.'],
            ['heading' => 'Structured output', 'body' => 'JSON mode / response_format — parseable sin regex frágil.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Few-shot?', 'options' => ['Ejemplos input/output en el prompt', 'Entrenar modelo', 'Fine-tune'], 'answer' => 'Ejemplos input/output en el prompt', 'explanation' => 'In-context learning.', 'pro_tip' => 'Temperature 0 para output determinista.'],
            ['type' => 'choice', 'question' => '¿JSON mode útil para...?', 'options' => ['Integrar respuesta LLM en código tipado', 'Imágenes', 'CSS'], 'answer' => 'Integrar respuesta LLM en código tipado', 'explanation' => 'Valida con Zod/Pydantic post-parse.', 'pro_tip' => 'Retry si JSON inválido.'],
        ],
    ],
    [
        'slug' => 'ai-rag',
        'order' => 4,
        'title' => 'RAG — Retrieval Augmented Generation',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Embeddings, vector DB y chunking.',
        'concepts' => ['rag', 'embedding', 'vector'],
        'sections' => [
            ['heading' => 'RAG pipeline', 'body' => '1) Chunk docs 2) Embed 3) Store vector DB 4) Query similar 5) LLM con contexto recuperado.'],
            ['heading' => 'Vector DBs', 'body' => 'Pinecone, pgvector, Chroma — búsqueda semántica por similitud coseno.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿RAG resuelve...?', 'options' => ['Conocimiento privado/actualizado sin reentrenar', 'GPU training', 'CSS layout'], 'answer' => 'Conocimiento privado/actualizado sin reentrenar', 'explanation' => 'Context injection en prompt.', 'pro_tip' => 'Chunk size 500-1000 tokens típico.'],
            ['type' => 'choice', 'question' => '¿Embedding es...?', 'options' => ['Vector numérico representando significado texto', 'Hash MD5', 'JWT'], 'answer' => 'Vector numérico representando significado texto', 'explanation' => 'Textos similares → vectores cercanos.', 'pro_tip' => 'pgvector en PostgreSQL existente.'],
        ],
    ],
    [
        'slug' => 'ai-agents',
        'order' => 5,
        'title' => 'Agents y tool calling',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'Function calling, loops y límites.',
        'concepts' => ['agent', 'tool-calling', 'function'],
        'sections' => [
            ['heading' => 'Tool calling', 'body' => 'LLM elige función get_weather(city) — tu código ejecuta y devuelve resultado al modelo.'],
            ['heading' => 'Agent loops', 'body' => 'Plan → act → observe → repeat — max iterations evita loops infinitos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Tool calling permite...?', 'options' => ['LLM invocar APIs reales controladas', 'Ejecución arbitraria shell sin sandbox', 'Sin código'], 'answer' => 'LLM invocar APIs reales controladas', 'explanation' => 'Tú defines tools permitidas.', 'pro_tip' => 'Whitelist funciones — nunca eval().'],
            ['type' => 'choice', 'question' => '¿Max iterations agent?', 'options' => ['Previene loop y coste infinito', 'Opcional sin efecto', 'Solo UI'], 'answer' => 'Previene loop y coste infinito', 'explanation' => 'Safety guard esencial.', 'pro_tip' => 'Human approval para acciones destructivas.'],
        ],
    ],
    [
        'slug' => 'ai-ethics',
        'order' => 6,
        'title' => 'Ética, privacidad y costes',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'PII, bias, caching y evaluación.',
        'concepts' => ['privacy', 'pii', 'eval'],
        'sections' => [
            ['heading' => 'Privacidad', 'body' => 'No envíes PII a APIs públicas sin DPA — anonimiza, redacta, on-prem Llama si regulated.'],
            ['heading' => 'Eval', 'body' => 'Golden dataset + métricas — regression tests para prompts como para código.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿PII en prompt LLM cloud?', 'options' => ['Evitar o anonimizar — revisar política proveedor', 'Siempre OK', 'Solo en dev'], 'answer' => 'Evitar o anonimizar — revisar política proveedor', 'explanation' => 'GDPR/HIPAA compliance.', 'pro_tip' => 'Prompt caching reduce coste repetido.'],
            ['type' => 'choice', 'question' => '¿Eval LLM en CI?', 'options' => ['Tests regresión calidad respuestas', 'Imposible', 'Solo manual'], 'answer' => 'Tests regresión calidad respuestas', 'explanation' => 'Prompt versionado en git.', 'pro_tip' => 'LLM-as-judge con cuidado sesgo.'],
        ],
    ],
];
