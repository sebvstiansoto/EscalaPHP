<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

/**
 * Identidad unificada: invitado (session_id) o usuario registrado (user_id).
 */
class LearnerContext
{
    public function __construct(private PDO $pdo)
    {
    }

    public function sessionId(): string
    {
        if (!isset($_SESSION['escala_session_id'])) {
            $_SESSION['escala_session_id'] = bin2hex(random_bytes(16));
        }

        return $_SESSION['escala_session_id'];
    }

    public function userId(): ?int
    {
        $id = $_SESSION['user_id'] ?? null;

        return $id !== null ? (int) $id : null;
    }

    public function isLoggedIn(): bool
    {
        return $this->userId() !== null;
    }

    public function pdo(): PDO
    {
        return $this->pdo;
    }

    public function setUserId(int $userId): void
    {
        $_SESSION['user_id'] = $userId;
    }

    public function clearUser(): void
    {
        unset($_SESSION['user_id']);
    }

    /** @return array{0: string, 1: list<mixed>} */
    public function progressFilter(): array
    {
        if ($this->userId() !== null) {
            return ['user_id = ?', [$this->userId()]];
        }

        return ['session_id = ? AND (user_id IS NULL OR user_id = 0)', [$this->sessionId()]];
    }

    /** @return array{0: string, 1: list<mixed>} */
    public function learnerFilter(): array
    {
        if ($this->userId() !== null) {
            return ['user_id = ?', [$this->userId()]];
        }

        return ['session_id = ?', [$this->sessionId()]];
    }

    public function linkSessionToUser(int $userId): void
    {
        $sid = $this->sessionId();
        $tables = ['progress', 'learner', 'achievements', 'project_completions'];

        foreach ($tables as $table) {
            $this->pdo->prepare(
                "UPDATE {$table} SET user_id = ? WHERE session_id = ? AND (user_id IS NULL OR user_id = 0)"
            )->execute([$userId, $sid]);
        }

        $this->setUserId($userId);
    }
}
