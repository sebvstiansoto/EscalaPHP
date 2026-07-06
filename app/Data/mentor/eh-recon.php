<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Reconocimiento pasivo y activo',
    'body' => 'OSINT, DNS, subdominios y fingerprinting. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎯',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [recon](/glosario#recon) · [osint](/glosario#osint) · [DNS](/glosario#dns)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Recon pasivo',
    'body' => 'Información pública: WHOIS, DNS records, crt.sh certificados, Wayback Machine — sin tocar el servidor directamente.',
    'code' => '# Practica: eh-recon
echo "Listo"
# Reemplaza con tu comando',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Recon activo',
    'body' => 'Solo en scope: ping, nmap puertos, enumerar subdominios — genera logs en el objetivo.',
    'code' => '# Practica: eh-recon
echo "Listo"
# Reemplaza con tu comando',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** OSINT, DNS, subdominios y fingerprinting. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Ethical hacking**, esto aparece en code reviews, incidentes y entregas diarias. OSINT, DNS, subdominios y fingerprinting. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Practica: eh-recon
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
      0 => '# Practica: eh-recon',
      1 => 'echo "Listo"',
      2 => '# Reemplaza con tu comando',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** whois, dig, nslookup en tu lab local.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Recon pasivo...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿DNS A record contiene...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
