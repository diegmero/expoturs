#!/bin/sh
echo "APP_ENV=$APP_ENV"
env | grep APP_
set -e

# Verificar si estamos en producción
if [ "$APP_ENV" = "production" ]; then
    echo "Running in production environment. Running migrations without seeding..."
    php artisan migrate --force
else
    # Verificar si la base de datos ya está migrada.
    MIGRATIONS=$(php artisan migrate:status | grep 'Ran' | wc -l)

    if [ "$MIGRATIONS" -eq 0 ]; then
        echo "No migrations found. Running migrate:fresh --seed..."
        php artisan migrate:fresh --seed
    else
        echo "Database already migrated. Skipping seed."
    fi
fi

# Ejecutar el comando original del contenedor (apache2-foreground)
exec "$@"
