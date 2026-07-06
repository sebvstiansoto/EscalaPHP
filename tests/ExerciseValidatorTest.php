<?php

declare(strict_types=1);

namespace Tests;

use App\ExerciseValidator;
use PHPUnit\Framework\TestCase;

class ExerciseValidatorTest extends TestCase
{
    public function testSqlExerciseValidation(): void
    {
        $v = new ExerciseValidator();
        $ex = ['type' => 'sql', 'expected_output' => "name\nLuis"];
        $r = $v->validate($ex, "SELECT name FROM users WHERE city = 'Madrid'");
        $this->assertTrue($r['ok']);
    }

    public function testChoiceValidation(): void
    {
        $v = new ExerciseValidator();
        $ex = ['type' => 'choice', 'answer' => 'git commit'];
        $r = $v->validate($ex, 'git commit');
        $this->assertTrue($r['ok']);
    }
}
