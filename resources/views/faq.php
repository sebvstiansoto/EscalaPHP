<section class="faq-page">
    <h1>FAQ</h1>
    <form method="get"><select name="curso" onchange="this.form.submit()">
        <?php foreach ($courses as $slug => $c): ?>
            <option value="<?= htmlspecialchars($slug) ?>" <?= $course === $slug ? 'selected' : '' ?>><?= htmlspecialchars($c['title']) ?></option>
        <?php endforeach; ?>
    </select></form>
    <dl>
        <?php foreach ($items as $item): ?>
            <dt><strong><?= htmlspecialchars($item['q']) ?></strong></dt>
            <dd><?= htmlspecialchars($item['a']) ?></dd>
        <?php endforeach; ?>
    </dl>
</section>
