<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'SSH y servidores remotos',
    'body' => 'Conectar a VPS, claves y scp. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐧',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SSH](/glosario#ssh) · [SSH keys](/glosario#keys) · [scp](/glosario#scp)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SSH',
    'body' => 'ssh user@servidor.com — terminal remota segura. Claves ed25519 mejor que contraseña.',
    'code' => 'ssh usuario@192.168.1.10',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'scp y rsync',
    'body' => 'Copiar archivos al servidor: scp archivo.txt user@host:/var/www/',
    'code' => 'ssh usuario@192.168.1.10',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Conectar a VPS, claves y scp. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Linux & Bash**, esto aparece en code reviews, incidentes y entregas diarias. Conectar a VPS, claves y scp. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'ssh usuario@192.168.1.10',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'ssh usuario@192.168.1.10',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Desactiva PasswordAuthentication en prod.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Forma más segura de autenticar SSH?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe ssh usuario@192.168.1.10** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
