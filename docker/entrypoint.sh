#!/bin/sh
set -e

cd /var/www/html

mkdir -p storage/logs storage/cache storage/rate storage/backups storage/mail database

if [ -f database/.gitkeep ]; then
    : # ok
fi

chown -R www-data:www-data storage database 2>/dev/null || true
chmod -R ug+rwX storage database 2>/dev/null || true

exec "$@"
