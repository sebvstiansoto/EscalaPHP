<?php declare(strict_types=1);

$j = $journey ?? [];
$pillars = $j['pillars'] ?? [];
$ref = $pillars['reference'] ?? [];
$practice = $pillars['practice'] ?? [];
$path = $pillars['path'] ?? [];
$prog = $pillars['progress'] ?? [];
?>

<section class="learning-pillars" aria-label="Las cuatro patas de tu aprendizaje">
    <header class="learning-pillars-header">
        <h2>Tu aprendizaje en 4 patas</h2>
        <p class="muted">Referencia · Práctica · Ruta · Progreso</p>
    </header>

    <div class="learning-pillars-grid">
        <article class="pillar-card pillar-reference">
            <header>
                <span class="pillar-icon" aria-hidden="true">📖</span>
                <div>
                    <h3><?= htmlspecialchars((string) ($ref['title'] ?? '')) ?></h3>
                    <p><?= htmlspecialchars((string) ($ref['subtitle'] ?? '')) ?></p>
                </div>
            </header>
            <?php if (!empty($ref['stats'])): ?>
                <div class="pillar-stats">
                    <?php foreach ($ref['stats'] as $stat): ?>
                        <span><strong><?= (int) ($stat['value'] ?? 0) ?></strong> <?= htmlspecialchars((string) ($stat['label'] ?? '')) ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($ref['concepts'])): ?>
                <p class="pillar-label">Repasa antes de practicar:</p>
                <div class="pillar-tags">
                    <?php foreach ($ref['concepts'] as $concept): ?>
                        <a href="/glosario#<?= urlencode($concept['slug']) ?>" class="pillar-tag"><?= htmlspecialchars($concept['term']) ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <nav class="pillar-links">
                <?php foreach ($ref['links'] ?? [] as $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>"><?= htmlspecialchars($link['icon'] ?? '') ?> <?= htmlspecialchars($link['label']) ?></a>
                <?php endforeach; ?>
            </nav>
        </article>

        <article class="pillar-card pillar-practice">
            <header>
                <span class="pillar-icon" aria-hidden="true">⚡</span>
                <div>
                    <h3><?= htmlspecialchars((string) ($practice['title'] ?? '')) ?></h3>
                    <p><?= htmlspecialchars((string) ($practice['subtitle'] ?? '')) ?></p>
                </div>
            </header>
            <?php if (!empty($practice['next_action'])): ?>
                <?php $na = $practice['next_action']; ?>
                <a href="/leccion?curso=<?= urlencode($na['course']) ?>&slug=<?= urlencode($na['slug']) ?>" class="pillar-cta">
                    <strong>Continuar</strong>
                    <span><?= htmlspecialchars($na['title']) ?></span>
                </a>
            <?php endif; ?>
            <?php if (!empty($practice['in_progress'])): ?>
                <ul class="pillar-list">
                    <?php foreach ($practice['in_progress'] as $course): ?>
                        <li>
                            <a href="/curso?slug=<?= urlencode($course['slug']) ?>">
                                <?= htmlspecialchars($course['title']) ?>
                            </a>
                            <span class="pillar-pct"><?= (int) $course['percent'] ?>%</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="pillar-empty">Elige un curso en el catálogo y empieza con el mentor.</p>
            <?php endif; ?>
            <nav class="pillar-links">
                <?php foreach ($practice['links'] ?? [] as $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>"><?= htmlspecialchars($link['icon'] ?? '') ?> <?= htmlspecialchars($link['label']) ?></a>
                <?php endforeach; ?>
            </nav>
        </article>

        <article class="pillar-card pillar-path">
            <header>
                <span class="pillar-icon" aria-hidden="true">🛤</span>
                <div>
                    <h3><?= htmlspecialchars((string) ($path['title'] ?? '')) ?></h3>
                    <p><?= htmlspecialchars((string) ($path['subtitle'] ?? '')) ?></p>
                </div>
            </header>
            <?php if (!empty($path['path_progress'])): ?>
                <?php $pp = $path['path_progress']; ?>
                <div class="pillar-path-progress">
                    <strong><?= htmlspecialchars($pp['title']) ?></strong>
                    <div class="progress-bar compact">
                        <div class="progress-fill" style="width: <?= (int) $pp['percent'] ?>%"></div>
                    </div>
                    <span><?= (int) $pp['completed'] ?>/<?= (int) $pp['total'] ?> lecciones · <?= (int) $pp['percent'] ?>%</span>
                </div>
            <?php else: ?>
                <p class="pillar-empty"><a href="/rutas">Elige una ruta de aprendizaje</a> para ordenar tus cursos.</p>
            <?php endif; ?>
            <?php if (!empty($path['checklist_levels'])): ?>
                <div class="pillar-checklist-levels">
                    <?php foreach ($path['checklist_levels'] as $level): ?>
                        <a href="/checklist-developer#<?= urlencode($level['slug']) ?>" class="pillar-level" style="--level-color: <?= htmlspecialchars($level['color']) ?>">
                            <?= htmlspecialchars($level['title']) ?>
                            <span><?= (int) $level['count'] ?> items</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <nav class="pillar-links">
                <?php foreach ($path['links'] ?? [] as $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>"><?= htmlspecialchars($link['icon'] ?? '') ?> <?= htmlspecialchars($link['label']) ?></a>
                <?php endforeach; ?>
            </nav>
        </article>

        <article class="pillar-card pillar-progress">
            <header>
                <span class="pillar-icon" aria-hidden="true">📊</span>
                <div>
                    <h3><?= htmlspecialchars((string) ($prog['title'] ?? '')) ?></h3>
                    <p><?= htmlspecialchars((string) ($prog['subtitle'] ?? '')) ?></p>
                </div>
            </header>
            <div class="pillar-stats pillar-stats-wide">
                <span><strong><?= (int) ($prog['global_percent'] ?? 0) ?>%</strong> global</span>
                <span><strong><?= (int) ($prog['completed'] ?? 0) ?>/<?= (int) ($prog['total'] ?? 0) ?></strong> lecciones</span>
                <span><strong><?= (int) ($prog['weekly'] ?? 0) ?>/<?= (int) ($prog['goal'] ?? 5) ?></strong> esta semana</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: <?= (int) ($prog['global_percent'] ?? 0) ?>%"></div>
            </div>
            <?php if (!empty($prog['calendar'])): ?>
                <div class="pillar-calendar activity-chart">
                    <?php foreach ($prog['calendar'] as $day): ?>
                        <div class="activity-bar-wrap" title="<?= htmlspecialchars($day['day']) ?>: <?= (int) $day['minutes'] ?> min">
                            <div class="activity-bar" style="height:<?= min(100, (int) $day['minutes'] * 2) ?>px"></div>
                            <small><?= substr($day['day'], 5) ?></small>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <nav class="pillar-links">
                <?php foreach ($prog['links'] ?? [] as $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>"><?= htmlspecialchars($link['icon'] ?? '') ?> <?= htmlspecialchars($link['label']) ?></a>
                <?php endforeach; ?>
            </nav>
        </article>
    </div>
</section>
