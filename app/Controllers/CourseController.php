<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\ProgressRepository;
use App\Services\AuthService;
use App\Services\EntitlementService;
use App\Services\Gamification;
use App\View;

class CourseController
{
    public function __construct(
        private ProgressRepository $progress,
        private Gamification $gamification,
        private AuthService $auth,
        private EntitlementService $entitlements,
        private array $config,
    ) {
    }

    public function show(): void
    {
        $slug = (string) ($_GET['slug'] ?? '');
        $course = CourseCatalog::course($slug);

        if ($course === null) {
            http_response_code(404);
            View::show('errors/404', ['path' => '/curso/' . $slug, 'config' => $this->config]);
            return;
        }

        if (!$this->entitlements->canAccessCourse($slug)) {
            View::show('errors/premium', [
                'config' => $this->config,
                'title' => 'Curso Pro — ' . ($course['title'] ?? ''),
                'course' => $course,
            ]);
            return;
        }

        $lessons = CourseCatalog::lessonsForCourse($slug);
        $isPlaceholder = $lessons === [] && ($course['status'] ?? '') !== 'available';
        if ($lessons === []) {
            $lessons = CourseCatalog::roadmapForCourse($slug);
            $isPlaceholder = true;
        }

        $progress = $this->progress->allForCourse($slug);
        $completed = 0;
        foreach ($lessons as $lesson) {
            if (!empty($lesson['placeholder'])) {
                continue;
            }
            if ($this->progress->isLessonCompleted($slug, (string) $lesson['slug'])) {
                $completed++;
            }
        }

        $playableTotal = count(array_filter($lessons, static fn ($l) => empty($l['placeholder'])));
        $requirementsMissing = CourseCatalog::requirementsMet($slug, $this->progress);

        $reviewLessons = [];
        foreach ($this->progress->dueForReview(3, $slug) as $row) {
            foreach ($lessons as $lesson) {
                if (($lesson['slug'] ?? '') === ($row['lesson_slug'] ?? '')) {
                    $reviewLessons[] = $lesson;
                }
            }
        }

        View::show('course', [
            'config' => $this->config,
            'title' => ($course['title'] ?? 'Curso') . ' — Escala',
            'course' => $course,
            'courseSlug' => $slug,
            'lessons' => $lessons,
            'progress' => $progress,
            'completed' => $completed,
            'total' => $playableTotal > 0 ? $playableTotal : count($lessons),
            'isPlaceholder' => $isPlaceholder,
            'requirementsMissing' => $requirementsMissing,
            'reviewLessons' => $reviewLessons,
            'profile' => $this->gamification->profile(),
            'user' => $this->auth->currentUser(),
        ]);
    }
}
