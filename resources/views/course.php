<?php

declare(strict_types=1);

$percent = $total > 0 ? (int) round(($completed / $total) * 100) : 0;
$courseSlug = $course['slug'] ?? '';
$accent = $course['accent'] ?? '#4f7cff';
?>

<section class="course-hero" style="--course-accent: <?= htmlspecialchars($accent) ?>">
    <a href="/" class="back-link">← Todos los cursos</a>
    <div class="course-hero-inner">
        <span class="course-hero-icon"><?= htmlspecialchars($course['icon'] ?? '📘') ?></span>
        <div>
            <p class="eyebrow"><?= htmlspecialchars($course['level'] ?? '') ?> · <?= htmlspecialchars($course['runtime'] ?? '') ?></p>
            <h1><?= htmlspecialchars($course['title']) ?></h1>
            <p class="lead"><?= htmlspecialchars($course['subtitle'] ?? '') ?></p>
            <p><?= htmlspecialchars($course['description'] ?? '') ?></p>
        </div>
    </div>

    <?php if (!empty($requirementsMissing)): ?>
        <div class="alert error">
            Completa antes: <?= htmlspecialchars(implode(', ', $requirementsMissing)) ?>
        </div>
    <?php endif; ?>

    <?php if ($isPlaceholder): ?>
        <div class="coming-soon-banner">
            🚧 Contenido interactivo en desarrollo — abajo ves el <strong>roadmap</strong> completo del curso.
        </div>
    <?php else: ?>
        <div class="progress-card progress-wide">
            <div class="progress-meta">
                <span>Tu progreso en este curso</span>
                <strong><?= $completed ?> / <?= $total ?> módulos</strong>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: <?= $percent ?>%"></div>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php if (!empty($reviewLessons)): ?>
<section class="review-due">
    <h3>📚 Repaso recomendado</h3>
    <p>Refuerza estos módulos que completaste hace unos días.</p>
    <div class="review-due-list">
        <?php foreach ($reviewLessons as $rl): ?>
            <a href="/leccion?curso=<?= urlencode($courseSlug) ?>&slug=<?= urlencode($rl['slug']) ?>" class="btn btn-ghost">
                Repasar: <?= htmlspecialchars($rl['title']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<section class="course-footer-links">
    <a href="/proyectos?curso=<?= urlencode($courseSlug) ?>" class="btn btn-ghost">🛠️ Mini-proyectos</a>
    <a href="/certificado?curso=<?= urlencode($courseSlug) ?>" class="btn btn-ghost">🏆 Certificado</a>
    <a href="/laboratorio?lang=<?= ($course['runtime'] ?? '') === 'python' ? 'python' : 'php' ?>" class="btn btn-ghost">🧪 Laboratorio</a>
</section>

<section class="lesson-grid">
    <?php foreach ($lessons as $lesson): ?>
        <?php
            $slug = $lesson['slug'] ?? '';
            $isPlaceholder = !empty($lesson['placeholder']);
            $row = $progress[$slug] ?? null;
            $isDone = !$isPlaceholder && $row && (int) $row['completed'] === 1;
            $order = (int) ($lesson['order'] ?? 1);
            $unlocked = !$isPlaceholder && empty($requirementsMissing) && $order === 1;
            if (!$isPlaceholder && empty($requirementsMissing) && $order > 1) {
                $prevSlug = null;
                foreach ($lessons as $l) {
                    if ((int) ($l['order'] ?? 0) === $order - 1) {
                        $prevSlug = $l['slug'] ?? null;
                        break;
                    }
                }
                $unlocked = $prevSlug !== null
                    && isset($progress[$prevSlug])
                    && (int) $progress[$prevSlug]['completed'] === 1;
            }
        ?>
        <article class="lesson-card <?= $isDone ? 'done' : '' ?> <?= !$unlocked && !$isPlaceholder ? 'locked' : '' ?> <?= $isPlaceholder ? 'placeholder' : '' ?>">
            <div class="lesson-card-top">
                <span class="badge"><?= htmlspecialchars($lesson['level'] ?? '') ?></span>
                <?php if (!$isPlaceholder): ?>
                    <span class="time">~<?= (int) ($lesson['minutes'] ?? 20) ?> min</span>
                <?php else: ?>
                    <span class="badge badge-soon">Próximamente</span>
                <?php endif; ?>
            </div>
            <h2><?= (int) ($lesson['order'] ?? 0) ?>. <?= htmlspecialchars($lesson['title']) ?></h2>
            <p><?= htmlspecialchars($lesson['summary'] ?? '') ?></p>
            <?php if ($isPlaceholder): ?>
                <span class="locked-label">Módulo en desarrollo</span>
            <?php elseif ($unlocked): ?>
                <a class="btn" href="/leccion?curso=<?= urlencode($courseSlug) ?>&slug=<?= urlencode($slug) ?>">
                    <?= $isDone ? 'Repasar →' : 'Empezar con mentor →' ?>
                </a>
            <?php else: ?>
                <span class="locked-label">Completa el módulo anterior</span>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</section>
