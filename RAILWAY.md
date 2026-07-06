# Despliegue en Railway

Guía para publicar EscalaPHP en [Railway](https://railway.com) con Docker.  
Te dan una URL pública gratis (`*.up.railway.app`) sin comprar dominio.

## Requisitos

- Cuenta en [railway.com](https://railway.com) (GitHub login)
- Repo en GitHub (recomendado) o [Railway CLI](https://docs.railway.com/guides/cli)
- Docker instalado (opcional, para probar local)

## Opción A — Desde GitHub (recomendado)

### 1. Sube el código a GitHub

```bash
git add .
git commit -m "Railway deploy config"
git push origin main
```

### 2. Crea proyecto en Railway

1. Entra a [railway.com/new](https://railway.com/new)
2. **Deploy from GitHub repo** → elige tu repositorio
3. Railway detecta `railway.toml` y `Dockerfile.railway` automáticamente

### 3. Variables de entorno

En el servicio → **Variables** → **RAW Editor**, pega desde `.env.railway.example` y ajusta:

| Variable | Valor |
|----------|-------|
| `APP_DEBUG` | `false` |
| `APP_KEY` | Genera: `openssl rand -hex 32` |
| `ADMIN_PASSWORD` | Contraseña segura para `/admin/login` |
| `DB_DRIVER` | `sqlite` |
| `DB_PATH` | `database/escala.sqlite` |

`APP_URL` es opcional — se detecta sola desde `RAILWAY_PUBLIC_DOMAIN`.

### 4. Volumen persistente (importante)

Sin volumen, la base de datos SQLite se borra en cada redeploy.

Railway (plan gratuito) permite **un volumen por servicio**. Monta:

1. Servicio → **Settings** → **Volumes** → **Add Volume**
2. Mount path: `/var/www/html/database`

El entrypoint enlaza `storage/*` dentro del volumen (`database/backups`, `database/logs`, etc.), así backups y logs también persisten sin un segundo volumen.

En Windows con CLI:

```bash
MSYS_NO_PATHCONV=1 railway volume add --mount-path '/var/www/html/database'
```

### 5. Dominio público

1. Servicio → **Settings** → **Networking**
2. **Generate Domain** → obtienes `https://tu-app.up.railway.app`

### 6. Verificar

```bash
curl https://tu-app.up.railway.app/health
```

Abre:
- `https://tu-app.up.railway.app/` — catálogo
- `https://tu-app.up.railway.app/admin/login` — admin

---

## Opción B — Railway CLI + Docker local

### 1. Instalar CLI

```bash
# Windows (npm)
npm i -g @railway/cli

# o con scoop
scoop install railway
```

### 2. Login e inicializar

```bash
railway login
cd escala-php
railway init
```

### 3. Configurar variables

```bash
railway variables set APP_DEBUG=false
railway variables set APP_KEY=$(openssl rand -hex 32)
railway variables set ADMIN_PASSWORD=tu-contraseña-segura
railway variables set DB_DRIVER=sqlite
railway variables set DB_PATH=database/escala.sqlite
```

### 4. Desplegar

```bash
chmod +x scripts/railway-deploy.sh
./scripts/railway-deploy.sh
```

O directamente:

```bash
railway up
```

### 5. Dominio y volúmenes

```bash
railway domain
```

Volúmenes: configúralos en el dashboard (paso 4 de Opción A).

---

## Worker (emails en background)

Crea un **segundo servicio** en el mismo proyecto:

| Servicio | Start Command | Config |
|----------|---------------|--------|
| `EscalaPHP-worker` | `while true; do php tools/cron.php worker; sleep 60; done` | `railway.worker.toml` |
| `EscalaPHP-cron` | `php tools/cron.php backup` + Cron `0 3 * * *` | `railway.cron.toml` |

Mismas variables de entorno y volúmenes que el servicio web.

## Variables recomendadas

| Variable | Uso |
|----------|-----|
| `CRON_SECRET` | Protege `/cron?task=backup&token=...` |
| `ANALYTICS_DOMAIN` | Plausible analytics (sin `https://`) |
| `MAIL_DRIVER` | `log`, `resend` o `smtp` |
| `RESEND_API_KEY` | Si usas Resend (gratis 100 emails/día) |

---

## Probar imagen Railway con Docker (local)

```bash
docker build -f Dockerfile.railway -t escalaphp-railway .
docker run --rm -p 8080:8080 \
  -e PORT=8080 \
  -e APP_DEBUG=false \
  -e APP_KEY=test-key-local \
  -e ADMIN_PASSWORD=admin \
  -e DB_DRIVER=sqlite \
  -v "$(pwd)/database:/var/www/html/database" \
  -v "$(pwd)/storage:/var/www/html/storage" \
  escalaphp-railway
```

Abre http://localhost:8080/health

---

## Stripe en producción

1. Dashboard Stripe → Webhook: `https://tu-app.up.railway.app/webhooks/stripe`
2. Evento: `checkout.session.completed`
3. Variables en Railway:
   - `STRIPE_SECRET_KEY`
   - `STRIPE_PRICE_ID`
   - `STRIPE_WEBHOOK_SECRET`

---

## Archivos Railway del proyecto

| Archivo | Uso |
|---------|-----|
| `Dockerfile.railway` | Imagen: Nginx + PHP-FPM + Supervisor |
| `railway.toml` | Config build/deploy del servicio web |
| `railway.worker.toml` | Referencia para servicio worker |
| `.env.railway.example` | Plantilla de variables |
| `scripts/railway-deploy.sh` | Script de deploy con CLI |

---

## Troubleshooting

| Problema | Solución |
|----------|----------|
| Health check falla | Revisa logs: `railway logs` |
| BD vacía tras redeploy | Añade volumen en `/var/www/html/database` |
| 502 Bad Gateway | Espera 1–2 min al primer deploy (composer + migrate) |
| Sesiones raras | `APP_URL` debe ser `https://tu-dominio.up.railway.app` |
| Build lento | Normal la primera vez (~3–5 min) |

---

## Coste

Railway ofrece crédito mensual gratis (plan Hobby). Una app PHP + SQLite suele caber en el tier gratuito con uso moderado. Revisa [railway.com/pricing](https://railway.com/pricing).

## Dominio propio (opcional, más adelante)

Settings → Networking → **Custom Domain** → apunta CNAME a Railway.
