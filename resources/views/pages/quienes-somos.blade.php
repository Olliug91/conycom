@extends('layouts.app')

@section('title', 'El Equipo y Nuestro Legado')

@push('meta')
    <meta property="og:description" content="Conoce al equipo detrás de Conycom: 28 años de visión, rigor y precisión técnica en ingeniería de sistemas.">
    <meta name="twitter:description" content="Conoce al equipo detrás de Conycom: 28 años de visión, rigor y precisión técnica en ingeniería de sistemas.">
@endpush

@section('content')
    <!-- Hero Header -->
    <header class="pt-48 pb-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <span class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c] mb-8 block">About // v2.0</span>
            <h1 class="text-6xl md:text-8xl font-black text-brand-dark tracking-tighter uppercase leading-none mb-12">
                EL FACTOR <br>
                <span class="text-[#706f6c]">HUMANO.</span>
            </h1>
            <p class="max-w-2xl text-xl text-brand-dark/70 font-sans leading-relaxed">
                28 años resolviendo problemas complejos de ingeniería no son el resultado de algoritmos, sino de la visión y rigor de un equipo obsesionado con la precisión.
            </p>
        </div>
    </header>

    <!-- The Team Grid -->
    <section class="py-32 bg-corporate-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-16 items-start">
                
                <!-- Founder: Guillermo Tudela Soler -->
                <div class="space-y-10 group">
                    <div class="max-w-[320px] aspect-[4/5] bg-brand-dark/5 overflow-hidden border border-brand-dark/10 relative shadow-inner">
                        @if(file_exists(public_path(config('corporate.team.founder.image'))))
                            <img src="{{ asset(config('corporate.team.founder.image')) }}" alt="{{ config('corporate.team.founder.name') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-[10px] font-mono text-brand-dark/20 uppercase">
                                [ Founder ]
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-brand-dark/5 opacity-40 group-hover:opacity-0 transition-opacity pointer-events-none"></div>
                    </div>
                    <div class="space-y-4">
                        <span class="text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">1996 // Fundador</span>
                        <div class="flex items-center justify-between gap-4">
                            <h2 class="text-2xl font-black tracking-tighter uppercase text-brand-dark leading-none">{{ config('corporate.team.founder.name') }}</h2>
                            @if(config('corporate.team.founder.linkedin'))
                                <a href="{{ config('corporate.team.founder.linkedin') }}" target="_blank" class="opacity-20 hover:opacity-100 transition-opacity">
                                    <svg class="w-4 h-4 fill-brand-dark" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                            @endif
                        </div>
                        <p class="text-sm font-bold text-brand-dark/40">{{ config('corporate.team.founder.role') }}</p>
                        <p class="text-sm text-brand-dark/60 font-sans leading-relaxed italic border-l-2 border-brand-dark/10 pl-4 py-1">
                            "{{ config('corporate.team.founder.vision') }}"
                        </p>
                        <p class="text-[13px] text-brand-dark/50 leading-relaxed font-sans pr-4">
                            Arquitecto de los sistemas críticos iniciales de Conycom. Su rigor y metodología en Visual FoxPro establecieron los estándares de fiabilidad que hoy seguimos honrando.
                        </p>
                    </div>
                </div>

                <!-- Lead: Guillermo Tudela Marco -->
                <div class="space-y-10 group lg:mt-32">
                    <div class="max-w-[320px] aspect-[4/5] bg-brand-dark/5 overflow-hidden border border-brand-dark/10 relative shadow-inner">
                        @if(file_exists(public_path(config('corporate.team.lead.image'))))
                            <img src="{{ asset(config('corporate.team.lead.image')) }}" alt="{{ config('corporate.team.lead.name') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                            <!-- Grain overlay -->
                            <div class="absolute inset-0 opacity-[0.2] pointer-events-none mix-blend-overlay" style="background-image: url('https://www.transparenttextures.com/patterns/natural-paper.png');"></div>
                        @else
                            <div class="w-full h-full flex items-center justify-center text-[10px] font-mono text-brand-dark/20 uppercase">
                                [ Lead ]
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-brand-dark/5 opacity-30 group-hover:opacity-0 transition-opacity pointer-events-none"></div>
                    </div>
                    <div class="space-y-4">
                        <span class="text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">Hoy // Dirección Técnica</span>
                        <div class="flex items-center justify-between gap-4">
                            <h2 class="text-2xl font-black tracking-tighter uppercase text-brand-dark leading-none">{{ config('corporate.team.lead.name') }}</h2>
                            @if(config('corporate.team.lead.linkedin'))
                                <a href="{{ config('corporate.team.lead.linkedin') }}" target="_blank" class="opacity-20 hover:opacity-100 transition-opacity">
                                    <svg class="w-4 h-4 fill-brand-dark" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                            @endif
                        </div>
                        <p class="text-sm font-bold text-brand-dark/40">{{ config('corporate.team.lead.role') }}</p>
                        <p class="text-sm text-brand-dark/60 font-sans leading-relaxed italic border-l-2 border-brand-dark/10 pl-4 py-1">
                            "{{ config('corporate.team.lead.vision') }}"
                        </p>
                        <p class="text-[13px] text-brand-dark/50 leading-relaxed font-sans pr-4">
                            Impulsor de la transformación digital de Conycom. Especialista en orquestación de APIs y desarrollo de alta velocidad mediante Spec-Driven Development.
                        </p>
                    </div>
                </div>

                <!-- Collaborator: Belen Garcia Casa -->
                <div class="space-y-10 group lg:mt-64">
                    <div class="max-w-[320px] aspect-[4/5] bg-brand-dark/5 overflow-hidden border border-brand-dark/10 relative shadow-inner">
                        @if(file_exists(public_path(config('corporate.team.collaborator.image'))))
                            <img src="{{ asset(config('corporate.team.collaborator.image')) }}" alt="{{ config('corporate.team.collaborator.name') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-[10px] font-mono text-brand-dark/20 uppercase">
                                [ Partner ]
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-brand-dark/5 opacity-40 group-hover:opacity-0 transition-opacity pointer-events-none"></div>
                    </div>
                    <div class="space-y-4">
                        <span class="text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">Ecosistema // Marketing & Diseño</span>
                        <div class="flex items-center justify-between gap-4">
                            <h2 class="text-2xl font-black tracking-tighter uppercase text-brand-dark leading-none">{{ config('corporate.team.collaborator.name') }}</h2>
                            @if(config('corporate.team.collaborator.linkedin'))
                                <a href="{{ config('corporate.team.collaborator.linkedin') }}" target="_blank" class="opacity-20 hover:opacity-100 transition-opacity">
                                    <svg class="w-4 h-4 fill-brand-dark" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                            @endif
                        </div>
                        <p class="text-sm font-bold text-brand-dark/40">{{ config('corporate.team.collaborator.role') }}</p>
                        <p class="text-sm text-brand-dark/60 font-sans leading-relaxed italic border-l-2 border-brand-dark/10 pl-4 py-1">
                            "{{ config('corporate.team.collaborator.vision') }}"
                        </p>
                        <p class="text-[13px] text-brand-dark/50 leading-relaxed font-sans pr-4">
                            Betopeer lidera la capa de marketing estratégico y diseño visual de nuestros proyectos. Su especialización asegura que la potencia técnica se traduzca en interfaces intuitivas.
                        </p>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </section>

    <!-- Legacy Statement -->
    <section class="py-32 bg-brand-dark text-white text-center px-6">
        <div class="max-w-4xl mx-auto space-y-12">
            <h2 class="text-4xl md:text-6xl font-black tracking-tighter uppercase leading-none">
                CONTINUIDAD <br>
                <span class="text-[#706f6c]">GARANTIZADA.</span>
            </h2>
            <p class="text-brand-white/50 text-base font-sans max-w-2xl mx-auto leading-relaxed">
                En un mercado IT donde las empresas aparecen y desaparecen en meses, en Conycom ofrecemos el valor de la estabilidad. Una transición generacional fluida que asegura que su código hoy será mantenido mañana.
            </p>
        </div>
    </section>
@endsection
