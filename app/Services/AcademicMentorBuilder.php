<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\LessonCatalog;

/**
 * Genera scripts de mentor de excelencia académica a partir del contenido de la lección.
 */
class AcademicMentorBuilder
{
    /** Slugs con mentor artesanal — no reemplazar. */
    private const HANDCRAFTED = [
        'bienvenida', 'variables', 'condiciones', 'funciones', 'http', 'mvc',
        'base-de-datos', 'cache', 'colas', 'api', 'seguridad', 'proyecto-final', 'laravel',
    ];

    /** @param list<array<string, mixed>> $steps */
    public static function isHandcrafted(array $steps, string $slug): bool
    {
        if (in_array($slug, self::HANDCRAFTED, true)) {
            return true;
        }

        foreach ($steps as $step) {
            $type = (string) ($step['type'] ?? '');
            if (in_array($type, ['visual', 'show_file'], true)) {
                return true;
            }
        }

        return false;
    }

    /** @param list<array<string, mixed>> $steps */
    public static function isThin(array $steps): bool
    {
        if (count($steps) >= 10) {
            return false;
        }

        if (count($steps) < 8) {
            return true;
        }

        $types = array_unique(array_map(static fn (array $s): string => (string) ($s['type'] ?? ''), $steps));
        $exercises = count(array_filter($steps, static fn (array $s): bool => ($s['type'] ?? '') === 'exercise'));
        $hasProject = in_array('project', $types, true);

        if ($exercises >= 2 && $hasProject) {
            return false;
        }

        return !in_array('live_demo', $types, true)
            && !in_array('pair', $types, true);
    }

    /** @return list<array<string, mixed>> */
    public static function build(string $slug): array
    {
        $lesson = LessonCatalog::find($slug);
        if ($lesson === null) {
            return [];
        }

        $courseSlug = (string) ($lesson['course'] ?? 'php-fundamentos');
        $course = CourseCatalog::course($courseSlug) ?? [];
        $runtime = (string) ($course['runtime'] ?? 'php');
        $icon = (string) ($course['icon'] ?? '🎯');
        $title = (string) ($lesson['title'] ?? $slug);
        $summary = (string) ($lesson['summary'] ?? '');
        $concepts = (array) ($lesson['concepts'] ?? []);
        $sections = (array) ($lesson['sections'] ?? []);
        $exercises = (array) ($lesson['exercises'] ?? []);

        $steps = [[
            'type' => 'mentor_say',
            'title' => $title,
            'body' => $summary !== ''
                ? $summary . ' Te guío paso a paso con teoría, práctica y validación.'
                : 'Vamos a dominar este módulo con teoría aplicada y ejercicios reales.',
            'emoji' => $icon,
        ]];

        if ($concepts !== []) {
            $links = self::glossaryLinks($concepts);
            if ($links !== '') {
                $steps[] = [
                    'type' => 'teach',
                    'title' => 'Conceptos clave de esta lección',
                    'body' => 'Antes de practicar, ubica estos términos en el glosario: ' . $links,
                ];
            }
        }

        foreach ($sections as $section) {
            $step = [
                'type' => 'teach',
                'title' => (string) ($section['heading'] ?? 'Concepto'),
                'body' => (string) ($section['body'] ?? ''),
            ];
            if (!empty($section['code'])) {
                $step['code'] = (string) $section['code'];
            }
            $steps[] = $step;
        }

        $industry = self::industryContext($title, $summary, $courseSlug);
        if ($industry !== '') {
            $steps[] = [
                'type' => 'mentor_say',
                'title' => 'En el mundo real',
                'body' => $industry,
                'emoji' => '💼',
            ];
        }

        $demo = self::demoForLesson($lesson, $runtime);
        if ($demo !== null) {
            $steps[] = [
                'type' => 'live_demo',
                'title' => 'Mira cómo corre',
                'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
                'demo_code' => $demo['code'],
                'demo_language' => $demo['language'],
            ];
            $steps[] = [
                'type' => 'pair',
                'title' => 'Pair programming — tu turno',
                'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
                'lines' => $demo['lines'],
            ];
        }

        $proTip = self::firstProTip($exercises);
        if ($proTip !== '') {
            $steps[] = [
                'type' => 'teach',
                'title' => 'Pro tip del mentor',
                'body' => $proTip,
            ];
        }

        $connSlug = self::connectionSlug($concepts);
        if ($connSlug !== null) {
            $steps[] = [
                'type' => 'teach',
                'title' => 'Cómo encaja con el resto',
                'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-' . $connSlug . '](/conexiones#conn-' . $connSlug . ').',
            ];
        }

        foreach ($exercises as $i => $exercise) {
            $question = (string) ($exercise['question'] ?? '');
            $steps[] = [
                'type' => 'exercise',
                'title' => 'Tu turno — práctica ' . ($i + 1),
                'body' => $question !== ''
                    ? '**' . $question . '** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.'
                    : 'Aplica lo aprendido. Si fallas, recibes pistas adaptativas.',
                'exercise_index' => $i,
            ];
        }

        if (LessonCatalog::project($slug) !== null) {
            $steps[] = [
                'type' => 'project',
                'title' => 'Mini-proyecto',
                'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
            ];
        }

        $runtimeLabel = match ($runtime) {
            'python' => 'Python',
            'javascript' => 'JavaScript',
            'yaml' => 'DevOps',
            'shell' => 'terminal',
            'sql' => 'SQL',
            default => 'PHP',
        };

        $steps[] = [
            'type' => 'complete',
            'title' => '¡Módulo dominado!',
            'body' => "Integraste conceptos reales de {$runtimeLabel}. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.",
            'emoji' => '🏆',
        ];

        return $steps;
    }

