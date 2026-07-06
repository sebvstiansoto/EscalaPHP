<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\ProgressRepository;
use PDO;

class LearningInsightsService
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
        private ProgressRepository $progress,
        private LearningPathService $paths,
    ) {
    }

    /** @return array<string, mixed> */
    public function dashboard(): array
    {
        $completed = $this->totalCompleted();
        $weekly = $this->lessonsThisWeek();
        $goal = $this->weeklyGoal();
        $pace = $weekly > 0 ? round($weekly / 7, 1) : 0.5;
        $remaining = max(0, $this->totalLessonsAvailable() - $completed);
        $daysToFinish = $pace > 0 ? (int) ceil($remaining / max(0.1, $pace)) : null;

        return [
            'completed' => $completed,
            'weekly' => $weekly,
            'goal' => $goal,
            'pace' => $pace,
            'days_to_finish' => $daysToFinish,
            'calendar' => $this->studyCalendar(14),
            'recommendations' => $this->recommendations(),
            'next_action' => $this->paths->continueLesson($this->progress, $this->paths->selected($this->context)),
        ];
    }

    public function weeklyGoal(): int
    {
        $stmt = $this->pdo->prepare('SELECT weekly_lessons FROM learner_goals WHERE session_id = ?');
        $stmt->execute([$this->context->sessionId()]);
        $val = $stmt->fetchColumn();

        return $val ? (int) $val : 5;
    }

    public function setWeeklyGoal(int $goal): void
    {
        $this->pdo->prepare(
            'INSERT INTO learner_goals (user_id, session_id, weekly_lessons, updated_at) VALUES (?, ?, ?, ?)
             ON CONFLICT(session_id) DO UPDATE SET weekly_lessons = excluded.weekly_lessons, updated_at = excluded.updated_at'
        )->execute([$this->context->userId(), $this->context->sessionId(), max(1, $goal), date('c')]);
    }

    public function logStudy(int $minutes, ?string $lessonSlug = null): void
    {
        $this->pdo->prepare(
            'INSERT INTO study_log (user_id, session_id, minutes, lesson_slug, created_at) VALUES (?, ?, ?, ?, ?)'
        )->execute([$this->context->userId(), $this->context->sessionId(), $minutes, $lessonSlug, date('c')]);
    }

    /** @return list<array{day: string, minutes: int}> */
    public function studyCalendar(int $days = 14): array
    {
        $out = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $day = date('Y-m-d', strtotime("-{$i} days"));
            $stmt = $this->pdo->prepare(
                'SELECT COALESCE(SUM(minutes), 0) FROM study_log WHERE session_id = ? AND created_at LIKE ?'
            );
            $stmt->execute([$this->context->sessionId(), $day . '%']);
            $out[] = ['day' => $day, 'minutes' => (int) $stmt->fetchColumn()];
        }

        return $out;
    }

    /** @return list<array{slug: string, title: string, reason: string}> */
    public function recommendations(): array
    {
        $recs = [];
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            $lessons = CourseCatalog::lessonsForCourse($slug);
            $done = 0;
            foreach ($lessons as $l) {
                if ($this->progress->isLessonCompleted($slug, (string) $l['slug'])) {
                    $done++;
                }
            }
            $total = count($lessons);
            if ($total === 0) {
                continue;
            }
            $pct = (int) round(($done / $total) * 100);
            if ($pct > 0 && $pct < 100) {
                $recs[] = ['slug' => $slug, 'title' => (string) ($course['title'] ?? $slug), 'reason' => "Llevas {$pct}% — termínalo"];
            } elseif ($pct === 0 && count($recs) < 3) {
                $recs[] = ['slug' => $slug, 'title' => (string) ($course['title'] ?? $slug), 'reason' => 'Nuevo para ti'];
            }
        }

        return array_slice($recs, 0, 4);
    }

    private function totalCompleted(): int
    {
        $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM progress WHERE session_id = ? AND completed = 1');
        $stmt->execute([$this->context->sessionId()]);

        return (int) $stmt->fetchColumn();
    }

    private function lessonsThisWeek(): int
    {
        $weekAgo = date('Y-m-d', strtotime('-7 days'));
        $stmt = $this->pdo->prepare(
            'SELECT COUNT(*) FROM progress WHERE session_id = ? AND completed = 1 AND updated_at >= ?'
        );
        $stmt->execute([$this->context->sessionId(), $weekAgo]);

        return (int) $stmt->fetchColumn();
    }

    private function totalLessonsAvailable(): int
    {
        $n = 0;
        foreach (CourseCatalog::courses() as $slug => $c) {
            if (($c['status'] ?? '') === 'available') {
                $n += count(CourseCatalog::lessonsForCourse($slug));
            }
        }

        return $n;
    }
}
