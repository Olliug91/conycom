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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-16">
                <!-- Service 1 -->
                <div class="group">
                    <div class="w-16 h-16 bg-black flex items-center justify-center text-white mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black mb-6 tracking-tighter">INFRAESTRUCTURA</h3>
                    <p class="text-gray-500 mb-8 leading-relaxed font-light">Entornos de alta disponibilidad, virtualización y redes industriales seguras.</p>
                    <ul class="space-y-4 text-xs font-bold uppercase tracking-widest text-gray-400">
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Redes Globales</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Virtualización Cloud</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Disaster Recovery</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="group">
                    <div class="w-16 h-16 bg-black flex items-center justify-center text-white mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black mb-6 tracking-tighter">SOFTWARE</h3>
                    <p class="text-gray-500 mb-8 leading-relaxed font-light">Especialistas en ecosistemas Laravel. Aplicaciones robustas diseñadas para escalar.</p>
                    <ul class="space-y-4 text-xs font-bold uppercase tracking-widest text-gray-400">
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Custom Web Apps</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> API Integration</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Microservices</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="group">
                    <div class="w-16 h-16 bg-black flex items-center justify-center text-white mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.040L3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622l-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black mb-6 tracking-tighter">SEGURIDAD</h3>
                    <p class="text-gray-500 mb-8 leading-relaxed font-light">Protección integral de datos y cumplimiento normativo para el sector enterprise.</p>
                    <ul class="space-y-4 text-xs font-bold uppercase tracking-widest text-gray-400">
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Auditoría Técnica</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Managed Firewall</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-px bg-black"></span> Threat Detection</li>
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
