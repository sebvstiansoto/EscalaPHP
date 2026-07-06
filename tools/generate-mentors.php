<?php

declare(strict_types=1);

/**
 * Genera scripts de mentor para lecciones sin archivo custom.
 * Uso único: php tools/generate-mentors.php
 */

$root = dirname(__DIR__);
$mentorDir = $root . '/app/Data/mentor';
$courses = [
    'php-enterprise' => $root . '/app/Data/courses/php-enterprise.php',
    'docker' => $root . '/app/Data/courses/docker.php',
    'html-css-js' => $root . '/app/Data/courses/html-css-js.php',
    'react-frontend' => $root . '/app/Data/courses/react-frontend.php',
    'astro-web' => $root . '/app/Data/courses/astro-web.php',
    'git-fundamentos' => $root . '/app/Data/courses/git-fundamentos.php',
    'cicd' => $root . '/app/Data/courses/cicd.php',
    'kubernetes' => $root . '/app/Data/courses/kubernetes.php',
    'sql-fundamentos' => $root . '/app/Data/courses/sql-fundamentos.php',
    'typescript-fundamentos' => $root . '/app/Data/courses/typescript-fundamentos.php',
    'nodejs-backend' => $root . '/app/Data/courses/nodejs-backend.php',
    'linux-bash' => $root . '/app/Data/courses/linux-bash.php',
    'python-backend' => $root . '/app/Data/courses/python-backend.php',
    'laravel-fundamentos' => $root . '/app/Data/courses/laravel-fundamentos.php',
    'fastapi-avanzado' => $root . '/app/Data/courses/fastapi-avanzado.php',
    'seguridad-web' => $root . '/app/Data/courses/seguridad-web.php',
    'redis-cache' => $root . '/app/Data/courses/redis-cache.php',
    'postgresql' => $root . '/app/Data/courses/postgresql.php',
    'testing-php' => $root . '/app/Data/courses/testing-php.php',
    'tailwind-css' => $root . '/app/Data/courses/tailwind-css.php',
    'patrones-diseno' => $root . '/app/Data/courses/patrones-diseno.php',
    'symfony-fundamentos' => $root . '/app/Data/courses/symfony-fundamentos.php',
    'nginx-proxy' => $root . '/app/Data/courses/nginx-proxy.php',
    'django-rest' => $root . '/app/Data/courses/django-rest.php',
    'algoritmos-entrevista' => $root . '/app/Data/courses/algoritmos-entrevista.php',
    'websockets-realtime' => $root . '/app/Data/courses/websockets-realtime.php',
    'graphql-api' => $root . '/app/Data/courses/graphql-api.php',
    'arquitectura-software' => $root . '/app/Data/courses/arquitectura-software.php',
    'nextjs-fullstack' => $root . '/app/Data/courses/nextjs-fullstack.php',
    'mensajeria-colas' => $root . '/app/Data/courses/mensajeria-colas.php',
    'aws-cloud-basico' => $root . '/app/Data/courses/aws-cloud-basico.php',
    'ethical-hacking' => $root . '/app/Data/courses/ethical-hacking.php',
    'go-backend' => $root . '/app/Data/courses/go-backend.php',
    'java-spring' => $root . '/app/Data/courses/java-spring.php',
    'mongodb-nosql' => $root . '/app/Data/courses/mongodb-nosql.php',
    'vue-frontend' => $root . '/app/Data/courses/vue-frontend.php',
    'react-native-mobile' => $root . '/app/Data/courses/react-native-mobile.php',
    'system-design' => $root . '/app/Data/courses/system-design.php',
    'terraform-iac' => $root . '/app/Data/courses/terraform-iac.php',
    'kafka-eventos' => $root . '/app/Data/courses/kafka-eventos.php',
    'grpc-apis' => $root . '/app/Data/courses/grpc-apis.php',
    'oauth-openid' => $root . '/app/Data/courses/oauth-openid.php',
    'observabilidad' => $root . '/app/Data/courses/observabilidad.php',
    'ai-llm-desarrollo' => $root . '/app/Data/courses/ai-llm-desarrollo.php',
    'rust-fundamentos' => $root . '/app/Data/courses/rust-fundamentos.php',
    'angular-fundamentos' => $root . '/app/Data/courses/angular-fundamentos.php',
    'clean-code' => $root . '/app/Data/courses/clean-code.php',
    'stripe-pagos' => $root . '/app/Data/courses/stripe-pagos.php',
    'flutter-mobile' => $root . '/app/Data/courses/flutter-mobile.php',
    'csharp-dotnet' => $root . '/app/Data/courses/csharp-dotnet.php',
    'kotlin-android' => $root . '/app/Data/courses/kotlin-android.php',
    'elasticsearch-busqueda' => $root . '/app/Data/courses/elasticsearch-busqueda.php',
    'gcp-cloud-basico' => $root . '/app/Data/courses/gcp-cloud-basico.php',
    'azure-cloud-basico' => $root . '/app/Data/courses/azure-cloud-basico.php',
    'helm-kubernetes' => $root . '/app/Data/courses/helm-kubernetes.php',
    'ansible-automation' => $root . '/app/Data/courses/ansible-automation.php',
    'webrtc-comunicacion' => $root . '/app/Data/courses/webrtc-comunicacion.php',
    'pwa-offline' => $root . '/app/Data/courses/pwa-offline.php',
    'accesibilidad-web' => $root . '/app/Data/courses/accesibilidad-web.php',
    'wordpress-dev' => $root . '/app/Data/courses/wordpress-dev.php',
    'web3-blockchain' => $root . '/app/Data/courses/web3-blockchain.php',
    'playwright-e2e' => $root . '/app/Data/courses/playwright-e2e.php',
    'svelte-fundamentos' => $root . '/app/Data/courses/svelte-fundamentos.php',
    'electron-desktop' => $root . '/app/Data/courses/electron-desktop.php',
    'deno-bun' => $root . '/app/Data/courses/deno-bun.php',
    'supabase-backend' => $root . '/app/Data/courses/supabase-backend.php',
    'figma-devs' => $root . '/app/Data/courses/figma-devs.php',
    'agile-scrum' => $root . '/app/Data/courses/agile-scrum.php',
    'technical-writing' => $root . '/app/Data/courses/technical-writing.php',
    'cert-aws-saa' => $root . '/app/Data/courses/cert-aws-saa.php',
    'cert-cka' => $root . '/app/Data/courses/cert-cka.php',
    'cert-azure-fund' => $root . '/app/Data/courses/cert-azure-fund.php',
    'prisma-orm' => $root . '/app/Data/courses/prisma-orm.php',
    'firebase-backend' => $root . '/app/Data/courses/firebase-backend.php',
    'openapi-documentacion' => $root . '/app/Data/courses/openapi-documentacion.php',
    'event-sourcing-cqrs' => $root . '/app/Data/courses/event-sourcing-cqrs.php',
    'php-avanzado' => $root . '/app/Data/courses/php-avanzado.php',
    'networking-devops' => $root . '/app/Data/courses/networking-devops.php',
    'producto-tech' => $root . '/app/Data/courses/producto-tech.php',
];

