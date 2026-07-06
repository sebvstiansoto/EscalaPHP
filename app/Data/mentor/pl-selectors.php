<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Locators y assertions',
    'body' => 'getByRole, getByText, expect. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎭',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [locator](/glosario#locator) · [role](/glosario#role) · [expect()](/glosario#expect)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Locators',
    'body' => 'page.getByRole("button", { name: "Submit" }) — prefer accessible selectors.',
    'code' => 'await page.goto(\'https://example.com\');
await page.getByLabel(\'Email\').fill(\'a@test.com\');
await expect(page.getByText(\'Welcome\')).toBeVisible();',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Auto-wait',
    'body' => 'Playwright retries until timeout — menos flaky que sleep manual.',
    'code' => 'page.getByRole(\'button\')',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** getByRole, getByText, expect. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Playwright E2E**, esto aparece en code reviews, incidentes y entregas diarias. getByRole, getByText, expect. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'await page.goto(\'https://example.com\');
await page.getByLabel(\'Email\').fill(\'a@test.com\');
await expect(page.getByText(\'Welcome\')).toBeVisible();',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'await page.goto(\'https://example.com\');',
      1 => 'await page.getByLabel(\'Email\').fill(\'a@test.com\');',
      2 => 'await expect(page.getByText(\'Welcome\')).toBeVisible();',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso accesibilidad alinea.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Mejor selector a11y?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe getByRole button** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  11 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  12 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
