<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class Gamification
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
    ) {
    }

    public function sessionId(): string
    {
        return $this->context->sessionId();
    }

    /** @return array<string, mixed> */
    public function profile(): array
    {
        $this->ensureProfile();
        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare("SELECT * FROM learner WHERE {$where} LIMIT 1");
        $stmt->execute($params);

        return $stmt->fetch() ?: [];
    }

    public function syncDisplayName(string $name): void
    {
        $this->setName($name);
    }

    public function setName(string $name): void
    {
        $this->ensureProfile();
        $name = trim($name);
        if ($name === '') {
            return;
        }

        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare("UPDATE learner SET display_name = ?, updated_at = ? WHERE {$where}");
        $stmt->execute([mb_substr($name, 0, 40), date('c'), ...$params]);
    }

    public function addXp(int $amount, string $reason): void
    {
        $this->ensureProfile();
        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare("UPDATE learner SET xp = xp + ?, updated_at = ? WHERE {$where}");
        $stmt->execute([$amount, date('c'), ...$params]);

        $_SESSION['last_xp_reason'] = $reason;
        $_SESSION['last_xp_amount'] = $amount;
    }

    public function touchStreak(): void
    {
        $this->ensureProfile();
        $profile = $this->profile();
        $today = date('Y-m-d');
        $last = $profile['last_active_date'] ?? '';

        if ($last === $today) {
            return;
        }

        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $streak = ($last === $yesterday) ? ((int) $profile['streak'] + 1) : 1;

        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare(
            "UPDATE learner SET streak = ?, last_active_date = ?, updated_at = ? WHERE {$where}"
        );
        $stmt->execute([$streak, $today, date('c'), ...$params]);
    }

    public function incrementLabUses(): void
    {
        $this->ensureProfile();
        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare(
            "UPDATE learner SET lab_uses = lab_uses + 1, updated_at = ? WHERE {$where}"
        );
        $stmt->execute([date('c'), ...$params]);
    }

    public function setGoal(string $goal): void
    {
        $this->ensureProfile();
        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare("UPDATE learner SET goal = ?, updated_at = ? WHERE {$where}");
        $stmt->execute([mb_substr(trim($goal), 0, 200), date('c'), ...$params]);
    }

    /** @return list<array<string, mixed>> */
    public function leaderboard(int $limit = 10): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT display_name, xp, streak FROM learner WHERE xp > 0 ORDER BY xp DESC, streak DESC LIMIT ?'
        );
        $stmt->execute([$limit]);

        return $stmt->fetchAll();
    }

    private function ensureProfile(): void
    {
        [$where, $params] = $this->context->learnerFilter();
        $stmt = $this->pdo->prepare("SELECT id FROM learner WHERE {$where} LIMIT 1");
        $stmt->execute($params);

        if ($stmt->fetch()) {
            return;
        }

        $now = date('c');
        $insert = $this->pdo->prepare(
            'INSERT INTO learner (session_id, user_id, display_name, xp, streak, last_active_date, created_at, updated_at)
             VALUES (?, ?, ?, 0, 0, ?, ?, ?)'
        );
        $insert->execute([
            $this->context->sessionId(),
            $this->context->userId(),
            'Aprendiz',
            date('Y-m-d'),
            $now,
            $now,
        ]);
    }
}
