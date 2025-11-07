{{-- 
    Componente Hero con Navegación Flotante
    Parámetros:
    - $heroImage: Ruta de la imagen hero
    - $heroTitle: Título principal (opcional)
    - $heroSubtitle: Subtítulo (opcional)
    - $showEventInfo: Mostrar información del evento (fecha/lugar) - default: true
    - $activeTab: Pestaña activa ('expotur', 'sellers', 'buyer', 'contact') - default: 'buyer'
--}}

@props([
    'heroImage' => 'img/WEB/header_Home.webp',
    'heroTitle' => 'WHERE OPPORTUNITIES BECOME BUSINESS!',
    'heroSubtitle' => 'Pura Vida',
    'showEventInfo' => true,
    'activeTab' => 'buyer'
])

<div class="relative w-full">
    <!-- Hero Section con imagen de fondo -->
    <section class="mx-2 sm:mx-4 overflow-hidden relative" 
             style="background: linear-gradient(90deg, #FF6B35 0%, #FFA07A 25%, #FFD4A3 50%, #B8E0E0 75%, #7EC8E3 100%);">
        
        <!-- Imagen Hero -->
        <div class="w-full">
            <img src="{{ asset($heroImage) }}" alt="{{ $heroTitle }}" class="w-full h-auto object-cover">
        </div>
        
        <!-- Información del evento (fecha y lugar) -->
        @if($showEventInfo)
        <div class="bg-[#08254f] pt-4 sm:pt-5 pb-8 sm:pb-25 px-4 sm:px-8 lg:px-16">
            <div class="max-w-7xl mx-auto flex flex-col sm:flex-wrap items-center justify-between gap-4 sm:gap-6 text-white">
                
                <!-- Fecha -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 text-[#5AB8B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                        <line x1="16" y1="2" x2="16" y2="6" stroke-width="2" stroke-linecap="round"/>
                        <line x1="8" y1="2" x2="8" y2="6" stroke-width="2" stroke-linecap="round"/>
                        <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                    </svg>
                    <span class="text-sm sm:text-2xl font-light tracking-wide text-center">MAY 27-29, 2026</span>
                </div>
                
                <!-- Ubicación -->
                <div class="flex items-center gap-2 sm:gap-3 pb-5">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 text-[#5AB8B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-width="2"/>
                        <circle cx="12" cy="10" r="3" stroke-width="2"/>
                    </svg>
                    <span class="text-xs sm:text-2xl font-light tracking-wide text-center">CROWNE PLAZA SAN JOSÉ LA SABANA HOTEL</span>
                </div>
                
            </div>
        </div>
        @endif
        
    </section>

<!-- Menú de Navegación Flotante -->
<div class="relative -mt-8 sm:-mt-12 mx-2 sm:mx-4 lg:mx-16 z-10 mb-8 sm:mb-20">
    <!-- Contenedor principal del menú con sombra -->
    <div class="bg-gradient-to-b from-white to-gray-100 rounded-[1rem] shadow-2xl h-16 sm:h-24 overflow-visible">
        <!-- Grid de navegación responsive -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 relative h-full p-1">
            
            <!-- EXPOTUR 2026 -->
            <div class="flex items-center justify-center relative h-full">
                <a href="{{ route('expotur.2026') }}" 
                class="group absolute inset-x-1 sm:inset-x-2 inset-y-0 flex items-center justify-center text-[#08254f] font-bold transition-all duration-300 ease-out text-center rounded-2xl text-xs sm:text-lg lg:text-xl
                        {{ $activeTab === 'expotur' ? 'bg-gradient-to-r from-[#E67E22] to-[#D35400] text-white shadow-2xl scale-y-[1.4] sm:scale-y-[1.6] origin-center z-30' : 'hover:bg-gradient-to-r hover:from-[#E67E22] hover:to-[#D35400] hover:text-white hover:shadow-2xl hover:scale-y-[1.4] sm:hover:scale-y-[1.6] hover:origin-center hover:z-20 z-10' }}">
                    <span class="px-1 sm:px-2 inline-block {{ $activeTab === 'expotur' ? 'scale-y-[0.71] sm:scale-y-[0.625]' : 'group-hover:scale-y-[0.71] sm:group-hover:scale-y-[0.625]' }}">EXPOTUR 2026</span>
                </a>
            </div>
            
            <!-- SELLERS INFO -->
            <div class="flex items-center justify-center relative h-full">
                <!-- Separador vertical izquierdo (solo visible en sm+) -->
                <div class="hidden sm:block absolute left-0 top-1/2 transform -translate-y-1/2 w-px h-6 sm:h-8 bg-gray-300 z-0"></div>
                
                <a href="{{ route('sellers.info') }}" 
                   class="group absolute inset-x-1 sm:inset-x-2 inset-y-0 flex items-center justify-center text-[#08254f] font-bold transition-all duration-300 ease-out text-center rounded-2xl text-xs sm:text-lg lg:text-xl
                          {{ $activeTab === 'sellers' ? 'bg-gradient-to-r from-[#E67E22] to-[#D35400] text-white shadow-2xl scale-y-[1.4] sm:scale-y-[1.6] origin-center z-30' : 'hover:bg-gradient-to-r hover:from-[#E67E22] hover:to-[#D35400] hover:text-white hover:shadow-2xl hover:scale-y-[1.4] sm:hover:scale-y-[1.6] hover:origin-center hover:z-20 z-10' }}">
                    <span class="px-1 sm:px-2 inline-block transition-transform duration-300 {{ $activeTab === 'sellers' ? 'scale-y-[0.71] sm:scale-y-[0.625]' : 'group-hover:scale-y-[0.71] sm:group-hover:scale-y-[0.625]' }}">SELLERS INFO</span>
                </a>
            </div>
            
            <!-- BE A BUYER -->
            <div class="flex items-center justify-center relative h-full">
                <a href="{{ route('buyer') }}" 
                   class="group absolute inset-x-1 sm:inset-x-2 inset-y-0 flex items-center justify-center text-[#08254f] font-bold transition-all duration-300 ease-out text-center rounded-2xl text-xs sm:text-lg lg:text-xl
                          {{ $activeTab === 'buyer' ? 'bg-gradient-to-r from-[#E67E22] to-[#D35400] text-white shadow-2xl scale-y-[1.4] sm:scale-y-[1.6] origin-center z-30' : 'hover:bg-gradient-to-r hover:from-[#E67E22] hover:to-[#D35400] hover:text-white hover:shadow-2xl hover:scale-y-[1.4] sm:hover:scale-y-[1.6] hover:origin-center hover:z-20 z-10' }}">
                    <span class="px-1 sm:px-2 inline-block transition-transform duration-300 {{ $activeTab === 'buyer' ? 'scale-y-[0.71] sm:scale-y-[0.625]' : 'group-hover:scale-y-[0.71] sm:group-hover:scale-y-[0.625]' }}">BE A BUYER</span>
                </a>
            </div>
            
            <!-- CONTACT US -->
            <div class="flex items-center justify-center relative h-full">
                <!-- Separador vertical izquierdo (solo visible en sm+) -->
                <div class="hidden sm:block absolute left-0 top-1/2 transform -translate-y-1/2 w-px h-6 sm:h-8 bg-gray-300 z-0"></div>
                
                <a href="#footer" 
                   onclick="event.preventDefault(); document.getElementById('footer').scrollIntoView({ behavior: 'smooth' });"
                   class="group absolute inset-x-1 sm:inset-x-2 inset-y-0 flex items-center justify-center text-[#08254f] font-bold transition-all duration-300 ease-out text-center rounded-2xl text-xs sm:text-lg lg:text-xl
                          {{ $activeTab === 'contact' ? 'bg-gradient-to-r from-[#E67E22] to-[#D35400] text-white shadow-2xl scale-y-[1.4] sm:scale-y-[1.6] origin-center z-30' : 'hover:bg-gradient-to-r hover:from-[#E67E22] hover:to-[#D35400] hover:text-white hover:shadow-2xl hover:scale-y-[1.4] sm:hover:scale-y-[1.6] hover:origin-center hover:z-20 z-10' }}">
                    <span class="px-1 sm:px-2 inline-block transition-transform duration-300 {{ $activeTab === 'contact' ? 'scale-y-[0.71] sm:scale-y-[0.625]' : 'group-hover:scale-y-[0.71] sm:group-hover:scale-y-[0.625]' }}">CONTACT US</span>
                </a>
            </div>
            
        </div>
    </div>
</div>
</div>
