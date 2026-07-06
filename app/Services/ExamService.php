<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class ExamService
{
    /** @return array<string, array<string, mixed>> */
    public function all(): array
    {
        return require __DIR__ . '/../Data/exams.php';
    }

    /** @return array<string, mixed>|null */
    public function get(string $slug): ?array
    {
        $all = $this->all();

        return $all[$slug] ?? null;
    }

    /** @param array<string, string> $answers */
    public function grade(string $slug, array $answers, LearnerContext $context): array
    {
        $exam = $this->get($slug);
        if (!$exam) {
            return ['ok' => false, 'error' => 'Examen no encontrado'];
        }

        $score = 0;
        $max = 0;
        foreach ($exam['questions'] as $i => $q) {
            $max += (int) ($q['points'] ?? 1);
            $key = (string) $i;
            $given = strtolower(trim($answers[$key] ?? $answers[(string) ($q['id'] ?? '')] ?? ''));
            $expected = strtolower(trim((string) ($q['answer'] ?? '')));
            if ($given !== '' && ($given === $expected || in_array($given, array_map('strtolower', $q['accept'] ?? []), true))) {
                $score += (int) ($q['points'] ?? 1);
            }
        }

        $passScore = (int) ($exam['pass_score'] ?? (int) ceil($max * 0.7));
        $passed = $score >= $passScore;

        $context->pdo()->prepare(
            'INSERT INTO exam_attempts (user_id, session_id, exam_slug, score, max_score, answers_json, passed, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        )->execute([
            $context->userId(),
            $context->sessionId(),
            $slug,
            $score,
            $max,
            json_encode($answers),
            $passed ? 1 : 0,
            date('c'),
        ]);

        return ['ok' => true, 'score' => $score, 'max' => $max, 'passed' => $passed, 'pass_score' => $passScore];
    }
}
