<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'API REST con JSON',
    'body' => 'res.json, códigos HTTP y CRUD básico. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🟢',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [REST](/glosario#rest) · [JSON](/glosario#json) · [HTTP Status Code](/glosario#http-status)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'JSON API',
    'body' => 'express.json() parsea body. res.json({ data }) responde application/json.',
    'code' => 'app.get(\'/api/users\', (req, res) => {
  res.json([{ id: 1, name: \'Ana\' }]);
});',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Códigos HTTP',
    'body' => '200 OK, 201 Created, 400 Bad Request, 404 Not Found, 500 Error.',
    'code' => 'console.log(JSON.stringify([{id:1}]));',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** res.json, códigos HTTP y CRUD básico. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Node.js backend**, esto aparece en code reviews, incidentes y entregas diarias. res.json, códigos HTTP y CRUD básico. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'app.get(\'/api/users\', (req, res) => {
  res.json([{ id: 1, name: \'Ana\' }]);
});',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'app.get(\'/api/users\', (req, res) => {',
      1 => '  res.json([{ id: 1, name: \'Ana\' }]);',
      2 => '});',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Location header apunta al recurso creado.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Código HTTP al crear recurso?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Simula respuesta: const users = [{id:1}]; console.log(JSON.stringify(users))** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
