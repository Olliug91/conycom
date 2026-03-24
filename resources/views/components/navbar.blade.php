<nav x-data="{ open: false }" class="bg-corporate-light border-b border-corporate-border sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-28 items-center">
            <!-- Technical Logo -->
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="group">
                    <div class="flex flex-col items-start transition-transform group-hover:scale-[1.02]">
                        @if(file_exists(public_path(config('corporate.logo'))))
                            <img src="{{ asset(config('corporate.logo')) }}" alt="{{ config('corporate.logo_alt') }}" class="{{ config('corporate.logo_height_nav') }} w-auto max-w-[240px] transition-all">
                        @else
                            <span class="text-2xl font-bold tracking-tighter uppercase leading-none">CONYCOM</span>
                            <span class="text-[9px] font-mono uppercase tracking-widest text-[#706f6c] mt-1">v2.0 // SDD-006</span>
                        @endif
                    </div>
                </a>
            </div>

            <!-- Swiss Nav -->
            <div class="hidden sm:flex sm:items-center sm:gap-12">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-brand-dark font-bold underline underline-offset-8' : 'text-[#706f6c] hover:text-brand-dark transition-colors' }} text-xs font-sans uppercase tracking-widest">
                    Inicio
                </a>
                <a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'text-brand-dark font-bold underline underline-offset-8' : 'text-[#706f6c] hover:text-brand-dark transition-colors' }} text-xs font-sans uppercase tracking-widest">
                    Servicios
                </a>
                <a href="{{ route('quienes-somos') }}" class="{{ request()->routeIs('quienes-somos') ? 'text-brand-dark font-bold underline underline-offset-8' : 'text-[#706f6c] hover:text-brand-dark transition-colors' }} text-xs font-sans uppercase tracking-widest">
                    Equipo
                </a>
                <a href="{{ route('proyectos') }}" class="{{ request()->routeIs('proyectos') ? 'text-brand-dark font-bold underline underline-offset-8' : 'text-[#706f6c] hover:text-brand-dark transition-colors' }} text-xs font-sans uppercase tracking-widest">
                    Proyectos
                </a>
                <a href="{{ route('contacto') }}" class="px-8 py-2.5 bg-brand-dark text-brand-white text-[10px] font-mono uppercase tracking-[0.2em] hover:opacity-90 transition-all">
                    Hablemos
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex justify-center items-center sm:hidden">
                <button @click="open = !open" class="text-brand-dark focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" style="display: none;" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="sm:hidden border-t border-corporate-border bg-corporate-light absolute w-full shadow-2xl">
        <div class="p-8 space-y-6">
            <a href="{{ route('home') }}" class="block text-xl font-bold uppercase tracking-tighter {{ request()->routeIs('home') ? 'text-brand-dark' : 'text-[#706f6c]' }}">Inicio</a>
            <a href="{{ route('servicios') }}" class="block text-xl font-bold uppercase tracking-tighter {{ request()->routeIs('servicios') ? 'text-brand-dark' : 'text-[#706f6c]' }}">Servicios</a>
            <a href="{{ route('quienes-somos') }}" class="block text-xl font-bold uppercase tracking-tighter {{ request()->routeIs('quienes-somos') ? 'text-brand-dark' : 'text-[#706f6c]' }}">Equipo</a>
            <a href="{{ route('proyectos') }}" class="block text-xl font-bold uppercase tracking-tighter {{ request()->routeIs('proyectos') ? 'text-brand-dark' : 'text-[#706f6c]' }}">Proyectos</a>
            <a href="{{ route('contacto') }}" class="block w-full text-center py-4 bg-brand-dark text-brand-white font-mono uppercase tracking-widest text-xs">Hablemos de tu Proyecto</a>
        </div>
    </div>
</nav>