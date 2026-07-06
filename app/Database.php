<?php

declare(strict_types=1);

namespace App;

use PDO;

class Database
{
    private PDO $pdo;

    /** @param array<string, mixed> $config */
    public function __construct(array $config)
    {
        $driver = (string) ($config['db_driver'] ?? 'sqlite');

        if ($driver === 'pgsql') {
            $dsn = sprintf(
                'pgsql:host=%s;port=%s;dbname=%s',
                $config['db_host'] ?? 'localhost',
                $config['db_port'] ?? '5432',
                $config['db_name'] ?? 'escala'
            );
            $this->pdo = new PDO($dsn, (string) ($config['db_user'] ?? ''), (string) ($config['db_pass'] ?? ''));
        } else {
            $path = (string) ($config['database'] ?? __DIR__ . '/../database/escala.sqlite');
            $dir = dirname($path);
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
            $this->pdo = new PDO('sqlite:' . $path);
        }

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function pdo(): PDO
    {
        return $this->pdo;
    }

    public function migrate(): void
    {
        $this->pdo->exec(<<<'SQL'
            CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                email TEXT NOT NULL UNIQUE,
                password_hash TEXT NOT NULL,
                display_name TEXT NOT NULL,
                created_at TEXT NOT NULL
            );

            CREATE TABLE IF NOT EXISTS progress (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                session_id TEXT NOT NULL,
                user_id INTEGER,
                course_slug TEXT NOT NULL DEFAULT 'php-fundamentos',
                lesson_slug TEXT NOT NULL,
                exercise_index INTEGER NOT NULL DEFAULT 0,
                mentor_step INTEGER NOT NULL DEFAULT 0,
                completed INTEGER NOT NULL DEFAULT 0,
                updated_at TEXT NOT NULL
            );

            CREATE TABLE IF NOT EXISTS glossary_views (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                term_slug TEXT NOT NULL,
                viewed_at TEXT NOT NULL
            );

            CREATE TABLE IF NOT EXISTS learner (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                session_id TEXT NOT NULL,
                user_id INTEGER,
                display_name TEXT NOT NULL DEFAULT 'Aprendiz',
                xp INTEGER NOT NULL DEFAULT 0,
                streak INTEGER NOT NULL DEFAULT 0,
                last_active_date TEXT,
                lab_uses INTEGER NOT NULL DEFAULT 0,
                goal TEXT,
                created_at TEXT NOT NULL,
                updated_at TEXT NOT NULL
            );

            CREATE TABLE IF NOT EXISTS achievements (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                session_id TEXT NOT NULL,
                user_id INTEGER,
                achievement_id TEXT NOT NULL,
                earned_at TEXT NOT NULL
            );

            CREATE TABLE IF NOT EXISTS project_completions (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                session_id TEXT NOT NULL,
                user_id INTEGER,
                lesson_slug TEXT NOT NULL,
                completed_at TEXT NOT NULL
            );

            CREATE TABLE IF NOT EXISTS chat_log (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                session_id TEXT NOT NULL,
                user_id INTEGER,
                question TEXT NOT NULL,
                answer TEXT NOT NULL,
                created_at TEXT NOT NULL
            );
        SQL);

        foreach (['progress', 'learner', 'achievements', 'project_completions'] as $table) {
            $this->ensureColumn($table, 'user_id', 'INTEGER');
        }
        $this->ensureColumn('progress', 'course_slug', "TEXT NOT NULL DEFAULT 'php-fundamentos'");
        $this->ensureColumn('learner', 'lab_uses', 'INTEGER NOT NULL DEFAULT 0');
        $this->ensureColumn('learner', 'goal', 'TEXT');

        $this->pdo->exec('CREATE UNIQUE INDEX IF NOT EXISTS idx_progress_session_course_lesson ON progress(session_id, course_slug, lesson_slug)');
        $this->pdo->exec('CREATE UNIQUE INDEX IF NOT EXISTS idx_progress_user_course_lesson ON progress(user_id, course_slug, lesson_slug) WHERE user_id IS NOT NULL');
        $this->pdo->exec('CREATE UNIQUE INDEX IF NOT EXISTS idx_achievements_user ON achievements(user_id, achievement_id) WHERE user_id IS NOT NULL');
        $this->pdo->exec('CREATE UNIQUE INDEX IF NOT EXISTS idx_projects_user ON project_completions(user_id, lesson_slug) WHERE user_id IS NOT NULL');

        $migrator = new \App\Database\Migrator($this->pdo, dirname(__DIR__) . '/database/migrations');
        $migrator->run();
    }

    private function ensureColumn(string $table, string $column, string $definition): void
    {
        $driver = $this->pdo->getAttribute(\PDO::ATTR_DRIVER_NAME);

        if ($driver === 'pgsql') {
            $this->pdo->exec("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} {$definition}");
            return;
        }

        $cols = $this->pdo->query("PRAGMA table_info({$table})")->fetchAll();
        foreach ($cols as $col) {
            if (($col['name'] ?? '') === $column) {
                return;
            }
        }

        $this->pdo->exec("ALTER TABLE {$table} ADD COLUMN {$column} {$definition}");
    }
}
