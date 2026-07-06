<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Funciones pequeñas y SRP',
    'body' => 'Un nivel abstracción, pocos args, sin efectos ocultos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '✨',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [SRP](/glosario#srp) · [function](/glosario#function) · [abstraction](/glosario#abstraction)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Funciones',
    'body' => 'Haz una cosa. ~20 líneas max guideline. 0-3 parámetros — más → objeto options.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Efectos colaterales',
    'body' => 'Función llamada checkPassword no debería crear sesión — sorpresa para quien lee.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Un nivel abstracción, pocos args, sin efectos ocultos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'teach',
    'title' => 'Vocabulario',
    'body' => 'Términos de esta lección: **SRP**, **function**, **abstraction**. Búscalos en el [/glosario](/glosario) si necesitas repaso.',
  ),
  6 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Clean Code**, esto aparece en code reviews, incidentes y entregas diarias. Un nivel abstracción, pocos args, sin efectos ocultos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<?php
echo \'Hola desde PHP\';',
    'demo_language' => 'php',
  ),
  8 => 
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
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso patrones diseño: SRP formal.',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Función con 8 parámetros?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Command-query separation?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  12 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  13 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
