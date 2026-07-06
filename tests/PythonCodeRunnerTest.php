<?php

declare(strict_types=1);

namespace Tests;

use App\Services\PythonCodeRunner;
use PHPUnit\Framework\TestCase;

final class PythonCodeRunnerTest extends TestCase
{
    public function test_runs_print(): void
    {
        $runner = new PythonCodeRunner();
        $result = $runner->run("print('ok')");

        if (str_contains($result['error'] ?? '', 'no está instalado')) {
            $this->markTestSkipped('Python not installed');
        }

        $this->assertTrue($result['ok']);
        $this->assertSame('ok', $result['output']);
    }
}
