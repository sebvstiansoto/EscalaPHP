<section class="admin-page">
    <header class="admin-header">
        <h1>Dashboard</h1>
        <form method="post" action="/admin/logout">
            <?= \App\Http\Csrf::field() ?>
            <button type="submit" class="btn btn-ghost btn-sm">Salir</button>
        </form>
    </header>

    <div class="admin-stats">
        <div class="stat-card"><strong><?= (int) $stats['users'] ?></strong><span>Usuarios</span></div>
        <div class="stat-card"><strong><?= (int) $stats['learners'] ?></strong><span>Aprendices</span></div>
        <div class="stat-card"><strong><?= (int) $stats['progress_rows'] ?></strong><span>Lecciones hechas</span></div>
        <div class="stat-card"><strong><?= (int) $stats['projects_done'] ?></strong><span>Proyectos</span></div>
        <div class="stat-card"><strong><?= (int) $stats['courses'] ?></strong><span>Cursos activos</span></div>
        <div class="stat-card"><strong><?= (int) $stats['pro_users'] ?></strong><span>Usuarios Pro</span></div>
        <div class="stat-card"><strong><?= (int) $stats['emails_sent'] ?></strong><span>Emails enviados</span></div>
    </div>

    <nav class="admin-nav">
        <a href="/admin/usuarios" class="btn">Usuarios</a>
        <a href="/admin/cursos" class="btn">CMS Cursos</a>
        <a href="/admin/lecciones" class="btn">CMS Lecciones</a>
        <a href="/admin/analytics" class="btn">Analytics</a>
        <a href="/admin/logs" class="btn btn-ghost">Logs</a>
        <form method="post" action="/admin/backup" style="display:inline"><?= \App\Http\Csrf::field() ?><button class="btn btn-ghost btn-sm">Backup DB</button></form>
        <form method="post" action="/admin/jobs" style="display:inline"><?= \App\Http\Csrf::field() ?><button class="btn btn-ghost btn-sm">Run jobs</button></form>
        <a href="/" class="btn btn-ghost">Ver sitio</a>
    </nav>
</section>
