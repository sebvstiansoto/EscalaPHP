<?php

declare(strict_types=1);

return [
    [
        'slug' => 'dk-intro',
        'order' => 1,
        'title' => 'Qué es Docker y por qué importa',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Contenedores vs máquinas virtuales, imágenes y registro.',
        'concepts' => ['container', 'image', 'vm'],
        'sections' => [
            ['heading' => 'El problema', 'body' => '"En mi máquina funciona" — Docker empaqueta OS mínimo + runtime + tu app en una **imagen** portable.'],
            ['heading' => 'Contenedor vs VM', 'body' => 'Una VM virtualiza hardware entero. Un **contenedor** comparte el kernel — más ligero y rápido.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué es una imagen Docker?',
                'options' => ['Plantilla read-only para crear contenedores', 'Un virus', 'Un lenguaje de programación'],
                'answer' => 'Plantilla read-only para crear contenedores',
                'explanation' => 'Imagen = receta. Contenedor = instancia en ejecución.',
                'pro_tip' => 'Docker Hub es como npm/Packagist pero para imágenes.',
            ],
        ],
    ],
    [
        'slug' => 'dk-dockerfile',
        'order' => 2,
        'title' => 'Escribir un Dockerfile',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'FROM, COPY, RUN, EXPOSE y CMD paso a paso.',
        'concepts' => ['dockerfile', 'layer', 'build'],
        'sections' => [
            ['heading' => 'Anatomía', 'body' => '```dockerfile\nFROM php:8.3-cli\nWORKDIR /app\nCOPY . .\nCMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]\n```'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué instrucción Dockerfile copia archivos al contenedor?',
                'options' => ['COPY', 'PASTE', 'IMPORT'],
                'answer' => 'COPY',
                'explanation' => '**COPY** (o ADD) trae archivos del host a la imagen.',
                'pro_tip' => 'Ordena capas: dependencias primero, código al final — mejor caché.',
            ],
        ],
    ],
    [
        'slug' => 'dk-compose',
        'order' => 3,
        'title' => 'Docker Compose multi-servicio',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'Levantar app + BD + Redis con un solo comando.',
        'concepts' => ['compose', 'service', 'volume', 'network'],
        'sections' => [
            ['heading' => 'docker-compose.yml', 'body' => 'Define **services**, **volumes** y **networks**. `docker compose up` levanta todo.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué comando levanta servicios definidos en compose?',
                'options' => ['docker compose up', 'docker run all', 'kubectl start'],
                'answer' => 'docker compose up',
                'explanation' => 'Compose orquesta contenedores en tu máquina de desarrollo.',
                'pro_tip' => 'En producción a menudo usas K8s, pero Compose es perfecto para dev.',
            ],
        ],
    ],
    [
        'slug' => 'dk-php',
        'order' => 4,
        'title' => 'Containerizar PHP, Python o Node',
        'level' => 'Stack-agnostic',
        'minutes' => 30,
        'summary' => 'Docker no es solo PHP — el mismo concepto aplica a cualquier runtime.',
        'concepts' => ['multi-stack', 'runtime'],
        'sections' => [
            ['heading' => 'Universal', 'body' => 'Cambia `FROM php:8.3` por `FROM python:3.12` o `FROM node:20` — el flujo es idéntico.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Docker sirve solo para PHP?',
                'options' => ['No, es agnóstico al lenguaje', 'Sí, solo PHP', 'Solo Linux'],
                'answer' => 'No, es agnóstico al lenguaje',
                'explanation' => 'Docker empaqueta **cualquier** proceso que corra en Linux.',
                'pro_tip' => 'Por eso Docker es curso transversal en esta plataforma.',
            ],
        ],
    ],
    [
        'slug' => 'dk-volumes',
        'order' => 5,
        'title' => 'Volúmenes y persistencia',
        'level' => 'Práctica',
        'minutes' => 25,
        'summary' => 'Datos que sobreviven al reinicio del contenedor.',
        'concepts' => ['volume', 'bind-mount', 'persistence'],
        'sections' => [
            ['heading' => 'Volúmenes', 'body' => 'Los contenedores son efímeros. **Volumes** guardan BD, uploads y logs fuera del filesystem del contenedor.'],
            ['heading' => 'Bind mount', 'body' => 'Montas una carpeta del host en el contenedor — ideal para desarrollo en vivo.', 'code' => "volumes:\n  - ./data:/var/lib/postgresql/data"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde persisten los datos de PostgreSQL en Docker?', 'options' => ['En un volume o bind mount', 'Dentro del contenedor siempre', 'En la imagen'], 'answer' => 'En un volume o bind mount', 'explanation' => 'Sin volume, al borrar el contenedor pierdes la BD.', 'pro_tip' => 'Named volumes son más portables que bind mounts en prod.'],
            ['type' => 'contains', 'question' => 'Escribe un volumen en compose: ./app:/var/www/html', 'must_contain' => ['volumes', './app'], 'hint' => "volumes:\n  - ./app:/var/www/html", 'explanation' => 'Sincroniza código local con el contenedor.', 'pro_tip' => 'No montes node_modules — usa volume anónimo para eso.'],
        ],
    ],
    [
        'slug' => 'dk-network',
        'order' => 6,
        'title' => 'Redes entre contenedores',
        'level' => 'Práctica',
        'minutes' => 25,
        'summary' => 'DNS interno, puertos y comunicación app ↔ BD.',
        'concepts' => ['network', 'dns', 'ports'],
        'sections' => [
            ['heading' => 'Red Docker', 'body' => 'Contenedores en la misma red se llaman por **nombre de servicio** — `db`, `redis`, `app`.'],
            ['heading' => 'Puertos', 'body' => '`ports: "5432:5432"` expone al host. Dentro de la red usas el puerto interno sin mapear.', 'code' => "DATABASE_URL=postgres://user:pass@db:5432/mydb"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo se conecta la app al contenedor PostgreSQL en Compose?', 'options' => ['Hostname = nombre del servicio (db)', 'Siempre localhost', 'IP fija 127.0.0.1'], 'answer' => 'Hostname = nombre del servicio (db)', 'explanation' => 'Docker DNS resuelve el nombre del servicio a la IP del contenedor.', 'pro_tip' => 'Nunca hardcodees IPs de contenedores.'],
            ['type' => 'contains', 'question' => 'Escribe ports: "8000:8000" en un servicio', 'must_contain' => ['ports', '8000'], 'hint' => 'ports:\n  - "8000:8000"', 'explanation' => 'host:contenedor — accedes desde tu máquina al puerto 8000.', 'pro_tip' => 'En prod, solo el reverse proxy expone puertos al exterior.'],
        ],
    ],
    [
        'slug' => 'dk-prod',
        'order' => 7,
        'title' => 'Docker en producción',
        'level' => 'Avanzado',
        'minutes' => 30,
        'summary' => 'Multi-stage builds, .dockerignore y seguridad.',
        'concepts' => ['multi-stage', 'dockerignore', 'security'],
        'sections' => [
            ['heading' => 'Multi-stage', 'body' => 'Compilas en una imagen grande y copias solo el artefacto a una imagen mínima — menos superficie de ataque.'],
            ['heading' => '.dockerignore', 'body' => 'Excluye `.git`, `node_modules`, `.env` del contexto de build — builds más rápidos y seguros.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Para qué sirve .dockerignore?', 'options' => ['Excluir archivos del build context', 'Ignorar contenedores', 'Desactivar Docker'], 'answer' => 'Excluir archivos del build context', 'explanation' => 'Evita copiar secretos y carpetas enormes a la imagen.', 'pro_tip' => 'Nunca copies .env a la imagen — usa secrets del orquestador.'],
            ['type' => 'choice', 'question' => '¿Ventaja de multi-stage build?', 'options' => ['Imagen final más pequeña y segura', 'Más capas siempre', 'Solo para PHP'], 'answer' => 'Imagen final más pequeña y segura', 'explanation' => 'Solo el binario/artefacto llega a producción.', 'pro_tip' => 'FROM node AS build ... FROM nginx AS prod es patrón común.'],
        ],
    ],
];
