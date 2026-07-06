<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Celery y RabbitMQ en Python',
    'body' => 'Tasks async con Celery workers. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [celery](/glosario#celery) · [Worker](/glosario#worker) · [broker](/glosario#broker)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Celery',
    'body' => 'Distributed task queue — broker RabbitMQ o Redis.',
    'code' => '@app.task
def send_email(user_id):
    ...

send_email.delay(42)',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Workers',
    'body' => 'celery -A proj worker — procesos separados del web server.',
    'code' => '@app.task\\ndef my_task():',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tasks async con Celery workers. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Mensajería y colas**, esto aparece en code reviews, incidentes y entregas diarias. Tasks async con Celery workers. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '@app.task
def send_email(user_id):
    ...

send_email.delay(42)',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '@app.task',
      1 => 'def send_email(user_id):',
      2 => '    ...',
      3 => 'send_email.delay(42)',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Celery beat para tareas programadas (cron).',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Celery en Python equivalente a...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe @app.task decorator** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
