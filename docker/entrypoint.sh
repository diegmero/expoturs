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

    # ===== NUEVA SECCIÓN: ESPERAR A MYSQL =====
    echo "Waiting for MySQL to be ready..."
    MAX_TRIES=30
    COUNT=0
    
    until php artisan db:show 2>/dev/null || [ $COUNT -eq $MAX_TRIES ]; do
        COUNT=$((COUNT + 1))
        echo "MySQL is unavailable - attempt $COUNT/$MAX_TRIES - sleeping"
        sleep 2
    done

    if [ $COUNT -eq $MAX_TRIES ]; then
        echo "ERROR: MySQL did not become available in time"
        exit 1
    fi
    
    echo "MySQL is ready!"
    # ===== FIN NUEVA SECCIÓN =====

    # Verificar si la base de datos ya está migrada.
    MIGRATIONS=$(php artisan migrate:status 2>/dev/null | grep 'Ran' | wc -l || echo "0")
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