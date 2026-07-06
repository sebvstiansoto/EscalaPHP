<?php

declare(strict_types=1);

return [
    [
        'slug' => 'tf-intro',
        'order' => 1,
        'title' => 'Infrastructure as Code',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Por qué Terraform, providers y estado.',
        'concepts' => ['iac', 'terraform', 'declarative'],
        'sections' => [
            ['heading' => 'IaC', 'body' => '**Terraform** describe infraestructura en HCL — versionable, revisable en PR, reproducible.'],
            ['heading' => 'Declarativo', 'body' => 'Defines estado deseado; Terraform calcula diff y aplica cambios.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Terraform es...?', 'options' => ['Declarativo multi-cloud', 'Solo AWS CLI', 'Lenguaje de programación general'], 'answer' => 'Declarativo multi-cloud', 'explanation' => 'Providers: AWS, GCP, Azure, K8s.', 'pro_tip' => 'terraform init antes de todo.'],
            ['type' => 'choice', 'question' => '¿Estado (state) guarda...?', 'options' => ['Mapping recurso TF ↔ real', 'Código fuente app', 'Logs'], 'answer' => 'Mapping recurso TF ↔ real', 'explanation' => 'terraform.tfstate — crítico en equipo.', 'pro_tip' => 'Remote state en S3 + lock DynamoDB.'],
        ],
    ],
    [
        'slug' => 'tf-hcl',
        'order' => 2,
        'title' => 'HCL y recursos básicos',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'resource, provider y variables.',
        'concepts' => ['hcl', 'resource', 'variable'],
        'sections' => [
            ['heading' => 'Sintaxis', 'body' => 'resource "aws_s3_bucket" "assets" { bucket = var.name }', 'code' => "terraform {\n  required_providers {\n    aws = { source = \"hashicorp/aws\", version = \"~> 5.0\" }\n  }\n}"],
            ['heading' => 'Variables', 'body' => 'variable "region" { default = "us-east-1" } — tfvars por entorno.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Comando ver cambios planeados?', 'options' => ['terraform plan', 'terraform destroy only', 'kubectl apply'], 'answer' => 'terraform plan', 'explanation' => 'Preview antes de apply.', 'pro_tip' => 'plan en CI en cada PR.'],
            ['type' => 'contains', 'question' => 'Escribe resource block', 'must_contain' => ['resource'], 'hint' => 'resource "tipo" "nombre" { ... }', 'explanation' => 'Bloque fundamental TF.', 'pro_tip' => 'data sources leen sin crear.'],
        ],
    ],
    [
        'slug' => 'tf-state',
        'order' => 3,
        'title' => 'State remoto y workspaces',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'S3 backend, locking y entornos.',
        'concepts' => ['remote-state', 'workspace', 'lock'],
        'sections' => [
            ['heading' => 'Remote state', 'body' => 'backend "s3" { bucket, key, dynamodb_table } — equipo comparte state seguro.'],
            ['heading' => 'Workspaces', 'body' => 'terraform workspace select staging — mismo código, state separado.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué lock en state?', 'options' => ['Evita dos apply simultáneos corruptos', 'Cifra passwords', 'Acelera plan'], 'answer' => 'Evita dos apply simultáneos corruptos', 'explanation' => 'Race condition en CI/CD.', 'pro_tip' => 'Nunca commitear tfstate con secrets.'],
            ['type' => 'choice', 'question' => '¿Workspace vs directorio?', 'options' => ['Workspace = mismo root module, distinto state', 'Igual siempre', 'Solo AWS'], 'answer' => 'Workspace = mismo root module, distinto state', 'explanation' => 'dev/staging/prod patterns.', 'pro_tip' => 'Algunos equipos prefieren dirs separados.'],
        ],
    ],
    [
        'slug' => 'tf-modules',
        'order' => 4,
        'title' => 'Módulos reutilizables',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'DRY infra, inputs/outputs y registry.',
        'concepts' => ['module', 'output', 'registry'],
        'sections' => [
            ['heading' => 'Módulos', 'body' => 'module "vpc" { source = "./modules/vpc" cidr = "10.0.0.0/16" }'],
            ['heading' => 'Outputs', 'body' => 'output "vpc_id" { value = module.vpc.id } — encadena módulos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Módulo Terraform es...?', 'options' => ['Paquete reutilizable de recursos', 'Solo variable', 'Provider'], 'answer' => 'Paquete reutilizable de recursos', 'explanation' => 'Como función para infra.', 'pro_tip' => 'Terraform Registry tiene módulos oficiales.'],
            ['type' => 'choice', 'question' => '¿output sirve para...?', 'options' => ['Exportar IDs a otros módulos/stacks', 'Solo print', 'Borrar recursos'], 'answer' => 'Exportar IDs a otros módulos/stacks', 'explanation' => 'Composición de infra.', 'pro_tip' => 'terraform output -json en scripts.'],
        ],
    ],
    [
        'slug' => 'tf-aws',
        'order' => 5,
        'title' => 'Terraform + AWS',
        'level' => 'Práctica',
        'minutes' => 40,
        'summary' => 'VPC, EC2, RDS con Terraform.',
        'concepts' => ['vpc', 'ec2', 'rds'],
        'sections' => [
            ['heading' => 'VPC module', 'body' => 'Subnets públicas/privadas, IGW, NAT — base de todo stack AWS.'],
            ['heading' => 'RDS', 'body' => 'aws_db_instance — subnet group privado, security group restrictivo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿EC2 en subnet privada accede internet via...?', 'options' => ['NAT Gateway', 'IGW directo', 'Sin internet'], 'answer' => 'NAT Gateway', 'explanation' => 'Privada no tiene IP pública.', 'pro_tip' => 'Curso AWS complementa conceptos.'],
            ['type' => 'choice', 'question' => '¿Import recurso existente?', 'options' => ['terraform import', 'terraform new', 'Manual only'], 'answer' => 'terraform import', 'explanation' => 'Adopta infra legacy en TF.', 'pro_tip' => 'import blocks en TF 1.5+.'],
        ],
    ],
    [
        'slug' => 'tf-prod',
        'order' => 6,
        'title' => 'CI/CD y buenas prácticas',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Plan en PR, policy as code y drift.',
        'concepts' => ['cicd', 'drift', 'sentinel'],
        'sections' => [
            ['heading' => 'Pipeline', 'body' => 'PR → terraform plan comment → merge → apply en staging → manual prod.'],
            ['heading' => 'Drift', 'body' => 'Cambios manuales en consola vs state — detectar con plan periódico.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Apply en prod idealmente...?', 'options' => ['Tras plan aprobado en CI', 'Local laptop directo', 'Sin plan'], 'answer' => 'Tras plan aprobado en CI', 'explanation' => 'Audit trail y review.', 'pro_tip' => 'Terraform Cloud / Atlantis.'],
            ['type' => 'choice', 'question' => '¿terraform destroy?', 'options' => ['Elimina recursos del state', 'Solo borra state file', 'Backup'], 'answer' => 'Elimina recursos del state', 'explanation' => 'Peligroso en prod — protege con policies.', 'pro_tip' => 'prevent_destroy lifecycle meta-arg.'],
        ],
    ],
];
