<?php

declare(strict_types=1);

namespace App\Services;

class DockerRunner
{
    public function __construct(private bool $enabled = false)
    {
    }

    public function isEnabled(): bool
    {
        return $this->enabled && $this->dockerAvailable();
    }

    /** @return array{ok: bool, output: string, error: string, sandbox?: string} */
    public function run(string $code, string $language = 'php'): array
    {
        if (!$this->isEnabled()) {
            return ['ok' => false, 'output' => '', 'error' => 'Ejecución Docker no habilitada.'];
        }

        $image = match ($language) {
            'python' => 'python:3.12-alpine',
            default => 'php:8.3-cli-alpine',
        };

        $ext = $language === 'python' ? 'py' : 'php';
        $dir = sys_get_temp_dir() . '/escala_docker_' . bin2hex(random_bytes(6));
        mkdir($dir, 0700, true);
        $file = $dir . '/main.' . $ext;

        $payload = $language === 'php' && !str_contains($code, '<?php')
            ? "<?php\n" . $code
            : $code;
        file_put_contents($file, $payload);

        $cmd = $language === 'python'
            ? sprintf('docker run --rm --network=none --memory=64m --cpus=0.5 -v %s:/code:ro %s python /code/main.py 2>&1', escapeshellarg($dir), escapeshellarg($image))
            : sprintf('docker run --rm --network=none --memory=64m --cpus=0.5 -v %s:/code:ro %s php /code/main.php 2>&1', escapeshellarg($dir), escapeshellarg($image));

        $output = [];
        $code = 0;
        exec($cmd, $output, $code);
        @unlink($file);
        @rmdir($dir);

        $text = implode("\n", $output);

        return [
            'ok' => $code === 0,
            'output' => $text,
            'error' => $code === 0 ? '' : trim($text),
            'sandbox' => 'docker',
        ];
    }

    private function dockerAvailable(): bool
    {
        $out = [];
        exec('docker version --format "{{.Server.Version}}" 2>&1', $out, $code);

        return $code === 0 && ($out[0] ?? '') !== '';
    }
}
