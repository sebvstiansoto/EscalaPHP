<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'an-intro',
    'order' => 1,
    'title' => 'Ansible intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Config management agentless.',
    'concepts' => 
    array (
      0 => 'ansible',
      1 => 'agentless',
      2 => 'yaml',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Ansible',
        'body' => '**Ansible** automatiza servidores vía **SSH** — sin agente instalado. Playbooks YAML idempotentes.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Inventario',
        'body' => 'inventory.ini — grupos web, db — ansible all -m ping.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ansible vs Terraform?',
        'options' => 
        array (
          0 => 'Ansible config en VMs; TF crea infra',
          1 => 'Iguales',
          2 => 'Ansible solo cloud',
        ),
        'answer' => 'Ansible config en VMs; TF crea infra',
        'explanation' => 'Complementarios.',
        'pro_tip' => 'Curso Terraform IaC.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Agentless significa...?',
        'options' => 
        array (
          0 => 'Solo SSH no daemon en target',
          1 => 'Sin SSH',
          2 => 'Browser only',
        ),
        'answer' => 'Solo SSH no daemon en target',
        'explanation' => 'Push model desde control node.',
        'pro_tip' => 'ansible.cfg host key checking.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'an-playbook',
    'order' => 2,
    'title' => 'Playbooks y tasks',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Modules, handlers y idempotencia.',
    'concepts' => 
    array (
      0 => 'playbook',
      1 => 'task',
      2 => 'module',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Playbook',
        'body' => '- hosts: web\\n  tasks:\\n    - name: Install nginx\\n      apt: name=nginx state=present',
        'code' => '- hosts: all
  become: yes
  tasks:
    - apt: { name: curl, state: present }',
      ),
      1 => 
      array (
        'heading' => 'Idempotencia',
        'body' => 'Segunda run no cambia nada si ya desired state — changed=0.',
        'code' => '- hosts: webservers',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿become: yes?',
        'options' => 
        array (
          0 => 'sudo/root en target',
          1 => 'Become cloud',
          2 => 'Delete host',
        ),
        'answer' => 'sudo/root en target',
        'explanation' => 'Privilege escalation.',
        'pro_tip' => 'become_user deploy specific.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe hosts en playbook',
        'must_contain' => 
        array (
          0 => 'hosts',
        ),
        'hint' => '- hosts: webservers',
        'explanation' => 'Target group.',
        'pro_tip' => 'ansible-playbook site.yml --check dry-run.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'an-inventory',
    'order' => 3,
    'title' => 'Inventario dinámico',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Groups, vars y cloud inventory.',
    'concepts' => 
    array (
      0 => 'inventory',
      1 => 'group',
      2 => 'dynamic',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Groups',
        'body' => '[web]\\nserver1 ansible_host=10.0.1.5\\n[web:vars]\\nhttp_port=80',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-inventory
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Dynamic',
        'body' => 'aws_ec2, azure_rm plugins — auto-discover instances.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-inventory
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ansible_host?',
        'options' => 
        array (
          0 => 'IP/hostname SSH target',
          1 => 'Playbook name',
          2 => 'Module name',
        ),
        'answer' => 'IP/hostname SSH target',
        'explanation' => 'Override DNS name.',
        'pro_tip' => 'Group vars hierarchy.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Limit flag?',
        'options' => 
        array (
          0 => '--limit web run subset hosts',
          1 => 'Sin efecto',
          2 => 'Delete inventory',
        ),
        'answer' => '--limit web run subset hosts',
        'explanation' => 'Rolling updates subset.',
        'pro_tip' => 'Serial strategy rolling.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'an-roles',
    'order' => 4,
    'title' => 'Roles reutilizables',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'tasks, templates, vars por role.',
    'concepts' => 
    array (
      0 => 'role',
      1 => 'template',
      2 => 'jinja2',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Roles',
        'body' => 'roles/nginx/tasks/main.yml — ansible-galaxy install geerlingguy.php.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-roles
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Templates',
        'body' => 'Jinja2 nginx.conf.j2 → /etc/nginx/nginx.conf notify restart.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-roles
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Handler?',
        'options' => 
        array (
          0 => 'Task solo si notify y changed',
          1 => 'Siempre run',
          2 => 'Delete file',
        ),
        'answer' => 'Task solo si notify y changed',
        'explanation' => 'Restart service once end play.',
        'pro_tip' => 'handlers flush at end.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Galaxy?',
        'options' => 
        array (
          0 => 'Registry roles community',
          1 => 'Game',
          2 => 'Cloud provider',
        ),
        'answer' => 'Registry roles community',
        'explanation' => 'Reuse nginx, docker roles.',
        'pro_tip' => 'requirements.yml install deps.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'an-vault',
    'order' => 5,
    'title' => 'Ansible Vault',
    'level' => 'Seguridad',
    'minutes' => 30,
    'summary' => 'Cifrar secrets en git.',
    'concepts' => 
    array (
      0 => 'vault',
      1 => 'encrypt',
      2 => 'secret',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Vault',
        'body' => 'ansible-vault encrypt secrets.yml — password en CI variable.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-vault
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Best practice',
        'body' => 'Secrets cifrados en repo; vault password en 1Password/CI.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-vault
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ansible-vault edit?',
        'options' => 
        array (
          0 => 'Edita archivo cifrado in-place',
          1 => 'Decrypt git history',
          2 => 'Public secrets',
        ),
        'answer' => 'Edita archivo cifrado in-place',
        'explanation' => 'Encrypted at rest in git.',
        'pro_tip' => 'Compare Sealed Secrets Helm.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Plain password in playbook?',
        'options' => 
        array (
          0 => 'Nunca — vault o external',
          1 => 'Siempre OK',
          2 => 'Only dev',
        ),
        'answer' => 'Nunca — vault o external',
        'explanation' => 'Security baseline.',
        'pro_tip' => 'Curso seguridad web secrets.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'an-prod',
    'order' => 6,
    'title' => 'Ansible en producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'AWX/Tower, CI y rolling deploy.',
    'concepts' => 
    array (
      0 => 'awx',
      1 => 'tower',
      2 => 'rolling',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'AWX',
        'body' => 'UI scheduling, RBAC, job templates — Ansible enterprise open source.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-prod
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Deploy pattern',
        'body' => 'serial: 1 rolling — update one server, health check, next.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: an-prod
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿serial en play?',
        'options' => 
        array (
          0 => 'N hosts at a time rolling',
          1 => 'All parallel always',
          2 => 'One playbook',
        ),
        'answer' => 'N hosts at a time rolling',
        'explanation' => 'Zero downtime deploys.',
        'pro_tip' => 'max_fail_percentage tolerance.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Ansible vs bash scripts?',
        'options' => 
        array (
          0 => 'Idempotencia y modules declarativos',
          1 => 'Scripts siempre mejor',
          2 => 'Sin diferencia',
        ),
        'answer' => 'Idempotencia y modules declarativos',
        'explanation' => 'Repeatable infra config.',
        'pro_tip' => 'Curso linux-bash scripts simple tasks.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'ansible-automation-produccion',
    'order' => 7,
    'title' => 'Alta disponibilidad y recuperación ante fallos',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Alta disponibilidad y recuperación ante fallos — cierre avanzado de Ansible.',
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
        'body' => 'Aplica lo aprendido en Ansible a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'ansible-automation-operaciones',
    'order' => 8,
    'title' => 'Runbooks, SLOs y operación en producción',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Runbooks, SLOs y operación en producción — cierre avanzado de Ansible.',
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
        'body' => 'Aplica lo aprendido en Ansible a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
