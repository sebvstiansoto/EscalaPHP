<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Routing y controladores',
    'body' => 'Atributos PHP 8, routes y controllers. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🟣',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Route](/glosario#route) · [Controller](/glosario#controller) · [PHP Attribute](/glosario#attribute)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Atributos',
    'body' => 'Symfony moderno usa atributos PHP 8 en vez de YAML.',
    'code' => '#[Route(\'/api/users\', methods: [\'GET\'])]
public function list(): JsonResponse',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Controller',
    'body' => 'Clases delgadas — inyectas servicios por constructor.',
    'code' => '#[Route(\'/hello\')]',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Atributos PHP 8, routes y controllers. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Symfony**, esto aparece en code reviews, incidentes y entregas diarias. Atributos PHP 8, routes y controllers. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '#[Route(\'/api/users\', methods: [\'GET\'])]
public function list(): JsonResponse',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '#[Route(\'/api/users\', methods: [\'GET\'])]',
      1 => 'public function list(): JsonResponse',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** php bin/console debug:router lista rutas.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo defines rutas en Symfony 6+?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe #[Route con path /hello** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
