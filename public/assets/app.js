document.addEventListener('DOMContentLoaded', () => {
    const nameInput = document.querySelector('.name-form input[name="display_name"]');
    const nameForm = document.querySelector('.name-form');
    if (nameInput && nameForm) {
        nameInput.addEventListener('blur', () => nameForm.submit());
        nameInput.addEventListener('keydown', e => {
            if (e.key === 'Enter') { e.preventDefault(); nameForm.submit(); }
        });
    }

    if (document.querySelector('.complete-card, .cert-card.graduate')) {
        celebrate();
    }

    const onboarding = document.getElementById('onboarding');
    const closeBtn = document.getElementById('onboarding-close');
    if (onboarding && !localStorage.getItem('escala_onboarding_done')) {
        onboarding.classList.remove('hidden');
    }
    closeBtn?.addEventListener('click', () => {
        onboarding?.classList.add('hidden');
        localStorage.setItem('escala_onboarding_done', '1');
    });

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js').catch(() => {});
    }

    const navToggle = document.getElementById('nav-toggle');
    const mainNav = document.getElementById('main-nav');
    navToggle?.addEventListener('click', () => mainNav?.classList.toggle('open'));

    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        if (!localStorage.getItem('escala_install_dismissed')) {
            const bar = document.createElement('div');
            bar.className = 'install-bar container';
            bar.innerHTML = '<span>Instala Escala como app</span><button type="button" class="btn btn-sm">Instalar</button>';
            document.body.prepend(bar);
            bar.querySelector('button')?.addEventListener('click', async () => {
                deferredPrompt?.prompt();
                bar.remove();
            });
            bar.querySelector('span')?.addEventListener('click', () => {
                localStorage.setItem('escala_install_dismissed', '1');
                bar.remove();
            });
        }
    });
});

function celebrate() {
    const colors = ['#4f7cff', '#2dd4a8', '#a78bfa', '#ffb24a', '#ff6b8a'];
    for (let i = 0; i < 40; i++) {
        const el = document.createElement('div');
        el.className = 'confetti';
        el.style.cssText = `
            position:fixed; z-index:9999; pointer-events:none;
            width:8px; height:8px; border-radius:2px;
            background:${colors[i % colors.length]};
            left:${Math.random() * 100}vw; top:-10px;
            animation:confetti-fall ${2 + Math.random() * 2}s linear forwards;
            animation-delay:${Math.random() * 0.5}s;
        `;
        document.body.appendChild(el);
        setTimeout(() => el.remove(), 4000);
    }
}

const style = document.createElement('style');
style.textContent = '@keyframes confetti-fall { to { transform: translateY(100vh) rotate(720deg); opacity: 0; } }';
document.head.appendChild(style);

// Ejecuta JavaScript del alumno EN el navegador y captura console.log.
// La salida se envía en el campo oculto `answer` para que el servidor valide.
function runUserJs(code) {
    const logs = [];
    const fakeConsole = {
        log: (...args) => logs.push(args.map(String).join(' ')),
        error: (...args) => logs.push(args.map(String).join(' ')),
        warn: (...args) => logs.push(args.map(String).join(' ')),
        info: (...args) => logs.push(args.map(String).join(' ')),
    };
    try {
        const fn = new Function('console', '"use strict";\n' + code);
        fn(fakeConsole);
        return { ok: true, output: logs.join('\n') };
    } catch (err) {
        return { ok: false, output: String(err && err.message ? err.message : err) };
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('form[data-exercise-type="js"]').forEach((form) => {
        const textarea = form.querySelector('[data-js-runner]');
        const hidden = form.querySelector('input[name="answer"]');
        const consoleBox = form.querySelector('[data-js-console]');
        if (!textarea || !hidden) return;

        form.addEventListener('submit', (e) => {
            const result = runUserJs(textarea.value);
            hidden.value = result.output;
            if (consoleBox) {
                consoleBox.hidden = false;
                consoleBox.textContent = result.output || '(sin salida)';
                consoleBox.classList.toggle('js-console-error', !result.ok);
            }
            if (!result.ok) {
                e.preventDefault();
            }
        });
    });
});
