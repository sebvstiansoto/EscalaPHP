<?php

declare(strict_types=1);

namespace Tests;

use App\Services\SqlRunner;
use PHPUnit\Framework\TestCase;

class SqlRunnerTest extends TestCase
{
    public function testSelectUsers(): void
    {
        $runner = new SqlRunner();
        $result = $runner->run("SELECT name FROM users WHERE city = 'Madrid'");
        $this->assertTrue($result['ok']);
        $this->assertStringContainsString('Luis', $result['output']);
    }

    public function testBlocksInsert(): void
    {
        $runner = new SqlRunner();
        $result = $runner->run('INSERT INTO users VALUES (99, "x", "y")');
        $this->assertFalse($result['ok']);
    }
}
