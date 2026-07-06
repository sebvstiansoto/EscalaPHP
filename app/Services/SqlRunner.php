<?php

declare(strict_types=1);

namespace App\Services;

use PDO;
use Throwable;

/**
 * Ejecuta consultas SELECT en SQLite en memoria con datos de práctica.
 */
class SqlRunner
{
    /** @var list<string> */
    private array $blockedPatterns = [
        '/\b(INSERT|UPDATE|DELETE|DROP|ALTER|CREATE|ATTACH|DETACH|REPLACE|TRUNCATE)\b/i',
        '/\b(PRAGMA|VACUUM|REINDEX)\b/i',
    ];

    public function run(string $sql): array
    {
        $sql = trim(rtrim(trim($sql), ';'));
        if ($sql === '') {
            return ['ok' => false, 'output' => '', 'error' => 'Escribe una consulta SQL.'];
        }

        if (str_contains($sql, ';')) {
            return ['ok' => false, 'output' => '', 'error' => 'Una sola consulta por envío.'];
        }

        if (!preg_match('/^\s*SELECT\b/i', $sql)) {
            return ['ok' => false, 'output' => '', 'error' => 'Solo se permiten consultas SELECT.'];
        }

        foreach ($this->blockedPatterns as $pattern) {
            if (preg_match($pattern, $sql)) {
                return ['ok' => false, 'output' => '', 'error' => 'Operación no permitida en el sandbox SQL.'];
            }
        }

        try {
            $pdo = new PDO('sqlite::memory:');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->seed($pdo);

            $stmt = $pdo->query($sql);
            if ($stmt === false) {
                return ['ok' => false, 'output' => '', 'error' => 'No se pudo ejecutar la consulta.'];
            }

            /** @var list<array<string, mixed>> $rows */
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return [
                'ok' => true,
                'output' => $this->formatRows($rows),
                'error' => '',
            ];
        } catch (Throwable $e) {
            return ['ok' => false, 'output' => '', 'error' => $e->getMessage()];
        }
    }

    private function seed(PDO $pdo): void
    {
        $pdo->exec('CREATE TABLE users (id INTEGER PRIMARY KEY, name TEXT NOT NULL, city TEXT NOT NULL)');
        $pdo->exec('CREATE TABLE orders (id INTEGER PRIMARY KEY, user_id INTEGER NOT NULL, product TEXT NOT NULL, amount INTEGER NOT NULL)');
        $pdo->exec("INSERT INTO users VALUES (1, 'Ana', 'Barcelona'), (2, 'Luis', 'Madrid'), (3, 'María', 'Valencia')");
        $pdo->exec("INSERT INTO orders VALUES (1, 1, 'Laptop', 1200), (2, 2, 'Mouse', 25)");
    }

    /** @param list<array<string, mixed>> $rows */
    private function formatRows(array $rows): string
    {
        if ($rows === []) {
            return '(0 filas)';
        }

        $headers = array_keys($rows[0]);
        $lines = [implode('|', $headers)];
        foreach ($rows as $row) {
            $lines[] = implode('|', array_map(static fn ($v) => (string) $v, array_values($row)));
        }

        return implode("\n", $lines);
    }
}
