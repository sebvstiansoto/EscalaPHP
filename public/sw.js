const CACHE = 'escala-v4';
const ASSETS = ['/assets/style.css?v=16', '/assets/app.js?v=9', '/assets/icon.svg', '/manifest.json'];

self.addEventListener('install', e => {
    e.waitUntil(
        caches.open(CACHE)
            .then(c => c.addAll(ASSETS))
            .then(() => self.skipWaiting())
            .catch(() => self.skipWaiting())
    );
});

self.addEventListener('activate', e => {
    e.waitUntil(
        caches.keys().then(keys => Promise.all(keys.filter(k => k !== CACHE).map(k => caches.delete(k))))
            .then(() => self.clients.claim())
    );
});

function networkOrCache(request, fallback) {
    return fetch(request).catch(() => fallback);
}

self.addEventListener('fetch', e => {
    const url = new URL(e.request.url);
    if (e.request.method !== 'GET') {
        return;
    }
    if (url.pathname.startsWith('/api/') || url.pathname.startsWith('/health')) {
        e.respondWith(networkOrCache(e.request, new Response('{"ok":false}', { status: 503, headers: { 'Content-Type': 'application/json' } })));
        return;
    }
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
                }).catch(() => cached || new Response('', { status: 504 }));
            })
        );
        return;
    }
    e.respondWith(networkOrCache(e.request, new Response('Sin conexión', { status: 504, headers: { 'Content-Type': 'text/plain' } })));
});
