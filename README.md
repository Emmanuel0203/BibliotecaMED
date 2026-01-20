---
# Documentación del Proyecto: Sistema de Biblioteca

Este documento tiene como objetivo guiar en la instalación del aplicativo y detallar la ubicación de los archivos correspondientes a los entregables solicitados, demostrando la conformidad con los requerimientos técnicos.

## Instrucciones de Instalación

Para desplegar el proyecto en un entorno local, asegúrese de contar con los siguientes requisitos previos: **PHP 8.2+**, **Composer** y **PostgreSQL**.

Siga los pasos descritos a continuación:

```bash
# 1. Instalar dependencias del proyecto
composer install

# 2. Configurar el entorno
cp .env.example .env
# Nota: En Windows utilice "copy .env.example .env".
# Importante: Edite el archivo .env con las credenciales de su base de datos PostgreSQL.

# 3. Generar la clave de la aplicación
php artisan key:generate

# 4. Ejecutar migraciones y poblar la base de datos (Seeders)
php artisan migrate --seed
```

## Notas importantes

- Las tablas se han definido para coincidir con los requisitos: no contienen `created_at` ni `updated_at`.
- Las PK usan UUIDs.

## Exportar / importar base de datos (opcional)

```bash
# Exportar (SQL plano)
pg_dump -h 127.0.0.1 -p 5432 -U postgres -F p -f bd_biblioteca.sql bd_biblioteca

# Restaurar
psql -h 127.0.0.1 -p 5432 -U postgres -d bd_biblioteca -f bd_biblioteca.sql
```

## Contenido incluido

- Migraciones: `database/migrations/2026_01_20_*.php`
- Seeders: `database/seeders/*Seeder.php`
- `.env.example`

# Se completó la Parte 1,2,3,4 del Proyecto. La parte 5 y 7 no me alacanzó el tiempo para realizarlas y la parte 6 me quedé en curso.