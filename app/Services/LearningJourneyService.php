<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\DeveloperGuide;
use App\LessonCatalog;
use App\ProgressRepository;

/**
 * Unifica las cuatro patas del aprendizaje para perfil y dashboard.
 */
class LearningJourneyService
{
    public function __construct(
        private ProgressRepository $progress,
        private LearningPathService $paths,
        private LearnerContext $context,
        private LearningInsightsService $insights,
    ) {
    }

    /** @return array<string, mixed> */
    public function snapshot(): array
    {
        $insights = $this->insights->dashboard();
        $pathSlug = $this->paths->selected($this->context);
        $pathProgress = $this->pathProgress($pathSlug);
        $checklist = DeveloperGuide::checklist();
        $devStats = DeveloperGuide::stats();

        return [
            'insights' => $insights,
            'pillars' => [
                'reference' => $this->referencePillar(),
                'practice' => $this->practicePillar($insights),
                'path' => $this->pathPillar($pathSlug, $pathProgress, $checklist),
                'progress' => $this->progressPillar($insights),
            ],
            'path_slug' => $pathSlug,
            'path_progress' => $pathProgress,
            'dev_stats' => $devStats,
            'checklist_levels' => $checklist['levels'],
            'checklist_total' => count($checklist['items']),
        ];
    }

    /** @return array<string, mixed> */
    private function referencePillar(): array
    {
        $stats = DeveloperGuide::stats();
        $concepts = $this->recentConcepts();

        return [
            'title' => '¿Qué es y cómo encaja?',
            'subtitle' => 'Glosario + Guía del developer',
            'stats' => [
                ['label' => 'Términos', 'value' => $stats['glossary']],
                ['label' => 'Conexiones', 'value' => $stats['connections']],
                ['label' => 'Guías de error', 'value' => $stats['guides']],
            ],
            'links' => [
                ['url' => '/glosario', 'label' => 'Glosario', 'icon' => '📖'],
                ['url' => '/developer', 'label' => 'Guía developer', 'icon' => '⌂'],
                ['url' => '/conexiones', 'label' => 'Conexiones', 'icon' => '🔗'],
                ['url' => '/mapa-developer', 'label' => 'Mapa', 'icon' => '🗺'],
                ['url' => '/troubleshooting', 'label' => 'Errores', 'icon' => '🔧'],
            ],
            'concepts' => $concepts,
        ];
    }

    /** @param array<string, mixed> $insights */
    private function practicePillar(array $insights): array
    {
        $inProgress = [];
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            $lessons = CourseCatalog::lessonsForCourse($slug);
            $total = count($lessons);
            if ($total === 0) {
                continue;
            }
            $done = 0;
            foreach ($lessons as $lesson) {
                if ($this->progress->isLessonCompleted($slug, (string) $lesson['slug'])) {
                    $done++;
                }
            }
            $pct = (int) round(($done / $total) * 100);
            if ($pct > 0 && $pct < 100) {
                $inProgress[] = [
                    'slug' => $slug,
                    'title' => (string) ($course['title'] ?? $slug),
                    'percent' => $pct,
                    'done' => $done,
                    'total' => $total,
                ];
            }
        }

        usort($inProgress, static fn (array $a, array $b): int => $b['percent'] <=> $a['percent']);

