#!/bin/bash
set -e

# Update Apache port if Render provides $PORT
if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf
fi

# Create storage symlink
php artisan storage:link || true

# Cache configurations
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Run database migrations
php artisan migrate --force || true

# Run filament optimization
php artisan filament:optimize || true

# Start Apache in foreground
exec apache2-foreground
