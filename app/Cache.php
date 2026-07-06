<?php

declare(strict_types=1);

namespace App;

class Cache
{
    public function __construct(private string $directory)
    {
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $file = $this->path($key);
        if (!is_file($file)) {
            return $default;
        }

        $payload = json_decode((string) file_get_contents($file), true);
        if (!is_array($payload) || ($payload['expires_at'] ?? 0) < time()) {
            @unlink($file);
            return $default;
        }

        return $payload['value'] ?? $default;
    }

    public function set(string $key, mixed $value, int $ttlSeconds = 3600): void
    {
        $payload = json_encode([
            'value' => $value,
            'expires_at' => time() + $ttlSeconds,
        ], JSON_UNESCAPED_UNICODE);

        file_put_contents($this->path($key), $payload);
    }

    public function forget(string $key): void
    {
        $file = $this->path($key);
        if (is_file($file)) {
            unlink($file);
        }
    }

    private function path(string $key): string
    {
        return $this->directory . '/' . hash('sha256', $key) . '.json';
    }
}
