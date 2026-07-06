<?php

declare(strict_types=1);

$name = htmlspecialchars($profile['display_name'] ?? 'Aprendiz');
$goal = htmlspecialchars($profile['goal'] ?? '');
$percent = $total > 0 ? (int) round(($completed / $total) * 100) : 0;
$earnedBadges = array_filter($badges, fn ($b) => $b['earned']);
$maxActivity = max(1, max(array_column($activity ?? [], 'count')));
?>

<section class="profile-page">
    <header class="profile-header">
        <div class="profile-avatar"><?= mb_substr($name, 0, 1) ?></div>
        <div>
            <h1><?= $name ?></h1>
            <?php if ($goal): ?>
                <p class="profile-goal">🎯 <?= $goal ?></p>
            <?php endif; ?>
            <p class="profile-plan">Plan: <strong><?= htmlspecialchars($plan ?? 'free') ?></strong>
                <?php if (($plan ?? 'free') !== 'pro'): ?><a href="/precios">Mejorar →</a><?php endif; ?>
            </p>
        </div>
    </header>

    <div class="profile-stats">
        <div class="stat-card"><strong><?= (int) ($profile['xp'] ?? 0) ?></strong><span>XP total</span></div>
        <div class="stat-card"><strong><?= (int) ($profile['streak'] ?? 0) ?></strong><span>Días seguidos 🔥</span></div>
        <div class="stat-card"><strong><?= $completed ?>/<?= $total ?></strong><span>Módulos</span></div>
        <div class="stat-card"><strong><?= count($earnedBadges) ?></strong><span>Logros</span></div>
    </div>

    <div class="progress-card progress-wide">
        <div class="progress-meta"><span>Progreso global</span><strong><?= $percent ?>%</strong></div>
        <div class="progress-bar"><div class="progress-fill" style="width: <?= $percent ?>%"></div></div>
    </div>

    <div class="profile-dashboard-link">
        <a href="/dashboard" class="btn">Panel de aprendizaje →</a>
        <span class="muted">Rutas, mentor, glosario y métricas unificadas</span>
    </div>

    <?php if (!empty($journey)): ?>
        <?php require __DIR__ . '/partials/_learning_pillars.php'; ?>
    <?php endif; ?>

    <?php if (!empty($activity)): ?>
    <section class="dashboard-section">
        <h2>Actividad (7 días)</h2>
        <div class="activity-chart">
            <?php foreach ($activity as $day): ?>
                <div class="activity-bar-wrap" title="<?= htmlspecialchars($day['date']) ?>: <?= (int) $day['count'] ?>">
                    <div class="activity-bar" style="height: <?= max(4, (int) round(($day['count'] / $maxActivity) * 100)) ?>%"></div>
                    <small><?= substr($day['date'], 5) ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($courseStats)): ?>
    <section class="dashboard-section">
        <h2>Progreso por curso</h2>
        <div class="course-progress-list">
            <?php foreach ($courseStats as $cs): ?>
                <?php if ($cs['total'] === 0) continue; ?>
                <div class="course-progress-row">
                    <span><?= htmlspecialchars($cs['title']) ?></span>
                    <div class="progress-bar compact"><div class="progress-fill" style="width: <?= (int) $cs['percent'] ?>%"></div></div>
                    <strong><?= (int) $cs['completed'] ?>/<?= (int) $cs['total'] ?></strong>
                    <a href="/curso?slug=<?= urlencode($cs['course']) ?>" class="btn btn-ghost btn-sm">→</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($allNotifications)): ?>
    <section class="dashboard-section">
        <div class="section-head">
            <h2>Notificaciones</h2>
            <form method="post" action="/notificaciones/leer-todas">
                <?= \App\Http\Csrf::field() ?>
                <button type="submit" class="btn btn-ghost btn-sm">Marcar todas leídas</button>
            </form>
        </div>
        <ul class="notif-list">
            <?php foreach ($allNotifications as $n): ?>
                <li class="notif-item">
                    <strong><?= htmlspecialchars((string) $n['title']) ?></strong>
                    <p><?= htmlspecialchars((string) $n['body']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <?php endif; ?>

    <section class="badges-section">
        <h2>Logros</h2>
        <div class="badges-grid">
            <?php foreach ($badges as $badge): ?>
                <div class="badge-card <?= $badge['earned'] ? 'earned' : 'locked' ?>">
                    <span class="badge-icon"><?= $badge['icon'] ?></span>
                    <strong><?= htmlspecialchars($badge['title']) ?></strong>
                    <small><?= htmlspecialchars($badge['desc']) ?></small>
                    <?php if ($badge['earned']): ?><span class="badge-xp">+<?= (int) $badge['xp'] ?> XP</span><?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="profile-actions">
        <a href="/certificado" class="btn">Mis certificados</a>
        <a href="/precios" class="btn btn-ghost">Planes</a>
    </div>
</section>
