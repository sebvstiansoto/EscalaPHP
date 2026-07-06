<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Packaging y publicación',
    'body' => 'pyproject.toml, wheels y PyPI. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [pyproject](/glosario#pyproject) · [wheel](/glosario#wheel) · [pypi](/glosario#pypi)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'pyproject.toml',
    'body' => 'Estándar moderno — reemplaza setup.py — dependencies, scripts, build backend.',
    'code' => '[project]
name = "mi-api"
version = "0.1.0"
dependencies = ["fastapi>=0.110", "uvicorn[standard]"]

[project.scripts]
serve = "mi_api.main:run"',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Build',
    'body' => 'python -m build genera wheel + sdist — pip install . en prod o publish PyPI privado.',
    'code' => 'pip install build
python -m build
pip install dist/mi_api-0.1.0-py3-none-any.whl',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** pyproject.toml, wheels y PyPI. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. pyproject.toml, wheels y PyPI. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '[project]
name = "mi-api"
version = "0.1.0"
dependencies = ["fastapi>=0.110", "uvicorn[standard]"]

[project.scripts]
serve = "mi_api.main:run"',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '[project]',
      1 => 'name = "mi-api"',
      2 => 'version = "0.1.0"',
      3 => 'dependencies = ["fastapi>=0.110", "uvicorn[standard]"]',
      4 => '[project.scripts]',
      5 => 'serve = "mi_api.main:run"',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** uv/poetry también leen pyproject.toml.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Archivo config moderno Python?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe [project] en pyproject** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
