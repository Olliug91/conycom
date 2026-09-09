---
name: entorno-local
description: Arrancar y operar el entorno local de Conycom con Laravel Herd (Mac), ejecución de tests en SQLite en memoria y compilación de assets Vite. Úsalo para desarrollo diario, verificación de estilos y tests.
---

# Entorno Local (Conycom)

Pautas operativas para el desarrollo en el entorno local de Guillo.

## 1. Topología Local (Laravel Herd)
- **Host:** `http://conycom.test` servido a través de **Laravel Herd**.
- **PHP:** 8.2+ con Composer.
- **Node.js:** v20+ con Vite 7 y Tailwind CSS 4.

## 2. Comandos Diarios
```bash
# Servidor de desarrollo Vite con HMR
npm run dev

# Compilación para producción
npm run build

# Verificación de estilo con Pint
vendor/bin/pint
vendor/bin/pint --test

# Batería de tests (SQLite en memoria)
php artisan test
```

## 3. Base de Datos en Tests
- `phpunit.xml` tiene configurado SQLite en memoria (`<env name="DB_CONNECTION" value="sqlite"/>` y `<env name="DB_DATABASE" value=":memory:"/>`).
- Jamás apuntes tests a la base de datos de producción ni ejecutes `migrate:fresh`.
