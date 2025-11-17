#!/bin/sh
set -e

if [ "$1" = "apache2-foreground" ]; then
    # Crear .env si no existe
    if [ ! -f /var/www/html/.env ]; then
        echo "Creating .env file..."
        cp /var/www/html/.env.example /var/www/html/.env
    fi

    # Generar APP_KEY si no existe en .env
    if ! grep -q "^APP_KEY=" /var/www/html/.env || grep -q "^APP_KEY=$" /var/www/html/.env; then
        echo "Generating APP_KEY..."
        php artisan key:generate --force
    fi

    # Verificar si la base de datos ya está migrada.
    MIGRATIONS=$(php artisan migrate:status | grep 'Ran' | wc -l)
    if [ "$MIGRATIONS" -eq 0 ]; then
        echo "No migrations found. Running migrate:fresh --seed..."
        php artisan migrate:fresh --seed --force
    else
        echo "Database already migrated. Skipping seed."
    fi

    # Crear usuario admin de Filament si no existe
    ADMIN_EMAIL=${ADMIN_EMAIL:-admin@expotur.local}
    ADMIN_PASSWORD=${ADMIN_PASSWORD:-admin1234}
    ADMIN_NAME=${ADMIN_NAME:-Administrador}
    php artisan tinker --execute="if (!\\App\\Models\\User::where('email', '$ADMIN_EMAIL')->exists()) { \\App\\Models\\User::create(['name' => '$ADMIN_NAME', 'email' => '$ADMIN_EMAIL', 'password' => bcrypt('$ADMIN_PASSWORD')]); }"
    echo "Usuario admin Filament: $ADMIN_EMAIL / $ADMIN_PASSWORD"
fi

exec "$@"
