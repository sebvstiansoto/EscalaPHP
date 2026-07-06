<!DOCTYPE html>
<html lang="<?= htmlspecialchars(\App\Support\Locale::current()) ?>" data-theme="<?= htmlspecialchars($_SESSION['theme'] ?? 'dark') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4f7cff">
    <meta name="description" content="Aprende PHP, Python, React, Docker y más con mentor interactivo.">
    <?php $canonical = rtrim((string) ($config['app_url'] ?? ''), '/'); ?>
    <?php if ($canonical !== ''): ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonical . ($_SERVER['REQUEST_URI'] ?? '/')) ?>">
    <?php endif; ?>
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" href="/assets/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/assets/icon-192.png">
    <title><?= htmlspecialchars($title ?? ($config['name'] ?? 'Escala')) ?></title>
    <link rel="stylesheet" href="/assets/style.css?v=16">
    <script src="/assets/app.js?v=9" defer></script>
    <?php if (!empty($config['analytics_domain'])): ?>
    <script defer data-domain="<?= htmlspecialchars((string) $config['analytics_domain']) ?>" src="https://plausible.io/js/script.js"></script>
    <?php endif; ?>
</head>
<body>
    <a href="#main" class="skip-link">Saltar al contenido</a>
    <header class="topbar">
        <div class="container topbar-inner">
            <a href="/" class="brand">
                <span class="brand-mark">E</span>
                <span class="brand-text">
                    <strong><?= htmlspecialchars($config['name'] ?? 'Escala') ?></strong>
                    <small><?= htmlspecialchars($config['tagline'] ?? '') ?></small>
                </span>
            </a>

            <button type="button" class="nav-toggle" id="nav-toggle" aria-label="Abrir menú">☰</button>

            <nav class="main-nav" id="main-nav">
                <a href="/">Cursos</a>
                <a href="/buscar">Buscar</a>
                <a href="/mentor">Mentor</a>
                <a href="/laboratorio">Lab</a>
                <a href="/developer">Guía</a>
                <a href="/proyectos">Proyectos</a>
                <a href="/ranking">Ranking</a>
                <a href="/precios">Pro</a>
                <a href="/dashboard">Panel</a>
                <a href="/examenes">Exámenes</a>
                <a href="/capstones">Capstones</a>
                <a href="/faq">FAQ</a>
                <a href="/rutas">Rutas</a>
                <a href="/entrevista">Entrevista</a>
                <a href="/equipos">Equipos</a>
                <a href="/perfil">Perfil</a>
            </nav>

            <form method="get" action="/buscar" class="header-search">
                <input type="search" name="q" placeholder="Buscar…" aria-label="Buscar cursos" minlength="2">
            </form>

            <div class="header-prefs">
                <form method="post" action="/ajustes/tema" class="inline-form">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="hidden" name="theme" value="<?= ($_SESSION['theme'] ?? 'dark') === 'dark' ? 'light' : 'dark' ?>">
                    <button type="submit" class="btn btn-ghost btn-sm" title="Tema"><?= ($_SESSION['theme'] ?? 'dark') === 'dark' ? '☀️' : '🌙' ?></button>
                </form>
                <form method="post" action="/ajustes/idioma" class="inline-form">
                    <?= \App\Http\Csrf::field() ?>
                    <input type="hidden" name="locale" value="<?= \App\Support\Locale::current() === 'es' ? 'en' : 'es' ?>">
                    <button type="submit" class="btn btn-ghost btn-sm"><?= \App\Support\Locale::current() === 'es' ? 'EN' : 'ES' ?></button>
                </form>
            </div>

            <div class="auth-area">
                <?php if (!empty($isPro)): ?><span class="pro-badge">PRO</span><?php endif; ?>
                <?php if (($notificationCount ?? 0) > 0): ?>
                    <a href="/perfil" class="notif-bell" title="Notificaciones">🔔 <?= (int) $notificationCount ?></a>
                <?php endif; ?>
                <?php if (!empty($user)): ?>
                    <span class="auth-email"><?= htmlspecialchars($user['email']) ?></span>
                    <form method="post" action="/logout" class="logout-form">
                        <?= \App\Http\Csrf::field() ?>
                        <button type="submit" class="btn btn-ghost btn-sm">Salir</button>
                    </form>
                <?php else: ?>
                    <a href="/login" class="btn btn-ghost btn-sm">Entrar</a>
                    <a href="/registro" class="btn btn-sm">Registro</a>
                <?php endif; ?>
            </div>
            <?php if (!empty($profile)): ?>
                <div class="profile-chip">
                    <span class="xp"><?= (int) ($profile['xp'] ?? 0) ?> XP</span>
                    <span class="streak">🔥 <?= (int) ($profile['streak'] ?? 0) ?></span>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <?php if (!empty($showStreakReminder) && (int) ($profile['streak'] ?? 0) > 0): ?>
        <div class="streak-banner container">
            🔥 Llevas <strong><?= (int) $profile['streak'] ?></strong> día(s) seguidos. ¡No pierdas la racha hoy!
        </div>
    <?php endif; ?>

    <main id="main" class="container">
        <?= $content ?? '' ?>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <p><strong>Escala</strong> — Aprende viendo, practica ejecutando, crece hasta escala real.</p>
            <p class="muted">
                <a href="/certificado">Certificado</a> ·
                <a href="/verificar">Verificar</a> ·
                <a href="/revision">Repaso</a> ·
                <a href="/onboarding">Onboarding</a> ·
                <a href="/glosario">Glosario</a> ·
                <a href="/developer">Guía developer</a> ·
                <a href="/precios">Planes</a> ·
                <a href="/privacidad">Privacidad</a> ·
                <a href="/health">Status</a>
            </p>
        </div>
    </footer>

    <div id="onboarding" class="onboarding hidden" role="dialog" aria-modal="true" aria-labelledby="onboarding-title">
        <div class="onboarding-card">
            <h2 id="onboarding-title">Bienvenido a Escala 👋</h2>
            <ol>
                <li>Elige un <strong>curso</strong> (PHP, Python, React, Docker…)</li>
                <li>El <strong>Modo Mentor</strong> te guía paso a paso</li>
                <li><strong>Ejecutas</strong> en ejercicios y laboratorio</li>
                <li>Pulsas <strong>Siguiente</strong> cuando aciertas</li>
            </ol>
            <button type="button" id="onboarding-close" class="btn btn-lg">Empezar ahora →</button>
        </div>
    </div>
</body>
</html>
