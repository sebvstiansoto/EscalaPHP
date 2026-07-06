<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class JobQueueService
{
    public function __construct(
        private PDO $pdo,
        private Mailer $mailer,
        private BackupService $backup,
    ) {
    }

    public function push(string $type, array $payload, ?string $runAt = null): void
    {
        $this->pdo->prepare(
            'INSERT INTO job_queue (type, payload, status, run_at, created_at) VALUES (?, ?, ?, ?, ?)'
        )->execute([$type, json_encode($payload), 'pending', $runAt ?? date('c'), date('c')]);
    }

    public function process(int $limit = 10): int
    {
        $stmt = $this->pdo->prepare(
            "SELECT * FROM job_queue WHERE status = 'pending' AND run_at <= ? ORDER BY run_at LIMIT ?"
        );
        $stmt->bindValue(1, date('c'));
        $stmt->bindValue(2, $limit, PDO::PARAM_INT);
        $stmt->execute();
        $processed = 0;

        foreach ($stmt->fetchAll() as $job) {
            $ok = $this->handle($job);
            $this->pdo->prepare('UPDATE job_queue SET status = ?, attempts = attempts + 1 WHERE id = ?')
                ->execute([$ok ? 'done' : 'failed', $job['id']]);
            if ($ok) {
                $processed++;
            }
        }

        return $processed;
    }

    /** @param array<string, mixed> $job */
    private function handle(array $job): bool
    {
        $payload = json_decode((string) ($job['payload'] ?? '{}'), true) ?: [];

        return match ((string) $job['type']) {
            'email' => $this->mailer->send(
                (string) ($payload['to'] ?? ''),
                (string) ($payload['subject'] ?? ''),
                (string) ($payload['body'] ?? ''),
            ),
            'backup' => $this->runBackup(),
            default => false,
        };
    }

    private function runBackup(): bool
    {
        try {
            $this->backup->run();
            return true;
        } catch (\Throwable) {
            return false;
        }
    }
}
