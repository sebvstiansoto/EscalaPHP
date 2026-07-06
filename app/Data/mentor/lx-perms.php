<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Permisos chmod y chown',
    'body' => 'rwx, usuarios, grupos y seguridad básica. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐧',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [chmod](/glosario#chmod) · [chown](/glosario#chown) · [rwx](/glosario#rwx)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'rwx',
    'body' => '**r**ead, **w**rite, **e**xecute para owner, group y others. `ls -l` los muestra como drwxr-xr-x.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'chmod',
    'body' => 'chmod 755 script.sh — el dueño ejecuta, otros solo leen.',
    'code' => 'chmod +x deploy.sh
./deploy.sh',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** rwx, usuarios, grupos y seguridad básica. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Linux & Bash**, esto aparece en code reviews, incidentes y entregas diarias. rwx, usuarios, grupos y seguridad básica. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'chmod +x deploy.sh
./deploy.sh',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'chmod +x deploy.sh',
      1 => './deploy.sh',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** 755 es común para scripts; 644 para archivos normales.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace chmod +x archivo?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Quién es "owner" en permisos?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
