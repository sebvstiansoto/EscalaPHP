<?php

declare(strict_types=1);

namespace App;

use App\Services\CodeRunner;
use App\Services\PythonCodeRunner;
use App\Services\SqlRunner;

class ExerciseValidator
{
    public function __construct(
        private CodeRunner $phpRunner = new CodeRunner(),
        private PythonCodeRunner $pythonRunner = new PythonCodeRunner(),
        private SqlRunner $sqlRunner = new SqlRunner(),
    ) {
    }

    /** @param array<string, mixed> $exercise */
    public function validate(array $exercise, string $answer): array
    {
        $type = $exercise['type'] ?? 'exact';
        $normalized = trim($answer);

        return match ($type) {
            'choice' => $this->validateChoice($exercise, $normalized),
            'contains' => $this->validateContains($exercise, $normalized),
            'code' => $this->validateCode($exercise, $answer),
            'js' => $this->validateJs($exercise, $answer),
            'sql' => $this->validateSql($exercise, $answer),
            'min_length' => $this->validateMinLength($exercise, $normalized),
            default => $this->validateExact($exercise, $normalized),
        };
    }

    /**
     * JavaScript se ejecuta en el navegador del alumno. El navegador envía
     * la salida capturada de console.log en `answer` y aquí comparamos.
     *
     * @param array<string, mixed> $exercise
     */
    private function validateJs(array $exercise, string $output): array
    {
        $expected = trim((string) ($exercise['expected_output'] ?? ''));
        $got = trim($output);
        $ok = $got === $expected;

        return [
            'ok' => $ok,
            'message' => $ok
                ? 'Tu código JavaScript produjo la salida esperada.'
                : "Salida: «{$got}». Esperada: «{$expected}».",
            'output' => $got,
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function validateSql(array $exercise, string $sql): array
    {
        $run = $this->sqlRunner->run($sql);
        if (!$run['ok']) {
            return ['ok' => false, 'message' => $run['error']];
        }

        $expected = trim((string) ($exercise['expected_output'] ?? ''));
        $output = trim((string) $run['output']);
        $ok = $output === $expected;

        return [
            'ok' => $ok,
            'message' => $ok
                ? 'Tu consulta SQL devolvió el resultado esperado.'
                : "Salida:\n{$output}\n\nEsperada:\n{$expected}",
            'output' => $output,
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function validateMinLength(array $exercise, string $answer): array
    {
        $min = (int) ($exercise['min_length'] ?? 10);
        $ok = mb_strlen($answer) >= $min;

        return [
            'ok' => $ok,
            'message' => $ok
                ? 'Meta registrada. ¡Ahora ve y ejecútala!'
                : "Escribe al menos {$min} caracteres.",
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function validateChoice(array $exercise, string $answer): array
    {
        $expected = (string) ($exercise['answer'] ?? '');
        $ok = strcasecmp($answer, $expected) === 0;

        return [
            'ok' => $ok,
            'message' => $ok
                ? 'Correcto. Siguiente paso desbloqueado.'
                : 'Revisa lo que te mostró el mentor e inténtalo otra vez.',
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function validateExact(array $exercise, string $answer): array
    {
        $expected = trim((string) ($exercise['answer'] ?? ''));
        $ok = $answer === $expected;

        return [
            'ok' => $ok,
            'message' => $ok ? '¡Excelente!' : 'Casi. Compara espacios, mayúsculas y símbolos.',
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function validateContains(array $exercise, string $answer): array
    {
        $needles = $exercise['must_contain'] ?? [];
        $missing = [];
        foreach ($needles as $needle) {
            if (!str_contains($answer, (string) $needle)) {
                $missing[] = $needle;
            }
        }

        if ($missing === [] && ($exercise['language'] ?? '') === 'python') {
            $run = $this->pythonRunner->run($answer);
            if (!$run['ok']) {
                return ['ok' => false, 'message' => $run['error']];
            }
        }

        return [
            'ok' => $missing === [],
            'message' => $missing === []
                ? 'Tu respuesta incluye los elementos clave.'
                : 'Falta incluir: ' . implode(', ', $missing),
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function validateCode(array $exercise, string $code): array
    {
        $language = (string) ($exercise['language'] ?? 'php');
        $run = $language === 'python'
            ? $this->pythonRunner->run($code)
            : $this->phpRunner->run($code);

        if (!$run['ok']) {
            return ['ok' => false, 'message' => $run['error']];
        }

        $expected = trim((string) ($exercise['expected_output'] ?? ''));
        $output = $run['output'];
        $ok = $output === $expected;

        return [
            'ok' => $ok,
            'message' => $ok
                ? 'Tu código produjo el resultado esperado.'
                : "Salida: «{$output}». Esperada: «{$expected}».",
            'output' => $output,
        ];
    }
}
