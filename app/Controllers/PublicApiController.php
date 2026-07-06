<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\Http\Csrf;
use App\Services\ApiKeyService;
use App\Services\LearnerContext;
use App\Services\SearchService;

class PublicApiController
{
    private ?int $authenticatedUserId = null;

    public function __construct(
        private ApiKeyService $apiKeys,
        private SearchService $search,
        private LearnerContext $context,
    ) {
    }

    public function courses(): void
    {
        if (!$this->authenticate()) {
            return;
        }

        $courses = [];
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            $courses[] = [
                'slug' => $slug,
                'title' => $course['title'] ?? $slug,
                'category' => $course['category'] ?? '',
                'lessons' => count(CourseCatalog::lessonsForCourse($slug)),
            ];
        }

        $this->json(['ok' => true, 'courses' => $courses]);
    }

    public function search(): void
    {
        if (!$this->authenticate()) {
            return;
        }

        $q = (string) ($_GET['q'] ?? '');
        $results = $this->search->search($q, 20);
        $this->json(['ok' => true, 'results' => $results]);
    }

    public function progress(): void
    {
        if (!$this->authenticate()) {
            return;
        }

        $userId = $this->authenticatedUserId ?? (int) $this->context->userId();
        if ($userId <= 0) {
            $this->json(['ok' => false, 'error' => 'API key must belong to logged-in user context'], 403);
            return;
        }

        $stmt = $this->context->pdo()->prepare(
            'SELECT course_slug, lesson_slug, completed FROM progress WHERE user_id = ? AND completed = 1'
        );
        $stmt->execute([$userId]);
        $this->json(['ok' => true, 'completed' => $stmt->fetchAll()]);
    }

    private function authenticate(): bool
    {
        $header = (string) ($_SERVER['HTTP_AUTHORIZATION'] ?? '');
        $key = str_starts_with($header, 'Bearer ') ? substr($header, 7) : (string) ($_GET['api_key'] ?? '');
        if ($key === '' || ($row = $this->apiKeys->authenticate($key)) === null) {
            $this->json(['ok' => false, 'error' => 'Invalid API key'], 401);
            return false;
        }

        $this->authenticatedUserId = (int) $row['user_id'];

        return true;
    }

    /** @param array<string, mixed> $data */
    private function json(array $data, int $code = 200): void
    {
        http_response_code($code);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
