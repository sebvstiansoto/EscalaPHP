<?php

declare(strict_types=1);

return [
    [
        'slug' => 'lv-intro',
        'order' => 1,
        'title' => 'Introducción a Laravel',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Artisan, estructura MVC y el ecosistema.',
        'concepts' => ['laravel', 'artisan', 'mvc'],
        'sections' => [
            ['heading' => '¿Por qué Laravel?', 'body' => 'Laravel acelera desarrollo PHP con routing, ORM, auth y colas incluidos. Usado en startups y empresas globales.'],
            ['heading' => 'Estructura', 'body' => 'app/ (código), routes/, resources/views/, database/migrations/. **Artisan** es la CLI: `php artisan serve`, `make:model`.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué comando inicia el servidor de desarrollo Laravel?', 'options' => ['php artisan serve', 'composer start', 'npm run dev'], 'answer' => 'php artisan serve', 'explanation' => 'Artisan es la navaja suiza de Laravel.', 'pro_tip' => 'php artisan list muestra todos los comandos disponibles.'],
            ['type' => 'choice', 'question' => '¿Qué patrón usa Laravel principalmente?', 'options' => ['MVC', 'Solo procedural', 'Microkernel puro'], 'answer' => 'MVC', 'explanation' => 'Model (Eloquent), View (Blade), Controller (lógica HTTP).', 'pro_tip' => 'Laravel 11 simplificó la estructura — menos carpetas boilerplate.'],
        ],
    ],
    [
        'slug' => 'lv-routes',
        'order' => 2,
        'title' => 'Rutas y controladores',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'routes/web.php, Route::get y controllers.',
        'concepts' => ['routes', 'controller', 'middleware'],
        'sections' => [
            ['heading' => 'Definir rutas', 'body' => 'En routes/web.php defines URLs y qué código ejecutan.', 'code' => "Route::get('/users', [UserController::class, 'index']);"],
            ['heading' => 'Controladores', 'body' => 'php artisan make:controller UserController — separas HTTP de lógica de negocio.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde defines rutas web en Laravel?', 'options' => ['routes/web.php', 'app/routes.php', 'public/index.php'], 'answer' => 'routes/web.php', 'explanation' => 'APIs van en routes/api.php.', 'pro_tip' => 'Route::resource genera CRUD completo en una línea.'],
            ['type' => 'contains', 'question' => 'Escribe Route::get con una ruta /hola', 'must_contain' => ['Route::get', '/hola'], 'hint' => "Route::get('/hola', fn () => 'Hola');", 'explanation' => 'Route::get mapea GET a handler.', 'pro_tip' => 'Closures para prototipos; controllers para apps reales.'],
        ],
    ],
    [
        'slug' => 'lv-blade',
        'order' => 3,
        'title' => 'Vistas con Blade',
        'level' => 'Frontend',
        'minutes' => 30,
        'summary' => 'Templates, layouts, @foreach y componentes.',
        'concepts' => ['blade', 'template', 'layout'],
        'sections' => [
            ['heading' => 'Blade', 'body' => 'Motor de plantillas de Laravel. Sintaxis limpia: `{{ $name }}`, `@if`, `@foreach`.', 'code' => "@foreach(\$users as \$user)\n  <p>{{ \$user->name }}</p>\n@endforeach"],
            ['heading' => 'Layouts', 'body' => '@extends y @section evitan duplicar header/footer en cada vista.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo imprimes una variable escapada en Blade?', 'options' => ['{{ $var }}', '<?= $var ?>', '{! $var !}'], 'answer' => '{{ $var }}', 'explanation' => '{{ }} escapa HTML — previene XSS.', 'pro_tip' => '{!! !!} sin escape solo para HTML confiable.'],
            ['type' => 'contains', 'question' => 'Escribe @foreach en Blade', 'must_contain' => ['@foreach', '@endforeach'], 'hint' => "@foreach(\$items as \$item)\n@endforeach", 'explanation' => 'Blade compila a PHP puro en storage/framework/views.', 'pro_tip' => 'Componentes Blade reutilizables: <x-alert />'],
        ],
    ],
    [
        'slug' => 'lv-eloquent',
        'order' => 4,
        'title' => 'Eloquent ORM',
        'level' => 'Datos',
        'minutes' => 35,
        'summary' => 'Modelos, relaciones y consultas expresivas.',
        'concepts' => ['eloquent', 'model', 'relationship'],
        'sections' => [
            ['heading' => 'Modelos', 'body' => 'Un modelo User representa tabla users. User::all(), User::find(1), User::where(...).', 'code' => "class User extends Model {\n  protected \$fillable = ['name', 'email'];\n}"],
            ['heading' => 'Relaciones', 'body' => 'hasMany, belongsTo, belongsToMany — Eloquent expresa JOINs con métodos legibles.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué método lista todos los registros?', 'options' => ['Model::all()', 'Model::getAll()', 'SELECT * manual'], 'answer' => 'Model::all()', 'explanation' => 'Eloquent abstrae SQL — pero saber SQL sigue siendo vital.', 'pro_tip' => 'N+1 queries: usa with() para eager loading.'],
            ['type' => 'choice', 'question' => '¿Para qué sirve $fillable?', 'options' => ['Whitelist de campos en mass assignment', 'Encriptar datos', 'Crear índices'], 'answer' => 'Whitelist de campos en mass assignment', 'explanation' => 'Sin fillable/guarded, un atacante podría asignar is_admin=true.', 'pro_tip' => 'Curso de seguridad web profundiza en esto.'],
        ],
    ],
    [
        'slug' => 'lv-migrations',
        'order' => 5,
        'title' => 'Migraciones y seeders',
        'level' => 'Datos',
        'minutes' => 30,
        'summary' => 'Versionar esquema de BD como código.',
        'concepts' => ['migration', 'seeder', 'schema'],
        'sections' => [
            ['heading' => 'Migraciones', 'body' => 'php artisan make:migration create_posts_table. up() crea, down() revierte.', 'code' => "Schema::create('posts', function (Blueprint \$table) {\n  \$table->id();\n  \$table->string('title');\n});"],
            ['heading' => 'Seeders', 'body' => 'Datos de prueba con php artisan db:seed — útil en dev y demos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué comando aplica migraciones pendientes?', 'options' => ['php artisan migrate', 'php artisan seed', 'composer update'], 'answer' => 'php artisan migrate', 'explanation' => 'migrate ejecuta up() de migraciones nuevas.', 'pro_tip' => 'migrate:fresh borra todo y re-migra — solo en dev.'],
            ['type' => 'contains', 'question' => 'Escribe Schema::create en una migración', 'must_contain' => ['Schema::create'], 'hint' => "Schema::create('users', function (...) { });", 'explanation' => 'Blueprint define columnas con métodos fluidos.', 'pro_tip' => 'foreignId()->constrained() para FKs limpias.'],
        ],
    ],
    [
        'slug' => 'lv-auth',
        'order' => 6,
        'title' => 'Autenticación y middleware',
        'level' => 'Seguridad',
        'minutes' => 35,
        'summary' => 'Auth scaffolding, middleware y policies.',
        'concepts' => ['auth', 'middleware', 'policy'],
        'sections' => [
            ['heading' => 'Auth', 'body' => 'Laravel Breeze/Jetstream generan login, registro y reset password. Middleware `auth` protege rutas.'],
            ['heading' => 'Policies', 'body' => 'Autorización fina: ¿puede este usuario editar este post? Gate y Policy.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué middleware exige usuario logueado?', 'options' => ['auth', 'guest', 'public'], 'answer' => 'auth', 'explanation' => 'Route::middleware("auth") protege grupos de rutas.', 'pro_tip' => 'auth:sanctum para APIs con tokens.'],
            ['type' => 'choice', 'question' => '¿Dónde va la lógica "¿puede editar?"?', 'options' => ['Policy', 'Blade solo', 'composer.json'], 'answer' => 'Policy', 'explanation' => 'Policies centralizan autorización — no en el controller.', 'pro_tip' => '@can en Blade usa policies automáticamente.'],
        ],
    ],
    [
        'slug' => 'lv-api',
        'order' => 7,
        'title' => 'API REST con Sanctum',
        'level' => 'API',
        'minutes' => 35,
        'summary' => 'API Resources, JSON y tokens para SPAs.',
        'concepts' => ['api', 'sanctum', 'resource'],
        'sections' => [
            ['heading' => 'API Resources', 'body' => 'Transforman modelos a JSON consistente — ocultas campos sensibles (password).', 'code' => "return UserResource::collection(User::paginate());"],
            ['heading' => 'Sanctum', 'body' => 'Tokens API para React/Vue/mobile. SPA auth con cookies + CSRF.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué paquete Laravel autentica APIs y SPAs?', 'options' => ['Sanctum', 'Blade', 'Horizon'], 'answer' => 'Sanctum', 'explanation' => 'Sanctum es ligero — Passport para OAuth2 completo.', 'pro_tip' => 'Tu React frontend consume la misma API que construyes aquí.'],
            ['type' => 'choice', 'question' => '¿Para qué sirve API Resource?', 'options' => ['Formatear respuesta JSON de modelos', 'Crear migraciones', 'Compilar assets'], 'answer' => 'Formatear respuesta JSON de modelos', 'explanation' => 'Separa forma de respuesta de lógica del modelo.', 'pro_tip' => 'Resource::collection para listas paginadas.'],
        ],
    ],
];
