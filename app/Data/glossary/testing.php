<?php

declare(strict_types=1);

$cat = 'php';

return [
    ['slug' => 'testing', 'term' => 'Testing', 'category' => $cat, 'definition' => 'Práctica de escribir código que verifica automáticamente que tu aplicación funciona correctamente.'],
    ['slug' => 'phpunit', 'term' => 'PHPUnit', 'category' => $cat, 'definition' => 'Framework estándar de testing para PHP. Usado en Laravel y proyectos enterprise.'],
    ['slug' => 'assertion', 'term' => 'Assertion (aserción)', 'category' => $cat, 'definition' => 'Comprobación en un test: assertEquals, expect()->toBe(). Falla si no se cumple.'],
    ['slug' => 'unit', 'term' => 'Unit test', 'category' => $cat, 'definition' => 'Prueba aislada de una función o clase sin dependencias externas (BD, red).'],
    ['slug' => 'isolation', 'term' => 'Aislamiento', 'category' => $cat, 'definition' => 'En tests, separar la unidad bajo prueba de BD, APIs y otros servicios.'],
    ['slug' => 'edge-case', 'term' => 'Edge case', 'category' => $cat, 'definition' => 'Caso límite o inusual: array vacío, null, valor máximo, string muy largo.'],
    ['slug' => 'mock', 'term' => 'Mock', 'category' => $cat, 'definition' => 'Objeto falso que simula una dependencia y verifica que se llamó correctamente.'],
    ['slug' => 'stub', 'term' => 'Stub', 'category' => $cat, 'definition' => 'Objeto falso que devuelve respuestas predefinidas sin verificar interacciones.'],
    ['slug' => 'dependency', 'term' => 'Dependencia', 'category' => $cat, 'definition' => 'Clase, servicio o librería que tu código necesita para funcionar.'],
    ['slug' => 'integration', 'term' => 'Integration test', 'category' => $cat, 'definition' => 'Prueba que verifica la interacción entre varios componentes (app + BD + API).'],
    ['slug' => 'refresh', 'term' => 'RefreshDatabase', 'category' => $cat, 'definition' => 'Trait Laravel que resetea la BD entre tests para un estado limpio y predecible.'],
    ['slug' => 'http-test', 'term' => 'HTTP test', 'category' => $cat, 'definition' => 'Prueba que simula peticiones HTTP a tu app y verifica respuesta, status y JSON.'],
    ['slug' => 'feature', 'term' => 'Feature test', 'category' => $cat, 'definition' => 'Test de extremo a extremo de una funcionalidad completa (login, checkout, API).'],
    ['slug' => 'pest', 'term' => 'Pest', 'category' => $cat, 'definition' => 'Framework de testing PHP con sintaxis elegante sobre PHPUnit. Muy popular en Laravel.'],
    ['slug' => 'expect', 'term' => 'expect()', 'category' => $cat, 'definition' => 'API de aserciones de Pest: expect($value)->toBe(42).'],
    ['slug' => 'dsl', 'term' => 'DSL', 'category' => $cat, 'definition' => 'Domain Specific Language: mini-lenguaje para un propósito (expect en Pest, queries en SQL).'],
    ['slug' => 'coverage', 'term' => 'Code coverage', 'category' => $cat, 'definition' => 'Porcentaje del código ejecutado por los tests. No garantiza calidad pero ayuda a detectar huecos.'],
    ['slug' => 'e2e', 'term' => 'E2E test', 'category' => $cat, 'definition' => 'End-to-end: prueba el flujo completo como lo haría un usuario real (Playwright, Cypress).'],
    ['slug' => 'regression', 'term' => 'Regression test', 'category' => $cat, 'definition' => 'Test que verifica que un bug corregido no vuelve a aparecer en el futuro.'],
];
