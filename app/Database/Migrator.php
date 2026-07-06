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

        $this->repairIncomplete([
            '001_platform_tables' => ['notifications'],
            '002_max_platform' => ['daily_missions', 'password_resets', 'user_totp'],
            '003_product_max' => ['user_sessions', 'comments', 'job_queue', 'learner_goals'],
        ]);

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

    /** @param array<string, list<string>> $sentinels */
    private function repairIncomplete(array $sentinels): void
    {
        foreach ($sentinels as $version => $tables) {
            $complete = true;
            foreach ($tables as $table) {
                if (!$this->tableExists($table)) {
                    $complete = false;
                    break;
                }
            }
            if ($complete) {
                continue;
            }

            $stmt = $this->pdo->prepare('DELETE FROM schema_migrations WHERE version = ?');
            $stmt->execute([$version]);
        }
    }

    private function tableExists(string $table): bool
    {
        $driver = $this->pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
        if ($driver === 'pgsql') {
            $stmt = $this->pdo->prepare('SELECT to_regclass(?) IS NOT NULL');
            $stmt->execute([$table]);

            return (bool) $stmt->fetchColumn();
        }

        $stmt = $this->pdo->prepare("SELECT name FROM sqlite_master WHERE type = 'table' AND name = ?");
        $stmt->execute([$table]);

        return (bool) $stmt->fetchColumn();
    }

    /** @return list<string> */
    private function appliedVersions(): array
    {
        $rows = $this->pdo->query('SELECT version FROM schema_migrations')->fetchAll();

        return array_column($rows, 'version');
    }
}
