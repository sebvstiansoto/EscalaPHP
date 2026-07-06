<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Qué es Nginx',
    'body' => 'Reverse proxy, web server y por qué no Apache solo. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Nginx](/glosario#nginx) · [Reverse Proxy](/glosario#reverse-proxy) · [Web server](/glosario#web-server)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Nginx',
    'body' => 'Servidor HTTP de alto rendimiento. Sirve estáticos, hace proxy a PHP-FPM, Node o Python.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-intro
data:
  APP_ENV: production',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'vs Apache',
    'body' => 'Nginx maneja miles de conexiones con poca RAM — estándar en producción PHP.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-intro
data:
  APP_ENV: production',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Reverse proxy, web server y por qué no Apache solo. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Nginx y reverse proxy**, esto aparece en code reviews, incidentes y entregas diarias. Reverse proxy, web server y por qué no Apache solo. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: nx-intro
data:
  APP_ENV: production',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'apiVersion: v1',
      1 => 'kind: ConfigMap',
      2 => 'metadata:',
      3 => '  name: nx-intro',
      4 => 'data:',
      5 => '  APP_ENV: production',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** ep-nginx en php-enterprise conecta con este curso.',
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
    'body' => '**¿Rol típico de Nginx delante de PHP?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Nginx sirve archivos estáticos?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
