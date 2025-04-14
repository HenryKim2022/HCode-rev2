#!/bin/bash

# Set directory permissions
find . -type d -exec chmod 755 {} \;

# Set file permissions
find . -type f -exec chmod 644 {} \;

# Ensure storage and cache directories are writable (for Laravel or similar frameworks)
chmod -R 775 storage bootstrap/cache

# Activate storage link
php artisan storage:link

# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install frontend dependencies (if applicable)
if [ -f "package.json" ]; then
    npm install
    npm run build
fi
