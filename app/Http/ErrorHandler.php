<?php

declare(strict_types=1);

namespace App\Http;

use App\Support\Logger;
use App\View;
use Throwable;

class ErrorHandler
{
    public function __construct(
        private bool $debug,
        private Logger $logger,
    ) {
    }

    public function register(): void
    {
        set_exception_handler([$this, 'handleException']);
        set_error_handler([$this, 'handleError']);
    }

    public function handleException(Throwable $e): void
    {
        $this->logger->error($e->getMessage(), [
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'trace' => $e->getTraceAsString(),
        ]);

        if (headers_sent()) {
            echo $this->debug ? $e->getMessage() : 'Error interno del servidor.';
            return;
        }

        http_response_code(500);
        if ($this->debug) {
            echo '<pre>' . htmlspecialchars($e->getMessage() . "\n" . $e->getTraceAsString()) . '</pre>';
            return;
        }

        echo View::render('errors/500', []);
    }

    public function handleError(int $severity, string $message, string $file, int $line): bool
    {
        if (!(error_reporting() & $severity)) {
            return false;
        }

        throw new \ErrorException($message, 0, $severity, $file, $line);
    }
}
