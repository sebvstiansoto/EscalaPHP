<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Manipular el DOM',
    'body' => 'querySelector, eventos y actualizar la UI sin frameworks. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [DOM](/glosario#dom) · [Eventos (arquitectura)](/glosario#events) · [querySelector](/glosario#querySelector)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'El DOM',
    'body' => 'El navegador convierte HTML en un árbol de nodos. JavaScript puede leerlo y modificarlo.',
    'code' => 'const btn = document.querySelector(\'#miBtn\');
btn.addEventListener(\'click\', () => console.log(\'clic\'));',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Eventos',
    'body' => 'click, submit, input — reaccionas a acciones del usuario sin recargar la página.',
    'code' => 'const el = { textContent: "Hola" };\\nconsole.log(el.textContent);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** querySelector, eventos y actualizar la UI sin frameworks. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **HTML, CSS y JavaScript**, esto aparece en code reviews, incidentes y entregas diarias. querySelector, eventos y actualizar la UI sin frameworks. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const btn = document.querySelector(\'#miBtn\');
btn.addEventListener(\'click\', () => console.log(\'clic\'));',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const btn = document.querySelector(\'#miBtn\');',
      1 => 'btn.addEventListener(\'click\', () => console.log(\'clic\'));',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** En el navegador real: document.querySelector("#id").textContent',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**Simula selección: const el = { textContent: "Hola" }; console.log(el.textContent)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué método registra un listener de eventos?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
