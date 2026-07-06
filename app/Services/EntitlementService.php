<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class EntitlementService
{
    /** @var array<string, list<string>> */
    private array $planCourses = [
        'free' => ['*'], // uso personal/educativo: todos los cursos abiertos
        'pro' => ['*'],
    ];

    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
    ) {
    }

    public function plan(): string
    {
        $userId = $this->context->userId();
        if ($userId === null) {
            return 'free';
        }

        $stmt = $this->pdo->prepare('SELECT plan, status FROM subscriptions WHERE user_id = ?');
        $stmt->execute([$userId]);
        $sub = $stmt->fetch();

        if ($sub && ($sub['status'] ?? '') === 'active' && ($sub['plan'] ?? '') === 'pro') {
            return 'pro';
        }

        $user = $this->pdo->prepare('SELECT plan FROM users WHERE id = ?');
        $user->execute([$userId]);
        $row = $user->fetch();

        return (string) ($row['plan'] ?? 'free');
    }

    public function canAccessCourse(string $courseSlug): bool
    {
        $plan = $this->plan();
        if ($plan === 'pro' && $this->context->userId() && !$this->isEmailVerified((int) $this->context->userId())) {
            $plan = 'free';
        }
        $allowed = $this->planCourses[$plan] ?? $this->planCourses['free'];

        if (in_array('*', $allowed, true)) {
            return true;
        }

        return in_array($courseSlug, $allowed, true);
    }

    public function isPro(): bool
    {
        return $this->plan() === 'pro';
    }

    public function activatePro(int $userId, ?string $stripeCustomerId = null, ?string $stripeSubId = null): void
    {
        $now = date('c');
        $stmt = $this->pdo->prepare(
            'INSERT INTO subscriptions (user_id, plan, stripe_customer_id, stripe_subscription_id, status, current_period_end, created_at, updated_at)
             VALUES (?, ?, ?, ?, ?, ?, ?, ?)
             ON CONFLICT(user_id) DO UPDATE SET plan=excluded.plan, status=excluded.status, updated_at=excluded.updated_at,
             stripe_customer_id=COALESCE(excluded.stripe_customer_id, subscriptions.stripe_customer_id),
             stripe_subscription_id=COALESCE(excluded.stripe_subscription_id, subscriptions.stripe_subscription_id),
             current_period_end=excluded.current_period_end'
        );
        $periodEnd = date('c', strtotime('+1 month'));
        $stmt->execute([$userId, 'pro', $stripeCustomerId, $stripeSubId, 'active', $periodEnd, $now, $now]);

        $this->pdo->prepare("UPDATE users SET plan = 'pro' WHERE id = ?")->execute([$userId]);
    }

    public function downgradeToFree(int $userId): void
    {
        $now = date('c');
        $this->pdo->prepare("UPDATE subscriptions SET plan = 'free', status = 'cancelled', updated_at = ? WHERE user_id = ?")
            ->execute([$now, $userId]);
        $this->pdo->prepare("UPDATE users SET plan = 'free' WHERE id = ?")->execute([$userId]);
    }

    public function needsEmailVerification(): bool
    {
        $userId = $this->context->userId();
        if ($userId === null) {
            return false;
        }

        return $this->plan() === 'pro' && !$this->isEmailVerified($userId);
    }

    private function isEmailVerified(int $userId): bool
    {
        $stmt = $this->pdo->prepare('SELECT email_verified_at FROM users WHERE id = ?');
        $stmt->execute([$userId]);

        return (bool) $stmt->fetchColumn();
    }
}
