# Spec-021: Incorporación de Javier Cuervas María al Equipo (Ecosistema Estratégico)

## Descripción
Incorporar a **Javier Cuervas María** en la página de equipo (`/quienes-somos`) y en la configuración corporativa centralizada (`config/corporate.php`), dentro del bloque de ecosistema estratégico de Conycom junto a Belén García Miranda.

Javier aporta asesoramiento estratégico, impulso a proyectos y experiencia contrastada en desarrollo comercial en consultoras tecnológicas de primer nivel, colaborando de forma externa/estratégica para potenciar el crecimiento de la empresa.

## Estructura de Datos en `config/corporate.php`

Nueva clave `corporate.team.advisor`:
- **name**: `Javier Cuervas María`
- **role**: `Estrategia Comercial & Desarrollo de Negocio`
- **vision**: `Conectando la excelencia técnica con oportunidades de negocio sólidas y sostenibles.`
- **image**: `storage/img/javier.jpg` *(renderiza placeholder técnico `[ Advisor ]` mientras no exista el archivo físico)*
- **linkedin**: `https://www.linkedin.com/in/javiercuervas/`

## Ajustes de Layout (Swiss Technical)
- Al pasar de 3 a 4 integrantes, la rejilla de `resources/views/pages/quienes-somos.blade.php` evoluciona de `lg:grid-cols-3` (con desplazamientos `lg:mt-32` / `lg:mt-64`) a una retícula **2×2** (`grid md:grid-cols-2 gap-x-16 lg:gap-x-24 gap-y-20 items-start`) con escalonamiento sutil en la columna derecha (`md:mt-24`):
  - **Fila 1 (Núcleo Conycom):** Guillermo Tudela Soler (`1996 // Fundador`) y Guillermo Tudela Marco (`Hoy // Dirección Técnica`).
  - **Fila 2 (Ecosistema Estratégico):** Javier Cuervas María (`Ecosistema // Estrategia & Negocio`) y Belén García Miranda (`Ecosistema // Marketing & Diseño`).
- Se elimina un cierre `</div>` redundante existente en la sección de equipo.

## Criterios de Aceptación
- [x] `config/corporate.php` incluye la entrada `team.advisor` con nombre, rol, visión, ruta de imagen y enlace a LinkedIn.
- [x] `/quienes-somos` renderiza los 4 perfiles en retícula 2×2 equilibrada sin errores de HTML ni rotura cuando falta `storage/img/javier.jpg`.
- [x] Test feature valida respuesta HTTP 200 y presencia de los 4 miembros y el enlace de LinkedIn de Javier.
- [x] `vendor/bin/pint --test`, `php artisan test` y `npm run build` pasan sin errores.
