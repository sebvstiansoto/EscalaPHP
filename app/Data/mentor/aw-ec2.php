<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'EC2: servidores virtuales',
    'body' => 'Instancias, AMI, security groups y SSH. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☁️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [EC2](/glosario#ec2) · [instance](/glosario#instance) · [security-group](/glosario#security-group)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'EC2',
    'body' => 'Máquina virtual Linux — corre PHP, Node, Docker como un VPS.',
    'code' => 'AMI (imagen) → Instance t3.micro → Security Group (firewall) → Elastic IP',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Security Group',
    'body' => 'Solo puertos 22 (SSH), 80, 443 abiertos — el resto bloqueado.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Instancias, AMI, security groups y SSH. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **AWS Cloud básico**, esto aparece en code reviews, incidentes y entregas diarias. Instancias, AMI, security groups y SSH. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'AMI (imagen) → Instance t3.micro → Security Group (firewall) → Elastic IP',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'AMI (imagen) → Instance t3.micro → Security Group (firewall) → Elastic IP',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** t3.micro free tier 12 meses (verificar actual).',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿EC2 es...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Security Group es...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
