@extends('layouts.app')

@section('title', 'Soluciones IT de gran envergadura y agilidad digital')

@section('content')
    <!-- Hero Section: Agilidad + Escabilidad -->
    <section class="border-b border-corporate-border overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 min-h-[75vh]">
            
            <!-- Innovation Pillar -->
            <div class="p-8 lg:p-16 bg-corporate-gray border-b lg:border-b-0 lg:border-r border-corporate-border flex flex-col justify-between group transition-all duration-700">
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <span class="text-[10px] font-mono uppercase tracking-[0.3em] text-[#706f6c]">Digital Evolution // Est. 1996</span>
                        <div class="h-px flex-1 bg-brand-dark/10"></div>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold tracking-tighter leading-[0.85] text-brand-dark">
                        AGILIDAD PARA<br>INNOVAR.
                    </h1>
                    <p class="text-base text-brand-dark/80 leading-relaxed max-w-sm font-sans">
                        Transformamos ideas complejas en soluciones digitales rápidas y efectivas. Ayudamos a su empresa a moverse a la velocidad que el mercado demanda hoy.
                    </p>
                </div>
                
                <div class="mt-12 flex items-center gap-2 font-mono text-[10px] text-[#706f6c]">
                    <span>[ READY_TO_BUILD ]</span>
                    <span class="animate-pulse">_</span>
                </div>
            </div>

            <!-- Scalability Pillar -->
            <div class="p-8 lg:p-16 flex flex-col justify-between bg-white group hover:bg-brand-dark transition-all duration-700">
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <span class="text-[10px] font-mono uppercase tracking-[0.3em] text-[#706f6c] group-hover:text-white/40">Reliable Systems // 2026</span>
                        <div class="h-px flex-1 bg-corporate-border group-hover:bg-white/10"></div>
                        <span class="w-2 h-2 rounded-full bg-brand-dark animate-ping group-hover:bg-white"></span>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-bold tracking-tighter leading-[0.85] text-brand-dark group-hover:text-white transition-colors uppercase">
                        SOLIDEZ PARA<br>ESCALAR.
                    </h2>
                    <p class="text-base text-brand-dark/80 group-hover:text-white/80 leading-relaxed max-w-sm font-sans transition-colors">
                        No solo creamos webs; proyectamos la infraestructura técnica que su negocio necesita para crecer sin límites y con absoluta seguridad.
                    </p>
                </div>

                <div class="mt-12 flex flex-wrap gap-4">
                    <a href="{{ route('contacto') }}" class="px-8 py-3 bg-brand-dark text-brand-white text-[10px] font-mono uppercase tracking-widest hover:opacity-90 transition-all border border-brand-dark group-hover:bg-white group-hover:text-brand-dark group-hover:border-white">
                        Impulsa tu Negocio
                    </a>
                    <a href="#proyectos" class="px-8 py-3 border border-brand-dark text-brand-dark text-[10px] font-mono uppercase tracking-widest hover:bg-brand-dark hover:text-brand-white transition-all group-hover:border-white group-hover:text-white group-hover:hover:bg-white group-hover:hover:text-brand-dark">
                        Ver Soluciones
                    </a>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Section: Trusted By (Spec-011) -->
    <section class="py-12 bg-white border-b border-brand-dark/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12 grayscale opacity-40 hover:opacity-100 opacity-transition duration-700 overflow-hidden">
                <span class="text-[9px] font-mono uppercase tracking-[0.3em] text-[#706f6c] border-r border-brand-dark/10 pr-8 hidden lg:block">Trusted by</span>
                <div class="flex flex-wrap justify-center lg:justify-between items-center gap-x-12 gap-y-8 flex-1">
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">Disfarsor</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">CC Nuevo Centro</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">Industrias Saludes</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">F. Karate CV</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">Betopeer</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">Fitness Fabra</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">BasicSoft</span>
                    <span class="text-xs font-black tracking-tighter uppercase whitespace-nowrap">Veribridge</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Evolución Digital -->
    <section id="evolucion" class="py-24 bg-brand-dark text-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-24 items-start">
                
                <!-- Narrative -->
                <div class="space-y-12">
                    <div class="flex items-center gap-4">
                        <span class="text-[10px] font-mono uppercase tracking-[0.3em] text-white/40">01 // Tu Evolución</span>
                        <div class="h-px w-12 bg-white/20"></div>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tighter leading-none uppercase">
                        SU PRÓXIMO <br>
                        <span class="text-white/40">PASO DIGITAL.</span>
                    </h2>
                    <div class="space-y-6 text-white/70 leading-relaxed text-base max-w-lg font-sans">
                        <p>
                            En Conycom, no solo resolvemos problemas técnicos; desbloqueamos el potencial de su negocio. Nos apasiona construir soluciones ágiles que eliminen fricciones y permitan a su equipo centrarse en lo que mejor sabe hacer.
                        </p>
                        <p>
                            Nuestra metodología combina la rapidez del desarrollo moderno con una **disciplina de ingeniería de alta precisión**. Esta mentalidad constructiva nos permite proyectar estructuras digitales que no solo funcionan hoy, sino que están preparadas para lo que venga mañana.
                        </p>
                    </div>
                </div>

                <!-- Technical Stats -->
                <div class="border border-white/10 p-8 lg:p-12 space-y-12 bg-white/5">
                    <div class="grid grid-cols-2 gap-12">
                        <div>
                            <span class="block text-[10px] font-mono uppercase tracking-widest text-white/40 mb-4">Metodología</span>
                            <span class="text-4xl font-bold tracking-tighter italic">SDD</span>
                            <span class="block text-[9px] font-mono uppercase mt-2 opacity-60">Spec-Driven Development</span>
                        </div>
                        <div>
                            <span class="block text-[10px] font-mono uppercase tracking-widest text-white/40 mb-4">Disciplina</span>
                            <span class="text-2xl font-bold tracking-tighter leading-tight">Ingeniería<br>Digital</span>
                            <span class="block text-[9px] font-mono uppercase mt-2 opacity-60">Sistemas</span>
                        </div>
                    </div>
                    <div class="pt-12 border-t border-white/10">
                        <p class="text-sm font-sans text-white/60 leading-relaxed italic">
                            "Construimos con la mentalidad de quien sabe que los cimientos lo son todo."
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section: Casos de Impacto -->
    <section class="py-24 bg-corporate-gray scroll-mt-20" id="proyectos">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 border-b border-brand-dark/10 pb-12">
                <div class="space-y-4">
                    <span class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c]">02 // Proyectos</span>
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tighter leading-none uppercase text-brand-dark">
                        INGENIERÍA <br>
                        <span class="text-[#706f6c]">DE PRECISIÓN.</span>
                    </h2>
                </div>
                <div class="flex flex-col items-end gap-4">
                    <p class="text-brand-dark/60 font-sans text-sm max-w-sm text-right leading-relaxed">
                        Infraestructuras digitales que integran ERPs, ecosistemas proactivos y auditorías técnicas con un rigor metodológico absoluto.
                    </p>
                    <a href="{{ route('proyectos') }}" class="text-[10px] font-mono uppercase tracking-widest text-brand-dark hover:underline underline-offset-8">Ver Portafolio Completo →</a>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-px bg-brand-dark/5 border border-brand-dark/10 overflow-hidden">
                @foreach($featuredProjects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section: Meta Stats -->
    <section class="py-24 bg-corporate-light border-y border-brand-dark/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                <div class="space-y-2">
                    <div class="text-4xl md:text-5xl font-bold tracking-tighter">30+</div>
                    <div class="text-brand-dark/40 font-mono uppercase tracking-widest text-[9px]">Años Exper.</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl md:text-5xl font-bold tracking-tighter">500+</div>
                    <div class="text-brand-dark/40 font-mono uppercase tracking-widest text-[9px]">Activos IT</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl md:text-5xl font-bold tracking-tighter">99.9%</div>
                    <div class="text-brand-dark/40 font-mono uppercase tracking-widest text-[9px]">Precisión</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl md:text-5xl font-bold tracking-tighter">24/7</div>
                    <div class="text-brand-dark/40 font-mono uppercase tracking-widest text-[9px]">Soporte</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Ecosistema de Precisión y Automatización (Spec-010 V2) -->
    <section class="py-24 bg-white border-b border-brand-dark/5 relative overflow-hidden">
        <!-- Technical Grid Background -->
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none" style="background-image: radial-gradient(#000 0.5px, transparent 0.5px); background-size: 20px 20px;"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-24 space-y-4">
                <span class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c]">03 // Metodología</span>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tighter uppercase text-brand-dark">INGENIERÍA DE CICLO COMPLETO</h2>
                <div class="h-1 w-12 bg-brand-dark mx-auto mt-6"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-16 lg:gap-24">
                <!-- Pillar 1: SDD -->
                <div class="flex gap-8 group">
                    <div class="w-16 h-16 shrink-0 border border-brand-dark/10 flex items-center justify-center group-hover:bg-brand-dark group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold tracking-tight text-brand-dark uppercase">Spec-Driven Development</h3>
                        <p class="text-brand-dark/60 text-sm leading-relaxed font-sans max-w-sm">
                            <span class="font-bold text-brand-dark text-[10px] block mb-1 uppercase tracking-wider">Planificación de Precisión</span>
                            Eliminamos la improvisación mediante especificaciones técnicas rigurosas antes del código. Entregas 2x más rápidas y alineadas al negocio.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2: Connectivity -->
                <div class="flex gap-8 group">
                    <div class="w-16 h-16 shrink-0 border border-brand-dark/10 flex items-center justify-center group-hover:bg-brand-dark group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold tracking-tight text-brand-dark uppercase">Arquitectura Conectada</h3>
                        <p class="text-brand-dark/60 text-sm leading-relaxed font-sans max-w-sm">
                            <span class="font-bold text-brand-dark text-[10px] block mb-1 uppercase tracking-wider">Backend & APIs</span>
                            Especialistas en Laravel. Construimos el cerebro de su sistema, unificando datos fragmentados en una infraestructura robusta y escalable.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3: Multi-platform -->
                <div class="flex gap-8 group">
                    <div class="w-16 h-16 shrink-0 border border-brand-dark/10 flex items-center justify-center group-hover:bg-brand-dark group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold tracking-tight text-brand-dark uppercase">Movilidad Nativa</h3>
                        <p class="text-brand-dark/60 text-sm leading-relaxed font-sans max-w-sm">
                            <span class="font-bold text-brand-dark text-[10px] block mb-1 uppercase tracking-wider">iOS + Android + Web</span>
                            Mediante Ionic, desplegamos aplicaciones de alto rendimiento con una sola base de código, garantizando presencia total con eficiencia máxima.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4: Automation (NEW) -->
                <div class="flex gap-8 group">
                    <div class="w-16 h-16 shrink-0 border border-brand-dark/10 flex items-center justify-center group-hover:bg-brand-dark group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a2 2 0 01-2-2V5a2 2 0 012-2h4z"></path>
                        </svg>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold tracking-tight text-brand-dark uppercase">Orquestación Automatizada</h3>
                        <p class="text-brand-dark/60 text-sm leading-relaxed font-sans max-w-sm">
                            <span class="font-bold text-brand-dark text-[10px] block mb-1 uppercase tracking-wider">Integración con n8n</span>
                            Automatizamos sus procesos de negocio conectando su núcleo Laravel con herramientas externas (CRM, Slack, AI) a través de flujos inteligentes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Diagnostic Tool (NEW) -->
    <x-digital-agility-quiz />

    <!-- Section: Trayectoria de Precisión (Spec-012) -->
    <section class="py-32 bg-white overflow-hidden border-t border-brand-dark/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start mb-24 gap-12">
                <div class="max-w-xl">
                    <span class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c] mb-6 block">04 // Continuidad</span>
                    <h2 class="text-4xl md:text-6xl font-black tracking-tighter leading-none uppercase text-brand-dark mb-8">
                        28 AÑOS DE <br>
                        <span class="text-[#706f6c]">INGENIERÍA REAL.</span>
                    </h2>
                    <p class="text-brand-dark/70 font-sans text-base leading-relaxed">
                        No somos una agencia estacional. Somos una estructura técnica que ha evolucionado con la industria, manteniendo la misma obsesión por la fiabilidad desde el primer día.
                    </p>
                </div>
            </div>

            <div class="relative">
                <!-- Timeline Line SVG -->
                <div class="absolute top-1/2 left-0 w-full h-px bg-brand-dark/10 hidden md:block"></div>
                
                <div class="grid md:grid-cols-3 gap-12 relative z-10">
                    <!-- Milestone 1996 -->
                    <div class="group">
                        <div class="mb-12 md:mb-0">
                            <span class="text-4xl font-black font-mono tracking-tighter text-brand-dark/20 group-hover:text-brand-dark transition-colors duration-500">1996</span>
                            <div class="w-3 h-3 bg-brand-dark rounded-full my-6 hidden md:block border-4 border-white ring-1 ring-brand-dark mx-auto md:mx-0"></div>
                            <h3 class="text-lg font-bold tracking-tight uppercase mb-4">Los Cimientos</h3>
                            <p class="text-sm text-brand-dark/60 font-sans leading-relaxed">
                                Fundación de Conycom. Desarrollo de sistemas de gestión críticos bajo **Visual FoxPro**. Construyendo la base de la fiabilidad industrial.
                            </p>
                        </div>
                    </div>

                    <!-- Milestone 2010s -->
                    <div class="group">
                        <div class="mb-12 md:mb-0">
                            <span class="text-4xl font-black font-mono tracking-tighter text-brand-dark/20 group-hover:text-brand-dark transition-colors duration-500">2010s</span>
                            <div class="w-3 h-3 bg-brand-dark rounded-full my-6 hidden md:block border-4 border-white ring-1 ring-brand-dark"></div>
                            <h3 class="text-lg font-bold tracking-tight uppercase mb-4">La Evolución Web</h3>
                            <p class="text-sm text-brand-dark/60 font-sans leading-relaxed">
                                Transición a arquitecturas web escalables e integración de los primeros ecosistemas de conectividad para el sector empresarial.
                            </p>
                        </div>
                    </div>

                    <!-- Milestone Hoy -->
                    <div class="group">
                        <div class="mb-12 md:mb-0">
                            <span class="text-4xl font-black font-mono tracking-tighter text-brand-dark/20 group-hover:text-brand-dark transition-colors duration-500">Hoy</span>
                            <div class="w-3 h-3 bg-brand-dark rounded-full my-6 hidden md:block border-4 border-white ring-1 ring-brand-dark"></div>
                            <h3 class="text-lg font-bold tracking-tight uppercase mb-4">Precisión Total</h3>
                            <p class="text-sm text-brand-dark/60 font-sans leading-relaxed">
                                Liderando con **Laravel, Ionic y n8n**. Metodología **SDD** para una ejecución sin fricción y una automatización proactiva.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: CTA Final -->
    <section class="py-32 bg-white relative overflow-hidden">
        <!-- Abstract Pattern -->
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(0deg, transparent 24%, #000 25%, #000 26%, transparent 27%, transparent 74%, #000 75%, #000 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, #000 25%, #000 26%, transparent 27%, transparent 74%, #000 75%, #000 76%, transparent 77%, transparent); background-size: 50px 50px;"></div>
        
        <div class="max-w-4xl mx-auto px-6 text-center space-y-12 relative z-10">
            <div class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c]">05 // Hablemos</div>
            <h2 class="text-5xl md:text-8xl font-black tracking-tighter uppercase leading-none">IMPULSAMOS <br> SU ÉXITO.</h2>
            <p class="text-brand-dark/60 font-sans text-lg max-w-xl mx-auto leading-relaxed">
                ¿Preparado para llevar su infraestructura digital al siguiente nivel? Diseñamos el camino, construimos la solución y le acompañamos en el crecimiento.
            </p>
            <div class="pt-6">
                <a href="{{ route('contacto') }}" class="inline-block px-12 py-5 bg-brand-dark text-brand-white text-[10px] font-mono uppercase tracking-[0.3em] hover:scale-105 transition-all shadow-2xl">
                    Comenzar Ahora
                </a>
            </div>
        </div>
    </section>
@endsection
