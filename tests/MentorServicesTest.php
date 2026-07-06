<?php

declare(strict_types=1);

namespace Tests;

use App\Services\MentorChatService;
use App\Services\MentorFeedback;
use PHPUnit\Framework\TestCase;

final class MentorFeedbackTest extends TestCase
{
    public function test_successful_code_exercise_has_pro_tip(): void
    {
        $fb = new MentorFeedback();
        $result = $fb->forResult(
            ['type' => 'code', 'pro_tip' => 'Tip test', 'explanation' => 'Because echo'],
            ['ok' => true],
            "echo 'hi';",
            1,
        );

        $this->assertTrue($result['ok']);
        $this->assertSame('Tip test', $result['tip']);
    }

    public function test_missing_semicolon_hint(): void
    {
        $fb = new MentorFeedback();
        $result = $fb->forResult(
            ['type' => 'code', 'expected_output' => 'ok'],
            ['ok' => false, 'output' => ''],
            "echo 'ok'",
            1,
        );

        $this->assertFalse($result['ok']);
        $this->assertStringContainsString(';', $result['tip']);
    }
}

final class MentorChatServiceTest extends TestCase
{
    public function test_answers_echo_question(): void
    {
        $chat = new MentorChatService();
        $reply = $chat->reply('qué es echo');

        $this->assertStringContainsString('echo', strtolower($reply['answer']));
    }
}
