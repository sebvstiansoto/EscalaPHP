<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Tests en cada push',
    'body' => 'GitHub Actions: PHPUnit, pytest y jest en pipeline. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔄',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [CI (Integración Continua)](/glosario#ci) · [GitHub Actions](/glosario#github-actions) · [Tests (pruebas)](/glosario#tests)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Integración Continua',
    'body' => '**CI** ejecuta tests automáticamente en cada push. Si fallan, el merge se bloquea.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Workflow básico',
    'body' => 'Un archivo `.github/workflows/ci.yml` define pasos: checkout, install, test.',
    'code' => 'name: CI
on: [push]
jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - run: composer install
      - run: vendor/bin/phpunit',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** GitHub Actions: PHPUnit, pytest y jest en pipeline. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **CI/CD & GitHub Actions**, esto aparece en code reviews, incidentes y entregas diarias. GitHub Actions: PHPUnit, pytest y jest en pipeline. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'name: CI
on: [push]
jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - run: composer install
      - run: vendor/bin/phpunit',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'name: CI',
      1 => 'on: [push]',
      2 => 'jobs:',
      3 => '  test:',
      4 => '    runs-on: ubuntu-latest',
      5 => '    steps:',
      6 => '      - uses: actions/checkout@v4',
      7 => '      - run: composer install',
      8 => '      - run: vendor/bin/phpunit',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Abre el ci.yml de EscalaPHP en tu editor — es un ejemplo real.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-ci](/conexiones#conn-ci).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde viven los workflows de GitHub Actions?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe un fragmento YAML con trigger on push y un job llamado test** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
