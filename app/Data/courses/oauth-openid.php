<?php

declare(strict_types=1);

return [
    [
        'slug' => 'oa-intro',
        'order' => 1,
        'title' => 'Auth moderna: OAuth 2.0 y OIDC',
        'level' => 'Conceptos',
        'minutes' => 30,
        'summary' => 'Roles, tokens y flujos estándar.',
        'concepts' => ['oauth2', 'oidc', 'token'],
        'sections' => [
            ['heading' => 'OAuth 2.0', 'body' => '**Autorización** delegada — "Login con Google" sin compartir password. Roles: Resource Owner, Client, Authorization Server, Resource Server.'],
            ['heading' => 'OIDC', 'body' => 'OpenID Connect = OAuth2 + **identidad** — id_token JWT con claims del usuario.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿OAuth2 es principalmente...?', 'options' => ['Autorización (acceso a recursos)', 'Hash de passwords', 'Cifrado disco'], 'answer' => 'Autorización (acceso a recursos)', 'explanation' => 'OIDC añade autenticación.', 'pro_tip' => 'OAuth ≠ autenticación sola.'],
            ['type' => 'choice', 'question' => '¿id_token contiene...?', 'options' => ['Claims identidad usuario (sub, email)', 'Solo refresh token', 'SQL queries'], 'answer' => 'Claims identidad usuario (sub, email)', 'explanation' => 'JWT firmado por IdP.', 'pro_tip' => 'access_token para API, id_token para login.'],
        ],
    ],
    [
        'slug' => 'oa-oauth2',
        'order' => 2,
        'title' => 'Flujos OAuth 2.0',
        'level' => 'Fundamentos',
        'minutes' => 40,
        'summary' => 'Authorization Code, PKCE y client credentials.',
        'concepts' => ['auth-code', 'pkce', 'client-credentials'],
        'sections' => [
            ['heading' => 'Authorization Code + PKCE', 'body' => 'Flujo estándar SPAs y mobile — code_verifier evita interceptación del code.'],
            ['heading' => 'Client Credentials', 'body' => 'M2M — servicio a servicio sin usuario humano.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿PKCE protege contra...?', 'options' => ['Interceptación authorization code', 'SQL injection', 'XSS'], 'answer' => 'Interceptación authorization code', 'explanation' => 'Obligatorio en public clients.', 'pro_tip' => 'code_challenge = BASE64URL(SHA256(verifier)).'],
            ['type' => 'choice', 'question' => '¿Flujo server-side web clásico?', 'options' => ['Authorization Code', 'Implicit (deprecated)', 'Password grant'], 'answer' => 'Authorization Code', 'explanation' => 'Implicit eliminado en OAuth 2.1.', 'pro_tip' => 'Nunca password grant en prod.'],
        ],
    ],
    [
        'slug' => 'oa-oidc',
        'order' => 3,
        'title' => 'OpenID Connect en detalle',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Discovery, scopes y UserInfo.',
        'concepts' => ['discovery', 'scope', 'userinfo'],
        'sections' => [
            ['heading' => 'Discovery', 'body' => '/.well-known/openid-configuration — endpoints automáticos del IdP.'],
            ['heading' => 'Scopes', 'body' => 'openid profile email — mínimo openid para OIDC; offline_access para refresh.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Scope mínimo OIDC?', 'options' => ['openid', 'admin', 'read:all'], 'answer' => 'openid', 'explanation' => 'Sin openid es OAuth puro.', 'pro_tip' => 'nonce en request previene replay.'],
            ['type' => 'choice', 'question' => '¿UserInfo endpoint?', 'options' => ['Claims adicionales del usuario', 'Lista usuarios admin', 'Logout only'], 'answer' => 'Claims adicionales del usuario', 'explanation' => 'GET con access_token.', 'pro_tip' => 'Muchos claims ya en id_token.'],
        ],
    ],
    [
        'slug' => 'oa-jwt',
        'order' => 4,
        'title' => 'JWT deep dive',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Header, payload, firma y validación.',
        'concepts' => ['jwt', 'jws', 'claims'],
        'sections' => [
            ['heading' => 'Estructura', 'body' => 'header.payload.signature — Base64URL, NO cifrado por defecto — valida firma siempre.'],
            ['heading' => 'Claims', 'body' => 'exp, iss, aud, sub — rechaza si expirado o aud incorrecto.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿JWT firmado significa...?', 'options' => ['Integridad verificable con clave pública/secreta', 'Contenido secreto cifrado', 'Anónimo'], 'answer' => 'Integridad verificable con clave pública/secreta', 'explanation' => 'Payload es legible — no pongas secrets.', 'pro_tip' => 'JWE si necesitas cifrado.'],
            ['type' => 'choice', 'question' => '¿Validar siempre...?', 'options' => ['Firma, exp, iss, aud', 'Solo decode base64', 'Color del token'], 'answer' => 'Firma, exp, iss, aud', 'explanation' => 'Alg:none attack — bloquea algoritmos none.', 'pro_tip' => 'Curso seguridad web: JWT en cookie httpOnly.'],
        ],
    ],
    [
        'slug' => 'oa-laravel',
        'order' => 5,
        'title' => 'OAuth en Laravel y Passport',
        'level' => 'Práctica',
        'minutes' => 40,
        'summary' => 'Socialite, Passport y Sanctum.',
        'concepts' => ['socialite', 'passport', 'sanctum'],
        'sections' => [
            ['heading' => 'Socialite', 'body' => 'Socialite::driver("google")->redirect() — OAuth social en minutos.'],
            ['heading' => 'Passport vs Sanctum', 'body' => 'Passport = OAuth2 server completo; Sanctum = SPA/tokens simples + API.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Sanctum ideal para...?', 'options' => ['SPA same-domain + API tokens', 'OAuth server terceros', 'Solo session PHP'], 'answer' => 'SPA same-domain + API tokens', 'explanation' => 'Ligero vs Passport pesado.', 'pro_tip' => 'Passport si eres IdP para otros apps.'],
            ['type' => 'choice', 'question' => '¿Socialite callback?', 'options' => ['Intercambia code por user OAuth', 'Genera JWT manual', 'Solo blade'], 'answer' => 'Intercambia code por user OAuth', 'explanation' => 'Route /auth/google/callback.', 'pro_tip' => 'Guarda provider_id en users table.'],
        ],
    ],
    [
        'slug' => 'oa-prod',
        'order' => 6,
        'title' => 'SSO enterprise y Keycloak',
        'level' => 'Producción',
        'minutes' => 35,
        'summary' => 'SAML vs OIDC, Keycloak y zero trust.',
        'concepts' => ['sso', 'keycloak', 'saml'],
        'sections' => [
            ['heading' => 'SSO', 'body' => 'Single Sign-On — un login para Slack, Google Workspace, tu app vía IdP corporativo.'],
            ['heading' => 'Keycloak', 'body' => 'IdP open source — OIDC, SAML, social login, user federation LDAP.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿SAML común en...?', 'options' => ['Enterprise legacy (Okta, AD)', 'Solo mobile games', 'Static sites'], 'answer' => 'Enterprise legacy (Okta, AD)', 'explanation' => 'OIDC gana en apps modernas.', 'pro_tip' => 'Muchos IdP soportan ambos.'],
            ['type' => 'choice', 'question' => '¿Refresh token rotation?', 'options' => ['Nuevo refresh en cada uso — detecta robo', 'Sin refresh', 'Token eterno'], 'answer' => 'Nuevo refresh en cada uso — detecta robo', 'explanation' => 'Best practice OAuth 2.1.', 'pro_tip' => 'Revoca refresh si reuse detectado.'],
        ],
    ],
];
