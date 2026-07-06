<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Repository y Service Layer',
    'body' => 'Abstraer persistencia y lógica de negocio. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🏛️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Repository](/glosario#repository) · [Service (Compose)](/glosario#service) · [Capa (layer)](/glosario#layer)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Repository',
    'body' => 'Capa entre dominio y BD. `UserRepository::findByEmail()` oculta SQL/Eloquent del resto.',
    'code' => 'interface UserRepositoryInterface {
    public function findByEmail(string $email): ?User;
}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Service Layer',
    'body' => 'UserRegistrationService orquesta validación, repo y email — el controller solo delega.',
    'code' => 'interface UserRepository { public function findById(int $id); }',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Abstraer persistencia y lógica de negocio. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Patrones de diseño**, esto aparece en code reviews, incidentes y entregas diarias. Abstraer persistencia y lógica de negocio. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'interface UserRepositoryInterface {
    public function findByEmail(string $email): ?User;
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
      0 => 'interface UserRepositoryInterface {',
      1 => '    public function findByEmail(string $email): ?User;',
      2 => '}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Eloquent ya es medio repository — interface ayuda en apps grandes.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Ventaja del Repository?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe interface UserRepository con findById** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
