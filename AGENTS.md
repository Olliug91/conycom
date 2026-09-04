# Conycom — Guía para Agentes IA

Fichero de contexto multi-herramienta (estándar [AGENTS.md](https://agents.md)). Compatible de forma nativa con Codex/ChatGPT, Antigravity/Gemini y Cursor.

**Conycom** ([conycom.com](https://conycom.com)) es la web corporativa, plataforma de portafolio y vitrina de servicios tecnológicos de **Conectividad y Comunicaciones S.L.** (consultora y factoría de software especializada en el TALL Stack, arquitecturas SaaS, integraciones B2B y sistemas de alta concurrencia).

Stack: **Laravel 12 (PHP 8.2+) + Blade Component-based + TailwindCSS 4 + Alpine.js + Vite 7 + PHPUnit 11**.

La especificación de arquitectura, diseño y requerimientos vive en `docs/sdd/` (español, metodología SDD: todo cambio o nueva funcionalidad se documenta antes de implementarse).

---

## Comandos Habituales

```bash
# Servidor local y desarrollo concurrente (Herd en conycom.test)
composer dev                  # Servidor + queue + pail + vite concurrentes
npm run dev                   # Servidor de desarrollo Vite

# Calidad de código y tests
vendor/bin/pint               # Formateador de código Laravel Pint
vendor/bin/pint --test        # Verificar estilo de código sin modificar
php artisan test              # Ejecutar tests de PHPUnit
npm run build                 # Compilar assets de producción con Vite
```

---

## Reglas de Trabajo

- **Identificadores y código en inglés; textos de UI, documentación y conversación en español.**
- **Metodología SDD (Spec-Driven Development):** Todo requerimiento nuevo o ajuste estructural se formaliza primero en `docs/sdd/` con numeración secuencial (ej. `020-nombre-feature.spec.md`).
- **Commits:** Prefijo en mayúsculas `ADD:`, `CHANGE:`, `FIX:`, `REFACTOR:` o `DOCS:` + descripción concisa en español.
- **Identidad Visual (Swiss Technical):** Estética monocromática suiza de alta precisión (inspirada en manuales de ingeniería y diseño industrial), bordes técnicos milimétricos, tipografías sans-serif de alta legibilidad, micro-interacciones sutiles con Alpine.js y cero elementos superfluos.
- **Componentes Blade:** Las vistas se estructuran en `resources/views/components/` y `resources/views/pages/` para máxima reusabilidad.

---

## Arquitectura de la Aplicación

- `routes/web.php`: Rutas públicas (`/`, `/quienes-somos`, `/servicios`, `/proyectos`, `/contacto` y páginas legales).
- `app/Http/Controllers/`:
  - `ProjectController.php`: Presentación del portafolio, proyectos destacados y detalle.
  - `PageController.php`: Páginas estáticas y gestión de formularios de contacto.
  - `LegalController.php`: Cumplimiento normativo (Aviso Legal, Privacidad, Cookies).
- `resources/views/`:
  - `layouts/app.blade.php`: Shell principal con encabezados, metadatos y Vite.
  - `pages/`: Vistas de cada sección principal.
  - `components/`: Componentes modulares (botones, tarjetas técnicas, grids, héroes).
- `docs/sdd/`: Especificaciones SDD activas del sistema de diseño, storytelling y módulos interactivos.

---

## Skills (Agent Skills)

Canónicos en `.agents/skills/<nombre>/SKILL.md`:

| Skill | Cuándo usarlo |
|---|---|
| `swiss-technical-ui` | Diseñar o modificar vistas, componentes Blade o estilos siguiendo el sistema visual Swiss Technical de Conycom |

---

## Workflows

Playbooks paso a paso en `.agents/workflows/`:

- `nueva-funcionalidad.md` — SDD en `docs/sdd/` → Componente Blade → Tailwind/Alpine → Test/Build.
- `pre-pr.md` — Checklist de calidad (Pint, PHPUnit y Vite build) antes de commit/push.
