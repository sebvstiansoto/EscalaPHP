<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Desplegar Python en producción',
    'body' => 'Gunicorn, uvicorn workers, Docker y variables de entorno. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Gunicorn](/glosario#gunicorn) · [Docker](/glosario#docker) · [Producción](/glosario#production)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'De local a producción',
    'body' => 'En desarrollo usas `uvicorn --reload`. En producción: **Gunicorn** + workers, detrás de Nginx, en Docker.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-deploy\'}

print(handler())',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Dockerfile Python',
    'body' => '```dockerfile\\nFROM python:3.12-slim\\nWORKDIR /app\\nCOPY requirements.txt .\\nRUN pip install -r requirements.txt\\nCOPY . .\\nCMD ["uvicorn", "main:app", "--host", "0.0.0.0"]\\n```',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-deploy\'}

print(handler())',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Gunicorn, uvicorn workers, Docker y variables de entorno. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. Gunicorn, uvicorn workers, Docker y variables de entorno. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-deploy\'}

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
      1 => '    return {\'status\': \'ok\', \'lesson\': \'py-deploy\'}',
      2 => 'print(handler())',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Este curso Docker de la plataforma aplica igual para apps Python.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-docker](/conexiones#conn-docker).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué usar Docker con Python en producción?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe tu plan: ¿FastAPI o Django para tu primer producto? (mín. 15 caracteres)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
