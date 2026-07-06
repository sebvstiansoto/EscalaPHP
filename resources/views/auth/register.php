<?php

declare(strict_types=1);

use App\Http\Csrf;
require_once __DIR__ . '/../helpers.php';
?>

<section class="auth-page">
    <h1>Crear cuenta</h1>
    <p class="lead">Tu progreso, XP y logros se guardan para siempre.</p>

    <?php if (!empty($error)): ?>
        <div class="alert error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" action="/registro" class="auth-form">
        <?= Csrf::field() ?>
        <label>Nombre<input type="text" name="name" required maxlength="40" autocomplete="name"></label>
        <label>Email<input type="email" name="email" required autocomplete="email"></label>
        <label>Contraseña (mín. 6)<input type="password" name="password" required minlength="6" autocomplete="new-password"></label>
        <button type="submit" class="btn btn-lg">Crear cuenta</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="/login">Inicia sesión</a></p>
</section>
