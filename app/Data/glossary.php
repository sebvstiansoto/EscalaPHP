<?php

declare(strict_types=1);

/**
 * Glosario completo de terminología de programación.
 * Carga todos los archivos de app/Data/glossary/*.php y los ordena por categoría.
 *
 * @return list<array{slug: string, term: string, definition: string, category: string}>
 */
$terms = [];
$dir = __DIR__ . '/glossary';

foreach (glob($dir . '/*.php') as $file) {
    if (basename($file) === 'categories.php') {
        continue;
    }
    $chunk = require $file;
    if (is_array($chunk)) {
        $terms = array_merge($terms, $chunk);
    }
}

$seen = [];
$unique = [];
foreach ($terms as $entry) {
    $slug = (string) ($entry['slug'] ?? '');
    if ($slug === '' || isset($seen[$slug])) {
        continue;
    }
    $seen[$slug] = true;
    $unique[] = $entry;
}

usort($unique, static function (array $a, array $b): int {
    $cat = ($a['category'] ?? '') <=> ($b['category'] ?? '');
    if ($cat !== 0) {
        return $cat;
    }

    return strcasecmp((string) ($a['term'] ?? ''), (string) ($b['term'] ?? ''));
});

return $unique;
