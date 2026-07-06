<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Variables y tipos',
    'body' => 'Strings, enteros, floats y booleanos sin declarar tipo. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Variable](/glosario#variable) · [str](/glosario#str) · [int](/glosario#int) · [bool](/glosario#bool)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Asignación simple',
    'body' => 'En Python: `nombre = "Ana"` y `edad = 25`. El tipo se infiere solo.',
    'code' => 'nombre = \'Ana\'
edad = 25
activo = True
print(nombre, edad)',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Strings, enteros, floats y booleanos sin declarar tipo. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Checklist de dominio',
    'body' => 'Antes de avanzar confirma: entiendes el concepto, puedes nombrar un caso real y resolviste los ejercicios sin copiar.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. Strings, enteros, floats y booleanos sin declarar tipo. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'nombre = \'Ana\'
edad = 25
activo = True
print(nombre, edad)',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'nombre = \'Ana\'',
      1 => 'edad = 25',
      2 => 'activo = True',
      3 => 'print(nombre, edad)',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Snake_case (`precio_total`) es la convención Python — no camelCase.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**Crea variable precio = 99 y haz print(precio)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cuál es un booleano válido en Python?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de Python. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
