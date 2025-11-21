@extends('layouts.app')

@section('content')
<!-- Página ExpoTur 2026 -->
<div class="w-full min-h-screen">
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1763693960/Web_Site-Expotur2026_20251030_mmce79.png',
        'heroTitle' => '',
        'heroSubtitle' => '',
        'showEventInfo' => false,
        'activeTab' => 'expotur'
    ])

    <!-- Sección Información General -->
    <section class="mt-16 mx-4 lg:mx-16">
        <div class="bg-white rounded-[2.5rem]  px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">
                
                <!-- Header con título y botón -->
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12">
                    <h2 class="text-[#045e7c] text-4xl lg:text-5xl font-bold mb-6 lg:mb-0">
                        {{ __('messages.sellers.title') }}
                    </h2>
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        {{ __('messages.common.download_datasheet') }}
                    </button>
                </div>
                
                <!-- Grid de Información Principal -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 mb-12 border-t-[3px] border-[#045e7c]">
                    
                    <!-- Columna Izquierda - Labels con degradado redondeado -->
                    <div class="lg:col-span-3 bg-gradient-to-b from-[#4EAAA8] via-[#045e7c] to-[#08254f] rounded-b-[6rem] p-8 text-white relative">
                        <!-- Fecha -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.date_label') }}</p>
                        </div>
                        
                        <!-- Sede -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.venue_label') }}</p>
                        </div>
                        
                        <!-- Edición -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.edition_label') }}</p>
                        </div>
                        
                        <!-- Inicio -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.start_label') }}</p>
                        </div>
                        
                        <!-- Frecuencia -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.frequency_label') }}</p>
                        </div>
                        
                        <!-- Enfoque -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.focus_label') }}</p>
                        </div>
                        
                        <!-- Carácter -->
                        <div class="mb-8">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.character_label') }}</p>
                        </div>
                        
                        <!-- Resumen -->
                        <div>
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.summary_label') }}</p>
                        </div>
                    </div>
                    
                    <!-- Columna Derecha - Valores -->
                    <div class="lg:col-span-9 bg-white p-8 space-y-6">
                        <!-- Línea superior -->
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.date_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.venue_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.edition_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.start_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.frequency_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.focus_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                {{ __('messages.sellers.character_value') }}
                            </p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                {{ __('messages.sellers.summary_value') }}
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- ¿Qué es Expotur? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.what_is_expotur') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        {!! __('messages.sellers.what_is_expotur_text') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Edición 2026 -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        {{ __('messages.sellers.edition_2026') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.sellers.edition_2026_text') !!}
                    </p>
                </div>

                <!-- Barra Azul Final -->
                <div class="bg-[#08254f] rounded-2xl py-8 px-8 mb-12 text-center shadow-lg">
                    <h3 class="text-white text-4xl lg:text-5xl font-bold">
                        {{ __('messages.sellers.slogan') }}
                    </h3>
                </div>
                
                <!-- ¿Quiénes exponen? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.who_exhibits') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {{ __('messages.sellers.who_exhibits_text') }}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Networking -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.networking') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.sellers.networking_text') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Trayectoria - Innovación - Comercialización -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        {{ __('messages.sellers.trajectory_title') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.sellers.trajectory_text') !!}
                    </p>
                </div>
                
                <!-- Botón centrado -->
                <div class="text-center">
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-12 rounded-full text-xl transition-all shadow-lg">
                        {{ __('messages.common.download_datasheet') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
