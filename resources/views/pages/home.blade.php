@extends('layouts.app')

@section('title', 'Soluciones IT de gran envergadura y agilidad digital')

@section('content')
    <!-- Hero Section: The Bridge (Legacy & Evolution) -->
    <section class="relative bg-black pt-32 pb-24 lg:pt-48 lg:pb-40 overflow-hidden">
        <!-- Grid de fondo "Blueprint" -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-full bg-gradient-to-b from-white/20 via-white/5 to-transparent"></div>
            <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:items-start">
                <!-- Tag Industrial -->
                <div class="inline-flex items-center gap-3 px-3 py-1 border border-white/10 mb-12 animate-fade-in">
                    <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-white/60">Legacy x Innovation | Est. 1994</span>
                </div>

                <div class="max-w-5xl animate-slide-up" style="animation-delay: 0.2s;">
                    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black text-white leading-[0.9] tracking-tighter mb-10">
                        DE ERPs <span class="text-white/20 italic font-light">CRÍTICOS</span> <br>
                        A ECOSISTEMAS <br>
                        DE <span class="bg-white text-black px-4 ml-[-8px]">CÓDIGO IA</span>
                    </h1>
                </div>

                <div class="grid lg:grid-cols-12 gap-12 items-end w-full animate-slide-up" style="animation-delay: 0.4s;">
                    <div class="lg:col-span-7">
                        <p class="text-xl md:text-2xl text-gray-400 font-light leading-relaxed max-w-2xl border-l border-white/10 pl-8">
                            Construimos el futuro sobre 30 años de robustez farmacéutica. De sistemas legados que facturan millones a la agilidad del desarrollo web de alta precisión. <br>
                            <span class="text-white font-medium mt-4 block italic">No creamos webs. Diseñamos infraestructuras digitales.</span>
                        </p>
                    </div>
                    
                    <div class="lg:col-span-5 flex flex-col sm:flex-row gap-4 justify-end">
                        <a href="{{ route('contacto') }}" class="group relative px-12 py-6 bg-white text-black text-xs font-black uppercase tracking-[0.3em] overflow-hidden transition-all hover:pr-16">
                            <span class="relative z-10">Agendar Auditoría</span>
                            <span class="absolute right-6 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all">→</span>
                        </a>
                        <a href="#proyectos" class="px-12 py-6 border border-white/20 text-white text-xs font-black uppercase tracking-[0.3em] hover:bg-white/5 transition-all text-center">
                            Ver Legado
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordenadas Técnicas (Decorative) -->
        <div class="absolute bottom-10 left-10 hidden xl:block">
            <div class="text-[10px] font-mono text-white/20 leading-none tracking-widest uppercase">
                Lat: 39.4699° N <br>
                Lon: 0.3763° W <br>
                C_SYS: CONYCOM_VLU_03
            </div>
        </div>
    </section>

    <!-- Sección: The Shift (Nuestra Evolución) -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <!-- Columna: Narrativa -->
                <div class="space-y-10 animate-slide-up" style="animation-delay: 0.1s;">
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-6xl font-black text-black tracking-tighter leading-none italic uppercase">
                            Del ERP Farmacéutico <br>
                            <span class="text-gray-300">A la Web Proactiva.</span>
                        </h2>
                        <div class="w-24 h-px bg-black opacity-20"></div>
                    </div>
                    
                    <div class="prose prose-xl font-light text-gray-400 space-y-6 max-w-xl">
                        <p class="text-black first-letter:text-6xl first-letter:font-black first-letter:mr-3 first-letter:float-left">
                            Nacimos en un entorno de máxima exigencia: **sistemas críticos que facturan millones**. Con la base de 30 años de experiencia heredada y bajo la visión de un fundador capaz de gestionar en solitario infraestructuras, soporte y marketing, evolucionamos.
                        </p>
                        <p>
                            Dejamos atrás la era del **Visual FoxPro** para abrazar el desarrollo web y móvil de vanguardia. Aplicando el rigor de la **arquitectura técnica** y la precisión de la **fabricación mecánica**, construimos software que no solo funciona, sino que escala.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-8 border-t border-gray-100 pt-10">
                        <div>
                            <div class="text-xs font-black uppercase tracking-widest text-black mb-1">Legacy Power</div>
                            <div class="text-[10px] text-gray-500 font-mono">Mission Critical ERPs vs. Millions of €</div>
                        </div>
                        <div>
                            <div class="text-xs font-black uppercase tracking-widest text-black mb-1">Web Horizon</div>
                            <div class="text-[10px] text-gray-500 font-mono">Laravel • AI APIs • Dynamics Integrations</div>
                        </div>
                    </div>
                </div>

                <!-- Columna: Visual / Metafórica -->
                <div class="relative group animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="aspect-[4/5] bg-gray-50 border border-gray-100 p-12 flex flex-col justify-center relative overflow-hidden transition-all group-hover:bg-black group-hover:text-white duration-700">
                        <!-- Blueprint decorativo -->
                        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent group-hover:via-white/20 transition-all"></div>
                        <div class="absolute inset-y-0 left-0 w-px bg-gradient-to-b from-transparent via-gray-200 to-transparent group-hover:via-white/20 transition-all"></div>
                        
                        <div class="relative z-10 transition-transform group-hover:scale-105 duration-500">
                            <span class="text-[10rem] font-black leading-none italic opacity-5 group-hover:opacity-20 transition-all mb-4 block">1994</span>
                            <h3 class="text-3xl font-black mb-6 tracking-tighter">CONSTRUCCIÓN <br> DIGITAL SIN LÍMITES</h3>
                            <p class="text-lg font-light italic leading-relaxed text-gray-500 group-hover:text-gray-300">
                                "No somos una agencia más de IA genérica. Somos artesanos del código técnico con décadas de veteranía."
                            </p>
                        </div>
                        
                        <!-- Coordenadas decorativas -->
                        <div class="absolute bottom-10 right-10 text-[10px] font-mono opacity-20 group-hover:opacity-50 tracking-tighter">
                            SYS_004_SHIFT // V1.0.3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección: Casos de Impacto Real -->
    <section class="py-32 bg-corporate-light border-y border-gray-100" id="proyectos">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-6">
                <div class="max-w-3xl animate-slide-up">
                    <div class="text-xs font-black uppercase tracking-[0.4em] text-gray-400 mb-6 border-b border-gray-200 inline-block pb-1">Protagonismo Técnico</div>
                    <h2 class="text-5xl md:text-7xl font-black text-black tracking-tighter leading-none">
                        CASOS QUE <br>
                        DEFINEN <span class="italic text-gray-300">VETERANÍA</span>
                    </h2>
                </div>
                <div class="hidden md:block">
                    <p class="text-gray-400 italic font-light max-w-sm text-right leading-relaxed">
                        Soluciones que integran ERPs, webs corporativas y ecosistemas móviles con precisión de relojería.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-px bg-gray-200 border border-gray-200 overflow-hidden">
                <!-- Caso 1: Karate -->
                <div class="bg-white p-12 lg:p-20 group hover:bg-black transition-all duration-700 animate-slide-up" style="animation-delay: 0.1s;">
                    <div class="flex justify-between items-start mb-12">
                        <span class="text-[10px] font-mono p-2 border border-gray-100 text-gray-400 group-hover:border-white/20">001/03</span>
                    </div>
                    <h3 class="text-4xl font-black mb-6 tracking-tighter text-black group-hover:text-white uppercase leading-none">
                        Federación de Karate <br>
                        <span class="text-gray-300 italic font-light group-hover:text-white/40">C. Valenciana</span>
                    </h3>
                    <p class="text-gray-500 group-hover:text-gray-400 mb-12 text-lg font-light leading-relaxed">
                        Implante de un **ERP de gestión administrativa y deportiva integrada**. Centralización de datos federativos bajo un motor de alta disponibilidad.
                    </p>
                    <ul class="space-y-2 mb-12">
                        <li class="flex items-center gap-3 text-xs font-black uppercase tracking-widest text-black group-hover:text-white/60">
                            <span class="w-1 h-[2px] bg-black group-hover:bg-white"></span> Custom ERP Engine
                        </li>
                        <li class="flex items-center gap-3 text-xs font-black uppercase tracking-widest text-black group-hover:text-white/60">
                            <span class="w-1 h-[2px] bg-black group-hover:bg-white"></span> Gestión Federativa
                        </li>
                    </ul>
                </div>

                <!-- Caso 2: Nuevo Centro -->
                <div class="bg-white p-12 lg:p-20 group hover:bg-black transition-all duration-700 animate-slide-up" style="animation-delay: 0.2s;">
                    <div class="flex justify-between items-start mb-12">
                        <span class="text-[10px] font-mono p-2 border border-gray-100 text-gray-400 group-hover:border-white/20">002/03</span>
                    </div>
                    <h3 class="text-4xl font-black mb-6 tracking-tighter text-black group-hover:text-white uppercase leading-none">
                        CC Nuevo Centro <br>
                        <span class="text-gray-300 italic font-light group-hover:text-white/40">Digital Ecosystem</span>
                    </h3>
                    <p class="text-gray-500 group-hover:text-gray-400 mb-12 text-lg font-light leading-relaxed">
                        Página web corporativa avanzada con integraciones críticas de e-commerce y sincronización en tiempo real con **Microsoft Dynamics**.
                    </p>
                    <ul class="space-y-2 mb-12">
                        <li class="flex items-center gap-3 text-xs font-black uppercase tracking-widest text-black group-hover:text-white/60">
                            <span class="w-1 h-[2px] bg-black group-hover:bg-white"></span> Dynamics Integration
                        </li>
                        <li class="flex items-center gap-3 text-xs font-black uppercase tracking-widest text-black group-hover:text-white/60">
                            <span class="w-1 h-[2px] bg-black group-hover:bg-white"></span> Full E-commerce Sync
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Legacy Support Footer (Dentro de la sección) -->
            <div class="mt-24 pt-12 border-t border-gray-200 animate-fade-in" style="animation-delay: 0.4s;">
                <div class="flex flex-col md:flex-row gap-12 items-center justify-between">
                    <div>
                        <h4 class="text-xs font-black uppercase tracking-widest text-black mb-2 italic">Legacy Support + Evolution</h4>
                        <p class="text-[10px] font-mono leading-tight opacity-40 max-w-sm">
                            VFP Legacy Engine // ERP Sector Farma // High Volume Billing (Standard: €M)
                        </p>
                    </div>
                    <a href="{{ route('servicios') }}" class="text-xs font-black uppercase tracking-[0.3em] border-b-2 border-black pb-1 hover:text-gray-400 hover:border-gray-200 transition-all">
                        Explorar área técnica →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Prueba Social Monocroma -->
    <section class="py-32 bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-16 text-center">
                <div>
                    <div class="text-6xl font-black mb-4 tracking-tighter italic">30+</div>
                    <div class="text-white/40 font-bold uppercase tracking-[0.3em] text-[10px]">Años de experiencia</div>
                </div>
                <div>
                    <div class="text-6xl font-black mb-4 tracking-tighter italic">500+</div>
                    <div class="text-white/40 font-bold uppercase tracking-[0.3em] text-[10px]">Proyectos</div>
                </div>
                <div>
                    <div class="text-6xl font-black mb-4 tracking-tighter italic">99.9%</div>
                    <div class="text-white/40 font-bold uppercase tracking-[0.3em] text-[10px]">Uptime</div>
                </div>
                <div>
                    <div class="text-6xl font-black mb-4 tracking-tighter italic">24/7</div>
                    <div class="text-white/40 font-bold uppercase tracking-[0.3em] text-[10px]">Soporte</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final Monocromo -->
    <section class="py-32 bg-white border-y border-black/5">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-5xl font-black tracking-tighter mb-8">¿HABLAMOS?</h2>
            <p class="text-xl text-gray-500 font-light mb-12">Nuestro equipo senior está listo para analizar su infraestructura sin compromiso.</p>
            <a href="{{ route('contacto') }}" class="inline-block px-12 py-5 bg-black text-white text-sm font-black uppercase tracking-widest hover:bg-gray-900 transition-all shadow-xl">
                Agendar Auditoría Gratuita
            </a>
        </div>
    </section>
@endsection
