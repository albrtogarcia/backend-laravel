# Backend API - Laravel + Filament

Este proyecto es una API desarrollada en Laravel, preparada para funcionar en un entorno Docker y con Filament instalado para administración avanzada.

## Características principales

- Laravel 10+ (estructura moderna)
- API RESTful lista para desarrollo y producción
- Integración con Filament (panel de administración)
- Preparado para Docker (ver monorepo para detalles de infraestructura)
- Configuración de base de datos para MariaDB en Docker

## Instrucciones para Filament

1. **Crear un usuario administrador para Filament**
   Ejecuta dentro del contenedor:
   ```sh
   docker exec -it lm-backend-api php artisan make:filament-user
   ```
   Sigue los prompts para nombre, email y contraseña.

1. **Acceso al panel de administración**
   Una vez creado el usuario, accede a:
   - http://localhost:8010/admin
   (o la ruta configurada en tu panel)

1. **Notas**
   - Si cambias el .env o la configuración, recuerda limpiar cachés:
     ```sh
     docker exec lm-backend-api php artisan config:clear
     docker exec lm-backend-api php artisan cache:clear
     docker exec lm-backend-api php artisan route:clear
     ```
   - Los usuarios de Filament se guardan en la base de datos. Cada entorno local debe crear su propio usuario admin la primera vez.

---

Para más detalles sobre la infraestructura y comandos globales, consulta el README del monorepo.
