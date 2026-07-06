<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Singleton y Factory',
    'body' => 'Una instancia vs fábricas de objetos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Singleton](/glosario#singleton) · [Factory](/glosario#factory) · [Patrones creacionales](/glosario#creation)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Singleton',
    'body' => 'Garantiza **una sola instancia** (conexión BD, logger). Cuidado: dificulta tests y estado global.',
    'code' => 'class Logger {
    private static ?self $i = null;
    public static function get(): self {
        return self::$i ??= new self();
    }
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Factory',
    'body' => 'Factory Method / Abstract Factory crean objetos sin acoplar al tipo concreto.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-singleton\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Una instancia vs fábricas de objetos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Patrones de diseño**, esto aparece en code reviews, incidentes y entregas diarias. Una instancia vs fábricas de objetos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'class Logger {
    private static ?self $i = null;
    public static function get(): self {
        return self::$i ??= new self();
    }
}',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'class Logger {',
      1 => '    private static ?self $i = null;',
      2 => '    public static function get(): self {',
      3 => '        return self::$i ??= new self();',
      4 => '    }',
      5 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Laravel service container reemplaza muchos singletons manuales.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-singleton](/conexiones#conn-singleton).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Riesgo principal del Singleton?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Factory Method resuelve...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
