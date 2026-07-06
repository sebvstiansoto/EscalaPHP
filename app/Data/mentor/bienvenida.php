<?php

declare(strict_types=1);

return [
    [
        'type' => 'mentor_say',
        'title' => 'Hola — soy tu mentor',
        'body' => 'No vas a leer un manual largo. Te **muestro**, tú **ejecutas**, y avanzamos juntos. ¿Listo?',
        'emoji' => '👋',
    ],
    [
        'type' => 'visual',
        'visual' => 'http-flow',
        'title' => 'Mira qué pasa cuando abres una web',
        'body' => 'Tú pides con el navegador. Una computadora en internet — el **servidor** — ejecuta PHP y te devuelve la página lista.',
    ],
    [
        'type' => 'mentor_say',
        'title' => 'Analogía rápida',
        'body' => 'Restaurante: tú pides (navegador), la cocina prepara (servidor + PHP), te traen el plato (HTML). **PHP cocina, no sirve en la mesa.**',
        'emoji' => '🍳',
    ],
    [
        'type' => 'show_file',
        'file' => 'public/index.php',
        'title' => 'Te muestro el archivo que arranca TODO',
        'body' => 'Cada vez que cargas EscalaPHP, este archivo se ejecuta primero. Ábrelo en Cursor cuando quieras.',
        'code' => "<?php\n\n\$app = require __DIR__ . '/../bootstrap/app.php';\n\n\$app->router->dispatch(\$_SERVER['REQUEST_METHOD'], \$_SERVER['REQUEST_URI']);",
    ],
    [
        'type' => 'teach',
        'title' => 'Tu primera instrucción: echo',
        'body' => '`echo` imprime texto. Cada línea termina con `;` como el punto final de una frase.',
        'code' => "<?php\necho 'Hola, EscalaPHP';",
    ],
    [
        'type' => 'live_demo',
        'title' => 'Mira cómo corre en vivo',
        'body' => 'Así se ve cuando PHP ejecuta echo. Luego lo harás tú.',
        'demo_code' => "echo 'Hola, EscalaPHP';",
    ],
    [
        'type' => 'pair',
        'title' => 'Pair programming — tu turno',
        'body' => 'Escribe esta línea en el **Laboratorio** y ejecuta.',
        'lines' => ["echo 'Aprendiendo a escalar';"],
    ],
    [
        'type' => 'exercise',
        'title' => 'Tu turno — pregunta 1',
        'body' => 'Con lo que te mostré: ¿dónde se ejecuta PHP normalmente?',
        'exercise_index' => 0,
    ],
    [
        'type' => 'exercise',
        'title' => 'Tu turno — escribe código',
        'body' => 'Escribe una línea con echo que imprima exactamente: Aprendiendo a escalar',
        'exercise_index' => 1,
    ],
    [
        'type' => 'complete',
        'title' => '¡Primera lección dominada!',
        'body' => 'Ya sabes qué es PHP, dónde corre y tu primera instrucción. El siguiente módulo: **variables**.',
        'emoji' => '🏆',
    ],
];
