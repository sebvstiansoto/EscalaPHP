<?php

declare(strict_types=1);

namespace App\Services;

class BackupService
{
    public function __construct(private string $dbPath, private string $backupDir)
    {
    }

    public function run(): string
    {
        if (!is_dir($this->backupDir)) {
            mkdir($this->backupDir, 0777, true);
        }
        $name = 'escala-' . date('Y-m-d-His') . '.sqlite';
        $dest = rtrim($this->backupDir, '/\\') . DIRECTORY_SEPARATOR . $name;
        if (!is_file($this->dbPath)) {
            throw new \RuntimeException('DB no encontrada');
        }
        copy($this->dbPath, $dest);
        $this->pruneOld();

        return $dest;
    }

    private function pruneOld(int $keep = 14): void
    {
        $files = glob($this->backupDir . '/escala-*.sqlite') ?: [];
        if (count($files) <= $keep) {
            return;
        }
        usort($files, static fn (string $a, string $b): int => filemtime($b) <=> filemtime($a));
        foreach (array_slice($files, $keep) as $old) {
            @unlink($old);
        }
    }
}
