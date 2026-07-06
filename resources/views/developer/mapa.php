<?php declare(strict_types=1);

$pipeline = ['user', 'dns', 'nginx', 'frontend', 'api', 'middleware', 'backend', 'cache', 'database', 'deploy'];
$nodesById = [];
foreach ($map['layers'] as $node) {
    $nodesById[$node['id']] = $node;
}
?>

<section class="dev-page dev-mapa">
    <?php require __DIR__ . '/_nav.php'; ?>

    <header class="dev-page-header">
        <h1><?= htmlspecialchars($map['title']) ?></h1>
        <p class="lead"><?= htmlspecialchars($map['subtitle']) ?></p>
        <p class="dev-hint">Haz clic en un paso. Los nodos relacionados se resaltan en azul.</p>
    </header>

    <div class="dev-mapa-layout">
        <div class="dev-mapa-pipeline" id="dev-mapa-pipeline">
            <?php foreach ($pipeline as $i => $nodeId): ?>
                <?php if (!isset($nodesById[$nodeId])) continue; ?>
                <?php $node = $nodesById[$nodeId]; ?>
                <?php if ($i > 0): ?>
                    <div class="dev-mapa-arrow" aria-hidden="true">↓</div>
                <?php endif; ?>
                <button
                    type="button"
                    class="dev-mapa-pipeline-node"
                    data-node="<?= htmlspecialchars($nodeId) ?>"
                >
                    <span class="dev-mapa-node-icon"><?= htmlspecialchars($node['icon']) ?></span>
                    <span class="dev-mapa-pipeline-text">
                        <strong><?= htmlspecialchars($node['label']) ?></strong>
                        <small><?= htmlspecialchars(mb_substr($node['desc'], 0, 72)) ?>…</small>
                    </span>
                </button>
            <?php endforeach; ?>

            <div class="dev-mapa-optional">
                <p class="dev-detail-label">Ramas opcionales</p>
                <?php foreach (['cdn', 'queue'] as $optId): ?>
                    <?php if (!isset($nodesById[$optId])) continue; ?>
                    <?php $opt = $nodesById[$optId]; ?>
                    <button type="button" class="dev-mapa-pipeline-node dev-mapa-optional-node" data-node="<?= htmlspecialchars($optId) ?>">
                        <span class="dev-mapa-node-icon"><?= htmlspecialchars($opt['icon']) ?></span>
                        <span class="dev-mapa-pipeline-text">
                            <strong><?= htmlspecialchars($opt['label']) ?></strong>
                        </span>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <aside class="dev-mapa-detail" id="dev-mapa-detail">
            <p class="dev-mapa-placeholder">← Selecciona un paso del flujo</p>
        </aside>
    </div>

    <div class="dev-mapa-actions">
        <button type="button" class="btn btn-ghost btn-sm" id="mapa-play" aria-pressed="false">▶ Recorrer flujo automático</button>
        <a href="/conexiones" class="btn btn-ghost btn-sm">Ver conexiones →</a>
        <a href="/troubleshooting" class="btn btn-ghost btn-sm">Guía de errores →</a>
    </div>
</section>

<script>
(function () {
    const nodes = <?= json_encode(array_values($map['layers']), JSON_UNESCAPED_UNICODE) ?>;
    const flows = <?= json_encode($map['flows'], JSON_UNESCAPED_UNICODE) ?>;
    const pipeline = <?= json_encode($pipeline, JSON_UNESCAPED_UNICODE) ?>;
    const detail = document.getElementById('dev-mapa-detail');
    const nodeBtns = document.querySelectorAll('[data-node]');
    const playBtn = document.getElementById('mapa-play');
    let playTimer = null;

    function neighbors(id) {
        const related = new Set([id]);
        flows.forEach(function (f) {
            if (f.from === id) related.add(f.to);
            if (f.to === id) related.add(f.from);
        });
        return related;
    }

    function render(node) {
        const related = neighbors(node.id);
        nodeBtns.forEach(function (btn) {
            const nid = btn.dataset.node;
            btn.classList.toggle('is-active', nid === node.id);
            btn.classList.toggle('is-related', related.has(nid) && nid !== node.id);
        });

        let html = '<h3>' + node.icon + ' ' + node.label + '</h3>';
        html += '<p>' + node.desc + '</p>';
        if (node.terms && node.terms.length) {
            html += '<p class="dev-detail-label">Términos</p><div class="dev-tag-list">';
            node.terms.forEach(function (t) {
                html += '<a href="/glosario#' + encodeURIComponent(t) + '" class="dev-tag">' + t + '</a>';
            });
            html += '</div>';
        }
        if (node.courses && node.courses.length) {
            html += '<p class="dev-detail-label">Cursos</p><div class="dev-tag-list">';
            node.courses.forEach(function (c) {
                html += '<a href="/curso?slug=' + encodeURIComponent(c) + '" class="dev-tag dev-tag-course">' + c + '</a>';
            });
            html += '</div>';
        }
        const outs = flows.filter(function (f) { return f.from === node.id; });
        if (outs.length) {
            html += '<p class="dev-detail-label">Siguiente en el flujo</p><ul class="dev-conn-list">';
            outs.forEach(function (f) {
                const target = nodes.find(function (n) { return n.id === f.to; });
                html += '<li><span class="dev-conn-rel">' + f.label + '</span> <a href="#" data-goto="' + f.to + '">' + (target ? target.label : f.to) + '</a></li>';
            });
            html += '</ul>';
        }
        detail.innerHTML = html;
        detail.querySelectorAll('[data-goto]').forEach(function (a) {
            a.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector('[data-node="' + a.dataset.goto + '"]');
                if (target) target.click();
            });
        });
    }

    nodeBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const node = nodes.find(function (n) { return n.id === btn.dataset.node; });
            if (node) render(node);
        });
    });

    playBtn.addEventListener('click', function () {
        if (playTimer) {
            clearInterval(playTimer);
            playTimer = null;
            playBtn.textContent = '▶ Recorrer flujo automático';
            playBtn.setAttribute('aria-pressed', 'false');
            return;
        }
        playBtn.textContent = '⏸ Pausar recorrido';
        playBtn.setAttribute('aria-pressed', 'true');
        let i = 0;
        function step() {
            const id = pipeline[i % pipeline.length];
            const btn = document.querySelector('[data-node="' + id + '"]');
            if (btn) btn.click();
            i++;
        }
        step();
        playTimer = setInterval(step, 2200);
    });

    const first = document.querySelector('[data-node="user"]');
    if (first) first.click();
})();
</script>
