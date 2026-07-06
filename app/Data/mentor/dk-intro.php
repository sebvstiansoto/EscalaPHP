<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Qué es Docker y por qué importa',
    'body' => 'Contenedores vs máquinas virtuales, imágenes y registro. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐳',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Contenedor](/glosario#container) · [Imagen Docker](/glosario#image) · [Máquina virtual (VM)](/glosario#vm)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'El problema',
    'body' => '"En mi máquina funciona" — Docker empaqueta OS mínimo + runtime + tu app en una **imagen** portable.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Contenedor vs VM',
    'body' => 'Una VM virtualiza hardware entero. Un **contenedor** comparte el kernel — más ligero y rápido.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Contenedores vs máquinas virtuales, imágenes y registro. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Docker**, esto aparece en code reviews, incidentes y entregas diarias. Contenedores vs máquinas virtuales, imágenes y registro. — no es teoría de manual: es lo que te van a pedir en producción.',
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
    'body' => '💡 **Pro tip:** Docker Hub es como npm/Packagist pero para imágenes.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué es una imagen Docker?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cuál es la mejor siguiente acción tras completar este módulo?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
