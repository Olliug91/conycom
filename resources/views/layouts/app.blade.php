<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Conectividad y Comunicaciones S.L. - Soluciones IT de gran envergadura y agilidad digital para tu negocio. Más de 30 años de experiencia.">
    <meta name="author" content="Conycom S.L.">
    
    <!-- OpenGraph / Social (Spec-017) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Soluciones IT y Enterprise') | Conycom">
    <meta property="og:description" content="Conectividad y Comunicaciones S.L. - Soluciones IT de gran envergadura y agilidad digital para tu negocio.">
    <meta property="og:image" content="{{ url(config('corporate.social_image')) }}">
    <meta property="og:image:secure_url" content="{{ url(config('corporate.social_image')) }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">

    <!-- Google Analytics / Metrics (Spec-018) -->
    @if(config('corporate.analytics_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('corporate.analytics_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            
            // Default consent mode (denied)
            gtag('consent', 'default', {
                'analytics_storage': 'denied',
                'ad_storage': 'denied'
            });

            gtag('js', new Date());
            gtag('config', '{{ config('corporate.analytics_id') }}');
        </script>
    @endif

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Soluciones IT y Enterprise') | Conycom">
    <meta name="twitter:description" content="Conectividad y Comunicaciones S.L. - Soluciones IT de gran envergadura y agilidad digital para tu negocio.">
    <meta name="twitter:image" content="{{ url(config('corporate.social_image')) }}">

    <!-- Page Specific Meta Override -->
    @stack('meta')
    
    <!-- SEO Titles -->
    <title>@yield('title', 'Soluciones IT y Enterprise') | Conycom</title>

    <!-- Google Fonts: Inter & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-corporate-light text-brand-dark font-sans antialiased selection:bg-brand-dark selection:text-brand-white">

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Cookie Consent Banner (Spec-014) -->
    <x-cookie-banner />

</body>
</html>
