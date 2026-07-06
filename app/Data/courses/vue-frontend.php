<?php

declare(strict_types=1);

return [
    [
        'slug' => 'vu-intro',
        'order' => 1,
        'title' => 'Introducción a Vue 3',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Progresivo, Composition API y SFC.',
        'concepts' => ['vue', 'sfc', 'reactivity'],
        'sections' => [
            ['heading' => 'Vue.js', 'body' => '**Vue 3** es progresivo: añades interactividad a HTML existente o SPA completa. Composition API es el estándar moderno.'],
            ['heading' => 'SFC', 'body' => '.vue = template + script + style en un archivo.', 'code' => "<script setup>\nimport { ref } from 'vue'\nconst count = ref(0)\n</script>\n<template><button @click=\"count++\">{{ count }}</button></template>"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Vue 3 API recomendada?', 'options' => ['Composition API', 'Options API only', 'Class components only'], 'answer' => 'Composition API', 'explanation' => 'script setup + composables.', 'pro_tip' => 'create-vue scaffolding oficial.'],
            ['type' => 'choice', 'question' => '¿ref() sirve para...?', 'options' => ['Estado reactivo primitivo', 'Solo rutas', 'CSS'], 'answer' => 'Estado reactivo primitivo', 'explanation' => 'Reactive wrapper — .value en script.', 'pro_tip' => 'reactive() para objetos.'],
        ],
    ],
    [
        'slug' => 'vu-composition',
        'order' => 2,
        'title' => 'Composition API profunda',
        'level' => 'Fundamentos',
        'minutes' => 35,
        'summary' => 'computed, watch y composables.',
        'concepts' => ['computed', 'watch', 'composable'],
        'sections' => [
            ['heading' => 'computed', 'body' => 'const fullName = computed(() => first.value + " " + last.value) — cache automático.'],
            ['heading' => 'Composables', 'body' => 'function useFetch(url) { ... return { data, error } } — lógica reutilizable como hooks React.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿computed vs método en template?', 'options' => ['computed cachea hasta deps cambien', 'Siempre recalcula', 'No usable en template'], 'answer' => 'computed cachea hasta deps cambien', 'explanation' => 'Performance en templates complejos.', 'pro_tip' => 'watch para side effects async.'],
            ['type' => 'contains', 'question' => 'Escribe import { ref } from vue', 'must_contain' => ['ref', 'vue'], 'hint' => "import { ref } from 'vue'", 'explanation' => 'Import core reactivity.', 'pro_tip' => 'onMounted para fetch inicial.'],
        ],
    ],
    [
        'slug' => 'vu-router',
        'order' => 3,
        'title' => 'Vue Router',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Rutas, guards y lazy loading.',
        'concepts' => ['vue-router', 'guard', 'lazy'],
        'sections' => [
            ['heading' => 'Rutas', 'body' => '{ path: "/users/:id", component: UserView } — router-view renderiza componente activo.'],
            ['heading' => 'Navigation guards', 'body' => 'beforeEach — redirige si no autenticado, como middleware Next.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Componente muestra ruta activa?', 'options' => ['<router-view />', '<Outlet />', '<div id="app">'], 'answer' => '<router-view />', 'explanation' => 'Placeholder dinámico.', 'pro_tip' => 'router-link para navegación SPA.'],
            ['type' => 'choice', 'question' => '¿Lazy route?', 'options' => ['() => import("./Page.vue")', 'require always', 'fetch HTML'], 'answer' => '() => import("./Page.vue")', 'explanation' => 'Code splitting por ruta.', 'pro_tip' => 'Igual concepto que React.lazy.'],
        ],
    ],
    [
        'slug' => 'vu-pinia',
        'order' => 4,
        'title' => 'Pinia — state management',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Stores, actions y persistencia.',
        'concepts' => ['pinia', 'store', 'action'],
        'sections' => [
            ['heading' => 'Pinia', 'body' => 'Reemplazo oficial de Vuex — stores tipados, DevTools, sin mutations boilerplate.', 'code' => "export const useUserStore = defineStore('user', () => {\n  const name = ref('')\n  function login(n) { name.value = n }\n  return { name, login }\n})"],
            ['heading' => 'Actions async', 'body' => 'await api.login() dentro de action — maneja loading/error en store.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿State global Vue 3 oficial?', 'options' => ['Pinia', 'Redux', 'Vuex only forever'], 'answer' => 'Pinia', 'explanation' => 'Recomendado por equipo Vue.', 'pro_tip' => 'Un store por dominio: user, cart.'],
            ['type' => 'choice', 'question' => '¿Usar store en componente?', 'options' => ['const store = useUserStore()', 'Vuex.commit only', 'window.store'], 'answer' => 'const store = useUserStore()', 'explanation' => 'Composable pattern.', 'pro_tip' => 'storeToRefs para destructuring reactivo.'],
        ],
    ],
    [
        'slug' => 'vu-api',
        'order' => 5,
        'title' => 'Consumir APIs',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'fetch, axios y manejo de errores.',
        'concepts' => ['fetch', 'axios', 'loading'],
        'sections' => [
            ['heading' => 'fetch en composable', 'body' => 'useFetch pattern — loading, data, error refs centralizados.'],
            ['heading' => 'Axios', 'body' => 'Interceptors para JWT — Authorization header en cada request.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Interceptor axios útil para...?', 'options' => ['Inyectar token JWT', 'Compilar Vue', 'CSS'], 'answer' => 'Inyectar token JWT', 'explanation' => 'DRY en auth headers.', 'pro_tip' => '401 interceptor → logout redirect.'],
            ['type' => 'choice', 'question' => '¿Evitar fetch en onMounted duplicado?', 'options' => ['Composable useApi reutilizable', 'Copy paste', 'Solo Pinia'], 'answer' => 'Composable useApi reutilizable', 'explanation' => 'DRY across components.', 'pro_tip' => 'TanStack Query también funciona con Vue.'],
        ],
    ],
    [
        'slug' => 'vu-prod',
        'order' => 6,
        'title' => 'Build y Nuxt',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Vite, SSR con Nuxt y deploy.',
        'concepts' => ['vite', 'nuxt', 'ssr'],
        'sections' => [
            ['heading' => 'Vite', 'body' => 'npm run build → dist/ — HMR ultrarrápido en dev.'],
            ['heading' => 'Nuxt', 'body' => 'Meta-framework Vue — SSR, file routing, server routes como Next.js.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Nuxt es a Vue como...?', 'options' => ['Next.js a React', 'Laravel a PHP only server', 'Docker a Linux'], 'answer' => 'Next.js a React', 'explanation' => 'Full-stack Vue framework.', 'pro_tip' => 'Nuxt 3 usa Nitro server.'],
            ['type' => 'choice', 'question' => '¿Bundler default Vue 3?', 'options' => ['Vite', 'Webpack only', 'Rollup only manual'], 'answer' => 'Vite', 'explanation' => 'create-vue usa Vite.', 'pro_tip' => 'Compare con curso Next.js SSR.'],
        ],
    ],
];
