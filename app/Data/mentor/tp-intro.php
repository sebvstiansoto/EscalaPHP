<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Por qué testear y PHPUnit',
    'body' => 'Pirámide de tests, TDD ligero y primera aserción. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🧪',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Testing](/glosario#testing) · [PHPUnit](/glosario#phpunit) · [Assertion (aserción)](/glosario#assertion)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => '¿Por qué tests?',
    'body' => 'Tests automatizados detectan regresiones antes de producción. Refactorizas con confianza.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'PHPUnit',
    'body' => 'Estándar en PHP. `composer require --dev phpunit/phpunit`. Tests en tests/.',
    'code' => 'public function test_suma(): void {
    $this->assertEquals(4, 2 + 2);
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Pirámide de tests, TDD ligero y primera aserción. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Testing en PHP**, esto aparece en code reviews, incidentes y entregas diarias. Pirámide de tests, TDD ligero y primera aserción. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'public function test_suma(): void {
    $this->assertEquals(4, 2 + 2);
}',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'public function test_suma(): void {',
      1 => '    $this->assertEquals(4, 2 + 2);',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** vendor/bin/phpunit ejecuta la suite.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Gestor de tests estándar en PHP?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe $this->assertEquals(4, 2+2)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
