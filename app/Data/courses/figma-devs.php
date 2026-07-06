<?php

declare(strict_types=1);

return [
    ['slug' => 'fg-intro', 'order' => 1, 'title' => 'Figma para developers', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Design-dev workflow.', 'concepts' => ['figma', 'design', 'handoff'], 'sections' => [
        ['heading' => 'Figma', 'body' => 'Herramienta **diseño UI** colaborativa — devs leen specs, exportan assets, implementan design systems.'],
        ['heading' => 'Dev Mode', 'body' => 'Figma Dev Mode — CSS, medidas, tokens, component props para implementación.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Dev Mode sirve para...?', 'options' => ['Inspeccionar specs implementación', 'Escribir PHP', 'Deploy'], 'answer' => 'Inspeccionar specs implementación', 'explanation' => 'Handoff designer→dev.', 'pro_tip' => 'Plugins codegen Tailwind.'],
        ['type' => 'choice', 'question' => '¿Auto-layout Figma?', 'options' => ['Similar Flexbox', 'Database layout', 'SQL'], 'answer' => 'Similar Flexbox', 'explanation' => 'Predict responsive behavior.', 'pro_tip' => 'Curso Tailwind maps well.'],
    ]],
    ['slug' => 'fg-tokens', 'order' => 2, 'title' => 'Design tokens', 'level' => 'Fundamentos', 'minutes' => 30, 'summary' => 'Colors, spacing, typography.', 'concepts' => ['token', 'variable', 'theme'], 'sections' => [
        ['heading' => 'Tokens', 'body' => 'Variables Figma — color/primary, spacing/md — sync código via Style Dictionary o Tokens Studio.'],
        ['heading' => 'Consistencia', 'body' => 'Single source truth — cambio token → update design + CSS/Tailwind.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Design token?', 'options' => ['Valor semántico reusable (brand-color)', 'Random hex only', 'SQL column'], 'answer' => 'Valor semántico reusable (brand-color)', 'explanation' => 'Abstrae raw values.', 'pro_tip' => 'Tailwind theme.extend tokens.'],
        ['type' => 'choice', 'question' => '¿8px grid system?', 'options' => ['Spacing múltiplos 8 consistencia', '8 colors only', '8 fonts'], 'answer' => 'Spacing múltiplos 8 consistencia', 'explanation' => 'Industry standard rhythm.', 'pro_tip' => 'Match dev rem/em scale.'],
    ]],
    ['slug' => 'fg-handoff', 'order' => 3, 'title' => 'Handoff e inspección', 'level' => 'Práctica', 'minutes' => 30, 'summary' => 'Medidas, assets y export.', 'concepts' => ['inspect', 'export', 'svg'], 'sections' => [
        ['heading' => 'Inspect', 'body' => 'Click elemento → padding, margin, font-size, colors — copy CSS/Tailwind/iOS.'],
        ['heading' => 'Export', 'body' => 'SVG icons, PNG @2x/@3x — naming convention assets/.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Icons export format?', 'options' => ['SVG preferido web', 'BMP always', 'Word doc'], 'answer' => 'SVG preferido web', 'explanation' => 'Scalable crisp.', 'pro_tip' => 'SVGO optimize size.'],
        ['type' => 'choice', 'question' => '¿Redlines?', 'options' => ['Anotaciones medidas diseño', 'Red CSS', 'Error logs'], 'answer' => 'Anotaciones medidas diseño', 'explanation' => 'Dev Mode replaces many.', 'pro_tip' => 'Ask designer not guess spacing.'],
    ]],
    ['slug' => 'fg-components', 'order' => 4, 'title' => 'Components y variants', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Map to React/Vue components.', 'concepts' => ['component', 'variant', 'prop'], 'sections' => [
        ['heading' => 'Components', 'body' => 'Button component variants: primary/secondary/disabled — maps React props.'],
        ['heading' => 'Naming', 'body' => 'Align Figma component names code — Button/Primary ↔ <Button variant="primary">'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Variant property Figma?', 'options' => ['Switch visual states component', 'Git branch', 'Database'], 'answer' => 'Switch visual states component', 'explanation' => 'Like Storybook controls.', 'pro_tip' => 'Curso React components.'],
        ['type' => 'choice', 'question' => '¿1:1 Figma to code?', 'options' => ['Ideal pero pragmatismo — tokens > pixels', 'Pixel perfect always mandatory', 'Never look design'], 'answer' => 'Ideal pero pragmatismo — tokens > pixels', 'explanation' => 'Communicate discrepancies.', 'pro_tip' => 'Responsive may differ mobile.'],
    ]],
    ['slug' => 'fg-prototype', 'order' => 5, 'title' => 'Prototipos y user flows', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Interactions antes de code.', 'concepts' => ['prototype', 'flow', 'interaction'], 'sections' => [
        ['heading' => 'Prototype', 'body' => 'Connect frames — click → navigate — validate UX before sprint.'],
        ['heading' => 'Dev value', 'body' => 'Understand estados empty/loading/error diseñados — no improvisar UI.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Prototype antes code?', 'options' => ['Valida UX barato', 'Waste time always', 'Illegal agile'], 'answer' => 'Valida UX barato', 'explanation' => 'Catch issues early.', 'pro_tip' => 'Curso agile user stories.'],
        ['type' => 'choice', 'question' => '¿Loading state en design?', 'options' => ['Dev debe implementar — ask if missing', 'Skip always', 'Only backend'], 'answer' => 'Dev debe implementar — ask if missing', 'explanation' => 'All states designed.', 'pro_tip' => 'Skeleton screens pattern.'],
    ]],
    ['slug' => 'fg-prod', 'order' => 6, 'title' => 'Design systems en equipo', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Storybook, Figma libraries, sync.', 'concepts' => ['storybook', 'library', 'sync'], 'sections' => [
        ['heading' => 'Design system', 'body' => 'Figma library shared + Storybook code — documentación componentes viva.'],
        ['heading' => 'Workflow', 'body' => 'Designer updates library → dev reviews → implement Storybook → app uses.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Storybook?', 'options' => ['Catálogo componentes UI aislados', 'Novel writing', 'Database'], 'answer' => 'Catálogo componentes UI aislados', 'explanation' => 'Dev + design QA.', 'pro_tip' => 'Chromatic visual regression.'],
        ['type' => 'choice', 'question' => '¿Figma Code Connect?', 'options' => ['Link design components código real', 'Compile PHP', 'Deploy AWS'], 'answer' => 'Link design components código real', 'explanation' => 'Design-dev single truth emerging.', 'pro_tip' => 'Document in README design links.'],
    ]],
];
