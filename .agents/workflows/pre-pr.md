# Workflow: Pre-PR y Verificación de Calidad (Conycom)

Checklist obligatorio antes de hacer commit/push o abrir una pull request.

1. **Formateo y Estilo:**
   ```bash
   vendor/bin/pint
   ```
2. **Suite de Tests:**
   ```bash
   php artisan test
   ```
3. **Compilación de Frontend:**
   ```bash
   npm run build
   ```
4. **Revisión del Sistema de Diseño (Swiss Technical):**
   - Comprobar precisión de bordes (`border-zinc-800`, `border-white/10`), fuentes monoespaciadas para cifras/métricas y alineación matemática.
5. **Commit Semántico en Español:**
   - Usar prefijo `ADD:`, `CHANGE:`, `FIX:`, `REFACTOR:` o `DOCS:`.
