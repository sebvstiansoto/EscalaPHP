<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'rs-intro',
    'order' => 1,
    'title' => 'Introducción a Rust',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Seguridad memoria sin GC.',
    'concepts' => 
    array (
      0 => 'rust',
      1 => 'ownership',
      2 => 'systems',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Rust',
        'body' => '**Rust** — performance C/C++ con **borrow checker** que elimina segfaults en compile time. Usado en infra (Tokio, Deno core).',
        'code' => 'fn main() { println!("Hola"); }',
      ),
      1 => 
      array (
        'heading' => 'Cargo',
        'body' => 'cargo new, cargo build, cargo run — package manager y build tool integrado.',
        'code' => 'fn main() { println!("Hola"); }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Rust garantiza memoria sin...?',
        'options' => 
        array (
          0 => 'Garbage collector runtime',
          1 => 'Compilador',
          2 => 'Tests',
        ),
        'answer' => 'Garbage collector runtime',
        'explanation' => 'Ownership en compile time.',
        'pro_tip' => 'Curva aprendizaje steep — vale la pena.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe fn main',
        'must_contain' => 
        array (
          0 => 'fn main',
        ),
        'hint' => 'fn main() { println!("Hola"); }',
        'explanation' => 'Entry point Rust.',
        'pro_tip' => 'rustup instala toolchain.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'rs-ownership',
    'order' => 2,
    'title' => 'Ownership y borrowing',
    'level' => 'Fundamentos',
    'minutes' => 40,
    'summary' => 'Move, borrow y lifetimes intro.',
    'concepts' => 
    array (
      0 => 'ownership',
      1 => 'borrow',
      2 => 'move',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Ownership',
        'body' => 'Cada valor un owner — al asignar, **move** (no copy implícito en tipos heap).',
        'code' => '# Practica: rs-ownership
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Borrowing',
        'body' => '&T inmutable, &mut T exclusivo — compiler rechaza data races.',
        'code' => '# Practica: rs-ownership
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿&mut reglas?',
        'options' => 
        array (
          0 => 'Una sola referencia mut a la vez',
          1 => 'Infinitas mut',
          2 => 'Sin mut en Rust',
        ),
        'answer' => 'Una sola referencia mut a la vez',
        'explanation' => 'Previene data races.',
        'pro_tip' => 'Rc/Arc para shared ownership.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Move semantics?',
        'options' => 
        array (
          0 => 'Transfer ownership — original invalidado',
          1 => 'Copy automático siempre',
          2 => 'GC cleanup',
        ),
        'answer' => 'Transfer ownership — original invalidado',
        'explanation' => 'String move vs i32 Copy.',
        'pro_tip' => 'clone() explícito cuando necesitas copia.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'rs-structs',
    'order' => 3,
    'title' => 'Structs, enums y pattern matching',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Option, Result y match.',
    'concepts' => 
    array (
      0 => 'enum',
      1 => 'option',
      2 => 'result',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Option/Result',
        'body' => 'Sin null — Option<T> y Result<T,E> fuerzan manejo explícito errores.',
        'code' => 'match result {
    Ok(v) => println!("{}", v),
    Err(e) => eprintln!("error: {}", e),
}',
      ),
      1 => 
      array (
        'heading' => 'match',
        'body' => 'Pattern matching exhaustivo — compiler exige cubrir todos casos enum.',
        'code' => '# Practica: rs-structs
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿? operator?',
        'options' => 
        array (
          0 => 'Propaga Err early return',
          1 => 'Null coalescing',
          2 => 'Comentario',
        ),
        'answer' => 'Propaga Err early return',
        'explanation' => 'Sugar para Result handling.',
        'pro_tip' => 'anyhow/thiserror crates ergonomía.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Option::None equivale a...?',
        'options' => 
        array (
          0 => 'Ausencia valor — no null pointer',
          1 => 'Error fatal',
          2 => 'Zero',
        ),
        'answer' => 'Ausencia valor — no null pointer',
        'explanation' => 'Some(x) o None.',
        'pro_tip' => 'unwrap() solo en prototypes/tests.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'rs-error',
    'order' => 4,
    'title' => 'Error handling idiomático',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Result chains y custom errors.',
    'concepts' => 
    array (
      0 => 'result',
      1 => 'anyhow',
      2 => 'thiserror',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Errores',
        'body' => 'Libraries: thiserror define tipos; apps: anyhow para contexto flexible.',
        'code' => '# Practica: rs-error
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'No panics en libs',
        'body' => 'panic! solo bugs programador — errores recuperables vía Result.',
        'code' => '# Practica: rs-error
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿panic! en library pública?',
        'options' => 
        array (
          0 => 'Evitar — devolver Result',
          1 => 'Siempre OK',
          2 => 'Reemplaza Result',
        ),
        'answer' => 'Evitar — devolver Result',
        'explanation' => 'Caller decide recovery.',
        'pro_tip' => 'expect() con mensaje en dev.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿map_err?',
        'options' => 
        array (
          0 => 'Transforma tipo error en chain',
          1 => 'Ignora error',
          2 => 'Panic auto',
        ),
        'answer' => 'Transforma tipo error en chain',
        'explanation' => 'Combinator Result.',
        'pro_tip' => 'Similar flatMap en otros langs.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'rs-web',
    'order' => 5,
    'title' => 'Web con Axum / Actix',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'Async HTTP en Rust.',
    'concepts' => 
    array (
      0 => 'axum',
      1 => 'tokio',
      2 => 'async',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tokio',
        'body' => 'Runtime async — #[tokio::main] async fn main().',
        'code' => 'async fn health() -> impl IntoResponse',
      ),
      1 => 
      array (
        'heading' => 'Axum',
        'body' => 'Router::new().route("/health", get(health)) — ergonómico sobre hyper.',
        'code' => 'async fn health() -> impl IntoResponse',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Runtime async Rust popular?',
        'options' => 
        array (
          0 => 'Tokio',
          1 => 'Node.js',
          2 => 'PHP-FPM',
        ),
        'answer' => 'Tokio',
        'explanation' => 'Ecosistema async maduro.',
        'pro_tip' => 'Actix-web alternativa performante.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Menciona async fn handler',
        'must_contain' => 
        array (
          0 => 'async',
        ),
        'hint' => 'async fn health() -> impl IntoResponse',
        'explanation' => 'Handlers async en Axum.',
        'pro_tip' => 'sqlx async DB queries.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'rs-prod',
    'order' => 6,
    'title' => 'Tests, WASM y producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'cargo test, release profile y WebAssembly.',
    'concepts' => 
    array (
      0 => 'test',
      1 => 'wasm',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tests',
        'body' => '#[test] fn it_works() — cargo test integrado, benchmarks con criterion.',
        'code' => '# Practica: rs-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'WASM',
        'body' => 'wasm-pack — Rust en browser o edge (Cloudflare Workers).',
        'code' => '# Practica: rs-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿cargo build --release?',
        'options' => 
        array (
          0 => 'Optimizaciones max — binario prod',
          1 => 'Debug only',
          2 => 'Sin cambios',
        ),
        'answer' => 'Optimizaciones max — binario prod',
        'explanation' => 'LTO y opt-level 3.',
        'pro_tip' => 'Cross-compile con target triple.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿WASM use case Rust?',
        'options' => 
        array (
          0 => 'Performance crítica en browser/edge',
          1 => 'Reemplazar HTML',
          2 => 'Solo mobile native',
        ),
        'answer' => 'Performance crítica en browser/edge',
        'explanation' => 'Juegos, crypto, image processing.',
        'pro_tip' => 'Compare con Go backend curso.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'rust-fundamentos-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Rust.',
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
        'body' => 'Aplica lo aprendido en Rust a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'rust-fundamentos-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Rust.',
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
        'body' => 'Aplica lo aprendido en Rust a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
