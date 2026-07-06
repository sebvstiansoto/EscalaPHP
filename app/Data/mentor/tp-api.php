<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Tests de API HTTP',
    'body' => 'getJson, postJson y assertStatus en Laravel. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🧪',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [HTTP test](/glosario#http-test) · [JSON](/glosario#json) · [Feature branch](/glosario#feature)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Feature tests',
    'body' => 'Simulan requests HTTP completos sin levantar servidor.',
    'code' => '$response = $this->getJson(\'/api/users\');
$response->assertStatus(200)->assertJsonStructure([\'data\']);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Autenticación',
    'body' => 'actingAs($user) prueba rutas protegidas.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** getJson, postJson y assertStatus en Laravel. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Testing en PHP**, esto aparece en code reviews, incidentes y entregas diarias. getJson, postJson y assertStatus en Laravel. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '$response = $this->getJson(\'/api/users\');
$response->assertStatus(200)->assertJsonStructure([\'data\']);',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '$response = $this->getJson(\'/api/users\');',
      1 => '$response->assertStatus(200)->assertJsonStructure([\'data\']);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** assertJsonFragment para validar parte del JSON.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Método Laravel para GET JSON en test?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe assertStatus(201) tras postJson** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
