<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\AchievementService;
use App\Services\ExamService;
use App\Services\LearnerContext;
use App\View;

class ExamController
{
    public function __construct(
        private ExamService $exams,
        private LearnerContext $context,
        private AchievementService $achievements,
        private array $config,
    ) {
    }

    public function index(): void
    {
        View::show('exams/index', [
            'config' => $this->config,
            'title' => 'Exámenes finales',
            'exams' => $this->exams->all(),
        ]);
    }

    public function show(string $slug): void
    {
        $exam = $this->exams->get($slug);
        if ($exam === null) {
            http_response_code(404);
            View::show('errors/404', ['path' => '/examenes/' . $slug, 'config' => $this->config]);
            return;
        }

        View::show('exams/show', [
            'config' => $this->config,
            'title' => (string) ($exam['title'] ?? 'Examen'),
            'exam' => $exam + ['slug' => $slug],
            'result' => $_SESSION['exam_result'] ?? null,
        ]);
        if (empty($_SESSION['exam_result'])) {
            $_SESSION['exam_started'][$slug] = time();
        }
        unset($_SESSION['exam_result']);
    }

    public function submit(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $slug = (string) ($_POST['exam'] ?? '');
        $answers = is_array($_POST['answers'] ?? null) ? $_POST['answers'] : [];
        $result = $this->exams->grade($slug, $answers, $this->context);
        if (!empty($result['passed']) && !empty($result['simulation'])) {
            $this->achievements->awardSimulationExamPass();
        }
        $_SESSION['exam_result'] = $result;
        header('Location: /examenes/' . urlencode($slug));
        exit;
    }
}
