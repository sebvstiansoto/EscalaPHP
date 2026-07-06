<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Decisiones automáticas', 'body' => 'Hasta ahora tu código siempre hace lo mismo. Hoy aprendes a que **decida solo** según condiciones.', 'emoji' => '🔀'],
    ['type' => 'teach', 'title' => 'if / else — el semáforo del código', 'body' => 'Si la condición es verdadera, ejecuta un bloque. Si no, otro.', 'code' => "<?php\n\$carga = 85;\nif (\$carga > 80) {\n    echo 'Activar caché';\n} else {\n    echo 'Todo normal';\n}"],
    ['type' => 'live_demo', 'title' => 'Mira if en acción', 'body' => 'Con carga 85, activa caché. Cambia el número y verás otro resultado.', 'demo_code' => "\$carga = 85;\nif (\$carga > 80) { echo 'Activar caché'; } else { echo 'Todo normal'; }"],
    ['type' => 'teach', 'title' => 'foreach — recorrer listas', 'body' => 'Cuando tienes 1000 registros de BD, los procesas uno a uno con foreach.', 'code' => "<?php\n\$planes = ['free', 'pro', 'enterprise'];\nforeach (\$planes as \$plan) {\n    echo \$plan . ' ';\n}"],
    ['type' => 'live_demo', 'title' => 'foreach en vivo', 'body' => 'Recorre 3 planes e imprímelos.', 'demo_code' => "\$planes = ['free', 'pro', 'enterprise'];\nforeach (\$planes as \$plan) { echo \$plan . ' '; }"],
    ['type' => 'visual', 'visual' => 'if-flow', 'title' => 'Visual: cómo decide if', 'body' => 'Evalúa condición → true ejecuta bloque A → false ejecuta bloque B.'],
    ['type' => 'exercise', 'title' => 'Tu turno — verificador de edad', 'body' => 'Escribe un if que imprima "ok" si $edad >= 18, si no "menor".', 'exercise_index' => 0],
    ['type' => 'exercise', 'title' => 'Tu turno — bucles', 'body' => '¿Qué bucle recorre cada elemento de un array?', 'exercise_index' => 1],
    ['type' => 'project', 'title' => 'Mini-proyecto: Verificador de acceso', 'body' => 'Practica condiciones con un caso real de acceso por edad.'],
    ['type' => 'complete', 'title' => '¡Lógica dominada!', 'body' => 'Ya tomas decisiones con código. Siguiente: funciones reutilizables.', 'emoji' => '🧠'],
];
