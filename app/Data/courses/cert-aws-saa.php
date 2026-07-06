<?php

declare(strict_types=1);

return [
    ['slug' => 'ca-intro', 'order' => 1, 'title' => 'AWS SAA-C03 overview', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'Examen Solutions Architect Associate.', 'concepts' => ['aws', 'saa', 'cert'], 'sections' => [
        ['heading' => 'SAA-C03', 'body' => '**AWS Solutions Architect Associate** — diseño sistemas escalables, seguros, resilientes, cost-effective — 65 preguntas, 130 min.'],
        ['heading' => 'Dominios', 'body' => 'Design Secure Architectures 30%, Resilient 26%, High-Performing 24%, Cost 20%.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿SAA nivel?', 'options' => ['Associate', 'Professional only', 'Foundational only'], 'answer' => 'Associate', 'explanation' => 'Before SAP pro.', 'pro_tip' => 'Curso aws-cloud-basico base.'],
        ['type' => 'choice', 'question' => '¿Exam format?', 'options' => ['Multiple choice + multi-response', 'Coding only', 'Oral'], 'answer' => 'Multiple choice + multi-response', 'explanation' => 'Scenario based.', 'pro_tip' => 'Hands-on free tier practice.'],
    ]],
    ['slug' => 'ca-compute', 'order' => 2, 'title' => 'Compute deep dive', 'level' => 'Fundamentos', 'minutes' => 40, 'summary' => 'EC2, ASG, Lambda, containers.', 'concepts' => ['ec2', 'asg', 'lambda'], 'sections' => [
        ['heading' => 'EC2 types', 'body' => 'General t3, Compute c6, Memory r6, GPU p4 — right-sizing exam favorite.'],
        ['heading' => 'Auto Scaling', 'body' => 'ASG + ALB — scale on CPU/custom metric — multi-AZ required resilient.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Spot instances?', 'options' => ['Cheap interruptible batch workloads', 'Production DB primary', 'Always on'], 'answer' => 'Cheap interruptible batch workloads', 'explanation' => 'Can terminate 2 min notice.', 'pro_tip' => 'Mixed instances ASG save cost.'],
        ['type' => 'choice', 'question' => '¿Lambda vs EC2?', 'options' => ['Lambda event short; EC2 long-running control', 'Always Lambda', 'Never Lambda'], 'answer' => 'Lambda event short; EC2 long-running control', 'explanation' => 'Exam scenario trade-offs.', 'pro_tip' => 'Lambda 15 min max timeout.'],
    ]],
    ['slug' => 'ca-storage', 'order' => 3, 'title' => 'Storage y databases exam', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'S3, EBS, EFS, RDS, DynamoDB.', 'concepts' => ['s3', 'ebs', 'dynamodb'], 'sections' => [
        ['heading' => 'S3 classes', 'body' => 'Standard, IA, Glacier — lifecycle policies — exam cost optimization.'],
        ['heading' => 'Database choice', 'body' => 'RDS relational, DynamoDB NoSQL scale, Aurora performance — when which.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿S3 durability?', 'options' => ['11 nines designed', 'Single disk', 'No backup'], 'answer' => '11 nines designed', 'explanation' => 'Across AZs.', 'pro_tip' => 'Versioning protect deletes.'],
        ['type' => 'choice', 'question' => '¿DynamoDB cuando?', 'options' => ['Key-value scale unpredictable', 'Complex joins reporting', 'Always replace RDS'], 'answer' => 'Key-value scale unpredictable', 'explanation' => 'Exam polyglot persistence.', 'pro_tip' => 'DAX cache read heavy.'],
    ]],
    ['slug' => 'ca-network', 'order' => 4, 'title' => 'Networking exam topics', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'VPC, Route53, CloudFront, Direct Connect.', 'concepts' => ['vpc', 'route53', 'cloudfront'], 'sections' => [
        ['heading' => 'VPC', 'body' => 'Public/private subnets, IGW, NAT Gateway, NACL vs Security Group — exam classic.'],
        ['heading' => 'Route53', 'body' => 'Routing policies: simple, weighted, latency, failover, geolocation.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Private subnet internet?', 'options' => ['NAT Gateway public subnet', 'IGW direct', 'No internet possible'], 'answer' => 'NAT Gateway public subnet', 'explanation' => 'Outbound only private IPs.', 'pro_tip' => 'Curso networking-devops TCP/IP.'],
        ['type' => 'choice', 'question' => '¿CloudFront?', 'options' => ['CDN edge cache', 'Database', 'Email'], 'answer' => 'CDN edge cache', 'explanation' => 'Origin S3 or ALB.', 'pro_tip' => 'Compare system-design CDN.'],
    ]],
    ['slug' => 'ca-security', 'order' => 5, 'title' => 'Security y compliance', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'IAM, KMS, WAF, Organizations.', 'concepts' => ['iam', 'kms', 'waf'], 'sections' => [
        ['heading' => 'IAM', 'body' => 'Least privilege, roles not keys, SCPs Organizations — cross-account patterns.'],
        ['heading' => 'Encryption', 'body' => 'KMS CMK — encrypt S3, EBS, RDS at rest — TLS in transit.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿IAM role vs user keys EC2?', 'options' => ['Role temporary creds no hardcode', 'Access keys in code', 'Root account'], 'answer' => 'Role temporary creds no hardcode', 'explanation' => 'Exam best practice.', 'pro_tip' => 'Curso seguridad-web concepts.'],
        ['type' => 'choice', 'question' => '¿WAF?', 'options' => ['Web Application Firewall HTTP', 'Wide area file', 'Windows only'], 'answer' => 'Web Application Firewall HTTP', 'explanation' => 'Block SQLi XSS patterns.', 'pro_tip' => 'Shield DDoS standard advanced.'],
    ]],
    ['slug' => 'ca-exam', 'order' => 6, 'title' => 'Estrategia examen SAA', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Tips, simulacros y cost optimization.', 'concepts' => ['exam', 'simulator', 'cost'], 'sections' => [
        ['heading' => 'Exam tips', 'body' => 'Read scenario twice — eliminate wrong — **most secure/cost-effective/resilient** per question ask.'],
        ['heading' => 'Prep', 'body' => 'AWS Skill Builder, Tutorials Dojo, hands-on labs — 4-8 semanas estudio típico.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Pregunta pide HA?', 'options' => ['Multi-AZ multi-region options', 'Single EC2', 'One AZ always'], 'answer' => 'Multi-AZ multi-region options', 'explanation' => 'Resilience domain heavy.', 'pro_tip' => 'Well-Architected Framework pillars.'],
        ['type' => 'choice', 'question' => '¿Cost optimization hint?', 'options' => ['Reserved Instances, S3 lifecycle, right-size', 'Largest instance always', 'Ignore billing'], 'answer' => 'Reserved Instances, S3 lifecycle, right-size', 'explanation' => '20% exam domain.', 'pro_tip' => 'Free tier hands-on mandatory.'],
    ]],
];
