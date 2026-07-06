<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\CertificateVerifyService;

class PublicCertController
{
    public function __construct(private CertificateVerifyService $certs)
    {
    }

    public function show(string $code): void
    {
        $result = $this->certs->verify($code);
        if ($result === null) {
            http_response_code(404);
            echo '<!DOCTYPE html><html lang="es"><body style="font-family:sans-serif;text-align:center;padding:4rem"><h1>Certificado no encontrado</h1></body></html>';
            return;
        }

        $name = htmlspecialchars((string) ($result['name'] ?? 'Aprendiz'), ENT_QUOTES, 'UTF-8');
        $course = htmlspecialchars((string) ($result['course'] ?? ''), ENT_QUOTES, 'UTF-8');
        $issued = htmlspecialchars((string) ($result['issued_at'] ?? ''), ENT_QUOTES, 'UTF-8');
        $verifyCode = htmlspecialchars((string) ($result['code'] ?? $code), ENT_QUOTES, 'UTF-8');

        echo <<<HTML
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Certificado verificado — {$course}</title>
<style>
body{margin:0;font-family:Georgia,serif;background:linear-gradient(135deg,#0f1629,#1a2744);color:#eef3ff;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:2rem}
.card{max-width:720px;background:#fff;color:#111;border-radius:20px;padding:3rem;text-align:center;box-shadow:0 24px 60px rgba(0,0,0,.4)}
.seal{font-size:4rem}.badge{display:inline-block;background:#4f7cff;color:#fff;padding:.3rem .8rem;border-radius:999px;font-size:.8rem;margin-bottom:1rem}
h1{color:#3776ab;margin:.5rem 0}.name{font-size:2rem;font-weight:bold;margin:1rem 0}
.meta{color:#666;margin-top:1.5rem;font-size:.95rem}
.share{margin-top:2rem}
</style></head><body>
<div class="card">
<span class="badge">✓ VERIFICADO</span>
<div class="seal">🏆</div>
<p>CERTIFICADO OFICIAL ESCALA</p>
<h1>{$course}</h1>
<p>Otorgado a</p>
<p class="name">{$name}</p>
<p class="meta">Código: {$verifyCode}<br>Expedido: {$issued}</p>
<div class="share"><small>Comparte: <code>/c/{$verifyCode}</code></small></div>
</div></body></html>
HTML;
    }
}
