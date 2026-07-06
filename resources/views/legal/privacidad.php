<?php declare(strict_types=1); ?>

<section class="legal-page">
    <h1>Política de privacidad</h1>
    <p class="lead">Última actualización: <?= date('Y-m-d') ?></p>

    <h2>Qué recopilamos</h2>
    <ul>
        <li><strong>Cuenta:</strong> email, nombre y contraseña (hash) si te registras.</li>
        <li><strong>Progreso:</strong> lecciones completadas, XP, rachas y preferencias de aprendizaje.</li>
        <li><strong>Técnico:</strong> logs de errores y sesión para mantener la plataforma estable.</li>
    </ul>

    <h2>Para qué lo usamos</h2>
    <ul>
        <li>Guardar tu progreso y personalizar la experiencia de aprendizaje.</li>
        <li>Enviar emails transaccionales (bienvenida, recordatorios de racha) si activaste cuenta.</li>
        <li>Mejorar la plataforma de forma agregada y anónima (analytics opcional).</li>
    </ul>

    <h2>Qué no hacemos</h2>
    <ul>
        <li>No vendemos tus datos personales.</li>
        <li>No compartimos información con terceros salvo proveedores técnicos (hosting, email).</li>
    </ul>

    <h2>Cookies y almacenamiento local</h2>
    <p>Usamos cookies de sesión para mantenerte identificado. El checklist del developer puede guardar progreso en tu navegador (localStorage).</p>

    <h2>Tus derechos</h2>
    <p>Puedes solicitar acceso, corrección o eliminación de tu cuenta escribiendo al administrador de la plataforma.</p>

    <h2>Contacto</h2>
    <p>Plataforma alojada en <a href="<?= htmlspecialchars($appUrl) ?>"><?= htmlspecialchars($appUrl) ?></a>.</p>

    <p><a href="/">← Volver al catálogo</a></p>
</section>
