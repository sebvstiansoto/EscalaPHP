<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Cliente React con Apollo',
    'body' => 'useQuery, useMutation y cache. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '◈',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [apollo](/glosario#apollo) · [usequery](/glosario#usequery) · [Caché](/glosario#cache)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Apollo Client',
    'body' => 'useQuery(GET_USERS) — fetch, cache y loading/error states integrados.',
    'code' => 'const { data, loading, error } = useQuery(GET_USERS);
if (loading) return \'...\';
return data.users.map(u => u.name);',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Cache',
    'body' => 'Apollo normaliza por id — actualizar un user refresca UI automáticamente.',
    'code' => 'console.log(\'Practica: gq-apollo\');',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** useQuery, useMutation y cache. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **GraphQL**, esto aparece en code reviews, incidentes y entregas diarias. useQuery, useMutation y cache. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const { data, loading, error } = useQuery(GET_USERS);
if (loading) return \'...\';
return data.users.map(u => u.name);',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const { data, loading, error } = useQuery(GET_USERS);',
      1 => 'if (loading) return \'...\';',
      2 => 'return data.users.map(u => u.name);',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** gql tag define queries en .graphql files.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Hook Apollo para leer?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Ventaja cache Apollo?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
