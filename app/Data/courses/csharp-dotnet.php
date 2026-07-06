<?php

declare(strict_types=1);

return [
    ['slug' => 'cs-intro', 'order' => 1, 'title' => 'C# y .NET moderno', 'level' => 'Fundamentos', 'minutes' => 25, 'summary' => '.NET 8, SDK y primer app.', 'concepts' => ['csharp', 'dotnet', 'sdk'], 'sections' => [
        ['heading' => '.NET', 'body' => '**C#** + **.NET** — cross-platform (Windows, Linux, macOS). Web, APIs, games (Unity), enterprise Microsoft.'],
        ['heading' => 'CLI', 'body' => 'dotnet new webapi — proyecto minimal APIs o controllers.', 'code' => "var builder = WebApplication.CreateBuilder(args);\nvar app = builder.Build();\napp.MapGet(\"/\", () => \"Hola .NET\");\napp.Run();"],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿.NET corre en Linux?', 'options' => ['Sí, cross-platform', 'Solo Windows', 'Solo Azure'], 'answer' => 'Sí, cross-platform', 'explanation' => '.NET Core+ multi-OS.', 'pro_tip' => 'dotnet --version verifica SDK.'],
        ['type' => 'contains', 'question' => 'Escribe MapGet', 'must_contain' => ['MapGet'], 'hint' => 'app.MapGet("/", () => "Hola");', 'explanation' => 'Minimal API endpoint.', 'pro_tip' => 'Compare Spring Boot curso Java.'],
    ]],
    ['slug' => 'cs-aspnet', 'order' => 2, 'title' => 'ASP.NET Core', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Middleware, DI y controllers.', 'concepts' => ['aspnet', 'middleware', 'di'], 'sections' => [
        ['heading' => 'Pipeline', 'body' => 'Middleware chain — auth, logging, routing antes del handler.'],
        ['heading' => 'DI', 'body' => 'builder.Services.AddScoped<IUserService, UserService>() — built-in container.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Registrar servicio scoped?', 'options' => ['AddScoped', 'AddStatic', 'new only'], 'answer' => 'AddScoped', 'explanation' => 'Una instancia por request HTTP.', 'pro_tip' => 'Singleton vs Transient vs Scoped.'],
        ['type' => 'choice', 'question' => '¿Controller attribute?', 'options' => ['[ApiController]', '[PHP]', '[Route only]'], 'answer' => '[ApiController]', 'explanation' => 'API conventions automáticas.', 'pro_tip' => 'Minimal APIs para micro-endpoints.'],
    ]],
    ['slug' => 'cs-efcore', 'order' => 3, 'title' => 'Entity Framework Core', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'ORM, migrations y LINQ.', 'concepts' => ['efcore', 'migration', 'linq'], 'sections' => [
        ['heading' => 'DbContext', 'body' => 'public DbSet<User> Users { get; set; } — LINQ queries type-safe.'],
        ['heading' => 'Migrations', 'body' => 'dotnet ef migrations add Initial — versiona esquema como Laravel.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿LINQ Where?', 'options' => ['users.Where(u => u.Active)', 'SQL string only', 'grep'], 'answer' => 'users.Where(u => u.Active)', 'explanation' => 'Traduce a SQL.', 'pro_tip' => 'Include() eager load relaciones.'],
        ['type' => 'choice', 'question' => '¿Migration apply?', 'options' => ['dotnet ef database update', 'php artisan only', 'Manual SQL'], 'answer' => 'dotnet ef database update', 'explanation' => 'Aplica pending migrations.', 'pro_tip' => 'PostgreSQL provider Npgsql.'],
    ]],
    ['slug' => 'cs-api', 'order' => 4, 'title' => 'REST APIs', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'CRUD, validation y DTOs.', 'concepts' => ['rest', 'dto', 'validation'], 'sections' => [
        ['heading' => 'Controllers', 'body' => '[HttpGet("{id}")] public ActionResult<UserDto> Get(int id)'],
        ['heading' => 'Validation', 'body' => 'DataAnnotations [Required], [EmailAddress] — ModelState.IsValid.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Return 404?', 'options' => ['return NotFound()', 'return null only', 'exit'], 'answer' => 'return NotFound()', 'explanation' => 'ActionResult helpers.', 'pro_tip' => 'ProblemDetails RFC 7807 errors.'],
        ['type' => 'choice', 'question' => '¿DTO por qué?', 'options' => ['Expone solo campos API — oculta entidad', 'Más lento siempre', 'Sin razón'], 'answer' => 'Expone solo campos API — oculta entidad', 'explanation' => 'Anti over-posting.', 'pro_tip' => 'AutoMapper opcional.'],
    ]],
    ['slug' => 'cs-auth', 'order' => 5, 'title' => 'Identity y JWT', 'level' => 'Seguridad', 'minutes' => 35, 'summary' => 'ASP.NET Identity, JWT Bearer.', 'concepts' => ['identity', 'jwt', 'bearer'], 'sections' => [
        ['heading' => 'JWT', 'body' => 'AddAuthentication(JwtBearerDefaults.AuthenticationScheme) — [Authorize] en controllers.'],
        ['heading' => 'Identity', 'body' => 'UserManager, SignInManager — passwords hashed, roles.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Proteger endpoint?', 'options' => ['[Authorize]', '[Public]', 'Sin attribute'], 'answer' => '[Authorize]', 'explanation' => '401 si no autenticado.', 'pro_tip' => 'Curso OAuth OIDC complementa.'],
        ['type' => 'choice', 'question' => '¿Bearer token header?', 'options' => ['Authorization: Bearer {jwt}', 'X-Token only', 'Cookie only'], 'answer' => 'Authorization: Bearer {jwt}', 'explanation' => 'Estándar APIs.', 'pro_tip' => 'Refresh tokens en cookie httpOnly alternativa.'],
    ]],
    ['slug' => 'cs-prod', 'order' => 6, 'title' => 'Tests y deploy', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'xUnit, Docker y Azure.', 'concepts' => ['xunit', 'docker', 'azure'], 'sections' => [
        ['heading' => 'Tests', 'body' => 'WebApplicationFactory — integration tests sin browser.'],
        ['heading' => 'Deploy', 'body' => 'Docker multi-stage + Azure App Service o K8s.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Test framework .NET?', 'options' => ['xUnit', 'PHPUnit', 'Jest only'], 'answer' => 'xUnit', 'explanation' => 'También NUnit, MSTest.', 'pro_tip' => 'dotnet test en CI.'],
        ['type' => 'choice', 'question' => '¿Health checks?', 'options' => ['MapHealthChecks("/health")', 'Sin soporte', 'phpinfo'], 'answer' => 'MapHealthChecks("/health")', 'explanation' => 'Built-in ASP.NET Core.', 'pro_tip' => 'Compare Spring Actuator.'],
    ]],
];
