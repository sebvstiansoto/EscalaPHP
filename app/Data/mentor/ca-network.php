<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Networking exam topics',
    'body' => 'VPC, Route53, CloudFront, Direct Connect. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎓',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [VPC](/glosario#vpc) · [Route 53](/glosario#route53) · [CloudFront](/glosario#cloudfront)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'VPC',
    'body' => 'Public/private subnets, IGW, NAT Gateway, NACL vs Security Group — exam classic.',
    'code' => '# Practica: ca-network
echo "Listo"
# Reemplaza con tu comando',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Route53',
    'body' => 'Routing policies: simple, weighted, latency, failover, geolocation.',
    'code' => '# Practica: ca-network
echo "Listo"
# Reemplaza con tu comando',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** VPC, Route53, CloudFront, Direct Connect. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Cert AWS SAA-C03**, esto aparece en code reviews, incidentes y entregas diarias. VPC, Route53, CloudFront, Direct Connect. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Practica: ca-network
echo "Listo"
# Reemplaza con tu comando',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Practica: ca-network',
      1 => 'echo "Listo"',
      2 => '# Reemplaza con tu comando',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso networking-devops TCP/IP.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Private subnet internet?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿CloudFront?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
