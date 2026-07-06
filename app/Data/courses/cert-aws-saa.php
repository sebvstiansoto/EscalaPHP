<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ca-intro',
    'order' => 1,
    'title' => 'AWS SAA-C03 overview',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Examen Solutions Architect Associate.',
    'concepts' => 
    array (
      0 => 'aws',
      1 => 'saa',
      2 => 'cert',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SAA-C03',
        'body' => '**AWS Solutions Architect Associate** — diseño sistemas escalables, seguros, resilientes, cost-effective — 65 preguntas, 130 min.',
        'code' => '# Practica: ca-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Dominios',
        'body' => 'Design Secure Architectures 30%, Resilient 26%, High-Performing 24%, Cost 20%.',
        'code' => '# Practica: ca-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SAA nivel?',
        'options' => 
        array (
          0 => 'Associate',
          1 => 'Professional only',
          2 => 'Foundational only',
        ),
        'answer' => 'Associate',
        'explanation' => 'Before SAP pro.',
        'pro_tip' => 'Curso aws-cloud-basico base.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Exam format?',
        'options' => 
        array (
          0 => 'Multiple choice + multi-response',
          1 => 'Coding only',
          2 => 'Oral',
        ),
        'answer' => 'Multiple choice + multi-response',
        'explanation' => 'Scenario based.',
        'pro_tip' => 'Hands-on free tier practice.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ca-compute',
    'order' => 2,
    'title' => 'Compute deep dive',
    'level' => 'Fundamentos',
    'minutes' => 40,
    'summary' => 'EC2, ASG, Lambda, containers.',
    'concepts' => 
    array (
      0 => 'ec2',
      1 => 'asg',
      2 => 'lambda',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'EC2 types',
        'body' => 'General t3, Compute c6, Memory r6, GPU p4 — right-sizing exam favorite.',
        'code' => '# Practica: ca-compute
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Auto Scaling',
        'body' => 'ASG + ALB — scale on CPU/custom metric — multi-AZ required resilient.',
        'code' => '# Practica: ca-compute
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Spot instances?',
        'options' => 
        array (
          0 => 'Cheap interruptible batch workloads',
          1 => 'Production DB primary',
          2 => 'Always on',
        ),
        'answer' => 'Cheap interruptible batch workloads',
        'explanation' => 'Can terminate 2 min notice.',
        'pro_tip' => 'Mixed instances ASG save cost.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Lambda vs EC2?',
        'options' => 
        array (
          0 => 'Lambda event short; EC2 long-running control',
          1 => 'Always Lambda',
          2 => 'Never Lambda',
        ),
        'answer' => 'Lambda event short; EC2 long-running control',
        'explanation' => 'Exam scenario trade-offs.',
        'pro_tip' => 'Lambda 15 min max timeout.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ca-storage',
    'order' => 3,
    'title' => 'Storage y databases exam',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'S3, EBS, EFS, RDS, DynamoDB.',
    'concepts' => 
    array (
      0 => 's3',
      1 => 'ebs',
      2 => 'dynamodb',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'S3 classes',
        'body' => 'Standard, IA, Glacier — lifecycle policies — exam cost optimization.',
        'code' => '# Practica: ca-storage
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Database choice',
        'body' => 'RDS relational, DynamoDB NoSQL scale, Aurora performance — when which.',
        'code' => '# Practica: ca-storage
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿S3 durability?',
        'options' => 
        array (
          0 => '11 nines designed',
          1 => 'Single disk',
          2 => 'No backup',
        ),
        'answer' => '11 nines designed',
        'explanation' => 'Across AZs.',
        'pro_tip' => 'Versioning protect deletes.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DynamoDB cuando?',
        'options' => 
        array (
          0 => 'Key-value scale unpredictable',
          1 => 'Complex joins reporting',
          2 => 'Always replace RDS',
        ),
        'answer' => 'Key-value scale unpredictable',
        'explanation' => 'Exam polyglot persistence.',
        'pro_tip' => 'DAX cache read heavy.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ca-network',
    'order' => 4,
    'title' => 'Networking exam topics',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'VPC, Route53, CloudFront, Direct Connect.',
    'concepts' => 
    array (
      0 => 'vpc',
      1 => 'route53',
      2 => 'cloudfront',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'VPC',
        'body' => 'Public/private subnets, IGW, NAT Gateway, NACL vs Security Group — exam classic.',
        'code' => '# Practica: ca-network
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Route53',
        'body' => 'Routing policies: simple, weighted, latency, failover, geolocation.',
        'code' => '# Practica: ca-network
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Private subnet internet?',
        'options' => 
        array (
          0 => 'NAT Gateway public subnet',
          1 => 'IGW direct',
          2 => 'No internet possible',
        ),
        'answer' => 'NAT Gateway public subnet',
        'explanation' => 'Outbound only private IPs.',
        'pro_tip' => 'Curso networking-devops TCP/IP.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿CloudFront?',
        'options' => 
        array (
          0 => 'CDN edge cache',
          1 => 'Database',
          2 => 'Email',
        ),
        'answer' => 'CDN edge cache',
        'explanation' => 'Origin S3 or ALB.',
        'pro_tip' => 'Compare system-design CDN.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ca-security',
    'order' => 5,
    'title' => 'Security y compliance',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'IAM, KMS, WAF, Organizations.',
    'concepts' => 
    array (
      0 => 'iam',
      1 => 'kms',
      2 => 'waf',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'IAM',
        'body' => 'Least privilege, roles not keys, SCPs Organizations — cross-account patterns.',
        'code' => '# Practica: ca-security
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Encryption',
        'body' => 'KMS CMK — encrypt S3, EBS, RDS at rest — TLS in transit.',
        'code' => '# Practica: ca-security
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿IAM role vs user keys EC2?',
        'options' => 
        array (
          0 => 'Role temporary creds no hardcode',
          1 => 'Access keys in code',
          2 => 'Root account',
        ),
        'answer' => 'Role temporary creds no hardcode',
        'explanation' => 'Exam best practice.',
        'pro_tip' => 'Curso seguridad-web concepts.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿WAF?',
        'options' => 
        array (
          0 => 'Web Application Firewall HTTP',
          1 => 'Wide area file',
          2 => 'Windows only',
        ),
        'answer' => 'Web Application Firewall HTTP',
        'explanation' => 'Block SQLi XSS patterns.',
        'pro_tip' => 'Shield DDoS standard advanced.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ca-exam',
    'order' => 6,
    'title' => 'Estrategia examen SAA',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Tips, simulacros y cost optimization.',
    'concepts' => 
    array (
      0 => 'exam',
      1 => 'simulator',
      2 => 'cost',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Exam tips',
        'body' => 'Read scenario twice — eliminate wrong — **most secure/cost-effective/resilient** per question ask.',
        'code' => '# Practica: ca-exam
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Prep',
        'body' => 'AWS Skill Builder, Tutorials Dojo, hands-on labs — 4-8 semanas estudio típico.',
        'code' => '# Practica: ca-exam
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Pregunta pide HA?',
        'options' => 
        array (
          0 => 'Multi-AZ multi-region options',
          1 => 'Single EC2',
          2 => 'One AZ always',
        ),
        'answer' => 'Multi-AZ multi-region options',
        'explanation' => 'Resilience domain heavy.',
        'pro_tip' => 'Well-Architected Framework pillars.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cost optimization hint?',
        'options' => 
        array (
          0 => 'Reserved Instances, S3 lifecycle, right-size',
          1 => 'Largest instance always',
          2 => 'Ignore billing',
        ),
        'answer' => 'Reserved Instances, S3 lifecycle, right-size',
        'explanation' => '20% exam domain.',
        'pro_tip' => 'Free tier hands-on mandatory.',
      ),
    ),
  ),
);
