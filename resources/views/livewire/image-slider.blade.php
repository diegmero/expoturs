<div class="relative w-full overflow-hidden shadow-lg" wire:poll.5s="nextSlide">
    <!-- Slider Container -->
    <div class="relative h-[400px] sm:h-[500px] lg:h-[600px] overflow-hidden">
        
        @foreach($slides as $index => $slide)
        <div class="absolute inset-0 transition-opacity duration-1000 {{ $currentSlide === $index ? 'opacity-100' : 'opacity-0' }}">
            @if($slide['image'])
                <img src="{{ $slide['image'] }}" alt="{{ $slide['text_es'] }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full bg-gradient-to-br from-teal-500 to-blue-600"></div>
            @endif
            
            <!-- Overlay con texto centrado -->
            <div class="absolute inset-0 flex items-center justify-center bg-black/20">
                <div class="text-center text-white px-2 sm:px-4">
                    <h2 class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl font-normal tracking-wider uppercase">
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-1 sm:gap-2 lg:gap-4">
                            <span>{{ $slide['text_es'] }}</span>
                            <span class="hidden sm:inline sm:text-xl lg:text-2xl xl:text-4xl font-light">|</span>
                            <span class="text-sm sm:text-lg lg:text-xl xl:text-3xl font-light">{{ $slide['text_en'] }}</span>
                        </div>
                    </h2>
                </div>
            </div>
        </div>
        @endforeach
        
        <!-- Botón Anterior -->
        <button 
            wire:click="previousSlide"
            class="absolute left-2 sm:left-4 lg:left-8 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-2 sm:p-3 shadow-lg transition-all"
            aria-label="Anterior">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        
        <!-- Botón Siguiente -->
        <button 
            wire:click="nextSlide"
            class="absolute right-2 sm:right-4 lg:right-8 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-2 sm:p-3 shadow-lg transition-all"
            aria-label="Siguiente">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
        
        <!-- Indicadores -->
        <div class="absolute bottom-4 sm:bottom-6 left-1/2 -translate-x-1/2 z-10 flex gap-1 sm:gap-2">
            @foreach($slides as $index => $imageUrl)
            <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full transition-all {{ $currentSlide === $index ? 'bg-white w-4 sm:w-6 lg:w-8' : 'bg-white/50' }}"></div>
            @endforeach
        </div>
        
    </div>
    
    <!-- Barra Azul Inferior -->
    <div class="bg-[#08254f] py-6 sm:py-8 px-4 sm:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-white">
                ¡PURA VIDA...PUROS NEGOCIOS!
            </h3>
        </div>
    </div>
    
</div>
