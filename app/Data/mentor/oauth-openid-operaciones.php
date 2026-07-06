<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Checklist profesional y próximos pasos',
    'body' => 'Checklist profesional y próximos pasos — cierre avanzado de OAuth 2.0 & OpenID Connect. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔑',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [best-practices](/glosario#best-practices) · [checklist](/glosario#checklist) · [career](/glosario#career)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Patrones en producción',
    'body' => 'Aplica lo aprendido en OAuth 2.0 & OpenID Connect a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
    'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — oauth-openid
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Operación continua',
    'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
    'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — oauth-openid
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Checklist profesional y próximos pasos — cierre avanzado de OAuth 2.0 & OpenID Connect. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **OAuth 2.0 & OpenID Connect**, esto aparece en code reviews, incidentes y entregas diarias. Checklist profesional y próximos pasos — cierre avanzado de OAuth 2.0 & OpenID Connect. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — oauth-openid
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<?php',
      1 => 'declare(strict_types=1);',
      2 => '// Checklist post-deploy — oauth-openid',
      3 => '$checks = [',
      4 => '    \'health\' => file_get_contents(\'https://app.test/health\') !== false,',
      5 => '    \'migrations\' => true,',
      6 => '    \'cache_warm\' => true,',
      7 => '];',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Automatiza el checklist en CI/CD cuando sea posible.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué revisar antes de un deploy a producción?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Señal de que necesitas observabilidad mejor?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  11 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  12 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
