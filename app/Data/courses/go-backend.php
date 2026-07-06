<?php

declare(strict_types=1);

return [
    [
        'slug' => 'go-intro',
        'order' => 1,
        'title' => 'Introducción a Go',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Por qué Go, instalación y primer programa.',
        'concepts' => ['golang', 'compilado', 'simplicidad'],
        'sections' => [
            ['heading' => 'Go en la industria', 'body' => '**Go** (Golang) de Google: compilado, rápido, concurrencia nativa. Usado en Docker, Kubernetes, Terraform y backends de alto tráfico.'],
            ['heading' => 'Hello World', 'body' => 'Un solo binario estático — deploy sin runtime instalado.', 'code' => "package main\n\nimport \"fmt\"\n\nfunc main() {\n    fmt.Println(\"Hola Go\")\n}"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Go es...?', 'options' => ['Compilado y con goroutines', 'Solo interpretado', 'Solo para frontend'], 'answer' => 'Compilado y con goroutines', 'explanation' => 'Binario nativo + concurrencia ligera.', 'pro_tip' => 'go mod init inicia módulo.'],
            ['type' => 'contains', 'question' => 'Escribe package main', 'must_contain' => ['package main'], 'hint' => 'package main\nfunc main() { ... }', 'explanation' => 'Todo programa Go empieza en main.', 'pro_tip' => 'go run . ejecuta sin compilar manualmente.'],
        ],
    ],
    [
        'slug' => 'go-syntax',
        'order' => 2,
        'title' => 'Tipos, funciones y structs',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Variables, interfaces y error handling idiomático.',
        'concepts' => ['struct', 'interface', 'error'],
        'sections' => [
            ['heading' => 'Structs', 'body' => 'type User struct { ID int; Name string } — composición sobre herencia.'],
            ['heading' => 'Errors', 'body' => 'if err != nil { return err } — explícito, sin excepciones.', 'code' => "func Divide(a, b float64) (float64, error) {\n    if b == 0 {\n        return 0, fmt.Errorf(\"division by zero\")\n    }\n    return a / b, nil\n}"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Patrón error en Go?', 'options' => ['return value, error', 'try/catch', 'panic siempre'], 'answer' => 'return value, error', 'explanation' => 'Segundo return es error o nil.', 'pro_tip' => 'errors.Is y errors.As para wrap.'],
            ['type' => 'choice', 'question' => '¿Interfaces en Go?', 'options' => ['Implícitas — duck typing', 'Solo con extends', 'No existen'], 'answer' => 'Implícitas — duck typing', 'explanation' => 'Si implementas métodos, cumples la interface.', 'pro_tip' => 'interface{} = any en Go 1.18+.'],
        ],
    ],
    [
        'slug' => 'go-http',
        'order' => 3,
        'title' => 'HTTP y APIs REST',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'net/http, handlers y JSON.',
        'concepts' => ['net/http', 'handler', 'json'],
        'sections' => [
            ['heading' => 'Servidor mínimo', 'body' => 'http.HandleFunc y http.ListenAndServe — stdlib potente sin framework.', 'code' => "http.HandleFunc(\"/health\", func(w http.ResponseWriter, r *http.Request) {\n    w.Write([]byte(`{\"ok\":true}`))\n})\nhttp.ListenAndServe(\":8080\", nil)"],
            ['heading' => 'JSON', 'body' => 'json.NewEncoder(w).Encode(user) — Content-Type application/json.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Paquete HTTP estándar?', 'options' => ['net/http', 'express', 'gin only'], 'answer' => 'net/http', 'explanation' => 'Stdlib incluye servidor y cliente.', 'pro_tip' => 'Gin/Echo son routers populares encima.'],
            ['type' => 'contains', 'question' => 'Escribe ListenAndServe', 'must_contain' => ['ListenAndServe'], 'hint' => 'http.ListenAndServe(":8080", nil)', 'explanation' => 'Arranca servidor en puerto 8080.', 'pro_tip' => 'Context para graceful shutdown en prod.'],
        ],
    ],
    [
        'slug' => 'go-concurrency',
        'order' => 4,
        'title' => 'Goroutines y channels',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Concurrencia que hace famoso a Go.',
        'concepts' => ['goroutine', 'channel', 'select'],
        'sections' => [
            ['heading' => 'Goroutines', 'body' => 'go fetchURL(url) — miles de goroutines ligeras vs threads OS.', 'code' => "ch := make(chan string)\ngo func() { ch <- \"done\" }()\nmsg := <-ch"],
            ['heading' => 'Select', 'body' => 'select espera múltiples channels — timeout, cancelación, fan-in.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo lanzar goroutine?', 'options' => ['go funcion()', 'async funcion()', 'thread.start'], 'answer' => 'go funcion()', 'explanation' => 'Keyword go antes de la llamada.', 'pro_tip' => 'sync.WaitGroup para esperar batch.'],
            ['type' => 'choice', 'question' => '¿Channel sirve para...?', 'options' => ['Comunicar entre goroutines', 'Solo logs', 'Compilar'], 'answer' => 'Comunicar entre goroutines', 'explanation' => 'CSP: no compartas memoria, comparte mensajes.', 'pro_tip' => 'Buffer con make(chan T, n).'],
        ],
    ],
    [
        'slug' => 'go-db',
        'order' => 5,
        'title' => 'Base de datos con database/sql',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'PostgreSQL, prepared statements y pooling.',
        'concepts' => ['database/sql', 'pgx', 'pool'],
        'sections' => [
            ['heading' => 'database/sql', 'body' => 'db.Query, db.Exec — interface estándar. Driver: pgx o lib/pq para Postgres.'],
            ['heading' => 'Pooling', 'body' => 'db.SetMaxOpenConns(25) — controla conexiones concurrentes.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Evitar SQL injection en Go?', 'options' => ['Query con placeholders $1', 'Concatenar strings', 'Solo ORM'], 'answer' => 'Query con placeholders $1', 'explanation' => 'Parámetros separados del SQL.', 'pro_tip' => 'sqlx simplifica scans a structs.'],
            ['type' => 'choice', 'question' => '¿ORM popular en Go?', 'options' => ['GORM', 'Eloquent', 'Doctrine only'], 'answer' => 'GORM', 'explanation' => 'GORM es el más usado — opcional vs SQL puro.', 'pro_tip' => 'Muchos equipos prefieren sqlc (codegen).'],
        ],
    ],
    [
        'slug' => 'go-prod',
        'order' => 6,
        'title' => 'Deploy y buenas prácticas',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Docker multi-stage, tests y observabilidad.',
        'concepts' => ['docker', 'testing', 'graceful'],
        'sections' => [
            ['heading' => 'Docker', 'body' => 'FROM golang:alpine AS build → COPY → go build → imagen scratch/distroless mínima.'],
            ['heading' => 'Tests', 'body' => 'go test ./... — table-driven tests son idiomáticos en Go.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Comando tests Go?', 'options' => ['go test ./...', 'npm test', 'phpunit'], 'answer' => 'go test ./...', 'explanation' => 'Recursivo en todos los paquetes.', 'pro_tip' => 'go test -race detecta data races.'],
            ['type' => 'choice', 'question' => '¿Ventaja binario Go en Docker?', 'options' => ['Imagen final muy pequeña', 'Necesita JVM', 'Solo Windows'], 'answer' => 'Imagen final muy pequeña', 'explanation' => 'Static binary en scratch ~10MB.', 'pro_tip' => 'Combina con curso Kubernetes.'],
        ],
    ],
];
