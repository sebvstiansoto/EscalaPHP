<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Lo que no puedes saltarte', 'body' => 'Un senior sabe que **seguridad no es opcional**. Un hueco puede costar millones.', 'emoji' => '🛡️'],
    ['type' => 'visual', 'visual' => 'security-shield', 'title' => 'Amenazas comunes', 'body' => 'SQL injection, XSS, CSRF, sesiones robadas. OWASP Top 10 es tu checklist.'],
    ['type' => 'show_file', 'file' => 'app/Services/CodeRunner.php', 'title' => 'Sandbox seguro', 'body' => 'El laboratorio bloquea funciones peligrosas. Nunca ejecutes código del usuario sin filtrar.', 'code' => "private array \$blockedPatterns = ['system', 'exec', 'shell_exec'...];"],
    ['type' => 'teach', 'title' => 'Consultas preparadas', 'body' => 'PDO separa SQL de datos del usuario. Es tu escudo contra SQL injection.', 'code' => "\$stmt = \$pdo->prepare('SELECT * FROM users WHERE id = ?');\n\$stmt->execute([\$userId]);"],
    ['type' => 'mentor_say', 'title' => 'Sesiones', 'body' => 'session_start() identifica al visitante. Tu progreso se guarda por session_id sin login.', 'emoji' => '🔑'],
    ['type' => 'exercise', 'title' => 'Tu turno — SQL injection', 'body' => '¿Cómo prevenir SQL injection en PHP?', 'exercise_index' => 0],
    ['type' => 'project', 'title' => 'Mini-proyecto: Audita EscalaPHP', 'body' => 'Encuentra 3 prácticas de seguridad ya implementadas en esta app.'],
    ['type' => 'complete', 'title' => '¡Seguridad básica lista!', 'body' => 'Piensas como un profesional. Siguiente: tu graduación.', 'emoji' => '🔒'],
];
