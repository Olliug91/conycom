# Spec-017: Social Authority (OpenGraph & SEO)

## Context
Now that Conycom has integrated LinkedIn, it is essential that when the URL is shared, it displays professional, high-fidelity metadata. This reinforces the "Trayectoria de Precisión" (Trajectory of Precision) brand.

## Objectives
- Implement OpenGraph tags in the global layout.
- Optimize metadata for LinkedIn and other social crawlers.
- Ensure each page serves a unique, SEO-optimized title and description.
- Define a default "Brand Image" for social previews.

## Requirements
- `og:title`, `og:description`, `og:image`, `og:url`, `og:type`.
- `twitter:card`, `twitter:title`, `twitter:description`, `twitter:image`.
- Canonical URL support.
- Centralized metadata management in `layouts/app.blade.php`.

## Proposed Changes
- Modify `layouts/app.blade.php` to include `@stack('meta')` or direct OpenGraph fields.
- Update `config/corporate.php` with a `social_image` path.
- Update each view to provide its specific metadata.
