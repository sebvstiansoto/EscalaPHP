<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Filtros, paginación y búsqueda',
    'body' => 'django-filter, PageNumberPagination. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎸',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Filter (filtro)](/glosario#filter) · [Pagination](/glosario#pagination) · [Search (búsqueda API)](/glosario#search)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Filtros',
    'body' => '?category=books&ordering=-price — django-filter backends.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-filters\'}

print(handler())',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Paginación',
    'body' => 'DEFAULT_PAGINATION_CLASS evita devolver 100k filas de golpe.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-filters\'}

print(handler())',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** django-filter, PageNumberPagination. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Django REST Framework**, esto aparece en code reviews, incidentes y entregas diarias. django-filter, PageNumberPagination. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-filters\'}

print(handler())',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'def handler():',
      1 => '    return {\'status\': \'ok\', \'lesson\': \'dj-filters\'}',
      2 => 'print(handler())',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Cursor pagination para feeds infinitos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué paginar APIs?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Paquete filtros avanzados DRF?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
