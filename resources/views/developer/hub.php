<?php declare(strict_types=1); ?>

<section class="dev-hub">
    <?php require __DIR__ . '/_nav.php'; ?>

    <header class="dev-hub-header">
        <h1><?= htmlspecialchars($hub['title']) ?></h1>
        <p class="lead"><?= htmlspecialchars($hub['subtitle']) ?></p>
    </header>

    <div class="dev-hub-stats">
        <div class="dev-hub-stat">
            <strong><?= (int) $stats['glossary'] ?></strong>
            <span>términos</span>
        </div>
        <div class="dev-hub-stat">
            <strong><?= (int) $stats['connections'] ?></strong>
            <span>conexiones</span>
        </div>
        <div class="dev-hub-stat">
            <strong><?= (int) $stats['checklist'] ?></strong>
            <span>competencias</span>
        </div>
        <div class="dev-hub-stat">
            <strong><?= (int) $stats['guides'] ?></strong>
            <span>guías de error</span>
        </div>
    </div>

    <div class="dev-start-here">
        <h2>¿Por dónde empiezo?</h2>
        <ol class="dev-start-path">
            <li><a href="/mapa-developer">Mapa</a> — entiende cómo se conecta todo</li>
            <li><a href="/checklist-developer">Checklist junior</a> — marca lo que ya sabes</li>
            <li><a href="/">Cursos</a> — practica con el mentor</li>
            <li><a href="/dia-developer">Día a día</a> — qué hace un dev profesional</li>
            <li><a href="/troubleshooting">Errores</a> — cuando algo falle, ven aquí</li>
        </ol>
    </div>

    <div class="dev-hub-grid">
        <?php foreach ($hub['sections'] as $section): ?>
            <a
                href="/<?= htmlspecialchars($section['slug']) ?>"
                class="dev-hub-card"
                style="--card-accent: <?= htmlspecialchars($section['accent']) ?>"
            >
                <span class="dev-hub-icon" aria-hidden="true"><?= htmlspecialchars($section['icon']) ?></span>
                <h2><?= htmlspecialchars($section['title']) ?></h2>
                <p><?= htmlspecialchars($section['desc']) ?></p>
                <span class="dev-hub-link">Explorar →</span>
            </a>
        <?php endforeach; ?>
    </div>
</section>
