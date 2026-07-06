<section class="admin-page">
    <header class="admin-header"><h1>CMS — Cursos</h1><a href="/admin" class="btn btn-ghost">← Dashboard</a></header>
    <?php foreach ($courses as $slug => $course): ?>
        <form method="post" action="/admin/cursos" class="admin-course-form" style="margin-bottom:1.5rem;padding:1rem;border:1px solid #333;border-radius:8px">
            <?= \App\Http\Csrf::field() ?>
            <input type="hidden" name="slug" value="<?= htmlspecialchars($slug) ?>">
            <h3><?= htmlspecialchars($slug) ?></h3>
            <label>Título<input type="text" name="title" value="<?= htmlspecialchars($course['title'] ?? '') ?>"></label>
            <label>Estado
                <select name="status">
                    <option value="available" <?= ($course['status'] ?? '') === 'available' ? 'selected' : '' ?>>Disponible</option>
                    <option value="coming_soon" <?= ($course['status'] ?? '') === 'coming_soon' ? 'selected' : '' ?>>Próximamente</option>
                </select>
            </label>
            <label><input type="checkbox" name="featured" value="1" <?= !empty($course['featured']) ? 'checked' : '' ?>> Destacado</label>
            <button type="submit" class="btn btn-sm">Guardar override</button>
        </form>
    <?php endforeach; ?>
</section>
