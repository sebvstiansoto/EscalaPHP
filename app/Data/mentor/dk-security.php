<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Seguridad de contenedores',
    'body' => 'Usuario non-root, scan y secrets. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐳',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [non-root](/glosario#non-root) · [scan](/glosario#scan) · [Secrets (CI)](/glosario#secrets)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Non-root',
    'body' => 'USER app en Dockerfile — no corras como root en prod. Capabilities mínimas.',
    'code' => 'FROM php:8.3-fpm
RUN useradd -m appuser
USER appuser
WORKDIR /app',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Scanning',
    'body' => 'docker scout, Trivy — escanea CVEs en imágenes CI. Secrets via Docker secrets o K8s Secrets, nunca en imagen.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Usuario non-root, scan y secrets. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Docker**, esto aparece en code reviews, incidentes y entregas diarias. Usuario non-root, scan y secrets. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'FROM php:8.3-fpm
RUN useradd -m appuser
USER appuser
WORKDIR /app',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'FROM php:8.3-fpm',
      1 => 'RUN useradd -m appuser',
      2 => 'USER appuser',
      3 => 'WORKDIR /app',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso seguridad-web defense in depth.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué non-root container?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Secrets en imagen Docker?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
