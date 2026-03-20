<footer class="bg-corporate-darker text-white pt-16 pb-8 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 lg:gap-8 mb-12">
            
            <!-- Brand & Info Estilo Monocromo -->
            <div class="col-span-1 md:col-span-1">
                <a href="{{ route('home') }}" class="mb-6 block">
                    @if(file_exists(public_path('images/logo.png')))
                        <img src="{{ asset('images/logo.png') }}" alt="Conycom Logo" class="h-12 w-auto brightness-0 invert">
                    @else
                        <div class="flex flex-col items-start text-white">
                            <span class="text-2xl font-extrabold tracking-tighter uppercase leading-none">CONYCOM</span>
                            <span class="text-[8px] uppercase tracking-[0.2em] font-medium text-gray-400 mt-1">Conectividad y Comunicaciones</span>
                        </div>
                    @endif
                </a>
                <p class="text-gray-400 text-sm mb-6 max-w-xs leading-relaxed">
                    Más de 30 años ofreciendo soluciones tecnológicas robustas para empresas y pymes con agilidad y precisión.
                </p>
                <div class="flex space-x-4">
                    <!-- Social Links Placeholders -->
                    <a href="#" class="text-gray-400 hover:text-electric-blue transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-electric-blue transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h3 class="text-white font-semibold mb-4 tracking-wider text-sm uppercase">Empresa</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Sobre Nosotros</a></li>
                    <li><a href="{{ route('servicios') }}" class="text-gray-400 hover:text-white transition-colors">Nuestros Servicios</a></li>
                    <li><a href="{{ route('proyectos') }}" class="text-gray-400 hover:text-white transition-colors">Casos de Éxito</a></li>
                    <li><a href="{{ route('contacto') }}" class="text-gray-400 hover:text-white transition-colors">Contacto</a></li>
                </ul>
            </div>

            <!-- Servicios -->
            <div>
                <h3 class="text-white font-semibold mb-4 tracking-wider text-sm uppercase">Soluciones</h3>
                <ul class="space-y-3 text-sm">
                    <li><span class="text-gray-400">Infraestructura IT</span></li>
                    <li><span class="text-gray-400">Desarrollo a Medida</span></li>
                    <li><span class="text-gray-400">Consultoría Enterprise</span></li>
                    <li><span class="text-gray-400">Soporte Técnico Especializado</span></li>
                </ul>
            </div>

            <!-- Contact Focus -->
            <div>
                <h3 class="text-white font-semibold mb-4 tracking-wider text-sm uppercase">Hablemos</h3>
                <p class="text-sm text-gray-400 mb-4">
                    ¿Listo para optimizar la tecnología de su empresa?
                </p>
                <div class="space-y-2 mb-4">
                    <p class="text-sm flex items-center text-gray-300">
                        <svg class="w-4 h-4 mr-2 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        +34 900 123 456
                    </p>
                    <p class="text-sm flex items-center text-gray-300">
                        <svg class="w-4 h-4 mr-2 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        contacto@conycom.es
                    </p>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} Conectividad y Comunicaciones S.L. Todos los derechos reservados.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Política de Privacidad</a>
                <a href="#" class="hover:text-white transition-colors">Aviso Legal</a>
                <a href="#" class="hover:text-white transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>