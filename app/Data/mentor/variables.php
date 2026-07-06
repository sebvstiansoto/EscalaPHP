<?php

declare(strict_types=1);

return [
    [
        'type' => 'mentor_say',
        'title' => 'Variables = cajas con nombre',
        'body' => 'Imagina cajas etiquetadas. Guardas un valor y lo usas después. En PHP la etiqueta empieza con `$`.',
        'emoji' => '📦',
    ],
    [
        'type' => 'teach',
        'title' => 'Crear una variable',
        'body' => 'El signo `=` **asigna** un valor. No es "igual a" como en matemáticas — es "guarda esto aquí".',
        'code' => "<?php\n\$nombre = 'Ana';\n\$usuarios = 1500;\n\$activo = true;",
    ],
    [
        'type' => 'live_demo',
        'title' => 'Mira variables en acción',
        'body' => 'PHP guarda el número y lo imprime.',
        'demo_code' => "\$usuarios = 1500;\necho \$usuarios;",
    ],
    [
        'type' => 'pair',
        'title' => 'Pair programming — tu turno',
        'body' => 'En el **Laboratorio**, crea `$precio = 99` y haz `echo $precio`.',
        'lines' => ['$precio = 99;', 'echo $precio;'],
    ],
    [
        'type' => 'visual',
        'visual' => 'variable-box',
        'title' => 'Visual: una variable en memoria',
        'body' => 'Nombre `$usuarios` → valor `1500`. A escala, millones de estas cajas deben ser eficientes.',
    ],
    [
        'type' => 'mentor_say',
        'title' => 'Tipos de datos',
        'body' => '**Texto** (string), **número entero** (int), **decimal** (float), **verdadero/falso** (bool). PHP detecta el tipo solo.',
        'emoji' => '🔤',
    ],
    [
        'type' => 'exercise',
        'title' => 'Tu turno — crea $precio',
        'body' => 'Crea la variable $precio con valor 99 y haz echo de $precio',
        'exercise_index' => 0,
    ],
    [
        'type' => 'exercise',
        'title' => 'Tu turno — booleanos',
        'body' => '¿Cuál es un valor booleano válido en PHP?',
        'exercise_index' => 1,
    ],
    [
        'type' => 'complete',
        'title' => 'Variables listas',
        'body' => 'Ya guardas datos en memoria. Siguiente: tomar decisiones con if/else.',
        'emoji' => '✅',
    ],
];
