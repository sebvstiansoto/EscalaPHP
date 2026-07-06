<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'ViewSets y Routers',
    'body' => 'CRUD automático con ModelViewSet. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎸',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [ViewSet](/glosario#viewset) · [Router](/glosario#router) · [CRUD](/glosario#crud)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'ViewSet',
    'body' => 'class ProductViewSet(viewsets.ModelViewSet): queryset + serializer_class = CRUD completo.',
    'code' => 'router.register(r\'products\', ProductViewSet)
# GET/POST /products/, GET/PUT/DELETE /products/{id}/',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Router',
    'body' => 'DefaultRouter genera URLs REST estándar — menos boilerplate.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** CRUD automático con ModelViewSet. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Django REST Framework**, esto aparece en code reviews, incidentes y entregas diarias. CRUD automático con ModelViewSet. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'router.register(r\'products\', ProductViewSet)
# GET/POST /products/, GET/PUT/DELETE /products/{id}/',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'router.register(r\'products\', ProductViewSet)',
      1 => '# GET/POST /products/, GET/PUT/DELETE /products/{id}/',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** permission_classes en ViewSet controla acceso.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿ModelViewSet proporciona...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Router.register hace...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
