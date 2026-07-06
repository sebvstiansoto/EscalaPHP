const CACHE = 'escala-v3';
const ASSETS = ['/assets/style.css?v=9', '/assets/app.js?v=9', '/assets/icon.svg', '/manifest.json'];

self.addEventListener('install', e => {
    e.waitUntil(caches.open(CACHE).then(c => c.addAll(ASSETS)).then(() => self.skipWaiting()));
});

self.addEventListener('activate', e => {
    e.waitUntil(
        caches.keys().then(keys => Promise.all(keys.filter(k => k !== CACHE).map(k => caches.delete(k))))
            .then(() => self.clients.claim())
    );
});

self.addEventListener('fetch', e => {
    const url = new URL(e.request.url);
    if (e.request.method !== 'GET') {
        return;
    }
    if (url.pathname.startsWith('/api/') || url.pathname.startsWith('/health')) {
        e.respondWith(fetch(e.request));
        return;
    }
    // Solo assets estáticos en caché (nunca HTML — evita tema/idioma desincronizados)
    if (url.pathname.startsWith('/assets/') || url.pathname === '/manifest.json') {
        e.respondWith(
            caches.match(e.request).then(cached => {
                if (cached) {
                    return cached;
                }
                return fetch(e.request).then(res => {
                    if (res.ok) {
                        const clone = res.clone();
                        caches.open(CACHE).then(c => c.put(e.request, clone));
                    }
                    return res;
                });
            })
        );
        return;
    }
    // Navegación: siempre red primero
    e.respondWith(fetch(e.request));
});