$projects = require $root . '/app/Data/projects.php';

$intros = [
    'ep-composer' => ['emoji' => '📦', 'body' => 'Composer es el estándar en PHP enterprise. Hoy dominas dependencias y autoload.'],
    'ep-git' => ['emoji' => '🔀', 'body' => 'En equipos reales todo pasa por ramas y Pull Requests. Sin Git no hay empresa.'],
    'ep-laravel-pro' => ['emoji' => '🔴', 'body' => 'Laravel es el framework PHP más usado en startups y empresas. Vamos a producción.'],
    'ep-symfony' => ['emoji' => '🟣', 'body' => 'Symfony es la base de muchos proyectos enterprise en Europa. DI y componentes reutilizables.'],
    'ep-postgresql' => ['emoji' => '🐘', 'body' => 'PostgreSQL es la BD de producción por excelencia. SQLite es para dev, Postgres para escalar.'],
    'ep-redis' => ['emoji' => '⚡', 'body' => 'Redis acelera tu app con caché y colas. Sin Redis, muchas apps enterprise no escalan.'],
    'ep-docker' => ['emoji' => '🐳', 'body' => 'Docker en enterprise: mismo entorno en dev, staging y producción.'],
    'ep-nginx' => ['emoji' => '🌐', 'body' => 'Nginx + PHP-FPM es el stack clásico de hosting PHP a escala.'],
    'ep-cicd' => ['emoji' => '🔄', 'body' => 'CI/CD automatiza tests y deploy. Cada push a main puede ir a producción con confianza.'],
    'ep-kubernetes' => ['emoji' => '☸️', 'body' => 'Kubernetes orquesta contenedores a escala. Saber cuándo usarlo (y cuándo no) es clave.'],
    'ep-arquitectura' => ['emoji' => '🏛️', 'body' => 'Arquitectura: monolito modular vs microservicios. La decisión más importante de un senior.'],
    'dk-intro' => ['emoji' => '🐳', 'body' => 'Docker resuelve "en mi máquina funciona". Empaquetas app + runtime en una imagen portable.'],
    'dk-dockerfile' => ['emoji' => '📝', 'body' => 'El Dockerfile es la receta de tu imagen. Cada instrucción es una capa cacheable.'],
    'dk-compose' => ['emoji' => '🎼', 'body' => 'Compose levanta app + BD + Redis con un solo comando. Dev local como producción.'],
    'dk-php' => ['emoji' => '🔧', 'body' => 'Docker no es solo PHP — el mismo patrón sirve para Python, Node y cualquier stack.'],
    'web-html' => ['emoji' => '🌐', 'body' => 'HTML es la base de toda la web. Hoy aprendes estructura semántica y accesible.'],
    'web-css' => ['emoji' => '🎨', 'body' => 'CSS transforma HTML en interfaces modernas. Flexbox es tu mejor aliado.'],
    'web-js' => ['emoji' => '⚡', 'body' => 'JavaScript da vida al navegador. Vas a ejecutar código real en tu browser.'],
    'rx-jsx' => ['emoji' => '⚛️', 'body' => 'React construye UIs con componentes. Tu primer paso: entender JSX.'],
    'rx-state' => ['emoji' => '🔁', 'body' => 'El estado es el corazón de React. useState hace que la UI reaccione a cambios.'],
    'rx-router' => ['emoji' => '🗺️', 'body' => 'React Router convierte tu app en una SPA con múltiples vistas sin recargar.'],
    'rx-api' => ['emoji' => '🔗', 'body' => 'Aquí conectas frontend y backend: React consume tu API PHP o Python vía JSON.'],
    'as-intro' => ['emoji' => '🚀', 'body' => 'Astro genera sitios ultrarrápidos con HTML estático. Menos JS = mejor experiencia.'],
    'as-islands' => ['emoji' => '🏝️', 'body' => 'Las islas permiten React solo donde hace falta. El resto de la página es HTML puro.'],
    'as-deploy' => ['emoji' => '☁️', 'body' => 'Deploy de Astro: build estático a Vercel o Netlify en minutos.'],
    'git-basics' => ['emoji' => '📦', 'body' => 'Git es la herramienta #1 de todo desarrollador. Hoy dominas add, commit y log.'],
    'git-branch' => ['emoji' => '🌿', 'body' => 'Las ramas aíslan tu trabajo. Feature branches son el estándar en la industria.'],
    'git-pr' => ['emoji' => '🔀', 'body' => 'Pull Requests = calidad de código en equipo. Nunca merges sin review.'],
    'ci-tests' => ['emoji' => '🔄', 'body' => 'CI corre tests en cada push. Si rompes algo, lo sabes antes de producción.'],
    'ci-deploy' => ['emoji' => '🚀', 'body' => 'CD despliega automáticamente cuando CI pasa. Staging primero, siempre.'],
    'ci-docker' => ['emoji' => '🐳', 'body' => 'Integra Docker en tu pipeline: build, tag y push en cada release.'],
    'k8s-intro' => ['emoji' => '☸️', 'body' => 'Kubernetes orquesta contenedores a escala. Aprende cuándo tiene sentido.'],
    'k8s-deploy' => ['emoji' => '📦', 'body' => 'Deployments declaran réplicas y rolling updates sin downtime.'],
    'k8s-ingress' => ['emoji' => '🌐', 'body' => 'Ingress expone tu cluster al mundo con HTTPS y routing por host.'],
    'sql-select' => ['emoji' => '🗄️', 'body' => 'SQL lee datos. Tus consultas corren en SQLite real con tablas de práctica.'],
    'sql-joins' => ['emoji' => '🔗', 'body' => 'JOINs conectan tablas relacionadas — la habilidad más importante en SQL.'],
    'sql-index' => ['emoji' => '⚡', 'body' => 'Índices convierten consultas lentas en rápidas. EXPLAIN es tu microscopio.'],
    'sql-tx' => ['emoji' => '🔒', 'body' => 'Transacciones ACID garantizan que los datos nunca queden a medias.'],
    'web-forms' => ['emoji' => '📝', 'body' => 'Formularios conectan usuarios con tu app — validación en cliente y servidor.'],
    'web-grid' => ['emoji' => '📐', 'body' => 'CSS Grid domina layouts de dos dimensiones — dashboards y páginas complejas.'],
    'web-dom' => ['emoji' => '🌳', 'body' => 'El DOM es el árbol que JavaScript manipula — sin frameworks, vanilla primero.'],
    'web-fetch' => ['emoji' => '🔗', 'body' => 'fetch() une tu frontend con cualquier API backend.'],
    'web-async' => ['emoji' => '⏳', 'body' => 'async/await hace código asíncrono legible — esencial en JS moderno.'],
    'git-remote' => ['emoji' => '☁️', 'body' => 'push y pull sincronizan tu código con GitHub y el equipo.'],
    'git-conflict' => ['emoji' => '⚔️', 'body' => 'Conflictos son normales — aprender a resolverlos es skill senior.'],
    'git-stash' => ['emoji' => '📥', 'body' => 'stash guarda WIP sin commitear — cambias de contexto sin perder trabajo.'],
    'git-rebase' => ['emoji' => '📜', 'body' => 'Rebase mantiene historial limpio — con reglas claras de cuándo usarlo.'],
    'dk-volumes' => ['emoji' => '💾', 'body' => 'Sin volúmenes, tus datos desaparecen al reiniciar el contenedor.'],
    'dk-network' => ['emoji' => '🕸️', 'body' => 'La red Docker conecta app, BD y Redis por nombre de servicio.'],
    'dk-prod' => ['emoji' => '🏭', 'body' => 'Multi-stage y .dockerignore son obligatorios en producción seria.'],
    'k8s-config' => ['emoji' => '🔐', 'body' => 'ConfigMaps y Secrets separan config de código en el cluster.'],
    'k8s-hpa' => ['emoji' => '📈', 'body' => 'HPA escala pods automáticamente según la carga real.'],
    'k8s-ops' => ['emoji' => '🔧', 'body' => 'kubectl logs y rollout undo — tu cinturón de herramientas en incidentes.'],
    'ci-matrix' => ['emoji' => '🧪', 'body' => 'Matrix tests en PHP 8.2 y 8.3 en paralelo — cero sorpresas en prod.'],
    'ci-env' => ['emoji' => '🚦', 'body' => 'Environments con approvals protegen producción de deploys accidentales.'],
    'ci-rollback' => ['emoji' => '⏪', 'body' => 'Smoke tests y rollback automático — duerme tranquilo tras cada deploy.'],
    'as-routing' => ['emoji' => '🗺️', 'body' => 'File-based routing en Astro — simple y poderoso.'],
    'as-content' => ['emoji' => '📚', 'body' => 'Content Collections: blogs y docs con Markdown tipado.'],
    'as-seo' => ['emoji' => '🔍', 'body' => 'SEO y performance son el superpoder natural de Astro.'],
    'sql-agg' => ['emoji' => '📊', 'body' => 'GROUP BY y agregaciones resumen millones de filas en una respuesta.'],
    'sql-ddl' => ['emoji' => '🏗️', 'body' => 'CREATE TABLE y migraciones versionan el esquema como Git versiona código.'],
    'sql-design' => ['emoji' => '📐', 'body' => 'Normalización vs desnormalización — decisiones de arquitectura de datos.'],
    'ts-intro' => ['emoji' => '🔷', 'body' => 'TypeScript detecta errores antes de ejecutar — JS con red de seguridad.'],
    'ts-types' => ['emoji' => '🏷️', 'body' => 'Tipos básicos y inferencia — la base de todo proyecto TS serio.'],
    'ts-interfaces' => ['emoji' => '📋', 'body' => 'Interfaces modelan objetos, APIs y props de React.'],
    'ts-generics' => ['emoji' => '🔄', 'body' => 'Genéricos reutilizan código sin perder type safety.'],
    'ts-react' => ['emoji' => '⚛️', 'body' => 'Props tipadas y useState genérico en React + TypeScript.'],
    'ts-node' => ['emoji' => '🟢', 'body' => 'tsconfig y @types para backend Node con tipos estrictos.'],
    'nd-intro' => ['emoji' => '🟢', 'body' => 'Node lleva JavaScript al servidor — APIs con el mismo lenguaje que el frontend.'],
    'nd-express' => ['emoji' => '🚂', 'body' => 'Express es el framework HTTP más usado en Node — simple y extensible.'],
    'nd-api' => ['emoji' => '📡', 'body' => 'APIs REST con JSON — el contrato entre frontend y backend.'],
    'nd-middleware' => ['emoji' => '🔗', 'body' => 'Middleware encadena auth, CORS y validación antes del handler.'],
    'nd-db' => ['emoji' => '🗄️', 'body' => 'pg y Prisma conectan Node a PostgreSQL como PDO en PHP.'],
    'nd-deploy' => ['emoji' => '☁️', 'body' => 'dotenv, PM2 y Docker despliegan Node en producción.'],
    'lx-intro' => ['emoji' => '🐧', 'body' => 'La terminal es la herramienta #1 en servidores Linux.'],
    'lx-files' => ['emoji' => '📁', 'body' => 'cp, mv, mkdir — manipulas el filesystem como un pro.'],
    'lx-perms' => ['emoji' => '🔒', 'body' => 'chmod y rwx — seguridad básica en todo servidor.'],
    'lx-grep' => ['emoji' => '🔍', 'body' => 'Pipes y grep — encuentras cualquier cosa en logs y código.'],
    'lx-scripts' => ['emoji' => '📜', 'body' => 'Scripts bash automatizan deploy, backup y tareas repetitivas.'],
    'lx-ssh' => ['emoji' => '🔑', 'body' => 'SSH y claves — cómo entras a un VPS de forma segura.'],
    'rx-effects' => ['emoji' => '⚡', 'body' => 'useEffect sincroniza tu componente con APIs, timers y el mundo exterior.'],
    'rx-forms' => ['emoji' => '📝', 'body' => 'Formularios controlados: React como fuente única de verdad.'],
    'rx-context' => ['emoji' => '🌐', 'body' => 'Context API elimina prop drilling — tema, usuario, idioma.'],
    'rx-hooks' => ['emoji' => '🪝', 'body' => 'Custom hooks y useReducer — lógica reutilizable como un senior.'],
    'py-excepciones' => ['emoji' => '⚠️', 'body' => 'try/except y raise — errores controlados en Python y APIs.'],
    'py-clases' => ['emoji' => '🏗️', 'body' => 'POO en Python: clases, __init__ y la base de Django/Pydantic.'],
    'py-asyncio' => ['emoji' => '⏳', 'body' => 'asyncio es el motor detrás de la velocidad de FastAPI.'],
    'py-testing' => ['emoji' => '🧪', 'body' => 'pytest y fixtures — calidad antes de producción.'],
    'lv-intro' => ['emoji' => '🔴', 'body' => 'Laravel: el framework PHP que acelera de idea a producto.'],
    'lv-routes' => ['emoji' => '🛤️', 'body' => 'Rutas y controladores — el mapa HTTP de tu app Laravel.'],
    'lv-blade' => ['emoji' => '📄', 'body' => 'Blade: plantillas elegantes con escape XSS integrado.'],
    'lv-eloquent' => ['emoji' => '🗄️', 'body' => 'Eloquent ORM — SQL expresivo sin perder el poder de las queries.'],
    'lv-migrations' => ['emoji' => '📦', 'body' => 'Migraciones versionan tu esquema de BD como Git versiona código.'],
    'lv-auth' => ['emoji' => '🔐', 'body' => 'Auth, middleware y policies — quién puede hacer qué.'],
    'lv-api' => ['emoji' => '📡', 'body' => 'API REST + Sanctum — Laravel alimenta tu React frontend.'],
    'fa-routing' => ['emoji' => '🛤️', 'body' => 'Routing tipado en FastAPI — validación gratis desde anotaciones.'],
    'fa-pydantic' => ['emoji' => '✅', 'body' => 'Pydantic valida request/response — menos bugs en APIs.'],
    'fa-deps' => ['emoji' => '💉', 'body' => 'Dependency Injection en FastAPI — código DRY y testeable.'],
    'fa-db' => ['emoji' => '🗄️', 'body' => 'SQLAlchemy + FastAPI — persistencia profesional en Python.'],
    'fa-auth' => ['emoji' => '🔑', 'body' => 'OAuth2, JWT y bcrypt — auth stateless para APIs modernas.'],
    'fa-testing' => ['emoji' => '🧪', 'body' => 'TestClient y deploy — FastAPI listo para producción.'],
    'sec-owasp' => ['emoji' => '🛡️', 'body' => 'OWASP Top 10 — el mapa de riesgos que todo dev debe conocer.'],
    'sec-xss' => ['emoji' => '💉', 'body' => 'XSS: escapa output o un atacante ejecuta JS en el navegador de tus usuarios.'],
    'sec-sql' => ['emoji' => '🗄️', 'body' => 'SQL injection mata apps — prepared statements siempre.'],
    'sec-csrf' => ['emoji' => '🎭', 'body' => 'CSRF: tokens que prueban que el formulario viene de tu sitio.'],
    'sec-auth' => ['emoji' => '🔒', 'body' => 'password_hash y sesiones seguras — auth hecho bien.'],
    'sec-headers' => ['emoji' => '📋', 'body' => 'Headers HTTP y HTTPS — defensa en profundidad.'],
    'sec-api' => ['emoji' => '📡', 'body' => 'APIs seguras: rate limit, JWT y validación estricta.'],
    'rd-intro' => ['emoji' => '⚡', 'body' => 'Redis en RAM — la capa de velocidad detrás de apps que escalan.'],
    'rd-strings' => ['emoji' => '🔑', 'body' => 'SET, GET, EXPIRE — los comandos que usarás cada día.'],
    'rd-structures' => ['emoji' => '📊', 'body' => 'Hashes, lists y sets — más que simples strings.'],
    'rd-cache' => ['emoji' => '💨', 'body' => 'Cache-aside: el patrón que multiplica rendimiento.'],
    'rd-sessions' => ['emoji' => '🔐', 'body' => 'Sesiones distribuidas y rate limiting con Redis.'],
    'rd-php' => ['emoji' => '🐘', 'body' => 'Cache::remember y colas — Redis en Laravel.'],
    'pg-intro' => ['emoji' => '🐘', 'body' => 'PostgreSQL: la BD que llevas de dev a millones de usuarios.'],
    'pg-types' => ['emoji' => '📋', 'body' => 'UUID, TIMESTAMPTZ y JSONB — tipos que SQLite no tiene.'],
    'pg-migrations' => ['emoji' => '📦', 'body' => 'Esquema versionado con migraciones y FKs.'],
    'pg-indexes' => ['emoji' => '⚡', 'body' => 'EXPLAIN ANALYZE — encuentra queries lentas antes que tus usuarios.'],
    'pg-queries' => ['emoji' => '🔍', 'body' => 'CTEs y window functions — SQL de nivel senior.'],
    'pg-prod' => ['emoji' => '🏭', 'body' => 'Pooling, backups y secrets — Postgres en producción.'],
    'tp-intro' => ['emoji' => '🧪', 'body' => 'Tests automatizados — tu red de seguridad al refactorizar.'],
    'tp-unit' => ['emoji' => '✅', 'body' => 'Tests unitarios rápidos — una función, un assert.'],
    'tp-mocks' => ['emoji' => '🎭', 'body' => 'Mocks aíslan email, pagos y APIs externas.'],
    'tp-integration' => ['emoji' => '🔗', 'body' => 'Integration tests con BD SQLite en memoria.'],
    'tp-api' => ['emoji' => '📡', 'body' => 'getJson y assertStatus — prueba APIs sin Postman.'],
    'tp-pest' => ['emoji' => '✨', 'body' => 'Pest: tests que se leen como frases en inglés.'],
    'tw-intro' => ['emoji' => '💨', 'body' => 'Tailwind — diseña en minutos con clases utilitarias.'],
    'tw-layout' => ['emoji' => '📐', 'body' => 'flex, gap, p-4 — layout sin escribir CSS custom.'],
    'tw-responsive' => ['emoji' => '📱', 'body' => 'md: y lg: — mobile-first como en producción.'],
    'tw-components' => ['emoji' => '🧩', 'body' => 'Botones y cards — patrones UI copy-paste.'],
    'tw-dark' => ['emoji' => '🌙', 'body' => 'dark: variant — modo oscuro en minutos.'],
    'tw-react' => ['emoji' => '⚛️', 'body' => 'className + Tailwind — stack frontend moderno.'],
    'pt-intro' => ['emoji' => '🏛️', 'body' => 'Patrones GoF — vocabulario de arquitectura que usan seniors.'],
    'pt-singleton' => ['emoji' => '1️⃣', 'body' => 'Singleton y Factory — cuándo crear objetos y cuándo no abusar.'],
    'pt-repository' => ['emoji' => '🗄️', 'body' => 'Repository y Service Layer — separa BD de lógica de negocio.'],
    'pt-strategy' => ['emoji' => '🔀', 'body' => 'Strategy y Observer — algoritmos y eventos desacoplados.'],
    'pt-di' => ['emoji' => '💉', 'body' => 'Dependency Injection — el corazón de Symfony y Laravel.'],
    'pt-solid' => ['emoji' => '✨', 'body' => 'SOLID — cinco principios para código mantenible.'],
    'sf-intro' => ['emoji' => '🟣', 'body' => 'Symfony — PHP modular para equipos enterprise.'],
    'sf-routing' => ['emoji' => '🛤️', 'body' => 'Atributos #[Route] — routing moderno en PHP 8.'],
    'sf-di' => ['emoji' => '💉', 'body' => 'El DI Container de Symfony — autowire y services.yaml.'],
    'sf-doctrine' => ['emoji' => '🗄️', 'body' => 'Doctrine ORM — entidades, repos y migraciones.'],
    'sf-forms' => ['emoji' => '📝', 'body' => 'Form component — validación server-side potente.'],
    'sf-api' => ['emoji' => '📡', 'body' => 'API Platform — REST desde entidades con OpenAPI.'],
    'nx-intro' => ['emoji' => '🌐', 'body' => 'Nginx — el servidor que pone tu PHP/Node en producción.'],
    'nx-config' => ['emoji' => '⚙️', 'body' => 'server blocks y location — mapa de tu sitio.'],
    'nx-phpfpm' => ['emoji' => '🐘', 'body' => 'fastcgi_pass — cómo Nginx habla con PHP-FPM.'],
    'nx-ssl' => ['emoji' => '🔒', 'body' => 'HTTPS con Nginx — certificados y redirect 301.'],
    'nx-proxy' => ['emoji' => '🔀', 'body' => 'proxy_pass — un solo dominio para PHP, Node y Python.'],
    'nx-ops' => ['emoji' => '📋', 'body' => 'Logs, rate limit y nginx -t — operaciones diarias.'],
    'dj-intro' => ['emoji' => '🎸', 'body' => 'Django REST Framework — APIs con el poder del admin Django.'],
    'dj-serializers' => ['emoji' => '📋', 'body' => 'Serializers — validación JSON como Pydantic pero Django.'],
    'dj-viewsets' => ['emoji' => '📦', 'body' => 'ViewSets — CRUD REST en pocas líneas.'],
    'dj-auth' => ['emoji' => '🔐', 'body' => 'Token, JWT y permissions en DRF.'],
    'dj-filters' => ['emoji' => '🔍', 'body' => 'Filtros y paginación — APIs que escalan.'],
    'dj-deploy' => ['emoji' => '☁️', 'body' => 'Gunicorn + Nginx + CORS — DRF en producción.'],
    'al-complejidad' => ['emoji' => '📈', 'body' => 'Big O — el lenguaje de rendimiento en entrevistas.'],
    'al-arrays' => ['emoji' => '🗂️', 'body' => 'Hash maps y Two Sum — el patrón #1.'],
    'al-punteros' => ['emoji' => '👆', 'body' => 'Two pointers y sliding window — optimiza sin hash.'],
    'al-recursion' => ['emoji' => '🔁', 'body' => 'Recursión y divide & conquer — binary search y más.'],
    'al-arboles' => ['emoji' => '🌳', 'body' => 'BFS y DFS — recorre árboles como un pro.'],
    'al-entrevista' => ['emoji' => '🎯', 'body' => 'Estrategia de entrevista — comunica antes de codear.'],
    'ws-intro' => ['emoji' => '🔌', 'body' => 'WebSockets — más allá de request/response HTTP.'],
    'ws-browser' => ['emoji' => '🌐', 'body' => 'new WebSocket en el browser — chat en tiempo real.'],
    'ws-node' => ['emoji' => '🟢', 'body' => 'Servidor WS en Node — broadcast a todos.'],
    'ws-php' => ['emoji' => '🐘', 'body' => 'Laravel Reverb + Echo — WS en tu stack PHP.'],
    'ws-scale' => ['emoji' => '📡', 'body' => 'Redis pub/sub — WS a escala multi-servidor.'],
    'ws-react' => ['emoji' => '⚛️', 'body' => 'React + useEffect + WebSocket — chat UI.'],
    'gq-intro' => ['emoji' => '◈', 'body' => 'GraphQL — pide solo los datos que necesitas.'],
    'gq-queries' => ['emoji' => '🔍', 'body' => 'Queries y schema — el contrato de tu API.'],
    'gq-mutations' => ['emoji' => '✏️', 'body' => 'Mutations — escrituras tipadas en GraphQL.'],
    'gq-apollo' => ['emoji' => '🚀', 'body' => 'Apollo Client — GraphQL en React con cache.'],
    'gq-server' => ['emoji' => '⚙️', 'body' => 'Apollo Server y Lighthouse — backend GraphQL.'],
    'gq-prod' => ['emoji' => '🛡️', 'body' => 'Depth limits y cuándo NO usar GraphQL.'],
    'ar-intro' => ['emoji' => '🏗️', 'body' => 'Arquitectura — decisiones que duran años.'],
    'ar-monolito' => ['emoji' => '📦', 'body' => 'Monolito modular — empieza simple, escala después.'],
    'ar-micro' => ['emoji' => '🧩', 'body' => 'Microservicios — cuándo y a qué coste.'],
    'ar-eventos' => ['emoji' => '📨', 'body' => 'Event-driven — desacopla con colas y listeners.'],
    'ar-capa' => ['emoji' => '🎯', 'body' => 'Hexagonal — dominio limpio sin acoplar al framework.'],
    'ar-escala' => ['emoji' => '📊', 'body' => 'Escalar horizontal — load balancer, Redis, réplicas.'],
    'next-intro' => ['emoji' => '▲', 'body' => 'Next.js lleva React a producción con SSR, routing y API integrados.'],
    'next-routing' => ['emoji' => '🗺️', 'body' => 'App Router: carpetas = rutas. page.tsx es tu vista.'],
    'next-data' => ['emoji' => '📡', 'body' => 'Server Components fetchean en el servidor — menos JS al cliente.'],
    'next-api' => ['emoji' => '🔌', 'body' => 'API Routes en route.ts — backend y frontend en un repo.'],
    'next-auth' => ['emoji' => '🔐', 'body' => 'Auth.js / middleware — protege rutas antes del render.'],
    'next-deploy' => ['emoji' => '☁️', 'body' => 'Vercel despliega Next con zero-config — preview por PR.'],
    'mq-intro' => ['emoji' => '📨', 'body' => 'Colas desacoplan trabajo pesado del request HTTP.'],
    'mq-rabbitmq' => ['emoji' => '🐰', 'body' => 'RabbitMQ con AMQP — exchanges, queues y bindings.'],
    'mq-laravel' => ['emoji' => '🔴', 'body' => 'Jobs y Horizon — colas async en Laravel sin drama.'],
    'mq-patterns' => ['emoji' => '🔁', 'body' => 'Retry, backoff y DLQ — resiliencia en mensajería.'],
    'mq-python' => ['emoji' => '🐍', 'body' => 'Celery + Redis/RabbitMQ — workers Python en producción.'],
    'mq-prod' => ['emoji' => '🏭', 'body' => 'Monitoreo, idempotencia y poison messages en prod.'],
    'aw-intro' => ['emoji' => '☁️', 'body' => 'AWS: la nube que usan la mayoría de startups y enterprises.'],
    'aw-ec2' => ['emoji' => '🖥️', 'body' => 'EC2 = tu VPS en la nube — SSH, security groups, AMI.'],
    'aw-s3' => ['emoji' => '🪣', 'body' => 'S3 almacena objetos ilimitados — assets, backups, static sites.'],
    'aw-rds' => ['emoji' => '🗄️', 'body' => 'RDS = Postgres/MySQL managed — backups y patches automáticos.'],
    'aw-lambda' => ['emoji' => 'λ', 'body' => 'Lambda ejecuta código por evento — paga solo lo que usas.'],
    'aw-deploy' => ['emoji' => '🏗️', 'body' => 'ALB + EC2 + RDS + S3 — arquitectura web típica en AWS.'],
    'eh-legal' => ['emoji' => '⚖️', 'body' => 'Sin autorización escrita, no hay hacking ético — es delito.'],
    'eh-mindset' => ['emoji' => '🧠', 'body' => 'Piensa como atacante para defender mejor — siempre en scope.'],
    'eh-recon' => ['emoji' => '🔍', 'body' => 'Recon pasivo: OSINT, subdominios, tech stack — sin tocar aún.'],
    'eh-scanning' => ['emoji' => '📡', 'body' => 'Escaneo de puertos y servicios — solo en labs autorizados.'],
    'eh-web' => ['emoji' => '🌐', 'body' => 'OWASP ofensivo: XSS, SQLi, IDOR — en DVWA o scope legal.'],
    'eh-tools' => ['emoji' => '🛠️', 'body' => 'Burp, nmap, ffuf — herramientas del pentester profesional.'],
    'eh-report' => ['emoji' => '📝', 'body' => 'Un buen reporte convierte hallazgos en fixes — y en pago en bounty.'],
];

