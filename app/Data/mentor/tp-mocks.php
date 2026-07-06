<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Mocks y stubs',
    'body' => 'Simular dependencias externas con PHPUnit. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🧪',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Mock](/glosario#mock) · [Stub](/glosario#stub) · [Dependencia](/glosario#dependency)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Mock',
    'body' => 'Objeto falso que verifica que llamaste métodos esperados — aísla email, APIs, pagos.',
    'code' => '$this->createMock(SomeClass::class)',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'createMock',
    'body' => '$mailer = $this->createMock(Mailer::class); — controlas qué devuelve sin enviar emails reales.',
    'code' => '$this->createMock(SomeClass::class)',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Simular dependencias externas con PHPUnit. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Testing en PHP**, esto aparece en code reviews, incidentes y entregas diarias. Simular dependencias externas con PHPUnit. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '$this->createMock(SomeClass::class)',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '$this->createMock(SomeClass::class)',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Laravel Mail::fake() es mock de alto nivel.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Para qué un mock?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe createMock en un test PHPUnit** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
