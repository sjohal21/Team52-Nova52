#!/bin/bash

# Wait for the database to be ready
echo "Waiting for database to be ready..."
while ! nc -z db 3306; do
  sleep 1
done
echo "Database is ready!"

# Run migrations if they haven't been run yet
if [ ! -f /webfiles/migrations_completed ]; then
    echo "Running migrations..."
    php artisan migrate --force --seed
    touch /webfiles/migrations_completed
fi

# Run Laravel seeders (if needed)
# php artisan db:seed --force

# Start Apache in the foreground
exec apache2-foreground
