<?php

declare(strict_types=1);

return [
    [
        'slug' => 'nd-intro',
        'order' => 1,
        'title' => 'Node.js y el runtime V8',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'JavaScript en el servidor: event loop y npm.',
        'concepts' => ['node', 'v8', 'event-loop'],
        'sections' => [
            ['heading' => '¿Qué es Node?', 'body' => 'Node ejecuta JavaScript fuera del navegador con el motor **V8** de Chrome. Ideal para APIs y herramientas.'],
            ['heading' => 'Event loop', 'body' => 'I/O no bloqueante: una sola thread maneja miles de conexiones con callbacks y promesas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué motor ejecuta JavaScript en Node?', 'options' => ['V8', 'SpiderMonkey', 'Zend'], 'answer' => 'V8', 'explanation' => 'El mismo motor que Chrome y Edge.', 'pro_tip' => 'Bun y Deno son runtimes alternativos con APIs distintas.'],
            ['type' => 'js', 'question' => 'Imprime versión simulada: console.log("Node " + 20)', 'expected_output' => 'Node 20', 'hint' => 'console.log("Node " + 20);', 'explanation' => 'Node une strings y números como en el browser.', 'pro_tip' => 'node -v muestra tu versión instalada.'],
        ],
    ],
    [
        'slug' => 'nd-express',
        'order' => 2,
        'title' => 'Express: tu primer servidor',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'app.get, listen y rutas HTTP básicas.',
        'concepts' => ['express', 'routes', 'listen'],
        'sections' => [
            ['heading' => 'Express', 'body' => 'Framework minimalista para HTTP en Node.', 'code' => "const express = require('express');\nconst app = express();\napp.get('/', (req, res) => res.send('Hola'));\napp.listen(3000);"],
            ['heading' => 'req y res', 'body' => 'Request trae query, body, headers. Response envía status, JSON o HTML.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué método Express define ruta GET?', 'options' => ['app.get', 'app.route', 'app.fetch'], 'answer' => 'app.get', 'explanation' => 'También app.post, put, delete para REST.', 'pro_tip' => 'app.use monta routers y middleware global.'],
            ['type' => 'contains', 'question' => 'Escribe app.listen(3000)', 'must_contain' => ['app.listen', '3000'], 'hint' => 'app.listen(3000);', 'explanation' => 'listen arranca el servidor en el puerto indicado.', 'pro_tip' => 'process.env.PORT en producción (Heroku, Render).'],
        ],
    ],
    [
        'slug' => 'nd-api',
        'order' => 3,
        'title' => 'API REST con JSON',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'res.json, códigos HTTP y CRUD básico.',
        'concepts' => ['rest', 'json', 'http-status'],
        'sections' => [
            ['heading' => 'JSON API', 'body' => 'express.json() parsea body. res.json({ data }) responde application/json.', 'code' => "app.get('/api/users', (req, res) => {\n  res.json([{ id: 1, name: 'Ana' }]);\n});"],
            ['heading' => 'Códigos HTTP', 'body' => '200 OK, 201 Created, 400 Bad Request, 404 Not Found, 500 Error.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Código HTTP al crear recurso?', 'options' => ['201', '200', '404'], 'answer' => '201', 'explanation' => '201 Created indica recurso nuevo.', 'pro_tip' => 'Location header apunta al recurso creado.'],
            ['type' => 'js', 'question' => 'Simula respuesta: const users = [{id:1}]; console.log(JSON.stringify(users))', 'expected_output' => '[{"id":1}]', 'hint' => 'console.log(JSON.stringify([{id:1}]));', 'explanation' => 'JSON.stringify serializa objetos a string.', 'pro_tip' => 'Misma idea que json_encode en PHP.'],
        ],
    ],
    [
        'slug' => 'nd-middleware',
        'order' => 4,
        'title' => 'Middleware y validación',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Cadenas de middleware, CORS y auth básica.',
        'concepts' => ['middleware', 'cors', 'validation'],
        'sections' => [
            ['heading' => 'Middleware', 'body' => 'Funciones (req, res, next) que procesan la petición antes del handler final.'],
            ['heading' => 'CORS', 'body' => 'Permite que tu React en localhost:5173 llame a la API en localhost:3000.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace next() en middleware?', 'options' => ['Pasa al siguiente middleware/handler', 'Termina el servidor', 'Borra la request'], 'answer' => 'Pasa al siguiente middleware/handler', 'explanation' => 'Sin next() la request se queda colgada.', 'pro_tip' => 'Orden de middleware importa — auth antes de rutas.'],
            ['type' => 'choice', 'question' => '¿Para qué sirve CORS?', 'options' => ['Permitir requests desde otro origen (dominio)', 'Encriptar JSON', 'Compilar TypeScript'], 'answer' => 'Permitir requests desde otro origen (dominio)', 'explanation' => 'Browsers bloquean cross-origin sin headers CORS.', 'pro_tip' => 'cors package en Express simplifica la config.'],
        ],
    ],
    [
        'slug' => 'nd-db',
        'order' => 5,
        'title' => 'Conectar a base de datos',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'pg, Prisma o better-sqlite3 desde Node.',
        'concepts' => ['database', 'pg', 'orm'],
        'sections' => [
            ['heading' => 'Drivers', 'body' => '**pg** para PostgreSQL, **mysql2** para MySQL, **better-sqlite3** para SQLite — como PDO en PHP.'],
            ['heading' => 'ORM', 'body' => 'Prisma o Drizzle generan queries tipadas — similar a Eloquent en Laravel.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Equivalente a PDO en Node para Postgres?', 'options' => ['pg (node-postgres)', 'express', 'vite'], 'answer' => 'pg (node-postgres)', 'explanation' => 'pg ejecuta SQL parametrizado contra PostgreSQL.', 'pro_tip' => 'Siempre usa queries parametrizadas — evita SQL injection.'],
            ['type' => 'contains', 'question' => 'Escribe SELECT * FROM users WHERE id = $1 (SQL parametrizado)', 'must_contain' => ['SELECT', 'users', '$1'], 'hint' => 'SELECT * FROM users WHERE id = $1', 'explanation' => '$1 es placeholder seguro en pg.', 'pro_tip' => 'Prisma: await prisma.user.findMany()'],
        ],
    ],
    [
        'slug' => 'nd-deploy',
        'order' => 6,
        'title' => 'Deploy y variables de entorno',
        'level' => 'DevOps',
        'minutes' => 25,
        'summary' => 'dotenv, PM2 y Docker para Node en producción.',
        'concepts' => ['dotenv', 'pm2', 'production'],
        'sections' => [
            ['heading' => 'dotenv', 'body' => 'process.env.DATABASE_URL — secretos fuera del código, como .env en PHP.'],
            ['heading' => 'Producción', 'body' => 'PM2 reinicia el proceso si cae. Docker empaqueta Node igual que PHP.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde van secrets en Node?', 'options' => ['Variables de entorno (.env)', 'En el código fuente', 'En package.json'], 'answer' => 'Variables de entorno (.env)', 'explanation' => 'Nunca commitees .env — usa .env.example.', 'pro_tip' => 'NODE_ENV=production activa optimizaciones.'],
            ['type' => 'choice', 'question' => '¿Qué hace PM2?', 'options' => ['Process manager — reinicia Node si crashea', 'Base de datos', 'Compilador TS'], 'answer' => 'Process manager — reinicia Node si crashea', 'explanation' => 'PM2 mantiene tu API viva en VPS.', 'pro_tip' => 'En K8s no necesitas PM2 — el cluster reinicia pods.'],
        ],
    ],
];
