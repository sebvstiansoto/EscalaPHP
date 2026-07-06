# EscalaPHP — Plataforma multi-stack con mentor IA

> **Aprende a programar en cualquier stack — viendo, ejecutando y construyendo.**

Plataforma de aprendizaje con **65 cursos**, **420+ lecciones**, mentor interactivo, glosario de 620+ términos y guía profesional del developer.

## Inicio rápido

```bat
start.bat
```

Abre **http://localhost:8000**

## Las 4 patas del aprendizaje

| Pata | Pregunta | Dónde |
|------|----------|-------|
| **Referencia** | ¿Qué es y cómo encaja? | [/glosario](http://localhost:8000/glosario) · [/developer](http://localhost:8000/developer) |
| **Práctica** | ¿Cómo lo hago? | Cursos + [Modo Mentor](http://localhost:8000/) · [Laboratorio](http://localhost:8000/laboratorio) |
| **Ruta** | ¿Qué estudiar y en qué orden? | [/rutas](http://localhost:8000/rutas) · [/checklist-developer](http://localhost:8000/checklist-developer) |
| **Progreso** | ¿Cómo voy? | [/dashboard](http://localhost:8000/dashboard) · [/perfil](http://localhost:8000/perfil) |

El **panel de aprendizaje** (`/dashboard`) y el **perfil** (`/perfil`) unifican las cuatro patas en una sola vista.

## Catálogo

### Cursos (65 disponibles)

| Categoría | Ejemplos |
|-----------|----------|
| **Backend** | PHP, Python, Laravel, FastAPI, Go, Java Spring, .NET, Node.js, gRPC, colas |
| **Frontend** | HTML/CSS/JS, React, Vue, Angular, Svelte, Next.js, Tailwind, PWA, a11y |
| **DevOps** | Docker, Kubernetes, Terraform, Ansible, Helm, Nginx, CI/CD, observabilidad |
| **Cloud** | AWS, GCP, Azure |
| **Datos** | SQL, PostgreSQL, MongoDB, Elasticsearch, Kafka, Redis |
| **Seguridad** | OWASP, ethical hacking, OAuth |
| **Mobile / Desktop** | React Native, Flutter, Kotlin, Electron |
| **Arquitectura** | Patrones, clean code, system design, arquitectura de software |
| **IA** | LLMs, RAG, desarrollo con IA |
| **Otros** | WordPress, Web3, Playwright, Stripe, WebRTC |

Cada curso incluye lecciones enriquecidas, ejercicios validados y mentor con pasos de teoría, demo en vivo, pair programming y práctica.

### Rutas de aprendizaje (20)

Rutas guiadas con orden óptimo de cursos: backend, full-stack, DevOps, PHP enterprise, Python, AI developer, senior architect, QA, multi-cloud, etc.

Ver todas en `/rutas`.

### Glosario (620+ términos)

15 categorías: fundamentos, PHP, Python, JS/TS, frontend, backend, BD, Git, DevOps, seguridad, arquitectura, patrones, entrevistas, cloud, metodología.

### Guía del developer

| Sección | URL |
|---------|-----|
| Hub | `/developer` |
| Mapa interactivo (flujo HTTP → deploy) | `/mapa-developer` |
| Checklist junior / mid / senior | `/checklist-developer` |
| Conexiones entre conceptos | `/conexiones` |
| Troubleshooting (500, CORS, Docker…) | `/troubleshooting` |
| Un día en la vida del dev | `/dia-developer` |

## Rutas principales

| URL | Qué es |
|-----|--------|
| `/` | Catálogo por categorías |
| `/rutas` | Rutas de aprendizaje guiadas |
| `/buscar?q=...` | Búsqueda global (cursos, glosario, guías) |
| `/curso?slug=...` | Módulos de un curso |
| `/leccion?curso=...&slug=...` | Modo Mentor paso a paso |
| `/laboratorio` | Playground PHP, Python, JavaScript |
| `/glosario` | Glosario interactivo por categorías |
| `/developer` | Guía del developer |
| `/dashboard` | Panel unificado (4 patas) |
| `/perfil` | XP, rachas, logros, certificados |
| `/precios` | Planes Free / Pro |
| `/admin` | Panel de administración |
| `/health` | Health check (JSON) |

Ver [DEPLOY.md](DEPLOY.md) para producción.

### Producción rápida (Docker)

```bash
cp .env.production.example .env
# Edita APP_URL, APP_KEY, ADMIN_PASSWORD
./scripts/deploy.sh          # HTTP
./scripts/deploy.sh --tls    # HTTPS con Caddy
```

Windows: `scripts\deploy.bat`

Verifica: `curl http://localhost/health`

### Railway (sin VPS ni dominio)

Railway te da URL `https://tu-app.up.railway.app` gratis.

```bash
# CLI
npm i -g @railway/cli
railway login
railway init
./scripts/railway-deploy.sh
railway domain
```

O conecta el repo en [railway.com/new](https://railway.com/new).

Guía completa: **[RAILWAY.md](RAILWAY.md)**

## Método de aprendizaje

1. **Elige una ruta** en `/rutas` o un curso en la home
2. **Consulta el glosario** cuando aparezca vocabulario nuevo
3. **Sigue al mentor** — teoría, demo, pair programming, ejercicios
4. **Marca el checklist** del developer según tu nivel
5. **Revisa el panel** en `/dashboard` para ver progreso y siguiente acción

## Excelencia académica

- **Lecciones enriquecidas** automáticamente con resumen, vocabulario y checklist de dominio
- **Mentor académico** (`AcademicMentorBuilder`): 9–12 pasos por lección con contexto real, glosario, demo y ejercicios
- Mentors artesanales de PHP desde cero se conservan; el resto se eleva al mismo estándar en runtime

Regenerar archivos de mentor en disco (opcional):

```bash
php tools/regenerate-mentors-excellence.php
php tools/regenerate-mentors-excellence.php --force
```

## Requisitos

PHP portable en `tools/php/`. Ejecuta `start.bat`.

## Stack

PHP 8.3 · SQLite · Mentor interactivo · Gamificación (XP, rachas, logros) · Certificados · Exámenes · Capstones
