<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Pest: sintaxis moderna',
    'body' => 'Tests expresivos sobre PHPUnit. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🧪',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Pest](/glosario#pest) · [expect()](/glosario#expect) · [DSL](/glosario#dsl)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Pest',
    'body' => 'Framework con sintaxis limpia — usa PHPUnit por debajo.',
    'code' => 'test(\'suma funciona\', function () {
    expect(2 + 2)->toBe(4);
});',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Laravel + Pest',
    'body' => 'php artisan pest:install — el estándar en proyectos Laravel nuevos.',
    'code' => 'expect(2 + 2)->toBe(4);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tests expresivos sobre PHPUnit. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Testing en PHP**, esto aparece en code reviews, incidentes y entregas diarias. Tests expresivos sobre PHPUnit. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'test(\'suma funciona\', function () {
    expect(2 + 2)->toBe(4);
});',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'test(\'suma funciona\', function () {',
      1 => '    expect(2 + 2)->toBe(4);',
      2 => '});',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** expect()->toBe() lee más natural que assertEquals.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Pest reemplaza PHPUnit internamente?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe expect(2+2)->toBe(4)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
