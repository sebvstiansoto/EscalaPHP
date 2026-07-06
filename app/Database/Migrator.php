<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class Migrator
{
    public function __construct(private PDO $pdo, private string $migrationsPath)
    {
    }

    public function run(): void
    {
        $this->pdo->exec('CREATE TABLE IF NOT EXISTS schema_migrations (version TEXT PRIMARY KEY, applied_at TEXT NOT NULL)');

        $applied = $this->appliedVersions();
        $files = glob($this->migrationsPath . '/*.php') ?: [];
        sort($files);

        foreach ($files as $file) {
            $version = basename($file, '.php');
            if (in_array($version, $applied, true)) {
                continue;
            }

            /** @var callable(PDO): void $migration */
            $migration = require $file;
            $migration($this->pdo);

            $stmt = $this->pdo->prepare('INSERT INTO schema_migrations (version, applied_at) VALUES (?, ?)');
            $stmt->execute([$version, date('c')]);
        }
    }

    /** @return list<string> */
    private function appliedVersions(): array
    {
        $rows = $this->pdo->query('SELECT version FROM schema_migrations')->fetchAll();

        return array_column($rows, 'version');
    }
}
