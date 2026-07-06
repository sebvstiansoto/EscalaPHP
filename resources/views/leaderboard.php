<?php

declare(strict_types=1);
$name = htmlspecialchars($profile['display_name'] ?? 'Aprendiz');
?>

<section class="leaderboard-page">
    <h1>Ranking de aprendices</h1>
    <p class="lead">Top XP en EscalaPHP. Tú: <strong><?= $name ?></strong> con <?= (int) ($profile['xp'] ?? 0) ?> XP.</p>

    <ol class="leaderboard-list">
        <?php foreach ($leaders as $i => $leader): ?>
            <li class="leader-row">
                <span class="rank">#<?= $i + 1 ?></span>
                <span class="leader-name"><?= htmlspecialchars($leader['display_name']) ?></span>
                <span class="leader-xp"><?= (int) $leader['xp'] ?> XP</span>
                <span class="leader-streak">🔥 <?= (int) $leader['streak'] ?></span>
            </li>
        <?php endforeach; ?>
        <?php if ($leaders === []): ?>
            <li>Sé el primero en el ranking — completa lecciones y gana XP.</li>
        <?php endif; ?>
    </ol>
</section>
