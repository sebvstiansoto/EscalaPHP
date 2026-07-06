<section class="error-page">
    <h1><?= !empty($requirementsMissing) ? 'Requisitos pendientes' : 'Módulo bloqueado' ?></h1>
    <?php if (!empty($requirementsMissing)): ?>
        <p>Para acceder a este curso completa antes: <strong><?= htmlspecialchars(implode(', ', $requirementsMissing)) ?></strong>.</p>
    <?php else: ?>
        <p>Completa la lección anterior antes de abrir <strong><?= htmlspecialchars($lesson['title']) ?></strong>.</p>
    <?php endif; ?>
    <a class="btn" href="/">Ver catálogo</a>
</section>
