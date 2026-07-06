<?php

declare(strict_types=1);

return static function (PDO $pdo): void {
    $driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);

    $pdo->exec(<<<'SQL'
        CREATE TABLE IF NOT EXISTS notifications (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            session_id TEXT,
            type TEXT NOT NULL,
            title TEXT NOT NULL,
            body TEXT NOT NULL,
            read_at TEXT,
            created_at TEXT NOT NULL
        )
    SQL);

    $pdo->exec(<<<'SQL'
        CREATE TABLE IF NOT EXISTS subscriptions (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL UNIQUE,
            plan TEXT NOT NULL DEFAULT 'free',
            stripe_customer_id TEXT,
            stripe_subscription_id TEXT,
            status TEXT NOT NULL DEFAULT 'active',
            current_period_end TEXT,
            created_at TEXT NOT NULL,
            updated_at TEXT NOT NULL
        )
    SQL);

    $pdo->exec(<<<'SQL'
        CREATE TABLE IF NOT EXISTS email_log (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            recipient TEXT NOT NULL,
            subject TEXT NOT NULL,
            body TEXT NOT NULL,
            sent_at TEXT NOT NULL
        )
    SQL);

    if ($driver === 'sqlite') {
        $cols = $pdo->query('PRAGMA table_info(users)')->fetchAll();
        $hasAdmin = false;
        $hasPlan = false;
        foreach ($cols as $col) {
            if (($col['name'] ?? '') === 'is_admin') {
                $hasAdmin = true;
            }
            if (($col['name'] ?? '') === 'plan') {
                $hasPlan = true;
            }
        }
        if (!$hasAdmin) {
            $pdo->exec('ALTER TABLE users ADD COLUMN is_admin INTEGER NOT NULL DEFAULT 0');
        }
        if (!$hasPlan) {
            $pdo->exec("ALTER TABLE users ADD COLUMN plan TEXT NOT NULL DEFAULT 'free'");
        }
    } else {
        $pdo->exec('ALTER TABLE users ADD COLUMN IF NOT EXISTS is_admin INTEGER NOT NULL DEFAULT 0');
        $pdo->exec("ALTER TABLE users ADD COLUMN IF NOT EXISTS plan TEXT NOT NULL DEFAULT 'free'");
    }
};
