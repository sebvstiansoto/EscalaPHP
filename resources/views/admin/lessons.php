<section class="admin-page">
    <header class="admin-header"><h1>CMS Lecciones</h1><a href="/admin" class="btn btn-ghost">← Dashboard</a></header>
    <p><a href="/admin/leccion/editar?curso=php-fundamentos&leccion=bienvenida" class="btn btn-sm">+ Nueva edición</a></p>
    <table class="admin-table">
        <tr><th>Curso</th><th>Lección</th><th>Estado</th><th>v</th><th></th></tr>
        <?php foreach ($overrides as $o): ?>
            <tr>
                <td><?= htmlspecialchars($o['course_slug']) ?></td>
                <td><?= htmlspecialchars($o['lesson_slug']) ?></td>
                <td><?= htmlspecialchars($o['status']) ?></td>
                <td><?= (int) $o['version'] ?></td>
                <td><a href="/admin/leccion/editar?curso=<?= urlencode($o['course_slug']) ?>&leccion=<?= urlencode($o['lesson_slug']) ?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h2>Crear override</h2>
    <?php foreach (array_slice($courses, 0, 3, true) as $slug => $c): ?>
        <p><a href="/admin/leccion/editar?curso=<?= urlencode($slug) ?>&leccion=bienvenida"><?= htmlspecialchars($c['title']) ?> → bienvenida</a></p>
    <?php endforeach; ?>
</section>
