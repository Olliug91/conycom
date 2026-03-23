<section x-data="{ 
    step: 0, 
    answers: { infra: 0, pain: 0, frequency: 0, goal: 0 }, 
    get score() { 
        return Math.min(100, Math.round((this.answers.infra + this.answers.pain + this.answers.frequency + this.answers.goal) * 1.5));
    },
    get diagnosis() {
        if (this.score < 40) return { title: 'Riesgo de Obsolescencia Alto', desc: 'Sus sistemas están actuando como un freno para el crecimiento. Necesita una modernización estructural urgente para no perder competitividad.', action: 'Solicitar Auditoría Crítica' };
        if (this.score < 75) return { title: 'Optimización Necesaria', desc: 'Tiene una base sólida pero con fricciones importantes. Modernizar procesos clave liberará recursos para innovar.', action: 'Hablemos de Optimización' };
        return { title: 'Potencial de Escabilidad', desc: 'Sus sistemas son modernos. Es el momento de integrar IA y automatización para despegarse de la competencia.', action: 'Potenciar con IA' };
    }
}" class="py-24 bg-corporate-gray border-y border-brand-dark/5 scroll-mt-20" id="diagnostico">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="text-[10px] font-mono uppercase tracking-[0.4em] text-[#706f6c]">Interactive Tool // v1.0</span>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tighter uppercase text-brand-dark leading-none">
                DIAGNÓSTICO DE <br>
                <span class="text-[#706f6c]">AGILIDAD DIGITAL.</span>
            </h2>
        </div>

        <div class="bg-white border border-brand-dark/10 p-8 md:p-16 relative overflow-hidden min-h-[500px] flex flex-col justify-center shadow-sm">
            
            <!-- Progress Bar -->
            <div class="absolute top-0 left-0 w-full h-1 bg-brand-dark/5">
                <div class="h-full bg-brand-dark transition-all duration-700" :style="`width: ${step * 25}%`" x-show="step > 0 && step < 5"></div>
            </div>

            <!-- Step 0: Intro -->
            <div x-show="step === 0" x-transition class="space-y-8 text-center">
                <p class="text-lg text-brand-dark/70 font-sans max-w-xl mx-auto leading-relaxed">
                    Descubra en menos de 2 minutos qué tan preparados están sus sistemas actuales para las demandas del mercado 2026.
                </p>
                <button @click="step = 1" class="px-12 py-5 bg-brand-dark text-brand-white text-[10px] font-mono uppercase tracking-[0.3em] hover:scale-105 transition-all">
                    Iniciar Diagnóstico
                </button>
            </div>

            <!-- Step 1: Infra -->
            <div x-show="step === 1" x-transition class="space-y-8">
                <h3 class="text-2xl font-bold tracking-tight uppercase text-brand-dark">01. ¿Cuál es el estado de su infraestructura principal?</h3>
                <div class="grid gap-4">
                    <button @click="answers.infra = 10; step = 2" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Sistemas Heredados (e.g. FoxPro, On-premise)</span>
                        <span class="text-xs text-[#706f6c]">Mantenimiento complejo y difícil integración.</span>
                    </button>
                    <button @click="answers.infra = 20; step = 2" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Ecosistema Híbrido (Web + ERPs Locales)</span>
                        <span class="text-xs text-[#706f6c]">Operativo pero con silos de información.</span>
                    </button>
                    <button @click="answers.infra = 30; step = 2" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Cloud-Native / Moderno (Laravel, APIs)</span>
                        <span class="text-xs text-[#706f6c]">Preparado para integraciones dinámicas.</span>
                    </button>
                </div>
            </div>

            <!-- Step 2: Frecuencia de Problemas -->
            <div x-show="step === 2" x-transition class="space-y-8">
                <h3 class="text-2xl font-bold tracking-tight uppercase text-brand-dark">02. ¿Con qué frecuencia detecta errores de sincronización o bloqueos?</h3>
                <div class="grid gap-4">
                    <button @click="answers.frequency = 5; step = 3" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Diariamente</span>
                        <span class="text-xs text-[#706f6c]">Impacto crítico en la operación diaria.</span>
                    </button>
                    <button @click="answers.frequency = 15; step = 3" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Semanalmente</span>
                        <span class="text-xs text-[#706f6c]">Fricciones puntuales que ralentizan al equipo.</span>
                    </button>
                    <button @click="answers.frequency = 25; step = 3" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Rara vez</span>
                        <span class="text-xs text-[#706f6c]">Estabilidad general con incidentes aislados.</span>
                    </button>
                </div>
            </div>

            <!-- Step 3: Mayor Dolor -->
            <div x-show="step === 3" x-transition class="space-y-8">
                <h3 class="text-2xl font-bold tracking-tight uppercase text-brand-dark">03. ¿Cuál es su principal barrera tecnológica hoy?</h3>
                <div class="grid gap-4">
                    <button @click="answers.pain = 5; step = 4" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Incapacidad de Innovar</span>
                        <span class="text-xs text-[#706f6c]">Lentitud para implementar nuevas funciones.</span>
                    </button>
                    <button @click="answers.pain = 10; step = 4" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Alto Coste de Mantenimiento</span>
                        <span class="text-xs text-[#706f6c]">Invertimos más en arreglar que en crear.</span>
                    </button>
                    <button @click="answers.pain = 15; step = 4" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Falta de Escalabilidad</span>
                        <span class="text-xs text-[#706f6c]">Miedo a que el sistema falle si crecemos.</span>
                    </button>
                </div>
            </div>

            <!-- Step 4: Objetivo -->
            <div x-show="step === 4" x-transition class="space-y-8">
                <h3 class="text-2xl font-bold tracking-tight uppercase text-brand-dark">04. ¿Dónde quiere centrar su inversión técnica este año?</h3>
                <div class="grid gap-4">
                    <button @click="answers.goal = 10; step = 5" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Automatización Completa</span>
                    </button>
                    <button @click="answers.goal = 20; step = 5" class="p-6 border border-brand-dark/10 hover:border-brand-dark transition-all text-left group">
                        <span class="block font-bold text-brand-dark group-hover:translate-x-2 transition-transform uppercase">Escalabilidad de Negocio</span>
                    </button>
                </div>
            </div>

            <!-- Result -->
            <div x-show="step === 5" x-transition class="space-y-12 text-center">
                <div class="space-y-4">
                    <div class="text-[64px] font-black tracking-tighter leading-none text-brand-dark">
                        <span x-text="score"></span>%
                    </div>
                    <div class="text-xs font-mono uppercase tracking-[0.3em] text-[#706f6c]">Score de Agilidad Digital</div>
                </div>

                <div class="space-y-4 max-w-md mx-auto">
                    <h3 class="text-2xl font-bold uppercase tracking-tight" x-text="diagnosis.title"></h3>
                    <p class="text-sm text-brand-dark/70 leading-relaxed font-sans" x-text="diagnosis.desc"></p>
                </div>

                <div class="pt-8">
                    <a :href="`{{ route('contacto') }}?servicio=AUDITORÍA TÉCNICA&mensaje=Mi score de Agilidad Digital es ${score}%. El diagnóstico es: ${diagnosis.title}. Deseo agendar una auditoría.`" 
                       class="inline-block px-12 py-5 bg-brand-dark text-brand-white text-[10px] font-mono uppercase tracking-[0.3em] hover:scale-105 transition-all shadow-xl" 
                       x-text="diagnosis.action"></a>
                    <button @click="step = 0" class="block mx-auto mt-6 text-[9px] font-mono uppercase tracking-widest text-[#706f6c] hover:text-brand-dark">Reiniciar Test</button>
                </div>
            </div>

        </div>

        <div class="mt-8 flex justify-center gap-12 font-mono text-[9px] text-[#706f6c] uppercase tracking-widest">
            <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-brand-dark rounded-full"></span>
                Resultado Instantáneo
            </div>
            <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-brand-dark rounded-full"></span>
                Sin Datos Personales
            </div>
        </div>
    </div>
</section>
