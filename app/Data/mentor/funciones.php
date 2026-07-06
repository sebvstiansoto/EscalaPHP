<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'No repitas — reutiliza', 'body' => 'Las **funciones** son bloques con nombre que usas muchas veces. Los **arrays** guardan listas de datos.', 'emoji' => '♻️'],
    ['type' => 'teach', 'title' => 'Crear una función', 'body' => 'Le das nombre, parámetros y qué devuelve. Una vez creada, la llamas desde cualquier sitio.', 'code' => "<?php\nfunction saludar(string \$nombre): string {\n    return 'Hola ' . \$nombre;\n}\necho saludar('Ana');"],
    ['type' => 'live_demo', 'title' => 'Función en acción', 'body' => 'La función saludar recibe un nombre y devuelve un saludo.', 'demo_code' => "function saludar(\$n) { return 'Hola ' . \$n; }\necho saludar('PHP');"],
    ['type' => 'teach', 'title' => 'Arrays — listas de datos', 'body' => 'Todo lo que viene de una BD o API llega como array. Domínalo.', 'code' => "<?php\n\$metricas = ['requests' => 12000, 'errores' => 3];\necho \$metricas['requests'];"],
    ['type' => 'live_demo', 'title' => 'Array en acción', 'body' => 'Accede a un valor por su clave.', 'demo_code' => "\$m = ['requests' => 12000, 'errores' => 3];\necho \$m['requests'];"],
    ['type' => 'exercise', 'title' => 'Tu turno — función duplicar', 'body' => 'Crea function duplicar($n) que retorne $n*2 y haz echo de duplicar(21).', 'exercise_index' => 0],
    ['type' => 'project', 'title' => 'Mini-proyecto: Calculadora de descuento', 'body' => 'Crea una función que aplique descuentos a precios.'],
    ['type' => 'complete', 'title' => '¡Funciones listas!', 'body' => 'Ya reutilizas lógica como un profesional. Siguiente: HTTP.', 'emoji' => '⚡'],
];
