<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'gc-intro',
    'order' => 1,
    'title' => 'Google Cloud intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'GCP vs AWS, proyectos e IAM.',
    'concepts' => 
    array (
      0 => 'gcp',
      1 => 'project',
      2 => 'iam',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'GCP',
        'body' => '**Google Cloud** — Compute Engine, GCS, Cloud SQL, BigQuery. Fuerte en data/ML (Vertex AI).',
        'code' => '# Practica: gc-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'IAM',
        'body' => 'Project → roles → service accounts — least privilege como AWS IAM.',
        'code' => '# Practica: gc-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Unidad billing GCP?',
        'options' => 
        array (
          0 => 'Project',
          1 => 'Region only',
          2 => 'User',
        ),
        'answer' => 'Project',
        'explanation' => 'Aislamiento recursos.',
        'pro_tip' => 'Compare AWS account curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿gcloud CLI?',
        'options' => 
        array (
          0 => 'CLI oficial GCP',
          1 => 'Solo consola web',
          2 => 'Docker command',
        ),
        'answer' => 'CLI oficial GCP',
        'explanation' => 'gcloud config set project.',
        'pro_tip' => 'Terraform provider google también.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'gc-compute',
    'order' => 2,
    'title' => 'Compute Engine',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'VMs, firewall y SSH.',
    'concepts' => 
    array (
      0 => 'gce',
      1 => 'vm',
      2 => 'firewall',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'GCE',
        'body' => 'VMs Linux/Windows — equivalente EC2. Machine types e2, n2.',
        'code' => '# Practica: gc-compute
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Firewall rules',
        'body' => 'VPC firewall — allow tcp:22,80,443 tagged instances.',
        'code' => '# Practica: gc-compute
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿GCE equivale a...?',
        'options' => 
        array (
          0 => 'AWS EC2',
          1 => 'S3',
          2 => 'Lambda only',
        ),
        'answer' => 'AWS EC2',
        'explanation' => 'IaaS VMs.',
        'pro_tip' => 'Preemptible VMs baratas batch.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Metadata server?',
        'options' => 
        array (
          0 => 'Info instancia sin hardcode',
          1 => 'Public internet',
          2 => 'DNS only',
        ),
        'answer' => 'Info instancia sin hardcode',
        'explanation' => '169.254.169.254 metadata.',
        'pro_tip' => 'Service account via metadata.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'gc-storage',
    'order' => 3,
    'title' => 'Cloud Storage GCS',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Buckets, ACLs y CDN.',
    'concepts' => 
    array (
      0 => 'gcs',
      1 => 'bucket',
      2 => 'object',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'GCS',
        'body' => 'Buckets globales — gs://my-bucket/path — equivalente S3.',
        'code' => '# Practica: gc-storage
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Classes',
        'body' => 'Standard, Nearline, Coldline — cost vs access frequency.',
        'code' => '# Practica: gc-storage
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿GCS equivale a...?',
        'options' => 
        array (
          0 => 'AWS S3',
          1 => 'RDS',
          2 => 'EC2',
        ),
        'answer' => 'AWS S3',
        'explanation' => 'Object storage.',
        'pro_tip' => 'Uniform bucket-level access recommended.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Signed URL?',
        'options' => 
        array (
          0 => 'Acceso temporal objeto privado',
          1 => 'Public always',
          2 => 'SSH key',
        ),
        'answer' => 'Acceso temporal objeto privado',
        'explanation' => 'Download seguro sin auth user.',
        'pro_tip' => 'Cloud CDN front GCS static.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'gc-sql',
    'order' => 4,
    'title' => 'Cloud SQL y BigQuery',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Managed SQL y data warehouse.',
    'concepts' => 
    array (
      0 => 'cloudsql',
      1 => 'bigquery',
      2 => 'warehouse',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Cloud SQL',
        'body' => 'Postgres/MySQL managed — backups automáticos, replicas.',
        'code' => '# Practica: gc-sql
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'BigQuery',
        'body' => 'SQL sobre petabytes — serverless analytics, no OLTP.',
        'code' => '# Practica: gc-sql
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿BigQuery para...?',
        'options' => 
        array (
          0 => 'Analytics masivo OLAP',
          1 => 'Transacciones checkout',
          2 => 'Session store',
        ),
        'answer' => 'Analytics masivo OLAP',
        'explanation' => 'No reemplaza OLTP.',
        'pro_tip' => 'Curso SQL fundamentos base.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cloud SQL HA?',
        'options' => 
        array (
          0 => 'Regional replicas failover',
          1 => 'Single zone only',
          2 => 'Sin backups',
        ),
        'answer' => 'Regional replicas failover',
        'explanation' => 'Similar RDS multi-AZ.',
        'pro_tip' => 'Private IP VPC only prod.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'gc-run',
    'order' => 5,
    'title' => 'Cloud Run serverless',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Containers sin gestionar K8s.',
    'concepts' => 
    array (
      0 => 'cloudrun',
      1 => 'serverless',
      2 => 'container',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Cloud Run',
        'body' => 'Deploy container — scale to zero, paga por request — más simple que GKE.',
        'code' => '# Practica: gc-run
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'vs Lambda',
        'body' => 'Cualquier container HTTP — no limitado a runtime específico.',
        'code' => '# Practica: gc-run
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cloud Run requiere...?',
        'options' => 
        array (
          0 => 'Container image HTTP server',
          1 => 'Solo zip PHP',
          2 => 'VM always on',
        ),
        'answer' => 'Container image HTTP server',
        'explanation' => 'Docker in, serverless out.',
        'pro_tip' => 'Curso Docker prerequisite.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Scale to zero?',
        'options' => 
        array (
          0 => 'Sin tráfico = sin coste compute',
          1 => 'Siempre 10 instances',
          2 => 'Manual scale',
        ),
        'answer' => 'Sin tráfico = sin coste compute',
        'explanation' => 'Cold start trade-off.',
        'pro_tip' => 'Min instances evita cold start prod.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'gc-deploy',
    'order' => 6,
    'title' => 'Arquitectura GCP típica',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'LB, Cloud Run, SQL, GCS.',
    'concepts' => 
    array (
      0 => 'lb',
      1 => 'architecture',
      2 => 'vpc',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stack web',
        'body' => 'Cloud Load Balancing → Cloud Run → Cloud SQL + GCS assets.',
        'code' => '# Practica: gc-deploy
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'VPC',
        'body' => 'Private Google Access — recursos sin IP pública hablan GCP APIs.',
        'code' => '# Practica: gc-deploy
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Multi-cloud strategy?',
        'options' => 
        array (
          0 => 'Evitar lock-in con abstracciones',
          1 => 'Siempre uno solo',
          2 => 'Sin IaC',
        ),
        'answer' => 'Evitar lock-in con abstracciones',
        'explanation' => 'Terraform multi provider.',
        'pro_tip' => 'Curso AWS + Terraform complementan.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Secret Manager?',
        'options' => 
        array (
          0 => 'Secrets centralizados rotación',
          1 => 'Git commit secrets',
          2 => 'Env only local',
        ),
        'answer' => 'Secrets centralizados rotación',
        'explanation' => 'No secrets en image.',
        'pro_tip' => 'Compare AWS Secrets Manager.',
      ),
    ),
  ),
);
