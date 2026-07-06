<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Patrones de producción y resiliencia',
    'body' => 'Patrones de producción y resiliencia — cierre avanzado de Django REST Framework. Te guío paso a paso con teoría, práctica y validación.',
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
    'code' => '# Circuit breaker simplificado con tenacity / retry
from tenacity import retry, stop_after_attempt, wait_exponential

@retry(stop=stop_after_attempt(3), wait=wait_exponential(multiplier=0.5))
async def call_payment_api(payload: dict) -> dict:
    async with httpx.AsyncClient(timeout=5.0) as client:
        r = await client.post("/charge", json=payload)
        r.raise_for_status()
        return r.json()',
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
    'body' => '**Objetivo:** Patrones de producción y resiliencia — cierre avanzado de Django REST Framework. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
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
    'body' => 'En equipos que usan **Django REST Framework**, esto aparece en code reviews, incidentes y entregas diarias. Patrones de producción y resiliencia — cierre avanzado de Django REST Framework. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  7 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '# Circuit breaker simplificado con tenacity / retry
from tenacity import retry, stop_after_attempt, wait_exponential

@retry(stop=stop_after_attempt(3), wait=wait_exponential(multiplier=0.5))
async def call_payment_api(payload: dict) -> dict:
    async with httpx.AsyncClient(timeout=5.0) as client:
        r = await client.post("/charge", json=payload)
        r.raise_for_status()
        return r.json()',
    'demo_language' => 'python',
  ),
  8 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '# Circuit breaker simplificado con tenacity / retry',
      1 => 'from tenacity import retry, stop_after_attempt, wait_exponential',
      2 => '@retry(stop=stop_after_attempt(3), wait=wait_exponential(multiplier=0.5))',
      3 => 'async def call_payment_api(payload: dict) -> dict:',
      4 => '    async with httpx.AsyncClient(timeout=5.0) as client:',
      5 => '        r = await client.post("/charge", json=payload)',
      6 => '        r.raise_for_status()',
      7 => '        return r.json()',
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
