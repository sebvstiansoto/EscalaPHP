<?php

declare(strict_types=1);

namespace App\Http;

class Csrf
{
    private const KEY = '_escala_csrf';

    public static function token(): string
    {
        if (empty($_SESSION[self::KEY])) {
            $_SESSION[self::KEY] = bin2hex(random_bytes(32));
        }

        return $_SESSION[self::KEY];
    }

    public static function field(): string
    {
        $t = htmlspecialchars(self::token(), ENT_QUOTES, 'UTF-8');

        return '<input type="hidden" name="_csrf" value="' . $t . '">';
    }

    public static function validate(?string $token): bool
    {
        $expected = $_SESSION[self::KEY] ?? '';

        return $expected !== '' && hash_equals($expected, (string) $token);
    }

    public static function abortIfInvalid(?string $token): void
    {
        if (!self::validate($token)) {
            http_response_code(419);
            echo 'Token de seguridad inválido. Recarga la página e inténtalo de nuevo.';
            exit;
        }
    }
}
