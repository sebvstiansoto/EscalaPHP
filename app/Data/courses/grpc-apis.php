<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'gr-intro',
    'order' => 1,
    'title' => 'Introducción a gRPC',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'RPC, HTTP/2 y cuándo usar gRPC.',
    'concepts' => 
    array (
      0 => 'grpc',
      1 => 'rpc',
      2 => 'http2',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'gRPC',
        'body' => '**gRPC** = llamadas de procedimiento remoto con **Protobuf** sobre HTTP/2 — binario, rápido, contracts fuertes.',
        'code' => '# Practica: gr-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'vs REST',
        'body' => 'REST JSON flexible para público; gRPC ideal microservicios internos, streaming bidireccional.',
        'code' => '# Practica: gr-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿gRPC usa por defecto...?',
        'options' => 
        array (
          0 => 'HTTP/2 + Protobuf',
          1 => 'SOAP XML',
          2 => 'GraphQL only',
        ),
        'answer' => 'HTTP/2 + Protobuf',
        'explanation' => 'Binario compacto vs JSON verbose.',
        'pro_tip' => 'grpc-web expone a browsers con proxy.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo preferir gRPC?',
        'options' => 
        array (
          0 => 'Comunicación interna microservicios',
          1 => 'API pública simple',
          2 => 'Static site',
        ),
        'answer' => 'Comunicación interna microservicios',
        'explanation' => 'Performance + schema strict.',
        'pro_tip' => 'REST sigue mejor para APIs públicas.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'gr-proto',
    'order' => 2,
    'title' => 'Protocol Buffers',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => '.proto files, messages y services.',
    'concepts' => 
    array (
      0 => 'protobuf',
      1 => 'proto',
      2 => 'codegen',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Schema',
        'body' => 'message User { int32 id = 1; string name = 2; } — field numbers inmutables en prod.',
        'code' => 'service UserService {
  rpc GetUser (GetUserRequest) returns (User);
}',
      ),
      1 => 
      array (
        'heading' => 'Codegen',
        'body' => 'protoc genera stubs Go/Java/PHP — cliente y servidor tipados.',
        'code' => 'rpc MethodName (Request) returns (Response);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Field number en proto?',
        'options' => 
        array (
          0 => 'Identificador wire format — no cambiar en prod',
          1 => 'Orden visual only',
          2 => 'Opcional',
        ),
        'answer' => 'Identificador wire format — no cambiar en prod',
        'explanation' => 'Compatibilidad backward/forward.',
        'pro_tip' => 'reserved para campos eliminados.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe rpc en service',
        'must_contain' => 
        array (
          0 => 'rpc',
        ),
        'hint' => 'rpc MethodName (Request) returns (Response);',
        'explanation' => 'Define método remoto.',
        'pro_tip' => 'optional/repeated map tipos proto3.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'gr-server',
    'order' => 3,
    'title' => 'Servidor gRPC',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Implementar service en Go/Node.',
    'concepts' => 
    array (
      0 => 'server',
      1 => 'unary',
      2 => 'handler',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Unary RPC',
        'body' => 'Un request, un response — como HTTP call clásico.',
        'code' => '# Practica: gr-server
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Implementación',
        'body' => 'Go: struct que embed UnimplementedXServer + métodos — registra en grpc.NewServer().',
        'code' => '# Practica: gr-server
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Unary RPC?',
        'options' => 
        array (
          0 => '1 request → 1 response',
          1 => 'Stream infinito',
          2 => 'Solo server push',
        ),
        'answer' => '1 request → 1 response',
        'explanation' => 'Patrón más común.',
        'pro_tip' => 'Server streaming para feeds.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Puerto gRPC típico?',
        'options' => 
        array (
          0 => '50051',
          1 => '80',
          2 => '443 only',
        ),
        'answer' => '50051',
        'explanation' => 'Convención docs gRPC.',
        'pro_tip' => 'TLS obligatorio fuera de localhost.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'gr-client',
    'order' => 4,
    'title' => 'Cliente y interceptors',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Stubs, deadlines y metadata.',
    'concepts' => 
    array (
      0 => 'client',
      1 => 'deadline',
      2 => 'metadata',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Deadlines',
        'body' => 'context.WithTimeout — cancela RPC si backend lento — evita cascadas.',
        'code' => '# Practica: gr-client
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Metadata',
        'body' => 'Headers gRPC — auth token, trace-id para observabilidad.',
        'code' => '# Practica: gr-client
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Deadline en gRPC?',
        'options' => 
        array (
          0 => 'Timeout propagado al server',
          1 => 'Solo client side sleep',
          2 => 'Sin cancelación',
        ),
        'answer' => 'Timeout propagado al server',
        'explanation' => 'Distributed timeout pattern.',
        'pro_tip' => 'Curso observabilidad: trace-id en metadata.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Interceptor equivale a...?',
        'options' => 
        array (
          0 => 'Middleware HTTP',
          1 => 'CSS',
          2 => 'Database',
        ),
        'answer' => 'Middleware HTTP',
        'explanation' => 'Logging, auth, retry chain.',
        'pro_tip' => 'UnaryInterceptor en Go.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'gr-vs-rest',
    'order' => 5,
    'title' => 'gRPC vs REST vs GraphQL',
    'level' => 'Arquitectura',
    'minutes' => 30,
    'summary' => 'Elegir protocolo correcto.',
    'concepts' => 
    array (
      0 => 'rest',
      1 => 'graphql',
      2 => 'tradeoff',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Matriz decisión',
        'body' => 'Público/browser → REST/GraphQL. Interno polyglot → gRPC. Real-time stream → gRPC streaming/WebSocket.',
        'code' => '# Practica: gr-vs-rest
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Gateway',
        'body' => 'grpc-gateway traduce REST JSON ↔ gRPC — expone subset público.',
        'code' => '# Practica: gr-vs-rest
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿GraphQL mejor cuando...?',
        'options' => 
        array (
          0 => 'Cliente necesita formas variables de datos',
          1 => 'Solo microservicios internos',
          2 => 'Streaming binario',
        ),
        'answer' => 'Cliente necesita formas variables de datos',
        'explanation' => 'Overfetching/underfetching.',
        'pro_tip' => 'Cursos GraphQL y REST en catálogo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿grpc-gateway?',
        'options' => 
        array (
          0 => 'REST facade sobre gRPC backend',
          1 => 'Reemplaza Nginx',
          2 => 'Solo GraphQL',
        ),
        'answer' => 'REST facade sobre gRPC backend',
        'explanation' => 'Lo mejor de ambos mundos.',
        'pro_tip' => 'Annotate proto con google.api.http.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'gr-prod',
    'order' => 6,
    'title' => 'TLS, health checks y prod',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'mTLS, grpc-health-probe y K8s.',
    'concepts' => 
    array (
      0 => 'tls',
      1 => 'mtls',
      2 => 'health',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'mTLS',
        'body' => 'Mutual TLS — cliente y servidor certificados — zero trust entre servicios.',
        'code' => '# Practica: gr-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'K8s',
        'body' => 'grpc-health-probe en liveness — Kubernetes nativo desde 1.23+.',
        'code' => '# Practica: gr-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿mTLS?',
        'options' => 
        array (
          0 => 'Cliente y servidor verifican certificados mutuamente',
          1 => 'Solo HTTPS browser',
          2 => 'Sin cifrado',
        ),
        'answer' => 'Cliente y servidor verifican certificados mutuamente',
        'explanation' => 'Service mesh (Istio) automatiza mTLS.',
        'pro_tip' => 'Curso Kubernetes profundiza probes.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Health check gRPC estándar?',
        'options' => 
        array (
          0 => 'grpc.health.v1.Health/Check',
          1 => 'GET /health JSON only',
          2 => 'ping ICMP',
        ),
        'answer' => 'grpc.health.v1.Health/Check',
        'explanation' => 'Servicio health estándar.',
        'pro_tip' => 'Marca NOT_SERVING durante deploy.',
      ),
    ),
  ),
);
