<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Herramientas del oficio',
    'body' => 'Burp Suite, OWASP ZAP y labs legales. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎯',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [burp](/glosario#burp) · [zap](/glosario#zap) · [proxy](/glosario#proxy)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Burp Suite',
    'body' => 'Proxy intercepta HTTP — modificas requests para probar vulnerabilidades en **apps de lab**.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'OWASP ZAP',
    'body' => 'Alternativa open source — scanner y proxy.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Labs',
    'body' => 'DVWA, WebGoat, PortSwigger Academy, HackTheBox — entornos diseñados para aprender.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Ethical hacking**, esto aparece en code reviews, incidentes y entregas diarias. Burp Suite, OWASP ZAP y labs legales. — no es teoría de manual: es lo que te van a pedir en producción.',
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
    'body' => '💡 **Pro tip:** PortSwigger Academy es gratis y excelente.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Burp Suite como proxy...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿DVWA es...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
