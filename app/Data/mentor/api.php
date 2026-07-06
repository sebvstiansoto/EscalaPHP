<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Tu app habla con otras', 'body' => 'Una **API** permite que otras aplicaciones consuman tus datos. Devuelves JSON, no HTML.', 'emoji' => '🔌'],
    ['type' => 'visual', 'visual' => 'api-flow', 'title' => 'Flujo API', 'body' => 'App móvil → pide JSON → tu API PHP responde → app muestra datos.'],
    ['type' => 'teach', 'title' => 'JSON — el idioma universal', 'body' => 'Texto estructurado que cualquier lenguaje entiende.', 'code' => '{"leccion": "cache", "completada": true, "xp": 100}'],
    ['type' => 'show_file', 'file' => 'app/Controllers/ApiController.php', 'title' => 'Tu API ya existe', 'body' => 'El endpoint /api/run devuelve JSON. Ya tienes una API REST funcionando.', 'code' => "header('Content-Type: application/json');\necho json_encode(\$result);"],
    ['type' => 'mentor_say', 'title' => 'REST en simple', 'body' => 'GET = leer, POST = crear, PUT = actualizar, DELETE = borrar. URLs predecibles.', 'emoji' => '📋'],
    ['type' => 'exercise', 'title' => 'Tu turno — JSON', 'body' => '¿Qué formato es estándar en APIs modernas?', 'exercise_index' => 0],
    ['type' => 'exercise', 'title' => 'Tu turno — HTTP', 'body' => '¿Qué código HTTP indica éxito en una API?', 'exercise_index' => 1],
    ['type' => 'project', 'title' => 'Mini-proyecto: Prueba tu API', 'body' => 'Usa el Laboratorio y observa cómo POST /api/run devuelve JSON.'],
    ['type' => 'complete', 'title' => '¡API dominada!', 'body' => 'Tu app puede hablar con el mundo. Siguiente: seguridad.', 'emoji' => '🌍'],
];
