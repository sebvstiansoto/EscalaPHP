<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Trabajo pesado sin bloquear', 'body' => 'Enviar email, generar PDF, procesar pago — eso tarda segundos. El usuario no debe esperar.', 'emoji' => '📬'],
    ['type' => 'visual', 'visual' => 'queue-flow', 'title' => 'Flujo de colas', 'body' => 'HTTP encola job → responde al instante → Worker procesa en segundo plano.'],
    ['type' => 'mentor_say', 'title' => 'Analogía: restaurante otra vez', 'body' => 'El mesero toma tu pedido (HTTP), lo pasa a cocina (cola), y sigue atendiendo. La cocina (worker) prepara cuando puede.', 'emoji' => '🍳'],
    ['type' => 'teach', 'title' => 'Componentes', 'body' => '**Job** = tarea. **Queue** = lista de espera. **Worker** = proceso que ejecuta jobs.', 'code' => "// En Laravel:\nSendWelcomeEmail::dispatch(\$user);\n// HTTP responde al instante\n// Worker envía el email después"],
    ['type' => 'exercise', 'title' => 'Tu turno — worker', 'body' => '¿Qué hace un worker en una cola?', 'exercise_index' => 0],
    ['type' => 'project', 'title' => 'Mini-proyecto: Diseña una cola', 'body' => 'En papel, diseña qué jobs encolarías al registrar un usuario.'],
    ['type' => 'complete', 'title' => '¡Colas dominadas!', 'body' => 'Tu app responde al instante aunque el trabajo sea pesado. Siguiente: APIs.', 'emoji' => '📨'],
];
