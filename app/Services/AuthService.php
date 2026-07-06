<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class AuthService
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
        private Gamification $gamification,
    ) {
    }

    /** @return array{ok: bool, error?: string, user?: array<string, mixed>} */
    public function register(string $email, string $password, string $name): array
    {
        $email = strtolower(trim($email));
        $name = trim($name);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['ok' => false, 'error' => 'Email inválido.'];
        }
        if (strlen($password) < 6) {
            return ['ok' => false, 'error' => 'La contraseña debe tener al menos 6 caracteres.'];
        }
        if ($name === '') {
            return ['ok' => false, 'error' => 'Escribe tu nombre.'];
        }

        $exists = $this->pdo->prepare('SELECT id FROM users WHERE email = ?');
        $exists->execute([$email]);
        if ($exists->fetch()) {
            return ['ok' => false, 'error' => 'Ese email ya está registrado. Inicia sesión.'];
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $now = date('c');
        $stmt = $this->pdo->prepare(
            'INSERT INTO users (email, password_hash, display_name, created_at) VALUES (?, ?, ?, ?)'
        );
        $stmt->execute([$email, $hash, mb_substr($name, 0, 40), $now]);
        $userId = (int) $this->pdo->lastInsertId();

        $this->context->linkSessionToUser($userId);
        $this->gamification->syncDisplayName($name);

        return ['ok' => true, 'user' => $this->findById($userId)];
    }

    /** @return array{ok: bool, error?: string, user?: array<string, mixed>} */
    public function login(string $email, string $password): array
    {
        $email = strtolower(trim($email));
        $user = $this->findByEmail($email);

        if ($user === null || !password_verify($password, (string) $user['password_hash'])) {
            return ['ok' => false, 'error' => 'Email o contraseña incorrectos.'];
        }

        $this->context->linkSessionToUser((int) $user['id']);

        return ['ok' => true, 'user' => $user];
    }

    public function logout(): void
    {
        $this->context->clearUser();
    }

    /** @return array<string, mixed>|null */
    public function currentUser(): ?array
    {
        $id = $this->context->userId();

        return $id !== null ? $this->findById($id) : null;
    }

    /** @return array<string, mixed>|null */
    private function findByEmail(string $email): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);

        $row = $stmt->fetch();

        return $row ?: null;
    }

    /** @return array<string, mixed>|null */
    private function findById(int $id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT id, email, display_name, plan, is_admin, created_at FROM users WHERE id = ?');
        $stmt->execute([$id]);

        $row = $stmt->fetch();

        return $row ?: null;
    }
}
