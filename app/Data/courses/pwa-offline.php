<?php

declare(strict_types=1);

return [
    ['slug' => 'pwa-intro', 'order' => 1, 'title' => 'Progressive Web Apps', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Web que se siente nativa.', 'concepts' => ['pwa', 'installable', 'progressive'], 'sections' => [
        ['heading' => 'PWA', 'body' => '**PWA** — web app **installable**, offline-capable, push notifications — sin App Store obligatorio.'],
        ['heading' => 'Criterios', 'body' => 'HTTPS, manifest, service worker, responsive.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿PWA requiere...?', 'options' => ['HTTPS + SW + manifest', 'Solo React', 'App Store'], 'answer' => 'HTTPS + SW + manifest', 'explanation' => 'Core PWA pillars.', 'pro_tip' => 'Lighthouse PWA audit.'],
        ['type' => 'choice', 'question' => '¿Ventaja PWA vs native?', 'options' => ['Un codebase web, no store approval', 'Siempre mejor performance', 'Sin offline'], 'answer' => 'Un codebase web, no store approval', 'explanation' => 'Trade-offs exist.', 'pro_tip' => 'Compare React Native curso.'],
    ]],
    ['slug' => 'pwa-manifest', 'order' => 2, 'title' => 'Web App Manifest', 'level' => 'Fundamentos', 'minutes' => 30, 'summary' => 'manifest.json, icons y display.', 'concepts' => ['manifest', 'icon', 'display'], 'sections' => [
        ['heading' => 'Manifest', 'body' => '{"name":"App","short_name":"App","start_url":"/","display":"standalone","icons":[...]}', 'code' => "{\n  \"name\": \"Mi PWA\",\n  \"display\": \"standalone\",\n  \"theme_color\": \"#000\"\n}"],
        ['heading' => 'Install', 'body' => 'beforeinstallprompt event — custom install button UX.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿display standalone?', 'options' => ['Sin browser chrome — app-like', 'Browser tabs', 'Fullscreen game only'], 'answer' => 'Sin browser chrome — app-like', 'explanation' => 'Looks native shell.', 'pro_tip' => 'theme_color status bar mobile.'],
        ['type' => 'contains', 'question' => 'Escribe start_url en manifest', 'must_contain' => ['start_url'], 'hint' => '"start_url": "/"', 'explanation' => 'Launch URL install.', 'pro_tip' => '192 and 512 icons required.'],
    ]],
    ['slug' => 'pwa-sw', 'order' => 3, 'title' => 'Service Workers', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'Registro, lifecycle y scope.', 'concepts' => ['serviceworker', 'lifecycle', 'scope'], 'sections' => [
        ['heading' => 'Service Worker', 'body' => 'Proxy entre app y network — offline, cache, push — separate thread.'],
        ['heading' => 'Lifecycle', 'body' => 'install → activate → fetch — skipWaiting clients.claim updates.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿SW scope?', 'options' => ['Path directory registered — controls fetch below', 'Global internet', 'Single page'], 'answer' => 'Path directory registered — controls fetch below', 'explanation' => 'Register /sw.js at root max scope.', 'pro_tip' => 'Curso sw.js fix EscalaPHP.'],
        ['type' => 'choice', 'question' => '¿SW accede DOM?', 'options' => ['No — postMessage to page', 'Direct manipulate', 'jQuery required'], 'answer' => 'No — postMessage to page', 'explanation' => 'Separate context security.', 'pro_tip' => 'DevTools Application tab debug.'],
    ]],
    ['slug' => 'pwa-cache', 'order' => 4, 'title' => 'Cache strategies', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Cache-first, network-first, stale-while-revalidate.', 'concepts' => ['cache-first', 'network-first', 'workbox'], 'sections' => [
        ['heading' => 'Strategies', 'body' => 'Static assets cache-first; API network-first; stale-while-revalidate para HTML.'],
        ['heading' => 'Workbox', 'body' => 'Google library — precaching, routing strategies sin boilerplate SW manual.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿API data cache?', 'options' => ['Network-first con offline fallback', 'Cache-first always', 'Never cache'], 'answer' => 'Network-first con offline fallback', 'explanation' => 'Fresh data priority.', 'pro_tip' => 'Version cache names v1 v2.'],
        ['type' => 'choice', 'question' => '¿Workbox?', 'options' => ['SW toolkit Google', 'CSS framework', 'Database'], 'answer' => 'SW toolkit Google', 'explanation' => 'workbox-webpack-plugin.', 'pro_tip' => 'Avoid cache HTML stale bug.'],
    ]],
    ['slug' => 'pwa-push', 'order' => 5, 'title' => 'Push notifications', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Push API, VAPID y permissions.', 'concepts' => ['push', 'vapid', 'notification'], 'sections' => [
        ['heading' => 'Push', 'body' => 'Notification.requestPermission → PushManager.subscribe → server sends via FCM/Mozilla.'],
        ['heading' => 'VAPID', 'body' => 'Voluntary Application Server Identification — auth push server keys.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Push requiere SW?', 'options' => ['Sí — showNotification en SW', 'Solo alert()', 'Email'], 'answer' => 'Sí — showNotification en SW', 'explanation' => 'Background notifications.', 'pro_tip' => 'User permission UX critical.'],
        ['type' => 'choice', 'question' => '¿iOS PWA push?', 'options' => ['Soportado iOS 16.4+ con limitaciones', 'Nunca', 'Solo Android'], 'answer' => 'Soportado iOS 16.4+ con limitaciones', 'explanation' => 'Check current platform support.', 'pro_tip' => 'Test cross-browser.'],
    ]],
    ['slug' => 'pwa-prod', 'order' => 6, 'title' => 'Lighthouse y producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Performance, install rate y updates.', 'concepts' => ['lighthouse', 'performance', 'update'], 'sections' => [
        ['heading' => 'Lighthouse', 'body' => 'PWA checklist + performance — aim 90+ performance, 100 PWA.'],
        ['heading' => 'Updates', 'body' => 'Notify user new SW waiting — skipWaiting user gesture refresh.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Core Web Vitals?', 'options' => ['LCP, INP, CLS', 'FPS only', 'SQL queries'], 'answer' => 'LCP, INP, CLS', 'explanation' => 'Google ranking signals.', 'pro_tip' => 'Offline page fallback design.'],
        ['type' => 'choice', 'question' => '¿SW update strategy?', 'options' => ['Prompt user reload new version', 'Force reload silent always', 'Never update'], 'answer' => 'Prompt user reload new version', 'explanation' => 'Avoid mid-session break.', 'pro_tip' => 'Compare Astro performance curso.'],
    ]],
];
