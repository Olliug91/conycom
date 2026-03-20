@extends('layouts.app')

@section('title', 'Casos de Éxito y Proyectos')

@section('content')
    <!-- Header Page B/N -->
    <header class="bg-black pt-40 pb-20 relative overflow-hidden text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-6xl font-black text-white tracking-tighter uppercase mb-4">PORTAFOLIO</h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto font-light italic">Tres décadas de solvencia técnica demostrada.</p>
        </div>
    </header>

    <!-- Projects Grid B/N -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-32">
                <!-- Project Card 1: Nuevo Centro -->
                <article class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="aspect-video bg-black flex items-center justify-center relative overflow-hidden">
                        <span class="text-white text-4xl font-black tracking-widest opacity-20 italic">NUEVO CENTRO</span>
                        <div class="absolute inset-0 border border-white/10 m-4"></div>
                    </div>
                    <div class="space-y-6">
                        <div class="text-xs font-black uppercase tracking-[0.4em] text-gray-400">Enterprise Network | 2023</div>
                        <h2 class="text-5xl font-black tracking-tighter uppercase leading-none">Modernización Infraestructura Red Global</h2>
                        <div class="space-y-4 text-gray-500 text-lg font-light leading-relaxed">
                            <p><strong>RETO:</strong> Infraestructura obsoleta limitando la escalabilidad corporativa.</p>
                            <p><strong>SOLUCIÓN:</strong> Despliegue de red convergente de fibra óptica de alta densidad con redundancia completa.</p>
                        </div>
                        <div class="flex gap-4 pt-6 border-t border-gray-100">
                            <span class="text-[10px] font-bold uppercase tracking-widest px-3 py-1 bg-gray-100 text-gray-500 rounded-none">FTTH_CORP</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest px-3 py-1 bg-gray-100 text-gray-500 rounded-none">NET_REDUNDANCY</span>
                        </div>
                    </div>
                </article>

                <!-- Project Card 2: BasicSoft -->
                <article class="grid lg:grid-cols-2 gap-16 items-center flex-row-reverse">
                    <div class="lg:order-last aspect-video bg-black flex items-center justify-center relative overflow-hidden">
                        <span class="text-white text-4xl font-black tracking-widest opacity-20 italic">BASICSOFT</span>
                        <div class="absolute inset-0 border border-white/10 m-4"></div>
                    </div>
                    <div class="space-y-6">
                        <div class="text-xs font-black uppercase tracking-[0.4em] text-gray-400">Laravel Development | 2024</div>
                        <h2 class="text-5xl font-black tracking-tighter uppercase leading-none">E-commerce Engine & ERP Sync</h2>
                        <div class="space-y-4 text-gray-500 text-lg font-light leading-relaxed">
                            <p><strong>RETO:</strong> Desincronización crítica de stock entre ventas y logística.</p>
                            <p><strong>SOLUCIÓN:</strong> Motor de ventas robusto en Laravel con middleware de sincronización en tiempo real.</p>
                        </div>
                        <div class="flex gap-4 pt-6 border-t border-gray-100">
                            <span class="text-[10px] font-bold uppercase tracking-widest px-3 py-1 bg-gray-100 text-gray-500 rounded-none">LARAVEL_12</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest px-3 py-1 bg-gray-100 text-gray-500 rounded-none">API_MIDDLEWARE</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>
@endsection
