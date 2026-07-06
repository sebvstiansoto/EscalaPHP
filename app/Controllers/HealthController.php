<?php

declare(strict_types=1);

namespace App\Controllers;

class HealthController
{
    public function __construct(private \App\Database $database)
    {
    }

    public function check(): void
    {
        header('Content-Type: application/json');

        $checks = ['app' => 'ok', 'database' => 'ok'];
        $status = 200;

        try {
            $this->database->pdo()->query('SELECT 1');
        } catch (\Throwable) {
            $checks['database'] = 'fail';
            $status = 503;
        }

        if (!is_writable(dirname((string) ($GLOBALS['escala_config']['log_path'] ?? __DIR__ . '/../../storage/logs/app.log')))) {
            $checks['storage'] = 'warn';
        } else {
            $checks['storage'] = 'ok';
        }

        http_response_code($status);
        echo json_encode([
            'status' => $status === 200 ? 'healthy' : 'degraded',
            'checks' => $checks,
            'timestamp' => date('c'),
        ], JSON_UNESCAPED_UNICODE);
    }
}
