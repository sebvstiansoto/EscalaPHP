<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Deploy automático',
    'body' => 'Staging vs producción, secrets y deploy seguro. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🔄',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [CD (Entrega/Despliegue Continuo)](/glosario#cd) · [Deploy](/glosario#deploy) · [Staging](/glosario#staging) · [Secrets (CI)](/glosario#secrets)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Entrega Continua',
    'body' => '**CD** despliega automáticamente cuando CI pasa. Staging primero, producción con aprobación.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-deploy
data:
  APP_ENV: production',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Secrets',
    'body' => 'Nunca pongas contraseñas en el YAML. Usa **GitHub Secrets** para credenciales.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-deploy
data:
  APP_ENV: production',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Staging vs producción, secrets y deploy seguro. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **CI/CD & GitHub Actions**, esto aparece en code reviews, incidentes y entregas diarias. Staging vs producción, secrets y deploy seguro. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ci-deploy
data:
  APP_ENV: production',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'apiVersion: v1',
      1 => 'kind: ConfigMap',
      2 => 'metadata:',
      3 => '  name: ci-deploy',
      4 => 'data:',
      5 => '  APP_ENV: production',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Rota secrets periódicamente y usa mínimos permisos.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde guardas una API key para el pipeline?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cuál es el orden correcto en CD?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
