<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Playbooks y tasks',
    'body' => 'Modules, handlers y idempotencia. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔴',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [playbook](/glosario#playbook) · [task](/glosario#task) · [module](/glosario#module)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Playbook',
    'body' => '- hosts: web\\n  tasks:\\n    - name: Install nginx\\n      apt: name=nginx state=present',
    'code' => '- hosts: all
  become: yes
  tasks:
    - apt: { name: curl, state: present }',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Idempotencia',
    'body' => 'Segunda run no cambia nada si ya desired state — changed=0.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Modules, handlers y idempotencia. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Ansible**, esto aparece en code reviews, incidentes y entregas diarias. Modules, handlers y idempotencia. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '- hosts: all
  become: yes
  tasks:
    - apt: { name: curl, state: present }',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '- hosts: all',
      1 => '  become: yes',
      2 => '  tasks:',
      3 => '    - apt: { name: curl, state: present }',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** become_user deploy specific.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿become: yes?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe hosts en playbook** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  11 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  12 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
