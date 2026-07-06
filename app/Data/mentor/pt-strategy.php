<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Strategy y Observer',
    'body' => 'Algoritmos intercambiables y eventos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Strategy](/glosario#strategy) · [Observer](/glosario#observer) · [Event (patrón)](/glosario#event)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Strategy',
    'body' => 'Encapsulas algoritmos (envío, impuestos, descuento) e intercambias en runtime.',
    'code' => 'interface ShippingStrategy {
    public function cost(Order $o): int;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Observer',
    'body' => 'Sujeto notifica a observadores — Laravel Events/Listeners es Observer a escala.',
    'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-strategy\';',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Algoritmos intercambiables y eventos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Patrones de diseño**, esto aparece en code reviews, incidentes y entregas diarias. Algoritmos intercambiables y eventos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'interface ShippingStrategy {
    public function cost(Order $o): int;
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
      0 => 'interface ShippingStrategy {',
      1 => '    public function cost(Order $o): int;',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Nuevo método de pago = nueva clase Strategy.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Strategy vs if/else gigante?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Equivalente Laravel de Observer?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de PHP. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
