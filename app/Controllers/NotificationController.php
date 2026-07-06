<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\NotificationService;
use App\View;

class NotificationController
{
    public function __construct(private NotificationService $notifications)
    {
    }

    public function markRead(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $id = (int) ($_POST['id'] ?? 0);
        if ($id > 0) {
            $this->notifications->markRead($id);
        }
        header('Location: ' . ($_POST['redirect'] ?? '/perfil'));
        exit;
    }

    public function markAllRead(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $this->notifications->markAllRead();
        header('Location: /perfil');
        exit;
    }
}
