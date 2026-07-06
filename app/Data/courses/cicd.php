<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ci-tests',
    'order' => 1,
    'title' => 'Tests en cada push',
    'level' => 'CI',
    'minutes' => 25,
    'summary' => 'GitHub Actions: PHPUnit, pytest y jest en pipeline.',
    'concepts' => 
    array (
      0 => 'ci',
      1 => 'github-actions',
      2 => 'tests',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Integración Continua',
        'body' => '**CI** ejecuta tests automáticamente en cada push. Si fallan, el merge se bloquea.',
        'code' => 'on: [push]
jobs:
  test:',
      ),
      1 => 
      array (
        'heading' => 'Workflow básico',
        'body' => 'Un archivo `.github/workflows/ci.yml` define pasos: checkout, install, test.',
        'code' => 'name: CI
on: [push]
jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - run: composer install
      - run: vendor/bin/phpunit',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde viven los workflows de GitHub Actions?',
        'options' => 
        array (
          0 => '.github/workflows/',
          1 => 'docker/',
          2 => 'vendor/',
        ),
        'answer' => '.github/workflows/',
        'explanation' => 'YAML en `.github/workflows/` define cada pipeline.',
        'pro_tip' => 'Abre el ci.yml de EscalaPHP en tu editor — es un ejemplo real.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un fragmento YAML con trigger on push y un job llamado test',
        'must_contain' => 
        array (
          0 => 'on:',
          1 => 'push',
          2 => 'jobs:',
          3 => 'test:',
        ),
        'hint' => 'on: [push]
jobs:
  test:',
        'explanation' => 'Estructura mínima de un workflow CI.',
        'pro_tip' => 'Corre tests en PHP, Python y JS según el stack del proyecto.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ci-deploy',
    'order' => 2,
    'title' => 'Deploy automático',
    'level' => 'CD',
    'minutes' => 30,
    'summary' => 'Staging vs producción, secrets y deploy seguro.',
    'concepts' => 
    array (
      0 => 'cd',
      1 => 'deploy',
      2 => 'staging',
      3 => 'secrets',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Entrega Continua',
        'body' => '**CD** despliega automáticamente cuando CI pasa. Staging primero, producción con aprobación.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-deploy
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Secrets',
        'body' => 'Nunca pongas contraseñas en el YAML. Usa **GitHub Secrets** para credenciales.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-deploy
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde guardas una API key para el pipeline?',
        'options' => 
        array (
          0 => 'GitHub Secrets',
          1 => 'En el código fuente',
          2 => 'En un tweet',
        ),
        'answer' => 'GitHub Secrets',
        'explanation' => 'Los secrets se inyectan en runtime, nunca en el repo.',
        'pro_tip' => 'Rota secrets periódicamente y usa mínimos permisos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuál es el orden correcto en CD?',
        'options' => 
        array (
          0 => 'CI pasa → staging → producción',
          1 => 'Producción directo sin tests',
          2 => 'Solo manual siempre',
        ),
        'answer' => 'CI pasa → staging → producción',
        'explanation' => 'Staging valida en entorno parecido a prod antes del release.',
        'pro_tip' => 'Blue/green o canary reducen riesgo en deploys grandes.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ci-docker',
    'order' => 3,
    'title' => 'CI con Docker',
    'level' => 'Integración',
    'minutes' => 30,
    'summary' => 'Build de imagen y push a registry en el pipeline.',
    'concepts' => 
    array (
      0 => 'docker',
      1 => 'registry',
      2 => 'build',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Build en CI',
        'body' => 'El pipeline puede construir tu imagen Docker y subirla a Docker Hub o GHCR.',
        'code' => '- run: docker build -t mi-app .
- run: docker push mi-app:latest',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe los comandos docker build y docker push en un pipeline',
        'must_contain' => 
        array (
          0 => 'docker build',
          1 => 'docker push',
        ),
        'hint' => 'docker build -t mi-app .
docker push mi-app:latest',
        'explanation' => 'Build + push automatiza el camino a producción containerizada.',
        'pro_tip' => 'Taggea con el SHA del commit para trazabilidad.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ci-matrix',
    'order' => 4,
    'title' => 'Matrix builds multi-versión',
    'level' => 'CI',
    'minutes' => 25,
    'summary' => 'Probar PHP 8.2 y 8.3 en paralelo con strategy.matrix.',
    'concepts' => 
    array (
      0 => 'matrix',
      1 => 'parallel',
      2 => 'versions',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Strategy matrix',
        'body' => 'GitHub Actions puede correr el mismo job con varias versiones de PHP, Node o OS en paralelo.',
        'code' => 'strategy:
  matrix:
    php: [\'8.2\', \'8.3\']',
      ),
      1 => 
      array (
        'heading' => 'Por qué',
        'body' => 'Detectas incompatibilidades antes de que un usuario en PHP 8.2 reporte el bug.',
        'code' => 'strategy:
  matrix:
    php: [\'8.3\']',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace strategy.matrix en GitHub Actions?',
        'options' => 
        array (
          0 => 'Ejecuta el job con varias combinaciones de parámetros',
          1 => 'Borra el repo',
          2 => 'Solo corre en Windows',
        ),
        'answer' => 'Ejecuta el job con varias combinaciones de parámetros',
        'explanation' => 'Matrix = tests en PHP 8.2, 8.3, 8.4 a la vez.',
        'pro_tip' => 'fail-fast: false sigue aunque una versión falle.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe strategy: y matrix: con php en el YAML',
        'must_contain' => 
        array (
          0 => 'strategy:',
          1 => 'matrix:',
          2 => 'php',
        ),
        'hint' => 'strategy:
  matrix:
    php: [\'8.3\']',
        'explanation' => 'Matrix declara las variantes del pipeline.',
        'pro_tip' => 'Usa ${{ matrix.php }} en setup-php.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ci-env',
    'order' => 5,
    'title' => 'Entornos y approvals',
    'level' => 'CD',
    'minutes' => 30,
    'summary' => 'staging, production y gates manuales.',
    'concepts' => 
    array (
      0 => 'environment',
      1 => 'approval',
      2 => 'staging',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Environments',
        'body' => 'GitHub **Environments** separan staging y production con secrets distintos y reglas de aprobación.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-env
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Protection rules',
        'body' => 'Production puede requerir que un humano apruebe antes del deploy.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-env
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué separar staging y production?',
        'options' => 
        array (
          0 => 'Probar en entorno parecido sin afectar usuarios',
          1 => 'Porque Git lo exige',
          2 => 'Para ir más lento siempre',
        ),
        'answer' => 'Probar en entorno parecido sin afectar usuarios',
        'explanation' => 'Staging es el ensayo general antes del estreno.',
        'pro_tip' => 'Datos de staging deben ser anonimizados, nunca prod real.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde configuras aprobación manual para prod?',
        'options' => 
        array (
          0 => 'GitHub Environment protection rules',
          1 => 'En el README',
          2 => 'En php.ini',
        ),
        'answer' => 'GitHub Environment protection rules',
        'explanation' => 'Required reviewers bloquean deploy hasta aprobación.',
        'pro_tip' => 'Branch protection + environments = doble red de seguridad.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ci-rollback',
    'order' => 6,
    'title' => 'Rollback y health checks',
    'level' => 'CD',
    'minutes' => 25,
    'summary' => 'Revertir deploys y smoke tests post-deploy.',
    'concepts' => 
    array (
      0 => 'rollback',
      1 => 'healthcheck',
      2 => 'smoke-test',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Smoke tests',
        'body' => 'Tras deploy, un curl a `/health` confirma que la app responde antes de dar por bueno el release.',
        'code' => 'curl -f https://mi-app/health',
      ),
      1 => 
      array (
        'heading' => 'Rollback',
        'body' => 'Si falla: redeploy de la imagen anterior o `kubectl rollout undo`. Automatízalo en el pipeline.',
        'code' => 'curl -f https://mi-app/health',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es un smoke test post-deploy?',
        'options' => 
        array (
          0 => 'Verificación rápida de que la app vive',
          1 => 'Test de humo literal',
          2 => 'Borrar la BD',
        ),
        'answer' => 'Verificación rápida de que la app vive',
        'explanation' => 'Un health check básico evita dejar prod caído horas.',
        'pro_tip' => 'EscalaPHP tiene ruta /health — úsala como ejemplo.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un paso curl -f https://mi-app/health en el workflow',
        'must_contain' => 
        array (
          0 => 'curl',
          1 => 'health',
        ),
        'hint' => 'curl -f https://mi-app/health',
        'explanation' => '-f hace fallar el step si HTTP no es 2xx.',
        'pro_tip' => 'Combina con notificación Slack si el smoke test falla.',
      ),
    ),
  ),
);
