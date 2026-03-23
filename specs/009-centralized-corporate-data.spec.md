# Spec-009: Centralización de Datos Corporativos

## Descripción
Establecer una fuente única de verdad para los datos de la empresa (razón social, contacto, dirección) para asegurar la consistencia en todas las secciones del sitio web (Footer, Contacto, Avisos Legales, etc.).

## Datos de la Empresa
- **Razón Social**: CONECTIVIDAD Y COMUNICACIONES S.L.
- **Email Principal**: `guille@conycom.com`
- **Email Secundario**: `guillermo.tudela@conycom.com`
- **Teléfono**: `676362738` (Formato sugerido: `+34 676 36 27 38`)
- **Dirección**: `Camino Nuevo Picaña 5 22, 46014 Valencia`

## Objetivos
- [ ] **Centralización**: Crear un archivo de configuración en Laravel (`config/corporate.php`).
- [ ] **Consistencia**: Sustituir cualquier dato "hardcoded" en las vistas por llamadas a `config('corporate.key')`.
- [ ] **Mantenibilidad**: Facilitar futuros cambios en la información de contacto desde un solo punto.

## Criterios de Aceptación
- [ ] Existe el archivo `config/corporate.php` con los datos correctos.
- [ ] El Footer muestra los datos actualizados.
- [ ] La página de Contacto utiliza los datos de configuración.
- [ ] No quedan residuos de datos antiguos o placeholders en las vistas principales.
