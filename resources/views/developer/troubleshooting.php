<?php declare(strict_types=1);

$categories = [
    'all' => 'Todos',
    'http' => 'HTTP / API',
    'db' => 'Base de datos',
    'docker' => 'Docker',
    'frontend' => 'Frontend',
    'deploy' => 'Deploy / CI',
    'infra' => 'HTTPS / Infra',
];
?>

<section class="dev-page dev-troubleshoot">
    <?php require __DIR__ . '/_nav.php'; ?>

    <header class="dev-page-header">
        <h1>Guía de troubleshooting</h1>
        <p class="lead">Cuando algo falla, sigue estos pasos en orden. No adivines — diagnostica.</p>
        <input type="search" class="dev-search" id="ts-search" placeholder="Buscar síntoma (500, CORS, Docker…)…" aria-label="Buscar errores">
        <div class="dev-ts-filters" role="group" aria-label="Filtrar por categoría">
            <?php foreach ($categories as $slug => $label): ?>
                <button
                    type="button"
                    class="dev-ts-filter <?= $slug === 'all' ? 'is-active' : '' ?>"
                    data-cat="<?= htmlspecialchars($slug) ?>"
                ><?= htmlspecialchars($label) ?></button>
            <?php endforeach; ?>
        </div>
    </header>

    <div class="dev-ts-grid" id="ts-grid">
        <?php foreach ($guides as $guide): ?>
            <article
                class="dev-ts-card"
                data-search="<?= htmlspecialchars(mb_strtolower($guide['symptom'] . ' ' . ($guide['meaning'] ?? ''))) ?>"
                data-category="<?= htmlspecialchars($guide['category'] ?? 'http') ?>"
                id="ts-<?= htmlspecialchars($guide['slug']) ?>"
            >
                <button type="button" class="dev-ts-trigger" aria-expanded="false">
                    <span class="dev-ts-icon"><?= htmlspecialchars($guide['icon']) ?></span>
                    <span class="dev-ts-heading">
                        <strong><?= htmlspecialchars($guide['symptom']) ?></strong>
                        <span class="dev-ts-severity dev-ts-severity-<?= htmlspecialchars($guide['severity']) ?>"><?= htmlspecialchars($guide['severity']) ?></span>
                    </span>
                    <span class="dev-ts-chevron" aria-hidden="true"></span>
                </button>
                <div class="dev-ts-body" hidden>
                    <p class="dev-ts-meaning"><?= htmlspecialchars($guide['meaning']) ?></p>
                    <ol class="dev-ts-steps">
                        <?php foreach ($guide['steps'] as $i => $step): ?>
                            <li class="dev-ts-step">
                                <span class="dev-ts-step-num"><?= $i + 1 ?></span>
                                <div>
                                    <strong><?= htmlspecialchars($step['action']) ?></strong>
                                    <p><?= htmlspecialchars($step['detail']) ?></p>
                                    <?php if (!empty($step['terms'])): ?>
                                        <div class="dev-checklist-links">
                                            <?php foreach ($step['terms'] as $term): ?>
                                                <a href="/glosario#<?= urlencode($term) ?>" class="dev-mini-link">#<?= htmlspecialchars($term) ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <aside class="dev-ts-tip">
        <h3>Regla de oro del debugging</h3>
        <ol>
            <li><strong>Reproduce</strong> el error de forma consistente</li>
            <li><strong>Lee el mensaje</strong> completo (log, consola, stack trace)</li>
            <li><strong>Aísla</strong>: ¿es frontend, API, BD o infra?</li>
            <li><strong>Cambia una cosa</strong> a la vez hasta encontrar la causa</li>
            <li><strong>Documenta</strong> la solución para la próxima vez</li>
        </ol>
        <p>
            <a href="/mapa-developer">Mapa del flujo</a> ·
            <a href="/conexiones">Conexiones</a> ·
            <a href="/dia-developer">Día a día del dev</a>
        </p>
    </aside>
</section>

<script>
(function () {
    const search = document.getElementById('ts-search');
    const cards = document.querySelectorAll('.dev-ts-card');
    const filters = document.querySelectorAll('.dev-ts-filter');
    let activeCat = 'all';

    document.querySelectorAll('.dev-ts-trigger').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            const card = trigger.closest('.dev-ts-card');
            const body = card.querySelector('.dev-ts-body');
            const open = card.classList.toggle('is-open');
            trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
            body.hidden = !open;
        });
    });

    function applyFilters() {
        const q = search.value.trim().toLowerCase();
        cards.forEach(function (card) {
            const matchSearch = !q || (card.dataset.search || '').includes(q);
            const matchCat = activeCat === 'all' || card.dataset.category === activeCat;
            const show = matchSearch && matchCat;
            card.classList.toggle('hidden', !show);
            if (show && q) {
                card.classList.add('is-open');
                const body = card.querySelector('.dev-ts-body');
                const trigger = card.querySelector('.dev-ts-trigger');
                body.hidden = false;
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
    }

    search.addEventListener('input', applyFilters);

    filters.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filters.forEach(function (b) { b.classList.remove('is-active'); });
            btn.classList.add('is-active');
            activeCat = btn.dataset.cat;
            applyFilters();
        });
    });

    if (location.hash) {
        const el = document.querySelector(location.hash);
        if (el && el.classList.contains('dev-ts-card')) {
            el.classList.add('is-open');
            const body = el.querySelector('.dev-ts-body');
            const trigger = el.querySelector('.dev-ts-trigger');
            body.hidden = false;
            trigger.setAttribute('aria-expanded', 'true');
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
})();
</script>
