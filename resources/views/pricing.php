<section class="pricing-page">
    <h1>Elige tu plan</h1>
    <p class="lead">Empieza gratis. Pasa a Pro cuando quieras desbloquear todo el catálogo.</p>

    <div class="pricing-grid">
        <article class="pricing-card <?= ($currentPlan ?? 'free') === 'free' ? 'current' : '' ?>">
            <h2>Free</h2>
            <p class="price">$0<span>/mes</span></p>
            <ul>
                <li>PHP fundamentos</li>
                <li>HTML, CSS y JavaScript</li>
                <li>Git & GitHub</li>
                <li>Laboratorio básico</li>
            </ul>
            <?php if (($currentPlan ?? 'free') === 'free'): ?>
                <span class="tag-current">Tu plan actual</span>
            <?php endif; ?>
        </article>

        <article class="pricing-card featured <?= ($currentPlan ?? '') === 'pro' ? 'current' : '' ?>">
            <span class="pricing-badge">Recomendado</span>
            <h2>Pro</h2>
            <p class="price">$9.99<span>/mes</span></p>
            <ul>
                <li>Los 11 cursos completos</li>
                <li>Python, React, Astro, Docker, K8s</li>
                <li>Certificados por curso</li>
                <li>Proyectos con validación real</li>
            </ul>
            <?php if (($currentPlan ?? '') === 'pro'): ?>
                <span class="tag-current">Tu plan actual</span>
            <?php else: ?>
                <form method="post" action="/facturacion/checkout">
                    <?= \App\Http\Csrf::field() ?>
                    <button type="submit" class="btn btn-lg">Activar Pro →</button>
                </form>
            <?php endif; ?>
        </article>
    </div>
</section>
