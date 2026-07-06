<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'aw-intro',
    'order' => 1,
    'title' => 'Introducción a AWS',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Cloud, regiones, IAM y modelo de responsabilidad.',
    'concepts' => 
    array (
      0 => 'aws',
      1 => 'region',
      2 => 'iam',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'AWS',
        'body' => 'Amazon Web Services — servidores, BD, storage y más bajo demanda. Pagas lo que usas.',
        'code' => '# Practica: aw-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Shared responsibility',
        'body' => 'AWS cuida el **hardware**; tú configuras seguridad OS, firewall, datos.',
        'code' => '# Practica: aw-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es una región AWS?',
        'options' => 
        array (
          0 => 'Datacenter geográfico (ej. eu-west-1)',
          1 => 'Lenguaje programación',
          2 => 'Framework PHP',
        ),
        'answer' => 'Datacenter geográfico (ej. eu-west-1)',
        'explanation' => 'Elige región cerca de usuarios.',
        'pro_tip' => 'Multi-AZ para alta disponibilidad.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿IAM gestiona...?',
        'options' => 
        array (
          0 => 'Usuarios, roles y permisos',
          1 => 'Solo facturas',
          2 => 'CSS',
        ),
        'answer' => 'Usuarios, roles y permisos',
        'explanation' => 'Least privilege — mínimos permisos necesarios.',
        'pro_tip' => 'Nunca root keys en código.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'aw-ec2',
    'order' => 2,
    'title' => 'EC2: servidores virtuales',
    'level' => 'Compute',
    'minutes' => 30,
    'summary' => 'Instancias, AMI, security groups y SSH.',
    'concepts' => 
    array (
      0 => 'ec2',
      1 => 'instance',
      2 => 'security-group',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'EC2',
        'body' => 'Máquina virtual Linux — corre PHP, Node, Docker como un VPS.',
        'code' => 'AMI (imagen) → Instance t3.micro → Security Group (firewall) → Elastic IP',
      ),
      1 => 
      array (
        'heading' => 'Security Group',
        'body' => 'Solo puertos 22 (SSH), 80, 443 abiertos — el resto bloqueado.',
        'code' => '# Practica: aw-ec2
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿EC2 es...?',
        'options' => 
        array (
          0 => 'Servidor virtual en la nube',
          1 => 'Base de datos',
          2 => 'CDN',
        ),
        'answer' => 'Servidor virtual en la nube',
        'explanation' => 'Equivalente a VPS DigitalOcean/Fly.',
        'pro_tip' => 't3.micro free tier 12 meses (verificar actual).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Security Group es...?',
        'options' => 
        array (
          0 => 'Firewall virtual de la instancia',
          1 => 'Grupo de usuarios IAM',
          2 => 'Tipo de BD',
        ),
        'answer' => 'Firewall virtual de la instancia',
        'explanation' => 'Inbound/outbound rules por puerto.',
        'pro_tip' => 'No expongas puerto 3306 MySQL a 0.0.0.0/0.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'aw-s3',
    'order' => 3,
    'title' => 'S3: almacenamiento de objetos',
    'level' => 'Storage',
    'minutes' => 25,
    'summary' => 'Buckets, objetos, URLs y backups.',
    'concepts' => 
    array (
      0 => 's3',
      1 => 'bucket',
      2 => 'object',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'S3',
        'body' => 'Storage ilimitado para archivos — uploads, backups, assets estáticos, logs.',
        'code' => '# Practica: aw-s3
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Buckets',
        'body' => 'Nombre global único. Objetos con key (path) — `uploads/2024/foto.jpg`.',
        'code' => '# Practica: aw-s3
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿S3 guarda...?',
        'options' => 
        array (
          0 => 'Archivos/objetos (blobs)',
          1 => 'Solo SQL',
          2 => 'Contenedores Docker running',
        ),
        'answer' => 'Archivos/objetos (blobs)',
        'explanation' => 'Fotos, PDFs, videos, dumps BD.',
        'pro_tip' => 'Laravel Flysystem driver s3 para uploads.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bucket público por defecto?',
        'options' => 
        array (
          0 => 'No — bloquear acceso público',
          1 => 'Siempre público',
          2 => 'Solo en prod',
        ),
        'answer' => 'No — bloquear acceso público',
        'explanation' => 'Configura policy explícita si necesitas público.',
        'pro_tip' => 'Presigned URLs para acceso temporal.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'aw-rds',
    'order' => 4,
    'title' => 'RDS: bases de datos managed',
    'level' => 'Datos',
    'minutes' => 30,
    'summary' => 'PostgreSQL/MySQL managed, backups automáticos.',
    'concepts' => 
    array (
      0 => 'rds',
      1 => 'postgresql',
      2 => 'backup',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'RDS',
        'body' => 'PostgreSQL o MySQL administrado — patches, backups, réplicas sin operar servidor BD manual.',
        'code' => '# Practica: aw-rds
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Conexión',
        'body' => 'Endpoint privado en VPC — app EC2 conecta por DATABASE_URL.',
        'code' => '# Practica: aw-rds
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja RDS vs PostgreSQL en EC2?',
        'options' => 
        array (
          0 => 'Backups y patches automáticos',
          1 => 'Más barato siempre',
          2 => 'Sin SQL',
        ),
        'answer' => 'Backups y patches automáticos',
        'explanation' => 'Managed = menos ops.',
        'pro_tip' => 'Neon/Supabase alternativas serverless Postgres.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿RDS en subnet...?',
        'options' => 
        array (
          0 => 'Privada — no expuesta a internet',
          1 => 'Pública siempre',
          2 => 'Sin red',
        ),
        'answer' => 'Privada — no expuesta a internet',
        'explanation' => 'Solo app dentro VPC accede.',
        'pro_tip' => 'Security group RDS solo desde SG de app.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'aw-lambda',
    'order' => 5,
    'title' => 'Lambda y serverless',
    'level' => 'Serverless',
    'minutes' => 30,
    'summary' => 'Funciones sin servidor, triggers y límites.',
    'concepts' => 
    array (
      0 => 'lambda',
      1 => 'serverless',
      2 => 'trigger',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Lambda',
        'body' => 'Ejecutas función (Node/Python) por evento — pagas por ms de ejecución.',
        'code' => '# Practica: aw-lambda
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Triggers',
        'body' => 'S3 upload → Lambda resize imagen. API Gateway → Lambda HTTP.',
        'code' => '# Practica: aw-lambda
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Lambda es ideal para...?',
        'options' => 
        array (
          0 => 'Tareas cortas event-driven',
          1 => 'Servidor PHP 24/7 tradicional',
          2 => 'BD relacional',
        ),
        'answer' => 'Tareas cortas event-driven',
        'explanation' => 'No para Laravel monolito completo.',
        'pro_tip' => 'Cold start — primer invoke más lento.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Serverless significa...?',
        'options' => 
        array (
          0 => 'No gestionas servidores — AWS escala',
          1 => 'Sin código',
          2 => 'Sin coste',
        ),
        'answer' => 'No gestionas servidores — AWS escala',
        'explanation' => 'Sigues pagando por uso.',
        'pro_tip' => 'Combina con S3 + CloudFront para estáticos.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'aw-deploy',
    'order' => 6,
    'title' => 'Arquitectura típica y costes',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'VPC, ALB, CloudWatch y free tier.',
    'concepts' => 
    array (
      0 => 'vpc',
      1 => 'alb',
      2 => 'cloudwatch',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stack típico',
        'body' => 'Route53 (DNS) → ALB → EC2/ECS (app) → RDS (Postgres) + S3 (assets) + ElastiCache (Redis).',
        'code' => '# Practica: aw-deploy
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Costes',
        'body' => 'Free tier limitado — apaga instancias de prueba, alertas de billing.',
        'code' => '# Practica: aw-deploy
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ALB hace...?',
        'options' => 
        array (
          0 => 'Load balancer HTTP entre instancias',
          1 => 'Almacena archivos',
          2 => 'Compila JS',
        ),
        'answer' => 'Load balancer HTTP entre instancias',
        'explanation' => 'Application Load Balancer distribuye tráfico.',
        'pro_tip' => 'Health checks quitan instancias malas.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿CloudWatch sirve para...?',
        'options' => 
        array (
          0 => 'Logs y métricas de servicios AWS',
          1 => 'Solo email',
          2 => 'Git',
        ),
        'answer' => 'Logs y métricas de servicios AWS',
        'explanation' => 'Alertas CPU alta, errores 5xx.',
        'pro_tip' => 'Combina con curso Nginx en EC2.',
      ),
    ),
  ),
);
