@extends('layouts.app')

@section('title', 'Aviso Legal')

@section('content')
    <header class="bg-brand-dark pt-40 pb-20 text-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none">AVISO LEGAL</h1>
        </div>
    </header>

    <section class="py-24 bg-white font-sans text-brand-dark/80">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 prose prose-sm max-w-none">
            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">1. INFORMACIÓN IDENTIFICATIVA</h2>
            <p class="mb-6">
                En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico (LSSI-CE), a continuación se reflejan los siguientes datos:
            </p>
            <ul class="list-disc pl-6 mb-8 space-y-2">
                <li><strong>Titular:</strong> {{ config('corporate.name') }}</li>
                <li><strong>CIF:</strong> {{ config('corporate.cif') }}</li>
                <li><strong>Domicilio Social:</strong> {{ config('corporate.address') }}</li>
                <li><strong>Correo Electrónico:</strong> {{ config('corporate.email') }}</li>
                <li><strong>Datos Registrales:</strong> {{ config('corporate.registry_info') }}</li>
            </ul>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">2. USUARIOS</h2>
            <p class="mb-6">
                El acceso y/o uso de este portal atribuye la condición de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">3. USO DEL PORTAL</h2>
            <p class="mb-6">
                Conycom proporciona el acceso a multitud de informaciones, servicios, programas o datos en Internet pertenecientes a Conycom. El USUARIO asume la responsabilidad del uso del portal. Dicha responsabilidad se extiende al registro que fuese necesario para acceder a determinados servicios o contenidos.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">4. PROPIEDAD INTELECTUAL E INDUSTRIAL</h2>
            <p class="mb-6">
                Conycom por sí o como cesionaria, es titular de todos los derechos de propiedad intelectual e industrial de su página web, así como de los elementos contenidos en la misma (a título enunciativo, imágenes, sonido, audio, vídeo, software o textos; marcas o logotipos, combinaciones de colores, estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, etc.).
            </p>
        </div>
    </section>
@endsection
