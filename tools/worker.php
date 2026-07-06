<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

/** @var App\Application $app */
$n = $app->jobs->process(25);
echo "Processed {$n} jobs\n";
