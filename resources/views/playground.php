<section class="playground-page">

    <header class="playground-header">

        <h1>Laboratorio de código</h1>

        <p class="lead">Elige lenguaje, escribe código, ejecuta al instante.</p>

    </header>



    <div class="lab-lang-picker">

        <label>Lenguaje

            <select id="lab-lang">

                <option value="php">PHP</option>

                <option value="python">Python</option>

                <option value="javascript">JavaScript</option>

            </select>

        </label>

    </div>



    <div class="playground-workspace">
        <aside class="code-history-panel" id="code-history"><h3>Historial</h3><ul id="history-list"></ul></aside>
        <div class="editor-pane">

            <label for="lab-code">Tu código</label>

            <textarea id="lab-code" spellcheck="false">print('Hola desde Python')</textarea>

        </div>

        <div class="output-pane">

            <label>Salida</label>

            <pre id="lab-output" class="output-block">Presiona Ejecutar ▶</pre>

        </div>

    </div>



    <div class="playground-actions">

        <button type="button" id="lab-run" class="btn btn-lg">▶ Ejecutar</button>

        <button type="button" id="lab-clear" class="btn btn-ghost">Limpiar</button>

    </div>



    <div class="playground-snippets" id="snippets-php">

        <h3>Ejemplos PHP</h3>

        <div class="snippet-list">

            <button type="button" class="snippet" data-code="echo 'Hola mundo';">Hola mundo</button>

            <button type="button" class="snippet" data-code="$a = 10;&#10;$b = 20;&#10;echo $a + $b;">Suma</button>

        </div>

    </div>

    <div class="playground-snippets hidden" id="snippets-javascript">

        <h3>Ejemplos JavaScript</h3>

        <div class="snippet-list">

            <button type="button" class="snippet" data-code="console.log('Hola mundo')">Hola mundo</button>

            <button type="button" class="snippet" data-code="const nums = [1, 2, 3];&#10;console.log(nums.map(n =&gt; n * 2))">map</button>

        </div>

    </div>

</section>



<script>

(function () {

    const codeEl = document.getElementById('lab-code');

    const outEl = document.getElementById('lab-output');

    const langEl = document.getElementById('lab-lang');

    const snippetsPhp = document.getElementById('snippets-php');

    const snippetsPy = document.getElementById('snippets-python');

    const snippetsJs = document.getElementById('snippets-javascript');



    const defaults = {

        php: "echo 'Hola desde PHP';",

        python: "print('Hola desde Python')",

        javascript: "console.log('Hola desde JavaScript')"

    };



    langEl.addEventListener('change', () => {

        const lang = langEl.value;

        codeEl.value = defaults[lang] || '';

        snippetsPhp.classList.toggle('hidden', lang !== 'php');

        snippetsPy.classList.toggle('hidden', lang !== 'python');

        snippetsJs.classList.toggle('hidden', lang !== 'javascript');

    });

    langEl.dispatchEvent(new Event('change'));

    const params = new URLSearchParams(window.location.search);
    if (['php', 'python', 'javascript'].includes(params.get('lang'))) {
        langEl.value = params.get('lang');
        langEl.dispatchEvent(new Event('change'));
    }

    const run = async () => {

        outEl.textContent = 'Ejecutando...';

        outEl.classList.remove('error');

        if (langEl.value === 'javascript') {

            const logs = [];

            const fakeConsole = {

                log: (...a) => logs.push(a.map(String).join(' ')),

                error: (...a) => logs.push(a.map(String).join(' ')),

                warn: (...a) => logs.push(a.map(String).join(' ')),

                info: (...a) => logs.push(a.map(String).join(' ')),

            };

            try {

                new Function('console', '"use strict";\n' + codeEl.value)(fakeConsole);

                outEl.textContent = logs.join('\n') || '(sin salida)';
                fetch('/api/code/save', { method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({ code: codeEl.value, language: 'javascript', output: outEl.textContent }) });
                loadHistory();
            } catch (err) {

                outEl.textContent = String(err && err.message ? err.message : err);

                outEl.classList.add('error');

            }

            return;

        }

        const res = await fetch('/api/run', {

            method: 'POST',

            headers: { 'Content-Type': 'application/json' },

            body: JSON.stringify({ code: codeEl.value, language: langEl.value })

        });

        const data = await res.json();

        outEl.textContent = data.error || data.output || '(sin salida)';

        outEl.classList.toggle('error', !data.ok);
        fetch('/api/code/save', { method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({ code: codeEl.value, language: langEl.value, output: outEl.textContent }) });
        loadHistory();
    };

    document.getElementById('lab-run').addEventListener('click', run);

    document.getElementById('lab-clear').addEventListener('click', () => {

        codeEl.value = '';

        outEl.textContent = 'Presiona Ejecutar ▶';

    });

    document.querySelectorAll('.snippet').forEach(btn => {

        btn.addEventListener('click', () => {

            codeEl.value = btn.dataset.code.replace(/&#10;/g, '\n');

            run();

        });

    });

    codeEl.addEventListener('keydown', e => {
        if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') run();
        if (e.key === 'Tab') { e.preventDefault(); const s = codeEl.selectionStart; codeEl.value = codeEl.value.slice(0,s) + '    ' + codeEl.value.slice(s); codeEl.selectionStart = codeEl.selectionEnd = s + 4; }
    });

    const loadHistory = async () => {
        const res = await fetch('/api/code/history');
        const data = await res.json();
        const ul = document.getElementById('history-list');
        if (!ul) return;
        ul.innerHTML = (data.items || []).map(i => `<li><button type="button" data-code="${encodeURIComponent(i.code)}">${i.language} · ${i.created_at.slice(0,16)}</button></li>`).join('');
        ul.querySelectorAll('button').forEach(b => b.addEventListener('click', () => { codeEl.value = decodeURIComponent(b.dataset.code); }));
    };
    loadHistory();
    setInterval(() => localStorage.setItem('escala_lab_autosave', codeEl.value), 5000);
    const saved = localStorage.getItem('escala_lab_autosave');
    if (saved && !params.get('lang')) codeEl.value = saved;
})();

</script>


