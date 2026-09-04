---
title: Hero Interactivo "Data Flow / Nodos"
status: Ready
author: Antigravity
date: 2026-03-25
id: 019-interactive-node-hero
---

# Descripción
Implementar un fondo interactivo en el Hero basado en una red de nodos (partículas que se conectan) que reacciona al movimiento del ratón. Esta visualización representa el "Ecosistema Vivo" de Conycom (flujo de datos, integración de sistemas, orquestación de APIs y bases de datos).
Sirve como diferenciador visual para reforzar el mensaje de "Arquitectura de Software" frente al estándar de "Desarrollo Web".

# Objetivos
- [ ] Crear un lienzo (canvas) en el fondo de la sección Hero.
- [ ] Generar un sistema de partículas (nodos) que se muevan lentamente.
- [ ] Dibujar líneas (conexiones) físicas entre nodos que estén a cierta distancia.
- [ ] Añadir interactividad: las partículas son atraídas o repelidas sutilmente por el cursor del usuario.
- [ ] Estilo estricto Swiss Minimalist: colores blanco/negro/gris técnico (sin colores base vivos).

# Requisitos Técnicos
- Utilizar Vanilla JavaScript (Canvas API) para máximo rendimiento, o una librería ligera si ya está incluida (no añadir librerías pesadas innecesarias si se puede hacer en vanilla).
- Asegurar que el componente de Canvas esté posicionado de forma absoluta detrás del contenido del texto del Hero (`z-index` negativo).
- El texto superior debe mantener un contraste extremo (texto blanco/negro sobre el fondo de red).
- Responsive: el número de partículas debe ajustarse en base al ancho de la ventana para no penalizar el rendimiento en móviles.

# Criterios de Aceptación
- [ ] El efecto no interfiere con la lectura del texto "SOLIDEZ HEREDADA. AGILIDAD DIGITAL." o similar que esté definido en el `003-new-hero-storytelling.spec.md`.
- [ ] No existen problemas de rendimiento (60fps en escritorio).
- [ ] Los estilos cumplen con el `006-global-ui-design-system.spec.md`.

# Notas / Contexto
Esta implementación responde a la Propuesta 1 elegida para diferenciar visualmente a Conycom en su segmento (B2B tech consulting).
