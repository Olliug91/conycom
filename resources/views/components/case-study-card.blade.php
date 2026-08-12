@props(['case'])

<div class="bg-brand-dark text-white p-8 lg:p-16 border-b border-white/10 flex flex-col md:flex-row gap-12 lg:gap-24 group">
    <!-- Left Column: Title & Context -->
    <div class="md:w-1/3 flex flex-col justify-between">
        <div class="space-y-6">
            <span class="inline-block px-3 py-1 bg-white/10 text-[9px] font-mono uppercase tracking-widest border border-white/20">
                CASE_STUDY: {{ $case['id'] }}
            </span>
            <h3 class="text-4xl lg:text-5xl font-black tracking-tighter uppercase leading-[0.9]">
                {{ $case['title'] }}
            </h3>
            <p class="text-white/60 font-sans text-sm leading-relaxed">
                {{ $case['context'] }}
            </p>
        </div>
        
        <div class="mt-12">
            <p class="text-[10px] font-mono uppercase tracking-[0.3em] text-white/40 mb-4">Tech Stack</p>
            <div class="flex flex-wrap gap-2">
                @foreach($case['stack'] as $tech)
                    <span class="px-2 py-1 border border-white/20 text-[9px] font-mono uppercase tracking-widest text-white/80">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Right Column: Challenge, Solution, Impact -->
    <div class="md:w-2/3 space-y-12 border-l border-white/10 md:pl-12 lg:pl-24">
        <div>
            <h4 class="text-xl font-bold tracking-tighter uppercase mb-4 text-white">El Reto Arquitectónico</h4>
            <p class="text-white/70 font-sans text-sm leading-relaxed">
                {{ $case['challenge'] }}
            </p>
        </div>

        <div>
            <h4 class="text-xl font-bold tracking-tighter uppercase mb-4 text-white">La Solución en Laravel</h4>
            <p class="text-white/70 font-sans text-sm leading-relaxed">
                {{ $case['solution'] }}
            </p>
        </div>

        <div class="bg-white/5 border border-white/10 p-6 md:p-8">
            <h4 class="text-[10px] font-mono uppercase tracking-[0.3em] text-white/40 mb-6">Métricas de Impacto</h4>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($case['impact'] as $metric => $value)
                    <div>
                        <div class="text-2xl md:text-3xl font-black tracking-tighter mb-1">{{ $value }}</div>
                        <div class="text-[9px] font-mono uppercase text-white/50 tracking-widest">{{ $metric }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
