<?php

declare(strict_types=1);

return [
    [
        'slug' => 'k8s-intro',
        'order' => 1,
        'title' => 'Conceptos de Kubernetes',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Cluster, node, pod y cuándo usar K8s.',
        'concepts' => ['cluster', 'pod', 'node'],
        'sections' => [
            ['heading' => '¿Qué es Kubernetes?', 'body' => '**K8s** orquesta contenedores a escala: despliega, escala y autorrepara apps en un cluster.'],
            ['heading' => 'Jerarquía', 'body' => '**Cluster** → **Nodes** (máquinas) → **Pods** (uno o más contenedores).'],
            ['heading' => '¿Cuándo K8s?', 'body' => '1 app = Docker Compose basta. 20+ microservicios con alta disponibilidad = K8s tiene sentido.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué es un Pod en Kubernetes?',
                'options' => ['Unidad mínima de despliegue (1+ contenedores)', 'Un tipo de base de datos', 'Un lenguaje'],
                'answer' => 'Unidad mínima de despliegue (1+ contenedores)',
                'explanation' => 'Los pods son la unidad que K8s crea, escala y destruye.',
                'pro_tip' => 'No metas más de un proceso principal por pod si puedes evitarlo.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Cuándo NO necesitas Kubernetes?',
                'options' => ['Una sola app monolítica pequeña', '50 microservicios en producción', 'Auto-scaling de 100 réplicas'],
                'answer' => 'Una sola app monolítica pequeña',
                'explanation' => 'K8s añade complejidad — úsalo cuando la escala lo justifique.',
                'pro_tip' => 'Empieza con Docker Compose; migra a K8s cuando duela.',
            ],
        ],
    ],
    [
        'slug' => 'k8s-deploy',
        'order' => 2,
        'title' => 'Deployments y Services',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'Réplicas, rolling updates y balanceo interno.',
        'concepts' => ['deployment', 'service', 'replicas'],
        'sections' => [
            ['heading' => 'Deployment', 'body' => 'Un **Deployment** declara cuántas réplicas quieres y qué imagen Docker usar.', 'code' => "apiVersion: apps/v1\nkind: Deployment\nmetadata:\n  name: escala-api\nspec:\n  replicas: 3"],
            ['heading' => 'Service', 'body' => 'Un **Service** expone pods con una IP estable dentro del cluster.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué recurso K8s controla el número de réplicas?',
                'options' => ['Deployment', 'Ingress', 'ConfigMap only'],
                'answer' => 'Deployment',
                'explanation' => 'Deployment + spec.replicas escala tu app horizontalmente.',
                'pro_tip' => 'HPA (Horizontal Pod Autoscaler) escala por CPU/memoria automáticamente.',
            ],
            [
                'type' => 'contains',
                'question' => 'Escribe un fragmento YAML de Deployment con kind Deployment y replicas: 3',
                'must_contain' => ['kind: Deployment', 'replicas: 3'],
                'hint' => "kind: Deployment\nspec:\n  replicas: 3",
                'explanation' => 'YAML declarativo: describes el estado deseado, K8s lo aplica.',
                'pro_tip' => 'kubectl apply -f deployment.yaml aplica cambios sin downtime (rolling).',
            ],
        ],
    ],
    [
        'slug' => 'k8s-ingress',
        'order' => 3,
        'title' => 'Ingress y TLS',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Exponer apps al exterior con HTTPS.',
        'concepts' => ['ingress', 'tls', 'routing'],
        'sections' => [
            ['heading' => 'Ingress', 'body' => '**Ingress** enruta tráfico HTTP/S externo hacia Services internos. Es el "Nginx del cluster".'],
            ['heading' => 'TLS', 'body' => 'Certificados HTTPS con **cert-manager** o el proveedor cloud. Nunca HTTP plano en producción.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué hace un Ingress en K8s?',
                'options' => ['Enruta tráfico externo HTTP/S a services', 'Ejecuta SQL', 'Compila PHP'],
                'answer' => 'Enruta tráfico externo HTTP/S a services',
                'explanation' => 'Ingress = reverse proxy a nivel de cluster.',
                'pro_tip' => 'Ingress + Service + Deployment es el trío clásico de exposición.',
            ],
            [
                'type' => 'contains',
                'question' => 'Escribe un fragmento con kind: Ingress y una regla host',
                'must_contain' => ['kind: Ingress', 'host:'],
                'hint' => "kind: Ingress\nspec:\n  rules:\n    - host: api.ejemplo.com",
                'explanation' => 'El host mapea dominio público a tu servicio interno.',
                'pro_tip' => 'Usa TLS en spec.tls para HTTPS automático.',
            ],
        ],
    ],
    [
        'slug' => 'k8s-config',
        'order' => 4,
        'title' => 'ConfigMaps y Secrets',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Variables de entorno y credenciales en el cluster.',
        'concepts' => ['configmap', 'secret', 'env'],
        'sections' => [
            ['heading' => 'ConfigMap', 'body' => 'Guarda configuración no sensible: URLs, feature flags, `APP_ENV=production`.'],
            ['heading' => 'Secret', 'body' => 'Contraseñas y API keys — base64 en etcd, nunca en la imagen Docker.', 'code' => "envFrom:\n  - secretRef:\n      name: db-credentials"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde van las contraseñas de BD en K8s?', 'options' => ['Secret', 'ConfigMap público', 'En el Dockerfile'], 'answer' => 'Secret', 'explanation' => 'Secrets están pensados para datos sensibles.', 'pro_tip' => 'En cloud usa integración con Vault o KMS del proveedor.'],
            ['type' => 'contains', 'question' => 'Escribe kind: ConfigMap en un fragmento YAML', 'must_contain' => ['kind: ConfigMap'], 'hint' => 'kind: ConfigMap', 'explanation' => 'ConfigMap desacopla config del código.', 'pro_tip' => 'Monta ConfigMaps como archivos con volumeMounts.'],
        ],
    ],
    [
        'slug' => 'k8s-hpa',
        'order' => 5,
        'title' => 'Auto-scaling (HPA)',
        'level' => 'Escala',
        'minutes' => 25,
        'summary' => 'Horizontal Pod Autoscaler por CPU y memoria.',
        'concepts' => ['hpa', 'scaling', 'metrics'],
        'sections' => [
            ['heading' => 'HPA', 'body' => '**Horizontal Pod Autoscaler** aumenta réplicas cuando CPU > umbral y las reduce cuando baja la carga.'],
            ['heading' => 'Métricas', 'body' => 'CPU, memoria y custom metrics (cola Redis, RPS). Requiere metrics-server en el cluster.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace el HPA?', 'options' => ['Escala réplicas según métricas', 'Crea nuevos clusters', 'Compila código'], 'answer' => 'Escala réplicas según métricas', 'explanation' => 'Escala horizontal = más pods, no pods más grandes.', 'pro_tip' => 'VPA escala verticalmente (más CPU por pod) — complementario.'],
            ['type' => 'contains', 'question' => 'Escribe kind: HorizontalPodAutoscaler', 'must_contain' => ['HorizontalPodAutoscaler'], 'hint' => 'kind: HorizontalPodAutoscaler', 'explanation' => 'HPA observa Deployment y ajusta replicas.', 'pro_tip' => 'Define minReplicas y maxReplicas para evitar sorpresas en la factura.'],
        ],
    ],
    [
        'slug' => 'k8s-ops',
        'order' => 6,
        'title' => 'Operaciones día a día',
        'level' => 'Ops',
        'minutes' => 30,
        'summary' => 'kubectl logs, describe, rollout y debugging.',
        'concepts' => ['kubectl', 'logs', 'rollout'],
        'sections' => [
            ['heading' => 'kubectl esencial', 'body' => '`kubectl get pods`, `kubectl logs`, `kubectl describe pod` — tu tríada de debugging.'],
            ['heading' => 'Rollouts', 'body' => '`kubectl rollout status` y `rollout undo` revierten deploys malos en segundos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué comando ves logs de un pod?', 'options' => ['kubectl logs', 'kubectl cat', 'docker logs only'], 'answer' => 'kubectl logs', 'explanation' => 'logs muestra stdout/stderr del contenedor.', 'pro_tip' => 'kubectl logs -f sigue en tiempo real como tail -f.'],
            ['type' => 'contains', 'question' => 'Escribe kubectl rollout undo deployment/mi-app', 'must_contain' => ['kubectl rollout', 'undo'], 'hint' => 'kubectl rollout undo deployment/mi-app', 'explanation' => 'Undo vuelve a la revisión anterior del Deployment.', 'pro_tip' => 'kubectl get events ordena por tiempo — pistas de CrashLoopBackOff.'],
        ],
    ],
];
