<section class="teams-page">
    <h1>Equipos B2B</h1>
    <?php if (!empty($message)): ?><p class="success"><?= htmlspecialchars($message) ?></p><?php endif; ?>
    <form method="post" action="/equipos" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Nombre del equipo<input type="text" name="name" required></label>
        <button type="submit" class="btn">Crear equipo</button>
    </form>
    <?php foreach ($teams as $team): ?>
        <article class="course-card" style="margin-top:1rem">
            <h2><?= htmlspecialchars($team['name']) ?></h2>
            <p class="muted">Slug: <?= htmlspecialchars($team['slug']) ?> · <?= (int) $team['seats'] ?> plazas</p>
            <form method="post" action="/equipos/invitar">
                <?= \App\Http\Csrf::field() ?>
                <input type="hidden" name="team" value="<?= htmlspecialchars($team['slug']) ?>">
                <label>Invitar por email<input type="email" name="email" required></label>
                <button type="submit" class="btn btn-sm">Invitar (Pro)</button>
            </form>
        </article>
    <?php endforeach; ?>
</section>
