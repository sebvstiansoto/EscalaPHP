<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'SSO enterprise y Keycloak',
    'body' => 'SAML vs OIDC, Keycloak y zero trust. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔑',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [sso](/glosario#sso) · [keycloak](/glosario#keycloak) · [saml](/glosario#saml)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SSO',
    'body' => 'Single Sign-On — un login para Slack, Google Workspace, tu app vía IdP corporativo.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-prod\';',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Keycloak',
    'body' => 'IdP open source — OIDC, SAML, social login, user federation LDAP.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-prod\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** SAML vs OIDC, Keycloak y zero trust. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **OAuth 2.0 & OpenID Connect**, esto aparece en code reviews, incidentes y entregas diarias. SAML vs OIDC, Keycloak y zero trust. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-prod\';',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<?php',
      1 => 'declare(strict_types=1);',
      2 => 'echo \'Practica: oa-prod\';',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Muchos IdP soportan ambos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿SAML común en...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Refresh token rotation?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
