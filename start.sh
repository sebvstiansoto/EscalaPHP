#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd "$(dirname "$0")" && pwd)"
PHP="$ROOT/tools/php/php.exe"
COMPOSER="$ROOT/tools/composer.phar"

if [[ ! -f "$PHP" ]]; then
  echo "PHP portable no encontrado. Lee README.md"
  exit 1
fi

if [[ ! -f "$ROOT/vendor/autoload.php" ]]; then
  echo "Instalando dependencias..."
  "$PHP" "$COMPOSER" install --no-interaction
fi

echo ""
echo " EscalaPHP corriendo en http://localhost:8000"
echo " Presiona Ctrl+C para detener"
echo ""

"$PHP" -S localhost:8000 -t public public/router.php
