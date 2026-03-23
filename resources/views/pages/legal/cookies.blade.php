@extends('layouts.app')

@section('title', 'Política de Cookies')

@section('content')
    <header class="bg-brand-dark pt-40 pb-20 text-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none">POLÍTICA DE COOKIES</h1>
        </div>
    </header>

    <section class="py-24 bg-white font-sans text-brand-dark/80">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 prose prose-sm max-w-none">
            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">1. ¿QUÉ SON LAS COOKIES?</h2>
            <p class="mb-6">
                Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">2. TIPOS DE COOKIES QUE UTILIZA ESTA WEB</h2>
            <ul class="list-disc pl-6 mb-8 space-y-4">
                <li><strong>Cookies técnicas:</strong> Son aquellas que permiten al usuario la navegación a través de una página web y la utilización de las diferentes opciones o servicios que en ella existan.</li>
                <li><strong>Cookies de análisis:</strong> Son aquellas que, tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado.</li>
            </ul>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">3. CÓMO DESACTIVAR LAS COOKIES</h2>
            <p class="mb-6">
                Usted puede permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador. Para ello, puede consultar la ayuda de su navegador.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">4. CONSENTIMIENTO</h2>
            <p class="mb-6">
                Al navegar y continuar en nuestro sitio web nos indica que está consintiendo el uso de las cookies antes enunciadas, y en las condiciones contenidas en la presente Política de Cookies.
            </p>
        </div>
    </section>
@endsection
