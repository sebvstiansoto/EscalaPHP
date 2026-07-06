<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'cc-intro',
    'order' => 1,
    'title' => 'Clean Code: principios',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Legibilidad, deuda técnica y craft.',
    'concepts' => 
    array (
      0 => 'clean-code',
      1 => 'readability',
      2 => 'debt',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Clean Code',
        'body' => 'Código leído **10x más** que escrito — nombres claros, funciones pequeñas, intención explícita (Robert C. Martin).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Deuda técnica',
        'body' => 'Atajos conscientes con plan de pago — no excusa para caos permanente.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Clean code prioriza...?',
        'options' => 
        array (
          0 => 'Legibilidad para humanos',
          1 => 'Cleverness one-liners',
          2 => 'Menos líneas siempre',
        ),
        'answer' => 'Legibilidad para humanos',
        'explanation' => 'Mantenimiento es el coste real.',
        'pro_tip' => 'Boy Scout Rule: deja código mejor.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Deuda técnica?',
        'options' => 
        array (
          0 => 'Coste futuro por decisión rápida hoy',
          1 => 'Dinero banco',
          2 => 'Bug automático',
        ),
        'answer' => 'Coste futuro por decisión rápida hoy',
        'explanation' => 'Interés = velocity más lenta.',
        'pro_tip' => 'Refactor incremental con tests.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'cc-naming',
    'order' => 2,
    'title' => 'Nombres que comunican',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Variables, funciones y constantes.',
    'concepts' => 
    array (
      0 => 'naming',
      1 => 'intent',
      2 => 'domain',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Nombres',
        'body' => 'getUserById > getData. isEmailVerified > flag. Evita abreviaturas crípticas y noise (data, info, manager).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-naming\';',
      ),
      1 => 
      array (
        'heading' => 'Dominio',
        'body' => 'Ubiquitous language — mismos términos que negocio y docs.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-naming\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Mejor nombre función?',
        'options' => 
        array (
          0 => 'calculateInvoiceTotal()',
          1 => 'calc()',
          2 => 'doStuff()',
        ),
        'answer' => 'calculateInvoiceTotal()',
        'explanation' => 'Verbo + sustantivo específico.',
        'pro_tip' => 'Bool returns: is/has/can prefix.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Constante mágica 86400?',
        'options' => 
        array (
          0 => 'SECONDS_PER_DAY con nombre',
          1 => 'Dejar número',
          2 => 'Comment only',
        ),
        'answer' => 'SECONDS_PER_DAY con nombre',
        'explanation' => 'Named constants document intent.',
        'pro_tip' => 'Enums > string literals dispersos.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'cc-functions',
    'order' => 3,
    'title' => 'Funciones pequeñas y SRP',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Un nivel abstracción, pocos args, sin efectos ocultos.',
    'concepts' => 
    array (
      0 => 'srp',
      1 => 'function',
      2 => 'abstraction',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Funciones',
        'body' => 'Haz una cosa. ~20 líneas max guideline. 0-3 parámetros — más → objeto options.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-functions\';',
      ),
      1 => 
      array (
        'heading' => 'Efectos colaterales',
        'body' => 'Función llamada checkPassword no debería crear sesión — sorpresa para quien lee.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-functions\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Función con 8 parámetros?',
        'options' => 
        array (
          0 => 'Refactor a objeto config/DTO',
          1 => 'Perfecto',
          2 => 'Agregar 9no',
        ),
        'answer' => 'Refactor a objeto config/DTO',
        'explanation' => 'Parameter object pattern.',
        'pro_tip' => 'Curso patrones diseño: SRP formal.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Command-query separation?',
        'options' => 
        array (
          0 => 'Mutate OR return, no ambos',
          1 => 'Siempre ambos',
          2 => 'Sin return',
        ),
        'answer' => 'Mutate OR return, no ambos',
        'explanation' => 'Predictibilidad.',
        'pro_tip' => 'void vs T return type hint.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'cc-solid',
    'order' => 4,
    'title' => 'SOLID en la práctica',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Aplicar SOLID sin over-engineering.',
    'concepts' => 
    array (
      0 => 'solid',
      1 => 'ocp',
      2 => 'dip',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SOLID recap',
        'body' => 'SRP, OCP, LSP, ISP, DIP — vocabulario reviews y diseño mantenible.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-solid\';',
      ),
      1 => 
      array (
        'heading' => 'Pragmatismo',
        'body' => 'No 15 interfaces para CRUD — SOLID donde hay variación real.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-solid\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿OCP?',
        'options' => 
        array (
          0 => 'Abierto extensión, cerrado modificación',
          1 => 'Una clase gigante',
          2 => 'Sin interfaces',
        ),
        'answer' => 'Abierto extensión, cerrado modificación',
        'explanation' => 'Strategy pattern ejemplo.',
        'pro_tip' => 'Curso patrones diseño profundiza.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DIP en Laravel?',
        'options' => 
        array (
          0 => 'Type-hint interface en constructor — container resuelve',
          1 => 'new Class everywhere',
          2 => 'Global static',
        ),
        'answer' => 'Type-hint interface en constructor — container resuelve',
        'explanation' => 'Depender abstracciones.',
        'pro_tip' => 'app()->bind() en ServiceProvider.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'cc-refactor',
    'order' => 5,
    'title' => 'Refactoring seguro',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'Catálogo Martin Fowler y tests red de seguridad.',
    'concepts' => 
    array (
      0 => 'refactor',
      1 => 'extract',
      2 => 'tests',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Refactoring',
        'body' => 'Cambiar estructura sin cambiar comportamiento — **tests verdes** en cada paso.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-refactor\';',
      ),
      1 => 
      array (
        'heading' => 'Técnicas',
        'body' => 'Extract Method, Rename, Replace Conditional with Polymorphism.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-refactor\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Primer paso refactor legacy?',
        'options' => 
        array (
          0 => 'Tests caracterización donde falten',
          1 => 'Rewrite total',
          2 => 'Sin tests',
        ),
        'answer' => 'Tests caracterización donde falten',
        'explanation' => 'Red de seguridad.',
        'pro_tip' => 'Curso testing PHP complementa.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Extract Method cuándo?',
        'options' => 
        array (
          0 => 'Bloque código con nombre propio',
          1 => 'Archivo > 10 líneas',
          2 => 'Siempre',
        ),
        'answer' => 'Bloque código con nombre propio',
        'explanation' => 'Nombre documenta intención.',
        'pro_tip' => 'Commits pequeños por refactor step.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'cc-review',
    'order' => 6,
    'title' => 'Code review efectivo',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'PRs, feedback y cultura equipo.',
    'concepts' => 
    array (
      0 => 'code-review',
      1 => 'pr',
      2 => 'feedback',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Code review',
        'body' => 'Revisa diseño, tests, seguridad, nombres — no solo syntax. PRs pequeños (<400 líneas).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-review\';',
      ),
      1 => 
      array (
        'heading' => 'Feedback',
        'body' => 'Comentarios sobre código no persona — sugerencias y preguntas, no órdenes.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cc-review\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PR ideal tamaño?',
        'options' => 
        array (
          0 => 'Pequeño, revisable en <30 min',
          1 => '5000 líneas feature completa',
          2 => 'Un commit mes',
        ),
        'answer' => 'Pequeño, revisable en <30 min',
        'explanation' => 'Review quality baja con size.',
        'pro_tip' => 'Curso Git PR workflow.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Automatizar en review?',
        'options' => 
        array (
          0 => 'Lint, tests CI, security scan',
          1 => 'Solo ojo humano',
          2 => 'Nada',
        ),
        'answer' => 'Lint, tests CI, security scan',
        'explanation' => 'Humanos en lógica negocio.',
        'pro_tip' => 'Conventional commits clarifican changelog.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'clean-code-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Clean Code.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Clean Code a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — clean-code
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

// Checklist post-deploy — clean-code
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
    'slug' => 'clean-code-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Clean Code.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Clean Code a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — clean-code
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

// Checklist post-deploy — clean-code
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
