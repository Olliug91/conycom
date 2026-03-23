# Spec-007: Sistema de Portafolio Escalable

## Descripción
Crear un sistema de portafolio consistente y escalable que permita mostrar los clientes reales de Conycom, generando confianza a través de la transparencia y la presencia de marca.

## Objetivos
- [ ] **Escalabilidad**: Permitir la adición de nuevos clientes de forma sencilla mediante componentes Blade reutilizables.
- [ ] **Consistencia**: Mantener la estética "Swiss Technical" (monocromo, tipografía Inter, metadatos técnicos).
- [ ] **Verificabilidad**: Incluir enlaces externos proactivos a los sitios reales de los clientes.
- [ ] **Jerarquía**: Diferenciar entre "Proyectos Destacados" (en Home) y "Listado Completo" (en página de Proyectos).

## Lista de Clientes Inicial
1. **Disfarsor Farmaceutica S.L.** (https://disfarsor.com)
2. **CC Nuevo Centro** (https://nuevocentro.es)
3. **Industrias Saludes** (https://isaludes.com)
4. **Federación de Karate CV** (https://fkaratecv.es)
5. **Betopeer** (https://betopeer.com) - Proyectos WordPress a medida.
6. **Fitness Fabra Gym** (https://fitnessfabragym.com)
7. **BasicSoft Club** (https://basicsoftclub.es)
8. **Veribridge** (https://veribridge.guillermotudela.es) - Middleware VeriFactu (AEAT).

## Requisitos de Diseño
- **Card Layout**: Grid estructurado con bordes de 1px.
- **Metadatos**: Cada tarjeta debe incluir tags técnicos (e.g., #Laravel, #WordPress, #ERP_Integration).
- **Interacción**: Hover effects dinámicos que revelen el enlace "Visitar Sitio" o detalles adicionales.

## Criterios de Aceptación
- [ ] Nueva página `/proyectos` con el listado completo.
- [ ] Sección de proyectos en `home.blade.php` actualizada con los 3-4 más relevantes.
- [ ] Todos los ítems tienen enlaces funcionales y verificables.
- [ ] Diseño responsivo y consistente con Spec-006.
