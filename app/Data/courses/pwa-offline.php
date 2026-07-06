<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'pwa-intro',
    'order' => 1,
    'title' => 'Progressive Web Apps',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Web que se siente nativa.',
    'concepts' => 
    array (
      0 => 'pwa',
      1 => 'installable',
      2 => 'progressive',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PWA',
        'body' => '**PWA** — web app **installable**, offline-capable, push notifications — sin App Store obligatorio.',
        'code' => 'console.log(\'Practica: pwa-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Criterios',
        'body' => 'HTTPS, manifest, service worker, responsive.',
        'code' => 'console.log(\'Practica: pwa-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PWA requiere...?',
        'options' => 
        array (
          0 => 'HTTPS + SW + manifest',
          1 => 'Solo React',
          2 => 'App Store',
        ),
        'answer' => 'HTTPS + SW + manifest',
        'explanation' => 'Core PWA pillars.',
        'pro_tip' => 'Lighthouse PWA audit.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja PWA vs native?',
        'options' => 
        array (
          0 => 'Un codebase web, no store approval',
          1 => 'Siempre mejor performance',
          2 => 'Sin offline',
        ),
        'answer' => 'Un codebase web, no store approval',
        'explanation' => 'Trade-offs exist.',
        'pro_tip' => 'Compare React Native curso.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'pwa-manifest',
    'order' => 2,
    'title' => 'Web App Manifest',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'manifest.json, icons y display.',
    'concepts' => 
    array (
      0 => 'manifest',
      1 => 'icon',
      2 => 'display',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Manifest',
        'body' => '{"name":"App","short_name":"App","start_url":"/","display":"standalone","icons":[...]}',
        'code' => '{
  "name": "Mi PWA",
  "display": "standalone",
  "theme_color": "#000"
}',
      ),
      1 => 
      array (
        'heading' => 'Install',
        'body' => 'beforeinstallprompt event — custom install button UX.',
        'code' => '"start_url": "/"',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿display standalone?',
        'options' => 
        array (
          0 => 'Sin browser chrome — app-like',
          1 => 'Browser tabs',
          2 => 'Fullscreen game only',
        ),
        'answer' => 'Sin browser chrome — app-like',
        'explanation' => 'Looks native shell.',
        'pro_tip' => 'theme_color status bar mobile.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe start_url en manifest',
        'must_contain' => 
        array (
          0 => 'start_url',
        ),
        'hint' => '"start_url": "/"',
        'explanation' => 'Launch URL install.',
        'pro_tip' => '192 and 512 icons required.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'pwa-sw',
    'order' => 3,
    'title' => 'Service Workers',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Registro, lifecycle y scope.',
    'concepts' => 
    array (
      0 => 'serviceworker',
      1 => 'lifecycle',
      2 => 'scope',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Service Worker',
        'body' => 'Proxy entre app y network — offline, cache, push — separate thread.',
        'code' => 'console.log(\'Practica: pwa-sw\');',
      ),
      1 => 
      array (
        'heading' => 'Lifecycle',
        'body' => 'install → activate → fetch — skipWaiting clients.claim updates.',
        'code' => 'console.log(\'Practica: pwa-sw\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SW scope?',
        'options' => 
        array (
          0 => 'Path directory registered — controls fetch below',
          1 => 'Global internet',
          2 => 'Single page',
        ),
        'answer' => 'Path directory registered — controls fetch below',
        'explanation' => 'Register /sw.js at root max scope.',
        'pro_tip' => 'Curso sw.js fix EscalaPHP.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿SW accede DOM?',
        'options' => 
        array (
          0 => 'No — postMessage to page',
          1 => 'Direct manipulate',
          2 => 'jQuery required',
        ),
        'answer' => 'No — postMessage to page',
        'explanation' => 'Separate context security.',
        'pro_tip' => 'DevTools Application tab debug.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'pwa-cache',
    'order' => 4,
    'title' => 'Cache strategies',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Cache-first, network-first, stale-while-revalidate.',
    'concepts' => 
    array (
      0 => 'cache-first',
      1 => 'network-first',
      2 => 'workbox',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Strategies',
        'body' => 'Static assets cache-first; API network-first; stale-while-revalidate para HTML.',
        'code' => 'console.log(\'Practica: pwa-cache\');',
      ),
      1 => 
      array (
        'heading' => 'Workbox',
        'body' => 'Google library — precaching, routing strategies sin boilerplate SW manual.',
        'code' => 'console.log(\'Practica: pwa-cache\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿API data cache?',
        'options' => 
        array (
          0 => 'Network-first con offline fallback',
          1 => 'Cache-first always',
          2 => 'Never cache',
        ),
        'answer' => 'Network-first con offline fallback',
        'explanation' => 'Fresh data priority.',
        'pro_tip' => 'Version cache names v1 v2.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Workbox?',
        'options' => 
        array (
          0 => 'SW toolkit Google',
          1 => 'CSS framework',
          2 => 'Database',
        ),
        'answer' => 'SW toolkit Google',
        'explanation' => 'workbox-webpack-plugin.',
        'pro_tip' => 'Avoid cache HTML stale bug.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'pwa-push',
    'order' => 5,
    'title' => 'Push notifications',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Push API, VAPID y permissions.',
    'concepts' => 
    array (
      0 => 'push',
      1 => 'vapid',
      2 => 'notification',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Push',
        'body' => 'Notification.requestPermission → PushManager.subscribe → server sends via FCM/Mozilla.',
        'code' => 'console.log(\'Practica: pwa-push\');',
      ),
      1 => 
      array (
        'heading' => 'VAPID',
        'body' => 'Voluntary Application Server Identification — auth push server keys.',
        'code' => 'const res = await fetch(\'/api/users\');
const data = await res.json();
console.log(data);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Push requiere SW?',
        'options' => 
        array (
          0 => 'Sí — showNotification en SW',
          1 => 'Solo alert()',
          2 => 'Email',
        ),
        'answer' => 'Sí — showNotification en SW',
        'explanation' => 'Background notifications.',
        'pro_tip' => 'User permission UX critical.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿iOS PWA push?',
        'options' => 
        array (
          0 => 'Soportado iOS 16.4+ con limitaciones',
          1 => 'Nunca',
          2 => 'Solo Android',
        ),
        'answer' => 'Soportado iOS 16.4+ con limitaciones',
        'explanation' => 'Check current platform support.',
        'pro_tip' => 'Test cross-browser.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'pwa-prod',
    'order' => 6,
    'title' => 'Lighthouse y producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Performance, install rate y updates.',
    'concepts' => 
    array (
      0 => 'lighthouse',
      1 => 'performance',
      2 => 'update',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Lighthouse',
        'body' => 'PWA checklist + performance — aim 90+ performance, 100 PWA.',
        'code' => 'console.log(\'Practica: pwa-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Updates',
        'body' => 'Notify user new SW waiting — skipWaiting user gesture refresh.',
        'code' => 'console.log(\'Practica: pwa-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Core Web Vitals?',
        'options' => 
        array (
          0 => 'LCP, INP, CLS',
          1 => 'FPS only',
          2 => 'SQL queries',
        ),
        'answer' => 'LCP, INP, CLS',
        'explanation' => 'Google ranking signals.',
        'pro_tip' => 'Offline page fallback design.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿SW update strategy?',
        'options' => 
        array (
          0 => 'Prompt user reload new version',
          1 => 'Force reload silent always',
          2 => 'Never update',
        ),
        'answer' => 'Prompt user reload new version',
        'explanation' => 'Avoid mid-session break.',
        'pro_tip' => 'Compare Astro performance curso.',
      ),
    ),
  ),
);
