<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;
use App\View;

class FaqController
{
    public function index(): void
    {
        $faq = require __DIR__ . '/../Data/faq.php';
        $course = (string) ($_GET['curso'] ?? 'php-fundamentos');
        if (!isset($faq[$course])) {
            $course = 'php-fundamentos';
        }

        View::show('faq', [
            'config' => $GLOBALS['escala_config'] ?? [],
            'title' => 'FAQ — ' . (CourseCatalog::course($course)['title'] ?? $course),
            'course' => $course,
            'courses' => CourseCatalog::courses(),
            'items' => $faq[$course] ?? [],
        ]);
    }
}
