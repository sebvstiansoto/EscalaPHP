<?php

declare(strict_types=1);

return [
    ['type' => 'mentor_say', 'title' => 'Velocidad sin repetir trabajo', 'body' => 'Calcular lo mismo 1000 veces es desperdicio. La **caché** guarda el resultado listo.', 'emoji' => '⚡'],
    ['type' => 'visual', 'visual' => 'cache-flow', 'title' => 'Flujo con caché', 'body' => 'Petición → ¿Está en caché? → Sí: respuesta instantánea. No: calcula, guarda en caché, responde.'],
    ['type' => 'show_file', 'file' => 'app/Cache.php', 'title' => 'Caché en EscalaPHP', 'body' => 'Esta clase guarda JSON en storage/cache/. En producción: Redis.', 'code' => "\$cache->set('lecciones', \$data, 3600);\n\$data = \$cache->get('lecciones');"],
    ['type' => 'live_demo', 'title' => 'Analogía: restaurante', 'body' => 'Sin caché = cocinar cada plato desde cero. Con caché = plato pre-preparado listo para servir.', 'demo_code' => "echo 'Sin caché: 800ms. Con caché: 12ms.';"],
    ['type' => 'mentor_say', 'title' => 'Cuándo cachear', 'body' => 'Datos que cambian poco y se leen mucho: catálogos, configuración, listados públicos.', 'emoji' => '🎯'],
    ['type' => 'exercise', 'title' => 'Tu turno — caché', 'body' => '¿Qué problema resuelve principalmente la caché?', 'exercise_index' => 0],
    ['type' => 'project', 'title' => 'Mini-proyecto: Prueba la caché', 'body' => 'Lee app/Cache.php y piensa qué datos de EscalaPHP cachearías.'],
    ['type' => 'complete', 'title' => '¡Caché dominada!', 'body' => 'Respondes 10x más rápido. Siguiente: colas de trabajo.', 'emoji' => '🚀'],
];
