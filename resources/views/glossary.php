<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$totalTerms = count($terms);

/** @param array<string, mixed> $meta */
$catLabel = static function (array $meta, string $slug): string {
    return is_array($meta) ? (string) ($meta['label'] ?? $slug) : (string) $meta;
};
?>

<section class="glossary">
    <header class="glossary-header">
        <div class="glossary-hero">
            <div>
                <h1>Glosario de programación</h1>
                <p class="lead">
                    <?= $totalTerms ?> términos en español simple.
                    Haz clic en una categoría para ver sus definiciones.
                </p>
                <p class="dev-guide-banner">
                    <a href="/developer">→ Guía del developer</a>
                    · mapa · checklist · conexiones · errores · día a día
                </p>
            </div>
            <div class="glossary-stat-pill" aria-hidden="true">
                <strong><?= count($grouped) ?></strong>
                <span>categorías</span>
            </div>
        </div>

        <div class="glossary-toolbar">
            <label class="glossary-search-wrap">
                <span class="glossary-search-icon" aria-hidden="true">⌕</span>
                <input
                    type="search"
                    id="glossary-search"
                    class="glossary-search"
                    placeholder="Buscar término o definición…"
                    autocomplete="off"
                    aria-label="Buscar en el glosario"
                >
            </label>
            <div class="glossary-toolbar-actions">
                <span class="glossary-count" id="glossary-count"><?= $totalTerms ?> términos</span>
                <button type="button" class="btn btn-ghost btn-sm" id="glossary-expand-all">Expandir todo</button>
                <button type="button" class="btn btn-ghost btn-sm" id="glossary-collapse-all">Colapsar todo</button>
            </div>
        </div>
    </header>

    <div class="glossary-layout">
        <aside class="glossary-sidebar" aria-label="Índice de categorías">
            <p class="glossary-sidebar-title">Categorías</p>
            <nav class="glossary-index">
                <?php foreach ($grouped as $catSlug => $catTerms): ?>
                    <?php if ($catTerms === []): continue; endif; ?>
                    <?php $meta = $categories[$catSlug] ?? []; ?>
                    <button
                        type="button"
                        class="glossary-index-btn"
                        data-target="cat-<?= htmlspecialchars($catSlug) ?>"
                        style="--cat-accent: <?= htmlspecialchars((string) ($meta['accent'] ?? 'var(--accent)')) ?>"
                    >
                        <span class="glossary-index-icon" aria-hidden="true"><?= htmlspecialchars((string) ($meta['icon'] ?? '•')) ?></span>
                        <span class="glossary-index-text">
                            <span class="glossary-index-label"><?= htmlspecialchars($catLabel($meta, $catSlug)) ?></span>
                            <span class="glossary-index-count"><?= count($catTerms) ?> términos</span>
                        </span>
                    </button>
                <?php endforeach; ?>
            </nav>
        </aside>

        <div class="glossary-accordion" id="glossary-accordion">
            <?php foreach ($grouped as $catSlug => $catTerms): ?>
                <?php if ($catTerms === []): continue; endif; ?>
                <?php $meta = $categories[$catSlug] ?? []; ?>
                <section
                    id="cat-<?= htmlspecialchars($catSlug) ?>"
                    class="glossary-panel"
                    data-category="<?= htmlspecialchars($catSlug) ?>"
                    style="--cat-accent: <?= htmlspecialchars((string) ($meta['accent'] ?? 'var(--accent)')) ?>"
                >
                    <button
                        type="button"
                        class="glossary-panel-trigger"
                        aria-expanded="false"
                        aria-controls="panel-body-<?= htmlspecialchars($catSlug) ?>"
                        id="panel-trigger-<?= htmlspecialchars($catSlug) ?>"
                    >
                        <span class="glossary-panel-icon" aria-hidden="true"><?= htmlspecialchars((string) ($meta['icon'] ?? '•')) ?></span>
                        <span class="glossary-panel-heading">
                            <span class="glossary-panel-label"><?= htmlspecialchars($catLabel($meta, $catSlug)) ?></span>
                            <?php if (!empty($meta['desc'])): ?>
                                <span class="glossary-panel-desc"><?= htmlspecialchars((string) $meta['desc']) ?></span>
                            <?php endif; ?>
                        </span>
                        <span class="glossary-panel-count"><?= count($catTerms) ?></span>
                        <span class="glossary-panel-chevron" aria-hidden="true"></span>
                    </button>

                    <div
                        class="glossary-panel-body"
                        id="panel-body-<?= htmlspecialchars($catSlug) ?>"
                        role="region"
                        aria-labelledby="panel-trigger-<?= htmlspecialchars($catSlug) ?>"
                        aria-hidden="true"
                    >
                        <div class="glossary-panel-inner">
                            <div class="glossary-grid">
                                <?php foreach ($catTerms as $item): ?>
                                    <article
                                        id="<?= htmlspecialchars($item['slug']) ?>"
                                        class="glossary-card"
                                        data-term="<?= htmlspecialchars(mb_strtolower($item['term'])) ?>"
                                        data-def="<?= htmlspecialchars(mb_strtolower($item['definition'])) ?>"
                                    >
                                        <h3><?= htmlspecialchars($item['term']) ?></h3>
                                        <p><?= htmlspecialchars($item['definition']) ?></p>
                                        <?php if (!empty($connectionSlugs[$item['slug']])): ?>
                                            <a href="/conexiones#conn-<?= urlencode($item['slug']) ?>" class="glossary-conn-link">
                                                Ver conexiones →
                                            </a>
                                        <?php endif; ?>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>

    <p class="glossary-empty hidden" id="glossary-empty">
        No hay términos que coincidan con tu búsqueda.
        <button type="button" class="btn btn-ghost btn-sm" id="glossary-clear-search">Limpiar búsqueda</button>
    </p>
