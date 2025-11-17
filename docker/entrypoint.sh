#!/bin/sh
set -e

if [ "$1" = "apache2-foreground" ]; then
    # Verificar si la base de datos ya está migrada.
    MIGRATIONS=$(php artisan migrate:status | grep 'Ran' | wc -l)
    if [ "$MIGRATIONS" -eq 0 ]; then
        echo "No migrations found. Running migrate:fresh --seed..."
        php artisan migrate:fresh --seed
    else
        echo "Database already migrated. Skipping seed."
    fi
fi

exec "$@"
