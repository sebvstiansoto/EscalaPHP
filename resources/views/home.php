<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$percent = $total > 0 ? (int) round(($completed / $total) * 100) : 0;
$name = htmlspecialchars($profile['display_name'] ?? 'Aprendiz');
?>

<section class="hero hero-premium">
    <div class="hero-content">
        <p class="eyebrow">Modo Mentor · Aprende haciendo</p>
        <h1>Hola, <?= $name ?> 👋</h1>
        <p class="lead">
            La mejor forma de aprender PHP no es leer manuales — es que alguien te <strong>muestre</strong>,
            tú <strong>ejecutes</strong>, y construyas hasta escala real. EscalaPHP hace exactamente eso.
        </p>

        <div class="hero-stats">
            <div class="stat">
                <strong><?= (int) ($profile['xp'] ?? 0) ?></strong>
                <span>XP total</span>
            </div>
            <div class="stat">
                <strong><?= (int) ($profile['streak'] ?? 0) ?></strong>
                <span>Días seguidos 🔥</span>
            </div>
            <div class="stat">
                <strong><?= $percent ?>%</strong>
                <span>Ruta completada</span>
            </div>
        </div>

        <?php
            $nextLesson = $lessons[0];
            foreach ($lessons as $l) {
                $row = $progress[$l['slug']] ?? null;
                if (!$row || (int) $row['completed'] !== 1) {
                    $nextLesson = $l;
                    break;
                }
            }
        ?>
        <a class="btn btn-xl" href="/leccion?slug=<?= urlencode($nextLesson['slug']) ?>">
            ▶ Continuar: <?= htmlspecialchars($nextLesson['title']) ?>
        </a>
        <?php if (empty($user)): ?>
            <p class="register-hint">💡 <a href="/registro">Crea una cuenta</a> para no perder tu progreso.</p>
        <?php endif; ?>
    </div>

    <div class="hero-method">
        <h3>El método EscalaPHP</h3>
        <ol class="method-list">
            <li><span>1</span> Mentor te muestra (visual + demo en vivo)</li>
            <li><span>2</span> Tú ejecutas (ejercicios + laboratorio)</li>
            <li><span>3</span> Construyes (esta misma app es tu proyecto)</li>
            <li><span>4</span> Escalas (caché, colas, API → Laravel)</li>
        </ol>
    </div>
</section>

<?php if (!empty($reviewLessons)): ?>
<section class="review-due">
    <h3>📚 Repaso recomendado</h3>
    <p>Hace unos días completaste estos módulos. Un repaso rápido refuerza la memoria.</p>
    <div class="review-due-list">
        <?php foreach ($reviewLessons as $rl): ?>
            <a href="/leccion?slug=<?= urlencode($rl['slug']) ?>" class="btn btn-ghost">
                Repasar: <?= htmlspecialchars($rl['title']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<section class="progress-card progress-wide">
    <div class="progress-meta">
        <span>Tu ruta hacia PHP a escala</span>
        <strong><?= $completed ?> / <?= $total ?> módulos</strong>
    </div>
    <div class="progress-bar">
        <div class="progress-fill" style="width: <?= $percent ?>%"></div>
    </div>
</section>

<section class="lesson-grid">
    <?php foreach ($lessons as $lesson): ?>
        <?php
            $slug = $lesson['slug'];
            $row = $progress[$slug] ?? null;
            $isDone = $row && (int) $row['completed'] === 1;
            $unlocked = true;
            if ((int) $lesson['order'] > 1) {
                $prev = $lessons[(int) $lesson['order'] - 2] ?? null;
                $unlocked = $prev && isset($progress[$prev['slug']]) && (int) $progress[$prev['slug']]['completed'] === 1;
            }
        ?>
        <article class="lesson-card <?= $isDone ? 'done' : '' ?> <?= !$unlocked ? 'locked' : '' ?>">
            <div class="lesson-card-top">
                <span class="badge"><?= htmlspecialchars($lesson['level']) ?></span>
                <span class="time">~<?= (int) $lesson['minutes'] ?> min</span>
            </div>
            <h2><?= (int) $lesson['order'] ?>. <?= htmlspecialchars($lesson['title']) ?></h2>
            <p><?= htmlspecialchars($lesson['summary']) ?></p>
            <div class="card-tags">
                <span class="tag-mentor">Modo Mentor</span>
                <?php if ($isDone): ?><span class="tag-done">✓ Completado</span><?php endif; ?>
            </div>
            <?php if ($unlocked): ?>
                <a class="btn" href="/leccion?slug=<?= urlencode($slug) ?>">
                    <?= $isDone ? 'Repasar con mentor' : 'Empezar con mentor →' ?>
                </a>
            <?php else: ?>
                <span class="locked-label">Completa el módulo anterior</span>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</section>

<section class="cta-lab">
    <div>
        <h3>Laboratorio libre</h3>
        <p>Practica PHP sin reglas — ejecuta código y experimenta.</p>
    </div>
    <a href="/laboratorio" class="btn btn-lg">Abrir laboratorio</a>
</section>

<section class="quick-links">
    <a href="/mentor" class="quick-link">💬 Pregunta al mentor</a>
    <a href="/ranking" class="quick-link">🏅 Ranking</a>
    <a href="/proyectos" class="quick-link">🛠️ Mini-proyectos</a>
    <a href="/perfil" class="quick-link">👤 Mi perfil y logros</a>
    <a href="/certificado" class="quick-link">🏆 Certificado</a>
    <a href="/revision" class="quick-link">✅ Revisión con senior</a>
    <a href="/leccion?slug=laravel" class="quick-link">🚀 Módulo Laravel</a>
</section>
