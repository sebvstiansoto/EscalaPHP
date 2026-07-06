<?php

declare(strict_types=1);

return [
    ['slug' => 'sv-intro', 'order' => 1, 'title' => 'Introducción a Svelte', 'level' => 'Fundamentos', 'minutes' => 25, 'summary' => 'Compilador, no virtual DOM.', 'concepts' => ['svelte', 'compiler', 'reactivity'], 'sections' => [
        ['heading' => 'Svelte', 'body' => '**Svelte** compila components a JS vanilla optimizado — sin runtime pesado — reactividad $: y stores.'],
        ['heading' => 'SvelteKit', 'body' => 'Meta-framework — routing, SSR, adapters Vercel/Node — como Next/Nuxt.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Svelte vs React runtime?', 'options' => ['Svelte compile-time; React runtime VDOM', 'Igual', 'Svelte slower'], 'answer' => 'Svelte compile-time; React runtime VDOM', 'explanation' => 'Bundle size often smaller.', 'pro_tip' => 'npm create svelte@latest'],
        ['type' => 'choice', 'question' => '¿Archivo componente?', 'options' => ['.svelte', '.tsx', '.vue only'], 'answer' => '.svelte', 'explanation' => 'HTML+CSS+JS single file.', 'pro_tip' => 'Compare Vue SFC curso.'],
    ]],
    ['slug' => 'sv-components', 'order' => 2, 'title' => 'Reactivity y props', 'level' => 'Fundamentos', 'minutes' => 30, 'summary' => 'let, $: reactive statements.', 'concepts' => ['props', 'reactive', 'bind'], 'sections' => [
        ['heading' => 'Reactivity', 'body' => 'let count = 0; function inc() { count += 1 } — assignment triggers update.', 'code' => "<script>\n  export let name;\n  let count = 0;\n  \$: doubled = count * 2;\n</script>"],
        ['heading' => 'bind:', 'body' => 'bind:value input two-way — simpler than React controlled.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿$: statement?', 'options' => ['Reactive declaration recomputes', 'Comment', 'Import'], 'answer' => 'Reactive declaration recomputes', 'explanation' => 'Runs when deps change.', 'pro_tip' => '$: { side effect block }'],
        ['type' => 'contains', 'question' => 'Escribe export let props', 'must_contain' => ['export let'], 'hint' => 'export let title;', 'explanation' => 'Component props Svelte.', 'pro_tip' => '$$props $$restProps advanced.'],
    ]],
    ['slug' => 'sv-stores', 'order' => 3, 'title' => 'Stores', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'writable, derived, custom.', 'concepts' => ['store', 'writable', 'derived'], 'sections' => [
        ['heading' => 'Stores', 'body' => 'import { writable } from "svelte/store"; export const user = writable(null);'],
        ['heading' => 'Auto-subscribe', 'body' => '$user in template — subscribe/unsubscribe automatic.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿$store syntax?', 'options' => ['Auto subscribe template', 'jQuery', 'CSS variable'], 'answer' => 'Auto subscribe template', 'explanation' => 'Prefix $ store value.', 'pro_tip' => 'derived stores computed.'],
        ['type' => 'choice', 'question' => '¿writable vs readable?', 'options' => ['writable set/update; readable read-only', 'Igual', 'writable read-only'], 'answer' => 'writable set/update; readable read-only', 'explanation' => 'Store types.', 'pro_tip' => 'Compare Pinia Vue curso.'],
    ]],
    ['slug' => 'sv-routing', 'order' => 4, 'title' => 'SvelteKit routing', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'File routing, load functions.', 'concepts' => ['sveltekit', 'load', '+page'], 'sections' => [
        ['heading' => 'Routes', 'body' => 'src/routes/blog/[slug]/+page.svelte — params en load function.'],
        ['heading' => '+page.server.ts', 'body' => 'export load — fetch BD server-only secrets safe.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿+page.server.ts?', 'options' => ['Server-only load data', 'Client only', 'CSS file'], 'answer' => 'Server-only load data', 'explanation' => 'Like Next server components data.', 'pro_tip' => 'Curso Next.js compare.'],
        ['type' => 'choice', 'question' => '¿Dynamic route folder?', 'options' => ['[slug]', ':slug', '{slug}'], 'answer' => '[slug]', 'explanation' => 'SvelteKit convention.', 'pro_tip' => '+layout.svelte shared layout.'],
    ]],
    ['slug' => 'sv-api', 'order' => 5, 'title' => 'Forms y API routes', 'level' => 'Práctica', 'minutes' => 35, 'summary' => '+server.ts, actions, progressive enhancement.', 'concepts' => ['form', 'action', 'server'], 'sections' => [
        ['heading' => 'Form actions', 'body' => 'export actions = { default: async ({ request }) => { } } — works without JS.'],
        ['heading' => '+server.ts', 'body' => 'export GET/POST — API endpoints SvelteKit.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Progressive enhancement forms?', 'options' => ['Work without JS enabled', 'JS required always', 'No forms'], 'answer' => 'Work without JS enabled', 'explanation' => 'SvelteKit design goal.', 'pro_tip' => 'use:enhance client UX.'],
        ['type' => 'choice', 'question' => '¿+server.ts GET?', 'options' => ['export function GET()', 'app.get Express', 'PHP route'], 'answer' => 'export function GET()', 'explanation' => 'HTTP method exports.', 'pro_tip' => 'json() helper Response.'],
    ]],
    ['slug' => 'sv-prod', 'order' => 6, 'title' => 'Build y deploy SvelteKit', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Adapters, SSR y performance.', 'concepts' => ['adapter', 'ssr', 'deploy'], 'sections' => [
        ['heading' => 'Adapters', 'body' => '@sveltejs/adapter-node, adapter-vercel — output target platform.'],
        ['heading' => 'Performance', 'body' => 'Minimal JS shipped — compiler removes unused — great Lighthouse scores.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿adapter-static?', 'options' => ['SSG prerender all pages', 'SSR Node only', 'Database'], 'answer' => 'SSG prerender all pages', 'explanation' => 'Jamstack sites.', 'pro_tip' => 'Compare Astro curso.'],
        ['type' => 'choice', 'question' => '¿npm run build SvelteKit?', 'options' => ['vite build + adapter output', 'php artisan', 'go build'], 'answer' => 'vite build + adapter output', 'explanation' => 'Vite under hood.', 'pro_tip' => 'Preview adapter-node locally.'],
    ]],
];
