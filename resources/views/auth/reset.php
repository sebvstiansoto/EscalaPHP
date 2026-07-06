<section class="auth-page">
    <h1>Nueva contraseña</h1>
    <?php if (!empty($error)): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="post" action="/recuperar/reset" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
        <label>Nueva contraseña<input type="password" name="password" minlength="6" required></label>
        <button type="submit" class="btn">Guardar</button>
    </form>
</section>
