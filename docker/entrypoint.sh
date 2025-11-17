#!/bin/sh
set -e

# Verificar si la base de datos ya está migrada.
# Hacemos esto contando las tablas en la base de datos.
MIGRATIONS=$(php artisan migrate:status | grep 'Ran' | wc -l)

if [ "$MIGRATIONS" -eq 0 ]; then
    echo "No migrations found. Running migrate:fresh --seed..."
    php artisan migrate:fresh --seed
else
    echo "Database already migrated. Skipping seed."
fi

# Ejecutar el comando original del contenedor (apache2-foreground)
exec "$@"
