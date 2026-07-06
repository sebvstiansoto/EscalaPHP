<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\ExamService;
use App\Services\LearnerContext;
use App\View;

class ExamController
{
    public function __construct(
        private ExamService $exams,
        private LearnerContext $context,
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
            'exam' => $exam,
            'result' => $_SESSION['exam_result'] ?? null,
        ]);
        unset($_SESSION['exam_result']);
    }

    public function submit(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $slug = (string) ($_POST['exam'] ?? '');
        $answers = is_array($_POST['answers'] ?? null) ? $_POST['answers'] : [];
        $_SESSION['exam_result'] = $this->exams->grade($slug, $answers, $this->context);
        header('Location: /examenes/' . urlencode($slug));
        exit;
    }
}
