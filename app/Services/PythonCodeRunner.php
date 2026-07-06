<?php

declare(strict_types=1);

namespace App\Services;

class PythonCodeRunner
{
    /** @var list<string> */
    private array $blockedPatterns = [
        '/\b(import os|import subprocess|import shutil|import sys|from os|from subprocess)\b/i',
        '/\b(open|exec|eval|compile|__import__)\s*\(/i',
        '/\bos\.(system|popen|remove|rmdir)\b/i',
    ];

    private ?string $binary = null;

    public function run(string $code): array
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

        $binary = $this->resolveBinary();
        if ($binary === null) {
            return [
                'ok' => false,
                'output' => '',
                'error' => 'Python no está instalado. Instala Python 3 desde python.org y reinicia.',
            ];
        }

        $sandbox = tempnam(sys_get_temp_dir(), 'escala_py_');
        if ($sandbox === false) {
            return ['ok' => false, 'output' => '', 'error' => 'No se pudo crear el entorno de prueba.'];
        }

        $file = $sandbox . '.py';
        rename($sandbox, $file);
        file_put_contents($file, $code);

        $cmd = escapeshellarg($binary) . ' ' . escapeshellarg($file) . ' 2>&1';
        $output = [];
        $exitCode = 0;
        exec($cmd, $output, $exitCode);
        @unlink($file);

        $text = rtrim(implode("\n", $output));

        if ($exitCode !== 0 && $text === '') {
            return ['ok' => false, 'output' => '', 'error' => 'Error al ejecutar Python (código ' . $exitCode . ').'];
        }

        if ($exitCode !== 0) {
            return ['ok' => false, 'output' => $text, 'error' => $text];
        }

        return ['ok' => true, 'output' => $text, 'error' => ''];
    }

    private function resolveBinary(): ?string
    {
        if ($this->binary !== null) {
            return $this->binary;
        }

        foreach (['python', 'py', 'python3'] as $candidate) {
            $check = escapeshellarg($candidate) . ' --version 2>&1';
            exec($check, $out, $code);
            if ($code === 0) {
                $this->binary = $candidate;
                return $candidate;
            }
        }

        return null;
    }
}
