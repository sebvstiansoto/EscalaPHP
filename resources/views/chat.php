<section class="chat-page">
    <h1>Pregunta al mentor IA</h1>
    <p class="lead">Modo contextual con historial. Elige cómo quieres que te ayude.</p>

    <div class="chat-modes">
        <label>Modo <select id="chat-mode">
            <option value="default">Normal</option>
            <option value="junior">Explícame como junior</option>
            <option value="hint">Solo pista</option>
            <option value="quiz">Hazme preguntas</option>
            <option value="review">Revisa mi código</option>
        </select></label>
        <label>Código (opcional)<textarea id="chat-code" rows="3" class="code-input" placeholder="Pega código para revisión"></textarea></label>
    </div>

    <div id="chat-messages" class="chat-messages">
        <div class="chat-msg mentor"><strong>Mentor:</strong> Hola — pregúntame sobre PHP, Python, React, Docker…</div>
    </div>

    <form id="chat-form" class="chat-form">
        <input type="text" id="chat-input" placeholder="Tu pregunta…" autocomplete="off" required>
        <button type="submit" class="btn">Enviar</button>
    </form>
    <p class="muted"><small id="chat-source"></small></p>
</section>

<script>
(function () {
    const form = document.getElementById('chat-form');
    const input = document.getElementById('chat-input');
    const box = document.getElementById('chat-messages');
    const mode = document.getElementById('chat-mode');
    const code = document.getElementById('chat-code');
    const source = document.getElementById('chat-source');
    const params = new URLSearchParams(location.search);

    form.addEventListener('submit', async e => {
        e.preventDefault();
        const q = input.value.trim();
        if (!q) return;
        box.innerHTML += `<div class="chat-msg user"><strong>Tú:</strong> ${q.replace(/</g,'&lt;')}</div>`;
        input.value = '';
        const res = await fetch('/api/chat', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                question: q,
                mode: mode.value,
                code: code.value,
                course: params.get('curso'),
                lesson: params.get('slug'),
            })
        });
        const data = await res.json();
        const ans = (data.answer || '').replace(/</g,'&lt;').replace(/\n/g,'<br>');
        box.innerHTML += `<div class="chat-msg mentor"><strong>Mentor:</strong> ${ans}</div>`;
        source.textContent = data.source === 'ai' ? '🤖 IA' : '📚 Reglas locales';
        box.scrollTop = box.scrollHeight;
    });
})();
</script>
