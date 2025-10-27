<div class="relative w-full rounded-[2.5rem] overflow-hidden shadow-lg" x-data="{ autoplay: true }" x-init="
    setInterval(() => {
        if (autoplay) {
            $wire.nextSlide();
        }
    }, 5000);
">
    <!-- Slider Container -->
    <div class="relative h-[500px] lg:h-[600px] overflow-hidden">
        
        @foreach($slides as $index => $slide)
        <div class="absolute inset-0 transition-opacity duration-1000 {{ $currentSlide === $index ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
            <!-- Imagen de Fondo -->
            <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover">
            
            <!-- Overlay Oscuro -->
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
            
            <!-- Título Centrado -->
            <div class="absolute inset-0 flex items-center justify-center z-20">
                <h2 class="text-white font-bold text-5xl lg:text-7xl tracking-widest text-center px-4">
                    {{ $slide['title'] }}
                </h2>
            </div>
        </div>
        @endforeach
        
        <!-- Botón Anterior -->
        <button 
            wire:click="previousSlide"
            @click="autoplay = false"
            class="absolute left-8 top-1/2 -translate-y-1/2 z-30 bg-white hover:bg-gray-100 rounded-full p-4 shadow-lg transition-all hover:scale-110"
            aria-label="Anterior">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        
        <!-- Botón Siguiente -->
        <button 
            wire:click="nextSlide"
            @click="autoplay = false"
            class="absolute right-8 top-1/2 -translate-y-1/2 z-30 bg-white hover:bg-gray-100 rounded-full p-4 shadow-lg transition-all hover:scale-110"
            aria-label="Siguiente">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
        
        <!-- Indicadores de Puntos (opcional) -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 flex gap-3">
            @foreach($slides as $index => $slide)
            <button 
                wire:click="goToSlide({{ $index }})"
                @click="autoplay = false"
                class="w-3 h-3 rounded-full transition-all {{ $currentSlide === $index ? 'bg-white scale-125' : 'bg-white/50 hover:bg-white/75' }}"
                aria-label="Ir a slide {{ $index + 1 }}">
            </button>
            @endforeach
        </div>
        
    </div>
    
    <!-- Barra Azul Inferior con Texto -->
    <div class="bg-[#1E3A5F] py-8 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-4xl lg:text-5xl font-bold">
                <span class="text-[#5AB8B6]">¡PURA VIDA!</span>
                <span class="text-white"> ¡PUROS NEGOCIOS!</span>
            </h3>
        </div>
    </div>
    
</div>
