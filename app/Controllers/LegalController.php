<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\BackupService;
use App\View;

class LegalController
{
    public function __construct(private array $config)
    {
    }

    public function privacy(): void
    {
        View::show('legal/privacidad', [
            'config' => $this->config,
            'title' => 'Privacidad — EscalaPHP',
            'appUrl' => (string) ($this->config['app_url'] ?? ''),
        ]);
    }
}
