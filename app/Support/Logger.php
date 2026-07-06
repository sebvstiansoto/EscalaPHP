<?php

declare(strict_types=1);

namespace App\Support;

class Logger
{
    public function __construct(private string $logPath)
    {
        $dir = dirname($logPath);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    public function info(string $message, array $context = []): void
    {
        $this->write('INFO', $message, $context);
    }

    public function error(string $message, array $context = []): void
    {
        $this->write('ERROR', $message, $context);
    }

    public function warning(string $message, array $context = []): void
    {
        $this->write('WARNING', $message, $context);
    }

    private function write(string $level, string $message, array $context): void
    {
        $line = sprintf(
            "[%s] %s %s\n",
            date('c'),
            $level,
            $message . ($context !== [] ? ' ' . json_encode($context, JSON_UNESCAPED_UNICODE) : '')
        );
        file_put_contents($this->logPath, $line, FILE_APPEND | LOCK_EX);
    }
}
