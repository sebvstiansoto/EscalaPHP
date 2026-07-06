<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use App\DeveloperGuide;
use App\LessonCatalog;

class SearchService
{
    /** @return list<array{type: string, title: string, url: string, excerpt: string, badge?: string}> */
    public function search(string $query, int $limit = 30): array
    {
        $q = mb_strtolower(trim($query));
        if ($q === '' || mb_strlen($q) < 2) {
            return [];
        }

        $results = [];

        foreach (CourseCatalog::courses() as $slug => $course) {
            if ($this->matches($q, (string) $course['title'], (string) ($course['description'] ?? ''), implode(' ', $course['tags'] ?? []))) {
                $results[] = [
                    'type' => 'course',
                    'title' => (string) $course['title'],
                    'url' => '/curso?slug=' . urlencode($slug),
                    'excerpt' => (string) ($course['subtitle'] ?? $course['description'] ?? ''),
                    'badge' => (string) ($course['status'] ?? ''),
                ];
            }
        }

        foreach (LessonCatalog::all() as $lesson) {
            $courseSlug = (string) ($lesson['course'] ?? '');
            $hay = ($lesson['title'] ?? '') . ' ' . ($lesson['summary'] ?? '') . ' ' . implode(' ', $lesson['concepts'] ?? []);
            if ($this->matches($q, $hay)) {
                $results[] = [
                    'type' => 'lesson',
                    'title' => (string) $lesson['title'],
                    'url' => '/leccion?curso=' . urlencode($courseSlug) . '&slug=' . urlencode((string) $lesson['slug']),
                    'excerpt' => (string) ($lesson['summary'] ?? ''),
                    'badge' => $courseSlug,
                ];
            }
        }

        $glossary = require __DIR__ . '/../Data/glossary.php';
        foreach ($glossary as $term) {
            $hay = ($term['term'] ?? '') . ' ' . ($term['definition'] ?? '');
            if ($this->matches($q, $hay)) {
                $results[] = [
                    'type' => 'glossary',
                    'title' => (string) $term['term'],
                    'url' => '/glosario#' . urlencode((string) ($term['slug'] ?? '')),
                    'excerpt' => mb_substr((string) ($term['definition'] ?? ''), 0, 120),
                ];
            }
        }

        $guides = [
            ['title' => 'Guía del developer', 'url' => '/developer', 'excerpt' => 'Mapa, checklist, conexiones y troubleshooting'],
            ['title' => 'Mapa del developer', 'url' => '/mapa-developer', 'excerpt' => 'Flujo de una petición web de punta a punta'],
            ['title' => 'Checklist del developer', 'url' => '/checklist-developer', 'excerpt' => 'Competencias junior, mid y senior'],
            ['title' => 'Conexiones entre conceptos', 'url' => '/conexiones', 'excerpt' => 'Cómo se relacionan middleware, API, Docker…'],
            ['title' => 'Guía de errores', 'url' => '/troubleshooting', 'excerpt' => 'Diagnosticar 500, CORS, BD, Docker'],
            ['title' => 'Un día en la vida del developer', 'url' => '/dia-developer', 'excerpt' => 'Standup, code review, debugging y deploy'],
        ];
        foreach ($guides as $guide) {
            if ($this->matches($q, $guide['title'], $guide['excerpt'])) {
                $results[] = [
                    'type' => 'guide',
                    'title' => $guide['title'],
                    'url' => $guide['url'],
                    'excerpt' => $guide['excerpt'],
                ];
            }
        }

        foreach (DeveloperGuide::troubleshooting() as $ts) {
            $hay = ($ts['symptom'] ?? '') . ' ' . ($ts['meaning'] ?? '');
            if ($this->matches($q, $hay)) {
                $results[] = [
                    'type' => 'guide',
                    'title' => (string) $ts['symptom'],
                    'url' => '/troubleshooting#ts-' . urlencode((string) ($ts['slug'] ?? '')),
                    'excerpt' => mb_substr((string) ($ts['meaning'] ?? ''), 0, 120),
                ];
            }
        }

        return array_slice($results, 0, $limit);
    }

    /** @param list<string> $tags */
    private function matches(string $q, string ...$parts): bool
    {
        $haystack = mb_strtolower(implode(' ', $parts));

        return str_contains($haystack, $q);
    }
}
