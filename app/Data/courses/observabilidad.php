<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ob-intro',
        'order' => 1,
        'title' => 'Observabilidad: logs, metrics, traces',
        'level' => 'Conceptos',
        'minutes' => 30,
        'summary' => 'Los tres pilares y por qué importan.',
        'concepts' => ['observability', 'logs', 'metrics', 'traces'],
        'sections' => [
            ['heading' => 'Observabilidad', 'body' => 'Entender **estado interno** del sistema desde fuera — debug prod sin SSH adivinando.'],
            ['heading' => 'Tres pilares', 'body' => '**Logs** eventos discretos. **Metrics** números agregados en tiempo. **Traces** request end-to-end.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Metric vs log?', 'options' => ['Metric = agregado numérico; log = evento texto', 'Iguales', 'Log siempre mejor'], 'answer' => 'Metric = agregado numérico; log = evento texto', 'explanation' => 'Metrics alertan; logs investigan.', 'pro_tip' => 'RED: Rate, Errors, Duration.'],
            ['type' => 'choice', 'question' => '¿Trace útil para...?', 'options' => ['Seguir request por microservicios', 'Compilar código', 'CSS'], 'answer' => 'Seguir request por microservicios', 'explanation' => 'trace-id correlaciona spans.', 'pro_tip' => 'OpenTelemetry estándar vendor-neutral.'],
        ],
    ],
    [
        'slug' => 'ob-logs',
        'order' => 2,
        'title' => 'Logging estructurado',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'JSON logs, niveles y correlación.',
        'concepts' => ['structured-log', 'json', 'correlation-id'],
        'sections' => [
            ['heading' => 'Structured logging', 'body' => 'JSON: {"level":"error","msg":"payment failed","user_id":42,"trace_id":"abc"} — parseable por ELK/Loki.'],
            ['heading' => 'Niveles', 'body' => 'DEBUG dev only; INFO eventos negocio; WARN degradación; ERROR acción requerida.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Log estructurado vs printf?', 'options' => ['JSON queryable en agregadores', 'Más legible humano siempre', 'Sin búsqueda'], 'answer' => 'JSON queryable en agregadores', 'explanation' => 'ELK: user_id:42 AND level:error.', 'pro_tip' => 'Monolog JSON formatter en PHP.'],
            ['type' => 'choice', 'question' => '¿correlation-id / trace-id?', 'options' => ['Mismo ID en todos logs del request', 'Random por log line', 'Solo metrics'], 'answer' => 'Mismo ID en todos logs del request', 'explanation' => 'Filtra un request en millones de líneas.', 'pro_tip' => 'Propaga header X-Request-ID.'],
        ],
    ],
    [
        'slug' => 'ob-metrics',
        'order' => 3,
        'title' => 'Prometheus y Grafana',
        'level' => 'Práctica',
        'minutes' => 40,
        'summary' => 'Counters, histograms y dashboards.',
        'concepts' => ['prometheus', 'grafana', 'histogram'],
        'sections' => [
            ['heading' => 'Prometheus', 'body' => 'Pull metrics HTTP /metrics — PromQL queries: rate(http_requests_total[5m]).'],
            ['heading' => 'Grafana', 'body' => 'Dashboards visuales — alertas cuando p99 latency > 500ms.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Counter Prometheus?', 'options' => ['Solo incrementa — requests totales', 'Sube y baja', 'Solo strings'], 'answer' => 'Solo incrementa — requests totales', 'explanation' => 'rate() calcula derivada.', 'pro_tip' => 'Histogram para latencias p50/p99.'],
            ['type' => 'contains', 'question' => 'Menciona PromQL rate', 'must_contain' => ['rate'], 'hint' => 'rate(http_requests_total[5m])', 'explanation' => 'Requests por segundo ventana 5m.', 'pro_tip' => 'USE method: Utilization, Saturation, Errors.'],
        ],
    ],
    [
        'slug' => 'ob-traces',
        'order' => 4,
        'title' => 'OpenTelemetry y tracing',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Spans, context propagation y Jaeger.',
        'concepts' => ['opentelemetry', 'span', 'jaeger'],
        'sections' => [
            ['heading' => 'OpenTelemetry', 'body' => 'SDK unificado — instrumenta PHP/Go/Node, exporta a Jaeger, Tempo, Datadog.'],
            ['heading' => 'Spans', 'body' => 'Trace = árbol spans — cada DB query, HTTP call es span hijo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿OpenTelemetry es...?', 'options' => ['Estándar vendor-neutral observabilidad', 'Solo AWS', 'Reemplazo Git'], 'answer' => 'Estándar vendor-neutral observabilidad', 'explanation' => 'CNCF project — futuro unificado.', 'pro_tip' => 'Auto-instrumentation donde exista.'],
            ['type' => 'choice', 'question' => '¿Context propagation?', 'options' => ['Pasa trace-id entre servicios HTTP/gRPC', 'Solo logs locales', 'CSS'], 'answer' => 'Pasa trace-id entre servicios HTTP/gRPC', 'explanation' => 'traceparent header W3C.', 'pro_tip' => 'Sin propagación, traces rotos.'],
        ],
    ],
    [
        'slug' => 'ob-alerts',
        'order' => 5,
        'title' => 'Alerting y SLOs',
        'level' => 'Producción',
        'minutes' => 35,
        'summary' => 'Alertmanager, error budget y on-call.',
        'concepts' => ['slo', 'alert', 'oncall'],
        'sections' => [
            ['heading' => 'SLO', 'body' => '99.9% uptime = ~43 min downtime/mes — error budget guía velocity vs reliability.'],
            ['heading' => 'Alertas', 'body' => 'Alerta síntoma usuario (checkout failing), no causa (CPU 80%) — reduce fatiga.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿SLO vs SLA?', 'options' => ['SLO objetivo interno; SLA contrato cliente', 'Iguales', 'SLA solo dev'], 'answer' => 'SLO objetivo interno; SLA contrato cliente', 'explanation' => 'SLI mide; SLO target; SLA promesa.', 'pro_tip' => 'Google SRE book referencia clásica.'],
            ['type' => 'choice', 'question' => '¿Alert fatigue?', 'options' => ['Demasiadas alertas ruido — ignoran las reales', 'Muchos dashboards', 'Logs grandes'], 'answer' => 'Demasiadas alertas ruido — ignoran las reales', 'explanation' => 'Alert on symptoms + pages only critical.', 'pro_tip' => 'Runbooks link en cada alerta.'],
        ],
    ],
    [
        'slug' => 'ob-prod',
        'order' => 6,
        'title' => 'Stack completo en producción',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'ELK, Datadog, CloudWatch y costes.',
        'concepts' => ['elk', 'datadog', 'cost'],
        'sections' => [
            ['heading' => 'Stacks', 'body' => 'ELK (Elasticsearch, Logstash, Kibana) self-hosted vs Datadog/New Relic SaaS.'],
            ['heading' => 'Cost control', 'body' => 'Sampling traces, retention logs 7d hot / 90d cold — observability cara a escala.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Loki vs Elasticsearch logs?', 'options' => ['Loki indexa labels no full text — más barato', 'Loki más caro siempre', 'Sin diferencia'], 'answer' => 'Loki indexa labels no full text — más barato', 'explanation' => 'Grafana Loki popular en K8s.', 'pro_tip' => 'No loguees PII en prod.'],
            ['type' => 'choice', 'question' => '¿Health check vs metric?', 'options' => ['Health binario up/down; metric continua', 'Iguales', 'Health reemplaza traces'], 'answer' => 'Health binario up/down; metric continua', 'explanation' => '/health para LB; metrics para trends.', 'pro_tip' => 'Curso Kubernetes: liveness/readiness.'],
        ],
    ],
];
