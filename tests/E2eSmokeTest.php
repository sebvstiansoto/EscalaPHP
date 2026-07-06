<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class E2eSmokeTest extends TestCase
{
    private string $base = 'http://localhost:8000';

    public function testHealthAndKeyRoutes(): void
    {
        if (!getenv('E2E_BASE')) {
            $this->markTestSkipped('Set E2E_BASE=http://localhost:8000 to run smoke E2E');
        }
        $this->base = rtrim((string) getenv('E2E_BASE'), '/');
        foreach (['/health', '/', '/dashboard', '/examenes', '/capstones', '/faq', '/mentor'] as $path) {
            $code = $this->httpCode($this->base . $path);
            $this->assertSame(200, $code, $path);
        }
    }

    private function httpCode(string $url): int
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $code;
    }
}
