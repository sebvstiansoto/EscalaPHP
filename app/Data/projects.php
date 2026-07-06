<?php

declare(strict_types=1);

return [
    'bienvenida' => array (
  'title' => 'Saludo personalizado',
  'description' => 'Crea un script PHP que imprima tu nombre.',
  'steps' => 
  array (
    0 => 'Abre el Laboratorio (/laboratorio)',
    1 => 'Escribe: echo "Hola, EscalaPHP";',
    2 => 'Ejecuta y verifica la salida',
  ),
  'reward_xp' => 30,
  'validation' => 
  array (
    'type' => 'code',
    'expected_output' => 'Hola, EscalaPHP',
  ),
),
    'variables' => array (
  'title' => 'Ficha de producto',
  'description' => 'Simula una ficha de e-commerce con nombre, precio y stock.',
  'steps' => 
  array (
    0 => 'Crea $nombre = "Camiseta PHP";',
    1 => 'Crea $precio = 99; y $stock = 150;',
    2 => 'Imprime los tres valores con echo',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '$nombre',
      1 => '$precio',
      2 => '$stock',
      3 => 'echo',
    ),
  ),
),
    'condiciones' => array (
  'title' => 'Verificador de acceso',
  'description' => 'Programa que decide si un usuario puede entrar según su edad.',
  'steps' => 
  array (
    0 => 'Define $edad = 20;',
    1 => 'Usa if/else para imprimir "ok" o "menor"',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'code',
    'starter' => '$edad = 20;',
    'expected_output' => 'ok',
  ),
),
    'funciones' => array (
  'title' => 'Calculadora de descuento',
  'description' => 'Función que aplica un porcentaje de descuento a un precio.',
  'steps' => 
  array (
    0 => 'Crea function descuento($precio, $pct) { return $precio * (1 - $pct/100); }',
    1 => 'Imprime descuento(100, 20) — debe dar 80',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'function descuento',
      1 => 'return',
      2 => 'echo',
    ),
  ),
),
    'http' => array (
  'title' => 'Mapa de rutas',
  'description' => 'Identifica rutas GET y POST en EscalaPHP.',
  'steps' => 
  array (
    0 => 'Lista: /, /leccion, /laboratorio, /glosario',
    1 => 'Indica cuáles son GET y cuáles POST',
    2 => 'Abre routes/web.php y compara',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'mvc' => array (
  'title' => 'Encuentra el MVC',
  'description' => 'Localiza Modelo, Vista y Controlador en EscalaPHP.',
  'steps' => 
  array (
    0 => 'Modelo → app/Database.php',
    1 => 'Vista → resources/views/',
    2 => 'Controlador → app/Controllers/',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'base-de-datos' => array (
  'title' => 'Explora tu SQLite',
  'description' => 'Mira la base de datos real donde se guarda tu progreso.',
  'steps' => 
  array (
    0 => 'Localiza database/escala.sqlite',
    1 => 'Explora tablas progress, learner, achievements',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'cache' => array (
  'title' => 'Prueba la caché',
  'description' => 'Entiende el patrón set/get de app/Cache.php.',
  'steps' => 
  array (
    0 => 'Abre app/Cache.php',
    1 => 'Identifica métodos get y set',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'colas' => array (
  'title' => 'Diseña una cola',
  'description' => 'Diseña jobs para registro de usuarios.',
  'steps' => 
  array (
    0 => 'HTTP responde al instante',
    1 => 'Jobs: email, perfil, analytics',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'api' => array (
  'title' => 'Tu primera API',
  'description' => 'Prueba el endpoint /api/run.',
  'steps' => 
  array (
    0 => 'Abre el Laboratorio',
    1 => 'Observa POST a /api/run',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'seguridad' => array (
  'title' => 'Audita EscalaPHP',
  'description' => 'Revisa 3 prácticas de seguridad implementadas.',
  'steps' => 
  array (
    0 => 'PDO con consultas preparadas',
    1 => 'Sandbox del CodeRunner',
    2 => 'CSRF en formularios',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'proyecto-final' => array (
  'title' => 'Plan de 90 días',
  'description' => 'Escribe tu plan concreto para los próximos 3 meses.',
  'steps' => 
  array (
    0 => 'Semana 1-4: Terminar EscalaPHP',
    1 => 'Mes 2: Laravel',
    2 => 'Mes 3: Deploy + code review',
  ),
  'reward_xp' => 100,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'laravel' => array (
  'title' => 'Instala Laravel',
  'description' => 'Da el salto al framework profesional.',
  'steps' => 
  array (
    0 => 'composer create-project laravel/laravel mi-escala',
    1 => 'Recrea la home con Blade',
  ),
  'reward_xp' => 200,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'py-bienvenida' => array (
  'title' => 'Saludo Python',
  'description' => 'Imprime un saludo con print().',
  'steps' => 
  array (
    0 => 'Abre Laboratorio → Python',
    1 => 'Escribe print("Hola Python")',
    2 => 'Ejecuta y valida',
  ),
  'reward_xp' => 30,
  'validation' => 
  array (
    'type' => 'code',
    'language' => 'python',
    'expected_output' => 'Hola Python',
  ),
),
    'py-variables' => array (
  'title' => 'Ficha de producto Python',
  'description' => 'Variables nombre, precio y stock con print.',
  'steps' => 
  array (
    0 => 'nombre = "Camiseta"',
    1 => 'precio = 99',
    2 => 'print de cada variable',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'contains',
    'language' => 'python',
    'must_contain' => 
    array (
      0 => 'nombre',
      1 => 'precio',
      2 => 'print',
    ),
  ),
),
    'py-condiciones' => array (
  'title' => 'Verificador de edad',
  'description' => 'if/else con indentación Python.',
  'steps' => 
  array (
    0 => 'edad = 20',
    1 => 'if edad >= 18: print("ok")',
    2 => 'else: print("menor")',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'code',
    'language' => 'python',
    'starter' => 'edad = 20
',
    'expected_output' => 'ok',
  ),
),
    'py-bucles' => array (
  'title' => 'Contador con for',
  'description' => 'Imprime 1, 2, 3 con range().',
  'steps' => 
  array (
    0 => 'for n in range(1, 4):',
    1 => '    print(n)',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'code',
    'language' => 'python',
    'expected_output' => '1
2
3',
  ),
),
    'py-funciones' => array (
  'title' => 'Función duplicar',
  'description' => 'def duplicar(n) con return.',
  'steps' => 
  array (
    0 => 'def duplicar(n):',
    1 => '    return n * 2',
    2 => 'print(duplicar(21))',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'language' => 'python',
    'must_contain' => 
    array (
      0 => 'def duplicar',
      1 => 'return',
      2 => 'print',
    ),
  ),
),
    'py-estructuras' => array (
  'title' => 'Dict de usuario',
  'description' => 'Diccionario con clave lang.',
  'steps' => 
  array (
    0 => 'd = {"lang": "python"}',
    1 => 'print(d["lang"])',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'code',
    'language' => 'python',
    'expected_output' => 'python',
  ),
),
    'py-venv' => array (
  'title' => 'Crea un venv',
  'description' => 'Entorno virtual y pip install.',
  'steps' => 
  array (
    0 => 'python -m venv .venv',
    1 => 'Activa el entorno',
    2 => 'pip install fastapi',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'py-fastapi' => array (
  'title' => 'Esqueleto FastAPI',
  'description' => 'Identifica app = FastAPI() y @app.get.',
  'steps' => 
  array (
    0 => 'Lee la lección sobre FastAPI',
    1 => 'Identifica ruta GET y return JSON',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'py-django' => array (
  'title' => 'Explora Django',
  'description' => 'Admin, models y ORM.',
  'steps' => 
  array (
    0 => 'django-admin startproject',
    1 => 'Identifica settings.py y urls.py',
  ),
  'reward_xp' => 80,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'py-deploy' => array (
  'title' => 'Plan de deploy Python',
  'description' => 'Gunicorn + Docker para producción.',
  'steps' => 
  array (
    0 => 'requirements.txt',
    1 => 'Dockerfile con Python',
    2 => 'gunicorn uvicorn workers',
  ),
  'reward_xp' => 100,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-composer' => array (
  'title' => 'Lee un composer.json',
  'description' => 'Identifica dependencias y autoload.',
  'steps' => 
  array (
    0 => 'Abre composer.json del proyecto',
    1 => 'Identifica require y autoload PSR-4',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-git' => array (
  'title' => 'Flujo de Pull Request',
  'description' => 'Simula una rama feature y PR.',
  'steps' => 
  array (
    0 => 'git checkout -b feature/x',
    1 => 'commit',
    2 => 'abrir PR en GitHub',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-laravel-pro' => array (
  'title' => 'Modelo Eloquent',
  'description' => 'Diseña un modelo con migración.',
  'steps' => 
  array (
    0 => 'php artisan make:model Product -m',
    1 => 'Define $fillable',
    2 => 'php artisan migrate',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-symfony' => array (
  'title' => 'DI en Symfony',
  'description' => 'Entiende inyección de dependencias.',
  'steps' => 
  array (
    0 => 'Identifica services.yaml',
    1 => 'Inyecta un servicio en un controlador',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-postgresql' => array (
  'title' => 'Migra a PostgreSQL',
  'description' => 'Configura DB_DRIVER=pgsql.',
  'steps' => 
  array (
    0 => 'Copia .env.example a .env',
    1 => 'DB_DRIVER=pgsql + credenciales',
    2 => 'Levanta postgres con Docker',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-redis' => array (
  'title' => 'Caché con Redis',
  'description' => 'Diseña estrategia de caché.',
  'steps' => 
  array (
    0 => 'CACHE_DRIVER=redis',
    1 => 'Identifica qué cachear',
    2 => 'Define TTL',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-docker' => array (
  'title' => 'Dockeriza EscalaPHP',
  'description' => 'Usa el Dockerfile del proyecto.',
  'steps' => 
  array (
    0 => 'Abre Dockerfile y docker-compose.yml',
    1 => 'docker compose up --build',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-nginx' => array (
  'title' => 'Config Nginx + PHP-FPM',
  'description' => 'Entiende el reverse proxy.',
  'steps' => 
  array (
    0 => 'Nginx recibe HTTP',
    1 => 'Pasa a PHP-FPM por socket',
    2 => 'Sirve estáticos directo',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-cicd' => array (
  'title' => 'Pipeline CI',
  'description' => 'Revisa el workflow del proyecto.',
  'steps' => 
  array (
    0 => 'Abre .github/workflows/ci.yml',
    1 => 'Identifica pasos: install, test, bootstrap',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-kubernetes' => array (
  'title' => 'Cuándo usar K8s',
  'description' => 'Decide Docker vs Kubernetes.',
  'steps' => 
  array (
    0 => '1 app = Docker',
    1 => '20 servicios = K8s',
    2 => 'Justifica tu caso',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ep-arquitectura' => array (
  'title' => 'Tu visión de arquitectura',
  'description' => 'Define monolito modular vs microservicios.',
  'steps' => 
  array (
    0 => 'Empieza monolito',
    1 => 'Divide cuando duela',
    2 => 'Escribe tu decisión',
  ),
  'reward_xp' => 100,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'dk-intro' => array (
  'title' => 'Contenedor vs VM',
  'description' => 'Explica la diferencia clave.',
  'steps' => 
  array (
    0 => 'VM = hardware virtual',
    1 => 'Contenedor = comparte kernel',
    2 => 'Anota 2 ventajas',
  ),
  'reward_xp' => 30,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'dk-dockerfile' => array (
  'title' => 'Escribe un Dockerfile',
  'description' => 'Crea la receta de una imagen.',
  'steps' => 
  array (
    0 => 'FROM php:8.3-cli',
    1 => 'WORKDIR + COPY',
    2 => 'CMD final',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'dk-compose' => array (
  'title' => 'Compose multi-servicio',
  'description' => 'App + BD + Redis en un archivo.',
  'steps' => 
  array (
    0 => 'Define services',
    1 => 'volumes y networks',
    2 => 'docker compose up',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'dk-php' => array (
  'title' => 'Containeriza tu stack',
  'description' => 'Adapta el Dockerfile a PHP/Python/Node.',
  'steps' => 
  array (
    0 => 'Cambia FROM según runtime',
    1 => 'Instala dependencias',
    2 => 'Ejecuta',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'web-html' => array (
  'title' => 'Página semántica',
  'description' => 'Crea una página con header, main y footer.',
  'steps' => 
  array (
    0 => 'Estructura HTML5',
    1 => 'Etiquetas semánticas',
    2 => 'Un enlace <a>',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'web-css' => array (
  'title' => 'Layout con Flexbox',
  'description' => 'Centra una tarjeta con display: flex.',
  'steps' => 
  array (
    0 => 'Contenedor flex',
    1 => 'align-items + justify-content',
    2 => 'Estilos básicos',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'web-js' => array (
  'title' => 'Script en el navegador',
  'description' => 'console.log con tu nombre.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'js',
    'language' => 'javascript',
    'expected_output' => 'Mi nombre',
  ),
),
    'rx-jsx' => array (
  'title' => 'Tu primer componente',
  'description' => 'Función que retorna texto para mostrar.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'js',
    'language' => 'javascript',
    'expected_output' => 'Hola Componente',
  ),
),
    'rx-state' => array (
  'title' => 'Contador simulado',
  'description' => 'Incrementa un contador en JS.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'js',
    'language' => 'javascript',
    'expected_output' => '3',
  ),
),
    'rx-router' => array (
  'title' => 'Mapa de rutas',
  'description' => 'Define 3 rutas de tu SPA.',
  'steps' => 
  array (
    0 => '/',
    1 => '/cursos',
    2 => '/perfil',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rx-api' => array (
  'title' => 'Fetch simulado',
  'description' => 'Parsea JSON de una API.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'js',
    'language' => 'javascript',
    'expected_output' => 'ok',
  ),
),
    'as-intro' => array (
  'title' => 'Estructura Astro',
  'description' => 'Crea un archivo .astro con frontmatter.',
  'steps' => 
  array (
    0 => 'Bloque ---',
    1 => 'Variable titulo',
    2 => 'Etiqueta <h1>',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'as-islands' => array (
  'title' => 'Isla interactiva',
  'description' => 'Identifica qué partes de una página necesitan JS.',
  'steps' => 
  array (
    0 => 'Lista secciones estáticas',
    1 => 'Marca 1 isla interactiva',
    2 => 'Elige client:load o client:visible',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'as-deploy' => array (
  'title' => 'Plan de deploy Astro',
  'description' => 'Build + deploy en Vercel o Netlify.',
  'steps' => 
  array (
    0 => 'npm run build',
    1 => 'Conecta repo',
    2 => 'Verifica dist/ en CDN',
  ),
  'reward_xp' => 80,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'git-basics' => array (
  'title' => 'Primer commit',
  'description' => 'Inicializa repo y haz tu primer commit.',
  'steps' => 
  array (
    0 => 'git init',
    1 => 'git add .',
    2 => 'git commit -m "inicio"',
  ),
  'reward_xp' => 40,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'git-branch' => array (
  'title' => 'Rama feature',
  'description' => 'Crea rama, cambia algo y merge.',
  'steps' => 
  array (
    0 => 'git checkout -b feature/test',
    1 => 'commit',
    2 => 'merge a main',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'git-pr' => array (
  'title' => 'Abre un PR',
  'description' => 'Push y abre Pull Request en GitHub.',
  'steps' => 
  array (
    0 => 'git push -u origin feature/x',
    1 => 'Abrir PR',
    2 => 'Describir cambios',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ci-tests' => array (
  'title' => 'Revisa el CI del proyecto',
  'description' => 'Analiza .github/workflows/ci.yml de Escala.',
  'steps' => 
  array (
    0 => 'Abre ci.yml',
    1 => 'Identifica pasos install y test',
    2 => '¿Qué dispara el workflow?',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ci-deploy' => array (
  'title' => 'Plan staging → prod',
  'description' => 'Define flujo de deploy seguro.',
  'steps' => 
  array (
    0 => 'CI pasa',
    1 => 'Deploy staging',
    2 => 'Aprobación manual a prod',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ci-docker' => array (
  'title' => 'Pipeline con Docker',
  'description' => 'Añade build y push de imagen al pipeline.',
  'steps' => 
  array (
    0 => 'docker build',
    1 => 'docker push',
    2 => 'Secret para registry',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'k8s-intro' => array (
  'title' => 'Mapa del cluster',
  'description' => 'Dibuja cluster → nodes → pods de tu app.',
  'steps' => 
  array (
    0 => '1 cluster',
    1 => 'N nodes',
    2 => 'Pods con tu contenedor',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'k8s-deploy' => array (
  'title' => 'Deployment YAML',
  'description' => 'Escribe Deployment con 3 réplicas.',
  'steps' => 
  array (
    0 => 'kind: Deployment',
    1 => 'replicas: 3',
    2 => 'image de tu app',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'k8s-ingress' => array (
  'title' => 'Ingress con TLS',
  'description' => 'Expón tu API con HTTPS.',
  'steps' => 
  array (
    0 => 'kind: Ingress',
    1 => 'host configurado',
    2 => 'TLS habilitado',
  ),
  'reward_xp' => 80,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sql-select' => array (
  'title' => 'Consulta por ciudad',
  'description' => 'SELECT de usuarios filtrados.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'sql',
    'expected_output' => 'name
Ana',
  ),
),
    'sql-joins' => array (
  'title' => 'Pedidos con JOIN',
  'description' => 'Une users y orders.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'sql',
    'expected_output' => 'name|product|amount
Ana|Laptop|1200',
  ),
),
    'sql-index' => array (
  'title' => 'Índice en producción',
  'description' => 'Define índice para columna frecuente.',
  'steps' => 
  array (
    0 => 'Identifica columna en WHERE',
    1 => 'CREATE INDEX',
    2 => 'Justifica el beneficio',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sql-tx' => array (
  'title' => 'Transacción segura',
  'description' => 'Diseña transferencia con BEGIN/COMMIT.',
  'steps' => 
  array (
    0 => 'BEGIN',
    1 => 'Operaciones relacionadas',
    2 => 'COMMIT o ROLLBACK',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'lv-routes' => array (
  'title' => 'Rutas REST',
  'description' => 'Define 3 rutas GET/POST en routes/web.php.',
  'steps' => 
  array (
    0 => 'Route::get',
    1 => 'Route::post',
    2 => 'Apunta a controller',
  ),
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'lv-eloquent' => array (
  'title' => 'Modelo y consulta',
  'description' => 'Crea modelo User y consulta con Eloquent.',
  'steps' => 
  array (
    0 => 'php artisan make:model',
    1 => 'User::all()',
    2 => 'where email',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'lv-api' => array (
  'title' => 'Endpoint JSON',
  'description' => 'API route que devuelve JSON con Resource.',
  'steps' => 
  array (
    0 => 'routes/api.php',
    1 => 'Controller',
    2 => 'return json',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rx-effects' => array (
  'title' => 'Fetch al montar',
  'description' => 'Simula useEffect con fetch a /api.',
  'steps' => 
  array (
    0 => 'useEffect',
    1 => 'fetch',
    2 => 'setState con datos',
  ),
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rx-forms' => array (
  'title' => 'Formulario controlado',
  'description' => 'Input con useState y submit handler.',
  'reward_xp' => 55,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sec-sql' => array (
  'title' => 'Query segura PDO',
  'description' => 'Reescribe query vulnerable con prepare.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'prepare',
      1 => 'execute',
    ),
  ),
),
    'sec-auth' => array (
  'title' => 'Login seguro',
  'description' => 'password_hash + password_verify en flujo login.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'password_hash',
      1 => 'password_verify',
    ),
  ),
),
    'rd-cache' => array (
  'title' => 'Cache-aside manual',
  'description' => 'Pseudocódigo: GET redis, si miss → BD → SET.',
  'steps' => 
  array (
    0 => 'GET clave',
    1 => 'Miss → query SQL',
    2 => 'SET con EXPIRE',
  ),
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rd-php' => array (
  'title' => 'Cache en Laravel',
  'description' => 'Cache::remember con closure y TTL.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Cache::',
      1 => 'remember',
    ),
  ),
),
    'pg-indexes' => array (
  'title' => 'Índice justificado',
  'description' => 'CREATE INDEX + explica qué query mejora.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'CREATE INDEX',
    ),
  ),
),
    'pg-queries' => array (
  'title' => 'CTE de ranking',
  'description' => 'WITH + ORDER BY LIMIT top 10.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tp-unit' => array (
  'title' => 'Primer test unitario',
  'description' => 'Test que assertea una función pura.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'test',
      1 => 'assert',
    ),
  ),
),
    'tp-pest' => array (
  'title' => 'Test con Pest',
  'description' => 'expect()->toBe() en un caso real.',
  'reward_xp' => 55,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'expect',
      1 => 'toBe',
    ),
  ),
),
    'tw-layout' => array (
  'title' => 'Card con Flex',
  'description' => 'Tarjeta con flex, gap y padding Tailwind.',
  'reward_xp' => 45,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'flex',
      1 => 'p-',
    ),
  ),
),
    'tw-react' => array (
  'title' => 'Componente Button',
  'description' => 'Botón React con className Tailwind.',
  'reward_xp' => 55,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'className',
      1 => 'rounded',
    ),
  ),
),
    'fa-pydantic' => array (
  'title' => 'Schema Pydantic',
  'description' => 'BaseModel con validación de email y edad.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'BaseModel',
      1 => 'class',
    ),
  ),
),
    'fa-auth' => array (
  'title' => 'Endpoint protegido',
  'description' => 'Ruta con Depends(get_current_user).',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'pt-repository' => array (
  'title' => 'UserRepository',
  'description' => 'Interface + implementación con findByEmail.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'interface',
      1 => 'function',
    ),
  ),
),
    'pt-solid' => array (
  'title' => 'Refactor SRP',
  'description' => 'Separa responsabilidades en dos clases.',
  'steps' => 
  array (
    0 => 'Identifica dos responsabilidades',
    1 => 'Extrae clase',
    2 => 'Controller delgado',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sf-routing' => array (
  'title' => 'Ruta JSON Symfony',
  'description' => 'Controller con #[Route] y JsonResponse.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Route',
    ),
  ),
),
    'nx-phpfpm' => array (
  'title' => 'Bloque PHP-FPM',
  'description' => 'location ~ \\.php$ con fastcgi_pass.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'fastcgi_pass',
      1 => 'location',
    ),
  ),
),
    'dj-serializers' => array (
  'title' => 'ModelSerializer',
  'description' => 'Serializer para modelo User con 3 campos.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Serializer',
      1 => 'Meta',
    ),
  ),
),
    'al-arrays' => array (
  'title' => 'Two Sum en JS',
  'description' => 'Hash map para encontrar par que suma target.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ws-browser' => array (
  'title' => 'Cliente WS mínimo',
  'description' => 'WebSocket + onmessage + JSON.parse.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'WebSocket',
    ),
  ),
),
    'gq-queries' => array (
  'title' => 'Query GraphQL',
  'description' => 'Escribe query con user { id name }.',
  'reward_xp' => 55,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'query',
      1 => 'user',
    ),
  ),
),
    'ar-monolito' => array (
  'title' => 'Diagrama monolito',
  'description' => 'Dibuja módulos Users, Orders, Billing en un deploy.',
  'steps' => 
  array (
    0 => 'Un solo deploy',
    1 => '3 módulos',
    2 => 'BD compartida o schemas',
  ),
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'next-api' => array (
  'title' => 'API Route Next.js',
  'description' => 'route.ts con GET y Response.json().',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'export',
      1 => 'GET',
      2 => 'json',
    ),
  ),
),
    'next-routing' => array (
  'title' => 'Página dinámica',
  'description' => 'page.tsx con params.slug en App Router.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'params',
      1 => 'slug',
    ),
  ),
),
    'mq-laravel' => array (
  'title' => 'Job Laravel',
  'description' => 'Clase Job con handle() y dispatch().',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'handle',
      1 => 'dispatch',
    ),
  ),
),
    'mq-rabbitmq' => array (
  'title' => 'Exchange RabbitMQ',
  'description' => 'Describe exchange direct + queue + binding.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'aw-ec2' => array (
  'title' => 'Security Group',
  'description' => 'Reglas inbound: 22 solo tu IP, 80/443 público.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '22',
      1 => '80',
    ),
  ),
),
    'aw-deploy' => array (
  'title' => 'Stack AWS típico',
  'description' => 'ALB → EC2 → RDS + S3 para assets.',
  'steps' => 
  array (
    0 => 'ALB público',
    1 => 'EC2 en subnet privada',
    2 => 'RDS multi-AZ',
  ),
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'eh-report' => array (
  'title' => 'Reporte de vulnerabilidad',
  'description' => 'Título, pasos, impacto, severidad y fix.',
  'reward_xp' => 75,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'impacto',
      1 => 'pasos',
    ),
  ),
),
    'eh-web' => array (
  'title' => 'Checklist OWASP',
  'description' => 'Lista 5 pruebas web en lab autorizado.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'go-http' => array (
  'title' => 'Handler /health Go',
  'description' => 'ListenAndServe con JSON ok.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ListenAndServe',
    ),
  ),
),
    'go-concurrency' => array (
  'title' => 'Goroutine + channel',
  'description' => 'go func() y channel string.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'go ',
      1 => 'chan',
    ),
  ),
),
    'jv-rest' => array (
  'title' => 'GetMapping Spring',
  'description' => '@GetMapping /users/{id}.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'GetMapping',
    ),
  ),
),
    'mg-crud' => array (
  'title' => 'find MongoDB',
  'description' => 'Query find con filtro email.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'find',
    ),
  ),
),
    'vu-composition' => array (
  'title' => 'Composable Vue',
  'description' => 'ref + computed en script setup.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ref',
      1 => 'computed',
    ),
  ),
),
    'rn-components' => array (
  'title' => 'Pantalla RN',
  'description' => 'View, Text, StyleSheet.create.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'View',
      1 => 'StyleSheet',
    ),
  ),
),
    'sd-case' => array (
  'title' => 'Diseño URL shortener',
  'description' => 'API + Redis + redirect 302.',
  'reward_xp' => 75,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '302',
      1 => 'Redis',
    ),
  ),
),
    'tf-hcl' => array (
  'title' => 'Resource Terraform',
  'description' => 'resource block con provider AWS.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'resource',
    ),
  ),
),
    'kf-producers' => array (
  'title' => 'Producer Kafka',
  'description' => 'Topic + key + acks=all.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gr-proto' => array (
  'title' => 'Archivo proto',
  'description' => 'message + service rpc.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'service',
      1 => 'rpc',
    ),
  ),
),
    'oa-jwt' => array (
  'title' => 'Validar JWT claims',
  'description' => 'Lista exp, iss, aud a verificar.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'exp',
      1 => 'aud',
    ),
  ),
),
    'ob-metrics' => array (
  'title' => 'Query PromQL',
  'description' => 'rate(http_requests_total[5m]).',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'rate',
    ),
  ),
),
    'ai-rag' => array (
  'title' => 'Pipeline RAG',
  'description' => 'Describe chunk, embed, retrieve.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'embed',
      1 => 'chunk',
    ),
  ),
),
    'rs-ownership' => array (
  'title' => 'Borrow en Rust',
  'description' => 'Referencia & vs &mut.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ng-components' => array (
  'title' => 'Componente Angular',
  'description' => '@Component con selector.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Component',
    ),
  ),
),
    'cc-refactor' => array (
  'title' => 'Renombrar función',
  'description' => 'Nombre que comunica intención.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'st-webhooks' => array (
  'title' => 'Webhook Stripe',
  'description' => 'Verificar signature + event id.',
  'reward_xp' => 75,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'signature',
      1 => 'event',
    ),
  ),
),
    'fl-widgets' => array (
  'title' => 'StatefulWidget',
  'description' => 'setState increment counter.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'setState',
    ),
  ),
),
    'kt-compose' => array (
  'title' => '@Composable',
  'description' => 'Pantalla Compose con Text.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Composable',
    ),
  ),
),
    'es-query' => array (
  'title' => 'Query ES match',
  'description' => 'JSON query match field.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'match',
    ),
  ),
),
    'hm-charts' => array (
  'title' => 'Helm values',
  'description' => '{{ .Values.replicaCount }}.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Values',
    ),
  ),
),
    'an-playbook' => array (
  'title' => 'Playbook YAML',
  'description' => 'hosts + tasks + apt module.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'hosts',
      1 => 'tasks',
    ),
  ),
),
    'wc-signaling' => array (
  'title' => 'Signaling flow',
  'description' => 'Describe offer answer ICE.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'pwa-manifest' => array (
  'title' => 'manifest.json',
  'description' => 'name, start_url, display standalone.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'manifest',
      1 => 'standalone',
    ),
  ),
),
    'a11y-aria' => array (
  'title' => 'ARIA dialog',
  'description' => 'role=dialog + focus trap concept.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'dialog',
    ),
  ),
),
    'wp-hooks' => array (
  'title' => 'add_action hook',
  'description' => 'Hook init con callback.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'add_action',
    ),
  ),
),
    'w3-solidity' => array (
  'title' => 'Contrato Solidity',
  'description' => 'pragma solidity ^0.8.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'pragma',
      1 => 'solidity',
    ),
  ),
),
    'pl-selectors' => array (
  'title' => 'Locator Playwright',
  'description' => 'getByRole button click.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'getByRole',
    ),
  ),
),
    'sv-components' => array (
  'title' => 'Reactive Svelte',
  'description' => '$: doubled = count * 2.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '$:',
    ),
  ),
),
    'el-ipc' => array (
  'title' => 'IPC preload',
  'description' => 'contextBridge.exposeInMainWorld.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'contextBridge',
    ),
  ),
),
    'db-deno' => array (
  'title' => 'Deno.serve handler',
  'description' => 'Response OK con Deno.serve.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Deno.serve',
    ),
  ),
),
    'db-bun' => array (
  'title' => 'Bun.serve',
  'description' => 'Servidor HTTP con Bun.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Bun.serve',
    ),
  ),
),
    'sb-db' => array (
  'title' => 'Query Supabase',
  'description' => '.from("posts").select("*").',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'from',
    ),
  ),
),
    'fg-spec' => array (
  'title' => 'Inspect CSS',
  'description' => 'Copia padding y font-size Dev Mode.',
  'reward_xp' => 55,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ag-sprint' => array (
  'title' => 'Sprint backlog',
  'description' => '3 user stories INVEST format.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'story',
    ),
  ),
),
    'tx-adr' => array (
  'title' => 'ADR template',
  'description' => 'Contexto decisión consecuencias.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'decision',
    ),
  ),
),
    'ca-network' => array (
  'title' => 'VPC design',
  'description' => '2 AZ public private NAT.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'VPC',
    ),
  ),
),
    'ck-kubectl' => array (
  'title' => 'kubectl debug',
  'description' => 'kubectl logs + describe pod.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'kubectl',
    ),
  ),
),
    'azc-iam' => array (
  'title' => 'RBAC roles',
  'description' => 'Owner Contributor Reader diff.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Contributor',
    ),
  ),
),
    'ps-schema' => array (
  'title' => 'Prisma model',
  'description' => 'model User id email @unique.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'model User',
    ),
  ),
),
    'fb-firestore' => array (
  'title' => 'Firestore query',
  'description' => 'query where orderBy limit.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'query',
    ),
  ),
),
    'od-spec' => array (
  'title' => 'OpenAPI paths',
  'description' => 'openapi 3 paths /users get.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'paths',
    ),
  ),
),
    'ev-events' => array (
  'title' => 'Domain event name',
  'description' => 'Past tense OrderPlaced event.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Placed',
    ),
  ),
),
    'pav-attributes' => array (
  'title' => 'PHP Attribute',
  'description' => '#[Attribute] custom class.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Attribute',
    ),
  ),
),
    'nw-tools' => array (
  'title' => 'Debug connectivity',
  'description' => 'curl -v vs nc port test.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ptm-specs' => array (
  'title' => 'PRD acceptance',
  'description' => 'Given when then criteria.',
  'reward_xp' => 65,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'acceptance',
    ),
  ),
),
    'py-excepciones' => array (
  'title' => 'Práctica: Excepciones y errores',
  'description' => 'Consolida «Excepciones y errores» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'code',
    'expected_output' => 'div0',
  ),
),
    'py-clases' => array (
  'title' => 'Práctica: Clases y POO',
  'description' => 'Consolida «Clases y POO» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'code',
    'expected_output' => '3',
  ),
),
    'py-asyncio' => array (
  'title' => 'Práctica: Asyncio y concurrencia',
  'description' => 'Consolida «Asyncio y concurrencia» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'async def',
      1 => 'await',
    ),
  ),
),
    'py-testing' => array (
  'title' => 'Práctica: Tests con pytest',
  'description' => 'Consolida «Tests con pytest» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'def test_',
      1 => 'assert',
    ),
  ),
),
    'web-forms' => array (
  'title' => 'Práctica: Formularios y validación',
  'description' => 'Consolida «Formularios y validación» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'required',
    ),
  ),
),
    'web-grid' => array (
  'title' => 'Práctica: CSS Grid y layouts',
  'description' => 'Consolida «CSS Grid y layouts» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'display: grid',
      1 => 'gap',
    ),
  ),
),
    'web-dom' => array (
  'title' => 'Práctica: Manipular el DOM',
  'description' => 'Consolida «Manipular el DOM» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'const el = { textContent: "Hola" };\\nconsole.log(el.textContent);',
    ),
  ),
),
    'web-fetch' => array (
  'title' => 'Práctica: Fetch y APIs REST',
  'description' => 'Consolida «Fetch y APIs REST» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'const data = JSON.parse(\'{"ok":true}\');\\nconsole.log(data.ok);',
    ),
  ),
),
    'web-async' => array (
  'title' => 'Práctica: Async/await y Promesas',
  'description' => 'Consolida «Async/await y Promesas» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Promise.resolve(42).then(n => console.log(n));',
    ),
  ),
),
    'rx-context' => array (
  'title' => 'Práctica: Context API',
  'description' => 'Consolida «Context API» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'compartir',
    ),
  ),
),
    'rx-hooks' => array (
  'title' => 'Práctica: Custom hooks y useReducer',
  'description' => 'Consolida «Custom hooks y useReducer» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'const r = (s,a) => s + a;\\nconsole.log(r(10, 5));',
    ),
  ),
),
    'as-routing' => array (
  'title' => 'Práctica: Rutas y páginas dinámicas',
  'description' => 'Consolida «Rutas y páginas dinámicas» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'src/pages/',
    ),
  ),
),
    'as-content' => array (
  'title' => 'Práctica: Content Collections',
  'description' => 'Consolida «Content Collections» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'markdown',
    ),
  ),
),
    'as-seo' => array (
  'title' => 'Práctica: SEO y performance',
  'description' => 'Consolida «SEO y performance» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'meta',
      1 => 'description',
    ),
  ),
),
    'dk-volumes' => array (
  'title' => 'Práctica: Volúmenes y persistencia',
  'description' => 'Consolida «Volúmenes y persistencia» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'volumes',
      1 => './app',
    ),
  ),
),
    'dk-network' => array (
  'title' => 'Práctica: Redes entre contenedores',
  'description' => 'Consolida «Redes entre contenedores» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ports',
      1 => '8000',
    ),
  ),
),
    'dk-prod' => array (
  'title' => 'Práctica: Docker en producción',
  'description' => 'Consolida «Docker en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'k8s-config' => array (
  'title' => 'Práctica: ConfigMaps y Secrets',
  'description' => 'Consolida «ConfigMaps y Secrets» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'kind: ConfigMap',
    ),
  ),
),
    'k8s-hpa' => array (
  'title' => 'Práctica: Auto-scaling (HPA)',
  'description' => 'Consolida «Auto-scaling (HPA)» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'HorizontalPodAutoscaler',
    ),
  ),
),
    'k8s-ops' => array (
  'title' => 'Práctica: Operaciones día a día',
  'description' => 'Consolida «Operaciones día a día» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'kubectl rollout',
      1 => 'undo',
    ),
  ),
),
    'ci-matrix' => array (
  'title' => 'Práctica: Matrix builds multi-versión',
  'description' => 'Consolida «Matrix builds multi-versión» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'strategy:',
      1 => 'matrix:',
      2 => 'php',
    ),
  ),
),
    'ci-env' => array (
  'title' => 'Práctica: Entornos y approvals',
  'description' => 'Consolida «Entornos y approvals» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ci-rollback' => array (
  'title' => 'Práctica: Rollback y health checks',
  'description' => 'Consolida «Rollback y health checks» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'curl',
      1 => 'health',
    ),
  ),
),
    'git-remote' => array (
  'title' => 'Práctica: Remotos, push y pull',
  'description' => 'Consolida «Remotos, push y pull» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'git pull',
      1 => 'origin',
      2 => 'main',
    ),
  ),
),
    'git-conflict' => array (
  'title' => 'Práctica: Resolver conflictos de merge',
  'description' => 'Consolida «Resolver conflictos de merge» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'git-stash' => array (
  'title' => 'Práctica: Stash y trabajo en progreso',
  'description' => 'Consolida «Stash y trabajo en progreso» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'git stash',
    ),
  ),
),
    'git-rebase' => array (
  'title' => 'Práctica: Rebase vs merge',
  'description' => 'Consolida «Rebase vs merge» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'git rebase',
      1 => 'main',
    ),
  ),
),
    'sql-agg' => array (
  'title' => 'Práctica: Agregaciones y GROUP BY',
  'description' => 'Consolida «Agregaciones y GROUP BY» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'group',
    ),
  ),
),
    'sql-ddl' => array (
  'title' => 'Práctica: CREATE TABLE y migraciones',
  'description' => 'Consolida «CREATE TABLE y migraciones» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'CREATE TABLE',
      1 => 'PRIMARY KEY',
    ),
  ),
),
    'sql-design' => array (
  'title' => 'Práctica: Normalización y diseño',
  'description' => 'Consolida «Normalización y diseño» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'uno',
    ),
  ),
),
    'ts-intro' => array (
  'title' => 'Práctica: Introducción a TypeScript',
  'description' => 'Consolida «Introducción a TypeScript» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'convierte',
    ),
  ),
),
    'ts-types' => array (
  'title' => 'Práctica: Tipos básicos y anotaciones',
  'description' => 'Consolida «Tipos básicos y anotaciones» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'console.log(typeof 10);',
    ),
  ),
),
    'ts-interfaces' => array (
  'title' => 'Práctica: Interfaces y type aliases',
  'description' => 'Consolida «Interfaces y type aliases» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'interface Product',
      1 => 'id:',
      2 => 'name:',
    ),
  ),
),
    'ts-generics' => array (
  'title' => 'Práctica: Genéricos',
  'description' => 'Consolida «Genéricos» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'function id',
      1 => '<T>',
      2 => ': T',
    ),
  ),
),
    'ts-react' => array (
  'title' => 'Práctica: TypeScript en React',
  'description' => 'Consolida «TypeScript en React» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'interface',
    ),
  ),
),
    'ts-node' => array (
  'title' => 'Práctica: TypeScript en Node.js',
  'description' => 'Consolida «TypeScript en Node.js» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'strict',
      1 => 'true',
    ),
  ),
),
    'nd-intro' => array (
  'title' => 'Práctica: Node.js y el runtime V8',
  'description' => 'Consolida «Node.js y el runtime V8» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'console.log("Node " + 20);',
    ),
  ),
),
    'nd-express' => array (
  'title' => 'Práctica: Express: tu primer servidor',
  'description' => 'Consolida «Express: tu primer servidor» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'app.listen',
      1 => '3000',
    ),
  ),
),
    'nd-api' => array (
  'title' => 'Práctica: API REST con JSON',
  'description' => 'Consolida «API REST con JSON» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'console.log(JSON.stringify([{id:1}]));',
    ),
  ),
),
    'nd-middleware' => array (
  'title' => 'Práctica: Middleware y validación',
  'description' => 'Consolida «Middleware y validación» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'pasa',
    ),
  ),
),
    'nd-db' => array (
  'title' => 'Práctica: Conectar a base de datos',
  'description' => 'Consolida «Conectar a base de datos» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'SELECT',
      1 => 'users',
      2 => '$1',
    ),
  ),
),
    'nd-deploy' => array (
  'title' => 'Práctica: Deploy y variables de entorno',
  'description' => 'Consolida «Deploy y variables de entorno» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'variables',
    ),
  ),
),
    'lx-intro' => array (
  'title' => 'Práctica: La terminal y el shell',
  'description' => 'Consolida «La terminal y el shell» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ls',
      1 => '-la',
    ),
  ),
),
    'lx-files' => array (
  'title' => 'Práctica: Archivos y directorios',
  'description' => 'Consolida «Archivos y directorios» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'cp',
      1 => '-r',
    ),
  ),
),
    'lx-perms' => array (
  'title' => 'Práctica: Permisos chmod y chown',
  'description' => 'Consolida «Permisos chmod y chown» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'lx-grep' => array (
  'title' => 'Práctica: Pipes, grep y find',
  'description' => 'Consolida «Pipes, grep y find» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'grep',
      1 => '-r',
      2 => 'TODO',
    ),
  ),
),
    'lx-scripts' => array (
  'title' => 'Práctica: Scripts bash',
  'description' => 'Consolida «Scripts bash» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'if',
      1 => '-f',
      2 => 'archivo',
    ),
  ),
),
    'lx-ssh' => array (
  'title' => 'Práctica: SSH y servidores remotos',
  'description' => 'Consolida «SSH y servidores remotos» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ssh',
      1 => '@',
    ),
  ),
),
    'lv-intro' => array (
  'title' => 'Práctica: Introducción a Laravel',
  'description' => 'Consolida «Introducción a Laravel» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'php',
    ),
  ),
),
    'lv-blade' => array (
  'title' => 'Práctica: Vistas con Blade',
  'description' => 'Consolida «Vistas con Blade» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '@foreach',
      1 => '@endforeach',
    ),
  ),
),
    'lv-migrations' => array (
  'title' => 'Práctica: Migraciones y seeders',
  'description' => 'Consolida «Migraciones y seeders» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Schema::create',
    ),
  ),
),
    'lv-auth' => array (
  'title' => 'Práctica: Autenticación y middleware',
  'description' => 'Consolida «Autenticación y middleware» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'auth',
    ),
  ),
),
    'fa-routing' => array (
  'title' => 'Práctica: Routing avanzado',
  'description' => 'Consolida «Routing avanzado» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '@app.get',
      1 => 'item_id',
    ),
  ),
),
    'fa-deps' => array (
  'title' => 'Práctica: Dependency Injection',
  'description' => 'Consolida «Dependency Injection» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Depends',
    ),
  ),
),
    'fa-db' => array (
  'title' => 'Práctica: SQLAlchemy y persistencia',
  'description' => 'Consolida «SQLAlchemy y persistencia» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'sqlalchemy',
    ),
  ),
),
    'fa-testing' => array (
  'title' => 'Práctica: Tests y deploy',
  'description' => 'Consolida «Tests y deploy» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'TestClient',
    ),
  ),
),
    'sec-owasp' => array (
  'title' => 'Práctica: OWASP Top 10',
  'description' => 'Consolida «OWASP Top 10» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'lista',
    ),
  ),
),
    'sec-xss' => array (
  'title' => 'Práctica: XSS — Cross-Site Scripting',
  'description' => 'Consolida «XSS — Cross-Site Scripting» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'htmlspecialchars',
      1 => 'ENT_QUOTES',
    ),
  ),
),
    'sec-csrf' => array (
  'title' => 'Práctica: CSRF — Cross-Site Request Forgery',
  'description' => 'Consolida «CSRF — Cross-Site Request Forgery» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '@csrf',
    ),
  ),
),
    'sec-headers' => array (
  'title' => 'Práctica: Headers HTTP y HTTPS',
  'description' => 'Consolida «Headers HTTP y HTTPS» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'fuerza',
    ),
  ),
),
    'sec-api' => array (
  'title' => 'Práctica: APIs seguras',
  'description' => 'Consolida «APIs seguras» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rd-intro' => array (
  'title' => 'Práctica: Qué es Redis y cuándo usarlo',
  'description' => 'Consolida «Qué es Redis y cuándo usarlo» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rd-strings' => array (
  'title' => 'Práctica: Strings: SET, GET y TTL',
  'description' => 'Consolida «Strings: SET, GET y TTL» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'SET',
      1 => 'EXPIRE',
    ),
  ),
),
    'rd-structures' => array (
  'title' => 'Práctica: Hashes, lists y sets',
  'description' => 'Consolida «Hashes, lists y sets» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rd-sessions' => array (
  'title' => 'Práctica: Sesiones y rate limiting',
  'description' => 'Consolida «Sesiones y rate limiting» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'INCR',
    ),
  ),
),
    'pg-intro' => array (
  'title' => 'Práctica: PostgreSQL vs SQLite y MySQL',
  'description' => 'Consolida «PostgreSQL vs SQLite y MySQL» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'producción',
    ),
  ),
),
    'pg-types' => array (
  'title' => 'Práctica: Tipos y JSONB',
  'description' => 'Consolida «Tipos y JSONB» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'JSONB',
    ),
  ),
),
    'pg-migrations' => array (
  'title' => 'Práctica: Migraciones y esquema',
  'description' => 'Consolida «Migraciones y esquema» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'REFERENCES',
      1 => 'users',
    ),
  ),
),
    'pg-prod' => array (
  'title' => 'Práctica: PostgreSQL en producción',
  'description' => 'Consolida «PostgreSQL en producción» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'variable',
    ),
  ),
),
    'tp-intro' => array (
  'title' => 'Práctica: Por qué testear y PHPUnit',
  'description' => 'Consolida «Por qué testear y PHPUnit» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'assertEquals',
    ),
  ),
),
    'tp-mocks' => array (
  'title' => 'Práctica: Mocks y stubs',
  'description' => 'Consolida «Mocks y stubs» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'createMock',
    ),
  ),
),
    'tp-integration' => array (
  'title' => 'Práctica: Tests de integración',
  'description' => 'Consolida «Tests de integración» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'sqlite',
    ),
  ),
),
    'tp-api' => array (
  'title' => 'Práctica: Tests de API HTTP',
  'description' => 'Consolida «Tests de API HTTP» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'assertStatus',
      1 => '201',
    ),
  ),
),
    'tw-intro' => array (
  'title' => 'Práctica: Utility-first con Tailwind',
  'description' => 'Consolida «Utility-first con Tailwind» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'componer',
    ),
  ),
),
    'tw-responsive' => array (
  'title' => 'Práctica: Diseño responsive',
  'description' => 'Consolida «Diseño responsive» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'grid-cols-1',
      1 => 'md:grid-cols-3',
    ),
  ),
),
    'tw-components' => array (
  'title' => 'Práctica: Botones, cards y formularios',
  'description' => 'Consolida «Botones, cards y formularios» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'hover:bg',
    ),
  ),
),
    'tw-dark' => array (
  'title' => 'Práctica: Modo oscuro',
  'description' => 'Consolida «Modo oscuro» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'dark:bg',
    ),
  ),
),
    'pt-intro' => array (
  'title' => 'Práctica: Introducción a patrones de diseño',
  'description' => 'Consolida «Introducción a patrones de diseño» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'resolver',
    ),
  ),
),
    'pt-singleton' => array (
  'title' => 'Práctica: Singleton y Factory',
  'description' => 'Consolida «Singleton y Factory» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'estado',
    ),
  ),
),
    'pt-strategy' => array (
  'title' => 'Práctica: Strategy y Observer',
  'description' => 'Consolida «Strategy y Observer» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'strategy',
    ),
  ),
),
    'pt-di' => array (
  'title' => 'Práctica: Inyección de dependencias',
  'description' => 'Consolida «Inyección de dependencias» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'dependencias',
    ),
  ),
),
    'sf-intro' => array (
  'title' => 'Práctica: Introducción a Symfony',
  'description' => 'Consolida «Introducción a Symfony» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'symfony',
    ),
  ),
),
    'sf-di' => array (
  'title' => 'Práctica: Dependency Injection Container',
  'description' => 'Consolida «Dependency Injection Container» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'config/services.yaml',
    ),
  ),
),
    'sf-doctrine' => array (
  'title' => 'Práctica: Doctrine ORM',
  'description' => 'Consolida «Doctrine ORM» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'doctrine',
    ),
  ),
),
    'sf-forms' => array (
  'title' => 'Práctica: Formularios y validación',
  'description' => 'Consolida «Formularios y validación» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'validación',
    ),
  ),
),
    'sf-api' => array (
  'title' => 'Práctica: API Platform y JSON',
  'description' => 'Consolida «API Platform y JSON» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'crud',
    ),
  ),
),
    'nx-intro' => array (
  'title' => 'Práctica: Qué es Nginx',
  'description' => 'Consolida «Qué es Nginx» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'nx-config' => array (
  'title' => 'Práctica: nginx.conf y server blocks',
  'description' => 'Consolida «nginx.conf y server blocks» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'server_name',
      1 => 'ejemplo.com',
    ),
  ),
),
    'nx-ssl' => array (
  'title' => 'Práctica: HTTPS y TLS',
  'description' => 'Consolida «HTTPS y TLS» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'nx-proxy' => array (
  'title' => 'Práctica: Proxy a Node, Python o upstreams',
  'description' => 'Consolida «Proxy a Node, Python o upstreams» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'proxy_pass',
    ),
  ),
),
    'nx-ops' => array (
  'title' => 'Práctica: Logs, rate limit y deploy',
  'description' => 'Consolida «Logs, rate limit y deploy» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'dj-intro' => array (
  'title' => 'Práctica: Django REST Framework',
  'description' => 'Consolida «Django REST Framework» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'extensión',
    ),
  ),
),
    'dj-viewsets' => array (
  'title' => 'Práctica: ViewSets y Routers',
  'description' => 'Consolida «ViewSets y Routers» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'list,',
    ),
  ),
),
    'dj-auth' => array (
  'title' => 'Práctica: Autenticación API',
  'description' => 'Consolida «Autenticación API» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'authorization:',
    ),
  ),
),
    'dj-filters' => array (
  'title' => 'Práctica: Filtros, paginación y búsqueda',
  'description' => 'Consolida «Filtros, paginación y búsqueda» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'rendimiento',
    ),
  ),
),
    'dj-deploy' => array (
  'title' => 'Práctica: Deploy Django + DRF',
  'description' => 'Consolida «Deploy Django + DRF» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'gunicorn',
    ),
  ),
),
    'al-complejidad' => array (
  'title' => 'Práctica: Complejidad Big O',
  'description' => 'Consolida «Complejidad Big O» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'o(n)',
    ),
  ),
),
    'al-punteros' => array (
  'title' => 'Práctica: Two pointers y sliding window',
  'description' => 'Consolida «Two pointers y sliding window» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'console.log("aba" === "aba".split("").reverse().join(""));',
    ),
  ),
),
    'al-recursion' => array (
  'title' => 'Práctica: Recursión y divide & conquer',
  'description' => 'Consolida «Recursión y divide & conquer» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'function f(n){return n<=1?1:n*f(n-1);}\\nconsole.log(f(4));',
    ),
  ),
),
    'al-arboles' => array (
  'title' => 'Práctica: Árboles y BFS/DFS',
  'description' => 'Consolida «Árboles y BFS/DFS» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'cola',
    ),
  ),
),
    'al-entrevista' => array (
  'title' => 'Práctica: Estrategia en entrevistas',
  'description' => 'Consolida «Estrategia en entrevistas» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'clarificar',
    ),
  ),
),
    'ws-intro' => array (
  'title' => 'Práctica: HTTP vs WebSockets',
  'description' => 'Consolida «HTTP vs WebSockets» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ws:',
    ),
  ),
),
    'ws-node' => array (
  'title' => 'Práctica: Servidor con Node.js',
  'description' => 'Consolida «Servidor con Node.js» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'WebSocketServer',
    ),
  ),
),
    'ws-php' => array (
  'title' => 'Práctica: WebSockets en PHP (Laravel)',
  'description' => 'Consolida «WebSockets en PHP (Laravel)» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'reverb',
    ),
  ),
),
    'ws-scale' => array (
  'title' => 'Práctica: Escala y Redis pub/sub',
  'description' => 'Consolida «Escala y Redis pub/sub» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'broadcast',
    ),
  ),
),
    'ws-react' => array (
  'title' => 'Práctica: React + WebSocket',
  'description' => 'Consolida «React + WebSocket» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'evitar',
    ),
  ),
),
    'gq-intro' => array (
  'title' => 'Práctica: GraphQL vs REST',
  'description' => 'Consolida «GraphQL vs REST» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'recibes',
    ),
  ),
),
    'gq-mutations' => array (
  'title' => 'Práctica: Mutations',
  'description' => 'Consolida «Mutations» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'mutation',
      1 => 'createPost',
    ),
  ),
),
    'gq-apollo' => array (
  'title' => 'Práctica: Cliente React con Apollo',
  'description' => 'Consolida «Cliente React con Apollo» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'usequery',
    ),
  ),
),
    'gq-server' => array (
  'title' => 'Práctica: Servidor GraphQL en Node/PHP',
  'description' => 'Consolida «Servidor GraphQL en Node/PHP» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'lighthouse',
    ),
  ),
),
    'gq-prod' => array (
  'title' => 'Práctica: GraphQL en producción',
  'description' => 'Consolida «GraphQL en producción» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'limitar',
    ),
  ),
),
    'ar-intro' => array (
  'title' => 'Práctica: Arquitectura de software',
  'description' => 'Consolida «Arquitectura de software» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'facilita',
    ),
  ),
),
    'ar-micro' => array (
  'title' => 'Práctica: Microservicios',
  'description' => 'Consolida «Microservicios» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'equipos',
    ),
  ),
),
    'ar-eventos' => array (
  'title' => 'Práctica: Event-driven architecture',
  'description' => 'Consolida «Event-driven architecture» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'desacopla',
    ),
  ),
),
    'ar-capa' => array (
  'title' => 'Práctica: Capas y hexagonal',
  'description' => 'Consolida «Capas y hexagonal» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'reglas',
    ),
  ),
),
    'ar-escala' => array (
  'title' => 'Práctica: Escalar en producción',
  'description' => 'Consolida «Escalar en producción» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'stateless',
    ),
  ),
),
    'next-intro' => array (
  'title' => 'Práctica: Introducción a Next.js',
  'description' => 'Consolida «Introducción a Next.js» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'react',
    ),
  ),
),
    'next-data' => array (
  'title' => 'Práctica: Fetching de datos',
  'description' => 'Consolida «Fetching de datos» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'fetch',
    ),
  ),
),
    'next-auth' => array (
  'title' => 'Práctica: Auth y middleware',
  'description' => 'Consolida «Auth y middleware» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'middleware.ts',
    ),
  ),
),
    'next-deploy' => array (
  'title' => 'Práctica: Deploy en Vercel',
  'description' => 'Consolida «Deploy en Vercel» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'npm',
    ),
  ),
),
    'mq-intro' => array (
  'title' => 'Práctica: Por qué colas de mensajes',
  'description' => 'Consolida «Por qué colas de mensajes» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'desacoplar',
    ),
  ),
),
    'mq-patterns' => array (
  'title' => 'Práctica: Patrones: retry, DLQ e idempotencia',
  'description' => 'Consolida «Patrones: retry, DLQ e idempotencia» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'mensajes',
    ),
  ),
),
    'mq-python' => array (
  'title' => 'Práctica: Celery y RabbitMQ en Python',
  'description' => 'Consolida «Celery y RabbitMQ en Python» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '@app.task',
    ),
  ),
),
    'mq-prod' => array (
  'title' => 'Práctica: Colas en producción',
  'description' => 'Consolida «Colas en producción» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'queue',
    ),
  ),
),
    'aw-intro' => array (
  'title' => 'Práctica: Introducción a AWS',
  'description' => 'Consolida «Introducción a AWS» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'aw-s3' => array (
  'title' => 'Práctica: S3: almacenamiento de objetos',
  'description' => 'Consolida «S3: almacenamiento de objetos» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'aw-rds' => array (
  'title' => 'Práctica: RDS: bases de datos managed',
  'description' => 'Consolida «RDS: bases de datos managed» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'aw-lambda' => array (
  'title' => 'Práctica: Lambda y serverless',
  'description' => 'Consolida «Lambda y serverless» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'eh-legal' => array (
  'title' => 'Práctica: Ética y marco legal',
  'description' => 'Consolida «Ética y marco legal» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'eh-mindset' => array (
  'title' => 'Práctica: Mentalidad del ethical hacker',
  'description' => 'Consolida «Mentalidad del ethical hacker» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'eh-recon' => array (
  'title' => 'Práctica: Reconocimiento pasivo y activo',
  'description' => 'Consolida «Reconocimiento pasivo y activo» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'eh-scanning' => array (
  'title' => 'Práctica: Escaneo y enumeración',
  'description' => 'Consolida «Escaneo y enumeración» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'eh-tools' => array (
  'title' => 'Práctica: Herramientas del oficio',
  'description' => 'Consolida «Herramientas del oficio» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'go-intro' => array (
  'title' => 'Práctica: Introducción a Go',
  'description' => 'Consolida «Introducción a Go» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'package main',
    ),
  ),
),
    'go-syntax' => array (
  'title' => 'Práctica: Tipos, funciones y structs',
  'description' => 'Consolida «Tipos, funciones y structs» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'go-db' => array (
  'title' => 'Práctica: Base de datos con database/sql',
  'description' => 'Consolida «Base de datos con database/sql» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'go-prod' => array (
  'title' => 'Práctica: Deploy y buenas prácticas',
  'description' => 'Consolida «Deploy y buenas prácticas» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'jv-intro' => array (
  'title' => 'Práctica: Java moderno',
  'description' => 'Consolida «Java moderno» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'jv-spring' => array (
  'title' => 'Práctica: Spring Boot essentials',
  'description' => 'Consolida «Spring Boot essentials» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'RestController',
    ),
  ),
),
    'jv-jpa' => array (
  'title' => 'Práctica: JPA y Spring Data',
  'description' => 'Consolida «JPA y Spring Data» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'jv-security' => array (
  'title' => 'Práctica: Spring Security',
  'description' => 'Consolida «Spring Security» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'jv-prod' => array (
  'title' => 'Práctica: Tests y producción',
  'description' => 'Consolida «Tests y producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'mg-intro' => array (
  'title' => 'Práctica: NoSQL y MongoDB',
  'description' => 'Consolida «NoSQL y MongoDB» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'documento',
    ),
  ),
),
    'mg-schema' => array (
  'title' => 'Práctica: Modelado y Mongoose',
  'description' => 'Consolida «Modelado y Mongoose» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'odm',
    ),
  ),
),
    'mg-aggregation' => array (
  'title' => 'Práctica: Aggregation pipeline',
  'description' => 'Consolida «Aggregation pipeline» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '$match',
    ),
  ),
),
    'mg-indexes' => array (
  'title' => 'Práctica: Índices y rendimiento',
  'description' => 'Consolida «Índices y rendimiento» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'escaneo',
    ),
  ),
),
    'mg-prod' => array (
  'title' => 'Práctica: Replica sets y Atlas',
  'description' => 'Consolida «Replica sets y Atlas» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'alta',
    ),
  ),
),
    'vu-intro' => array (
  'title' => 'Práctica: Introducción a Vue 3',
  'description' => 'Consolida «Introducción a Vue 3» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'composition',
    ),
  ),
),
    'vu-router' => array (
  'title' => 'Práctica: Vue Router',
  'description' => 'Consolida «Vue Router» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '<router-view',
    ),
  ),
),
    'vu-pinia' => array (
  'title' => 'Práctica: Pinia — state management',
  'description' => 'Consolida «Pinia — state management» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'pinia',
    ),
  ),
),
    'vu-api' => array (
  'title' => 'Práctica: Consumir APIs',
  'description' => 'Consolida «Consumir APIs» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'inyectar',
    ),
  ),
),
    'vu-prod' => array (
  'title' => 'Práctica: Build y Nuxt',
  'description' => 'Consolida «Build y Nuxt» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'next.js',
    ),
  ),
),
    'rn-intro' => array (
  'title' => 'Práctica: React Native intro',
  'description' => 'Consolida «React Native intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'componentes',
    ),
  ),
),
    'rn-navigation' => array (
  'title' => 'Práctica: React Navigation',
  'description' => 'Consolida «React Navigation» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'react',
    ),
  ),
),
    'rn-api' => array (
  'title' => 'Práctica: APIs y estado',
  'description' => 'Consolida «APIs y estado» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'flatlist',
    ),
  ),
),
    'rn-storage' => array (
  'title' => 'Práctica: Storage y permisos',
  'description' => 'Consolida «Storage y permisos» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'securestore',
    ),
  ),
),
    'rn-build' => array (
  'title' => 'Práctica: Build y publicación',
  'description' => 'Consolida «Build y publicación» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'builds',
    ),
  ),
),
    'sd-intro' => array (
  'title' => 'Práctica: Fundamentos de system design',
  'description' => 'Consolida «Fundamentos de system design» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sd-scaling' => array (
  'title' => 'Práctica: Escalado horizontal y load balancing',
  'description' => 'Consolida «Escalado horizontal y load balancing» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sd-db' => array (
  'title' => 'Práctica: Bases de datos a escala',
  'description' => 'Consolida «Bases de datos a escala» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sd-cache' => array (
  'title' => 'Práctica: Caché y CDN',
  'description' => 'Consolida «Caché y CDN» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'sd-queues' => array (
  'title' => 'Práctica: Colas y desac acoplamiento',
  'description' => 'Consolida «Colas y desac acoplamiento» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tf-intro' => array (
  'title' => 'Práctica: Infrastructure as Code',
  'description' => 'Consolida «Infrastructure as Code» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tf-state' => array (
  'title' => 'Práctica: State remoto y workspaces',
  'description' => 'Consolida «State remoto y workspaces» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tf-modules' => array (
  'title' => 'Práctica: Módulos reutilizables',
  'description' => 'Consolida «Módulos reutilizables» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tf-aws' => array (
  'title' => 'Práctica: Terraform + AWS',
  'description' => 'Consolida «Terraform + AWS» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tf-prod' => array (
  'title' => 'Práctica: CI/CD y buenas prácticas',
  'description' => 'Consolida «CI/CD y buenas prácticas» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kf-intro' => array (
  'title' => 'Práctica: Event streaming con Kafka',
  'description' => 'Consolida «Event streaming con Kafka» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kf-topics' => array (
  'title' => 'Práctica: Topics, partitions y offsets',
  'description' => 'Consolida «Topics, partitions y offsets» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kf-consumers' => array (
  'title' => 'Práctica: Consumers y consumer groups',
  'description' => 'Consolida «Consumers y consumer groups» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kf-streams' => array (
  'title' => 'Práctica: Kafka Streams y ksqlDB',
  'description' => 'Consolida «Kafka Streams y ksqlDB» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kf-prod' => array (
  'title' => 'Práctica: Kafka en producción',
  'description' => 'Consolida «Kafka en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gr-intro' => array (
  'title' => 'Práctica: Introducción a gRPC',
  'description' => 'Consolida «Introducción a gRPC» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gr-server' => array (
  'title' => 'Práctica: Servidor gRPC',
  'description' => 'Consolida «Servidor gRPC» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gr-client' => array (
  'title' => 'Práctica: Cliente y interceptors',
  'description' => 'Consolida «Cliente y interceptors» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gr-vs-rest' => array (
  'title' => 'Práctica: gRPC vs REST vs GraphQL',
  'description' => 'Consolida «gRPC vs REST vs GraphQL» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gr-prod' => array (
  'title' => 'Práctica: TLS, health checks y prod',
  'description' => 'Consolida «TLS, health checks y prod» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'oa-intro' => array (
  'title' => 'Práctica: Auth moderna: OAuth 2.0 y OIDC',
  'description' => 'Consolida «Auth moderna: OAuth 2.0 y OIDC» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'autorización',
    ),
  ),
),
    'oa-oauth2' => array (
  'title' => 'Práctica: Flujos OAuth 2.0',
  'description' => 'Consolida «Flujos OAuth 2.0» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'interceptación',
    ),
  ),
),
    'oa-oidc' => array (
  'title' => 'Práctica: OpenID Connect en detalle',
  'description' => 'Consolida «OpenID Connect en detalle» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'openid',
    ),
  ),
),
    'oa-laravel' => array (
  'title' => 'Práctica: OAuth en Laravel y Passport',
  'description' => 'Consolida «OAuth en Laravel y Passport» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'spa',
    ),
  ),
),
    'oa-prod' => array (
  'title' => 'Práctica: SSO enterprise y Keycloak',
  'description' => 'Consolida «SSO enterprise y Keycloak» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'enterprise',
    ),
  ),
),
    'ob-intro' => array (
  'title' => 'Práctica: Observabilidad: logs, metrics, traces',
  'description' => 'Consolida «Observabilidad: logs, metrics, traces» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ob-logs' => array (
  'title' => 'Práctica: Logging estructurado',
  'description' => 'Consolida «Logging estructurado» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ob-traces' => array (
  'title' => 'Práctica: OpenTelemetry y tracing',
  'description' => 'Consolida «OpenTelemetry y tracing» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ob-alerts' => array (
  'title' => 'Práctica: Alerting y SLOs',
  'description' => 'Consolida «Alerting y SLOs» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ob-prod' => array (
  'title' => 'Práctica: Stack completo en producción',
  'description' => 'Consolida «Stack completo en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ai-intro' => array (
  'title' => 'Práctica: IA para desarrolladores',
  'description' => 'Consolida «IA para desarrolladores» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'necesita',
    ),
  ),
),
    'ai-apis' => array (
  'title' => 'Práctica: APIs OpenAI y compatibles',
  'description' => 'Consolida «APIs OpenAI y compatibles» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'role',
      1 => 'user',
    ),
  ),
),
    'ai-prompts' => array (
  'title' => 'Práctica: Prompt engineering',
  'description' => 'Consolida «Prompt engineering» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ejemplos',
    ),
  ),
),
    'ai-agents' => array (
  'title' => 'Práctica: Agents y tool calling',
  'description' => 'Consolida «Agents y tool calling» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'llm',
    ),
  ),
),
    'ai-ethics' => array (
  'title' => 'Práctica: Ética, privacidad y costes',
  'description' => 'Consolida «Ética, privacidad y costes» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'evitar',
    ),
  ),
),
    'rs-intro' => array (
  'title' => 'Práctica: Introducción a Rust',
  'description' => 'Consolida «Introducción a Rust» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'fn main',
    ),
  ),
),
    'rs-structs' => array (
  'title' => 'Práctica: Structs, enums y pattern matching',
  'description' => 'Consolida «Structs, enums y pattern matching» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rs-error' => array (
  'title' => 'Práctica: Error handling idiomático',
  'description' => 'Consolida «Error handling idiomático» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'rs-web' => array (
  'title' => 'Práctica: Web con Axum / Actix',
  'description' => 'Consolida «Web con Axum / Actix» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'async',
    ),
  ),
),
    'rs-prod' => array (
  'title' => 'Práctica: Tests, WASM y producción',
  'description' => 'Consolida «Tests, WASM y producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ng-intro' => array (
  'title' => 'Práctica: Introducción a Angular',
  'description' => 'Consolida «Introducción a Angular» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'typescript',
    ),
  ),
),
    'ng-rxjs' => array (
  'title' => 'Práctica: RxJS y programación reactiva',
  'description' => 'Consolida «RxJS y programación reactiva» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'switchmap',
    ),
  ),
),
    'ng-router' => array (
  'title' => 'Práctica: Angular Router',
  'description' => 'Consolida «Angular Router» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'loadchildren:',
    ),
  ),
),
    'ng-http' => array (
  'title' => 'Práctica: HttpClient y servicios',
  'description' => 'Consolida «HttpClient y servicios» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'middleware',
    ),
  ),
),
    'ng-prod' => array (
  'title' => 'Práctica: Forms, signals y producción',
  'description' => 'Consolida «Forms, signals y producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'reactive',
    ),
  ),
),
    'cc-intro' => array (
  'title' => 'Práctica: Clean Code: principios',
  'description' => 'Consolida «Clean Code: principios» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'legibilidad',
    ),
  ),
),
    'cc-naming' => array (
  'title' => 'Práctica: Nombres que comunican',
  'description' => 'Consolida «Nombres que comunican» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'calculateinvoicetotal()',
    ),
  ),
),
    'cc-functions' => array (
  'title' => 'Práctica: Funciones pequeñas y SRP',
  'description' => 'Consolida «Funciones pequeñas y SRP» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'refactor',
    ),
  ),
),
    'cc-solid' => array (
  'title' => 'Práctica: SOLID en la práctica',
  'description' => 'Consolida «SOLID en la práctica» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'abierto',
    ),
  ),
),
    'cc-review' => array (
  'title' => 'Práctica: Code review efectivo',
  'description' => 'Consolida «Code review efectivo» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'pequeño,',
    ),
  ),
),
    'st-intro' => array (
  'title' => 'Práctica: Pagos online con Stripe',
  'description' => 'Consolida «Pagos online con Stripe» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'stripe.js/checkout',
    ),
  ),
),
    'st-checkout' => array (
  'title' => 'Práctica: Stripe Checkout',
  'description' => 'Consolida «Stripe Checkout» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'success_url',
    ),
  ),
),
    'st-subscriptions' => array (
  'title' => 'Práctica: Suscripciones y billing',
  'description' => 'Consolida «Suscripciones y billing» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'webhook',
    ),
  ),
),
    'st-connect' => array (
  'title' => 'Práctica: Stripe Connect marketplace',
  'description' => 'Consolida «Stripe Connect marketplace» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'marketplace',
    ),
  ),
),
    'st-prod' => array (
  'title' => 'Práctica: Producción, disputas y compliance',
  'description' => 'Consolida «Producción, disputas y compliance» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'fl-intro' => array (
  'title' => 'Práctica: Introducción a Flutter',
  'description' => 'Consolida «Introducción a Flutter» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'dart',
    ),
  ),
),
    'fl-state' => array (
  'title' => 'Práctica: Riverpod / Provider',
  'description' => 'Consolida «Riverpod / Provider» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'compile-safe,',
    ),
  ),
),
    'fl-navigation' => array (
  'title' => 'Práctica: Navegación',
  'description' => 'Consolida «Navegación» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'go_router',
    ),
  ),
),
    'fl-api' => array (
  'title' => 'Práctica: HTTP y JSON',
  'description' => 'Consolida «HTTP y JSON» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'jsondecode',
    ),
  ),
),
    'fl-build' => array (
  'title' => 'Práctica: Build y stores',
  'description' => 'Consolida «Build y stores» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'flutter',
    ),
  ),
),
    'cs-intro' => array (
  'title' => 'Práctica: C# y .NET moderno',
  'description' => 'Consolida «C# y .NET moderno» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'MapGet',
    ),
  ),
),
    'cs-aspnet' => array (
  'title' => 'Práctica: ASP.NET Core',
  'description' => 'Consolida «ASP.NET Core» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'cs-efcore' => array (
  'title' => 'Práctica: Entity Framework Core',
  'description' => 'Consolida «Entity Framework Core» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'cs-api' => array (
  'title' => 'Práctica: REST APIs',
  'description' => 'Consolida «REST APIs» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'cs-auth' => array (
  'title' => 'Práctica: Identity y JWT',
  'description' => 'Consolida «Identity y JWT» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'cs-prod' => array (
  'title' => 'Práctica: Tests y deploy',
  'description' => 'Consolida «Tests y deploy» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kt-intro' => array (
  'title' => 'Práctica: Kotlin moderno',
  'description' => 'Consolida «Kotlin moderno» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kt-syntax' => array (
  'title' => 'Práctica: Funciones, clases y coroutines',
  'description' => 'Consolida «Funciones, clases y coroutines» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kt-navigation' => array (
  'title' => 'Práctica: Navigation Compose',
  'description' => 'Consolida «Navigation Compose» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kt-api' => array (
  'title' => 'Práctica: Retrofit y Room',
  'description' => 'Consolida «Retrofit y Room» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'kt-prod' => array (
  'title' => 'Práctica: Play Store y producción',
  'description' => 'Consolida «Play Store y producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'es-intro' => array (
  'title' => 'Práctica: Elasticsearch intro',
  'description' => 'Consolida «Elasticsearch intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'es-index' => array (
  'title' => 'Práctica: Índices y mappings',
  'description' => 'Consolida «Índices y mappings» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'PUT',
    ),
  ),
),
    'es-agg' => array (
  'title' => 'Práctica: Aggregations',
  'description' => 'Consolida «Aggregations» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'agrupa',
    ),
  ),
),
    'es-php' => array (
  'title' => 'Práctica: Elasticsearch en PHP/Laravel',
  'description' => 'Consolida «Elasticsearch en PHP/Laravel» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'elastic/elasticsearch',
    ),
  ),
),
    'es-prod' => array (
  'title' => 'Práctica: Cluster y producción',
  'description' => 'Consolida «Cluster y producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'replicas',
    ),
  ),
),
    'gc-intro' => array (
  'title' => 'Práctica: Google Cloud intro',
  'description' => 'Consolida «Google Cloud intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gc-compute' => array (
  'title' => 'Práctica: Compute Engine',
  'description' => 'Consolida «Compute Engine» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gc-storage' => array (
  'title' => 'Práctica: Cloud Storage GCS',
  'description' => 'Consolida «Cloud Storage GCS» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gc-sql' => array (
  'title' => 'Práctica: Cloud SQL y BigQuery',
  'description' => 'Consolida «Cloud SQL y BigQuery» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gc-run' => array (
  'title' => 'Práctica: Cloud Run serverless',
  'description' => 'Consolida «Cloud Run serverless» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'gc-deploy' => array (
  'title' => 'Práctica: Arquitectura GCP típica',
  'description' => 'Consolida «Arquitectura GCP típica» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'az-intro' => array (
  'title' => 'Práctica: Microsoft Azure intro',
  'description' => 'Consolida «Microsoft Azure intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'az-vm' => array (
  'title' => 'Práctica: Virtual Machines',
  'description' => 'Consolida «Virtual Machines» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'az-blob' => array (
  'title' => 'Práctica: Blob Storage',
  'description' => 'Consolida «Blob Storage» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'az-sql' => array (
  'title' => 'Práctica: Azure SQL y Cosmos DB',
  'description' => 'Consolida «Azure SQL y Cosmos DB» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'az-functions' => array (
  'title' => 'Práctica: Azure Functions',
  'description' => 'Consolida «Azure Functions» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'az-deploy' => array (
  'title' => 'Práctica: App Service y arquitectura',
  'description' => 'Consolida «App Service y arquitectura» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'hm-intro' => array (
  'title' => 'Práctica: Helm intro',
  'description' => 'Consolida «Helm intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'hm-values' => array (
  'title' => 'Práctica: Values y entornos',
  'description' => 'Consolida «Values y entornos» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'hm-release' => array (
  'title' => 'Práctica: Upgrade y rollback',
  'description' => 'Consolida «Upgrade y rollback» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'hm-hooks' => array (
  'title' => 'Práctica: Hooks y dependencias',
  'description' => 'Consolida «Hooks y dependencias» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'hm-prod' => array (
  'title' => 'Práctica: Helm en CI/CD y GitOps',
  'description' => 'Consolida «Helm en CI/CD y GitOps» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'an-intro' => array (
  'title' => 'Práctica: Ansible intro',
  'description' => 'Consolida «Ansible intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'an-inventory' => array (
  'title' => 'Práctica: Inventario dinámico',
  'description' => 'Consolida «Inventario dinámico» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'an-roles' => array (
  'title' => 'Práctica: Roles reutilizables',
  'description' => 'Consolida «Roles reutilizables» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'an-vault' => array (
  'title' => 'Práctica: Ansible Vault',
  'description' => 'Consolida «Ansible Vault» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'an-prod' => array (
  'title' => 'Práctica: Ansible en producción',
  'description' => 'Consolida «Ansible en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'wc-intro' => array (
  'title' => 'Práctica: WebRTC intro',
  'description' => 'Consolida «WebRTC intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'udp',
    ),
  ),
),
    'wc-peer' => array (
  'title' => 'Práctica: RTCPeerConnection',
  'description' => 'Consolida «RTCPeerConnection» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'nat',
    ),
  ),
),
    'wc-media' => array (
  'title' => 'Práctica: Media streams y DataChannel',
  'description' => 'Consolida «Media streams y DataChannel» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'screen',
    ),
  ),
),
    'wc-servers' => array (
  'title' => 'Práctica: SFU y servicios managed',
  'description' => 'Consolida «SFU y servicios managed» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'sfu',
    ),
  ),
),
    'wc-prod' => array (
  'title' => 'Práctica: Producción y calidad',
  'description' => 'Consolida «Producción y calidad» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'audio',
    ),
  ),
),
    'pwa-intro' => array (
  'title' => 'Práctica: Progressive Web Apps',
  'description' => 'Consolida «Progressive Web Apps» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'https',
    ),
  ),
),
    'pwa-sw' => array (
  'title' => 'Práctica: Service Workers',
  'description' => 'Consolida «Service Workers» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'path',
    ),
  ),
),
    'pwa-cache' => array (
  'title' => 'Práctica: Cache strategies',
  'description' => 'Consolida «Cache strategies» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'network-first',
    ),
  ),
),
    'pwa-push' => array (
  'title' => 'Práctica: Push notifications',
  'description' => 'Consolida «Push notifications» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'sí',
    ),
  ),
),
    'pwa-prod' => array (
  'title' => 'Práctica: Lighthouse y producción',
  'description' => 'Consolida «Lighthouse y producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'lcp,',
    ),
  ),
),
    'a11y-intro' => array (
  'title' => 'Práctica: Accesibilidad web (a11y)',
  'description' => 'Consolida «Accesibilidad web (a11y)» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'web',
    ),
  ),
),
    'a11y-html' => array (
  'title' => 'Práctica: HTML semántico',
  'description' => 'Consolida «HTML semántico» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '<button>',
    ),
  ),
),
    'a11y-keyboard' => array (
  'title' => 'Práctica: Navegación teclado',
  'description' => 'Consolida «Navegación teclado» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'natural',
    ),
  ),
),
    'a11y-test' => array (
  'title' => 'Práctica: Testing accesibilidad',
  'description' => 'Consolida «Testing accesibilidad» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'browser',
    ),
  ),
),
    'a11y-prod' => array (
  'title' => 'Práctica: a11y en design systems',
  'description' => 'Consolida «a11y en design systems» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'wai-aria',
    ),
  ),
),
    'wp-intro' => array (
  'title' => 'Práctica: WordPress para developers',
  'description' => 'Consolida «WordPress para developers» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'php',
    ),
  ),
),
    'wp-theme' => array (
  'title' => 'Práctica: Themes y template hierarchy',
  'description' => 'Consolida «Themes y template hierarchy» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'single.php',
    ),
  ),
),
    'wp-plugins' => array (
  'title' => 'Práctica: Plugin development',
  'description' => 'Consolida «Plugin development» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'plugin',
    ),
  ),
),
    'wp-rest' => array (
  'title' => 'Práctica: REST API y headless',
  'description' => 'Consolida «REST API y headless» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'custom',
    ),
  ),
),
    'wp-prod' => array (
  'title' => 'Práctica: Seguridad y performance WP',
  'description' => 'Consolida «Seguridad y performance WP» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'wp-config',
    ),
  ),
),
    'w3-intro' => array (
  'title' => 'Práctica: Web3 y blockchain intro',
  'description' => 'Consolida «Web3 y blockchain intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'código',
    ),
  ),
),
    'w3-eth' => array (
  'title' => 'Práctica: Ethereum y EVM',
  'description' => 'Consolida «Ethereum y EVM» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'max',
    ),
  ),
),
    'w3-web3js' => array (
  'title' => 'Práctica: Web3.js / ethers.js',
  'description' => 'Consolida «Web3.js / ethers.js» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'browser',
    ),
  ),
),
    'w3-defi' => array (
  'title' => 'Práctica: DeFi concepts (teórico)',
  'description' => 'Consolida «DeFi concepts (teórico)» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'automated',
    ),
  ),
),
    'w3-security' => array (
  'title' => 'Práctica: Seguridad Web3',
  'description' => 'Consolida «Seguridad Web3» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'nunca',
    ),
  ),
),
    'pl-intro' => array (
  'title' => 'Práctica: Playwright E2E',
  'description' => 'Consolida «Playwright E2E» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'simula',
    ),
  ),
),
    'pl-fixtures' => array (
  'title' => 'Práctica: Fixtures y Page Objects',
  'description' => 'Consolida «Fixtures y Page Objects» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'reuse',
    ),
  ),
),
    'pl-api' => array (
  'title' => 'Práctica: API testing y mocking',
  'description' => 'Consolida «API testing y mocking» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'mock/modify',
    ),
  ),
),
    'pl-ci' => array (
  'title' => 'Práctica: CI y parallelización',
  'description' => 'Consolida «CI y parallelización» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'timeline',
    ),
  ),
),
    'pl-prod' => array (
  'title' => 'Práctica: Visual regression y a11y',
  'description' => 'Consolida «Visual regression y a11y» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'proper',
    ),
  ),
),
    'sv-intro' => array (
  'title' => 'Práctica: Introducción a Svelte',
  'description' => 'Consolida «Introducción a Svelte» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'svelte',
    ),
  ),
),
    'sv-stores' => array (
  'title' => 'Práctica: Stores',
  'description' => 'Consolida «Stores» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'auto',
    ),
  ),
),
    'sv-routing' => array (
  'title' => 'Práctica: SvelteKit routing',
  'description' => 'Consolida «SvelteKit routing» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'server-only',
    ),
  ),
),
    'sv-api' => array (
  'title' => 'Práctica: Forms y API routes',
  'description' => 'Consolida «Forms y API routes» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'work',
    ),
  ),
),
    'sv-prod' => array (
  'title' => 'Práctica: Build y deploy SvelteKit',
  'description' => 'Consolida «Build y deploy SvelteKit» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'ssg',
    ),
  ),
),
    'el-intro' => array (
  'title' => 'Práctica: Electron intro',
  'description' => 'Consolida «Electron intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'chromium',
    ),
  ),
),
    'el-main' => array (
  'title' => 'Práctica: Main process',
  'description' => 'Consolida «Main process» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'BrowserWindow',
    ),
  ),
),
    'el-window' => array (
  'title' => 'Práctica: Menus, tray y native',
  'description' => 'Consolida «Menus, tray y native» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'native',
    ),
  ),
),
    'el-packager' => array (
  'title' => 'Práctica: Packaging',
  'description' => 'Consolida «Packaging» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'pack',
    ),
  ),
),
    'el-prod' => array (
  'title' => 'Práctica: Producción y alternativas',
  'description' => 'Consolida «Producción y alternativas» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'large',
    ),
  ),
),
    'db-intro' => array (
  'title' => 'Práctica: Más allá de Node.js',
  'description' => 'Consolida «Más allá de Node.js» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'typescript',
    ),
  ),
),
    'db-apis' => array (
  'title' => 'Práctica: APIs con Hono/Elysia',
  'description' => 'Consolida «APIs con Hono/Elysia» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'multi-runtime',
    ),
  ),
),
    'db-deploy' => array (
  'title' => 'Práctica: Deploy Deno/Bun',
  'description' => 'Consolida «Deploy Deno/Bun» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'edge',
    ),
  ),
),
    'db-prod' => array (
  'title' => 'Práctica: Elegir runtime en prod',
  'description' => 'Consolida «Elegir runtime en prod» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'sí',
    ),
  ),
),
    'sb-intro' => array (
  'title' => 'Práctica: Supabase intro',
  'description' => 'Consolida «Supabase intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'postgresql',
    ),
  ),
),
    'sb-auth' => array (
  'title' => 'Práctica: Auth Supabase',
  'description' => 'Consolida «Auth Supabase» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'row',
    ),
  ),
),
    'sb-storage' => array (
  'title' => 'Práctica: Storage y Edge Functions',
  'description' => 'Consolida «Storage y Edge Functions» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'rls-like',
    ),
  ),
),
    'sb-realtime' => array (
  'title' => 'Práctica: Realtime subscriptions',
  'description' => 'Consolida «Realtime subscriptions» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'websockets',
    ),
  ),
),
    'sb-prod' => array (
  'title' => 'Práctica: Producción Supabase',
  'description' => 'Consolida «Producción Supabase» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'aplica',
    ),
  ),
),
    'fg-intro' => array (
  'title' => 'Práctica: Figma para developers',
  'description' => 'Consolida «Figma para developers» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'inspeccionar',
    ),
  ),
),
    'fg-tokens' => array (
  'title' => 'Práctica: Design tokens',
  'description' => 'Consolida «Design tokens» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'valor',
    ),
  ),
),
    'fg-handoff' => array (
  'title' => 'Práctica: Handoff e inspección',
  'description' => 'Consolida «Handoff e inspección» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'svg',
    ),
  ),
),
    'fg-components' => array (
  'title' => 'Práctica: Components y variants',
  'description' => 'Consolida «Components y variants» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'switch',
    ),
  ),
),
    'fg-prototype' => array (
  'title' => 'Práctica: Prototipos y user flows',
  'description' => 'Consolida «Prototipos y user flows» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'valida',
    ),
  ),
),
    'fg-prod' => array (
  'title' => 'Práctica: Design systems en equipo',
  'description' => 'Consolida «Design systems en equipo» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'catálogo',
    ),
  ),
),
    'ag-intro' => array (
  'title' => 'Práctica: Agile manifesto',
  'description' => 'Consolida «Agile manifesto» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ag-scrum' => array (
  'title' => 'Práctica: Scrum framework',
  'description' => 'Consolida «Scrum framework» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ag-kanban' => array (
  'title' => 'Práctica: Kanban',
  'description' => 'Consolida «Kanban» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ag-ceremonies' => array (
  'title' => 'Práctica: Ceremonias efectivas',
  'description' => 'Consolida «Ceremonias efectivas» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ag-estimation' => array (
  'title' => 'Práctica: Estimación y velocity',
  'description' => 'Consolida «Estimación y velocity» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ag-prod' => array (
  'title' => 'Práctica: Agile en equipos dev',
  'description' => 'Consolida «Agile en equipos dev» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tx-intro' => array (
  'title' => 'Práctica: Technical writing intro',
  'description' => 'Consolida «Technical writing intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tx-readme' => array (
  'title' => 'Práctica: README que funciona',
  'description' => 'Consolida «README que funciona» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'Installation',
    ),
  ),
),
    'tx-api-docs' => array (
  'title' => 'Práctica: Documentar APIs',
  'description' => 'Consolida «Documentar APIs» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tx-runbooks' => array (
  'title' => 'Práctica: Runbooks y on-call docs',
  'description' => 'Consolida «Runbooks y on-call docs» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'tx-prod' => array (
  'title' => 'Práctica: Docs en producción',
  'description' => 'Consolida «Docs en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ca-intro' => array (
  'title' => 'Práctica: AWS SAA-C03 overview',
  'description' => 'Consolida «AWS SAA-C03 overview» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ca-compute' => array (
  'title' => 'Práctica: Compute deep dive',
  'description' => 'Consolida «Compute deep dive» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ca-storage' => array (
  'title' => 'Práctica: Storage y databases exam',
  'description' => 'Consolida «Storage y databases exam» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ca-security' => array (
  'title' => 'Práctica: Security y compliance',
  'description' => 'Consolida «Security y compliance» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ca-exam' => array (
  'title' => 'Práctica: Estrategia examen SAA',
  'description' => 'Consolida «Estrategia examen SAA» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ck-intro' => array (
  'title' => 'Práctica: CKA overview',
  'description' => 'Consolida «CKA overview» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ck-pods' => array (
  'title' => 'Práctica: Pods y workloads',
  'description' => 'Consolida «Pods y workloads» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'kubectl',
      1 => 'pods',
    ),
  ),
),
    'ck-services' => array (
  'title' => 'Práctica: Services y networking',
  'description' => 'Consolida «Services y networking» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ck-storage' => array (
  'title' => 'Práctica: Storage CKA',
  'description' => 'Consolida «Storage CKA» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ck-troubleshoot' => array (
  'title' => 'Práctica: Troubleshooting 30%',
  'description' => 'Consolida «Troubleshooting 30%» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ck-exam' => array (
  'title' => 'Práctica: Estrategia examen CKA',
  'description' => 'Consolida «Estrategia examen CKA» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'azc-intro' => array (
  'title' => 'Práctica: AZ-900 Fundamentals',
  'description' => 'Consolida «AZ-900 Fundamentals» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'azc-compute' => array (
  'title' => 'Práctica: Compute y storage exam',
  'description' => 'Consolida «Compute y storage exam» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'azc-network' => array (
  'title' => 'Práctica: Networking basics',
  'description' => 'Consolida «Networking basics» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'azc-cost' => array (
  'title' => 'Práctica: Pricing y SLA',
  'description' => 'Consolida «Pricing y SLA» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'azc-exam' => array (
  'title' => 'Práctica: Prep exam AZ-900',
  'description' => 'Consolida «Prep exam AZ-900» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ps-intro' => array (
  'title' => 'Práctica: Prisma ORM intro',
  'description' => 'Consolida «Prisma ORM intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'autogenerated',
    ),
  ),
),
    'ps-migrate' => array (
  'title' => 'Práctica: Migrations',
  'description' => 'Consolida «Migrations» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'dev',
    ),
  ),
),
    'ps-crud' => array (
  'title' => 'Práctica: CRUD y queries',
  'description' => 'Consolida «CRUD y queries» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'eager',
    ),
  ),
),
    'ps-relations' => array (
  'title' => 'Práctica: Relations avanzadas',
  'description' => 'Consolida «Relations avanzadas» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'delete',
    ),
  ),
),
    'ps-prod' => array (
  'title' => 'Práctica: Prisma en producción',
  'description' => 'Consolida «Prisma en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'connection',
    ),
  ),
),
    'fb-intro' => array (
  'title' => 'Práctica: Firebase intro',
  'description' => 'Consolida «Firebase intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'nosql',
    ),
  ),
),
    'fb-auth' => array (
  'title' => 'Práctica: Firebase Authentication',
  'description' => 'Consolida «Firebase Authentication» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'listener',
    ),
  ),
),
    'fb-functions' => array (
  'title' => 'Práctica: Cloud Functions',
  'description' => 'Consolida «Cloud Functions» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'client',
    ),
  ),
),
    'fb-hosting' => array (
  'title' => 'Práctica: Hosting y Storage',
  'description' => 'Consolida «Hosting y Storage» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'firebase',
    ),
  ),
),
    'fb-prod' => array (
  'title' => 'Práctica: Firebase producción',
  'description' => 'Consolida «Firebase producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => '@firebase/rules-unit-testing',
    ),
  ),
),
    'od-intro' => array (
  'title' => 'Práctica: OpenAPI intro',
  'description' => 'Consolida «OpenAPI intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'od-swagger' => array (
  'title' => 'Práctica: Swagger UI y Redoc',
  'description' => 'Consolida «Swagger UI y Redoc» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'od-codegen' => array (
  'title' => 'Práctica: Code generation',
  'description' => 'Consolida «Code generation» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'od-versioning' => array (
  'title' => 'Práctica: Versionado API',
  'description' => 'Consolida «Versionado API» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'od-prod' => array (
  'title' => 'Práctica: OpenAPI en CI/CD',
  'description' => 'Consolida «OpenAPI en CI/CD» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ev-intro' => array (
  'title' => 'Práctica: Event Sourcing intro',
  'description' => 'Consolida «Event Sourcing intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ev-cqrs' => array (
  'title' => 'Práctica: CQRS pattern',
  'description' => 'Consolida «CQRS pattern» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ev-projections' => array (
  'title' => 'Práctica: Projections y read models',
  'description' => 'Consolida «Projections y read models» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ev-saga' => array (
  'title' => 'Práctica: Sagas y consistencia',
  'description' => 'Consolida «Sagas y consistencia» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ev-prod' => array (
  'title' => 'Práctica: ES en producción',
  'description' => 'Consolida «ES en producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'pav-intro' => array (
  'title' => 'Práctica: PHP 8 avanzado',
  'description' => 'Consolida «PHP 8 avanzado» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'first-class',
    ),
  ),
),
    'pav-types' => array (
  'title' => 'Práctica: Tipos avanzados',
  'description' => 'Consolida «Tipos avanzados» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'function',
    ),
  ),
),
    'pav-oop' => array (
  'title' => 'Práctica: OOP patterns PHP',
  'description' => 'Consolida «OOP patterns PHP» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'wrap',
    ),
  ),
),
    'pav-async' => array (
  'title' => 'Práctica: Async y performance PHP',
  'description' => 'Consolida «Async y performance PHP» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'required',
    ),
  ),
),
    'pav-prod' => array (
  'title' => 'Práctica: PHP producción avanzada',
  'description' => 'Consolida «PHP producción avanzada» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'contains',
    'must_contain' => 
    array (
      0 => 'automated',
    ),
  ),
),
    'nw-intro' => array (
  'title' => 'Práctica: Networking para devs',
  'description' => 'Consolida «Networking para devs» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'nw-http' => array (
  'title' => 'Práctica: HTTP deep dive',
  'description' => 'Consolida «HTTP deep dive» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'nw-ip' => array (
  'title' => 'Práctica: IP, subnet, routing',
  'description' => 'Consolida «IP, subnet, routing» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'nw-cloud' => array (
  'title' => 'Práctica: Cloud networking',
  'description' => 'Consolida «Cloud networking» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'nw-prod' => array (
  'title' => 'Práctica: Networking producción',
  'description' => 'Consolida «Networking producción» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ptm-intro' => array (
  'title' => 'Práctica: Producto tech intro',
  'description' => 'Consolida «Producto tech intro» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ptm-discovery' => array (
  'title' => 'Práctica: Discovery y research',
  'description' => 'Consolida «Discovery y research» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ptm-prioritize' => array (
  'title' => 'Práctica: Priorización',
  'description' => 'Consolida «Priorización» con un ejercicio hands-on.',
  'reward_xp' => 50,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ptm-metrics' => array (
  'title' => 'Práctica: Métricas y experimentos',
  'description' => 'Consolida «Métricas y experimentos» con un ejercicio hands-on.',
  'reward_xp' => 60,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
    'ptm-prod' => array (
  'title' => 'Práctica: Producto en startups vs enterprise',
  'description' => 'Consolida «Producto en startups vs enterprise» con un ejercicio hands-on.',
  'reward_xp' => 70,
  'validation' => 
  array (
    'type' => 'honor',
  ),
),
];
;
