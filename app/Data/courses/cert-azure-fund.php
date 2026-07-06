<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'azc-intro',
    'order' => 1,
    'title' => 'AZ-900 Fundamentals',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Azure cert entry level.',
    'concepts' => 
    array (
      0 => 'az900',
      1 => 'azure',
      2 => 'cloud',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'AZ-900',
        'body' => '**Microsoft Azure Fundamentals** — cloud concepts, Azure services, pricing, governance — ideal primer antes AZ-104/204.',
        'code' => '# Practica: azc-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Formato',
        'body' => '40-60 preguntas, multiple choice — no hands-on required but helps.',
        'code' => '# Practica: azc-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿AZ-900 nivel?',
        'options' => 
        array (
          0 => 'Fundamentals beginner',
          1 => 'Expert only',
          2 => 'Developer only',
        ),
        'answer' => 'Fundamentals beginner',
        'explanation' => 'No prereqs official.',
        'pro_tip' => 'Curso azure-cloud-basico extends.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cloud model IaaS?',
        'options' => 
        array (
          0 => 'Rent VMs you manage OS',
          1 => 'SaaS only email',
          2 => 'On-prem only',
        ),
        'answer' => 'Rent VMs you manage OS',
        'explanation' => 'PaaS/SaaS less manage.',
        'pro_tip' => 'Compare AWS GCP courses.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'azc-iam',
    'order' => 2,
    'title' => 'IAM y governance',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Subscriptions, RBAC, policies.',
    'concepts' => 
    array (
      0 => 'rbac',
      1 => 'subscription',
      2 => 'policy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'RBAC',
        'body' => 'Owner, Contributor, Reader — scope subscription/resource group/resource.',
        'code' => '# Practica: azc-iam
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Azure Policy',
        'body' => 'Enforce tags, regions allowed — governance at scale.',
        'code' => '# Practica: azc-iam
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Contributor vs Reader?',
        'options' => 
        array (
          0 => 'Contributor manage; Reader view only',
          1 => 'Same',
          2 => 'Reader manage',
        ),
        'answer' => 'Contributor manage; Reader view only',
        'explanation' => 'Least privilege RBAC.',
        'pro_tip' => 'Entra ID identity center.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Management Group?',
        'options' => 
        array (
          0 => 'Organize multiple subscriptions',
          1 => 'Single VM',
          2 => 'DNS record',
        ),
        'answer' => 'Organize multiple subscriptions',
        'explanation' => 'Enterprise hierarchy.',
        'pro_tip' => 'Compare AWS Organizations.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'azc-compute',
    'order' => 3,
    'title' => 'Compute y storage exam',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'VMs, App Service, Blob, SQL.',
    'concepts' => 
    array (
      0 => 'vm',
      1 => 'appservice',
      2 => 'blob',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Compute options',
        'body' => 'VMs IaaS, App Service PaaS web, Functions serverless, AKS containers.',
        'code' => '# Practica: azc-compute
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Storage',
        'body' => 'Blob object, File share, Queue messages, Table NoSQL.',
        'code' => '# Practica: azc-compute
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Blob storage tipo?',
        'options' => 
        array (
          0 => 'Object like S3',
          1 => 'Relational SQL',
          2 => 'VM disk only',
        ),
        'answer' => 'Object like S3',
        'explanation' => 'Hot cool archive tiers.',
        'pro_tip' => 'Curso azure-cloud-basico hands-on.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿App Service?',
        'options' => 
        array (
          0 => 'PaaS web apps managed',
          1 => 'Raw VM SSH',
          2 => 'DNS only',
        ),
        'answer' => 'PaaS web apps managed',
        'explanation' => 'Deploy git/zip.',
        'pro_tip' => 'Compare Heroku model.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'azc-network',
    'order' => 4,
    'title' => 'Networking basics',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'VNet, peering, VPN, ExpressRoute.',
    'concepts' => 
    array (
      0 => 'vnet',
      1 => 'peering',
      2 => 'vpn',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'VNet',
        'body' => 'Virtual Network — subnets, NSG, similar AWS VPC.',
        'code' => '# Practica: azc-network
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Hybrid',
        'body' => 'VPN Site-to-Site, ExpressRoute dedicated — on-prem to Azure.',
        'code' => '# Practica: azc-network
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿VNet equivale...?',
        'options' => 
        array (
          0 => 'AWS VPC',
          1 => 'S3 bucket',
          2 => 'Lambda',
        ),
        'answer' => 'AWS VPC',
        'explanation' => 'Private network cloud.',
        'pro_tip' => 'Curso networking-devops.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿VNet peering?',
        'options' => 
        array (
          0 => 'Connect two VNets private',
          1 => 'Public internet',
          2 => 'Email',
        ),
        'answer' => 'Connect two VNets private',
        'explanation' => 'Low latency cross-VNet.',
        'pro_tip' => 'Same region vs global peering.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'azc-cost',
    'order' => 5,
    'title' => 'Pricing y SLA',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'TCO calculator, reservations, SLA.',
    'concepts' => 
    array (
      0 => 'cost',
      1 => 'sla',
      2 => 'reservation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pricing',
        'body' => 'Pay-as-you-go, Reserved Instances savings, Spot VMs — TCO Calculator compare on-prem.',
        'code' => '# Practica: azc-cost
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'SLA',
        'body' => 'Single instance VM no SLA — Availability Sets, Zones — exam knows numbers overview.',
        'code' => '# Practica: azc-cost
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Reserved capacity?',
        'options' => 
        array (
          0 => 'Commit 1-3 years discount',
          1 => 'Free always',
          2 => 'Pay more',
        ),
        'answer' => 'Commit 1-3 years discount',
        'explanation' => 'Predictable workloads.',
        'pro_tip' => 'Azure Hybrid Benefit licenses.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Availability Zone?',
        'options' => 
        array (
          0 => 'Separate datacenters region',
          1 => 'Different region',
          2 => 'Backup tape',
        ),
        'answer' => 'Separate datacenters region',
        'explanation' => '99.99% SLA services.',
        'pro_tip' => 'Compare AWS AZ concept.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'azc-exam',
    'order' => 6,
    'title' => 'Prep exam AZ-900',
    'level' => 'Producción',
    'minutes' => 25,
    'summary' => 'Study path y next certs.',
    'concepts' => 
    array (
      0 => 'study',
      1 => 'path',
      2 => 'next',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Study',
        'body' => 'Microsoft Learn free path AZ-900 — practice assessments — 1-2 semanas part-time.',
        'code' => '# Practica: azc-exam
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Next steps',
        'body' => 'AZ-104 Administrator, AZ-204 Developer, AZ-305 Architect — según rol.',
        'code' => '# Practica: azc-exam
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Shared responsibility model?',
        'options' => 
        array (
          0 => 'Cloud provider infra; customer data/app',
          1 => 'Provider all',
          2 => 'Customer all',
        ),
        'answer' => 'Cloud provider infra; customer data/app',
        'explanation' => 'IaaS vs PaaS split differs.',
        'pro_tip' => 'Curso seguridad-web applies.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿After AZ-900 developer?',
        'options' => 
        array (
          0 => 'AZ-204',
          1 => 'CKA only',
          2 => 'No more certs',
        ),
        'answer' => 'AZ-204',
        'explanation' => 'Role-based path.',
        'pro_tip' => 'Curso csharp-dotnet pairs Azure.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'cert-azure-fund-simulacro',
    'order' => 7,
    'title' => 'Simulacro de preguntas clave',
    'level' => 'Producción',
    'minutes' => 40,
    'summary' => 'Simulacro de preguntas clave — cierre avanzado de Cert AZ-900.',
    'concepts' => 
    array (
      0 => 'exam-prep',
      1 => 'strategy',
      2 => 'review',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Preguntas tipo examen',
        'body' => 'Repasa escenarios típicos del examen oficial de Cert AZ-900: servicios clave, límites, costos y arquitecturas recomendadas.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Día del examen',
        'body' => 'Gestiona el tiempo, marca preguntas difíciles, elimina respuestas obviamente incorrectas y repasa tus puntos débiles la semana previa.',
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
        'question' => '¿Qué hacer primero ante una pregunta larga en el examen?',
        'options' => 
        array (
          0 => 'Leer el final para entender qué piden',
          1 => 'Responder al azar',
          2 => 'Saltar sin leer',
        ),
        'answer' => 'Leer el final para entender qué piden',
        'explanation' => 'Muchas preguntas de certificación esconden el requisito real al final del enunciado.',
        'pro_tip' => 'Simula con temporizador — la presión del tiempo es parte del examen.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo marcar una pregunta para revisar después?',
        'options' => 
        array (
          0 => 'Cuando llevas más de 2 min sin avanzar',
          1 => 'Nunca',
          2 => 'Siempre en la primera',
        ),
        'answer' => 'Cuando llevas más de 2 min sin avanzar',
        'explanation' => 'Gestiona el reloj: responde lo seguro primero y vuelve a lo marcado.',
        'pro_tip' => 'Repasa los simulacros conclicados de la plataforma antes del día D.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'cert-azure-fund-estrategia',
    'order' => 8,
    'title' => 'Estrategia y checklist del examen',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'Estrategia y checklist del examen — cierre avanzado de Cert AZ-900.',
    'concepts' => 
    array (
      0 => 'exam-prep',
      1 => 'strategy',
      2 => 'review',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Preguntas tipo examen',
        'body' => 'Repasa escenarios típicos del examen oficial de Cert AZ-900: servicios clave, límites, costos y arquitecturas recomendadas.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Día del examen',
        'body' => 'Gestiona el tiempo, marca preguntas difíciles, elimina respuestas obviamente incorrectas y repasa tus puntos débiles la semana previa.',
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
        'question' => '¿Qué hacer primero ante una pregunta larga en el examen?',
        'options' => 
        array (
          0 => 'Leer el final para entender qué piden',
          1 => 'Responder al azar',
          2 => 'Saltar sin leer',
        ),
        'answer' => 'Leer el final para entender qué piden',
        'explanation' => 'Muchas preguntas de certificación esconden el requisito real al final del enunciado.',
        'pro_tip' => 'Simula con temporizador — la presión del tiempo es parte del examen.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo marcar una pregunta para revisar después?',
        'options' => 
        array (
          0 => 'Cuando llevas más de 2 min sin avanzar',
          1 => 'Nunca',
          2 => 'Siempre en la primera',
        ),
        'answer' => 'Cuando llevas más de 2 min sin avanzar',
        'explanation' => 'Gestiona el reloj: responde lo seguro primero y vuelve a lo marcado.',
        'pro_tip' => 'Repasa los simulacros conclicados de la plataforma antes del día D.',
      ),
    ),
  ),
);
