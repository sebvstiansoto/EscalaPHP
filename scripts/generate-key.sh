#!/usr/bin/env bash
# Genera APP_KEY para .env
set -euo pipefail

if command -v openssl >/dev/null 2>&1; then
    openssl rand -hex 32
elif command -v php >/dev/null 2>&1; then
    php -r "echo bin2hex(random_bytes(32)), PHP_EOL;"
else
    echo "Instala openssl o php para generar claves." >&2
    exit 1
fi
