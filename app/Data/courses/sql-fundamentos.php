<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'sql-select',
    'order' => 1,
    'title' => 'SELECT y filtros',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Consultar datos con WHERE, ORDER BY y LIMIT.',
    'concepts' => 
    array (
      0 => 'select',
      1 => 'where',
      2 => 'filter',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SELECT básico',
        'body' => 'SQL lee datos de tablas. `SELECT` elige columnas, `FROM` indica la tabla.',
        'code' => 'SELECT name FROM users WHERE id = 1',
      ),
      1 => 
      array (
        'heading' => 'Tablas de práctica',
        'body' => 'Usamos `users` (id, name, city) y `orders` (id, user_id, product, amount). Las consultas corren en SQLite real.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué cláusula filtra filas en SQL?',
        'options' => 
        array (
          0 => 'WHERE',
          1 => 'FILTER',
          2 => 'IF',
        ),
        'answer' => 'WHERE',
        'explanation' => 'WHERE aplica condiciones antes de devolver resultados.',
        'pro_tip' => 'Índices en columnas del WHERE aceleran consultas enormemente.',
      ),
      1 => 
      array (
        'type' => 'sql',
        'question' => 'Selecciona name de users donde city es Madrid',
        'starter' => 'SELECT name FROM users WHERE ',
        'expected_output' => 'name
Luis',
        'hint' => 'SELECT name FROM users WHERE city = \'Madrid\'',
        'explanation' => '¡Ejecutaste SQL real contra una base de datos!',
        'pro_tip' => 'Comillas simples para strings en SQL.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'sql-joins',
    'order' => 2,
    'title' => 'JOINs y relaciones',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'INNER JOIN, LEFT JOIN y subconsultas.',
    'concepts' => 
    array (
      0 => 'join',
      1 => 'inner',
      2 => 'left',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Relaciones',
        'body' => 'Las tablas se relacionan por claves foráneas. `orders.user_id` apunta a `users.id`.',
      ),
      1 => 
      array (
        'heading' => 'INNER JOIN',
        'body' => 'Combina filas que coinciden en ambas tablas.',
        'code' => 'SELECT u.name, o.product
FROM users u
INNER JOIN orders o ON u.id = o.user_id',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué JOIN devuelve solo filas con coincidencia en ambas tablas?',
        'options' => 
        array (
          0 => 'INNER JOIN',
          1 => 'LEFT JOIN siempre todo',
          2 => 'CROSS DELETE',
        ),
        'answer' => 'INNER JOIN',
        'explanation' => 'INNER JOIN = intersección de claves coincidentes.',
        'pro_tip' => 'LEFT JOIN incluye usuarios sin pedidos (NULL en orders).',
      ),
      1 => 
      array (
        'type' => 'sql',
        'question' => 'Lista product y amount de orders del usuario Ana (usa JOIN con users)',
        'expected_output' => 'product|amount
Laptop|1200',
        'hint' => 'SELECT o.product, o.amount FROM orders o INNER JOIN users u ON o.user_id = u.id WHERE u.name = \'Ana\'',
        'explanation' => 'JOIN conecta datos relacionados entre tablas.',
        'pro_tip' => 'Alias (u, o) hacen consultas largas legibles.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'sql-index',
    'order' => 3,
    'title' => 'Índices y performance',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'EXPLAIN, índices y consultas lentas.',
    'concepts' => 
    array (
      0 => 'index',
      1 => 'explain',
      2 => 'performance',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Índices',
        'body' => 'Un **índice** es como el índice de un libro: encuentra filas sin escanear toda la tabla.',
        'code' => 'CREATE INDEX idx_users_city ON users(city)',
      ),
      1 => 
      array (
        'heading' => 'EXPLAIN',
        'body' => '`EXPLAIN QUERY PLAN` muestra cómo SQLite ejecutará tu consulta.',
        'code' => 'CREATE INDEX idx_users_city ON users(city)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo crear un índice?',
        'options' => 
        array (
          0 => 'Columnas usadas frecuentemente en WHERE/JOIN',
          1 => 'En todas las columnas siempre',
          2 => 'Nunca',
        ),
        'answer' => 'Columnas usadas frecuentemente en WHERE/JOIN',
        'explanation' => 'Índices aceleran lecturas pero ralentizan escrituras — úsalos con criterio.',
        'pro_tip' => 'Índice compuesto (city, name) para filtros combinados.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe el SQL para crear índice idx_users_city en users(city)',
        'must_contain' => 
        array (
          0 => 'CREATE INDEX',
          1 => 'idx_users_city',
          2 => 'users',
          3 => 'city',
        ),
        'hint' => 'CREATE INDEX idx_users_city ON users(city)',
        'explanation' => 'CREATE INDEX prepara la BD para consultas rápidas por ciudad.',
        'pro_tip' => 'En producción, crea índices en migraciones, no a mano.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'sql-tx',
    'order' => 4,
    'title' => 'Transacciones ACID',
    'level' => 'Avanzado',
    'minutes' => 25,
    'summary' => 'BEGIN, COMMIT, ROLLBACK y consistencia.',
    'concepts' => 
    array (
      0 => 'transaction',
      1 => 'acid',
      2 => 'rollback',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Transacciones',
        'body' => 'Una **transacción** agrupa operaciones: o todas se aplican o ninguna (atomicidad).',
        'code' => 'BEGIN TRANSACTION;
-- tu SQL
COMMIT;',
      ),
      1 => 
      array (
        'heading' => 'ACID',
        'body' => '**A**tomicidad, **C**onsistencia, **I**solación, **D**urabilidad — garantías de BD serias.',
        'code' => 'BEGIN TRANSACTION;
-- tu SQL
COMMIT;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace ROLLBACK?',
        'options' => 
        array (
          0 => 'Deshace cambios de la transacción actual',
          1 => 'Borra la base de datos',
          2 => 'Crea un índice',
        ),
        'answer' => 'Deshace cambios de la transacción actual',
        'explanation' => 'ROLLBACK restaura el estado anterior si algo falla.',
        'pro_tip' => 'Transferencias bancarias usan transacciones — no puedes perder dinero a medias.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe BEGIN TRANSACTION, una operación y COMMIT',
        'must_contain' => 
        array (
          0 => 'BEGIN',
          1 => 'COMMIT',
        ),
        'hint' => 'BEGIN TRANSACTION;
-- tu SQL
COMMIT;',
        'explanation' => 'BEGIN ... COMMIT delimita una unidad atómica de trabajo.',
        'pro_tip' => 'En Laravel: DB::transaction(fn () => ...).',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'sql-agg',
    'order' => 5,
    'title' => 'Agregaciones y GROUP BY',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'COUNT, SUM, AVG y agrupar resultados.',
    'concepts' => 
    array (
      0 => 'aggregate',
      1 => 'group-by',
      2 => 'having',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Funciones de agregación',
        'body' => 'COUNT, SUM, AVG, MIN, MAX resumen filas.',
        'code' => 'SELECT city, COUNT(*) AS total
FROM users
GROUP BY city',
      ),
      1 => 
      array (
        'heading' => 'HAVING',
        'body' => 'Filtra **después** de agrupar — como WHERE pero para grupos.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué cláusula agrupa filas con la misma ciudad?',
        'options' => 
        array (
          0 => 'GROUP BY',
          1 => 'ORDER BY',
          2 => 'JOIN BY',
        ),
        'answer' => 'GROUP BY',
        'explanation' => 'GROUP BY crea un grupo por cada valor distinto.',
        'pro_tip' => 'Toda columna no agregada debe estar en GROUP BY.',
      ),
      1 => 
      array (
        'type' => 'sql',
        'question' => 'Cuenta cuántos users hay en total',
        'expected_output' => 'COUNT(*)
3',
        'hint' => 'SELECT COUNT(*) FROM users',
        'explanation' => 'COUNT(*) cuenta todas las filas.',
        'pro_tip' => 'COUNT(column) ignora NULLs en esa columna.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'sql-ddl',
    'order' => 6,
    'title' => 'CREATE TABLE y migraciones',
    'level' => 'Diseño',
    'minutes' => 30,
    'summary' => 'Esquema, tipos, claves primarias y foráneas.',
    'concepts' => 
    array (
      0 => 'ddl',
      1 => 'schema',
      2 => 'foreign-key',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DDL',
        'body' => 'CREATE, ALTER, DROP definen estructura — no datos.',
        'code' => 'CREATE TABLE posts (
  id INTEGER PRIMARY KEY,
  user_id INTEGER REFERENCES users(id)
);',
      ),
      1 => 
      array (
        'heading' => 'Migraciones',
        'body' => 'En Laravel/Symfony las migraciones versionan el esquema como Git versiona código.',
        'code' => 'CREATE TABLE products (id INTEGER PRIMARY KEY)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué define una clave primaria?',
        'options' => 
        array (
          0 => 'Identificador único de cada fila',
          1 => 'Solo decoración',
          2 => 'Índice opcional siempre',
        ),
        'answer' => 'Identificador único de cada fila',
        'explanation' => 'PRIMARY KEY garantiza unicidad y suele ser índice.',
        'pro_tip' => 'UUID vs auto-increment — debate clásico en APIs.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe CREATE TABLE products con id INTEGER PRIMARY KEY',
        'must_contain' => 
        array (
          0 => 'CREATE TABLE',
          1 => 'PRIMARY KEY',
        ),
        'hint' => 'CREATE TABLE products (id INTEGER PRIMARY KEY)',
        'explanation' => 'DDL crea la estructura antes de INSERT.',
        'pro_tip' => 'REFERENCES users(id) crea integridad referencial.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'sql-design',
    'order' => 7,
    'title' => 'Normalización y diseño',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => '1NF, relaciones 1:N y cuándo desnormalizar.',
    'concepts' => 
    array (
      0 => 'normalization',
      1 => '1nf',
      2 => 'denormalization',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Normalización',
        'body' => 'Evita duplicar datos: usuarios en una tabla, pedidos en otra, conectados por FK.',
        'code' => 'CREATE TABLE orders (
  id SERIAL PRIMARY KEY,
  user_id INTEGER NOT NULL REFERENCES users(id),
  total NUMERIC(10,2) NOT NULL
);',
      ),
      1 => 
      array (
        'heading' => 'Desnormalizar',
        'body' => 'A veces duplicas `user_name` en `orders` para lecturas rápidas — trade-off consciente.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Relación users → orders típica?',
        'options' => 
        array (
          0 => 'Uno a muchos (1:N)',
          1 => 'Muchos a muchos siempre',
          2 => 'Uno a uno solo',
        ),
        'answer' => 'Uno a muchos (1:N)',
        'explanation' => 'Un usuario tiene muchos pedidos.',
        'pro_tip' => 'N:M requiere tabla pivote (user_roles).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo desnormalizar?',
        'options' => 
        array (
          0 => 'Lecturas muy frecuentes y JOINs costosos',
          1 => 'Siempre al inicio',
          2 => 'Nunca en producción',
        ),
        'answer' => 'Lecturas muy frecuentes y JOINs costosos',
        'explanation' => 'Optimización medida — no prematura.',
        'pro_tip' => 'Caché (Redis) a menudo es mejor que desnormalizar.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'sql-fundamentos-produccion',
    'order' => 8,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de SQL avanzado.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en SQL avanzado a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — sql-fundamentos
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — sql-fundamentos
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
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
