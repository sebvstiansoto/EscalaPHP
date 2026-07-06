<?php

declare(strict_types=1);

return [
    [
        'slug' => 'rs-intro',
        'order' => 1,
        'title' => 'Introducción a Rust',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Seguridad memoria sin GC.',
        'concepts' => ['rust', 'ownership', 'systems'],
        'sections' => [
            ['heading' => 'Rust', 'body' => '**Rust** — performance C/C++ con **borrow checker** que elimina segfaults en compile time. Usado en infra (Tokio, Deno core).'],
            ['heading' => 'Cargo', 'body' => 'cargo new, cargo build, cargo run — package manager y build tool integrado.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Rust garantiza memoria sin...?', 'options' => ['Garbage collector runtime', 'Compilador', 'Tests'], 'answer' => 'Garbage collector runtime', 'explanation' => 'Ownership en compile time.', 'pro_tip' => 'Curva aprendizaje steep — vale la pena.'],
            ['type' => 'contains', 'question' => 'Escribe fn main', 'must_contain' => ['fn main'], 'hint' => 'fn main() { println!("Hola"); }', 'explanation' => 'Entry point Rust.', 'pro_tip' => 'rustup instala toolchain.'],
        ],
    ],
    [
        'slug' => 'rs-ownership',
        'order' => 2,
        'title' => 'Ownership y borrowing',
        'level' => 'Fundamentos',
        'minutes' => 40,
        'summary' => 'Move, borrow y lifetimes intro.',
        'concepts' => ['ownership', 'borrow', 'move'],
        'sections' => [
            ['heading' => 'Ownership', 'body' => 'Cada valor un owner — al asignar, **move** (no copy implícito en tipos heap).'],
            ['heading' => 'Borrowing', 'body' => '&T inmutable, &mut T exclusivo — compiler rechaza data races.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿&mut reglas?', 'options' => ['Una sola referencia mut a la vez', 'Infinitas mut', 'Sin mut en Rust'], 'answer' => 'Una sola referencia mut a la vez', 'explanation' => 'Previene data races.', 'pro_tip' => 'Rc/Arc para shared ownership.'],
            ['type' => 'choice', 'question' => '¿Move semantics?', 'options' => ['Transfer ownership — original invalidado', 'Copy automático siempre', 'GC cleanup'], 'answer' => 'Transfer ownership — original invalidado', 'explanation' => 'String move vs i32 Copy.', 'pro_tip' => 'clone() explícito cuando necesitas copia.'],
        ],
    ],
    [
        'slug' => 'rs-structs',
        'order' => 3,
        'title' => 'Structs, enums y pattern matching',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Option, Result y match.',
        'concepts' => ['enum', 'option', 'result'],
        'sections' => [
            ['heading' => 'Option/Result', 'body' => 'Sin null — Option<T> y Result<T,E> fuerzan manejo explícito errores.', 'code' => "match result {\n    Ok(v) => println!(\"{}\", v),\n    Err(e) => eprintln!(\"error: {}\", e),\n}"],
            ['heading' => 'match', 'body' => 'Pattern matching exhaustivo — compiler exige cubrir todos casos enum.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿? operator?', 'options' => ['Propaga Err early return', 'Null coalescing', 'Comentario'], 'answer' => 'Propaga Err early return', 'explanation' => 'Sugar para Result handling.', 'pro_tip' => 'anyhow/thiserror crates ergonomía.'],
            ['type' => 'choice', 'question' => '¿Option::None equivale a...?', 'options' => ['Ausencia valor — no null pointer', 'Error fatal', 'Zero'], 'answer' => 'Ausencia valor — no null pointer', 'explanation' => 'Some(x) o None.', 'pro_tip' => 'unwrap() solo en prototypes/tests.'],
        ],
    ],
    [
        'slug' => 'rs-error',
        'order' => 4,
        'title' => 'Error handling idiomático',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Result chains y custom errors.',
        'concepts' => ['result', 'anyhow', 'thiserror'],
        'sections' => [
            ['heading' => 'Errores', 'body' => 'Libraries: thiserror define tipos; apps: anyhow para contexto flexible.'],
            ['heading' => 'No panics en libs', 'body' => 'panic! solo bugs programador — errores recuperables vía Result.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿panic! en library pública?', 'options' => ['Evitar — devolver Result', 'Siempre OK', 'Reemplaza Result'], 'answer' => 'Evitar — devolver Result', 'explanation' => 'Caller decide recovery.', 'pro_tip' => 'expect() con mensaje en dev.'],
            ['type' => 'choice', 'question' => '¿map_err?', 'options' => ['Transforma tipo error en chain', 'Ignora error', 'Panic auto'], 'answer' => 'Transforma tipo error en chain', 'explanation' => 'Combinator Result.', 'pro_tip' => 'Similar flatMap en otros langs.'],
        ],
    ],
    [
        'slug' => 'rs-web',
        'order' => 5,
        'title' => 'Web con Axum / Actix',
        'level' => 'Práctica',
        'minutes' => 40,
        'summary' => 'Async HTTP en Rust.',
        'concepts' => ['axum', 'tokio', 'async'],
        'sections' => [
            ['heading' => 'Tokio', 'body' => 'Runtime async — #[tokio::main] async fn main().'],
            ['heading' => 'Axum', 'body' => 'Router::new().route("/health", get(health)) — ergonómico sobre hyper.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Runtime async Rust popular?', 'options' => ['Tokio', 'Node.js', 'PHP-FPM'], 'answer' => 'Tokio', 'explanation' => 'Ecosistema async maduro.', 'pro_tip' => 'Actix-web alternativa performante.'],
            ['type' => 'contains', 'question' => 'Menciona async fn handler', 'must_contain' => ['async'], 'hint' => 'async fn health() -> impl IntoResponse', 'explanation' => 'Handlers async en Axum.', 'pro_tip' => 'sqlx async DB queries.'],
        ],
    ],
    [
        'slug' => 'rs-prod',
        'order' => 6,
        'title' => 'Tests, WASM y producción',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'cargo test, release profile y WebAssembly.',
        'concepts' => ['test', 'wasm', 'release'],
        'sections' => [
            ['heading' => 'Tests', 'body' => '#[test] fn it_works() — cargo test integrado, benchmarks con criterion.'],
            ['heading' => 'WASM', 'body' => 'wasm-pack — Rust en browser o edge (Cloudflare Workers).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿cargo build --release?', 'options' => ['Optimizaciones max — binario prod', 'Debug only', 'Sin cambios'], 'answer' => 'Optimizaciones max — binario prod', 'explanation' => 'LTO y opt-level 3.', 'pro_tip' => 'Cross-compile con target triple.'],
            ['type' => 'choice', 'question' => '¿WASM use case Rust?', 'options' => ['Performance crítica en browser/edge', 'Reemplazar HTML', 'Solo mobile native'], 'answer' => 'Performance crítica en browser/edge', 'explanation' => 'Juegos, crypto, image processing.', 'pro_tip' => 'Compare con Go backend curso.'],
        ],
    ],
];
