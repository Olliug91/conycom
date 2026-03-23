<footer class="bg-corporate-light text-brand-dark pt-24 pb-12 border-t border-corporate-border">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-24">
            
            <!-- Technical Info -->
            <div class="col-span-1 md:col-span-1">
                <a href="{{ route('home') }}" class="mb-8 block">
                    <div class="flex flex-col items-start">
                        @if(file_exists(public_path(config('corporate.logo'))))
                            <img src="{{ asset(config('corporate.logo')) }}" alt="{{ config('corporate.logo_alt') }}" class="{{ config('corporate.logo_height_footer') }} w-auto max-w-[200px] opacity-80 hover:opacity-100 transition-opacity">
                        @else
                            <span class="text-2xl font-bold tracking-tighter uppercase leading-none">CONYCOM</span>
                            <span class="text-[9px] font-mono uppercase tracking-widest text-[#706f6c] mt-1">Connectivity & Communications</span>
                        @endif
                    </div>
                </a>
                <p class="text-[#706f6c] text-[11px] font-mono uppercase tracking-widest leading-relaxed max-w-xs">
                    Technical Bedrock since 1996. Dedicated to mission-critical infrastructure and digital agility.
                </p>
            </div>

            <!-- Links -->
            <div class="flex flex-col gap-6">
                <h3 class="text-[10px] font-mono uppercase tracking-[0.3em] text-[#706f6c]">Navigation</h3>
                <ul class="space-y-4 text-[11px] font-mono uppercase tracking-widest font-bold">
                    <li><a href="{{ route('home') }}" class="hover:underline underline-offset-4 transition-colors">Inicio</a></li>
                    <li><a href="{{ route('servicios') }}" class="hover:underline underline-offset-4 transition-colors">Servicios</a></li>
                    <li><a href="{{ route('proyectos') }}" class="hover:underline underline-offset-4 transition-colors">Proyectos</a></li>
                    <li><a href="{{ route('contacto') }}" class="hover:underline underline-offset-4 transition-colors">Auditoría</a></li>
                </ul>
            </div>

            <!-- Solutions -->
            <div class="flex flex-col gap-6">
                <h3 class="text-[10px] font-mono uppercase tracking-[0.3em] text-[#706f6c]">Services</h3>
                <ul class="space-y-4 text-[11px] font-mono uppercase tracking-widest opacity-60">
                    <li>Infraestructura IT</li>
                    <li>Desarrollo Laravel</li>
                    <li>Consultoría Enterprise</li>
                    <li>Soporte Especializado</li>
                </ul>
            </div>

            <!-- Meta / Location -->
            <div class="flex flex-col gap-6">
                <h3 class="text-[10px] font-mono uppercase tracking-[0.3em] text-[#706f6c]">System Meta</h3>
                <div class="space-y-4 text-[10px] font-mono text-[#706f6c] leading-tight">
                    <div>
                        <span class="block opacity-40">LOCATION:</span>
                        <span class="font-bold uppercase">{{ config('corporate.city') }}, ES // {{ config('corporate.zip') }}</span>
                    </div>
                    <div>
                        <span class="block opacity-40">CONTACT:</span>
                        <a href="mailto:{{ config('corporate.email') }}" class="font-bold hover:underline transition-all">{{ config('corporate.email') }}</a>
                    </div>
                    <div>
                        <span class="block opacity-40">STATUS:</span>
                        <span class="flex items-center gap-2 font-bold uppercase">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-dark animate-pulse"></span>
                            Operational
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pt-8 border-t border-corporate-border flex flex-col md:flex-row justify-between items-center text-[9px] font-mono uppercase tracking-[0.2em] text-[#706f6c]">
            <p>&copy; {{ date('Y') }} {{ config('corporate.name') }}. ALL RIGHTS RESERVED.</p>
            <div class="flex space-x-8 mt-6 md:mt-0">
                <a href="{{ route('legal.privacidad') }}" class="hover:text-brand-dark transition-colors">Privacy</a>
                <a href="{{ route('legal.aviso') }}" class="hover:text-brand-dark transition-colors">Legal</a>
                <a href="{{ route('legal.cookies') }}" class="hover:text-brand-dark transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>

</footer>