<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\CertificateVerifyService;
use App\View;

class VerifyController
{
    public function __construct(
        private CertificateVerifyService $certs,
        private array $config,
    ) {
    }

    public function form(): void
    {
        View::show('verify', [
            'config' => $this->config,
            'title' => 'Verificar certificado',
            'result' => null,
            'code' => '',
        ]);
    }

    public function check(): void
    {
        $code = (string) ($_GET['code'] ?? $_POST['code'] ?? '');
        View::show('verify', [
            'config' => $this->config,
            'title' => 'Verificar certificado',
            'result' => $this->certs->verify($code),
            'code' => $code,
        ]);
    }
}
