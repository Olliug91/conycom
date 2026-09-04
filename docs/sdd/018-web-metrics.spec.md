# Spec-018: Web Metrics (Analytics)

## Context
To understand the impact and reach of the Conycom website, we need to implement a tracking system. This system must be GDPR compliant and respectful of the user's cookie preferences.

## Objectives
- Integrate Google Analytics 4 (GA4) or an equivalent service.
- Ensure the tracking script only activates upon user consent (via the Cookie Banner).
- Centralize the Tracking ID management.

## Requirements
- `GOOGLE_ANALYTICS_ID` in `.env`.
- Conditional loading of the `gtag.js` script.
- Integration with the Alpine.js Cookie Banner state.

## Proposed Changes
- Update `config/corporate.php` with `analytics_id`.
- Update `layouts/app.blade.php` with the Google Tag snippet.
- Refine `components/cookie-banner.blade.php` to handle script Activation.
