<?php

declare(strict_types=1);

return [
    [
        'slug' => 'nx-intro',
        'order' => 1,
        'title' => 'Qué es Nginx',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Reverse proxy, web server y por qué no Apache solo.',
        'concepts' => ['nginx', 'reverse-proxy', 'web-server'],
        'sections' => [
            ['heading' => 'Nginx', 'body' => 'Servidor HTTP de alto rendimiento. Sirve estáticos, hace proxy a PHP-FPM, Node o Python.'],
            ['heading' => 'vs Apache', 'body' => 'Nginx maneja miles de conexiones con poca RAM — estándar en producción PHP.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Rol típico de Nginx delante de PHP?', 'options' => ['Reverse proxy a PHP-FPM', 'Ejecutar PHP directamente siempre', 'Reemplazar PostgreSQL'], 'answer' => 'Reverse proxy a PHP-FPM', 'explanation' => 'Nginx no interpreta PHP — pasa a php-fpm.', 'pro_tip' => 'ep-nginx en php-enterprise conecta con este curso.'],
            ['type' => 'choice', 'question' => '¿Nginx sirve archivos estáticos?', 'options' => ['Sí, muy eficientemente', 'No, solo proxy', 'Solo CSS'], 'answer' => 'Sí, muy eficientemente', 'explanation' => 'CSS/JS/imágenes directo desde Nginx.', 'pro_tip' => 'CDN + Nginx para assets globales.'],
        ],
    ],
    [
        'slug' => 'nx-config',
        'order' => 2,
        'title' => 'nginx.conf y server blocks',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'Estructura de configuración y virtual hosts.',
        'concepts' => ['server-block', 'location', 'directive'],
        'sections' => [
            ['heading' => 'Estructura', 'body' => 'http { server { location / { ... } } } — jerarquía clara.', 'code' => "server {\n    listen 80;\n    server_name ejemplo.com;\n    root /var/www/public;\n}"],
            ['heading' => 'location', 'body' => 'location /api { proxy_pass ... } — enruta por prefijo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Directiva raíz del sitio web?', 'options' => ['root', 'home', 'document_root'], 'answer' => 'root', 'explanation' => 'root apunta a carpeta pública (public/ en Laravel).', 'pro_tip' => 'index index.php index.html;'],
            ['type' => 'contains', 'question' => 'Escribe server_name ejemplo.com', 'must_contain' => ['server_name', 'ejemplo.com'], 'hint' => 'server_name ejemplo.com;', 'explanation' => 'Virtual host por dominio.', 'pro_tip' => 'default_server para catch-all.'],
        ],
    ],
    [
        'slug' => 'nx-phpfpm',
        'order' => 3,
        'title' => 'PHP-FPM y fastcgi_pass',
        'level' => 'PHP',
        'minutes' => 35,
        'summary' => 'Conectar Nginx con pools PHP-FPM.',
        'concepts' => ['php-fpm', 'fastcgi', 'pool'],
        'sections' => [
            ['heading' => 'PHP-FPM', 'body' => 'Pool de workers PHP. Nginx envía .php a fastcgi_pass unix:/run/php/php8.3-fpm.sock', 'code' => "location ~ \\.php$ {\n    fastcgi_pass unix:/run/php/php8.3-fpm.sock;\n    fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;\n    include fastcgi_params;\n}"],
            ['heading' => 'Pools', 'body' => 'pm.max_children controla cuántos requests PHP paralelos — tuning de producción.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Directiva pasa request a PHP-FPM?', 'options' => ['fastcgi_pass', 'proxy_http', 'php_run'], 'answer' => 'fastcgi_pass', 'explanation' => 'FastCGI es el protocolo Nginx ↔ PHP-FPM.', 'pro_tip' => 'SCRIPT_FILENAME debe apuntar al archivo PHP real.'],
            ['type' => 'contains', 'question' => 'Escribe fastcgi_pass en location php', 'must_contain' => ['fastcgi_pass'], 'hint' => 'fastcgi_pass unix:...', 'explanation' => 'Bloque estándar Laravel/Symfony.', 'pro_tip' => 'try_files $uri =404 evita path traversal.'],
        ],
    ],
    [
        'slug' => 'nx-ssl',
        'order' => 4,
        'title' => 'HTTPS y TLS',
        'level' => 'Seguridad',
        'minutes' => 30,
        'summary' => 'Certificados, listen 443 y redirect HTTP.',
        'concepts' => ['tls', 'ssl', 'letsencrypt'],
        'sections' => [
            ['heading' => 'TLS', 'body' => 'listen 443 ssl; ssl_certificate y ssl_certificate_key — HTTPS obligatorio en prod.'],
            ['heading' => "Let's Encrypt", 'body' => 'Certbot renueva certificados gratis — certbot --nginx.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Puerto HTTPS?', 'options' => ['443', '80', '3000'], 'answer' => '443', 'explanation' => '80 redirige a 443 en setups serios.', 'pro_tip' => 'return 301 https://$host$request_uri;'],
            ['type' => 'choice', 'question' => '¿Certificados gratis comunes?', 'options' => ["Let's Encrypt", 'Comprar siempre', 'Self-signed en prod'], 'answer' => "Let's Encrypt", 'explanation' => 'ACME protocol — renovación automática.', 'pro_tip' => 'HSTS header refuerza HTTPS.'],
        ],
    ],
    [
        'slug' => 'nx-proxy',
        'order' => 5,
        'title' => 'Proxy a Node, Python o upstreams',
        'level' => 'Avanzado',
        'minutes' => 30,
        'summary' => 'proxy_pass, load balancing y headers.',
        'concepts' => ['proxy_pass', 'upstream', 'load-balance'],
        'sections' => [
            ['heading' => 'proxy_pass', 'body' => 'location / { proxy_pass http://127.0.0.1:3000; } — Nginx delante de Node/FastAPI.', 'code' => "upstream api {\n    server 127.0.0.1:8000;\n}\nlocation / {\n    proxy_pass http://api;\n}"],
            ['heading' => 'Headers', 'body' => 'proxy_set_header Host $host; X-Real-IP — el backend ve IP real del cliente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿proxy_pass vs fastcgi_pass?', 'options' => ['proxy HTTP genérico vs protocolo FastCGI PHP', 'Iguales', 'Solo Docker'], 'answer' => 'proxy HTTP genérico vs protocolo FastCGI PHP', 'explanation' => 'Node/Python usan proxy_pass.', 'pro_tip' => 'WebSockets necesitan Upgrade headers.'],
            ['type' => 'contains', 'question' => 'Escribe proxy_pass http://localhost:3000', 'must_contain' => ['proxy_pass'], 'hint' => 'proxy_pass http://localhost:3000;', 'explanation' => 'Patrón React SSR o Express detrás de Nginx.', 'pro_tip' => 'upstream con varios server = load balance.'],
        ],
    ],
    [
        'slug' => 'nx-ops',
        'order' => 6,
        'title' => 'Logs, rate limit y deploy',
        'level' => 'Ops',
        'minutes' => 25,
        'summary' => 'access.log, limit_req y recargar config.',
        'concepts' => ['logs', 'rate-limit', 'reload'],
        'sections' => [
            ['heading' => 'Logs', 'body' => 'access.log y error.log — primer lugar en incidentes 502/504.'],
            ['heading' => 'Rate limit', 'body' => 'limit_req_zone — protege login y APIs de abuso.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Recargar Nginx sin downtime?', 'options' => ['nginx -s reload', 'kill -9 nginx', 'reboot'], 'answer' => 'nginx -s reload', 'explanation' => 'Valida antes: nginx -t.', 'pro_tip' => '502 Bad Gateway = revisa php-fpm/socket.'],
            ['type' => 'choice', 'question' => '¿Código 502 suele indicar?', 'options' => ['Backend upstream caído o mal configurado', 'Cliente sin internet', 'SQL lento'], 'answer' => 'Backend upstream caído o mal configurado', 'explanation' => 'Nginx vivo pero PHP-FPM no responde.', 'pro_tip' => 'tail -f /var/log/nginx/error.log'],
        ],
    ],
];
