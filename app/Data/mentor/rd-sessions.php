<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Sesiones y rate limiting',
    'body' => 'Sesiones distribuidas y límites por IP. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Session](/glosario#session) · [Rate limiting](/glosario#rate-limit) · [Counter (Redis)](/glosario#counter)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Sesiones en Redis',
    'body' => 'Varios servidores PHP comparten sesiones vía Redis — escalado horizontal sin sticky sessions.',
    'code' => 'INCR rate:login:192.168.1.1',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Rate limiting',
    'body' => 'INCR rate:ip:1.2.3.4 + EXPIRE 60 — cuenta requests por minuto. Bloquea brute force.',
    'code' => 'INCR rate:login:192.168.1.1',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Sesiones distribuidas y límites por IP. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Redis y caché**, esto aparece en code reviews, incidentes y entregas diarias. Sesiones distribuidas y límites por IP. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'INCR rate:login:192.168.1.1',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'INCR rate:login:192.168.1.1',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** SESSION_DRIVER=redis en Laravel .env',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué Redis para sesiones en cluster?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe INCR para contar requests** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
