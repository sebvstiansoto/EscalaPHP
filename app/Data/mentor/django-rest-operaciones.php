<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'body' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Django REST Framework. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎸',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Producción](/glosario#production) · [resilience](/glosario#resilience) · [ops](/glosario#ops)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Patrones en producción',
    'body' => 'Aplica lo aprendido en Django REST Framework a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
    'code' => '# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Operación continua',
    'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
    'code' => '# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Observabilidad, debugging y checklist de deploy — cierre avanzado de Django REST Framework. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'teach',
    'title' => 'Vocabulario',
    'body' => 'Términos de esta lección: **Producción**, **resilience**, **ops**. Búscalos en el [/glosario](/glosario) si necesitas repaso.',
  ),
  6 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Django REST Framework**, esto aparece en code reviews, incidentes y entregas diarias. Observabilidad, debugging y checklist de deploy — cierre avanzado de Django REST Framework. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}',
    'demo_language' => 'python',
  ),
  8 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Health check listo para Kubernetes',
      1 => 'from fastapi import FastAPI',
      2 => 'app = FastAPI()',
      3 => '@app.get("/health")',
      4 => 'def health() -> dict:',
      5 => '    return {"status": "ok", "checks": {"db": True, "cache": True}}',
    ),
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Automatiza el checklist en CI/CD cuando sea posible.',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Qué revisar antes de un deploy a producción?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Señal de que necesitas observabilidad mejor?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
