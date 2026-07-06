<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'ConfigMaps y Secrets',
    'body' => 'Variables de entorno y credenciales en el cluster. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☸️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [ConfigMap](/glosario#configmap) · [Secret (K8s)](/glosario#secret) · [Variables de entorno (env)](/glosario#env)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'ConfigMap',
    'body' => 'Guarda configuración no sensible: URLs, feature flags, `APP_ENV=production`.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Secret',
    'body' => 'Contraseñas y API keys — base64 en etcd, nunca en la imagen Docker.',
    'code' => 'envFrom:
  - secretRef:
      name: db-credentials',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Variables de entorno y credenciales en el cluster. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Kubernetes**, esto aparece en code reviews, incidentes y entregas diarias. Variables de entorno y credenciales en el cluster. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'envFrom:
  - secretRef:
      name: db-credentials',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'envFrom:',
      1 => '  - secretRef:',
      2 => '      name: db-credentials',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** En cloud usa integración con Vault o KMS del proveedor.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde van las contraseñas de BD en K8s?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe kind: ConfigMap en un fragmento YAML** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
