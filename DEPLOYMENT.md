# Deployment Guide

Este documento describe cómo desplegar la aplicación Expotur en producción usando Docker, Dokploy, Coolify o Kubernetes.

## 🔐 Seguridad - Variables de Entorno

**IMPORTANTE:** Nunca commits `.env` a Git. Las variables sensibles deben configurarse en el servidor de despliegue.

### Variables Requeridas en Producción

```env
APP_KEY=base64:xxxxxxxxxxxxx  # Generar con: php artisan key:generate
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tu-dominio.com

DB_CONNECTION=mysql
DB_HOST=tu-host-mysql
DB_PORT=3306
DB_DATABASE=nombre_bd
DB_USERNAME=usuario_bd
DB_PASSWORD=contraseña_segura

# Opcional: para admin automático
ADMIN_EMAIL=admin@tu-dominio.com
ADMIN_PASSWORD=contraseña_segura_admin
ADMIN_NAME=Administrador
```

## 🐳 Docker - Producción

### Build de imagen

```bash
docker build -t expotur:latest .
```

### Variables de entorno en docker-compose.yml

Usa un archivo `.env` separado o pasa variables directamente:

```yaml
services:
  app:
    image: expotur:latest
    environment:
      - APP_ENV=production
      - APP_DEBUG=false
      - APP_KEY=${APP_KEY}
      - DB_HOST=${DB_HOST}
      - DB_DATABASE=${DB_DATABASE}
      - DB_USERNAME=${DB_USERNAME}
      - DB_PASSWORD=${DB_PASSWORD}
    # ... resto de configuración
```

## 🚀 Dokploy

1. Conecta tu repositorio GitHub
2. En la configuración del servicio, establece:
   - **Build Command**: `docker build -t expotur:latest .`
   - **Environment Variables**: Copia las variables de `.env.production.example`
   - **Port**: `80` (interno) → `8000` (externo, o el que desees)

3. Dokploy ejecutará automáticamente:
   - Build de la imagen
   - Migrations con `--force`
   - Seeders si es primera vez
   - Creación de usuario admin

## 🔧 Coolify

1. Conecta tu repositorio
2. Selecciona **Docker Compose** como tipo de despliegue
3. En **Environment**, añade las variables de `.env.production.example`
4. Coolify usará el `docker-compose.yml` del repositorio

## ☸️ Kubernetes

### Crear ConfigMap para variables no-sensibles

```bash
kubectl create configmap expotur-config \
  --from-literal=APP_ENV=production \
  --from-literal=APP_DEBUG=false \
  --from-literal=APP_URL=https://tu-dominio.com \
  --from-literal=DB_CONNECTION=mysql \
  --from-literal=DB_PORT=3306
```

### Crear Secret para datos sensibles

```bash
kubectl create secret generic expotur-secrets \
  --from-literal=APP_KEY='base64:xxxxx' \
  --from-literal=DB_HOST='mysql-service' \
  --from-literal=DB_DATABASE='expotur_prod' \
  --from-literal=DB_USERNAME='expotur' \
  --from-literal=DB_PASSWORD='contraseña_segura' \
  --from-literal=ADMIN_PASSWORD='contraseña_admin'
```

### Deployment YAML

```yaml
apiVersion: apps/v1
kind: Deployment
metadata:
  name: expotur-app
spec:
  replicas: 2
  selector:
    matchLabels:
      app: expotur
  template:
    metadata:
      labels:
        app: expotur
    spec:
      containers:
      - name: app
        image: tu-registry/expotur:latest
        ports:
        - containerPort: 80
        envFrom:
        - configMapRef:
            name: expotur-config
        - secretRef:
            name: expotur-secrets
        resources:
          requests:
            memory: "256Mi"
            cpu: "250m"
          limits:
            memory: "512Mi"
            cpu: "500m"
```

## 🗄️ Base de Datos

### Opción 1: MySQL en contenedor (desarrollo/staging)
```yaml
services:
  db:
    image: mysql:8.0
    environment:
      MYSQL_DATABASE: ${DB_DATABASE}
      MYSQL_USER: ${DB_USERNAME}
      MYSQL_PASSWORD: ${DB_PASSWORD}
      MYSQL_ROOT_PASSWORD: ${DB_ROOT_PASSWORD}
    volumes:
      - mysql_data:/var/lib/mysql
```

### Opción 2: Servicio Managed (producción recomendado)
- AWS RDS
- Google Cloud SQL
- Azure Database for MySQL
- DigitalOcean Managed Databases

Solo cambia `DB_HOST` a tu endpoint.

## 📋 Checklist de Despliegue

- [ ] `.env` NO está en Git
- [ ] `APP_KEY` está generada y configurada
- [ ] `APP_ENV=production` y `APP_DEBUG=false`
- [ ] Base de datos está configurada y accesible
- [ ] Variables sensibles están en secrets/environment del servidor
- [ ] Migrations corren automáticamente en el entrypoint
- [ ] Usuario admin se crea automáticamente si no existe
- [ ] Logs están configurados (revisar `LOG_CHANNEL`)
- [ ] HTTPS está habilitado en el dominio
- [ ] Backups de BD están configurados

## 🔄 CI/CD Pipeline (GitHub Actions)

Ejemplo básico:

```yaml
name: Deploy to Production

on:
  push:
    branches: [main]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      
      - name: Build Docker image
        run: docker build -t expotur:${{ github.sha }} .
      
      - name: Push to registry
        run: |
          docker tag expotur:${{ github.sha }} tu-registry/expotur:latest
          docker push tu-registry/expotur:latest
      
      - name: Deploy to Dokploy/Coolify
        run: |
          # Trigger webhook o deploy script
          curl -X POST ${{ secrets.DEPLOY_WEBHOOK }}
```

## 🆘 Troubleshooting

### Error: "No application encryption key has been specified"
```bash
# Generar APP_KEY
docker compose exec app php artisan key:generate --force
```

### Error: "Connection refused" a MySQL
- Verificar que MySQL está corriendo
- Verificar credenciales en `.env`
- Esperar a que MySQL esté listo (puede tomar 10-15 segundos)

### Migrations no corren automáticamente
- Revisar logs: `docker compose logs app`
- Ejecutar manualmente: `docker compose exec app php artisan migrate --force`

### Usuario admin no se crea
```bash
docker compose exec app php artisan make:filament-user
```

## 📚 Referencias

- [Laravel Deployment](https://laravel.com/docs/deployment)
- [Docker Best Practices](https://docs.docker.com/develop/dev-best-practices/)
- [Dokploy Docs](https://dokploy.com)
- [Coolify Docs](https://coolify.io)
