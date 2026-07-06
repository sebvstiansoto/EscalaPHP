<?php declare(strict_types=1);

$levels = $data['levels'];
$items = $data['items'];
$byLevel = [];
foreach ($items as $item) {
    $byLevel[$item['level']][] = $item;
}
$levelCounts = [];
foreach ($levels as $level) {
    $levelCounts[$level['slug']] = count($byLevel[$level['slug']] ?? []);
}
?>

<section class="dev-page dev-checklist">
    <?php require __DIR__ . '/_nav.php'; ?>

    <header class="dev-page-header">
        <h1>Checklist del developer</h1>
        <p class="lead">Marca lo que ya dominas. Tu progreso se guarda en este navegador.</p>
        <div class="dev-checklist-toolbar">
            <div class="dev-checklist-progress">
                <div class="dev-progress-bar"><div class="dev-progress-fill" id="checklist-progress-fill"></div></div>
                <span id="checklist-progress-text">0%</span>
            </div>
            <button type="button" class="btn btn-ghost btn-sm" id="checklist-reset">Reiniciar progreso</button>
        </div>
    </header>

    <div class="dev-checklist-tabs" role="tablist">
        <?php foreach ($levels as $i => $level): ?>
            <button
                type="button"
                class="dev-checklist-tab <?= $i === 0 ? 'is-active' : '' ?>"
                data-level="<?= htmlspecialchars($level['slug']) ?>"
                data-total="<?= (int) ($levelCounts[$level['slug']] ?? 0) ?>"
                style="--tab-color: <?= htmlspecialchars($level['color']) ?>"
                role="tab"
            >
                <?= htmlspecialchars($level['title']) ?>
                <span class="dev-tab-progress" id="tab-pct-<?= htmlspecialchars($level['slug']) ?>">0%</span>
            </button>
        <?php endforeach; ?>
    </div>

    <?php foreach ($levels as $i => $level): ?>
        <div
            class="dev-checklist-panel <?= $i === 0 ? 'is-active' : '' ?>"
            data-level="<?= htmlspecialchars($level['slug']) ?>"
            role="tabpanel"
        >
            <p class="dev-checklist-level-desc"><?= htmlspecialchars($level['desc']) ?></p>
            <ul class="dev-checklist-list">
                <?php foreach ($byLevel[$level['slug']] ?? [] as $j => $item): ?>
                    <?php $id = $level['slug'] . '-' . $j; ?>
                    <li class="dev-checklist-item" data-level-item="<?= htmlspecialchars($level['slug']) ?>">
                        <label class="dev-checklist-label">
                            <input type="checkbox" class="dev-checklist-cb" data-id="<?= htmlspecialchars($id) ?>" data-level="<?= htmlspecialchars($level['slug']) ?>">
                            <span class="dev-checklist-text"><?= htmlspecialchars($item['text']) ?></span>
                        </label>
                        <div class="dev-checklist-links">
                            <?php foreach ($item['terms'] ?? [] as $term): ?>
                                <a href="/glosario#<?= urlencode($term) ?>" class="dev-mini-link">#<?= htmlspecialchars($term) ?></a>
                            <?php endforeach; ?>
                            <?php foreach ($item['courses'] ?? [] as $course): ?>
                                <a href="/curso?slug=<?= urlencode($course) ?>" class="dev-mini-link dev-mini-course"><?= htmlspecialchars($course) ?></a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</section>

<script>
(function () {
    const KEY = 'escala-checklist-v1';
    const boxes = document.querySelectorAll('.dev-checklist-cb');
    const fill = document.getElementById('checklist-progress-fill');
    const text = document.getElementById('checklist-progress-text');
    const tabs = document.querySelectorAll('.dev-checklist-tab');
    const panels = document.querySelectorAll('.dev-checklist-panel');
    const resetBtn = document.getElementById('checklist-reset');

    function load() {
        try { return JSON.parse(localStorage.getItem(KEY) || '{}'); } catch (e) { return {}; }
    }
    function save(state) { localStorage.setItem(KEY, JSON.stringify(state)); }

    let state = load();
    boxes.forEach(function (cb) {
        if (state[cb.dataset.id]) cb.checked = true;
        cb.addEventListener('change', function () {
            state[cb.dataset.id] = cb.checked;
            save(state);
            updateProgress();
        });
    });

    function levelProgress(level) {
        const levelBoxes = document.querySelectorAll('.dev-checklist-cb[data-level="' + level + '"]');
        const total = levelBoxes.length;
        const done = Array.from(levelBoxes).filter(function (b) { return b.checked; }).length;
        return { done: done, total: total, pct: total ? Math.round((done / total) * 100) : 0 };
    }

    function updateProgress() {
        const total = boxes.length;
        const done = Array.from(boxes).filter(function (b) { return b.checked; }).length;
        const pct = total ? Math.round((done / total) * 100) : 0;
        fill.style.width = pct + '%';
        text.textContent = done + ' / ' + total + ' (' + pct + '%)';

        tabs.forEach(function (tab) {
            const lp = levelProgress(tab.dataset.level);
            const el = document.getElementById('tab-pct-' + tab.dataset.level);
            if (el) el.textContent = lp.pct + '%';
        });
    }

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const level = tab.dataset.level;
            tabs.forEach(function (t) { t.classList.remove('is-active'); });
            panels.forEach(function (p) { p.classList.toggle('is-active', p.dataset.level === level); });
            tab.classList.add('is-active');
        });
    });

    resetBtn.addEventListener('click', function () {
        if (!confirm('¿Borrar todo el progreso del checklist?')) return;
        state = {};
        save(state);
        boxes.forEach(function (cb) { cb.checked = false; });
        updateProgress();
    });

    updateProgress();
})();
</script>
