<?php

declare(strict_types=1);

return [
    ['slug' => 'az-intro', 'order' => 1, 'title' => 'Microsoft Azure intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Subscriptions, regions y portal.', 'concepts' => ['azure', 'subscription', 'region'], 'sections' => [
        ['heading' => 'Azure', 'body' => 'Cloud **Microsoft** — fuerte integración .NET, Active Directory, enterprise híbrido.'],
        ['heading' => 'Jerarquía', 'body' => 'Management Group → Subscription → Resource Group → Resources.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Resource Group?', 'options' => ['Contenedor lógico recursos lifecycle', 'Solo VM', 'Region física'], 'answer' => 'Contenedor lógico recursos lifecycle', 'explanation' => 'Delete group = delete all.', 'pro_tip' => 'Tags para cost allocation.'],
        ['type' => 'choice', 'question' => '¿Azure CLI?', 'options' => ['az command cross-platform', 'Solo PowerShell', 'Solo Windows'], 'answer' => 'az command cross-platform', 'explanation' => 'az login, az group create.', 'pro_tip' => 'Terraform azurerm provider.'],
    ]],
    ['slug' => 'az-vm', 'order' => 2, 'title' => 'Virtual Machines', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'VMs, NSG y discos.', 'concepts' => ['vm', 'nsg', 'disk'], 'sections' => [
        ['heading' => 'Azure VM', 'body' => 'Equivalente EC2/GCE — Windows o Linux, scale sets para auto-scale.'],
        ['heading' => 'NSG', 'body' => 'Network Security Group — allow/deny puertos por subnet/NIC.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿NSG equivale a...?', 'options' => ['AWS Security Group / firewall', 'S3 bucket', 'DNS'], 'answer' => 'AWS Security Group / firewall', 'explanation' => 'Reglas inbound/outbound.', 'pro_tip' => 'Curso AWS security groups.'],
        ['type' => 'choice', 'question' => '¿Availability Set vs Zone?', 'options' => ['Zone = datacenter distinto; Set = rack fault', 'Igual', 'Sin HA'], 'answer' => 'Zone = datacenter distinto; Set = rack fault', 'explanation' => 'Zones mejor SLA moderno.', 'pro_tip' => 'SLA 99.99% multi-zone.'],
    ]],
    ['slug' => 'az-blob', 'order' => 3, 'title' => 'Blob Storage', 'level' => 'Práctica', 'minutes' => 30, 'summary' => 'Containers, tiers y SAS.', 'concepts' => ['blob', 'container', 'sas'], 'sections' => [
        ['heading' => 'Blob Storage', 'body' => 'Storage Account → containers → blobs — block/page/append.'],
        ['heading' => 'SAS', 'body' => 'Shared Access Signature — URL temporal permisos limitados.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Blob equivale a...?', 'options' => ['S3 / GCS object storage', 'PostgreSQL', 'VM disk only'], 'answer' => 'S3 / GCS object storage', 'explanation' => 'Static assets, backups.', 'pro_tip' => 'CDN Azure Front Door.'],
        ['type' => 'choice', 'question' => '¿Hot vs Cool tier?', 'options' => ['Hot acceso frecuente; Cool archival cheaper', 'Igual precio', 'Cool más rápido'], 'answer' => 'Hot acceso frecuente; Cool archival cheaper', 'explanation' => 'Lifecycle management auto-tier.', 'pro_tip' => 'Archive tier mínimo coste.'],
    ]],
    ['slug' => 'az-sql', 'order' => 4, 'title' => 'Azure SQL y Cosmos DB', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'SQL managed y NoSQL global.', 'concepts' => ['azuresql', 'cosmosdb', 'managed'], 'sections' => [
        ['heading' => 'Azure SQL', 'body' => 'SQL Server managed — compat SQL Server on-prem migration.'],
        ['heading' => 'Cosmos DB', 'body' => 'Multi-model global distributed — latency baja worldwide.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Cosmos DB?', 'options' => ['NoSQL multi-region low latency', 'MySQL only', 'File storage'], 'answer' => 'NoSQL multi-region low latency', 'explanation' => 'API Mongo/SQL/Cassandra.', 'pro_tip' => 'Compare MongoDB curso.'],
        ['type' => 'choice', 'question' => '¿Azure SQL vs self-hosted?', 'options' => ['Patches, backups managed', 'Sin ventaja', 'Solo dev'], 'answer' => 'Patches, backups managed', 'explanation' => 'PaaS database.', 'pro_tip' => 'Private endpoint VNet.'],
    ]],
    ['slug' => 'az-functions', 'order' => 5, 'title' => 'Azure Functions', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Serverless triggers y bindings.', 'concepts' => ['functions', 'trigger', 'binding'], 'sections' => [
        ['heading' => 'Functions', 'body' => 'HTTP, Queue, Timer triggers — pay per execution.'],
        ['heading' => 'Bindings', 'body' => 'Input/output Blob, Cosmos declarativos — menos boilerplate.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Functions equivale a...?', 'options' => ['AWS Lambda', 'EC2', 'Kubernetes only'], 'answer' => 'AWS Lambda', 'explanation' => 'Event-driven serverless.', 'pro_tip' => 'Curso AWS Lambda comparar.'],
        ['type' => 'choice', 'question' => '¿Consumption plan?', 'options' => ['Scale auto pay per use', 'Reserved always', 'Free unlimited'], 'answer' => 'Scale auto pay per use', 'explanation' => 'Cold start possible.', 'pro_tip' => 'Premium plan sin cold start.'],
    ]],
    ['slug' => 'az-deploy', 'order' => 6, 'title' => 'App Service y arquitectura', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'PaaS web, AAD y monitor.', 'concepts' => ['appservice', 'aad', 'monitor'], 'sections' => [
        ['heading' => 'App Service', 'body' => 'PaaS PHP/Node/.NET — deploy git, slots staging/production swap.'],
        ['heading' => 'Entra ID', 'body' => 'Azure AD — SSO enterprise integración apps.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Deployment slot swap?', 'options' => ['Zero-downtime staging→prod', 'Delete prod', 'Manual DNS only'], 'answer' => 'Zero-downtime staging→prod', 'explanation' => 'Blue-green pattern built-in.', 'pro_tip' => 'Curso OAuth SSO complementa AAD.'],
        ['type' => 'choice', 'question' => '¿Azure Monitor?', 'options' => ['Logs metrics alerts unified', 'Solo email', 'Sin observabilidad'], 'answer' => 'Logs metrics alerts unified', 'explanation' => 'Application Insights APM.', 'pro_tip' => 'Curso observabilidad concepts.'],
    ]],
];
