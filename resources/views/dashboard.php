<?php declare(strict_types=1);

$j = $journey ?? [];
$insights = $j['insights'] ?? [];
$d = $insights;
?>

<section class="dashboard-page">
    <header class="dashboard-header">
        <h1>Panel de aprendizaje</h1>
        <p class="lead">Las cuatro patas de tu formación: referencia, práctica, ruta y progreso.</p>
        <a href="/perfil" class="btn btn-ghost btn-sm">Ver perfil (XP y logros) →</a>
    </header>

    <?php require __DIR__ . '/partials/_learning_pillars.php'; ?>

    <section class="dashboard-tools">
        <h2>Herramientas de estudio</h2>
        <div class="dashboard-tools-grid">
            <form method="post" action="/dashboard/meta" class="auth-form inline-form dashboard-tool-card">
                <?= \App\Http\Csrf::field() ?>
                <label>Meta semanal (lecciones)
                    <input type="number" name="weekly_lessons" value="<?= (int) ($d['goal'] ?? 5) ?>" min="1" max="30">
                </label>
                <button type="submit" class="btn btn-sm">Guardar meta</button>
            </form>

            <form method="post" action="/dashboard/estudio" class="auth-form inline-form dashboard-tool-card">
                <?= \App\Http\Csrf::field() ?>
                <label>Registrar sesión (minutos)
                    <input type="number" name="minutes" value="30" min="5" max="180">
                </label>
                <button type="submit" class="btn btn-ghost btn-sm">+ Estudio</button>
            </form>
        </div>

        <?php if (!empty($d['recommendations'])): ?>
            <h3>Cursos recomendados</h3>
            <ul class="dashboard-recs">
                <?php foreach ($d['recommendations'] as $r): ?>
                    <li>
                        <a href="/curso?slug=<?= urlencode($r['slug']) ?>"><?= htmlspecialchars($r['title']) ?></a>
                        <span class="muted">— <?= htmlspecialchars($r['reason']) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</section>
