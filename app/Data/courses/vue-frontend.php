<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'vu-intro',
    'order' => 1,
    'title' => 'Introducción a Vue 3',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Progresivo, Composition API y SFC.',
    'concepts' => 
    array (
      0 => 'vue',
      1 => 'sfc',
      2 => 'reactivity',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Vue.js',
        'body' => '**Vue 3** es progresivo: añades interactividad a HTML existente o SPA completa. Composition API es el estándar moderno.',
        'code' => 'console.log(\'Practica: vu-intro\');',
      ),
      1 => 
      array (
        'heading' => 'SFC',
        'body' => '.vue = template + script + style en un archivo.',
        'code' => '<script setup>
import { ref } from \'vue\'
const count = ref(0)
</script>
<template><button @click="count++">{{ count }}</button></template>',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Vue 3 API recomendada?',
        'options' => 
        array (
          0 => 'Composition API',
          1 => 'Options API only',
          2 => 'Class components only',
        ),
        'answer' => 'Composition API',
        'explanation' => 'script setup + composables.',
        'pro_tip' => 'create-vue scaffolding oficial.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ref() sirve para...?',
        'options' => 
        array (
          0 => 'Estado reactivo primitivo',
          1 => 'Solo rutas',
          2 => 'CSS',
        ),
        'answer' => 'Estado reactivo primitivo',
        'explanation' => 'Reactive wrapper — .value en script.',
        'pro_tip' => 'reactive() para objetos.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'vu-composition',
    'order' => 2,
    'title' => 'Composition API profunda',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'computed, watch y composables.',
    'concepts' => 
    array (
      0 => 'computed',
      1 => 'watch',
      2 => 'composable',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'computed',
        'body' => 'const fullName = computed(() => first.value + " " + last.value) — cache automático.',
        'code' => 'import { ref } from \'vue\'',
      ),
      1 => 
      array (
        'heading' => 'Composables',
        'body' => 'function useFetch(url) { ... return { data, error } } — lógica reutilizable como hooks React.',
        'code' => 'import { ref } from \'vue\'',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿computed vs método en template?',
        'options' => 
        array (
          0 => 'computed cachea hasta deps cambien',
          1 => 'Siempre recalcula',
          2 => 'No usable en template',
        ),
        'answer' => 'computed cachea hasta deps cambien',
        'explanation' => 'Performance en templates complejos.',
        'pro_tip' => 'watch para side effects async.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe import { ref } from vue',
        'must_contain' => 
        array (
          0 => 'ref',
          1 => 'vue',
        ),
        'hint' => 'import { ref } from \'vue\'',
        'explanation' => 'Import core reactivity.',
        'pro_tip' => 'onMounted para fetch inicial.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'vu-router',
    'order' => 3,
    'title' => 'Vue Router',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Rutas, guards y lazy loading.',
    'concepts' => 
    array (
      0 => 'vue-router',
      1 => 'guard',
      2 => 'lazy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Rutas',
        'body' => '{ path: "/users/:id", component: UserView } — router-view renderiza componente activo.',
        'code' => 'console.log(\'Practica: vu-router\');',
      ),
      1 => 
      array (
        'heading' => 'Navigation guards',
        'body' => 'beforeEach — redirige si no autenticado, como middleware Next.',
        'code' => 'console.log(\'Practica: vu-router\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Componente muestra ruta activa?',
        'options' => 
        array (
          0 => '<router-view />',
          1 => '<Outlet />',
          2 => '<div id="app">',
        ),
        'answer' => '<router-view />',
        'explanation' => 'Placeholder dinámico.',
        'pro_tip' => 'router-link para navegación SPA.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Lazy route?',
        'options' => 
        array (
          0 => '() => import("./Page.vue")',
          1 => 'require always',
          2 => 'fetch HTML',
        ),
        'answer' => '() => import("./Page.vue")',
        'explanation' => 'Code splitting por ruta.',
        'pro_tip' => 'Igual concepto que React.lazy.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'vu-pinia',
    'order' => 4,
    'title' => 'Pinia — state management',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Stores, actions y persistencia.',
    'concepts' => 
    array (
      0 => 'pinia',
      1 => 'store',
      2 => 'action',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pinia',
        'body' => 'Reemplazo oficial de Vuex — stores tipados, DevTools, sin mutations boilerplate.',
        'code' => 'export const useUserStore = defineStore(\'user\', () => {
  const name = ref(\'\')
  function login(n) { name.value = n }
  return { name, login }
})',
      ),
      1 => 
      array (
        'heading' => 'Actions async',
        'body' => 'await api.login() dentro de action — maneja loading/error en store.',
        'code' => 'console.log(\'Practica: vu-pinia\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿State global Vue 3 oficial?',
        'options' => 
        array (
          0 => 'Pinia',
          1 => 'Redux',
          2 => 'Vuex only forever',
        ),
        'answer' => 'Pinia',
        'explanation' => 'Recomendado por equipo Vue.',
        'pro_tip' => 'Un store por dominio: user, cart.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Usar store en componente?',
        'options' => 
        array (
          0 => 'const store = useUserStore()',
          1 => 'Vuex.commit only',
          2 => 'window.store',
        ),
        'answer' => 'const store = useUserStore()',
        'explanation' => 'Composable pattern.',
        'pro_tip' => 'storeToRefs para destructuring reactivo.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'vu-api',
    'order' => 5,
    'title' => 'Consumir APIs',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'fetch, axios y manejo de errores.',
    'concepts' => 
    array (
      0 => 'fetch',
      1 => 'axios',
      2 => 'loading',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'fetch en composable',
        'body' => 'useFetch pattern — loading, data, error refs centralizados.',
        'code' => 'const res = await fetch(\'/api/users\');
const data = await res.json();
console.log(data);',
      ),
      1 => 
      array (
        'heading' => 'Axios',
        'body' => 'Interceptors para JWT — Authorization header en cada request.',
        'code' => 'console.log(\'Practica: vu-api\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Interceptor axios útil para...?',
        'options' => 
        array (
          0 => 'Inyectar token JWT',
          1 => 'Compilar Vue',
          2 => 'CSS',
        ),
        'answer' => 'Inyectar token JWT',
        'explanation' => 'DRY en auth headers.',
        'pro_tip' => '401 interceptor → logout redirect.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Evitar fetch en onMounted duplicado?',
        'options' => 
        array (
          0 => 'Composable useApi reutilizable',
          1 => 'Copy paste',
          2 => 'Solo Pinia',
        ),
        'answer' => 'Composable useApi reutilizable',
        'explanation' => 'DRY across components.',
        'pro_tip' => 'TanStack Query también funciona con Vue.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'vu-prod',
    'order' => 6,
    'title' => 'Build y Nuxt',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Vite, SSR con Nuxt y deploy.',
    'concepts' => 
    array (
      0 => 'vite',
      1 => 'nuxt',
      2 => 'ssr',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Vite',
        'body' => 'npm run build → dist/ — HMR ultrarrápido en dev.',
        'code' => 'console.log(\'Practica: vu-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Nuxt',
        'body' => 'Meta-framework Vue — SSR, file routing, server routes como Next.js.',
        'code' => 'console.log(\'Practica: vu-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Nuxt es a Vue como...?',
        'options' => 
        array (
          0 => 'Next.js a React',
          1 => 'Laravel a PHP only server',
          2 => 'Docker a Linux',
        ),
        'answer' => 'Next.js a React',
        'explanation' => 'Full-stack Vue framework.',
        'pro_tip' => 'Nuxt 3 usa Nitro server.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bundler default Vue 3?',
        'options' => 
        array (
          0 => 'Vite',
          1 => 'Webpack only',
          2 => 'Rollup only manual',
        ),
        'answer' => 'Vite',
        'explanation' => 'create-vue usa Vite.',
        'pro_tip' => 'Compare con curso Next.js SSR.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'vue-frontend-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de Vue.js 3.',
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
        'body' => 'Aplica lo aprendido en Vue.js 3 a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'vue-frontend-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de Vue.js 3.',
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
        'body' => 'Aplica lo aprendido en Vue.js 3 a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
