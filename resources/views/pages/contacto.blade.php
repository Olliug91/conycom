@extends('layouts.app')

@section('title', 'Contacto y Auditoría Técnica')

@section('content')    <section class="py-32 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-24 items-start">
                
                <!-- Contact Info B/N -->
                <div class="space-y-16">
                    <div>
                        <h1 class="text-6xl font-black text-black tracking-tighter mb-8 uppercase leading-none">HABLEMOS</h1>
                        <p class="text-xl text-gray-500 mb-12 leading-relaxed font-light italic">
                            Planifiquemos su próximo despliegue crítico con la solvencia de tres décadas de experiencia.
                        </p>
                    </div>

                    <div class="space-y-12">
                        <div class="flex items-start gap-8">
                            <div class="w-16 h-16 bg-black flex items-center justify-center text-white shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-black text-black text-xs uppercase tracking-[.3em] mb-2">SEDE CORPORATIVA</h3>
                                <p class="text-gray-500 font-light">Av. de la Tecnología, 12, Planta 4<br>Valencia, España</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-8">
                            <div class="w-16 h-16 bg-black flex items-center justify-center text-white shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-black text-black text-xs uppercase tracking-[.3em] mb-2">DIGITAL HUB</h3>
                                <p class="text-gray-500 font-light">contacto@conycom.es<br>soporte@conycom.es</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form B/N -->
                <div class="bg-black p-10 lg:p-16 relative overflow-hidden shadow-[0_40px_80px_rgba(0,0,0,0.15)]" x-data="{ submitted: {{ session('success') ? 'true' : 'false' }} }">
                    <div x-show="!submitted">
                        <h2 class="text-3xl font-black mb-10 text-white tracking-tighter uppercase">AGENDAR AUDITORÍA</h2>
                        <form action="{{ route('contacto.enviar') }}" method="POST" class="space-y-8">
                            @csrf
                            <div class="space-y-6">
                                <div>
                                    <label class="block text-[10px] font-black text-white/50 mb-3 uppercase tracking-widest">Nombre Completo</label>
                                    <input type="text" name="nombre" required class="w-full px-0 py-3 bg-transparent border-b border-white/20 text-white focus:border-white outline-none transition-all placeholder:text-white/10" placeholder="JUAN PÉREZ">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-white/50 mb-3 uppercase tracking-widest">Email Corporativo</label>
                                    <input type="email" name="email" required class="w-full px-0 py-3 bg-transparent border-b border-white/20 text-white focus:border-white outline-none transition-all placeholder:text-white/10" placeholder="JUAN@EMPRESA.COM">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-white/50 mb-3 uppercase tracking-widest">Servicio</label>
                                    <select class="w-full px-0 py-3 bg-transparent border-b border-white/20 text-white/50 focus:border-white focus:text-white outline-none transition-all appearance-none cursor-pointer">
                                        <option class="bg-black">AUDITORÍA TÉCNICA</option>
                                        <option class="bg-black">DESARROLLO LARAVEL</option>
                                        <option class="bg-black">INFRAESTRUCTURA IT</option>
                                        <option class="bg-black">CIBERSEGURIDAD</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-white/50 mb-3 uppercase tracking-widest">Mensaje</label>
                                    <textarea name="mensaje" rows="4" required class="w-full px-0 py-3 bg-transparent border-b border-white/20 text-white focus:border-white outline-none transition-all placeholder:text-white/10 resize-none" placeholder="CUÉNTENOS SU NECESIDAD..."></textarea>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-5 bg-white text-black font-black uppercase tracking-[0.2em] hover:bg-gray-200 transition-all text-xs">
                                ENVIAR SOLICITUD
                            </button>
                        </form>
                    </div>

                    <!-- Success Message B/N -->
                    <div x-show="submitted" class="text-center py-12 text-white" style="display: none;">
                        <div class="w-20 h-20 border border-white/20 flex items-center justify-center mx-auto mb-8 animate-pulse">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h2 class="text-4xl font-black mb-6 tracking-tighter uppercase">RECIBIDO</h2>
                        <p class="text-white/50 mb-10 max-w-xs mx-auto font-light leading-relaxed">Analizaremos su caso y le contactaremos en menos de 24 horas.</p>
                        <button @click="submitted = false" class="text-[10px] font-black uppercase tracking-widest hover:text-white text-white/40 border-b border-white/20 pb-1">Nueva Solicitud</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
              </div>
                </div>
            </div>
        </div>
    </section>
@endsection
