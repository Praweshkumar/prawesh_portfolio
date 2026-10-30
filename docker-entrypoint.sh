#!/bin/bash
set -e

# Update Apache port if Render provides $PORT
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf
fi

# Storage link
php artisan storage:link || true

# Clear previous caches
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Run database migrations and seeds
echo "==> Running database migrations on TiDB..."
php artisan migrate --force || true
php artisan db:seed --force || true

# Cache configurations for speed
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

echo "==> Application ready, starting Apache..."
exec apache2-foreground
