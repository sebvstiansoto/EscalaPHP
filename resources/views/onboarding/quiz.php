<section class="onboarding-page">
    <h1>¿Por dónde quieres empezar?</h1>
    <form method="post" action="/onboarding" class="auth-form">
        <?= \App\Http\Csrf::field() ?>
        <label><input type="radio" name="goal" value="backend" checked> Backend (PHP, Python, Docker)</label>
        <label><input type="radio" name="goal" value="frontend"> Frontend (HTML, React)</label>
        <label><input type="radio" name="goal" value="devops"> DevOps (Git, K8s, CI/CD)</label>
        <label><input type="radio" name="goal" value="php"> PHP para empresas</label>
        <button type="submit" class="btn btn-xl">Ver mi ruta →</button>
    </form>
</section>
