<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Conectividad y Comunicaciones S.L. - Soluciones IT de gran envergadura y agilidad digital para tu negocio. Más de 30 años de experiencia.">
    
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
