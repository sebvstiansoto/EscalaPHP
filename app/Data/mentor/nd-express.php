<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Express: tu primer servidor',
    'body' => 'app.get, listen y rutas HTTP básicas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🟢',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Express](/glosario#express) · [Routes (rutas)](/glosario#routes) · [listen()](/glosario#listen)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Express',
    'body' => 'Framework minimalista para HTTP en Node.',
    'code' => 'const express = require(\'express\');
const app = express();
app.get(\'/\', (req, res) => res.send(\'Hola\'));
app.listen(3000);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'req y res',
    'body' => 'Request trae query, body, headers. Response envía status, JSON o HTML.',
    'code' => 'app.listen(3000);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** app.get, listen y rutas HTTP básicas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Node.js backend**, esto aparece en code reviews, incidentes y entregas diarias. app.get, listen y rutas HTTP básicas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const express = require(\'express\');
const app = express();
app.get(\'/\', (req, res) => res.send(\'Hola\'));
app.listen(3000);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const express = require(\'express\');',
      1 => 'const app = express();',
      2 => 'app.get(\'/\', (req, res) => res.send(\'Hola\'));',
      3 => 'app.listen(3000);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** app.use monta routers y middleware global.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué método Express define ruta GET?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe app.listen(3000)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
