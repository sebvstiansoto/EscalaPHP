<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Kotlin moderno',
    'body' => 'JVM, Android y backend Ktor. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🤖',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [kotlin](/glosario#kotlin) · [jvm](/glosario#jvm) · [android](/glosario#android)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Kotlin',
    'body' => '**Kotlin** — lenguaje oficial **Android**, interop Java, conciso. También backend con **Ktor** y Spring.',
    'code' => '# Practica: kt-intro
echo "Listo"
# Reemplaza con tu comando',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Sintaxis',
    'body' => 'val inmutable, var mutable, null safety — String? nullable.',
    'code' => 'fun main() {
    val name: String = "Ana"
    println("Hola $name")
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** JVM, Android y backend Ktor. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Kotlin & Android**, esto aparece en code reviews, incidentes y entregas diarias. JVM, Android y backend Ktor. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Practica: kt-intro
echo "Listo"
# Reemplaza con tu comando',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Practica: kt-intro',
      1 => 'echo "Listo"',
      2 => '# Reemplaza con tu comando',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** data class para DTOs.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿val vs var?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Null safety Kotlin?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
