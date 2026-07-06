<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Stripe Checkout',
    'body' => 'Hosted checkout y sessions. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '💳',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [checkout](/glosario#checkout) · [Session](/glosario#session) · [redirect](/glosario#redirect)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Checkout Session',
    'body' => 'Backend crea Session con line_items → redirect URL hosted Stripe → success/cancel URLs.',
    'code' => '$session = \\Stripe\\Checkout\\Session::create([
  \'mode\' => \'payment\',
  \'line_items\' => [[\'price\' => \'price_xxx\', \'quantity\' => 1]],
  \'success_url\' => \'https://app.com/success\',
  \'cancel_url\' => \'https://app.com/cancel\',
]);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Ventaja',
    'body' => 'UI pagos mantenida por Stripe — SCA/3DS incluido en Europa.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Hosted checkout y sessions. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Stripe & pagos**, esto aparece en code reviews, incidentes y entregas diarias. Hosted checkout y sessions. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '$session = \\Stripe\\Checkout\\Session::create([
  \'mode\' => \'payment\',
  \'line_items\' => [[\'price\' => \'price_xxx\', \'quantity\' => 1]],
  \'success_url\' => \'https://app.com/success\',
  \'cancel_url\' => \'https://app.com/cancel\',
]);',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '$session = \\Stripe\\Checkout\\Session::create([',
      1 => '  \'mode\' => \'payment\',',
      2 => '  \'line_items\' => [[\'price\' => \'price_xxx\', \'quantity\' => 1]],',
      3 => '  \'success_url\' => \'https://app.com/success\',',
      4 => '  \'cancel_url\' => \'https://app.com/cancel\',',
      5 => ']);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** success_url incluye session_id query.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Checkout Session mode payment?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe success_url en session** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
