<?php

declare(strict_types=1);

return static function (PDO $pdo): void {
    $pdo->exec(<<<'SQL'
        CREATE TABLE IF NOT EXISTS password_resets (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            email TEXT NOT NULL,
            token TEXT NOT NULL UNIQUE,
            expires_at TEXT NOT NULL,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS email_verifications (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            token TEXT NOT NULL UNIQUE,
            verified_at TEXT,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS oauth_accounts (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            provider TEXT NOT NULL,
            provider_id TEXT NOT NULL,
            created_at TEXT NOT NULL,
            UNIQUE(provider, provider_id)
        );

        CREATE TABLE IF NOT EXISTS user_totp (
            user_id INTEGER PRIMARY KEY,
            secret TEXT NOT NULL,
            enabled INTEGER NOT NULL DEFAULT 0
        );

        CREATE TABLE IF NOT EXISTS certificate_codes (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT,
            course_slug TEXT NOT NULL,
            verify_code TEXT NOT NULL UNIQUE,
            issued_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS review_schedule (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            course_slug TEXT NOT NULL,
            lesson_slug TEXT NOT NULL,
            next_review_at TEXT NOT NULL,
            interval_days INTEGER NOT NULL DEFAULT 1,
            ease_factor REAL NOT NULL DEFAULT 2.5,
            repetitions INTEGER NOT NULL DEFAULT 0,
            updated_at TEXT NOT NULL,
            UNIQUE(session_id, course_slug, lesson_slug)
        );

        CREATE TABLE IF NOT EXISTS daily_missions (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            mission_date TEXT NOT NULL,
            mission_key TEXT NOT NULL,
            completed INTEGER NOT NULL DEFAULT 0,
            xp_reward INTEGER NOT NULL DEFAULT 25,
            UNIQUE(session_id, mission_date, mission_key)
        );

        CREATE TABLE IF NOT EXISTS teams (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            slug TEXT NOT NULL UNIQUE,
            seats INTEGER NOT NULL DEFAULT 10,
            owner_id INTEGER NOT NULL,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS team_members (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            team_id INTEGER NOT NULL,
            user_id INTEGER NOT NULL,
            role TEXT NOT NULL DEFAULT 'member',
            joined_at TEXT NOT NULL,
            UNIQUE(team_id, user_id)
        );

        CREATE TABLE IF NOT EXISTS api_keys (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            name TEXT NOT NULL,
            key_hash TEXT NOT NULL UNIQUE,
            last_used_at TEXT,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS course_overrides (
            slug TEXT PRIMARY KEY,
            status TEXT,
            featured INTEGER,
            title TEXT,
            updated_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS learner_paths (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            path_slug TEXT NOT NULL,
            selected_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS chat_log (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            session_id TEXT NOT NULL,
            user_id INTEGER,
            question TEXT NOT NULL,
            answer TEXT NOT NULL,
            source TEXT NOT NULL DEFAULT 'rules',
            created_at TEXT NOT NULL
        );
    SQL);

    $driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
    if ($driver === 'sqlite') {
        $cols = $pdo->query('PRAGMA table_info(users)')->fetchAll();
        $names = array_column($cols, 'name');
        if (!in_array('email_verified_at', $names, true)) {
            $pdo->exec('ALTER TABLE users ADD COLUMN email_verified_at TEXT');
        }
        if (!in_array('locale', $names, true)) {
            $pdo->exec("ALTER TABLE users ADD COLUMN locale TEXT NOT NULL DEFAULT 'es'");
        }
        if (!in_array('theme', $names, true)) {
            $pdo->exec("ALTER TABLE users ADD COLUMN theme TEXT NOT NULL DEFAULT 'dark'");
        }
        if (!in_array('learning_path', $names, true)) {
            $pdo->exec('ALTER TABLE users ADD COLUMN learning_path TEXT');
        }
    }
};
