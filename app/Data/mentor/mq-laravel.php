<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Colas en Laravel',
    'body' => 'Jobs, dispatch, Horizon y failed jobs. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Job](/glosario#job) · [dispatch](/glosario#dispatch) · [horizon](/glosario#horizon)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Jobs',
    'body' => 'php artisan make:job SendInvoice — implementa handle().',
    'code' => 'SendInvoice::dispatch($order);
// o dispatch(new SendInvoice($order))->onQueue(\'emails\');',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Horizon',
    'body' => 'Dashboard Redis queues — métricas, workers, retry failed jobs.',
    'code' => 'SendEmail::dispatch($user);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Jobs, dispatch, Horizon y failed jobs. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Mensajería y colas**, esto aparece en code reviews, incidentes y entregas diarias. Jobs, dispatch, Horizon y failed jobs. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'SendInvoice::dispatch($order);
// o dispatch(new SendInvoice($order))->onQueue(\'emails\');',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'SendInvoice::dispatch($order);',
      1 => '// o dispatch(new SendInvoice($order))->onQueue(\'emails\');',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** php artisan queue:work procesa jobs.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Driver cola Laravel con dashboard?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe ::dispatch en Laravel job** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
