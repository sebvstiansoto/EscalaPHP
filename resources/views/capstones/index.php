<section class="capstones-page">
    <h1>Capstones</h1>
    <p class="lead">Proyectos integradores con evaluación por rúbrica automática.</p>
    <?php foreach ($capstones as $c): ?>
        <article class="course-card" style="margin-bottom:1rem">
            <h2><?= htmlspecialchars($c['title']) ?></h2>
            <p><?= htmlspecialchars($c['description']) ?></p>
            <a href="/capstones/<?= urlencode($c['slug']) ?>" class="btn">Ver capstone</a>
        </article>
    <?php endforeach; ?>
</section>
