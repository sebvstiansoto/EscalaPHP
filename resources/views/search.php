<section class="search-page">
    <h1>Buscar</h1>
    <form method="get" action="/buscar" class="search-form">
        <input type="search" name="q" value="<?= htmlspecialchars($query) ?>" placeholder="Cursos, lecciones, términos…" autofocus minlength="2">
        <button type="submit" class="btn">Buscar</button>
    </form>

    <?php if ($query !== ''): ?>
        <p class="search-meta"><?= count($results) ?> resultado(s) para «<?= htmlspecialchars($query) ?>»</p>
        <?php if ($results === []): ?>
            <p class="muted">No encontramos nada. Prueba «python», «docker» o «react».</p>
        <?php else: ?>
            <div class="search-results">
                <?php foreach ($results as $item): ?>
                    <a href="<?= htmlspecialchars($item['url']) ?>" class="search-result">
                        <span class="search-type"><?= htmlspecialchars($item['type']) ?></span>
                        <strong><?= htmlspecialchars($item['title']) ?></strong>
                        <small><?= htmlspecialchars($item['excerpt']) ?></small>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>
