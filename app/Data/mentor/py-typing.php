<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Type hints y mypy',
    'body' => 'Tipado estático, Optional, Union y mypy. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [type-hints](/glosario#type-hints) · [mypy](/glosario#mypy) · [optional](/glosario#optional)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Type hints',
    'body' => 'Python 3.10+ syntax — def get_user(id: int) -> User | None — catch bugs antes de runtime.',
    'code' => 'from typing import Optional

def discount(price: float, pct: float) -> float:
    return price * (1 - pct / 100)

def find_user(email: str) -> Optional[dict]:
    return None',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'mypy',
    'body' => 'mypy archivo.py en CI — FastAPI y Pydantic ya usan types; extiende a tu dominio.',
    'code' => '# mypy.ini
[mypy]
python_version = 3.12
strict = True',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tipado estático, Optional, Union y mypy. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. Tipado estático, Optional, Union y mypy. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'from typing import Optional

def discount(price: float, pct: float) -> float:
    return price * (1 - pct / 100)

def find_user(email: str) -> Optional[dict]:
    return None',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'from typing import Optional',
      1 => 'def discount(price: float, pct: float) -> float:',
      2 => '    return price * (1 - pct / 100)',
      3 => 'def find_user(email: str) -> Optional[dict]:',
      4 => '    return None',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso typescript-fundamentos parallel concepts.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Optional[str] significa?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe -> float return type** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
