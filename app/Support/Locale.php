<?php

declare(strict_types=1);

namespace App\Support;

class Locale
{
    private static string $lang = 'es';

    /** @var array<string, string>|null */
    private static ?array $strings = null;

    public static function set(string $lang): void
    {
        self::$lang = in_array($lang, ['es', 'en'], true) ? $lang : 'es';
        self::$strings = null;
    }

    public static function current(): string
    {
        return self::$lang;
    }

    public static function t(string $key, ?string $fallback = null): string
    {
        if (self::$strings === null) {
            $file = dirname(__DIR__, 2) . '/lang/' . self::$lang . '.php';
            self::$strings = is_file($file) ? require $file : [];
        }

        return self::$strings[$key] ?? $fallback ?? $key;
    }
}

function __(string $key, ?string $fallback = null): string
{
    return Locale::t($key, $fallback);
}
