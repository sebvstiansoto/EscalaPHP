<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'fb-intro',
    'order' => 1,
    'title' => 'Firebase intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Google BaaS platform.',
    'concepts' => 
    array (
      0 => 'firebase',
      1 => 'google',
      2 => 'baas',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Firebase',
        'body' => '**Google BaaS** — Auth, Firestore, Realtime DB, Storage, Functions, Hosting — mobile/web rapid prototype.',
        'code' => 'console.log(\'Practica: fb-intro\');',
      ),
      1 => 
      array (
        'heading' => 'vs Supabase',
        'body' => 'Firebase NoSQL first; Supabase Postgres SQL — choose per project curso supabase compare.',
        'code' => 'console.log(\'Practica: fb-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Firestore?',
        'options' => 
        array (
          0 => 'NoSQL document database',
          1 => 'PostgreSQL',
          2 => 'Redis',
        ),
        'answer' => 'NoSQL document database',
        'explanation' => 'Collections documents.',
        'pro_tip' => 'Compare MongoDB curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Firebase SDK?',
        'options' => 
        array (
          0 => 'firebase npm client + admin SDK server',
          1 => 'PHP only',
          2 => 'No client',
        ),
        'answer' => 'firebase npm client + admin SDK server',
        'explanation' => 'initializeApp config.',
        'pro_tip' => 'Curso React Native Firebase common.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'fb-auth',
    'order' => 2,
    'title' => 'Firebase Authentication',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Email, Google, phone auth.',
    'concepts' => 
    array (
      0 => 'auth',
      1 => 'token',
      2 => 'provider',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Auth',
        'body' => 'signInWithEmailAndPassword, signInWithPopup(Google) — onAuthStateChanged listener.',
        'code' => 'console.log(\'Practica: fb-auth\');',
      ),
      1 => 
      array (
        'heading' => 'Security',
        'body' => 'Security Rules enforce auth.uid — never trust client alone.',
        'code' => 'console.log(\'Practica: fb-auth\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿onAuthStateChanged?',
        'options' => 
        array (
          0 => 'Listener login/logout state',
          1 => 'Database query',
          2 => 'CSS',
        ),
        'answer' => 'Listener login/logout state',
        'explanation' => 'React useEffect subscribe.',
        'pro_tip' => 'Curso OAuth concepts overlap.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ID token Firebase?',
        'options' => 
        array (
          0 => 'JWT verify server Admin SDK',
          1 => 'Public share',
          2 => 'CSS class',
        ),
        'answer' => 'JWT verify server Admin SDK',
        'explanation' => 'Backend validates requests.',
        'pro_tip' => 'Custom claims roles.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'fb-firestore',
    'order' => 3,
    'title' => 'Firestore CRUD',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'Collections, queries, realtime.',
    'concepts' => 
    array (
      0 => 'firestore',
      1 => 'collection',
      2 => 'query',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CRUD',
        'body' => 'addDoc, getDoc, updateDoc, deleteDoc — collection(db, "posts").',
        'code' => 'console.log(\'Practica: fb-firestore\');',
      ),
      1 => 
      array (
        'heading' => 'Queries',
        'body' => 'query(collection, where("status","==","published"), orderBy("date"), limit(10))',
        'code' => 'console.log(\'Practica: fb-firestore\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Firestore realtime?',
        'options' => 
        array (
          0 => 'onSnapshot listener live updates',
          1 => 'Poll HTTP',
          2 => 'Email',
        ),
        'answer' => 'onSnapshot listener live updates',
        'explanation' => 'Like Supabase realtime.',
        'pro_tip' => 'Offline persistence mobile.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Composite index?',
        'options' => 
        array (
          0 => 'Required multi-field where+orderBy',
          1 => 'Never needed',
          2 => 'CSS index',
        ),
        'answer' => 'Required multi-field where+orderBy',
        'explanation' => 'Console link create index.',
        'pro_tip' => 'Design queries avoid too many indexes.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'fb-functions',
    'order' => 4,
    'title' => 'Cloud Functions',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Triggers, HTTP, callable.',
    'concepts' => 
    array (
      0 => 'functions',
      1 => 'trigger',
      2 => 'callable',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Functions',
        'body' => 'onDocumentCreated trigger — send email — HTTPS callable from client.',
        'code' => 'console.log(\'Practica: fb-functions\');',
      ),
      1 => 
      array (
        'heading' => 'Secrets',
        'body' => 'defineSecret — Stripe keys server-side only.',
        'code' => 'console.log(\'Practica: fb-functions\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Callable function?',
        'options' => 
        array (
          0 => 'Client invokes with auth context auto',
          1 => 'Public no auth',
          2 => 'CSS only',
        ),
        'answer' => 'Client invokes with auth context auto',
        'explanation' => 'httpsCallable wrapper.',
        'pro_tip' => 'Compare Supabase Edge Functions.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cold start?',
        'options' => 
        array (
          0 => 'First invoke slow spin up',
          1 => 'Never happens',
          2 => 'Always instant',
        ),
        'answer' => 'First invoke slow spin up',
        'explanation' => 'Min instances reduce prod.',
        'pro_tip' => 'Compare AWS Lambda curso.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'fb-hosting',
    'order' => 5,
    'title' => 'Hosting y Storage',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Deploy SPA, rules storage.',
    'concepts' => 
    array (
      0 => 'hosting',
      1 => 'storage',
      2 => 'rules',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hosting',
        'body' => 'firebase deploy — CDN global — rewrites SPA index.html.',
        'code' => 'console.log(\'Practica: fb-hosting\');',
      ),
      1 => 
      array (
        'heading' => 'Storage',
        'body' => 'uploadBytes ref — rules auth.uid == request.auth.uid for write.',
        'code' => 'console.log(\'Practica: fb-hosting\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Storage rules?',
        'options' => 
        array (
          0 => 'Firebase rules language auth check',
          1 => 'Nginx config',
          2 => 'SQL',
        ),
        'answer' => 'Firebase rules language auth check',
        'explanation' => 'Similar Firestore rules.',
        'pro_tip' => 'Validate contentType size.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿firebase deploy --only hosting?',
        'options' => 
        array (
          0 => 'Deploy static site only',
          1 => 'Delete DB',
          2 => 'All functions force',
        ),
        'answer' => 'Deploy static site only',
        'explanation' => 'Selective deploy targets.',
        'pro_tip' => 'Compare Vercel Next deploy.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'fb-prod',
    'order' => 6,
    'title' => 'Firebase producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Rules testing, billing, limits.',
    'concepts' => 
    array (
      0 => 'rules',
      1 => 'billing',
      2 => 'emulator',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Emulators',
        'body' => 'firebase emulators — local Auth Firestore Functions — CI tests free.',
        'code' => 'console.log(\'Practica: fb-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Billing',
        'body' => 'Spark free tier limits — Blaze pay-as-you-go prod — monitor usage alerts.',
        'code' => 'console.log(\'Practica: fb-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Rules unit tests?',
        'options' => 
        array (
          0 => '@firebase/rules-unit-testing',
          1 => 'No test rules',
          2 => 'Manual prod only',
        ),
        'answer' => '@firebase/rules-unit-testing',
        'explanation' => 'CI security critical.',
        'pro_tip' => 'Default deny write prod.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿When migrate off Firebase?',
        'options' => 
        array (
          0 => 'Complex SQL joins, vendor lock concerns, cost scale',
          1 => 'Never',
          2 => 'Day one always',
        ),
        'answer' => 'Complex SQL joins, vendor lock concerns, cost scale',
        'explanation' => 'Pragmatic architecture.',
        'pro_tip' => 'Export BigQuery analytics path.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'firebase-backend-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Firebase.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Firebase a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'firebase-backend-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Firebase.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Firebase a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
