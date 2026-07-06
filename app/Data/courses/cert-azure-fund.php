<?php

declare(strict_types=1);

return [
    ['slug' => 'azc-intro', 'order' => 1, 'title' => 'AZ-900 Fundamentals', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Azure cert entry level.', 'concepts' => ['az900', 'azure', 'cloud'], 'sections' => [
        ['heading' => 'AZ-900', 'body' => '**Microsoft Azure Fundamentals** — cloud concepts, Azure services, pricing, governance — ideal primer antes AZ-104/204.'],
        ['heading' => 'Formato', 'body' => '40-60 preguntas, multiple choice — no hands-on required but helps.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿AZ-900 nivel?', 'options' => ['Fundamentals beginner', 'Expert only', 'Developer only'], 'answer' => 'Fundamentals beginner', 'explanation' => 'No prereqs official.', 'pro_tip' => 'Curso azure-cloud-basico extends.'],
        ['type' => 'choice', 'question' => '¿Cloud model IaaS?', 'options' => ['Rent VMs you manage OS', 'SaaS only email', 'On-prem only'], 'answer' => 'Rent VMs you manage OS', 'explanation' => 'PaaS/SaaS less manage.', 'pro_tip' => 'Compare AWS GCP courses.'],
    ]],
    ['slug' => 'azc-iam', 'order' => 2, 'title' => 'IAM y governance', 'level' => 'Fundamentos', 'minutes' => 30, 'summary' => 'Subscriptions, RBAC, policies.', 'concepts' => ['rbac', 'subscription', 'policy'], 'sections' => [
        ['heading' => 'RBAC', 'body' => 'Owner, Contributor, Reader — scope subscription/resource group/resource.'],
        ['heading' => 'Azure Policy', 'body' => 'Enforce tags, regions allowed — governance at scale.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Contributor vs Reader?', 'options' => ['Contributor manage; Reader view only', 'Same', 'Reader manage'], 'answer' => 'Contributor manage; Reader view only', 'explanation' => 'Least privilege RBAC.', 'pro_tip' => 'Entra ID identity center.'],
        ['type' => 'choice', 'question' => '¿Management Group?', 'options' => ['Organize multiple subscriptions', 'Single VM', 'DNS record'], 'answer' => 'Organize multiple subscriptions', 'explanation' => 'Enterprise hierarchy.', 'pro_tip' => 'Compare AWS Organizations.'],
    ]],
    ['slug' => 'azc-compute', 'order' => 3, 'title' => 'Compute y storage exam', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'VMs, App Service, Blob, SQL.', 'concepts' => ['vm', 'appservice', 'blob'], 'sections' => [
        ['heading' => 'Compute options', 'body' => 'VMs IaaS, App Service PaaS web, Functions serverless, AKS containers.'],
        ['heading' => 'Storage', 'body' => 'Blob object, File share, Queue messages, Table NoSQL.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Blob storage tipo?', 'options' => ['Object like S3', 'Relational SQL', 'VM disk only'], 'answer' => 'Object like S3', 'explanation' => 'Hot cool archive tiers.', 'pro_tip' => 'Curso azure-cloud-basico hands-on.'],
        ['type' => 'choice', 'question' => '¿App Service?', 'options' => ['PaaS web apps managed', 'Raw VM SSH', 'DNS only'], 'answer' => 'PaaS web apps managed', 'explanation' => 'Deploy git/zip.', 'pro_tip' => 'Compare Heroku model.'],
    ]],
    ['slug' => 'azc-network', 'order' => 4, 'title' => 'Networking basics', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'VNet, peering, VPN, ExpressRoute.', 'concepts' => ['vnet', 'peering', 'vpn'], 'sections' => [
        ['heading' => 'VNet', 'body' => 'Virtual Network — subnets, NSG, similar AWS VPC.'],
        ['heading' => 'Hybrid', 'body' => 'VPN Site-to-Site, ExpressRoute dedicated — on-prem to Azure.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿VNet equivale...?', 'options' => ['AWS VPC', 'S3 bucket', 'Lambda'], 'answer' => 'AWS VPC', 'explanation' => 'Private network cloud.', 'pro_tip' => 'Curso networking-devops.'],
        ['type' => 'choice', 'question' => '¿VNet peering?', 'options' => ['Connect two VNets private', 'Public internet', 'Email'], 'answer' => 'Connect two VNets private', 'explanation' => 'Low latency cross-VNet.', 'pro_tip' => 'Same region vs global peering.'],
    ]],
    ['slug' => 'azc-cost', 'order' => 5, 'title' => 'Pricing y SLA', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'TCO calculator, reservations, SLA.', 'concepts' => ['cost', 'sla', 'reservation'], 'sections' => [
        ['heading' => 'Pricing', 'body' => 'Pay-as-you-go, Reserved Instances savings, Spot VMs — TCO Calculator compare on-prem.'],
        ['heading' => 'SLA', 'body' => 'Single instance VM no SLA — Availability Sets, Zones — exam knows numbers overview.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Reserved capacity?', 'options' => ['Commit 1-3 years discount', 'Free always', 'Pay more'], 'answer' => 'Commit 1-3 years discount', 'explanation' => 'Predictable workloads.', 'pro_tip' => 'Azure Hybrid Benefit licenses.'],
        ['type' => 'choice', 'question' => '¿Availability Zone?', 'options' => ['Separate datacenters region', 'Different region', 'Backup tape'], 'answer' => 'Separate datacenters region', 'explanation' => '99.99% SLA services.', 'pro_tip' => 'Compare AWS AZ concept.'],
    ]],
    ['slug' => 'azc-exam', 'order' => 6, 'title' => 'Prep exam AZ-900', 'level' => 'Producción', 'minutes' => 25, 'summary' => 'Study path y next certs.', 'concepts' => ['study', 'path', 'next'], 'sections' => [
        ['heading' => 'Study', 'body' => 'Microsoft Learn free path AZ-900 — practice assessments — 1-2 semanas part-time.'],
        ['heading' => 'Next steps', 'body' => 'AZ-104 Administrator, AZ-204 Developer, AZ-305 Architect — según rol.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Shared responsibility model?', 'options' => ['Cloud provider infra; customer data/app', 'Provider all', 'Customer all'], 'answer' => 'Cloud provider infra; customer data/app', 'explanation' => 'IaaS vs PaaS split differs.', 'pro_tip' => 'Curso seguridad-web applies.'],
        ['type' => 'choice', 'question' => '¿After AZ-900 developer?', 'options' => ['AZ-204', 'CKA only', 'No more certs'], 'answer' => 'AZ-204', 'explanation' => 'Role-based path.', 'pro_tip' => 'Curso csharp-dotnet pairs Azure.'],
    ]],
];
