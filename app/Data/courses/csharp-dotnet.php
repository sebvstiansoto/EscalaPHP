<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'cs-intro',
    'order' => 1,
    'title' => 'C# y .NET moderno',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => '.NET 8, SDK y primer app.',
    'concepts' => 
    array (
      0 => 'csharp',
      1 => 'dotnet',
      2 => 'sdk',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '.NET',
        'body' => '**C#** + **.NET** — cross-platform (Windows, Linux, macOS). Web, APIs, games (Unity), enterprise Microsoft.',
        'code' => 'app.MapGet("/", () => "Hola");',
      ),
      1 => 
      array (
        'heading' => 'CLI',
        'body' => 'dotnet new webapi — proyecto minimal APIs o controllers.',
        'code' => 'var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();
app.MapGet("/", () => "Hola .NET");
app.Run();',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿.NET corre en Linux?',
        'options' => 
        array (
          0 => 'Sí, cross-platform',
          1 => 'Solo Windows',
          2 => 'Solo Azure',
        ),
        'answer' => 'Sí, cross-platform',
        'explanation' => '.NET Core+ multi-OS.',
        'pro_tip' => 'dotnet --version verifica SDK.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe MapGet',
        'must_contain' => 
        array (
          0 => 'MapGet',
        ),
        'hint' => 'app.MapGet("/", () => "Hola");',
        'explanation' => 'Minimal API endpoint.',
        'pro_tip' => 'Compare Spring Boot curso Java.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'cs-aspnet',
    'order' => 2,
    'title' => 'ASP.NET Core',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Middleware, DI y controllers.',
    'concepts' => 
    array (
      0 => 'aspnet',
      1 => 'middleware',
      2 => 'di',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pipeline',
        'body' => 'Middleware chain — auth, logging, routing antes del handler.',
        'code' => '# Practica: cs-aspnet
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'DI',
        'body' => 'builder.Services.AddScoped<IUserService, UserService>() — built-in container.',
        'code' => '# Practica: cs-aspnet
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Registrar servicio scoped?',
        'options' => 
        array (
          0 => 'AddScoped',
          1 => 'AddStatic',
          2 => 'new only',
        ),
        'answer' => 'AddScoped',
        'explanation' => 'Una instancia por request HTTP.',
        'pro_tip' => 'Singleton vs Transient vs Scoped.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Controller attribute?',
        'options' => 
        array (
          0 => '[ApiController]',
          1 => '[PHP]',
          2 => '[Route only]',
        ),
        'answer' => '[ApiController]',
        'explanation' => 'API conventions automáticas.',
        'pro_tip' => 'Minimal APIs para micro-endpoints.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'cs-efcore',
    'order' => 3,
    'title' => 'Entity Framework Core',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'ORM, migrations y LINQ.',
    'concepts' => 
    array (
      0 => 'efcore',
      1 => 'migration',
      2 => 'linq',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DbContext',
        'body' => 'public DbSet<User> Users { get; set; } — LINQ queries type-safe.',
        'code' => '# Practica: cs-efcore
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Migrations',
        'body' => 'dotnet ef migrations add Initial — versiona esquema como Laravel.',
        'code' => '# Practica: cs-efcore
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿LINQ Where?',
        'options' => 
        array (
          0 => 'users.Where(u => u.Active)',
          1 => 'SQL string only',
          2 => 'grep',
        ),
        'answer' => 'users.Where(u => u.Active)',
        'explanation' => 'Traduce a SQL.',
        'pro_tip' => 'Include() eager load relaciones.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Migration apply?',
        'options' => 
        array (
          0 => 'dotnet ef database update',
          1 => 'php artisan only',
          2 => 'Manual SQL',
        ),
        'answer' => 'dotnet ef database update',
        'explanation' => 'Aplica pending migrations.',
        'pro_tip' => 'PostgreSQL provider Npgsql.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'cs-api',
    'order' => 4,
    'title' => 'REST APIs',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'CRUD, validation y DTOs.',
    'concepts' => 
    array (
      0 => 'rest',
      1 => 'dto',
      2 => 'validation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Controllers',
        'body' => '[HttpGet("{id}")] public ActionResult<UserDto> Get(int id)',
        'code' => '# Practica: cs-api
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Validation',
        'body' => 'DataAnnotations [Required], [EmailAddress] — ModelState.IsValid.',
        'code' => '# Practica: cs-api
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Return 404?',
        'options' => 
        array (
          0 => 'return NotFound()',
          1 => 'return null only',
          2 => 'exit',
        ),
        'answer' => 'return NotFound()',
        'explanation' => 'ActionResult helpers.',
        'pro_tip' => 'ProblemDetails RFC 7807 errors.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DTO por qué?',
        'options' => 
        array (
          0 => 'Expone solo campos API — oculta entidad',
          1 => 'Más lento siempre',
          2 => 'Sin razón',
        ),
        'answer' => 'Expone solo campos API — oculta entidad',
        'explanation' => 'Anti over-posting.',
        'pro_tip' => 'AutoMapper opcional.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'cs-auth',
    'order' => 5,
    'title' => 'Identity y JWT',
    'level' => 'Seguridad',
    'minutes' => 35,
    'summary' => 'ASP.NET Identity, JWT Bearer.',
    'concepts' => 
    array (
      0 => 'identity',
      1 => 'jwt',
      2 => 'bearer',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'JWT',
        'body' => 'AddAuthentication(JwtBearerDefaults.AuthenticationScheme) — [Authorize] en controllers.',
        'code' => '# Practica: cs-auth
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Identity',
        'body' => 'UserManager, SignInManager — passwords hashed, roles.',
        'code' => '# Practica: cs-auth
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Proteger endpoint?',
        'options' => 
        array (
          0 => '[Authorize]',
          1 => '[Public]',
          2 => 'Sin attribute',
        ),
        'answer' => '[Authorize]',
        'explanation' => '401 si no autenticado.',
        'pro_tip' => 'Curso OAuth OIDC complementa.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bearer token header?',
        'options' => 
        array (
          0 => 'Authorization: Bearer {jwt}',
          1 => 'X-Token only',
          2 => 'Cookie only',
        ),
        'answer' => 'Authorization: Bearer {jwt}',
        'explanation' => 'Estándar APIs.',
        'pro_tip' => 'Refresh tokens en cookie httpOnly alternativa.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'cs-prod',
    'order' => 6,
    'title' => 'Tests y deploy',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'xUnit, Docker y Azure.',
    'concepts' => 
    array (
      0 => 'xunit',
      1 => 'docker',
      2 => 'azure',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tests',
        'body' => 'WebApplicationFactory — integration tests sin browser.',
        'code' => '# Practica: cs-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Deploy',
        'body' => 'Docker multi-stage + Azure App Service o K8s.',
        'code' => '# Practica: cs-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Test framework .NET?',
        'options' => 
        array (
          0 => 'xUnit',
          1 => 'PHPUnit',
          2 => 'Jest only',
        ),
        'answer' => 'xUnit',
        'explanation' => 'También NUnit, MSTest.',
        'pro_tip' => 'dotnet test en CI.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Health checks?',
        'options' => 
        array (
          0 => 'MapHealthChecks("/health")',
          1 => 'Sin soporte',
          2 => 'phpinfo',
        ),
        'answer' => 'MapHealthChecks("/health")',
        'explanation' => 'Built-in ASP.NET Core.',
        'pro_tip' => 'Compare Spring Actuator.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'csharp-dotnet-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de C# & .NET.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en C# & .NET a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
  7 => 
  array (
    'slug' => 'csharp-dotnet-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de C# & .NET.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en C# & .NET a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
