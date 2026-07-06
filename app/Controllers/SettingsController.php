<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\ApiKeyService;
use App\Services\LearnerContext;
use App\View;

class SettingsController
{
    public function __construct(
        private LearnerContext $context,
        private array $config,
    ) {
    }

    public function theme(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $theme = (string) ($_POST['theme'] ?? 'dark');
        if (!in_array($theme, ['dark', 'light'], true)) {
            $theme = 'dark';
        }
        $_SESSION['theme'] = $theme;
        if ($this->context->userId()) {
            $this->context->pdo()->prepare('UPDATE users SET theme = ? WHERE id = ?')
                ->execute([$theme, $this->context->userId()]);
        }
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '/'));
        exit;
    }

    public function locale(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $locale = (string) ($_POST['locale'] ?? 'es');
        if (!in_array($locale, ['es', 'en'], true)) {
            $locale = 'es';
        }
        $_SESSION['locale'] = $locale;
        if ($this->context->userId()) {
            $this->context->pdo()->prepare('UPDATE users SET locale = ? WHERE id = ?')
                ->execute([$locale, $this->context->userId()]);
        }
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '/'));
        exit;
    }

    public function apiKeys(): void
    {
        if (!$this->context->isLoggedIn()) {
            header('Location: /login?redirect=/perfil/api');
            exit;
        }

        $service = new ApiKeyService($this->context->pdo());
        View::show('settings/api-keys', [
            'config' => $this->config,
            'title' => 'API Keys',
            'keys' => $service->listForUser((int) $this->context->userId()),
            'newKey' => $_SESSION['new_api_key'] ?? null,
        ]);
        unset($_SESSION['new_api_key']);
    }

    public function createApiKey(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        if (!$this->context->isLoggedIn()) {
            header('Location: /login');
            exit;
        }

        $service = new ApiKeyService($this->context->pdo());
        $_SESSION['new_api_key'] = $service->create((int) $this->context->userId(), (string) ($_POST['name'] ?? 'API Key'));
        header('Location: /perfil/api');
        exit;
    }

    public function revokeApiKey(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        if (!$this->context->isLoggedIn()) {
            header('Location: /login');
            exit;
        }

        $service = new ApiKeyService($this->context->pdo());
        $service->revoke((int) $this->context->userId(), (int) ($_POST['key_id'] ?? 0));
        header('Location: /perfil/api');
        exit;
    }
}
