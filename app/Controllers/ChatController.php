<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\RateLimiter;
use App\Services\AIService;
use App\Services\MentorContextService;
use App\View;

class ChatController
{
    public function __construct(
        private AIService $ai,
        private MentorContextService $context,
        private RateLimiter $rateLimiter,
        private array $config,
    ) {
    }

    public function index(): void
    {
        View::show('chat', [
            'config' => $this->config,
            'title' => 'Pregunta al mentor — Escala',
        ]);
    }

    public function ask(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        $ip = (string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown');
        $limit = $this->rateLimiter->check('chat:' . $ip, 20, 60);
        if (!$limit['ok']) {
            http_response_code(429);
            echo json_encode(['ok' => false, 'answer' => 'Demasiadas preguntas. Espera un momento.']);
            return;
        }

        $input = json_decode((string) file_get_contents('php://input'), true) ?: [];
        $question = (string) ($input['question'] ?? '');
        if (trim($question) === '') {
            echo json_encode(['ok' => false, 'answer' => 'Escribe una pregunta.']);
            return;
        }

        $ctx = $this->context->build(
            isset($input['course']) ? (string) $input['course'] : null,
            isset($input['lesson']) ? (string) $input['lesson'] : null,
            isset($input['code']) ? (string) $input['code'] : null,
        );
        $mode = (string) ($input['mode'] ?? 'default');
        $history = $this->context->recentHistory(6);
        $reply = $this->ai->reply($question, $ctx, $mode, $history);

        echo json_encode([
            'ok' => true,
            'answer' => $reply['answer'],
            'sources' => $reply['sources'],
            'source' => $reply['source'] ?? 'rules',
        ], JSON_UNESCAPED_UNICODE);
    }
}
