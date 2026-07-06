<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Networking producción',
    'body' => 'Zero-length, DNS failover, zero trust. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [mtu](/glosario#mtu) · [Failover](/glosario#failover) · [zero-trust](/glosario#zero-trust)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'MTU issues',
    'body' => 'PMTUD black hole — MSS clamp VPN — mysterious large payload failures.',
    'code' => '# Practica: nw-prod
echo "Listo"
# Reemplaza con tu comando',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Zero trust',
    'body' => 'No flat network trust — mTLS service mesh — VPN not enough alone modern.',
    'code' => '# Practica: nw-prod
echo "Listo"
# Reemplaza con tu comando',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Zero-length, DNS failover, zero trust. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Networking para devs**, esto aparece en code reviews, incidentes y entregas diarias. Zero-length, DNS failover, zero trust. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Practica: nw-prod
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
      0 => '# Practica: nw-prod',
      1 => 'echo "Listo"',
      2 => '# Reemplaza con tu comando',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Internal ALB private DNS.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Split horizon DNS?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿First debug slow API?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
