<section class="auth-page">
    <h1>Recuperar contraseña</h1>
    <?php if (!empty($message)): ?><p class="success"><?= htmlspecialchars($message) ?></p><?php endif; ?>
    <?php if (!empty($error)): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="post" action="/recuperar" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Email<input type="email" name="email" required></label>
        <button type="submit" class="btn">Enviar enlace</button>
    </form>
    <p><a href="/login">Volver al login</a></p>
</section>
