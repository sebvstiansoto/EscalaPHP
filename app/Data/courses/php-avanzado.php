<?php

declare(strict_types=1);

return [
    ['slug' => 'pav-intro', 'order' => 1, 'title' => 'PHP 8 avanzado', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'Features modern PHP beyond basics.', 'concepts' => ['php8', 'attributes', 'enums'], 'sections' => [
        ['heading' => 'PHP 8+', 'body' => '**Enums**, **Attributes**, **readonly**, **match**, **named args**, **union types** — curso php-fundamentos prerequisite.'],
        ['heading' => 'Why', 'body' => 'Frameworks Laravel Symfony use heavily — idiomatic modern PHP codebases.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿PHP enum?', 'options' => ['First-class enum type', 'String constant only', 'CSS class'], 'answer' => 'First-class enum type', 'explanation' => 'enum Status: string { case Active = "active"; }', 'pro_tip' => 'Backed vs pure enums.'],
        ['type' => 'choice', 'question' => '¿readonly class PHP 8.2?', 'options' => ['All properties readonly immutable', 'Write anywhere', 'Deprecated'], 'answer' => 'All properties readonly immutable', 'explanation' => 'Value objects DDD.', 'pro_tip' => 'Compare TypeScript readonly.'],
    ]],
    ['slug' => 'pav-types', 'order' => 2, 'title' => 'Tipos avanzados', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Union, intersection, never.', 'concepts' => ['union', 'intersection', 'never'], 'sections' => [
        ['heading' => 'Types', 'body' => 'string|int union — Foo&Bar intersection — never return unreachable — static return type.'],
        ['heading' => 'Generics doc', 'body' => 'PHPDoc @template — PHPStan Psalm enforce — no runtime generics yet.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿never type?', 'options' => ['Function never returns throws/exits', 'Optional return', 'void same'], 'answer' => 'Function never returns throws/exits', 'explanation' => 'Exhaustive match helper.', 'pro_tip' => 'PHPStan level max catches bugs.'],
        ['type' => 'choice', 'question' => '¿match vs switch?', 'options' => ['match strict returns expression', 'switch always loose', 'No difference'], 'answer' => 'match strict returns expression', 'explanation' => 'No fall-through bugs.', 'pro_tip' => 'Default arm required exhaustive.'],
    ]],
    ['slug' => 'pav-attributes', 'order' => 3, 'title' => 'Attributes (annotations)', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Native metadata PHP 8.', 'concepts' => ['attributes', 'reflection', 'metadata'], 'sections' => [
        ['heading' => 'Attributes', 'body' => '#[Route("/api/users")] — replace docblock annotations — reflection read runtime.'],
        ['heading' => 'Frameworks', 'body' => 'Symfony routes validation — custom attributes DDD markers.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Attribute vs docblock?', 'options' => ['Native syntax IDE validated', 'Docblock deprecated instant', 'Same always'], 'answer' => 'Native syntax IDE validated', 'explanation' => 'Repeatable #[\Attribute].', 'pro_tip' => 'ReflectionAttribute API.'],
        ['type' => 'contains', 'question' => 'Escribe #[\Attribute]', 'must_contain' => ['Attribute'], 'hint' => '#[\\Attribute]', 'explanation' => 'Declare custom attribute class.', 'pro_tip' => 'Target METHOD CLASS PROPERTY.'],
    ]],
    ['slug' => 'pav-oop', 'order' => 4, 'title' => 'OOP patterns PHP', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'DI, value objects, DDD lite.', 'concepts' => ['di', 'value-object', 'ddd'], 'sections' => [
        ['heading' => 'DI', 'body' => 'Constructor injection — PSR-11 container — avoid service locator antipattern.'],
        ['heading' => 'Value objects', 'body' => 'readonly Email value — validate construct — Money amount currency — no primitive obsession.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Value object Email?', 'options' => ['Wrap string validate once immutable', 'Global variable', 'Array only'], 'answer' => 'Wrap string validate once immutable', 'explanation' => 'Invalid state impossible.', 'pro_tip' => 'Curso clean-code overlap.'],
        ['type' => 'choice', 'question' => '¿PSR-11?', 'options' => ['Container interface standard', 'HTTP message', 'Logging only'], 'answer' => 'Container interface standard', 'explanation' => 'Interop DI containers.', 'pro_tip' => 'Laravel container implements.'],
    ]],
    ['slug' => 'pav-async', 'order' => 5, 'title' => 'Async y performance PHP', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Fibers, Octane, profiling.', 'concepts' => ['fibers', 'octane', 'opcache'], 'sections' => [
        ['heading' => 'Fibers PHP 8.1', 'body' => 'Cooperative concurrency — ReactPHP Amp — not threads — I/O concurrent single process.'],
        ['heading' => 'Octane', 'body' => 'Laravel Octane Swoole/RoadRunner — keep app booted — reduce request overhead.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿OPcache prod?', 'options' => ['Required bytecode cache performance', 'Dev only', 'Disable always'], 'answer' => 'Required bytecode cache performance', 'explanation' => 'opcache.enable=1 validate_timestamps=0 prod.', 'pro_tip' => 'Preload PHP 7.4+ further.'],
        ['type' => 'choice', 'question' => '¿PHP Fibers vs goroutines?', 'options' => ['Fibers cooperative userland; Go preemptive OS threads model', 'Identical', 'PHP no concurrency'], 'answer' => 'Fibers cooperative userland; Go preemptive OS threads model', 'explanation' => 'Different models.', 'pro_tip' => 'Curso Go concurrency compare.'],
    ]],
    ['slug' => 'pav-prod', 'order' => 6, 'title' => 'PHP producción avanzada', 'level' => 'Producción', 'minutes' => 35, 'summary' => 'PHPStan, Rector, security.', 'concepts' => ['phpstan', 'rector', 'security'], 'sections' => [
        ['heading' => 'Static analysis', 'body' => 'PHPStan/Psalm level 8 — Rector automated upgrades PHP 7→8 — CI enforce.'],
        ['heading' => 'Security', 'body' => 'Never unserialize user data — prepared statements — CSP headers — curso seguridad-web.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Rector?', 'options' => ['Automated refactoring upgrades', 'Runtime debugger', 'CSS minifier'], 'answer' => 'Automated refactoring upgrades', 'explanation' => 'Codemods PHP versions.', 'pro_tip' => 'Run before major PHP bump.'],
        ['type' => 'choice', 'question' => '¿declare(strict_types=1)?', 'options' => ['Strict type coercion file', 'Optional never use', 'Security only'], 'answer' => 'Strict type coercion file', 'explanation' => 'Catch type bugs early.', 'pro_tip' => 'Every new file project standard.'],
    ]],
];
