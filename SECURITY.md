# 🔐 Guía de Seguridad

## Protección de Datos Sensibles

### 1. Variables de Entorno

**NUNCA** commits archivos `.env` a Git. El proyecto incluye `.gitignore` que protege:

```
.env
.env.backup
.env.*.backup
.env.local
.env.*.local
.env.production
```

### 2. Generación de APP_KEY

La `APP_KEY` se genera automáticamente en el contenedor Docker. Para regenerarla:

```bash
docker compose exec app php artisan key:generate --force
```

### 3. Credenciales de Base de Datos

**Desarrollo (Docker):**
```env
DB_USERNAME=expoturs
DB_PASSWORD=expoturs
```

**Producción:**
- Usa credenciales fuertes (mínimo 16 caracteres)
- Cambia el usuario y contraseña por defecto
- Usa un servicio managed (AWS RDS, Google Cloud SQL, etc.)

### 4. Credenciales de Admin

**Desarrollo:**
```env
ADMIN_EMAIL=admin@expotur.local
ADMIN_PASSWORD=admin1234
```

**Producción:**
- Cambia la contraseña inmediatamente después del primer login
- Usa una contraseña fuerte (mínimo 12 caracteres, mayúsculas, números, símbolos)
- Considera usar 2FA (Two-Factor Authentication)

## Seguridad en Docker

### 1. Imagen Base

Usa imágenes oficiales y actualizadas:
```dockerfile
FROM php:8.3-apache  # Versión específica, no 'latest'
```

### 2. Usuario No-Root

El contenedor corre con usuario `www` (no root):
```dockerfile
USER www
```

### 3. Secretos en CI/CD

GitHub Actions y otros CI/CD soportan secrets:

```yaml
- name: Deploy
  env:
    APP_KEY: ${{ secrets.APP_KEY }}
    DB_PASSWORD: ${{ secrets.DB_PASSWORD }}
```

## Seguridad en Producción

### 1. HTTPS Obligatorio

```env
APP_URL=https://tu-dominio.com
```

Configura SSL/TLS en tu servidor (Let's Encrypt es gratuito).

### 2. APP_DEBUG=false

```env
APP_ENV=production
APP_DEBUG=false
```

Nunca expongas debug en producción.

### 3. Logs Seguros

```env
LOG_LEVEL=warning
LOG_CHANNEL=stack
```

Almacena logs en un lugar seguro, no en el directorio web.

### 4. Permisos de Archivos

```bash
chmod -R 755 storage bootstrap/cache
chmod -R 644 storage/logs
```

### 5. Backups

- Realiza backups regulares de la BD
- Almacena backups en un lugar seguro (fuera del servidor)
- Prueba restauraciones periódicamente

### 6. Actualizaciones

Mantén actualizado:
- PHP
- Laravel
- Dependencias (Composer)
- Sistema operativo

## Seguridad en GitHub

### 1. Protege Ramas

- Requiere Pull Requests para cambios
- Requiere revisión de código
- Requiere que pasen tests antes de merge

### 2. Secrets

Configura en Settings → Secrets and variables:

```
APP_KEY=base64:xxxxx
DB_PASSWORD=xxxxx
DOCKER_USERNAME=xxxxx
DOCKER_PASSWORD=xxxxx
```

### 3. Branch Protection Rules

- Requiere que CI/CD pase
- Requiere al menos 1 aprobación
- Requiere que rama esté actualizada

## Checklist de Seguridad

- [ ] `.env` está en `.gitignore`
- [ ] `.env.production` NO está en Git
- [ ] `APP_KEY` está generada y segura
- [ ] `APP_DEBUG=false` en producción
- [ ] Contraseña de admin es fuerte
- [ ] HTTPS está habilitado
- [ ] Logs no exponen información sensible
- [ ] Backups están configurados
- [ ] Permisos de archivos son correctos
- [ ] Dependencias están actualizadas
- [ ] Secrets están configurados en CI/CD
- [ ] Branch protection está habilitada

## Recursos Adicionales

- [Laravel Security](https://laravel.com/docs/security)
- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [Docker Security Best Practices](https://docs.docker.com/engine/security/)
