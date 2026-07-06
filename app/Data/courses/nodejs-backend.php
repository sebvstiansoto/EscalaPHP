<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'nd-intro',
    'order' => 1,
    'title' => 'Node.js y el runtime V8',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'JavaScript en el servidor: event loop y npm.',
    'concepts' => 
    array (
      0 => 'node',
      1 => 'v8',
      2 => 'event-loop',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es Node?',
        'body' => 'Node ejecuta JavaScript fuera del navegador con el motor **V8** de Chrome. Ideal para APIs y herramientas.',
        'code' => 'console.log("Node " + 20);',
      ),
      1 => 
      array (
        'heading' => 'Event loop',
        'body' => 'I/O no bloqueante: una sola thread maneja miles de conexiones con callbacks y promesas.',
        'code' => 'console.log("Node " + 20);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué motor ejecuta JavaScript en Node?',
        'options' => 
        array (
          0 => 'V8',
          1 => 'SpiderMonkey',
          2 => 'Zend',
        ),
        'answer' => 'V8',
        'explanation' => 'El mismo motor que Chrome y Edge.',
        'pro_tip' => 'Bun y Deno son runtimes alternativos con APIs distintas.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Imprime versión simulada: console.log("Node " + 20)',
        'expected_output' => 'Node 20',
        'hint' => 'console.log("Node " + 20);',
        'explanation' => 'Node une strings y números como en el browser.',
        'pro_tip' => 'node -v muestra tu versión instalada.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'nd-express',
    'order' => 2,
    'title' => 'Express: tu primer servidor',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'app.get, listen y rutas HTTP básicas.',
    'concepts' => 
    array (
      0 => 'express',
      1 => 'routes',
      2 => 'listen',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Express',
        'body' => 'Framework minimalista para HTTP en Node.',
        'code' => 'const express = require(\'express\');
const app = express();
app.get(\'/\', (req, res) => res.send(\'Hola\'));
app.listen(3000);',
      ),
      1 => 
      array (
        'heading' => 'req y res',
        'body' => 'Request trae query, body, headers. Response envía status, JSON o HTML.',
        'code' => 'app.listen(3000);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué método Express define ruta GET?',
        'options' => 
        array (
          0 => 'app.get',
          1 => 'app.route',
          2 => 'app.fetch',
        ),
        'answer' => 'app.get',
        'explanation' => 'También app.post, put, delete para REST.',
        'pro_tip' => 'app.use monta routers y middleware global.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe app.listen(3000)',
        'must_contain' => 
        array (
          0 => 'app.listen',
          1 => '3000',
        ),
        'hint' => 'app.listen(3000);',
        'explanation' => 'listen arranca el servidor en el puerto indicado.',
        'pro_tip' => 'process.env.PORT en producción (Heroku, Render).',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'nd-api',
    'order' => 3,
    'title' => 'API REST con JSON',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'res.json, códigos HTTP y CRUD básico.',
    'concepts' => 
    array (
      0 => 'rest',
      1 => 'json',
      2 => 'http-status',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'JSON API',
        'body' => 'express.json() parsea body. res.json({ data }) responde application/json.',
        'code' => 'app.get(\'/api/users\', (req, res) => {
  res.json([{ id: 1, name: \'Ana\' }]);
});',
      ),
      1 => 
      array (
        'heading' => 'Códigos HTTP',
        'body' => '200 OK, 201 Created, 400 Bad Request, 404 Not Found, 500 Error.',
        'code' => 'console.log(JSON.stringify([{id:1}]));',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Código HTTP al crear recurso?',
        'options' => 
        array (
          0 => '201',
          1 => '200',
          2 => '404',
        ),
        'answer' => '201',
        'explanation' => '201 Created indica recurso nuevo.',
        'pro_tip' => 'Location header apunta al recurso creado.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula respuesta: const users = [{id:1}]; console.log(JSON.stringify(users))',
        'expected_output' => '[{"id":1}]',
        'hint' => 'console.log(JSON.stringify([{id:1}]));',
        'explanation' => 'JSON.stringify serializa objetos a string.',
        'pro_tip' => 'Misma idea que json_encode en PHP.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'nd-middleware',
    'order' => 4,
    'title' => 'Middleware y validación',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Cadenas de middleware, CORS y auth básica.',
    'concepts' => 
    array (
      0 => 'middleware',
      1 => 'cors',
      2 => 'validation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Middleware',
        'body' => 'Funciones (req, res, next) que procesan la petición antes del handler final.',
        'code' => 'console.log(\'Practica: nd-middleware\');',
      ),
      1 => 
      array (
        'heading' => 'CORS',
        'body' => 'Permite que tu React en localhost:5173 llame a la API en localhost:3000.',
        'code' => 'console.log(\'Practica: nd-middleware\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace next() en middleware?',
        'options' => 
        array (
          0 => 'Pasa al siguiente middleware/handler',
          1 => 'Termina el servidor',
          2 => 'Borra la request',
        ),
        'answer' => 'Pasa al siguiente middleware/handler',
        'explanation' => 'Sin next() la request se queda colgada.',
        'pro_tip' => 'Orden de middleware importa — auth antes de rutas.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve CORS?',
        'options' => 
        array (
          0 => 'Permitir requests desde otro origen (dominio)',
          1 => 'Encriptar JSON',
          2 => 'Compilar TypeScript',
        ),
        'answer' => 'Permitir requests desde otro origen (dominio)',
        'explanation' => 'Browsers bloquean cross-origin sin headers CORS.',
        'pro_tip' => 'cors package en Express simplifica la config.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'nd-db',
    'order' => 5,
    'title' => 'Conectar a base de datos',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'pg, Prisma o better-sqlite3 desde Node.',
    'concepts' => 
    array (
      0 => 'database',
      1 => 'pg',
      2 => 'orm',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Drivers',
        'body' => '**pg** para PostgreSQL, **mysql2** para MySQL, **better-sqlite3** para SQLite — como PDO en PHP.',
        'code' => 'SELECT * FROM users WHERE id = $1',
      ),
      1 => 
      array (
        'heading' => 'ORM',
        'body' => 'Prisma o Drizzle generan queries tipadas — similar a Eloquent en Laravel.',
        'code' => 'SELECT * FROM users WHERE id = $1',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Equivalente a PDO en Node para Postgres?',
        'options' => 
        array (
          0 => 'pg (node-postgres)',
          1 => 'express',
          2 => 'vite',
        ),
        'answer' => 'pg (node-postgres)',
        'explanation' => 'pg ejecuta SQL parametrizado contra PostgreSQL.',
        'pro_tip' => 'Siempre usa queries parametrizadas — evita SQL injection.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe SELECT * FROM users WHERE id = $1 (SQL parametrizado)',
        'must_contain' => 
        array (
          0 => 'SELECT',
          1 => 'users',
          2 => '$1',
        ),
        'hint' => 'SELECT * FROM users WHERE id = $1',
        'explanation' => '$1 es placeholder seguro en pg.',
        'pro_tip' => 'Prisma: await prisma.user.findMany()',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'nd-deploy',
    'order' => 6,
    'title' => 'Deploy y variables de entorno',
    'level' => 'DevOps',
    'minutes' => 25,
    'summary' => 'dotenv, PM2 y Docker para Node en producción.',
    'concepts' => 
    array (
      0 => 'dotenv',
      1 => 'pm2',
      2 => 'production',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'dotenv',
        'body' => 'process.env.DATABASE_URL — secretos fuera del código, como .env en PHP.',
        'code' => 'console.log(\'Practica: nd-deploy\');',
      ),
      1 => 
      array (
        'heading' => 'Producción',
        'body' => 'PM2 reinicia el proceso si cae. Docker empaqueta Node igual que PHP.',
        'code' => 'console.log(\'Practica: nd-deploy\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde van secrets en Node?',
        'options' => 
        array (
          0 => 'Variables de entorno (.env)',
          1 => 'En el código fuente',
          2 => 'En package.json',
        ),
        'answer' => 'Variables de entorno (.env)',
        'explanation' => 'Nunca commitees .env — usa .env.example.',
        'pro_tip' => 'NODE_ENV=production activa optimizaciones.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace PM2?',
        'options' => 
        array (
          0 => 'Process manager — reinicia Node si crashea',
          1 => 'Base de datos',
          2 => 'Compilador TS',
        ),
        'answer' => 'Process manager — reinicia Node si crashea',
        'explanation' => 'PM2 mantiene tu API viva en VPS.',
        'pro_tip' => 'En K8s no necesitas PM2 — el cluster reinicia pods.',
      ),
    ),
  ),
);
