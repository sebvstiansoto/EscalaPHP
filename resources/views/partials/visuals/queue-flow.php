<div class="visual queue-flow">
    <div class="queue-diagram">
        <div class="queue-row">
            <div class="q-box user">Usuario registra</div>
            <div class="q-arrow">→</div>
            <div class="q-box http">HTTP responde ✓</div>
        </div>
        <div class="queue-row down">
            <div class="q-box queue">Cola: email, PDF, analytics</div>
            <div class="q-arrow">→</div>
            <div class="q-box worker">Worker procesa 🔄</div>
        </div>
    </div>
    <p class="visual-caption">El usuario nunca espera. El trabajo pesado corre en segundo plano.</p>
</div>
