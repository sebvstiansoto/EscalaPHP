<section class="auth-page">
    <h1>Código 2FA</h1>
    <?php if (!empty($error)): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="post" action="/login/2fa" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Código<input type="text" name="code" pattern="\d{6}" required autofocus></label>
        <button type="submit" class="btn">Verificar</button>
    </form>
</section>
