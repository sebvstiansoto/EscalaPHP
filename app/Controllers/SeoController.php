<?php

declare(strict_types=1);

namespace App\Controllers;

use App\CourseCatalog;

class SeoController
{
    public function __construct(private array $config)
    {
    }

    public function robots(): void
    {
        header('Content-Type: text/plain; charset=UTF-8');
        $base = rtrim((string) ($this->config['app_url'] ?? ''), '/');
        echo "User-agent: *\nAllow: /\nDisallow: /admin\nDisallow: /perfil/api\nSitemap: {$base}/sitemap.xml\n";
    }

    public function sitemap(): void
    {
        header('Content-Type: application/xml; charset=UTF-8');
        $base = rtrim((string) ($this->config['app_url'] ?? ''), '/');
        $urls = [
            ['loc' => '/', 'prio' => '1.0'],
            ['loc' => '/glosario', 'prio' => '0.9'],
            ['loc' => '/developer', 'prio' => '0.9'],
            ['loc' => '/rutas', 'prio' => '0.9'],
            ['loc' => '/dashboard', 'prio' => '0.8'],
            ['loc' => '/checklist-developer', 'prio' => '0.8'],
            ['loc' => '/mapa-developer', 'prio' => '0.7'],
            ['loc' => '/conexiones', 'prio' => '0.7'],
            ['loc' => '/troubleshooting', 'prio' => '0.7'],
            ['loc' => '/dia-developer', 'prio' => '0.7'],
            ['loc' => '/laboratorio', 'prio' => '0.8'],
            ['loc' => '/faq', 'prio' => '0.6'],
            ['loc' => '/privacidad', 'prio' => '0.4'],
        ];

        foreach (CourseCatalog::courses() as $slug => $course) {
            if (($course['status'] ?? '') !== 'available') {
                continue;
            }
            $urls[] = ['loc' => '/curso?slug=' . rawurlencode($slug), 'prio' => '0.8'];
        }

        echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($urls as $u) {
            echo '  <url>';
            echo '<loc>' . htmlspecialchars($base . $u['loc']) . '</loc>';
            echo '<priority>' . htmlspecialchars($u['prio']) . '</priority>';
            echo '</url>' . "\n";
        }
        echo '</urlset>';
    }
}
