<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Pydantic y validación',
    'body' => 'BaseModel, Field, validators y response models. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Pydantic](/glosario#pydantic) · [Validation](/glosario#validation) · [BaseModel](/glosario#basemodel)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'BaseModel',
    'body' => 'Defines esquema de datos con tipos — FastAPI valida request y serializa response.',
    'code' => 'class UserCreate(BaseModel):
    email: str
    age: int = Field(ge=18)',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Response model',
    'body' => 'response_model=UserOut filtra campos — nunca expongas password_hash.',
    'code' => 'class Item(BaseModel):
    name: str',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** BaseModel, Field, validators y response models. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **FastAPI avanzado**, esto aparece en code reviews, incidentes y entregas diarias. BaseModel, Field, validators y response models. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'class UserCreate(BaseModel):
    email: str
    age: int = Field(ge=18)',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'class UserCreate(BaseModel):',
      1 => '    email: str',
      2 => '    age: int = Field(ge=18)',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Pydantic v2 usa model_validate — más rápido.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué pasa si el JSON no cumple el modelo Pydantic?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe class Item(BaseModel): con name: str** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
