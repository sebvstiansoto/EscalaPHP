<?php

declare(strict_types=1);

return [
    ['slug' => 'a11y-intro', 'order' => 1, 'title' => 'Accesibilidad web (a11y)', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'WCAG, inclusión y legal.', 'concepts' => ['a11y', 'wcag', 'inclusion'], 'sections' => [
        ['heading' => 'a11y', 'body' => '**Accesibilidad** — 15%+ usuarios con discapacidad. WCAG 2.2 AA es estándar legal EU/US muchos casos.'],
        ['heading' => 'Beneficios', 'body' => 'Mejor SEO, UX móvil, teclado power users — no solo "checkbox legal".'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿WCAG significa...?', 'options' => ['Web Content Accessibility Guidelines', 'Web CSS Angular Guide', 'Without CSS'], 'answer' => 'Web Content Accessibility Guidelines', 'explanation' => 'W3C standard.', 'pro_tip' => 'POUR: Perceivable, Operable, Understandable, Robust.'],
        ['type' => 'choice', 'question' => '¿Nivel AA?', 'options' => ['Estándar legal/industry target', 'Mínimo opcional', 'Solo gobierno'], 'answer' => 'Estándar legal/industry target', 'explanation' => 'AAA más estricto raro full site.', 'pro_tip' => 'Automated tests catch ~30% issues.'],
    ]],
    ['slug' => 'a11y-html', 'order' => 2, 'title' => 'HTML semántico', 'level' => 'Fundamentos', 'minutes' => 30, 'summary' => 'Landmarks, headings y forms.', 'concepts' => ['semantic', 'landmark', 'heading'], 'sections' => [
        ['heading' => 'Semántica', 'body' => '<main>, <nav>, <header>, <article> — screen readers navegan por landmarks.'],
        ['heading' => 'Headings', 'body' => 'h1→h2→h3 sin saltos — outline lógico documento.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Botón vs div onclick?', 'options' => ['<button> keyboard focusable nativo', 'div siempre mejor', 'Sin diferencia'], 'answer' => '<button> keyboard focusable nativo', 'explanation' => 'Role y keyboard built-in.', 'pro_tip' => 'Curso html-css-js base.'],
        ['type' => 'choice', 'question' => '¿label for input?', 'options' => ['Asocia texto clickeable campo', 'Solo decoración', 'CSS only'], 'answer' => 'Asocia texto clickeable campo', 'explanation' => '<label for="email">', 'pro_tip' => 'Placeholder ≠ label.'],
    ]],
    ['slug' => 'a11y-aria', 'order' => 3, 'title' => 'ARIA cuando necesario', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Roles, states y live regions.', 'concepts' => ['aria', 'role', 'live'], 'sections' => [
        ['heading' => 'ARIA', 'body' => 'First rule: no ARIA if native HTML works. aria-label, aria-expanded, role="dialog".'],
        ['heading' => 'Live regions', 'body' => 'aria-live="polite" — anuncia cambios dynamic content screen readers.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿ARIA first rule?', 'options' => ['No usar si HTML nativo basta', 'Siempre ARIA todo', 'Sin ARIA nunca'], 'answer' => 'No usar si HTML nativo basta', 'explanation' => 'Native > ARIA.', 'pro_tip' => 'aria-hidden oculta decorativo.'],
        ['type' => 'choice', 'question' => '¿Modal accesible?', 'options' => ['role=dialog, focus trap, Esc close', 'div sin focus', 'alert only'], 'answer' => 'role=dialog, focus trap, Esc close', 'explanation' => 'Focus management crítico.', 'pro_tip' => 'React focus-trap libraries.'],
    ]],
    ['slug' => 'a11y-keyboard', 'order' => 4, 'title' => 'Navegación teclado', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Focus, tab order y skip links.', 'concepts' => ['keyboard', 'focus', 'tabindex'], 'sections' => [
        ['heading' => 'Keyboard', 'body' => 'Todo interactivo alcanzable Tab — visible focus ring — no outline:none sin reemplazo.'],
        ['heading' => 'Skip link', 'body' => '<a href="#main" class="skip">Saltar al contenido</a> — first tab item.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿tabindex=0?', 'options' => ['Natural tab order', 'Remove from tab', 'First always'], 'answer' => 'Natural tab order', 'explanation' => 'tabindex=-1 programmatic focus only.', 'pro_tip' => 'Avoid positive tabindex.'],
        ['type' => 'choice', 'question' => '¿Focus visible?', 'options' => ['Indicador claro elemento activo', 'Sin indicador moderno', 'Solo mouse'], 'answer' => 'Indicador claro elemento activo', 'explanation' => ':focus-visible CSS.', 'pro_tip' => 'Test solo teclado 5 min.'],
    ]],
    ['slug' => 'a11y-test', 'order' => 5, 'title' => 'Testing accesibilidad', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'axe, Lighthouse y screen readers.', 'concepts' => ['axe', 'lighthouse', 'screenreader'], 'sections' => [
        ['heading' => 'Automated', 'body' => 'axe-core, eslint-plugin-jsx-a11y, Lighthouse accessibility audit.'],
        ['heading' => 'Manual', 'body' => 'NVDA/VoiceOver — navega ojos cerrados 10 min — encuentra bugs reales.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿axe DevTools?', 'options' => ['Browser extension a11y scan', 'Video editor', 'Database'], 'answer' => 'Browser extension a11y scan', 'explanation' => 'CI @axe-core/playwright.', 'pro_tip' => 'Curso Playwright e2e a11y.'],
        ['type' => 'choice', 'question' => '¿Color contrast ratio AA?', 'options' => ['4.5:1 texto normal', '1:1 enough', 'Solo bold'], 'answer' => '4.5:1 texto normal', 'explanation' => '3:1 large text.', 'pro_tip' => 'WebAIM contrast checker.'],
    ]],
    ['slug' => 'a11y-prod', 'order' => 6, 'title' => 'a11y en design systems', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Componentes accesibles y procesos.', 'concepts' => ['design-system', 'process', 'vpats'], 'sections' => [
        ['heading' => 'Design system', 'body' => 'Radix, Headless UI, MUI — primitives accesibles — no reinventar focus trap.'],
        ['heading' => 'Process', 'body' => 'a11y acceptance criteria en tickets — shift-left no audit final only.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Radix/shadcn ventaja?', 'options' => ['WAI-ARIA patterns built-in', 'Sin a11y', 'Solo CSS'], 'answer' => 'WAI-ARIA patterns built-in', 'explanation' => 'Composable accessible.', 'pro_tip' => 'Tailwind curso styling layer.'],
        ['type' => 'choice', 'question' => '¿Accessibility statement?', 'options' => ['Página pública compromiso y contacto', 'Secreto legal', 'Solo PDF'], 'answer' => 'Página pública compromiso y contacto', 'explanation' => 'EU requirement many sites.', 'pro_tip' => 'User testing disabled users gold.'],
    ]],
];
