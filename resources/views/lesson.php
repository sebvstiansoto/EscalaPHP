<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$exercises = $lesson['exercises'];
$current = $exercises[$exerciseIndex] ?? null;
$totalExercises = count($exercises);
?>

<article class="lesson-page">
    <a href="/" class="back-link">← Volver al mapa</a>

    <header class="lesson-header">
        <span class="badge"><?= htmlspecialchars($lesson['level']) ?></span>
        <h1><?= htmlspecialchars($lesson['title']) ?></h1>
        <p><?= htmlspecialchars($lesson['summary']) ?></p>
    </header>

    <div class="lesson-layout">
        <section class="lesson-content">
            <?php foreach ($lesson['sections'] as $section): ?>
                <div class="content-block">
                    <h2><?= htmlspecialchars($section['heading']) ?></h2>
                    <p><?= render_markdownish($section['body']) ?></p>
                    <?php if (!empty($section['code'])): ?>
                        <pre><code><?= htmlspecialchars($section['code']) ?></code></pre>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

            <?php if (!empty($lesson['concepts'])): ?>
                <div class="tags">
                    <?php foreach ($lesson['concepts'] as $concept): ?>
                        <a href="/glosario#<?= urlencode($concept) ?>"><?= htmlspecialchars($concept) ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>

        <aside class="exercise-panel">
            <h2>Práctica <?= min($exerciseIndex + 1, $totalExercises) ?> / <?= $totalExercises ?></h2>

            <?php if ($completed): ?>
                <div class="alert success">
                    Lección completada. Ya puedes continuar con la siguiente.
                </div>
                <a class="btn" href="/">Ver siguiente módulo</a>
            <?php elseif ($current): ?>
                <?php if ($result): ?>
                    <div class="alert <?= $result['ok'] ? 'success' : 'error' ?>">
                        <?= htmlspecialchars($result['message']) ?>
                    </div>
                <?php endif; ?>

                <form method="post" action="/leccion" class="exercise-form">
                    <input type="hidden" name="slug" value="<?= htmlspecialchars($lesson['slug']) ?>">
                    <p class="question"><?= render_markdownish($current['question']) ?></p>

                    <?php if (($current['type'] ?? '') === 'choice' && !empty($current['options'])): ?>
                        <?php foreach ($current['options'] as $option): ?>
                            <label class="choice">
                                <input type="radio" name="answer" value="<?= htmlspecialchars($option) ?>" required>
                                <?= htmlspecialchars($option) ?>
                            </label>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <?php if (!empty($current['hint'])): ?>
                            <p class="hint">Pista: <?= render_markdownish($current['hint']) ?></p>
                        <?php endif; ?>
                        <textarea
                            name="answer"
                            rows="8"
                            placeholder="Escribe tu respuesta o código PHP aquí"
                            required
                        ><?= htmlspecialchars($answer ?? ($current['starter'] ?? '')) ?></textarea>
                    <?php endif; ?>

                    <button type="submit" class="btn">Comprobar</button>
                </form>
            <?php endif; ?>
        </aside>
    </div>
</article>
