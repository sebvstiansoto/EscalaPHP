<?php

declare(strict_types=1);

namespace App\Services;

use App\LessonCatalog;

/**
 * Enriquece lecciones con secciones académicas adicionales cuando el contenido base es escueto.
 */
class LessonEnrichment
{
    private const HANDCRAFTED_COURSE = 'php-fundamentos';

    /** @param array<string, mixed> $lesson */
    public static function enrich(array $lesson, string $courseSlug): array
    {
        if ($courseSlug === self::HANDCRAFTED_COURSE) {
            return $lesson;
        }

        $sections = (array) ($lesson['sections'] ?? []);
        $exercises = (array) ($lesson['exercises'] ?? []);
        $concepts = (array) ($lesson['concepts'] ?? []);
        $summary = (string) ($lesson['summary'] ?? '');

        if (count($sections) < 3 && $summary !== '') {
            $sections[] = [
                'heading' => 'Resumen ejecutivo',
                'body' => '**Objetivo:** ' . $summary . ' Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
            ];
        }

        if (count($sections) < 3) {
            $sections[] = [
                'heading' => 'Checklist de dominio',
                'body' => 'Antes de avanzar confirma: entiendes el concepto, puedes nombrar un caso real y resolviste los ejercicios sin copiar.',
            ];
        }

        if ($concepts !== [] && !self::sectionMentionsConcepts($sections, $concepts)) {
            $terms = self::conceptLabels($concepts);
            $sections[] = [
                'heading' => 'Vocabulario',
                'body' => 'Términos de esta lección: **' . implode('**, **', $terms) . '**. Búscalos en el [/glosario](/glosario) si necesitas repaso.',
            ];
        }

        if (count($exercises) < 2 && $exercises !== []) {
            $first = $exercises[0];
            if (($first['type'] ?? '') === 'choice') {
                $exercises[] = [
                    'type' => 'choice',
                    'question' => '¿Cuál es la mejor siguiente acción tras completar este módulo?',
                    'options' => [
                        'Practicar en el laboratorio y seguir la ruta de aprendizaje',
                        'Saltar al curso senior sin practicar',
                        'Memorizar definiciones sin código',
                    ],
                    'answer' => 'Practicar en el laboratorio y seguir la ruta de aprendizaje',
                    'explanation' => 'La retención viene de practicar y conectar conceptos, no de leer pasivamente.',
                    'pro_tip' => 'Marca el item correspondiente en el checklist del developer cuando domines este tema.',
                ];
            }
        }

        $lesson['sections'] = $sections;
        $lesson['exercises'] = $exercises;

        return $lesson;
    }

    /** @param list<array<string, mixed>> $sections */
    /** @param list<string> $concepts */
    private static function sectionMentionsConcepts(array $sections, array $concepts): bool
    {
        $text = strtolower(json_encode($sections, JSON_THROW_ON_ERROR));
        foreach ($concepts as $concept) {
            if (str_contains($text, strtolower((string) $concept))) {
                return true;
            }
        }

        return false;
    }

    /** @param list<string> $concepts */
    /** @return list<string> */
    private static function conceptLabels(array $concepts): array
    {
        $index = [];
        foreach (LessonCatalog::glossary() as $term) {
            $index[(string) ($term['slug'] ?? '')] = (string) ($term['term'] ?? '');
        }

        $labels = [];
        foreach (array_slice($concepts, 0, 4) as $slug) {
            $slug = (string) $slug;
            $labels[] = $index[$slug] ?? $slug;
        }

        return $labels;
    }
}
