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

    <!-- Casos de Estudio Destacados (Laravel Partners) -->
    <section class="bg-corporate-light py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-12">
            <div class="mb-12 border-b border-brand-dark/10 pb-8">
                <h2 class="text-2xl font-bold tracking-tighter uppercase">Casos de Éxito: Arquitectura Enterprise</h2>
                <p class="text-brand-dark/60 font-sans mt-2">Soluciones de alta disponibilidad y lógica compleja construidas en Laravel.</p>
            </div>
            
            <div x-data="{ activeSlide: 0, slides: {{ count($caseStudies) }} }" class="relative">
                <!-- Slides Container -->
                <div class="overflow-hidden relative shadow-2xl">
                    <div class="flex transition-transform duration-700 ease-in-out" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                        @foreach($caseStudies as $case)
                            <div class="w-full flex-shrink-0">
                                <x-case-study-card :case="$case" />
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation Controls -->
                <div class="flex flex-col sm:flex-row items-center justify-between mt-8 gap-6">
                    <div class="flex gap-3">
                        <template x-for="i in slides" :key="i">
                            <button @click="activeSlide = i - 1" 
                                :class="activeSlide === i - 1 ? 'bg-brand-dark w-12' : 'bg-brand-dark/20 w-3 hover:bg-brand-dark/40'" 
                                class="h-2 rounded-full transition-all duration-300"></button>
                        </template>
                    </div>
                    
                    <div class="flex gap-4">
                        <button @click="activeSlide = activeSlide === 0 ? slides - 1 : activeSlide - 1" class="p-4 border border-brand-dark/20 hover:bg-brand-dark hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button @click="activeSlide = activeSlide === slides - 1 ? 0 : activeSlide + 1" class="p-4 border border-brand-dark/20 hover:bg-brand-dark hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid Proyectos Históricos -->
    <section class="py-24 bg-brand-dark/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-12">
            <h2 class="text-2xl font-bold tracking-tighter uppercase">Histórico de Proyectos & Colaboraciones</h2>
        </div>
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
