<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'es-intro',
    'order' => 1,
    'title' => 'Elasticsearch intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Búsqueda full-text y ELK.',
    'concepts' => 
    array (
      0 => 'elasticsearch',
      1 => 'lucene',
      2 => 'elk',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Elasticsearch',
        'body' => 'Motor **búsqueda** y **analytics** sobre Apache Lucene — índices invertidos, escala horizontal.',
        'code' => 'console.log(\'Practica: es-intro\');',
      ),
      1 => 
      array (
        'heading' => 'ELK',
        'body' => 'Elasticsearch + Logstash + Kibana — logs y métricas (ECK con Beats).',
        'code' => 'console.log(\'Practica: es-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ES vs PostgreSQL?',
        'options' => 
        array (
          0 => 'ES full-text/search; PG transacciones',
          1 => 'Reemplazo total PG',
          2 => 'Solo logs',
        ),
        'answer' => 'ES full-text/search; PG transacciones',
        'explanation' => 'Polyglot persistence.',
        'pro_tip' => 'Curso observabilidad ELK overlap.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Unidad datos ES?',
        'options' => 
        array (
          0 => 'Documento JSON en índice',
          1 => 'Tabla SQL',
          2 => 'Solo CSV',
        ),
        'answer' => 'Documento JSON en índice',
        'explanation' => 'Similar Mongo conceptually.',
        'pro_tip' => 'Index = collection-like.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'es-index',
    'order' => 2,
    'title' => 'Índices y mappings',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Mapping, analyzers y tipos.',
    'concepts' => 
    array (
      0 => 'mapping',
      1 => 'analyzer',
      2 => 'field',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Mapping',
        'body' => 'Define tipos: text (full-text), keyword (exact), date, nested.',
        'code' => 'PUT /products',
      ),
      1 => 
      array (
        'heading' => 'Analyzers',
        'body' => 'Tokenizer + filters — stemming, lowercase para búsqueda inteligente.',
        'code' => 'PUT /products',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿text vs keyword?',
        'options' => 
        array (
          0 => 'text analyzed; keyword exact match',
          1 => 'Igual',
          2 => 'keyword analyzed',
        ),
        'answer' => 'text analyzed; keyword exact match',
        'explanation' => 'email keyword, body text.',
        'pro_tip' => 'Mapping explícito evita surprises.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe PUT index',
        'must_contain' => 
        array (
          0 => 'PUT',
        ),
        'hint' => 'PUT /products',
        'explanation' => 'Crea índice REST API.',
        'pro_tip' => 'Reindex API para mapping changes.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'es-query',
    'order' => 3,
    'title' => 'Queries DSL',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'match, bool, filter.',
    'concepts' => 
    array (
      0 => 'match',
      1 => 'bool',
      2 => 'filter',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Query DSL',
        'body' => 'JSON queries — match, term, range, bool must/should/filter.',
        'code' => 'GET /products/_search
{
  "query": { "match": { "title": "laptop" } }
}',
      ),
      1 => 
      array (
        'heading' => 'Filter vs query',
        'body' => 'Filter no scoring — cacheable, más rápido para facets.',
        'code' => 'console.log(\'Practica: es-query\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿match query?',
        'options' => 
        array (
          0 => 'Full-text analyzed search',
          1 => 'Exact ID only',
          2 => 'SQL JOIN',
        ),
        'answer' => 'Full-text analyzed search',
        'explanation' => 'Fuzzy y synonyms posibles.',
        'pro_tip' => 'term query para keyword exact.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿bool must?',
        'options' => 
        array (
          0 => 'AND — todos deben cumplir',
          1 => 'OR only',
          2 => 'NOT only',
        ),
        'answer' => 'AND — todos deben cumplir',
        'explanation' => 'should = OR opcional.',
        'pro_tip' => 'minimum_should_match fine-tune.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'es-agg',
    'order' => 4,
    'title' => 'Aggregations',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Metrics, buckets y facets.',
    'concepts' => 
    array (
      0 => 'aggregation',
      1 => 'bucket',
      2 => 'facet',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Aggs',
        'body' => 'terms bucket — cuenta por categoría; avg, sum metrics.',
        'code' => 'console.log(\'Practica: es-agg\');',
      ),
      1 => 
      array (
        'heading' => 'Faceted search',
        'body' => 'E-commerce filters — aggs + query combinados.',
        'code' => 'console.log(\'Practica: es-agg\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿terms aggregation?',
        'options' => 
        array (
          0 => 'Agrupa por valor campo',
          1 => 'Solo promedio',
          2 => 'Delete docs',
        ),
        'answer' => 'Agrupa por valor campo',
        'explanation' => 'Facets navegación.',
        'pro_tip' => 'Compare Mongo $group curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Nested aggs?',
        'options' => 
        array (
          0 => 'Aggs dentro de buckets',
          1 => 'Sin anidar',
          2 => 'SQL only',
        ),
        'answer' => 'Aggs dentro de buckets',
        'explanation' => 'Drill-down analytics.',
        'pro_tip' => 'composite agg paginación buckets.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'es-php',
    'order' => 5,
    'title' => 'Elasticsearch en PHP/Laravel',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Elastic client, Scout.',
    'concepts' => 
    array (
      0 => 'scout',
      1 => 'elastic',
      2 => 'laravel',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PHP client',
        'body' => 'elasticsearch/elasticsearch — index, search, bulk API.',
        'code' => 'console.log(\'Practica: es-php\');',
      ),
      1 => 
      array (
        'heading' => 'Laravel Scout',
        'body' => 'Model::search("query") — sync Eloquent ↔ ES index.',
        'code' => 'console.log(\'Practica: es-php\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Laravel Scout driver ES?',
        'options' => 
        array (
          0 => 'elastic/elasticsearch driver',
          1 => 'Solo Algolia',
          2 => 'Sin ES',
        ),
        'answer' => 'elastic/elasticsearch driver',
        'explanation' => 'Self-hosted search.',
        'pro_tip' => 'Queue index updates async.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bulk API?',
        'options' => 
        array (
          0 => 'Index many docs one request',
          1 => 'Delete cluster',
          2 => 'Single doc only',
        ),
        'answer' => 'Index many docs one request',
        'explanation' => 'Reindex performance.',
        'pro_tip' => 'Refresh interval tuning bulk.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'es-prod',
    'order' => 6,
    'title' => 'Cluster y producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Shards, replicas y Elastic Cloud.',
    'concepts' => 
    array (
      0 => 'shard',
      1 => 'replica',
      2 => 'cluster',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Cluster',
        'body' => 'Shards distribuyen datos; replicas alta disponibilidad y read scale.',
        'code' => 'console.log(\'Practica: es-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Elastic Cloud',
        'body' => 'Managed ES — snapshots, upgrades automáticos.',
        'code' => 'console.log(\'Practica: es-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Yellow cluster health?',
        'options' => 
        array (
          0 => 'Replicas no asignadas',
          1 => 'Todo perfecto',
          2 => 'Cluster down',
        ),
        'answer' => 'Replicas no asignadas',
        'explanation' => 'Green = all good.',
        'pro_tip' => 'Single node dev = yellow normal.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Index lifecycle ILM?',
        'options' => 
        array (
          0 => 'Hot warm cold delete automático',
          1 => 'Sin retention',
          2 => 'Manual only',
        ),
        'answer' => 'Hot warm cold delete automático',
        'explanation' => 'Logs retention cost control.',
        'pro_tip' => 'Curso observabilidad logs.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'elasticsearch-busqueda-produccion',
    'order' => 7,
    'title' => 'Escalado, particionado y costos',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Escalado, particionado y costos — cierre avanzado de Elasticsearch.',
    'concepts' => 
    array (
      0 => 'scale',
      1 => 'cost',
      2 => 'pipeline',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Elasticsearch a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'elasticsearch-busqueda-operaciones',
    'order' => 8,
    'title' => 'Calidad de datos, pipelines y alertas',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Calidad de datos, pipelines y alertas — cierre avanzado de Elasticsearch.',
    'concepts' => 
    array (
      0 => 'scale',
      1 => 'cost',
      2 => 'pipeline',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Elasticsearch a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
