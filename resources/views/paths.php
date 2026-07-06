<section class="paths-page">
    <h1><?= \App\Support\Locale::t('learning_path', 'Rutas de aprendizaje') ?></h1>
    <p class="lead">Elige una ruta guiada con el orden óptimo de cursos.</p>
    <div class="course-grid">
        <?php foreach ($paths as $path): ?>
            <?php
                $slug = (string) ($path['slug'] ?? '');
                $prog = $pathProgress[$slug] ?? ['percent' => 0, 'done' => false];
            ?>
            <article class="course-card">
                <span class="course-icon"><?= htmlspecialchars($path['icon'] ?? '📚') ?></span>
                <h2><?= htmlspecialchars($path['title']) ?></h2>
                <p><?= htmlspecialchars($path['description']) ?></p>
                <p class="muted"><?= (int) ($path['weeks'] ?? 0) ?> semanas · <?= count($path['courses'] ?? []) ?> cursos</p>
                <div class="path-progress" style="margin:0.75rem 0">
                    <div style="background:#eee;border-radius:4px;height:8px;overflow:hidden">
                        <div style="background:#3776ab;height:100%;width:<?= (int) $prog['percent'] ?>%"></div>
                    </div>
                    <p class="muted" style="margin:0.35rem 0 0;font-size:0.9rem">
                        <?= (int) $prog['percent'] ?>% completado
                        <?php if (!empty($prog['done'])): ?>
                            · <a href="/certificado?ruta=<?= urlencode($slug) ?>">Certificado de ruta</a>
                        <?php endif; ?>
                    </p>
                </div>
                <form method="post" action="/rutas">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="hidden" name="path" value="<?= htmlspecialchars($slug) ?>">
                    <button type="submit" class="btn <?= ($selected ?? '') === $slug ? 'btn-next' : 'btn-ghost' ?>">
                        <?= ($selected ?? '') === $slug ? '✓ Seleccionada' : 'Elegir ruta' ?>
                    </button>
                </form>
            </article>
        <?php endforeach; ?>
    </div>
</section>
