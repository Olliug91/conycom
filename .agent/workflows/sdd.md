---
description: Proceso de Spec-Driven Development para este proyecto
---

Este workflow guía al Agente Antigravity para aplicar SDD (Spec-Driven Development) de forma proactiva.

### Pasos:

1. **Escuchar el requerimiento**: Cuando el usuario solicite un cambio (diseño, funcionalidad, bug fix), NO codificar inmediatamente.
2. **Generar el archivo Spec**: Crear un archivo en `specs/` (ej. `002-feature-name.spec.md`) siguiendo el formato definido en el plan inicial.
3. **Draft de especificación**: Definir los objetivos, requisitos y criterios de aceptación basados en lo solicitado.
    - Set status to: `Draft`
4. **Solicitar Review**: Mostrar el spec al usuario para su aprobación o ajustes.
5. **Aprobación**: Cuando el usuario esté de acuerdo, cambiar status a: `Ready`.
6. **Implementación**: Una vez en `Ready`, realizar los cambios en el código guiados por el spec.
7. **Cierre**: Actualizar el spec a: `Completed` y trasladar a `specs/archive/` si se desea mantener limpia la carpeta principal.

// turbo
8. **Verificación de Calidad**: Correr tests si existen y asegurar que se cumplen todos los criterios de aceptación.
