<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\AuthExtendedService;
use App\Services\AuthService;
use App\Services\OAuthService;
use App\View;

class AuthExtendedController
{
    public function __construct(
        private AuthExtendedService $authExt,
        private AuthService $auth,
        private OAuthService $oauth,
        private array $config,
    ) {
    }

    public function forgotForm(): void
    {
        View::show('auth/forgot', [
            'config' => $this->config,
            'title' => 'Recuperar contraseña',
            'message' => $_SESSION['auth_message'] ?? null,
            'error' => $_SESSION['auth_error'] ?? null,
        ]);
        unset($_SESSION['auth_message'], $_SESSION['auth_error']);
    }

    public function forgot(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $this->authExt->requestPasswordReset((string) ($_POST['email'] ?? ''));
        $_SESSION['auth_message'] = 'Si el email existe, recibirás un enlace de recuperación.';
        header('Location: /recuperar');
        exit;
    }

    public function resetForm(string $token): void
    {
        View::show('auth/reset', [
            'config' => $this->config,
            'title' => 'Nueva contraseña',
            'token' => $token,
            'error' => $_SESSION['auth_error'] ?? null,
        ]);
        unset($_SESSION['auth_error']);
    }

    public function reset(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $result = $this->authExt->resetPassword(
            (string) ($_POST['token'] ?? ''),
            (string) ($_POST['password'] ?? ''),
        );
        if (!$result['ok']) {
            $_SESSION['auth_error'] = $result['error'];
            header('Location: /recuperar/' . urlencode((string) ($_POST['token'] ?? '')));
            exit;
        }
        $_SESSION['auth_message'] = 'Contraseña actualizada. Inicia sesión.';
        header('Location: /login');
        exit;
    }

    public function verify(string $token): void
    {
        if ($this->authExt->verifyEmail($token)) {
            $_SESSION['auth_message'] = 'Email verificado correctamente.';
        } else {
            $_SESSION['auth_error'] = 'Enlace de verificación inválido.';
        }
        header('Location: /perfil');
        exit;
    }

    public function totpSetup(): void
    {
        $user = $this->auth->currentUser();
        if ($user === null) {
            header('Location: /login?redirect=/perfil/2fa');
            exit;
        }

        $setup = $this->authExt->setupTotp((int) $user['id']);
        View::show('auth/totp', [
            'config' => $this->config,
            'title' => 'Autenticación 2FA',
            'setup' => $setup,
            'error' => $_SESSION['auth_error'] ?? null,
        ]);
        unset($_SESSION['auth_error']);
    }

    public function totpEnable(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $user = $this->auth->currentUser();
        if ($user === null) {
            header('Location: /login');
            exit;
        }

        if (!$this->authExt->enableTotp((int) $user['id'], (string) ($_POST['code'] ?? ''))) {
            $_SESSION['auth_error'] = 'Código incorrecto.';
            header('Location: /perfil/2fa');
            exit;
        }

        $_SESSION['auth_message'] = '2FA activado.';
        header('Location: /perfil');
        exit;
    }

    public function totpChallenge(): void
    {
        View::show('auth/totp-challenge', [
            'config' => $this->config,
            'title' => 'Código 2FA',
            'error' => $_SESSION['auth_error'] ?? null,
        ]);
        unset($_SESSION['auth_error']);
    }

    public function totpVerify(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $userId = (int) ($_SESSION['pending_2fa_user'] ?? 0);
        if ($userId <= 0 || !$this->authExt->verifyTotpCode($userId, (string) ($_POST['code'] ?? ''))) {
            $_SESSION['auth_error'] = 'Código incorrecto.';
            header('Location: /login/2fa');
            exit;
        }

        unset($_SESSION['pending_2fa_user']);
        $_SESSION['user_id'] = $userId;
        header('Location: /');
        exit;
    }

    public function githubRedirect(): void
    {
        if (!$this->oauth->isConfigured()) {
            $_SESSION['auth_error'] = 'OAuth GitHub no configurado.';
            header('Location: /login');
            exit;
        }
        header('Location: ' . $this->oauth->githubAuthUrl());
        exit;
    }

    public function githubCallback(): void
    {
        $result = $this->oauth->handleGithubCallback(
            (string) ($_GET['code'] ?? ''),
            (string) ($_GET['state'] ?? ''),
        );
        if (!$result['ok']) {
            $_SESSION['auth_error'] = $result['error'] ?? 'Error OAuth.';
            header('Location: /login');
            exit;
        }
        header('Location: /');
        exit;
    }

    public function googleRedirect(): void
    {
        if (!$this->oauth->isGoogleConfigured()) {
            $_SESSION['auth_error'] = 'OAuth Google no configurado.';
            header('Location: /login');
            exit;
        }
        header('Location: ' . $this->oauth->googleAuthUrl());
        exit;
    }

    public function googleCallback(): void
    {
        $result = $this->oauth->handleGoogleCallback(
            (string) ($_GET['code'] ?? ''),
            (string) ($_GET['state'] ?? ''),
        );
        if (!$result['ok']) {
            $_SESSION['auth_error'] = $result['error'] ?? 'Error OAuth.';
            header('Location: /login');
            exit;
        }
        header('Location: /');
        exit;
    }
}
