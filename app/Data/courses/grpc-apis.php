<?php

declare(strict_types=1);

return [
    [
        'slug' => 'gr-intro',
        'order' => 1,
        'title' => 'Introducción a gRPC',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'RPC, HTTP/2 y cuándo usar gRPC.',
        'concepts' => ['grpc', 'rpc', 'http2'],
        'sections' => [
            ['heading' => 'gRPC', 'body' => '**gRPC** = llamadas de procedimiento remoto con **Protobuf** sobre HTTP/2 — binario, rápido, contracts fuertes.'],
            ['heading' => 'vs REST', 'body' => 'REST JSON flexible para público; gRPC ideal microservicios internos, streaming bidireccional.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿gRPC usa por defecto...?', 'options' => ['HTTP/2 + Protobuf', 'SOAP XML', 'GraphQL only'], 'answer' => 'HTTP/2 + Protobuf', 'explanation' => 'Binario compacto vs JSON verbose.', 'pro_tip' => 'grpc-web expone a browsers con proxy.'],
            ['type' => 'choice', 'question' => '¿Cuándo preferir gRPC?', 'options' => ['Comunicación interna microservicios', 'API pública simple', 'Static site'], 'answer' => 'Comunicación interna microservicios', 'explanation' => 'Performance + schema strict.', 'pro_tip' => 'REST sigue mejor para APIs públicas.'],
        ],
    ],
    [
        'slug' => 'gr-proto',
        'order' => 2,
        'title' => 'Protocol Buffers',
        'level' => 'Fundamentos',
        'minutes' => 35,
        'summary' => '.proto files, messages y services.',
        'concepts' => ['protobuf', 'proto', 'codegen'],
        'sections' => [
            ['heading' => 'Schema', 'body' => 'message User { int32 id = 1; string name = 2; } — field numbers inmutables en prod.', 'code' => "service UserService {\n  rpc GetUser (GetUserRequest) returns (User);\n}"],
            ['heading' => 'Codegen', 'body' => 'protoc genera stubs Go/Java/PHP — cliente y servidor tipados.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Field number en proto?', 'options' => ['Identificador wire format — no cambiar en prod', 'Orden visual only', 'Opcional'], 'answer' => 'Identificador wire format — no cambiar en prod', 'explanation' => 'Compatibilidad backward/forward.', 'pro_tip' => 'reserved para campos eliminados.'],
            ['type' => 'contains', 'question' => 'Escribe rpc en service', 'must_contain' => ['rpc'], 'hint' => 'rpc MethodName (Request) returns (Response);', 'explanation' => 'Define método remoto.', 'pro_tip' => 'optional/repeated map tipos proto3.'],
        ],
    ],
    [
        'slug' => 'gr-server',
        'order' => 3,
        'title' => 'Servidor gRPC',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'Implementar service en Go/Node.',
        'concepts' => ['server', 'unary', 'handler'],
        'sections' => [
            ['heading' => 'Unary RPC', 'body' => 'Un request, un response — como HTTP call clásico.'],
            ['heading' => 'Implementación', 'body' => 'Go: struct que embed UnimplementedXServer + métodos — registra en grpc.NewServer().'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Unary RPC?', 'options' => ['1 request → 1 response', 'Stream infinito', 'Solo server push'], 'answer' => '1 request → 1 response', 'explanation' => 'Patrón más común.', 'pro_tip' => 'Server streaming para feeds.'],
            ['type' => 'choice', 'question' => '¿Puerto gRPC típico?', 'options' => ['50051', '80', '443 only'], 'answer' => '50051', 'explanation' => 'Convención docs gRPC.', 'pro_tip' => 'TLS obligatorio fuera de localhost.'],
        ],
    ],
    [
        'slug' => 'gr-client',
        'order' => 4,
        'title' => 'Cliente y interceptors',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Stubs, deadlines y metadata.',
        'concepts' => ['client', 'deadline', 'metadata'],
        'sections' => [
            ['heading' => 'Deadlines', 'body' => 'context.WithTimeout — cancela RPC si backend lento — evita cascadas.'],
            ['heading' => 'Metadata', 'body' => 'Headers gRPC — auth token, trace-id para observabilidad.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Deadline en gRPC?', 'options' => ['Timeout propagado al server', 'Solo client side sleep', 'Sin cancelación'], 'answer' => 'Timeout propagado al server', 'explanation' => 'Distributed timeout pattern.', 'pro_tip' => 'Curso observabilidad: trace-id en metadata.'],
            ['type' => 'choice', 'question' => '¿Interceptor equivale a...?', 'options' => ['Middleware HTTP', 'CSS', 'Database'], 'answer' => 'Middleware HTTP', 'explanation' => 'Logging, auth, retry chain.', 'pro_tip' => 'UnaryInterceptor en Go.'],
        ],
    ],
    [
        'slug' => 'gr-vs-rest',
        'order' => 5,
        'title' => 'gRPC vs REST vs GraphQL',
        'level' => 'Arquitectura',
        'minutes' => 30,
        'summary' => 'Elegir protocolo correcto.',
        'concepts' => ['rest', 'graphql', 'tradeoff'],
        'sections' => [
            ['heading' => 'Matriz decisión', 'body' => 'Público/browser → REST/GraphQL. Interno polyglot → gRPC. Real-time stream → gRPC streaming/WebSocket.'],
            ['heading' => 'Gateway', 'body' => 'grpc-gateway traduce REST JSON ↔ gRPC — expone subset público.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿GraphQL mejor cuando...?', 'options' => ['Cliente necesita formas variables de datos', 'Solo microservicios internos', 'Streaming binario'], 'answer' => 'Cliente necesita formas variables de datos', 'explanation' => 'Overfetching/underfetching.', 'pro_tip' => 'Cursos GraphQL y REST en catálogo.'],
            ['type' => 'choice', 'question' => '¿grpc-gateway?', 'options' => ['REST facade sobre gRPC backend', 'Reemplaza Nginx', 'Solo GraphQL'], 'answer' => 'REST facade sobre gRPC backend', 'explanation' => 'Lo mejor de ambos mundos.', 'pro_tip' => 'Annotate proto con google.api.http.'],
        ],
    ],
    [
        'slug' => 'gr-prod',
        'order' => 6,
        'title' => 'TLS, health checks y prod',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'mTLS, grpc-health-probe y K8s.',
        'concepts' => ['tls', 'mtls', 'health'],
        'sections' => [
            ['heading' => 'mTLS', 'body' => 'Mutual TLS — cliente y servidor certificados — zero trust entre servicios.'],
            ['heading' => 'K8s', 'body' => 'grpc-health-probe en liveness — Kubernetes nativo desde 1.23+.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿mTLS?', 'options' => ['Cliente y servidor verifican certificados mutuamente', 'Solo HTTPS browser', 'Sin cifrado'], 'answer' => 'Cliente y servidor verifican certificados mutuamente', 'explanation' => 'Service mesh (Istio) automatiza mTLS.', 'pro_tip' => 'Curso Kubernetes profundiza probes.'],
            ['type' => 'choice', 'question' => '¿Health check gRPC estándar?', 'options' => ['grpc.health.v1.Health/Check', 'GET /health JSON only', 'ping ICMP'], 'answer' => 'grpc.health.v1.Health/Check', 'explanation' => 'Servicio health estándar.', 'pro_tip' => 'Marca NOT_SERVING durante deploy.'],
        ],
    ],
];
