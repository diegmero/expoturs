# 🌴 Expoturs - Costa Rica Travel Mart Platform

Plataforma web oficial para **ExpoTur Costa Rica 2026**, el evento líder de turismo en Costa Rica.

## 📋 Descripción

Expoturs es una plataforma web moderna construida para conectar compradores y vendedores en el sector turístico de Costa Rica. El sitio web presenta información sobre el evento ExpoTur 2026, incluyendo detalles para expositores, compradores, y patrocinadores.

## 🛠️ Stack Tecnológico

- **Laravel 12** - Framework PHP moderno
- **Livewire 3** - Componentes reactivos sin JavaScript complejo
- **Filament 3** - Panel de administración moderno y potente
- **TailwindCSS 4** - Framework CSS utility-first
- **Vite** - Build tool y bundler
- **MySQL/MariaDB** - Base de datos (producción)
- **SQLite** - Base de datos (desarrollo)

## ✨ Características

✅ **Un solo proyecto** - Frontend y panel admin integrados  
✅ **Un solo dominio** - Todo en el mismo dominio (`/` y `/admin`)  
✅ **Hosting tradicional** - Compatible con cPanel, Plesk, etc.  
✅ **Responsive** - Diseño adaptable a móviles y desktop  
✅ **Panel de administración** - Gestión completa con Filament  
✅ **Componentes reactivos** - Slider de imágenes con Livewire  
✅ **Diseño moderno** - Sistema de contenedores con bordes redondeados  

## 🚀 Instalación

### 🐳 Levantar entorno local con Docker Compose

```bash
docker-compose up --build
```

Accede a:
- Frontend: http://localhost:8000
- Panel Admin: http://localhost:8000/admin

### Requisitos Previos

- PHP 8.2 o superior
- Composer 2.x
- Node.js 18+ y NPM
- MySQL/MariaDB o SQLite

### Pasos de Instalación

```bash
# 1. Clonar el repositorio
git clone https://github.com/tu-usuario/expoturs.git
cd expoturs

# 2. Instalar dependencias de PHP
composer install

# 3. Instalar dependencias de Node.js
npm install

# 4. Configurar el entorno
cp .env.example .env
php artisan key:generate

# 5. Configurar base de datos en .env
# Para desarrollo (SQLite):
DB_CONNECTION=sqlite

# Para producción (MySQL):
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=expoturs
DB_USERNAME=usuario
DB_PASSWORD=contraseña

# 6. Ejecutar migraciones
php artisan migrate

# 7. Crear usuario administrador
php artisan make:filament-user

# 8. Compilar assets
npm run build

# 9. Iniciar servidor de desarrollo
php artisan serve
```

Accede a:
- **Frontend**: http://localhost:8000
- **Panel Admin**: http://localhost:8000/admin

## 📁 Estructura del Proyecto

```
expoturs/
├── app/
│   ├── Filament/              # Panel de administración
│   ├── Livewire/              # Componentes Livewire
│   │   └── ImageSlider.php    # Slider de imágenes
│   ├── Models/                # Modelos Eloquent
│   └── Providers/
│       └── Filament/
│           └── AdminPanelProvider.php
├── resources/
│   ├── views/
│   │   ├── index.blade.php           # Página principal
│   │   ├── expotur-2026.blade.php    # Página ExpoTur 2026
│   │   ├── layouts/
│   │   │   └── app.blade.php         # Layout principal
│   │   ├── components/
│   │   │   ├── global-header.blade.php
│   │   │   └── footer.blade.php
│   │   └── livewire/
│   │       └── image-slider.blade.php
│   └── css/
│       └── app.css
├── public/
│   └── images/               # Imágenes del sitio (crear)
├── routes/
│   └── web.php               # Rutas públicas
└── Docs/                     # Documentación completa
```

## 📖 Documentación

La documentación completa del proyecto está en la carpeta `/Docs`:

- **00-instalacion-rapida-ubuntu.md** - Instalación rápida del entorno
- **01-requisitos.md** - Requisitos del sistema
- **02-instalar-laravel.md** - Instalación de Laravel
- **03-instalar-filament.md** - Instalación de Filament
- **04-configuracion-basica.md** - Configuración inicial
- **05-comandos-utiles.md** - Comandos de desarrollo
- **06-despliegue-hosting.md** - Guía de despliegue

## 🎨 Sistema de Diseño

El proyecto utiliza un sistema de diseño consistente:

- **Márgenes laterales**: `mx-4` en todas las secciones
- **Bordes redondeados**: `rounded-[2.5rem]`
- **Ancho máximo**: `max-w-7xl mx-auto`
- **Padding responsive**: `px-8 lg:px-16`

### Paleta de Colores

```css
Turquesa: #4EAAA8, #5AB8B6
Azul Oscuro: #1E3A5F, #4A4E69
Naranja: #FF6B35, #FF8C42, #FFA07A
Amarillo: #FFD4A3
Celeste: #B8E0E0, #7EC8E3
```

## 🖼️ Imágenes Pendientes

El proyecto requiere las siguientes imágenes (ver instrucciones en archivos `.md` en la raíz):

- Logo ExpoTur (header)
- Imagen hero (surfistas)
- 5 imágenes del slider (aventura, playa, naturaleza, cultura, gastronomía)
- 3 logos del footer (ACOPROT, William Coleman, Somos Esencial)
- Imágenes para página ExpoTur 2026

## 🔧 Comandos Útiles

```bash
# Desarrollo
php artisan serve              # Iniciar servidor
npm run dev                    # Compilar assets con hot-reload

# Producción
npm run build                  # Compilar assets para producción
php artisan optimize           # Cachear configuración

# Base de datos
php artisan migrate            # Ejecutar migraciones
php artisan migrate:fresh      # Refrescar base de datos

# Filament
php artisan make:filament-user              # Crear usuario admin
php artisan make:filament-resource Post     # Crear recurso CRUD

# Caché
php artisan optimize:clear     # Limpiar toda la caché
php artisan config:cache       # Cachear configuración
```

## 🚀 Despliegue

Para desplegar en hosting tradicional (cPanel):

1. Subir archivos por FTP/SFTP
2. Configurar `.env` con datos de producción
3. Ejecutar `composer install --no-dev`
4. Ejecutar `php artisan migrate --force`
5. Configurar document root a `/public`
6. Configurar permisos: `chmod -R 755 storage bootstrap/cache`

Ver guía completa en `/Docs/06-despliegue-hosting.md`

## 📝 Licencia

Este proyecto es propiedad de **Expoturs Costa Rica**.

## 🤝 Contacto

Para más información sobre ExpoTur Costa Rica 2026, visita [expoturs.com](https://expoturs.com)

---

**ExpoTur 2026** - Where Opportunities Become Business! 🌴
