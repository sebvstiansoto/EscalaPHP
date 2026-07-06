# Despliegue en producción — EscalaPHP

Guía para llevar la plataforma a un servidor real (VPS, cloud o local con Docker).

## Requisitos

| Componente | Mínimo |
|------------|--------|
| PHP | 8.2+ (8.3 recomendado) |
| Extensiones | `pdo_sqlite` o `pdo_pgsql`, `mbstring`, `curl` |
| Servidor web | Nginx + PHP-FPM (incluido en Docker) |
| TLS | Caddy o Let's Encrypt (recomendado) |
| RAM | 512 MB mínimo, 1 GB cómodo |
| Disco | 2 GB+ (cursos + BD + logs) |

## Opción A — Docker (recomendado)

### 1. Clonar y configurar

```bash
git clone <tu-repo> escala-php
cd escala-php
cp .env.production.example .env
./scripts/generate-key.sh   # copia el resultado a APP_KEY en .env
```

Edita `.env`:

```env
APP_DEBUG=false
APP_URL=https://tu-dominio.com
APP_KEY=<clave-generada>
ADMIN_PASSWORD=<contraseña-segura-larga>
DB_DRIVER=sqlite
DB_PATH=database/escala.sqlite
MAIL_DRIVER=log
HTTP_PORT=80
```

### 2. Desplegar

```bash
chmod +x scripts/*.sh
./scripts/deploy.sh
```

Solo HTTP (puerto 80):

```bash
./scripts/deploy.sh
```

