<?php

declare(strict_types=1);

namespace App\Controllers;

class CronController
{
    public function __construct(private array $config)
    {
    }

    public function run(): void
    {
        $secret = (string) ($this->config['cron_secret'] ?? '');
        $token = (string) ($_GET['token'] ?? '');
        if ($secret === '' || !hash_equals($secret, $token)) {
            http_response_code(403);
            echo 'Forbidden';
            return;
        }

        $task = (string) ($_GET['task'] ?? 'worker');
        /** @var \App\Application $app */
        $app = $GLOBALS['escala_app'];

        match ($task) {
            'backup' => (static function () use ($app): void {
                $path = $app->backup->run();
                echo "Backup OK: {$path}";
            })(),
            'worker' => (static function () use ($app): void {
                $n = $app->jobs->process(50);
                echo "Jobs: {$n}";
            })(),
            default => (static function (): void {
                http_response_code(400);
                echo 'task=backup|worker';
            })(),
        };
    }
}
