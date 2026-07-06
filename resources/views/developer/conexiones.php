<?php declare(strict_types=1); ?>

<section class="dev-page dev-conexiones">
    <?php require __DIR__ . '/_nav.php'; ?>

    <header class="dev-page-header">
        <h1>Conexiones entre conceptos</h1>
        <p class="lead">El glosario define palabras; aquí ves cómo se relacionan entre sí.</p>
        <input type="search" class="dev-search" id="conn-search" placeholder="Buscar concepto…" aria-label="Buscar conexiones">
    </header>

    <div class="dev-conn-grid" id="conn-grid">
        <?php foreach ($connections as $conn): ?>
            <article
                class="dev-conn-card"
                data-term="<?= htmlspecialchars(mb_strtolower($conn['term'])) ?>"
                id="conn-<?= htmlspecialchars($conn['slug']) ?>"
            >
                <header class="dev-conn-header">
                    <h2>
                        <a href="/glosario#<?= urlencode($conn['slug']) ?>"><?= htmlspecialchars($conn['term']) ?></a>
                    </h2>
                    <p><?= htmlspecialchars($conn['summary']) ?></p>
                </header>

                <?php if (!empty($conn['connects'])): ?>
                    <div class="dev-conn-section">
                        <h3>Se conecta con</h3>
                        <ul class="dev-conn-list">
                            <?php foreach ($conn['connects'] as $link): ?>
                                <li>
                                    <span class="dev-conn-rel"><?= htmlspecialchars($link['label']) ?></span>
                                    <?php if (isset($glossary[$link['slug']])): ?>
                                        <a href="/glosario#<?= urlencode($link['slug']) ?>"><?= htmlspecialchars($glossary[$link['slug']]['term'] ?? $link['slug']) ?></a>
                                    <?php else: ?>
                                        <a href="/glosario#<?= urlencode($link['slug']) ?>"><?= htmlspecialchars($link['slug']) ?></a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (!empty($conn['part_of'])): ?>
                    <div class="dev-conn-tags">
                        <span class="dev-conn-tag-label">Parte de:</span>
                        <?php foreach ($conn['part_of'] as $slug): ?>
                            <a href="/glosario#<?= urlencode($slug) ?>" class="dev-tag"><?= htmlspecialchars($slug) ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($conn['see_also'])): ?>
                    <div class="dev-conn-tags">
                        <span class="dev-conn-tag-label">Ver también:</span>
                        <?php foreach ($conn['see_also'] as $slug): ?>
                            <a href="/glosario#<?= urlencode($slug) ?>" class="dev-tag"><?= htmlspecialchars($slug) ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>

    <p class="dev-empty hidden" id="conn-empty">No hay conexiones que coincidan.</p>
</section>

<script>
(function () {
    const search = document.getElementById('conn-search');
    const cards = document.querySelectorAll('.dev-conn-card');
    const empty = document.getElementById('conn-empty');

    search.addEventListener('input', function () {
        const q = search.value.trim().toLowerCase();
        let visible = 0;
        cards.forEach(function (card) {
            const show = !q || (card.dataset.term || '').includes(q);
            card.classList.toggle('hidden', !show);
            if (show) visible++;
        });
        empty.classList.toggle('hidden', visible > 0);
    });

    if (location.hash) {
        const el = document.querySelector(location.hash);
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
})();
</script>
