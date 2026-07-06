<?php

declare(strict_types=1);

namespace Tests;

use App\Http\RateLimiter;
use PHPUnit\Framework\TestCase;

class RateLimiterTest extends TestCase
{
    public function testAllowsUnderLimit(): void
    {
        $dir = sys_get_temp_dir() . '/escala_rl_' . uniqid();
        mkdir($dir);
        $rl = new RateLimiter($dir);
        $result = $rl->check('test-key', 5, 60);
        $this->assertTrue($result['ok']);
    }

    public function testBlocksOverLimit(): void
    {
        $dir = sys_get_temp_dir() . '/escala_rl_' . uniqid();
        mkdir($dir);
        $rl = new RateLimiter($dir);
        for ($i = 0; $i < 3; $i++) {
            $rl->check('block-key', 3, 60);
        }
        $result = $rl->check('block-key', 3, 60);
        $this->assertFalse($result['ok']);
    }
}
