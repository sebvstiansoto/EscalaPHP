<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Datos que persisten', 'body' => 'PHP olvida todo al terminar la petición. Para guardar progreso, usuarios o pedidos necesitas una **base de datos**.', 'emoji' => '🗄️'],
    ['type' => 'visual', 'visual' => 'database-table', 'title' => 'Tablas = hojas de cálculo', 'body' => 'Filas = registros. Columnas = campos. Tu progreso vive en la tabla `progress`.'],
    ['type' => 'teach', 'title' => 'SQL básico', 'body' => 'SELECT lee, INSERT crea, UPDATE modifica, DELETE borra.', 'code' => "SELECT lesson_slug, completed FROM progress WHERE session_id = 'abc';"],
    ['type' => 'show_file', 'file' => 'app/Database.php', 'title' => 'Tu BD real', 'body' => 'EscalaPHP usa SQLite en database/escala.sqlite. En producción: PostgreSQL o MySQL.', 'code' => "\$this->pdo = new PDO('sqlite:' . \$path);"],
    ['type' => 'mentor_say', 'title' => 'El cuello de botella', 'body' => 'La BD es donde **más se nota** una mala arquitectura. Índices, consultas optimizadas, réplicas de lectura.', 'emoji' => '⚠️'],
    ['type' => 'exercise', 'title' => 'Tu turno — SELECT', 'body' => '¿Qué comando SQL lee filas de una tabla?', 'exercise_index' => 0],
    ['type' => 'exercise', 'title' => 'Tu turno — consulta', 'body' => 'Escribe SELECT * FROM users', 'exercise_index' => 1],
    ['type' => 'project', 'title' => 'Mini-proyecto: Explora SQLite', 'body' => 'Abre database/escala.sqlite y explora tus tablas reales.'],
    ['type' => 'complete', 'title' => '¡Datos bajo control!', 'body' => 'Entiendes persistencia. Siguiente: caché para ir 10x más rápido.', 'emoji' => '💾'],
];
