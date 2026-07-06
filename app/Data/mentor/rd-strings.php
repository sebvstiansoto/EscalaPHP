<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Strings: SET, GET y TTL',
    'body' => 'Comandos básicos y expiración automática. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SET (Redis)](/glosario#set) · [GET](/glosario#get) · [TTL](/glosario#ttl) · [EXPIRE](/glosario#expire)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Comandos básicos',
    'body' => 'SET clave valor, GET clave, DEL clave. Simple como un diccionario gigante en RAM.',
    'code' => 'SET user:1:name "Ana"
GET user:1:name
EXPIRE user:1:name 3600',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'TTL',
    'body' => 'EXPIRE o SET con EX — la clave desaparece sola. Perfecto para caché con caducidad.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Comandos básicos y expiración automática. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Redis y caché**, esto aparece en code reviews, incidentes y entregas diarias. Comandos básicos y expiración automática. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SET user:1:name "Ana"
GET user:1:name
EXPIRE user:1:name 3600',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SET user:1:name "Ana"',
      1 => 'GET user:1:name',
      2 => 'EXPIRE user:1:name 3600',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** TTL en segundos: EXPIRE key 300 = 5 minutos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace EXPIRE en Redis?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe SET cache:home "html" y EXPIRE cache:home 60** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
