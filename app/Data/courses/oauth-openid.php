<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'oa-intro',
    'order' => 1,
    'title' => 'Auth moderna: OAuth 2.0 y OIDC',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Roles, tokens y flujos estándar.',
    'concepts' => 
    array (
      0 => 'oauth2',
      1 => 'oidc',
      2 => 'token',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'OAuth 2.0',
        'body' => '**Autorización** delegada — "Login con Google" sin compartir password. Roles: Resource Owner, Client, Authorization Server, Resource Server.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-intro\';',
      ),
      1 => 
      array (
        'heading' => 'OIDC',
        'body' => 'OpenID Connect = OAuth2 + **identidad** — id_token JWT con claims del usuario.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿OAuth2 es principalmente...?',
        'options' => 
        array (
          0 => 'Autorización (acceso a recursos)',
          1 => 'Hash de passwords',
          2 => 'Cifrado disco',
        ),
        'answer' => 'Autorización (acceso a recursos)',
        'explanation' => 'OIDC añade autenticación.',
        'pro_tip' => 'OAuth ≠ autenticación sola.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿id_token contiene...?',
        'options' => 
        array (
          0 => 'Claims identidad usuario (sub, email)',
          1 => 'Solo refresh token',
          2 => 'SQL queries',
        ),
        'answer' => 'Claims identidad usuario (sub, email)',
        'explanation' => 'JWT firmado por IdP.',
        'pro_tip' => 'access_token para API, id_token para login.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'oa-oauth2',
    'order' => 2,
    'title' => 'Flujos OAuth 2.0',
    'level' => 'Fundamentos',
    'minutes' => 40,
    'summary' => 'Authorization Code, PKCE y client credentials.',
    'concepts' => 
    array (
      0 => 'auth-code',
      1 => 'pkce',
      2 => 'client-credentials',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Authorization Code + PKCE',
        'body' => 'Flujo estándar SPAs y mobile — code_verifier evita interceptación del code.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-oauth2\';',
      ),
      1 => 
      array (
        'heading' => 'Client Credentials',
        'body' => 'M2M — servicio a servicio sin usuario humano.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-oauth2\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PKCE protege contra...?',
        'options' => 
        array (
          0 => 'Interceptación authorization code',
          1 => 'SQL injection',
          2 => 'XSS',
        ),
        'answer' => 'Interceptación authorization code',
        'explanation' => 'Obligatorio en public clients.',
        'pro_tip' => 'code_challenge = BASE64URL(SHA256(verifier)).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Flujo server-side web clásico?',
        'options' => 
        array (
          0 => 'Authorization Code',
          1 => 'Implicit (deprecated)',
          2 => 'Password grant',
        ),
        'answer' => 'Authorization Code',
        'explanation' => 'Implicit eliminado en OAuth 2.1.',
        'pro_tip' => 'Nunca password grant en prod.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'oa-oidc',
    'order' => 3,
    'title' => 'OpenID Connect en detalle',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Discovery, scopes y UserInfo.',
    'concepts' => 
    array (
      0 => 'discovery',
      1 => 'scope',
      2 => 'userinfo',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Discovery',
        'body' => '/.well-known/openid-configuration — endpoints automáticos del IdP.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-oidc\';',
      ),
      1 => 
      array (
        'heading' => 'Scopes',
        'body' => 'openid profile email — mínimo openid para OIDC; offline_access para refresh.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-oidc\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Scope mínimo OIDC?',
        'options' => 
        array (
          0 => 'openid',
          1 => 'admin',
          2 => 'read:all',
        ),
        'answer' => 'openid',
        'explanation' => 'Sin openid es OAuth puro.',
        'pro_tip' => 'nonce en request previene replay.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿UserInfo endpoint?',
        'options' => 
        array (
          0 => 'Claims adicionales del usuario',
          1 => 'Lista usuarios admin',
          2 => 'Logout only',
        ),
        'answer' => 'Claims adicionales del usuario',
        'explanation' => 'GET con access_token.',
        'pro_tip' => 'Muchos claims ya en id_token.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'oa-jwt',
    'order' => 4,
    'title' => 'JWT deep dive',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Header, payload, firma y validación.',
    'concepts' => 
    array (
      0 => 'jwt',
      1 => 'jws',
      2 => 'claims',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Estructura',
        'body' => 'header.payload.signature — Base64URL, NO cifrado por defecto — valida firma siempre.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-jwt\';',
      ),
      1 => 
      array (
        'heading' => 'Claims',
        'body' => 'exp, iss, aud, sub — rechaza si expirado o aud incorrecto.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-jwt\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿JWT firmado significa...?',
        'options' => 
        array (
          0 => 'Integridad verificable con clave pública/secreta',
          1 => 'Contenido secreto cifrado',
          2 => 'Anónimo',
        ),
        'answer' => 'Integridad verificable con clave pública/secreta',
        'explanation' => 'Payload es legible — no pongas secrets.',
        'pro_tip' => 'JWE si necesitas cifrado.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Validar siempre...?',
        'options' => 
        array (
          0 => 'Firma, exp, iss, aud',
          1 => 'Solo decode base64',
          2 => 'Color del token',
        ),
        'answer' => 'Firma, exp, iss, aud',
        'explanation' => 'Alg:none attack — bloquea algoritmos none.',
        'pro_tip' => 'Curso seguridad web: JWT en cookie httpOnly.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'oa-laravel',
    'order' => 5,
    'title' => 'OAuth en Laravel y Passport',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'Socialite, Passport y Sanctum.',
    'concepts' => 
    array (
      0 => 'socialite',
      1 => 'passport',
      2 => 'sanctum',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Socialite',
        'body' => 'Socialite::driver("google")->redirect() — OAuth social en minutos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-laravel\';',
      ),
      1 => 
      array (
        'heading' => 'Passport vs Sanctum',
        'body' => 'Passport = OAuth2 server completo; Sanctum = SPA/tokens simples + API.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-laravel\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Sanctum ideal para...?',
        'options' => 
        array (
          0 => 'SPA same-domain + API tokens',
          1 => 'OAuth server terceros',
          2 => 'Solo session PHP',
        ),
        'answer' => 'SPA same-domain + API tokens',
        'explanation' => 'Ligero vs Passport pesado.',
        'pro_tip' => 'Passport si eres IdP para otros apps.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Socialite callback?',
        'options' => 
        array (
          0 => 'Intercambia code por user OAuth',
          1 => 'Genera JWT manual',
          2 => 'Solo blade',
        ),
        'answer' => 'Intercambia code por user OAuth',
        'explanation' => 'Route /auth/google/callback.',
        'pro_tip' => 'Guarda provider_id en users table.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'oa-prod',
    'order' => 6,
    'title' => 'SSO enterprise y Keycloak',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'SAML vs OIDC, Keycloak y zero trust.',
    'concepts' => 
    array (
      0 => 'sso',
      1 => 'keycloak',
      2 => 'saml',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SSO',
        'body' => 'Single Sign-On — un login para Slack, Google Workspace, tu app vía IdP corporativo.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-prod\';',
      ),
      1 => 
      array (
        'heading' => 'Keycloak',
        'body' => 'IdP open source — OIDC, SAML, social login, user federation LDAP.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: oa-prod\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SAML común en...?',
        'options' => 
        array (
          0 => 'Enterprise legacy (Okta, AD)',
          1 => 'Solo mobile games',
          2 => 'Static sites',
        ),
        'answer' => 'Enterprise legacy (Okta, AD)',
        'explanation' => 'OIDC gana en apps modernas.',
        'pro_tip' => 'Muchos IdP soportan ambos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Refresh token rotation?',
        'options' => 
        array (
          0 => 'Nuevo refresh en cada uso — detecta robo',
          1 => 'Sin refresh',
          2 => 'Token eterno',
        ),
        'answer' => 'Nuevo refresh en cada uso — detecta robo',
        'explanation' => 'Best practice OAuth 2.1.',
        'pro_tip' => 'Revoca refresh si reuse detectado.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'oauth-openid-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de OAuth 2.0 & OpenID Connect.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
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
      1 => 
      array (
        'heading' => 'Operación continua',
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
    'slug' => 'oauth-openid-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de OAuth 2.0 & OpenID Connect.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
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
      1 => 
      array (
        'heading' => 'Operación continua',
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
