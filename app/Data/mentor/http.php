<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'El idioma de internet', 'body' => '**HTTP** es cómo navegador y servidor se hablan. Todo lo que haces en web pasa por aquí.', 'emoji' => '🌐'],
    ['type' => 'visual', 'visual' => 'http-flow', 'title' => 'Repaso: flujo HTTP', 'body' => 'Navegador pide → Servidor responde. Simple pero poderoso.'],
    ['type' => 'visual', 'visual' => 'http-methods', 'title' => 'GET vs POST', 'body' => 'GET = leer datos. POST = enviar datos. DELETE = borrar. PUT = actualizar.'],
    ['type' => 'show_file', 'file' => 'routes/web.php', 'title' => 'Las rutas de EscalaPHP', 'body' => 'Cada línea aquí conecta una URL con una acción. Esto ES routing.', 'code' => "\$app->router->get('/', fn () => ...);\n\$app->router->post('/leccion', fn () => ...);"],
    ['type' => 'mentor_say', 'title' => 'Códigos de estado', 'body' => '**200** = OK, **404** = no encontrado, **500** = error del servidor. Monitorearlos es trabajo de senior.', 'emoji' => '📊'],
    ['type' => 'exercise', 'title' => 'Tu turno — POST', 'body' => '¿Qué método HTTP usarías para un formulario de registro?', 'exercise_index' => 0],
    ['type' => 'exercise', 'title' => 'Tu turno — 404', 'body' => '¿Qué código indica "página no encontrada"?', 'exercise_index' => 1],
    ['type' => 'project', 'title' => 'Mini-proyecto: Mapa de rutas', 'body' => 'Dibuja todas las rutas de EscalaPHP y sus métodos HTTP.'],
    ['type' => 'complete', 'title' => '¡HTTP dominado!', 'body' => 'Entiendes cómo funciona la web. Siguiente: arquitectura MVC.', 'emoji' => '🔗'],
];
