<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'go-intro',
    'order' => 1,
    'title' => 'Introducción a Go',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Por qué Go, instalación y primer programa.',
    'concepts' => 
    array (
      0 => 'golang',
      1 => 'compilado',
      2 => 'simplicidad',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Go en la industria',
        'body' => '**Go** (Golang) de Google: compilado, rápido, concurrencia nativa. Usado en Docker, Kubernetes, Terraform y backends de alto tráfico.',
        'code' => 'package main\\nfunc main() { ... }',
      ),
      1 => 
      array (
        'heading' => 'Hello World',
        'body' => 'Un solo binario estático — deploy sin runtime instalado.',
        'code' => 'package main

import "fmt"

func main() {
    fmt.Println("Hola Go")
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Go es...?',
        'options' => 
        array (
          0 => 'Compilado y con goroutines',
          1 => 'Solo interpretado',
          2 => 'Solo para frontend',
        ),
        'answer' => 'Compilado y con goroutines',
        'explanation' => 'Binario nativo + concurrencia ligera.',
        'pro_tip' => 'go mod init inicia módulo.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe package main',
        'must_contain' => 
        array (
          0 => 'package main',
        ),
        'hint' => 'package main\\nfunc main() { ... }',
        'explanation' => 'Todo programa Go empieza en main.',
        'pro_tip' => 'go run . ejecuta sin compilar manualmente.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'go-syntax',
    'order' => 2,
    'title' => 'Tipos, funciones y structs',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Variables, interfaces y error handling idiomático.',
    'concepts' => 
    array (
      0 => 'struct',
      1 => 'interface',
      2 => 'error',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Structs',
        'body' => 'type User struct { ID int; Name string } — composición sobre herencia.',
        'code' => '# Practica: go-syntax
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Errors',
        'body' => 'if err != nil { return err } — explícito, sin excepciones.',
        'code' => 'func Divide(a, b float64) (float64, error) {
    if b == 0 {
        return 0, fmt.Errorf("division by zero")
    }
    return a / b, nil
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Patrón error en Go?',
        'options' => 
        array (
          0 => 'return value, error',
          1 => 'try/catch',
          2 => 'panic siempre',
        ),
        'answer' => 'return value, error',
        'explanation' => 'Segundo return es error o nil.',
        'pro_tip' => 'errors.Is y errors.As para wrap.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Interfaces en Go?',
        'options' => 
        array (
          0 => 'Implícitas — duck typing',
          1 => 'Solo con extends',
          2 => 'No existen',
        ),
        'answer' => 'Implícitas — duck typing',
        'explanation' => 'Si implementas métodos, cumples la interface.',
        'pro_tip' => 'interface{} = any en Go 1.18+.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'go-http',
    'order' => 3,
    'title' => 'HTTP y APIs REST',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'net/http, handlers y JSON.',
    'concepts' => 
    array (
      0 => 'net/http',
      1 => 'handler',
      2 => 'json',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Servidor mínimo',
        'body' => 'http.HandleFunc y http.ListenAndServe — stdlib potente sin framework.',
        'code' => 'http.HandleFunc("/health", func(w http.ResponseWriter, r *http.Request) {
    w.Write([]byte(`{"ok":true}`))
})
http.ListenAndServe(":8080", nil)',
      ),
      1 => 
      array (
        'heading' => 'JSON',
        'body' => 'json.NewEncoder(w).Encode(user) — Content-Type application/json.',
        'code' => 'http.ListenAndServe(":8080", nil)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Paquete HTTP estándar?',
        'options' => 
        array (
          0 => 'net/http',
          1 => 'express',
          2 => 'gin only',
        ),
        'answer' => 'net/http',
        'explanation' => 'Stdlib incluye servidor y cliente.',
        'pro_tip' => 'Gin/Echo son routers populares encima.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe ListenAndServe',
        'must_contain' => 
        array (
          0 => 'ListenAndServe',
        ),
        'hint' => 'http.ListenAndServe(":8080", nil)',
        'explanation' => 'Arranca servidor en puerto 8080.',
        'pro_tip' => 'Context para graceful shutdown en prod.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'go-concurrency',
    'order' => 4,
    'title' => 'Goroutines y channels',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Concurrencia que hace famoso a Go.',
    'concepts' => 
    array (
      0 => 'goroutine',
      1 => 'channel',
      2 => 'select',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Goroutines',
        'body' => 'go fetchURL(url) — miles de goroutines ligeras vs threads OS.',
        'code' => 'ch := make(chan string)
go func() { ch <- "done" }()
msg := <-ch',
      ),
      1 => 
      array (
        'heading' => 'Select',
        'body' => 'select espera múltiples channels — timeout, cancelación, fan-in.',
        'code' => '# Practica: go-concurrency
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo lanzar goroutine?',
        'options' => 
        array (
          0 => 'go funcion()',
          1 => 'async funcion()',
          2 => 'thread.start',
        ),
        'answer' => 'go funcion()',
        'explanation' => 'Keyword go antes de la llamada.',
        'pro_tip' => 'sync.WaitGroup para esperar batch.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Channel sirve para...?',
        'options' => 
        array (
          0 => 'Comunicar entre goroutines',
          1 => 'Solo logs',
          2 => 'Compilar',
        ),
        'answer' => 'Comunicar entre goroutines',
        'explanation' => 'CSP: no compartas memoria, comparte mensajes.',
        'pro_tip' => 'Buffer con make(chan T, n).',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'go-db',
    'order' => 5,
    'title' => 'Base de datos con database/sql',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'PostgreSQL, prepared statements y pooling.',
    'concepts' => 
    array (
      0 => 'database/sql',
      1 => 'pgx',
      2 => 'pool',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'database/sql',
        'body' => 'db.Query, db.Exec — interface estándar. Driver: pgx o lib/pq para Postgres.',
        'code' => '# Practica: go-db
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Pooling',
        'body' => 'db.SetMaxOpenConns(25) — controla conexiones concurrentes.',
        'code' => '# Practica: go-db
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Evitar SQL injection en Go?',
        'options' => 
        array (
          0 => 'Query con placeholders $1',
          1 => 'Concatenar strings',
          2 => 'Solo ORM',
        ),
        'answer' => 'Query con placeholders $1',
        'explanation' => 'Parámetros separados del SQL.',
        'pro_tip' => 'sqlx simplifica scans a structs.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ORM popular en Go?',
        'options' => 
        array (
          0 => 'GORM',
          1 => 'Eloquent',
          2 => 'Doctrine only',
        ),
        'answer' => 'GORM',
        'explanation' => 'GORM es el más usado — opcional vs SQL puro.',
        'pro_tip' => 'Muchos equipos prefieren sqlc (codegen).',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'go-prod',
    'order' => 6,
    'title' => 'Deploy y buenas prácticas',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Docker multi-stage, tests y observabilidad.',
    'concepts' => 
    array (
      0 => 'docker',
      1 => 'testing',
      2 => 'graceful',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Docker',
        'body' => 'FROM golang:alpine AS build → COPY → go build → imagen scratch/distroless mínima.',
        'code' => '# Practica: go-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Tests',
        'body' => 'go test ./... — table-driven tests son idiomáticos en Go.',
        'code' => '# Practica: go-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Comando tests Go?',
        'options' => 
        array (
          0 => 'go test ./...',
          1 => 'npm test',
          2 => 'phpunit',
        ),
        'answer' => 'go test ./...',
        'explanation' => 'Recursivo en todos los paquetes.',
        'pro_tip' => 'go test -race detecta data races.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja binario Go en Docker?',
        'options' => 
        array (
          0 => 'Imagen final muy pequeña',
          1 => 'Necesita JVM',
          2 => 'Solo Windows',
        ),
        'answer' => 'Imagen final muy pequeña',
        'explanation' => 'Static binary en scratch ~10MB.',
        'pro_tip' => 'Combina con curso Kubernetes.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'go-backend-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Go backend.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Go backend a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
    'slug' => 'go-backend-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Go backend.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Go backend a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
