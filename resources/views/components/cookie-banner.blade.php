<div x-data="{ 
        show: !localStorage.getItem('cookies_accepted'),
        accept() {
            localStorage.setItem('cookies_accepted', 'true');
            this.show = false;
        }
    }" 
    x-show="show"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    class="fixed bottom-0 left-0 w-full z-[100] p-6"
    style="display: none;">
    
    <div class="max-w-4xl mx-auto bg-brand-dark text-white p-6 md:p-8 flex flex-col md:flex-row items-center gap-8 border border-white/10 shadow-2xl">
        <div class="flex-1 space-y-2">
            <h4 class="text-xs font-mono uppercase tracking-[0.2em]">Data Privacy // v1.0</h4>
            <p class="text-xs text-white/70 font-sans leading-relaxed">
                Utilizamos cookies propias y de terceros para mejorar su experiencia y analizar el tráfico de navegación. Si continúa navegando, consideramos que acepta su uso conforme a nuestra <a href="{{ route('legal.cookies') }}" class="underline decoration-white/20 hover:decoration-white transition-all">Política de Cookies</a>.
            </p>
        </div>
        <div class="flex gap-4 shrink-0">
            <button @click="accept()" class="px-8 py-3 bg-white text-brand-dark text-[10px] font-mono uppercase tracking-widest hover:bg-white/90 transition-all">
                ACEPTAR
            </button>
        </div>
    </div>
</div>
