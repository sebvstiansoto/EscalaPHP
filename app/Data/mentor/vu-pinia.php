<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Pinia — state management',
    'body' => 'Stores, actions y persistencia. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '💚',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [pinia](/glosario#pinia) · [store](/glosario#store) · [action](/glosario#action)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Pinia',
    'body' => 'Reemplazo oficial de Vuex — stores tipados, DevTools, sin mutations boilerplate.',
    'code' => 'export const useUserStore = defineStore(\'user\', () => {
  const name = ref(\'\')
  function login(n) { name.value = n }
  return { name, login }
})',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Actions async',
    'body' => 'await api.login() dentro de action — maneja loading/error en store.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Stores, actions y persistencia. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Vue.js 3**, esto aparece en code reviews, incidentes y entregas diarias. Stores, actions y persistencia. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'export const useUserStore = defineStore(\'user\', () => {
  const name = ref(\'\')
  function login(n) { name.value = n }
  return { name, login }
})',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'export const useUserStore = defineStore(\'user\', () => {',
      1 => '  const name = ref(\'\')',
      2 => '  function login(n) { name.value = n }',
      3 => '  return { name, login }',
      4 => '})',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Un store por dominio: user, cart.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿State global Vue 3 oficial?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Usar store en componente?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
