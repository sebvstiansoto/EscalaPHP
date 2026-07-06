<?php

declare(strict_types=1);

session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
    'httponly' => true,
    'samesite' => 'Lax',
]);

session_start();

$autoload = __DIR__ . '/../vendor/autoload.php';
if (is_file($autoload)) {
    require_once $autoload;
} else {
    spl_autoload_register(static function (string $class): void {
        $prefix = 'App\\';
        if (!str_starts_with($class, $prefix)) {
            return;
        }
        $file = __DIR__ . '/../app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (is_file($file)) {
            require $file;
        }
    });
}

use App\Http\ErrorHandler;
use App\Http\SecurityHeaders;

SecurityHeaders::apply();

$config = require __DIR__ . '/../config/app.php';
$GLOBALS['escala_config'] = $config;

use App\Application;
use App\Database;

$database = new Database($config);
$database->migrate();

$app = new Application($config, $database);
$GLOBALS['escala_app'] = $app;

(new ErrorHandler((bool) $config['debug'], $app->logger))->register();

require_once __DIR__ . '/../app/Support/Locale.php';
$locale = $_SESSION['locale'] ?? 'es';
if ($app->context->userId()) {
    $stmt = $app->context->pdo()->prepare('SELECT locale, theme FROM users WHERE id = ?');
    $stmt->execute([$app->context->userId()]);
    $prefs = $stmt->fetch();
    if ($prefs) {
        $locale = (string) ($prefs['locale'] ?? $locale);
        $_SESSION['locale'] = $locale;
        $_SESSION['theme'] = (string) ($prefs['theme'] ?? ($_SESSION['theme'] ?? 'dark'));
    }
} else {
    $_SESSION['locale'] = $_SESSION['locale'] ?? $locale;
    $_SESSION['theme'] = $_SESSION['theme'] ?? 'dark';
}
\App\Support\Locale::set($locale);

\App\View::boot($app);

require __DIR__ . '/../routes/web.php';

return $app;
