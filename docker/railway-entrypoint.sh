#!/bin/sh
set -e

cd /var/www/html

export PORT="${PORT:-8080}"

mkdir -p database/backups database/logs database/cache database/rate database/mail
mkdir -p storage/logs storage/cache storage/rate storage/backups storage/mail database
for dir in backups logs cache rate mail; do
    rm -rf "storage/${dir}"
    ln -sf "../database/${dir}" "storage/${dir}"
done
chown -R www-data:www-data storage database 2>/dev/null || true
chmod -R ug+rwX storage database 2>/dev/null || true

role="${ESCALA_ROLE:-web}"
case "$1" in
    php|/usr/local/bin/php)
        role="cron"
        ;;
esac

case "$role" in
    worker)
        host="${CRON_BASE_URL:-${RAILWAY_SERVICE_ESCALAPHP_URL:-escalaphp-production.up.railway.app}}"
        token="${CRON_SECRET:?CRON_SECRET required for worker}"
        echo "EscalaPHP worker — ${host}/cron"
        exec sh -c "while true; do curl -fsS \"https://${host}/cron?task=worker&token=${token}\" || true; sleep 60; done"
        ;;
    cron)
        host="${CRON_BASE_URL:-${RAILWAY_SERVICE_ESCALAPHP_URL:-escalaphp-production.up.railway.app}}"
        token="${CRON_SECRET:?CRON_SECRET required for cron}"
        echo "EscalaPHP cron — backup ${host}"
        exec curl -fsS "https://${host}/cron?task=backup&token=${token}"
        ;;
esac

envsubst '${PORT}' < /etc/nginx/templates/default.conf.template > /etc/nginx/conf.d/default.conf

echo "EscalaPHP Railway — listening on port ${PORT}"

exec "$@"
