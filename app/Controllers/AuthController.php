<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Http\RateLimiter;
use App\Services\AuthExtendedService;
use App\Services\AuthService;
use App\Services\Mailer;
use App\Services\NotificationService;
use App\Services\SecurityService;
use App\View;

class AuthController
{
    public function __construct(
        private AuthService $auth,
        private AuthExtendedService $authExtended,
        private RateLimiter $rateLimiter,
        private Mailer $mailer,
        private NotificationService $notifications,
        private SecurityService $security,
        private array $config,
    ) {
    }

    public function loginForm(): void
    {
        View::show('auth/login', [
            'config' => $this->config,
            'title' => 'Iniciar sesión — EscalaPHP',
            'error' => $_SESSION['auth_error'] ?? null,
        ]);
        unset($_SESSION['auth_error']);
    }

    public function registerForm(): void
    {
        View::show('auth/register', [
            'config' => $this->config,
            'title' => 'Crear cuenta — EscalaPHP',
            'error' => $_SESSION['auth_error'] ?? null,
        ]);
        unset($_SESSION['auth_error']);
    }

    public function login(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $ip = (string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown');
        $limit = $this->rateLimiter->check('login:' . $ip, 10, 300);
        if (!$limit['ok']) {
            $_SESSION['auth_error'] = 'Demasiados intentos. Espera unos minutos.';
            header('Location: /login');
            exit;
        }

        $result = $this->auth->login((string) ($_POST['email'] ?? ''), (string) ($_POST['password'] ?? ''));
        if (!$result['ok']) {
            $_SESSION['auth_error'] = $result['error'];
            header('Location: /login');
            exit;
        }

        $user = $result['user'] ?? [];
        $userId = (int) ($user['id'] ?? 0);
        if ($userId > 0 && $this->authExtended->requiresTotp($userId)) {
            $this->auth->logout();
            $_SESSION['pending_2fa_user'] = $userId;
            header('Location: /login/2fa');
            exit;
        }
        if ($userId > 0) {
            $this->security->recordSession($userId);
        }
        $redirect = (string) ($_POST['redirect'] ?? '/');
        header('Location: ' . ($redirect !== '' && str_starts_with($redirect, '/') ? $redirect : '/'));
        exit;
    }

    public function register(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $ip = (string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown');
        $limit = $this->rateLimiter->check('register:' . $ip, 5, 600);
        if (!$limit['ok']) {
            $_SESSION['auth_error'] = 'Demasiados registros desde esta IP.';
            header('Location: /registro');
            exit;
        }

        $result = $this->auth->register(
            (string) ($_POST['email'] ?? ''),
            (string) ($_POST['password'] ?? ''),
            (string) ($_POST['name'] ?? ''),
        );
        if (!$result['ok']) {
            $_SESSION['auth_error'] = $result['error'];
            header('Location: /registro');
            exit;
        }

        $user = $result['user'] ?? [];
        $this->mailer->welcome((string) ($user['email'] ?? ''), (string) ($user['display_name'] ?? 'Aprendiz'));
        $this->authExtended->sendVerificationEmail((int) ($user['id'] ?? 0), (string) ($user['email'] ?? ''));
        $this->notifications->create('welcome', '¡Bienvenido a Escala!', 'Elige un curso y empieza tu primera lección.');

        header('Location: /');
        exit;
    }

    public function logout(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $this->auth->logout();
        header('Location: /');
        exit;
    }
}
