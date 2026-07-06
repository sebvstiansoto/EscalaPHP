<?php

declare(strict_types=1);

$name = htmlspecialchars($profile['display_name'] ?? 'Aprendiz');
$courseTitle = htmlspecialchars($course['title'] ?? 'Curso');
$courseSlug = $courseSlug ?? 'php-fundamentos';
?>

<section class="certificate-page">
    <?php if ($isGraduate): ?>
        <div class="cert-card graduate">
            <div class="cert-seal">🏆</div>
            <p class="cert-label">Certificado de Graduación</p>
            <h1><?= $courseTitle ?></h1>
            <p class="cert-name"><?= $name ?></p>
            <p class="cert-body"><?php if (!empty($isPath)): ?>Completó la ruta guiada con <strong><?= (int) $total ?> lecciones</strong> en <?= $courseTitle ?>.<?php else: ?>Completó los <strong><?= (int) $total ?> módulos</strong> de <?= $courseTitle ?> con mentor guiado, ejercicios ejecutables y mini-proyectos validados.<?php endif; ?></p>
            <p class="cert-date">Expedido el <?= htmlspecialchars($date) ?></p>
            <p class="cert-xp"><?= (int) ($profile['xp'] ?? 0) ?> XP · <?= (int) ($profile['streak'] ?? 0) ?> días de racha</p>
            <?php if (!empty($verifyCode)): ?>
                <p class="cert-verify">Código verificable: <strong><?= htmlspecialchars($verifyCode) ?></strong> — <a href="/verificar?code=<?= urlencode($verifyCode) ?>">Comprobar</a></p>
            <?php endif; ?>
            <div class="cert-actions">
                <?php if (!empty($isPath)): ?>
                    <a href="/certificado/pdf?ruta=<?= urlencode(str_replace('path:', '', $courseSlug)) ?>" class="btn btn-next" target="_blank">Descargar PDF →</a>
                    <a href="/rutas" class="btn btn-ghost">Volver a rutas</a>
                <?php else: ?>
                    <a href="/certificado/pdf?curso=<?= urlencode($courseSlug) ?>" class="btn btn-next" target="_blank">Descargar PDF →</a>
                    <a href="/curso?slug=<?= urlencode($courseSlug) ?>" class="btn btn-ghost">Volver al curso</a>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="cert-card locked">
            <div class="cert-seal">🔒</div>
            <h1>Certificado bloqueado</h1>
            <p>Completa <?php if (!empty($isPath)): ?>toda la ruta <strong><?= $courseTitle ?></strong><?php else: ?>todos los módulos de <strong><?= $courseTitle ?></strong><?php endif; ?> para obtener tu certificado.</p>
            <div class="progress-bar" style="margin: 1.5rem 0"><div class="progress-fill" style="width: <?= $percent ?>%"></div></div>
            <p><strong><?= $completed ?> / <?= $total ?></strong> módulos (<?= $percent ?>%)</p>
            <a href="<?= !empty($isPath) ? '/rutas' : '/curso?slug=' . urlencode($courseSlug) ?>" class="btn">Continuar estudiando</a>
        </div>
    <?php endif; ?>

    <div class="cert-course-picker" style="margin-top: 2rem">
        <p class="muted">Ver certificado de otro curso:</p>
        <a href="/certificado?curso=python-backend" class="btn btn-ghost">Python</a>
        <a href="/certificado?curso=php-fundamentos" class="btn btn-ghost">PHP desde cero</a>
    </div>
</section>
