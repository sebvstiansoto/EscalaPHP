<section class="capstone-page">
    <h1><?= htmlspecialchars($capstone['title']) ?></h1>
    <p><?= htmlspecialchars($capstone['description']) ?></p>
    <?php if (!empty($result)): ?>
        <div class="platform-banner">Puntuación: <?= (int) ($result['score'] ?? 0) ?>/<?= (int) ($result['max'] ?? 100) ?> <?= !empty($result['passed']) ? '✓' : '' ?></div>
    <?php endif; ?>
    <ul><?php foreach ($capstone['rubric'] ?? [] as $r): ?><li><?= htmlspecialchars($r['label'] ?? '') ?></li><?php endforeach; ?></ul>
    <form method="post" action="/capstones">
        <?= \App\Http\Csrf::field() ?>
        <input type="hidden" name="capstone" value="<?= htmlspecialchars($capstone['slug']) ?>">
        <textarea name="code" rows="14" class="code-input" placeholder="Pega tu solución completa" required></textarea>
        <button type="submit" class="btn">Enviar a evaluación</button>
    </form>
</section>
