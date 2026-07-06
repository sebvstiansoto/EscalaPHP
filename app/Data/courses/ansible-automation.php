<?php

declare(strict_types=1);

return [
    ['slug' => 'an-intro', 'order' => 1, 'title' => 'Ansible intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Config management agentless.', 'concepts' => ['ansible', 'agentless', 'yaml'], 'sections' => [
        ['heading' => 'Ansible', 'body' => '**Ansible** automatiza servidores vía **SSH** — sin agente instalado. Playbooks YAML idempotentes.'],
        ['heading' => 'Inventario', 'body' => 'inventory.ini — grupos web, db — ansible all -m ping.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Ansible vs Terraform?', 'options' => ['Ansible config en VMs; TF crea infra', 'Iguales', 'Ansible solo cloud'], 'answer' => 'Ansible config en VMs; TF crea infra', 'explanation' => 'Complementarios.', 'pro_tip' => 'Curso Terraform IaC.'],
        ['type' => 'choice', 'question' => '¿Agentless significa...?', 'options' => ['Solo SSH no daemon en target', 'Sin SSH', 'Browser only'], 'answer' => 'Solo SSH no daemon en target', 'explanation' => 'Push model desde control node.', 'pro_tip' => 'ansible.cfg host key checking.'],
    ]],
    ['slug' => 'an-playbook', 'order' => 2, 'title' => 'Playbooks y tasks', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Modules, handlers y idempotencia.', 'concepts' => ['playbook', 'task', 'module'], 'sections' => [
        ['heading' => 'Playbook', 'body' => '- hosts: web\n  tasks:\n    - name: Install nginx\n      apt: name=nginx state=present', 'code' => "- hosts: all\n  become: yes\n  tasks:\n    - apt: { name: curl, state: present }"],
        ['heading' => 'Idempotencia', 'body' => 'Segunda run no cambia nada si ya desired state — changed=0.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿become: yes?', 'options' => ['sudo/root en target', 'Become cloud', 'Delete host'], 'answer' => 'sudo/root en target', 'explanation' => 'Privilege escalation.', 'pro_tip' => 'become_user deploy specific.'],
        ['type' => 'contains', 'question' => 'Escribe hosts en playbook', 'must_contain' => ['hosts'], 'hint' => '- hosts: webservers', 'explanation' => 'Target group.', 'pro_tip' => 'ansible-playbook site.yml --check dry-run.'],
    ]],
    ['slug' => 'an-inventory', 'order' => 3, 'title' => 'Inventario dinámico', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Groups, vars y cloud inventory.', 'concepts' => ['inventory', 'group', 'dynamic'], 'sections' => [
        ['heading' => 'Groups', 'body' => '[web]\nserver1 ansible_host=10.0.1.5\n[web:vars]\nhttp_port=80'],
        ['heading' => 'Dynamic', 'body' => 'aws_ec2, azure_rm plugins — auto-discover instances.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿ansible_host?', 'options' => ['IP/hostname SSH target', 'Playbook name', 'Module name'], 'answer' => 'IP/hostname SSH target', 'explanation' => 'Override DNS name.', 'pro_tip' => 'Group vars hierarchy.'],
        ['type' => 'choice', 'question' => '¿Limit flag?', 'options' => ['--limit web run subset hosts', 'Sin efecto', 'Delete inventory'], 'answer' => '--limit web run subset hosts', 'explanation' => 'Rolling updates subset.', 'pro_tip' => 'Serial strategy rolling.'],
    ]],
    ['slug' => 'an-roles', 'order' => 4, 'title' => 'Roles reutilizables', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'tasks, templates, vars por role.', 'concepts' => ['role', 'template', 'jinja2'], 'sections' => [
        ['heading' => 'Roles', 'body' => 'roles/nginx/tasks/main.yml — ansible-galaxy install geerlingguy.php.'],
        ['heading' => 'Templates', 'body' => 'Jinja2 nginx.conf.j2 → /etc/nginx/nginx.conf notify restart.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Handler?', 'options' => ['Task solo si notify y changed', 'Siempre run', 'Delete file'], 'answer' => 'Task solo si notify y changed', 'explanation' => 'Restart service once end play.', 'pro_tip' => 'handlers flush at end.'],
        ['type' => 'choice', 'question' => '¿Galaxy?', 'options' => ['Registry roles community', 'Game', 'Cloud provider'], 'answer' => 'Registry roles community', 'explanation' => 'Reuse nginx, docker roles.', 'pro_tip' => 'requirements.yml install deps.'],
    ]],
    ['slug' => 'an-vault', 'order' => 5, 'title' => 'Ansible Vault', 'level' => 'Seguridad', 'minutes' => 30, 'summary' => 'Cifrar secrets en git.', 'concepts' => ['vault', 'encrypt', 'secret'], 'sections' => [
        ['heading' => 'Vault', 'body' => 'ansible-vault encrypt secrets.yml — password en CI variable.'],
        ['heading' => 'Best practice', 'body' => 'Secrets cifrados en repo; vault password en 1Password/CI.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿ansible-vault edit?', 'options' => ['Edita archivo cifrado in-place', 'Decrypt git history', 'Public secrets'], 'answer' => 'Edita archivo cifrado in-place', 'explanation' => 'Encrypted at rest in git.', 'pro_tip' => 'Compare Sealed Secrets Helm.'],
        ['type' => 'choice', 'question' => '¿Plain password in playbook?', 'options' => ['Nunca — vault o external', 'Siempre OK', 'Only dev'], 'answer' => 'Nunca — vault o external', 'explanation' => 'Security baseline.', 'pro_tip' => 'Curso seguridad web secrets.'],
    ]],
    ['slug' => 'an-prod', 'order' => 6, 'title' => 'Ansible en producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'AWX/Tower, CI y rolling deploy.', 'concepts' => ['awx', 'tower', 'rolling'], 'sections' => [
        ['heading' => 'AWX', 'body' => 'UI scheduling, RBAC, job templates — Ansible enterprise open source.'],
        ['heading' => 'Deploy pattern', 'body' => 'serial: 1 rolling — update one server, health check, next.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿serial en play?', 'options' => ['N hosts at a time rolling', 'All parallel always', 'One playbook'], 'answer' => 'N hosts at a time rolling', 'explanation' => 'Zero downtime deploys.', 'pro_tip' => 'max_fail_percentage tolerance.'],
        ['type' => 'choice', 'question' => '¿Ansible vs bash scripts?', 'options' => ['Idempotencia y modules declarativos', 'Scripts siempre mejor', 'Sin diferencia'], 'answer' => 'Idempotencia y modules declarativos', 'explanation' => 'Repeatable infra config.', 'pro_tip' => 'Curso linux-bash scripts simple tasks.'],
    ]],
];
