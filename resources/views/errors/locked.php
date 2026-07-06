<section class="error-page">
    <h1><?= !empty($requirementsMissing) ? 'Requisitos pendientes' : 'Módulo bloqueado' ?></h1>
    <?php if (!empty($requirementsMissing)): ?>
        <p>Para acceder a este curso completa antes: <strong><?= htmlspecialchars(implode(', ', $requirementsMissing)) ?></strong>.</p>
    <?php else: ?>
        <p>Completa la lección anterior antes de abrir <strong><?= htmlspecialchars($lesson['title']) ?></strong>.</p>
        <?php if (!empty($previousLesson)): ?>
            <p>Termina todos los ejercicios de <strong><?= htmlspecialchars($previousLesson['title']) ?></strong> hasta ver la pantalla de celebración del mentor.</p>
            <a class="btn" href="/leccion?curso=<?= urlencode((string) ($courseSlug ?? $lesson['course'] ?? 'php-fundamentos')) ?>&slug=<?= urlencode((string) $previousLesson['slug']) ?>">Volver a <?= htmlspecialchars($previousLesson['title']) ?></a>
        <?php endif; ?>
    <?php endif; ?>
    <a class="btn btn-ghost" href="/curso/<?= urlencode((string) ($courseSlug ?? $lesson['course'] ?? 'php-fundamentos')) ?>">Ver curso</a>
    <a class="btn btn-ghost" href="/">Ver catálogo</a>
</section>
