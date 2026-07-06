<?php

declare(strict_types=1);

$cat = 'seguridad';

return [
    ['slug' => 'owasp', 'term' => 'OWASP', 'category' => $cat, 'definition' => 'Open Web Application Security Project. Organización y top 10 de vulnerabilidades web más comunes.'],
    ['slug' => 'vulnerability', 'term' => 'Vulnerabilidad', 'category' => $cat, 'definition' => 'Debilidad en el software que un atacante puede explotar para causar daño.'],
    ['slug' => 'risk', 'term' => 'Riesgo', 'category' => $cat, 'definition' => 'Combinación de probabilidad de ataque e impacto. Prioriza qué vulnerabilidades arreglar primero.'],
    ['slug' => 'xss', 'term' => 'XSS', 'category' => $cat, 'definition' => 'Cross-Site Scripting: inyectar JavaScript malicioso que se ejecuta en el navegador de otra víctima.'],
    ['slug' => 'escape', 'term' => 'Escape (escapar)', 'category' => $cat, 'definition' => 'Convertir caracteres especiales (<, >, &) para que se muestren como texto y no se ejecuten.'],
    ['slug' => 'sanitize', 'term' => 'Sanitizar', 'category' => $cat, 'definition' => 'Limpiar entrada del usuario eliminando o neutralizando contenido peligroso.'],
    ['slug' => 'sql-injection', 'term' => 'SQL Injection', 'category' => $cat, 'definition' => 'Ataque donde un usuario inserta SQL malicioso en formularios. Se previene con consultas preparadas.'],
    ['slug' => 'csrf', 'term' => 'CSRF', 'category' => $cat, 'definition' => 'Cross-Site Request Forgery: engañar al navegador para ejecutar acciones no deseadas con la sesión del usuario.'],
    ['slug' => 'samesite', 'term' => 'SameSite', 'category' => $cat, 'definition' => 'Atributo de cookies que limita envío cross-site y ayuda a prevenir CSRF.'],
    ['slug' => 'csp', 'term' => 'CSP', 'category' => $cat, 'definition' => 'Content Security Policy: header HTTP que restringe de dónde puede cargar scripts, estilos e imágenes.'],
    ['slug' => 'hsts', 'term' => 'HSTS', 'category' => $cat, 'definition' => 'HTTP Strict Transport Security: fuerza HTTPS en el navegador durante un período.'],
    ['slug' => 'autenticacion', 'term' => 'Autenticación', 'category' => $cat, 'definition' => 'Verificar quién es el usuario (login, OAuth, tokens).'],
    ['slug' => 'autorizacion', 'term' => 'Autorización', 'category' => $cat, 'definition' => 'Verificar qué puede hacer el usuario autenticado (roles, permisos, policies).'],
    ['slug' => 'cifrado', 'term' => 'Cifrado', 'category' => $cat, 'definition' => 'Transformar datos para que solo quien tiene la clave pueda leerlos.'],
    ['slug' => 'hash', 'term' => 'Hash', 'category' => $cat, 'definition' => 'Función unidireccional para contraseñas (bcrypt). En Redis: tipo de dato campo-valor dentro de una clave (HSET, HGET).'],
    ['slug' => 'ssl', 'term' => 'SSL/TLS', 'category' => $cat, 'definition' => 'Protocolos que cifran la comunicación entre cliente y servidor (HTTPS).'],
    ['slug' => 'pentest', 'term' => 'Penetration test', 'category' => $cat, 'definition' => 'Prueba de seguridad donde expertos intentan explotar vulnerabilidades de forma controlada.'],
    ['slug' => 'waf', 'term' => 'WAF', 'category' => $cat, 'definition' => 'Web Application Firewall: filtra tráfico malicioso antes de llegar a tu aplicación.'],
    ['slug' => '2fa', 'term' => '2FA / MFA', 'category' => $cat, 'definition' => 'Autenticación de dos o más factores: contraseña + código SMS, app autenticadora, etc.'],
    ['slug' => 'security', 'term' => 'Security (seguridad)', 'category' => $cat, 'definition' => 'Conjunto de prácticas para proteger datos, usuarios y sistemas contra amenazas.'],
];
