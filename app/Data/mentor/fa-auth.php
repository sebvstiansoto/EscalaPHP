<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'OAuth2 y JWT',
    'body' => 'Tokens, password hashing y rutas protegidas. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⚡',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [JWT](/glosario#jwt) · [OAuth 2.0](/glosario#oauth2) · [bcrypt](/glosario#bcrypt)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'OAuth2PasswordBearer',
    'body' => 'FastAPI incluye utilidades para login con username/password y tokens JWT.',
    'code' => 'oauth2 = OAuth2PasswordBearer(tokenUrl=\'token\')

def get_current_user(token: str = Depends(oauth2)): ...',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Hashing',
    'body' => 'passlib + bcrypt para passwords — nunca guardes texto plano.',
    'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'fa-auth\'}

print(handler())',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Tokens, password hashing y rutas protegidas. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **FastAPI avanzado**, esto aparece en code reviews, incidentes y entregas diarias. Tokens, password hashing y rutas protegidas. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'oauth2 = OAuth2PasswordBearer(tokenUrl=\'token\')

def get_current_user(token: str = Depends(oauth2)): ...',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'oauth2 = OAuth2PasswordBearer(tokenUrl=\'token\')',
      1 => 'def get_current_user(token: str = Depends(oauth2)): ...',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso seguridad web profundiza hashing.',
  ),
  9 => 
  array (
    'type' => 'teach',
    'title' => 'Cómo encaja con el resto',
    'body' => 'Este tema se conecta con otros conceptos. Revisa el mapa en [/conexiones#conn-jwt](/conexiones#conn-jwt).',
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde deben ir las contraseñas en la BD?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  11 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué header lleva el JWT del cliente?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
