<?php

declare(strict_types=1);

return [
    ['slug' => 'es-intro', 'order' => 1, 'title' => 'Elasticsearch intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Búsqueda full-text y ELK.', 'concepts' => ['elasticsearch', 'lucene', 'elk'], 'sections' => [
        ['heading' => 'Elasticsearch', 'body' => 'Motor **búsqueda** y **analytics** sobre Apache Lucene — índices invertidos, escala horizontal.'],
        ['heading' => 'ELK', 'body' => 'Elasticsearch + Logstash + Kibana — logs y métricas (ECK con Beats).'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿ES vs PostgreSQL?', 'options' => ['ES full-text/search; PG transacciones', 'Reemplazo total PG', 'Solo logs'], 'answer' => 'ES full-text/search; PG transacciones', 'explanation' => 'Polyglot persistence.', 'pro_tip' => 'Curso observabilidad ELK overlap.'],
        ['type' => 'choice', 'question' => '¿Unidad datos ES?', 'options' => ['Documento JSON en índice', 'Tabla SQL', 'Solo CSV'], 'answer' => 'Documento JSON en índice', 'explanation' => 'Similar Mongo conceptually.', 'pro_tip' => 'Index = collection-like.'],
    ]],
    ['slug' => 'es-index', 'order' => 2, 'title' => 'Índices y mappings', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Mapping, analyzers y tipos.', 'concepts' => ['mapping', 'analyzer', 'field'], 'sections' => [
        ['heading' => 'Mapping', 'body' => 'Define tipos: text (full-text), keyword (exact), date, nested.'],
        ['heading' => 'Analyzers', 'body' => 'Tokenizer + filters — stemming, lowercase para búsqueda inteligente.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿text vs keyword?', 'options' => ['text analyzed; keyword exact match', 'Igual', 'keyword analyzed'], 'answer' => 'text analyzed; keyword exact match', 'explanation' => 'email keyword, body text.', 'pro_tip' => 'Mapping explícito evita surprises.'],
        ['type' => 'contains', 'question' => 'Escribe PUT index', 'must_contain' => ['PUT'], 'hint' => 'PUT /products', 'explanation' => 'Crea índice REST API.', 'pro_tip' => 'Reindex API para mapping changes.'],
    ]],
    ['slug' => 'es-query', 'order' => 3, 'title' => 'Queries DSL', 'level' => 'Práctica', 'minutes' => 40, 'summary' => 'match, bool, filter.', 'concepts' => ['match', 'bool', 'filter'], 'sections' => [
        ['heading' => 'Query DSL', 'body' => 'JSON queries — match, term, range, bool must/should/filter.', 'code' => "GET /products/_search\n{\n  \"query\": { \"match\": { \"title\": \"laptop\" } }\n}"],
        ['heading' => 'Filter vs query', 'body' => 'Filter no scoring — cacheable, más rápido para facets.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿match query?', 'options' => ['Full-text analyzed search', 'Exact ID only', 'SQL JOIN'], 'answer' => 'Full-text analyzed search', 'explanation' => 'Fuzzy y synonyms posibles.', 'pro_tip' => 'term query para keyword exact.'],
        ['type' => 'choice', 'question' => '¿bool must?', 'options' => ['AND — todos deben cumplir', 'OR only', 'NOT only'], 'answer' => 'AND — todos deben cumplir', 'explanation' => 'should = OR opcional.', 'pro_tip' => 'minimum_should_match fine-tune.'],
    ]],
    ['slug' => 'es-agg', 'order' => 4, 'title' => 'Aggregations', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Metrics, buckets y facets.', 'concepts' => ['aggregation', 'bucket', 'facet'], 'sections' => [
        ['heading' => 'Aggs', 'body' => 'terms bucket — cuenta por categoría; avg, sum metrics.'],
        ['heading' => 'Faceted search', 'body' => 'E-commerce filters — aggs + query combinados.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿terms aggregation?', 'options' => ['Agrupa por valor campo', 'Solo promedio', 'Delete docs'], 'answer' => 'Agrupa por valor campo', 'explanation' => 'Facets navegación.', 'pro_tip' => 'Compare Mongo $group curso.'],
        ['type' => 'choice', 'question' => '¿Nested aggs?', 'options' => ['Aggs dentro de buckets', 'Sin anidar', 'SQL only'], 'answer' => 'Aggs dentro de buckets', 'explanation' => 'Drill-down analytics.', 'pro_tip' => 'composite agg paginación buckets.'],
    ]],
    ['slug' => 'es-php', 'order' => 5, 'title' => 'Elasticsearch en PHP/Laravel', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Elastic client, Scout.', 'concepts' => ['scout', 'elastic', 'laravel'], 'sections' => [
        ['heading' => 'PHP client', 'body' => 'elasticsearch/elasticsearch — index, search, bulk API.'],
        ['heading' => 'Laravel Scout', 'body' => 'Model::search("query") — sync Eloquent ↔ ES index.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Laravel Scout driver ES?', 'options' => ['elastic/elasticsearch driver', 'Solo Algolia', 'Sin ES'], 'answer' => 'elastic/elasticsearch driver', 'explanation' => 'Self-hosted search.', 'pro_tip' => 'Queue index updates async.'],
        ['type' => 'choice', 'question' => '¿Bulk API?', 'options' => ['Index many docs one request', 'Delete cluster', 'Single doc only'], 'answer' => 'Index many docs one request', 'explanation' => 'Reindex performance.', 'pro_tip' => 'Refresh interval tuning bulk.'],
    ]],
    ['slug' => 'es-prod', 'order' => 6, 'title' => 'Cluster y producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Shards, replicas y Elastic Cloud.', 'concepts' => ['shard', 'replica', 'cluster'], 'sections' => [
        ['heading' => 'Cluster', 'body' => 'Shards distribuyen datos; replicas alta disponibilidad y read scale.'],
        ['heading' => 'Elastic Cloud', 'body' => 'Managed ES — snapshots, upgrades automáticos.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Yellow cluster health?', 'options' => ['Replicas no asignadas', 'Todo perfecto', 'Cluster down'], 'answer' => 'Replicas no asignadas', 'explanation' => 'Green = all good.', 'pro_tip' => 'Single node dev = yellow normal.'],
        ['type' => 'choice', 'question' => '¿Index lifecycle ILM?', 'options' => ['Hot warm cold delete automático', 'Sin retention', 'Manual only'], 'answer' => 'Hot warm cold delete automático', 'explanation' => 'Logs retention cost control.', 'pro_tip' => 'Curso observabilidad logs.'],
    ]],
];
