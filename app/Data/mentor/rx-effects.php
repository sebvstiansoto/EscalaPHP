<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'useEffect y ciclo de vida',
    'body' => 'Efectos secundarios: fetch al montar, timers y cleanup. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [useEffect](/glosario#useeffect) · [Lifecycle (ciclo de vida)](/glosario#lifecycle) · [Cleanup](/glosario#cleanup)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'useEffect',
    'body' => 'Corre código **después** del render: cargar datos, suscribirse a eventos, sincronizar con APIs.',
    'code' => 'useEffect(() => {
  fetch(\'/api/data\').then(r => r.json());
}, []);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Array de dependencias',
    'body' => '`[]` = solo al montar. `[userId]` = cuando userId cambia. Sin array = cada render (cuidado).',
    'code' => 'const onMount = () => console.log("mounted");\\nonMount();',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Efectos secundarios: fetch al montar, timers y cleanup. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React**, esto aparece en code reviews, incidentes y entregas diarias. Efectos secundarios: fetch al montar, timers y cleanup. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'useEffect(() => {
  fetch(\'/api/data\').then(r => r.json());
}, []);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'useEffect(() => {',
      1 => '  fetch(\'/api/data\').then(r => r.json());',
      2 => '}, []);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Return una función cleanup para cancelar suscripciones.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cuándo corre useEffect con dependencias []?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Simula callback: const onMount = () => console.log("mounted"); onMount()** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
