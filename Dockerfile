# Usar una imagen base de PHP con Apache
FROM php:8.3-apache

# Argumentos para el usuario y grupo
ARG UID
ARG GID

# Instalar dependencias del sistema y Node.js
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libicu-dev \
    && curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs

# Limpiar cache de apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear un usuario y grupo no-root
RUN groupadd -g ${GID:-1000} www && \
    useradd -u ${UID:-1000} -g www -m www

# Copiar configuración de Apache
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copiar el código de la aplicación
COPY . /var/www/html

# Copiar .env.example y crear .env si no existe
RUN if [ ! -f /var/www/html/.env ]; then cp /var/www/html/.env.example /var/www/html/.env; fi

# Copiar y dar permisos de ejecución al script de entrada
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Cambiar propietario de los archivos
RUN chown -R www:www /var/www/html

# Cambiar al usuario no-root TEMPORALMENTE para instalar dependencias
USER www

# Instalar dependencias de Composer
RUN composer install --optimize-autoloader --no-dev

# Generar APP_KEY después de instalar Composer
RUN cd /var/www/html && php artisan key:generate --force

# Instalar dependencias de NPM y construir assets
RUN npm install && npm run build

# IMPORTANTE: Volver a root para que Apache pueda correr
USER root

# Establecer el script de entrada
ENTRYPOINT ["entrypoint.sh"]

# Exponer el puerto 80
EXPOSE 80

# Comando por defecto que se pasará al entrypoint
CMD ["apache2-foreground"]