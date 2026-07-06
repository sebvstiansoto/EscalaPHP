<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'a11y-intro',
    'order' => 1,
    'title' => 'Accesibilidad web (a11y)',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'WCAG, inclusión y legal.',
    'concepts' => 
    array (
      0 => 'a11y',
      1 => 'wcag',
      2 => 'inclusion',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'a11y',
        'body' => '**Accesibilidad** — 15%+ usuarios con discapacidad. WCAG 2.2 AA es estándar legal EU/US muchos casos.',
        'code' => 'console.log(\'Practica: a11y-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Beneficios',
        'body' => 'Mejor SEO, UX móvil, teclado power users — no solo "checkbox legal".',
        'code' => 'console.log(\'Practica: a11y-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿WCAG significa...?',
        'options' => 
        array (
          0 => 'Web Content Accessibility Guidelines',
          1 => 'Web CSS Angular Guide',
          2 => 'Without CSS',
        ),
        'answer' => 'Web Content Accessibility Guidelines',
        'explanation' => 'W3C standard.',
        'pro_tip' => 'POUR: Perceivable, Operable, Understandable, Robust.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Nivel AA?',
        'options' => 
        array (
          0 => 'Estándar legal/industry target',
          1 => 'Mínimo opcional',
          2 => 'Solo gobierno',
        ),
        'answer' => 'Estándar legal/industry target',
        'explanation' => 'AAA más estricto raro full site.',
        'pro_tip' => 'Automated tests catch ~30% issues.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'a11y-html',
    'order' => 2,
    'title' => 'HTML semántico',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Landmarks, headings y forms.',
    'concepts' => 
    array (
      0 => 'semantic',
      1 => 'landmark',
      2 => 'heading',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Semántica',
        'body' => '<main>, <nav>, <header>, <article> — screen readers navegan por landmarks.',
        'code' => 'console.log(\'Practica: a11y-html\');',
      ),
      1 => 
      array (
        'heading' => 'Headings',
        'body' => 'h1→h2→h3 sin saltos — outline lógico documento.',
        'code' => 'console.log(\'Practica: a11y-html\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Botón vs div onclick?',
        'options' => 
        array (
          0 => '<button> keyboard focusable nativo',
          1 => 'div siempre mejor',
          2 => 'Sin diferencia',
        ),
        'answer' => '<button> keyboard focusable nativo',
        'explanation' => 'Role y keyboard built-in.',
        'pro_tip' => 'Curso html-css-js base.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿label for input?',
        'options' => 
        array (
          0 => 'Asocia texto clickeable campo',
          1 => 'Solo decoración',
          2 => 'CSS only',
        ),
        'answer' => 'Asocia texto clickeable campo',
        'explanation' => '<label for="email">',
        'pro_tip' => 'Placeholder ≠ label.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'a11y-aria',
    'order' => 3,
    'title' => 'ARIA cuando necesario',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Roles, states y live regions.',
    'concepts' => 
    array (
      0 => 'aria',
      1 => 'role',
      2 => 'live',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'ARIA',
        'body' => 'First rule: no ARIA if native HTML works. aria-label, aria-expanded, role="dialog".',
        'code' => 'console.log(\'Practica: a11y-aria\');',
      ),
      1 => 
      array (
        'heading' => 'Live regions',
        'body' => 'aria-live="polite" — anuncia cambios dynamic content screen readers.',
        'code' => 'console.log(\'Practica: a11y-aria\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ARIA first rule?',
        'options' => 
        array (
          0 => 'No usar si HTML nativo basta',
          1 => 'Siempre ARIA todo',
          2 => 'Sin ARIA nunca',
        ),
        'answer' => 'No usar si HTML nativo basta',
        'explanation' => 'Native > ARIA.',
        'pro_tip' => 'aria-hidden oculta decorativo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Modal accesible?',
        'options' => 
        array (
          0 => 'role=dialog, focus trap, Esc close',
          1 => 'div sin focus',
          2 => 'alert only',
        ),
        'answer' => 'role=dialog, focus trap, Esc close',
        'explanation' => 'Focus management crítico.',
        'pro_tip' => 'React focus-trap libraries.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'a11y-keyboard',
    'order' => 4,
    'title' => 'Navegación teclado',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Focus, tab order y skip links.',
    'concepts' => 
    array (
      0 => 'keyboard',
      1 => 'focus',
      2 => 'tabindex',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Keyboard',
        'body' => 'Todo interactivo alcanzable Tab — visible focus ring — no outline:none sin reemplazo.',
        'code' => 'console.log(\'Practica: a11y-keyboard\');',
      ),
      1 => 
      array (
        'heading' => 'Skip link',
        'body' => '<a href="#main" class="skip">Saltar al contenido</a> — first tab item.',
        'code' => 'console.log(\'Practica: a11y-keyboard\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿tabindex=0?',
        'options' => 
        array (
          0 => 'Natural tab order',
          1 => 'Remove from tab',
          2 => 'First always',
        ),
        'answer' => 'Natural tab order',
        'explanation' => 'tabindex=-1 programmatic focus only.',
        'pro_tip' => 'Avoid positive tabindex.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Focus visible?',
        'options' => 
        array (
          0 => 'Indicador claro elemento activo',
          1 => 'Sin indicador moderno',
          2 => 'Solo mouse',
        ),
        'answer' => 'Indicador claro elemento activo',
        'explanation' => ':focus-visible CSS.',
        'pro_tip' => 'Test solo teclado 5 min.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'a11y-test',
    'order' => 5,
    'title' => 'Testing accesibilidad',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'axe, Lighthouse y screen readers.',
    'concepts' => 
    array (
      0 => 'axe',
      1 => 'lighthouse',
      2 => 'screenreader',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Automated',
        'body' => 'axe-core, eslint-plugin-jsx-a11y, Lighthouse accessibility audit.',
        'code' => 'console.log(\'Practica: a11y-test\');',
      ),
      1 => 
      array (
        'heading' => 'Manual',
        'body' => 'NVDA/VoiceOver — navega ojos cerrados 10 min — encuentra bugs reales.',
        'code' => 'console.log(\'Practica: a11y-test\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿axe DevTools?',
        'options' => 
        array (
          0 => 'Browser extension a11y scan',
          1 => 'Video editor',
          2 => 'Database',
        ),
        'answer' => 'Browser extension a11y scan',
        'explanation' => 'CI @axe-core/playwright.',
        'pro_tip' => 'Curso Playwright e2e a11y.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Color contrast ratio AA?',
        'options' => 
        array (
          0 => '4.5:1 texto normal',
          1 => '1:1 enough',
          2 => 'Solo bold',
        ),
        'answer' => '4.5:1 texto normal',
        'explanation' => '3:1 large text.',
        'pro_tip' => 'WebAIM contrast checker.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'a11y-prod',
    'order' => 6,
    'title' => 'a11y en design systems',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Componentes accesibles y procesos.',
    'concepts' => 
    array (
      0 => 'design-system',
      1 => 'process',
      2 => 'vpats',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Design system',
        'body' => 'Radix, Headless UI, MUI — primitives accesibles — no reinventar focus trap.',
        'code' => 'console.log(\'Practica: a11y-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Process',
        'body' => 'a11y acceptance criteria en tickets — shift-left no audit final only.',
        'code' => 'console.log(\'Practica: a11y-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Radix/shadcn ventaja?',
        'options' => 
        array (
          0 => 'WAI-ARIA patterns built-in',
          1 => 'Sin a11y',
          2 => 'Solo CSS',
        ),
        'answer' => 'WAI-ARIA patterns built-in',
        'explanation' => 'Composable accessible.',
        'pro_tip' => 'Tailwind curso styling layer.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Accessibility statement?',
        'options' => 
        array (
          0 => 'Página pública compromiso y contacto',
          1 => 'Secreto legal',
          2 => 'Solo PDF',
        ),
        'answer' => 'Página pública compromiso y contacto',
        'explanation' => 'EU requirement many sites.',
        'pro_tip' => 'User testing disabled users gold.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'accesibilidad-web-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de Accesibilidad web.',
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
        'body' => 'Aplica lo aprendido en Accesibilidad web a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'accesibilidad-web-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de Accesibilidad web.',
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
        'body' => 'Aplica lo aprendido en Accesibilidad web a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
