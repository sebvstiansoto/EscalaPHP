<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ob-intro',
    'order' => 1,
    'title' => 'Observabilidad: logs, metrics, traces',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Los tres pilares y por qué importan.',
    'concepts' => 
    array (
      0 => 'observability',
      1 => 'logs',
      2 => 'metrics',
      3 => 'traces',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Observabilidad',
        'body' => 'Entender **estado interno** del sistema desde fuera — debug prod sin SSH adivinando.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Tres pilares',
        'body' => '**Logs** eventos discretos. **Metrics** números agregados en tiempo. **Traces** request end-to-end.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Metric vs log?',
        'options' => 
        array (
          0 => 'Metric = agregado numérico; log = evento texto',
          1 => 'Iguales',
          2 => 'Log siempre mejor',
        ),
        'answer' => 'Metric = agregado numérico; log = evento texto',
        'explanation' => 'Metrics alertan; logs investigan.',
        'pro_tip' => 'RED: Rate, Errors, Duration.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Trace útil para...?',
        'options' => 
        array (
          0 => 'Seguir request por microservicios',
          1 => 'Compilar código',
          2 => 'CSS',
        ),
        'answer' => 'Seguir request por microservicios',
        'explanation' => 'trace-id correlaciona spans.',
        'pro_tip' => 'OpenTelemetry estándar vendor-neutral.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ob-logs',
    'order' => 2,
    'title' => 'Logging estructurado',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'JSON logs, niveles y correlación.',
    'concepts' => 
    array (
      0 => 'structured-log',
      1 => 'json',
      2 => 'correlation-id',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Structured logging',
        'body' => 'JSON: {"level":"error","msg":"payment failed","user_id":42,"trace_id":"abc"} — parseable por ELK/Loki.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-logs
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Niveles',
        'body' => 'DEBUG dev only; INFO eventos negocio; WARN degradación; ERROR acción requerida.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-logs
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Log estructurado vs printf?',
        'options' => 
        array (
          0 => 'JSON queryable en agregadores',
          1 => 'Más legible humano siempre',
          2 => 'Sin búsqueda',
        ),
        'answer' => 'JSON queryable en agregadores',
        'explanation' => 'ELK: user_id:42 AND level:error.',
        'pro_tip' => 'Monolog JSON formatter en PHP.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿correlation-id / trace-id?',
        'options' => 
        array (
          0 => 'Mismo ID en todos logs del request',
          1 => 'Random por log line',
          2 => 'Solo metrics',
        ),
        'answer' => 'Mismo ID en todos logs del request',
        'explanation' => 'Filtra un request en millones de líneas.',
        'pro_tip' => 'Propaga header X-Request-ID.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ob-metrics',
    'order' => 3,
    'title' => 'Prometheus y Grafana',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'Counters, histograms y dashboards.',
    'concepts' => 
    array (
      0 => 'prometheus',
      1 => 'grafana',
      2 => 'histogram',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Prometheus',
        'body' => 'Pull metrics HTTP /metrics — PromQL queries: rate(http_requests_total[5m]).',
        'code' => 'rate(http_requests_total[5m])',
      ),
      1 => 
      array (
        'heading' => 'Grafana',
        'body' => 'Dashboards visuales — alertas cuando p99 latency > 500ms.',
        'code' => 'rate(http_requests_total[5m])',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Counter Prometheus?',
        'options' => 
        array (
          0 => 'Solo incrementa — requests totales',
          1 => 'Sube y baja',
          2 => 'Solo strings',
        ),
        'answer' => 'Solo incrementa — requests totales',
        'explanation' => 'rate() calcula derivada.',
        'pro_tip' => 'Histogram para latencias p50/p99.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Menciona PromQL rate',
        'must_contain' => 
        array (
          0 => 'rate',
        ),
        'hint' => 'rate(http_requests_total[5m])',
        'explanation' => 'Requests por segundo ventana 5m.',
        'pro_tip' => 'USE method: Utilization, Saturation, Errors.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ob-traces',
    'order' => 4,
    'title' => 'OpenTelemetry y tracing',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Spans, context propagation y Jaeger.',
    'concepts' => 
    array (
      0 => 'opentelemetry',
      1 => 'span',
      2 => 'jaeger',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'OpenTelemetry',
        'body' => 'SDK unificado — instrumenta PHP/Go/Node, exporta a Jaeger, Tempo, Datadog.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-traces
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Spans',
        'body' => 'Trace = árbol spans — cada DB query, HTTP call es span hijo.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-traces
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿OpenTelemetry es...?',
        'options' => 
        array (
          0 => 'Estándar vendor-neutral observabilidad',
          1 => 'Solo AWS',
          2 => 'Reemplazo Git',
        ),
        'answer' => 'Estándar vendor-neutral observabilidad',
        'explanation' => 'CNCF project — futuro unificado.',
        'pro_tip' => 'Auto-instrumentation donde exista.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Context propagation?',
        'options' => 
        array (
          0 => 'Pasa trace-id entre servicios HTTP/gRPC',
          1 => 'Solo logs locales',
          2 => 'CSS',
        ),
        'answer' => 'Pasa trace-id entre servicios HTTP/gRPC',
        'explanation' => 'traceparent header W3C.',
        'pro_tip' => 'Sin propagación, traces rotos.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ob-alerts',
    'order' => 5,
    'title' => 'Alerting y SLOs',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Alertmanager, error budget y on-call.',
    'concepts' => 
    array (
      0 => 'slo',
      1 => 'alert',
      2 => 'oncall',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SLO',
        'body' => '99.9% uptime = ~43 min downtime/mes — error budget guía velocity vs reliability.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-alerts
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Alertas',
        'body' => 'Alerta síntoma usuario (checkout failing), no causa (CPU 80%) — reduce fatiga.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-alerts
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SLO vs SLA?',
        'options' => 
        array (
          0 => 'SLO objetivo interno; SLA contrato cliente',
          1 => 'Iguales',
          2 => 'SLA solo dev',
        ),
        'answer' => 'SLO objetivo interno; SLA contrato cliente',
        'explanation' => 'SLI mide; SLO target; SLA promesa.',
        'pro_tip' => 'Google SRE book referencia clásica.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Alert fatigue?',
        'options' => 
        array (
          0 => 'Demasiadas alertas ruido — ignoran las reales',
          1 => 'Muchos dashboards',
          2 => 'Logs grandes',
        ),
        'answer' => 'Demasiadas alertas ruido — ignoran las reales',
        'explanation' => 'Alert on symptoms + pages only critical.',
        'pro_tip' => 'Runbooks link en cada alerta.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ob-prod',
    'order' => 6,
    'title' => 'Stack completo en producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'ELK, Datadog, CloudWatch y costes.',
    'concepts' => 
    array (
      0 => 'elk',
      1 => 'datadog',
      2 => 'cost',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stacks',
        'body' => 'ELK (Elasticsearch, Logstash, Kibana) self-hosted vs Datadog/New Relic SaaS.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-prod
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Cost control',
        'body' => 'Sampling traces, retention logs 7d hot / 90d cold — observability cara a escala.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ob-prod
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Loki vs Elasticsearch logs?',
        'options' => 
        array (
          0 => 'Loki indexa labels no full text — más barato',
          1 => 'Loki más caro siempre',
          2 => 'Sin diferencia',
        ),
        'answer' => 'Loki indexa labels no full text — más barato',
        'explanation' => 'Grafana Loki popular en K8s.',
        'pro_tip' => 'No loguees PII en prod.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Health check vs metric?',
        'options' => 
        array (
          0 => 'Health binario up/down; metric continua',
          1 => 'Iguales',
          2 => 'Health reemplaza traces',
        ),
        'answer' => 'Health binario up/down; metric continua',
        'explanation' => '/health para LB; metrics para trends.',
        'pro_tip' => 'Curso Kubernetes: liveness/readiness.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'observabilidad-produccion',
    'order' => 7,
    'title' => 'Escalado, particionado y costos',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Escalado, particionado y costos — cierre avanzado de Observabilidad.',
    'concepts' => 
    array (
      0 => 'scale',
      1 => 'cost',
      2 => 'pipeline',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Observabilidad a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'observabilidad-operaciones',
    'order' => 8,
    'title' => 'Calidad de datos, pipelines y alertas',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Calidad de datos, pipelines y alertas — cierre avanzado de Observabilidad.',
    'concepts' => 
    array (
      0 => 'scale',
      1 => 'cost',
      2 => 'pipeline',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Observabilidad a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
