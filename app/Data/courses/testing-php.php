<?php

declare(strict_types=1);

return [
    [
        'slug' => 'tp-intro',
        'order' => 1,
        'title' => 'Por qué testear y PHPUnit',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'Pirámide de tests, TDD ligero y primera aserción.',
        'concepts' => ['testing', 'phpunit', 'assertion'],
        'sections' => [
            ['heading' => '¿Por qué tests?', 'body' => 'Tests automatizados detectan regresiones antes de producción. Refactorizas con confianza.'],
            ['heading' => 'PHPUnit', 'body' => 'Estándar en PHP. `composer require --dev phpunit/phpunit`. Tests en tests/.', 'code' => "public function test_suma(): void {\n    \$this->assertEquals(4, 2 + 2);\n}"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Gestor de tests estándar en PHP?', 'options' => ['PHPUnit', 'Jest', 'pytest'], 'answer' => 'PHPUnit', 'explanation' => 'PHPUnit viene con Laravel y Symfony.', 'pro_tip' => 'vendor/bin/phpunit ejecuta la suite.'],
            ['type' => 'contains', 'question' => 'Escribe $this->assertEquals(4, 2+2)', 'must_contain' => ['assertEquals'], 'hint' => '$this->assertEquals(4, 2 + 2);', 'explanation' => 'assertEquals compara valor esperado vs actual.', 'pro_tip' => 'assertSame usa === (tipo estricto).'],
        ],
    ],
    [
        'slug' => 'tp-unit',
        'order' => 2,
        'title' => 'Tests unitarios',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'Aislar lógica pura, data providers y casos borde.',
        'concepts' => ['unit', 'isolation', 'edge-case'],
        'sections' => [
            ['heading' => 'Unit test', 'body' => 'Prueba **una** función/clase sin BD ni HTTP. Rápido y determinista.'],
            ['heading' => 'Casos borde', 'body' => '0, null, string vacío, negativos — donde suelen estar los bugs.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Test unitario idealmente usa...?', 'options' => ['Solo lógica pura sin I/O', 'Siempre BD real', 'Siempre navegador'], 'answer' => 'Solo lógica pura sin I/O', 'explanation' => 'Sin red/BD = tests milisegundos.', 'pro_tip' => 'Extrae lógica del controller a clases testeables.'],
            ['type' => 'choice', 'question' => '¿assertTrue vs assertEquals?', 'options' => ['assertTrue para booleanos; assertEquals para valores', 'Son idénticos', 'assertTrue solo en Pest'], 'answer' => 'assertTrue para booleanos; assertEquals para valores', 'explanation' => 'Elige la aserción más expresiva.', 'pro_tip' => 'expectException para probar errores esperados.'],
        ],
    ],
    [
        'slug' => 'tp-mocks',
        'order' => 3,
        'title' => 'Mocks y stubs',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Simular dependencias externas con PHPUnit.',
        'concepts' => ['mock', 'stub', 'dependency'],
        'sections' => [
            ['heading' => 'Mock', 'body' => 'Objeto falso que verifica que llamaste métodos esperados — aísla email, APIs, pagos.'],
            ['heading' => 'createMock', 'body' => '$mailer = $this->createMock(Mailer::class); — controlas qué devuelve sin enviar emails reales.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Para qué un mock?', 'options' => ['Simular dependencia externa en aislamiento', 'Acelerar PHP', 'Reemplazar Git'], 'answer' => 'Simular dependencia externa en aislamiento', 'explanation' => 'No envías emails ni cobras tarjetas en tests.', 'pro_tip' => 'Laravel Mail::fake() es mock de alto nivel.'],
            ['type' => 'contains', 'question' => 'Escribe createMock en un test PHPUnit', 'must_contain' => ['createMock'], 'hint' => '$this->createMock(SomeClass::class)', 'explanation' => 'PHPUnit genera doble de prueba automáticamente.', 'pro_tip' => 'expects($this->once()) verifica llamadas.'],
        ],
    ],
    [
        'slug' => 'tp-integration',
        'order' => 4,
        'title' => 'Tests de integración',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'BD de test, RefreshDatabase y flujos reales.',
        'concepts' => ['integration', 'database', 'refresh'],
        'sections' => [
            ['heading' => 'Integración', 'body' => 'Prueba varias piezas juntas: controller + modelo + BD SQLite en memoria.'],
            ['heading' => 'Laravel', 'body' => 'use RefreshDatabase; — migra y limpia BD entre tests.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿BD en tests Laravel típica?', 'options' => ['SQLite en memoria', 'Producción Postgres', 'Sin BD'], 'answer' => 'SQLite en memoria', 'explanation' => 'Rápido y aislado — phpunit.xml configura DB_DATABASE=:memory:', 'pro_tip' => 'Nunca apuntes tests a BD de producción.'],
            ['type' => 'choice', 'question' => '¿Trait Laravel que resetea BD entre tests?', 'options' => ['RefreshDatabase', 'WithoutMiddleware', 'WithFaker'], 'answer' => 'RefreshDatabase', 'explanation' => 'Cada test empieza con esquema limpio.', 'pro_tip' => 'Factories crean datos de prueba realistas.'],
        ],
    ],
    [
        'slug' => 'tp-api',
        'order' => 5,
        'title' => 'Tests de API HTTP',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'getJson, postJson y assertStatus en Laravel.',
        'concepts' => ['http-test', 'json', 'feature'],
        'sections' => [
            ['heading' => 'Feature tests', 'body' => 'Simulan requests HTTP completos sin levantar servidor.', 'code' => "\$response = \$this->getJson('/api/users');\n\$response->assertStatus(200)->assertJsonStructure(['data']);"],
            ['heading' => 'Autenticación', 'body' => 'actingAs($user) prueba rutas protegidas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Método Laravel para GET JSON en test?', 'options' => ['getJson', 'curl', 'file_get_contents'], 'answer' => 'getJson', 'explanation' => 'Incluye header Accept: application/json.', 'pro_tip' => 'assertJsonFragment para validar parte del JSON.'],
            ['type' => 'contains', 'question' => 'Escribe assertStatus(201) tras postJson', 'must_contain' => ['assertStatus', '201'], 'hint' => '$response->assertStatus(201);', 'explanation' => '201 = recurso creado — patrón REST.', 'pro_tip' => 'assertDatabaseHas verifica persistencia.'],
        ],
    ],
    [
        'slug' => 'tp-pest',
        'order' => 6,
        'title' => 'Pest: sintaxis moderna',
        'level' => 'Moderno',
        'minutes' => 25,
        'summary' => 'Tests expresivos sobre PHPUnit.',
        'concepts' => ['pest', 'expect', 'dsl'],
        'sections' => [
            ['heading' => 'Pest', 'body' => 'Framework con sintaxis limpia — usa PHPUnit por debajo.', 'code' => "test('suma funciona', function () {\n    expect(2 + 2)->toBe(4);\n});"],
            ['heading' => 'Laravel + Pest', 'body' => 'php artisan pest:install — el estándar en proyectos Laravel nuevos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Pest reemplaza PHPUnit internamente?', 'options' => ['No, lo usa como motor', 'Sí, incompatible', 'Solo para JS'], 'answer' => 'No, lo usa como motor', 'explanation' => 'Pest = DSL más bonito sobre PHPUnit.', 'pro_tip' => 'expect()->toBe() lee más natural que assertEquals.'],
            ['type' => 'contains', 'question' => 'Escribe expect(2+2)->toBe(4)', 'must_contain' => ['expect', 'toBe'], 'hint' => 'expect(2 + 2)->toBe(4);', 'explanation' => 'Sintaxis fluida para aserciones.', 'pro_tip' => 'toThrow() para excepciones esperadas.'],
        ],
    ],
];
