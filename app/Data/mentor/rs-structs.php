<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Structs, enums y pattern matching',
    'body' => 'Option, Result y match. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🦀',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [enum](/glosario#enum) · [option](/glosario#option) · [result](/glosario#result)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Option/Result',
    'body' => 'Sin null — Option<T> y Result<T,E> fuerzan manejo explícito errores.',
    'code' => 'match result {
    Ok(v) => println!("{}", v),
    Err(e) => eprintln!("error: {}", e),
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'match',
    'body' => 'Pattern matching exhaustivo — compiler exige cubrir todos casos enum.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Option, Result y match. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Rust**, esto aparece en code reviews, incidentes y entregas diarias. Option, Result y match. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'match result {
    Ok(v) => println!("{}", v),
    Err(e) => eprintln!("error: {}", e),
}',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'match result {',
      1 => '    Ok(v) => println!("{}", v),',
      2 => '    Err(e) => eprintln!("error: {}", e),',
      3 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** anyhow/thiserror crates ergonomía.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿? operator?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Option::None equivale a...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
