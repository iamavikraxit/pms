#!/bin/bash
set -e

# Run migrations (optional, usually done manually or via a separate job)
# php artisan migrate --force

# Create storage link if not exists
php artisan storage:link --quiet || true

# Cache configuration, routes, and views for production
# NOTE: We do this at runtime to ensure environment variables are correctly picked up
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Execute the original command (php-fpm)
exec "$@"
