<?php

declare(strict_types=1);

return [
    'levels' => [
        [
            'slug' => 'junior',
            'title' => 'Junior — Fundamentos',
            'desc' => 'Lo mínimo para tu primer trabajo o proyecto real.',
            'color' => '#4f7cff',
        ],
        [
            'slug' => 'mid',
            'title' => 'Mid — Profesional',
            'desc' => 'Lo que se espera después de 1–3 años trabajando en equipo.',
            'color' => '#2dd4a8',
        ],
        [
            'slug' => 'senior',
            'title' => 'Senior — Liderazgo técnico',
            'desc' => 'Diseño, decisiones de arquitectura y mentoría.',
            'color' => '#a78bfa',
        ],
    ],
    'items' => [
        // Junior
        ['level' => 'junior', 'text' => 'Variables, condiciones, bucles y funciones', 'terms' => ['variable', 'if', 'for', 'funcion'], 'courses' => ['php-fundamentos', 'python-backend']],
        ['level' => 'junior', 'text' => 'Entender qué es HTTP, GET y POST', 'terms' => ['http', 'get', 'post'], 'courses' => ['php-fundamentos', 'html-css-js']],
        ['level' => 'junior', 'text' => 'Leer y escribir JSON', 'terms' => ['json', 'api'], 'courses' => ['php-fundamentos']],
        ['level' => 'junior', 'text' => 'SQL básico: SELECT, WHERE, JOIN', 'terms' => ['sql', 'select', 'where', 'join'], 'courses' => ['sql-fundamentos']],
        ['level' => 'junior', 'text' => 'Git: commit, branch, push y pull request', 'terms' => ['git', 'commit', 'branch', 'pull-request'], 'courses' => ['git-fundamentos']],
        ['level' => 'junior', 'text' => 'Terminal: navegar archivos y ejecutar comandos', 'terms' => ['terminal', 'bash', 'cp', 'grep'], 'courses' => ['linux-bash']],
        ['level' => 'junior', 'text' => 'HTML + CSS layout (flexbox o grid)', 'terms' => ['html', 'css', 'flexbox', 'grid'], 'courses' => ['html-css-js']],
        ['level' => 'junior', 'text' => 'JavaScript: DOM, eventos y fetch', 'terms' => ['javascript', 'dom', 'fetch', 'async'], 'courses' => ['html-css-js']],
        ['level' => 'junior', 'text' => 'Leer mensajes de error y stack traces', 'terms' => ['debug', 'exception'], 'courses' => []],
        ['level' => 'junior', 'text' => 'Autenticación vs autorización', 'terms' => ['autenticacion', 'autorizacion', 'sesion'], 'courses' => ['seguridad-web']],
        // Mid
        ['level' => 'mid', 'text' => 'Un framework backend (Laravel, FastAPI o Express)', 'terms' => ['laravel', 'fastapi', 'express', 'mvc'], 'courses' => ['laravel-fundamentos', 'fastapi-avanzado', 'nodejs-backend']],
        ['level' => 'mid', 'text' => 'ORM, migraciones y relaciones', 'terms' => ['orm', 'migration', 'eloquent'], 'courses' => ['laravel-fundamentos', 'postgresql']],
        ['level' => 'mid', 'text' => 'Tests automatizados (unit + feature)', 'terms' => ['testing', 'phpunit', 'pytest'], 'courses' => ['testing-php']],
        ['level' => 'mid', 'text' => 'Seguridad web: XSS, CSRF, SQL injection', 'terms' => ['xss', 'csrf', 'sql-injection'], 'courses' => ['seguridad-web']],
        ['level' => 'mid', 'text' => 'Redis para caché y sesiones', 'terms' => ['redis', 'cache', 'ttl'], 'courses' => ['redis-cache']],
        ['level' => 'mid', 'text' => 'Docker: Dockerfile y docker-compose', 'terms' => ['docker', 'dockerfile', 'compose'], 'courses' => ['docker']],
        ['level' => 'mid', 'text' => 'React: componentes, state y hooks', 'terms' => ['react', 'usestate', 'hook', 'props'], 'courses' => ['react-frontend']],
        ['level' => 'mid', 'text' => 'CI/CD básico con GitHub Actions', 'terms' => ['ci', 'cd', 'github-actions'], 'courses' => ['cicd']],
        ['level' => 'mid', 'text' => 'Nginx como reverse proxy', 'terms' => ['nginx', 'reverse-proxy', 'php-fpm'], 'courses' => ['nginx-proxy']],
        ['level' => 'mid', 'text' => 'Patrones comunes: Repository, Factory, MVC', 'terms' => ['repository', 'factory', 'mvc'], 'courses' => ['patrones-diseno']],
        ['level' => 'mid', 'text' => 'Code review: dar y recibir feedback', 'terms' => ['review', 'pull-request'], 'courses' => ['git-fundamentos']],
        ['level' => 'mid', 'text' => 'Trabajar en Agile/Scrum (sprint, standup)', 'terms' => ['scrum', 'sprint', 'standup'], 'courses' => []],
        // Senior
        ['level' => 'senior', 'text' => 'Diseñar APIs y system design', 'terms' => ['system-design', 'api', 'rest'], 'courses' => ['arquitectura-software']],
        ['level' => 'senior', 'text' => 'Escalabilidad: horizontal vs vertical, CAP', 'terms' => ['horizontal-scaling', 'cap-theorem', 'load-balancer'], 'courses' => []],
        ['level' => 'senior', 'text' => 'Microservicios vs monolito — cuándo cada uno', 'terms' => ['microservices', 'monolith'], 'courses' => ['php-enterprise']],
        ['level' => 'senior', 'text' => 'Kubernetes en producción', 'terms' => ['kubernetes', 'pod', 'deployment'], 'courses' => ['kubernetes']],
        ['level' => 'senior', 'text' => 'Observabilidad: logs, métricas y tracing', 'terms' => ['observabilidad', 'apm', 'tracing'], 'courses' => []],
        ['level' => 'senior', 'text' => 'Incidentes: on-call y postmortems', 'terms' => ['on-call', 'postmortem', 'incident'], 'courses' => []],
        ['level' => 'senior', 'text' => 'Cloud e IaC (AWS, Terraform)', 'terms' => ['aws', 'terraform', 'infrastructure-as-code'], 'courses' => []],
        ['level' => 'senior', 'text' => 'Mentoría y estimación de tareas', 'terms' => ['velocity', 'planning-poker'], 'courses' => []],
        ['level' => 'senior', 'text' => 'Algoritmos y entrevistas técnicas', 'terms' => ['big-o', 'dynamic-programming'], 'courses' => ['algoritmos-entrevista']],
    ],
];
