#!/usr/bin/env bash
# Deploy EscalaPHP a Railway
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"

if ! command -v railway >/dev/null 2>&1; then
    echo "Railway CLI no instalado."
    echo "  npm i -g @railway/cli"
    echo "  o visita https://docs.railway.com/guides/cli"
    exit 1
fi

echo "==> EscalaPHP → Railway"

if [[ ! -f .env ]] && [[ -f .env.railway.example ]]; then
    echo "    Tip: configura variables con 'railway variables' o en el dashboard."
fi

echo "==> railway up (build Dockerfile.railway)..."
railway up --detach

echo ""
echo "==> Deploy enviado. Siguiente:"
echo "  railway domain          # generar URL pública"
echo "  railway logs            # ver logs"
echo "  railway open            # abrir en navegador"
echo ""
echo "IMPORTANTE: añade volúmenes en el dashboard:"
echo "  /var/www/html/database"
echo "  /var/www/html/storage"
echo ""
echo "Ver RAILWAY.md para la guía completa."
