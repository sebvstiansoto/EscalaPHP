<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ep-composer',
    'order' => 1,
    'title' => 'Composer: el npm de PHP',
    'level' => 'Ecosistema',
    'minutes' => 20,
    'summary' => 'Gestión de dependencias, autoload PSR-4 y vendor/.',
    'concepts' => 
    array (
      0 => 'composer',
      1 => 'packagist',
      2 => 'autoload',
      3 => 'vendor',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué Composer?',
        'body' => 'Ningún proyecto PHP serio reinventa la rueda. **Composer** instala librerías (Laravel, PHPUnit, Guzzle) y las carga automáticamente.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-composer\';',
      ),
      1 => 
      array (
        'heading' => 'composer.json',
        'body' => 'Es el manifiesto del proyecto: dependencias, scripts y autoload. Similar a `package.json` en Node.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-composer\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué archivo define las dependencias PHP de un proyecto?',
        'options' => 
        array (
          0 => 'composer.json',
          1 => 'package.json',
          2 => 'requirements.txt',
        ),
        'answer' => 'composer.json',
        'explanation' => '**composer.json** es el estándar en PHP. Laravel, Symfony y EscalaPHP lo usan.',
        'pro_tip' => 'Nunca subas la carpeta `vendor/` a Git — solo `composer.json` y `composer.lock`.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando instala dependencias con Composer?',
        'options' => 
        array (
          0 => 'composer install',
          1 => 'npm install',
          2 => 'pip install',
        ),
        'answer' => 'composer install',
        'explanation' => '`composer install` lee `composer.lock` y instala versiones exactas.',
        'pro_tip' => 'En CI/CD siempre corre `composer install --no-dev` en producción.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ep-git',
    'order' => 2,
    'title' => 'Git en equipos reales',
    'level' => 'Colaboración',
    'minutes' => 25,
    'summary' => 'Branches, pull requests y flujo GitFlow simplificado.',
    'concepts' => 
    array (
      0 => 'git',
      1 => 'branch',
      2 => 'merge',
      3 => 'pull-request',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Git no es opcional',
        'body' => 'En empresas grandes todo pasa por **Pull Requests**: revisión de código antes de fusionar a `main`.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-git\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando crea una rama nueva en Git?',
        'options' => 
        array (
          0 => 'git checkout -b feature/x',
          1 => 'git branch delete',
          2 => 'git new branch',
        ),
        'answer' => 'git checkout -b feature/x',
        'explanation' => 'Las ramas aislan tu trabajo. `feature/nombre` es convención común.',
        'pro_tip' => 'Nunca commits directo a `main` en producción — siempre PR.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ep-laravel-pro',
    'order' => 3,
    'title' => 'Laravel profesional',
    'level' => 'Framework',
    'minutes' => 40,
    'summary' => 'Eloquent, migraciones, auth, policies y APIs REST.',
    'concepts' => 
    array (
      0 => 'laravel',
      1 => 'eloquent',
      2 => 'migration',
      3 => 'middleware',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Más allá del tutorial',
        'body' => 'Laravel en empresa usa **Eloquent ORM**, migraciones versionadas, middleware de auth y Resources para APIs.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-laravel-pro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué componente Laravel mapea tablas a clases PHP?',
        'options' => 
        array (
          0 => 'Eloquent',
          1 => 'Blade',
          2 => 'Artisan',
        ),
        'answer' => 'Eloquent',
        'explanation' => '**Eloquent** es el ORM. Un modelo `User` representa la tabla `users`.',
        'pro_tip' => 'Usa `$fillable` o `$guarded` para evitar mass assignment vulnerabilities.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando crea una migración de BD en Laravel?',
        'options' => 
        array (
          0 => 'php artisan make:migration',
          1 => 'composer migrate',
          2 => 'php migrate new',
        ),
        'answer' => 'php artisan make:migration',
        'explanation' => 'Las **migraciones** versionan el esquema de BD como código.',
        'pro_tip' => 'En equipos, migraciones son revisadas en PR igual que código PHP.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ep-symfony',
    'order' => 4,
    'title' => 'Symfony: PHP en grandes corporaciones',
    'level' => 'Framework',
    'minutes' => 30,
    'summary' => 'Bundles, DI container y cuándo elegir Symfony vs Laravel.',
    'concepts' => 
    array (
      0 => 'symfony',
      1 => 'bundle',
      2 => 'dependency-injection',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Symfony vs Laravel',
        'body' => '**Symfony** es modular y muy usado en banca y telcos. Laravel es más productivo para startups. Muchas piezas de Laravel vienen de Symfony.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-symfony\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué patrón usa Symfony para inyectar dependencias?',
        'options' => 
        array (
          0 => 'Dependency Injection Container',
          1 => 'Global variables',
          2 => 'Copy-paste',
        ),
        'answer' => 'Dependency Injection Container',
        'explanation' => 'El **DI Container** resuelve clases automáticamente — clave en apps grandes.',
        'pro_tip' => 'Entender DI te sirve en Laravel, Symfony y cualquier framework moderno.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ep-postgresql',
    'order' => 5,
    'title' => 'PostgreSQL en producción',
    'level' => 'Datos',
    'minutes' => 35,
    'summary' => 'Migrar de SQLite, índices, conexiones y pooling.',
    'concepts' => 
    array (
      0 => 'postgresql',
      1 => 'index',
      2 => 'connection-pool',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SQLite → PostgreSQL',
        'body' => 'SQLite enseña conceptos; **PostgreSQL** aguanta millones de filas, concurrencia y réplicas.',
        'code' => '<?php
$pdo = new PDO(\'sqlite::memory:\');
$stmt = $pdo->prepare(\'SELECT * FROM users WHERE id = ?\');
$stmt->execute([1]);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué usar PostgreSQL en vez de SQLite en producción?',
        'options' => 
        array (
          0 => 'Concurrencia y escala',
          1 => 'Es más fácil de instalar',
          2 => 'No necesita SQL',
        ),
        'answer' => 'Concurrencia y escala',
        'explanation' => 'PostgreSQL maneja muchas escrituras simultáneas; SQLite es para un solo archivo local.',
        'pro_tip' => 'EscalaPHP ya soporta `DB_DRIVER=pgsql` en `.env`.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ep-redis',
    'order' => 6,
    'title' => 'Redis: caché, sesiones y colas',
    'level' => 'Escala',
    'minutes' => 30,
    'summary' => 'Redis en RAM, Laravel Horizon y patrones de invalidación.',
    'concepts' => 
    array (
      0 => 'redis',
      1 => 'cache',
      2 => 'session',
      3 => 'queue',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Redis en empresas',
        'body' => 'Facebook, Twitter y Laravel usan **Redis** para caché ultrarrápida, sesiones distribuidas y colas.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-redis\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué ventaja tiene Redis sobre guardar caché en archivos?',
        'options' => 
        array (
          0 => 'Acceso en memoria compartida entre servidores',
          1 => 'Es gratis',
          2 => 'No necesita configuración',
        ),
        'answer' => 'Acceso en memoria compartida entre servidores',
        'explanation' => 'Con varios servidores PHP, Redis centraliza la caché.',
        'pro_tip' => 'Laravel soporta Redis con una línea en `.env`: `CACHE_DRIVER=redis`.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'ep-docker',
    'order' => 7,
    'title' => 'Docker para apps PHP',
    'level' => 'DevOps',
    'minutes' => 35,
    'summary' => 'Dockerfile multi-stage, compose con PHP+nginx+postgres.',
    'concepts' => 
    array (
      0 => 'docker',
      1 => 'dockerfile',
      2 => 'compose',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Containerizar Laravel/PHP',
        'body' => 'Un **Dockerfile** empaqueta PHP, extensiones y tu código. `docker-compose` levanta BD y Redis juntos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-docker\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué archivo define cómo construir una imagen Docker?',
        'options' => 
        array (
          0 => 'Dockerfile',
          1 => 'docker-compose.yml',
          2 => 'Makefile',
        ),
        'answer' => 'Dockerfile',
        'explanation' => '**Dockerfile** = receta de la imagen. **docker-compose.yml** = orquestar varios contenedores.',
        'pro_tip' => 'EscalaPHP ya incluye Dockerfile y docker-compose en la raíz.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'ep-nginx',
    'order' => 8,
    'title' => 'Nginx + PHP-FPM',
    'level' => 'DevOps',
    'minutes' => 25,
    'summary' => 'Servidor web delante de PHP en producción.',
    'concepts' => 
    array (
      0 => 'nginx',
      1 => 'php-fpm',
      2 => 'reverse-proxy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Arquitectura real',
        'body' => '**Nginx** recibe HTTP y pasa PHP a **PHP-FPM** por socket. Así escalan Facebook y WordPress.com.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-nginx\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace PHP-FPM?',
        'options' => 
        array (
          0 => 'Ejecuta procesos PHP bajo demanda',
          1 => 'Compila JavaScript',
          2 => 'Gestiona DNS',
        ),
        'answer' => 'Ejecuta procesos PHP bajo demanda',
        'explanation' => 'FPM = FastCGI Process Manager. Pool de workers PHP.',
        'pro_tip' => 'Nunca uses `php -S` en producción — solo desarrollo.',
      ),
    ),
  ),
  8 => 
  array (
    'slug' => 'ep-cicd',
    'order' => 9,
    'title' => 'CI/CD con GitHub Actions',
    'level' => 'DevOps',
    'minutes' => 30,
    'summary' => 'Tests automáticos, lint y deploy en cada push.',
    'concepts' => 
    array (
      0 => 'ci',
      1 => 'cd',
      2 => 'github-actions',
      3 => 'pipeline',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pipeline profesional',
        'body' => 'Cada push corre **PHPUnit**, análisis estático y despliega si pasa. EscalaPHP ya tiene `.github/workflows/ci.yml`.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-cicd\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué significa CI?',
        'options' => 
        array (
          0 => 'Integración Continua',
          1 => 'Código Interno',
          2 => 'Container Image',
        ),
        'answer' => 'Integración Continua',
        'explanation' => '**CI** fusiona y prueba código automáticamente en cada cambio.',
        'pro_tip' => 'CD (Continuous Deployment) lleva eso a producción automáticamente.',
      ),
    ),
  ),
  9 => 
  array (
    'slug' => 'ep-kubernetes',
    'order' => 10,
    'title' => 'Kubernetes intro',
    'level' => 'Escala',
    'minutes' => 35,
    'summary' => 'Pods, services, deployments — cuándo pasar de Docker a K8s.',
    'concepts' => 
    array (
      0 => 'kubernetes',
      1 => 'pod',
      2 => 'deployment',
      3 => 'service',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Cuándo K8s?',
        'body' => 'Con **1 app y 1 servidor**, Docker basta. Con **20 microservicios** y autoescalado, entra **Kubernetes**.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-kubernetes\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué unidad mínima ejecuta Kubernetes?',
        'options' => 
        array (
          0 => 'Pod',
          1 => 'Dockerfile',
          2 => 'Branch',
        ),
        'answer' => 'Pod',
        'explanation' => 'Un **Pod** suele tener uno o más contenedores Docker.',
        'pro_tip' => 'Aprende Docker bien antes de K8s — K8s orquesta contenedores.',
      ),
    ),
  ),
  10 => 
  array (
    'slug' => 'ep-arquitectura',
    'order' => 11,
    'title' => 'Arquitectura en empresas grandes',
    'level' => 'Senior',
    'minutes' => 40,
    'summary' => 'Microservicios, monolito modular, eventos y equipos.',
    'concepts' => 
    array (
      0 => 'microservices',
      1 => 'monolith',
      2 => 'ddd',
      3 => 'events',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Monolito vs microservicios',
        'body' => 'Empieza con **monolito modular** (Laravel bien organizado). Microservicios cuando el equipo y tráfico lo exigen.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-arquitectura\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué recomiendan la mayoría de seniors para startups?',
        'options' => 
        array (
          0 => 'Monolito modular primero',
          1 => '50 microservicios desde día 1',
          2 => 'Sin base de datos',
        ),
        'answer' => 'Monolito modular primero',
        'explanation' => 'Un Laravel bien estructurado escala lejos antes de necesitar microservicios.',
        'pro_tip' => 'Shopify fue monolito Ruby años antes de dividir servicios.',
      ),
      1 => 
      array (
        'type' => 'min_length',
        'question' => 'Escribe en una frase tu visión de producto a escala (mín. 15 caracteres).',
        'min_length' => 15,
        'hint' => 'Ej: Quiero una plataforma educativa multi-curso con millones de usuarios.',
        'explanation' => 'Tener visión de arquitectura te guía decisiones técnicas.',
        'pro_tip' => 'Revisa esta meta cuando elijas Docker vs K8s, SQL vs NoSQL, etc.',
      ),
    ),
  ),
);
