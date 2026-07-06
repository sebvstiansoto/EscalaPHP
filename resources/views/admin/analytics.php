<section class="admin-page">
    <header class="admin-header"><h1>Analytics</h1><a href="/admin" class="btn btn-ghost">← Dashboard</a></header>
    <div class="admin-stats">
        <?php foreach ($stats as $key => $val): ?>
            <div class="stat-card"><strong><?= (int) $val ?></strong><span><?= htmlspecialchars($key) ?></span></div>
        <?php endforeach; ?>
    </div>
    <h2>Actividad (7 días)</h2>
    <ul>
        <?php foreach ($chart as $row): ?>
            <li><?= htmlspecialchars($row['day']) ?>: <?= (int) $row['count'] ?> lecciones</li>
        <?php endforeach; ?>
    </ul>
    <h2>Top cursos</h2>
    <ul>
        <?php foreach ($topCourses as $row): ?>
            <li><?= htmlspecialchars($row['course']) ?>: <?= (int) $row['count'] ?></li>
        <?php endforeach; ?>
    </ul>
</section>
