<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class CapstoneService
{
    /** @return array<string, array<string, mixed>> */
    public function all(): array
    {
        return require __DIR__ . '/../Data/capstones.php';
    }

    public function submit(string $slug, string $code, LearnerContext $context): array
    {
        $all = $this->all();
        if (!isset($all[$slug])) {
            return ['ok' => false, 'error' => 'Capstone no encontrado'];
        }

        $cap = $all[$slug];
        $score = 0;
        $rubric = $cap['rubric'] ?? [];
        foreach ($rubric as $criterion) {
            $needle = (string) ($criterion['contains'] ?? '');
            if ($needle === '' || stripos($code, $needle) !== false) {
                $score += (int) ($criterion['points'] ?? 10);
            }
        }
        $max = array_sum(array_map(fn ($r) => (int) ($r['points'] ?? 10), $rubric)) ?: 100;
        $passed = $score >= (int) ($cap['pass_score'] ?? 70);

        $context->pdo()->prepare(
            'INSERT INTO capstone_submissions (user_id, session_id, capstone_slug, code, status, score, feedback, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        )->execute([
            $context->userId(),
            $context->sessionId(),
            $slug,
            $code,
            $passed ? 'approved' : 'review',
            $score,
            $passed ? 'Aprobado automáticamente por rúbrica.' : 'Revisar criterios faltantes.',
            date('c'),
        ]);

        return ['ok' => true, 'score' => $score, 'max' => $max, 'passed' => $passed];
    }
}
