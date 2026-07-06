<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Formularios controlados',
    'body' => 'Inputs ligados al estado, validación y submit. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Controlled component](/glosario#controlled) · [Forms (formularios)](/glosario#forms) · [Validation](/glosario#validation)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Controlled components',
    'body' => 'El valor del input vive en `useState`. React controla cada tecla — fuente única de verdad.',
    'code' => 'const [email, setEmail] = useState(\'\');
<input value={email} onChange={e => setEmail(e.target.value)} />',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Submit',
    'body' => 'onSubmit con preventDefault() evita recarga. Envías estado al backend con fetch POST.',
    'code' => 'let v = "";\\nv = "test@mail.com";\\nconsole.log(v);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Inputs ligados al estado, validación y submit. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React**, esto aparece en code reviews, incidentes y entregas diarias. Inputs ligados al estado, validación y submit. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const [email, setEmail] = useState(\'\');
<input value={email} onChange={e => setEmail(e.target.value)} />',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const [email, setEmail] = useState(\'\');',
      1 => '<input value={email} onChange={e => setEmail(e.target.value)} />',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** react-hook-form simplifica formularios grandes.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué es un input controlado?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Simula onChange: let v = ""; v = "test@mail.com"; console.log(v)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
