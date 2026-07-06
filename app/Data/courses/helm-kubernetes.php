<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'hm-intro',
    'order' => 1,
    'title' => 'Helm intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Package manager de Kubernetes.',
    'concepts' => 
    array (
      0 => 'helm',
      1 => 'chart',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Helm',
        'body' => '**Helm** empaqueta manifests K8s en **charts** — install, upgrade, rollback versionado.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Conceptos',
        'body' => 'Chart (template) → Release (instancia en cluster) → Repository.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Helm es...?',
        'options' => 
        array (
          0 => 'Package manager K8s',
          1 => 'Container runtime',
          2 => 'CI tool only',
        ),
        'answer' => 'Package manager K8s',
        'explanation' => 'apt/yum para Kubernetes.',
        'pro_tip' => 'Curso Kubernetes prerequisite.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿helm install?',
        'options' => 
        array (
          0 => 'Despliega release chart en cluster',
          1 => 'Build Docker',
          2 => 'terraform apply',
        ),
        'answer' => 'Despliega release chart en cluster',
        'explanation' => 'Crea recursos templated.',
        'pro_tip' => 'helm list ver releases.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'hm-charts',
    'order' => 2,
    'title' => 'Anatomía de un chart',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Chart.yaml, templates/, values.',
    'concepts' => 
    array (
      0 => 'chart.yaml',
      1 => 'template',
      2 => 'values',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Estructura',
        'body' => 'Chart.yaml metadata, values.yaml defaults, templates/*.yaml con Go templates.',
        'code' => '{{ .Values.replicaCount }}',
      ),
      1 => 
      array (
        'heading' => 'Template',
        'body' => 'apiVersion: {{ .Values.apiVersion }} — inject values en YAML.',
        'code' => '{{ .Values.replicaCount }}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Values.yaml?',
        'options' => 
        array (
          0 => 'Config default parametrizable',
          1 => 'Secret plain',
          2 => 'Dockerfile',
        ),
        'answer' => 'Config default parametrizable',
        'explanation' => 'Override con -f prod.yaml.',
        'pro_tip' => 'helm create scaffold chart.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe .Values en template',
        'must_contain' => 
        array (
          0 => 'Values',
        ),
        'hint' => '{{ .Values.replicaCount }}',
        'explanation' => 'Go template syntax.',
        'pro_tip' => 'helm template dry-run render local.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'hm-values',
    'order' => 3,
    'title' => 'Values y entornos',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'dev/staging/prod overrides.',
    'concepts' => 
    array (
      0 => 'override',
      1 => 'environment',
      2 => 'merge',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Overrides',
        'body' => 'helm install -f values-prod.yaml — merge sobre defaults.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-values
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => '--set',
        'body' => 'helm upgrade --set replicaCount=5 — CLI quick override.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-values
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Múltiples values files?',
        'options' => 
        array (
          0 => 'Merge left to right',
          1 => 'Solo uno',
          2 => 'Random',
        ),
        'answer' => 'Merge left to right',
        'explanation' => 'values.yaml + prod.yaml.',
        'pro_tip' => 'GitOps: values en repo por env.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿helm diff plugin?',
        'options' => 
        array (
          0 => 'Preview cambios pre-upgrade',
          1 => 'Delete cluster',
          2 => 'Build image',
        ),
        'answer' => 'Preview cambios pre-upgrade',
        'explanation' => 'Safety en prod.',
        'pro_tip' => 'Compare terraform plan.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'hm-release',
    'order' => 4,
    'title' => 'Upgrade y rollback',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Revisiones y history.',
    'concepts' => 
    array (
      0 => 'upgrade',
      1 => 'rollback',
      2 => 'revision',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Upgrade',
        'body' => 'helm upgrade myapp ./chart — nueva revision, rolling update recursos.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-release
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Rollback',
        'body' => 'helm rollback myapp 2 — vuelve revision anterior instant.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-release
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿helm history?',
        'options' => 
        array (
          0 => 'Lista revisiones release',
          1 => 'Git log',
          2 => 'Pod logs',
        ),
        'answer' => 'Lista revisiones release',
        'explanation' => 'Audit deploys.',
        'pro_tip' => 'helm rollback 0 = previous.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Failed upgrade?',
        'options' => 
        array (
          0 => 'helm rollback o fix values',
          1 => 'Delete cluster',
          2 => 'Ignore',
        ),
        'answer' => 'helm rollback o fix values',
        'explanation' => 'Atomic option auto-rollback.',
        'pro_tip' => '--atomic flag Helm 3.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'hm-hooks',
    'order' => 5,
    'title' => 'Hooks y dependencias',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'pre-install, post-upgrade, subcharts.',
    'concepts' => 
    array (
      0 => 'hook',
      1 => 'subchart',
      2 => 'dependency',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hooks',
        'body' => 'helm.sh/hook: pre-install — Job migración BD antes deploy.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-hooks
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Dependencies',
        'body' => 'Chart.yaml dependencies — PostgreSQL bitnami subchart.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-hooks
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿pre-install hook?',
        'options' => 
        array (
          0 => 'Ejecuta antes recursos principales',
          1 => 'Después delete',
          2 => 'Sin orden',
        ),
        'answer' => 'Ejecuta antes recursos principales',
        'explanation' => 'Migrations, secrets init.',
        'pro_tip' => 'hook-weight orden hooks.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿helm dependency update?',
        'options' => 
        array (
          0 => 'Descarga subcharts Chart.yaml',
          1 => 'npm install',
          2 => 'git pull',
        ),
        'answer' => 'Descarga subcharts Chart.yaml',
        'explanation' => 'Vendor charts/ dir.',
        'pro_tip' => 'Artifact Hub find charts.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'hm-prod',
    'order' => 6,
    'title' => 'Helm en CI/CD y GitOps',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'ArgoCD, secrets y best practices.',
    'concepts' => 
    array (
      0 => 'gitops',
      1 => 'argocd',
      2 => 'sealed-secrets',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'GitOps',
        'body' => 'ArgoCD/Flux sync cluster desde git — Helm chart source of truth.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-prod
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Secrets',
        'body' => 'External Secrets Operator, Sealed Secrets — no plain secrets in git.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: hm-prod
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿GitOps principio?',
        'options' => 
        array (
          0 => 'Git desired state → cluster reconciles',
          1 => 'kubectl manual prod',
          2 => 'SSH edit pods',
        ),
        'answer' => 'Git desired state → cluster reconciles',
        'explanation' => 'Audit trail deploys.',
        'pro_tip' => 'Curso cicd complementa.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿helm uninstall?',
        'options' => 
        array (
          0 => 'Borra release recursos',
          1 => 'Solo pause',
          2 => 'Delete cluster',
        ),
        'answer' => 'Borra release recursos',
        'explanation' => 'keep-history option conserva meta.',
        'pro_tip' => 'Namespace finalizers cuidado.',
      ),
    ),
  ),
);
