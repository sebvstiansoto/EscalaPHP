<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$exercises = $lesson['exercises'];
$stepType = $currentStep['type'] ?? 'mentor_say';
$exerciseIndex = (int) ($currentStep['exercise_index'] ?? 0);
$currentExercise = $exercises[$exerciseIndex] ?? null;
$totalSteps = count($steps);

$feedback = $feedback ?? null;
$exerciseSolved = $exerciseSolved ?? false;
$isLastStep = $isLastStep ?? ($stepIndex >= $totalSteps - 1);
$nextLesson = $nextLesson ?? null;
$courseSlug = (string) ($lesson['course'] ?? 'php-fundamentos');

// ¿Debemos mostrar el botón "Siguiente" en un ejercicio ya resuelto?
$showNextAfterExercise = $stepType === 'exercise' && $exerciseSolved;
$projectCompleted = $projectCompleted ?? false;
$showNextAfterProject = $stepType === 'project' && $projectCompleted;
?>

<div class="mentor-shell" data-lesson="<?= htmlspecialchars($lesson['slug']) ?>">
    <div class="mentor-progress">
        <?php for ($i = 0; $i < $totalSteps; $i++): ?>
            <span class="dot <?= $i <= $stepIndex ? 'active' : '' ?> <?= $i === $stepIndex ? 'current' : '' ?>"></span>
        <?php endfor; ?>
        <span class="step-label">Paso <?= $stepIndex + 1 ?> de <?= $totalSteps ?></span>
    </div>

    <div class="mentor-grid">
        <aside class="mentor-panel">
            <div class="mentor-avatar"><?= htmlspecialchars($currentStep['emoji'] ?? '🧑‍🏫') ?></div>
            <p class="mentor-role">Tu mentor <?= htmlspecialchars($runtimeLabel ?? 'PHP') ?></p>
            <h1><?= htmlspecialchars($currentStep['title'] ?? $lesson['title']) ?></h1>
            <div class="mentor-speech"><?= render_markdownish($currentStep['body'] ?? '') ?></div>

            <?php if ($feedback !== null): ?>
                <div class="mentor-feedback <?= $feedback['ok'] ? 'good' : 'retry' ?>">
                    <p class="fb-headline"><?= htmlspecialchars($feedback['headline']) ?></p>
                    <?php if (!empty($feedback['why'])): ?>
                        <p class="fb-why"><?= render_markdownish((string) $feedback['why']) ?></p>
                    <?php endif; ?>
                    <?php if (!empty($feedback['tip'])): ?>
                        <p class="fb-tip"><span>💡</span> <?= render_markdownish((string) $feedback['tip']) ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="mentor-nav">
                <?php if ($stepIndex > 0): ?>
                        <form method="post" action="/leccion/retroceder">
                            <input type="hidden" name="curso" value="<?= htmlspecialchars($lesson['course'] ?? 'php-fundamentos') ?>">
                            <input type="hidden" name="curso" value="<?= htmlspecialchars($courseSlug) ?>">
                        <input type="hidden" name="slug" value="<?= htmlspecialchars($lesson['slug']) ?>">
                            <?= \App\Http\Csrf::field() ?>
                            <button type="submit" class="btn btn-ghost">← Anterior</button>
                        </form>
                <?php endif; ?>

                <?php if ($stepType === 'complete'): ?>
                    <?php if ($nextLesson): ?>
                        <a href="/leccion?curso=<?= urlencode($courseSlug) ?>&slug=<?= urlencode($nextLesson['slug']) ?>" class="btn btn-next">
                            Siguiente curso: <?= htmlspecialchars($nextLesson['title']) ?> →
                        </a>
                    <?php else: ?>
                        <a href="/" class="btn">Volver al mapa →</a>
                    <?php endif; ?>

                <?php elseif ($showNextAfterExercise || $showNextAfterProject): ?>
                    <?php if ($isLastStep): ?>
                        <?php if ($nextLesson): ?>
                            <a href="/leccion?curso=<?= urlencode($courseSlug) ?>&slug=<?= urlencode($nextLesson['slug']) ?>" class="btn btn-next">
                                Siguiente curso →
                            </a>
                        <?php else: ?>
                            <a href="/" class="btn btn-next">Terminar y ver mapa →</a>
                        <?php endif; ?>
                    <?php else: ?>
                        <form method="post" action="/leccion/avanzar">
                            <input type="hidden" name="curso" value="<?= htmlspecialchars($lesson['course'] ?? 'php-fundamentos') ?>">
                            <input type="hidden" name="curso" value="<?= htmlspecialchars($courseSlug) ?>">
                        <input type="hidden" name="slug" value="<?= htmlspecialchars($lesson['slug']) ?>">
                            <?= \App\Http\Csrf::field() ?>
                            <button type="submit" class="btn btn-next">Siguiente paso →</button>
                        </form>
                    <?php endif; ?>

                <?php elseif ($stepType !== 'exercise'): ?>
                    <form method="post" action="/leccion/avanzar">
                        <input type="hidden" name="curso" value="<?= htmlspecialchars($courseSlug) ?>">
                        <input type="hidden" name="slug" value="<?= htmlspecialchars($lesson['slug']) ?>">
                        <?= \App\Http\Csrf::field() ?>
                        <button type="submit" class="btn">Entendido — siguiente →</button>
                    </form>
                <?php endif; ?>
            </div>
        </aside>

        <section class="mentor-stage">
            <?php if ($stepType === 'visual'): ?>
                <?php require __DIR__ . '/partials/visuals/' . basename((string) ($currentStep['visual'] ?? 'http-flow')) . '.php'; ?>

            <?php elseif ($stepType === 'show_file'): ?>
                <div class="file-card">
                    <div class="file-header">
                        <span class="file-icon">📄</span>
                        <code><?= htmlspecialchars($currentStep['file'] ?? '') ?></code>
                    </div>
                    <pre><code><?= htmlspecialchars($currentStep['code'] ?? '') ?></code></pre>
                    <p class="file-hint">Abre este archivo en Cursor y compáralo con lo que ves aquí.</p>
                </div>

            <?php elseif ($stepType === 'teach'): ?>
                <div class="teach-card">
                    <?php if (!empty($currentStep['code'])): ?>
                        <pre class="code-block"><code><?= htmlspecialchars($currentStep['code']) ?></code></pre>
                    <?php endif; ?>
                </div>

            <?php elseif ($stepType === 'live_demo'): ?>
                <div class="live-demo" data-demo-code="<?= htmlspecialchars($currentStep['demo_code'] ?? '') ?>" data-demo-language="<?= htmlspecialchars($currentStep['demo_language'] ?? 'php') ?>">
                    <div class="demo-split">
                        <div>
                            <h3>Código</h3>
                            <pre class="code-block"><code><?= htmlspecialchars($currentStep['demo_code'] ?? '') ?></code></pre>
                        </div>
                        <div>
                            <h3>Salida en vivo</h3>
                            <pre class="output-block" id="demo-output">Ejecutando...</pre>
                        </div>
                    </div>
                </div>

            <?php elseif ($stepType === 'pair'): ?>
                <div class="pair-card">
                    <h3>Pair programming — escribe línea a línea</h3>
                    <ol class="pair-lines">
                        <?php foreach (($currentStep['lines'] ?? []) as $i => $line): ?>
                            <li><code><?= htmlspecialchars($line) ?></code></li>
                        <?php endforeach; ?>
                    </ol>
                    <p class="pair-hint">Copia cada línea en el <a href="/laboratorio?lang=<?= ($lesson['course'] ?? '') === 'python-backend' ? 'python' : 'php' ?>">Laboratorio</a> y ejecuta. Cuando funcione, pulsa Siguiente.</p>
                </div>

            <?php elseif ($stepType === 'project'): ?>
                <?php $project = \App\LessonCatalog::project($lesson['slug']); ?>
                <?php $requiresCode = $project && !empty($project['validation']) && ($project['validation']['type'] ?? '') !== 'honor'; ?>
                <?php if ($project): ?>
                    <div class="project-card">
                        <?php if (!empty($_SESSION['project_error'])): ?>
                            <div class="alert error"><?= htmlspecialchars($_SESSION['project_error']) ?></div>
                            <?php unset($_SESSION['project_error']); ?>
                        <?php endif; ?>
                        <?php if ($projectCompleted): ?>
                            <div class="solved-banner">
                                <span class="solved-check">✓</span>
                                <div>
                                    <strong>Proyecto completado</strong>
                                    <p>+<?= (int) $project['reward_xp'] ?> XP ganados. Pulsa <em>Siguiente</em> para continuar.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <h3>🛠️ <?= htmlspecialchars($project['title']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <ol class="project-steps">
                            <?php foreach ($project['steps'] as $ps): ?>
                                <li><?= htmlspecialchars($ps) ?></li>
                            <?php endforeach; ?>
                        </ol>
                        <p class="project-xp">+<?= (int) $project['reward_xp'] ?> XP al completar</p>
                        <?php if (!$projectCompleted): ?>
                            <form method="post" action="/proyectos/completar" class="project-complete-form">
                                <?= \App\Http\Csrf::field() ?>
                                <input type="hidden" name="curso" value="<?= htmlspecialchars($lesson['course'] ?? 'php-fundamentos') ?>">
                            <input type="hidden" name="curso" value="<?= htmlspecialchars($courseSlug) ?>">
                        <input type="hidden" name="slug" value="<?= htmlspecialchars($lesson['slug']) ?>">
                                <input type="hidden" name="redirect" value="/leccion?curso=<?= urlencode($courseSlug) ?>&slug=<?= urlencode($lesson['slug']) ?>&step=<?= $stepIndex ?>">
                                <?php if ($requiresCode): ?>
                                    <label>Pega tu código del proyecto aquí para validarlo:</label>
                                    <textarea name="project_code" rows="8" class="code-input" required placeholder="Escribe el código que probaste en el Laboratorio"></textarea>
                                <?php endif; ?>
                                <button type="submit" class="btn btn-lg"><?= $requiresCode ? '▶ Validar proyecto' : '✓ Completé el proyecto' ?></button>
                            </form>
                        <?php endif; ?>
                        <a href="/laboratorio" class="btn btn-ghost">Abrir laboratorio</a>
                    </div>
                <?php endif; ?>

            <?php elseif ($stepType === 'exercise' && $currentExercise): ?>
                <div class="exercise-stage">
                    <?php if ($showNextAfterExercise): ?>
                        <div class="solved-banner">
                            <span class="solved-check">✓</span>
                            <div>
                                <strong>Ejercicio resuelto</strong>
                                <p>Pulsa <em>Siguiente</em> en el panel del mentor para continuar.</p>
                            </div>
                        </div>
                        <?php if (!empty($feedback['output'])): ?>
                            <div class="output-shown">
                                <span class="out-label">Tu salida</span>
                                <pre class="output-block"><?= htmlspecialchars((string) $feedback['output']) ?></pre>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <form method="post" action="/leccion" class="exercise-form" data-exercise-type="<?= htmlspecialchars((string) ($currentExercise['type'] ?? '')) ?>">
                        <input type="hidden" name="curso" value="<?= htmlspecialchars($courseSlug) ?>">
                        <input type="hidden" name="slug" value="<?= htmlspecialchars($lesson['slug']) ?>">
                        <input type="hidden" name="step_index" value="<?= $stepIndex ?>">
                        <?= \App\Http\Csrf::field() ?>

                        <p class="question"><?= render_markdownish($currentExercise['question']) ?></p>

                        <?php if (($currentExercise['type'] ?? '') === 'choice'): ?>
                            <?php foreach ($currentExercise['options'] as $option): ?>
                                <label class="choice">
                                    <input type="radio" name="answer" value="<?= htmlspecialchars($option) ?>" <?= $showNextAfterExercise ? 'disabled' : 'required' ?>>
                                    <?= htmlspecialchars($option) ?>
                                </label>
                            <?php endforeach; ?>
                        <?php elseif (($currentExercise['type'] ?? '') === 'js'): ?>
                            <?php if (!empty($currentExercise['hint']) && !$showNextAfterExercise): ?>
                                <p class="hint">💡 <?= render_markdownish($currentExercise['hint']) ?></p>
                            <?php endif; ?>
                            <textarea name="js_code" rows="8" class="code-input" data-js-runner placeholder="Escribe tu código JavaScript" <?= $showNextAfterExercise ? 'readonly' : '' ?>><?= htmlspecialchars($answer ?? ($currentExercise['starter'] ?? '')) ?></textarea>
                            <input type="hidden" name="answer" value="<?= htmlspecialchars($answer ?? '') ?>">
                            <div class="js-console" data-js-console hidden></div>
                        <?php elseif (($currentExercise['type'] ?? '') === 'sql'): ?>
                            <?php if (!empty($currentExercise['hint']) && !$showNextAfterExercise): ?>
                                <p class="hint">💡 <?= render_markdownish($currentExercise['hint']) ?></p>
                            <?php endif; ?>
                            <textarea name="answer" rows="8" class="code-input" placeholder="Escribe tu consulta SQL (SELECT...)" <?= $showNextAfterExercise ? 'readonly' : 'required' ?>><?= htmlspecialchars($answer ?? ($currentExercise['starter'] ?? '')) ?></textarea>
                        <?php else: ?>
                            <?php if (!empty($currentExercise['hint']) && !$showNextAfterExercise): ?>
                                <p class="hint">💡 <?= render_markdownish($currentExercise['hint']) ?></p>
                            <?php endif; ?>
                            <textarea name="answer" rows="8" class="code-input" placeholder="Escribe tu respuesta o código PHP" <?= $showNextAfterExercise ? 'readonly' : 'required' ?>><?= htmlspecialchars($answer ?? ($currentExercise['starter'] ?? '')) ?></textarea>
                        <?php endif; ?>

                        <?php if (!$showNextAfterExercise): ?>
                            <button type="submit" class="btn btn-lg">▶ Ejecutar y comprobar</button>
                        <?php endif; ?>
                    </form>
                </div>

            <?php elseif ($stepType === 'complete'): ?>
                <div class="complete-card">
                    <div class="trophy">🏆</div>
                    <h2>+100 XP — Módulo completado</h2>
                    <p>Desbloqueaste el siguiente nivel.</p>
                    <?php if ($nextLesson): ?>
                        <a href="/leccion?curso=<?= urlencode($courseSlug) ?>&slug=<?= urlencode($nextLesson['slug']) ?>" class="btn btn-lg btn-next">
                            Empezar: <?= htmlspecialchars($nextLesson['title']) ?> →
                        </a>
                    <?php else: ?>
                        <a href="/" class="btn btn-lg">Ver mapa de aprendizaje</a>
                    <?php endif; ?>
                </div>

            <?php else: ?>
                <div class="welcome-stage">
                    <div class="pulse-ring"></div>
                    <p class="stage-hint">Escucha al mentor → mira el panel → ejecuta cuando te toque.</p>
                </div>
            <?php endif; ?>
        </section>
    </div>
</div>

<section class="lesson-comments container" id="lesson-comments" data-entity="<?= htmlspecialchars($commentEntityId ?? '') ?>">
    <h2>Comentarios de la lección</h2>
    <div id="comments-list"></div>
    <form id="comment-form">
        <textarea id="comment-body" rows="2" placeholder="Pregunta o tip para otros aprendices…" required></textarea>
        <button type="submit" class="btn btn-sm">Comentar</button>
    </form>
</section>

<script>
document.querySelectorAll('.live-demo').forEach(el => {
    const code = el.dataset.demoCode;
    const lang = el.dataset.demoLanguage || 'php';
    const out = el.querySelector('#demo-output');
    if (!code || !out) return;

    if (lang === 'javascript') {
        const logs = [];
        const fakeConsole = {
            log: (...a) => logs.push(a.map(String).join(' ')),
            error: (...a) => logs.push(a.map(String).join(' ')),
            warn: (...a) => logs.push(a.map(String).join(' ')),
            info: (...a) => logs.push(a.map(String).join(' ')),
        };
        try {
            new Function('console', '"use strict";\n' + code)(fakeConsole);
            out.textContent = logs.join('\n') || '(sin salida)';
            out.classList.remove('error');
        } catch (err) {
            out.textContent = String(err && err.message ? err.message : err);
            out.classList.add('error');
        }
        return;
    }

    fetch('/api/run', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ code, language: lang })
    }).then(r => r.json()).then(data => {
        out.textContent = data.error || data.output || '(sin salida)';
        out.classList.toggle('error', !data.ok);
    }).catch(() => { out.textContent = '(no se pudo ejecutar)'; });
});

(function () {
    const wrap = document.getElementById('lesson-comments');
    if (!wrap) return;
    const id = wrap.dataset.entity;
    const list = document.getElementById('comments-list');
    const form = document.getElementById('comment-form');
    const load = async () => {
        try {
            const res = await fetch('/api/comments?type=lesson&id=' + encodeURIComponent(id));
            if (!res.ok) return;
            const data = await res.json();
            list.innerHTML = (data.comments || []).map(c =>
                `<div class="comment-item"><strong>${c.display_name}</strong>: ${c.body.replace(/</g,'&lt;')}<br><small>${c.created_at}</small></div>`
            ).join('') || '<p class="muted">Sé el primero en comentar.</p>';
        } catch {
            list.innerHTML = '<p class="muted">Comentarios no disponibles.</p>';
        }
    };
    form.addEventListener('submit', async e => {
        e.preventDefault();
        const body = document.getElementById('comment-body').value.trim();
        await fetch('/api/comments', { method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({ type:'lesson', id, body }) });
        document.getElementById('comment-body').value = '';
        load();
    });
    load();
})();
</script>
