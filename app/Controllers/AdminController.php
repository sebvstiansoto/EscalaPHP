<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\AdminService;
use App\Services\BackupService;
use App\Services\CourseCmsService;
use App\Services\JobQueueService;
use App\Services\LearnerContext;
use App\Services\LessonCmsService;
use App\View;

class AdminController
{
    public function __construct(
        private AdminService $admin,
        private CourseCmsService $cms,
        private LessonCmsService $lessonCms,
        private JobQueueService $jobs,
        private BackupService $backup,
        private array $config,
        private LearnerContext $context,
    ) {
    }

    public function loginForm(): void
    {
        if ($this->isAdmin()) {
            header('Location: /admin');
            exit;
        }

        View::show('admin/login', [
            'config' => $this->config,
            'title' => 'Admin — Escala',
            'error' => $_SESSION['admin_error'] ?? null,
        ]);
        unset($_SESSION['admin_error']);
    }

    public function login(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $password = (string) ($_POST['password'] ?? '');
        $expected = (string) ($this->config['admin_password'] ?? '');

        if ($expected === '' || !hash_equals($expected, $password)) {
            $_SESSION['admin_error'] = 'Contraseña incorrecta.';
            header('Location: /admin/login');
            exit;
        }

        $_SESSION['admin_authenticated'] = true;
        header('Location: /admin');
        exit;
    }

    public function logout(): void
    {
        unset($_SESSION['admin_authenticated']);
        header('Location: /admin/login');
        exit;
    }

    public function dashboard(): void
    {
        $this->requireAdmin();

        View::show('admin/dashboard', [
            'config' => $this->config,
            'title' => 'Panel admin',
            'stats' => $this->admin->stats(),
        ]);
    }

    public function users(): void
    {
        $this->requireAdmin();

        View::show('admin/users', [
            'config' => $this->config,
            'title' => 'Usuarios',
            'users' => $this->admin->users(100),
        ]);
    }

    public function setUserPlan(): void
    {
        $this->requireAdmin();
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);

        $userId = (int) ($_POST['user_id'] ?? 0);
        $plan = (string) ($_POST['plan'] ?? 'free');
        if ($userId > 0 && in_array($plan, ['free', 'pro'], true)) {
            $this->admin->setPlan($userId, $plan);
        }

        header('Location: /admin/usuarios');
        exit;
    }

    public function courses(): void
    {
        $this->requireAdmin();
        View::show('admin/courses', [
            'config' => $this->config,
            'title' => 'CMS Cursos',
            'courses' => $this->cms->coursesWithOverrides(),
        ]);
    }

    public function saveCourse(): void
    {
        $this->requireAdmin();
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $slug = (string) ($_POST['slug'] ?? '');
        if ($slug !== '') {
            $this->cms->saveOverride(
                $slug,
                trim((string) ($_POST['title'] ?? '')) ?: null,
                (string) ($_POST['status'] ?? '') ?: null,
                isset($_POST['featured']) ? (bool) $_POST['featured'] : null,
            );
        }
        header('Location: /admin/cursos');
        exit;
    }

    public function analytics(): void
    {
        $this->requireAdmin();
        View::show('admin/analytics', [
            'config' => $this->config,
            'title' => 'Analytics',
            'stats' => $this->admin->stats(),
            'chart' => $this->admin->weeklyActivity(),
            'topCourses' => $this->admin->topCourses(),
        ]);
    }

    public function lessons(): void
    {
        $this->requireAdmin();
        View::show('admin/lessons', [
            'config' => $this->config,
            'title' => 'CMS Lecciones',
            'overrides' => $this->lessonCms->allOverrides(),
            'courses' => \App\CourseCatalog::courses(),
        ]);
    }

    public function editLesson(): void
    {
        $this->requireAdmin();
        $course = (string) ($_GET['curso'] ?? '');
        $lesson = (string) ($_GET['leccion'] ?? '');
        $base = \App\LessonCatalog::find($lesson, $course) ?? [];
        $override = $this->lessonCms->get($course, $lesson);
        View::show('admin/lesson-edit', [
            'config' => $this->config,
            'title' => 'Editar lección',
            'course' => $course,
            'lesson' => $lesson,
            'base' => $base,
            'override' => $override,
        ]);
    }

    public function saveLesson(): void
    {
        $this->requireAdmin();
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $this->lessonCms->save(
            (string) ($_POST['course'] ?? ''),
            (string) ($_POST['lesson'] ?? ''),
            trim((string) ($_POST['title'] ?? '')) ?: null,
            trim((string) ($_POST['summary'] ?? '')) ?: null,
            trim((string) ($_POST['exercises_json'] ?? '')) ?: null,
            (string) ($_POST['status'] ?? 'published'),
        );
        header('Location: /admin/lecciones');
        exit;
    }

    public function logs(): void
    {
        $this->requireAdmin();
        $path = (string) ($this->config['log_path'] ?? '');
        $lines = is_file($path) ? array_slice(file($path) ?: [], -100) : [];
        View::show('admin/logs', [
            'config' => $this->config,
            'title' => 'Logs',
            'lines' => $lines,
        ]);
    }

    public function runJobs(): void
    {
        $this->requireAdmin();
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        $n = $this->jobs->process(20);
        $_SESSION['admin_message'] = "Jobs procesados: {$n}";
        header('Location: /admin');
        exit;
    }

    public function backup(): void
    {
        $this->requireAdmin();
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        try {
            $path = $this->backup->run();
            $_SESSION['admin_message'] = 'Backup: ' . basename($path);
        } catch (\Throwable $e) {
            $_SESSION['admin_error'] = $e->getMessage();
        }
        header('Location: /admin');
        exit;
    }

    private function requireAdmin(): void
    {
        if (!$this->isAdmin()) {
            header('Location: /admin/login');
            exit;
        }
    }

    private function isAdmin(): bool
    {
        if (!empty($_SESSION['admin_authenticated'])) {
            return true;
        }

        $userId = $this->context->userId();
        if ($userId === null) {
            return false;
        }

        $stmt = $this->context->pdo()->prepare('SELECT is_admin FROM users WHERE id = ?');
        $stmt->execute([$userId]);
        $row = $stmt->fetch();

        return (int) ($row['is_admin'] ?? 0) === 1;
    }
}
