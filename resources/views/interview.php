<section class="interview-page">
    <h1><?= \App\Support\Locale::t('interview', 'Modo entrevista') ?></h1>
    <?php if (!empty($score)): ?>
        <div class="platform-banner">Puntuación: <?= (int) $score['score'] ?>/<?= (int) $score['total'] ?></div>
    <?php endif; ?>
    <nav class="stack-tabs">
        <?php foreach ($stacks as $key => $item): ?>
            <a href="/entrevista?stack=<?= urlencode($key) ?>" class="<?= $key === $stack ? 'active' : '' ?>"><?= htmlspecialchars($item['title']) ?></a>
        <?php endforeach; ?>
    </nav>
    <h2><?= htmlspecialchars($current['title']) ?></h2>
    <form method="post" action="/entrevista">
        <?= \App\Http\Csrf::field() ?>
        <input type="hidden" name="stack" value="<?= htmlspecialchars($stack) ?>">
        <ol class="interview-list">
            <?php foreach ($current['questions'] as $i => $q): ?>
                <li class="interview-card">
                    <strong><?= ($i + 1) ?>. <?= htmlspecialchars($q['q']) ?></strong>
                    <textarea name="a[<?= $i ?>]" rows="2" placeholder="Tu respuesta…" required></textarea>
                    <details><summary>Pista</summary><p><?= htmlspecialchars($q['hint']) ?></p></details>
                </li>
            <?php endforeach; ?>
        </ol>
        <button type="submit" class="btn btn-xl">Evaluar respuestas</button>
    </form>
</section>
