<?php

declare(strict_types=1);

use App\Support\Env;

$defaults = [
    'name' => 'Escala',
    'tagline' => 'Aprende a programar — PHP, Python, React, Docker y más',
    'debug' => false,
    'app_url' => 'http://localhost:8000',
    'db_driver' => 'sqlite',
    'database' => __DIR__ . '/../database/escala.sqlite',
    'cache_path' => __DIR__ . '/../storage/cache',
    'rate_limit_path' => __DIR__ . '/../storage/rate',
    'log_path' => __DIR__ . '/../storage/logs/app.log',
    'mail_path' => __DIR__ . '/../storage/mail',
    'mail_driver' => 'log',
    'mail_from' => 'noreply@escala.dev',
    'app_key' => 'change-me-in-production',
    'admin_password' => 'escala-admin-change-me',
    'stripe_secret_key' => '',
    'stripe_price_id' => '',
    'stripe_webhook_secret' => '',
    'stripe_trial_days' => 7,
    'openai_api_key' => '',
    'openai_model' => 'gpt-4o-mini',
    'docker_runner' => false,
    'github_client_id' => '',
    'github_client_secret' => '',
    'google_client_id' => '',
    'google_client_secret' => '',
    'backup_path' => __DIR__ . '/../storage/backups',
    'cron_secret' => '',
    'analytics_domain' => '',
    'smtp_host' => '',
    'smtp_port' => 587,
    'smtp_user' => '',
    'smtp_pass' => '',
    'resend_api_key' => '',
];

$env = Env::load(dirname(__DIR__) . '/.env', []);

$appUrl = (string) ($env['APP_URL'] ?? '');
if ($appUrl === '' || str_contains($appUrl, 'localhost')) {
    $railwayDomain = (string) ($env['RAILWAY_PUBLIC_DOMAIN'] ?? getenv('RAILWAY_PUBLIC_DOMAIN') ?: '');
    if ($railwayDomain !== '') {
        $appUrl = 'https://' . $railwayDomain;
    }
}
if ($appUrl === '') {
    $appUrl = $defaults['app_url'];
}

return array_merge($defaults, [
    'debug' => filter_var($env['APP_DEBUG'] ?? $defaults['debug'], FILTER_VALIDATE_BOOLEAN),
    'app_url' => $appUrl,
    'db_driver' => strtolower((string) ($env['DB_DRIVER'] ?? $defaults['db_driver'])),
    'database' => (static function () use ($env, $defaults): string {
        $path = (string) ($env['DB_PATH'] ?? $defaults['database']);
        if ($path !== '' && $path[0] !== '/' && !preg_match('/^[A-Za-z]:[\\\\\\/]/', $path)) {
            return dirname(__DIR__) . '/' . ltrim($path, '/');
        }

        return $path;
    })(),
    'db_host' => $env['DB_HOST'] ?? 'localhost',
    'db_port' => $env['DB_PORT'] ?? '5432',
    'db_name' => $env['DB_NAME'] ?? 'escala',
    'db_user' => $env['DB_USER'] ?? '',
    'db_pass' => $env['DB_PASS'] ?? '',
    'app_key' => $env['APP_KEY'] ?? $defaults['app_key'],
    'admin_password' => $env['ADMIN_PASSWORD'] ?? $defaults['admin_password'],
    'log_path' => $env['LOG_PATH'] ?? $defaults['log_path'],
    'mail_driver' => $env['MAIL_DRIVER'] ?? $defaults['mail_driver'],
    'mail_from' => $env['MAIL_FROM'] ?? $defaults['mail_from'],
    'stripe_secret_key' => $env['STRIPE_SECRET_KEY'] ?? '',
    'stripe_price_id' => $env['STRIPE_PRICE_ID'] ?? '',
    'stripe_webhook_secret' => $env['STRIPE_WEBHOOK_SECRET'] ?? '',
    'stripe_trial_days' => (int) ($env['STRIPE_TRIAL_DAYS'] ?? 7),
    'openai_api_key' => $env['OPENAI_API_KEY'] ?? '',
    'openai_model' => $env['OPENAI_MODEL'] ?? 'gpt-4o-mini',
    'docker_runner' => filter_var($env['DOCKER_RUNNER'] ?? false, FILTER_VALIDATE_BOOLEAN),
    'github_client_id' => $env['GITHUB_CLIENT_ID'] ?? '',
    'github_client_secret' => $env['GITHUB_CLIENT_SECRET'] ?? '',
    'google_client_id' => $env['GOOGLE_CLIENT_ID'] ?? '',
    'google_client_secret' => $env['GOOGLE_CLIENT_SECRET'] ?? '',
    'backup_path' => $env['BACKUP_PATH'] ?? $defaults['backup_path'],
    'cron_secret' => $env['CRON_SECRET'] ?? '',
    'analytics_domain' => $env['ANALYTICS_DOMAIN'] ?? '',
    'smtp_host' => $env['SMTP_HOST'] ?? '',
    'smtp_port' => (int) ($env['SMTP_PORT'] ?? 587),
    'smtp_user' => $env['SMTP_USER'] ?? '',
    'smtp_pass' => $env['SMTP_PASS'] ?? '',
    'resend_api_key' => $env['RESEND_API_KEY'] ?? '',
]);
