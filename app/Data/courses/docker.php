<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'dk-intro',
    'order' => 1,
    'title' => 'Qué es Docker y por qué importa',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Contenedores vs máquinas virtuales, imágenes y registro.',
    'concepts' => 
    array (
      0 => 'container',
      1 => 'image',
      2 => 'vm',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El problema',
        'body' => '"En mi máquina funciona" — Docker empaqueta OS mínimo + runtime + tu app en una **imagen** portable.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Contenedor vs VM',
        'body' => 'Una VM virtualiza hardware entero. Un **contenedor** comparte el kernel — más ligero y rápido.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es una imagen Docker?',
        'options' => 
        array (
          0 => 'Plantilla read-only para crear contenedores',
          1 => 'Un virus',
          2 => 'Un lenguaje de programación',
        ),
        'answer' => 'Plantilla read-only para crear contenedores',
        'explanation' => 'Imagen = receta. Contenedor = instancia en ejecución.',
        'pro_tip' => 'Docker Hub es como npm/Packagist pero para imágenes.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'dk-dockerfile',
    'order' => 2,
    'title' => 'Escribir un Dockerfile',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'FROM, COPY, RUN, EXPOSE y CMD paso a paso.',
    'concepts' => 
    array (
      0 => 'dockerfile',
      1 => 'layer',
      2 => 'build',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Anatomía',
        'body' => '```dockerfile\\nFROM php:8.3-cli\\nWORKDIR /app\\nCOPY . .\\nCMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]\\n```',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-dockerfile
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué instrucción Dockerfile copia archivos al contenedor?',
        'options' => 
        array (
          0 => 'COPY',
          1 => 'PASTE',
          2 => 'IMPORT',
        ),
        'answer' => 'COPY',
        'explanation' => '**COPY** (o ADD) trae archivos del host a la imagen.',
        'pro_tip' => 'Ordena capas: dependencias primero, código al final — mejor caché.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'dk-compose',
    'order' => 3,
    'title' => 'Docker Compose multi-servicio',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Levantar app + BD + Redis con un solo comando.',
    'concepts' => 
    array (
      0 => 'compose',
      1 => 'service',
      2 => 'volume',
      3 => 'network',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'docker-compose.yml',
        'body' => 'Define **services**, **volumes** y **networks**. `docker compose up` levanta todo.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-compose
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando levanta servicios definidos en compose?',
        'options' => 
        array (
          0 => 'docker compose up',
          1 => 'docker run all',
          2 => 'kubectl start',
        ),
        'answer' => 'docker compose up',
        'explanation' => 'Compose orquesta contenedores en tu máquina de desarrollo.',
        'pro_tip' => 'En producción a menudo usas K8s, pero Compose es perfecto para dev.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'dk-php',
    'order' => 4,
    'title' => 'Containerizar PHP, Python o Node',
    'level' => 'Stack-agnostic',
    'minutes' => 30,
    'summary' => 'Docker no es solo PHP — el mismo concepto aplica a cualquier runtime.',
    'concepts' => 
    array (
      0 => 'multi-stack',
      1 => 'runtime',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Universal',
        'body' => 'Cambia `FROM php:8.3` por `FROM python:3.12` o `FROM node:20` — el flujo es idéntico.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-php
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Docker sirve solo para PHP?',
        'options' => 
        array (
          0 => 'No, es agnóstico al lenguaje',
          1 => 'Sí, solo PHP',
          2 => 'Solo Linux',
        ),
        'answer' => 'No, es agnóstico al lenguaje',
        'explanation' => 'Docker empaqueta **cualquier** proceso que corra en Linux.',
        'pro_tip' => 'Por eso Docker es curso transversal en esta plataforma.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'dk-volumes',
    'order' => 5,
    'title' => 'Volúmenes y persistencia',
    'level' => 'Práctica',
    'minutes' => 25,
    'summary' => 'Datos que sobreviven al reinicio del contenedor.',
    'concepts' => 
    array (
      0 => 'volume',
      1 => 'bind-mount',
      2 => 'persistence',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Volúmenes',
        'body' => 'Los contenedores son efímeros. **Volumes** guardan BD, uploads y logs fuera del filesystem del contenedor.',
        'code' => 'volumes:
  - ./app:/var/www/html',
      ),
      1 => 
      array (
        'heading' => 'Bind mount',
        'body' => 'Montas una carpeta del host en el contenedor — ideal para desarrollo en vivo.',
        'code' => 'volumes:
  - ./data:/var/lib/postgresql/data',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde persisten los datos de PostgreSQL en Docker?',
        'options' => 
        array (
          0 => 'En un volume o bind mount',
          1 => 'Dentro del contenedor siempre',
          2 => 'En la imagen',
        ),
        'answer' => 'En un volume o bind mount',
        'explanation' => 'Sin volume, al borrar el contenedor pierdes la BD.',
        'pro_tip' => 'Named volumes son más portables que bind mounts en prod.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un volumen en compose: ./app:/var/www/html',
        'must_contain' => 
        array (
          0 => 'volumes',
          1 => './app',
        ),
        'hint' => 'volumes:
  - ./app:/var/www/html',
        'explanation' => 'Sincroniza código local con el contenedor.',
        'pro_tip' => 'No montes node_modules — usa volume anónimo para eso.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'dk-network',
    'order' => 6,
    'title' => 'Redes entre contenedores',
    'level' => 'Práctica',
    'minutes' => 25,
    'summary' => 'DNS interno, puertos y comunicación app ↔ BD.',
    'concepts' => 
    array (
      0 => 'network',
      1 => 'dns',
      2 => 'ports',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Red Docker',
        'body' => 'Contenedores en la misma red se llaman por **nombre de servicio** — `db`, `redis`, `app`.',
        'code' => 'ports:\\n  - "8000:8000"',
      ),
      1 => 
      array (
        'heading' => 'Puertos',
        'body' => '`ports: "5432:5432"` expone al host. Dentro de la red usas el puerto interno sin mapear.',
        'code' => 'DATABASE_URL=postgres://user:pass@db:5432/mydb',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo se conecta la app al contenedor PostgreSQL en Compose?',
        'options' => 
        array (
          0 => 'Hostname = nombre del servicio (db)',
          1 => 'Siempre localhost',
          2 => 'IP fija 127.0.0.1',
        ),
        'answer' => 'Hostname = nombre del servicio (db)',
        'explanation' => 'Docker DNS resuelve el nombre del servicio a la IP del contenedor.',
        'pro_tip' => 'Nunca hardcodees IPs de contenedores.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe ports: "8000:8000" en un servicio',
        'must_contain' => 
        array (
          0 => 'ports',
          1 => '8000',
        ),
        'hint' => 'ports:\\n  - "8000:8000"',
        'explanation' => 'host:contenedor — accedes desde tu máquina al puerto 8000.',
        'pro_tip' => 'En prod, solo el reverse proxy expone puertos al exterior.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'dk-prod',
    'order' => 7,
    'title' => 'Docker en producción',
    'level' => 'Avanzado',
    'minutes' => 30,
    'summary' => 'Multi-stage builds, .dockerignore y seguridad.',
    'concepts' => 
    array (
      0 => 'multi-stage',
      1 => 'dockerignore',
      2 => 'security',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Multi-stage',
        'body' => 'Compilas en una imagen grande y copias solo el artefacto a una imagen mínima — menos superficie de ataque.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-prod
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => '.dockerignore',
        'body' => 'Excluye `.git`, `node_modules`, `.env` del contexto de build — builds más rápidos y seguros.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-prod
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve .dockerignore?',
        'options' => 
        array (
          0 => 'Excluir archivos del build context',
          1 => 'Ignorar contenedores',
          2 => 'Desactivar Docker',
        ),
        'answer' => 'Excluir archivos del build context',
        'explanation' => 'Evita copiar secretos y carpetas enormes a la imagen.',
        'pro_tip' => 'Nunca copies .env a la imagen — usa secrets del orquestador.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja de multi-stage build?',
        'options' => 
        array (
          0 => 'Imagen final más pequeña y segura',
          1 => 'Más capas siempre',
          2 => 'Solo para PHP',
        ),
        'answer' => 'Imagen final más pequeña y segura',
        'explanation' => 'Solo el binario/artefacto llega a producción.',
        'pro_tip' => 'FROM node AS build ... FROM nginx AS prod es patrón común.',
      ),
    ),
  ),
  array (
    'slug' => 'dk-security',
    'order' => 8,
    'title' => 'Seguridad de contenedores',
    'level' => 'Seguridad',
    'minutes' => 30,
    'summary' => 'Usuario non-root, scan y secrets.',
    'concepts' => 
    array (
      0 => 'non-root',
      1 => 'scan',
      2 => 'secrets',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Non-root',
        'body' => 'USER app en Dockerfile — no corras como root en prod. Capabilities mínimas.',
        'code' => 'FROM php:8.3-fpm
RUN useradd -m appuser
USER appuser
WORKDIR /app',
      ),
      1 => 
      array (
        'heading' => 'Scanning',
        'body' => 'docker scout, Trivy — escanea CVEs en imágenes CI. Secrets via Docker secrets o K8s Secrets, nunca en imagen.',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué non-root container?',
        'options' => 
        array (
          0 => 'Reduce blast radius si comprometido',
          1 => 'Más rápido',
          2 => 'Requerido PHP',
        ),
        'answer' => 'Reduce blast radius si comprometido',
        'explanation' => 'Principle least privilege.',
        'pro_tip' => 'Curso seguridad-web defense in depth.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Secrets en imagen Docker?',
        'options' => 
        array (
          0 => 'Nunca — runtime injection',
          1 => 'Siempre COPY .env',
          2 => 'En Dockerfile ENV prod',
        ),
        'answer' => 'Nunca — runtime injection',
        'explanation' => 'Layers son inspectables.',
        'pro_tip' => 'Use --secret en build o orchestrator secrets.',
      ),
    ),
  ),
);
