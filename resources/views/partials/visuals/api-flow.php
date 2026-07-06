<div class="visual api-flow">
    <div class="api-diagram">
        <div class="api-node app">📱 App móvil</div>
        <div class="api-arrow">GET /api/lecciones →</div>
        <div class="api-node server">⚙️ Tu API PHP</div>
        <div class="api-arrow">→ JSON</div>
        <div class="api-node app">📱 Muestra datos</div>
    </div>
    <pre class="api-json">{"leccion": "cache", "completada": true, "xp": 100}</pre>
    <p class="visual-caption">EscalaPHP ya tiene /api/run — una API REST real devolviendo JSON.</p>
</div>
