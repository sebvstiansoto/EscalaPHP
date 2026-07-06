<?php declare(strict_types=1); ?>

<section class="dev-page dev-dia">
    <?php require __DIR__ . '/_nav.php'; ?>

    <header class="dev-page-header">
        <h1><?= htmlspecialchars($day['title']) ?></h1>
        <p class="lead"><?= htmlspecialchars($day['subtitle']) ?></p>
    </header>

    <div class="dev-timeline">
        <?php foreach ($day['timeline'] as $block): ?>
            <article class="dev-timeline-item">
                <div class="dev-timeline-time"><?= htmlspecialchars($block['time']) ?></div>
                <div class="dev-timeline-card">
                    <header class="dev-timeline-header">
                        <span class="dev-timeline-icon"><?= htmlspecialchars($block['icon']) ?></span>
                        <h2><?= htmlspecialchars($block['title']) ?></h2>
                    </header>
                    <p><?= htmlspecialchars($block['desc']) ?></p>
                    <?php if (!empty($block['terms'])): ?>
                        <div class="dev-checklist-links">
                            <?php foreach ($block['terms'] as $term): ?>
                                <a href="/glosario#<?= urlencode($term) ?>" class="dev-mini-link">#<?= htmlspecialchars($term) ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($block['skills'])): ?>
                        <ul class="dev-skill-list">
                            <?php foreach ($block['skills'] as $skill): ?>
                                <li><?= htmlspecialchars($skill) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <section class="dev-myths">
        <h2>Mitos vs realidad</h2>
        <div class="dev-myths-grid">
            <?php foreach ($day['myths'] as $m): ?>
                <article class="dev-myth-card">
                    <p class="dev-myth-wrong">✗ <?= htmlspecialchars($m['myth']) ?></p>
                    <p class="dev-myth-right">✓ <?= htmlspecialchars($m['reality']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <p class="dev-dia-cta">
        <a href="/checklist-developer" class="btn">Ver checklist de competencias →</a>
        <a href="/mapa-developer" class="btn btn-ghost">Ver mapa técnico</a>
    </p>
</section>
