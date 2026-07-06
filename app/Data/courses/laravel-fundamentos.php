<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'lv-intro',
    'order' => 1,
    'title' => 'Introducción a Laravel',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Artisan, estructura MVC y el ecosistema.',
    'concepts' => 
    array (
      0 => 'laravel',
      1 => 'artisan',
      2 => 'mvc',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué Laravel?',
        'body' => 'Laravel acelera desarrollo PHP con routing, ORM, auth y colas incluidos. Usado en startups y empresas globales.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Estructura',
        'body' => 'app/ (código), routes/, resources/views/, database/migrations/. **Artisan** es la CLI: `php artisan serve`, `make:model`.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando inicia el servidor de desarrollo Laravel?',
        'options' => 
        array (
          0 => 'php artisan serve',
          1 => 'composer start',
          2 => 'npm run dev',
        ),
        'answer' => 'php artisan serve',
        'explanation' => 'Artisan es la navaja suiza de Laravel.',
        'pro_tip' => 'php artisan list muestra todos los comandos disponibles.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué patrón usa Laravel principalmente?',
        'options' => 
        array (
          0 => 'MVC',
          1 => 'Solo procedural',
          2 => 'Microkernel puro',
        ),
        'answer' => 'MVC',
        'explanation' => 'Model (Eloquent), View (Blade), Controller (lógica HTTP).',
        'pro_tip' => 'Laravel 11 simplificó la estructura — menos carpetas boilerplate.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'lv-routes',
    'order' => 2,
    'title' => 'Rutas y controladores',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'routes/web.php, Route::get y controllers.',
    'concepts' => 
    array (
      0 => 'routes',
      1 => 'controller',
      2 => 'middleware',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Definir rutas',
        'body' => 'En routes/web.php defines URLs y qué código ejecutan.',
        'code' => 'Route::get(\'/users\', [UserController::class, \'index\']);',
      ),
      1 => 
      array (
        'heading' => 'Controladores',
        'body' => 'php artisan make:controller UserController — separas HTTP de lógica de negocio.',
        'code' => 'Route::get(\'/hola\', fn () => \'Hola\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde defines rutas web en Laravel?',
        'options' => 
        array (
          0 => 'routes/web.php',
          1 => 'app/routes.php',
          2 => 'public/index.php',
        ),
        'answer' => 'routes/web.php',
        'explanation' => 'APIs van en routes/api.php.',
        'pro_tip' => 'Route::resource genera CRUD completo en una línea.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe Route::get con una ruta /hola',
        'must_contain' => 
        array (
          0 => 'Route::get',
          1 => '/hola',
        ),
        'hint' => 'Route::get(\'/hola\', fn () => \'Hola\');',
        'explanation' => 'Route::get mapea GET a handler.',
        'pro_tip' => 'Closures para prototipos; controllers para apps reales.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'lv-blade',
    'order' => 3,
    'title' => 'Vistas con Blade',
    'level' => 'Frontend',
    'minutes' => 30,
    'summary' => 'Templates, layouts, @foreach y componentes.',
    'concepts' => 
    array (
      0 => 'blade',
      1 => 'template',
      2 => 'layout',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Blade',
        'body' => 'Motor de plantillas de Laravel. Sintaxis limpia: `{{ $name }}`, `@if`, `@foreach`.',
        'code' => '@foreach($users as $user)
  <p>{{ $user->name }}</p>
@endforeach',
      ),
      1 => 
      array (
        'heading' => 'Layouts',
        'body' => '@extends y @section evitan duplicar header/footer en cada vista.',
        'code' => '@foreach($items as $item)
@endforeach',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo imprimes una variable escapada en Blade?',
        'options' => 
        array (
          0 => '{{ $var }}',
          1 => '<?= $var ?>',
          2 => '{! $var !}',
        ),
        'answer' => '{{ $var }}',
        'explanation' => '{{ }} escapa HTML — previene XSS.',
        'pro_tip' => '{!! !!} sin escape solo para HTML confiable.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe @foreach en Blade',
        'must_contain' => 
        array (
          0 => '@foreach',
          1 => '@endforeach',
        ),
        'hint' => '@foreach($items as $item)
@endforeach',
        'explanation' => 'Blade compila a PHP puro en storage/framework/views.',
        'pro_tip' => 'Componentes Blade reutilizables: <x-alert />',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'lv-eloquent',
    'order' => 4,
    'title' => 'Eloquent ORM',
    'level' => 'Datos',
    'minutes' => 35,
    'summary' => 'Modelos, relaciones y consultas expresivas.',
    'concepts' => 
    array (
      0 => 'eloquent',
      1 => 'model',
      2 => 'relationship',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Modelos',
        'body' => 'Un modelo User representa tabla users. User::all(), User::find(1), User::where(...).',
        'code' => 'class User extends Model {
  protected $fillable = [\'name\', \'email\'];
}',
      ),
      1 => 
      array (
        'heading' => 'Relaciones',
        'body' => 'hasMany, belongsTo, belongsToMany — Eloquent expresa JOINs con métodos legibles.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-eloquent\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué método lista todos los registros?',
        'options' => 
        array (
          0 => 'Model::all()',
          1 => 'Model::getAll()',
          2 => 'SELECT * manual',
        ),
        'answer' => 'Model::all()',
        'explanation' => 'Eloquent abstrae SQL — pero saber SQL sigue siendo vital.',
        'pro_tip' => 'N+1 queries: usa with() para eager loading.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve $fillable?',
        'options' => 
        array (
          0 => 'Whitelist de campos en mass assignment',
          1 => 'Encriptar datos',
          2 => 'Crear índices',
        ),
        'answer' => 'Whitelist de campos en mass assignment',
        'explanation' => 'Sin fillable/guarded, un atacante podría asignar is_admin=true.',
        'pro_tip' => 'Curso de seguridad web profundiza en esto.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'lv-migrations',
    'order' => 5,
    'title' => 'Migraciones y seeders',
    'level' => 'Datos',
    'minutes' => 30,
    'summary' => 'Versionar esquema de BD como código.',
    'concepts' => 
    array (
      0 => 'migration',
      1 => 'seeder',
      2 => 'schema',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Migraciones',
        'body' => 'php artisan make:migration create_posts_table. up() crea, down() revierte.',
        'code' => 'Schema::create(\'posts\', function (Blueprint $table) {
  $table->id();
  $table->string(\'title\');
});',
      ),
      1 => 
      array (
        'heading' => 'Seeders',
        'body' => 'Datos de prueba con php artisan db:seed — útil en dev y demos.',
        'code' => 'Schema::create(\'users\', function (...) { });',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando aplica migraciones pendientes?',
        'options' => 
        array (
          0 => 'php artisan migrate',
          1 => 'php artisan seed',
          2 => 'composer update',
        ),
        'answer' => 'php artisan migrate',
        'explanation' => 'migrate ejecuta up() de migraciones nuevas.',
        'pro_tip' => 'migrate:fresh borra todo y re-migra — solo en dev.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe Schema::create en una migración',
        'must_contain' => 
        array (
          0 => 'Schema::create',
        ),
        'hint' => 'Schema::create(\'users\', function (...) { });',
        'explanation' => 'Blueprint define columnas con métodos fluidos.',
        'pro_tip' => 'foreignId()->constrained() para FKs limpias.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'lv-auth',
    'order' => 6,
    'title' => 'Autenticación y middleware',
    'level' => 'Seguridad',
    'minutes' => 35,
    'summary' => 'Auth scaffolding, middleware y policies.',
    'concepts' => 
    array (
      0 => 'auth',
      1 => 'middleware',
      2 => 'policy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Auth',
        'body' => 'Laravel Breeze/Jetstream generan login, registro y reset password. Middleware `auth` protege rutas.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-auth\';',
      ),
      1 => 
      array (
        'heading' => 'Policies',
        'body' => 'Autorización fina: ¿puede este usuario editar este post? Gate y Policy.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-auth\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué middleware exige usuario logueado?',
        'options' => 
        array (
          0 => 'auth',
          1 => 'guest',
          2 => 'public',
        ),
        'answer' => 'auth',
        'explanation' => 'Route::middleware("auth") protege grupos de rutas.',
        'pro_tip' => 'auth:sanctum para APIs con tokens.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde va la lógica "¿puede editar?"?',
        'options' => 
        array (
          0 => 'Policy',
          1 => 'Blade solo',
          2 => 'composer.json',
        ),
        'answer' => 'Policy',
        'explanation' => 'Policies centralizan autorización — no en el controller.',
        'pro_tip' => '@can en Blade usa policies automáticamente.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'lv-api',
    'order' => 7,
    'title' => 'API REST con Sanctum',
    'level' => 'API',
    'minutes' => 35,
    'summary' => 'API Resources, JSON y tokens para SPAs.',
    'concepts' => 
    array (
      0 => 'api',
      1 => 'sanctum',
      2 => 'resource',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'API Resources',
        'body' => 'Transforman modelos a JSON consistente — ocultas campos sensibles (password).',
        'code' => 'return UserResource::collection(User::paginate());',
      ),
      1 => 
      array (
        'heading' => 'Sanctum',
        'body' => 'Tokens API para React/Vue/mobile. SPA auth con cookies + CSRF.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: lv-api\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué paquete Laravel autentica APIs y SPAs?',
        'options' => 
        array (
          0 => 'Sanctum',
          1 => 'Blade',
          2 => 'Horizon',
        ),
        'answer' => 'Sanctum',
        'explanation' => 'Sanctum es ligero — Passport para OAuth2 completo.',
        'pro_tip' => 'Tu React frontend consume la misma API que construyes aquí.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve API Resource?',
        'options' => 
        array (
          0 => 'Formatear respuesta JSON de modelos',
          1 => 'Crear migraciones',
          2 => 'Compilar assets',
        ),
        'answer' => 'Formatear respuesta JSON de modelos',
        'explanation' => 'Separa forma de respuesta de lógica del modelo.',
        'pro_tip' => 'Resource::collection para listas paginadas.',
      ),
    ),
  ),
  array (
    'slug' => 'lv-testing',
    'order' => 8,
    'title' => 'Testing en Laravel',
    'level' => 'Calidad',
    'minutes' => 35,
    'summary' => 'Feature tests, factories y RefreshDatabase.',
    'concepts' => 
    array (
      0 => 'pest',
      1 => 'factory',
      2 => 'feature-test',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Feature tests',
        'body' => 'Simulan HTTP completo — assertStatus, assertJson, assertDatabaseHas.',
        'code' => 'public function test_user_can_login(): void
{
    \$response = \$this->post(\'/login\', [\'email\' => \'a@test.com\', \'password\' => \'secret\']);
    \$response->assertRedirect(\'/dashboard\');
}',
      ),
      1 => 
      array (
        'heading' => 'Factories',
        'body' => 'User::factory()->create() — datos fake reproducibles en tests.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿RefreshDatabase trait?',
        'options' => 
        array (
          0 => 'Resetea BD entre tests',
          1 => 'Cache only',
          2 => 'Delete users prod',
        ),
        'answer' => 'Resetea BD entre tests',
        'explanation' => 'Tests aislados sin estado compartido.',
        'pro_tip' => 'Curso testing-php PHPUnit base.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe assertStatus(200)',
        'must_contain' => 
        array (
          0 => 'assertStatus',
        ),
        'hint' => '$response->assertStatus(200);',
        'explanation' => 'Assert HTTP response code.',
        'pro_tip' => 'assertJsonStructure valida API contracts.',
      ),
    ),
  ),
  array (
    'slug' => 'lv-events',
    'order' => 9,
    'title' => 'Events y listeners',
    'level' => 'Arquitectura',
    'minutes' => 35,
    'summary' => 'Desacoplar side effects con eventos.',
    'concepts' => 
    array (
      0 => 'event',
      1 => 'listener',
      2 => 'queue',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Events',
        'body' => 'OrderPlaced event → SendInvoice listener — checkout no conoce email SMTP.',
        'code' => 'event(new OrderPlaced(\$order));

class SendInvoice
{
    public function handle(OrderPlaced \$event): void
    {
        Mail::to(\$event->order->email)->send(new InvoiceMail(\$event->order));
    }
}',
      ),
      1 => 
      array (
        'heading' => 'Queued listeners',
        'body' => 'ShouldQueue en listener — email async sin bloquear request.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja event-driven Laravel?',
        'options' => 
        array (
          0 => 'Desacopla acciones secundarias',
          1 => 'Sin BD',
          2 => 'Sin tests',
        ),
        'answer' => 'Desacopla acciones secundarias',
        'explanation' => 'Añades listener sin tocar controller.',
        'pro_tip' => 'Curso event-sourcing-cqrs advanced pattern.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Listener ShouldQueue?',
        'options' => 
        array (
          0 => 'Ejecuta async en cola',
          1 => 'Sync only',
          2 => 'Delete event',
        ),
        'answer' => 'Ejecuta async en cola',
        'explanation' => 'Curso mensajeria-colas Redis driver.',
        'pro_tip' => 'Idempotent listeners — duplicate events.',
      ),
    ),
  ),
);
