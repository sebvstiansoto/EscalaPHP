<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Context API',
    'body' => 'Compartir estado sin prop drilling. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Context](/glosario#context) · [Provider](/glosario#provider) · [Prop drilling](/glosario#prop-drilling)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Prop drilling',
    'body' => 'Pasar props por 5 niveles es doloroso. **Context** comparte datos (tema, usuario, idioma) a todo el árbol.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'createContext + Provider',
    'body' => 'Creas contexto, envuelves con Provider, consumes con useContext.',
    'code' => 'const ThemeContext = createContext(\'light\');
const theme = useContext(ThemeContext);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Compartir estado sin prop drilling. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React**, esto aparece en code reviews, incidentes y entregas diarias. Compartir estado sin prop drilling. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const ThemeContext = createContext(\'light\');
const theme = useContext(ThemeContext);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const ThemeContext = createContext(\'light\');',
      1 => 'const theme = useContext(ThemeContext);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Para estado complejo considera Zustand o Redux.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Para qué sirve React Context?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué hook consume un Context?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
