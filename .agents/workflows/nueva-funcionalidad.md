# Workflow: Nueva Funcionalidad o Sección (Conycom)

Playbook paso a paso para aplicar la metodología SDD en Conycom.

1. **Documentación Previa en SDD:**
   - Crear o actualizar la especificación en `docs/sdd/` (ej. `020-nombre-feature.spec.md`).
   - Definir objetivos, componentes involucrados y criterios de aceptación técnicos.
2. **Implementación de Componentes y Vistas:**
   - Desarrollar los componentes modulares en `resources/views/components/` o páginas en `resources/views/pages/`.
   - Aplicar el sistema de diseño Swiss Technical (consultar skill `swiss-technical-ui`).
   - Añadir reactividad ligera con Alpine.js si procede.
3. **Verificación Local:**
   - Dar formato con `vendor/bin/pint`.
   - Ejecutar `php artisan test` para asegurar que las rutas y controladores responden correctamente.
   - Compilar assets con `npm run build`.
