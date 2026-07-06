<?php

declare(strict_types=1);

namespace App;

class View
{
    private static ?Application $app = null;

    public static function boot(Application $app): void
    {
        self::$app = $app;
    }

    public static function render(string $template, array $data = []): string
    {
        extract($data, EXTR_SKIP);
        ob_start();
        require __DIR__ . '/../resources/views/' . $template . '.php';
        return (string) ob_get_clean();
    }

    public static function show(string $template, array $data = []): void
    {
        if (self::$app !== null) {
            $data['config'] = $data['config'] ?? self::$app->config;
            $data['profile'] = $data['profile'] ?? self::$app->gamification->profile();
            $data['user'] = $data['user'] ?? self::$app->auth->currentUser();
            $data['notifications'] = $data['notifications'] ?? self::$app->notifications->unread();
            $data['notificationCount'] = $data['notificationCount'] ?? self::$app->notifications->unreadCount();
            $data['isPro'] = $data['isPro'] ?? self::$app->entitlements->isPro();
        }

        $config = $data['config'] ?? ['name' => 'Escala', 'tagline' => ''];
        $title = $data['title'] ?? $config['name'];
        $profile = $data['profile'] ?? null;
        $user = $data['user'] ?? null;
        $showStreakReminder = $data['showStreakReminder'] ?? false;
        $notifications = $data['notifications'] ?? [];
        $notificationCount = $data['notificationCount'] ?? 0;
        $isPro = $data['isPro'] ?? false;
        $content = self::render($template, $data);

        echo self::render('layout', [
            'config' => $config,
            'title' => $title,
            'content' => $content,
            'profile' => $profile,
            'user' => $user,
            'showStreakReminder' => $showStreakReminder,
            'notifications' => $notifications,
            'notificationCount' => $notificationCount,
            'isPro' => $isPro,
        ]);
    }
}
