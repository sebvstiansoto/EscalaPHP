<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Contraseñas y sesiones',
    'body' => 'password_hash, rate limiting y sesiones seguras. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🛡️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Password hashing](/glosario#password) · [bcrypt](/glosario#bcrypt) · [Session](/glosario#session)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Hashing',
    'body' => 'password_hash(PASSWORD_BCRYPT) en PHP. Nunca MD5 ni SHA1 para passwords.',
    'code' => '$hash = password_hash($pass, PASSWORD_DEFAULT);
password_verify($pass, $hash);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Sesiones',
    'body' => 'session_regenerate_id() tras login. HttpOnly y Secure en cookies.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** password_hash, rate limiting y sesiones seguras. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Seguridad web**, esto aparece en code reviews, incidentes y entregas diarias. password_hash, rate limiting y sesiones seguras. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '$hash = password_hash($pass, PASSWORD_DEFAULT);
password_verify($pass, $hash);',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '$hash = password_hash($pass, PASSWORD_DEFAULT);',
      1 => 'password_verify($pass, $hash);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Añade rate limiting en login — evita brute force.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Función PHP correcta para guardar passwords?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe password_verify($pass, $hash)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
