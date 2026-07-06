<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\ProgressRepository;
use PDO;

class AnalyticsService
{
    public function __construct(
        private PDO $pdo,
        private ProgressRepository $progress,
        private LearnerContext $context,
    ) {
    }

    /** @return list<array{course: string, title: string, completed: int, total: int, percent: int}> */
    public function courseBreakdown(): array
    {
        $out = [];
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            $lessons = CourseCatalog::lessonsForCourse($slug);
            $total = count($lessons);
            $completed = $this->progress->completedCount($slug);
            $out[] = [
                'course' => $slug,
                'title' => (string) $course['title'],
                'completed' => $completed,
                'total' => $total,
                'percent' => $total > 0 ? (int) round(($completed / $total) * 100) : 0,
            ];
        }

        usort($out, fn ($a, $b) => $b['percent'] <=> $a['percent']);

        return $out;
    }

    /** @return list<array{date: string, count: int}> */
    public function activityLast7Days(): array
    {
        [$where, $params] = $this->progressFilter();
        $stmt = $this->pdo->prepare("SELECT updated_at FROM progress WHERE {$where} AND completed = 1");
        $stmt->execute($params);
        $rows = $stmt->fetchAll();

        $map = [];
        $cutoff = strtotime('-6 days');
        foreach ($rows as $row) {
            $ts = strtotime((string) ($row['updated_at'] ?? ''));
            if ($ts < $cutoff) {
                continue;
            }
            $day = date('Y-m-d', $ts);
            $map[$day] = ($map[$day] ?? 0) + 1;
        }

        $out = [];
        for ($i = 6; $i >= 0; $i--) {
            $day = date('Y-m-d', strtotime("-{$i} days"));
            $out[] = ['date' => $day, 'count' => $map[$day] ?? 0];
        }

        return $out;
    }

    public function totalXp(): int
    {
        $profile = (new Gamification($this->pdo, $this->context))->profile();

        return (int) ($profile['xp'] ?? 0);
    }

    /** @return array{0: string, 1: list<mixed>} */
    private function progressFilter(): array
    {
        if ($this->context->userId() !== null) {
            return ['user_id = ?', [$this->context->userId()]];
        }

        return ['session_id = ?', [$this->context->sessionId()]];
    }
}
