# 🚀 Quick Start - Guía Rápida

## Para Desarrollo Local

```bash
# 1. Clonar el repo
git clone https://github.com/tu-usuario/expoturs.git
cd expoturs

# 2. Levantar con Docker
docker compose up --build

# 3. Acceder
# Frontend: http://localhost:8000
# Admin: http://localhost:8000/admin
# Usuario: admin@expotur.local
# Contraseña: admin1234
```

## Para Producción con Dokploy

1. **Conectar repositorio**
   - Ve a Dokploy → New Project
   - Selecciona tu repo de GitHub

2. **Configurar variables de entorno**
   - Copia variables de `.env.production.example`
   - Cambia valores sensibles:
     ```
     APP_KEY=base64:xxxxx (generar localmente)
     DB_HOST=tu-bd.com
     DB_PASSWORD=contraseña_fuerte
     ADMIN_PASSWORD=contraseña_fuerte
     ```

3. **Deploy**
   - Dokploy automáticamente:
     - Construye la imagen
     - Ejecuta migrations
     - Crea usuario admin
     - Levanta la app

## Para Producción con Coolify

1. **Conectar repositorio**
   - Ve a Coolify → New Application
   - Selecciona Docker Compose

2. **Configurar variables**
   - Añade variables de `.env.production.example`

3. **Deploy**
   - Coolify usa `docker-compose.yml` del repo

## Para Producción con Kubernetes

```bash
# 1. Crear ConfigMap
kubectl create configmap expotur-config \
  --from-literal=APP_ENV=production \
  --from-literal=APP_DEBUG=false

# 2. Crear Secret
kubectl create secret generic expotur-secrets \
  --from-literal=APP_KEY='base64:xxxxx' \
  --from-literal=DB_PASSWORD='xxxxx'

# 3. Aplicar deployment
kubectl apply -f k8s-deployment.yaml
```

## Configuración de GitHub para CI/CD

1. **Añadir Secrets** (Settings → Secrets)
   ```
   APP_KEY=base64:xxxxx
   DB_PASSWORD=xxxxx
   DOCKER_USERNAME=tu-usuario
   DOCKER_PASSWORD=token-docker
   ```

2. **Branch Protection** (Settings → Branches)
   - Requiere Pull Request
   - Requiere que pasen tests
   - Requiere revisión de código

3. **Workflow automático**
   - El archivo `.github/workflows/deploy.yml` ya está configurado
   - Automáticamente construye y pushea a Docker Hub

## Variables Críticas

### Desarrollo
```env
APP_ENV=local
APP_DEBUG=true
DB_HOST=db
DB_PASSWORD=expoturs
```

### Producción
```env
APP_ENV=production
APP_DEBUG=false
DB_HOST=tu-bd-produccion.com
DB_PASSWORD=contraseña_fuerte_16_caracteres_minimo
```

## Comandos Útiles

```bash
# Docker
docker compose up --build          # Levantar con rebuild
docker compose down -v             # Parar y limpiar volúmenes
docker compose logs app            # Ver logs

# Artisan
docker compose exec app php artisan migrate --force
docker compose exec app php artisan make:filament-user
docker compose exec app php artisan key:generate --force

# Git
git add .
git commit -m "Descripción clara del cambio"
git push origin main
```

## Checklist Antes de Producción

- [ ] `.env` NO está en Git
- [ ] `APP_KEY` está generada
- [ ] `APP_DEBUG=false`
- [ ] `APP_ENV=production`
- [ ] BD está configurada y accesible
- [ ] HTTPS está habilitado
- [ ] Secrets están configurados en GitHub
- [ ] Workflow de CI/CD está activo
- [ ] Branch protection está habilitada
- [ ] Backups de BD están configurados

## Documentación Completa

- `DEPLOYMENT.md` - Guía detallada de despliegue
- `SECURITY.md` - Mejores prácticas de seguridad
- `GITHUB_SETUP.md` - Configuración de GitHub Actions
- `README.md` - Información general del proyecto

## Soporte

Para problemas:
1. Revisa los logs: `docker compose logs app`
2. Consulta la documentación en `DEPLOYMENT.md`
3. Revisa `SECURITY.md` para temas de seguridad
