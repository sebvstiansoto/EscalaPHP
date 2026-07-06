<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'CSRF — Cross-Site Request Forgery',
    'body' => 'Tokens CSRF y SameSite cookies. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🛡️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [CSRF](/glosario#csrf) · [Token](/glosario#token) · [SameSite](/glosario#samesite)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'CSRF',
    'body' => 'Sitio malicioso hace que el navegador del usuario envíe request autenticado a tu app (ej. transferir dinero).',
    'code' => '<form>@csrf</form>',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Defensa',
    'body' => 'Token CSRF único por sesión en formularios POST. Laravel @csrf lo incluye automáticamente.',
    'code' => '<form>@csrf</form>',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tokens CSRF y SameSite cookies. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Seguridad web**, esto aparece en code reviews, incidentes y entregas diarias. Tokens CSRF y SameSite cookies. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '<form>@csrf</form>',
    'demo_language' => 'php',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '<form>@csrf</form>',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** SameSite=Lax/Strict en cookies refuerza protección.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué protege contra CSRF en formularios?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe @csrf en un formulario Blade** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
