<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class AIService
{
    /** @var array<string, string> */
    private array $modePrompts = [
        'default' => 'Responde en español, conciso y pedagógico.',
        'junior' => 'Explica como si el alumno fuera junior, con analogías simples y sin jerga innecesaria.',
        'hint' => 'NO des la solución completa. Da solo una pista útil que guíe al alumno.',
        'quiz' => 'Haz 2-3 preguntas cortas al alumno para comprobar comprensión. No des respuestas largas.',
        'review' => 'Revisa el código del alumno: señala errores, buenas prácticas y una mejora concreta.',
    ];

    public function __construct(
        private MentorChatService $fallback,
        private PDO $pdo,
        private LearnerContext $context,
        private string $apiKey = '',
        private string $model = 'gpt-4o-mini',
    ) {
    }

    /**
     * @param list<array{role: string, content: string}> $history
     * @return array{answer: string, sources: list<string>, source: string}
     */
    public function reply(
        string $question,
        ?string $lessonContext = null,
        string $mode = 'default',
        array $history = [],
    ): array {
        if ($this->apiKey === '') {
            $r = $this->fallback->reply($question);

            return ['answer' => $r['answer'], 'sources' => $r['sources'], 'source' => 'rules'];
        }

        $system = 'Eres un mentor de programación de Escala. Cubre PHP, Python, React, Docker, SQL, Git. Usa markdown ligero. '
            . ($this->modePrompts[$mode] ?? $this->modePrompts['default']);
        if ($lessonContext) {
            $system .= "\n\nContexto del alumno:\n" . $lessonContext;
        }

        $messages = [['role' => 'system', 'content' => $system]];
        foreach (array_slice($history, -8) as $msg) {
            $messages[] = $msg;
        }
        $messages[] = ['role' => 'user', 'content' => $question];

        $payload = json_encode([
            'model' => $this->model,
            'messages' => $messages,
            'max_tokens' => 700,
            'temperature' => 0.7,
        ]);

        $ch = curl_init('https://api.openai.com/v1/chat/completions');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->apiKey,
            ],
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_TIMEOUT => 35,
        ]);
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($response === false || $err) {
            $r = $this->fallback->reply($question);

            return ['answer' => $r['answer'], 'sources' => $r['sources'], 'source' => 'rules'];
        }

        $data = json_decode((string) $response, true);
        $answer = $data['choices'][0]['message']['content'] ?? null;
        if (!$answer) {
            $r = $this->fallback->reply($question);

            return ['answer' => $r['answer'], 'sources' => $r['sources'], 'source' => 'rules'];
        }

        $this->logChat($question, $answer, 'ai', $mode);

        return ['answer' => trim($answer), 'sources' => ['openai'], 'source' => 'ai'];
    }

    private function logChat(string $question, string $answer, string $source, string $mode = 'default'): void
    {
        try {
            $this->pdo->prepare(
                'INSERT INTO chat_log (session_id, user_id, question, answer, source, created_at) VALUES (?, ?, ?, ?, ?, ?)'
            )->execute([
                $this->context->sessionId(),
                $this->context->userId(),
                '[' . $mode . '] ' . $question,
                $answer,
                $source,
                date('c'),
            ]);
        } catch (\Throwable) {
        }
    }
}
