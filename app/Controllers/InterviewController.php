<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\LearnerContext;
use App\View;

class InterviewController
{
    public function __construct(private LearnerContext $context, private array $config)
    {
    }

    public function index(): void
    {
        $data = require __DIR__ . '/../Data/interview.php';
        $stack = (string) ($_GET['stack'] ?? 'php');
        if (!isset($data[$stack])) {
            $stack = 'php';
        }

        View::show('interview', [
            'config' => $this->config,
            'title' => 'Modo entrevista',
            'stacks' => $data,
            'stack' => $stack,
            'current' => $data[$stack],
            'score' => $_SESSION['interview_score'] ?? null,
        ]);
        unset($_SESSION['interview_score']);
    }

    public function submit(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $stack = (string) ($_POST['stack'] ?? 'php');
        $data = require __DIR__ . '/../Data/interview.php';
        $questions = $data[$stack]['questions'] ?? [];
        $score = 0;
        $total = count($questions);
        foreach ($questions as $i => $q) {
            $self = strtolower(trim((string) ($_POST['a'][$i] ?? '')));
            $hint = strtolower((string) ($q['hint'] ?? ''));
            if ($self !== '' && (str_contains($hint, $self) || similar_text($self, $hint) > 3)) {
                $score++;
            } elseif ($self !== '' && strlen($self) > 20) {
                $score++; // respuesta elaborada cuenta
            }
        }

        $this->context->pdo()->prepare(
            'INSERT INTO interview_scores (user_id, session_id, stack, score, total, created_at) VALUES (?, ?, ?, ?, ?, ?)'
        )->execute([$this->context->userId(), $this->context->sessionId(), $stack, $score, $total, date('c')]);

        $_SESSION['interview_score'] = ['score' => $score, 'total' => $total];
        header('Location: /entrevista?stack=' . urlencode($stack));
        exit;
    }
}
