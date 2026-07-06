<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Archivos y directorios',
    'body' => 'cp, mv, rm, mkdir y rutas relativas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐧',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [cp](/glosario#cp) · [mv](/glosario#mv) · [mkdir](/glosario#mkdir)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Manipular archivos',
    'body' => 'cp copia, mv mueve/renombra, rm borra (¡cuidado!), mkdir crea carpetas.',
    'code' => 'mkdir proyecto
cp archivo.txt proyecto/
mv viejo.txt nuevo.txt',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Rutas',
    'body' => '. es actual, .. es padre, / es raíz en Linux, ~ es tu home.',
    'code' => 'cp -r src/ dest/',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** cp, mv, rm, mkdir y rutas relativas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Linux & Bash**, esto aparece en code reviews, incidentes y entregas diarias. cp, mv, rm, mkdir y rutas relativas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'mkdir proyecto
cp archivo.txt proyecto/
mv viejo.txt nuevo.txt',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'mkdir proyecto',
      1 => 'cp archivo.txt proyecto/',
      2 => 'mv viejo.txt nuevo.txt',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** touch crea archivo vacío o actualiza timestamp.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué comando crea un directorio?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe cp -r src/ dest/ para copiar carpeta recursiva** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
