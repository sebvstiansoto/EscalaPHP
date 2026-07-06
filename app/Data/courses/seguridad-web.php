<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'sec-owasp',
    'order' => 1,
    'title' => 'OWASP Top 10',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Las 10 vulnerabilidades más críticas en web.',
    'concepts' => 
    array (
      0 => 'owasp',
      1 => 'vulnerability',
      2 => 'risk',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'OWASP',
        'body' => 'Open Web Application Security Project lista riesgos reales: injection, broken auth, XSS, etc.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-owasp\';',
      ),
      1 => 
      array (
        'heading' => 'Mentalidad',
        'body' => 'Seguridad no es un feature al final — se diseña desde el día 1.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-owasp\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es OWASP Top 10?',
        'options' => 
        array (
          0 => 'Lista de vulnerabilidades web más comunes',
          1 => 'Framework PHP',
          2 => 'Certificación obligatoria',
        ),
        'answer' => 'Lista de vulnerabilidades web más comunes',
        'explanation' => 'Referencia global para auditar apps.',
        'pro_tip' => 'Revisa owasp.org cada año — la lista evoluciona.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuál NO es categoría típica OWASP?',
        'options' => 
        array (
          0 => 'CSS mal formateado',
          1 => 'Injection',
          2 => 'Broken Access Control',
        ),
        'answer' => 'CSS mal formateado',
        'explanation' => 'OWASP cubre riesgos de seguridad, no estética.',
        'pro_tip' => 'Broken Access Control subió al #1 en ediciones recientes.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'sec-xss',
    'order' => 2,
    'title' => 'XSS — Cross-Site Scripting',
    'level' => 'Ataques',
    'minutes' => 30,
    'summary' => 'Reflejado, almacenado y cómo escapar output.',
    'concepts' => 
    array (
      0 => 'xss',
      1 => 'escape',
      2 => 'sanitize',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'XSS',
        'body' => 'Un atacante inyecta `<script>` que corre en el navegador de otra víctima — roba cookies, sesiones.',
        'code' => 'htmlspecialchars($x, ENT_QUOTES, \'UTF-8\')',
      ),
      1 => 
      array (
        'heading' => 'Defensa',
        'body' => 'Escapa output: htmlspecialchars en PHP, {{ }} en Blade, React escapa JSX por defecto.',
        'code' => 'echo htmlspecialchars($userInput, ENT_QUOTES, \'UTF-8\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo previene XSS al mostrar input de usuario?',
        'options' => 
        array (
          0 => 'Escapar HTML al renderizar',
          1 => 'Guardar en BD sin cambios',
          2 => 'Usar solo GET',
        ),
        'answer' => 'Escapar HTML al renderizar',
        'explanation' => 'El navegador no ejecuta <script> si está escapado.',
        'pro_tip' => 'CSP (Content-Security-Policy) es segunda línea de defensa.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe htmlspecialchars con ENT_QUOTES',
        'must_contain' => 
        array (
          0 => 'htmlspecialchars',
          1 => 'ENT_QUOTES',
        ),
        'hint' => 'htmlspecialchars($x, ENT_QUOTES, \'UTF-8\')',
        'explanation' => 'Función estándar PHP para escape seguro.',
        'pro_tip' => 'Nunca uses innerHTML con datos de usuario en JS.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'sec-sql',
    'order' => 3,
    'title' => 'Inyección SQL',
    'level' => 'Ataques',
    'minutes' => 30,
    'summary' => 'Prepared statements y ORM seguro.',
    'concepts' => 
    array (
      0 => 'sql-injection',
      1 => 'prepared',
      2 => 'pdo',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El ataque',
        'body' => 'Input malicioso como `\' OR 1=1 --` manipula tu query y puede leer o borrar datos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-sql\';',
      ),
      1 => 
      array (
        'heading' => 'Defensa',
        'body' => '**Prepared statements** siempre. PDO, Eloquent, SQLAlchemy parametrizan automáticamente.',
        'code' => '$stmt = $pdo->prepare(\'SELECT * FROM users WHERE email = ?\');
$stmt->execute([$email]);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Defensa #1 contra SQL injection?',
        'options' => 
        array (
          0 => 'Prepared statements / queries parametrizadas',
          1 => 'Ocultar errores SQL',
          2 => 'Usar SQLite',
        ),
        'answer' => 'Prepared statements / queries parametrizadas',
        'explanation' => 'Nunca concatenes input en SQL.',
        'pro_tip' => 'Eloquent where() es seguro; DB::raw() con cuidado.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Es seguro esto? $pdo->query("SELECT * FROM u WHERE id=$id")',
        'options' => 
        array (
          0 => 'No — concatenación peligrosa',
          1 => 'Sí, siempre',
          2 => 'Solo en producción',
        ),
        'answer' => 'No — concatenación peligrosa',
        'explanation' => 'Interpolación directa = vector de injection.',
        'pro_tip' => 'En esta plataforma el laboratorio SQL usa prepared statements.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'sec-csrf',
    'order' => 4,
    'title' => 'CSRF — Cross-Site Request Forgery',
    'level' => 'Ataques',
    'minutes' => 25,
    'summary' => 'Tokens CSRF y SameSite cookies.',
    'concepts' => 
    array (
      0 => 'csrf',
      1 => 'token',
      2 => 'samesite',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CSRF',
        'body' => 'Sitio malicioso hace que el navegador del usuario envíe request autenticado a tu app (ej. transferir dinero).',
        'code' => '<form>@csrf</form>',
      ),
      1 => 
      array (
        'heading' => 'Defensa',
        'body' => 'Token CSRF único por sesión en formularios POST. Laravel @csrf lo incluye automáticamente.',
        'code' => '<form>@csrf</form>',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué protege contra CSRF en formularios?',
        'options' => 
        array (
          0 => 'Token CSRF en cada POST',
          1 => 'Solo HTTPS',
          2 => 'Minificar JS',
        ),
        'answer' => 'Token CSRF en cada POST',
        'explanation' => 'El atacante no conoce el token de la víctima.',
        'pro_tip' => 'SameSite=Lax/Strict en cookies refuerza protección.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe @csrf en un formulario Blade',
        'must_contain' => 
        array (
          0 => '@csrf',
        ),
        'hint' => '<form>@csrf</form>',
        'explanation' => 'Laravel genera input hidden _token.',
        'pro_tip' => 'APIs con JWT no necesitan CSRF — no usan cookies de sesión.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'sec-auth',
    'order' => 5,
    'title' => 'Contraseñas y sesiones',
    'level' => 'Auth',
    'minutes' => 35,
    'summary' => 'password_hash, rate limiting y sesiones seguras.',
    'concepts' => 
    array (
      0 => 'password',
      1 => 'bcrypt',
      2 => 'session',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hashing',
        'body' => 'password_hash(PASSWORD_BCRYPT) en PHP. Nunca MD5 ni SHA1 para passwords.',
        'code' => '$hash = password_hash($pass, PASSWORD_DEFAULT);
password_verify($pass, $hash);',
      ),
      1 => 
      array (
        'heading' => 'Sesiones',
        'body' => 'session_regenerate_id() tras login. HttpOnly y Secure en cookies.',
        'code' => 'password_verify($pass, $hash)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Función PHP correcta para guardar passwords?',
        'options' => 
        array (
          0 => 'password_hash',
          1 => 'md5',
          2 => 'base64_encode',
        ),
        'answer' => 'password_hash',
        'explanation' => 'PASSWORD_DEFAULT usa algoritmo actual recomendado.',
        'pro_tip' => 'Añade rate limiting en login — evita brute force.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe password_verify($pass, $hash)',
        'must_contain' => 
        array (
          0 => 'password_verify',
        ),
        'hint' => 'password_verify($pass, $hash)',
        'explanation' => 'verify compara sin almacenar password en claro.',
        'pro_tip' => '2FA (TOTP) para cuentas sensibles — aunque sea personal, practícalo.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'sec-headers',
    'order' => 6,
    'title' => 'Headers HTTP y HTTPS',
    'level' => 'Infra',
    'minutes' => 25,
    'summary' => 'CSP, HSTS, X-Frame-Options y TLS.',
    'concepts' => 
    array (
      0 => 'csp',
      1 => 'hsts',
      2 => 'https',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Security headers',
        'body' => 'Content-Security-Policy, X-Frame-Options (anti-clickjacking), Strict-Transport-Security.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-headers\';',
      ),
      1 => 
      array (
        'heading' => 'HTTPS',
        'body' => 'TLS en tránsito — sin HTTPS, cookies y tokens viajan en texto claro.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-headers\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace HSTS?',
        'options' => 
        array (
          0 => 'Fuerza HTTPS en el navegador',
          1 => 'Comprime respuestas',
          2 => 'Cachea HTML',
        ),
        'answer' => 'Fuerza HTTPS en el navegador',
        'explanation' => 'Strict-Transport-Security evita downgrade a HTTP.',
        'pro_tip' => 'Let\'s Encrypt da certificados gratis.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Header que previene clickjacking?',
        'options' => 
        array (
          0 => 'X-Frame-Options: DENY',
          1 => 'X-Powered-By: PHP',
          2 => 'Cache-Control: public',
        ),
        'answer' => 'X-Frame-Options: DENY',
        'explanation' => 'Impide embeber tu sitio en iframe malicioso.',
        'pro_tip' => 'CSP frame-ancestors es alternativa moderna.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'sec-api',
    'order' => 7,
    'title' => 'APIs seguras',
    'level' => 'API',
    'minutes' => 30,
    'summary' => 'Rate limit, JWT pitfalls y validación de input.',
    'concepts' => 
    array (
      0 => 'rate-limit',
      1 => 'jwt',
      2 => 'validation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Rate limiting',
        'body' => 'Limita requests por IP/usuario — mitiga brute force y abuso de API.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-api\';',
      ),
      1 => 
      array (
        'heading' => 'JWT',
        'body' => 'Tokens cortos, secret fuerte, no guardar datos sensibles en payload (es base64, no cifrado).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sec-api\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Es seguro poner password en el payload JWT?',
        'options' => 
        array (
          0 => 'No — JWT es legible sin secret',
          1 => 'Sí, está encriptado',
          2 => 'Solo en dev',
        ),
        'answer' => 'No — JWT es legible sin secret',
        'explanation' => 'Solo la firma verifica integridad — payload es visible.',
        'pro_tip' => 'Guarda solo user_id y roles mínimos en claims.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Primera línea de defensa en APIs?',
        'options' => 
        array (
          0 => 'Validar y sanitizar todo input',
          1 => 'Ocultar URL',
          2 => 'Deshabilitar JSON',
        ),
        'answer' => 'Validar y sanitizar todo input',
        'explanation' => 'Nunca confíes en datos del cliente — Pydantic, FormRequest Laravel.',
        'pro_tip' => 'CORS no es seguridad — solo controla qué origins leen la respuesta.',
      ),
    ),
  ),
);
