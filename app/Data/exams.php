<?php

declare(strict_types=1);

return array (
  'php-fundamentos-final' => 
  array (
    'slug' => 'php-fundamentos-final',
    'title' => 'Examen final — PHP desde cero',
    'course' => 'php-fundamentos',
    'pass_score' => 7,
    'time_minutes' => 30,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => '¿Qué imprime echo "Hola";?',
        'answer' => 'hola',
        'accept' => 
        array (
          0 => 'Hola',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Operador de comparación estricta en PHP',
        'answer' => '===',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => '¿Cómo se llama el gestor de dependencias de PHP?',
        'answer' => 'composer',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Método HTTP para enviar formularios con datos sensibles',
        'answer' => 'post',
        'accept' => 
        array (
          0 => 'POST',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => '¿Qué significa MVC?',
        'answer' => 'modelo vista controlador',
        'accept' => 
        array (
          0 => 'model view controller',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Función para prevenir SQL injection con PDO',
        'answer' => 'prepare',
        'accept' => 
        array (
          0 => 'prepared statements',
        ),
        'points' => 2,
      ),
      6 => 
      array (
        'id' => 'q7',
        'q' => 'Extensión para arrays asociativos en foreach: key =>',
        'answer' => 'value',
        'accept' => 
        array (
          0 => 'valor',
        ),
        'points' => 1,
      ),
      7 => 
      array (
        'id' => 'q8',
        'q' => 'Código HTTP de recurso no encontrado',
        'answer' => '404',
        'points' => 1,
      ),
      8 => 
      array (
        'id' => 'q9',
        'q' => '¿Qué hace htmlspecialchars?',
        'answer' => 'escapa html',
        'accept' => 
        array (
          0 => 'previene xss',
          1 => 'escape html',
        ),
        'points' => 2,
      ),
      9 => 
      array (
        'id' => 'q10',
        'q' => 'Archivo de configuración de Composer',
        'answer' => 'composer.json',
        'points' => 2,
      ),
    ),
  ),
  'python-backend-final' => 
  array (
    'slug' => 'python-backend-final',
    'title' => 'Examen final — Python Backend',
    'course' => 'python-backend',
    'pass_score' => 6,
    'time_minutes' => 30,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Comando para crear virtualenv',
        'answer' => 'python -m venv',
        'accept' => 
        array (
          0 => 'venv',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Framework async para APIs en Python',
        'answer' => 'fastapi',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Tipo inmutable de secuencia',
        'answer' => 'tuple',
        'accept' => 
        array (
          0 => 'tupla',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Gestor de paquetes Python',
        'answer' => 'pip',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Decorador se escribe con @',
        'answer' => 'decorator',
        'accept' => 
        array (
          0 => 'decorador',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'ORM popular en Django',
        'answer' => 'django orm',
        'accept' => 
        array (
          0 => 'orm',
        ),
        'points' => 2,
      ),
      6 => 
      array (
        'id' => 'q7',
        'q' => 'Status code 201 significa',
        'answer' => 'created',
        'accept' => 
        array (
          0 => 'creado',
        ),
        'points' => 1,
      ),
      7 => 
      array (
        'id' => 'q8',
        'q' => 'Formato de intercambio ligero',
        'answer' => 'json',
        'points' => 1,
      ),
    ),
  ),
  'docker-final' => 
  array (
    'slug' => 'docker-final',
    'title' => 'Examen final — Docker',
    'course' => 'docker',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Archivo de definición de imagen',
        'answer' => 'dockerfile',
        'accept' => 
        array (
          0 => 'Dockerfile',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Comando para listar contenedores activos',
        'answer' => 'docker ps',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Orquestar varios servicios localmente',
        'answer' => 'docker compose',
        'accept' => 
        array (
          0 => 'docker-compose',
        ),
        'points' => 2,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Capa de solo lectura de una imagen',
        'answer' => 'layer',
        'accept' => 
        array (
          0 => 'capa',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Puerto por defecto HTTP',
        'answer' => '80',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Volumen sirve para',
        'answer' => 'persistir datos',
        'accept' => 
        array (
          0 => 'persistencia',
        ),
        'points' => 2,
      ),
    ),
    'time_minutes' => 24,
  ),
  'laravel-fundamentos-final' => 
  array (
    'slug' => 'laravel-fundamentos-final',
    'title' => 'Examen final — Laravel',
    'course' => 'laravel-fundamentos',
    'pass_score' => 6,
    'time_minutes' => 25,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'CLI de Laravel',
        'answer' => 'artisan',
        'accept' => 
        array (
          0 => 'php artisan',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'ORM de Laravel',
        'answer' => 'eloquent',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Motor de plantillas Laravel',
        'answer' => 'blade',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Archivo de rutas web',
        'answer' => 'routes/web.php',
        'accept' => 
        array (
          0 => 'web.php',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Comando migrar BD',
        'answer' => 'php artisan migrate',
        'accept' => 
        array (
          0 => 'migrate',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Paquete auth API Laravel',
        'answer' => 'sanctum',
        'accept' => 
        array (
          0 => 'laravel sanctum',
        ),
        'points' => 1,
      ),
      6 => 
      array (
        'id' => 'q7',
        'q' => 'Directiva Blade contra CSRF',
        'answer' => 'csrf',
        'accept' => 
        array (
          0 => '@csrf',
        ),
        'points' => 2,
      ),
      7 => 
      array (
        'id' => 'q8',
        'q' => 'Middleware que exige login',
        'answer' => 'auth',
        'points' => 1,
      ),
    ),
  ),
  'react-frontend-final' => 
  array (
    'slug' => 'react-frontend-final',
    'title' => 'Examen final — React',
    'course' => 'react-frontend',
    'pass_score' => 6,
    'time_minutes' => 25,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Hook de estado local',
        'answer' => 'usestate',
        'accept' => 
        array (
          0 => 'useState',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Qué retorna un componente',
        'answer' => 'jsx',
        'accept' => 
        array (
          0 => 'JSX',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'SPA significa',
        'answer' => 'single page application',
        'accept' => 
        array (
          0 => 'single page app',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Formato típico de API para React',
        'answer' => 'json',
        'accept' => 
        array (
          0 => 'JSON',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Hook para efectos secundarios',
        'answer' => 'useeffect',
        'accept' => 
        array (
          0 => 'useEffect',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Hook para contexto',
        'answer' => 'usecontext',
        'accept' => 
        array (
          0 => 'useContext',
        ),
        'points' => 1,
      ),
      6 => 
      array (
        'id' => 'q7',
        'q' => 'Atributo class en JSX',
        'answer' => 'classname',
        'accept' => 
        array (
          0 => 'className',
        ),
        'points' => 1,
      ),
      7 => 
      array (
        'id' => 'q8',
        'q' => 'Librería routing React común',
        'answer' => 'react router',
        'accept' => 
        array (
          0 => 'react-router',
        ),
        'points' => 2,
      ),
    ),
  ),
  'seguridad-web-final' => 
  array (
    'slug' => 'seguridad-web-final',
    'title' => 'Examen final — Seguridad web',
    'course' => 'seguridad-web',
    'pass_score' => 6,
    'time_minutes' => 30,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Lista de vulnerabilidades web famosa',
        'answer' => 'owasp',
        'accept' => 
        array (
          0 => 'owasp top 10',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Ataque que inyecta script en navegador',
        'answer' => 'xss',
        'accept' => 
        array (
          0 => 'cross site scripting',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Defensa SQL injection PHP',
        'answer' => 'prepared statements',
        'accept' => 
        array (
          0 => 'prepare',
          1 => 'pdo',
        ),
        'points' => 2,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Token en formularios POST',
        'answer' => 'csrf',
        'accept' => 
        array (
          0 => 'csrf token',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Función hash passwords PHP',
        'answer' => 'password_hash',
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Header anti clickjacking',
        'answer' => 'x-frame-options',
        'accept' => 
        array (
          0 => 'X-Frame-Options',
        ),
        'points' => 1,
      ),
      6 => 
      array (
        'id' => 'q7',
        'q' => 'Fuerza HTTPS en navegador',
        'answer' => 'hsts',
        'accept' => 
        array (
          0 => 'strict-transport-security',
        ),
        'points' => 1,
      ),
      7 => 
      array (
        'id' => 'q8',
        'q' => 'JWT payload es',
        'answer' => 'legible',
        'accept' => 
        array (
          0 => 'base64',
          1 => 'no encriptado',
        ),
        'points' => 1,
      ),
    ),
  ),
  'git-fundamentos-final' => 
  array (
    'slug' => 'git-fundamentos-final',
    'title' => 'Examen final — Git',
    'course' => 'git-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Comando guardar snapshot',
        'answer' => 'git commit',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Crear y cambiar rama',
        'answer' => 'git checkout -b',
        'accept' => 
        array (
          0 => 'git switch -c',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Subir al remoto',
        'answer' => 'git push',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Traer cambios remotos',
        'answer' => 'git pull',
        'accept' => 
        array (
          0 => 'git fetch',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Para qué sirve Pull Request',
        'answer' => 'revisar codigo',
        'accept' => 
        array (
          0 => 'code review',
          1 => 'revisar código',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Guardar WIP sin commit',
        'answer' => 'git stash',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'sql-fundamentos-final' => 
  array (
    'slug' => 'sql-fundamentos-final',
    'title' => 'Examen final — SQL',
    'course' => 'sql-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Cláusula filtrar filas',
        'answer' => 'where',
        'accept' => 
        array (
          0 => 'WHERE',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'JOIN solo coincidencias',
        'answer' => 'inner join',
        'accept' => 
        array (
          0 => 'INNER JOIN',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Agrupar filas',
        'answer' => 'group by',
        'accept' => 
        array (
          0 => 'GROUP BY',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Deshacer transacción',
        'answer' => 'rollback',
        'accept' => 
        array (
          0 => 'ROLLBACK',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Crear índice',
        'answer' => 'create index',
        'accept' => 
        array (
          0 => 'CREATE INDEX',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Letra A de ACID',
        'answer' => 'atomicidad',
        'accept' => 
        array (
          0 => 'atomicity',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'redis-cache-final' => 
  array (
    'slug' => 'redis-cache-final',
    'title' => 'Examen final — Redis',
    'course' => 'redis-cache',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Dónde guarda Redis principalmente',
        'answer' => 'memoria',
        'accept' => 
        array (
          0 => 'ram',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Comando leer valor',
        'answer' => 'get',
        'accept' => 
        array (
          0 => 'GET',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Expiración de clave',
        'answer' => 'expire',
        'accept' => 
        array (
          0 => 'EXPIRE',
          1 => 'ttl',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Estructura tipo objeto',
        'answer' => 'hash',
        'accept' => 
        array (
          0 => 'Hash',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Patrón leer BD si no en caché',
        'answer' => 'cache aside',
        'accept' => 
        array (
          0 => 'cache-aside',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Laravel facade caché',
        'answer' => 'cache',
        'accept' => 
        array (
          0 => 'Cache',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'postgresql-final' => 
  array (
    'slug' => 'postgresql-final',
    'title' => 'Examen final — PostgreSQL',
    'course' => 'postgresql',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Tipo JSON indexable Postgres',
        'answer' => 'jsonb',
        'accept' => 
        array (
          0 => 'JSONB',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Ver plan de query',
        'answer' => 'explain',
        'accept' => 
        array (
          0 => 'EXPLAIN ANALYZE',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Inicia CTE',
        'answer' => 'with',
        'accept' => 
        array (
          0 => 'WITH',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Herramienta backup',
        'answer' => 'pg_dump',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'FK sintaxis',
        'answer' => 'references',
        'accept' => 
        array (
          0 => 'REFERENCES',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Pooling conexiones herramienta',
        'answer' => 'pgbouncer',
        'accept' => 
        array (
          0 => 'PgBouncer',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'testing-php-final' => 
  array (
    'slug' => 'testing-php-final',
    'title' => 'Examen final — Testing PHP',
    'course' => 'testing-php',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Framework tests PHP',
        'answer' => 'phpunit',
        'accept' => 
        array (
          0 => 'PHPUnit',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Aserción igualdad',
        'answer' => 'assertequals',
        'accept' => 
        array (
          0 => 'assertEquals',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Simular dependencia',
        'answer' => 'mock',
        'accept' => 
        array (
          0 => 'createMock',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Test HTTP Laravel GET JSON',
        'answer' => 'getjson',
        'accept' => 
        array (
          0 => 'getJson',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Sintaxis moderna sobre PHPUnit',
        'answer' => 'pest',
        'accept' => 
        array (
          0 => 'Pest',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Trait reset BD Laravel tests',
        'answer' => 'refreshdatabase',
        'accept' => 
        array (
          0 => 'RefreshDatabase',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'tailwind-css-final' => 
  array (
    'slug' => 'tailwind-css-final',
    'title' => 'Examen final — Tailwind',
    'course' => 'tailwind-css',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Enfoque Tailwind',
        'answer' => 'utility first',
        'accept' => 
        array (
          0 => 'utility-first',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Centrar en flex eje cruzado',
        'answer' => 'items-center',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Prefijo breakpoint tablet',
        'answer' => 'md:',
        'accept' => 
        array (
          0 => 'md',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Modo oscuro prefijo',
        'answer' => 'dark:',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Clases en React',
        'answer' => 'classname',
        'accept' => 
        array (
          0 => 'className',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Padding 1rem típico',
        'answer' => 'p-4',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'fastapi-avanzado-final' => 
  array (
    'slug' => 'fastapi-avanzado-final',
    'title' => 'Examen final — FastAPI avanzado',
    'course' => 'fastapi-avanzado',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Validación schemas FastAPI',
        'answer' => 'pydantic',
        'accept' => 
        array (
          0 => 'Pydantic',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Inyección dependencias',
        'answer' => 'depends',
        'accept' => 
        array (
          0 => 'Depends',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'ORM común con FastAPI',
        'answer' => 'sqlalchemy',
        'accept' => 
        array (
          0 => 'SQLAlchemy',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'HTTP 422 significa',
        'answer' => 'validacion',
        'accept' => 
        array (
          0 => 'validación',
          1 => 'unprocessable',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Cliente test FastAPI',
        'answer' => 'testclient',
        'accept' => 
        array (
          0 => 'TestClient',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Header JWT típico',
        'answer' => 'authorization bearer',
        'accept' => 
        array (
          0 => 'Bearer',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'patrones-diseno-final' => 
  array (
    'slug' => 'patrones-diseno-final',
    'title' => 'Examen final — Patrones de diseño',
    'course' => 'patrones-diseno',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Patrón una sola instancia',
        'answer' => 'singleton',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Abstraer persistencia',
        'answer' => 'repository',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Algoritmos intercambiables',
        'answer' => 'strategy',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'S de SOLID',
        'answer' => 'single responsibility',
        'accept' => 
        array (
          0 => 'responsabilidad unica',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Inyectar por constructor',
        'answer' => 'dependency injection',
        'accept' => 
        array (
          0 => 'inyeccion dependencias',
          1 => 'di',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Laravel events es patrón',
        'answer' => 'observer',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'symfony-fundamentos-final' => 
  array (
    'slug' => 'symfony-fundamentos-final',
    'title' => 'Examen final — Symfony',
    'course' => 'symfony-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'ORM de Symfony',
        'answer' => 'doctrine',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'CLI Symfony',
        'answer' => 'symfony console',
        'accept' => 
        array (
          0 => 'bin/console',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Config servicios',
        'answer' => 'services.yaml',
        'accept' => 
        array (
          0 => 'config/services.yaml',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Rutas con atributos',
        'answer' => 'route',
        'accept' => 
        array (
          0 => '#Route',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'API REST bundle Symfony',
        'answer' => 'api platform',
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'autowire significa',
        'answer' => 'inyeccion automatica',
        'accept' => 
        array (
          0 => 'autowiring',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'nginx-proxy-final' => 
  array (
    'slug' => 'nginx-proxy-final',
    'title' => 'Examen final — Nginx',
    'course' => 'nginx-proxy',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Pasar PHP a FPM',
        'answer' => 'fastcgi_pass',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Proxy a Node',
        'answer' => 'proxy_pass',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Puerto HTTPS',
        'answer' => '443',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Carpeta web root',
        'answer' => 'root',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Recargar config',
        'answer' => 'nginx -s reload',
        'accept' => 
        array (
          0 => 'reload',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => '502 suele ser',
        'answer' => 'backend caido',
        'accept' => 
        array (
          0 => 'php-fpm',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'django-rest-final' => 
  array (
    'slug' => 'django-rest-final',
    'title' => 'Examen final — Django REST',
    'course' => 'django-rest',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Paquete DRF',
        'answer' => 'djangorestframework',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Validación JSON Django',
        'answer' => 'serializer',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'CRUD automático',
        'answer' => 'modelviewset',
        'accept' => 
        array (
          0 => 'ModelViewSet',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'WSGI servidor Django',
        'answer' => 'gunicorn',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Permission usuario logueado',
        'answer' => 'isauthenticated',
        'accept' => 
        array (
          0 => 'IsAuthenticated',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'CORS paquete',
        'answer' => 'django-cors-headers',
        'accept' => 
        array (
          0 => 'cors headers',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'algoritmos-entrevista-final' => 
  array (
    'slug' => 'algoritmos-entrevista-final',
    'title' => 'Examen final — Algoritmos',
    'course' => 'algoritmos-entrevista',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Recorrer array n elementos',
        'answer' => 'o(n)',
        'accept' => 
        array (
          0 => 'O(n)',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Estructura two sum O(1) lookup',
        'answer' => 'hash map',
        'accept' => 
        array (
          0 => 'hashmap',
          1 => 'objeto',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Busqueda binaria',
        'answer' => 'o(log n)',
        'accept' => 
        array (
          0 => 'O(log n)',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'BFS usa',
        'answer' => 'cola',
        'accept' => 
        array (
          0 => 'queue',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Dos bucles anidados n',
        'answer' => 'o(n²)',
        'accept' => 
        array (
          0 => 'O(n^2)',
          1 => 'O(n2)',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Sliding window tecnica',
        'answer' => 'ventana',
        'accept' => 
        array (
          0 => 'two pointers',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'websockets-realtime-final' => 
  array (
    'slug' => 'websockets-realtime-final',
    'title' => 'Examen final — WebSockets',
    'course' => 'websockets-realtime',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Protocolo persistente bidireccional',
        'answer' => 'websocket',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Enviar mensaje cliente',
        'answer' => 'send',
        'accept' => 
        array (
          0 => 'ws.send',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'HTTPS para WS',
        'answer' => 'wss',
        'accept' => 
        array (
          0 => 'wss://',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Laravel WS server',
        'answer' => 'reverb',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Multi-server sync',
        'answer' => 'redis pubsub',
        'accept' => 
        array (
          0 => 'redis pub/sub',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'React cleanup cierra',
        'answer' => 'ws.close',
        'accept' => 
        array (
          0 => 'close',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'graphql-api-final' => 
  array (
    'slug' => 'graphql-api-final',
    'title' => 'Examen final — GraphQL',
    'course' => 'graphql-api',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'GraphQL lee con',
        'answer' => 'query',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'GraphQL escribe con',
        'answer' => 'mutation',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Hook Apollo leer',
        'answer' => 'usequery',
        'accept' => 
        array (
          0 => 'useQuery',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'GraphQL Laravel package',
        'answer' => 'lighthouse',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Campo obligatorio signo',
        'answer' => '!',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Proteccion query profunda',
        'answer' => 'depth limit',
        'accept' => 
        array (
          0 => 'complexity limit',
        ),
        'points' => 2,
      ),
    ),
    'time_minutes' => 24,
  ),
  'arquitectura-software-final' => 
  array (
    'slug' => 'arquitectura-software-final',
    'title' => 'Examen final — Arquitectura',
    'course' => 'arquitectura-software',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Un deploy modulos internos',
        'answer' => 'monolito modular',
        'accept' => 
        array (
          0 => 'monolito',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Documento decision arquitectura',
        'answer' => 'adr',
        'accept' => 
        array (
          0 => 'ADR',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Desacopla con async',
        'answer' => 'eventos',
        'accept' => 
        array (
          0 => 'colas',
          1 => 'event driven',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Domain sin framework',
        'answer' => 'hexagonal',
        'accept' => 
        array (
          0 => 'capas',
          1 => 'domain layer',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Escala mas servidores',
        'answer' => 'horizontal',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Consistencia distribuida',
        'answer' => 'eventual',
        'accept' => 
        array (
          0 => 'consistencia eventual',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'nextjs-fullstack-final' => 
  array (
    'slug' => 'nextjs-fullstack-final',
    'title' => 'Examen final — Next.js',
    'course' => 'nextjs-fullstack',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Next.js basado en',
        'answer' => 'react',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Archivo pagina App Router',
        'answer' => 'page.tsx',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Ruta dinamica carpeta',
        'answer' => '[id]',
        'accept' => 
        array (
          0 => '[slug]',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Componente cliente directiva',
        'answer' => 'use client',
        'accept' => 
        array (
          0 => '"use client"',
        ),
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'API route archivo',
        'answer' => 'route.ts',
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Deploy Next tipico',
        'answer' => 'vercel',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'mensajeria-colas-final' => 
  array (
    'slug' => 'mensajeria-colas-final',
    'title' => 'Examen final — Colas',
    'course' => 'mensajeria-colas',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Protocolo RabbitMQ',
        'answer' => 'amqp',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Laravel encolar job',
        'answer' => 'dispatch',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Cola mensajes fallidos',
        'answer' => 'dlq',
        'accept' => 
        array (
          0 => 'dead letter',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Python task queue',
        'answer' => 'celery',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Idempotencia porque',
        'answer' => 'duplicados',
        'accept' => 
        array (
          0 => 'mensajes duplicados',
        ),
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Laravel dashboard colas',
        'answer' => 'horizon',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'aws-cloud-basico-final' => 
  array (
    'slug' => 'aws-cloud-basico-final',
    'title' => 'Examen final — AWS',
    'course' => 'aws-cloud-basico',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Servidor virtual AWS',
        'answer' => 'ec2',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Storage objetos AWS',
        'answer' => 's3',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'BD managed AWS',
        'answer' => 'rds',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Permisos AWS',
        'answer' => 'iam',
        'points' => 1,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Funciones sin servidor',
        'answer' => 'lambda',
        'points' => 2,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Firewall EC2',
        'answer' => 'security group',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'ethical-hacking-final' => 
  array (
    'slug' => 'ethical-hacking-final',
    'title' => 'Examen final — Ethical hacking',
    'course' => 'ethical-hacking',
    'pass_score' => 6,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Probar sin permiso es',
        'answer' => 'ilegal',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Assets permitidos bug bounty',
        'answer' => 'scope',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Puerto SSH',
        'answer' => '22',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'IDOR es',
        'answer' => 'acceso objeto ajeno',
        'accept' => 
        array (
          0 => 'insecure direct object reference',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Proxy HTTP pentest',
        'answer' => 'burp',
        'accept' => 
        array (
          0 => 'burp suite',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Lab vulnerable local',
        'answer' => 'dvwa',
        'points' => 1,
      ),
      6 => 
      array (
        'id' => 'q7',
        'q' => 'Severidad vulnerabilidad',
        'answer' => 'cvss',
        'points' => 1,
      ),
    ),
    'time_minutes' => 28,
  ),
  'go-backend-final' => 
  array (
    'slug' => 'go-backend-final',
    'title' => 'Examen final — Go',
    'course' => 'go-backend',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Concurrencia Go keyword',
        'answer' => 'go',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Paquete HTTP stdlib',
        'answer' => 'net/http',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Error handling idiom',
        'answer' => 'err != nil',
        'accept' => 
        array (
          0 => 'if err',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Comunicacion goroutines',
        'answer' => 'channel',
        'accept' => 
        array (
          0 => 'channels',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Build tool Go',
        'answer' => 'go build',
        'accept' => 
        array (
          0 => 'go mod',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Test race flag',
        'answer' => 'race',
        'accept' => 
        array (
          0 => '-race',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'java-spring-final' => 
  array (
    'slug' => 'java-spring-final',
    'title' => 'Examen final — Java Spring',
    'course' => 'java-spring',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Anotacion clase Spring Boot',
        'answer' => 'springbootapplication',
        'accept' => 
        array (
          0 => '@SpringBootApplication',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'ORM Spring',
        'answer' => 'jpa',
        'accept' => 
        array (
          0 => 'spring data jpa',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Path variable anotacion',
        'answer' => 'pathvariable',
        'accept' => 
        array (
          0 => '@PathVariable',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Health endpoint',
        'answer' => 'actuator',
        'accept' => 
        array (
          0 => '/actuator/health',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'JVM lenguaje',
        'answer' => 'java',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Test framework Java',
        'answer' => 'junit',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'mongodb-nosql-final' => 
  array (
    'slug' => 'mongodb-nosql-final',
    'title' => 'Examen final — MongoDB',
    'course' => 'mongodb-nosql',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Unidad MongoDB',
        'answer' => 'documento',
        'accept' => 
        array (
          0 => 'document',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'ODM Node',
        'answer' => 'mongoose',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Pipeline WHERE stage',
        'answer' => 'match',
        'accept' => 
        array (
          0 => '$match',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Scan completo lento',
        'answer' => 'collscan',
        'accept' => 
        array (
          0 => 'collection scan',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Join aggregation',
        'answer' => 'lookup',
        'accept' => 
        array (
          0 => '$lookup',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Managed Mongo cloud',
        'answer' => 'atlas',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'vue-frontend-final' => 
  array (
    'slug' => 'vue-frontend-final',
    'title' => 'Examen final — Vue',
    'course' => 'vue-frontend',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'State store Vue 3',
        'answer' => 'pinia',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Reactivity ref import',
        'answer' => 'vue',
        'accept' => 
        array (
          0 => 'from vue',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Router outlet component',
        'answer' => 'router-view',
        'accept' => 
        array (
          0 => 'router-view',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'SSR framework Vue',
        'answer' => 'nuxt',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Computed cachea',
        'answer' => 'si',
        'accept' => 
        array (
          0 => 'sí',
          1 => 'yes',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Bundler Vue 3',
        'answer' => 'vite',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'react-native-mobile-final' => 
  array (
    'slug' => 'react-native-mobile-final',
    'title' => 'Examen final — React Native',
    'course' => 'react-native-mobile',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Contenedor layout RN',
        'answer' => 'view',
        'accept' => 
        array (
          0 => 'View',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Lista virtualizada',
        'answer' => 'flatlist',
        'accept' => 
        array (
          0 => 'FlatList',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Nav library RN',
        'answer' => 'react navigation',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Build cloud Expo',
        'answer' => 'eas',
        'accept' => 
        array (
          0 => 'EAS',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Token seguro mobile',
        'answer' => 'securestore',
        'accept' => 
        array (
          0 => 'SecureStore',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Dev tool Expo',
        'answer' => 'expo',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'system-design-final' => 
  array (
    'slug' => 'system-design-final',
    'title' => 'Examen final — System Design',
    'course' => 'system-design',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Escala mas servidores',
        'answer' => 'horizontal',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Particion BD datos',
        'answer' => 'sharding',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'CDN sirve',
        'answer' => 'estaticos',
        'accept' => 
        array (
          0 => 'assets',
          1 => 'static',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'App sin estado escala',
        'answer' => 'stateless',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'URL shortener redirect',
        'answer' => '302',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Metrica carga',
        'answer' => 'qps',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'terraform-iac-final' => 
  array (
    'slug' => 'terraform-iac-final',
    'title' => 'Examen final — Terraform',
    'course' => 'terraform-iac',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Preview cambios TF',
        'answer' => 'plan',
        'accept' => 
        array (
          0 => 'terraform plan',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Aplica cambios TF',
        'answer' => 'apply',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'State remoto lock',
        'answer' => 'dynamodb',
        'accept' => 
        array (
          0 => 'lock',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'IaC significa',
        'answer' => 'infrastructure as code',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Lenguaje Terraform',
        'answer' => 'hcl',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Modulo reutilizable',
        'answer' => 'module',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'kafka-eventos-final' => 
  array (
    'slug' => 'kafka-eventos-final',
    'title' => 'Examen final — Kafka',
    'course' => 'kafka-eventos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Unidad organizacion Kafka',
        'answer' => 'topic',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Posicion en partition',
        'answer' => 'offset',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Durabilidad acks max',
        'answer' => 'all',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Metrica consumer atrasado',
        'answer' => 'lag',
        'accept' => 
        array (
          0 => 'consumer lag',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'vs RabbitMQ Kafka es',
        'answer' => 'stream',
        'accept' => 
        array (
          0 => 'log',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Grupo consumidores',
        'answer' => 'consumer group',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'grpc-apis-final' => 
  array (
    'slug' => 'grpc-apis-final',
    'title' => 'Examen final — gRPC',
    'course' => 'grpc-apis',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Serializacion gRPC',
        'answer' => 'protobuf',
        'accept' => 
        array (
          0 => 'proto',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Protocolo transporte',
        'answer' => 'http2',
        'accept' => 
        array (
          0 => 'HTTP/2',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'RPC 1 request 1 response',
        'answer' => 'unary',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'TLS mutuo servicios',
        'answer' => 'mtls',
        'accept' => 
        array (
          0 => 'mTLS',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Puerto gRPC tipico',
        'answer' => '50051',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'REST facade gRPC',
        'answer' => 'grpc-gateway',
        'accept' => 
        array (
          0 => 'gateway',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'oauth-openid-final' => 
  array (
    'slug' => 'oauth-openid-final',
    'title' => 'Examen final — OAuth/OIDC',
    'course' => 'oauth-openid',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'OAuth2 es principalmente',
        'answer' => 'autorizacion',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'OIDC añade',
        'answer' => 'identidad',
        'accept' => 
        array (
          0 => 'autenticacion',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'SPA flow seguro',
        'answer' => 'pkce',
        'accept' => 
        array (
          0 => 'PKCE',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Scope minimo OIDC',
        'answer' => 'openid',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Token identidad',
        'answer' => 'id_token',
        'accept' => 
        array (
          0 => 'id token',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Laravel OAuth social',
        'answer' => 'socialite',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'observabilidad-final' => 
  array (
    'slug' => 'observabilidad-final',
    'title' => 'Examen final — Observabilidad',
    'course' => 'observabilidad',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Tres pilares logs metrics',
        'answer' => 'traces',
        'accept' => 
        array (
          0 => 'tracing',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Metrics Prometheus query',
        'answer' => 'promql',
        'accept' => 
        array (
          0 => 'PromQL',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Tracing estandar',
        'answer' => 'opentelemetry',
        'accept' => 
        array (
          0 => 'OpenTelemetry',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Objetivo interno uptime',
        'answer' => 'slo',
        'accept' => 
        array (
          0 => 'SLO',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Dashboards visuales',
        'answer' => 'grafana',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Log correlacion ID',
        'answer' => 'trace',
        'accept' => 
        array (
          0 => 'trace-id',
          1 => 'correlation',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'ai-llm-desarrollo-final' => 
  array (
    'slug' => 'ai-llm-desarrollo-final',
    'title' => 'Examen final — IA & LLMs',
    'course' => 'ai-llm-desarrollo',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Contexto docs privados LLM',
        'answer' => 'rag',
        'accept' => 
        array (
          0 => 'RAG',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'API key en prod',
        'answer' => 'env',
        'accept' => 
        array (
          0 => 'variable entorno',
          1 => 'server',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Embeddings busqueda',
        'answer' => 'vector',
        'accept' => 
        array (
          0 => 'vectorial',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'LLM ejecuta funcion',
        'answer' => 'tool calling',
        'accept' => 
        array (
          0 => 'function calling',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'No enviar a cloud',
        'answer' => 'pii',
        'accept' => 
        array (
          0 => 'PII',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Unidad coste LLM',
        'answer' => 'token',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'rust-fundamentos-final' => 
  array (
    'slug' => 'rust-fundamentos-final',
    'title' => 'Examen final — Rust',
    'course' => 'rust-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Sin GC gracias a',
        'answer' => 'ownership',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Error type Result',
        'answer' => 'result',
        'accept' => 
        array (
          0 => 'Result',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Build package manager',
        'answer' => 'cargo',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Async runtime',
        'answer' => 'tokio',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Sin null usa',
        'answer' => 'option',
        'accept' => 
        array (
          0 => 'Option',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Web framework Axum',
        'answer' => 'axum',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'angular-fundamentos-final' => 
  array (
    'slug' => 'angular-fundamentos-final',
    'title' => 'Examen final — Angular',
    'course' => 'angular-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Streams Angular',
        'answer' => 'rxjs',
        'accept' => 
        array (
          0 => 'RxJS',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'HTTP client Angular',
        'answer' => 'httpclient',
        'accept' => 
        array (
          0 => 'HttpClient',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Event binding syntax',
        'answer' => '(click)',
        'accept' => 
        array (
          0 => 'click',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'DI providedIn root',
        'answer' => 'singleton',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Forms testeables',
        'answer' => 'reactive',
        'accept' => 
        array (
          0 => 'reactive forms',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'CLI Angular',
        'answer' => 'ng',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'clean-code-final' => 
  array (
    'slug' => 'clean-code-final',
    'title' => 'Examen final — Clean Code',
    'course' => 'clean-code',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Funcion hace',
        'answer' => 'una cosa',
        'accept' => 
        array (
          0 => 'una sola cosa',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'SRP significa',
        'answer' => 'single responsibility',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Refactor requiere',
        'answer' => 'tests',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'PR ideal tamano',
        'answer' => 'pequeño',
        'accept' => 
        array (
          0 => 'small',
          1 => 'pequeno',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Nombre bool prefix',
        'answer' => 'is',
        'accept' => 
        array (
          0 => 'has',
          1 => 'can',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Deuda tecnica es',
        'answer' => 'coste futuro',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'stripe-pagos-final' => 
  array (
    'slug' => 'stripe-pagos-final',
    'title' => 'Examen final — Stripe',
    'course' => 'stripe-pagos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Tarjeta test Visa',
        'answer' => '4242',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Fulfillment confiable',
        'answer' => 'webhook',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Verificar webhook',
        'answer' => 'signature',
        'accept' => 
        array (
          0 => 'Stripe-Signature',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Checkout completado event',
        'answer' => 'checkout.session.completed',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Suscripcion mode',
        'answer' => 'subscription',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Marketplace Stripe',
        'answer' => 'connect',
        'accept' => 
        array (
          0 => 'Stripe Connect',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'flutter-mobile-final' => 
  array (
    'slug' => 'flutter-mobile-final',
    'title' => 'Examen final — Flutter',
    'course' => 'flutter-mobile',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Lenguaje Flutter',
        'answer' => 'dart',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Unidad UI',
        'answer' => 'widget',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'State management moderno',
        'answer' => 'riverpod',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Router declarativo',
        'answer' => 'go_router',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Hot reload',
        'answer' => 'flutter',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Build Android bundle',
        'answer' => 'appbundle',
        'accept' => 
        array (
          0 => 'aab',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'csharp-dotnet-final' => 
  array (
    'slug' => 'csharp-dotnet-final',
    'title' => 'Examen final — .NET',
    'course' => 'csharp-dotnet',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Framework web Microsoft',
        'answer' => 'asp.net',
        'accept' => 
        array (
          0 => 'aspnet',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'ORM .NET',
        'answer' => 'ef core',
        'accept' => 
        array (
          0 => 'entity framework',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'DI scoped',
        'answer' => 'addscoped',
        'accept' => 
        array (
          0 => 'AddScoped',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Health endpoint',
        'answer' => 'health',
        'accept' => 
        array (
          0 => '/health',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Test framework',
        'answer' => 'xunit',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Minimal API method',
        'answer' => 'mapget',
        'accept' => 
        array (
          0 => 'MapGet',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'kotlin-android-final' => 
  array (
    'slug' => 'kotlin-android-final',
    'title' => 'Examen final — Kotlin Android',
    'course' => 'kotlin-android',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'UI declarativa Android',
        'answer' => 'compose',
        'accept' => 
        array (
          0 => 'jetpack compose',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Async Kotlin',
        'answer' => 'coroutine',
        'accept' => 
        array (
          0 => 'coroutines',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'HTTP client Android',
        'answer' => 'retrofit',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'BD local Android',
        'answer' => 'room',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Inmutable val',
        'answer' => 'val',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Store format',
        'answer' => 'aab',
        'accept' => 
        array (
          0 => 'app bundle',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'elasticsearch-busqueda-final' => 
  array (
    'slug' => 'elasticsearch-busqueda-final',
    'title' => 'Examen final — Elasticsearch',
    'course' => 'elasticsearch-busqueda',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Full-text field type',
        'answer' => 'text',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Exact match field',
        'answer' => 'keyword',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Aggregation WHERE',
        'answer' => 'match',
        'accept' => 
        array (
          0 => '$match',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Laravel search driver',
        'answer' => 'scout',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Slow scan',
        'answer' => 'collscan',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Stack logs',
        'answer' => 'elk',
        'accept' => 
        array (
          0 => 'ELK',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'gcp-cloud-basico-final' => 
  array (
    'slug' => 'gcp-cloud-basico-final',
    'title' => 'Examen final — GCP',
    'course' => 'gcp-cloud-basico',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'VM GCP',
        'answer' => 'gce',
        'accept' => 
        array (
          0 => 'compute engine',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Object storage GCP',
        'answer' => 'gcs',
        'accept' => 
        array (
          0 => 'cloud storage',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Serverless containers',
        'answer' => 'cloud run',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Data warehouse',
        'answer' => 'bigquery',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'CLI GCP',
        'answer' => 'gcloud',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Billing unit',
        'answer' => 'project',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'azure-cloud-basico-final' => 
  array (
    'slug' => 'azure-cloud-basico-final',
    'title' => 'Examen final — Azure',
    'course' => 'azure-cloud-basico',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Container recursos',
        'answer' => 'resource group',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Blob storage',
        'answer' => 'blob',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Serverless Azure',
        'answer' => 'functions',
        'accept' => 
        array (
          0 => 'azure functions',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'PaaS web',
        'answer' => 'app service',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Identity Microsoft',
        'answer' => 'entra',
        'accept' => 
        array (
          0 => 'azure ad',
          1 => 'aad',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'CLI Azure',
        'answer' => 'az',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'helm-kubernetes-final' => 
  array (
    'slug' => 'helm-kubernetes-final',
    'title' => 'Examen final — Helm',
    'course' => 'helm-kubernetes',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Helm package',
        'answer' => 'chart',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Preview changes',
        'answer' => 'template',
        'accept' => 
        array (
          0 => 'helm template',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Undo deploy',
        'answer' => 'rollback',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'GitOps tool',
        'answer' => 'argocd',
        'accept' => 
        array (
          0 => 'argo',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Pre install job',
        'answer' => 'hook',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Config file',
        'answer' => 'values',
        'accept' => 
        array (
          0 => 'values.yaml',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'ansible-automation-final' => 
  array (
    'slug' => 'ansible-automation-final',
    'title' => 'Examen final — Ansible',
    'course' => 'ansible-automation',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Agentless usa',
        'answer' => 'ssh',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Sudo en playbook',
        'answer' => 'become',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Encrypt secrets',
        'answer' => 'vault',
        'accept' => 
        array (
          0 => 'ansible vault',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Reuse config',
        'answer' => 'role',
        'accept' => 
        array (
          0 => 'roles',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Restart on change',
        'answer' => 'handler',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Dry run',
        'answer' => 'check',
        'accept' => 
        array (
          0 => '--check',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'webrtc-comunicacion-final' => 
  array (
    'slug' => 'webrtc-comunicacion-final',
    'title' => 'Examen final — WebRTC',
    'course' => 'webrtc-comunicacion',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Camera access API',
        'answer' => 'getusermedia',
        'accept' => 
        array (
          0 => 'getUserMedia',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'NAT traversal',
        'answer' => 'ice',
        'accept' => 
        array (
          0 => 'ICE',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Relay server',
        'answer' => 'turn',
        'accept' => 
        array (
          0 => 'TURN',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Group calls scale',
        'answer' => 'sfu',
        'accept' => 
        array (
          0 => 'SFU',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'SDP exchange via',
        'answer' => 'signaling',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'P2P connection API',
        'answer' => 'rtcpeerconnection',
        'accept' => 
        array (
          0 => 'RTCPeerConnection',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'pwa-offline-final' => 
  array (
    'slug' => 'pwa-offline-final',
    'title' => 'Examen final — PWA',
    'course' => 'pwa-offline',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Offline proxy',
        'answer' => 'service worker',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Install config',
        'answer' => 'manifest',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'App-like display',
        'answer' => 'standalone',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Google SW toolkit',
        'answer' => 'workbox',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'HTTPS required',
        'answer' => 'si',
        'accept' => 
        array (
          0 => 'sí',
          1 => 'yes',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Vitals metric',
        'answer' => 'lcp',
        'accept' => 
        array (
          0 => 'LCP',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'accesibilidad-web-final' => 
  array (
    'slug' => 'accesibilidad-web-final',
    'title' => 'Examen final — a11y',
    'course' => 'accesibilidad-web',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Standard a11y',
        'answer' => 'wcag',
        'accept' => 
        array (
          0 => 'WCAG',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Keyboard focus visible',
        'answer' => 'focus',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Screen reader nav',
        'answer' => 'landmark',
        'accept' => 
        array (
          0 => 'landmarks',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Contrast ratio AA',
        'answer' => '4.5',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Test tool',
        'answer' => 'axe',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'First ARIA rule',
        'answer' => 'no usar si html basta',
        'accept' => 
        array (
          0 => 'native html',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'wordpress-dev-final' => 
  array (
    'slug' => 'wordpress-dev-final',
    'title' => 'Examen final — WordPress',
    'course' => 'wordpress-dev',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Hook modifica datos',
        'answer' => 'filter',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Hook evento',
        'answer' => 'action',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'API JSON base',
        'answer' => 'wp-json',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Loop posts',
        'answer' => 'the_post',
        'accept' => 
        array (
          0 => 'have_posts',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Disable file edit',
        'answer' => 'disallow_file_edit',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Plugin folder',
        'answer' => 'wp-content/plugins',
        'accept' => 
        array (
          0 => 'plugins',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'web3-blockchain-final' => 
  array (
    'slug' => 'web3-blockchain-final',
    'title' => 'Examen final — Web3',
    'course' => 'web3-blockchain',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Smart contract lang',
        'answer' => 'solidity',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'ETH testnet dev',
        'answer' => 'sepolia',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Never share',
        'answer' => 'seed',
        'accept' => 
        array (
          0 => 'seed phrase',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Reentrancy fix pattern',
        'answer' => 'checks effects interactions',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Wallet browser',
        'answer' => 'metamask',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Tx fee unit',
        'answer' => 'gas',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'playwright-e2e-final' => 
  array (
    'slug' => 'playwright-e2e-final',
    'title' => 'Examen final — Playwright',
    'course' => 'playwright-e2e',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Best locator a11y',
        'answer' => 'getbyrole',
        'accept' => 
        array (
          0 => 'getByRole',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Auto wait',
        'answer' => 'si',
        'accept' => 
        array (
          0 => 'sí',
          1 => 'yes',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Reuse auth',
        'answer' => 'storagestate',
        'accept' => 
        array (
          0 => 'storage state',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Debug CI failures',
        'answer' => 'trace',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Mock network',
        'answer' => 'route',
        'accept' => 
        array (
          0 => 'page.route',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'E2E means',
        'answer' => 'end to end',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'svelte-fundamentos-final' => 
  array (
    'slug' => 'svelte-fundamentos-final',
    'title' => 'Examen final — Svelte',
    'course' => 'svelte-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Svelte compiles to',
        'answer' => 'vanilla js',
        'accept' => 
        array (
          0 => 'javascript',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Reactive statement',
        'answer' => '$:',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Meta framework',
        'answer' => 'sveltekit',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Global state',
        'answer' => 'store',
        'accept' => 
        array (
          0 => 'stores',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Server load file',
        'answer' => '+page.server',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Two-way bind',
        'answer' => 'bind:',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'electron-desktop-final' => 
  array (
    'slug' => 'electron-desktop-final',
    'title' => 'Examen final — Electron',
    'course' => 'electron-desktop',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'NodeIntegration false why',
        'answer' => 'seguridad',
        'accept' => 
        array (
          0 => 'security',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Safe API expose',
        'answer' => 'contextbridge',
        'accept' => 
        array (
          0 => 'contextBridge',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Main vs renderer',
        'answer' => 'node vs browser',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'IPC async',
        'answer' => 'invoke',
        'accept' => 
        array (
          0 => 'ipcMain.handle',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Packager tool',
        'answer' => 'electron-builder',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Create window',
        'answer' => 'browserwindow',
        'accept' => 
        array (
          0 => 'BrowserWindow',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'deno-bun-final' => 
  array (
    'slug' => 'deno-bun-final',
    'title' => 'Examen final — Deno & Bun',
    'course' => 'deno-bun',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Deno security default',
        'answer' => 'permisos',
        'accept' => 
        array (
          0 => 'permissions',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Deno HTTP server',
        'answer' => 'deno.serve',
        'accept' => 
        array (
          0 => 'Deno.serve',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Bun package manager',
        'answer' => 'bun install',
        'accept' => 
        array (
          0 => 'bun',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Edge framework multi-runtime',
        'answer' => 'hono',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Deno deploy platform',
        'answer' => 'deno deploy',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Bun embedded DB',
        'answer' => 'sqlite',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'supabase-backend-final' => 
  array (
    'slug' => 'supabase-backend-final',
    'title' => 'Examen final — Supabase',
    'course' => 'supabase-backend',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Supabase database',
        'answer' => 'postgres',
        'accept' => 
        array (
          0 => 'postgresql',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Row security acronym',
        'answer' => 'rls',
        'accept' => 
        array (
          0 => 'RLS',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Realtime listener',
        'answer' => 'subscribe',
        'accept' => 
        array (
          0 => 'on',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Serverless Supabase',
        'answer' => 'edge functions',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Local dev stack',
        'answer' => 'supabase start',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Query builder method',
        'answer' => 'from',
        'accept' => 
        array (
          0 => '.from',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'figma-devs-final' => 
  array (
    'slug' => 'figma-devs-final',
    'title' => 'Examen final — Figma',
    'course' => 'figma-devs',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Inspect CSS values',
        'answer' => 'dev mode',
        'accept' => 
        array (
          0 => 'inspect',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Reusable design unit',
        'answer' => 'component',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Design system colors',
        'answer' => 'variables',
        'accept' => 
        array (
          0 => 'tokens',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Spacing grid unit',
        'answer' => '8',
        'accept' => 
        array (
          0 => '8px',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Prototype interaction',
        'answer' => 'prototype',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Handoff comment tool',
        'answer' => 'comment',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'agile-scrum-final' => 
  array (
    'slug' => 'agile-scrum-final',
    'title' => 'Examen final — Agile',
    'course' => 'agile-scrum',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Sprint length typical',
        'answer' => '2 semanas',
        'accept' => 
        array (
          0 => '2 weeks',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Daily standup max',
        'answer' => '15 minutos',
        'accept' => 
        array (
          0 => '15 min',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Scrum master role',
        'answer' => 'facilitador',
        'accept' => 
        array (
          0 => 'facilitator',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'WIP limit tool',
        'answer' => 'kanban',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Sprint review shows',
        'answer' => 'increment',
        'accept' => 
        array (
          0 => 'demo',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Agile manifesto values',
        'answer' => 'individuos',
        'accept' => 
        array (
          0 => 'people',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'technical-writing-final' => 
  array (
    'slug' => 'technical-writing-final',
    'title' => 'Examen final — Technical writing',
    'course' => 'technical-writing',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'README must have',
        'answer' => 'install',
        'accept' => 
        array (
          0 => 'setup',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'ADR documents',
        'answer' => 'decision',
        'accept' => 
        array (
          0 => 'decisiones',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Active voice better',
        'answer' => 'si',
        'accept' => 
        array (
          0 => 'sí',
          1 => 'yes',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Runbook for',
        'answer' => 'incidentes',
        'accept' => 
        array (
          0 => 'incidents',
          1 => 'oncall',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Docs as code stored',
        'answer' => 'git',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'API docs standard',
        'answer' => 'openapi',
        'accept' => 
        array (
          0 => 'OpenAPI',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'cert-aws-saa-final' => 
  array (
    'slug' => 'cert-aws-saa-final',
    'title' => 'Examen final — AWS SAA',
    'course' => 'cert-aws-saa',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'S3 durability',
        'answer' => '11 9',
        'accept' => 
        array (
          0 => '99.999999999%',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Auto scaling group',
        'answer' => 'asg',
        'accept' => 
        array (
          0 => 'ASG',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Private subnet outbound',
        'answer' => 'nat gateway',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Serverless compute AWS',
        'answer' => 'lambda',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'IAM least privilege',
        'answer' => 'policy',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'CDN AWS',
        'answer' => 'cloudfront',
        'points' => 1,
      ),
    ),
    'time_minutes' => 45,
    'simulation' => true,
  ),
  'cert-cka-final' => 
  array (
    'slug' => 'cert-cka-final',
    'title' => 'Examen final — CKA',
    'course' => 'cert-cka',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Smallest K8s unit',
        'answer' => 'pod',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'View pods command',
        'answer' => 'kubectl get pods',
        'accept' => 
        array (
          0 => 'kubectl get po',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Persistent volume claim',
        'answer' => 'pvc',
        'accept' => 
        array (
          0 => 'PVC',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Network policy layer',
        'answer' => 'networkpolicy',
        'accept' => 
        array (
          0 => 'NetworkPolicy',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Control plane node',
        'answer' => 'master',
        'accept' => 
        array (
          0 => 'control plane',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Debug pod logs',
        'answer' => 'kubectl logs',
        'points' => 1,
      ),
    ),
    'time_minutes' => 60,
    'simulation' => true,
  ),
  'cert-azure-fund-final' => 
  array (
    'slug' => 'cert-azure-fund-final',
    'title' => 'Examen final — AZ-900',
    'course' => 'cert-azure-fund',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Azure object storage',
        'answer' => 'blob',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'RBAC read only',
        'answer' => 'reader',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Azure private network',
        'answer' => 'vnet',
        'accept' => 
        array (
          0 => 'VNet',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'PaaS web Azure',
        'answer' => 'app service',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Discount commit years',
        'answer' => 'reserved',
        'accept' => 
        array (
          0 => 'reservation',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Fundamentals exam code',
        'answer' => 'az-900',
        'accept' => 
        array (
          0 => 'AZ-900',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 30,
    'simulation' => true,
  ),
  'prisma-orm-final' => 
  array (
    'slug' => 'prisma-orm-final',
    'title' => 'Examen final — Prisma',
    'course' => 'prisma-orm',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Schema file name',
        'answer' => 'schema.prisma',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Dev migration command',
        'answer' => 'migrate dev',
        'accept' => 
        array (
          0 => 'prisma migrate dev',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Eager load relations',
        'answer' => 'include',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Prod never use',
        'answer' => 'db push',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Primary key attribute',
        'answer' => '@id',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Serverless connection fix',
        'answer' => 'pooler',
        'accept' => 
        array (
          0 => 'pgbouncer',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'firebase-backend-final' => 
  array (
    'slug' => 'firebase-backend-final',
    'title' => 'Examen final — Firebase',
    'course' => 'firebase-backend',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Firebase NoSQL DB',
        'answer' => 'firestore',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Auth state listener',
        'answer' => 'onauthstatechanged',
        'accept' => 
        array (
          0 => 'onAuthStateChanged',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Server verify token',
        'answer' => 'admin sdk',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Live updates Firestore',
        'answer' => 'onsnapshot',
        'accept' => 
        array (
          0 => 'onSnapshot',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Local test Firebase',
        'answer' => 'emulators',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Static hosting deploy',
        'answer' => 'firebase deploy',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'openapi-documentacion-final' => 
  array (
    'slug' => 'openapi-documentacion-final',
    'title' => 'Examen final — OpenAPI',
    'course' => 'openapi-documentacion',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'OpenAPI current version',
        'answer' => '3',
        'accept' => 
        array (
          0 => '3.x',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Reuse schema keyword',
        'answer' => '$ref',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Interactive docs UI',
        'answer' => 'swagger ui',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Breaking change version',
        'answer' => 'major',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'OpenAPI linter',
        'answer' => 'spectral',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Spec stored in',
        'answer' => 'git',
        'accept' => 
        array (
          0 => 'openapi.yaml',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'event-sourcing-cqrs-final' => 
  array (
    'slug' => 'event-sourcing-cqrs-final',
    'title' => 'Examen final — ES/CQRS',
    'course' => 'event-sourcing-cqrs',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Event store pattern',
        'answer' => 'append',
        'accept' => 
        array (
          0 => 'append-only',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'CQRS separates',
        'answer' => 'read write',
        'accept' => 
        array (
          0 => 'command query',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Rebuild state from',
        'answer' => 'replay',
        'accept' => 
        array (
          0 => 'events',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Undo saga step',
        'answer' => 'compensation',
        'accept' => 
        array (
          0 => 'compensating',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Read model lag',
        'answer' => 'eventual',
        'accept' => 
        array (
          0 => 'eventual consistency',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Skip long replay',
        'answer' => 'snapshot',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'php-avanzado-final' => 
  array (
    'slug' => 'php-avanzado-final',
    'title' => 'Examen final — PHP avanzado',
    'course' => 'php-avanzado',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'PHP 8 enum type',
        'answer' => 'enum',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Strict types declare',
        'answer' => 'strict_types',
        'accept' => 
        array (
          0 => 'declare(strict_types=1)',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Native metadata PHP 8',
        'answer' => 'attributes',
        'accept' => 
        array (
          0 => 'Attribute',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Static analysis tool',
        'answer' => 'phpstan',
        'accept' => 
        array (
          0 => 'PHPStan',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'match vs switch',
        'answer' => 'strict',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Laravel perf keep booted',
        'answer' => 'octane',
        'accept' => 
        array (
          0 => 'Octane',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'networking-devops-final' => 
  array (
    'slug' => 'networking-devops-final',
    'title' => 'Examen final — Networking',
    'course' => 'networking-devops',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'HTTPS default port',
        'answer' => '443',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Domain to IP',
        'answer' => 'dns',
        'accept' => 
        array (
          0 => 'DNS',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Private IP range',
        'answer' => '192.168',
        'accept' => 
        array (
          0 => '10.0',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Connection refused means',
        'answer' => 'port closed',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'AWS stateful firewall',
        'answer' => 'security group',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'HTTP/2 benefit',
        'answer' => 'multiplex',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'producto-tech-final' => 
  array (
    'slug' => 'producto-tech-final',
    'title' => 'Examen final — Producto tech',
    'course' => 'producto-tech',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'PM focuses on',
        'answer' => 'what why',
        'accept' => 
        array (
          0 => 'valor',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Prioritization RICE E',
        'answer' => 'effort',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Jobs to be done',
        'answer' => 'job',
        'accept' => 
        array (
          0 => 'JTBD',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'North star is',
        'answer' => 'metric',
        'accept' => 
        array (
          0 => 'metrica',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'MVP purpose',
        'answer' => 'learn',
        'accept' => 
        array (
          0 => 'validar',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Testable done criteria',
        'answer' => 'acceptance',
        'accept' => 
        array (
          0 => 'acceptance criteria',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'php-enterprise-final' => 
  array (
    'slug' => 'php-enterprise-final',
    'title' => 'Examen final — PHP Enterprise',
    'course' => 'php-enterprise',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Gestor dependencias PHP',
        'answer' => 'composer',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Framework enterprise PHP EU',
        'answer' => 'symfony',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Cache produccion PHP',
        'answer' => 'redis',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Reverse proxy PHP stack',
        'answer' => 'nginx',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Orquestacion contenedores',
        'answer' => 'kubernetes',
        'accept' => 
        array (
          0 => 'k8s',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'BD produccion recomendada',
        'answer' => 'postgresql',
        'accept' => 
        array (
          0 => 'postgres',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'html-css-js-final' => 
  array (
    'slug' => 'html-css-js-final',
    'title' => 'Examen final — HTML/CSS/JS',
    'course' => 'html-css-js',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Semantica header nav main',
        'answer' => 'html5',
        'accept' => 
        array (
          0 => 'semantic',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Flexbox eje principal',
        'answer' => 'flex-direction',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Seleccionar id CSS',
        'answer' => '#',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'DOM API buscar elemento',
        'answer' => 'queryselector',
        'accept' => 
        array (
          0 => 'querySelector',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Fetch devuelve',
        'answer' => 'promise',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Async syntax moderna',
        'answer' => 'async await',
        'accept' => 
        array (
          0 => 'async/await',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'astro-web-final' => 
  array (
    'slug' => 'astro-web-final',
    'title' => 'Examen final — Astro',
    'course' => 'astro-web',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Astro default output',
        'answer' => 'html',
        'accept' => 
        array (
          0 => 'static',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Islands architecture',
        'answer' => 'islands',
        'accept' => 
        array (
          0 => 'islas',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Routing Astro style',
        'answer' => 'file based',
        'accept' => 
        array (
          0 => 'pages',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Content collections format',
        'answer' => 'markdown',
        'accept' => 
        array (
          0 => 'mdx',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Astro vs SPA benefit',
        'answer' => 'performance',
        'accept' => 
        array (
          0 => 'menos js',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Deploy static host',
        'answer' => 'vercel',
        'accept' => 
        array (
          0 => 'netlify',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'kubernetes-final' => 
  array (
    'slug' => 'kubernetes-final',
    'title' => 'Examen final — Kubernetes',
    'course' => 'kubernetes',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Unidad minima K8s',
        'answer' => 'pod',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Replicas declarativas',
        'answer' => 'deployment',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Exponer HTTP cluster',
        'answer' => 'ingress',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Config sin secrets',
        'answer' => 'configmap',
        'accept' => 
        array (
          0 => 'ConfigMap',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Escalar por CPU',
        'answer' => 'hpa',
        'accept' => 
        array (
          0 => 'HPA',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'CLI Kubernetes',
        'answer' => 'kubectl',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'cicd-final' => 
  array (
    'slug' => 'cicd-final',
    'title' => 'Examen final — CI/CD',
    'course' => 'cicd',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'CI significa',
        'answer' => 'continuous integration',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'CD delivery vs deployment',
        'answer' => 'deploy automatico',
        'accept' => 
        array (
          0 => 'deployment',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Pipeline trigger comun',
        'answer' => 'push',
        'accept' => 
        array (
          0 => 'pull request',
        ),
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Blue green strategy',
        'answer' => 'zero downtime',
        'accept' => 
        array (
          0 => 'sin downtime',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Secrets en CI',
        'answer' => 'secrets',
        'accept' => 
        array (
          0 => 'variables',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Rollback trigger',
        'answer' => 'smoke test fail',
        'accept' => 
        array (
          0 => 'health check',
        ),
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'typescript-fundamentos-final' => 
  array (
    'slug' => 'typescript-fundamentos-final',
    'title' => 'Examen final — TypeScript',
    'course' => 'typescript-fundamentos',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'TS compila a',
        'answer' => 'javascript',
        'accept' => 
        array (
          0 => 'js',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Tipo opcional nullable',
        'answer' => '?',
        'accept' => 
        array (
          0 => 'undefined',
        ),
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Interface vs type alias',
        'answer' => 'interface',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Generics syntax',
        'answer' => 'T',
        'accept' => 
        array (
          0 => '<T>',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Strict mode config',
        'answer' => 'strict',
        'accept' => 
        array (
          0 => 'strict true',
        ),
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Infer keyword',
        'answer' => 'infer',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'nodejs-backend-final' => 
  array (
    'slug' => 'nodejs-backend-final',
    'title' => 'Examen final — Node.js',
    'course' => 'nodejs-backend',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Framework HTTP Node popular',
        'answer' => 'express',
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Middleware pattern',
        'answer' => 'middleware',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Module system ESM',
        'answer' => 'import',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'Env vars prod',
        'answer' => 'dotenv',
        'accept' => 
        array (
          0 => 'process.env',
        ),
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Process manager prod',
        'answer' => 'pm2',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'JSON API status created',
        'answer' => '201',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
  'linux-bash-final' => 
  array (
    'slug' => 'linux-bash-final',
    'title' => 'Examen final — Linux & Bash',
    'course' => 'linux-bash',
    'pass_score' => 5,
    'questions' => 
    array (
      0 => 
      array (
        'id' => 'q1',
        'q' => 'Listar archivos detallado',
        'answer' => 'ls -la',
        'accept' => 
        array (
          0 => 'ls -l',
        ),
        'points' => 1,
      ),
      1 => 
      array (
        'id' => 'q2',
        'q' => 'Permisos ejecutar bit',
        'answer' => 'x',
        'points' => 1,
      ),
      2 => 
      array (
        'id' => 'q3',
        'q' => 'Buscar en archivos',
        'answer' => 'grep',
        'points' => 1,
      ),
      3 => 
      array (
        'id' => 'q4',
        'q' => 'SSH puerto default',
        'answer' => '22',
        'points' => 2,
      ),
      4 => 
      array (
        'id' => 'q5',
        'q' => 'Script fail on error',
        'answer' => 'set -e',
        'points' => 1,
      ),
      5 => 
      array (
        'id' => 'q6',
        'q' => 'Shebang bash',
        'answer' => '#!/bin/bash',
        'points' => 1,
      ),
    ),
    'time_minutes' => 24,
  ),
);
