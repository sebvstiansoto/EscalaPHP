<section class="settings-page">
    <h1>API Keys</h1>
    <p class="muted">Usa <code>Authorization: Bearer esk_...</code> en <code>/api/v1/*</code></p>
    <?php if (!empty($newKey)): ?>
        <div class="platform-banner"><strong>Nueva key (cópiala ahora):</strong> <code><?= htmlspecialchars($newKey) ?></code></div>
    <?php endif; ?>
    <form method="post" action="/perfil/api" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Nombre<input type="text" name="name" value="Mi integración" required></label>
        <button type="submit" class="btn">Crear API key</button>
    </form>
    <ul>
        <?php foreach ($keys as $key): ?>
            <li>
                <?= htmlspecialchars($key['name']) ?> — <?= htmlspecialchars($key['created_at']) ?>
                <form method="post" action="/perfil/api/revocar" style="display:inline">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="hidden" name="key_id" value="<?= (int) $key['id'] ?>">
                    <button type="submit" class="btn btn-ghost btn-sm">Revocar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
