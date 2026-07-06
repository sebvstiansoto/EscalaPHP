<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\LessonCatalog;
use App\ProgressRepository;

class MentorContextService
{
    public function __construct(
        private LearnerContext $context,
        private ProgressRepository $progress,
        private Gamification $gamification,
    ) {
    }

    /** @param array<string, mixed>|null $extra */
    public function build(?string $courseSlug = null, ?string $lessonSlug = null, ?string $code = null, ?array $extra = null): string
    {
        $parts = [];
        $profile = $this->gamification->profile();
        $parts[] = 'Alumno: ' . ($profile['display_name'] ?? 'Aprendiz') . ', XP: ' . (int) ($profile['xp'] ?? 0);

        if ($courseSlug) {
            $course = CourseCatalog::course($courseSlug);
            $parts[] = 'Curso: ' . ($course['title'] ?? $courseSlug);
            $done = $this->progress->completedCount($courseSlug);
            $total = count(CourseCatalog::lessonsForCourse($courseSlug));
            $parts[] = "Progreso curso: {$done}/{$total}";
        }

        if ($lessonSlug && $courseSlug) {
            $lesson = LessonCatalog::find($lessonSlug, $courseSlug);
            if ($lesson) {
                $parts[] = 'Lección: ' . ($lesson['title'] ?? $lessonSlug);
                if (!empty($lesson['exercises'])) {
                    $parts[] = 'Ejercicios en lección: ' . count($lesson['exercises']);
                }
            }
        }

        if ($code !== null && trim($code) !== '') {
            $parts[] = "Código del alumno:\n```\n" . mb_substr(trim($code), 0, 2000) . "\n```";
        }

        if ($extra) {
            foreach ($extra as $k => $v) {
                $parts[] = $k . ': ' . (is_string($v) ? $v : json_encode($v));
            }
        }

        return implode("\n", $parts);
    }

    /** @return list<array{role: string, content: string}> */
    public function recentHistory(int $limit = 6): array
    {
        $stmt = $this->context->pdo()->prepare(
            'SELECT question, answer FROM chat_log WHERE session_id = ? ORDER BY created_at DESC LIMIT ?'
        );
        $stmt->bindValue(1, $this->context->sessionId());
        $stmt->bindValue(2, $limit, \PDO::PARAM_INT);
        $stmt->execute();
        $rows = array_reverse($stmt->fetchAll());
        $messages = [];
        foreach ($rows as $row) {
            $messages[] = ['role' => 'user', 'content' => (string) $row['question']];
            $messages[] = ['role' => 'assistant', 'content' => (string) $row['answer']];
        }

        return $messages;
    }
}
