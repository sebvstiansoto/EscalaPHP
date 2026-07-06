<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ci-tests',
        'order' => 1,
        'title' => 'Tests en cada push',
        'level' => 'CI',
        'minutes' => 25,
        'summary' => 'GitHub Actions: PHPUnit, pytest y jest en pipeline.',
        'concepts' => ['ci', 'github-actions', 'tests'],
        'sections' => [
            ['heading' => 'Integración Continua', 'body' => '**CI** ejecuta tests automáticamente en cada push. Si fallan, el merge se bloquea.'],
            ['heading' => 'Workflow básico', 'body' => 'Un archivo `.github/workflows/ci.yml` define pasos: checkout, install, test.', 'code' => "name: CI\non: [push]\njobs:\n  test:\n    runs-on: ubuntu-latest\n    steps:\n      - uses: actions/checkout@v4\n      - run: composer install\n      - run: vendor/bin/phpunit"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Dónde viven los workflows de GitHub Actions?',
                'options' => ['.github/workflows/', 'docker/', 'vendor/'],
                'answer' => '.github/workflows/',
                'explanation' => 'YAML en `.github/workflows/` define cada pipeline.',
                'pro_tip' => 'Abre el ci.yml de EscalaPHP en tu editor — es un ejemplo real.',
            ],
            [
                'type' => 'contains',
                'question' => 'Escribe un fragmento YAML con trigger on push y un job llamado test',
                'must_contain' => ['on:', 'push', 'jobs:', 'test:'],
                'hint' => "on: [push]\njobs:\n  test:",
                'explanation' => 'Estructura mínima de un workflow CI.',
                'pro_tip' => 'Corre tests en PHP, Python y JS según el stack del proyecto.',
            ],
        ],
    ],
    [
        'slug' => 'ci-deploy',
        'order' => 2,
        'title' => 'Deploy automático',
        'level' => 'CD',
        'minutes' => 30,
        'summary' => 'Staging vs producción, secrets y deploy seguro.',
        'concepts' => ['cd', 'deploy', 'staging', 'secrets'],
        'sections' => [
            ['heading' => 'Entrega Continua', 'body' => '**CD** despliega automáticamente cuando CI pasa. Staging primero, producción con aprobación.'],
            ['heading' => 'Secrets', 'body' => 'Nunca pongas contraseñas en el YAML. Usa **GitHub Secrets** para credenciales.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Dónde guardas una API key para el pipeline?',
                'options' => ['GitHub Secrets', 'En el código fuente', 'En un tweet'],
                'answer' => 'GitHub Secrets',
                'explanation' => 'Los secrets se inyectan en runtime, nunca en el repo.',
                'pro_tip' => 'Rota secrets periódicamente y usa mínimos permisos.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Cuál es el orden correcto en CD?',
                'options' => ['CI pasa → staging → producción', 'Producción directo sin tests', 'Solo manual siempre'],
                'answer' => 'CI pasa → staging → producción',
                'explanation' => 'Staging valida en entorno parecido a prod antes del release.',
                'pro_tip' => 'Blue/green o canary reducen riesgo en deploys grandes.',
            ],
        ],
    ],
    [
        'slug' => 'ci-docker',
        'order' => 3,
        'title' => 'CI con Docker',
        'level' => 'Integración',
        'minutes' => 30,
        'summary' => 'Build de imagen y push a registry en el pipeline.',
        'concepts' => ['docker', 'registry', 'build'],
        'sections' => [
            ['heading' => 'Build en CI', 'body' => 'El pipeline puede construir tu imagen Docker y subirla a Docker Hub o GHCR.', 'code' => "- run: docker build -t mi-app .\n- run: docker push mi-app:latest"],
        ],
        'exercises' => [
            [
                'type' => 'contains',
                'question' => 'Escribe los comandos docker build y docker push en un pipeline',
                'must_contain' => ['docker build', 'docker push'],
                'hint' => "docker build -t mi-app .\ndocker push mi-app:latest",
                'explanation' => 'Build + push automatiza el camino a producción containerizada.',
                'pro_tip' => 'Taggea con el SHA del commit para trazabilidad.',
            ],
        ],
    ],
    [
        'slug' => 'ci-matrix',
        'order' => 4,
        'title' => 'Matrix builds multi-versión',
        'level' => 'CI',
        'minutes' => 25,
        'summary' => 'Probar PHP 8.2 y 8.3 en paralelo con strategy.matrix.',
        'concepts' => ['matrix', 'parallel', 'versions'],
        'sections' => [
            ['heading' => 'Strategy matrix', 'body' => 'GitHub Actions puede correr el mismo job con varias versiones de PHP, Node o OS en paralelo.', 'code' => "strategy:\n  matrix:\n    php: ['8.2', '8.3']"],
            ['heading' => 'Por qué', 'body' => 'Detectas incompatibilidades antes de que un usuario en PHP 8.2 reporte el bug.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace strategy.matrix en GitHub Actions?', 'options' => ['Ejecuta el job con varias combinaciones de parámetros', 'Borra el repo', 'Solo corre en Windows'], 'answer' => 'Ejecuta el job con varias combinaciones de parámetros', 'explanation' => 'Matrix = tests en PHP 8.2, 8.3, 8.4 a la vez.', 'pro_tip' => 'fail-fast: false sigue aunque una versión falle.'],
            ['type' => 'contains', 'question' => 'Escribe strategy: y matrix: con php en el YAML', 'must_contain' => ['strategy:', 'matrix:', 'php'], 'hint' => "strategy:\n  matrix:\n    php: ['8.3']", 'explanation' => 'Matrix declara las variantes del pipeline.', 'pro_tip' => 'Usa ${{ matrix.php }} en setup-php.'],
        ],
    ],
    [
        'slug' => 'ci-env',
        'order' => 5,
        'title' => 'Entornos y approvals',
        'level' => 'CD',
        'minutes' => 30,
        'summary' => 'staging, production y gates manuales.',
        'concepts' => ['environment', 'approval', 'staging'],
        'sections' => [
            ['heading' => 'Environments', 'body' => 'GitHub **Environments** separan staging y production con secrets distintos y reglas de aprobación.'],
            ['heading' => 'Protection rules', 'body' => 'Production puede requerir que un humano apruebe antes del deploy.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué separar staging y production?', 'options' => ['Probar en entorno parecido sin afectar usuarios', 'Porque Git lo exige', 'Para ir más lento siempre'], 'answer' => 'Probar en entorno parecido sin afectar usuarios', 'explanation' => 'Staging es el ensayo general antes del estreno.', 'pro_tip' => 'Datos de staging deben ser anonimizados, nunca prod real.'],
            ['type' => 'choice', 'question' => '¿Dónde configuras aprobación manual para prod?', 'options' => ['GitHub Environment protection rules', 'En el README', 'En php.ini'], 'answer' => 'GitHub Environment protection rules', 'explanation' => 'Required reviewers bloquean deploy hasta aprobación.', 'pro_tip' => 'Branch protection + environments = doble red de seguridad.'],
        ],
    ],
    [
        'slug' => 'ci-rollback',
        'order' => 6,
        'title' => 'Rollback y health checks',
        'level' => 'CD',
        'minutes' => 25,
        'summary' => 'Revertir deploys y smoke tests post-deploy.',
        'concepts' => ['rollback', 'healthcheck', 'smoke-test'],
        'sections' => [
            ['heading' => 'Smoke tests', 'body' => 'Tras deploy, un curl a `/health` confirma que la app responde antes de dar por bueno el release.'],
            ['heading' => 'Rollback', 'body' => 'Si falla: redeploy de la imagen anterior o `kubectl rollout undo`. Automatízalo en el pipeline.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué es un smoke test post-deploy?', 'options' => ['Verificación rápida de que la app vive', 'Test de humo literal', 'Borrar la BD'], 'answer' => 'Verificación rápida de que la app vive', 'explanation' => 'Un health check básico evita dejar prod caído horas.', 'pro_tip' => 'EscalaPHP tiene ruta /health — úsala como ejemplo.'],
            ['type' => 'contains', 'question' => 'Escribe un paso curl -f https://mi-app/health en el workflow', 'must_contain' => ['curl', 'health'], 'hint' => 'curl -f https://mi-app/health', 'explanation' => '-f hace fallar el step si HTTP no es 2xx.', 'pro_tip' => 'Combina con notificación Slack si el smoke test falla.'],
        ],
    ],
];
