<?php

declare(strict_types=1);

return [
    [
        'slug' => 'aw-intro',
        'order' => 1,
        'title' => 'Introducción a AWS',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Cloud, regiones, IAM y modelo de responsabilidad.',
        'concepts' => ['aws', 'region', 'iam'],
        'sections' => [
            ['heading' => 'AWS', 'body' => 'Amazon Web Services — servidores, BD, storage y más bajo demanda. Pagas lo que usas.'],
            ['heading' => 'Shared responsibility', 'body' => 'AWS cuida el **hardware**; tú configuras seguridad OS, firewall, datos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué es una región AWS?', 'options' => ['Datacenter geográfico (ej. eu-west-1)', 'Lenguaje programación', 'Framework PHP'], 'answer' => 'Datacenter geográfico (ej. eu-west-1)', 'explanation' => 'Elige región cerca de usuarios.', 'pro_tip' => 'Multi-AZ para alta disponibilidad.'],
            ['type' => 'choice', 'question' => '¿IAM gestiona...?', 'options' => ['Usuarios, roles y permisos', 'Solo facturas', 'CSS'], 'answer' => 'Usuarios, roles y permisos', 'explanation' => 'Least privilege — mínimos permisos necesarios.', 'pro_tip' => 'Nunca root keys en código.'],
        ],
    ],
    [
        'slug' => 'aw-ec2',
        'order' => 2,
        'title' => 'EC2: servidores virtuales',
        'level' => 'Compute',
        'minutes' => 30,
        'summary' => 'Instancias, AMI, security groups y SSH.',
        'concepts' => ['ec2', 'instance', 'security-group'],
        'sections' => [
            ['heading' => 'EC2', 'body' => 'Máquina virtual Linux — corre PHP, Node, Docker como un VPS.', 'code' => "AMI (imagen) → Instance t3.micro → Security Group (firewall) → Elastic IP"],
            ['heading' => 'Security Group', 'body' => 'Solo puertos 22 (SSH), 80, 443 abiertos — el resto bloqueado.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿EC2 es...?', 'options' => ['Servidor virtual en la nube', 'Base de datos', 'CDN'], 'answer' => 'Servidor virtual en la nube', 'explanation' => 'Equivalente a VPS DigitalOcean/Fly.', 'pro_tip' => 't3.micro free tier 12 meses (verificar actual).'],
            ['type' => 'choice', 'question' => '¿Security Group es...?', 'options' => ['Firewall virtual de la instancia', 'Grupo de usuarios IAM', 'Tipo de BD'], 'answer' => 'Firewall virtual de la instancia', 'explanation' => 'Inbound/outbound rules por puerto.', 'pro_tip' => 'No expongas puerto 3306 MySQL a 0.0.0.0/0.'],
        ],
    ],
    [
        'slug' => 'aw-s3',
        'order' => 3,
        'title' => 'S3: almacenamiento de objetos',
        'level' => 'Storage',
        'minutes' => 25,
        'summary' => 'Buckets, objetos, URLs y backups.',
        'concepts' => ['s3', 'bucket', 'object'],
        'sections' => [
            ['heading' => 'S3', 'body' => 'Storage ilimitado para archivos — uploads, backups, assets estáticos, logs.'],
            ['heading' => 'Buckets', 'body' => 'Nombre global único. Objetos con key (path) — `uploads/2024/foto.jpg`.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿S3 guarda...?', 'options' => ['Archivos/objetos (blobs)', 'Solo SQL', 'Contenedores Docker running'], 'answer' => 'Archivos/objetos (blobs)', 'explanation' => 'Fotos, PDFs, videos, dumps BD.', 'pro_tip' => 'Laravel Flysystem driver s3 para uploads.'],
            ['type' => 'choice', 'question' => '¿Bucket público por defecto?', 'options' => ['No — bloquear acceso público', 'Siempre público', 'Solo en prod'], 'answer' => 'No — bloquear acceso público', 'explanation' => 'Configura policy explícita si necesitas público.', 'pro_tip' => 'Presigned URLs para acceso temporal.'],
        ],
    ],
    [
        'slug' => 'aw-rds',
        'order' => 4,
        'title' => 'RDS: bases de datos managed',
        'level' => 'Datos',
        'minutes' => 30,
        'summary' => 'PostgreSQL/MySQL managed, backups automáticos.',
        'concepts' => ['rds', 'postgresql', 'backup'],
        'sections' => [
            ['heading' => 'RDS', 'body' => 'PostgreSQL o MySQL administrado — patches, backups, réplicas sin operar servidor BD manual.'],
            ['heading' => 'Conexión', 'body' => 'Endpoint privado en VPC — app EC2 conecta por DATABASE_URL.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja RDS vs PostgreSQL en EC2?', 'options' => ['Backups y patches automáticos', 'Más barato siempre', 'Sin SQL'], 'answer' => 'Backups y patches automáticos', 'explanation' => 'Managed = menos ops.', 'pro_tip' => 'Neon/Supabase alternativas serverless Postgres.'],
            ['type' => 'choice', 'question' => '¿RDS en subnet...?', 'options' => ['Privada — no expuesta a internet', 'Pública siempre', 'Sin red'], 'answer' => 'Privada — no expuesta a internet', 'explanation' => 'Solo app dentro VPC accede.', 'pro_tip' => 'Security group RDS solo desde SG de app.'],
        ],
    ],
    [
        'slug' => 'aw-lambda',
        'order' => 5,
        'title' => 'Lambda y serverless',
        'level' => 'Serverless',
        'minutes' => 30,
        'summary' => 'Funciones sin servidor, triggers y límites.',
        'concepts' => ['lambda', 'serverless', 'trigger'],
        'sections' => [
            ['heading' => 'Lambda', 'body' => 'Ejecutas función (Node/Python) por evento — pagas por ms de ejecución.'],
            ['heading' => 'Triggers', 'body' => 'S3 upload → Lambda resize imagen. API Gateway → Lambda HTTP.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Lambda es ideal para...?', 'options' => ['Tareas cortas event-driven', 'Servidor PHP 24/7 tradicional', 'BD relacional'], 'answer' => 'Tareas cortas event-driven', 'explanation' => 'No para Laravel monolito completo.', 'pro_tip' => 'Cold start — primer invoke más lento.'],
            ['type' => 'choice', 'question' => '¿Serverless significa...?', 'options' => ['No gestionas servidores — AWS escala', 'Sin código', 'Sin coste'], 'answer' => 'No gestionas servidores — AWS escala', 'explanation' => 'Sigues pagando por uso.', 'pro_tip' => 'Combina con S3 + CloudFront para estáticos.'],
        ],
    ],
    [
        'slug' => 'aw-deploy',
        'order' => 6,
        'title' => 'Arquitectura típica y costes',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'VPC, ALB, CloudWatch y free tier.',
        'concepts' => ['vpc', 'alb', 'cloudwatch'],
        'sections' => [
            ['heading' => 'Stack típico', 'body' => 'Route53 (DNS) → ALB → EC2/ECS (app) → RDS (Postgres) + S3 (assets) + ElastiCache (Redis).'],
            ['heading' => 'Costes', 'body' => 'Free tier limitado — apaga instancias de prueba, alertas de billing.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿ALB hace...?', 'options' => ['Load balancer HTTP entre instancias', 'Almacena archivos', 'Compila JS'], 'answer' => 'Load balancer HTTP entre instancias', 'explanation' => 'Application Load Balancer distribuye tráfico.', 'pro_tip' => 'Health checks quitan instancias malas.'],
            ['type' => 'choice', 'question' => '¿CloudWatch sirve para...?', 'options' => ['Logs y métricas de servicios AWS', 'Solo email', 'Git'], 'answer' => 'Logs y métricas de servicios AWS', 'explanation' => 'Alertas CPU alta, errores 5xx.', 'pro_tip' => 'Combina con curso Nginx en EC2.'],
        ],
    ],
];
