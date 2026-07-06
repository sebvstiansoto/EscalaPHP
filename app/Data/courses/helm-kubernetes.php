<?php

declare(strict_types=1);

return [
    ['slug' => 'hm-intro', 'order' => 1, 'title' => 'Helm intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Package manager de Kubernetes.', 'concepts' => ['helm', 'chart', 'release'], 'sections' => [
        ['heading' => 'Helm', 'body' => '**Helm** empaqueta manifests K8s en **charts** — install, upgrade, rollback versionado.'],
        ['heading' => 'Conceptos', 'body' => 'Chart (template) → Release (instancia en cluster) → Repository.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Helm es...?', 'options' => ['Package manager K8s', 'Container runtime', 'CI tool only'], 'answer' => 'Package manager K8s', 'explanation' => 'apt/yum para Kubernetes.', 'pro_tip' => 'Curso Kubernetes prerequisite.'],
        ['type' => 'choice', 'question' => '¿helm install?', 'options' => ['Despliega release chart en cluster', 'Build Docker', 'terraform apply'], 'answer' => 'Despliega release chart en cluster', 'explanation' => 'Crea recursos templated.', 'pro_tip' => 'helm list ver releases.'],
    ]],
    ['slug' => 'hm-charts', 'order' => 2, 'title' => 'Anatomía de un chart', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Chart.yaml, templates/, values.', 'concepts' => ['chart.yaml', 'template', 'values'], 'sections' => [
        ['heading' => 'Estructura', 'body' => 'Chart.yaml metadata, values.yaml defaults, templates/*.yaml con Go templates.'],
        ['heading' => 'Template', 'body' => 'apiVersion: {{ .Values.apiVersion }} — inject values en YAML.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Values.yaml?', 'options' => ['Config default parametrizable', 'Secret plain', 'Dockerfile'], 'answer' => 'Config default parametrizable', 'explanation' => 'Override con -f prod.yaml.', 'pro_tip' => 'helm create scaffold chart.'],
        ['type' => 'contains', 'question' => 'Escribe .Values en template', 'must_contain' => ['Values'], 'hint' => '{{ .Values.replicaCount }}', 'explanation' => 'Go template syntax.', 'pro_tip' => 'helm template dry-run render local.'],
    ]],
    ['slug' => 'hm-values', 'order' => 3, 'title' => 'Values y entornos', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'dev/staging/prod overrides.', 'concepts' => ['override', 'environment', 'merge'], 'sections' => [
        ['heading' => 'Overrides', 'body' => 'helm install -f values-prod.yaml — merge sobre defaults.'],
        ['heading' => '--set', 'body' => 'helm upgrade --set replicaCount=5 — CLI quick override.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Múltiples values files?', 'options' => ['Merge left to right', 'Solo uno', 'Random'], 'answer' => 'Merge left to right', 'explanation' => 'values.yaml + prod.yaml.', 'pro_tip' => 'GitOps: values en repo por env.'],
        ['type' => 'choice', 'question' => '¿helm diff plugin?', 'options' => ['Preview cambios pre-upgrade', 'Delete cluster', 'Build image'], 'answer' => 'Preview cambios pre-upgrade', 'explanation' => 'Safety en prod.', 'pro_tip' => 'Compare terraform plan.'],
    ]],
    ['slug' => 'hm-release', 'order' => 4, 'title' => 'Upgrade y rollback', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Revisiones y history.', 'concepts' => ['upgrade', 'rollback', 'revision'], 'sections' => [
        ['heading' => 'Upgrade', 'body' => 'helm upgrade myapp ./chart — nueva revision, rolling update recursos.'],
        ['heading' => 'Rollback', 'body' => 'helm rollback myapp 2 — vuelve revision anterior instant.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿helm history?', 'options' => ['Lista revisiones release', 'Git log', 'Pod logs'], 'answer' => 'Lista revisiones release', 'explanation' => 'Audit deploys.', 'pro_tip' => 'helm rollback 0 = previous.'],
        ['type' => 'choice', 'question' => '¿Failed upgrade?', 'options' => ['helm rollback o fix values', 'Delete cluster', 'Ignore'], 'answer' => 'helm rollback o fix values', 'explanation' => 'Atomic option auto-rollback.', 'pro_tip' => '--atomic flag Helm 3.'],
    ]],
    ['slug' => 'hm-hooks', 'order' => 5, 'title' => 'Hooks y dependencias', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'pre-install, post-upgrade, subcharts.', 'concepts' => ['hook', 'subchart', 'dependency'], 'sections' => [
        ['heading' => 'Hooks', 'body' => 'helm.sh/hook: pre-install — Job migración BD antes deploy.'],
        ['heading' => 'Dependencies', 'body' => 'Chart.yaml dependencies — PostgreSQL bitnami subchart.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿pre-install hook?', 'options' => ['Ejecuta antes recursos principales', 'Después delete', 'Sin orden'], 'answer' => 'Ejecuta antes recursos principales', 'explanation' => 'Migrations, secrets init.', 'pro_tip' => 'hook-weight orden hooks.'],
        ['type' => 'choice', 'question' => '¿helm dependency update?', 'options' => ['Descarga subcharts Chart.yaml', 'npm install', 'git pull'], 'answer' => 'Descarga subcharts Chart.yaml', 'explanation' => 'Vendor charts/ dir.', 'pro_tip' => 'Artifact Hub find charts.'],
    ]],
    ['slug' => 'hm-prod', 'order' => 6, 'title' => 'Helm en CI/CD y GitOps', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'ArgoCD, secrets y best practices.', 'concepts' => ['gitops', 'argocd', 'sealed-secrets'], 'sections' => [
        ['heading' => 'GitOps', 'body' => 'ArgoCD/Flux sync cluster desde git — Helm chart source of truth.'],
        ['heading' => 'Secrets', 'body' => 'External Secrets Operator, Sealed Secrets — no plain secrets in git.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿GitOps principio?', 'options' => ['Git desired state → cluster reconciles', 'kubectl manual prod', 'SSH edit pods'], 'answer' => 'Git desired state → cluster reconciles', 'explanation' => 'Audit trail deploys.', 'pro_tip' => 'Curso cicd complementa.'],
        ['type' => 'choice', 'question' => '¿helm uninstall?', 'options' => ['Borra release recursos', 'Solo pause', 'Delete cluster'], 'answer' => 'Borra release recursos', 'explanation' => 'keep-history option conserva meta.', 'pro_tip' => 'Namespace finalizers cuidado.'],
    ]],
];
