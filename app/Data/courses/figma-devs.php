<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'fg-intro',
    'order' => 1,
    'title' => 'Figma para developers',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Design-dev workflow.',
    'concepts' => 
    array (
      0 => 'figma',
      1 => 'design',
      2 => 'handoff',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Figma',
        'body' => 'Herramienta **diseño UI** colaborativa — devs leen specs, exportan assets, implementan design systems.',
        'code' => 'console.log(\'Practica: fg-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Dev Mode',
        'body' => 'Figma Dev Mode — CSS, medidas, tokens, component props para implementación.',
        'code' => 'console.log(\'Practica: fg-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dev Mode sirve para...?',
        'options' => 
        array (
          0 => 'Inspeccionar specs implementación',
          1 => 'Escribir PHP',
          2 => 'Deploy',
        ),
        'answer' => 'Inspeccionar specs implementación',
        'explanation' => 'Handoff designer→dev.',
        'pro_tip' => 'Plugins codegen Tailwind.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Auto-layout Figma?',
        'options' => 
        array (
          0 => 'Similar Flexbox',
          1 => 'Database layout',
          2 => 'SQL',
        ),
        'answer' => 'Similar Flexbox',
        'explanation' => 'Predict responsive behavior.',
        'pro_tip' => 'Curso Tailwind maps well.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'fg-tokens',
    'order' => 2,
    'title' => 'Design tokens',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Colors, spacing, typography.',
    'concepts' => 
    array (
      0 => 'token',
      1 => 'variable',
      2 => 'theme',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tokens',
        'body' => 'Variables Figma — color/primary, spacing/md — sync código via Style Dictionary o Tokens Studio.',
        'code' => 'console.log(\'Practica: fg-tokens\');',
      ),
      1 => 
      array (
        'heading' => 'Consistencia',
        'body' => 'Single source truth — cambio token → update design + CSS/Tailwind.',
        'code' => 'console.log(\'Practica: fg-tokens\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Design token?',
        'options' => 
        array (
          0 => 'Valor semántico reusable (brand-color)',
          1 => 'Random hex only',
          2 => 'SQL column',
        ),
        'answer' => 'Valor semántico reusable (brand-color)',
        'explanation' => 'Abstrae raw values.',
        'pro_tip' => 'Tailwind theme.extend tokens.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿8px grid system?',
        'options' => 
        array (
          0 => 'Spacing múltiplos 8 consistencia',
          1 => '8 colors only',
          2 => '8 fonts',
        ),
        'answer' => 'Spacing múltiplos 8 consistencia',
        'explanation' => 'Industry standard rhythm.',
        'pro_tip' => 'Match dev rem/em scale.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'fg-handoff',
    'order' => 3,
    'title' => 'Handoff e inspección',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Medidas, assets y export.',
    'concepts' => 
    array (
      0 => 'inspect',
      1 => 'export',
      2 => 'svg',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Inspect',
        'body' => 'Click elemento → padding, margin, font-size, colors — copy CSS/Tailwind/iOS.',
        'code' => 'console.log(\'Practica: fg-handoff\');',
      ),
      1 => 
      array (
        'heading' => 'Export',
        'body' => 'SVG icons, PNG @2x/@3x — naming convention assets/.',
        'code' => 'console.log(\'Practica: fg-handoff\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Icons export format?',
        'options' => 
        array (
          0 => 'SVG preferido web',
          1 => 'BMP always',
          2 => 'Word doc',
        ),
        'answer' => 'SVG preferido web',
        'explanation' => 'Scalable crisp.',
        'pro_tip' => 'SVGO optimize size.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Redlines?',
        'options' => 
        array (
          0 => 'Anotaciones medidas diseño',
          1 => 'Red CSS',
          2 => 'Error logs',
        ),
        'answer' => 'Anotaciones medidas diseño',
        'explanation' => 'Dev Mode replaces many.',
        'pro_tip' => 'Ask designer not guess spacing.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'fg-components',
    'order' => 4,
    'title' => 'Components y variants',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Map to React/Vue components.',
    'concepts' => 
    array (
      0 => 'component',
      1 => 'variant',
      2 => 'prop',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Components',
        'body' => 'Button component variants: primary/secondary/disabled — maps React props.',
        'code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
      ),
      1 => 
      array (
        'heading' => 'Naming',
        'body' => 'Align Figma component names code — Button/Primary ↔ <Button variant="primary">',
        'code' => 'console.log(\'Practica: fg-components\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Variant property Figma?',
        'options' => 
        array (
          0 => 'Switch visual states component',
          1 => 'Git branch',
          2 => 'Database',
        ),
        'answer' => 'Switch visual states component',
        'explanation' => 'Like Storybook controls.',
        'pro_tip' => 'Curso React components.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿1:1 Figma to code?',
        'options' => 
        array (
          0 => 'Ideal pero pragmatismo — tokens > pixels',
          1 => 'Pixel perfect always mandatory',
          2 => 'Never look design',
        ),
        'answer' => 'Ideal pero pragmatismo — tokens > pixels',
        'explanation' => 'Communicate discrepancies.',
        'pro_tip' => 'Responsive may differ mobile.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'fg-prototype',
    'order' => 5,
    'title' => 'Prototipos y user flows',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Interactions antes de code.',
    'concepts' => 
    array (
      0 => 'prototype',
      1 => 'flow',
      2 => 'interaction',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Prototype',
        'body' => 'Connect frames — click → navigate — validate UX before sprint.',
        'code' => 'console.log(\'Practica: fg-prototype\');',
      ),
      1 => 
      array (
        'heading' => 'Dev value',
        'body' => 'Understand estados empty/loading/error diseñados — no improvisar UI.',
        'code' => 'console.log(\'Practica: fg-prototype\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Prototype antes code?',
        'options' => 
        array (
          0 => 'Valida UX barato',
          1 => 'Waste time always',
          2 => 'Illegal agile',
        ),
        'answer' => 'Valida UX barato',
        'explanation' => 'Catch issues early.',
        'pro_tip' => 'Curso agile user stories.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Loading state en design?',
        'options' => 
        array (
          0 => 'Dev debe implementar — ask if missing',
          1 => 'Skip always',
          2 => 'Only backend',
        ),
        'answer' => 'Dev debe implementar — ask if missing',
        'explanation' => 'All states designed.',
        'pro_tip' => 'Skeleton screens pattern.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'fg-prod',
    'order' => 6,
    'title' => 'Design systems en equipo',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Storybook, Figma libraries, sync.',
    'concepts' => 
    array (
      0 => 'storybook',
      1 => 'library',
      2 => 'sync',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Design system',
        'body' => 'Figma library shared + Storybook code — documentación componentes viva.',
        'code' => 'console.log(\'Practica: fg-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Workflow',
        'body' => 'Designer updates library → dev reviews → implement Storybook → app uses.',
        'code' => 'console.log(\'Practica: fg-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Storybook?',
        'options' => 
        array (
          0 => 'Catálogo componentes UI aislados',
          1 => 'Novel writing',
          2 => 'Database',
        ),
        'answer' => 'Catálogo componentes UI aislados',
        'explanation' => 'Dev + design QA.',
        'pro_tip' => 'Chromatic visual regression.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Figma Code Connect?',
        'options' => 
        array (
          0 => 'Link design components código real',
          1 => 'Compile PHP',
          2 => 'Deploy AWS',
        ),
        'answer' => 'Link design components código real',
        'explanation' => 'Design-dev single truth emerging.',
        'pro_tip' => 'Document in README design links.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'figma-devs-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de Figma para devs.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Figma para devs a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
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
    'slug' => 'figma-devs-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de Figma para devs.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Figma para devs a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
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