$runtimeDemo = [
    'html-css-js' => ['language' => 'javascript', 'code' => "console.log('Hola Frontend')"],
    'react-frontend' => ['language' => 'javascript', 'code' => "function Saludo() { return 'Hola React'; }\nconsole.log(Saludo());"],
    'astro-web' => ['language' => 'javascript', 'code' => "const titulo = 'Hola Astro';\nconsole.log(titulo);"],
    'typescript-fundamentos' => ['language' => 'javascript', 'code' => "console.log('Hola TypeScript')"],
    'nodejs-backend' => ['language' => 'javascript', 'code' => "console.log('Hola Node.js')"],
    'tailwind-css' => ['language' => 'javascript', 'code' => "console.log('Hola Tailwind')"],
    'algoritmos-entrevista' => ['language' => 'javascript', 'code' => "console.log('Algoritmos')"],
    'websockets-realtime' => ['language' => 'javascript', 'code' => "console.log('WebSocket ready')"],
    'graphql-api' => ['language' => 'javascript', 'code' => "console.log('GraphQL')"],
    'nextjs-fullstack' => ['language' => 'javascript', 'code' => "console.log('Hola Next.js')"],
    'vue-frontend' => ['language' => 'javascript', 'code' => "console.log('Hola Vue')"],
    'react-native-mobile' => ['language' => 'javascript', 'code' => "console.log('Hola React Native')"],
    'mongodb-nosql' => ['language' => 'javascript', 'code' => "console.log('MongoDB')"],
    'angular-fundamentos' => ['language' => 'javascript', 'code' => "console.log('Hola Angular')"],
    'ai-llm-desarrollo' => ['language' => 'javascript', 'code' => "console.log('LLM API')"],
    'flutter-mobile' => ['language' => 'javascript', 'code' => "console.log('Hola Flutter')"],
    'pwa-offline' => ['language' => 'javascript', 'code' => "console.log('PWA ready')"],
    'webrtc-comunicacion' => ['language' => 'javascript', 'code' => "console.log('WebRTC')"],
    'svelte-fundamentos' => ['language' => 'javascript', 'code' => "console.log('Hola Svelte')"],
    'electron-desktop' => ['language' => 'javascript', 'code' => "console.log('Electron')"],
    'playwright-e2e' => ['language' => 'javascript', 'code' => "console.log('Playwright')"],
    'web3-blockchain' => ['language' => 'javascript', 'code' => "console.log('Web3')"],
    'accesibilidad-web' => ['language' => 'javascript', 'code' => "console.log('a11y')"],
    'elasticsearch-busqueda' => ['language' => 'javascript', 'code' => "console.log('Elasticsearch')"],
    'deno-bun' => ['language' => 'javascript', 'code' => "console.log('Deno/Bun runtime')"],
    'supabase-backend' => ['language' => 'javascript', 'code' => "console.log('Supabase client')"],
    'figma-devs' => ['language' => 'javascript', 'code' => "console.log('Figma handoff')"],
    'agile-scrum' => ['language' => 'shell', 'code' => "echo 'Agile sprint'"],
    'technical-writing' => ['language' => 'shell', 'code' => "echo 'Technical docs'"],
    'cert-aws-saa' => ['language' => 'shell', 'code' => "echo 'AWS SAA prep'"],
    'cert-cka' => ['language' => 'yaml', 'code' => "apiVersion: v1\nkind: Pod"],
    'cert-azure-fund' => ['language' => 'shell', 'code' => "echo 'AZ-900 prep'"],
    'prisma-orm' => ['language' => 'javascript', 'code' => "console.log('Prisma Client')"],
    'firebase-backend' => ['language' => 'javascript', 'code' => "console.log('Firebase SDK')"],
    'openapi-documentacion' => ['language' => 'yaml', 'code' => "openapi: 3.0.3\ninfo:\n  title: API"],
    'event-sourcing-cqrs' => ['language' => 'shell', 'code' => "echo 'Event Sourcing'"],
    'php-avanzado' => ['language' => 'php', 'code' => "<?php\ndeclare(strict_types=1);\necho 'PHP 8';"],
    'networking-devops' => ['language' => 'shell', 'code' => "echo 'Networking debug'"],
    'producto-tech' => ['language' => 'shell', 'code' => "echo 'Product discovery'"],
];

