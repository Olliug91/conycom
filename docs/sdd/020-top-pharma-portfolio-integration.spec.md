# Spec-020: Integración de Top-Pharma ERP en el Catálogo de Arquitectura y Portafolio

## Descripción
Formalizar la integración de **Top-Pharma ERP** en el catálogo de proyectos y en la sección de casos de estudio de Conycom (`pages/proyectos` y `pages/home`). Se sustituye la referencia previa genérica o ligada a tecnología legacy (`001/DS - Disfarsor / #FoxPro`) por el producto propio de Conycom, un ERP Cloud de misión crítica para la distribución mayorista farmacéutica.

## Objetivos Estratégicos
- [x] **Autoridad de Producto Propio**: Posicionar a Top-Pharma ERP como propiedad intelectual 100% de Conycom (marca comercial registrada en la OEPM), presentando a Disfarsor estrictamente como el cliente empresarial y entorno de validación en producción de alta demanda.
- [x] **Arquitectura Enterprise (Strangler Fig Pattern)**: Destacar la maestría técnica en la migración progresiva de sistemas de misión crítica: convivencia pacífica de módulos legacy y reescritura hacia Laravel y Livewire sin paradas operativas (*zero downtime*).
- [x] **Relevancia para Laravel Partners**: Demostrar la gestión de normativas complejas (SEVeM/NMVS, Fedicom v3, Facturae/SII/VeriFactu), colas asíncronas masivas, persistencia atómica por línea y diseño reactivo.

## Estructura de Datos en `ProjectController.php`

### 1. Proyecto en Catálogo (`getProjects()`)
- **ID**: `001/TP`
- **Título**: `Top-Pharma ERP`
- **Descripción**: Sistema ERP Cloud de misión crítica para la distribución mayorista farmacéutica. Gestión integral de almacén FEFO, verificación SEVeM y servidor telemático Fedicom v3 en alta disponibilidad.
- **Link**: `https://disfarsor.com` *(entorno de referencia en producción)*
- **Tags**: `['#Laravel', '#Livewire', '#SEVeM', '#Fedicom', '#Pharma']`

### 2. Caso de Estudio Destacado (`getCaseStudies()`)
- **ID**: `002/TP`
- **Título**: `Top-Pharma ERP (Core Distribution)`
- **Contexto**: Modernización de arquitectura de misión crítica para distribución mayorista farmacéutica (Validado en producción en Disfarsor).
- **Tech Stack**: `['Laravel', 'Livewire', 'MariaDB', 'SEVeM API', 'Fedicom v3', 'Queues / Workers']`
- **El Reto Arquitectónico**: Modernizar más de 30 años de lógica de negocio farmacéutica hiper-específica (trazabilidad unitaria, caducidades FEFO, normativas sanitarias estrictas y facturación electrónica) provenientes de un sistema legado en FoxPro, garantizando continuidad operativa absoluta en un almacén de alta rotación.
- **La Solución en Laravel**: Implementación del patrón de estrangulación (*Strangler Fig Pattern*). Coexistencia y migración modular hacia un núcleo en Laravel y Livewire: persistencia reactiva anti-apagones línea a línea, servidor/cliente telemático Fedicom v3, verificación instantánea SEVeM (DataMatrix) y colas asíncronas para reportes fiscales y bancarios.
- **Métricas de Impacto**:
  - `Trazabilidad`: `100% FEFO`
  - `Interoperabilidad`: `Fedicom v3`
  - `Disponibilidad`: `99.99%`

## Criterios de Aceptación
- [ ] `ProjectController.php` actualizado con el nuevo ID `001/TP` y el caso de estudio `002/TP`.
- [ ] La página principal (`/`) muestra Top-Pharma ERP como el primer proyecto destacado.
- [ ] La página de proyectos (`/proyectos`) renderiza el caso de estudio con sus métricas y stack técnico sin errores de layout.
- [ ] Test feature automatizado validando la presencia de Top-Pharma en ambas rutas.
- [ ] Verificación de Pint y build de producción de Vite exitosos.
