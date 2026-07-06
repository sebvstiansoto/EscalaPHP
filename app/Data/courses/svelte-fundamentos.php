<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'sv-intro',
    'order' => 1,
    'title' => 'Introducción a Svelte',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Compilador, no virtual DOM.',
    'concepts' => 
    array (
      0 => 'svelte',
      1 => 'compiler',
      2 => 'reactivity',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Svelte',
        'body' => '**Svelte** compila components a JS vanilla optimizado — sin runtime pesado — reactividad $: y stores.',
        'code' => 'console.log(\'Practica: sv-intro\');',
      ),
      1 => 
      array (
        'heading' => 'SvelteKit',
        'body' => 'Meta-framework — routing, SSR, adapters Vercel/Node — como Next/Nuxt.',
        'code' => 'console.log(\'Practica: sv-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Svelte vs React runtime?',
        'options' => 
        array (
          0 => 'Svelte compile-time; React runtime VDOM',
          1 => 'Igual',
          2 => 'Svelte slower',
        ),
        'answer' => 'Svelte compile-time; React runtime VDOM',
        'explanation' => 'Bundle size often smaller.',
        'pro_tip' => 'npm create svelte@latest',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Archivo componente?',
        'options' => 
        array (
          0 => '.svelte',
          1 => '.tsx',
          2 => '.vue only',
        ),
        'answer' => '.svelte',
        'explanation' => 'HTML+CSS+JS single file.',
        'pro_tip' => 'Compare Vue SFC curso.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'sv-components',
    'order' => 2,
    'title' => 'Reactivity y props',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'let, $: reactive statements.',
    'concepts' => 
    array (
      0 => 'props',
      1 => 'reactive',
      2 => 'bind',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Reactivity',
        'body' => 'let count = 0; function inc() { count += 1 } — assignment triggers update.',
        'code' => '<script>
  export let name;
  let count = 0;
  $: doubled = count * 2;
</script>',
      ),
      1 => 
      array (
        'heading' => 'bind:',
        'body' => 'bind:value input two-way — simpler than React controlled.',
        'code' => 'export let title;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿$: statement?',
        'options' => 
        array (
          0 => 'Reactive declaration recomputes',
          1 => 'Comment',
          2 => 'Import',
        ),
        'answer' => 'Reactive declaration recomputes',
        'explanation' => 'Runs when deps change.',
        'pro_tip' => '$: { side effect block }',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe export let props',
        'must_contain' => 
        array (
          0 => 'export let',
        ),
        'hint' => 'export let title;',
        'explanation' => 'Component props Svelte.',
        'pro_tip' => '$$props $$restProps advanced.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'sv-stores',
    'order' => 3,
    'title' => 'Stores',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'writable, derived, custom.',
    'concepts' => 
    array (
      0 => 'store',
      1 => 'writable',
      2 => 'derived',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stores',
        'body' => 'import { writable } from "svelte/store"; export const user = writable(null);',
        'code' => 'console.log(\'Practica: sv-stores\');',
      ),
      1 => 
      array (
        'heading' => 'Auto-subscribe',
        'body' => '$user in template — subscribe/unsubscribe automatic.',
        'code' => 'console.log(\'Practica: sv-stores\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿$store syntax?',
        'options' => 
        array (
          0 => 'Auto subscribe template',
          1 => 'jQuery',
          2 => 'CSS variable',
        ),
        'answer' => 'Auto subscribe template',
        'explanation' => 'Prefix $ store value.',
        'pro_tip' => 'derived stores computed.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿writable vs readable?',
        'options' => 
        array (
          0 => 'writable set/update; readable read-only',
          1 => 'Igual',
          2 => 'writable read-only',
        ),
        'answer' => 'writable set/update; readable read-only',
        'explanation' => 'Store types.',
        'pro_tip' => 'Compare Pinia Vue curso.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'sv-routing',
    'order' => 4,
    'title' => 'SvelteKit routing',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'File routing, load functions.',
    'concepts' => 
    array (
      0 => 'sveltekit',
      1 => 'load',
      2 => '+page',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Routes',
        'body' => 'src/routes/blog/[slug]/+page.svelte — params en load function.',
        'code' => 'console.log(\'Practica: sv-routing\');',
      ),
      1 => 
      array (
        'heading' => '+page.server.ts',
        'body' => 'export load — fetch BD server-only secrets safe.',
        'code' => 'console.log(\'Practica: sv-routing\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿+page.server.ts?',
        'options' => 
        array (
          0 => 'Server-only load data',
          1 => 'Client only',
          2 => 'CSS file',
        ),
        'answer' => 'Server-only load data',
        'explanation' => 'Like Next server components data.',
        'pro_tip' => 'Curso Next.js compare.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Dynamic route folder?',
        'options' => 
        array (
          0 => '[slug]',
          1 => ':slug',
          2 => '{slug}',
        ),
        'answer' => '[slug]',
        'explanation' => 'SvelteKit convention.',
        'pro_tip' => '+layout.svelte shared layout.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'sv-api',
    'order' => 5,
    'title' => 'Forms y API routes',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => '+server.ts, actions, progressive enhancement.',
    'concepts' => 
    array (
      0 => 'form',
      1 => 'action',
      2 => 'server',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Form actions',
        'body' => 'export actions = { default: async ({ request }) => { } } — works without JS.',
        'code' => 'console.log(\'Practica: sv-api\');',
      ),
      1 => 
      array (
        'heading' => '+server.ts',
        'body' => 'export GET/POST — API endpoints SvelteKit.',
        'code' => 'console.log(\'Practica: sv-api\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Progressive enhancement forms?',
        'options' => 
        array (
          0 => 'Work without JS enabled',
          1 => 'JS required always',
          2 => 'No forms',
        ),
        'answer' => 'Work without JS enabled',
        'explanation' => 'SvelteKit design goal.',
        'pro_tip' => 'use:enhance client UX.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿+server.ts GET?',
        'options' => 
        array (
          0 => 'export function GET()',
          1 => 'app.get Express',
          2 => 'PHP route',
        ),
        'answer' => 'export function GET()',
        'explanation' => 'HTTP method exports.',
        'pro_tip' => 'json() helper Response.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'sv-prod',
    'order' => 6,
    'title' => 'Build y deploy SvelteKit',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Adapters, SSR y performance.',
    'concepts' => 
    array (
      0 => 'adapter',
      1 => 'ssr',
      2 => 'deploy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Adapters',
        'body' => '@sveltejs/adapter-node, adapter-vercel — output target platform.',
        'code' => 'console.log(\'Practica: sv-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Performance',
        'body' => 'Minimal JS shipped — compiler removes unused — great Lighthouse scores.',
        'code' => 'console.log(\'Practica: sv-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿adapter-static?',
        'options' => 
        array (
          0 => 'SSG prerender all pages',
          1 => 'SSR Node only',
          2 => 'Database',
        ),
        'answer' => 'SSG prerender all pages',
        'explanation' => 'Jamstack sites.',
        'pro_tip' => 'Compare Astro curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿npm run build SvelteKit?',
        'options' => 
        array (
          0 => 'vite build + adapter output',
          1 => 'php artisan',
          2 => 'go build',
        ),
        'answer' => 'vite build + adapter output',
        'explanation' => 'Vite under hood.',
        'pro_tip' => 'Preview adapter-node locally.',
      ),
    ),
  ),
);
