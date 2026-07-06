<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'TypeScript en React',
    'body' => 'Props tipadas, useState y eventos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔷',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [React](/glosario#react) · [Props](/glosario#props) · [useState (TypeScript)](/glosario#useState)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Props tipadas',
    'body' => 'interface ButtonProps { label: string; onClick: () => void; }',
    'code' => 'function Button({ label, onClick }: ButtonProps) {
  return <button onClick={onClick}>{label}</button>;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'useState genérico',
    'body' => 'useState<User | null>(null) — el estado sabe qué forma tiene.',
    'code' => 'console.log(\'Practica: ts-react\');',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Props tipadas, useState y eventos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **TypeScript**, esto aparece en code reviews, incidentes y entregas diarias. Props tipadas, useState y eventos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'function Button({ label, onClick }: ButtonProps) {
  return <button onClick={onClick}>{label}</button>;
}',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'function Button({ label, onClick }: ButtonProps) {',
      1 => '  return <button onClick={onClick}>{label}</button>;',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** React.FC está menos de moda — props directas.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-react](/conexiones#conn-react).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo tipas props de un componente?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Tipo del evento click en botón?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
