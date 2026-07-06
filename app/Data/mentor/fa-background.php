<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Background tasks y WebSockets',
    'body' => 'Tasks async, websockets y streaming. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [background](/glosario#background) · [WebSocket](/glosario#websocket) · [streaming](/glosario#streaming)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'BackgroundTasks',
    'body' => 'Envía email después de response — no bloquees al cliente. Para heavy work usa Celery/RQ.',
    'code' => 'from fastapi import BackgroundTasks

def send_email(to: str):
    ...

@app.post("/signup")
async def signup(bg: BackgroundTasks):
    bg.add_task(send_email, "user@test.com")
    return {"ok": True}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'WebSockets',
    'body' => '@app.websocket("/ws") — chat, live updates — curso websockets-realtime profundiza.',
    'code' => '@app.websocket("/ws")
async def websocket_endpoint(websocket: WebSocket):
    await websocket.accept()
    await websocket.send_json({"msg": "connected"})',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tasks async, websockets y streaming. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **FastAPI avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Tasks async, websockets y streaming. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'from fastapi import BackgroundTasks

def send_email(to: str):
    ...

@app.post("/signup")
async def signup(bg: BackgroundTasks):
    bg.add_task(send_email, "user@test.com")
    return {"ok": True}',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'from fastapi import BackgroundTasks',
      1 => 'def send_email(to: str):',
      2 => '    ...',
      3 => '@app.post("/signup")',
      4 => 'async def signup(bg: BackgroundTasks):',
      5 => '    bg.add_task(send_email, "user@test.com")',
      6 => '    return {"ok": True}',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso mensajeria-colas patterns.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿BackgroundTasks vs Celery?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe BackgroundTasks** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
