<?php

declare(strict_types=1);

return [
    ['slug' => 'ptm-intro', 'order' => 1, 'title' => 'Producto tech intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'PM role en equipos software.', 'concepts' => ['product', 'pm', 'roadmap'], 'sections' => [
        ['heading' => 'Product Manager', 'body' => '**Puente** negocio-usuarios-ingeniería — define qué construir y por qué — no project manager solo fechas.'],
        ['heading' => 'Skills', 'body' => 'Discovery, prioritization, metrics, communication — technical enough trust engineers.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿PM vs Project Manager?', 'options' => ['PM what/why value; PM how/when delivery', 'Same role', 'PM codes only'], 'answer' => 'PM what/why value; PM how/when delivery', 'explanation' => 'Overlap startups.', 'pro_tip' => 'Curso agile-scrum ceremonies.'],
        ['type' => 'choice', 'question' => '¿Roadmap?', 'options' => ['Strategic themes not fixed date list', 'Gantt every task', 'Code architecture'], 'answer' => 'Strategic themes not fixed date list', 'explanation' => 'Outcome oriented flexible.', 'pro_tip' => 'Now-Next-Later format.'],
    ]],
    ['slug' => 'ptm-discovery', 'order' => 2, 'title' => 'Discovery y research', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Interviews, problem validation.', 'concepts' => ['discovery', 'interview', 'problem'], 'sections' => [
        ['heading' => 'Discovery', 'body' => 'User interviews — jobs-to-be-done — validate problem before solution — avoid build trap.'],
        ['heading' => 'Artifacts', 'body' => 'Personas lightweight — journey maps pain points — opportunity solution tree.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Solution in search of problem?', 'options' => ['Build feature nobody needs', 'Best practice', 'Agile term'], 'answer' => 'Build feature nobody needs', 'explanation' => 'Discovery prevents waste.', 'pro_tip' => 'Five whys root cause.'],
        ['type' => 'choice', 'question' => '¿JTBD framework?', 'options' => ['User hires product do job', 'Job title HR', 'Sprint task'], 'answer' => 'User hires product do job', 'explanation' => 'Outcome not demographics only.', 'pro_tip' => 'When I... I want... so I...'],
    ]],
    ['slug' => 'ptm-prioritize', 'order' => 3, 'title' => 'Priorización', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'RICE, ICE, MoSCoW.', 'concepts' => ['rice', 'prioritize', 'backlog'], 'sections' => [
        ['heading' => 'Frameworks', 'body' => 'RICE Reach Impact Confidence Effort — ICE simpler — MoSCoW Must Should Could Won\'t.'],
        ['heading' => 'Say no', 'body' => 'Backlog infinite — transparent tradeoffs stakeholders — protect team focus.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿RICE Effort high means?', 'options' => ['Lower priority score more work', 'Higher priority', 'Ignore effort'], 'answer' => 'Lower priority score more work', 'explanation' => 'Score = (R*I*C)/E.', 'pro_tip' => 'Relative not absolute hours.'],
        ['type' => 'choice', 'question' => '¿HiPPO decision?', 'options' => ['Highest Paid Person Opinion — avoid data', 'Agile role', 'Metric'], 'answer' => 'Highest Paid Person Opinion — avoid data', 'explanation' => 'Use evidence metrics.', 'pro_tip' => 'Curso data-driven culture.'],
    ]],
    ['slug' => 'ptm-metrics', 'order' => 4, 'title' => 'Métricas y experimentos', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'North star, A/B, funnel.', 'concepts' => ['north-star', 'ab-test', 'funnel'], 'sections' => [
        ['heading' => 'Metrics', 'body' => 'North Star Metric one key — supporting input metrics — vanity vs actionable DAU vs retention.'],
        ['heading' => 'A/B tests', 'body' => 'Hypothesis sample size significance — feature flags launch — avoid peeking p-hacking.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Good metric?', 'options' => ['Actionable measurable tied outcome', 'Page views only vanity', 'Lines of code'], 'answer' => 'Actionable measurable tied outcome', 'explanation' => 'Retention activation revenue.', 'pro_tip' => 'AARRR pirate metrics startup.'],
        ['type' => 'choice', 'question' => '¿Statistical significance?', 'options' => ['Enough sample unlikely random chance', 'Any difference matters', 'CEO says so'], 'answer' => 'Enough sample unlikely random chance', 'explanation' => 'p-value context not alone.', 'pro_tip' => 'Guardrail metrics harm check.'],
    ]],
    ['slug' => 'ptm-specs', 'order' => 5, 'title' => 'PRD y specs efectivos', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Write for engineers designers.', 'concepts' => ['prd', 'spec', 'acceptance'], 'sections' => [
        ['heading' => 'PRD', 'body' => 'Problem, goals, non-goals, user stories, acceptance criteria, edge cases — not micromanage implementation.'],
        ['heading' => 'Collaboration', 'body' => 'Engineers refine estimates — designers prototypes — async doc comments — curso technical-writing clarity.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Acceptance criteria?', 'options' => ['Testable conditions done', 'Vague nice UI', 'Code class names'], 'answer' => 'Testable conditions done', 'explanation' => 'Given when then format.', 'pro_tip' => 'Edge cases explicit upfront.'],
        ['type' => 'choice', 'question' => '¿Non-goals section?', 'options' => ['Scope boundaries prevent creep', 'Optional fluff', 'Delete features'], 'answer' => 'Scope boundaries prevent creep', 'explanation' => 'Clarity what NOT building.', 'pro_tip' => 'Version 1 vs later explicit.'],
    ]],
    ['slug' => 'ptm-prod', 'order' => 6, 'title' => 'Producto en startups vs enterprise', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Stakeholders, launch, iterate.', 'concepts' => ['launch', 'stakeholder', 'iterate'], 'sections' => [
        ['heading' => 'Launch', 'body' => 'Rollout plan beta internal → limited → GA — rollback criteria — comms support docs.'],
        ['heading' => 'Iterate', 'body' => 'Post-launch metrics review — kill features unused — double down winners — honest retros.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿MVP meaning?', 'options' => ['Minimum learn validate hypothesis', 'Broken product ship', 'Maximum features'], 'answer' => 'Minimum learn validate hypothesis', 'explanation' => 'Quality bar still exists.', 'pro_tip' => 'Concierge MVP manual first.'],
        ['type' => 'choice', 'question' => '¿Engineer as PM path?', 'options' => ['Technical PM or founder common transition', 'Impossible', 'Must MBA only'], 'answer' => 'Technical PM or founder common transition', 'explanation' => 'This course bridges gap.', 'pro_tip' => 'Curso system-design informs tradeoffs.'],
    ]],
];