</section>

<script>
(function () {
    const search = document.getElementById('glossary-search');
    const count = document.getElementById('glossary-count');
    const empty = document.getElementById('glossary-empty');
    const clearSearch = document.getElementById('glossary-clear-search');
    const expandAll = document.getElementById('glossary-expand-all');
    const collapseAll = document.getElementById('glossary-collapse-all');
    const panels = Array.from(document.querySelectorAll('.glossary-panel'));
    const indexBtns = document.querySelectorAll('.glossary-index-btn');
    const cards = document.querySelectorAll('.glossary-card');
    const total = cards.length;

    function setPanelOpen(panel, open) {
        const trigger = panel.querySelector('.glossary-panel-trigger');
        const body = panel.querySelector('.glossary-panel-body');
        if (!trigger || !body) return;

        panel.classList.toggle('is-open', open);
        trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
        body.setAttribute('aria-hidden', open ? 'false' : 'true');
    }

    function openPanel(panel, scroll) {
        if (!panel) return;
        setPanelOpen(panel, true);
        if (scroll) {
            requestAnimationFrame(function () {
                panel.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        }
    }

    function closePanel(panel) {
        setPanelOpen(panel, false);
    }

    function syncIndexActive() {
        indexBtns.forEach(function (btn) {
            const panel = document.getElementById(btn.dataset.target || '');
            btn.classList.toggle('is-active', !!(panel && panel.classList.contains('is-open')));
        });
    }

    panels.forEach(function (panel) {
        const trigger = panel.querySelector('.glossary-panel-trigger');
        trigger.addEventListener('click', function () {
            const isOpen = panel.classList.contains('is-open');
            if (isOpen) {
                closePanel(panel);
            } else {
                openPanel(panel, false);
            }
            syncIndexActive();
        });
    });

    indexBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const id = btn.dataset.target;
            const panel = document.getElementById(id);
            openPanel(panel, true);
            indexBtns.forEach(function (b) { b.classList.remove('is-active'); });
            btn.classList.add('is-active');
        });
    });

    expandAll.addEventListener('click', function () {
        panels.forEach(function (p) {
            if (!p.classList.contains('is-filtered-out')) setPanelOpen(p, true);
        });
    });

    collapseAll.addEventListener('click', function () {
        panels.forEach(function (p) { setPanelOpen(p, false); });
        syncIndexActive();
    });

    function filterCards() {
        const q = (search.value || '').trim().toLowerCase();
        let visible = 0;

        cards.forEach(function (card) {
            const term = card.dataset.term || '';
            const def = card.dataset.def || '';
            const show = q === '' || term.includes(q) || def.includes(q);
            card.classList.toggle('hidden', !show);
            if (show) visible++;
        });

        panels.forEach(function (panel) {
            const visibleInPanel = panel.querySelectorAll('.glossary-card:not(.hidden)').length;
            const hasResults = visibleInPanel > 0;
            panel.classList.toggle('is-filtered-out', !hasResults);
            panel.classList.toggle('has-matches', q !== '' && hasResults);

            if (q !== '' && hasResults) {
                setPanelOpen(panel, true);
            }
        });

        count.textContent = visible + ' de ' + total + ' términos';
        empty.classList.toggle('hidden', visible > 0);
    }

    search.addEventListener('input', filterCards);

    clearSearch.addEventListener('click', function () {
        search.value = '';
        filterCards();
        search.focus();
    });

    function handleDeepLink() {
        const hash = location.hash.replace('#', '');
        if (!hash) return;

        let target = document.getElementById(hash);
        if (!target) return;

        if (target.classList.contains('glossary-card')) {
            const panel = target.closest('.glossary-panel');
            openPanel(panel, false);
            setTimeout(function () {
                target.classList.add('is-highlighted');
                target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                setTimeout(function () { target.classList.remove('is-highlighted'); }, 2400);
            }, 150);
            return;
        }

        if (target.classList.contains('glossary-panel')) {
            openPanel(target, true);
        }
    }

    handleDeepLink();
    window.addEventListener('hashchange', handleDeepLink);

    if (panels.length > 0 && !location.hash) {
        setPanelOpen(panels[0], true);
        syncIndexActive();
    }
})();
</script>
