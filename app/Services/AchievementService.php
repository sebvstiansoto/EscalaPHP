<?php

declare(strict_types=1);

namespace App\Services;

use App\LessonCatalog;
use App\ProgressRepository;
use PDO;

class AchievementService
{
    /** @var list<array<string, mixed>>|null */
    private ?array $catalog = null;

    public function __construct(
        private PDO $pdo,
        private ProgressRepository $progress,
        private Gamification $gamification,
        private LearnerContext $context,
    ) {
    }

    /** @return list<array<string, mixed>> */
    public function catalog(): array
    {
        if ($this->catalog === null) {
            $this->catalog = require __DIR__ . '/../Data/achievements.php';
        }

        return $this->catalog;
    }

    /** @return list<array<string, mixed>> */
    public function earned(): array
    {
        [$where, $params] = $this->achievementFilter();
        $stmt = $this->pdo->prepare(
            "SELECT achievement_id, earned_at FROM achievements WHERE {$where} ORDER BY earned_at"
        );
        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    /** @return list<array<string, mixed>> */
    public function allWithStatus(): array
    {
        $earnedIds = array_column($this->earned(), 'achievement_id');
        $result = [];

        foreach ($this->catalog() as $badge) {
            $result[] = array_merge($badge, [
                'earned' => in_array($badge['id'], $earnedIds, true),
            ]);
        }

        return $result;
    }

    public function checkAndAward(): void
    {
        $phpDone = $this->progress->completedCount('php-fundamentos');
        $pyDone = $this->progress->completedCount('python-backend');
        $webDone = $this->progress->completedCount('html-css-js');
        $epDone = $this->progress->completedCount('php-enterprise');
        $dkDone = $this->progress->completedCount('docker');
        $asDone = $this->progress->completedCount('astro-web');
        $gitDone = $this->progress->completedCount('git-fundamentos');
        $ciDone = $this->progress->completedCount('cicd');
        $k8sDone = $this->progress->completedCount('kubernetes');
        $sqlDone = $this->progress->completedCount('sql-fundamentos');
        $profile = $this->gamification->profile();
        $streak = (int) ($profile['streak'] ?? 0);
        $labUses = (int) ($profile['lab_uses'] ?? 0);

        if ($phpDone >= 1 || $pyDone >= 1) {
            $this->award('first_step');
        }
        if ($phpDone >= 4) {
            $this->award('fundamentos');
        }
        if ($phpDone >= 6) {
            $this->award('web_master');
        }
        if ($pyDone >= 1) {
            $this->award('py_first');
        }
        if ($pyDone >= 4) {
            $this->award('py_fundamentos');
        }
        if ($this->isCourseComplete('python-backend')) {
            $this->award('py_graduate');
        }
        if ($webDone >= 1) {
            $this->award('web_first');
        }
        if ($this->isCourseComplete('html-css-js')) {
            $this->award('web_graduate');
        }
        if ($this->isCourseComplete('react-frontend')) {
            $this->award('react_graduate');
        }
        if ($epDone >= 1) {
            $this->award('ep_first');
        }
        if ($this->isCourseComplete('php-enterprise')) {
            $this->award('ep_graduate');
        }
        if ($dkDone >= 1) {
            $this->award('dk_first');
        }
        if ($this->isCourseComplete('docker')) {
            $this->award('dk_graduate');
        }
        if ($asDone >= 1) {
            $this->award('as_first');
        }
        if ($this->isCourseComplete('astro-web')) {
            $this->award('as_graduate');
        }
        if ($gitDone >= 1) {
            $this->award('git_first');
        }
        if ($this->isCourseComplete('git-fundamentos')) {
            $this->award('git_graduate');
        }
        if ($ciDone >= 1) {
            $this->award('ci_first');
        }
        if ($this->isCourseComplete('cicd')) {
            $this->award('ci_graduate');
        }
        if ($k8sDone >= 1) {
            $this->award('k8s_first');
        }
        if ($this->isCourseComplete('kubernetes')) {
            $this->award('k8s_graduate');
        }
        if ($sqlDone >= 1) {
            $this->award('sql_first');
        }
        if ($this->isCourseComplete('sql-fundamentos')) {
            $this->award('sql_graduate');
        }
        if ($this->progress->isLessonCompleted('php-fundamentos', 'base-de-datos')) {
            $this->award('data_wizard');
        }
        if ($this->progress->isLessonCompleted('php-fundamentos', 'cache')
            && $this->progress->isLessonCompleted('php-fundamentos', 'colas')
            && $this->progress->isLessonCompleted('php-fundamentos', 'api')) {
            $this->award('scale_ready');
        }
        if ($this->progress->isLessonCompleted('php-fundamentos', 'seguridad')) {
            $this->award('security_first');
        }
        if ($this->progress->isLessonCompleted('php-fundamentos', 'proyecto-final')) {
            $this->award('graduate');
        }
        if ($streak >= 3) {
            $this->award('streak_3');
        }
        if ($streak >= 7) {
            $this->award('streak_7');
        }
        if ($labUses >= 5) {
            $this->award('lab_rat');
        }

        $projectCount = count($this->completedProjectSlugs());
        if ($projectCount >= 1) {
            $this->award('first_project');
        }
        if ($projectCount >= 5) {
            $this->award('builder');
        }
        if ($this->context->isLoggedIn()) {
            $this->award('registered');
        }

        $completedCourses = $this->countCompletedCourses();
        if ($completedCourses >= 5) {
            $this->award('scholar_5');
        }
        if ($completedCourses >= 10) {
            $this->award('scholar_10');
        }
        if ($completedCourses >= 25) {
            $this->award('scholar_25');
        }
        if ($completedCourses >= 50) {
            $this->award('scholar_50');
        }

        $pathService = new LearningPathService();
        $pathsDone = count($pathService->completedPaths($this->progress));
        if ($pathsDone >= 1) {
            $this->award('path_first');
        }
        if ($pathsDone >= 3) {
            $this->award('path_master');
        }

        foreach ([
            'seguridad-web' => 'sec_graduate',
            'laravel-fundamentos' => 'laravel_graduate',
            'nextjs-fullstack' => 'next_graduate',
            'aws-cloud-basico' => 'aws_graduate',
            'terraform-iac' => 'tf_graduate',
            'ai-llm-desarrollo' => 'ai_graduate',
            'system-design' => 'sd_graduate',
            'testing-php' => 'test_graduate',
            'oauth-openid' => 'oauth_graduate',
            'observabilidad' => 'obs_graduate',
        ] as $course => $badge) {
            if ($this->isCourseComplete($course)) {
                $this->award($badge);
            }
        }
    }

    public function awardSimulationExamPass(): void
    {
        $this->award('exam_sim_pass');
    }

    public function countCompletedCourses(): int
    {
        $count = 0;
        foreach (\App\CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            if ($this->isCourseComplete($slug)) {
                $count++;
            }
        }

        return $count;
    }

    public function recordLabUse(): void
    {
        $this->gamification->incrementLabUses();
        $this->checkAndAward();
    }

    public function isGraduate(): bool
    {
        return $this->has('graduate');
    }

    public function isCourseGraduate(string $courseSlug): bool
    {
        return match ($courseSlug) {
            'php-fundamentos' => $this->has('graduate'),
            'python-backend' => $this->has('py_graduate'),
            'html-css-js' => $this->has('web_graduate'),
            'react-frontend' => $this->has('react_graduate'),
            'php-enterprise' => $this->has('ep_graduate'),
            'docker' => $this->has('dk_graduate'),
            'astro-web' => $this->has('as_graduate'),
            'git-fundamentos' => $this->has('git_graduate'),
            'cicd' => $this->has('ci_graduate'),
            'kubernetes' => $this->has('k8s_graduate'),
            'sql-fundamentos' => $this->has('sql_graduate'),
            'seguridad-web' => $this->has('sec_graduate'),
            'laravel-fundamentos' => $this->has('laravel_graduate'),
            'nextjs-fullstack' => $this->has('next_graduate'),
            'aws-cloud-basico' => $this->has('aws_graduate'),
            'terraform-iac' => $this->has('tf_graduate'),
            'ai-llm-desarrollo' => $this->has('ai_graduate'),
            'system-design' => $this->has('sd_graduate'),
            'testing-php' => $this->has('test_graduate'),
            'oauth-openid' => $this->has('oauth_graduate'),
            'observabilidad' => $this->has('obs_graduate'),
            default => $this->isCourseComplete($courseSlug),
        };
    }

    public function isCourseComplete(string $courseSlug): bool
    {
        $lessons = \App\CourseCatalog::lessonsForCourse($courseSlug);
        if ($lessons === []) {
            return false;
        }
        foreach ($lessons as $lesson) {
            if (!$this->progress->isLessonCompleted($courseSlug, (string) $lesson['slug'])) {
                return false;
            }
        }

        return true;
    }

    public function has(string $id): bool
    {
        [$where, $params] = $this->achievementFilter();
        $stmt = $this->pdo->prepare(
            "SELECT id FROM achievements WHERE {$where} AND achievement_id = ?"
        );
        $stmt->execute([...$params, $id]);

        return (bool) $stmt->fetch();
    }

    /** @return list<string> */
    private function completedProjectSlugs(): array
    {
        [$where, $params] = $this->projectFilter();
        $stmt = $this->pdo->prepare("SELECT lesson_slug FROM project_completions WHERE {$where}");
        $stmt->execute($params);

        return array_column($stmt->fetchAll(), 'lesson_slug');
    }

    /** @return array{0: string, 1: list<mixed>} */
    private function achievementFilter(): array
    {
        if ($this->context->userId() !== null) {
            return ['user_id = ?', [$this->context->userId()]];
        }

        return ['session_id = ? AND (user_id IS NULL OR user_id = 0)', [$this->context->sessionId()]];
    }

    /** @return array{0: string, 1: list<mixed>} */
    private function projectFilter(): array
    {
        return $this->achievementFilter();
    }

    private function award(string $id): void
    {
        if ($this->has($id)) {
            return;
        }

        $badge = null;
        foreach ($this->catalog() as $item) {
            if ($item['id'] === $id) {
                $badge = $item;
                break;
            }
        }

        if ($badge === null) {
            return;
        }

        $stmt = $this->pdo->prepare(
            'INSERT INTO achievements (session_id, user_id, achievement_id, earned_at) VALUES (?, ?, ?, ?)'
        );
        $stmt->execute([
            $this->context->sessionId(),
            $this->context->userId(),
            $id,
            date('c'),
        ]);
        $this->gamification->addXp((int) $badge['xp'], 'Logro: ' . $badge['title']);
    }
}
