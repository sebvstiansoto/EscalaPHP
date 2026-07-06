#!/bin/sh
set -e

cd /var/www/html

export PORT="${PORT:-8080}"

mkdir -p storage/logs storage/cache storage/rate storage/backups storage/mail database
chown -R www-data:www-data storage database 2>/dev/null || true
chmod -R ug+rwX storage database 2>/dev/null || true

envsubst '${PORT}' < /etc/nginx/templates/default.conf.template > /etc/nginx/conf.d/default.conf

echo "EscalaPHP Railway — listening on port ${PORT}"

exec "$@"
