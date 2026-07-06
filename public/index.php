<?php

declare(strict_types=1);

$app = require __DIR__ . '/../bootstrap/app.php';

$app->router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
