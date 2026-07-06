<section class="admin-login">
    <h1>Panel admin</h1>
    <?php if (!empty($error)): ?>
        <p class="error-msg"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" action="/admin/login">
        <?= \App\Http\Csrf::field() ?>
        <label>Contraseña admin
            <input type="password" name="password" required autofocus>
        </label>
        <button type="submit" class="btn btn-lg">Entrar</button>
    </form>
</section>
