<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Pipes, grep y find',
    'body' => 'Encadenar comandos y buscar en archivos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐧',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Pipe (|)](/glosario#pipe) · [grep](/glosario#grep) · [find](/glosario#find)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Pipe |',
    'body' => 'La salida de un comando alimenta el siguiente: `cat log.txt | grep ERROR`.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'grep y find',
    'body' => 'grep busca texto en archivos. find localiza archivos por nombre o fecha.',
    'code' => 'grep -r \'function\' app/
find . -name \'*.php\'',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Encadenar comandos y buscar en archivos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Linux & Bash**, esto aparece en code reviews, incidentes y entregas diarias. Encadenar comandos y buscar en archivos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'grep -r \'function\' app/
find . -name \'*.php\'',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'grep -r \'function\' app/',
      1 => 'find . -name \'*.php\'',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** grep -i ignora mayúsculas; -n muestra número de línea.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué hace el operador |?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe grep -r "TODO" . para buscar recursivo** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
