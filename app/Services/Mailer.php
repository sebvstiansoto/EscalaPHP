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
    ) {
    }

    public function send(string $to, string $subject, string $body): bool
    {
        if ($this->driver === 'smtp') {
            $headers = "From: {$this->from}\r\nContent-Type: text/html; charset=UTF-8\r\n";
            $ok = @mail($to, $subject, $body, $headers);
        } else {
            $dir = $this->mailPath ?: sys_get_temp_dir();
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
            $file = $dir . '/' . date('Ymd_His') . '_' . preg_replace('/[^a-z0-9]/i', '_', $to) . '.html';
            file_put_contents($file, "To: {$to}\nSubject: {$subject}\n\n{$body}");
            $ok = true;
        }

        $stmt = $this->pdo->prepare('INSERT INTO email_log (recipient, subject, body, sent_at) VALUES (?, ?, ?, ?)');
        $stmt->execute([$to, $subject, $body, date('c')]);

        return $ok;
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
