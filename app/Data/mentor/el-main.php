<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Main process',
    'body' => 'BrowserWindow, app lifecycle. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [browserwindow](/glosario#browserwindow) · [app](/glosario#app) · [Lifecycle (ciclo de vida)](/glosario#lifecycle)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'BrowserWindow',
    'body' => 'new BrowserWindow({ width: 800, webPreferences: { preload } })',
    'code' => 'const { app, BrowserWindow } = require(\'electron\');
app.whenReady().then(createWindow);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Security',
    'body' => 'contextIsolation: true, nodeIntegration: false — preload bridge only.',
    'code' => 'new BrowserWindow({ ... })',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** BrowserWindow, app lifecycle. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Electron**, esto aparece en code reviews, incidentes y entregas diarias. BrowserWindow, app lifecycle. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const { app, BrowserWindow } = require(\'electron\');
app.whenReady().then(createWindow);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const { app, BrowserWindow } = require(\'electron\');',
      1 => 'app.whenReady().then(createWindow);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso seguridad web XSS.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿nodeIntegration false?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe BrowserWindow** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
