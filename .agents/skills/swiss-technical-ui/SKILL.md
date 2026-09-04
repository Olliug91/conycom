---
name: swiss-technical-ui
description: Pautas del sistema de diseño Swiss Technical para Conycom (precisión, monocromático, alta densidad técnica)
---

# Skill: Swiss Technical UI System (Conycom)

Consulta esta guía al diseñar o modificar cualquier interfaz o componente en Conycom.

## 1. Filosofía de Diseño
- **Inspiración Suiza e Industrial:** Claridad matemática, retícula rígida, jerarquía tipográfica sin ambigüedades.
- **Paleta Monocromática:** Escala de grises (`zinc-950` a `zinc-100`) con micro-contrastes y toques sutiles de blanco puro para titulares.
- **Bordes Milimétricos:** Líneas finas divisorias (`border-zinc-800` o `border-zinc-200/10`) que delimitan módulos y celdas.
- **Tipografía Dual:**
  - Sans-serif limpia y geométrica para prosa y titulares.
  - Monoespaciada (`font-mono`) para badges de tecnologías, hashes, fechas de versiones, métricas de rendimiento y arquitectura.

## 2. Pautas de Componentes
- **Tarjetas Técnicas:** Esquinas mínimas (`rounded-none` o `rounded-md`), fondos con leve elevación (`bg-zinc-900/50`) y acentos de borde al hover.
- **Interactividad Alpine.js:** Animaciones rápidas, precisas y funcionales (fade-in, transiciones de 150-200ms sin rebotes exagerados).
- **Cero Elementos Superfluos:** Todo elemento visual debe aportar información sobre la solidez de la ingeniería de software de Conycom.
