<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\AuthExtendedService;
use App\Services\AuthService;
use App\Services\SecurityService;
use App\View;

class SecurityController
{
    public function __construct(
        private SecurityService $security,
        private AuthService $auth,
        private AuthExtendedService $authExtended,
        private array $config,
    ) {
    }

    public function index(): void
    {
        $user = $this->auth->currentUser();
        if ($user === null) {
            header('Location: /login?redirect=/perfil/seguridad');
            exit;
        }

        $this->security->touchSession();
        View::show('security/index', [
            'config' => $this->config,
            'title' => 'Seguridad de cuenta',
            'sessions' => $this->security->sessions((int) $user['id']),
            'has2fa' => $this->authExtended->requiresTotp((int) $user['id']),
            'emailVerified' => $this->security->isEmailVerified((int) $user['id']),
            'message' => $_SESSION['sec_message'] ?? null,
            'error' => $_SESSION['sec_error'] ?? null,
        ]);
        unset($_SESSION['sec_message'], $_SESSION['sec_error']);
    }

    public function changePassword(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $user = $this->auth->currentUser();
        if ($user === null) {
            header('Location: /login');
            exit;
        }

        $result = $this->security->changePassword(
            (int) $user['id'],
            (string) ($_POST['current'] ?? ''),
            (string) ($_POST['new'] ?? ''),
        );
        $_SESSION[$result['ok'] ? 'sec_message' : 'sec_error'] = $result['ok'] ? 'Contraseña actualizada.' : ($result['error'] ?? 'Error');
        header('Location: /perfil/seguridad');
        exit;
    }

    public function revokeSession(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $user = $this->auth->currentUser();
        if ($user) {
            $this->security->revokeSession((int) $user['id'], (int) ($_POST['session_id'] ?? 0));
        }
        header('Location: /perfil/seguridad');
        exit;
    }

    public function disable2fa(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $user = $this->auth->currentUser();
        if ($user && $this->security->disableTotp((int) $user['id'], (string) ($_POST['code'] ?? ''))) {
            $_SESSION['sec_message'] = '2FA desactivado.';
        } else {
            $_SESSION['sec_error'] = 'Código incorrecto.';
        }
        header('Location: /perfil/seguridad');
        exit;
    }
}
