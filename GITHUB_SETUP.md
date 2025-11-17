# 🔧 Configuración de GitHub para CI/CD

## 1. Configurar Secrets en GitHub

Ve a: **Settings → Secrets and variables → Actions**

Añade los siguientes secrets:

### Secrets Requeridos

```
APP_KEY                  # Generar con: php artisan key:generate
DB_PASSWORD              # Contraseña de BD en producción
DOCKER_USERNAME          # Tu usuario de Docker Hub
DOCKER_PASSWORD          # Token de Docker Hub (no contraseña)
DEPLOY_WEBHOOK           # URL del webhook de Dokploy/Coolify (opcional)
```

### Cómo generar APP_KEY

```bash
# Localmente
php artisan key:generate

# O en Docker
docker compose exec app php artisan key:generate --force

# Copia el valor de APP_KEY del archivo .env
cat .env | grep APP_KEY
```

### Cómo obtener Docker Token

1. Ve a [Docker Hub](https://hub.docker.com)
2. Inicia sesión
3. Ve a Account Settings → Security
4. Crea un nuevo **Personal Access Token**
5. Copia el token (aparece solo una vez)
6. Úsalo como `DOCKER_PASSWORD` en GitHub Secrets

## 2. Configurar Branch Protection

Ve a: **Settings → Branches → Add rule**

### Configuración Recomendada

- **Branch name pattern**: `main`
- ✅ Require a pull request before merging
- ✅ Require status checks to pass before merging
- ✅ Require branches to be up to date before merging
- ✅ Require code reviews before merging (mínimo 1)
- ✅ Dismiss stale pull request approvals when new commits are pushed
- ✅ Require status checks to pass

### Status Checks Requeridos

- `build` (del workflow de GitHub Actions)
- `docker-build` (si usas Docker)

## 3. Configurar Workflow de CI/CD

El archivo `.github/workflows/deploy.yml` ya está configurado.

### Qué hace el workflow

1. **En cada push a `main` o `develop`:**
   - Instala dependencias PHP y Node.js
   - Genera APP_KEY
   - Ejecuta migraciones
   - Ejecuta tests

2. **Si es push a `main` (después de pasar tests):**
   - Build de imagen Docker
   - Push a Docker Hub
   - (Opcional) Trigger de deploy en Dokploy/Coolify

## 4. Configurar Deploy Automático

### Opción A: Dokploy

1. Ve a Dokploy → Settings → Webhooks
2. Crea un webhook para tu aplicación
3. Copia la URL del webhook
4. Añádela como secret `DEPLOY_WEBHOOK` en GitHub
5. El workflow ejecutará el webhook automáticamente

### Opción B: Coolify

1. Ve a Coolify → Settings → Webhooks
2. Crea un webhook
3. Copia la URL
4. Añádela como secret en GitHub

### Opción C: Manual

Simplemente pushea a `main` y el workflow:
1. Construye la imagen Docker
2. La pushea a Docker Hub
3. Tú la descargas en tu servidor y la ejecutas

## 5. Monitorear Builds

Ve a: **Actions** para ver el estado de los builds

### Interpretación de Estados

- 🟢 **Success**: Todo OK, cambios listos para producción
- 🔴 **Failure**: Hay errores, revisa los logs
- 🟡 **In Progress**: Build en proceso

## 6. Desplegar en Producción

### Método 1: Automático (con Dokploy/Coolify)

El workflow automáticamente dispara el deploy cuando pusheas a `main`.

### Método 2: Manual

```bash
# En tu servidor
docker pull tu-usuario/expotur:latest
docker stop expotur-app
docker rm expotur-app
docker run -d \
  --name expotur-app \
  -e APP_ENV=production \
  -e APP_DEBUG=false \
  -e APP_KEY=base64:xxxxx \
  -e DB_HOST=tu-bd.com \
  -e DB_DATABASE=expotur_prod \
  -e DB_USERNAME=usuario \
  -e DB_PASSWORD=contraseña \
  -p 8000:80 \
  tu-usuario/expotur:latest
```

## 7. Troubleshooting

### Build falla en GitHub Actions

1. Revisa los logs en **Actions → [workflow] → [job]**
2. Busca el error específico
3. Soluciona localmente
4. Pushea de nuevo

### Docker push falla

- Verifica que `DOCKER_USERNAME` y `DOCKER_PASSWORD` son correctos
- Asegúrate que el token de Docker Hub no ha expirado
- Prueba login local: `docker login`

### Tests fallan

```bash
# Ejecuta localmente
php artisan test

# O en Docker
docker compose exec app php artisan test
```

### Migrations fallan

- Verifica que la BD está accesible
- Revisa que `DB_HOST`, `DB_USERNAME`, `DB_PASSWORD` son correctos
- Ejecuta manualmente: `docker compose exec app php artisan migrate --force`

## 8. Mejores Prácticas

✅ **Haz:**
- Usa ramas para cada feature (`feature/nueva-funcionalidad`)
- Crea Pull Requests para cambios en `main`
- Espera a que pasen los tests antes de mergear
- Revisa el código antes de mergear
- Escribe mensajes de commit descriptivos

❌ **No hagas:**
- Pushear directamente a `main`
- Commitear archivos `.env`
- Ignorar fallos en tests
- Mergear sin revisión de código
- Usar contraseñas en el código

## 9. Recursos

- [GitHub Actions Documentation](https://docs.github.com/en/actions)
- [Docker Hub Documentation](https://docs.docker.com/docker-hub/)
- [Dokploy Documentation](https://dokploy.com)
- [Coolify Documentation](https://coolify.io)
