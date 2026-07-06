<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Goroutines y channels',
    'body' => 'Concurrencia que hace famoso a Go. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐹',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [goroutine](/glosario#goroutine) · [channel](/glosario#channel) · [SELECT](/glosario#select)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Goroutines',
    'body' => 'go fetchURL(url) — miles de goroutines ligeras vs threads OS.',
    'code' => 'ch := make(chan string)
go func() { ch <- "done" }()
msg := <-ch',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Select',
    'body' => 'select espera múltiples channels — timeout, cancelación, fan-in.',
    'code' => '# Practica: go-concurrency
echo "Listo"
# Reemplaza con tu comando',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Concurrencia que hace famoso a Go. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Go backend**, esto aparece en code reviews, incidentes y entregas diarias. Concurrencia que hace famoso a Go. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'ch := make(chan string)
go func() { ch <- "done" }()
msg := <-ch',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'ch := make(chan string)',
      1 => 'go func() { ch <- "done" }()',
      2 => 'msg := <-ch',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** sync.WaitGroup para esperar batch.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo lanzar goroutine?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Channel sirve para...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
