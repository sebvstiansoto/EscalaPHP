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

        return $dest;
    }
}
