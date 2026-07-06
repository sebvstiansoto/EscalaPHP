<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Explotación web (teoría defensiva)',
    'body' => 'Cómo piensa un atacante: XSS, SQLi, IDOR. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎯',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [XSS](/glosario#xss) · [sqli](/glosario#sqli) · [idor](/glosario#idor)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'SQLi ofensiva',
    'body' => 'Atacante prueba `\' OR 1=1--` en login — por eso **prepared statements** son obligatorios.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'XSS ofensiva',
    'body' => 'Inyecta script que roba cookie — defensa: escape + CSP + httpOnly cookies.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'IDOR',
    'body' => 'Cambiar `/api/users/1` a `/api/users/2` sin autorización — defensa: policies y checks de ownership.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Ethical hacking**, esto aparece en code reviews, incidentes y entregas diarias. Cómo piensa un atacante: XSS, SQLi, IDOR. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
echo \'Hola desde PHP\';',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<?php
echo \'Hola desde PHP\';',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Autoriza en servidor, no confíes en UI oculta.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿IDOR significa...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe OR 1=1 como ejemplo SQLi (teoría)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
