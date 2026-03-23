@extends('layouts.app')

@section('title', 'Política de Privacidad')

@section('content')
    <header class="bg-brand-dark pt-40 pb-20 text-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none uppercase leading-none">POLÍTICA DE PRIVACIDAD</h1>
        </div>
    </header>

    <section class="py-24 bg-white font-sans text-brand-dark/80">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 prose prose-sm max-w-none">
            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">1. RESPONSABLE DEL TRATAMIENTO</h2>
            <p class="mb-6">
                De conformidad con lo establecido en el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas (RGPD), le informamos que los datos que nos facilite serán tratados por {{ config('corporate.name') }}.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">2. FINALIDAD DEL TRATAMIENTO</h2>
            <p class="mb-6">
                Sus datos personales serán utilizados con la finalidad de gestionar su solicitud de contacto, auditoría o información sobre nuestros servicios. No se realizarán perfiles automatizados ni se usarán para finalidades distintas a las aquí indicadas sin su consentimiento.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">3. LEGITIMACIÓN</h2>
            <p class="mb-6">
                La base legal para el tratamiento de sus datos es el consentimiento del usuario al contactar a través de nuestros formularios o medios habilitados.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">4. DERECHOS DEL USUARIO</h2>
            <p class="mb-6">
                Usted tiene derecho a obtener confirmación sobre si estamos tratando sus datos personales. Puede ejercer sus derechos de acceso, rectificación, supresión, limitación, portabilidad y oposición enviando un correo electrónico a {{ config('corporate.email') }}.
            </p>

            <h2 class="text-2xl font-black mb-8 tracking-tighter uppercase text-brand-dark">5. CONSERVACIÓN DE LOS DATOS</h2>
            <p class="mb-6">
                Los datos proporcionados se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales.
            </p>
        </div>
    </section>
@endsection
