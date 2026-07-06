<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Scripts bash',
    'body' => 'Shebang, variables, if y automatizar deploy. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐧',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Shebang (#!/)](/glosario#shebang) · [Variables de shell](/glosario#variables) · [Automatización](/glosario#automation)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Script bash',
    'body' => 'Primera línea #!/bin/bash. Variables sin $.',
    'code' => '#!/bin/bash
NAME="EscalaPHP"
echo "Deploy $NAME"
if [ -f .env ]; then
  echo "OK"
fi',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Automatización',
    'body' => 'Scripts de backup, deploy y CI local — lo que hace GitHub Actions pero en tu máquina.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Shebang, variables, if y automatizar deploy. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Linux & Bash**, esto aparece en code reviews, incidentes y entregas diarias. Shebang, variables, if y automatizar deploy. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '#!/bin/bash
NAME="EscalaPHP"
echo "Deploy $NAME"
if [ -f .env ]; then
  echo "OK"
fi',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '#!/bin/bash',
      1 => 'NAME="EscalaPHP"',
      2 => 'echo "Deploy $NAME"',
      3 => 'if [ -f .env ]; then',
      4 => '  echo "OK"',
      5 => 'fi',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** set -e hace fallar el script al primer error.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué es el shebang #!/bin/bash?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe un if que compruebe -f archivo.txt** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
