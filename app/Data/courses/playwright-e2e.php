<?php

declare(strict_types=1);

return [
    ['slug' => 'pl-intro', 'order' => 1, 'title' => 'Playwright E2E', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Testing browser moderno.', 'concepts' => ['playwright', 'e2e', 'testing'], 'sections' => [
        ['heading' => 'Playwright', 'body' => '**Microsoft Playwright** — E2E tests Chrome/Firefox/WebKit — auto-wait, traces, parallel.'],
        ['heading' => 'vs Selenium', 'body' => 'Auto-wait elements, network intercept, faster reliable — modern default.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿E2E test?', 'options' => ['Simula usuario real browser', 'Unit function only', 'SQL query'], 'answer' => 'Simula usuario real browser', 'explanation' => 'Highest confidence slowest.', 'pro_tip' => 'Curso testing PHP pyramid.'],
        ['type' => 'choice', 'question' => '¿Init Playwright?', 'options' => ['npm init playwright@latest', 'phpunit', 'docker only'], 'answer' => 'npm init playwright@latest', 'explanation' => 'Scaffolds tests config.', 'pro_tip' => 'TypeScript recommended.'],
    ]],
    ['slug' => 'pl-selectors', 'order' => 2, 'title' => 'Locators y assertions', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'getByRole, getByText, expect.', 'concepts' => ['locator', 'role', 'expect'], 'sections' => [
        ['heading' => 'Locators', 'body' => 'page.getByRole("button", { name: "Submit" }) — prefer accessible selectors.', 'code' => "await page.goto('https://example.com');\nawait page.getByLabel('Email').fill('a@test.com');\nawait expect(page.getByText('Welcome')).toBeVisible();"],
        ['heading' => 'Auto-wait', 'body' => 'Playwright retries until timeout — menos flaky que sleep manual.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Mejor selector a11y?', 'options' => ['getByRole/getByLabel', 'CSS .btn-xyz only', 'XPath always'], 'answer' => 'getByRole/getByLabel', 'explanation' => 'Resilient user-facing.', 'pro_tip' => 'Curso accesibilidad alinea.'],
        ['type' => 'contains', 'question' => 'Escribe getByRole button', 'must_contain' => ['getByRole'], 'hint' => "page.getByRole('button')", 'explanation' => 'Semantic locator.', 'pro_tip' => 'data-testid last resort.'],
    ]],
    ['slug' => 'pl-fixtures', 'order' => 3, 'title' => 'Fixtures y Page Objects', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'test.extend, auth state.', 'concepts' => ['fixture', 'page-object', 'auth'], 'sections' => [
        ['heading' => 'Fixtures', 'body' => 'test.extend<{ loginPage: LoginPage }> — setup reusable per test.'],
        ['heading' => 'Storage state', 'body' => 'globalSetup login once → save storageState.json — reuse auth tests.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿storageState?', 'options' => ['Reuse cookies/localStorage logged in', 'Database dump', 'Screenshot'], 'answer' => 'Reuse cookies/localStorage logged in', 'explanation' => 'Speed E2E suite.', 'pro_tip' => 'Separate auth setup project.'],
        ['type' => 'choice', 'question' => '¿Page Object pattern?', 'options' => ['Encapsula page interactions class', 'Copy paste selectors', 'No abstraction'], 'answer' => 'Encapsula page interactions class', 'explanation' => 'Maintainable when UI changes.', 'pro_tip' => 'One class per page/flow.'],
    ]],
    ['slug' => 'pl-api', 'order' => 4, 'title' => 'API testing y mocking', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'request context, route intercept.', 'concepts' => ['api', 'mock', 'intercept'], 'sections' => [
        ['heading' => 'API', 'body' => 'request.post("/api/login", { data: { email, pass } }) — test API without UI.'],
        ['heading' => 'route.fulfill', 'body' => 'Mock API responses — test edge cases sin backend real.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿page.route intercept?', 'options' => ['Mock/modify network requests', 'CSS route', 'Server nginx'], 'answer' => 'Mock/modify network requests', 'explanation' => 'Test error states deterministic.', 'pro_tip' => 'HAR record replay debug.'],
        ['type' => 'choice', 'question' => '¿API vs E2E balance?', 'options' => ['API fast setup; E2E critical paths', 'Only E2E all', 'No tests'], 'answer' => 'API fast setup; E2E critical paths', 'explanation' => 'Testing pyramid.', 'pro_tip' => 'Curso testing PHP unit base.'],
    ]],
    ['slug' => 'pl-ci', 'order' => 5, 'title' => 'CI y parallelización', 'level' => 'Práctica', 'minutes' => 30, 'summary' => 'GitHub Actions, sharding, traces.', 'concepts' => ['ci', 'shard', 'trace'], 'sections' => [
        ['heading' => 'CI', 'body' => 'npx playwright test --shard=1/4 — split tests parallel jobs.'],
        ['heading' => 'Traces', 'body' => 'trace on-first-retry — Playwright Trace Viewer debug failures.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Trace viewer?', 'options' => ['Timeline screenshots network replay', 'Video only', 'Git log'], 'answer' => 'Timeline screenshots network replay', 'explanation' => 'Debug flaky CI failures.', 'pro_tip' => 'Curso cicd integrate.'],
        ['type' => 'choice', 'question' => '¿Headless CI?', 'options' => ['Sin UI más rápido servers', 'Requires monitor', 'Windows only'], 'answer' => 'Sin UI más rápido servers', 'explanation' => 'headed local debug.', 'pro_tip' => 'playwright install --with-deps CI.'],
    ]],
    ['slug' => 'pl-prod', 'order' => 6, 'title' => 'Visual regression y a11y', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Screenshots, axe y best practices.', 'concepts' => ['visual', 'axe', 'flaky'], 'sections' => [
        ['heading' => 'Visual', 'body' => 'expect(page).toHaveScreenshot() — detect UI regressions.'],
        ['heading' => 'a11y', 'body' => '@axe-core/playwright — inject axe scan per page.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Flaky test fix?', 'options' => ['Proper waits, isolate, no shared state', 'Delete test', 'sleep 10s always'], 'answer' => 'Proper waits, isolate, no shared state', 'explanation' => 'Playwright auto-wait first.', 'pro_tip' => 'Quarantine flaky until fixed.'],
        ['type' => 'choice', 'question' => '¿axe-playwright?', 'options' => ['Automated a11y in E2E', 'Payment test', 'Load test'], 'answer' => 'Automated a11y in E2E', 'explanation' => 'Curso accesibilidad complementa.', 'pro_tip' => 'Critical flows E2E + a11y scan.'],
    ]],
];
