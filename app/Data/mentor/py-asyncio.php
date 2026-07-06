<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Asyncio y concurrencia',
    'body' => 'async/await, I/O concurrente y por qué FastAPI es rápido. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Asíncrono (async)](/glosario#async) · [await](/glosario#await) · [asyncio](/glosario#asyncio)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'async def',
    'body' => 'Funciones asíncronas no bloquean mientras esperan I/O (red, disco). FastAPI las usa por defecto.',
    'code' => 'import asyncio
async def main():
    await asyncio.sleep(0)
    print(\'listo\')',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'await',
    'body' => 'Esperas operaciones I/O sin congelar el servidor — miles de requests en un proceso.',
    'code' => 'async def f():\\n    await algo()',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** async/await, I/O concurrente y por qué FastAPI es rápido. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. async/await, I/O concurrente y por qué FastAPI es rápido. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'import asyncio
async def main():
    await asyncio.sleep(0)
    print(\'listo\')',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'import asyncio',
      1 => 'async def main():',
      2 => '    await asyncio.sleep(0)',
      3 => '    print(\'listo\')',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** CPU-bound → multiprocessing; I/O-bound → asyncio.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué FastAPI es rápido con I/O?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe async def y await en un fragmento** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
