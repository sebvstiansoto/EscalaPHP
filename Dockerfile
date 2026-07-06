FROM php:8.3-cli

RUN apt-get update && apt-get install -y libsqlite3-dev unzip git \
    && docker-php-ext-install pdo pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-interaction --prefer-dist

EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public", "public/router.php"]
