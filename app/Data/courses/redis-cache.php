<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'rd-intro',
    'order' => 1,
    'title' => 'Qué es Redis y cuándo usarlo',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Base de datos en memoria, velocidad y casos de uso reales.',
    'concepts' => 
    array (
      0 => 'redis',
      1 => 'in-memory',
      2 => 'cache',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Redis',
        'body' => '**Redis** guarda datos en RAM — microsegundos de latencia. Ideal para caché, sesiones, colas y rate limiting.',
        'code' => '# Practica: rd-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'No reemplaza PostgreSQL',
        'body' => 'Redis es complemento: BD relacional para persistencia, Redis para velocidad y datos efímeros.',
        'code' => '# Practica: rd-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde almacena Redis los datos principalmente?',
        'options' => 
        array (
          0 => 'En memoria RAM',
          1 => 'En disco HDD siempre',
          2 => 'Solo en el navegador',
        ),
        'answer' => 'En memoria RAM',
        'explanation' => 'RAM = velocidad extrema; persistencia opcional con RDB/AOF.',
        'pro_tip' => 'Si Redis se reinicia sin persistencia, pierdes datos volátiles — diseña para eso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Caso de uso típico de Redis?',
        'options' => 
        array (
          0 => 'Caché de consultas frecuentes',
          1 => 'Almacenar videos grandes',
          2 => 'Compilar PHP',
        ),
        'answer' => 'Caché de consultas frecuentes',
        'explanation' => 'Evitas golpear PostgreSQL en cada request.',
        'pro_tip' => 'Laravel usa Redis para cache, sessions y queues.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'rd-strings',
    'order' => 2,
    'title' => 'Strings: SET, GET y TTL',
    'level' => 'Práctica',
    'minutes' => 25,
    'summary' => 'Comandos básicos y expiración automática.',
    'concepts' => 
    array (
      0 => 'set',
      1 => 'get',
      2 => 'ttl',
      3 => 'expire',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Comandos básicos',
        'body' => 'SET clave valor, GET clave, DEL clave. Simple como un diccionario gigante en RAM.',
        'code' => 'SET user:1:name "Ana"
GET user:1:name
EXPIRE user:1:name 3600',
      ),
      1 => 
      array (
        'heading' => 'TTL',
        'body' => 'EXPIRE o SET con EX — la clave desaparece sola. Perfecto para caché con caducidad.',
        'code' => 'SET cache:home "html"
EXPIRE cache:home 60',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace EXPIRE en Redis?',
        'options' => 
        array (
          0 => 'Define tiempo de vida de una clave',
          1 => 'Borra toda la BD',
          2 => 'Crea un índice',
        ),
        'answer' => 'Define tiempo de vida de una clave',
        'explanation' => 'TTL evita que la caché crezca infinitamente.',
        'pro_tip' => 'TTL en segundos: EXPIRE key 300 = 5 minutos.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe SET cache:home "html" y EXPIRE cache:home 60',
        'must_contain' => 
        array (
          0 => 'SET',
          1 => 'EXPIRE',
        ),
        'hint' => 'SET cache:home "html"
EXPIRE cache:home 60',
        'explanation' => 'Patrón caché con expiración de 60 segundos.',
        'pro_tip' => 'Nombra claves con namespace: user:123:profile.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'rd-structures',
    'order' => 3,
    'title' => 'Hashes, lists y sets',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Estructuras de datos más allá de strings.',
    'concepts' => 
    array (
      0 => 'hash',
      1 => 'list',
      2 => 'set',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hash',
        'body' => 'HSET user:1 name Ana email ana@test.com — objeto completo en una clave.',
        'code' => 'HSET product:42 name "Laptop" price 1200
HGET product:42 price',
      ),
      1 => 
      array (
        'heading' => 'List y Set',
        'body' => 'LPUSH cola:emails job1 — colas FIFO. SADD tags:php redis docker — conjuntos únicos.',
        'code' => '# Practica: rd-structures
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué estructura modela un objeto con campos?',
        'options' => 
        array (
          0 => 'Hash',
          1 => 'String solo',
          2 => 'List',
        ),
        'answer' => 'Hash',
        'explanation' => 'Hash = mapa campo→valor bajo una clave.',
        'pro_tip' => 'HGETALL devuelve todos los campos de un hash.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué estructura sirve para colas?',
        'options' => 
        array (
          0 => 'List (LPUSH/RPOP)',
          1 => 'Set',
          2 => 'String',
        ),
        'answer' => 'List (LPUSH/RPOP)',
        'explanation' => 'List es FIFO/LIFO — base de job queues.',
        'pro_tip' => 'Laravel Horizon usa Redis lists para colas.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'rd-cache',
    'order' => 4,
    'title' => 'Patrones de caché',
    'level' => 'Arquitectura',
    'minutes' => 35,
    'summary' => 'Cache-aside, invalidación y stampede.',
    'concepts' => 
    array (
      0 => 'cache-aside',
      1 => 'invalidation',
      2 => 'stampede',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Cache-aside',
        'body' => '1) Busca en Redis. 2) Si miss, lee BD. 3) Guarda en Redis. 4) Devuelve dato.',
        'code' => '# Practica: rd-cache
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Invalidación',
        'body' => 'Al actualizar BD, borra clave Redis (DEL) o usa TTL corto. Consistencia > velocidad ciega.',
        'code' => '# Practica: rd-cache
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es cache miss?',
        'options' => 
        array (
          0 => 'La clave no existe en Redis — hay que ir a la BD',
          1 => 'Error fatal',
          2 => 'Redis caído',
        ),
        'answer' => 'La clave no existe en Redis — hay que ir a la BD',
        'explanation' => 'Miss = oportunidad de poblar caché.',
        'pro_tip' => 'Cache stampede: muchos misses simultáneos — usa locks o probabilistic early expiration.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo invalidar caché?',
        'options' => 
        array (
          0 => 'Cuando los datos en BD cambian',
          1 => 'Nunca',
          2 => 'Solo los domingos',
        ),
        'answer' => 'Cuando los datos en BD cambian',
        'explanation' => 'Sin invalidación sirves datos obsoletos.',
        'pro_tip' => 'Cache::forget("users:1") en Laravel tras update.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'rd-sessions',
    'order' => 5,
    'title' => 'Sesiones y rate limiting',
    'level' => 'Seguridad',
    'minutes' => 30,
    'summary' => 'Sesiones distribuidas y límites por IP.',
    'concepts' => 
    array (
      0 => 'session',
      1 => 'rate-limit',
      2 => 'counter',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Sesiones en Redis',
        'body' => 'Varios servidores PHP comparten sesiones vía Redis — escalado horizontal sin sticky sessions.',
        'code' => 'INCR rate:login:192.168.1.1',
      ),
      1 => 
      array (
        'heading' => 'Rate limiting',
        'body' => 'INCR rate:ip:1.2.3.4 + EXPIRE 60 — cuenta requests por minuto. Bloquea brute force.',
        'code' => 'INCR rate:login:192.168.1.1',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué Redis para sesiones en cluster?',
        'options' => 
        array (
          0 => 'Todos los nodos leen la misma sesión',
          1 => 'Es gratis',
          2 => 'No necesita PHP',
        ),
        'answer' => 'Todos los nodos leen la misma sesión',
        'explanation' => 'Sesiones en archivo local no escalan con 3 servidores.',
        'pro_tip' => 'SESSION_DRIVER=redis en Laravel .env',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe INCR para contar requests',
        'must_contain' => 
        array (
          0 => 'INCR',
        ),
        'hint' => 'INCR rate:login:192.168.1.1',
        'explanation' => 'INCR es atómico — seguro con concurrencia.',
        'pro_tip' => 'Combina con EXPIRE para ventana deslizante.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'rd-php',
    'order' => 6,
    'title' => 'Redis en PHP y Laravel',
    'level' => 'Integración',
    'minutes' => 30,
    'summary' => 'Predis/PhpRedis, Cache facade y colas.',
    'concepts' => 
    array (
      0 => 'predis',
      1 => 'laravel-cache',
      2 => 'queue',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PHP + Redis',
        'body' => 'Extensión **phpredis** o librería Predis. Laravel abstrae con `Cache::get()` y `Redis::`.',
        'code' => 'Cache::remember(\'users.top\', 3600, fn () => User::top10());',
      ),
      1 => 
      array (
        'heading' => 'Colas',
        'body' => 'QUEUE_CONNECTION=redis — jobs en background con `php artisan queue:work`.',
        'code' => '# Practica: rd-php
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Facade Laravel para caché?',
        'options' => 
        array (
          0 => 'Cache',
          1 => 'Redis only',
          2 => 'Session only',
        ),
        'answer' => 'Cache',
        'explanation' => 'Cache:: puede usar redis, file o database como driver.',
        'pro_tip' => 'php artisan config:cache en prod.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Comando para procesar colas Laravel?',
        'options' => 
        array (
          0 => 'php artisan queue:work',
          1 => 'composer install',
          2 => 'redis-cli flush',
        ),
        'answer' => 'php artisan queue:work',
        'explanation' => 'Worker consume jobs de Redis.',
        'pro_tip' => 'Supervisor o systemd mantiene queue:work vivo.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'rd-streams',
    'order' => 7,
    'title' => 'Redis Streams',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Streams, consumer groups y procesamiento durable.',
    'concepts' => 
    array (
      0 => 'streams',
      1 => 'consumer-group',
      2 => 'queue',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Streams',
        'body' => 'Redis Streams guarda eventos ordenados con IDs. Es útil para colas ligeras y event logs pequeños.',
        'code' => 'XADD orders * type created order_id 123 user_id 42
XREAD COUNT 10 STREAMS orders 0',
      ),
      1 => 
      array (
        'heading' => 'Consumer groups',
        'body' => 'Consumer groups reparten mensajes entre workers y permiten reintentos con pending entries.',
        'code' => 'XGROUP CREATE orders workers $ MKSTREAM
XREADGROUP GROUP workers worker-1 COUNT 10 STREAMS orders >
XACK orders workers 1690000000000-0',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando añade eventos a un Stream?',
        'options' => 
        array (
          0 => 'XADD',
          1 => 'LPUSH',
          2 => 'SET',
        ),
        'answer' => 'XADD',
        'explanation' => 'XADD inserta un evento con ID ordenado.',
        'pro_tip' => 'Usa MAXLEN aproximado para evitar streams infinitos.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe XREADGROUP',
        'must_contain' => 
        array (
          0 => 'XREADGROUP',
        ),
        'hint' => 'XREADGROUP GROUP workers worker-1 STREAMS orders >',
        'explanation' => 'Consumer groups son clave para procesar con varios workers.',
        'pro_tip' => 'Monitorea XPENDING para detectar mensajes atascados.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'rd-cluster',
    'order' => 8,
    'title' => 'Redis en cluster y HA',
    'level' => 'Producción',
    'minutes' => 40,
    'summary' => 'Replication, Sentinel, Cluster mode y failover.',
    'concepts' => 
    array (
      0 => 'replication',
      1 => 'sentinel',
      2 => 'cluster',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Alta disponibilidad',
        'body' => 'Redis replica datos a followers. Sentinel detecta fallos y promueve replica a primary.',
        'code' => 'replicaof redis-primary 6379
sentinel monitor mymaster redis-primary 6379 2
sentinel down-after-milliseconds mymaster 5000',
      ),
      1 => 
      array (
        'heading' => 'Cluster mode',
        'body' => 'Redis Cluster divide keyspace en 16384 slots. Escala horizontal, pero limita operaciones multi-key.',
        'code' => 'redis-cli --cluster create \\
  10.0.0.1:6379 10.0.0.2:6379 10.0.0.3:6379 \\
  --cluster-replicas 1',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace Redis Sentinel?',
        'options' => 
        array (
          0 => 'Failover automático',
          1 => 'Compilar PHP',
          2 => 'Crear índices SQL',
        ),
        'answer' => 'Failover automático',
        'explanation' => 'Sentinel observa primaries y promueve replicas si fallan.',
        'pro_tip' => 'Managed Redis suele ocultar Sentinel, pero el concepto importa.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Redis Cluster usa slots cuántos?',
        'options' => 
        array (
          0 => '16384',
          1 => '256',
          2 => '1 por DB',
        ),
        'answer' => '16384',
        'explanation' => 'Cada key cae en un hash slot distribuido entre nodos.',
        'pro_tip' => 'Usa hash tags {user:42}:a y {user:42}:b para multi-key mismo slot.',
      ),
    ),
  ),
);
