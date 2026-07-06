<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class AuthExtendedService
{
    public function __construct(
        private PDO $pdo,
        private Mailer $mailer,
        private string $appUrl,
    ) {
    }

    public function requestPasswordReset(string $email): bool
    {
        $email = strtolower(trim($email));
        $stmt = $this->pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        if (!$stmt->fetch()) {
            return true; // no revelar si existe
        }

        $token = bin2hex(random_bytes(32));
        $expires = date('c', strtotime('+1 hour'));
        $this->pdo->prepare('DELETE FROM password_resets WHERE email = ?')->execute([$email]);
        $this->pdo->prepare('INSERT INTO password_resets (email, token, expires_at, created_at) VALUES (?, ?, ?, ?)')
            ->execute([$email, $token, $expires, date('c')]);

        $link = rtrim($this->appUrl, '/') . '/recuperar/' . $token;
        $this->mailer->send($email, 'Recuperar contraseña — Escala', "<p><a href=\"{$link}\">Restablecer contraseña</a> (válido 1 hora)</p>");

        return true;
    }

    public function resetPassword(string $token, string $password): array
    {
        if (strlen($password) < 6) {
            return ['ok' => false, 'error' => 'Mínimo 6 caracteres.'];
        }

        $stmt = $this->pdo->prepare('SELECT email, expires_at FROM password_resets WHERE token = ?');
        $stmt->execute([$token]);
        $row = $stmt->fetch();
        if (!$row || strtotime((string) $row['expires_at']) < time()) {
            return ['ok' => false, 'error' => 'Enlace inválido o expirado.'];
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->pdo->prepare('UPDATE users SET password_hash = ? WHERE email = ?')->execute([$hash, $row['email']]);
        $this->pdo->prepare('DELETE FROM password_resets WHERE token = ?')->execute([$token]);

        return ['ok' => true];
    }

    public function sendVerificationEmail(int $userId, string $email): void
    {
        $token = bin2hex(random_bytes(24));
        $this->pdo->prepare('INSERT INTO email_verifications (user_id, token, created_at) VALUES (?, ?, ?)')
            ->execute([$userId, $token, date('c')]);
        $link = rtrim($this->appUrl, '/') . '/verificar/' . $token;
        $this->mailer->send($email, 'Verifica tu email — Escala', "<p><a href=\"{$link}\">Verificar cuenta</a></p>");
    }

    public function verifyEmail(string $token): bool
    {
        $stmt = $this->pdo->prepare('SELECT user_id FROM email_verifications WHERE token = ? AND verified_at IS NULL');
        $stmt->execute([$token]);
        $row = $stmt->fetch();
        if (!$row) {
            return false;
        }

        $now = date('c');
        $this->pdo->prepare('UPDATE email_verifications SET verified_at = ? WHERE token = ?')->execute([$now, $token]);
        $this->pdo->prepare('UPDATE users SET email_verified_at = ? WHERE id = ?')->execute([$now, $row['user_id']]);

        return true;
    }

    public function setupTotp(int $userId): array
    {
        $secret = $this->base32Encode(random_bytes(20));
        $this->pdo->prepare('INSERT OR REPLACE INTO user_totp (user_id, secret, enabled) VALUES (?, ?, 0)')
            ->execute([$userId, $secret]);

        return ['secret' => $secret, 'uri' => "otpauth://totp/Escala:user{$userId}?secret={$secret}&issuer=Escala"];
    }

    public function enableTotp(int $userId, string $code): bool
    {
        $stmt = $this->pdo->prepare('SELECT secret FROM user_totp WHERE user_id = ?');
        $stmt->execute([$userId]);
        $row = $stmt->fetch();
        if (!$row || !$this->verifyTotp((string) $row['secret'], $code)) {
            return false;
        }
        $this->pdo->prepare('UPDATE user_totp SET enabled = 1 WHERE user_id = ?')->execute([$userId]);

        return true;
    }

    public function requiresTotp(int $userId): bool
    {
        $stmt = $this->pdo->prepare('SELECT enabled FROM user_totp WHERE user_id = ?');
        $stmt->execute([$userId]);

        return (int) ($stmt->fetchColumn() ?: 0) === 1;
    }

    public function verifyTotpCode(int $userId, string $code): bool
    {
        $stmt = $this->pdo->prepare('SELECT secret FROM user_totp WHERE user_id = ? AND enabled = 1');
        $stmt->execute([$userId]);
        $row = $stmt->fetch();

        return $row && $this->verifyTotp((string) $row['secret'], $code);
    }

    private function verifyTotp(string $secret, string $code): bool
    {
        $timeSlice = (int) floor(time() / 30);
        foreach ([-1, 0, 1] as $offset) {
            if ($this->totpAt($secret, $timeSlice + $offset) === $code) {
                return true;
            }
        }

        return false;
    }

    private function totpAt(string $secret, int $counter): string
    {
        $key = $this->base32Decode($secret);
        $bin = pack('N*', 0, $counter);
        $hash = hash_hmac('sha1', $bin, $key, true);
        $offset = ord($hash[19]) & 0xf;
        $otp = (
            ((ord($hash[$offset]) & 0x7f) << 24) |
            ((ord($hash[$offset + 1]) & 0xff) << 16) |
            ((ord($hash[$offset + 2]) & 0xff) << 8) |
            (ord($hash[$offset + 3]) & 0xff)
        ) % 1000000;

        return str_pad((string) $otp, 6, '0', STR_PAD_LEFT);
    }

    private function base32Encode(string $data): string
    {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
        $binary = '';
        foreach (str_split($data) as $c) {
            $binary .= str_pad(decbin(ord($c)), 8, '0', STR_PAD_LEFT);
        }
        $out = '';
        foreach (str_split($binary, 5) as $chunk) {
            $out .= $alphabet[bindec(str_pad($chunk, 5, '0', STR_PAD_RIGHT))];
        }

        return $out;
    }

    private function base32Decode(string $data): string
    {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
        $binary = '';
        foreach (str_split(strtoupper($data)) as $c) {
            $pos = strpos($alphabet, $c);
            if ($pos === false) {
                continue;
            }
            $binary .= str_pad(decbin($pos), 5, '0', STR_PAD_LEFT);
        }
        $out = '';
        foreach (str_split($binary, 8) as $chunk) {
            if (strlen($chunk) === 8) {
                $out .= chr(bindec($chunk));
            }
        }

        return $out;
    }
}
