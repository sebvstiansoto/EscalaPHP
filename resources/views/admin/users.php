<section class="admin-page">
    <header class="admin-header">
        <h1>Usuarios</h1>
        <a href="/admin" class="btn btn-ghost btn-sm">← Dashboard</a>
    </header>

    <table class="admin-table">
        <thead>
            <tr><th>ID</th><th>Email</th><th>Nombre</th><th>Plan</th><th>XP</th><th>Racha</th><th>Acción</th></tr>
        </thead>
        <tbody>
            <?php foreach ($users as $u): ?>
                <tr>
                    <td><?= (int) $u['id'] ?></td>
                    <td><?= htmlspecialchars((string) $u['email']) ?></td>
                    <td><?= htmlspecialchars((string) $u['display_name']) ?></td>
                    <td><span class="tag-plan"><?= htmlspecialchars((string) ($u['plan'] ?? 'free')) ?></span></td>
                    <td><?= (int) ($u['xp'] ?? 0) ?></td>
                    <td><?= (int) ($u['streak'] ?? 0) ?></td>
                    <td>
                        <form method="post" action="/admin/usuarios/plan" class="inline-form">
                            <?= \App\Http\Csrf::field() ?>
                            <input type="hidden" name="user_id" value="<?= (int) $u['id'] ?>">
                            <select name="plan" onchange="this.form.submit()">
                                <option value="free" <?= ($u['plan'] ?? '') === 'free' ? 'selected' : '' ?>>free</option>
                                <option value="pro" <?= ($u['plan'] ?? '') === 'pro' ? 'selected' : '' ?>>pro</option>
                            </select>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
