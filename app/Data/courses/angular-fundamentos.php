<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ng-intro',
        'order' => 1,
        'title' => 'Introducción a Angular',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Framework enterprise de Google.',
        'concepts' => ['angular', 'typescript', 'cli'],
        'sections' => [
            ['heading' => 'Angular', 'body' => '**Angular** — framework **opinionated** completo: routing, HTTP, forms, DI. TypeScript obligatorio. Popular en enterprise y banca.'],
            ['heading' => 'CLI', 'body' => 'ng new my-app — genera estructura, modules/standalone, tests incluidos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Angular usa...?', 'options' => ['TypeScript', 'Solo JavaScript vanilla', 'PHP'], 'answer' => 'TypeScript', 'explanation' => 'TS first-class.', 'pro_tip' => 'Curso TypeScript previo ayuda.'],
            ['type' => 'choice', 'question' => '¿Angular vs React?', 'options' => ['Angular más batteries-included', 'React incluye routing siempre', 'Angular solo backend'], 'answer' => 'Angular más batteries-included', 'explanation' => 'React = library; Angular = platform.', 'pro_tip' => 'Standalone components desde v17+.'],
        ],
    ],
    [
        'slug' => 'ng-components',
        'order' => 2,
        'title' => 'Componentes y templates',
        'level' => 'Fundamentos',
        'minutes' => 35,
        'summary' => '@Component, binding y directives.',
        'concepts' => ['component', 'binding', 'directive'],
        'sections' => [
            ['heading' => 'Component', 'body' => '@Component({ selector: "app-user", template: `...`, standalone: true })'],
            ['heading' => 'Binding', 'body' => 'Interpolation {{ }}, property [disabled], event (click), two-way [(ngModel)].'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Event binding syntax?', 'options' => ['(click)="handler()"', '@click', 'on-click'], 'answer' => '(click)="handler()"', 'explanation' => 'Paréntesis = eventos.', 'pro_tip' => '[prop] corchetes = property binding.'],
            ['type' => 'contains', 'question' => 'Escribe @Component', 'must_contain' => ['Component'], 'hint' => '@Component({ selector: "app-root", ... })', 'explanation' => 'Decorator define componente.', 'pro_tip' => 'ChangeDetection OnPush performance.'],
        ],
    ],
    [
        'slug' => 'ng-rxjs',
        'order' => 3,
        'title' => 'RxJS y programación reactiva',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Observables, operators y async pipe.',
        'concepts' => ['rxjs', 'observable', 'operator'],
        'sections' => [
            ['heading' => 'Observables', 'body' => 'Stream tiempo — HTTP, websockets, user input — patrón central Angular.'],
            ['heading' => 'Operators', 'body' => 'map, filter, switchMap, debounceTime — composición funcional async.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿switchMap vs mergeMap?', 'options' => ['switchMap cancela inner previo — ideal búsqueda', 'Iguales', 'mergeMap cancela'], 'answer' => 'switchMap cancela inner previo — ideal búsqueda', 'explanation' => 'Evita race conditions search.', 'pro_tip' => 'async pipe auto-unsubscribe.'],
            ['type' => 'choice', 'question' => '¿async pipe ventaja?', 'options' => ['Subscribe/unsubscribe automático en template', 'Sin observables', 'Sync only'], 'answer' => 'Subscribe/unsubscribe automático en template', 'explanation' => 'Menos memory leaks.', 'pro_tip' => 'takeUntilDestroyed() en v16+.'],
        ],
    ],
    [
        'slug' => 'ng-router',
        'order' => 4,
        'title' => 'Angular Router',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Routes, guards y lazy loading.',
        'concepts' => ['router', 'guard', 'lazy'],
        'sections' => [
            ['heading' => 'Routes', 'body' => 'provideRouter([{ path: "users/:id", component: UserComponent }])'],
            ['heading' => 'Guards', 'body' => 'canActivate — auth check antes de ruta — como Vue Router beforeEach.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Lazy loading Angular?', 'options' => ['loadChildren: () => import(...)', 'import static top', 'Sin lazy'], 'answer' => 'loadChildren: () => import(...)', 'explanation' => 'Code splitting por feature module.', 'pro_tip' => 'Standalone lazy: loadComponent.'],
            ['type' => 'choice', 'question' => '¿ActivatedRoute?', 'options' => ['Accede params/query de ruta actual', 'Global router config', 'HTTP client'], 'answer' => 'Accede params/query de ruta actual', 'explanation' => 'route.snapshot.paramMap.get("id").', 'pro_tip' => 'ParamMap observable para cambios.'],
        ],
    ],
    [
        'slug' => 'ng-http',
        'order' => 5,
        'title' => 'HttpClient y servicios',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'DI, services y interceptors.',
        'concepts' => ['httpclient', 'service', 'interceptor'],
        'sections' => [
            ['heading' => 'HttpClient', 'body' => 'this.http.get<User[]>("/api/users") — tipado genérico TypeScript.'],
            ['heading' => 'DI', 'body' => '@Injectable({ providedIn: "root" }) — singleton app-wide.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Interceptor HTTP?', 'options' => ['Middleware chain — auth header, errors', 'Solo routing', 'CSS'], 'answer' => 'Middleware chain — auth header, errors', 'explanation' => 'HttpInterceptorFn en standalone.', 'pro_tip' => 'Igual concepto axios interceptors.'],
            ['type' => 'choice', 'question' => '¿providedIn root?', 'options' => ['Singleton lazy-loaded tree-shakeable', 'New instance cada component', 'Sin DI'], 'answer' => 'Singleton lazy-loaded tree-shakeable', 'explanation' => 'Best practice services.', 'pro_tip' => 'Facade pattern para state + API.'],
        ],
    ],
    [
        'slug' => 'ng-prod',
        'order' => 6,
        'title' => 'Forms, signals y producción',
        'level' => 'Producción',
        'minutes' => 35,
        'summary' => 'Reactive forms, signals v19 y build.',
        'concepts' => ['reactive-forms', 'signals', 'build'],
        'sections' => [
            ['heading' => 'Reactive forms', 'body' => 'FormBuilder group + validators — más testeable que template-driven.'],
            ['heading' => 'Signals', 'body' => 'signal(), computed(), effect() — reactividad fine-grained moderna en Angular.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Reactive vs template forms?', 'options' => ['Reactive mejor testing y validación compleja', 'Template siempre mejor', 'Sin forms Angular'], 'answer' => 'Reactive mejor testing y validación compleja', 'explanation' => 'FormControl inmutable model.', 'pro_tip' => 'Validators.required, Validators.email.'],
            ['type' => 'choice', 'question' => '¿ng build --configuration production?', 'options' => ['AOT, minify, tree-shake', 'Dev HMR', 'Sin optimizar'], 'answer' => 'AOT, minify, tree-shake', 'explanation' => 'Deploy dist/ a CDN.', 'pro_tip' => 'Compare Vue/React build courses.'],
        ],
    ],
];