Con HTTPS automático (Caddy + Let's Encrypt):

```bash
# Edita docker/Caddyfile con tu dominio
./scripts/deploy.sh --tls
```

### 3. Verificar

```bash
curl -f http://127.0.0.1/health
# {"status":"healthy","checks":{"app":"ok","database":"ok",...}}
```

Abre en el navegador:

- `/` — catálogo
- `/admin/login` — panel admin (contraseña `ADMIN_PASSWORD`)
- `/dashboard` — panel del alumno

### Servicios Docker

| Servicio | Función |
|----------|---------|
| `nginx` | Servidor web, estáticos, proxy a PHP-FPM |
| `php` | PHP 8.3-FPM, aplicación |
| `worker` | Cola de emails y tareas en background |
| `db` | PostgreSQL (opcional, perfil `postgres`) |

Comandos útiles:

```bash
docker compose -f docker-compose.prod.yml logs -f php
docker compose -f docker-compose.prod.yml restart php
docker compose -f docker-compose.prod.yml down
```

## Opción B — VPS manual (sin Docker)

### 1. Instalar dependencias (Ubuntu/Debian)

```bash
sudo apt update
sudo apt install -y nginx php8.3-fpm php8.3-sqlite3 php8.3-mbstring php8.3-curl php8.3-xml unzip git
```

### 2. Clonar proyecto

```bash
sudo mkdir -p /var/www/escala
sudo chown $USER:www-data /var/www/escala
git clone <tu-repo> /var/www/escala
cd /var/www/escala
composer install --no-dev --optimize-autoloader
cp .env.production.example .env
# Editar .env
```

### 3. Permisos

```bash
sudo chown -R www-data:www-data storage database
sudo chmod -R ug+rwX storage database
```

### 4. Nginx

```nginx
server {
    listen 80;
    server_name tu-dominio.com;
    root /var/www/escala/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    }

    location ~ /\.(?!well-known) { deny all; }
    location ~ ^/(storage|database|vendor)/ { deny all; }
}
```

```bash
sudo ln -s /etc/nginx/sites-available/escala /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx
```

### 5. TLS con Certbot

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d tu-dominio.com
```

### 6. Worker (cron)

```cron
* * * * * cd /var/www/escala && php tools/worker.php >> storage/logs/worker.log 2>&1
```

## Base de datos

### SQLite (recomendado para empezar)

- Un solo servidor, cero configuración extra
- Archivo: `database/escala.sqlite`
- Backup: `./scripts/backup.sh`
- **Incluido por defecto** en Docker

### PostgreSQL (opcional)

```bash
./scripts/deploy.sh --postgres
```

En `.env`:

```env
DB_DRIVER=pgsql
DB_HOST=db
DB_NAME=escala
DB_USER=escala
DB_PASS=contraseña-segura
```

> Nota: el esquema base está optimizado para SQLite. PostgreSQL funciona para despliegues avanzados; valida migraciones en staging antes de producción.

## Variables de entorno

| Variable | Descripción |
|----------|-------------|
| `APP_DEBUG` | **false** en producción |
| `APP_URL` | URL pública con https |
| `APP_KEY` | Secreto largo aleatorio |
| `ADMIN_PASSWORD` | Acceso `/admin/login` |
| `DB_DRIVER` | `sqlite` o `pgsql` |
| `MAIL_DRIVER` | `log` (dev) o `smtp` |
| `STRIPE_*` | Pagos Pro (opcional) |
| `OPENAI_API_KEY` | Mentor IA (opcional) |

Ver `.env.production.example` para la lista completa.

## Stripe (monetización)

1. Crea producto y precio en [Stripe Dashboard](https://dashboard.stripe.com)
2. Configura webhook: `POST https://tu-dominio.com/webhooks/stripe`
3. Evento: `checkout.session.completed`
4. Añade `STRIPE_SECRET_KEY`, `STRIPE_PRICE_ID`, `STRIPE_WEBHOOK_SECRET` en `.env`

Sin Stripe, el checkout activa Pro en modo desarrollo.

## Backups

```bash
./scripts/backup.sh
```

Guarda en `storage/backups/`. Programa cron diario:

```cron
0 3 * * * /var/www/escala/scripts/backup.sh
```

En Docker, el volumen `./database` persiste SQLite entre reinicios.

## Logs

| Archivo | Contenido |
|---------|-----------|
| `storage/logs/app.log` | Errores de aplicación |
| `docker compose logs php` | PHP-FPM en Docker |

## Migraciones

Se aplican automáticamente al arrancar (`bootstrap/app.php` → `Database::migrate()`).  
Versión registrada en tabla `schema_migrations`.

## Checklist pre-lanzamiento

- [ ] `APP_DEBUG=false`
- [ ] `APP_KEY` única y secreta
- [ ] `ADMIN_PASSWORD` cambiada
- [ ] `APP_URL` con dominio real y HTTPS
- [ ] `curl https://tu-dominio.com/health` → 200 healthy
- [ ] TLS activo (Caddy o Certbot)
- [ ] Backup automático configurado
- [ ] Stripe webhooks (si monetizas)
- [ ] SMTP configurado (emails reales)
- [ ] Puertos 80/443 abiertos en firewall
- [ ] Tests CI pasando (`composer test`)

## Desarrollo local vs producción

| | Local | Producción |
|---|-------|------------|
| Arranque | `start.bat` o `docker compose up` | `./scripts/deploy.sh` |
| PHP | Portable en `tools/php/` | PHP-FPM en Docker |
| Debug | `APP_DEBUG=true` | `APP_DEBUG=false` |
| BD | SQLite | SQLite o PostgreSQL |
| Puerto | 8000 | 80/443 |

## Actualizar producción

```bash
git pull
docker compose -f docker-compose.prod.yml up -d --build
# o en VPS manual:
composer install --no-dev --optimize-autoloader
sudo systemctl reload php8.3-fpm nginx
```

## Railway (PaaS — sin VPS)

La forma más rápida de estar online sin servidor propio:

1. Conecta el repo en [railway.com/new](https://railway.com/new)
2. Railway usa `Dockerfile.railway` + `railway.toml`
3. Configura variables desde `.env.railway.example`
4. Añade volúmenes: `/var/www/html/database` y `/var/www/html/storage`
5. Genera dominio en Networking

Guía paso a paso: **[RAILWAY.md](RAILWAY.md)**

## Soporte

- Health: `/health`
- Admin: `/admin/login`
- Logs: `storage/logs/app.log`
