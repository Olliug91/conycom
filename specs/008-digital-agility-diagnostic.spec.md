# Spec-008: Diagnóstico de Agilidad Digital (Interactive Tool)

## Descripción
Crear una herramienta interactiva tipo "quiz técnico" que permita al visitante evaluar el estado actual de su infraestructura digital y recibir una recomendación experta preliminar de Conycom.

## Objetivos
- [ ] **Engagement**: Retener al usuario con una experiencia dinámica y útil.
- [ ] **Captación**: Convertir visitantes pasivos en leads cualificados.
- [ ] **Posicionamiento**: Reforzar la imagen de Conycom como expertos en diagnóstico y solución de problemas técnicos complejos.

## Funcionalidad (User Flow)
1.  **Inicio**: Un botón/bloque atractivo: "¿Qué tan preparada está su empresa para escalar?".
2.  **Preguntas (4-5 máximas)**:
    - *Estado de Sistemas*: (Legacy/Monolítico, Híbrido, Cloud Native).
    - *Mayor Fricción*: (Lentitud, Errores de Sync, Coste de Mantenimiento, Miedo al cambio).
    - *Frecuencia de Fallos*: (Diaria, Semanal, Rara vez).
    - *Objetivo 2026*: (Escalar ventas, Automatizar procesos, Modernizar imagen).
3.  **Cálculo**: Algoritmo simple que asigne pesos a las respuestas.
4.  **Resultado**: 
    - Score de Agilidad (0-100%).
    - Diagnóstico breve (ej: "Riesgo de Obsolescencia Alto" o "Estructura Sólida pero Rígida").
    - Recomendación estratégica de Conycom.
5.  **CTA Final**: "Solicitar Informe de Diagnóstico Completo".

## Requisitos Técnicos
- **Frontend**: Alpine.js para la lógica de estados y transiciones suaves.
- **Estética**: Consistente con Spec-006 (Swiss Technical). Progress bars, tipografía Inter, tonos grises técnicos.
- **Ubicación**: Sugerido un bloque destacado en la Home o una sección "Servicios".

## Criterios de Aceptación
- [ ] Interfaz fluida sin recargas de página.
- [ ] Resultados coherentes con las respuestas.
- [ ] Diseño 100% responsivo.
- [ ] El CTA final redirige al formulario de contacto con el resultado pre-cargado (opcional).
