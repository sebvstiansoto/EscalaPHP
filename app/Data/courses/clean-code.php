<?php

declare(strict_types=1);

return [
    [
        'slug' => 'cc-intro',
        'order' => 1,
        'title' => 'Clean Code: principios',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Legibilidad, deuda técnica y craft.',
        'concepts' => ['clean-code', 'readability', 'debt'],
        'sections' => [
            ['heading' => 'Clean Code', 'body' => 'Código leído **10x más** que escrito — nombres claros, funciones pequeñas, intención explícita (Robert C. Martin).'],
            ['heading' => 'Deuda técnica', 'body' => 'Atajos conscientes con plan de pago — no excusa para caos permanente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Clean code prioriza...?', 'options' => ['Legibilidad para humanos', 'Cleverness one-liners', 'Menos líneas siempre'], 'answer' => 'Legibilidad para humanos', 'explanation' => 'Mantenimiento es el coste real.', 'pro_tip' => 'Boy Scout Rule: deja código mejor.'],
            ['type' => 'choice', 'question' => '¿Deuda técnica?', 'options' => ['Coste futuro por decisión rápida hoy', 'Dinero banco', 'Bug automático'], 'answer' => 'Coste futuro por decisión rápida hoy', 'explanation' => 'Interés = velocity más lenta.', 'pro_tip' => 'Refactor incremental con tests.'],
        ],
    ],
    [
        'slug' => 'cc-naming',
        'order' => 2,
        'title' => 'Nombres que comunican',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Variables, funciones y constantes.',
        'concepts' => ['naming', 'intent', 'domain'],
        'sections' => [
            ['heading' => 'Nombres', 'body' => 'getUserById > getData. isEmailVerified > flag. Evita abreviaturas crípticas y noise (data, info, manager).'],
            ['heading' => 'Dominio', 'body' => 'Ubiquitous language — mismos términos que negocio y docs.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Mejor nombre función?', 'options' => ['calculateInvoiceTotal()', 'calc()', 'doStuff()'], 'answer' => 'calculateInvoiceTotal()', 'explanation' => 'Verbo + sustantivo específico.', 'pro_tip' => 'Bool returns: is/has/can prefix.'],
            ['type' => 'choice', 'question' => '¿Constante mágica 86400?', 'options' => ['SECONDS_PER_DAY con nombre', 'Dejar número', 'Comment only'], 'answer' => 'SECONDS_PER_DAY con nombre', 'explanation' => 'Named constants document intent.', 'pro_tip' => 'Enums > string literals dispersos.'],
        ],
    ],
    [
        'slug' => 'cc-functions',
        'order' => 3,
        'title' => 'Funciones pequeñas y SRP',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Un nivel abstracción, pocos args, sin efectos ocultos.',
        'concepts' => ['srp', 'function', 'abstraction'],
        'sections' => [
            ['heading' => 'Funciones', 'body' => 'Haz una cosa. ~20 líneas max guideline. 0-3 parámetros — más → objeto options.'],
            ['heading' => 'Efectos colaterales', 'body' => 'Función llamada checkPassword no debería crear sesión — sorpresa para quien lee.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Función con 8 parámetros?', 'options' => ['Refactor a objeto config/DTO', 'Perfecto', 'Agregar 9no'], 'answer' => 'Refactor a objeto config/DTO', 'explanation' => 'Parameter object pattern.', 'pro_tip' => 'Curso patrones diseño: SRP formal.'],
            ['type' => 'choice', 'question' => '¿Command-query separation?', 'options' => ['Mutate OR return, no ambos', 'Siempre ambos', 'Sin return'], 'answer' => 'Mutate OR return, no ambos', 'explanation' => 'Predictibilidad.', 'pro_tip' => 'void vs T return type hint.'],
        ],
    ],
    [
        'slug' => 'cc-solid',
        'order' => 4,
        'title' => 'SOLID en la práctica',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Aplicar SOLID sin over-engineering.',
        'concepts' => ['solid', 'ocp', 'dip'],
        'sections' => [
            ['heading' => 'SOLID recap', 'body' => 'SRP, OCP, LSP, ISP, DIP — vocabulario reviews y diseño mantenible.'],
            ['heading' => 'Pragmatismo', 'body' => 'No 15 interfaces para CRUD — SOLID donde hay variación real.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿OCP?', 'options' => ['Abierto extensión, cerrado modificación', 'Una clase gigante', 'Sin interfaces'], 'answer' => 'Abierto extensión, cerrado modificación', 'explanation' => 'Strategy pattern ejemplo.', 'pro_tip' => 'Curso patrones diseño profundiza.'],
            ['type' => 'choice', 'question' => '¿DIP en Laravel?', 'options' => ['Type-hint interface en constructor — container resuelve', 'new Class everywhere', 'Global static'], 'answer' => 'Type-hint interface en constructor — container resuelve', 'explanation' => 'Depender abstracciones.', 'pro_tip' => 'app()->bind() en ServiceProvider.'],
        ],
    ],
    [
        'slug' => 'cc-refactor',
        'order' => 5,
        'title' => 'Refactoring seguro',
        'level' => 'Práctica',
        'minutes' => 40,
        'summary' => 'Catálogo Martin Fowler y tests red de seguridad.',
        'concepts' => ['refactor', 'extract', 'tests'],
        'sections' => [
            ['heading' => 'Refactoring', 'body' => 'Cambiar estructura sin cambiar comportamiento — **tests verdes** en cada paso.'],
            ['heading' => 'Técnicas', 'body' => 'Extract Method, Rename, Replace Conditional with Polymorphism.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Primer paso refactor legacy?', 'options' => ['Tests caracterización donde falten', 'Rewrite total', 'Sin tests'], 'answer' => 'Tests caracterización donde falten', 'explanation' => 'Red de seguridad.', 'pro_tip' => 'Curso testing PHP complementa.'],
            ['type' => 'choice', 'question' => '¿Extract Method cuándo?', 'options' => ['Bloque código con nombre propio', 'Archivo > 10 líneas', 'Siempre'], 'answer' => 'Bloque código con nombre propio', 'explanation' => 'Nombre documenta intención.', 'pro_tip' => 'Commits pequeños por refactor step.'],
        ],
    ],
    [
        'slug' => 'cc-review',
        'order' => 6,
        'title' => 'Code review efectivo',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'PRs, feedback y cultura equipo.',
        'concepts' => ['code-review', 'pr', 'feedback'],
        'sections' => [
            ['heading' => 'Code review', 'body' => 'Revisa diseño, tests, seguridad, nombres — no solo syntax. PRs pequeños (<400 líneas).'],
            ['heading' => 'Feedback', 'body' => 'Comentarios sobre código no persona — sugerencias y preguntas, no órdenes.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿PR ideal tamaño?', 'options' => ['Pequeño, revisable en <30 min', '5000 líneas feature completa', 'Un commit mes'], 'answer' => 'Pequeño, revisable en <30 min', 'explanation' => 'Review quality baja con size.', 'pro_tip' => 'Curso Git PR workflow.'],
            ['type' => 'choice', 'question' => '¿Automatizar en review?', 'options' => ['Lint, tests CI, security scan', 'Solo ojo humano', 'Nada'], 'answer' => 'Lint, tests CI, security scan', 'explanation' => 'Humanos en lógica negocio.', 'pro_tip' => 'Conventional commits clarifican changelog.'],
        ],
    ],
];
