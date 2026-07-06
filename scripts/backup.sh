#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd "$(dirname "$0")/.." && pwd)"
BACKUP_DIR="${BACKUP_PATH:-$ROOT/storage/backups}"
mkdir -p "$BACKUP_DIR"
STAMP=$(date +%Y%m%d_%H%M%S)

# Cargar .env si existe
if [[ -f "$ROOT/.env" ]]; then
    set -a
    # shellcheck disable=SC1091
    source <(grep -E '^(DB_DRIVER|DB_PATH|DB_HOST|DB_PORT|DB_NAME|DB_USER|DB_PASS|BACKUP_PATH)=' "$ROOT/.env" | sed 's/\r$//')
    set +a
fi

BACKUP_DIR="${BACKUP_PATH:-$BACKUP_DIR}"

if [[ "${DB_DRIVER:-sqlite}" == "pgsql" ]]; then
    if command -v pg_dump >/dev/null 2>&1; then
        PGPASSWORD="${DB_PASS:-}" pg_dump -h "${DB_HOST:-localhost}" -p "${DB_PORT:-5432}" -U "${DB_USER:-escala}" "${DB_NAME:-escala}" \
            > "$BACKUP_DIR/escala_${STAMP}.sql"
        echo "Backup PostgreSQL: $BACKUP_DIR/escala_${STAMP}.sql"
    else
        echo "pg_dump no disponible — usa backup del volumen Docker pgdata." >&2
        exit 1
    fi
else
    SQLITE="${DB_PATH:-$ROOT/database/escala.sqlite}"
    if [[ -f "$SQLITE" ]]; then
        cp "$SQLITE" "$BACKUP_DIR/escala_${STAMP}.sqlite"
        echo "Backup SQLite: $BACKUP_DIR/escala_${STAMP}.sqlite"
    else
        echo "No hay BD SQLite en $SQLITE"
        exit 1
    fi
fi

# Rotar backups antiguos (mantener 14)
find "$BACKUP_DIR" -name 'escala_*' -mtime +14 -delete 2>/dev/null || true
