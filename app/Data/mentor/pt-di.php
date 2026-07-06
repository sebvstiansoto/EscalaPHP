<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Inyección de dependencias',
    'body' => 'DIP, constructor injection y contenedores. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [DI](/glosario#di) · [DIP](/glosario#dip) · [Contenedor](/glosario#container)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'DIP',
    'body' => 'Depende de **abstracciones**, no de implementaciones concretas.',
    'code' => 'public function __construct(
    private MailerInterface $mailer
) {}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Container',
    'body' => 'Symfony y Laravel resuelven dependencias automáticamente en constructores.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-di\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** DIP, constructor injection y contenedores. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Patrones de diseño**, esto aparece en code reviews, incidentes y entregas diarias. DIP, constructor injection y contenedores. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'public function __construct(
    private MailerInterface $mailer
) {}',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'public function __construct(',
      1 => '    private MailerInterface $mailer',
      2 => ') {}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Evita `new Service()` dentro de clases — pide por constructor.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Inyección por constructor ventaja?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué resuelve el service container?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
