<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Introducción a Go',
    'body' => 'Por qué Go, instalación y primer programa. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐹',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [golang](/glosario#golang) · [compilado](/glosario#compilado) · [simplicidad](/glosario#simplicidad)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Go en la industria',
    'body' => '**Go** (Golang) de Google: compilado, rápido, concurrencia nativa. Usado en Docker, Kubernetes, Terraform y backends de alto tráfico.',
    'code' => 'package main\\nfunc main() { ... }',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Hello World',
    'body' => 'Un solo binario estático — deploy sin runtime instalado.',
    'code' => 'package main

import "fmt"

func main() {
    fmt.Println("Hola Go")
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Por qué Go, instalación y primer programa. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Go backend**, esto aparece en code reviews, incidentes y entregas diarias. Por qué Go, instalación y primer programa. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'package main\\nfunc main() { ... }',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'package main\\nfunc main() { ... }',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** go mod init inicia módulo.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Go es...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe package main** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
