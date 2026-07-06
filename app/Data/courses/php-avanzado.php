<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'pav-intro',
    'order' => 1,
    'title' => 'PHP 8 avanzado',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Features modern PHP beyond basics.',
    'concepts' => 
    array (
      0 => 'php8',
      1 => 'attributes',
      2 => 'enums',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PHP 8+',
        'body' => '**Enums**, **Attributes**, **readonly**, **match**, **named args**, **union types** — curso php-fundamentos prerequisite.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Why',
        'body' => 'Frameworks Laravel Symfony use heavily — idiomatic modern PHP codebases.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PHP enum?',
        'options' => 
        array (
          0 => 'First-class enum type',
          1 => 'String constant only',
          2 => 'CSS class',
        ),
        'answer' => 'First-class enum type',
        'explanation' => 'enum Status: string { case Active = "active"; }',
        'pro_tip' => 'Backed vs pure enums.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿readonly class PHP 8.2?',
        'options' => 
        array (
          0 => 'All properties readonly immutable',
          1 => 'Write anywhere',
          2 => 'Deprecated',
        ),
        'answer' => 'All properties readonly immutable',
        'explanation' => 'Value objects DDD.',
        'pro_tip' => 'Compare TypeScript readonly.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'pav-types',
    'order' => 2,
    'title' => 'Tipos avanzados',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Union, intersection, never.',
    'concepts' => 
    array (
      0 => 'union',
      1 => 'intersection',
      2 => 'never',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Types',
        'body' => 'string|int union — Foo&Bar intersection — never return unreachable — static return type.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-types\';',
      ),
      1 => 
      array (
        'heading' => 'Generics doc',
        'body' => 'PHPDoc @template — PHPStan Psalm enforce — no runtime generics yet.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-types\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿never type?',
        'options' => 
        array (
          0 => 'Function never returns throws/exits',
          1 => 'Optional return',
          2 => 'void same',
        ),
        'answer' => 'Function never returns throws/exits',
        'explanation' => 'Exhaustive match helper.',
        'pro_tip' => 'PHPStan level max catches bugs.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿match vs switch?',
        'options' => 
        array (
          0 => 'match strict returns expression',
          1 => 'switch always loose',
          2 => 'No difference',
        ),
        'answer' => 'match strict returns expression',
        'explanation' => 'No fall-through bugs.',
        'pro_tip' => 'Default arm required exhaustive.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'pav-attributes',
    'order' => 3,
    'title' => 'Attributes (annotations)',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Native metadata PHP 8.',
    'concepts' => 
    array (
      0 => 'attributes',
      1 => 'reflection',
      2 => 'metadata',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Attributes',
        'body' => '#[Route("/api/users")] — replace docblock annotations — reflection read runtime.',
        'code' => '#[\\Attribute]',
      ),
      1 => 
      array (
        'heading' => 'Frameworks',
        'body' => 'Symfony routes validation — custom attributes DDD markers.',
        'code' => '#[\\Attribute]',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Attribute vs docblock?',
        'options' => 
        array (
          0 => 'Native syntax IDE validated',
          1 => 'Docblock deprecated instant',
          2 => 'Same always',
        ),
        'answer' => 'Native syntax IDE validated',
        'explanation' => 'Repeatable #[\\Attribute].',
        'pro_tip' => 'ReflectionAttribute API.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe #[\\Attribute]',
        'must_contain' => 
        array (
          0 => 'Attribute',
        ),
        'hint' => '#[\\Attribute]',
        'explanation' => 'Declare custom attribute class.',
        'pro_tip' => 'Target METHOD CLASS PROPERTY.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'pav-oop',
    'order' => 4,
    'title' => 'OOP patterns PHP',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'DI, value objects, DDD lite.',
    'concepts' => 
    array (
      0 => 'di',
      1 => 'value-object',
      2 => 'ddd',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DI',
        'body' => 'Constructor injection — PSR-11 container — avoid service locator antipattern.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-oop\';',
      ),
      1 => 
      array (
        'heading' => 'Value objects',
        'body' => 'readonly Email value — validate construct — Money amount currency — no primitive obsession.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-oop\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Value object Email?',
        'options' => 
        array (
          0 => 'Wrap string validate once immutable',
          1 => 'Global variable',
          2 => 'Array only',
        ),
        'answer' => 'Wrap string validate once immutable',
        'explanation' => 'Invalid state impossible.',
        'pro_tip' => 'Curso clean-code overlap.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿PSR-11?',
        'options' => 
        array (
          0 => 'Container interface standard',
          1 => 'HTTP message',
          2 => 'Logging only',
        ),
        'answer' => 'Container interface standard',
        'explanation' => 'Interop DI containers.',
        'pro_tip' => 'Laravel container implements.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'pav-async',
    'order' => 5,
    'title' => 'Async y performance PHP',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Fibers, Octane, profiling.',
    'concepts' => 
    array (
      0 => 'fibers',
      1 => 'octane',
      2 => 'opcache',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Fibers PHP 8.1',
        'body' => 'Cooperative concurrency — ReactPHP Amp — not threads — I/O concurrent single process.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-async\';',
      ),
      1 => 
      array (
        'heading' => 'Octane',
        'body' => 'Laravel Octane Swoole/RoadRunner — keep app booted — reduce request overhead.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-async\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿OPcache prod?',
        'options' => 
        array (
          0 => 'Required bytecode cache performance',
          1 => 'Dev only',
          2 => 'Disable always',
        ),
        'answer' => 'Required bytecode cache performance',
        'explanation' => 'opcache.enable=1 validate_timestamps=0 prod.',
        'pro_tip' => 'Preload PHP 7.4+ further.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿PHP Fibers vs goroutines?',
        'options' => 
        array (
          0 => 'Fibers cooperative userland; Go preemptive OS threads model',
          1 => 'Identical',
          2 => 'PHP no concurrency',
        ),
        'answer' => 'Fibers cooperative userland; Go preemptive OS threads model',
        'explanation' => 'Different models.',
        'pro_tip' => 'Curso Go concurrency compare.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'pav-prod',
    'order' => 6,
    'title' => 'PHP producción avanzada',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'PHPStan, Rector, security.',
    'concepts' => 
    array (
      0 => 'phpstan',
      1 => 'rector',
      2 => 'security',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Static analysis',
        'body' => 'PHPStan/Psalm level 8 — Rector automated upgrades PHP 7→8 — CI enforce.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-prod\';',
      ),
      1 => 
      array (
        'heading' => 'Security',
        'body' => 'Never unserialize user data — prepared statements — CSP headers — curso seguridad-web.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pav-prod\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Rector?',
        'options' => 
        array (
          0 => 'Automated refactoring upgrades',
          1 => 'Runtime debugger',
          2 => 'CSS minifier',
        ),
        'answer' => 'Automated refactoring upgrades',
        'explanation' => 'Codemods PHP versions.',
        'pro_tip' => 'Run before major PHP bump.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿declare(strict_types=1)?',
        'options' => 
        array (
          0 => 'Strict type coercion file',
          1 => 'Optional never use',
          2 => 'Security only',
        ),
        'answer' => 'Strict type coercion file',
        'explanation' => 'Catch type bugs early.',
        'pro_tip' => 'Every new file project standard.',
      ),
    ),
  ),
);
