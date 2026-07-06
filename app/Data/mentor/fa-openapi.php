<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'OpenAPI y documentación',
    'body' => 'Swagger auto, tags y export spec. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [OpenAPI](/glosario#openapi) · [swagger](/glosario#swagger) · [Tags (etiquetas)](/glosario#tags)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Auto docs',
    'body' => 'FastAPI genera OpenAPI 3 y Swagger UI en /docs — response_model tipa salida JSON.',
    'code' => 'app = FastAPI(title="Mi API", version="1.0.0")

@app.get("/users", tags=["users"], response_model=list[UserOut])
async def list_users():
    ...',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Export',
    'body' => 'app.openapi() JSON — commit openapi.json CI — curso openapi-documentacion profundiza contract-first.',
    'code' => 'import json
spec = app.openapi()
open("openapi.json", "w").write(json.dumps(spec, indent=2))',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Swagger auto, tags y export spec. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **FastAPI avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Swagger auto, tags y export spec. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'app = FastAPI(title="Mi API", version="1.0.0")

@app.get("/users", tags=["users"], response_model=list[UserOut])
async def list_users():
    ...',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'app = FastAPI(title="Mi API", version="1.0.0")',
      1 => '@app.get("/users", tags=["users"], response_model=list[UserOut])',
      2 => 'async def list_users():',
      3 => '    ...',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Disable /docs in prod or auth protect.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿FastAPI docs URL default?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿response_model purpose?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
