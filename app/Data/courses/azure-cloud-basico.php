<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'az-intro',
    'order' => 1,
    'title' => 'Microsoft Azure intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Subscriptions, regions y portal.',
    'concepts' => 
    array (
      0 => 'azure',
      1 => 'subscription',
      2 => 'region',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Azure',
        'body' => 'Cloud **Microsoft** — fuerte integración .NET, Active Directory, enterprise híbrido.',
        'code' => '# Practica: az-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Jerarquía',
        'body' => 'Management Group → Subscription → Resource Group → Resources.',
        'code' => '# Practica: az-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Resource Group?',
        'options' => 
        array (
          0 => 'Contenedor lógico recursos lifecycle',
          1 => 'Solo VM',
          2 => 'Region física',
        ),
        'answer' => 'Contenedor lógico recursos lifecycle',
        'explanation' => 'Delete group = delete all.',
        'pro_tip' => 'Tags para cost allocation.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Azure CLI?',
        'options' => 
        array (
          0 => 'az command cross-platform',
          1 => 'Solo PowerShell',
          2 => 'Solo Windows',
        ),
        'answer' => 'az command cross-platform',
        'explanation' => 'az login, az group create.',
        'pro_tip' => 'Terraform azurerm provider.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'az-vm',
    'order' => 2,
    'title' => 'Virtual Machines',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'VMs, NSG y discos.',
    'concepts' => 
    array (
      0 => 'vm',
      1 => 'nsg',
      2 => 'disk',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Azure VM',
        'body' => 'Equivalente EC2/GCE — Windows o Linux, scale sets para auto-scale.',
        'code' => '# Practica: az-vm
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'NSG',
        'body' => 'Network Security Group — allow/deny puertos por subnet/NIC.',
        'code' => '# Practica: az-vm
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿NSG equivale a...?',
        'options' => 
        array (
          0 => 'AWS Security Group / firewall',
          1 => 'S3 bucket',
          2 => 'DNS',
        ),
        'answer' => 'AWS Security Group / firewall',
        'explanation' => 'Reglas inbound/outbound.',
        'pro_tip' => 'Curso AWS security groups.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Availability Set vs Zone?',
        'options' => 
        array (
          0 => 'Zone = datacenter distinto; Set = rack fault',
          1 => 'Igual',
          2 => 'Sin HA',
        ),
        'answer' => 'Zone = datacenter distinto; Set = rack fault',
        'explanation' => 'Zones mejor SLA moderno.',
        'pro_tip' => 'SLA 99.99% multi-zone.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'az-blob',
    'order' => 3,
    'title' => 'Blob Storage',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Containers, tiers y SAS.',
    'concepts' => 
    array (
      0 => 'blob',
      1 => 'container',
      2 => 'sas',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Blob Storage',
        'body' => 'Storage Account → containers → blobs — block/page/append.',
        'code' => '# Practica: az-blob
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'SAS',
        'body' => 'Shared Access Signature — URL temporal permisos limitados.',
        'code' => '# Practica: az-blob
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Blob equivale a...?',
        'options' => 
        array (
          0 => 'S3 / GCS object storage',
          1 => 'PostgreSQL',
          2 => 'VM disk only',
        ),
        'answer' => 'S3 / GCS object storage',
        'explanation' => 'Static assets, backups.',
        'pro_tip' => 'CDN Azure Front Door.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Hot vs Cool tier?',
        'options' => 
        array (
          0 => 'Hot acceso frecuente; Cool archival cheaper',
          1 => 'Igual precio',
          2 => 'Cool más rápido',
        ),
        'answer' => 'Hot acceso frecuente; Cool archival cheaper',
        'explanation' => 'Lifecycle management auto-tier.',
        'pro_tip' => 'Archive tier mínimo coste.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'az-sql',
    'order' => 4,
    'title' => 'Azure SQL y Cosmos DB',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'SQL managed y NoSQL global.',
    'concepts' => 
    array (
      0 => 'azuresql',
      1 => 'cosmosdb',
      2 => 'managed',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Azure SQL',
        'body' => 'SQL Server managed — compat SQL Server on-prem migration.',
        'code' => '# Practica: az-sql
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Cosmos DB',
        'body' => 'Multi-model global distributed — latency baja worldwide.',
        'code' => '# Practica: az-sql
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cosmos DB?',
        'options' => 
        array (
          0 => 'NoSQL multi-region low latency',
          1 => 'MySQL only',
          2 => 'File storage',
        ),
        'answer' => 'NoSQL multi-region low latency',
        'explanation' => 'API Mongo/SQL/Cassandra.',
        'pro_tip' => 'Compare MongoDB curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Azure SQL vs self-hosted?',
        'options' => 
        array (
          0 => 'Patches, backups managed',
          1 => 'Sin ventaja',
          2 => 'Solo dev',
        ),
        'answer' => 'Patches, backups managed',
        'explanation' => 'PaaS database.',
        'pro_tip' => 'Private endpoint VNet.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'az-functions',
    'order' => 5,
    'title' => 'Azure Functions',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Serverless triggers y bindings.',
    'concepts' => 
    array (
      0 => 'functions',
      1 => 'trigger',
      2 => 'binding',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Functions',
        'body' => 'HTTP, Queue, Timer triggers — pay per execution.',
        'code' => '# Practica: az-functions
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Bindings',
        'body' => 'Input/output Blob, Cosmos declarativos — menos boilerplate.',
        'code' => '# Practica: az-functions
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Functions equivale a...?',
        'options' => 
        array (
          0 => 'AWS Lambda',
          1 => 'EC2',
          2 => 'Kubernetes only',
        ),
        'answer' => 'AWS Lambda',
        'explanation' => 'Event-driven serverless.',
        'pro_tip' => 'Curso AWS Lambda comparar.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Consumption plan?',
        'options' => 
        array (
          0 => 'Scale auto pay per use',
          1 => 'Reserved always',
          2 => 'Free unlimited',
        ),
        'answer' => 'Scale auto pay per use',
        'explanation' => 'Cold start possible.',
        'pro_tip' => 'Premium plan sin cold start.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'az-deploy',
    'order' => 6,
    'title' => 'App Service y arquitectura',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'PaaS web, AAD y monitor.',
    'concepts' => 
    array (
      0 => 'appservice',
      1 => 'aad',
      2 => 'monitor',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'App Service',
        'body' => 'PaaS PHP/Node/.NET — deploy git, slots staging/production swap.',
        'code' => '# Practica: az-deploy
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Entra ID',
        'body' => 'Azure AD — SSO enterprise integración apps.',
        'code' => '# Practica: az-deploy
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Deployment slot swap?',
        'options' => 
        array (
          0 => 'Zero-downtime staging→prod',
          1 => 'Delete prod',
          2 => 'Manual DNS only',
        ),
        'answer' => 'Zero-downtime staging→prod',
        'explanation' => 'Blue-green pattern built-in.',
        'pro_tip' => 'Curso OAuth SSO complementa AAD.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Azure Monitor?',
        'options' => 
        array (
          0 => 'Logs metrics alerts unified',
          1 => 'Solo email',
          2 => 'Sin observabilidad',
        ),
        'answer' => 'Logs metrics alerts unified',
        'explanation' => 'Application Insights APM.',
        'pro_tip' => 'Curso observabilidad concepts.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'azure-cloud-basico-produccion',
    'order' => 7,
    'title' => 'Alta disponibilidad y recuperación ante fallos',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Alta disponibilidad y recuperación ante fallos — cierre avanzado de Microsoft Azure.',
    'concepts' => 
    array (
      0 => 'ha',
      1 => 'dr',
      2 => 'runbook',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Microsoft Azure a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
    'slug' => 'azure-cloud-basico-operaciones',
    'order' => 8,
    'title' => 'Runbooks, SLOs y operación en producción',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Runbooks, SLOs y operación en producción — cierre avanzado de Microsoft Azure.',
    'concepts' => 
    array (
      0 => 'ha',
      1 => 'dr',
      2 => 'runbook',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Microsoft Azure a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
