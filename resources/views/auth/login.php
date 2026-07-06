<?php

declare(strict_types=1);

use App\Http\Csrf;
require_once __DIR__ . '/../helpers.php';
?>

<section class="auth-page">
    <h1>Iniciar sesión</h1>
    <p class="lead">Guarda tu progreso en cualquier dispositivo.</p>

    <?php if (!empty($error)): ?>
        <div class="alert error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" action="/login" class="auth-form">
        <?= Csrf::field() ?>
        <label>Email<input type="email" name="email" required autocomplete="email"></label>
        <label>Contraseña<input type="password" name="password" required autocomplete="current-password"></label>
        <button type="submit" class="btn btn-lg">Entrar</button>
    </form>
    <p><a href="/recuperar">¿Olvidaste tu contraseña?</a></p>
    <p><a href="/oauth/github" class="btn btn-ghost">Entrar con GitHub</a></p>
    <p><a href="/oauth/google" class="btn btn-ghost">Entrar con Google</a></p>
    <p>¿No tienes cuenta? <a href="/registro">Regístrate gratis</a></p>
</section>
