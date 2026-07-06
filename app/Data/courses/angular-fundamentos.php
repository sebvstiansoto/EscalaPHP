<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ng-intro',
    'order' => 1,
    'title' => 'Introducción a Angular',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Framework enterprise de Google.',
    'concepts' => 
    array (
      0 => 'angular',
      1 => 'typescript',
      2 => 'cli',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Angular',
        'body' => '**Angular** — framework **opinionated** completo: routing, HTTP, forms, DI. TypeScript obligatorio. Popular en enterprise y banca.',
        'code' => 'console.log(\'Practica: ng-intro\');',
      ),
      1 => 
      array (
        'heading' => 'CLI',
        'body' => 'ng new my-app — genera estructura, modules/standalone, tests incluidos.',
        'code' => 'console.log(\'Practica: ng-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Angular usa...?',
        'options' => 
        array (
          0 => 'TypeScript',
          1 => 'Solo JavaScript vanilla',
          2 => 'PHP',
        ),
        'answer' => 'TypeScript',
        'explanation' => 'TS first-class.',
        'pro_tip' => 'Curso TypeScript previo ayuda.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Angular vs React?',
        'options' => 
        array (
          0 => 'Angular más batteries-included',
          1 => 'React incluye routing siempre',
          2 => 'Angular solo backend',
        ),
        'answer' => 'Angular más batteries-included',
        'explanation' => 'React = library; Angular = platform.',
        'pro_tip' => 'Standalone components desde v17+.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ng-components',
    'order' => 2,
    'title' => 'Componentes y templates',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => '@Component, binding y directives.',
    'concepts' => 
    array (
      0 => 'component',
      1 => 'binding',
      2 => 'directive',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Component',
        'body' => '@Component({ selector: "app-user", template: `...`, standalone: true })',
        'code' => '@Component({ selector: "app-root", ... })',
      ),
      1 => 
      array (
        'heading' => 'Binding',
        'body' => 'Interpolation {{ }}, property [disabled], event (click), two-way [(ngModel)].',
        'code' => '@Component({ selector: "app-root", ... })',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Event binding syntax?',
        'options' => 
        array (
          0 => '(click)="handler()"',
          1 => '@click',
          2 => 'on-click',
        ),
        'answer' => '(click)="handler()"',
        'explanation' => 'Paréntesis = eventos.',
        'pro_tip' => '[prop] corchetes = property binding.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe @Component',
        'must_contain' => 
        array (
          0 => 'Component',
        ),
        'hint' => '@Component({ selector: "app-root", ... })',
        'explanation' => 'Decorator define componente.',
        'pro_tip' => 'ChangeDetection OnPush performance.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ng-rxjs',
    'order' => 3,
    'title' => 'RxJS y programación reactiva',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Observables, operators y async pipe.',
    'concepts' => 
    array (
      0 => 'rxjs',
      1 => 'observable',
      2 => 'operator',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Observables',
        'body' => 'Stream tiempo — HTTP, websockets, user input — patrón central Angular.',
        'code' => 'console.log(\'Practica: ng-rxjs\');',
      ),
      1 => 
      array (
        'heading' => 'Operators',
        'body' => 'map, filter, switchMap, debounceTime — composición funcional async.',
        'code' => 'console.log(\'Practica: ng-rxjs\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿switchMap vs mergeMap?',
        'options' => 
        array (
          0 => 'switchMap cancela inner previo — ideal búsqueda',
          1 => 'Iguales',
          2 => 'mergeMap cancela',
        ),
        'answer' => 'switchMap cancela inner previo — ideal búsqueda',
        'explanation' => 'Evita race conditions search.',
        'pro_tip' => 'async pipe auto-unsubscribe.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿async pipe ventaja?',
        'options' => 
        array (
          0 => 'Subscribe/unsubscribe automático en template',
          1 => 'Sin observables',
          2 => 'Sync only',
        ),
        'answer' => 'Subscribe/unsubscribe automático en template',
        'explanation' => 'Menos memory leaks.',
        'pro_tip' => 'takeUntilDestroyed() en v16+.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ng-router',
    'order' => 4,
    'title' => 'Angular Router',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Routes, guards y lazy loading.',
    'concepts' => 
    array (
      0 => 'router',
      1 => 'guard',
      2 => 'lazy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Routes',
        'body' => 'provideRouter([{ path: "users/:id", component: UserComponent }])',
        'code' => 'console.log(\'Practica: ng-router\');',
      ),
      1 => 
      array (
        'heading' => 'Guards',
        'body' => 'canActivate — auth check antes de ruta — como Vue Router beforeEach.',
        'code' => 'console.log(\'Practica: ng-router\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Lazy loading Angular?',
        'options' => 
        array (
          0 => 'loadChildren: () => import(...)',
          1 => 'import static top',
          2 => 'Sin lazy',
        ),
        'answer' => 'loadChildren: () => import(...)',
        'explanation' => 'Code splitting por feature module.',
        'pro_tip' => 'Standalone lazy: loadComponent.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ActivatedRoute?',
        'options' => 
        array (
          0 => 'Accede params/query de ruta actual',
          1 => 'Global router config',
          2 => 'HTTP client',
        ),
        'answer' => 'Accede params/query de ruta actual',
        'explanation' => 'route.snapshot.paramMap.get("id").',
        'pro_tip' => 'ParamMap observable para cambios.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ng-http',
    'order' => 5,
    'title' => 'HttpClient y servicios',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'DI, services y interceptors.',
    'concepts' => 
    array (
      0 => 'httpclient',
      1 => 'service',
      2 => 'interceptor',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'HttpClient',
        'body' => 'this.http.get<User[]>("/api/users") — tipado genérico TypeScript.',
        'code' => 'console.log(\'Practica: ng-http\');',
      ),
      1 => 
      array (
        'heading' => 'DI',
        'body' => '@Injectable({ providedIn: "root" }) — singleton app-wide.',
        'code' => 'console.log(\'Practica: ng-http\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Interceptor HTTP?',
        'options' => 
        array (
          0 => 'Middleware chain — auth header, errors',
          1 => 'Solo routing',
          2 => 'CSS',
        ),
        'answer' => 'Middleware chain — auth header, errors',
        'explanation' => 'HttpInterceptorFn en standalone.',
        'pro_tip' => 'Igual concepto axios interceptors.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿providedIn root?',
        'options' => 
        array (
          0 => 'Singleton lazy-loaded tree-shakeable',
          1 => 'New instance cada component',
          2 => 'Sin DI',
        ),
        'answer' => 'Singleton lazy-loaded tree-shakeable',
        'explanation' => 'Best practice services.',
        'pro_tip' => 'Facade pattern para state + API.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ng-prod',
    'order' => 6,
    'title' => 'Forms, signals y producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Reactive forms, signals v19 y build.',
    'concepts' => 
    array (
      0 => 'reactive-forms',
      1 => 'signals',
      2 => 'build',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Reactive forms',
        'body' => 'FormBuilder group + validators — más testeable que template-driven.',
        'code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
      ),
      1 => 
      array (
        'heading' => 'Signals',
        'body' => 'signal(), computed(), effect() — reactividad fine-grained moderna en Angular.',
        'code' => 'console.log(\'Practica: ng-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Reactive vs template forms?',
        'options' => 
        array (
          0 => 'Reactive mejor testing y validación compleja',
          1 => 'Template siempre mejor',
          2 => 'Sin forms Angular',
        ),
        'answer' => 'Reactive mejor testing y validación compleja',
        'explanation' => 'FormControl inmutable model.',
        'pro_tip' => 'Validators.required, Validators.email.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ng build --configuration production?',
        'options' => 
        array (
          0 => 'AOT, minify, tree-shake',
          1 => 'Dev HMR',
          2 => 'Sin optimizar',
        ),
        'answer' => 'AOT, minify, tree-shake',
        'explanation' => 'Deploy dist/ a CDN.',
        'pro_tip' => 'Compare Vue/React build courses.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'angular-fundamentos-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de Angular.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Angular a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'angular-fundamentos-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de Angular.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Angular a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
