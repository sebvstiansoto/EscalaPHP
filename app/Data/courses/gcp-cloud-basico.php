<?php

declare(strict_types=1);

return [
    ['slug' => 'gc-intro', 'order' => 1, 'title' => 'Google Cloud intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'GCP vs AWS, proyectos e IAM.', 'concepts' => ['gcp', 'project', 'iam'], 'sections' => [
        ['heading' => 'GCP', 'body' => '**Google Cloud** — Compute Engine, GCS, Cloud SQL, BigQuery. Fuerte en data/ML (Vertex AI).'],
        ['heading' => 'IAM', 'body' => 'Project → roles → service accounts — least privilege como AWS IAM.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Unidad billing GCP?', 'options' => ['Project', 'Region only', 'User'], 'answer' => 'Project', 'explanation' => 'Aislamiento recursos.', 'pro_tip' => 'Compare AWS account curso.'],
        ['type' => 'choice', 'question' => '¿gcloud CLI?', 'options' => ['CLI oficial GCP', 'Solo consola web', 'Docker command'], 'answer' => 'CLI oficial GCP', 'explanation' => 'gcloud config set project.', 'pro_tip' => 'Terraform provider google también.'],
    ]],
    ['slug' => 'gc-compute', 'order' => 2, 'title' => 'Compute Engine', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'VMs, firewall y SSH.', 'concepts' => ['gce', 'vm', 'firewall'], 'sections' => [
        ['heading' => 'GCE', 'body' => 'VMs Linux/Windows — equivalente EC2. Machine types e2, n2.'],
        ['heading' => 'Firewall rules', 'body' => 'VPC firewall — allow tcp:22,80,443 tagged instances.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿GCE equivale a...?', 'options' => ['AWS EC2', 'S3', 'Lambda only'], 'answer' => 'AWS EC2', 'explanation' => 'IaaS VMs.', 'pro_tip' => 'Preemptible VMs baratas batch.'],
        ['type' => 'choice', 'question' => '¿Metadata server?', 'options' => ['Info instancia sin hardcode', 'Public internet', 'DNS only'], 'answer' => 'Info instancia sin hardcode', 'explanation' => '169.254.169.254 metadata.', 'pro_tip' => 'Service account via metadata.'],
    ]],
    ['slug' => 'gc-storage', 'order' => 3, 'title' => 'Cloud Storage GCS', 'level' => 'Práctica', 'minutes' => 30, 'summary' => 'Buckets, ACLs y CDN.', 'concepts' => ['gcs', 'bucket', 'object'], 'sections' => [
        ['heading' => 'GCS', 'body' => 'Buckets globales — gs://my-bucket/path — equivalente S3.'],
        ['heading' => 'Classes', 'body' => 'Standard, Nearline, Coldline — cost vs access frequency.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿GCS equivale a...?', 'options' => ['AWS S3', 'RDS', 'EC2'], 'answer' => 'AWS S3', 'explanation' => 'Object storage.', 'pro_tip' => 'Uniform bucket-level access recommended.'],
        ['type' => 'choice', 'question' => '¿Signed URL?', 'options' => ['Acceso temporal objeto privado', 'Public always', 'SSH key'], 'answer' => 'Acceso temporal objeto privado', 'explanation' => 'Download seguro sin auth user.', 'pro_tip' => 'Cloud CDN front GCS static.'],
    ]],
    ['slug' => 'gc-sql', 'order' => 4, 'title' => 'Cloud SQL y BigQuery', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Managed SQL y data warehouse.', 'concepts' => ['cloudsql', 'bigquery', 'warehouse'], 'sections' => [
        ['heading' => 'Cloud SQL', 'body' => 'Postgres/MySQL managed — backups automáticos, replicas.'],
        ['heading' => 'BigQuery', 'body' => 'SQL sobre petabytes — serverless analytics, no OLTP.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿BigQuery para...?', 'options' => ['Analytics masivo OLAP', 'Transacciones checkout', 'Session store'], 'answer' => 'Analytics masivo OLAP', 'explanation' => 'No reemplaza OLTP.', 'pro_tip' => 'Curso SQL fundamentos base.'],
        ['type' => 'choice', 'question' => '¿Cloud SQL HA?', 'options' => ['Regional replicas failover', 'Single zone only', 'Sin backups'], 'answer' => 'Regional replicas failover', 'explanation' => 'Similar RDS multi-AZ.', 'pro_tip' => 'Private IP VPC only prod.'],
    ]],
    ['slug' => 'gc-run', 'order' => 5, 'title' => 'Cloud Run serverless', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Containers sin gestionar K8s.', 'concepts' => ['cloudrun', 'serverless', 'container'], 'sections' => [
        ['heading' => 'Cloud Run', 'body' => 'Deploy container — scale to zero, paga por request — más simple que GKE.'],
        ['heading' => 'vs Lambda', 'body' => 'Cualquier container HTTP — no limitado a runtime específico.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Cloud Run requiere...?', 'options' => ['Container image HTTP server', 'Solo zip PHP', 'VM always on'], 'answer' => 'Container image HTTP server', 'explanation' => 'Docker in, serverless out.', 'pro_tip' => 'Curso Docker prerequisite.'],
        ['type' => 'choice', 'question' => '¿Scale to zero?', 'options' => ['Sin tráfico = sin coste compute', 'Siempre 10 instances', 'Manual scale'], 'answer' => 'Sin tráfico = sin coste compute', 'explanation' => 'Cold start trade-off.', 'pro_tip' => 'Min instances evita cold start prod.'],
    ]],
    ['slug' => 'gc-deploy', 'order' => 6, 'title' => 'Arquitectura GCP típica', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'LB, Cloud Run, SQL, GCS.', 'concepts' => ['lb', 'architecture', 'vpc'], 'sections' => [
        ['heading' => 'Stack web', 'body' => 'Cloud Load Balancing → Cloud Run → Cloud SQL + GCS assets.'],
        ['heading' => 'VPC', 'body' => 'Private Google Access — recursos sin IP pública hablan GCP APIs.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Multi-cloud strategy?', 'options' => ['Evitar lock-in con abstracciones', 'Siempre uno solo', 'Sin IaC'], 'answer' => 'Evitar lock-in con abstracciones', 'explanation' => 'Terraform multi provider.', 'pro_tip' => 'Curso AWS + Terraform complementan.'],
        ['type' => 'choice', 'question' => '¿Secret Manager?', 'options' => ['Secrets centralizados rotación', 'Git commit secrets', 'Env only local'], 'answer' => 'Secrets centralizados rotación', 'explanation' => 'No secrets en image.', 'pro_tip' => 'Compare AWS Secrets Manager.'],
    ]],
];
