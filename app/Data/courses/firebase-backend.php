<?php

declare(strict_types=1);

return [
    ['slug' => 'fb-intro', 'order' => 1, 'title' => 'Firebase intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Google BaaS platform.', 'concepts' => ['firebase', 'google', 'baas'], 'sections' => [
        ['heading' => 'Firebase', 'body' => '**Google BaaS** — Auth, Firestore, Realtime DB, Storage, Functions, Hosting — mobile/web rapid prototype.'],
        ['heading' => 'vs Supabase', 'body' => 'Firebase NoSQL first; Supabase Postgres SQL — choose per project curso supabase compare.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Firestore?', 'options' => ['NoSQL document database', 'PostgreSQL', 'Redis'], 'answer' => 'NoSQL document database', 'explanation' => 'Collections documents.', 'pro_tip' => 'Compare MongoDB curso.'],
        ['type' => 'choice', 'question' => '¿Firebase SDK?', 'options' => ['firebase npm client + admin SDK server', 'PHP only', 'No client'], 'answer' => 'firebase npm client + admin SDK server', 'explanation' => 'initializeApp config.', 'pro_tip' => 'Curso React Native Firebase common.'],
    ]],
    ['slug' => 'fb-auth', 'order' => 2, 'title' => 'Firebase Authentication', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Email, Google, phone auth.', 'concepts' => ['auth', 'token', 'provider'], 'sections' => [
        ['heading' => 'Auth', 'body' => 'signInWithEmailAndPassword, signInWithPopup(Google) — onAuthStateChanged listener.'],
        ['heading' => 'Security', 'body' => 'Security Rules enforce auth.uid — never trust client alone.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿onAuthStateChanged?', 'options' => ['Listener login/logout state', 'Database query', 'CSS'], 'answer' => 'Listener login/logout state', 'explanation' => 'React useEffect subscribe.', 'pro_tip' => 'Curso OAuth concepts overlap.'],
        ['type' => 'choice', 'question' => '¿ID token Firebase?', 'options' => ['JWT verify server Admin SDK', 'Public share', 'CSS class'], 'answer' => 'JWT verify server Admin SDK', 'explanation' => 'Backend validates requests.', 'pro_tip' => 'Custom claims roles.'],
    ]],
    ['slug' => 'fb-firestore', 'order' => 3, 'title' => 'Firestore CRUD', 'level' => 'Práctica', 'minutes' => 40, 'summary' => 'Collections, queries, realtime.', 'concepts' => ['firestore', 'collection', 'query'], 'sections' => [
        ['heading' => 'CRUD', 'body' => 'addDoc, getDoc, updateDoc, deleteDoc — collection(db, "posts").'],
        ['heading' => 'Queries', 'body' => 'query(collection, where("status","==","published"), orderBy("date"), limit(10))'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Firestore realtime?', 'options' => ['onSnapshot listener live updates', 'Poll HTTP', 'Email'], 'answer' => 'onSnapshot listener live updates', 'explanation' => 'Like Supabase realtime.', 'pro_tip' => 'Offline persistence mobile.'],
        ['type' => 'choice', 'question' => '¿Composite index?', 'options' => ['Required multi-field where+orderBy', 'Never needed', 'CSS index'], 'answer' => 'Required multi-field where+orderBy', 'explanation' => 'Console link create index.', 'pro_tip' => 'Design queries avoid too many indexes.'],
    ]],
    ['slug' => 'fb-functions', 'order' => 4, 'title' => 'Cloud Functions', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Triggers, HTTP, callable.', 'concepts' => ['functions', 'trigger', 'callable'], 'sections' => [
        ['heading' => 'Functions', 'body' => 'onDocumentCreated trigger — send email — HTTPS callable from client.'],
        ['heading' => 'Secrets', 'body' => 'defineSecret — Stripe keys server-side only.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Callable function?', 'options' => ['Client invokes with auth context auto', 'Public no auth', 'CSS only'], 'answer' => 'Client invokes with auth context auto', 'explanation' => 'httpsCallable wrapper.', 'pro_tip' => 'Compare Supabase Edge Functions.'],
        ['type' => 'choice', 'question' => '¿Cold start?', 'options' => ['First invoke slow spin up', 'Never happens', 'Always instant'], 'answer' => 'First invoke slow spin up', 'explanation' => 'Min instances reduce prod.', 'pro_tip' => 'Compare AWS Lambda curso.'],
    ]],
    ['slug' => 'fb-hosting', 'order' => 5, 'title' => 'Hosting y Storage', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Deploy SPA, rules storage.', 'concepts' => ['hosting', 'storage', 'rules'], 'sections' => [
        ['heading' => 'Hosting', 'body' => 'firebase deploy — CDN global — rewrites SPA index.html.'],
        ['heading' => 'Storage', 'body' => 'uploadBytes ref — rules auth.uid == request.auth.uid for write.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Storage rules?', 'options' => ['Firebase rules language auth check', 'Nginx config', 'SQL'], 'answer' => 'Firebase rules language auth check', 'explanation' => 'Similar Firestore rules.', 'pro_tip' => 'Validate contentType size.'],
        ['type' => 'choice', 'question' => '¿firebase deploy --only hosting?', 'options' => ['Deploy static site only', 'Delete DB', 'All functions force'], 'answer' => 'Deploy static site only', 'explanation' => 'Selective deploy targets.', 'pro_tip' => 'Compare Vercel Next deploy.'],
    ]],
    ['slug' => 'fb-prod', 'order' => 6, 'title' => 'Firebase producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Rules testing, billing, limits.', 'concepts' => ['rules', 'billing', 'emulator'], 'sections' => [
        ['heading' => 'Emulators', 'body' => 'firebase emulators — local Auth Firestore Functions — CI tests free.'],
        ['heading' => 'Billing', 'body' => 'Spark free tier limits — Blaze pay-as-you-go prod — monitor usage alerts.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Rules unit tests?', 'options' => ['@firebase/rules-unit-testing', 'No test rules', 'Manual prod only'], 'answer' => '@firebase/rules-unit-testing', 'explanation' => 'CI security critical.', 'pro_tip' => 'Default deny write prod.'],
        ['type' => 'choice', 'question' => '¿When migrate off Firebase?', 'options' => ['Complex SQL joins, vendor lock concerns, cost scale', 'Never', 'Day one always'], 'answer' => 'Complex SQL joins, vendor lock concerns, cost scale', 'explanation' => 'Pragmatic architecture.', 'pro_tip' => 'Export BigQuery analytics path.'],
    ]],
];
