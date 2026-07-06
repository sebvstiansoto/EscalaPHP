<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Proxy a Node, Python o upstreams',
    'body' => 'proxy_pass, load balancing y headers. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [proxy_pass](/glosario#proxy_pass) · [Upstream](/glosario#upstream) · [Load balancing](/glosario#load-balance)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'proxy_pass',
    'body' => 'location / { proxy_pass http://127.0.0.1:3000; } — Nginx delante de Node/FastAPI.',
    'code' => 'upstream api {
    server 127.0.0.1:8000;
}
location / {
    proxy_pass http://api;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Headers',
    'body' => 'proxy_set_header Host $host; X-Real-IP — el backend ve IP real del cliente.',
    'code' => 'proxy_pass http://localhost:3000;',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** proxy_pass, load balancing y headers. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Nginx y reverse proxy**, esto aparece en code reviews, incidentes y entregas diarias. proxy_pass, load balancing y headers. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'upstream api {
    server 127.0.0.1:8000;
}
location / {
    proxy_pass http://api;
}',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'upstream api {',
      1 => '    server 127.0.0.1:8000;',
      2 => '}',
      3 => 'location / {',
      4 => '    proxy_pass http://api;',
      5 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** WebSockets necesitan Upgrade headers.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿proxy_pass vs fastcgi_pass?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe proxy_pass http://localhost:3000** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
