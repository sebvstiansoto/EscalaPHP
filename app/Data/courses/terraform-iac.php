<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'tf-intro',
    'order' => 1,
    'title' => 'Infrastructure as Code',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Por qué Terraform, providers y estado.',
    'concepts' => 
    array (
      0 => 'iac',
      1 => 'terraform',
      2 => 'declarative',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'IaC',
        'body' => '**Terraform** describe infraestructura en HCL — versionable, revisable en PR, reproducible.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Declarativo',
        'body' => 'Defines estado deseado; Terraform calcula diff y aplica cambios.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Terraform es...?',
        'options' => 
        array (
          0 => 'Declarativo multi-cloud',
          1 => 'Solo AWS CLI',
          2 => 'Lenguaje de programación general',
        ),
        'answer' => 'Declarativo multi-cloud',
        'explanation' => 'Providers: AWS, GCP, Azure, K8s.',
        'pro_tip' => 'terraform init antes de todo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Estado (state) guarda...?',
        'options' => 
        array (
          0 => 'Mapping recurso TF ↔ real',
          1 => 'Código fuente app',
          2 => 'Logs',
        ),
        'answer' => 'Mapping recurso TF ↔ real',
        'explanation' => 'terraform.tfstate — crítico en equipo.',
        'pro_tip' => 'Remote state en S3 + lock DynamoDB.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'tf-hcl',
    'order' => 2,
    'title' => 'HCL y recursos básicos',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'resource, provider y variables.',
    'concepts' => 
    array (
      0 => 'hcl',
      1 => 'resource',
      2 => 'variable',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Sintaxis',
        'body' => 'resource "aws_s3_bucket" "assets" { bucket = var.name }',
        'code' => 'terraform {
  required_providers {
    aws = { source = "hashicorp/aws", version = "~> 5.0" }
  }
}',
      ),
      1 => 
      array (
        'heading' => 'Variables',
        'body' => 'variable "region" { default = "us-east-1" } — tfvars por entorno.',
        'code' => 'resource "tipo" "nombre" { ... }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Comando ver cambios planeados?',
        'options' => 
        array (
          0 => 'terraform plan',
          1 => 'terraform destroy only',
          2 => 'kubectl apply',
        ),
        'answer' => 'terraform plan',
        'explanation' => 'Preview antes de apply.',
        'pro_tip' => 'plan en CI en cada PR.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe resource block',
        'must_contain' => 
        array (
          0 => 'resource',
        ),
        'hint' => 'resource "tipo" "nombre" { ... }',
        'explanation' => 'Bloque fundamental TF.',
        'pro_tip' => 'data sources leen sin crear.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'tf-state',
    'order' => 3,
    'title' => 'State remoto y workspaces',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'S3 backend, locking y entornos.',
    'concepts' => 
    array (
      0 => 'remote-state',
      1 => 'workspace',
      2 => 'lock',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Remote state',
        'body' => 'backend "s3" { bucket, key, dynamodb_table } — equipo comparte state seguro.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-state
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Workspaces',
        'body' => 'terraform workspace select staging — mismo código, state separado.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-state
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué lock en state?',
        'options' => 
        array (
          0 => 'Evita dos apply simultáneos corruptos',
          1 => 'Cifra passwords',
          2 => 'Acelera plan',
        ),
        'answer' => 'Evita dos apply simultáneos corruptos',
        'explanation' => 'Race condition en CI/CD.',
        'pro_tip' => 'Nunca commitear tfstate con secrets.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Workspace vs directorio?',
        'options' => 
        array (
          0 => 'Workspace = mismo root module, distinto state',
          1 => 'Igual siempre',
          2 => 'Solo AWS',
        ),
        'answer' => 'Workspace = mismo root module, distinto state',
        'explanation' => 'dev/staging/prod patterns.',
        'pro_tip' => 'Algunos equipos prefieren dirs separados.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'tf-modules',
    'order' => 4,
    'title' => 'Módulos reutilizables',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'DRY infra, inputs/outputs y registry.',
    'concepts' => 
    array (
      0 => 'module',
      1 => 'output',
      2 => 'registry',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Módulos',
        'body' => 'module "vpc" { source = "./modules/vpc" cidr = "10.0.0.0/16" }',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-modules
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Outputs',
        'body' => 'output "vpc_id" { value = module.vpc.id } — encadena módulos.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-modules
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Módulo Terraform es...?',
        'options' => 
        array (
          0 => 'Paquete reutilizable de recursos',
          1 => 'Solo variable',
          2 => 'Provider',
        ),
        'answer' => 'Paquete reutilizable de recursos',
        'explanation' => 'Como función para infra.',
        'pro_tip' => 'Terraform Registry tiene módulos oficiales.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿output sirve para...?',
        'options' => 
        array (
          0 => 'Exportar IDs a otros módulos/stacks',
          1 => 'Solo print',
          2 => 'Borrar recursos',
        ),
        'answer' => 'Exportar IDs a otros módulos/stacks',
        'explanation' => 'Composición de infra.',
        'pro_tip' => 'terraform output -json en scripts.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'tf-aws',
    'order' => 5,
    'title' => 'Terraform + AWS',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'VPC, EC2, RDS con Terraform.',
    'concepts' => 
    array (
      0 => 'vpc',
      1 => 'ec2',
      2 => 'rds',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'VPC module',
        'body' => 'Subnets públicas/privadas, IGW, NAT — base de todo stack AWS.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-aws
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'RDS',
        'body' => 'aws_db_instance — subnet group privado, security group restrictivo.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-aws
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿EC2 en subnet privada accede internet via...?',
        'options' => 
        array (
          0 => 'NAT Gateway',
          1 => 'IGW directo',
          2 => 'Sin internet',
        ),
        'answer' => 'NAT Gateway',
        'explanation' => 'Privada no tiene IP pública.',
        'pro_tip' => 'Curso AWS complementa conceptos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Import recurso existente?',
        'options' => 
        array (
          0 => 'terraform import',
          1 => 'terraform new',
          2 => 'Manual only',
        ),
        'answer' => 'terraform import',
        'explanation' => 'Adopta infra legacy en TF.',
        'pro_tip' => 'import blocks en TF 1.5+.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'tf-prod',
    'order' => 6,
    'title' => 'CI/CD y buenas prácticas',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Plan en PR, policy as code y drift.',
    'concepts' => 
    array (
      0 => 'cicd',
      1 => 'drift',
      2 => 'sentinel',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pipeline',
        'body' => 'PR → terraform plan comment → merge → apply en staging → manual prod.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-prod
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Drift',
        'body' => 'Cambios manuales en consola vs state — detectar con plan periódico.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: tf-prod
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Apply en prod idealmente...?',
        'options' => 
        array (
          0 => 'Tras plan aprobado en CI',
          1 => 'Local laptop directo',
          2 => 'Sin plan',
        ),
        'answer' => 'Tras plan aprobado en CI',
        'explanation' => 'Audit trail y review.',
        'pro_tip' => 'Terraform Cloud / Atlantis.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿terraform destroy?',
        'options' => 
        array (
          0 => 'Elimina recursos del state',
          1 => 'Solo borra state file',
          2 => 'Backup',
        ),
        'answer' => 'Elimina recursos del state',
        'explanation' => 'Peligroso en prod — protege con policies.',
        'pro_tip' => 'prevent_destroy lifecycle meta-arg.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'terraform-iac-produccion',
    'order' => 7,
    'title' => 'Alta disponibilidad y recuperación ante fallos',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Alta disponibilidad y recuperación ante fallos — cierre avanzado de Terraform & IaC.',
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
        'body' => 'Aplica lo aprendido en Terraform & IaC a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
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
    'slug' => 'terraform-iac-operaciones',
    'order' => 8,
    'title' => 'Runbooks, SLOs y operación en producción',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Runbooks, SLOs y operación en producción — cierre avanzado de Terraform & IaC.',
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
        'body' => 'Aplica lo aprendido en Terraform & IaC a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
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
