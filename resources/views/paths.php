<section class="paths-page">
    <h1><?= \App\Support\Locale::t('learning_path', 'Rutas de aprendizaje') ?></h1>
    <p class="lead">Elige una ruta guiada con el orden óptimo de cursos.</p>
    <div class="course-grid">
        <?php foreach ($paths as $path): ?>
            <article class="course-card">
                <span class="course-icon"><?= htmlspecialchars($path['icon'] ?? '📚') ?></span>
                <h2><?= htmlspecialchars($path['title']) ?></h2>
                <p><?= htmlspecialchars($path['description']) ?></p>
                <p class="muted"><?= (int) ($path['weeks'] ?? 0) ?> semanas · <?= count($path['courses'] ?? []) ?> cursos</p>
                <form method="post" action="/rutas">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="hidden" name="path" value="<?= htmlspecialchars($path['slug']) ?>">
                    <button type="submit" class="btn <?= ($selected ?? '') === $path['slug'] ? 'btn-next' : 'btn-ghost' ?>">
                        <?= ($selected ?? '') === $path['slug'] ? '✓ Seleccionada' : 'Elegir ruta' ?>
                    </button>
                </form>
            </article>
        <?php endforeach; ?>
    </div>
</section>