        return [
            'title' => '¿Cómo lo hago?',
            'subtitle' => 'Cursos + Mentor interactivo',
            'next_action' => $insights['next_action'] ?? null,
            'in_progress' => array_slice($inProgress, 0, 4),
            'links' => [
                ['url' => '/', 'label' => 'Catálogo', 'icon' => '📚'],
                ['url' => '/laboratorio', 'label' => 'Laboratorio', 'icon' => '⚗'],
            ],
        ];
    }

    /**
     * @param array{courses: list<string>, completed: int, total: int, percent: int, title: string, slug: string}|null $pathProgress
     * @param array{levels: list<array<string, mixed>>, items: list<array<string, mixed>>} $checklist
     *
     * @return array<string, mixed>
     */
    private function pathPillar(?string $pathSlug, ?array $pathProgress, array $checklist): array
    {
        return [
            'title' => '¿Qué estudiar y en qué orden?',
            'subtitle' => 'Rutas + Checklist por nivel',
            'selected_path' => $pathSlug,
            'path_progress' => $pathProgress,
            'checklist_levels' => array_map(static fn (array $level): array => [
                'slug' => (string) ($level['slug'] ?? ''),
                'title' => (string) ($level['title'] ?? ''),
                'color' => (string) ($level['color'] ?? '#4f7cff'),
                'count' => count(array_filter(
                    $checklist['items'],
                    static fn (array $item): bool => ($item['level'] ?? '') === ($level['slug'] ?? ''),
                )),
            ], $checklist['levels']),
            'links' => [
                ['url' => '/rutas', 'label' => 'Elegir ruta', 'icon' => '🛤'],
                ['url' => '/checklist-developer', 'label' => 'Checklist', 'icon' => '✓'],
            ],
        ];
    }

    /** @param array<string, mixed> $insights */
    private function progressPillar(array $insights): array
    {
        $totalLessons = 0;
        $completedLessons = (int) ($insights['completed'] ?? 0);
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') === 'available') {
                $totalLessons += count(CourseCatalog::lessonsForCourse($slug));
            }
        }
        $globalPct = $totalLessons > 0 ? (int) round(($completedLessons / $totalLessons) * 100) : 0;

        return [
            'title' => '¿Cómo voy?',
            'subtitle' => 'Perfil + métricas de estudio',
            'completed' => $completedLessons,
            'total' => $totalLessons,
            'global_percent' => $globalPct,
            'weekly' => (int) ($insights['weekly'] ?? 0),
            'goal' => (int) ($insights['goal'] ?? 5),
            'pace' => (float) ($insights['pace'] ?? 0),
            'days_to_finish' => $insights['days_to_finish'] ?? null,
            'calendar' => $insights['calendar'] ?? [],
            'links' => [
                ['url' => '/perfil', 'label' => 'Mi perfil', 'icon' => '👤'],
                ['url' => '/certificado', 'label' => 'Certificados', 'icon' => '🎓'],
            ],
        ];
    }

    /** @return list<array{slug: string, term: string}> */
    private function recentConcepts(): array
    {
        $out = [];
        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            foreach (CourseCatalog::lessonsForCourse($slug) as $lesson) {
                if ($this->progress->isLessonCompleted($slug, (string) $lesson['slug'])) {
                    continue;
                }
                foreach ((array) ($lesson['concepts'] ?? []) as $concept) {
                    $concept = (string) $concept;
                    if ($concept === '' || isset($out[$concept])) {
                        continue;
                    }
                    $term = $this->glossaryTerm($concept);
                    $out[$concept] = ['slug' => $concept, 'term' => $term];
                    if (count($out) >= 6) {
                        return array_values($out);
                    }
                }
                break;
            }
        }

        return array_values($out);
    }

    private function glossaryTerm(string $slug): string
    {
        foreach (LessonCatalog::glossary() as $term) {
            if (($term['slug'] ?? '') === $slug) {
                return (string) ($term['term'] ?? $slug);
            }
        }

        return $slug;
    }

    /**
     * @return array{slug: string, title: string, courses: list<string>, completed: int, total: int, percent: int}|null
     */
    private function pathProgress(?string $pathSlug): ?array
    {
        if ($pathSlug === null) {
            return null;
        }

        $paths = $this->paths->all();
        $path = $paths[$pathSlug] ?? null;
        if ($path === null) {
            return null;
        }

        $total = 0;
        $completed = 0;
        foreach ($path['courses'] as $courseSlug) {
            $lessons = CourseCatalog::lessonsForCourse((string) $courseSlug);
            $total += count($lessons);
            foreach ($lessons as $lesson) {
                if ($this->progress->isLessonCompleted((string) $courseSlug, (string) $lesson['slug'])) {
                    $completed++;
                }
            }
        }

        return [
            'slug' => $pathSlug,
            'title' => (string) ($path['title'] ?? $pathSlug),
            'courses' => $path['courses'],
            'completed' => $completed,
            'total' => $total,
            'percent' => $total > 0 ? (int) round(($completed / $total) * 100) : 0,
        ];
    }
}
