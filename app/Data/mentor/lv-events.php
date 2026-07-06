<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Events y listeners',
    'body' => 'Desacoplar side effects con eventos. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔴',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Event (patrón)](/glosario#event) · [listener](/glosario#listener) · [Queue](/glosario#queue)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Events',
    'body' => 'OrderPlaced event → SendInvoice listener — checkout no conoce email SMTP.',
    'code' => 'event(new OrderPlaced(\\$order));

class SendInvoice
{
    public function handle(OrderPlaced \\$event): void
    {
        Mail::to(\\$event->order->email)->send(new InvoiceMail(\\$event->order));
    }
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Queued listeners',
    'body' => 'ShouldQueue en listener — email async sin bloquear request.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Desacoplar side effects con eventos. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Laravel desde cero**, esto aparece en code reviews, incidentes y entregas diarias. Desacoplar side effects con eventos. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'event(new OrderPlaced(\\$order));

class SendInvoice
{
    public function handle(OrderPlaced \\$event): void
    {
        Mail::to(\\$event->order->email)->send(new InvoiceMail(\\$event->order));
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
      0 => 'event(new OrderPlaced(\\$order));',
      1 => 'class SendInvoice',
      2 => '{',
      3 => '    public function handle(OrderPlaced \\$event): void',
      4 => '    {',
      5 => '        Mail::to(\\$event->order->email)->send(new InvoiceMail(\\$event->order));',
      6 => '    }',
      7 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso event-sourcing-cqrs advanced pattern.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Ventaja event-driven Laravel?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Listener ShouldQueue?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
