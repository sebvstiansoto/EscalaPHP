<?php

declare(strict_types=1);

return [
    [
        'slug' => 'pg-intro',
        'order' => 1,
        'title' => 'PostgreSQL vs SQLite y MySQL',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Cuándo Postgres es la elección correcta.',
        'concepts' => ['postgresql', 'acid', 'production'],
        'sections' => [
            ['heading' => 'PostgreSQL', 'body' => 'BD relacional open source, robusta, con JSONB, full-text search y extensiones. Estándar en startups y enterprise.'],
            ['heading' => 'SQLite vs Postgres', 'body' => 'SQLite = dev y apps pequeñas embebidas. Postgres = producción, concurrencia real y escala.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cuándo migrar de SQLite a PostgreSQL?', 'options' => ['Producción con múltiples usuarios concurrentes', 'Siempre el día 1', 'Nunca'], 'answer' => 'Producción con múltiples usuarios concurrentes', 'explanation' => 'Postgres maneja escrituras concurrentes mejor.', 'pro_tip' => 'EscalaPHP usa SQLite en dev — Postgres en prod es el camino natural.'],
            ['type' => 'choice', 'question' => '¿PostgreSQL es open source?', 'options' => ['Sí', 'Solo de pago', 'Solo en AWS'], 'answer' => 'Sí', 'explanation' => 'Licencia permisiva — sin coste de licencia.', 'pro_tip' => 'Neon, Supabase y RDS ofrecen Postgres managed.'],
        ],
    ],
    [
        'slug' => 'pg-types',
        'order' => 2,
        'title' => 'Tipos y JSONB',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Tipos nativos, arrays y documentos JSON en SQL.',
        'concepts' => ['jsonb', 'uuid', 'types'],
        'sections' => [
            ['heading' => 'Tipos útiles', 'body' => 'UUID, TIMESTAMPTZ, BOOLEAN, NUMERIC — más precisos que VARCHAR genérico.', 'code' => "CREATE TABLE events (\n  id UUID PRIMARY KEY,\n  meta JSONB,\n  created_at TIMESTAMPTZ DEFAULT NOW()\n);"],
            ['heading' => 'JSONB', 'body' => 'Guarda JSON indexable — flexible sin schema rígido para metadata.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja de JSONB sobre JSON en Postgres?', 'options' => ['Indexable y más eficiente en consultas', 'Solo decoración', 'No se puede consultar'], 'answer' => 'Indexable y más eficiente en consultas', 'explanation' => 'JSONB binario — operadores -> y ->>.', 'pro_tip' => 'WHERE meta->>\'country\' = \'ES\' filtra dentro del JSON.'],
            ['type' => 'contains', 'question' => 'Escribe columna meta JSONB en CREATE TABLE', 'must_contain' => ['JSONB'], 'hint' => 'meta JSONB', 'explanation' => 'JSONB para datos semi-estructurados.', 'pro_tip' => 'GIN index en JSONB para búsquedas rápidas.'],
        ],
    ],
    [
        'slug' => 'pg-migrations',
        'order' => 3,
        'title' => 'Migraciones y esquema',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'Versionar DDL como código — Laravel y SQL puro.',
        'concepts' => ['migration', 'schema', 'foreign-key'],
        'sections' => [
            ['heading' => 'Migraciones', 'body' => 'Cada cambio de esquema es un archivo versionado — up/down reversible.'],
            ['heading' => 'Integridad', 'body' => 'FOREIGN KEY, ON DELETE CASCADE, CHECK constraints — la BD defiende tus reglas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Comando Laravel para migrar?', 'options' => ['php artisan migrate', 'psql migrate', 'composer migrate'], 'answer' => 'php artisan migrate', 'explanation' => 'Ejecuta migraciones pendientes contra Postgres.', 'pro_tip' => 'migrate:rollback revierte el último batch.'],
            ['type' => 'contains', 'question' => 'Escribe REFERENCES users(id) para FK', 'must_contain' => ['REFERENCES', 'users'], 'hint' => 'user_id INTEGER REFERENCES users(id)', 'explanation' => 'FK garantiza que user_id exista en users.', 'pro_tip' => 'ON DELETE CASCADE borra hijos al borrar padre.'],
        ],
    ],
    [
        'slug' => 'pg-indexes',
        'order' => 4,
        'title' => 'Índices y EXPLAIN ANALYZE',
        'level' => 'Performance',
        'minutes' => 35,
        'summary' => 'B-tree, índices compuestos y planes de ejecución.',
        'concepts' => ['index', 'explain', 'btree'],
        'sections' => [
            ['heading' => 'Índices', 'body' => 'CREATE INDEX idx_users_email ON users(email); — acelera WHERE y JOIN en esas columnas.'],
            ['heading' => 'EXPLAIN ANALYZE', 'body' => 'Muestra si Postgres hace Seq Scan (malo en tablas grandes) o Index Scan (bueno).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué revela EXPLAIN ANALYZE?', 'options' => ['Plan y tiempo real de ejecución', 'Solo errores de sintaxis', 'Tamaño del disco'], 'answer' => 'Plan y tiempo real de ejecución', 'explanation' => 'Diagnóstico #1 de queries lentas.', 'pro_tip' => 'Seq Scan en millones de filas = necesitas índice.'],
            ['type' => 'contains', 'question' => 'Escribe CREATE INDEX idx_email ON users(email)', 'must_contain' => ['CREATE INDEX', 'users', 'email'], 'hint' => 'CREATE INDEX idx_email ON users(email)', 'explanation' => 'Índice en columna de login/búsqueda frecuente.', 'pro_tip' => 'Índice compuesto (city, created_at) para filtros combinados.'],
        ],
    ],
    [
        'slug' => 'pg-queries',
        'order' => 5,
        'title' => 'Consultas avanzadas',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'CTEs, window functions y subconsultas.',
        'concepts' => ['cte', 'window', 'subquery'],
        'sections' => [
            ['heading' => 'CTE', 'body' => 'WITH activos AS (SELECT ...) SELECT * FROM activos — queries legibles en pasos.', 'code' => "WITH top_users AS (\n  SELECT user_id, SUM(amount) AS total FROM orders GROUP BY user_id\n)\nSELECT * FROM top_users ORDER BY total DESC LIMIT 10;"],
            ['heading' => 'Window functions', 'body' => 'ROW_NUMBER(), RANK() — ranking sin subconsultas feísimas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué palabra inicia una CTE?', 'options' => ['WITH', 'CTE', 'TEMP'], 'answer' => 'WITH', 'explanation' => 'Common Table Expression — subquery nombrada.', 'pro_tip' => 'CTEs recursivas para árboles (categorías anidadas).'],
            ['type' => 'choice', 'question' => '¿Para rankear filas sin GROUP BY total?', 'options' => ['Window functions', 'Solo ORDER BY', 'DELETE'], 'answer' => 'Window functions', 'explanation' => 'ROW_NUMBER() OVER (PARTITION BY ... ORDER BY ...).', 'pro_tip' => 'Útil para "top N por categoría".'],
        ],
    ],
    [
        'slug' => 'pg-prod',
        'order' => 6,
        'title' => 'PostgreSQL en producción',
        'level' => 'DevOps',
        'minutes' => 30,
        'summary' => 'Connection pooling, backups y variables de entorno.',
        'concepts' => ['pooling', 'backup', 'env'],
        'sections' => [
            ['heading' => 'Pooling', 'body' => 'PgBouncer o pool de Laravel — reutiliza conexiones; abrir una por request es caro.'],
            ['heading' => 'Backups', 'body' => 'pg_dump para backups lógicos. Point-in-time recovery en managed Postgres.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde va DATABASE_URL en producción?', 'options' => ['Variable de entorno', 'En Git público', 'En el Dockerfile solo'], 'answer' => 'Variable de entorno', 'explanation' => 'Nunca credenciales en el repo.', 'pro_tip' => 'sslmode=require en conexiones cloud.'],
            ['type' => 'choice', 'question' => '¿Herramienta de backup lógico Postgres?', 'options' => ['pg_dump', 'redis-cli', 'npm backup'], 'answer' => 'pg_dump', 'explanation' => 'Exporta SQL o formato custom.', 'pro_tip' => 'Automatiza backups diarios — prueba restore, no solo backup.'],
        ],
    ],
];
