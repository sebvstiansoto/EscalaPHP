<?php

declare(strict_types=1);

return [
    [
        'slug' => 'sec-owasp',
        'order' => 1,
        'title' => 'OWASP Top 10',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Las 10 vulnerabilidades más críticas en web.',
        'concepts' => ['owasp', 'vulnerability', 'risk'],
        'sections' => [
            ['heading' => 'OWASP', 'body' => 'Open Web Application Security Project lista riesgos reales: injection, broken auth, XSS, etc.'],
            ['heading' => 'Mentalidad', 'body' => 'Seguridad no es un feature al final — se diseña desde el día 1.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué es OWASP Top 10?', 'options' => ['Lista de vulnerabilidades web más comunes', 'Framework PHP', 'Certificación obligatoria'], 'answer' => 'Lista de vulnerabilidades web más comunes', 'explanation' => 'Referencia global para auditar apps.', 'pro_tip' => 'Revisa owasp.org cada año — la lista evoluciona.'],
            ['type' => 'choice', 'question' => '¿Cuál NO es categoría típica OWASP?', 'options' => ['CSS mal formateado', 'Injection', 'Broken Access Control'], 'answer' => 'CSS mal formateado', 'explanation' => 'OWASP cubre riesgos de seguridad, no estética.', 'pro_tip' => 'Broken Access Control subió al #1 en ediciones recientes.'],
        ],
    ],
    [
        'slug' => 'sec-xss',
        'order' => 2,
        'title' => 'XSS — Cross-Site Scripting',
        'level' => 'Ataques',
        'minutes' => 30,
        'summary' => 'Reflejado, almacenado y cómo escapar output.',
        'concepts' => ['xss', 'escape', 'sanitize'],
        'sections' => [
            ['heading' => 'XSS', 'body' => 'Un atacante inyecta `<script>` que corre en el navegador de otra víctima — roba cookies, sesiones.'],
            ['heading' => 'Defensa', 'body' => 'Escapa output: htmlspecialchars en PHP, {{ }} en Blade, React escapa JSX por defecto.', 'code' => "echo htmlspecialchars(\$userInput, ENT_QUOTES, 'UTF-8');"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo previene XSS al mostrar input de usuario?', 'options' => ['Escapar HTML al renderizar', 'Guardar en BD sin cambios', 'Usar solo GET'], 'answer' => 'Escapar HTML al renderizar', 'explanation' => 'El navegador no ejecuta <script> si está escapado.', 'pro_tip' => 'CSP (Content-Security-Policy) es segunda línea de defensa.'],
            ['type' => 'contains', 'question' => 'Escribe htmlspecialchars con ENT_QUOTES', 'must_contain' => ['htmlspecialchars', 'ENT_QUOTES'], 'hint' => "htmlspecialchars(\$x, ENT_QUOTES, 'UTF-8')", 'explanation' => 'Función estándar PHP para escape seguro.', 'pro_tip' => 'Nunca uses innerHTML con datos de usuario en JS.'],
        ],
    ],
    [
        'slug' => 'sec-sql',
        'order' => 3,
        'title' => 'Inyección SQL',
        'level' => 'Ataques',
        'minutes' => 30,
        'summary' => 'Prepared statements y ORM seguro.',
        'concepts' => ['sql-injection', 'prepared', 'pdo'],
        'sections' => [
            ['heading' => 'El ataque', 'body' => 'Input malicioso como `\' OR 1=1 --` manipula tu query y puede leer o borrar datos.'],
            ['heading' => 'Defensa', 'body' => '**Prepared statements** siempre. PDO, Eloquent, SQLAlchemy parametrizan automáticamente.', 'code' => "\$stmt = \$pdo->prepare('SELECT * FROM users WHERE email = ?');\n\$stmt->execute([\$email]);"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Defensa #1 contra SQL injection?', 'options' => ['Prepared statements / queries parametrizadas', 'Ocultar errores SQL', 'Usar SQLite'], 'answer' => 'Prepared statements / queries parametrizadas', 'explanation' => 'Nunca concatenes input en SQL.', 'pro_tip' => 'Eloquent where() es seguro; DB::raw() con cuidado.'],
            ['type' => 'choice', 'question' => '¿Es seguro esto? $pdo->query("SELECT * FROM u WHERE id=$id")', 'options' => ['No — concatenación peligrosa', 'Sí, siempre', 'Solo en producción'], 'answer' => 'No — concatenación peligrosa', 'explanation' => 'Interpolación directa = vector de injection.', 'pro_tip' => 'En esta plataforma el laboratorio SQL usa prepared statements.'],
        ],
    ],
    [
        'slug' => 'sec-csrf',
        'order' => 4,
        'title' => 'CSRF — Cross-Site Request Forgery',
        'level' => 'Ataques',
        'minutes' => 25,
        'summary' => 'Tokens CSRF y SameSite cookies.',
        'concepts' => ['csrf', 'token', 'samesite'],
        'sections' => [
            ['heading' => 'CSRF', 'body' => 'Sitio malicioso hace que el navegador del usuario envíe request autenticado a tu app (ej. transferir dinero).'],
            ['heading' => 'Defensa', 'body' => 'Token CSRF único por sesión en formularios POST. Laravel @csrf lo incluye automáticamente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué protege contra CSRF en formularios?', 'options' => ['Token CSRF en cada POST', 'Solo HTTPS', 'Minificar JS'], 'answer' => 'Token CSRF en cada POST', 'explanation' => 'El atacante no conoce el token de la víctima.', 'pro_tip' => 'SameSite=Lax/Strict en cookies refuerza protección.'],
            ['type' => 'contains', 'question' => 'Escribe @csrf en un formulario Blade', 'must_contain' => ['@csrf'], 'hint' => '<form>@csrf</form>', 'explanation' => 'Laravel genera input hidden _token.', 'pro_tip' => 'APIs con JWT no necesitan CSRF — no usan cookies de sesión.'],
        ],
    ],
    [
        'slug' => 'sec-auth',
        'order' => 5,
        'title' => 'Contraseñas y sesiones',
        'level' => 'Auth',
        'minutes' => 35,
        'summary' => 'password_hash, rate limiting y sesiones seguras.',
        'concepts' => ['password', 'bcrypt', 'session'],
        'sections' => [
            ['heading' => 'Hashing', 'body' => 'password_hash(PASSWORD_BCRYPT) en PHP. Nunca MD5 ni SHA1 para passwords.', 'code' => "\$hash = password_hash(\$pass, PASSWORD_DEFAULT);\npassword_verify(\$pass, \$hash);"],
            ['heading' => 'Sesiones', 'body' => 'session_regenerate_id() tras login. HttpOnly y Secure en cookies.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Función PHP correcta para guardar passwords?', 'options' => ['password_hash', 'md5', 'base64_encode'], 'answer' => 'password_hash', 'explanation' => 'PASSWORD_DEFAULT usa algoritmo actual recomendado.', 'pro_tip' => 'Añade rate limiting en login — evita brute force.'],
            ['type' => 'contains', 'question' => 'Escribe password_verify($pass, $hash)', 'must_contain' => ['password_verify'], 'hint' => 'password_verify($pass, $hash)', 'explanation' => 'verify compara sin almacenar password en claro.', 'pro_tip' => '2FA (TOTP) para cuentas sensibles — aunque sea personal, practícalo.'],
        ],
    ],
    [
        'slug' => 'sec-headers',
        'order' => 6,
        'title' => 'Headers HTTP y HTTPS',
        'level' => 'Infra',
        'minutes' => 25,
        'summary' => 'CSP, HSTS, X-Frame-Options y TLS.',
        'concepts' => ['csp', 'hsts', 'https'],
        'sections' => [
            ['heading' => 'Security headers', 'body' => 'Content-Security-Policy, X-Frame-Options (anti-clickjacking), Strict-Transport-Security.'],
            ['heading' => 'HTTPS', 'body' => 'TLS en tránsito — sin HTTPS, cookies y tokens viajan en texto claro.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace HSTS?', 'options' => ['Fuerza HTTPS en el navegador', 'Comprime respuestas', 'Cachea HTML'], 'answer' => 'Fuerza HTTPS en el navegador', 'explanation' => 'Strict-Transport-Security evita downgrade a HTTP.', 'pro_tip' => 'Let\'s Encrypt da certificados gratis.'],
            ['type' => 'choice', 'question' => '¿Header que previene clickjacking?', 'options' => ['X-Frame-Options: DENY', 'X-Powered-By: PHP', 'Cache-Control: public'], 'answer' => 'X-Frame-Options: DENY', 'explanation' => 'Impide embeber tu sitio en iframe malicioso.', 'pro_tip' => 'CSP frame-ancestors es alternativa moderna.'],
        ],
    ],
    [
        'slug' => 'sec-api',
        'order' => 7,
        'title' => 'APIs seguras',
        'level' => 'API',
        'minutes' => 30,
        'summary' => 'Rate limit, JWT pitfalls y validación de input.',
        'concepts' => ['rate-limit', 'jwt', 'validation'],
        'sections' => [
            ['heading' => 'Rate limiting', 'body' => 'Limita requests por IP/usuario — mitiga brute force y abuso de API.'],
            ['heading' => 'JWT', 'body' => 'Tokens cortos, secret fuerte, no guardar datos sensibles en payload (es base64, no cifrado).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Es seguro poner password en el payload JWT?', 'options' => ['No — JWT es legible sin secret', 'Sí, está encriptado', 'Solo en dev'], 'answer' => 'No — JWT es legible sin secret', 'explanation' => 'Solo la firma verifica integridad — payload es visible.', 'pro_tip' => 'Guarda solo user_id y roles mínimos en claims.'],
            ['type' => 'choice', 'question' => '¿Primera línea de defensa en APIs?', 'options' => ['Validar y sanitizar todo input', 'Ocultar URL', 'Deshabilitar JSON'], 'answer' => 'Validar y sanitizar todo input', 'explanation' => 'Nunca confíes en datos del cliente — Pydantic, FormRequest Laravel.', 'pro_tip' => 'CORS no es seguridad — solo controla qué origins leen la respuesta.'],
        ],
    ],
];
