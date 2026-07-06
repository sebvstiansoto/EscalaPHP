<section class="exam-page">
    <h1><?= htmlspecialchars($exam['title']) ?></h1>
    <?php if (!empty($result)): ?>
        <div class="platform-banner <?= !empty($result['passed']) ? '' : 'error' ?>">
            Resultado: <?= (int) ($result['score'] ?? 0) ?>/<?= (int) ($result['max'] ?? 0) ?>
            <?= !empty($result['passed']) ? ' — ¡APROBADO!' : ' — Repasa y vuelve a intentar' ?>
        </div>
    <?php endif; ?>
    <form method="post" action="/examenes" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <input type="hidden" name="exam" value="<?= htmlspecialchars($exam['slug']) ?>">
        <?php foreach ($exam['questions'] as $i => $q): ?>
            <label>
                <strong><?= ($i + 1) ?>. <?= htmlspecialchars($q['q']) ?></strong>
                <input type="text" name="answers[<?= $i ?>]" required>
            </label>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-xl">Enviar examen</button>
    </form>
</section>
