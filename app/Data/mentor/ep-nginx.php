<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Nginx + PHP-FPM',
    'body' => 'Servidor web delante de PHP en producción. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏢',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Nginx](/glosario#nginx) · [PHP-FPM](/glosario#php-fpm) · [Reverse Proxy](/glosario#reverse-proxy)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Arquitectura real',
    'body' => '**Nginx** recibe HTTP y pasa PHP a **PHP-FPM** por socket. Así escalan Facebook y WordPress.com.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-nginx\';',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Servidor web delante de PHP en producción. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Checklist de dominio',
    'body' => 'Antes de avanzar confirma: entiendes el concepto, puedes nombrar un caso real y resolviste los ejercicios sin copiar.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **PHP para grandes empresas**, esto aparece en code reviews, incidentes y entregas diarias. Servidor web delante de PHP en producción. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
declare(strict_types=1);

echo \'Practica: ep-nginx\';',
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
      2 => 'echo \'Practica: ep-nginx\';',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Nunca uses `php -S` en producción — solo desarrollo.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-nginx](/conexiones#conn-nginx).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace PHP-FPM?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cuál es la mejor siguiente acción tras completar este módulo?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
