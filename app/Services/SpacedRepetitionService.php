<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class SpacedRepetitionService
{
    public function __construct(private PDO $pdo, private LearnerContext $context)
    {
    }

    public function scheduleAfterCompletion(string $courseSlug, string $lessonSlug): void
    {
        $now = date('c');
        $next = date('c', strtotime('+1 day'));
        $this->pdo->prepare(
            'INSERT INTO review_schedule (user_id, session_id, course_slug, lesson_slug, next_review_at, interval_days, ease_factor, repetitions, updated_at)
             VALUES (?, ?, ?, ?, ?, 1, 2.5, 0, ?)
             ON CONFLICT(session_id, course_slug, lesson_slug) DO UPDATE SET
             next_review_at = excluded.next_review_at, updated_at = excluded.updated_at'
        )->execute([
            $this->context->userId(),
            $this->context->sessionId(),
            $courseSlug,
            $lessonSlug,
            $next,
            $now,
        ]);
    }

    public function recordReview(string $courseSlug, string $lessonSlug, int $quality): void
    {
        // quality 0-5 (SM-2 simplified)
        $stmt = $this->pdo->prepare(
            'SELECT * FROM review_schedule WHERE session_id = ? AND course_slug = ? AND lesson_slug = ?'
        );
        $stmt->execute([$this->context->sessionId(), $courseSlug, $lessonSlug]);
        $row = $stmt->fetch();
        if (!$row) {
            return;
        }

        $ef = (float) $row['ease_factor'];
        $interval = (int) $row['interval_days'];
        $reps = (int) $row['repetitions'];

        if ($quality < 3) {
            $reps = 0;
            $interval = 1;
        } else {
            $reps++;
            $interval = $reps === 1 ? 1 : ($reps === 2 ? 6 : (int) round($interval * $ef));
            $ef = max(1.3, $ef + (0.1 - (5 - $quality) * (0.08 + (5 - $quality) * 0.02)));
        }

        $next = date('c', strtotime("+{$interval} days"));
        $this->pdo->prepare(
            'UPDATE review_schedule SET interval_days=?, ease_factor=?, repetitions=?, next_review_at=?, updated_at=? WHERE id=?'
        )->execute([$interval, $ef, $reps, $next, date('c'), $row['id']]);
    }

    /** @return list<array<string, mixed>> */
    public function dueToday(): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT * FROM review_schedule WHERE session_id = ? AND next_review_at <= ? ORDER BY next_review_at LIMIT 10'
        );
        $stmt->execute([$this->context->sessionId(), date('c')]);

        return $stmt->fetchAll();
    }
}
