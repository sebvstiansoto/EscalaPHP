<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Django: el framework completo',
    'body' => 'Admin, ORM, migraciones y Django REST Framework. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Django](/glosario#django) · [ORM](/glosario#orm) · [Django Admin](/glosario#admin)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Django vs FastAPI',
    'body' => '**FastAPI** = APIs ultrarrápidas. **Django** = todo en uno (admin, auth, ORM, templates). Instagram y Pinterest usaron Django.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-django\'}

print(handler())',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Estructura Django',
    'body' => 'Proyecto → apps → models.py, views.py, urls.py. El admin genera CRUD automático desde modelos.',
    'code' => '# models.py
class Product(models.Model):
    name = models.CharField(max_length=100)
    price = models.IntegerField()',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Admin, ORM, migraciones y Django REST Framework. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. Admin, ORM, migraciones y Django REST Framework. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-django\'}

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
      1 => '    return {\'status\': \'ok\', \'lesson\': \'py-django\'}',
      2 => 'print(handler())',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Muchas startups empiezan con Django y migran partes a microservicios después.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-orm](/conexiones#conn-orm).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué incluye Django out-of-the-box que FastAPI no?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué comando crea un proyecto Django?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de Python. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
