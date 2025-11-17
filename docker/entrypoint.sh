#!/bin/sh
echo "APP_ENV=$APP_ENV"
env | grep APP_
set -e

if [ ! -f /var/www/html/database/database.sqlite ]; then
    echo "Creando archivo SQLite vacío..."
    touch /var/www/html/database/database.sqlite
fi

echo "Contenido de /var/www/html/database antes de migraciones:"
ls -l /var/www/html/database

# Crear archivo .env mínimo si no existe
if [ ! -f /var/www/html/.env ]; then
    echo "APP_ENV=development" > /var/www/html/.env
    echo "APP_DEBUG=true" >> /var/www/html/.env
    echo "DB_CONNECTION=sqlite" >> /var/www/html/.env
    echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> /var/www/html/.env
    echo ".env básico creado (sin secretos)."
fi

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
