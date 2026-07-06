<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'PHP-FPM y fastcgi_pass',
    'body' => 'Conectar Nginx con pools PHP-FPM. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [PHP-FPM](/glosario#php-fpm) · [FastCGI](/glosario#fastcgi) · [Pool (PHP-FPM)](/glosario#pool)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'PHP-FPM',
    'body' => 'Pool de workers PHP. Nginx envía .php a fastcgi_pass unix:/run/php/php8.3-fpm.sock',
    'code' => 'location ~ \\.php$ {
    fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Pools',
    'body' => 'pm.max_children controla cuántos requests PHP paralelos — tuning de producción.',
    'code' => 'fastcgi_pass unix:...',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Conectar Nginx con pools PHP-FPM. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Nginx y reverse proxy**, esto aparece en code reviews, incidentes y entregas diarias. Conectar Nginx con pools PHP-FPM. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'location ~ \\.php$ {
    fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
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
      0 => 'location ~ \\.php$ {',
      1 => '    fastcgi_pass unix:/run/php/php8.3-fpm.sock;',
      2 => '    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;',
      3 => '    include fastcgi_params;',
      4 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** SCRIPT_FILENAME debe apuntar al archivo PHP real.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Directiva pasa request a PHP-FPM?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe fastcgi_pass en location php** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
