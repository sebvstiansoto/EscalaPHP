<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'pl-intro',
    'order' => 1,
    'title' => 'Playwright E2E',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Testing browser moderno.',
    'concepts' => 
    array (
      0 => 'playwright',
      1 => 'e2e',
      2 => 'testing',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Playwright',
        'body' => '**Microsoft Playwright** — E2E tests Chrome/Firefox/WebKit — auto-wait, traces, parallel.',
        'code' => 'console.log(\'Practica: pl-intro\');',
      ),
      1 => 
      array (
        'heading' => 'vs Selenium',
        'body' => 'Auto-wait elements, network intercept, faster reliable — modern default.',
        'code' => 'console.log(\'Practica: pl-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿E2E test?',
        'options' => 
        array (
          0 => 'Simula usuario real browser',
          1 => 'Unit function only',
          2 => 'SQL query',
        ),
        'answer' => 'Simula usuario real browser',
        'explanation' => 'Highest confidence slowest.',
        'pro_tip' => 'Curso testing PHP pyramid.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Init Playwright?',
        'options' => 
        array (
          0 => 'npm init playwright@latest',
          1 => 'phpunit',
          2 => 'docker only',
        ),
        'answer' => 'npm init playwright@latest',
        'explanation' => 'Scaffolds tests config.',
        'pro_tip' => 'TypeScript recommended.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'pl-selectors',
    'order' => 2,
    'title' => 'Locators y assertions',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'getByRole, getByText, expect.',
    'concepts' => 
    array (
      0 => 'locator',
      1 => 'role',
      2 => 'expect',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Locators',
        'body' => 'page.getByRole("button", { name: "Submit" }) — prefer accessible selectors.',
        'code' => 'await page.goto(\'https://example.com\');
await page.getByLabel(\'Email\').fill(\'a@test.com\');
await expect(page.getByText(\'Welcome\')).toBeVisible();',
      ),
      1 => 
      array (
        'heading' => 'Auto-wait',
        'body' => 'Playwright retries until timeout — menos flaky que sleep manual.',
        'code' => 'page.getByRole(\'button\')',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Mejor selector a11y?',
        'options' => 
        array (
          0 => 'getByRole/getByLabel',
          1 => 'CSS .btn-xyz only',
          2 => 'XPath always',
        ),
        'answer' => 'getByRole/getByLabel',
        'explanation' => 'Resilient user-facing.',
        'pro_tip' => 'Curso accesibilidad alinea.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe getByRole button',
        'must_contain' => 
        array (
          0 => 'getByRole',
        ),
        'hint' => 'page.getByRole(\'button\')',
        'explanation' => 'Semantic locator.',
        'pro_tip' => 'data-testid last resort.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'pl-fixtures',
    'order' => 3,
    'title' => 'Fixtures y Page Objects',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'test.extend, auth state.',
    'concepts' => 
    array (
      0 => 'fixture',
      1 => 'page-object',
      2 => 'auth',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Fixtures',
        'body' => 'test.extend<{ loginPage: LoginPage }> — setup reusable per test.',
        'code' => 'console.log(\'Practica: pl-fixtures\');',
      ),
      1 => 
      array (
        'heading' => 'Storage state',
        'body' => 'globalSetup login once → save storageState.json — reuse auth tests.',
        'code' => 'console.log(\'Practica: pl-fixtures\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿storageState?',
        'options' => 
        array (
          0 => 'Reuse cookies/localStorage logged in',
          1 => 'Database dump',
          2 => 'Screenshot',
        ),
        'answer' => 'Reuse cookies/localStorage logged in',
        'explanation' => 'Speed E2E suite.',
        'pro_tip' => 'Separate auth setup project.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Page Object pattern?',
        'options' => 
        array (
          0 => 'Encapsula page interactions class',
          1 => 'Copy paste selectors',
          2 => 'No abstraction',
        ),
        'answer' => 'Encapsula page interactions class',
        'explanation' => 'Maintainable when UI changes.',
        'pro_tip' => 'One class per page/flow.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'pl-api',
    'order' => 4,
    'title' => 'API testing y mocking',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'request context, route intercept.',
    'concepts' => 
    array (
      0 => 'api',
      1 => 'mock',
      2 => 'intercept',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'API',
        'body' => 'request.post("/api/login", { data: { email, pass } }) — test API without UI.',
        'code' => 'const res = await fetch(\'/api/users\');
const data = await res.json();
console.log(data);',
      ),
      1 => 
      array (
        'heading' => 'route.fulfill',
        'body' => 'Mock API responses — test edge cases sin backend real.',
        'code' => 'console.log(\'Practica: pl-api\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿page.route intercept?',
        'options' => 
        array (
          0 => 'Mock/modify network requests',
          1 => 'CSS route',
          2 => 'Server nginx',
        ),
        'answer' => 'Mock/modify network requests',
        'explanation' => 'Test error states deterministic.',
        'pro_tip' => 'HAR record replay debug.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿API vs E2E balance?',
        'options' => 
        array (
          0 => 'API fast setup; E2E critical paths',
          1 => 'Only E2E all',
          2 => 'No tests',
        ),
        'answer' => 'API fast setup; E2E critical paths',
        'explanation' => 'Testing pyramid.',
        'pro_tip' => 'Curso testing PHP unit base.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'pl-ci',
    'order' => 5,
    'title' => 'CI y parallelización',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'GitHub Actions, sharding, traces.',
    'concepts' => 
    array (
      0 => 'ci',
      1 => 'shard',
      2 => 'trace',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CI',
        'body' => 'npx playwright test --shard=1/4 — split tests parallel jobs.',
        'code' => 'console.log(\'Practica: pl-ci\');',
      ),
      1 => 
      array (
        'heading' => 'Traces',
        'body' => 'trace on-first-retry — Playwright Trace Viewer debug failures.',
        'code' => 'console.log(\'Practica: pl-ci\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Trace viewer?',
        'options' => 
        array (
          0 => 'Timeline screenshots network replay',
          1 => 'Video only',
          2 => 'Git log',
        ),
        'answer' => 'Timeline screenshots network replay',
        'explanation' => 'Debug flaky CI failures.',
        'pro_tip' => 'Curso cicd integrate.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Headless CI?',
        'options' => 
        array (
          0 => 'Sin UI más rápido servers',
          1 => 'Requires monitor',
          2 => 'Windows only',
        ),
        'answer' => 'Sin UI más rápido servers',
        'explanation' => 'headed local debug.',
        'pro_tip' => 'playwright install --with-deps CI.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'pl-prod',
    'order' => 6,
    'title' => 'Visual regression y a11y',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Screenshots, axe y best practices.',
    'concepts' => 
    array (
      0 => 'visual',
      1 => 'axe',
      2 => 'flaky',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Visual',
        'body' => 'expect(page).toHaveScreenshot() — detect UI regressions.',
        'code' => 'console.log(\'Practica: pl-prod\');',
      ),
      1 => 
      array (
        'heading' => 'a11y',
        'body' => '@axe-core/playwright — inject axe scan per page.',
        'code' => 'console.log(\'Practica: pl-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Flaky test fix?',
        'options' => 
        array (
          0 => 'Proper waits, isolate, no shared state',
          1 => 'Delete test',
          2 => 'sleep 10s always',
        ),
        'answer' => 'Proper waits, isolate, no shared state',
        'explanation' => 'Playwright auto-wait first.',
        'pro_tip' => 'Quarantine flaky until fixed.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿axe-playwright?',
        'options' => 
        array (
          0 => 'Automated a11y in E2E',
          1 => 'Payment test',
          2 => 'Load test',
        ),
        'answer' => 'Automated a11y in E2E',
        'explanation' => 'Curso accesibilidad complementa.',
        'pro_tip' => 'Critical flows E2E + a11y scan.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'playwright-e2e-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Playwright E2E.',
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
        'body' => 'Aplica lo aprendido en Playwright E2E a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'playwright-e2e-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Playwright E2E.',
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
        'body' => 'Aplica lo aprendido en Playwright E2E a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
