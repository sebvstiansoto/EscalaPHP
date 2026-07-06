<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'nx-intro',
    'order' => 1,
    'title' => 'Qué es Nginx',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Reverse proxy, web server y por qué no Apache solo.',
    'concepts' => 
    array (
      0 => 'nginx',
      1 => 'reverse-proxy',
      2 => 'web-server',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Nginx',
        'body' => 'Servidor HTTP de alto rendimiento. Sirve estáticos, hace proxy a PHP-FPM, Node o Python.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'vs Apache',
        'body' => 'Nginx maneja miles de conexiones con poca RAM — estándar en producción PHP.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Rol típico de Nginx delante de PHP?',
        'options' => 
        array (
          0 => 'Reverse proxy a PHP-FPM',
          1 => 'Ejecutar PHP directamente siempre',
          2 => 'Reemplazar PostgreSQL',
        ),
        'answer' => 'Reverse proxy a PHP-FPM',
        'explanation' => 'Nginx no interpreta PHP — pasa a php-fpm.',
        'pro_tip' => 'ep-nginx en php-enterprise conecta con este curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Nginx sirve archivos estáticos?',
        'options' => 
        array (
          0 => 'Sí, muy eficientemente',
          1 => 'No, solo proxy',
          2 => 'Solo CSS',
        ),
        'answer' => 'Sí, muy eficientemente',
        'explanation' => 'CSS/JS/imágenes directo desde Nginx.',
        'pro_tip' => 'CDN + Nginx para assets globales.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'nx-config',
    'order' => 2,
    'title' => 'nginx.conf y server blocks',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Estructura de configuración y virtual hosts.',
    'concepts' => 
    array (
      0 => 'server-block',
      1 => 'location',
      2 => 'directive',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Estructura',
        'body' => 'http { server { location / { ... } } } — jerarquía clara.',
        'code' => 'server {
    listen 80;
    server_name ejemplo.com;
    root /var/www/public;
}',
      ),
      1 => 
      array (
        'heading' => 'location',
        'body' => 'location /api { proxy_pass ... } — enruta por prefijo.',
        'code' => 'server_name ejemplo.com;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Directiva raíz del sitio web?',
        'options' => 
        array (
          0 => 'root',
          1 => 'home',
          2 => 'document_root',
        ),
        'answer' => 'root',
        'explanation' => 'root apunta a carpeta pública (public/ en Laravel).',
        'pro_tip' => 'index index.php index.html;',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe server_name ejemplo.com',
        'must_contain' => 
        array (
          0 => 'server_name',
          1 => 'ejemplo.com',
        ),
        'hint' => 'server_name ejemplo.com;',
        'explanation' => 'Virtual host por dominio.',
        'pro_tip' => 'default_server para catch-all.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'nx-phpfpm',
    'order' => 3,
    'title' => 'PHP-FPM y fastcgi_pass',
    'level' => 'PHP',
    'minutes' => 35,
    'summary' => 'Conectar Nginx con pools PHP-FPM.',
    'concepts' => 
    array (
      0 => 'php-fpm',
      1 => 'fastcgi',
      2 => 'pool',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PHP-FPM',
        'body' => 'Pool de workers PHP. Nginx envía .php a fastcgi_pass unix:/run/php/php8.3-fpm.sock',
        'code' => 'location ~ \\.php$ {
    fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}',
      ),
      1 => 
      array (
        'heading' => 'Pools',
        'body' => 'pm.max_children controla cuántos requests PHP paralelos — tuning de producción.',
        'code' => 'fastcgi_pass unix:...',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Directiva pasa request a PHP-FPM?',
        'options' => 
        array (
          0 => 'fastcgi_pass',
          1 => 'proxy_http',
          2 => 'php_run',
        ),
        'answer' => 'fastcgi_pass',
        'explanation' => 'FastCGI es el protocolo Nginx ↔ PHP-FPM.',
        'pro_tip' => 'SCRIPT_FILENAME debe apuntar al archivo PHP real.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe fastcgi_pass en location php',
        'must_contain' => 
        array (
          0 => 'fastcgi_pass',
        ),
        'hint' => 'fastcgi_pass unix:...',
        'explanation' => 'Bloque estándar Laravel/Symfony.',
        'pro_tip' => 'try_files $uri =404 evita path traversal.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'nx-ssl',
    'order' => 4,
    'title' => 'HTTPS y TLS',
    'level' => 'Seguridad',
    'minutes' => 30,
    'summary' => 'Certificados, listen 443 y redirect HTTP.',
    'concepts' => 
    array (
      0 => 'tls',
      1 => 'ssl',
      2 => 'letsencrypt',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'TLS',
        'body' => 'listen 443 ssl; ssl_certificate y ssl_certificate_key — HTTPS obligatorio en prod.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-ssl
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Let\'s Encrypt',
        'body' => 'Certbot renueva certificados gratis — certbot --nginx.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-ssl
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Puerto HTTPS?',
        'options' => 
        array (
          0 => '443',
          1 => '80',
          2 => '3000',
        ),
        'answer' => '443',
        'explanation' => '80 redirige a 443 en setups serios.',
        'pro_tip' => 'return 301 https://$host$request_uri;',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Certificados gratis comunes?',
        'options' => 
        array (
          0 => 'Let\'s Encrypt',
          1 => 'Comprar siempre',
          2 => 'Self-signed en prod',
        ),
        'answer' => 'Let\'s Encrypt',
        'explanation' => 'ACME protocol — renovación automática.',
        'pro_tip' => 'HSTS header refuerza HTTPS.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'nx-proxy',
    'order' => 5,
    'title' => 'Proxy a Node, Python o upstreams',
    'level' => 'Avanzado',
    'minutes' => 30,
    'summary' => 'proxy_pass, load balancing y headers.',
    'concepts' => 
    array (
      0 => 'proxy_pass',
      1 => 'upstream',
      2 => 'load-balance',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'proxy_pass',
        'body' => 'location / { proxy_pass http://127.0.0.1:3000; } — Nginx delante de Node/FastAPI.',
        'code' => 'upstream api {
    server 127.0.0.1:8000;
}
location / {
    proxy_pass http://api;
}',
      ),
      1 => 
      array (
        'heading' => 'Headers',
        'body' => 'proxy_set_header Host $host; X-Real-IP — el backend ve IP real del cliente.',
        'code' => 'proxy_pass http://localhost:3000;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿proxy_pass vs fastcgi_pass?',
        'options' => 
        array (
          0 => 'proxy HTTP genérico vs protocolo FastCGI PHP',
          1 => 'Iguales',
          2 => 'Solo Docker',
        ),
        'answer' => 'proxy HTTP genérico vs protocolo FastCGI PHP',
        'explanation' => 'Node/Python usan proxy_pass.',
        'pro_tip' => 'WebSockets necesitan Upgrade headers.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe proxy_pass http://localhost:3000',
        'must_contain' => 
        array (
          0 => 'proxy_pass',
        ),
        'hint' => 'proxy_pass http://localhost:3000;',
        'explanation' => 'Patrón React SSR o Express detrás de Nginx.',
        'pro_tip' => 'upstream con varios server = load balance.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'nx-ops',
    'order' => 6,
    'title' => 'Logs, rate limit y deploy',
    'level' => 'Ops',
    'minutes' => 25,
    'summary' => 'access.log, limit_req y recargar config.',
    'concepts' => 
    array (
      0 => 'logs',
      1 => 'rate-limit',
      2 => 'reload',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Logs',
        'body' => 'access.log y error.log — primer lugar en incidentes 502/504.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-ops
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Rate limit',
        'body' => 'limit_req_zone — protege login y APIs de abuso.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-ops
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Recargar Nginx sin downtime?',
        'options' => 
        array (
          0 => 'nginx -s reload',
          1 => 'kill -9 nginx',
          2 => 'reboot',
        ),
        'answer' => 'nginx -s reload',
        'explanation' => 'Valida antes: nginx -t.',
        'pro_tip' => '502 Bad Gateway = revisa php-fpm/socket.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Código 502 suele indicar?',
        'options' => 
        array (
          0 => 'Backend upstream caído o mal configurado',
          1 => 'Cliente sin internet',
          2 => 'SQL lento',
        ),
        'answer' => 'Backend upstream caído o mal configurado',
        'explanation' => 'Nginx vivo pero PHP-FPM no responde.',
        'pro_tip' => 'tail -f /var/log/nginx/error.log',
      ),
    ),
  ),
);
