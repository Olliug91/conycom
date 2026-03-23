@extends('layouts.app')

@section('title', 'Portafolio de Proyectos y Colaboraciones Técnicas')

@section('content')
    <!-- Header Seccion -->
    <section class="py-24 bg-white border-b border-corporate-border">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-3xl space-y-8">
                <div class="flex items-center gap-4">
                    <span class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c]">02 // Portafolio</span>
                    <div class="h-px w-12 bg-brand-dark/10"></div>
                </div>
                <h1 class="text-5xl md:text-8xl font-black tracking-tighter uppercase leading-[0.85] text-brand-dark">
                    PRESENCIA <br>
                    <span class="text-[#706f6c]">VERIFICADA.</span>
                </h1>
                <p class="text-xl text-brand-dark/60 font-sans leading-relaxed">
                    Un ecosistema de soluciones reales construido sobre la confianza y la solvencia técnica. Desde integraciones ERP complejas hasta despliegues ágiles en la nube.
                </p>
            </div>
        </div>
    </section>

    <!-- Grid Proyectos -->
    <section class="py-px bg-brand-dark/5">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-brand-dark/10">
            @foreach($projects as $project)
                <x-project-card :project="$project" />
            @endforeach
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-32 bg-corporate-light">
        <div class="max-w-4xl mx-auto px-6 text-center space-y-12">
            <h2 class="text-4xl md:text-6xl font-bold tracking-tighter uppercase leading-none">¿LISTO PARA <br> SU PRÓXIMA EVOLUCIÓN?</h2>
            <div class="pt-6">
                <a href="{{ route('contacto') }}" class="inline-block px-12 py-5 bg-brand-dark text-brand-white text-[10px] font-mono uppercase tracking-[0.3em] hover:scale-105 transition-all shadow-2xl">
                    Hablemos de tu Proyecto
                </a>
            </div>
        </div>
    </section>
@endsection
