<?php

declare(strict_types=1);

$cat = 'cloud';

return [
    ['slug' => 'aws', 'term' => 'AWS', 'category' => $cat, 'definition' => 'Amazon Web Services: plataforma cloud líder con EC2, S3, RDS, Lambda y cientos de servicios.'],
    ['slug' => 'gcp', 'term' => 'Google Cloud (GCP)', 'category' => $cat, 'definition' => 'Plataforma cloud de Google: Compute Engine, Cloud Run, BigQuery, Kubernetes Engine.'],
    ['slug' => 'azure', 'term' => 'Microsoft Azure', 'category' => $cat, 'definition' => 'Plataforma cloud de Microsoft muy usada en empresas con ecosistema .NET y Office.'],
    ['slug' => 'iam', 'term' => 'IAM', 'category' => $cat, 'definition' => 'Identity and Access Management: gestiona quién puede hacer qué en recursos cloud (roles, políticas).'],
    ['slug' => 's3', 'term' => 'Amazon S3', 'category' => $cat, 'definition' => 'Object storage de AWS para archivos, backups, assets estáticos y data lakes.'],
    ['slug' => 'ec2', 'term' => 'EC2', 'category' => $cat, 'definition' => 'Máquinas virtuales bajo demanda en AWS. Eliges OS, CPU, RAM y pagas por hora.'],
    ['slug' => 'rds', 'term' => 'RDS', 'category' => $cat, 'definition' => 'Base de datos relacional gestionada en AWS (PostgreSQL, MySQL). AWS administra backups y parches.'],
    ['slug' => 'lambda', 'term' => 'AWS Lambda', 'category' => $cat, 'definition' => 'Funciones serverless que ejecutan código sin gestionar servidores. Pagas por invocación.'],
    ['slug' => 'vpc', 'term' => 'VPC', 'category' => $cat, 'definition' => 'Virtual Private Cloud: red aislada en cloud donde despliegas tus recursos con subnets y firewalls.'],
    ['slug' => 'region', 'term' => 'Region (cloud)', 'category' => $cat, 'definition' => 'Zona geográfica del datacenter cloud (us-east-1, eu-west-1). Elige cerca de tus usuarios.'],
    ['slug' => 'availability-zone', 'term' => 'Availability Zone', 'category' => $cat, 'definition' => 'Datacenter aislado dentro de una región. Desplegar en varias AZ da alta disponibilidad.'],
    ['slug' => 'saas', 'term' => 'SaaS', 'category' => $cat, 'definition' => 'Software as a Service: usas la app en el navegador (Gmail, Slack, Notion). No gestionas infra.'],
    ['slug' => 'paas', 'term' => 'PaaS', 'category' => $cat, 'definition' => 'Platform as a Service: despliegas código, la plataforma gestiona runtime (Heroku, Vercel, Railway).'],
    ['slug' => 'iaas', 'term' => 'IaaS', 'category' => $cat, 'definition' => 'Infrastructure as a Service: alquilas VMs, redes y storage (AWS EC2, DigitalOcean).'],
    ['slug' => 'terraform', 'term' => 'Terraform', 'category' => $cat, 'definition' => 'Herramienta IaC que define infraestructura cloud en archivos .tf y la provisiona automáticamente.'],
    ['slug' => 'infrastructure-as-code', 'term' => 'Infrastructure as Code (IaC)', 'category' => $cat, 'definition' => 'Gestionar servidores, redes y permisos con código versionado en Git (Terraform, Pulumi, CloudFormation).'],
    ['slug' => 'object-storage', 'term' => 'Object storage', 'category' => $cat, 'definition' => 'Almacenamiento de archivos como objetos con URL única. S3, GCS, Azure Blob.'],
    ['slug' => 'block-storage', 'term' => 'Block storage', 'category' => $cat, 'definition' => 'Disco virtual montado en una VM (EBS en AWS). Para BD y sistemas de archivos.'],
    ['slug' => 'autoscaling', 'term' => 'Auto Scaling', 'category' => $cat, 'definition' => 'Añadir o quitar instancias automáticamente según CPU, memoria o cola de peticiones.'],
    ['slug' => 'cloudfront', 'term' => 'CloudFront', 'category' => $cat, 'definition' => 'CDN de AWS que cachea contenido cerca del usuario para menor latencia.'],
    ['slug' => 'route53', 'term' => 'Route 53', 'category' => $cat, 'definition' => 'Servicio DNS de AWS para apuntar dominios a recursos cloud con health checks.'],
    ['slug' => 'secrets-manager', 'term' => 'Secrets Manager', 'category' => $cat, 'definition' => 'Servicio cloud para guardar y rotar secretos (API keys, contraseñas) de forma segura.'],
    ['slug' => 'managed-service', 'term' => 'Managed service', 'category' => $cat, 'definition' => 'Servicio cloud donde el proveedor administra patches, backups y escalado (RDS, ElastiCache).'],
    ['slug' => 'elasticache', 'term' => 'ElastiCache', 'category' => $cat, 'definition' => 'Redis o Memcached gestionado en AWS para caché en memoria sin administrar servidores.'],
    ['slug' => 'cloud-run', 'term' => 'Cloud Run', 'category' => $cat, 'definition' => 'Servicio GCP serverless que ejecuta contenedores HTTP escalando a cero cuando no hay tráfico.'],
    ['slug' => 'digitalocean', 'term' => 'DigitalOcean', 'category' => $cat, 'definition' => 'Proveedor cloud simple y económico popular entre developers y startups (Droplets, App Platform).'],
    ['slug' => 'heroku', 'term' => 'Heroku', 'category' => $cat, 'definition' => 'PaaS pionero para desplegar apps con git push. Menos usado hoy pero concepto clave de PaaS.'],
    ['slug' => 'multi-cloud', 'term' => 'Multi-cloud', 'category' => $cat, 'definition' => 'Usar varios proveedores cloud (AWS + GCP) para evitar vendor lock-in o por requisitos legales.'],
    ['slug' => 'vendor-lock-in', 'term' => 'Vendor lock-in', 'category' => $cat, 'definition' => 'Dependencia de un proveedor que dificulta migrar. Mitigar con estándares abiertos y IaC portable.'],
    ['slug' => 'egress', 'term' => 'Egress (salida de datos)', 'category' => $cat, 'definition' => 'Costo de transferir datos fuera del cloud. Suele ser más caro que ingress (entrada).'],
    ['slug' => 'spot-instance', 'term' => 'Spot instance', 'category' => $cat, 'definition' => 'VM cloud con descuento grande pero puede terminarse con poco aviso. Para workloads tolerantes a fallos.'],
];