$created = 0;
$skipped = 0;

foreach ($courses as $courseSlug => $file) {
    if (!is_file($file)) {
        continue;
    }
    /** @var list<array<string, mixed>> $lessons */
    $lessons = require $file;
    $demo = $runtimeDemo[$courseSlug] ?? null;

    foreach ($lessons as $lesson) {
        $slug = (string) $lesson['slug'];
        $target = $mentorDir . '/' . $slug . '.php';
        if (is_file($target)) {
            $skipped++;
            continue;
        }

        $intro = $intros[$slug] ?? ['emoji' => '🎯', 'body' => (string) ($lesson['summary'] ?? 'Vamos paso a paso.')];
        $steps = [[
            'type' => 'mentor_say',
            'title' => $lesson['title'],
            'body' => $intro['body'],
            'emoji' => $intro['emoji'],
        ]];

        foreach ($lesson['sections'] ?? [] as $section) {
            $step = [
                'type' => 'teach',
                'title' => (string) $section['heading'],
                'body' => (string) $section['body'],
            ];
            if (!empty($section['code'])) {
                $step['code'] = $section['code'];
            }
            $steps[] = $step;
        }

        if ($demo !== null && count($lesson['exercises'] ?? []) > 0) {
            $firstEx = $lesson['exercises'][0];
            $demoCode = ($firstEx['type'] ?? '') === 'js'
                ? ($firstEx['hint'] ?? $demo['code'])
                : $demo['code'];
            $steps[] = [
                'type' => 'live_demo',
                'title' => 'Mira cómo corre',
                'body' => 'Así se ve en ejecución. Luego lo harás tú.',
                'demo_code' => $demoCode,
                'demo_language' => $demo['language'],
            ];
            $steps[] = [
                'type' => 'pair',
                'title' => 'Pair programming — tu turno',
                'body' => 'Abre el **Laboratorio** (JavaScript) y practica:',
                'lines' => explode("\n", $demoCode),
            ];
        }

        foreach ($lesson['exercises'] ?? [] as $i => $exercise) {
            $steps[] = [
                'type' => 'exercise',
                'title' => 'Tu turno — práctica ' . ($i + 1),
                'body' => 'Resuelve el ejercicio. Si fallas, recibes pistas adaptativas.',
                'exercise_index' => $i,
            ];
        }

        if (isset($projects[$slug])) {
            $steps[] = [
                'type' => 'project',
                'title' => 'Mini-proyecto',
                'body' => 'Aplica lo aprendido en un proyecto hands-on con XP.',
            ];
        }

        $steps[] = [
            'type' => 'complete',
            'title' => '¡Módulo completado!',
            'body' => 'Siguiente lección desbloqueada. Sigue construyendo tu stack.',
            'emoji' => '🏆',
        ];

        $export = var_export($steps, true);
        $php = "<?php\n\ndeclare(strict_types=1);\n\nreturn {$export};\n";
        file_put_contents($target, $php);
        $created++;
        echo "Created: {$slug}.php\n";
    }
}

echo "\nDone: {$created} created, {$skipped} skipped.\n";
