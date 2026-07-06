<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Dependency Injection',
    'body' => 'Depends(), sesiones de BD y auth reutilizable. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Depends()](/glosario#depends) · [DI](/glosario#di) · [Reutilización](/glosario#reuse)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Depends',
    'body' => 'Inyectas dependencias en endpoints — BD, usuario actual, config.',
    'code' => 'def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()

@app.get(\'/\')
def read(db: Session = Depends(get_db)): ...',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Ventaja',
    'body' => 'Misma lógica de auth/BD en 50 endpoints sin copiar-pegar.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Depends(), sesiones de BD y auth reutilizable. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **FastAPI avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Depends(), sesiones de BD y auth reutilizable. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()

@app.get(\'/\')
def read(db: Session = Depends(get_db)): ...',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'def get_db():',
      1 => '    db = SessionLocal()',
      2 => '    try:',
      3 => '        yield db',
      4 => '    finally:',
      5 => '        db.close()',
      6 => '@app.get(\'/\')',
      7 => 'def read(db: Session = Depends(get_db)): ...',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** yield en get_db cierra conexión automáticamente.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cómo inyectas una dependencia en FastAPI?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe Depends(get_db) en un parámetro** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
