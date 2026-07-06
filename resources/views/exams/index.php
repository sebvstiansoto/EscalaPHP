<section class="exams-page">
    <h1>Exámenes finales</h1>
    <p class="lead">Demuestra lo aprendido. Necesitas ≥70% para aprobar.</p>
    <div class="course-grid">
        <?php foreach ($exams as $exam): ?>
            <article class="course-card">
                <h2><?= htmlspecialchars($exam['title']) ?></h2>
                <p><?= count($exam['questions'] ?? []) ?> preguntas · <?= (int) ($exam['time_minutes'] ?? 30) ?> min</p>
                <a href="/examenes/<?= urlencode($exam['slug']) ?>" class="btn">Empezar examen</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
