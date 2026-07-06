<?php

declare(strict_types=1);

namespace App;

class DeveloperGuide
{
    public static function hub(): array
    {
        return require __DIR__ . '/Data/developer/hub.php';
    }

    public static function map(): array
    {
        return require __DIR__ . '/Data/developer/map.php';
    }

    /** @return array{levels: list<array<string, mixed>>, items: list<array<string, mixed>>} */
    public static function checklist(): array
    {
        return require __DIR__ . '/Data/developer/checklist.php';
    }

    /** @return list<array<string, mixed>> */
    public static function connections(): array
    {
        return require __DIR__ . '/Data/developer/connections.php';
    }

    /** @return list<array<string, mixed>> */
    public static function troubleshooting(): array
    {
        return require __DIR__ . '/Data/developer/troubleshooting.php';
    }

    public static function diaADia(): array
    {
        return require __DIR__ . '/Data/developer/dia-a-dia.php';
    }

    /** @return array{glossary: int, connections: int, checklist: int, guides: int} */
    public static function stats(): array
    {
        $checklist = self::checklist();

        return [
            'glossary' => count(LessonCatalog::glossary()),
            'connections' => count(self::connections()),
            'checklist' => count($checklist['items']),
            'guides' => count(self::troubleshooting()),
        ];
    }

    /** @return array<string, array<string, mixed>> */
    public static function glossaryIndex(): array
    {
        $index = [];
        foreach (LessonCatalog::glossary() as $term) {
            $slug = (string) ($term['slug'] ?? '');
            if ($slug !== '') {
                $index[$slug] = $term;
            }
        }

        return $index;
    }
}
