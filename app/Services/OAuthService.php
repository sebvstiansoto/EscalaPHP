<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class OAuthService
{
    public function __construct(
        private PDO $pdo,
        private LearnerContext $context,
        private Gamification $gamification,
        private string $githubClientId = '',
        private string $githubClientSecret = '',
        private string $googleClientId = '',
        private string $googleClientSecret = '',
        private string $appUrl = 'http://localhost:8000',
    ) {
    }

    public function isConfigured(): bool
    {
        return $this->githubClientId !== '' && $this->githubClientSecret !== '';
    }

    public function githubAuthUrl(): string
    {
        $state = bin2hex(random_bytes(16));
        $_SESSION['oauth_state'] = $state;
        $redirect = urlencode(rtrim($this->appUrl, '/') . '/oauth/github/callback');

        return "https://github.com/login/oauth/authorize?client_id={$this->githubClientId}&redirect_uri={$redirect}&scope=user:email&state={$state}";
    }

    /** @return array{ok: bool, error?: string} */
    public function handleGithubCallback(string $code, string $state): array
    {
        if (($state === '' || $state !== ($_SESSION['oauth_state'] ?? ''))) {
            return ['ok' => false, 'error' => 'Estado OAuth inválido.'];
        }
        unset($_SESSION['oauth_state']);

        if (!$this->isConfigured()) {
            return ['ok' => false, 'error' => 'OAuth no configurado.'];
        }

        $token = $this->exchangeGithubToken($code);
        if ($token === null) {
            return ['ok' => false, 'error' => 'No se pudo obtener token de GitHub.'];
        }

        $profile = $this->fetchGithubProfile($token);
        if ($profile === null) {
            return ['ok' => false, 'error' => 'No se pudo leer perfil de GitHub.'];
        }

        $providerId = (string) ($profile['id'] ?? '');
        $email = strtolower((string) ($profile['email'] ?? $profile['login'] . '@users.noreply.github.com'));
        $name = (string) ($profile['name'] ?? $profile['login'] ?? 'GitHub User');

        $stmt = $this->pdo->prepare('SELECT user_id FROM oauth_accounts WHERE provider = ? AND provider_id = ?');
        $stmt->execute(['github', $providerId]);
        $existing = $stmt->fetch();

        if ($existing) {
            $this->context->linkSessionToUser((int) $existing['user_id']);

            return ['ok' => true];
        }

        $userStmt = $this->pdo->prepare('SELECT id FROM users WHERE email = ?');
        $userStmt->execute([$email]);
        $user = $userStmt->fetch();

        if ($user) {
            $userId = (int) $user['id'];
        } else {
            $hash = password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
            $this->pdo->prepare('INSERT INTO users (email, password_hash, display_name, created_at, email_verified_at) VALUES (?, ?, ?, ?, ?)')
                ->execute([$email, $hash, mb_substr($name, 0, 40), date('c'), date('c')]);
            $userId = (int) $this->pdo->lastInsertId();
        }

        $this->pdo->prepare('INSERT INTO oauth_accounts (user_id, provider, provider_id, created_at) VALUES (?, ?, ?, ?)')
            ->execute([$userId, 'github', $providerId, date('c')]);

        $this->context->linkSessionToUser($userId);
        $this->gamification->syncDisplayName($name);

        return ['ok' => true];
    }

    private function exchangeGithubToken(string $code): ?string
    {
        $ch = curl_init('https://github.com/login/oauth/access_token');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Accept: application/json'],
            CURLOPT_POSTFIELDS => http_build_query([
                'client_id' => $this->githubClientId,
                'client_secret' => $this->githubClientSecret,
                'code' => $code,
            ]),
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode((string) $response, true);

        return is_array($data) ? ($data['access_token'] ?? null) : null;
    }

    /** @return array<string, mixed>|null */
    private function fetchGithubProfile(string $token): ?array
    {
        $ch = curl_init('https://api.github.com/user');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $token,
                'User-Agent: EscalaPHP',
            ],
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode((string) $response, true);

        return is_array($data) ? $data : null;
    }

    public function isGoogleConfigured(): bool
    {
        return $this->googleClientId !== '' && $this->googleClientSecret !== '';
    }

    public function googleAuthUrl(): string
    {
        $state = bin2hex(random_bytes(16));
        $_SESSION['oauth_google_state'] = $state;
        $redirect = urlencode(rtrim($this->appUrl, '/') . '/oauth/google/callback');
        $scope = urlencode('openid email profile');

        return "https://accounts.google.com/o/oauth2/v2/auth?client_id={$this->googleClientId}&redirect_uri={$redirect}&response_type=code&scope={$scope}&state={$state}";
    }

    /** @return array{ok: bool, error?: string} */
    public function handleGoogleCallback(string $code, string $state): array
    {
        if ($state === '' || $state !== ($_SESSION['oauth_google_state'] ?? '')) {
            return ['ok' => false, 'error' => 'Estado OAuth inválido.'];
        }
        unset($_SESSION['oauth_google_state']);
        if (!$this->isGoogleConfigured()) {
            return ['ok' => false, 'error' => 'Google OAuth no configurado.'];
        }

        $ch = curl_init('https://oauth2.googleapis.com/token');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query([
                'code' => $code,
                'client_id' => $this->googleClientId,
                'client_secret' => $this->googleClientSecret,
                'redirect_uri' => rtrim($this->appUrl, '/') . '/oauth/google/callback',
                'grant_type' => 'authorization_code',
            ]),
        ]);
        $tokenRes = json_decode((string) curl_exec($ch), true);
        curl_close($ch);
        $access = $tokenRes['access_token'] ?? null;
        if (!$access) {
            return ['ok' => false, 'error' => 'Token Google inválido.'];
        }

        $ch = curl_init('https://www.googleapis.com/oauth2/v2/userinfo');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $access],
        ]);
        $profile = json_decode((string) curl_exec($ch), true);
        curl_close($ch);
        if (!is_array($profile)) {
            return ['ok' => false, 'error' => 'Perfil Google inválido.'];
        }

        return $this->linkOAuthUser('google', (string) ($profile['id'] ?? ''), strtolower((string) ($profile['email'] ?? '')), (string) ($profile['name'] ?? 'Google User'), true);
    }

    /** @return array{ok: bool, error?: string} */
    private function linkOAuthUser(string $provider, string $providerId, string $email, string $name, bool $verified = false): array
    {
        if ($providerId === '' || $email === '') {
            return ['ok' => false, 'error' => 'Datos OAuth incompletos.'];
        }

        $stmt = $this->pdo->prepare('SELECT user_id FROM oauth_accounts WHERE provider = ? AND provider_id = ?');
        $stmt->execute([$provider, $providerId]);
        $existing = $stmt->fetch();
        if ($existing) {
            $this->context->linkSessionToUser((int) $existing['user_id']);

            return ['ok' => true];
        }

        $userStmt = $this->pdo->prepare('SELECT id FROM users WHERE email = ?');
        $userStmt->execute([$email]);
        $user = $userStmt->fetch();
        if ($user) {
            $userId = (int) $user['id'];
        } else {
            $hash = password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
            $verifiedAt = $verified ? date('c') : null;
            $this->pdo->prepare('INSERT INTO users (email, password_hash, display_name, created_at, email_verified_at) VALUES (?, ?, ?, ?, ?)')
                ->execute([$email, $hash, mb_substr($name, 0, 40), date('c'), $verifiedAt]);
            $userId = (int) $this->pdo->lastInsertId();
        }

        $this->pdo->prepare('INSERT INTO oauth_accounts (user_id, provider, provider_id, created_at) VALUES (?, ?, ?, ?)')
            ->execute([$userId, $provider, $providerId, date('c')]);
        $this->context->linkSessionToUser($userId);
        $this->gamification->syncDisplayName($name);

        return ['ok' => true];
    }
}
