<section class="exam-page">
    <h1><?= htmlspecialchars($exam['title']) ?></h1>
    <?php
        $minutes = (int) ($exam['time_minutes'] ?? 30);
        $isSimulation = !empty($exam['simulation']);
    ?>
    <p class="muted">
        <?= count($exam['questions'] ?? []) ?> preguntas · <?= $minutes ?> min
        <?php if ($isSimulation): ?> · <strong>Modo simulacro</strong><?php endif; ?>
    </p>
    <?php if (!empty($result)): ?>
        <div class="platform-banner <?= !empty($result['passed']) ? '' : 'error' ?>">
            Resultado: <?= (int) ($result['score'] ?? 0) ?>/<?= (int) ($result['max'] ?? 0) ?>
            <?= !empty($result['passed']) ? ' — ¡APROBADO!' : ' — Repasa y vuelve a intentar' ?>
            <?php if (!empty($result['timed_out'])): ?> (tiempo agotado)<?php endif; ?>
        </div>
    <?php else: ?>
        <div id="exam-timer" class="platform-banner" style="font-variant-numeric:tabular-nums">
            ⏱️ Tiempo restante: <span id="exam-timer-value"><?= $minutes ?>:00</span>
        </div>
    <?php endif; ?>
    <form method="post" action="/examenes" class="auth-form" id="exam-form">
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
    <?php if (empty($result)): ?>
    <script>
    (function () {
        var totalSeconds = <?= $minutes * 60 ?>;
        var el = document.getElementById('exam-timer-value');
        var form = document.getElementById('exam-form');
        var tick = setInterval(function () {
            totalSeconds--;
            if (totalSeconds <= 0) {
                clearInterval(tick);
                if (form) form.submit();
                return;
            }
            var m = Math.floor(totalSeconds / 60);
            var s = totalSeconds % 60;
            if (el) el.textContent = m + ':' + String(s).padStart(2, '0');
            if (totalSeconds <= 60 && el) el.parentElement.style.background = '#fff3cd';
        }, 1000);
    })();
    </script>
    <?php endif; ?>
</section>
