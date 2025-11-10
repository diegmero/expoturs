<!-- Footer Global -->
<footer id="footer" class="mx-2 sm:mx-4 mt-8 sm:mt-16 mb-4">
    <div class="bg-white rounded-[2.5rem] shadow-lg overflow-hidden">
        
        <!-- Sección Superior - Logos -->
        <div class="bg-white px-4 sm:px-8 lg:px-16 py-6 sm:py-8 lg:py-12">
            <div class="max-w-7xl mx-auto">
                
                <!-- Grid de 3 Columnas con Separadores Verticales -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 md:gap-0 items-start">
                    
                    <!-- Columna 1: ORGANIZED BY -->
                    <div class="text-center relative">
                        <p class="text-[#08254f] font-bold text-xs sm:text-sm mb-4 sm:mb-6 tracking-wider">{{ __('messages.footer.organized_by') }}</p>
                        <div class="flex justify-center">
                            <img src="{{ asset('img/SVG/LogoAcoprot.svg') }}" alt="ACOPROT" class="h-16 sm:h-20 lg:h-24 object-contain">
                        </div>
                        <!-- Separador vertical derecho -->
                        <div class="hidden md:block absolute right-0 top-0 bottom-0 w-px bg-gray-300"></div>
                    </div>
                    
                    <!-- Columna 2: STRATEGIC SUPPORT -->
                    <div class="text-center relative">
                        <p class="text-[#08254f] font-bold text-xs sm:text-sm mb-4 sm:mb-6 tracking-wider">{{ __('messages.footer.strategic_support') }}</p>
                        <div class="flex justify-center">
                            <img src="{{ asset('img/SVG/logoWilliam.svg') }}" alt="William H. Coleman, Inc." class="h-12 sm:h-14 lg:h-16 object-contain">
                        </div>
                        <!-- Separador vertical derecho -->
                        <div class="hidden md:block absolute right-0 top-0 bottom-0 w-px bg-gray-300"></div>
                    </div>
                    
                    <!-- Columna 3: Logo Somos Esencial Costa Rica -->
                    <div class="text-center">
                        <div class="flex justify-center mt-4 sm:mt-6 lg:mt-8">
                            <img src="{{ asset('img/SVG/LogoCostaRica.svg') }}" alt="Somos Esencial Costa Rica" class="h-16 sm:h-20 lg:h-24 object-contain">
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
        <!-- Barra Inferior - Contacto y Redes Sociales -->
        <div class="bg-[#08254f] px-4 sm:px-8 lg:px-16 py-4 sm:py-6 lg:py-8">
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-4 sm:gap-6">
                    
                    <!-- Información de Contacto -->
                    <div class="text-center lg:text-left">
                        <p class="text-white text-sm sm:text-base lg:text-lg xl:text-xl font-medium">
                            {{ __('messages.footer.contact_us') }} | 
                            <a href="mailto:info@expotur.com" class="hover:text-blue-300 transition-colors">info@expotur.com</a> | 
                            <a href="https://wa.me/50670182132" target="_blank" rel="noopener noreferrer" class="hover:text-blue-300 transition-colors">+506 7018-2132</a>
                        </p>
                    </div>
                    
                    <!-- Separador vertical (solo visible en lg+) -->
                    <div class="hidden lg:block w-px h-12 bg-white/100"></div>
                    
                    <!-- Redes Sociales -->
                    <div class="flex items-center gap-3 sm:gap-4">
                        <!-- Instagram -->
                        <a href="#" class="text-white hover:text-blue-300 transition-colors">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        
                        <!-- Facebook -->
                        <a href="#" class="text-white hover:text-blue-300 transition-colors">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        
                        <!-- LinkedIn -->
                        <a href="#" class="text-white hover:text-blue-300 transition-colors">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                    
                </div>
                
                <!-- Línea de créditos -->
                <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 text-center">
                    <p class="text-white/80 text-sm sm:text-base lg:text-lg">
                        {{ __('messages.footer.made_with_love') }} <span class="text-white-400">♥</span> {{ __('messages.footer.by') }} Inventivaestudio.com
                    </p>
                </div>
                
            </div>
        </div>
        
    </div>
</footer>
