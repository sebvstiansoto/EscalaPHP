<section class="auth-page">
    <h1>Activar 2FA</h1>
    <p>Escanea este secreto en Google Authenticator:</p>
    <code style="display:block;padding:1rem;background:#111;color:#0f0;margin:1rem 0"><?= htmlspecialchars($setup['secret']) ?></code>
    <p class="muted"><small><?= htmlspecialchars($setup['uri']) ?></small></p>
    <?php if (!empty($error)): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="post" action="/perfil/2fa" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Código de 6 dígitos<input type="text" name="code" pattern="\d{6}" required></label>
        <button type="submit" class="btn">Activar</button>
    </form>
</section>
