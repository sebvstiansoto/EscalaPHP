<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'k8s-intro',
    'order' => 1,
    'title' => 'Conceptos de Kubernetes',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Cluster, node, pod y cuándo usar K8s.',
    'concepts' => 
    array (
      0 => 'cluster',
      1 => 'pod',
      2 => 'node',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es Kubernetes?',
        'body' => '**K8s** orquesta contenedores a escala: despliega, escala y autorrepara apps en un cluster.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: k8s-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Jerarquía',
        'body' => '**Cluster** → **Nodes** (máquinas) → **Pods** (uno o más contenedores).',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: k8s-intro
data:
  APP_ENV: production',
      ),
      2 => 
      array (
        'heading' => '¿Cuándo K8s?',
        'body' => '1 app = Docker Compose basta. 20+ microservicios con alta disponibilidad = K8s tiene sentido.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: k8s-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es un Pod en Kubernetes?',
        'options' => 
        array (
          0 => 'Unidad mínima de despliegue (1+ contenedores)',
          1 => 'Un tipo de base de datos',
          2 => 'Un lenguaje',
        ),
        'answer' => 'Unidad mínima de despliegue (1+ contenedores)',
        'explanation' => 'Los pods son la unidad que K8s crea, escala y destruye.',
        'pro_tip' => 'No metas más de un proceso principal por pod si puedes evitarlo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo NO necesitas Kubernetes?',
        'options' => 
        array (
          0 => 'Una sola app monolítica pequeña',
          1 => '50 microservicios en producción',
          2 => 'Auto-scaling de 100 réplicas',
        ),
        'answer' => 'Una sola app monolítica pequeña',
        'explanation' => 'K8s añade complejidad — úsalo cuando la escala lo justifique.',
        'pro_tip' => 'Empieza con Docker Compose; migra a K8s cuando duela.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'k8s-deploy',
    'order' => 2,
    'title' => 'Deployments y Services',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Réplicas, rolling updates y balanceo interno.',
    'concepts' => 
    array (
      0 => 'deployment',
      1 => 'service',
      2 => 'replicas',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Deployment',
        'body' => 'Un **Deployment** declara cuántas réplicas quieres y qué imagen Docker usar.',
        'code' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: escala-api
spec:
  replicas: 3',
      ),
      1 => 
      array (
        'heading' => 'Service',
        'body' => 'Un **Service** expone pods con una IP estable dentro del cluster.',
        'code' => 'kind: Deployment
spec:
  replicas: 3',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué recurso K8s controla el número de réplicas?',
        'options' => 
        array (
          0 => 'Deployment',
          1 => 'Ingress',
          2 => 'ConfigMap only',
        ),
        'answer' => 'Deployment',
        'explanation' => 'Deployment + spec.replicas escala tu app horizontalmente.',
        'pro_tip' => 'HPA (Horizontal Pod Autoscaler) escala por CPU/memoria automáticamente.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un fragmento YAML de Deployment con kind Deployment y replicas: 3',
        'must_contain' => 
        array (
          0 => 'kind: Deployment',
          1 => 'replicas: 3',
        ),
        'hint' => 'kind: Deployment
spec:
  replicas: 3',
        'explanation' => 'YAML declarativo: describes el estado deseado, K8s lo aplica.',
        'pro_tip' => 'kubectl apply -f deployment.yaml aplica cambios sin downtime (rolling).',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'k8s-ingress',
    'order' => 3,
    'title' => 'Ingress y TLS',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Exponer apps al exterior con HTTPS.',
    'concepts' => 
    array (
      0 => 'ingress',
      1 => 'tls',
      2 => 'routing',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Ingress',
        'body' => '**Ingress** enruta tráfico HTTP/S externo hacia Services internos. Es el "Nginx del cluster".',
        'code' => 'kind: Ingress
spec:
  rules:
    - host: api.ejemplo.com',
      ),
      1 => 
      array (
        'heading' => 'TLS',
        'body' => 'Certificados HTTPS con **cert-manager** o el proveedor cloud. Nunca HTTP plano en producción.',
        'code' => 'kind: Ingress
spec:
  rules:
    - host: api.ejemplo.com',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace un Ingress en K8s?',
        'options' => 
        array (
          0 => 'Enruta tráfico externo HTTP/S a services',
          1 => 'Ejecuta SQL',
          2 => 'Compila PHP',
        ),
        'answer' => 'Enruta tráfico externo HTTP/S a services',
        'explanation' => 'Ingress = reverse proxy a nivel de cluster.',
        'pro_tip' => 'Ingress + Service + Deployment es el trío clásico de exposición.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un fragmento con kind: Ingress y una regla host',
        'must_contain' => 
        array (
          0 => 'kind: Ingress',
          1 => 'host:',
        ),
        'hint' => 'kind: Ingress
spec:
  rules:
    - host: api.ejemplo.com',
        'explanation' => 'El host mapea dominio público a tu servicio interno.',
        'pro_tip' => 'Usa TLS en spec.tls para HTTPS automático.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'k8s-config',
    'order' => 4,
    'title' => 'ConfigMaps y Secrets',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Variables de entorno y credenciales en el cluster.',
    'concepts' => 
    array (
      0 => 'configmap',
      1 => 'secret',
      2 => 'env',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'ConfigMap',
        'body' => 'Guarda configuración no sensible: URLs, feature flags, `APP_ENV=production`.',
        'code' => 'kind: ConfigMap',
      ),
      1 => 
      array (
        'heading' => 'Secret',
        'body' => 'Contraseñas y API keys — base64 en etcd, nunca en la imagen Docker.',
        'code' => 'envFrom:
  - secretRef:
      name: db-credentials',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde van las contraseñas de BD en K8s?',
        'options' => 
        array (
          0 => 'Secret',
          1 => 'ConfigMap público',
          2 => 'En el Dockerfile',
        ),
        'answer' => 'Secret',
        'explanation' => 'Secrets están pensados para datos sensibles.',
        'pro_tip' => 'En cloud usa integración con Vault o KMS del proveedor.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe kind: ConfigMap en un fragmento YAML',
        'must_contain' => 
        array (
          0 => 'kind: ConfigMap',
        ),
        'hint' => 'kind: ConfigMap',
        'explanation' => 'ConfigMap desacopla config del código.',
        'pro_tip' => 'Monta ConfigMaps como archivos con volumeMounts.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'k8s-hpa',
    'order' => 5,
    'title' => 'Auto-scaling (HPA)',
    'level' => 'Escala',
    'minutes' => 25,
    'summary' => 'Horizontal Pod Autoscaler por CPU y memoria.',
    'concepts' => 
    array (
      0 => 'hpa',
      1 => 'scaling',
      2 => 'metrics',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'HPA',
        'body' => '**Horizontal Pod Autoscaler** aumenta réplicas cuando CPU > umbral y las reduce cuando baja la carga.',
        'code' => 'kind: HorizontalPodAutoscaler',
      ),
      1 => 
      array (
        'heading' => 'Métricas',
        'body' => 'CPU, memoria y custom metrics (cola Redis, RPS). Requiere metrics-server en el cluster.',
        'code' => 'kind: HorizontalPodAutoscaler',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace el HPA?',
        'options' => 
        array (
          0 => 'Escala réplicas según métricas',
          1 => 'Crea nuevos clusters',
          2 => 'Compila código',
        ),
        'answer' => 'Escala réplicas según métricas',
        'explanation' => 'Escala horizontal = más pods, no pods más grandes.',
        'pro_tip' => 'VPA escala verticalmente (más CPU por pod) — complementario.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe kind: HorizontalPodAutoscaler',
        'must_contain' => 
        array (
          0 => 'HorizontalPodAutoscaler',
        ),
        'hint' => 'kind: HorizontalPodAutoscaler',
        'explanation' => 'HPA observa Deployment y ajusta replicas.',
        'pro_tip' => 'Define minReplicas y maxReplicas para evitar sorpresas en la factura.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'k8s-ops',
    'order' => 6,
    'title' => 'Operaciones día a día',
    'level' => 'Ops',
    'minutes' => 30,
    'summary' => 'kubectl logs, describe, rollout y debugging.',
    'concepts' => 
    array (
      0 => 'kubectl',
      1 => 'logs',
      2 => 'rollout',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'kubectl esencial',
        'body' => '`kubectl get pods`, `kubectl logs`, `kubectl describe pod` — tu tríada de debugging.',
        'code' => 'kubectl rollout undo deployment/mi-app',
      ),
      1 => 
      array (
        'heading' => 'Rollouts',
        'body' => '`kubectl rollout status` y `rollout undo` revierten deploys malos en segundos.',
        'code' => 'kubectl rollout undo deployment/mi-app',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando ves logs de un pod?',
        'options' => 
        array (
          0 => 'kubectl logs',
          1 => 'kubectl cat',
          2 => 'docker logs only',
        ),
        'answer' => 'kubectl logs',
        'explanation' => 'logs muestra stdout/stderr del contenedor.',
        'pro_tip' => 'kubectl logs -f sigue en tiempo real como tail -f.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe kubectl rollout undo deployment/mi-app',
        'must_contain' => 
        array (
          0 => 'kubectl rollout',
          1 => 'undo',
        ),
        'hint' => 'kubectl rollout undo deployment/mi-app',
        'explanation' => 'Undo vuelve a la revisión anterior del Deployment.',
        'pro_tip' => 'kubectl get events ordena por tiempo — pistas de CrashLoopBackOff.',
      ),
    ),
  ),
  array (
    'slug' => 'k8s-probes',
    'order' => 7,
    'title' => 'Health probes',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Liveness, readiness y startup probes.',
    'concepts' => 
    array (
      0 => 'liveness',
      1 => 'readiness',
      2 => 'startup',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Probes',
        'body' => '**Liveness** reinicia pod si colgado. **Readiness** quita del Service si no listo. **Startup** para apps lentas al boot.',
        'code' => 'livenessProbe:
  httpGet:
    path: /health
    port: 8080
  initialDelaySeconds: 10
readinessProbe:
  httpGet:
    path: /ready
    port: 8080',
      ),
      1 => 
      array (
        'heading' => 'Endpoints',
        'body' => 'Implementa GET /health (proceso vivo) y GET /ready (BD conectada, warm-up OK) en tu app.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Readiness probe falla significa...?',
        'options' => 
        array (
          0 => 'Pod excluido del Service temporalmente',
          1 => 'Pod borrado instant',
          2 => 'Cluster apagado',
        ),
        'answer' => 'Pod excluido del Service temporalmente',
        'explanation' => 'No recibe tráfico hasta ready.',
        'pro_tip' => 'Curso observabilidad /health patterns.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe livenessProbe',
        'must_contain' => 
        array (
          0 => 'livenessProbe',
        ),
        'hint' => 'livenessProbe: httpGet: path: /health',
        'explanation' => 'K8s reinicia si liveness falla repetido.',
        'pro_tip' => 'initialDelaySeconds evita restart en boot lento.',
      ),
    ),
  ),
  array (
    'slug' => 'k8s-rbac',
    'order' => 8,
    'title' => 'RBAC y seguridad',
    'level' => 'Seguridad',
    'minutes' => 35,
    'summary' => 'ServiceAccount, Role, RoleBinding.',
    'concepts' => 
    array (
      0 => 'rbac',
      1 => 'serviceaccount',
      2 => 'role',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'RBAC',
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
      1 => 
      array (
        'heading' => 'RoleBinding',
        'body' => 'Vincula Role a ServiceAccount — namespace-scoped. ClusterRole para cluster-wide.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ServiceAccount para qué?',
        'options' => 
        array (
          0 => 'Identidad del pod ante API K8s',
          1 => 'Email usuario',
          2 => 'DNS record',
        ),
        'answer' => 'Identidad del pod ante API K8s',
        'explanation' => 'Pods autentican con SA token.',
        'pro_tip' => 'Curso cert-cka RBAC hands-on.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Role vs ClusterRole?',
        'options' => 
        array (
          0 => 'Role namespace; ClusterRole cluster-wide',
          1 => 'Same',
          2 => 'Role solo admin',
        ),
        'answer' => 'Role namespace; ClusterRole cluster-wide',
        'explanation' => 'Scope permissions correctly.',
        'pro_tip' => 'Never cluster-admin for apps.',
      ),
    ),
  ),
);
