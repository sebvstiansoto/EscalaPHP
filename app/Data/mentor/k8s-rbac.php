<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'RBAC y seguridad',
    'body' => 'ServiceAccount, Role, RoleBinding. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '☸️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [rbac](/glosario#rbac) · [serviceaccount](/glosario#serviceaccount) · [role](/glosario#role)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'RBAC',
    'body' => 'Principio mínimo privilegio — apps y CI tienen ServiceAccount con permisos exactos.',
    'code' => 'apiVersion: rbac.authorization.k8s.io/v1
kind: Role
metadata:
  name: pod-reader
rules:
  - apiGroups: [""]
    resources: ["pods"]
    verbs: ["get", "list"]',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'RoleBinding',
    'body' => 'Vincula Role a ServiceAccount — namespace-scoped. ClusterRole para cluster-wide.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** ServiceAccount, Role, RoleBinding. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Kubernetes**, esto aparece en code reviews, incidentes y entregas diarias. ServiceAccount, Role, RoleBinding. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'apiVersion: rbac.authorization.k8s.io/v1
kind: Role
metadata:
  name: pod-reader
rules:
  - apiGroups: [""]
    resources: ["pods"]
    verbs: ["get", "list"]',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'apiVersion: rbac.authorization.k8s.io/v1',
      1 => 'kind: Role',
      2 => 'metadata:',
      3 => '  name: pod-reader',
      4 => 'rules:',
      5 => '  - apiGroups: [""]',
      6 => '    resources: ["pods"]',
      7 => '    verbs: ["get", "list"]',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Curso cert-cka RBAC hands-on.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿ServiceAccount para qué?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Role vs ClusterRole?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