    /** @param list<string> $concepts */
    private static function glossaryLinks(array $concepts): string
    {
        $index = [];
        foreach (LessonCatalog::glossary() as $term) {
            $index[(string) ($term['slug'] ?? '')] = (string) ($term['term'] ?? '');
        }

        $parts = [];
        foreach (array_slice($concepts, 0, 5) as $slug) {
            $slug = (string) $slug;
            $label = $index[$slug] ?? $slug;
            $parts[] = "[{$label}](/glosario#{$slug})";
        }

        return implode(' · ', $parts);
    }

  /** @param list<string> $concepts */
    private static function connectionSlug(array $concepts): ?string
    {
        $connections = require __DIR__ . '/../Data/developer/connections.php';
        $connSlugs = array_column($connections, 'slug');

        foreach ($concepts as $concept) {
            if (in_array((string) $concept, $connSlugs, true)) {
                return (string) $concept;
            }
        }

        return null;
    }

    private static function industryContext(string $title, string $summary, string $courseSlug): string
    {
        $course = CourseCatalog::course($courseSlug);
        $courseTitle = (string) ($course['title'] ?? $courseSlug);

        return "En equipos que usan **{$courseTitle}**, esto aparece en code reviews, incidentes y entregas diarias. "
            . ($summary !== '' ? $summary : $title)
            . ' — no es teoría de manual: es lo que te van a pedir en producción.';
    }

    /** @param array<string, mixed> $lesson */
    private static function demoForLesson(array $lesson, string $runtime): ?array
    {
        foreach ($lesson['sections'] ?? [] as $section) {
            if (!empty($section['code'])) {
                $code = trim((string) $section['code']);
                $lang = match ($runtime) {
                    'python' => 'python',
                    'javascript' => 'javascript',
                    'sql' => 'sql',
                    'shell', 'yaml' => 'shell',
                    default => 'php',
                };

                return [
                    'code' => $code,
                    'language' => $lang,
                    'lines' => array_values(array_filter(explode("\n", $code), static fn (string $l): bool => trim($l) !== '')),
                ];
            }
        }

        foreach ($lesson['exercises'] ?? [] as $exercise) {
            if (($exercise['type'] ?? '') === 'code' || ($exercise['type'] ?? '') === 'js') {
                $hint = (string) ($exercise['hint'] ?? '');
                if ($hint !== '') {
                    $lang = ($exercise['type'] ?? '') === 'js' ? 'javascript' : match ($runtime) {
                        'python' => 'python',
                        default => 'php',
                    };

                    return [
                        'code' => $hint,
                        'language' => $lang,
                        'lines' => array_values(array_filter(explode("\n", $hint), static fn (string $l): bool => trim($l) !== '')),
                    ];
                }
            }
        }

        $defaults = match ($runtime) {
            'python' => ["print('Hola desde Python')"],
            'javascript' => ["console.log('Hola desde JavaScript');"],
            'sql' => ['SELECT 1 AS ok;'],
            'shell', 'yaml' => ['echo "Practica en terminal"'],
            default => ["<?php\necho 'Hola desde PHP';"],
        };

        return [
            'code' => implode("\n", $defaults),
            'language' => match ($runtime) {
                'python' => 'python',
                'javascript' => 'javascript',
                'sql' => 'sql',
                'shell', 'yaml' => 'shell',
                default => 'php',
            },
            'lines' => $defaults,
        ];
    }

    /** @param list<array<string, mixed>> $exercises */
    private static function firstProTip(array $exercises): string
    {
        foreach ($exercises as $exercise) {
            $tip = (string) ($exercise['pro_tip'] ?? '');
            if ($tip !== '') {
                return '💡 **Pro tip:** ' . $tip;
            }
        }

        return '';
    }
}
