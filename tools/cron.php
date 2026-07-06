<?php

declare(strict_types=1);

/**
 * Tareas programadas CLI: backup y cola de trabajos.
 * Uso: php tools/cron.php backup|worker
 */

require __DIR__ . '/../bootstrap/app.php';

/** @var App\Application $app */
$task = $argv[1] ?? '';

match ($task) {
    'backup' => (static function () use ($app): void {
        $path = $app->backup->run();
        echo "Backup OK: {$path}\n";
    })(),
    'worker' => (static function () use ($app): void {
        $n = $app->jobs->process(50);
        echo "Jobs processed: {$n}\n";
    })(),
    default => (static function (): void {
        fwrite(STDERR, "Uso: php tools/cron.php backup|worker\n");
        exit(1);
    })(),
};
