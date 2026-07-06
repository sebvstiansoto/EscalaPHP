<?php

declare(strict_types=1);
?>

<section class="review-page">
    <h1>Repaso espaciado (SM-2)</h1>
    <?php if (!empty($due)): ?>
        <div class="review-due">
            <?php foreach ($due as $item): ?>
                <article class="review-item-card">
                    <strong><?= htmlspecialchars($item['lesson_slug']) ?></strong>
                    <span class="muted"><?= htmlspecialchars($item['course_slug']) ?></span>
                    <a href="/leccion?curso=<?= urlencode($item['course_slug']) ?>&slug=<?= urlencode($item['lesson_slug']) ?>" class="btn btn-sm">Repasar</a>
                    <form method="post" action="/revision" class="inline-form">
                        <?= \App\Http\Csrf::field() ?>
                        <input type="hidden" name="course" value="<?= htmlspecialchars($item['course_slug']) ?>">
                        <input type="hidden" name="lesson" value="<?= htmlspecialchars($item['lesson_slug']) ?>">
                        <select name="quality">
                            <option value="5">Fácil</option>
                            <option value="4" selected>Bien</option>
                            <option value="3">Difícil</option>
                            <option value="1">Olvidé</option>
                        </select>
                        <button type="submit" class="btn btn-ghost btn-sm">Calificar</button>
                    </form>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="lead">No hay repasos pendientes hoy. Completa lecciones para programar repasos automáticos.</p>
    <?php endif; ?>

    <h2>Checklist senior</h2>
    <div class="review-progress">
        <span id="review-count">0 / <?= count($checklist) ?></span> listas para revisión
    </div>

    <div class="review-checklist" id="review-checklist">
        <?php foreach ($checklist as $i => $item): ?>
            <label class="review-item">
                <input type="checkbox" data-review-id="<?= $i ?>" data-module="<?= htmlspecialchars($item['module']) ?>">
                <div>
                    <strong><?= $i + 1 ?>. <?= htmlspecialchars($item['q']) ?></strong>
                    <small>
                        Módulo: <?= htmlspecialchars($item['module']) ?>
                        · <a href="/leccion?slug=<?= urlencode($item['module']) ?>">Repasar</a>
                    </small>
                </div>
            </label>
        <?php endforeach; ?>
    </div>

    <div class="review-tip">
        <h3>Consejo del mentor</h3>
        <p>No mires las respuestas. Explica con tus propias palabras. Si te trabas, repasa ese módulo con el Modo Mentor.</p>
        <p>Cuando tengas todas marcadas, estás listo para pedirle code review a tu amigo senior.</p>
    </div>
</section>

<script>
(function () {
    const KEY = 'escala_review_checklist';
    const boxes = document.querySelectorAll('#review-checklist input[type=checkbox]');
    const counter = document.getElementById('review-count');
    let saved = {};
    try { saved = JSON.parse(localStorage.getItem(KEY) || '{}'); } catch (_) {}

    const update = () => {
        let n = 0;
        boxes.forEach(b => { if (b.checked) n++; });
        if (counter) counter.textContent = n + ' / ' + boxes.length;
    };

    boxes.forEach(b => {
        if (saved[b.dataset.reviewId]) b.checked = true;
        b.addEventListener('change', () => {
            saved[b.dataset.reviewId] = b.checked;
            localStorage.setItem(KEY, JSON.stringify(saved));
            update();
        });
    });
    update();
})();
</script>
