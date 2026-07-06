<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'pg-intro',
    'order' => 1,
    'title' => 'PostgreSQL vs SQLite y MySQL',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Cuándo Postgres es la elección correcta.',
    'concepts' => 
    array (
      0 => 'postgresql',
      1 => 'acid',
      2 => 'production',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PostgreSQL',
        'body' => 'BD relacional open source, robusta, con JSONB, full-text search y extensiones. Estándar en startups y enterprise.',
        'code' => 'SELECT version();
-- PostgreSQL 16.x on x86_64',
      ),
      1 => 
      array (
        'heading' => 'SQLite vs Postgres',
        'body' => 'SQLite = dev y apps pequeñas embebidas. Postgres = producción, concurrencia real y escala.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo migrar de SQLite a PostgreSQL?',
        'options' => 
        array (
          0 => 'Producción con múltiples usuarios concurrentes',
          1 => 'Siempre el día 1',
          2 => 'Nunca',
        ),
        'answer' => 'Producción con múltiples usuarios concurrentes',
        'explanation' => 'Postgres maneja escrituras concurrentes mejor.',
        'pro_tip' => 'EscalaPHP usa SQLite en dev — Postgres en prod es el camino natural.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿PostgreSQL es open source?',
        'options' => 
        array (
          0 => 'Sí',
          1 => 'Solo de pago',
          2 => 'Solo en AWS',
        ),
        'answer' => 'Sí',
        'explanation' => 'Licencia permisiva — sin coste de licencia.',
        'pro_tip' => 'Neon, Supabase y RDS ofrecen Postgres managed.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'pg-types',
    'order' => 2,
    'title' => 'Tipos y JSONB',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Tipos nativos, arrays y documentos JSON en SQL.',
    'concepts' => 
    array (
      0 => 'jsonb',
      1 => 'uuid',
      2 => 'types',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tipos útiles',
        'body' => 'UUID, TIMESTAMPTZ, BOOLEAN, NUMERIC — más precisos que VARCHAR genérico.',
        'code' => 'CREATE TABLE events (
  id UUID PRIMARY KEY,
  meta JSONB,
  created_at TIMESTAMPTZ DEFAULT NOW()
);',
      ),
      1 => 
      array (
        'heading' => 'JSONB',
        'body' => 'Guarda JSON indexable — flexible sin schema rígido para metadata.',
        'code' => 'meta JSONB',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja de JSONB sobre JSON en Postgres?',
        'options' => 
        array (
          0 => 'Indexable y más eficiente en consultas',
          1 => 'Solo decoración',
          2 => 'No se puede consultar',
        ),
        'answer' => 'Indexable y más eficiente en consultas',
        'explanation' => 'JSONB binario — operadores -> y ->>.',
        'pro_tip' => 'WHERE meta->>\'country\' = \'ES\' filtra dentro del JSON.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe columna meta JSONB en CREATE TABLE',
        'must_contain' => 
        array (
          0 => 'JSONB',
        ),
        'hint' => 'meta JSONB',
        'explanation' => 'JSONB para datos semi-estructurados.',
        'pro_tip' => 'GIN index en JSONB para búsquedas rápidas.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'pg-migrations',
    'order' => 3,
    'title' => 'Migraciones y esquema',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Versionar DDL como código — Laravel y SQL puro.',
    'concepts' => 
    array (
      0 => 'migration',
      1 => 'schema',
      2 => 'foreign-key',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Migraciones',
        'body' => 'Cada cambio de esquema es un archivo versionado — up/down reversible.',
        'code' => 'user_id INTEGER REFERENCES users(id)',
      ),
      1 => 
      array (
        'heading' => 'Integridad',
        'body' => 'FOREIGN KEY, ON DELETE CASCADE, CHECK constraints — la BD defiende tus reglas.',
        'code' => 'user_id INTEGER REFERENCES users(id)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Comando Laravel para migrar?',
        'options' => 
        array (
          0 => 'php artisan migrate',
          1 => 'psql migrate',
          2 => 'composer migrate',
        ),
        'answer' => 'php artisan migrate',
        'explanation' => 'Ejecuta migraciones pendientes contra Postgres.',
        'pro_tip' => 'migrate:rollback revierte el último batch.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe REFERENCES users(id) para FK',
        'must_contain' => 
        array (
          0 => 'REFERENCES',
          1 => 'users',
        ),
        'hint' => 'user_id INTEGER REFERENCES users(id)',
        'explanation' => 'FK garantiza que user_id exista en users.',
        'pro_tip' => 'ON DELETE CASCADE borra hijos al borrar padre.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'pg-indexes',
    'order' => 4,
    'title' => 'Índices y EXPLAIN ANALYZE',
    'level' => 'Performance',
    'minutes' => 35,
    'summary' => 'B-tree, índices compuestos y planes de ejecución.',
    'concepts' => 
    array (
      0 => 'index',
      1 => 'explain',
      2 => 'btree',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Índices',
        'body' => 'CREATE INDEX idx_users_email ON users(email); — acelera WHERE y JOIN en esas columnas.',
        'code' => 'CREATE INDEX idx_email ON users(email)',
      ),
      1 => 
      array (
        'heading' => 'EXPLAIN ANALYZE',
        'body' => 'Muestra si Postgres hace Seq Scan (malo en tablas grandes) o Index Scan (bueno).',
        'code' => 'CREATE INDEX idx_email ON users(email)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revela EXPLAIN ANALYZE?',
        'options' => 
        array (
          0 => 'Plan y tiempo real de ejecución',
          1 => 'Solo errores de sintaxis',
          2 => 'Tamaño del disco',
        ),
        'answer' => 'Plan y tiempo real de ejecución',
        'explanation' => 'Diagnóstico #1 de queries lentas.',
        'pro_tip' => 'Seq Scan en millones de filas = necesitas índice.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe CREATE INDEX idx_email ON users(email)',
        'must_contain' => 
        array (
          0 => 'CREATE INDEX',
          1 => 'users',
          2 => 'email',
        ),
        'hint' => 'CREATE INDEX idx_email ON users(email)',
        'explanation' => 'Índice en columna de login/búsqueda frecuente.',
        'pro_tip' => 'Índice compuesto (city, created_at) para filtros combinados.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'pg-queries',
    'order' => 5,
    'title' => 'Consultas avanzadas',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'CTEs, window functions y subconsultas.',
    'concepts' => 
    array (
      0 => 'cte',
      1 => 'window',
      2 => 'subquery',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CTE',
        'body' => 'WITH activos AS (SELECT ...) SELECT * FROM activos — queries legibles en pasos.',
        'code' => 'WITH top_users AS (
  SELECT user_id, SUM(amount) AS total FROM orders GROUP BY user_id
)
SELECT * FROM top_users ORDER BY total DESC LIMIT 10;',
      ),
      1 => 
      array (
        'heading' => 'Window functions',
        'body' => 'ROW_NUMBER(), RANK() — ranking sin subconsultas feísimas.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué palabra inicia una CTE?',
        'options' => 
        array (
          0 => 'WITH',
          1 => 'CTE',
          2 => 'TEMP',
        ),
        'answer' => 'WITH',
        'explanation' => 'Common Table Expression — subquery nombrada.',
        'pro_tip' => 'CTEs recursivas para árboles (categorías anidadas).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Para rankear filas sin GROUP BY total?',
        'options' => 
        array (
          0 => 'Window functions',
          1 => 'Solo ORDER BY',
          2 => 'DELETE',
        ),
        'answer' => 'Window functions',
        'explanation' => 'ROW_NUMBER() OVER (PARTITION BY ... ORDER BY ...).',
        'pro_tip' => 'Útil para "top N por categoría".',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'pg-prod',
    'order' => 6,
    'title' => 'PostgreSQL en producción',
    'level' => 'DevOps',
    'minutes' => 30,
    'summary' => 'Connection pooling, backups y variables de entorno.',
    'concepts' => 
    array (
      0 => 'pooling',
      1 => 'backup',
      2 => 'env',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pooling',
        'body' => 'PgBouncer o pool de Laravel — reutiliza conexiones; abrir una por request es caro.',
        'code' => 'DATABASE_URL=postgres://user:pass@pgbouncer:6432/mydb?sslmode=require',
      ),
      1 => 
      array (
        'heading' => 'Backups',
        'body' => 'pg_dump para backups lógicos. Point-in-time recovery en managed Postgres.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde va DATABASE_URL en producción?',
        'options' => 
        array (
          0 => 'Variable de entorno',
          1 => 'En Git público',
          2 => 'En el Dockerfile solo',
        ),
        'answer' => 'Variable de entorno',
        'explanation' => 'Nunca credenciales en el repo.',
        'pro_tip' => 'sslmode=require en conexiones cloud.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Herramienta de backup lógico Postgres?',
        'options' => 
        array (
          0 => 'pg_dump',
          1 => 'redis-cli',
          2 => 'npm backup',
        ),
        'answer' => 'pg_dump',
        'explanation' => 'Exporta SQL o formato custom.',
        'pro_tip' => 'Automatiza backups diarios — prueba restore, no solo backup.',
      ),
    ),
  ),
  array (
    'slug' => 'pg-backups',
    'order' => 7,
    'title' => 'Backups y restore',
    'level' => 'DevOps',
    'minutes' => 35,
    'summary' => 'pg_dump, pg_restore y PITR.',
    'concepts' => 
    array (
      0 => 'pg_dump',
      1 => 'restore',
      2 => 'pitr',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Backups lógicos',
        'body' => 'pg_dump exporta schema + datos — prueba restore en staging mensualmente.',
        'code' => 'pg_dump -Fc -h localhost -U app mydb > backup.dump
pg_restore -d mydb_staging backup.dump',
      ),
      1 => 
      array (
        'heading' => 'PITR',
        'body' => 'Point-in-time recovery en RDS/Neon — WAL logs permiten restaurar a minuto exacto antes del incidente.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Backup sin probar restore es...?',
        'options' => 
        array (
          0 => 'Inútil — no sabes si funciona',
          1 => 'Suficiente',
          2 => 'Mejor que nada siempre',
        ),
        'answer' => 'Inútil — no sabes si funciona',
        'explanation' => 'Restore drill obligatorio.',
        'pro_tip' => 'Automatiza + alerta si backup falla.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe pg_dump',
        'must_contain' => 
        array (
          0 => 'pg_dump',
        ),
        'hint' => 'pg_dump mydb > backup.sql',
        'explanation' => 'Herramienta estándar backup lógico.',
        'pro_tip' => '-Fc formato custom comprimido.',
      ),
    ),
  ),
  array (
    'slug' => 'pg-performance',
    'order' => 8,
    'title' => 'Performance tuning',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'VACUUM, connection limits y slow queries.',
    'concepts' => 
    array (
      0 => 'vacuum',
      1 => 'analyze',
      2 => 'slow-query',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Mantenimiento',
        'body' => 'VACUUM reclaim dead tuples — autovacuum en prod. ANALYZE actualiza estadísticas para planner.',
        'code' => 'EXPLAIN ANALYZE SELECT * FROM orders WHERE user_id = 42;
VACUUM ANALYZE orders;',
      ),
      1 => 
      array (
        'heading' => 'Slow queries',
        'body' => 'log_min_duration_statement en postgresql.conf — pg_stat_statements extension top queries.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Seq Scan en EXPLAIN en tabla grande?',
        'options' => 
        array (
          0 => 'Considerar índice en WHERE/JOIN',
          1 => 'Perfecto siempre',
          2 => 'Delete table',
        ),
        'answer' => 'Considerar índice en WHERE/JOIN',
        'explanation' => 'Index Scan preferred at scale.',
        'pro_tip' => 'Curso elasticsearch para search heavy.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿VACUUM purpose?',
        'options' => 
        array (
          0 => 'Reclaim dead row space',
          1 => 'Delete database',
          2 => 'Encrypt data',
        ),
        'answer' => 'Reclaim dead row space',
        'explanation' => 'Postgres MVCC leaves dead tuples.',
        'pro_tip' => 'Bloat causes disk growth — monitor.',
      ),
    ),
  ),
);
