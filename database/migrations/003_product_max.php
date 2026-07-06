<?php

declare(strict_types=1);

return static function (PDO $pdo): void {
    $pdo->exec(<<<'SQL'
        CREATE TABLE IF NOT EXISTS user_sessions (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            session_token TEXT NOT NULL UNIQUE,
            ip TEXT,
            user_agent TEXT,
            last_seen TEXT NOT NULL,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS code_snapshots (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            language TEXT NOT NULL DEFAULT 'php',
            code TEXT NOT NULL,
            output TEXT,
            lesson_slug TEXT,
            course_slug TEXT,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS lesson_overrides (
            course_slug TEXT NOT NULL,
            lesson_slug TEXT NOT NULL,
            title TEXT,
            summary TEXT,
            exercises_json TEXT,
            status TEXT NOT NULL DEFAULT 'published',
            version INTEGER NOT NULL DEFAULT 1,
            updated_at TEXT NOT NULL,
            PRIMARY KEY (course_slug, lesson_slug)
        );

        CREATE TABLE IF NOT EXISTS comments (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            entity_type TEXT NOT NULL,
            entity_id TEXT NOT NULL,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            display_name TEXT NOT NULL,
            body TEXT NOT NULL,
            parent_id INTEGER,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS exam_attempts (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            exam_slug TEXT NOT NULL,
            score INTEGER NOT NULL DEFAULT 0,
            max_score INTEGER NOT NULL DEFAULT 0,
            answers_json TEXT,
            passed INTEGER NOT NULL DEFAULT 0,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS capstone_submissions (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            capstone_slug TEXT NOT NULL,
            code TEXT NOT NULL,
            status TEXT NOT NULL DEFAULT 'pending',
            score INTEGER,
            feedback TEXT,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS job_queue (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            type TEXT NOT NULL,
            payload TEXT NOT NULL,
            status TEXT NOT NULL DEFAULT 'pending',
            attempts INTEGER NOT NULL DEFAULT 0,
            run_at TEXT NOT NULL,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS learner_goals (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL UNIQUE,
            weekly_lessons INTEGER NOT NULL DEFAULT 5,
            updated_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS study_log (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            minutes INTEGER NOT NULL DEFAULT 15,
            lesson_slug TEXT,
            created_at TEXT NOT NULL
        );

        CREATE TABLE IF NOT EXISTS interview_scores (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT NOT NULL,
            stack TEXT NOT NULL,
            score INTEGER NOT NULL DEFAULT 0,
            total INTEGER NOT NULL DEFAULT 0,
            created_at TEXT NOT NULL
        );
    SQL);
};
