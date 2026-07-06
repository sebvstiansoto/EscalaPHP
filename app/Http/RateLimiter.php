<?php

declare(strict_types=1);

namespace App\Http;

class RateLimiter
{
    public function __construct(private string $storagePath)
    {
        if (!is_dir($storagePath)) {
            mkdir($storagePath, 0777, true);
        }
    }

    public function tooManyAttempts(string $key, int $maxAttempts, int $decaySeconds): bool
    {
        $data = $this->read($key);
        $now = time();

        $data = array_filter($data, fn ($ts) => $ts > $now - $decaySeconds);

        return count($data) >= $maxAttempts;
    }

    public function hit(string $key): void
    {
        $data = $this->read($key);
        $data[] = time();
        file_put_contents($this->path($key), json_encode(array_values($data)));
    }

    /** @return array{ok: bool, retry_after?: int} */
    public function check(string $key, int $maxAttempts = 30, int $decaySeconds = 60): array
    {
        if ($this->tooManyAttempts($key, $maxAttempts, $decaySeconds)) {
            return ['ok' => false, 'retry_after' => $decaySeconds];
        }

        $this->hit($key);

        return ['ok' => true];
    }

    /** @return list<int> */
    private function read(string $key): array
    {
        $file = $this->path($key);
        if (!is_file($file)) {
            return [];
        }

        $data = json_decode((string) file_get_contents($file), true);

        return is_array($data) ? $data : [];
    }

    private function path(string $key): string
    {
        return $this->storagePath . '/' . hash('sha256', $key) . '.json';
    }
}
