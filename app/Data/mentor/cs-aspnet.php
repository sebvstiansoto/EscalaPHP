<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'ASP.NET Core',
    'body' => 'Middleware, DI y controllers. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔷',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [aspnet](/glosario#aspnet) · [Middleware](/glosario#middleware) · [DI](/glosario#di)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Pipeline',
    'body' => 'Middleware chain — auth, logging, routing antes del handler.',
    'code' => '# Practica: cs-aspnet
echo "Listo"
# Reemplaza con tu comando',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'DI',
    'body' => 'builder.Services.AddScoped<IUserService, UserService>() — built-in container.',
    'code' => '# Practica: cs-aspnet
echo "Listo"
# Reemplaza con tu comando',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Middleware, DI y controllers. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **C# & .NET**, esto aparece en code reviews, incidentes y entregas diarias. Middleware, DI y controllers. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Practica: cs-aspnet
echo "Listo"
# Reemplaza con tu comando',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Practica: cs-aspnet',
      1 => 'echo "Listo"',
      2 => '# Reemplaza con tu comando',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Singleton vs Transient vs Scoped.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-middleware](/conexiones#conn-middleware).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Registrar servicio scoped?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Controller attribute?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
