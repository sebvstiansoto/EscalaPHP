<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Formularios y validación',
    'body' => 'Inputs, labels, accesibilidad y validación en el cliente. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🌐',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Forms (formularios)](/glosario#forms) · [Validation](/glosario#validation) · [Accesibilidad (a11y)](/glosario#a11y)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Formularios HTML',
    'body' => '`<form>`, `<input>`, `<label>` y `required` conectan al usuario con tu app.',
    'code' => '<label for="email">Email</label>
<input id="email" type="email" required>',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Validación JS',
    'body' => 'Antes de enviar, valida en JavaScript: longitud, formato email, contraseñas coincidentes.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Inputs, labels, accesibilidad y validación en el cliente. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'teach',
    'title' => 'Vocabulario',
    'body' => 'Términos de esta lección: **Forms (formularios)**, **Validation**, **Accesibilidad (a11y)**. Búscalos en el [/glosario](/glosario) si necesitas repaso.',
  ),
  6 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **HTML, CSS y JavaScript**, esto aparece en code reviews, incidentes y entregas diarias. Inputs, labels, accesibilidad y validación en el cliente. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<label for="email">Email</label>
<input id="email" type="email" required>',
    'demo_language' => 'javascript',
  ),
  8 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<label for="email">Email</label>',
      1 => '<input id="email" type="email" required>',
    ),
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Siempre asocia label con for/id — accesibilidad básica.',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué atributo HTML marca un campo obligatorio?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué type de input es para correo electrónico?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
