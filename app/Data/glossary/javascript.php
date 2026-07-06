<?php

declare(strict_types=1);

$cat = 'javascript';

return [
    ['slug' => 'javascript', 'term' => 'JavaScript', 'category' => $cat, 'definition' => 'Lenguaje de programación del navegador y de Node.js. Hace páginas interactivas y backends.'],
    ['slug' => 'typescript', 'term' => 'TypeScript', 'category' => $cat, 'definition' => 'JavaScript con tipos estáticos. Se compila a JS con tsc.'],
    ['slug' => 'tsc', 'term' => 'tsc', 'category' => $cat, 'definition' => 'Compilador de TypeScript que convierte .ts a JavaScript ejecutable.'],
    ['slug' => 'tsconfig', 'term' => 'tsconfig.json', 'category' => $cat, 'definition' => 'Archivo de configuración del compilador TypeScript (target, paths, strict, etc.).'],
    ['slug' => 'dom', 'term' => 'DOM', 'category' => $cat, 'definition' => 'Document Object Model: representación en árbol del HTML que JavaScript puede leer y modificar.'],
    ['slug' => 'console', 'term' => 'Console', 'category' => $cat, 'definition' => 'Herramienta del navegador para ver logs, errores y depurar JavaScript (F12).'],
    ['slug' => 'events', 'term' => 'Events (eventos)', 'category' => $cat, 'definition' => 'Acciones del usuario o del sistema: click, submit, keydown, load, etc.'],
    ['slug' => 'querySelector', 'term' => 'querySelector', 'category' => $cat, 'definition' => 'Método DOM que selecciona el primer elemento que coincide con un selector CSS.'],
    ['slug' => 'fetch', 'term' => 'fetch', 'category' => $cat, 'definition' => 'API nativa de JavaScript para hacer peticiones HTTP y obtener datos de APIs.'],
    ['slug' => 'node', 'term' => 'Node.js', 'category' => $cat, 'definition' => 'Runtime de JavaScript fuera del navegador. Permite crear servidores y herramientas CLI.'],
    ['slug' => 'v8', 'term' => 'V8', 'category' => $cat, 'definition' => 'Motor de JavaScript de Google usado por Node.js y Chrome.'],
    ['slug' => 'express', 'term' => 'Express', 'category' => $cat, 'definition' => 'Framework minimalista de Node.js para crear APIs y servidores HTTP.'],
    ['slug' => 'listen', 'term' => 'listen()', 'category' => $cat, 'definition' => 'Método de Express/Node que pone el servidor a escuchar en un puerto.'],
    ['slug' => 'dotenv', 'term' => 'dotenv', 'category' => $cat, 'definition' => 'Paquete Node.js que carga variables de entorno desde un archivo .env.'],
    ['slug' => 'pm2', 'term' => 'PM2', 'category' => $cat, 'definition' => 'Gestor de procesos Node.js en producción: reinicio automático, logs y clustering.'],
    ['slug' => 'express-types', 'term' => 'Express + TypeScript', 'category' => $cat, 'definition' => 'Combinar Express con tipos de @types/express para APIs tipadas en Node.'],
    ['slug' => 'cors', 'term' => 'CORS', 'category' => $cat, 'definition' => 'Cross-Origin Resource Sharing. Política del navegador que controla peticiones entre dominios distintos.'],
];
