<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Nuevo Logo Corporativo (Imagen) -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="py-4">
                    @if(file_exists(public_path('images/logo.png')))
                        <img src="{{ asset('images/logo.png') }}" alt="Conycom Logo" class="h-14 w-auto">
                    @else
                        <!-- Placeholder técnico si el archivo aún no existe -->
                        <div class="flex flex-col items-start">
                            <span class="text-3xl font-extrabold tracking-tighter uppercase leading-none">CONYCOM</span>
                            <span class="text-[9px] uppercase tracking-[0.3em] font-medium text-gray-500 mt-1">Conectividad y Comunicaciones</span>
                        </div>
                    @endif
                </a>
            </div>

            <!-- Menú de Escritorio (Estilo B/N High-Tech) -->
            <div class="hidden sm:flex sm:items-center sm:gap-10">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-black font-extrabold border-b-2 border-black' : 'text-gray-500 hover:text-black transition-colors' }} pb-1 text-sm uppercase tracking-widest">
                    Inicio
                </a>
                <a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'text-black font-extrabold border-b-2 border-black' : 'text-gray-500 hover:text-black transition-colors' }} pb-1 text-sm uppercase tracking-widest">
                    Servicios
                </a>
                <a href="{{ route('proyectos') }}" class="{{ request()->routeIs('proyectos') ? 'text-black font-extrabold border-b-2 border-black' : 'text-gray-500 hover:text-black transition-colors' }} pb-1 text-sm uppercase tracking-widest">
                    Proyectos
                </a>
                <a href="{{ route('contacto') }}" class="px-6 py-2 bg-black text-white text-sm font-bold uppercase tracking-widest hover:bg-gray-800 transition-all shadow-lg">
                    Auditoría
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex justify-center items-center sm:hidden">
                <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" style="display: none;" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" style="display: none;" class="sm:hidden border-t border-gray-100 bg-white shadow-lg absolute w-full">
        <div class="pt-2 pb-4 space-y-1">
            <a href="{{ route('home') }}" class="block pl-3 pr-4 py-3 border-l-4 {{ request()->routeIs('home') ? 'border-electric-blue text-electric-blue bg-blue-50' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-electric-blue' }}">
                Inicio
            </a>
            <a href="{{ route('servicios') }}" class="block pl-3 pr-4 py-3 border-l-4 {{ request()->routeIs('servicios') ? 'border-electric-blue text-electric-blue bg-blue-50' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-electric-blue' }}">
                Servicios
            </a>
            <a href="{{ route('proyectos') }}" class="block pl-3 pr-4 py-3 border-l-4 {{ request()->routeIs('proyectos') ? 'border-electric-blue text-electric-blue bg-blue-50' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-electric-blue' }}">
                Proyectos
            </a>
            <div class="px-4 pt-4 pb-2">
                <a href="{{ route('contacto') }}" class="block w-full text-center px-4 py-2 bg-electric-blue text-white font-medium rounded hover:bg-electric-blue-hover transition-colors">
                    Solicitar Auditoría
                </a>
            </div>
        </div>
    </div>
</nav>