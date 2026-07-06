<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Feedback pedagógico adaptado al lenguaje del ejercicio (PHP, Python, etc.).
 */
class MentorFeedback
{
    private const PRAISE = [
        '¡Excelente! 🙌',
        '¡Muy bien! 👏',
        '¡Lo lograste! 🎯',
        '¡Perfecto! ✨',
        '¡Así se hace! 🚀',
    ];

    private const ENCOURAGE = [
        'Tranquilo, casi lo tienes. 💪',
        'Vas bien, solo un detalle. 🔍',
        'No te preocupes, es parte de aprender. 🌱',
        'Buen intento — afinemos un poco. 🛠️',
    ];

    /** @param array<string, mixed> $exercise */
    /** @param array<string, mixed> $result */
    public function forResult(array $exercise, array $result, string $answer, int $attempts): array
    {
        $ok = (bool) ($result['ok'] ?? false);

        if ($ok) {
            return [
                'ok' => true,
                'headline' => $this->pick(self::PRAISE),
                'why' => $this->whyItWorked($exercise, $result),
                'tip' => $exercise['pro_tip'] ?? null,
                'output' => $result['output'] ?? null,
            ];
        }

        return [
            'ok' => false,
            'headline' => $this->pick(self::ENCOURAGE),
            'why' => $result['message'] ?? 'Revisemos tu respuesta.',
            'tip' => $this->adaptiveHint($exercise, $answer, $attempts, $result),
            'output' => $result['output'] ?? null,
        ];
    }

    /** @param array<string, mixed> $exercise */
    private function isPython(array $exercise): bool
    {
        return ($exercise['language'] ?? '') === 'python';
    }

    /** @param array<string, mixed> $exercise */
    /** @param array<string, mixed> $result */
    private function whyItWorked(array $exercise, array $result): string
    {
        if (!empty($exercise['explanation'])) {
            return (string) $exercise['explanation'];
        }

        $type = $exercise['type'] ?? 'exact';
        $lang = $this->isPython($exercise) ? 'Python' : 'PHP';

        return match ($type) {
            'code' => "Tu código se ejecutó en {$lang} real y produjo la salida esperada.",
            'js' => 'Tu JavaScript corrió en el navegador y produjo la salida esperada.',
            'sql' => 'Tu consulta SQL se ejecutó en SQLite real y devolvió el resultado correcto.',
            'choice' => 'Elegiste la opción correcta. Entender el porqué es lo que te separa de memorizar.',
            'contains' => 'Incluiste todas las piezas clave. En programación, cada símbolo cuenta.',
            'min_length' => 'Registrado. Tener claro tu objetivo es el primer paso de todo proyecto grande.',
            default => 'Coincide exactamente con lo esperado.',
        };
    }

    /** @param array<string, mixed> $exercise */
    /** @param array<string, mixed> $result */
    private function adaptiveHint(array $exercise, string $answer, int $attempts, array $result): string
    {
        $type = $exercise['type'] ?? 'exact';

        if ($type === 'code') {
            return $this->codeHint($exercise, $answer, $attempts, $result);
        }

        if ($type === 'js') {
            if (!str_contains($answer, 'console.log')) {
                return 'Usa `console.log(...)` para mostrar valores en JavaScript.';
            }
            if ($attempts >= 3 && !empty($exercise['hint'])) {
                return 'Pista fuerte: ' . (string) $exercise['hint'];
            }
            return !empty($exercise['hint']) ? (string) $exercise['hint'] : 'Revisa comillas y punto y coma.';
        }

        if ($type === 'sql') {
            if (!preg_match('/^\s*SELECT/i', $answer)) {
                return 'La consulta debe empezar con `SELECT`.';
            }
            if ($attempts >= 3 && !empty($exercise['hint'])) {
                return 'Pista fuerte: ' . (string) $exercise['hint'];
            }
            return !empty($exercise['hint']) ? (string) $exercise['hint'] : 'Revisa nombres de tablas (users, orders) y comillas en strings.';
        }

        if ($type === 'contains') {
            $missing = $this->missingPieces($exercise, $answer);
            if ($attempts >= 2 && $missing !== []) {
                return 'Fíjate en incluir: ' . implode(', ', array_map(fn ($m) => "`{$m}`", $missing)) . '.';
            }
            if ($this->isPython($exercise)) {
                return 'Revisa indentación (4 espacios) y que uses `print()` para mostrar salida.';
            }
            return 'Asegúrate de incluir cada parte, con `$` en variables y `;` al final en PHP.';
        }

        if ($type === 'choice') {
            if ($attempts >= 2) {
                return 'Vuelve al paso anterior del mentor y relee la explicación.';
            }
            return 'Descarta las opciones que claramente no encajan con lo que viste.';
        }

        if (!empty($exercise['hint'])) {
            return (string) $exercise['hint'];
        }

        return 'Compara con cuidado: mayúsculas, espacios y símbolos deben coincidir.';
    }

    /** @param array<string, mixed> $exercise */
    /** @param array<string, mixed> $result */
    private function codeHint(array $exercise, string $answer, int $attempts, array $result): string
    {
        if ($this->isPython($exercise)) {
            return $this->pythonCodeHint($exercise, $answer, $attempts, $result);
        }

        return $this->phpCodeHint($exercise, $answer, $attempts, $result);
    }

    /** @param array<string, mixed> $exercise */
    /** @param array<string, mixed> $result */
    private function pythonCodeHint(array $exercise, string $answer, int $attempts, array $result): string
    {
        if (!str_contains($answer, 'print')) {
            return 'Para mostrar texto en Python usa `print(...)`.';
        }
        if (str_contains($answer, 'if ') && !preg_match('/:\s*\n/', $answer)) {
            return 'Después de `if condición:` va dos puntos `:` y la siguiente línea indentada con 4 espacios.';
        }
        $output = trim((string) ($result['output'] ?? ''));
        $expected = trim((string) ($exercise['expected_output'] ?? ''));
        if ($output !== '' && $output !== $expected && mb_strtolower($output) === mb_strtolower($expected)) {
            return 'Casi: Python distingue mayúsculas en la salida.';
        }
        if ($attempts >= 3 && !empty($exercise['hint'])) {
            return 'Pista fuerte: ' . (string) $exercise['hint'];
        }
        return !empty($exercise['hint']) ? (string) $exercise['hint'] : 'Revisa comillas y paréntesis en print().';
    }

    /** @param array<string, mixed> $exercise */
    /** @param array<string, mixed> $result */
    private function phpCodeHint(array $exercise, string $answer, int $attempts, array $result): string
    {
        if (!str_contains($answer, 'echo')) {
            return 'Para mostrar algo en PHP necesitas `echo`.';
        }
        if (!str_contains($answer, ';')) {
            return 'Cada instrucción en PHP termina con `;`.';
        }
        if ($attempts >= 3 && !empty($exercise['hint'])) {
            return 'Pista fuerte: ' . (string) $exercise['hint'];
        }
        return !empty($exercise['hint']) ? (string) $exercise['hint'] : 'Revisa comillas simples o dobles en echo.';
    }

    /** @param array<string, mixed> $exercise */
    /** @return list<string> */
    private function missingPieces(array $exercise, string $answer): array
    {
        $missing = [];
        foreach (($exercise['must_contain'] ?? []) as $needle) {
            if (!str_contains($answer, (string) $needle)) {
                $missing[] = (string) $needle;
            }
        }

        return $missing;
    }

    /** @param list<string> $pool */
    private function pick(array $pool): string
    {
        return $pool[array_rand($pool)];
    }
}
