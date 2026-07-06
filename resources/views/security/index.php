<section class="security-page">
    <h1>Seguridad de cuenta</h1>
    <?php if (!empty($message)): ?><p class="success"><?= htmlspecialchars($message) ?></p><?php endif; ?>
    <?php if (!empty($error)): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>

    <div class="security-grid">
        <article class="course-card">
            <h2>Email</h2>
            <p><?= !empty($emailVerified) ? '✓ Verificado' : '⚠ Pendiente — revisa tu bandeja' ?></p>
        </article>
        <article class="course-card">
            <h2>2FA</h2>
            <p><?= !empty($has2fa) ? '✓ Activo' : 'Desactivado' ?></p>
            <?php if (empty($has2fa)): ?>
                <a href="/perfil/2fa" class="btn btn-sm">Activar</a>
            <?php else: ?>
                <form method="post" action="/perfil/seguridad/2fa-off">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="text" name="code" placeholder="Código 2FA" pattern="\d{6}" required>
                    <button type="submit" class="btn btn-ghost btn-sm">Desactivar</button>
                </form>
            <?php endif; ?>
        </article>
    </div>

    <h2>Cambiar contraseña</h2>
    <form method="post" action="/perfil/seguridad/password" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Actual<input type="password" name="current" required></label>
        <label>Nueva<input type="password" name="new" minlength="6" required></label>
        <button type="submit" class="btn">Actualizar</button>
    </form>

    <h2>Sesiones activas</h2>
    <ul>
        <?php foreach ($sessions as $s): ?>
            <li>
                <?= htmlspecialchars($s['ip'] ?? '?') ?> — <?= htmlspecialchars($s['last_seen']) ?>
                <form method="post" action="/perfil/seguridad/revocar" style="display:inline">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="hidden" name="session_id" value="<?= (int) $s['id'] ?>">
                    <button type="submit" class="btn btn-ghost btn-sm">Revocar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
