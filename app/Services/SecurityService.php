<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class SecurityService
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
        private AuthExtendedService $authExtended,
    ) {
    }

    public function recordSession(int $userId): void
    {
        $token = bin2hex(random_bytes(16));
        $_SESSION['session_token'] = $token;
        $this->pdo->prepare(
            'INSERT INTO user_sessions (user_id, session_token, ip, user_agent, last_seen, created_at) VALUES (?, ?, ?, ?, ?, ?)'
        )->execute([
            $userId,
            $token,
            (string) ($_SERVER['REMOTE_ADDR'] ?? ''),
            substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 200),
            date('c'),
            date('c'),
        ]);
    }

    public function touchSession(): void
    {
        $token = (string) ($_SESSION['session_token'] ?? '');
        if ($token === '') {
            return;
        }
        $this->pdo->prepare('UPDATE user_sessions SET last_seen = ? WHERE session_token = ?')
            ->execute([date('c'), $token]);
    }

    /** @return list<array<string, mixed>> */
    public function sessions(int $userId): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, ip, user_agent, last_seen, created_at, session_token FROM user_sessions WHERE user_id = ? ORDER BY last_seen DESC LIMIT 20'
        );
        $stmt->execute([$userId]);

        return $stmt->fetchAll();
    }

    public function revokeSession(int $userId, int $sessionId): void
    {
        $this->pdo->prepare('DELETE FROM user_sessions WHERE id = ? AND user_id = ?')
            ->execute([$sessionId, $userId]);
    }

    public function changePassword(int $userId, string $current, string $new): array
    {
        $stmt = $this->pdo->prepare('SELECT password_hash FROM users WHERE id = ?');
        $stmt->execute([$userId]);
        $row = $stmt->fetch();
        if (!$row || !password_verify($current, (string) $row['password_hash'])) {
            return ['ok' => false, 'error' => 'Contraseña actual incorrecta.'];
        }
        if (strlen($new) < 6) {
            return ['ok' => false, 'error' => 'Mínimo 6 caracteres.'];
        }
        $this->pdo->prepare('UPDATE users SET password_hash = ? WHERE id = ?')
            ->execute([password_hash($new, PASSWORD_DEFAULT), $userId]);

        return ['ok' => true];
    }

    public function disableTotp(int $userId, string $code): bool
    {
        if (!$this->authExtended->verifyTotpCode($userId, $code)) {
            return false;
        }
        $this->pdo->prepare('DELETE FROM user_totp WHERE user_id = ?')->execute([$userId]);

        return true;
    }

    public function isEmailVerified(int $userId): bool
    {
        $stmt = $this->pdo->prepare('SELECT email_verified_at FROM users WHERE id = ?');
        $stmt->execute([$userId]);

        return (bool) $stmt->fetchColumn();
    }
}
