<div class="relative w-full rounded-[2.5rem] overflow-hidden shadow-lg" wire:poll.5s="nextSlide">
    <!-- Slider Container -->
    <div class="relative h-[500px] lg:h-[600px] overflow-hidden">
        
        @foreach($slides as $index => $imageUrl)
        <div class="absolute inset-0 transition-opacity duration-1000 {{ $currentSlide === $index ? 'opacity-100' : 'opacity-0' }}">
            <img src="{{ $imageUrl }}" alt="Slide {{ $index + 1 }}" class="w-full h-full object-cover">
        </div>
        @endforeach
        
        <!-- Botón Anterior -->
        <button 
            wire:click="previousSlide"
            class="absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 shadow-lg transition-all"
            aria-label="Anterior">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        
        <!-- Botón Siguiente -->
        <button 
            wire:click="nextSlide"
            class="absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 shadow-lg transition-all"
            aria-label="Siguiente">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
        
        <!-- Indicadores -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 flex gap-2">
            @foreach($slides as $index => $imageUrl)
            <div class="w-2 h-2 rounded-full transition-all {{ $currentSlide === $index ? 'bg-white w-8' : 'bg-white/50' }}"></div>
            @endforeach
        </div>
        
    </div>
    
    <!-- Barra Azul Inferior -->
    <div class="bg-[#1E3A5F] py-8 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-4xl lg:text-5xl font-bold">
                <span class="text-[#5AB8B6]">¡PURA VIDA!</span>
                <span class="text-white"> ¡PUROS NEGOCIOS!</span>
            </h3>
        </div>
    </div>
    
</div>
