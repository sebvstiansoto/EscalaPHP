<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use PDO;

class AdminService
{
    public function __construct(private PDO $pdo)
    {
    }

    public function stats(): array
    {
        return [
            'users' => (int) $this->pdo->query('SELECT COUNT(*) FROM users')->fetchColumn(),
            'learners' => (int) $this->pdo->query('SELECT COUNT(*) FROM learner')->fetchColumn(),
            'progress_rows' => (int) $this->pdo->query('SELECT COUNT(*) FROM progress WHERE completed = 1')->fetchColumn(),
            'projects_done' => (int) $this->pdo->query('SELECT COUNT(*) FROM project_completions')->fetchColumn(),
            'courses' => count(array_filter(CourseCatalog::courses(), fn ($c) => ($c['status'] ?? '') === 'available')),
            'pro_users' => (int) $this->pdo->query("SELECT COUNT(*) FROM users WHERE plan = 'pro'")->fetchColumn(),
            'emails_sent' => (int) $this->pdo->query('SELECT COUNT(*) FROM email_log')->fetchColumn(),
        ];
    }

    /** @return list<array<string, mixed>> */
    public function users(int $limit = 50): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT u.id, u.email, u.display_name, u.plan, u.is_admin, u.created_at,
                    l.xp, l.streak
             FROM users u
             LEFT JOIN learner l ON l.user_id = u.id
             ORDER BY u.created_at DESC LIMIT ?'
        );
        $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function setPlan(int $userId, string $plan): void
    {
        $this->pdo->prepare('UPDATE users SET plan = ? WHERE id = ?')->execute([$plan, $userId]);
        if ($plan === 'pro') {
            (new EntitlementService($this->pdo, new LearnerContext($this->pdo)))->activatePro($userId);
        }
    }

    /** @return list<array{day: string, count: int}> */
    public function weeklyActivity(): array
    {
        $out = [];
        for ($i = 6; $i >= 0; $i--) {
            $day = date('Y-m-d', strtotime("-{$i} days"));
            $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM progress WHERE completed = 1 AND updated_at LIKE ?');
            $stmt->execute([$day . '%']);
            $out[] = ['day' => $day, 'count' => (int) $stmt->fetchColumn()];
        }

        return $out;
    }

    /** @return list<array{course: string, count: int}> */
    public function topCourses(): array
    {
        $rows = $this->pdo->query(
            'SELECT course_slug AS course, COUNT(*) AS count FROM progress WHERE completed = 1 GROUP BY course_slug ORDER BY count DESC LIMIT 8'
        )->fetchAll();

        return $rows ?: [];
    }
}
