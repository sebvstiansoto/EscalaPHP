<?php

declare(strict_types=1);

namespace App\Support;

class Env
{
    /** @param array<string, mixed> $defaults */
    public static function load(string $envPath, array $defaults = []): array
    {
        $envFile = str_ends_with($envPath, '.env') ? $envPath : $envPath . '/.env';
        $vars = $defaults;

        if (is_file($envFile)) {
            foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                $line = trim($line);
                if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
                    continue;
                }
                [$k, $v] = explode('=', $line, 2);
                $vars[trim($k)] = trim($v, " \t\"'");
            }
        }

        foreach ($vars as $k => $v) {
            if (getenv($k) !== false) {
                $vars[$k] = getenv($k);
            }
        }

        return $vars;
    }
}
