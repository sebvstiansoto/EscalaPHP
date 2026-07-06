<section class="admin-page">
    <h1>Editar lección: <?= htmlspecialchars($lesson) ?></h1>
    <p class="muted">Base: <?= htmlspecialchars($base['title'] ?? '') ?></p>
    <form method="post" action="/admin/leccion" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <input type="hidden" name="course" value="<?= htmlspecialchars($course) ?>">
        <input type="hidden" name="lesson" value="<?= htmlspecialchars($lesson) ?>">
        <label>Título<input type="text" name="title" value="<?= htmlspecialchars($override['title'] ?? $base['title'] ?? '') ?>"></label>
        <label>Resumen<textarea name="summary" rows="3"><?= htmlspecialchars($override['summary'] ?? $base['summary'] ?? '') ?></textarea></label>
        <label>Ejercicios JSON<textarea name="exercises_json" rows="8" placeholder='[{"type":"code",...}]'><?= htmlspecialchars($override['exercises_json'] ?? '') ?></textarea></label>
        <label>Estado<select name="status">
            <option value="published">Publicado</option>
            <option value="draft">Borrador</option>
        </select></label>
        <button type="submit" class="btn">Guardar (v<?= (int) (($override['version'] ?? 0) + 1) ?>)</button>
        <a href="/leccion?curso=<?= urlencode($course) ?>&slug=<?= urlencode($lesson) ?>" class="btn btn-ghost" target="_blank">Vista previa</a>
    </form>
</section>
