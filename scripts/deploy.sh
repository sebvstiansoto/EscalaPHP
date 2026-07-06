#!/usr/bin/env bash
# Despliegue en producción con Docker
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"

COMPOSE="docker compose -f docker-compose.prod.yml"
TLS=false
POSTGRES=false

while [[ $# -gt 0 ]]; do
    case "$1" in
        --tls) TLS=true; shift ;;
        --postgres) POSTGRES=true; shift ;;
        *) echo "Uso: $0 [--tls] [--postgres]"; exit 1 ;;
    esac
done

echo "==> EscalaPHP — deploy producción"

if [[ ! -f .env ]]; then
    echo "==> Creando .env desde .env.production.example"
    cp .env.production.example .env
    KEY=$("$ROOT/scripts/generate-key.sh")
    if [[ "$(uname)" == "Darwin" ]]; then
        sed -i '' "s/^APP_KEY=.*/APP_KEY=${KEY}/" .env
    else
        sed -i "s/^APP_KEY=.*/APP_KEY=${KEY}/" .env
    fi
    echo "    APP_KEY generada. Edita .env con tu dominio y ADMIN_PASSWORD."
fi

mkdir -p storage/logs storage/cache storage/rate storage/backups storage/mail database

if grep -q 'APP_DEBUG=true' .env 2>/dev/null; then
    echo "AVISO: APP_DEBUG=true en .env — cámbialo a false en producción." >&2
fi

if grep -q 'change-me-in-production\|escala-admin-change-me\|cambia-esta' .env 2>/dev/null; then
    echo "AVISO: Revisa APP_KEY y ADMIN_PASSWORD en .env antes de exponer a internet." >&2
fi

ARGS=()
if $TLS; then
    ARGS+=(-f docker-compose.tls.yml)
    echo "==> TLS habilitado (Caddy + Let's Encrypt)"
    echo "    Edita docker/Caddyfile con tu dominio."
fi
if $POSTGRES; then
    ARGS+=(--profile postgres)
    echo "==> PostgreSQL habilitado (experimental — SQLite recomendado)"
fi

echo "==> Build y arranque..."
$COMPOSE "${ARGS[@]}" up -d --build

echo "==> Esperando servicios..."
sleep 5

PORT=$(grep -E '^HTTP_PORT=' .env 2>/dev/null | cut -d= -f2 || echo 80)
PORT=${PORT:-80}

if curl -sf "http://127.0.0.1:${PORT}/health" >/dev/null 2>&1; then
    echo "==> Health check OK en http://127.0.0.1:${PORT}/health"
else
    echo "==> Health check pendiente — revisa: $COMPOSE logs -f"
fi

echo ""
echo "Listo. Pasos siguientes:"
echo "  1. Configura APP_URL y ADMIN_PASSWORD en .env"
echo "  2. curl http://127.0.0.1:${PORT}/health"
echo "  3. Abre /admin/login"
if $TLS; then
    echo "  4. Apunta DNS de tu dominio a este servidor (puertos 80 y 443)"
fi
