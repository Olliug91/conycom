@extends('layouts.app')

@section('title', 'Servicios IT y Consultoría Enterprise')

@section('content')
    <!-- Header Page B/N -->
    <header class="bg-black pt-40 pb-20 relative overflow-hidden text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-6xl font-black text-white tracking-tighter uppercase mb-4">SOLUCIONES</h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto font-light italic">Tres décadas transformando infraestructuras críticas.</p>
        </div>
    </header>

    <!-- Services Grid B/N -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                <!-- Service 1: Laravel & APIs -->
                <div class="group p-8 border border-brand-dark/5 hover:border-brand-dark transition-all duration-500">
                    <div class="w-12 h-12 bg-brand-dark text-white flex items-center justify-center mb-8">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-6 tracking-tighter uppercase">CORE BACKEND</h3>
                    <p class="text-brand-dark/60 text-sm mb-8 leading-relaxed font-sans">Especialistas en ecosistemas Laravel. Construimos el cerebro técnico que unifica sus datos y procesos.</p>
                    <ul class="space-y-3 text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">
                        <li class="flex items-center gap-2 underline underline-offset-4 decoration-brand-dark/10 text-brand-dark">API-First Design</li>
                        <li class="flex items-center gap-2">Microservices</li>
                        <li class="flex items-center gap-2">Data Security</li>
                    </ul>
                </div>

                <!-- Service 2: Ionic Mobile -->
                <div class="group p-8 border border-brand-dark/5 hover:border-brand-dark transition-all duration-500">
                    <div class="w-12 h-12 bg-brand-dark text-white flex items-center justify-center mb-8">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-6 tracking-tighter uppercase">MOVILIDAD APP</h3>
                    <p class="text-brand-dark/60 text-sm mb-8 leading-relaxed font-sans">Desarrollo con Ionic para iOS y Android. Presencia total con una única arquitectura optimizada.</p>
                    <ul class="space-y-3 text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">
                        <li class="flex items-center gap-2 text-brand-dark font-bold">iOS + Android</li>
                        <li class="flex items-center gap-2">Native Features</li>
                        <li class="flex items-center gap-2">Real-time Sync</li>
                    </ul>
                </div>

                <!-- Service 3: n8n Automation -->
                <div class="group p-8 border border-brand-dark/5 hover:border-brand-dark transition-all duration-500">
                    <div class="w-12 h-12 bg-brand-dark text-white flex items-center justify-center mb-8">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a2 2 0 01-2-2V5a2 2 0 012-2h4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-6 tracking-tighter uppercase">AUTOMATIZACIÓN</h3>
                    <p class="text-brand-dark/60 text-sm mb-8 leading-relaxed font-sans">Orquestación de procesos con n8n. Conectamos su negocio con el ecosistema digital global.</p>
                    <ul class="space-y-3 text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">
                        <li class="flex items-center gap-2 text-brand-dark font-bold underline underline-offset-4 decoration-brand-dark/10">n8n Workflows</li>
                        <li class="flex items-center gap-2">Cloud Connect</li>
                        <li class="flex items-center gap-2">AI Integration</li>
                    </ul>
                </div>

                <!-- Service 4: SDD Consult -->
                <div class="group p-8 border border-brand-dark/5 hover:border-brand-dark transition-all duration-500">
                    <div class="w-12 h-12 bg-brand-dark text-white flex items-center justify-center mb-8">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-6 tracking-tighter uppercase">AUDITORÍA SDD</h3>
                    <p class="text-brand-dark/60 text-sm mb-8 leading-relaxed font-sans">Planificación técnica mediante Spec-Driven Development. Precisión extrema para proyectos complejos.</p>
                    <ul class="space-y-3 text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">
                        <li class="flex items-center gap-2 text-brand-dark font-bold underline underline-offset-4 decoration-brand-dark/10 underline-offset-4 decoration-brand-dark/10 underline-offset-4 decoration-brand-dark/10">Metodología SDD</li>
                        <li class="flex items-center gap-2">Análisis de Riesgos</li>
                        <li class="flex items-center gap-2">Escalabilidad</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final B/N -->
    <section class="py-32 bg-corporate-light border-t border-black/5">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-5xl font-black tracking-tighter mb-8 italic">¿NECESTA UN ANÁLISIS?</h2>
            <div class="mt-12">
                <a href="{{ route('contacto') }}" class="inline-block px-12 py-5 bg-black text-white text-sm font-black uppercase tracking-widest hover:bg-gray-900 transition-all">
                    Solicitar Consultoría Gratuita
                </a>
            </div>
        </div>
    </section>
@endsection
