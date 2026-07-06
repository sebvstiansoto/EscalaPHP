<?php

declare(strict_types=1);

$name = htmlspecialchars($profile['display_name'] ?? 'Aprendiz');
$totalXp = (int) ($profile['xp'] ?? 0);
$featured = null;
foreach ($courses as $cSlug => $course) {
    if (!empty($course['featured'])) {
        $featured = $course + ['slug' => $cSlug];
        break;
    }
}
$featuredStats = $featured ? ($courseStats[$featured['slug']] ?? ['completed' => 0, 'total' => 0]) : ['completed' => 0, 'total' => 0];
?>

<section class="platform-banner">
    <strong>🆕 Plataforma multi-curso</strong> — Elige Python, PHP, React, Docker y más. Ya no es solo una ruta PHP.
</section>

<?php if (!empty($continueLesson)): ?>
<section class="continue-banner">
    <div>
        <strong><?= \App\Support\Locale::t('continue', 'Continuar donde lo dejaste') ?></strong>
        <p><?= htmlspecialchars($continueLesson['title']) ?></p>
    </div>
    <a class="btn btn-xl" href="/leccion?curso=<?= urlencode($continueLesson['course']) ?>&slug=<?= urlencode($continueLesson['slug']) ?>">▶ Continuar</a>
</section>
<?php endif; ?>

<?php if (!empty($dailyMissions)): ?>
<section class="missions-panel">
    <h2><?= \App\Support\Locale::t('daily_mission', 'Misiones del día') ?></h2>
    <ul>
        <?php foreach ($dailyMissions as $m): ?>
            <li class="<?= !empty($m['completed']) ? 'done' : '' ?>"><?= htmlspecialchars($m['mission_key']) ?> <?= !empty($m['completed']) ? '✓' : '' ?></li>
        <?php endforeach; ?>
    </ul>
</section>
<?php endif; ?>

<?php if ($featured): ?>
<section class="featured-course" style="--course-accent: <?= htmlspecialchars($featured['accent'] ?? '#3776ab') ?>">
    <div class="featured-inner">
        <span class="featured-badge">Recomendado para empezar</span>
        <span class="course-icon featured-icon"><?= htmlspecialchars($featured['icon'] ?? '🐍') ?></span>
        <div>
            <h2><?= htmlspecialchars($featured['title']) ?></h2>
            <p class="lead"><?= htmlspecialchars($featured['subtitle'] ?? '') ?></p>
            <p><?= htmlspecialchars($featured['description'] ?? '') ?></p>
            <div class="course-tags">
                <?php foreach ($featured['tags'] ?? [] as $tag): ?>
                    <span class="tag"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
            </div>
            <a class="btn btn-xl" href="/curso?slug=<?= urlencode($featured['slug']) ?>">
                ▶ Empezar Python ahora
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="catalog-intro">
    <h1>Catálogo de cursos</h1>
    <p class="lead">Hola, <?= $name ?> — elige qué quieres aprender hoy.</p>
    <div class="hero-stats compact">
        <div class="stat"><strong><?= $totalXp ?></strong><span>XP</span></div>
        <div class="stat"><strong><?= (int) ($profile['streak'] ?? 0) ?></strong><span>Racha 🔥</span></div>
        <div class="stat"><strong><?= count($courses) ?></strong><span>Cursos</span></div>
    </div>
</section>

<?php foreach ($categories as $category): ?>
<section class="catalog-category">
    <div class="category-header">
        <span class="category-icon"><?= htmlspecialchars($category['icon'] ?? '📚') ?></span>
        <div>
            <h2><?= htmlspecialchars($category['title']) ?></h2>
            <p class="muted"><?= htmlspecialchars($category['description']) ?></p>
        </div>
    </div>

    <div class="course-grid">
        <?php foreach ($courses as $cSlug => $course): ?>
            <?php if (($course['category'] ?? '') !== ($category['slug'] ?? '')) continue; ?>
            <?php
                $stats = $courseStats[$cSlug] ?? ['completed' => 0, 'total' => 0];
                $pct = $stats['total'] > 0 ? (int) round(($stats['completed'] / $stats['total']) * 100) : 0;
                $status = $course['status'] ?? 'available';
                $accent = $course['accent'] ?? '#4f7cff';
            ?>
            <article class="course-card status-<?= htmlspecialchars($status) ?> <?= !empty($course['featured']) ? 'featured-card' : '' ?>" style="--course-accent: <?= htmlspecialchars($accent) ?>">
                <div class="course-card-top">
                    <span class="course-icon"><?= htmlspecialchars($course['icon'] ?? '📘') ?></span>
                    <?php if ($status === 'coming_soon'): ?>
                        <span class="badge badge-soon">Próximamente</span>
                    <?php else: ?>
                        <span class="badge badge-live">Disponible</span>
                    <?php endif; ?>
                </div>
                <h3><?= htmlspecialchars($course['title']) ?></h3>
                <p class="course-subtitle"><?= htmlspecialchars($course['subtitle'] ?? '') ?></p>
                <p class="course-desc"><?= htmlspecialchars($course['description'] ?? '') ?></p>
                <div class="course-tags">
                    <?php foreach ($course['tags'] ?? [] as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
                <?php if ($stats['total'] > 0 && $status === 'available'): ?>
                    <div class="course-progress">
                        <div class="progress-bar"><div class="progress-fill" style="width: <?= $pct ?>%"></div></div>
                        <small><?= (int) $stats['completed'] ?> / <?= (int) $stats['total'] ?> módulos</small>
                    </div>
                <?php endif; ?>
                <a class="btn" href="/curso?slug=<?= urlencode($cSlug) ?>">
                    <?= $status === 'coming_soon' ? 'Ver roadmap →' : ($pct > 0 ? 'Continuar →' : 'Abrir curso →') ?>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endforeach; ?>

<section class="quick-links">
    <a href="/laboratorio" class="quick-link">🧪 Laboratorio (PHP + Python)</a>
    <a href="/mentor" class="quick-link">💬 Mentor</a>
    <a href="/ranking" class="quick-link">🏅 Ranking</a>
    <a href="/perfil" class="quick-link">👤 Perfil</a>
</section>
