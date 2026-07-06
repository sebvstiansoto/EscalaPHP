<?php

declare(strict_types=1);

namespace App\Services;

class CodeRunner
{
    /** @var list<string> */
    private array $blockedPatterns = [
        '/\b(system|exec|shell_exec|passthru|proc_open|popen|pcntl_)\b/i',
        '/`/',
        '/\b(fopen|file_put_contents|unlink|rmdir|mkdir|chmod|chown)\s*\(/i',
        '/\b(include|require)(_once)?\s*\(?\s*[\'"]/i',
    ];

    public function run(string $code, bool $wrapPhp = true): array
    {
        foreach ($this->blockedPatterns as $pattern) {
            if (preg_match($pattern, $code)) {
                return [
                    'ok' => false,
                    'output' => '',
                    'error' => 'Por seguridad, esa instrucción no está permitida en el laboratorio.',
                ];
            }
        }

        $sandbox = tempnam(sys_get_temp_dir(), 'escala_');
        if ($sandbox === false) {
            return ['ok' => false, 'output' => '', 'error' => 'No se pudo crear el entorno de prueba.'];
        }

        $payload = $wrapPhp && !str_contains($code, '<?php')
            ? "<?php\n" . $code
            : $code;

        file_put_contents($sandbox, $payload);

        ob_start();
        try {
            include $sandbox;
            $output = (string) ob_get_clean();
            @unlink($sandbox);

            return ['ok' => true, 'output' => rtrim($output), 'error' => ''];
        } catch (\Throwable $e) {
            ob_end_clean();
            @unlink($sandbox);

            return ['ok' => false, 'output' => '', 'error' => $e->getMessage()];
        }
    }
}
