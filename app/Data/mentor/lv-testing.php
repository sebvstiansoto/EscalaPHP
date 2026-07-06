<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Testing en Laravel',
    'body' => 'Feature tests, factories y RefreshDatabase. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔴',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Pest](/glosario#pest) · [Factory](/glosario#factory) · [feature-test](/glosario#feature-test)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Feature tests',
    'body' => 'Simulan HTTP completo — assertStatus, assertJson, assertDatabaseHas.',
    'code' => 'public function test_user_can_login(): void
{
    \\$response = \\$this->post(\'/login\', [\'email\' => \'a@test.com\', \'password\' => \'secret\']);
    \\$response->assertRedirect(\'/dashboard\');
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Factories',
    'body' => 'User::factory()->create() — datos fake reproducibles en tests.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Feature tests, factories y RefreshDatabase. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Laravel desde cero**, esto aparece en code reviews, incidentes y entregas diarias. Feature tests, factories y RefreshDatabase. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'public function test_user_can_login(): void
{
    \\$response = \\$this->post(\'/login\', [\'email\' => \'a@test.com\', \'password\' => \'secret\']);
    \\$response->assertRedirect(\'/dashboard\');
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
      0 => 'public function test_user_can_login(): void',
      1 => '{',
      2 => '    \\$response = \\$this->post(\'/login\', [\'email\' => \'a@test.com\', \'password\' => \'secret\']);',
      3 => '    \\$response->assertRedirect(\'/dashboard\');',
      4 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso testing-php PHPUnit base.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿RefreshDatabase trait?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe assertStatus(200)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
