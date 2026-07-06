<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'tp-intro',
    'order' => 1,
    'title' => 'Por qué testear y PHPUnit',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Pirámide de tests, TDD ligero y primera aserción.',
    'concepts' => 
    array (
      0 => 'testing',
      1 => 'phpunit',
      2 => 'assertion',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué tests?',
        'body' => 'Tests automatizados detectan regresiones antes de producción. Refactorizas con confianza.',
        'code' => '$this->assertEquals(4, 2 + 2);',
      ),
      1 => 
      array (
        'heading' => 'PHPUnit',
        'body' => 'Estándar en PHP. `composer require --dev phpunit/phpunit`. Tests en tests/.',
        'code' => 'public function test_suma(): void {
    $this->assertEquals(4, 2 + 2);
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Gestor de tests estándar en PHP?',
        'options' => 
        array (
          0 => 'PHPUnit',
          1 => 'Jest',
          2 => 'pytest',
        ),
        'answer' => 'PHPUnit',
        'explanation' => 'PHPUnit viene con Laravel y Symfony.',
        'pro_tip' => 'vendor/bin/phpunit ejecuta la suite.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe $this->assertEquals(4, 2+2)',
        'must_contain' => 
        array (
          0 => 'assertEquals',
        ),
        'hint' => '$this->assertEquals(4, 2 + 2);',
        'explanation' => 'assertEquals compara valor esperado vs actual.',
        'pro_tip' => 'assertSame usa === (tipo estricto).',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'tp-unit',
    'order' => 2,
    'title' => 'Tests unitarios',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Aislar lógica pura, data providers y casos borde.',
    'concepts' => 
    array (
      0 => 'unit',
      1 => 'isolation',
      2 => 'edge-case',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Unit test',
        'body' => 'Prueba **una** función/clase sin BD ni HTTP. Rápido y determinista.',
        'code' => '<?php
// PHPUnit
$this->assertEquals(4, 2 + 2);',
      ),
      1 => 
      array (
        'heading' => 'Casos borde',
        'body' => '0, null, string vacío, negativos — donde suelen estar los bugs.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: tp-unit\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Test unitario idealmente usa...?',
        'options' => 
        array (
          0 => 'Solo lógica pura sin I/O',
          1 => 'Siempre BD real',
          2 => 'Siempre navegador',
        ),
        'answer' => 'Solo lógica pura sin I/O',
        'explanation' => 'Sin red/BD = tests milisegundos.',
        'pro_tip' => 'Extrae lógica del controller a clases testeables.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿assertTrue vs assertEquals?',
        'options' => 
        array (
          0 => 'assertTrue para booleanos; assertEquals para valores',
          1 => 'Son idénticos',
          2 => 'assertTrue solo en Pest',
        ),
        'answer' => 'assertTrue para booleanos; assertEquals para valores',
        'explanation' => 'Elige la aserción más expresiva.',
        'pro_tip' => 'expectException para probar errores esperados.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'tp-mocks',
    'order' => 3,
    'title' => 'Mocks y stubs',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Simular dependencias externas con PHPUnit.',
    'concepts' => 
    array (
      0 => 'mock',
      1 => 'stub',
      2 => 'dependency',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Mock',
        'body' => 'Objeto falso que verifica que llamaste métodos esperados — aísla email, APIs, pagos.',
        'code' => '$this->createMock(SomeClass::class)',
      ),
      1 => 
      array (
        'heading' => 'createMock',
        'body' => '$mailer = $this->createMock(Mailer::class); — controlas qué devuelve sin enviar emails reales.',
        'code' => '$this->createMock(SomeClass::class)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué un mock?',
        'options' => 
        array (
          0 => 'Simular dependencia externa en aislamiento',
          1 => 'Acelerar PHP',
          2 => 'Reemplazar Git',
        ),
        'answer' => 'Simular dependencia externa en aislamiento',
        'explanation' => 'No envías emails ni cobras tarjetas en tests.',
        'pro_tip' => 'Laravel Mail::fake() es mock de alto nivel.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe createMock en un test PHPUnit',
        'must_contain' => 
        array (
          0 => 'createMock',
        ),
        'hint' => '$this->createMock(SomeClass::class)',
        'explanation' => 'PHPUnit genera doble de prueba automáticamente.',
        'pro_tip' => 'expects($this->once()) verifica llamadas.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'tp-integration',
    'order' => 4,
    'title' => 'Tests de integración',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'BD de test, RefreshDatabase y flujos reales.',
    'concepts' => 
    array (
      0 => 'integration',
      1 => 'database',
      2 => 'refresh',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Integración',
        'body' => 'Prueba varias piezas juntas: controller + modelo + BD SQLite en memoria.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: tp-integration\';',
      ),
      1 => 
      array (
        'heading' => 'Laravel',
        'body' => 'use RefreshDatabase; — migra y limpia BD entre tests.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: tp-integration\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿BD en tests Laravel típica?',
        'options' => 
        array (
          0 => 'SQLite en memoria',
          1 => 'Producción Postgres',
          2 => 'Sin BD',
        ),
        'answer' => 'SQLite en memoria',
        'explanation' => 'Rápido y aislado — phpunit.xml configura DB_DATABASE=:memory:',
        'pro_tip' => 'Nunca apuntes tests a BD de producción.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Trait Laravel que resetea BD entre tests?',
        'options' => 
        array (
          0 => 'RefreshDatabase',
          1 => 'WithoutMiddleware',
          2 => 'WithFaker',
        ),
        'answer' => 'RefreshDatabase',
        'explanation' => 'Cada test empieza con esquema limpio.',
        'pro_tip' => 'Factories crean datos de prueba realistas.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'tp-api',
    'order' => 5,
    'title' => 'Tests de API HTTP',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'getJson, postJson y assertStatus en Laravel.',
    'concepts' => 
    array (
      0 => 'http-test',
      1 => 'json',
      2 => 'feature',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Feature tests',
        'body' => 'Simulan requests HTTP completos sin levantar servidor.',
        'code' => '$response = $this->getJson(\'/api/users\');
$response->assertStatus(200)->assertJsonStructure([\'data\']);',
      ),
      1 => 
      array (
        'heading' => 'Autenticación',
        'body' => 'actingAs($user) prueba rutas protegidas.',
        'code' => '$response->assertStatus(201);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Método Laravel para GET JSON en test?',
        'options' => 
        array (
          0 => 'getJson',
          1 => 'curl',
          2 => 'file_get_contents',
        ),
        'answer' => 'getJson',
        'explanation' => 'Incluye header Accept: application/json.',
        'pro_tip' => 'assertJsonFragment para validar parte del JSON.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe assertStatus(201) tras postJson',
        'must_contain' => 
        array (
          0 => 'assertStatus',
          1 => '201',
        ),
        'hint' => '$response->assertStatus(201);',
        'explanation' => '201 = recurso creado — patrón REST.',
        'pro_tip' => 'assertDatabaseHas verifica persistencia.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'tp-pest',
    'order' => 6,
    'title' => 'Pest: sintaxis moderna',
    'level' => 'Moderno',
    'minutes' => 25,
    'summary' => 'Tests expresivos sobre PHPUnit.',
    'concepts' => 
    array (
      0 => 'pest',
      1 => 'expect',
      2 => 'dsl',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pest',
        'body' => 'Framework con sintaxis limpia — usa PHPUnit por debajo.',
        'code' => 'test(\'suma funciona\', function () {
    expect(2 + 2)->toBe(4);
});',
      ),
      1 => 
      array (
        'heading' => 'Laravel + Pest',
        'body' => 'php artisan pest:install — el estándar en proyectos Laravel nuevos.',
        'code' => 'expect(2 + 2)->toBe(4);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Pest reemplaza PHPUnit internamente?',
        'options' => 
        array (
          0 => 'No, lo usa como motor',
          1 => 'Sí, incompatible',
          2 => 'Solo para JS',
        ),
        'answer' => 'No, lo usa como motor',
        'explanation' => 'Pest = DSL más bonito sobre PHPUnit.',
        'pro_tip' => 'expect()->toBe() lee más natural que assertEquals.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe expect(2+2)->toBe(4)',
        'must_contain' => 
        array (
          0 => 'expect',
          1 => 'toBe',
        ),
        'hint' => 'expect(2 + 2)->toBe(4);',
        'explanation' => 'Sintaxis fluida para aserciones.',
        'pro_tip' => 'toThrow() para excepciones esperadas.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'testing-php-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Testing en PHP.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Testing en PHP a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — testing-php
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — testing-php
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'testing-php-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Testing en PHP.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Testing en PHP a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — testing-php
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — testing-php
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
