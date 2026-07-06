<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\ProgressRepository;
use App\Services\AchievementService;
use App\Services\CertificateVerifyService;
use App\View;

class CertificateController
{
    public function __construct(
        private ProgressRepository $progress,
        private AchievementService $achievements,
        private Gamification $gamification,
        private CertificateVerifyService $certificateVerify,
        private array $config,
    ) {
    }

    public function show(): void
    {
        $courseSlug = (string) ($_GET['curso'] ?? 'php-fundamentos');
        $course = CourseCatalog::course($courseSlug) ?? CourseCatalog::course('php-fundamentos');
        $courseSlug = (string) ($course['slug'] ?? 'php-fundamentos');
        $lessons = CourseCatalog::lessonsForCourse($courseSlug);
        $total = count($lessons);
        $completed = $this->progress->completedCount($courseSlug);
        $profile = $this->gamification->profile();

        $verifyCode = null;
        if ($this->achievements->isCourseGraduate($courseSlug)) {
            $verifyCode = $this->certificateVerify->issue($courseSlug, (string) ($profile['display_name'] ?? 'Aprendiz'));
        }

        View::show('certificate', [
            'config' => $this->config,
            'title' => 'Certificado — ' . ($course['title'] ?? 'Curso'),
            'profile' => $profile,
            'course' => $course,
            'courseSlug' => $courseSlug,
            'isGraduate' => $this->achievements->isCourseGraduate($courseSlug),
            'completed' => $completed,
            'total' => $total,
            'percent' => $total > 0 ? (int) round(($completed / $total) * 100) : 0,
            'date' => date('d/m/Y'),
            'verifyCode' => $verifyCode,
        ]);
    }

    public function download(): void
    {
        $courseSlug = (string) ($_GET['curso'] ?? 'php-fundamentos');
        if (!$this->achievements->isCourseGraduate($courseSlug)) {
            header('Location: /certificado?curso=' . urlencode($courseSlug));
            exit;
        }

        $course = CourseCatalog::course($courseSlug);
        $profile = $this->gamification->profile();
        $name = htmlspecialchars((string) ($profile['display_name'] ?? 'Aprendiz'), ENT_QUOTES, 'UTF-8');
        $courseTitle = htmlspecialchars((string) ($course['title'] ?? 'Curso'), ENT_QUOTES, 'UTF-8');
        $date = date('d/m/Y');
        $xp = (int) ($profile['xp'] ?? 0);
        $total = count(CourseCatalog::lessonsForCourse($courseSlug));

        header('Content-Type: text/html; charset=utf-8');
        echo <<<HTML
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><title>Certificado — {$courseTitle}</title>
<style>
body{font-family:Georgia,serif;text-align:center;padding:3rem;background:#f5f5f5}
.cert{max-width:700px;margin:0 auto;background:#fff;border:8px double #3776ab;padding:3rem}
h1{color:#3776ab;margin:0} .name{font-size:2rem;margin:1rem 0;color:#111}
.meta{color:#666;margin-top:1.5rem}
@media print{body{background:#fff}.no-print{display:none}}
</style></head><body>
<div class="cert">
<div style="font-size:3rem">🏆</div>
<p>CERTIFICADO DE GRADUACIÓN</p>
<h1>{$courseTitle}</h1>
<p>Otorgado a</p>
<p class="name">{$name}</p>
<p>Por completar los {$total} módulos del curso con mentor guiado y proyectos validados.</p>
<p class="meta">Expedido: {$date} · {$xp} XP</p>
</div>
<p class="no-print"><button onclick="window.print()">Imprimir / Guardar como PDF</button></p>
<script>window.onload=()=>window.print()</script>
</body></html>
HTML;
        exit;
    }
}
