<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class Mailer
{
    public function __construct(
        private PDO $pdo,
        private string $driver = 'log',
        private string $from = 'noreply@escala.dev',
        private string $mailPath = '',
        private string $smtpHost = '',
        private int $smtpPort = 587,
        private string $smtpUser = '',
        private string $smtpPass = '',
        private string $resendApiKey = '',
    ) {
    }

    public function send(string $to, string $subject, string $body): bool
    {
        $ok = match ($this->driver) {
            'smtp' => $this->sendSmtp($to, $subject, $body),
            'resend' => $this->sendResend($to, $subject, $body),
            default => $this->sendLog($to, $subject, $body),
        };

        $stmt = $this->pdo->prepare('INSERT INTO email_log (recipient, subject, body, sent_at) VALUES (?, ?, ?, ?)');
        $stmt->execute([$to, $subject, $body, date('c')]);

        return $ok;
    }

    private function sendLog(string $to, string $subject, string $body): bool
    {
        $dir = $this->mailPath ?: sys_get_temp_dir();
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $file = $dir . '/' . date('Ymd_His') . '_' . preg_replace('/[^a-z0-9]/i', '_', $to) . '.html';
        file_put_contents($file, "To: {$to}\nSubject: {$subject}\n\n{$body}");

        return true;
    }

    private function sendSmtp(string $to, string $subject, string $body): bool
    {
        if ($this->smtpHost === '' || $this->smtpUser === '') {
            return $this->sendLog($to, $subject, $body);
        }

        return (new SmtpClient())->send(
            $this->smtpHost,
            $this->smtpPort,
            $this->smtpUser,
            $this->smtpPass,
            $this->from,
            $to,
            $subject,
            $body,
        );
    }

    private function sendResend(string $to, string $subject, string $body): bool
    {
        if ($this->resendApiKey === '') {
            return $this->sendLog($to, $subject, $body);
        }

        $payload = json_encode([
            'from' => $this->from,
            'to' => [$to],
            'subject' => $subject,
            'html' => $body,
        ], JSON_THROW_ON_ERROR);

        $ch = curl_init('https://api.resend.com/emails');
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $this->resendApiKey,
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 15,
        ]);
        $response = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $code >= 200 && $code < 300;
    }

    public function welcome(string $to, string $name): void
    {
        $this->send($to, 'Bienvenido a Escala', "<h1>¡Hola {$name}!</h1><p>Tu cuenta está lista. Elige un curso y empieza a aprender.</p><p><a href='/'>Ir al catálogo</a></p>");
    }

    public function streakReminder(string $to, string $name, int $streak): void
    {
        $this->send($to, "🔥 Mantén tu racha de {$streak} días", "<p>Hola {$name}, llevas <strong>{$streak} días</strong> seguidos. ¡No pierdas la racha hoy!</p>");
    }

    public function certificateReady(string $to, string $name, string $courseTitle): void
    {
        $this->send($to, "🏆 Certificado listo: {$courseTitle}", "<p>¡Felicidades {$name}! Completaste <strong>{$courseTitle}</strong>. <a href='/certificado'>Ver certificado</a></p>");
    }
}
