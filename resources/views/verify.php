<section class="verify-page">
    <h1><?= \App\Support\Locale::t('verify_certificate', 'Verificar certificado') ?></h1>
    <form method="post" action="/verificar" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label>Código de verificación<input type="text" name="code" value="<?= htmlspecialchars($code) ?>" placeholder="ABC123..." required></label>
        <button type="submit" class="btn">Verificar</button>
    </form>
    <?php if ($result !== null): ?>
        <?php if (!empty($result['valid'])): ?>
            <div class="cert-card graduate" style="margin-top:2rem">
                <div class="cert-seal">✅</div>
                <h2>Certificado válido</h2>
                <p><strong><?= htmlspecialchars($result['name']) ?></strong></p>
                <p>Curso: <?= htmlspecialchars($result['course']) ?></p>
                <p class="muted">Código: <?= htmlspecialchars($result['code']) ?> · <?= htmlspecialchars($result['issued_at']) ?></p>
            </div>
        <?php else: ?>
            <p class="error" style="margin-top:1rem">Código no encontrado.</p>
        <?php endif; ?>
    <?php elseif ($code !== ''): ?>
        <p class="error" style="margin-top:1rem">Código no encontrado.</p>
    <?php endif; ?>
</section>
