<?php

declare(strict_types=1);

return [
    [
        'slug' => 'rd-intro',
        'order' => 1,
        'title' => 'Qué es Redis y cuándo usarlo',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Base de datos en memoria, velocidad y casos de uso reales.',
        'concepts' => ['redis', 'in-memory', 'cache'],
        'sections' => [
            ['heading' => 'Redis', 'body' => '**Redis** guarda datos en RAM — microsegundos de latencia. Ideal para caché, sesiones, colas y rate limiting.'],
            ['heading' => 'No reemplaza PostgreSQL', 'body' => 'Redis es complemento: BD relacional para persistencia, Redis para velocidad y datos efímeros.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde almacena Redis los datos principalmente?', 'options' => ['En memoria RAM', 'En disco HDD siempre', 'Solo en el navegador'], 'answer' => 'En memoria RAM', 'explanation' => 'RAM = velocidad extrema; persistencia opcional con RDB/AOF.', 'pro_tip' => 'Si Redis se reinicia sin persistencia, pierdes datos volátiles — diseña para eso.'],
            ['type' => 'choice', 'question' => '¿Caso de uso típico de Redis?', 'options' => ['Caché de consultas frecuentes', 'Almacenar videos grandes', 'Compilar PHP'], 'answer' => 'Caché de consultas frecuentes', 'explanation' => 'Evitas golpear PostgreSQL en cada request.', 'pro_tip' => 'Laravel usa Redis para cache, sessions y queues.'],
        ],
    ],
    [
        'slug' => 'rd-strings',
        'order' => 2,
        'title' => 'Strings: SET, GET y TTL',
        'level' => 'Práctica',
        'minutes' => 25,
        'summary' => 'Comandos básicos y expiración automática.',
        'concepts' => ['set', 'get', 'ttl', 'expire'],
        'sections' => [
            ['heading' => 'Comandos básicos', 'body' => 'SET clave valor, GET clave, DEL clave. Simple como un diccionario gigante en RAM.', 'code' => "SET user:1:name \"Ana\"\nGET user:1:name\nEXPIRE user:1:name 3600"],
            ['heading' => 'TTL', 'body' => 'EXPIRE o SET con EX — la clave desaparece sola. Perfecto para caché con caducidad.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace EXPIRE en Redis?', 'options' => ['Define tiempo de vida de una clave', 'Borra toda la BD', 'Crea un índice'], 'answer' => 'Define tiempo de vida de una clave', 'explanation' => 'TTL evita que la caché crezca infinitamente.', 'pro_tip' => 'TTL en segundos: EXPIRE key 300 = 5 minutos.'],
            ['type' => 'contains', 'question' => 'Escribe SET cache:home "html" y EXPIRE cache:home 60', 'must_contain' => ['SET', 'EXPIRE'], 'hint' => "SET cache:home \"html\"\nEXPIRE cache:home 60", 'explanation' => 'Patrón caché con expiración de 60 segundos.', 'pro_tip' => 'Nombra claves con namespace: user:123:profile.'],
        ],
    ],
    [
        'slug' => 'rd-structures',
        'order' => 3,
        'title' => 'Hashes, lists y sets',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Estructuras de datos más allá de strings.',
        'concepts' => ['hash', 'list', 'set'],
        'sections' => [
            ['heading' => 'Hash', 'body' => 'HSET user:1 name Ana email ana@test.com — objeto completo en una clave.', 'code' => "HSET product:42 name \"Laptop\" price 1200\nHGET product:42 price"],
            ['heading' => 'List y Set', 'body' => 'LPUSH cola:emails job1 — colas FIFO. SADD tags:php redis docker — conjuntos únicos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué estructura modela un objeto con campos?', 'options' => ['Hash', 'String solo', 'List'], 'answer' => 'Hash', 'explanation' => 'Hash = mapa campo→valor bajo una clave.', 'pro_tip' => 'HGETALL devuelve todos los campos de un hash.'],
            ['type' => 'choice', 'question' => '¿Qué estructura sirve para colas?', 'options' => ['List (LPUSH/RPOP)', 'Set', 'String'], 'answer' => 'List (LPUSH/RPOP)', 'explanation' => 'List es FIFO/LIFO — base de job queues.', 'pro_tip' => 'Laravel Horizon usa Redis lists para colas.'],
        ],
    ],
    [
        'slug' => 'rd-cache',
        'order' => 4,
        'title' => 'Patrones de caché',
        'level' => 'Arquitectura',
        'minutes' => 35,
        'summary' => 'Cache-aside, invalidación y stampede.',
        'concepts' => ['cache-aside', 'invalidation', 'stampede'],
        'sections' => [
            ['heading' => 'Cache-aside', 'body' => '1) Busca en Redis. 2) Si miss, lee BD. 3) Guarda en Redis. 4) Devuelve dato.'],
            ['heading' => 'Invalidación', 'body' => 'Al actualizar BD, borra clave Redis (DEL) o usa TTL corto. Consistencia > velocidad ciega.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué es cache miss?', 'options' => ['La clave no existe en Redis — hay que ir a la BD', 'Error fatal', 'Redis caído'], 'answer' => 'La clave no existe en Redis — hay que ir a la BD', 'explanation' => 'Miss = oportunidad de poblar caché.', 'pro_tip' => 'Cache stampede: muchos misses simultáneos — usa locks o probabilistic early expiration.'],
            ['type' => 'choice', 'question' => '¿Cuándo invalidar caché?', 'options' => ['Cuando los datos en BD cambian', 'Nunca', 'Solo los domingos'], 'answer' => 'Cuando los datos en BD cambian', 'explanation' => 'Sin invalidación sirves datos obsoletos.', 'pro_tip' => 'Cache::forget("users:1") en Laravel tras update.'],
        ],
    ],
    [
        'slug' => 'rd-sessions',
        'order' => 5,
        'title' => 'Sesiones y rate limiting',
        'level' => 'Seguridad',
        'minutes' => 30,
        'summary' => 'Sesiones distribuidas y límites por IP.',
        'concepts' => ['session', 'rate-limit', 'counter'],
        'sections' => [
            ['heading' => 'Sesiones en Redis', 'body' => 'Varios servidores PHP comparten sesiones vía Redis — escalado horizontal sin sticky sessions.'],
            ['heading' => 'Rate limiting', 'body' => 'INCR rate:ip:1.2.3.4 + EXPIRE 60 — cuenta requests por minuto. Bloquea brute force.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué Redis para sesiones en cluster?', 'options' => ['Todos los nodos leen la misma sesión', 'Es gratis', 'No necesita PHP'], 'answer' => 'Todos los nodos leen la misma sesión', 'explanation' => 'Sesiones en archivo local no escalan con 3 servidores.', 'pro_tip' => 'SESSION_DRIVER=redis en Laravel .env'],
            ['type' => 'contains', 'question' => 'Escribe INCR para contar requests', 'must_contain' => ['INCR'], 'hint' => 'INCR rate:login:192.168.1.1', 'explanation' => 'INCR es atómico — seguro con concurrencia.', 'pro_tip' => 'Combina con EXPIRE para ventana deslizante.'],
        ],
    ],
    [
        'slug' => 'rd-php',
        'order' => 6,
        'title' => 'Redis en PHP y Laravel',
        'level' => 'Integración',
        'minutes' => 30,
        'summary' => 'Predis/PhpRedis, Cache facade y colas.',
        'concepts' => ['predis', 'laravel-cache', 'queue'],
        'sections' => [
            ['heading' => 'PHP + Redis', 'body' => 'Extensión **phpredis** o librería Predis. Laravel abstrae con `Cache::get()` y `Redis::`.', 'code' => "Cache::remember('users.top', 3600, fn () => User::top10());"],
            ['heading' => 'Colas', 'body' => 'QUEUE_CONNECTION=redis — jobs en background con `php artisan queue:work`.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Facade Laravel para caché?', 'options' => ['Cache', 'Redis only', 'Session only'], 'answer' => 'Cache', 'explanation' => 'Cache:: puede usar redis, file o database como driver.', 'pro_tip' => 'php artisan config:cache en prod.'],
            ['type' => 'choice', 'question' => '¿Comando para procesar colas Laravel?', 'options' => ['php artisan queue:work', 'composer install', 'redis-cli flush'], 'answer' => 'php artisan queue:work', 'explanation' => 'Worker consume jobs de Redis.', 'pro_tip' => 'Supervisor o systemd mantiene queue:work vivo.'],
        ],
    ],
];
