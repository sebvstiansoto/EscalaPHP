<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class DailyMissionService
{
    private const MISSIONS = [
        'lesson' => ['label' => 'Completa 1 lección', 'xp' => 30],
        'exercise' => ['label' => 'Resuelve 1 ejercicio', 'xp' => 20],
        'lab' => ['label' => 'Usa el laboratorio', 'xp' => 15],
    ];

    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
        private Gamification $gamification,
    ) {
    }

    /** @return list<array<string, mixed>> */
    public function today(): array
    {
        $this->ensureToday();
        $stmt = $this->pdo->prepare(
            'SELECT * FROM daily_missions WHERE session_id = ? AND mission_date = ?'
        );
        $stmt->execute([$this->context->sessionId(), date('Y-m-d')]);

        return $stmt->fetchAll();
    }

    public function complete(string $key): void
    {
        $stmt = $this->pdo->prepare(
            'UPDATE daily_missions SET completed = 1 WHERE session_id = ? AND mission_date = ? AND mission_key = ? AND completed = 0'
        );
        $stmt->execute([$this->context->sessionId(), date('Y-m-d'), $key]);
        if ($stmt->rowCount() > 0 && isset(self::MISSIONS[$key])) {
            $this->gamification->addXp(self::MISSIONS[$key]['xp'], 'Misión: ' . self::MISSIONS[$key]['label']);
        }
    }

    private function ensureToday(): void
    {
        $date = date('Y-m-d');
        foreach (self::MISSIONS as $key => $meta) {
            $exists = $this->pdo->prepare(
                'SELECT id FROM daily_missions WHERE session_id = ? AND mission_date = ? AND mission_key = ?'
            );
            $exists->execute([$this->context->sessionId(), $date, $key]);
            if (!$exists->fetch()) {
                $this->pdo->prepare(
                    'INSERT INTO daily_missions (user_id, session_id, mission_date, mission_key, xp_reward) VALUES (?, ?, ?, ?, ?)'
                )->execute([
                    $this->context->userId(),
                    $this->context->sessionId(),
                    $date,
                    $key,
                    $meta['xp'],
                ]);
            }
        }
    }
}
