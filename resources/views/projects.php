<?php

declare(strict_types=1);

$percent = $totalCount > 0 ? (int) round(($completedCount / $totalCount) * 100) : 0;
?>

<section class="projects-page">
    <h1>Mini-proyectos<?= !empty($course['title']) ? ' — ' . htmlspecialchars($course['title']) : '' ?></h1>
    <p class="lead">Proyectos hands-on con validación real de código. Completa la lección para desbloquear.</p>

    <?php if (!empty($courses)): ?>
    <form method="get" class="course-picker-form">
        <label>Curso
            <select name="curso" onchange="this.form.submit()">
                <?php foreach ($courses as $cSlug => $c): ?>
                    <option value="<?= htmlspecialchars($cSlug) ?>" <?= ($courseSlug ?? '') === $cSlug ? 'selected' : '' ?>>
                        <?= htmlspecialchars($c['title']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>
    </form>
    <?php endif; ?>

    <div class="progress-card progress-wide">
        <div class="progress-meta">
            <span>Proyectos completados</span>
            <strong><?= (int) $completedCount ?> / <?= (int) $totalCount ?></strong>
        </div>
        <div class="progress-bar">
            <div class="progress-fill" style="width: <?= $percent ?>%"></div>
        </div>
    </div>

    <div class="projects-grid">
        <?php foreach ($items as $item): ?>
            <?php
                $unlocked = $item['unlocked'];
                $done = $item['done'] ?? false;
                $project = $item['project'];
                $lesson = $item['lesson'];
                $slug = $lesson['slug'] ?? '';
            ?>
            <article class="project-item <?= $unlocked ? '' : 'locked' ?> <?= $done ? 'done' : '' ?>">
                <div class="project-item-top">
                    <span class="badge"><?= htmlspecialchars($lesson['level'] ?? '') ?></span>
                    <?php if ($done): ?>
                        <span class="tag-done">✓ Completado</span>
                    <?php elseif ($unlocked): ?>
                        <span class="tag-mentor">Disponible</span>
                    <?php else: ?>
                        <span class="locked-label">Completa el módulo</span>
                    <?php endif; ?>
                </div>
                <h2><?= htmlspecialchars($project['title']) ?></h2>
                <p><?= htmlspecialchars($project['description']) ?></p>
                <?php if ($unlocked): ?>
                    <ol class="project-steps">
                        <?php foreach ($project['steps'] as $step): ?>
                            <li><?= htmlspecialchars($step) ?></li>
                        <?php endforeach; ?>
                    </ol>
                    <?php $rubric = $project['rubric'] ?? ['Código funciona sin errores', 'Sigue los pasos del enunciado', 'Nombres claros y legibles', 'Sin copiar/pegar sin entender']; ?>
                    <details class="project-rubric">
                        <summary>Rúbrica de evaluación</summary>
                        <ul>
                            <?php foreach ($rubric as $criterion): ?>
                                <li><?= htmlspecialchars($criterion) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </details>
                    <span class="project-xp">+<?= (int) $project['reward_xp'] ?> XP</span>
                    <div class="project-actions">
                        <a href="/laboratorio" class="btn btn-ghost">Laboratorio</a>
                        <?php if (!$done && $slug !== ''): ?>
                            <?php $valType = $project['validation']['type'] ?? 'honor'; ?>
                            <form method="post" action="/proyectos/completar" class="project-actions-form" data-project-type="<?= htmlspecialchars($valType) ?>">
                                <?= \App\Http\Csrf::field() ?>
                                <input type="hidden" name="slug" value="<?= htmlspecialchars($slug) ?>">
                                <input type="hidden" name="redirect" value="/proyectos?curso=<?= htmlspecialchars($courseSlug ?? '') ?>">
                                <?php if (!empty($project['validation']) && $valType !== 'honor'): ?>
                                    <textarea name="project_code" rows="5" class="code-input" data-project-code placeholder="<?= $valType === 'js' ? 'Escribe tu código JavaScript' : ($valType === 'sql' ? 'Escribe tu consulta SQL' : 'Pega tu código para validar') ?>" required></textarea>
                                <?php endif; ?>
                                <button type="submit" class="btn"><?= $valType !== 'honor' ? 'Validar' : '✓ Completé' ?></button>
                            </form>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<script>
document.querySelectorAll('form[data-project-type="js"]').forEach((form) => {
    const textarea = form.querySelector('[data-project-code]');
    if (!textarea) return;
    form.addEventListener('submit', (e) => {
        const logs = [];
        const fakeConsole = {
            log: (...a) => logs.push(a.map(String).join(' ')),
            error: (...a) => logs.push(a.map(String).join(' ')),
        };
        try {
            new Function('console', '"use strict";\n' + textarea.value)(fakeConsole);
            textarea.value = logs.join('\n');
        } catch (err) {
            e.preventDefault();
            alert(String(err && err.message ? err.message : err));
        }
    });
});
</script>
