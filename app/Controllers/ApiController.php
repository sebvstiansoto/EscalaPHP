<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\RateLimiter;
use App\Services\AchievementService;
use App\Services\CodeHistoryService;
use App\Services\CodeRunner;
use App\Services\DockerRunner;
use App\Services\PythonCodeRunner;

class ApiController
{
    public function __construct(
        private CodeRunner $runner,
        private PythonCodeRunner $pythonRunner,
        private DockerRunner $dockerRunner,
        private AchievementService $achievements,
        private CodeHistoryService $codeHistory,
        private RateLimiter $rateLimiter,
        private array $config,
    ) {
    }

    public function runCode(): void
    {
        header('Content-Type: application/json; charset=utf-8');

        $ip = $_SERVER['REMOTE_ADDR'] ?? 'local';
        $limit = $this->rateLimiter->check('api_run_' . $ip, 40, 60);
        if (!$limit['ok']) {
            http_response_code(429);
            echo json_encode(['ok' => false, 'output' => '', 'error' => 'Demasiadas ejecuciones. Espera un minuto.']);
            return;
        }

        $input = json_decode((string) file_get_contents('php://input'), true);
        $code = is_array($input) ? (string) ($input['code'] ?? '') : '';
        $language = is_array($input) ? (string) ($input['language'] ?? 'php') : 'php';

        if (trim($code) === '') {
            echo json_encode(['ok' => false, 'output' => '', 'error' => 'Escribe código primero.']);
            return;
        }

        $this->achievements->recordLabUse();
        $this->missionsComplete();

        if ($this->dockerRunner->isEnabled() && in_array($language, ['php', 'python'], true)) {
            $result = $this->dockerRunner->run($code, $language);
        } else {
            $result = $language === 'python'
                ? $this->pythonRunner->run($code)
                : $this->runner->run($code);
        }
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
    }

    public function history(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => true, 'items' => $this->codeHistory->recent(30)], JSON_UNESCAPED_UNICODE);
    }

    public function saveSnapshot(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        $input = json_decode((string) file_get_contents('php://input'), true) ?: [];
        $id = $this->codeHistory->save(
            (string) ($input['language'] ?? 'php'),
            (string) ($input['code'] ?? ''),
            (string) ($input['output'] ?? ''),
            isset($input['course']) ? (string) $input['course'] : null,
            isset($input['lesson']) ? (string) $input['lesson'] : null,
        );
        echo json_encode(['ok' => true, 'id' => $id]);
    }

    private function missionsComplete(): void
    {
        if (isset($GLOBALS['escala_app']) && $GLOBALS['escala_app'] instanceof \App\Application) {
            $GLOBALS['escala_app']->missions->complete('lab');
        }
    }
}
